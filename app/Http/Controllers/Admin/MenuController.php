<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MenuController extends Controller
{
    public function index(): View
    {
        $menus = Menu::with('category')
            ->latest()
            ->paginate(15);

        return view('admin.menus.index', compact('menus'));
    }

    public function create(): View
    {
        $categories = Category::all();

        return view('admin.menus.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image_url' => 'nullable|url|max:2048',
        ]);

        Menu::create($data);

        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit(Menu $menu): View
    {
        $categories = Category::all();

        return view('admin.menus.edit', compact('menu', 'categories'));
    }

    public function update(Request $request, Menu $menu): RedirectResponse
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image_url' => 'nullable|url|max:2048',
        ]);

        $menu->update($data);

        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu berhasil diperbarui.');
    }

    public function destroy(Menu $menu): RedirectResponse
    {
        // Soft delete — foto TIDAK dihapus agar bisa di-restore
        $menu->delete();

        return redirect()->route('admin.menus.index')
            ->with('success', "Menu \"{$menu->name}\" dipindahkan ke Trash.");
    }

    /**
     * Atur stok menu: set manual, tambah, atau kurangi.
     * POST body: action (set|add|subtract), amount (integer >= 0)
     */
    public function adjustStock(Request $request, Menu $menu): RedirectResponse
    {
        $data = $request->validate([
            'action' => 'required|in:set,add,subtract',
            'amount' => 'required|integer|min:0',
        ]);

        $newStock = match ($data['action']) {
            'set' => $data['amount'],
            'add' => $menu->stock + $data['amount'],
            'subtract' => max(0, $menu->stock - $data['amount']),
        };

        $menu->update(['stock' => $newStock]);

        $status = $newStock > 0 ? 'Tersedia' : 'Habis';

        return back()->with('success',
            "Stok \"{$menu->name}\" diperbarui menjadi {$newStock} ({$status}).");
    }

    // ── Trash / Restore / Force Delete ───────────────────────────────────────

    /** Tampilkan semua menu yang di-soft-delete */
    public function trash(): View
    {
        $menus = Menu::onlyTrashed()
            ->with('category')
            ->latest('deleted_at')
            ->paginate(20);

        return view('admin.trash.menus', compact('menus'));
    }

    /** Kembalikan menu dari trash */
    public function restore(int $id): RedirectResponse
    {
        $menu = Menu::onlyTrashed()->findOrFail($id);
        $menu->restore();

        return redirect()->route('admin.trash.menus')
            ->with('success', "Menu \"{$menu->name}\" berhasil dipulihkan.");
    }

    /** Hapus menu secara permanen */
    public function forceDelete(int $id): RedirectResponse
    {
        $menu = Menu::onlyTrashed()->findOrFail($id);

        $menu->forceDelete();

        return redirect()->route('admin.trash.menus')
            ->with('success', "Menu \"{$menu->name}\" dihapus permanen.");
    }
}
