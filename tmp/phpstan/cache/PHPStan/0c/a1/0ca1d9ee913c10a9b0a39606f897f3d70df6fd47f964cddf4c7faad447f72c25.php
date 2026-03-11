<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Http\Controllers\Api\V1\AuthController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Controllers\Api\V1\AuthController
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-9cf8f4090506c079e8dc2f141182a069dddc1ff504ba59d9d702eb485acfff6e',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Http\\Controllers\\Api\\V1\\AuthController',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Http/Controllers/Api/V1/AuthController.php',
            ],
        ],
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'name' => 'App\\Http\\Controllers\\Api\\V1\\AuthController',
        'shortName' => 'AuthController',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @OA\\Tag(name="Auth", description="Token issuance and revocation")
 */',
        'attributes' => [
        ],
        'startLine' => 15,
        'endLine' => 88,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'App\\Http\\Controllers\\Controller',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'login' => [
                'name' => 'login',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Http\\Request',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 43,
                        'endLine' => 43,
                        'startColumn' => 27,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Http\\JsonResponse',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Issue a Sanctum personal access token.
 *
 * @OA\\Post(
 *   path="/api/v1/auth/login",
 *   tags={"Auth"},
 *   summary="Issue API token",
 *   @OA\\RequestBody(required=true,
 *     @OA\\JsonContent(
 *       required={"email","password"},
 *       @OA\\Property(property="email",    type="string", format="email"),
 *       @OA\\Property(property="password", type="string", format="password"),
 *       @OA\\Property(property="abilities", type="array", @OA\\Items(type="string"),
 *         example={"menus:read","orders:create","orders:read","balance:read"})
 *     )
 *   ),
 *   @OA\\Response(response=200, description="Token issued",
 *     @OA\\JsonContent(
 *       @OA\\Property(property="token",      type="string"),
 *       @OA\\Property(property="token_type", type="string", example="bearer"),
 *       @OA\\Property(property="abilities",  type="array", @OA\\Items(type="string"))
 *     )
 *   ),
 *   @OA\\Response(response=422, description="Invalid credentials")
 * )
 */',
                'startLine' => 43,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Api\\V1',
                'declaringClassName' => 'App\\Http\\Controllers\\Api\\V1\\AuthController',
                'implementingClassName' => 'App\\Http\\Controllers\\Api\\V1\\AuthController',
                'currentClassName' => 'App\\Http\\Controllers\\Api\\V1\\AuthController',
                'aliasName' => null,
            ],
            'logout' => [
                'name' => 'logout',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Http\\Request',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 82,
                        'endLine' => 82,
                        'startColumn' => 28,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Http\\JsonResponse',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Revoke the current token.
 *
 * @OA\\Post(
 *   path="/api/v1/auth/logout",
 *   tags={"Auth"},
 *   summary="Revoke current token",
 *   security={{"sanctum":{}}},
 *   @OA\\Response(response=200, description="Token revoked")
 * )
 */',
                'startLine' => 82,
                'endLine' => 87,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Api\\V1',
                'declaringClassName' => 'App\\Http\\Controllers\\Api\\V1\\AuthController',
                'implementingClassName' => 'App\\Http\\Controllers\\Api\\V1\\AuthController',
                'currentClassName' => 'App\\Http\\Controllers\\Api\\V1\\AuthController',
                'aliasName' => null,
            ],
        ],
        'traitsData' => [
            'aliases' => [
            ],
            'modifiers' => [
            ],
            'precedences' => [
            ],
            'hashes' => [
            ],
        ],
    ],
]);
