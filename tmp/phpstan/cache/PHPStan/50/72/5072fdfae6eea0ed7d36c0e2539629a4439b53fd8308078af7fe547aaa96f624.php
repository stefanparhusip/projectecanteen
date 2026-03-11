<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Http\Controllers\Api\V1\OrderController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Controllers\Api\V1\OrderController
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-02790b04d64209006fac49651680db85ff184575be3ab988c35fae677e605769',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Http/Controllers/Api/V1/OrderController.php',
            ],
        ],
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'name' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
        'shortName' => 'OrderController',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @OA\\Tag(name="Orders", description="Order placement and status")
 */',
        'attributes' => [
        ],
        'startLine' => 18,
        'endLine' => 184,
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
            'store' => [
                'name' => 'store',
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
                        'startLine' => 47,
                        'endLine' => 47,
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
 * Create a new order.
 *
 * @OA\\Post(
 *   path="/api/v1/orders",
 *   tags={"Orders"},
 *   summary="Create order",
 *   security={{"sanctum":{}}},
 *   @OA\\RequestBody(required=true,
 *     @OA\\JsonContent(
 *       required={"break_time_id","items"},
 *       @OA\\Property(property="break_time_id", type="integer"),
 *       @OA\\Property(property="items", type="array",
 *         @OA\\Items(
 *           @OA\\Property(property="menu_id",  type="integer"),
 *           @OA\\Property(property="quantity", type="integer", minimum=1)
 *         )
 *       ),
 *       @OA\\Property(property="note", type="string", nullable=true)
 *     )
 *   ),
 *   @OA\\Response(response=201, description="Order created",
 *     @OA\\JsonContent(@OA\\Property(property="data", ref="#/components/schemas/Order"))
 *   ),
 *   @OA\\Response(response=422, description="Validation or business-rule error")
 * )
 */',
                'startLine' => 47,
                'endLine' => 127,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Api\\V1',
                'declaringClassName' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
                'implementingClassName' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
                'currentClassName' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
                'aliasName' => null,
            ],
            'show' => [
                'name' => 'show',
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
                        'startLine' => 145,
                        'endLine' => 145,
                        'startColumn' => 26,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'order' => [
                        'name' => 'order',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Order',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 145,
                        'endLine' => 145,
                        'startColumn' => 44,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
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
 * Get order status.
 *
 * @OA\\Get(
 *   path="/api/v1/orders/{id}",
 *   tags={"Orders"},
 *   summary="Get order status",
 *   security={{"sanctum":{}}},
 *   @OA\\Parameter(name="id", in="path", required=true, @OA\\Schema(type="integer")),
 *   @OA\\Response(response=200, description="Order detail",
 *     @OA\\JsonContent(@OA\\Property(property="data", ref="#/components/schemas/Order"))
 *   ),
 *   @OA\\Response(response=403, description="Not your order"),
 *   @OA\\Response(response=404, description="Order not found")
 * )
 */',
                'startLine' => 145,
                'endLine' => 152,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Api\\V1',
                'declaringClassName' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
                'implementingClassName' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
                'currentClassName' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
                'aliasName' => null,
            ],
            'checkAbility' => [
                'name' => 'checkAbility',
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
                        'startLine' => 156,
                        'endLine' => 156,
                        'startColumn' => 35,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ability' => [
                        'name' => 'ability',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 156,
                        'endLine' => 156,
                        'startColumn' => 53,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 156,
                'endLine' => 163,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Http\\Controllers\\Api\\V1',
                'declaringClassName' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
                'implementingClassName' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
                'currentClassName' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
                'aliasName' => null,
            ],
            'formatOrder' => [
                'name' => 'formatOrder',
                'parameters' => [
                    'order' => [
                        'name' => 'order',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Order',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 165,
                        'endLine' => 165,
                        'startColumn' => 34,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 165,
                'endLine' => 183,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Http\\Controllers\\Api\\V1',
                'declaringClassName' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
                'implementingClassName' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
                'currentClassName' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
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
