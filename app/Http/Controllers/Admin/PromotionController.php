<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Promotion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PromotionController extends Controller
{
    public function index(): View
    {
        $promotions = Promotion::withTrashed()
            ->orderByDesc('priority')
            ->orderByDesc('id')
            ->paginate(20);

        return view('admin.promotions.index', compact('promotions'));
    }

    public function create(): View
    {
        $menus = Menu::orderBy('name')->get();

        return view('admin.promotions.create', compact('menus'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $params = $this->buildParams($request);

        Promotion::create(array_merge($data, ['params' => $params]));

        return redirect()->route('admin.promotions.index')
            ->with('success', 'Promosi berhasil ditambahkan.');
    }

    public function edit(Promotion $promotion): View
    {
        $menus = Menu::orderBy('name')->get();

        return view('admin.promotions.edit', compact('promotion', 'menus'));
    }

    public function update(Request $request, Promotion $promotion): RedirectResponse
    {
        $data = $this->validated($request);
        $params = $this->buildParams($request);

        $promotion->update(array_merge($data, ['params' => $params]));

        return redirect()->route('admin.promotions.index')
            ->with('success', 'Promosi berhasil diperbarui.');
    }

    public function destroy(Promotion $promotion): RedirectResponse
    {
        $promotion->delete();

        return back()->with('success', "Promosi \"{$promotion->name}\" dihapus.");
    }

    public function toggle(Promotion $promotion): RedirectResponse
    {
        $promotion->update(['active' => ! $promotion->active]);
        $label = $promotion->active ? 'diaktifkan' : 'dinonaktifkan';

        return back()->with('success', "Promosi \"{$promotion->name}\" {$label}.");
    }

    // ── Helpers ──────────────────────────────────────────────────────────────

    private function validated(Request $request): array
    {
        $rules = [
            'name' => 'required|string|max:100',
            'type' => 'required|in:bundle,time',
            'discount_type' => 'required|in:percentage,fixed',
            'discount_value' => ['required', 'numeric', 'min:0'],
            'priority' => 'integer|min:0|max:255',
            'stackable' => 'boolean',
            'start_at' => 'nullable|date',
            'end_at' => 'nullable|date',
            'active' => 'boolean',
        ];

        if ($request->discount_type === 'percentage') {
            $rules['discount_value'][] = 'max:100';
        }

        if ($request->type === 'bundle') {
            $rules['bundle_min_items'] = 'required|integer|min:2';
            $rules['bundle_menu_ids'] = 'nullable|array';
            $rules['bundle_menu_ids.*'] = 'integer|exists:menus,id';
        } else {
            $rules['time_days'] = 'required|array|min:1';
            $rules['time_days.*'] = 'integer|between:0,6';
            $rules['time_start'] = 'required|date_format:H:i';
            $rules['time_end'] = 'required|date_format:H:i';
        }

        $validated = $request->validate($rules);

        return [
            'name' => $validated['name'],
            'type' => $validated['type'],
            'discount_type' => $validated['discount_type'],
            'discount_value' => $validated['discount_value'],
            'priority' => $request->integer('priority', 0),
            'stackable' => $request->boolean('stackable'),
            'start_at' => $validated['start_at'] ?? null,
            'end_at' => $validated['end_at'] ?? null,
            'active' => $request->boolean('active', true),
        ];
    }

    private function buildParams(Request $request): array
    {
        if ($request->type === 'bundle') {
            return [
                'min_items' => (int) $request->input('bundle_min_items', 2),
                'menu_ids' => array_map('intval', $request->input('bundle_menu_ids', [])),
            ];
        }

        // time / happy hour
        return [
            'days' => array_map('intval', $request->input('time_days', [])),
            'start_time' => $request->input('time_start'),
            'end_time' => $request->input('time_end'),
        ];
    }
}
