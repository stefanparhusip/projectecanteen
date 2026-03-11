<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Jobs\ProcessDataExportJob;
use App\Models\DataExportRequest;
use App\Models\DeletionRequest;
use App\Services\DataExportService;
use App\Services\DataPrivacyService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DataPrivacyController extends Controller
{
    public function __construct(
        private readonly DataExportService $exportService,
        private readonly DataPrivacyService $privacyService,
    ) {}

    /**
     * Show the privacy centre (export history + deletion request status).
     */
    public function index(): View
    {
        $user = Auth::user();

        $exports = DataExportRequest::query()
            ->where('user_id', $user->id)
            ->orderByDesc('created_at')
            ->get();

        $activeDeletion = DeletionRequest::query()
            ->where('user_id', $user->id)
            ->whereIn('status', ['pending', 'under_review', 'approved', 'processing'])
            ->first();

        return view('user.privacy.index', compact('exports', 'activeDeletion'));
    }

    /**
     * Submit a new data export request.
     */
    public function requestExport(Request $request): RedirectResponse
    {
        $request->validate([
            'format' => ['required', 'in:json,csv'],
        ]);

        $user = Auth::user();

        // Prevent duplicate in-progress requests
        $inProgress = DataExportRequest::query()
            ->where('user_id', $user->id)
            ->whereIn('status', ['pending', 'processing'])
            ->exists();

        if ($inProgress) {
            return back()->with('error', 'Permintaan ekspor sedang diproses. Mohon tunggu.');
        }

        $exportRequest = DataExportRequest::create([
            'user_id'    => $user->id,
            'format'     => $request->input('format'),
            'status'     => 'pending',
            'ip_address' => $request->ip(),
        ]);

        $this->privacyService->log(
            userId: $user->id,
            action: 'data_export_requested',
            metadata: ['export_id' => $exportRequest->id, 'format' => $exportRequest->format],
            request: $request,
        );

        ProcessDataExportJob::dispatch($exportRequest);

        return back()->with('success', 'Permintaan ekspor diterima. File akan tersedia dalam beberapa saat.');
    }

    /**
     * Download a ready export file.
     */
    public function downloadExport(DataExportRequest $dataExportRequest): StreamedResponse|RedirectResponse
    {
        abort_if(auth()->id() !== $dataExportRequest->user_id, 403);

        if (! $dataExportRequest->isDownloadable()) {
            return back()->with('error', 'File ekspor tidak tersedia atau sudah kedaluwarsa.');
        }

        return $this->exportService->download($dataExportRequest);
    }

    /**
     * Submit a right-to-be-forgotten (deletion) request.
     */
    public function requestDeletion(Request $request): RedirectResponse
    {
        $request->validate([
            'reason'  => ['nullable', 'string', 'max:1000'],
            'confirm' => ['required', 'accepted'],
        ]);

        $user   = Auth::user();
        $result = $this->privacyService->createDeletionRequest($user, $request->input('reason'), $request);

        if ($result === null) {
            return back()->with('error', 'Anda sudah memiliki permintaan penghapusan yang sedang aktif.');
        }

        return back()->with('success', 'Permintaan penghapusan akun telah diterima dan sedang ditinjau oleh admin.');
    }

    /**
     * Cancel a pending deletion request.
     */
    public function cancelDeletion(DeletionRequest $deletionRequest): RedirectResponse
    {
        abort_if(auth()->id() !== $deletionRequest->user_id, 403);

        if (! $deletionRequest->isPending()) {
            return back()->with('error', 'Permintaan tidak dapat dibatalkan pada status ini.');
        }

        $this->privacyService->cancelDeletionRequest($deletionRequest, request());

        return back()->with('success', 'Permintaan penghapusan akun telah dibatalkan.');
    }
}
