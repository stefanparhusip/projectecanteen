<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\ProcessDeletionJob;
use App\Models\DeletionRequest;
use App\Services\DataPrivacyService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DataPrivacyAdminController extends Controller
{
    public function __construct(private readonly DataPrivacyService $privacyService) {}

    /**
     * Admin queue: all deletion requests, newest first.
     */
    public function index(Request $request): View
    {
        $status = $request->input('status', 'pending');

        $requests = DeletionRequest::query()
            ->with(['user', 'reviewer'])
            ->when(
                $status !== 'all',
                fn ($q) => $q->where('status', $status)
            )
            ->orderByDesc('created_at')
            ->paginate(25);

        $counts = [
            'pending'    => DeletionRequest::where('status', 'pending')->count(),
            'under_review' => DeletionRequest::where('status', 'under_review')->count(),
            'approved'   => DeletionRequest::where('status', 'approved')->count(),
            'completed'  => DeletionRequest::where('status', 'completed')->count(),
        ];

        return view('admin.data-privacy.index', compact('requests', 'status', 'counts'));
    }

    /**
     * Show detail + consent log for a deletion request.
     */
    public function show(DeletionRequest $deletionRequest): View
    {
        $deletionRequest->load(['user', 'reviewer']);

        $consentLogs = \App\Models\ConsentLog::query()
            ->where('user_id', $deletionRequest->user_id)
            ->latest()
            ->get();

        return view('admin.data-privacy.show', compact('deletionRequest', 'consentLogs'));
    }

    /**
     * Approve a deletion request and dispatch the anonymization job.
     */
    public function approve(Request $request, DeletionRequest $deletionRequest): RedirectResponse
    {
        $request->validate([
            'admin_note' => ['nullable', 'string', 'max:1000'],
        ]);

        if (! $deletionRequest->isPending()) {
            return back()->with('error', 'Permintaan ini tidak dapat disetujui pada status saat ini.');
        }

        $this->privacyService->approve(
            $deletionRequest,
            Auth::user(),
            $request->input('admin_note'),
            $request,
        );

        ProcessDeletionJob::dispatch($deletionRequest);

        return redirect()->route('admin.data-privacy.index')
            ->with('success', 'Permintaan disetujui. Akun akan dianonimkan segera.');
    }

    /**
     * Reject a deletion request with an admin note.
     */
    public function reject(Request $request, DeletionRequest $deletionRequest): RedirectResponse
    {
        $request->validate([
            'admin_note' => ['required', 'string', 'max:1000'],
        ]);

        if (! $deletionRequest->isPending()) {
            return back()->with('error', 'Permintaan ini tidak dapat ditolak pada status saat ini.');
        }

        $this->privacyService->reject(
            $deletionRequest,
            Auth::user(),
            $request->input('admin_note'),
            $request,
        );

        return redirect()->route('admin.data-privacy.index')
            ->with('success', 'Permintaan telah ditolak.');
    }
}
