<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

/**
 * @OA\Tag(name="Auth", description="Token issuance and revocation")
 */
class AuthController extends Controller
{
    /**
     * Issue a Sanctum personal access token.
     *
     * @OA\Post(
     *   path="/api/v1/auth/login",
     *   tags={"Auth"},
     *   summary="Issue API token",
     *
     *   @OA\RequestBody(required=true,
     *
     *     @OA\JsonContent(
     *       required={"email","password"},
     *
     *       @OA\Property(property="email",    type="string", format="email"),
     *       @OA\Property(property="password", type="string", format="password"),
     *       @OA\Property(property="abilities", type="array", @OA\Items(type="string"),
     *         example={"menus:read","orders:create","orders:read","balance:read"})
     *     )
     *   ),
     *
     *   @OA\Response(response=200, description="Token issued",
     *
     *     @OA\JsonContent(
     *
     *       @OA\Property(property="token",      type="string"),
     *       @OA\Property(property="token_type", type="string", example="bearer"),
     *       @OA\Property(property="abilities",  type="array", @OA\Items(type="string"))
     *     )
     *   ),
     *
     *   @OA\Response(response=422, description="Invalid credentials")
     * )
     */
    public function login(Request $request): JsonResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'abilities' => ['sometimes', 'array'],
            'abilities.*' => ['string', 'in:menus:read,orders:create,orders:read,balance:read'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Kredensial yang diberikan tidak valid.'],
            ]);
        }

        $abilities = $request->input('abilities', ['menus:read', 'orders:read', 'balance:read']);

        $token = $user->createToken('api-token', $abilities);

        return response()->json([
            'token' => $token->plainTextToken,
            'token_type' => 'bearer',
            'abilities' => $abilities,
        ]);
    }

    /**
     * Revoke the current token.
     *
     * @OA\Post(
     *   path="/api/v1/auth/logout",
     *   tags={"Auth"},
     *   summary="Revoke current token",
     *   security={{"sanctum":{}}},
     *
     *   @OA\Response(response=200, description="Token revoked")
     * )
     */
    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Token berhasil dicabut.']);
    }
}
