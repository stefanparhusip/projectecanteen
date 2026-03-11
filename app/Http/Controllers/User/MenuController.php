<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BreakTime;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MenuController extends Controller
{
    public function index(Request $request): View
    {
        $categories = Category::all();
        $breakTimes = BreakTime::orderBy('start_time')->get();
        $categoryId = $request->input('category_id');

        $menus = Menu::with('category')
            ->where('stock', '>', 0)
            ->when($categoryId, fn ($q) => $q->where('category_id', $categoryId))
            ->latest()
            ->paginate(12)
            ->withQueryString();

        return view('user.menus.index', compact('menus', 'categories', 'breakTimes', 'categoryId'));
    }
}
