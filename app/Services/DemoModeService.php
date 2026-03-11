<?php

namespace App\Services;

use App\Models\FeatureFlag;
use Database\Seeders\DemoSeeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class DemoModeService
{
    /** Feature-flag key used to persist demo mode state. */
    public const FLAG_KEY = 'demo_mode';

    /** Cache TTL in seconds for the enabled check. */
    private const CACHE_TTL = 60;

    /** Email domain that identifies all demo-seeded users. */
    public const DEMO_EMAIL_DOMAIN = '@demo.ecanteen.local';

    /** Name prefix that identifies all demo-seeded menus. */
    public const DEMO_MENU_PREFIX = '[Demo]';

    // ── Read ─────────────────────────────────────────────────────────────────

    /**
     * Whether demo mode is currently active.
     */
    public function isEnabled(): bool
    {
        return Cache::remember(self::FLAG_KEY . ':enabled', self::CACHE_TTL, function () {
            return (bool) FeatureFlag::where('key', self::FLAG_KEY)->value('is_enabled');
        });
    }

    /**
     * Whether demo mode CAN be enabled in the current environment.
     * Deliberately blocked on production to protect real data.
     */
    public function canEnable(): bool
    {
        return config('app.env') !== 'production';
    }

    // ── Write ────────────────────────────────────────────────────────────────

    /**
     * Enable demo mode: persist flag + seed demo data.
     *
     * @throws \RuntimeException when called in production
     */
    public function enable(): void
    {
        if (! $this->canEnable()) {
            throw new \RuntimeException('Demo mode cannot be enabled in production.');
        }

        FeatureFlag::updateOrCreate(
            ['key' => self::FLAG_KEY],
            [
                'name'               => 'Demo Mode',
                'description'        => 'Enables demo users/menus for presentation purposes.',
                'is_enabled'         => true,
                'rollout_percentage' => 100,
            ]
        );

        $this->flushCache();
        $this->seedDemoData();
    }

    /**
     * Disable demo mode (demo data is left in place; use resetDemoData to remove it).
     */
    public function disable(): void
    {
        FeatureFlag::where('key', self::FLAG_KEY)->update(['is_enabled' => false]);
        $this->flushCache();
    }

    /**
     * Delete all demo-tagged records and re-run the DemoSeeder.
     *
     * @throws \RuntimeException when called in production
     */
    public function resetDemoData(): void
    {
        if (! $this->canEnable()) {
            throw new \RuntimeException('Demo data cannot be reset in production.');
        }

        $this->purgeDemoData();
        $this->seedDemoData();
    }

    // ── Private helpers ──────────────────────────────────────────────────────

    public function seedDemoData(): void
    {
        Artisan::call('db:seed', ['--class' => DemoSeeder::class, '--force' => true]);
    }

    public function purgeDemoData(): void
    {
        \App\Models\User::withTrashed()
            ->where('email', 'like', '%' . self::DEMO_EMAIL_DOMAIN)
            ->forceDelete();

        \App\Models\Menu::withTrashed()
            ->where('name', 'like', self::DEMO_MENU_PREFIX . '%')
            ->forceDelete();
    }

    private function flushCache(): void
    {
        Cache::forget(self::FLAG_KEY . ':enabled');
    }
}
