<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\ProcessBulkExport;
use App\Models\ExportJob;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExportController extends Controller
{
    public function index(): View
    {
        $exports = ExportJob::with('user')
            ->orderByDesc('created_at')
            ->paginate(20);

        return view('admin.exports.index', compact('exports'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'type' => ['required', 'in:transactions,orders,users'],
            'date_from' => ['nullable', 'date'],
            'date_to' => ['nullable', 'date', 'after_or_equal:date_from'],
            'status' => ['nullable', 'string'],
            'type_filter' => ['nullable', 'string'],
            'role' => ['nullable', 'string'],
        ]);

        $filters = array_filter([
            'date_from' => $validated['date_from'] ?? null,
            'date_to' => $validated['date_to'] ?? null,
            'status' => $validated['status'] ?? null,
            'type' => $validated['type_filter'] ?? null,
            'role' => $validated['role'] ?? null,
        ]);

        $exportJob = ExportJob::create([
            'user_id' => $request->user()->id,
            'type' => $validated['type'],
            'format' => 'csv',
            'filters' => $filters ?: null,
            'status' => ExportJob::STATUS_PENDING,
        ]);

        ProcessBulkExport::dispatch($exportJob);

        return redirect()->route('admin.exports.index')
            ->with('success', 'Export dijadwalkan. Hasilnya akan tersedia sebentar lagi.');
    }

    public function download(ExportJob $exportJob): StreamedResponse
    {
        abort_unless(
            $exportJob->status === ExportJob::STATUS_DONE && $exportJob->file_path,
            404,
            'File belum tersedia.'
        );

        abort_unless(Storage::disk('local')->exists($exportJob->file_path), 404, 'File tidak ditemukan.');

        $fileName = basename($exportJob->file_path);

        return Storage::disk('local')->download($exportJob->file_path, $fileName);
    }

    public function destroy(ExportJob $exportJob): RedirectResponse
    {
        if ($exportJob->file_path && Storage::disk('local')->exists($exportJob->file_path)) {
            Storage::disk('local')->delete($exportJob->file_path);
        }

        $exportJob->delete();

        return redirect()->route('admin.exports.index')
            ->with('success', 'Export dihapus.');
    }
}
