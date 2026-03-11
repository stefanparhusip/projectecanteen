<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @OA\Tag(name="Menus", description="Menu catalogue")
 */
class MenuController extends Controller
{
    /**
     * List available menus, optionally filtered by category.
     *
     * @OA\Get(
     *   path="/api/v1/menus",
     *   tags={"Menus"},
     *   summary="List available menus",
     *   security={{"sanctum":{}}},
     *
     *   @OA\Parameter(name="category_id", in="query", required=false, @OA\Schema(type="integer")),
     *   @OA\Parameter(name="search",      in="query", required=false, @OA\Schema(type="string")),
     *
     *   @OA\Response(response=200, description="Menu list",
     *
     *     @OA\JsonContent(
     *
     *       @OA\Property(property="data", type="array",
     *
     *         @OA\Items(ref="#/components/schemas/Menu")
     *       )
     *     )
     *   )
     * )
     */
    public function index(Request $request): JsonResponse
    {
        $request->validate([
            'category_id' => ['sometimes', 'integer', 'exists:categories,id'],
            'search' => ['sometimes', 'string', 'max:100'],
        ]);

        $menus = Menu::with('category')
            ->where('stock', '>', 0)
            ->when($request->category_id, fn ($q, $id) => $q->where('category_id', $id))
            ->when($request->search, fn ($q, $s) => $q->where('name', 'like', "%{$s}%"))
            ->orderBy('name')
            ->get()
            ->map(fn (Menu $m) => [
                'id' => $m->id,
                'name' => $m->name,
                'price' => (float) $m->price,
                'stock' => $m->stock,
                'image_url' => $m->image_url,
                'category' => $m->category?->name,
                'is_available' => $m->is_available,
            ]);

        return response()->json(['data' => $menus]);
    }

    /**
     * Show a single menu item.
     *
     * @OA\Get(
     *   path="/api/v1/menus/{id}",
     *   tags={"Menus"},
     *   summary="Show menu detail",
     *   security={{"sanctum":{}}},
     *
     *   @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *
     *   @OA\Response(response=200, description="Menu detail",
     *
     *     @OA\JsonContent(@OA\Property(property="data", ref="#/components/schemas/Menu"))
     *   ),
     *
     *   @OA\Response(response=404, description="Menu not found")
     * )
     */
    public function show(Menu $menu): JsonResponse
    {
        return response()->json([
            'data' => [
                'id' => $menu->id,
                'name' => $menu->name,
                'price' => (float) $menu->price,
                'stock' => $menu->stock,
                'image_url' => $menu->image_url,
                'category' => $menu->category?->name,
                'is_available' => $menu->is_available,
            ],
        ]);
    }
}
