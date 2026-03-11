<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\User;
use App\Services\DemoModeService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DemoModeController extends Controller
{
    public function __construct(private readonly DemoModeService $demo) {}

    /**
     * Show the demo mode control panel.
     */
    public function index(): View
    {
        $isEnabled = $this->demo->isEnabled();
        $canEnable = $this->demo->canEnable();

        $demoUserCount = User::withTrashed()
            ->where('email', 'like', '%' . DemoModeService::DEMO_EMAIL_DOMAIN)
            ->count();

        $demoMenuCount = Menu::withTrashed()
            ->where('name', 'like', DemoModeService::DEMO_MENU_PREFIX . '%')
            ->count();

        return view('admin.demo-mode.index', compact(
            'isEnabled',
            'canEnable',
            'demoUserCount',
            'demoMenuCount',
        ));
    }

    /**
     * Enable demo mode (seeds data if not already seeded).
     * Blocked in production.
     */
    public function enable(): RedirectResponse
    {
        if (! $this->demo->canEnable()) {
            return back()->with('error', 'Demo mode tidak dapat diaktifkan di lingkungan production.');
        }

        $this->demo->enable();

        return redirect()->route('admin.demo-mode.index')
            ->with('success', 'Demo mode diaktifkan. Data demo telah di-seed.');
    }

    /**
     * Disable demo mode (demo data stays in place).
     */
    public function disable(): RedirectResponse
    {
        $this->demo->disable();

        return redirect()->route('admin.demo-mode.index')
            ->with('success', 'Demo mode dinonaktifkan.');
    }

    /**
     * Delete all demo data and re-seed from scratch.
     * Blocked in production.
     */
    public function reset(): RedirectResponse
    {
        if (! $this->demo->canEnable()) {
            return back()->with('error', 'Operasi ini tidak diizinkan di lingkungan production.');
        }

        $this->demo->resetDemoData();

        return redirect()->route('admin.demo-mode.index')
            ->with('success', 'Data demo telah direset dan di-seed ulang.');
    }
}
