<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Http\Controllers\Api\V1\BalanceController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Controllers\Api\V1\BalanceController
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-3fc2c2873a4a4e7af7f4c50fa8b4a42f175623b297aa37d3c1572b7c409490fc',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Http\\Controllers\\Api\\V1\\BalanceController',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Http/Controllers/Api/V1/BalanceController.php',
            ],
        ],
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'name' => 'App\\Http\\Controllers\\Api\\V1\\BalanceController',
        'shortName' => 'BalanceController',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @OA\\Tag(name="Balance", description="User balance enquiry")
 */',
        'attributes' => [
        ],
        'startLine' => 12,
        'endLine' => 67,
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
                        'startLine' => 36,
                        'endLine' => 36,
                        'startColumn' => 26,
                        'endColumn' => 41,
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
 * Return the authenticated user\'s current balance and recent transactions.
 *
 * @OA\\Get(
 *   path="/api/v1/balance",
 *   tags={"Balance"},
 *   summary="Get user balance",
 *   security={{"sanctum":{}}},
 *   @OA\\Response(response=200, description="Balance info",
 *     @OA\\JsonContent(
 *       @OA\\Property(property="data", type="object",
 *         @OA\\Property(property="balance",      type="number", format="float"),
 *         @OA\\Property(property="points_balance", type="integer"),
 *         @OA\\Property(property="transactions", type="array",
 *           @OA\\Items(ref="#/components/schemas/BalanceTransaction")
 *         )
 *       )
 *     )
 *   ),
 *   @OA\\Response(response=403, description="Token missing balance:read ability")
 * )
 */',
                'startLine' => 36,
                'endLine' => 66,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Api\\V1',
                'declaringClassName' => 'App\\Http\\Controllers\\Api\\V1\\BalanceController',
                'implementingClassName' => 'App\\Http\\Controllers\\Api\\V1\\BalanceController',
                'currentClassName' => 'App\\Http\\Controllers\\Api\\V1\\BalanceController',
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
