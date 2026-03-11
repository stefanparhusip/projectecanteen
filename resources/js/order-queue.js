/**
 * order-queue.js
 *
 * Offline-first order queue using localStorage as a persistent store.
 *
 * Flow:
 *   1. User taps "Pesan" → optimistic UI shown instantly
 *   2. App tries to POST to server (with idempotency_key)
 *   3a. Online & OK  → redirect to order detail page
 *   3b. Online & err → show server error, keep in queue for manual retry
 *   3c. Offline       → enqueue to localStorage, Service Worker will replay
 *
 * Each queue entry:
 *   {
 *     id:              string  (UUID v4 — used as idempotency_key)
 *     break_time_id:   number
 *     items:           [{menu_id, quantity}]
 *     note:            string|null
 *     estimated_total: number
 *     created_at:      ISO string
 *     attempts:        number
 *     last_error:      string|null
 *   }
 */

const QUEUE_KEY = 'usk_order_queue';
const MAX_ATTEMPTS = 5;

// ── UUID v4 generator (no deps) ──────────────────────────────────────────────
function uuidv4() {
    if (crypto && crypto.randomUUID) return crypto.randomUUID();
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, c => {
        const r = (Math.random() * 16) | 0;
        return (c === 'x' ? r : (r & 0x3) | 0x8).toString(16);
    });
}

// ── Queue persistence ────────────────────────────────────────────────────────
function loadQueue() {
    try {
        return JSON.parse(localStorage.getItem(QUEUE_KEY) || '[]');
    } catch {
        return [];
    }
}

function saveQueue(queue) {
    localStorage.setItem(QUEUE_KEY, JSON.stringify(queue));
}

function enqueue(entry) {
    const queue = loadQueue();
    queue.push(entry);
    saveQueue(queue);
    dispatchQueueEvent('enqueued', entry);
}

function dequeue(id) {
    const queue = loadQueue().filter(e => e.id !== id);
    saveQueue(queue);
    dispatchQueueEvent('dequeued', { id });
}

function updateEntry(id, patch) {
    const queue = loadQueue().map(e => e.id === id ? { ...e, ...patch } : e);
    saveQueue(queue);
}

function getPendingQueue() {
    return loadQueue().filter(e => e.attempts < MAX_ATTEMPTS);
}

// ── Custom event for UI integration ─────────────────────────────────────────
function dispatchQueueEvent(type, detail) {
    window.dispatchEvent(new CustomEvent('orderQueue:' + type, { detail }));
}

// ── Build FormData / JSON payload from a queue entry ────────────────────────
function buildPayload(entry, csrfToken) {
    const data = new FormData();
    data.append('_token', csrfToken || document.querySelector('meta[name="csrf-token"]')?.content || '');
    data.append('break_time_id', entry.break_time_id);
    data.append('idempotency_key', entry.id); // UUID doubles as idempotency key
    if (entry.note) data.append('note', entry.note);
    entry.items.forEach((item, i) => {
        data.append(`items[${i}][menu_id]`, item.menu_id);
        data.append(`items[${i}][quantity]`, item.quantity);
    });
    return data;
}

// ── Main: submit one entry to the server ────────────────────────────────────
async function submitEntry(entry, csrfToken) {
    const payload = buildPayload(entry, csrfToken);
    const url     = '/orders';

    updateEntry(entry.id, { attempts: entry.attempts + 1, last_error: null });

    const response = await fetch(url, {
        method:  'POST',
        headers: { 'Accept': 'application/json', 'X-CSRF-TOKEN': csrfToken },
        body:    payload,
    });

    if (response.ok) {
        const json = await response.json();
        dequeue(entry.id);
        dispatchQueueEvent('submitted', { entry, json });
        return { ok: true, json };
    }

    // 422 = validation / business logic error (don't retry further if reached max)
    const text = await response.text().catch(() => '');
    let errorMsg = `HTTP ${response.status}`;
    try { errorMsg = JSON.parse(text).message || errorMsg; } catch { /* raw text */ }

    updateEntry(entry.id, { last_error: errorMsg, attempts: (entry.attempts + 1) });
    dispatchQueueEvent('failed', { entry, error: errorMsg, status: response.status });
    return { ok: false, error: errorMsg, status: response.status };
}

// ── Flush the whole queue (called by SW sync event and online listener) ──────
async function flushQueue(csrfToken) {
    const pending = getPendingQueue();
    if (pending.length === 0) return { processed: 0, failed: 0 };

    let processed = 0, failed = 0;
    for (const entry of pending) {
        try {
            const result = await submitEntry(entry, csrfToken);
            result.ok ? processed++ : failed++;
        } catch (err) {
            updateEntry(entry.id, { last_error: err.message, attempts: (entry.attempts + 1) });
            failed++;
        }
    }
    return { processed, failed };
}

// ── Optimistic submit: show UI immediately, try server, queue if offline ─────
async function optimisticSubmit({ breakTimeId, items, note, estimatedTotal, csrfToken, onOptimistic, onSuccess, onError, onQueued }) {
    const entry = {
        id:              uuidv4(),
        break_time_id:   breakTimeId,
        items:           items,
        note:            note || null,
        estimated_total: estimatedTotal,
        created_at:      new Date().toISOString(),
        attempts:        0,
        last_error:      null,
    };

    // 1. Immediate optimistic feedback
    if (onOptimistic) onOptimistic(entry);

    if (!navigator.onLine) {
        // Offline: queue immediately
        enqueue(entry);
        if (onQueued) onQueued(entry);
        // Tell SW to register a background sync
        if ('serviceWorker' in navigator && navigator.serviceWorker.controller) {
            navigator.serviceWorker.controller.postMessage({
                type:    'QUEUE_ORDER',
                payload: entry,
            });
        }
        return;
    }

    // 2. Try direct POST
    enqueue(entry); // enqueue first so SW can pick it up if tab closes mid-flight
    try {
        const result = await submitEntry(entry, csrfToken);
        if (result.ok) {
            if (onSuccess) onSuccess(result.json);
        } else {
            if (onError) onError(result.error, result.status);
        }
    } catch (networkErr) {
        // Fetch itself threw (network down despite navigator.onLine being true)
        updateEntry(entry.id, { last_error: networkErr.message });
        if (onQueued) onQueued(entry);
    }
}

// ── Public API ───────────────────────────────────────────────────────────────
export {
    uuidv4,
    loadQueue,
    getPendingQueue,
    enqueue,
    dequeue,
    flushQueue,
    optimisticSubmit,
    submitEntry,
    QUEUE_KEY,
    MAX_ATTEMPTS,
};
