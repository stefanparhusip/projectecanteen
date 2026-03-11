<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Http\Controllers\Api\V1\MenuController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Controllers\Api\V1\MenuController
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-a26064cad7774adf86de421862daed324d32ba02ba71a72a8d1c6fc5e7de9f43',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Http\\Controllers\\Api\\V1\\MenuController',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Http/Controllers/Api/V1/MenuController.php',
            ],
        ],
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'name' => 'App\\Http\\Controllers\\Api\\V1\\MenuController',
        'shortName' => 'MenuController',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @OA\\Tag(name="Menus", description="Menu catalogue")
 */',
        'attributes' => [
        ],
        'startLine' => 13,
        'endLine' => 89,
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
            'index' => [
                'name' => 'index',
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
                        'startLine' => 34,
                        'endLine' => 34,
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
 * List available menus, optionally filtered by category.
 *
 * @OA\\Get(
 *   path="/api/v1/menus",
 *   tags={"Menus"},
 *   summary="List available menus",
 *   security={{"sanctum":{}}},
 *   @OA\\Parameter(name="category_id", in="query", required=false, @OA\\Schema(type="integer")),
 *   @OA\\Parameter(name="search",      in="query", required=false, @OA\\Schema(type="string")),
 *   @OA\\Response(response=200, description="Menu list",
 *     @OA\\JsonContent(
 *       @OA\\Property(property="data", type="array",
 *         @OA\\Items(ref="#/components/schemas/Menu")
 *       )
 *     )
 *   )
 * )
 */',
                'startLine' => 34,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Api\\V1',
                'declaringClassName' => 'App\\Http\\Controllers\\Api\\V1\\MenuController',
                'implementingClassName' => 'App\\Http\\Controllers\\Api\\V1\\MenuController',
                'currentClassName' => 'App\\Http\\Controllers\\Api\\V1\\MenuController',
                'aliasName' => null,
            ],
            'show' => [
                'name' => 'show',
                'parameters' => [
                    'menu' => [
                        'name' => 'menu',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Menu',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 75,
                        'endLine' => 75,
                        'startColumn' => 26,
                        'endColumn' => 35,
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
 * Show a single menu item.
 *
 * @OA\\Get(
 *   path="/api/v1/menus/{id}",
 *   tags={"Menus"},
 *   summary="Show menu detail",
 *   security={{"sanctum":{}}},
 *   @OA\\Parameter(name="id", in="path", required=true, @OA\\Schema(type="integer")),
 *   @OA\\Response(response=200, description="Menu detail",
 *     @OA\\JsonContent(@OA\\Property(property="data", ref="#/components/schemas/Menu"))
 *   ),
 *   @OA\\Response(response=404, description="Menu not found")
 * )
 */',
                'startLine' => 75,
                'endLine' => 88,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Api\\V1',
                'declaringClassName' => 'App\\Http\\Controllers\\Api\\V1\\MenuController',
                'implementingClassName' => 'App\\Http\\Controllers\\Api\\V1\\MenuController',
                'currentClassName' => 'App\\Http\\Controllers\\Api\\V1\\MenuController',
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
