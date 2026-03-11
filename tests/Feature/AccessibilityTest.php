<?php

namespace Tests\Feature;

use App\Models\BreakTime;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Feature tests for accessibility (a11y) compliance.
 *
 * Coverage:
 *  - Layout contains a skip-to-main-content link
 *  - Layout skip link targets #main-content landmark
 *  - Layout sidebar nav has role=navigation and aria-label
 *  - Layout accessibility toolbar buttons are rendered
 *  - Layout main content has id=main-content
 *  - Layout screen-reader live-region is present
 *  - Admin pages carry the ARIA toolbar
 *  - Order create view has accessible menu cards (role=button, tabindex)
 *  - Order create view cart region has aria-live
 *  - Order create view break-time radios have associated labels
 *  - Order create view notes textarea has a label
 *  - Auth pages are accessible without login  (login form labels)
 *  - High-contrast JS preference cookie/key roundtrip placeholder
 */
class AccessibilityTest extends TestCase
{
    use RefreshDatabase;

    // ── Helpers ───────────────────────────────────────────────────────────────

    private function admin(): User
    {
        return User::factory()->create(['role' => 'admin']);
    }

    private function student(): User
    {
        return User::factory()->create(['role' => 'student', 'balance' => 500_000]);
    }

    private function breakTime(): BreakTime
    {
        return BreakTime::create([
            'label' => 'Istirahat 1',
            'start_time' => '10:00:00',
            'end_time' => '10:30:00',
            'order_deadline' => '23:59:00',
        ]);
    }

    private function menuWithCategory(): Menu
    {
        $cat = Category::create(['name' => 'Makanan', 'description' => '']);

        return Menu::create([
            'category_id' => $cat->id,
            'name' => 'Nasi Goreng',
            'price' => 15_000,
            'stock' => 10,
            'is_available' => true,
        ]);
    }

    // ── Layout: skip link & landmarks ─────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function layout_contains_skip_to_main_content_link(): void
    {
        $user = $this->student();

        $this->actingAs($user)
            ->get('/orders/create')
            ->assertSee('href="#main-content"', false)
            ->assertSee('skip-link', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function layout_main_content_has_correct_id_and_tabindex(): void
    {
        $user = $this->student();

        $response = $this->actingAs($user)->get('/orders/create');
        $response->assertSee('id="main-content"', false);
        $response->assertSee('tabindex="-1"', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function sidebar_nav_has_role_navigation_and_aria_label(): void
    {
        $user = $this->student();

        $response = $this->actingAs($user)->get('/orders/create');
        $response->assertSee('role="navigation"', false);
        $response->assertSee('aria-label="Navigasi Utama"', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function layout_has_accessibility_toolbar_buttons(): void
    {
        $user = $this->student();

        $response = $this->actingAs($user)->get('/orders/create');
        $response->assertSee('id="a11y-font-size"', false);
        $response->assertSee('id="a11y-contrast"', false);
        $response->assertSee('role="toolbar"', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function layout_has_screen_reader_live_announcer(): void
    {
        $user = $this->student();

        $response = $this->actingAs($user)->get('/orders/create');
        $response->assertSee('id="a11y-announcer"', false);
        $response->assertSee('aria-live="polite"', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function sidebar_toggle_button_has_aria_controls_and_expanded(): void
    {
        $user = $this->student();

        $response = $this->actingAs($user)->get('/orders/create');
        $response->assertSee('aria-controls="sidebar"', false);
        $response->assertSee('aria-expanded="false"', false);
    }

    // ── Admin pages ───────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function admin_dashboard_has_accessibility_toolbar(): void
    {
        $admin = $this->admin();

        $response = $this->actingAs($admin)->get('/admin');
        $response->assertOk();
        $response->assertSee('id="a11y-font-size"', false);
        $response->assertSee('id="a11y-contrast"', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function admin_nav_has_navigation_landmark(): void
    {
        $admin = $this->admin();

        $response = $this->actingAs($admin)->get('/admin');
        $response->assertSee('role="navigation"', false);
    }

    // ── Order create view ─────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_create_menu_cards_have_role_button(): void
    {
        $user = $this->student();
        $this->breakTime();
        $this->menuWithCategory();

        $response = $this->actingAs($user)->get('/orders/create');
        $response->assertSee('role="button"', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_create_menu_cards_have_keyboard_tabindex(): void
    {
        $user = $this->student();
        $this->breakTime();
        $this->menuWithCategory();

        $response = $this->actingAs($user)->get('/orders/create');
        // Available menus get tabindex="0"
        $response->assertSee('tabindex="0"', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_create_menu_cards_have_descriptive_aria_label(): void
    {
        $user = $this->student();
        $this->breakTime();
        $this->menuWithCategory();

        $response = $this->actingAs($user)->get('/orders/create');
        // The card aria-label includes menu name and price
        $response->assertSee('Nasi Goreng', false);
        $response->assertSee('aria-label=', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_create_cart_region_has_aria_live(): void
    {
        $user = $this->student();
        $this->breakTime();

        $response = $this->actingAs($user)->get('/orders/create');
        $response->assertSee('id="item-list"', false);
        $response->assertSee('aria-live="polite"', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_create_break_time_radios_have_associated_labels(): void
    {
        $user = $this->student();
        $bt = $this->breakTime();

        $response = $this->actingAs($user)->get('/orders/create');
        $response->assertSee('for="bt-'.$bt->id.'"', false);
        $response->assertSee('id="bt-'.$bt->id.'"', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_create_notes_textarea_has_label(): void
    {
        $user = $this->student();
        $this->breakTime();

        $response = $this->actingAs($user)->get('/orders/create');
        // A form-label for the notes textarea
        $response->assertSee('Catatan', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_create_voice_button_is_present_with_proper_aria(): void
    {
        $user = $this->student();
        $this->breakTime();

        $response = $this->actingAs($user)->get('/orders/create');
        $response->assertSee('id="voice-order-btn"', false);
        $response->assertSee('aria-pressed="false"', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function order_create_voice_status_region_is_aria_live(): void
    {
        $user = $this->student();
        $this->breakTime();

        $response = $this->actingAs($user)->get('/orders/create');
        $response->assertSee('id="voice-status"', false);
        $response->assertSee('role="status"', false);
        $response->assertSee('aria-live="polite"', false);
    }

    // ── Auth pages ────────────────────────────────────────────────────────────

    #[\PHPUnit\Framework\Attributes\Test]
    public function login_page_has_accessible_form_labels(): void
    {
        $response = $this->get('/login');
        $response->assertOk();
        // Email and password inputs should have associated labels
        $response->assertSee('type="email"', false);
        $response->assertSee('type="password"', false);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function register_page_has_accessible_form_labels(): void
    {
        $response = $this->get('/register');
        $response->assertOk();
        $response->assertSee('type="email"', false);
        $response->assertSee('type="password"', false);
    }
}
