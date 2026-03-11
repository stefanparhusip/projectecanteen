<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Promotion;
use Illuminate\View\View;

class PromotionController extends Controller
{
    public function index(): View
    {
        $now = now();

        // Active promos in current validity window (what user can use RIGHT NOW)
        $activePromos = Promotion::active()
            ->inRange($now)
            ->orderByDesc('priority')
            ->orderBy('name')
            ->get();

        // Upcoming promos (active flag = true but not yet in range)
        $upcomingPromos = Promotion::active()
            ->where('start_at', '>', $now)
            ->orderBy('start_at')
            ->get();

        // Collect menu IDs referenced by bundle promos so we can display their names
        $bundleMenuIds = $activePromos->merge($upcomingPromos)
            ->where('type', Promotion::TYPE_BUNDLE)
            ->flatMap(fn ($p) => collect($p->params['menu_ids'] ?? []))
            ->filter()
            ->unique()
            ->values();

        $bundleMenus = $bundleMenuIds->isNotEmpty()
            ? Menu::whereIn('id', $bundleMenuIds)->pluck('name', 'id')
            : collect();

        return view('user.promotions.index', compact(
            'activePromos',
            'upcomingPromos',
            'bundleMenus',
            'now',
        ));
    }
}
