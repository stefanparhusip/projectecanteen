<?php

namespace Tests\Feature;

use App\Models\FeatureFlag;
use App\Models\User;
use App\Services\FeatureFlagService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class FeatureFlagTest extends TestCase
{
    use RefreshDatabase;

    // ── Helpers ──────────────────────────────────────────────────────────────

    private function admin(): User
    {
        return User::factory()->create(['role' => 'admin']);
    }

    private function student(): User
    {
        return User::factory()->create(['role' => 'student']);
    }

    private function flag(array $attrs = []): FeatureFlag
    {
        return FeatureFlag::create(array_merge([
            'key' => 'test_flag',
            'name' => 'Test Flag',
            'is_enabled' => true,
            'rollout_percentage' => 100,
            'has_ab_variants' => false,
            'variant_a_label' => 'Control',
            'variant_b_label' => 'Treatment',
        ], $attrs));
    }

    private function service(): FeatureFlagService
    {
        return app(FeatureFlagService::class);
    }

    // ── isEnabled ─────────────────────────────────────────────────────────────

    public function test_flag_disabled_globally_returns_false(): void
    {
        $this->flag(['is_enabled' => false]);
        $this->assertFalse($this->service()->isEnabled('test_flag'));
    }

    public function test_flag_enabled_with_100_percent_rollout_returns_true(): void
    {
        $this->flag(['is_enabled' => true, 'rollout_percentage' => 100]);
        $this->assertTrue($this->service()->isEnabled('test_flag'));
    }

    public function test_flag_with_0_percent_rollout_returns_false(): void
    {
        $this->flag(['is_enabled' => true, 'rollout_percentage' => 0]);
        $user = $this->student();
        $this->assertFalse($this->service()->isEnabled('test_flag', $user));
    }

    public function test_rollout_bucket_is_deterministic(): void
    {
        $svc = $this->service();
        $bucket = $svc->bucket('my_feature', 'user42');
        $this->assertEquals($bucket, $svc->bucket('my_feature', 'user42'));
        $this->assertGreaterThanOrEqual(0, $bucket);
        $this->assertLessThan(100, $bucket);
    }

    public function test_user_override_enables_flag_below_rollout_threshold(): void
    {
        // Create flag with 0% rollout so no users would normally get it
        $flag = $this->flag(['rollout_percentage' => 0]);
        $user = $this->student();

        // Add enable override
        $flag->overrides()->create(['user_id' => $user->id, 'is_enabled' => true]);

        Cache::forget('feature_flag:test_flag');

        $this->assertTrue($this->service()->isEnabled('test_flag', $user));
    }

    public function test_user_override_disables_globally_enabled_flag(): void
    {
        $flag = $this->flag(['is_enabled' => true, 'rollout_percentage' => 100]);
        $user = $this->student();

        $flag->overrides()->create(['user_id' => $user->id, 'is_enabled' => false]);

        Cache::forget('feature_flag:test_flag');

        $this->assertFalse($this->service()->isEnabled('test_flag', $user));
    }

    public function test_nonexistent_flag_returns_false(): void
    {
        $this->assertFalse($this->service()->isEnabled('does_not_exist'));
    }

    // ── getVariant ────────────────────────────────────────────────────────────

    public function test_ab_variant_assignment_is_deterministic(): void
    {
        $this->flag(['has_ab_variants' => true]);
        $user = $this->student();

        $svc = $this->service();
        // Same request always yields same variant
        $v1 = $svc->getVariant('test_flag', $user);
        Cache::forget('feature_flag:test_flag');
        $v2 = $svc->getVariant('test_flag', $user);

        $this->assertContains($v1, ['A', 'B']);
        $this->assertEquals($v1, $v2);
    }

    public function test_ab_variant_returns_null_when_flag_disabled(): void
    {
        $this->flag(['is_enabled' => false, 'has_ab_variants' => true]);
        $user = $this->student();

        $this->assertNull($this->service()->getVariant('test_flag', $user));
    }

    public function test_ab_variant_returns_null_when_no_variants(): void
    {
        $this->flag(['has_ab_variants' => false]);
        $user = $this->student();

        $this->assertNull($this->service()->getVariant('test_flag', $user));
    }

    public function test_user_override_pins_variant(): void
    {
        $flag = $this->flag(['has_ab_variants' => true]);
        $user = $this->student();

        // Determine natural variant
        $svc = $this->service();
        $natural = $svc->getVariant('test_flag', $user);
        $pinned = $natural === 'A' ? 'B' : 'A'; // pin the opposite

        $flag->overrides()->create(['user_id' => $user->id, 'variant' => $pinned]);
        Cache::forget('feature_flag:test_flag');

        $this->assertEquals($pinned, $svc->getVariant('test_flag', $user));
    }

    // ── Persistence (toggle & rollback) ───────────────────────────────────────

    public function test_flag_toggle_persists_in_database(): void
    {
        $flag = $this->flag(['is_enabled' => false]);
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post(route('admin.feature-flags.toggle', $flag))
            ->assertJson(['enabled' => true]);

        $this->assertTrue($flag->fresh()->is_enabled);
    }

    public function test_flag_rollback_disables_feature(): void
    {
        $flag = $this->flag(['is_enabled' => true]);
        $admin = $this->admin();

        // Toggle off (rollback)
        $this->actingAs($admin)->post(route('admin.feature-flags.toggle', $flag));

        $this->assertFalse($flag->fresh()->is_enabled);
        Cache::forget('feature_flag:test_flag');
        $this->assertFalse($this->service()->isEnabled('test_flag'));
    }

    // ── Middleware ────────────────────────────────────────────────────────────

    public function test_middleware_blocks_route_for_disabled_flag(): void
    {
        $this->flag(['is_enabled' => false]);
        $user = $this->student();

        // Register a temporary test route behind the feature middleware
        \Route::middleware('web')->get('/test-feature-gate', function () {
            return 'secret';
        })->middleware('feature:test_flag');

        $this->actingAs($user)
            ->get('/test-feature-gate')
            ->assertNotFound();
    }

    public function test_middleware_allows_route_for_enabled_flag(): void
    {
        $this->flag(['is_enabled' => true, 'rollout_percentage' => 100]);
        $user = $this->student();

        \Route::middleware('web')->get('/test-feature-gate-open', function () {
            return 'open';
        })->middleware('feature:test_flag');

        $this->actingAs($user)
            ->get('/test-feature-gate-open')
            ->assertOk()
            ->assertSee('open');
    }

    // ── Admin CRUD ────────────────────────────────────────────────────────────

    public function test_admin_can_view_feature_flags_list(): void
    {
        $this->flag();
        $this->actingAs($this->admin())
            ->get(route('admin.feature-flags.index'))
            ->assertOk()
            ->assertSee('test_flag');
    }

    public function test_admin_can_create_feature_flag(): void
    {
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post(route('admin.feature-flags.store'), [
                'key' => 'new_ui',
                'name' => 'New UI',
                'is_enabled' => '1',
                'rollout_percentage' => '50',
                'has_ab_variants' => '0',
                'variant_a_label' => 'Control',
                'variant_b_label' => 'Treatment',
            ])
            ->assertRedirect(route('admin.feature-flags.index'));

        $this->assertDatabaseHas('feature_flags', ['key' => 'new_ui', 'rollout_percentage' => 50]);
    }

    public function test_admin_can_update_feature_flag(): void
    {
        $flag = $this->flag();
        $admin = $this->admin();

        $this->actingAs($admin)
            ->put(route('admin.feature-flags.update', $flag), [
                'key' => 'test_flag',
                'name' => 'Updated Name',
                'rollout_percentage' => '75',
                'variant_a_label' => 'Control',
                'variant_b_label' => 'Treatment',
            ])
            ->assertRedirect(route('admin.feature-flags.index'));

        $this->assertDatabaseHas('feature_flags', ['id' => $flag->id, 'name' => 'Updated Name', 'rollout_percentage' => 75]);
    }

    public function test_admin_can_delete_feature_flag(): void
    {
        $flag = $this->flag();
        $admin = $this->admin();

        $this->actingAs($admin)
            ->delete(route('admin.feature-flags.destroy', $flag))
            ->assertRedirect(route('admin.feature-flags.index'));

        $this->assertDatabaseMissing('feature_flags', ['id' => $flag->id]);
    }

    public function test_flag_key_must_be_unique(): void
    {
        $this->flag(['key' => 'existing_key']);
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post(route('admin.feature-flags.store'), [
                'key' => 'existing_key',
                'name' => 'Another',
                'rollout_percentage' => '100',
                'variant_a_label' => 'Control',
                'variant_b_label' => 'Treatment',
            ])
            ->assertSessionHasErrors('key');
    }

    public function test_flag_key_validates_format(): void
    {
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post(route('admin.feature-flags.store'), [
                'key' => 'Invalid Key!',
                'name' => 'Bad Key',
                'rollout_percentage' => '100',
                'variant_a_label' => 'Control',
                'variant_b_label' => 'Treatment',
            ])
            ->assertSessionHasErrors('key');
    }
}
