<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Services\PromoEngine.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Services\PromoEngine
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-ac1ca0d52f1cc77c9c3cf492699a9c3384d19165da9481a99aa96712498e8477',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Services\\PromoEngine',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Services/PromoEngine.php',
            ],
        ],
        'namespace' => 'App\\Services',
        'name' => 'App\\Services\\PromoEngine',
        'shortName' => 'PromoEngine',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Promotion evaluation engine.
 *
 * Cart items are plain arrays (or array-accessible objects) with keys:
 *   menu_id  (int)
 *   price    (float)   — unit price in Rupiah
 *   quantity (int)
 *
 * Stacking rules
 * ──────────────
 *   • Stackable promos combine freely with each other.
 *   • Non-stackable promos: only the one that yields the highest discount
 *     applies (priority acts as a tiebreak when discounts are equal).
 *   • The final discount = all stackable discounts
 *                        + best non-stackable discount (if any).
 *   • Total discount is capped at the raw cart total (cannot go negative).
 */',
        'attributes' => [
        ],
        'startLine' => 26,
        'endLine' => 171,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'evaluate' => [
                'name' => 'evaluate',
                'parameters' => [
                    'cartItems' => [
                        'name' => 'cartItems',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Support\\Collection',
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
                        'startColumn' => 30,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'now' => [
                        'name' => 'now',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 34,
                                'endLine' => 34,
                                'startTokenPos' => 50,
                                'startFilePos' => 1144,
                                'endTokenPos' => 50,
                                'endFilePos' => 1147,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Carbon',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'null',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 34,
                        'endLine' => 34,
                        'startColumn' => 53,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'App\\Services\\PromoResult',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Evaluate all active, in-range promotions for a cart.
 *
 * @param  Collection  $cartItems  Items with keys: menu_id, price, quantity
 * @param  Carbon|null $now        Defaults to now() (Asia/Jakarta)
 */',
                'startLine' => 34,
                'endLine' => 87,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\PromoEngine',
                'implementingClassName' => 'App\\Services\\PromoEngine',
                'currentClassName' => 'App\\Services\\PromoEngine',
                'aliasName' => null,
            ],
            'isApplicable' => [
                'name' => 'isApplicable',
                'parameters' => [
                    'promo' => [
                        'name' => 'promo',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Promotion',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 91,
                        'endLine' => 91,
                        'startColumn' => 35,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'cartItems' => [
                        'name' => 'cartItems',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Support\\Collection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 91,
                        'endLine' => 91,
                        'startColumn' => 53,
                        'endColumn' => 73,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'now' => [
                        'name' => 'now',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 91,
                        'endLine' => 91,
                        'startColumn' => 76,
                        'endColumn' => 86,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 91,
                'endLine' => 100,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\PromoEngine',
                'implementingClassName' => 'App\\Services\\PromoEngine',
                'currentClassName' => 'App\\Services\\PromoEngine',
                'aliasName' => null,
            ],
            'checkBundle' => [
                'name' => 'checkBundle',
                'parameters' => [
                    'params' => [
                        'name' => 'params',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'array',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 109,
                        'endLine' => 109,
                        'startColumn' => 34,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'cartItems' => [
                        'name' => 'cartItems',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Support\\Collection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 109,
                        'endLine' => 109,
                        'startColumn' => 49,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Bundle: fires when the total qualifying-item quantity >= min_items.
 *
 * params.menu_ids — empty/absent = any menu qualifies;
 *                   non-empty    = only those menu IDs count.
 * params.min_items — minimum total quantity, default 2.
 */',
                'startLine' => 109,
                'endLine' => 123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\PromoEngine',
                'implementingClassName' => 'App\\Services\\PromoEngine',
                'currentClassName' => 'App\\Services\\PromoEngine',
                'aliasName' => null,
            ],
            'checkTime' => [
                'name' => 'checkTime',
                'parameters' => [
                    'params' => [
                        'name' => 'params',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'array',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 132,
                        'endLine' => 132,
                        'startColumn' => 32,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'now' => [
                        'name' => 'now',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 132,
                        'endLine' => 132,
                        'startColumn' => 47,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Time / Happy Hour: fires when $now falls within the configured window.
 *
 * params.days       — array of weekday ints (0=Sun…6=Sat), default all days.
 * params.start_time — "HH:MM", default "00:00".
 * params.end_time   — "HH:MM", default "23:59".
 */',
                'startLine' => 132,
                'endLine' => 150,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\PromoEngine',
                'implementingClassName' => 'App\\Services\\PromoEngine',
                'currentClassName' => 'App\\Services\\PromoEngine',
                'aliasName' => null,
            ],
            'calculateSingleDiscount' => [
                'name' => 'calculateSingleDiscount',
                'parameters' => [
                    'promo' => [
                        'name' => 'promo',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Promotion',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 157,
                        'endLine' => 157,
                        'startColumn' => 45,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'rawTotal' => [
                        'name' => 'rawTotal',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'float',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 157,
                        'endLine' => 157,
                        'startColumn' => 63,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'cartItems' => [
                        'name' => 'cartItems',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Support\\Collection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 157,
                        'endLine' => 157,
                        'startColumn' => 80,
                        'endColumn' => 100,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'float',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Public single-promo discount calculator — used for per-promo audit trail.
 */',
                'startLine' => 157,
                'endLine' => 160,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\PromoEngine',
                'implementingClassName' => 'App\\Services\\PromoEngine',
                'currentClassName' => 'App\\Services\\PromoEngine',
                'aliasName' => null,
            ],
            'calcDiscount' => [
                'name' => 'calcDiscount',
                'parameters' => [
                    'promo' => [
                        'name' => 'promo',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Promotion',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 162,
                        'endLine' => 162,
                        'startColumn' => 35,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'rawTotal' => [
                        'name' => 'rawTotal',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'float',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 162,
                        'endLine' => 162,
                        'startColumn' => 53,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'cartItems' => [
                        'name' => 'cartItems',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Support\\Collection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 162,
                        'endLine' => 162,
                        'startColumn' => 70,
                        'endColumn' => 90,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'float',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 162,
                'endLine' => 170,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\PromoEngine',
                'implementingClassName' => 'App\\Services\\PromoEngine',
                'currentClassName' => 'App\\Services\\PromoEngine',
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
