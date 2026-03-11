<?php

namespace Tests\Feature;

use App\Models\FeatureFlag;
use App\Models\Menu;
use App\Models\User;
use App\Services\DemoModeService;
use Database\Seeders\DemoSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DemoModeTest extends TestCase
{
    use RefreshDatabase;

    private DemoModeService $demo;

    protected function setUp(): void
    {
        parent::setUp();
        $this->demo = new DemoModeService;
    }

    // ── Helpers ──────────────────────────────────────────────────────────────

    private function admin(): User
    {
        return User::factory()->create(['role' => 'admin']);
    }

    private function student(): User
    {
        return User::factory()->create(['role' => 'student']);
    }

    // ── DemoModeService — read ────────────────────────────────────────────────

    /** @test */
    public function demo_mode_is_disabled_by_default(): void
    {
        $this->assertFalse($this->demo->isEnabled());
    }

    /** @test */
    public function demo_mode_returns_true_when_feature_flag_is_enabled(): void
    {
        FeatureFlag::create([
            'key'        => DemoModeService::FLAG_KEY,
            'name'       => 'Demo Mode',
            'is_enabled' => true,
        ]);

        $fresh = new DemoModeService; // bypass in-test cache
        $this->assertTrue($fresh->isEnabled());
    }

    /** @test */
    public function can_enable_returns_false_on_production(): void
    {
        config()->set('app.env', 'production');

        $this->assertFalse($this->demo->canEnable());
    }

    /** @test */
    public function can_enable_returns_true_on_non_production(): void
    {
        // Default test env is testing, not production
        $this->assertTrue($this->demo->canEnable());
    }

    // ── DemoModeService — enable / disable ───────────────────────────────────

    /** @test */
    public function enable_creates_feature_flag_and_seeds_data(): void
    {
        $this->demo->enable();

        $this->assertDatabaseHas('feature_flags', [
            'key'        => DemoModeService::FLAG_KEY,
            'is_enabled' => true,
        ]);

        // Seeder should have run
        $this->assertDatabaseHas('users', ['email' => 'demo-admin' . DemoModeService::DEMO_EMAIL_DOMAIN]);
    }

    /** @test */
    public function enable_throws_when_called_in_production(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('cannot be enabled in production');

        config()->set('app.env', 'production');

        $this->demo->enable();
    }

    /** @test */
    public function disable_sets_feature_flag_to_false(): void
    {
        FeatureFlag::create([
            'key'        => DemoModeService::FLAG_KEY,
            'name'       => 'Demo Mode',
            'is_enabled' => true,
        ]);

        $this->demo->disable();

        $this->assertDatabaseHas('feature_flags', [
            'key'        => DemoModeService::FLAG_KEY,
            'is_enabled' => false,
        ]);
    }

    // ── DemoSeeder ───────────────────────────────────────────────────────────

    /** @test */
    public function demo_seeder_creates_demo_admin_user(): void
    {
        (new DemoSeeder)->run();

        $this->assertDatabaseHas('users', [
            'email' => 'demo-admin' . DemoModeService::DEMO_EMAIL_DOMAIN,
            'role'  => 'admin',
        ]);
    }

    /** @test */
    public function demo_seeder_creates_three_demo_students(): void
    {
        (new DemoSeeder)->run();

        $count = User::where('email', 'like', '%' . DemoModeService::DEMO_EMAIL_DOMAIN)
            ->where('role', 'student')
            ->count();

        $this->assertEquals(3, $count);
    }

    /** @test */
    public function demo_seeder_creates_eight_demo_menus(): void
    {
        (new DemoSeeder)->run();

        $count = Menu::where('name', 'like', DemoModeService::DEMO_MENU_PREFIX . '%')->count();
        $this->assertEquals(8, $count);
    }

    /** @test */
    public function demo_seeder_is_idempotent_running_twice_does_not_duplicate(): void
    {
        (new DemoSeeder)->run();
        (new DemoSeeder)->run();

        $count = User::where('email', 'like', '%' . DemoModeService::DEMO_EMAIL_DOMAIN)->count();
        $this->assertEquals(4, $count); // 1 admin + 3 students
    }

    // ── purgeDemoData / resetDemoData ─────────────────────────────────────────

    /** @test */
    public function purge_deletes_all_demo_tagged_users(): void
    {
        (new DemoSeeder)->run();

        $this->demo->purgeDemoData();

        $remaining = User::withTrashed()
            ->where('email', 'like', '%' . DemoModeService::DEMO_EMAIL_DOMAIN)
            ->count();

        $this->assertEquals(0, $remaining);
    }

    /** @test */
    public function purge_deletes_all_demo_tagged_menus(): void
    {
        (new DemoSeeder)->run();

        $this->demo->purgeDemoData();

        $remaining = Menu::withTrashed()
            ->where('name', 'like', DemoModeService::DEMO_MENU_PREFIX . '%')
            ->count();

        $this->assertEquals(0, $remaining);
    }

    /** @test */
    public function reset_throws_in_production(): void
    {
        $this->expectException(\RuntimeException::class);

        config()->set('app.env', 'production');

        $this->demo->resetDemoData();
    }

    /** @test */
    public function reset_purges_and_re_seeds_demo_data(): void
    {
        (new DemoSeeder)->run();

        // Modify a demo user to verify it gets reset
        User::where('email', 'like', '%' . DemoModeService::DEMO_EMAIL_DOMAIN)
            ->update(['name' => 'Modified']);

        $this->demo->resetDemoData();

        // Name should be back to original
        $this->assertDatabaseMissing('users', ['name' => 'Modified']);
        $this->assertDatabaseHas('users', ['email' => 'demo-admin' . DemoModeService::DEMO_EMAIL_DOMAIN]);
    }

    // ── HTTP: Admin Controller ────────────────────────────────────────────────

    /** @test */
    public function admin_can_view_demo_mode_panel(): void
    {
        $admin = $this->admin();

        $this->actingAs($admin)
            ->get(route('admin.demo-mode.index'))
            ->assertOk()
            ->assertViewIs('admin.demo-mode.index')
            ->assertViewHas(['isEnabled', 'canEnable', 'demoUserCount', 'demoMenuCount']);
    }

    /** @test */
    public function student_cannot_access_demo_mode_panel(): void
    {
        $this->actingAs($this->student())
            ->get(route('admin.demo-mode.index'))
            ->assertForbidden();
    }

    /** @test */
    public function admin_can_enable_demo_mode_via_http(): void
    {
        $admin = $this->admin();

        $this->actingAs($admin)
            ->post(route('admin.demo-mode.enable'))
            ->assertRedirect(route('admin.demo-mode.index'))
            ->assertSessionHas('success');

        $this->assertDatabaseHas('feature_flags', [
            'key'        => DemoModeService::FLAG_KEY,
            'is_enabled' => true,
        ]);
    }

    /** @test */
    public function admin_can_disable_demo_mode_via_http(): void
    {
        FeatureFlag::create([
            'key'        => DemoModeService::FLAG_KEY,
            'name'       => 'Demo Mode',
            'is_enabled' => true,
        ]);

        $admin = $this->admin();

        $this->actingAs($admin)
            ->post(route('admin.demo-mode.disable'))
            ->assertRedirect(route('admin.demo-mode.index'))
            ->assertSessionHas('success');

        $this->assertDatabaseHas('feature_flags', [
            'key'        => DemoModeService::FLAG_KEY,
            'is_enabled' => false,
        ]);
    }

    /** @test */
    public function admin_can_reset_demo_data_via_http(): void
    {
        $admin = $this->admin();
        (new DemoSeeder)->run();

        $this->actingAs($admin)
            ->post(route('admin.demo-mode.reset'))
            ->assertRedirect(route('admin.demo-mode.index'))
            ->assertSessionHas('success');

        // Demo data was re-seeded
        $this->assertDatabaseHas('users', ['email' => 'demo-admin' . DemoModeService::DEMO_EMAIL_DOMAIN]);
    }

    /** @test */
    public function demo_mode_constants_are_correct(): void
    {
        $this->assertStringEndsWith('.local', DemoModeService::DEMO_EMAIL_DOMAIN);
        $this->assertStringStartsWith('[', DemoModeService::DEMO_MENU_PREFIX);
        $this->assertEquals('demo_mode', DemoModeService::FLAG_KEY);
    }
}
