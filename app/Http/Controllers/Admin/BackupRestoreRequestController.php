<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Backup;
use App\Models\BackupRestoreRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BackupRestoreRequestController extends Controller
{
    public function index(): View
    {
        $requests = BackupRestoreRequest::with(['backup', 'requester'])
            ->latest()
            ->paginate(20);

        $availableBackups = Backup::where('status', 'completed')->latest()->get();

        return view('admin.restore-requests.index', compact('requests', 'availableBackups'));
    }

    /** Any admin may submit a restore request. */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'backup_id' => ['required', 'exists:backups,id'],
            'reason' => ['required', 'string', 'max:1000'],
        ]);

        $backup = Backup::findOrFail($validated['backup_id']);

        if ($backup->status !== 'completed') {
            return back()->with('error', 'Hanya backup berstatus "completed" yang dapat di-restore.');
        }

        BackupRestoreRequest::create([
            'backup_id' => $backup->id,
            'requested_by' => auth()->id(),
            'status' => 'pending',
            'reason' => $validated['reason'],
        ]);

        return back()->with(
            'success',
            'Permintaan restore berhasil diajukan. Hubungi super admin untuk persetujuan.'
        );
    }

    /** Only super admins can approve — marks as approved but does NOT auto-execute. */
    public function approve(BackupRestoreRequest $backupRestoreRequest): RedirectResponse
    {
        if (! auth()->user()->isSuperAdmin()) {
            abort(403, 'Hanya super admin yang dapat menyetujui restore request.');
        }

        if ($backupRestoreRequest->status !== 'pending') {
            return back()->with('info', 'Request ini sudah diproses sebelumnya.');
        }

        $cmd = "php artisan backup:restore {$backupRestoreRequest->backup_id} --force";
        $backupRestoreRequest->update([
            'status' => 'approved',
            'note' => "Disetujui. Eksekusi melalui: {$cmd}",
        ]);

        return back()->with(
            'success',
            "Request #{$backupRestoreRequest->id} disetujui. Jalankan: `{$cmd}` di server untuk eksekusi."
        );
    }

    /** Any admin can reject a pending request. */
    public function reject(BackupRestoreRequest $backupRestoreRequest): RedirectResponse
    {
        if ($backupRestoreRequest->status !== 'pending') {
            return back()->with('info', 'Request ini sudah diproses sebelumnya.');
        }

        $backupRestoreRequest->update(['status' => 'rejected']);

        return back()->with('success', "Request restore #{$backupRestoreRequest->id} ditolak.");
    }
}
