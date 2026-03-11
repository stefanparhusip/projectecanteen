/**
 * sw.js  —  Service Worker for USK E-Canteen
 *
 * Features:
 *  1. Cache-first for static assets (CSS, images, fonts) — fast loads
 *  2. Network-first for HTML pages — always fresh content
 *  3. Background Sync: "order-sync" tag — replay pending orders when back online
 *  4. Message handler: receives QUEUE_ORDER from main thread, registers sync
 *
 * Architecture note:
 *   Orders are stored in localStorage by order-queue.js.
 *   When the SW sync fires, it reads the queue, posts each entry to /orders
 *   with an idempotency_key, and removes successful entries.
 *   The server deduplicates by (user_id, idempotency_key) so double-fire is safe.
 */

const CACHE_NAME    = 'usk-v1';
const SYNC_TAG      = 'order-sync';

// Assets to pre-cache on install
const PRECACHE_URLS = [
    '/',
    '/orders/create',
];

// ── Install ──────────────────────────────────────────────────────────────────
self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => cache.addAll(PRECACHE_URLS).catch(() => { /* if offline at install, skip */ }))
            .then(() => self.skipWaiting())
    );
});

// ── Activate ─────────────────────────────────────────────────────────────────
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(keys =>
            Promise.all(
                keys.filter(k => k !== CACHE_NAME).map(k => caches.delete(k))
            )
        ).then(() => self.clients.claim())
    );
});

// ── Fetch: stale-while-revalidate for assets, network-first for pages ────────
self.addEventListener('fetch', event => {
    const { request } = event;
    const url = new URL(request.url);

    // Skip cross-origin requests and non-GET
    if (url.origin !== location.origin || request.method !== 'GET') return;

    // Skip Vite HMR / websocket
    if (url.pathname.startsWith('/@') || url.pathname.startsWith('/sockjs-node')) return;

    const isAsset = /\.(js|css|png|jpg|jpeg|webp|svg|ico|woff2?)$/.test(url.pathname);

    if (isAsset) {
        // Cache-first with network fallback
        event.respondWith(
            caches.match(request).then(cached => {
                const networkFetch = fetch(request).then(response => {
                    if (response.ok) {
                        const clone = response.clone();
                        caches.open(CACHE_NAME).then(c => c.put(request, clone));
                    }
                    return response;
                });
                return cached || networkFetch;
            })
        );
    } else {
        // Network-first with cache fallback for HTML
        event.respondWith(
            fetch(request)
                .then(response => {
                    if (response.ok) {
                        const clone = response.clone();
                        caches.open(CACHE_NAME).then(c => c.put(request, clone));
                    }
                    return response;
                })
                .catch(() => caches.match(request))
        );
    }
});

// ── Message from main thread ──────────────────────────────────────────────────
self.addEventListener('message', event => {
    if (event.data?.type === 'QUEUE_ORDER') {
        // Register background sync so we retry when connectivity returns
        self.registration.sync.register(SYNC_TAG).catch(() => {
            // Background Sync API not supported — main thread retry handles it
        });
    }
});

// ── Background Sync ───────────────────────────────────────────────────────────
self.addEventListener('sync', event => {
    if (event.tag === SYNC_TAG) {
        event.waitUntil(replayOrderQueue());
    }
});

/**
 * Read the pending queue from all controlled clients (they share localStorage domain).
 * For each entry, POST to /orders. On success, tell the client to dequeue it.
 * The server's idempotency_key guarantee means multiple replays are safe.
 */
async function replayOrderQueue() {
    // Ask a client to share its queue and CSRF token
    const clients = await self.clients.matchAll({ type: 'window', includeUncontrolled: true });
    if (clients.length === 0) return; // no window open — SW cannot read localStorage directly

    return new Promise(resolve => {
        const client = clients[0];

        // One-shot message channel
        const channel = new MessageChannel();
        channel.port1.onmessage = async (msg) => {
            const { queue, csrfToken } = msg.data || {};
            if (!queue || queue.length === 0) { resolve(); return; }

            for (const entry of queue) {
                if (entry.attempts >= 5) continue; // give up after 5 tries

                try {
                    const body = buildFormData(entry, csrfToken);
                    const res  = await fetch('/orders', {
                        method:  'POST',
                        headers: {
                            'Accept':       'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                        },
                        body: body,
                    });

                    if (res.ok || res.status === 422) {
                        // 422 = validation error (e.g. stock gone) — no point retrying: dequeue
                        client.postMessage({ type: 'SW_ORDER_DONE', id: entry.id, status: res.status });
                    }
                    // other errors (500, 503) → keep in queue, SW will retry on next sync
                } catch {
                    // network error — keep in queue
                }
            }
            resolve();
        };

        client.postMessage({ type: 'SW_GET_QUEUE' }, [channel.port2]);
    });
}

function buildFormData(entry, csrfToken) {
    const data = new FormData();
    data.append('_token',          csrfToken || '');
    data.append('break_time_id',   entry.break_time_id);
    data.append('idempotency_key', entry.id);
    if (entry.note) data.append('note', entry.note);
    entry.items.forEach((item, i) => {
        data.append(`items[${i}][menu_id]`,  item.menu_id);
        data.append(`items[${i}][quantity]`, item.quantity);
    });
    return data;
}
