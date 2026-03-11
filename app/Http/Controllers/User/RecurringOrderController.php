<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BreakTime;
use App\Models\Menu;
use App\Models\RecurringOrder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RecurringOrderController extends Controller
{
    public function index(Request $request): View
    {
        $recurringOrders = RecurringOrder::with(['menu', 'breakTime'])
            ->where('user_id', $request->user()->id)
            ->orderBy('day_of_week')
            ->get();

        return view('user.recurring.index', compact('recurringOrders'));
    }

    public function create(): View
    {
        $menus = Menu::where('stock', '>', 0)->orderBy('name')->get();
        $breakTimes = BreakTime::orderBy('start_time')->get();
        $dayNames = RecurringOrder::DAY_NAMES;

        return view('user.recurring.create', compact('menus', 'breakTimes', 'dayNames'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'menu_id' => ['required', 'exists:menus,id'],
            'qty' => ['required', 'integer', 'min:1', 'max:20'],
            'day_of_week' => ['required', 'integer', 'min:0', 'max:6'],
            'break_time_id' => ['required', 'exists:break_times,id'],
        ]);

        $exists = RecurringOrder::where('user_id', $request->user()->id)
            ->where('menu_id', $validated['menu_id'])
            ->where('day_of_week', $validated['day_of_week'])
            ->where('break_time_id', $validated['break_time_id'])
            ->exists();

        if ($exists) {
            return back()
                ->withInput()
                ->with('error', 'Jadwal yang sama sudah ada. Silakan pilih kombinasi menu, hari, dan slot istirahat yang berbeda.');
        }

        RecurringOrder::create([
            'user_id' => $request->user()->id,
            'menu_id' => $validated['menu_id'],
            'qty' => $validated['qty'],
            'day_of_week' => $validated['day_of_week'],
            'break_time_id' => $validated['break_time_id'],
            'is_active' => true,
        ]);

        return redirect()->route('user.recurring.index')
            ->with('success', 'Jadwal pesanan berhasil ditambahkan.');
    }

    public function toggle(RecurringOrder $ro): RedirectResponse
    {
        abort_unless($ro->user_id === request()->user()->id, 403);

        $ro->update(['is_active' => ! $ro->is_active]);

        $status = $ro->is_active ? 'diaktifkan' : 'dinonaktifkan';

        return back()->with('success', "Jadwal berhasil {$status}.");
    }

    public function destroy(RecurringOrder $ro): RedirectResponse
    {
        abort_unless($ro->user_id === request()->user()->id, 403);

        $ro->delete();

        return back()->with('success', 'Jadwal pesanan berhasil dihapus.');
    }
}
