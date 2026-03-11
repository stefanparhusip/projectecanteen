<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Backup;
use App\Models\BackupRestoreRequest;
use App\Services\BackupService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class BackupController extends Controller
{
    public function __construct(private BackupService $service) {}

    public function index(): View
    {
        $backups = Backup::latest()->paginate(20);
        $restoreRequests = BackupRestoreRequest::with(['backup', 'requester'])
            ->latest()
            ->take(10)
            ->get();

        return view('admin.backups.index', compact('backups', 'restoreRequests'));
    }

    /** Trigger a manual backup synchronously. */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'retention_days' => ['required', 'integer', Rule::in(BackupService::RETENTION_OPTIONS)],
            'note' => ['nullable', 'string', 'max:255'],
        ]);

        try {
            $backup = $this->service->run($validated['retention_days'], $validated['note'] ?? null);

            return back()->with('success', "Backup berhasil dibuat: {$backup->filename} ({$backup->human_size}).");
        } catch (\Throwable $e) {
            return back()->with('error', 'Backup gagal: '.$e->getMessage());
        }
    }

    /** Stream-download an encrypted backup file. */
    public function download(Backup $backup): StreamedResponse|RedirectResponse
    {
        if (! Storage::disk('local')->exists($backup->disk_path)) {
            return back()->with('error', 'File backup tidak ditemukan di storage.');
        }

        return Storage::disk('local')->download($backup->disk_path, $backup->filename);
    }

    /** Delete both the encrypted file and its metadata record. */
    public function destroy(Backup $backup): RedirectResponse
    {
        Storage::disk('local')->delete($backup->disk_path);
        $backup->delete();

        return back()->with('success', "Backup #{$backup->id} berhasil dihapus.");
    }
}
