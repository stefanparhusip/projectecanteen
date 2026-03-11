<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeatureFlag;
use App\Models\User;
use App\Services\FeatureFlagService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class FeatureFlagController extends Controller
{
    public function __construct(private FeatureFlagService $service) {}

    // ── CRUD ─────────────────────────────────────────────────────────────────

    public function index(): View
    {
        $flags = FeatureFlag::orderBy('key')->get();

        return view('admin.feature-flags.index', compact('flags'));
    }

    public function create(): View
    {
        $flag = new FeatureFlag([
            'rollout_percentage' => 100,
            'variant_a_label' => 'Control',
            'variant_b_label' => 'Treatment',
        ]);

        return view('admin.feature-flags.form', compact('flag'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'key' => ['required', 'string', 'max:100', 'regex:/^[a-z0-9_]+$/', 'unique:feature_flags,key'],
            'name' => ['required', 'string', 'max:150'],
            'description' => ['nullable', 'string', 'max:500'],
            'is_enabled' => ['nullable', 'boolean'],
            'rollout_percentage' => ['required', 'integer', 'min:0', 'max:100'],
            'has_ab_variants' => ['nullable', 'boolean'],
            'variant_a_label' => ['required_if:has_ab_variants,1', 'nullable', 'string', 'max:80'],
            'variant_b_label' => ['required_if:has_ab_variants,1', 'nullable', 'string', 'max:80'],
        ]);

        $data['is_enabled'] = $request->boolean('is_enabled');
        $data['has_ab_variants'] = $request->boolean('has_ab_variants');

        FeatureFlag::create($data);

        return redirect()->route('admin.feature-flags.index')
            ->with('success', "Feature flag '{$data['key']}' berhasil dibuat.");
    }

    public function edit(FeatureFlag $featureFlag): View
    {
        $flag = $featureFlag;
        $overrides = User::whereHas('featureFlagOverrides', fn ($q) => $q->where('feature_flag_id', $flag->id))
            ->with(['featureFlagOverrides' => fn ($q) => $q->where('feature_flag_id', $flag->id)])
            ->get();

        return view('admin.feature-flags.form', compact('flag', 'overrides'));
    }

    public function update(Request $request, FeatureFlag $featureFlag): RedirectResponse
    {
        $data = $request->validate([
            'key' => ['required', 'string', 'max:100', 'regex:/^[a-z0-9_]+$/', Rule::unique('feature_flags', 'key')->ignore($featureFlag->id)],
            'name' => ['required', 'string', 'max:150'],
            'description' => ['nullable', 'string', 'max:500'],
            'is_enabled' => ['nullable', 'boolean'],
            'rollout_percentage' => ['required', 'integer', 'min:0', 'max:100'],
            'has_ab_variants' => ['nullable', 'boolean'],
            'variant_a_label' => ['required_if:has_ab_variants,1', 'nullable', 'string', 'max:80'],
            'variant_b_label' => ['required_if:has_ab_variants,1', 'nullable', 'string', 'max:80'],
        ]);

        $data['is_enabled'] = $request->boolean('is_enabled');
        $data['has_ab_variants'] = $request->boolean('has_ab_variants');

        $featureFlag->update($data);
        $this->service->flushCache($featureFlag->key);

        return redirect()->route('admin.feature-flags.index')
            ->with('success', "Feature flag '{$featureFlag->key}' berhasil diperbarui.");
    }

    public function destroy(FeatureFlag $featureFlag): RedirectResponse
    {
        $key = $featureFlag->key;
        $featureFlag->delete();
        $this->service->flushCache($key);

        return redirect()->route('admin.feature-flags.index')
            ->with('success', "Feature flag '{$key}' berhasil dihapus.");
    }

    // ── AJAX toggle ──────────────────────────────────────────────────────────

    /**
     * Flip is_enabled and return the new state as JSON.
     * Supports fetch() calls from the admin index table.
     */
    public function toggle(Request $request, FeatureFlag $featureFlag): JsonResponse
    {
        $featureFlag->update(['is_enabled' => ! $featureFlag->is_enabled]);
        $this->service->flushCache($featureFlag->key);

        return response()->json([
            'enabled' => $featureFlag->is_enabled,
            'message' => $featureFlag->is_enabled ? 'Diaktifkan' : 'Dinonaktifkan',
        ]);
    }

    // ── Per-user overrides ───────────────────────────────────────────────────

    public function overrideUser(Request $request, FeatureFlag $featureFlag): RedirectResponse
    {
        $data = $request->validate([
            'user_id' => ['required', 'exists:users,id'],
            'is_enabled' => ['nullable', 'boolean'],
            'variant' => ['nullable', 'in:A,B'],
        ]);

        $featureFlag->overrides()->updateOrCreate(
            ['user_id' => $data['user_id']],
            [
                'is_enabled' => isset($data['is_enabled']) ? (bool) $data['is_enabled'] : null,
                'variant' => $data['variant'] ?? null,
            ]
        );

        return back()->with('success', 'Override pengguna berhasil disimpan.');
    }

    public function removeOverride(Request $request, FeatureFlag $featureFlag): RedirectResponse
    {
        $request->validate(['user_id' => ['required', 'exists:users,id']]);

        $featureFlag->overrides()->where('user_id', $request->user_id)->delete();

        return back()->with('success', 'Override pengguna berhasil dihapus.');
    }
}
