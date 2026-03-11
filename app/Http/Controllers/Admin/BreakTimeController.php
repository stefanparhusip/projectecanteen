<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BreakTime;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BreakTimeController extends Controller
{
    public function index(): View
    {
        $breakTimes = BreakTime::orderBy('start_time')->get();

        return view('admin.break-times.index', compact('breakTimes'));
    }

    public function create(): View
    {
        return view('admin.break-times.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'label' => 'required|string|max:50',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'order_deadline' => 'required|date_format:H:i|before:start_time',
        ]);

        BreakTime::create($data);

        return redirect()->route('admin.break-times.index')
            ->with('success', 'Waktu istirahat berhasil ditambahkan.');
    }

    public function edit(BreakTime $breakTime): View
    {
        return view('admin.break-times.edit', compact('breakTime'));
    }

    public function update(Request $request, BreakTime $breakTime): RedirectResponse
    {
        $data = $request->validate([
            'label' => 'required|string|max:50',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'order_deadline' => 'required|date_format:H:i|before:start_time',
        ]);

        $breakTime->update($data);

        return redirect()->route('admin.break-times.index')
            ->with('success', 'Waktu istirahat berhasil diperbarui.');
    }

    public function destroy(BreakTime $breakTime): RedirectResponse
    {
        // Cegah hapus jika masih ada pesanan terkait
        if ($breakTime->orders()->exists()) {
            return back()->with('error', 'Tidak dapat menghapus waktu istirahat yang masih memiliki pesanan.');
        }

        $breakTime->delete();

        return redirect()->route('admin.break-times.index')
            ->with('success', 'Waktu istirahat berhasil dihapus.');
    }
}
