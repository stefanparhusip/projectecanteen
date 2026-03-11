<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Daftar semua kategori beserta jumlah menu yang dimiliki.
     */
    public function index(): View
    {
        $categories = Category::withCount('menus')
            ->orderBy('name')
            ->get();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Form tambah kategori baru.
     */
    public function create(): View
    {
        return view('admin.categories.create');
    }

    /**
     * Route GET /categories/{category} — redirect ke halaman edit.
     * View "show" tidak diperlukan untuk resource internal admin.
     */
    public function show(Category $category): RedirectResponse
    {
        return redirect()->route('admin.categories.edit', $category);
    }

    /**
     * Simpan kategori baru.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:50|unique:categories,name',
        ], [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.unique' => 'Nama kategori sudah ada.',
            'name.max' => 'Nama kategori maksimal 50 karakter.',
        ]);

        Category::create($data);

        return redirect()->route('admin.categories.index')
            ->with('success', "Kategori \"{$data['name']}\" berhasil ditambahkan.");
    }

    /**
     * Form edit kategori.
     */
    public function edit(Category $category): View
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Simpan perubahan kategori.
     */
    public function update(Request $request, Category $category): RedirectResponse
    {
        $data = $request->validate([
            'name' => "required|string|max:50|unique:categories,name,{$category->id}",
        ], [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.unique' => 'Nama kategori sudah digunakan oleh kategori lain.',
            'name.max' => 'Nama kategori maksimal 50 karakter.',
        ]);

        $category->update($data);

        return redirect()->route('admin.categories.index')
            ->with('success', "Kategori \"{$category->name}\" berhasil diperbarui.");
    }

    /**
     * Hapus kategori.
     * Guard: tidak bisa dihapus jika masih ada menu yang menggunakannya.
     */
    public function destroy(Category $category): RedirectResponse
    {
        if ($category->menus()->count() > 0) {
            return back()->with('error',
                "Kategori \"{$category->name}\" tidak dapat dihapus karena masih digunakan oleh {$category->menus()->count()} menu. ".
                'Hapus atau pindahkan menu tersebut terlebih dahulu.'
            );
        }

        $name = $category->name;
        $category->delete();

        return redirect()->route('admin.categories.index')
            ->with('success', "Kategori \"{$name}\" berhasil dihapus.");
    }
}
