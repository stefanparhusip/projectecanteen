<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/sanctum/src/PersonalAccessToken.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Sanctum\PersonalAccessToken
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-5f4e3cf12f9b900c207fc113967a558b2c1c602f6da7f930c2a3ca991730afae-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/sanctum/src/PersonalAccessToken.php',
            ],
        ],
        'namespace' => 'Laravel\\Sanctum',
        'name' => 'Laravel\\Sanctum\\PersonalAccessToken',
        'shortName' => 'PersonalAccessToken',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 93,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
        'implementsClassNames' => [
            0 => 'Laravel\\Sanctum\\Contracts\\HasAbilities',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'casts' => [
                'declaringClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'implementingClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'name' => 'casts',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'abilities\' => \'json\', \'last_used_at\' => \'datetime\', \'expires_at\' => \'datetime\']',
                    'attributes' => [
                        'startLine' => 15,
                        'endLine' => 19,
                        'startTokenPos' => 39,
                        'startFilePos' => 325,
                        'endTokenPos' => 62,
                        'endFilePos' => 436,
                    ],
                ],
                'docComment' => '/**
 * The attributes that should be cast to native types.
 *
 * @var array<string, string>
 */',
                'attributes' => [
                ],
                'startLine' => 15,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 6,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'fillable' => [
                'declaringClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'implementingClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'name' => 'fillable',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'name\', \'token\', \'abilities\', \'expires_at\']',
                    'attributes' => [
                        'startLine' => 26,
                        'endLine' => 31,
                        'startTokenPos' => 73,
                        'startFilePos' => 568,
                        'endTokenPos' => 87,
                        'endFilePos' => 650,
                    ],
                ],
                'docComment' => '/**
 * The attributes that are mass assignable.
 *
 * @var array<int, string>
 */',
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 6,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'hidden' => [
                'declaringClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'implementingClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'name' => 'hidden',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'token\']',
                    'attributes' => [
                        'startLine' => 38,
                        'endLine' => 40,
                        'startTokenPos' => 98,
                        'startFilePos' => 795,
                        'endTokenPos' => 103,
                        'endFilePos' => 818,
                    ],
                ],
                'docComment' => '/**
 * The attributes that should be hidden for serialization.
 *
 * @var array<int, string>
 */',
                'attributes' => [
                ],
                'startLine' => 38,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 6,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'tokenable' => [
                'name' => 'tokenable',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the tokenable model that the access token belongs to.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo
 */',
                'startLine' => 47,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Laravel\\Sanctum',
                'declaringClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'implementingClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'currentClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'aliasName' => null,
            ],
            'findToken' => [
                'name' => 'findToken',
                'parameters' => [
                    'token' => [
                        'name' => 'token',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 38,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Find the token instance matching the given token.
 *
 * @param  string  $token
 * @return static|null
 */',
                'startLine' => 58,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Laravel\\Sanctum',
                'declaringClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'implementingClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'currentClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'aliasName' => null,
            ],
            'can' => [
                'name' => 'can',
                'parameters' => [
                    'ability' => [
                        'name' => 'ability',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 77,
                        'endLine' => 77,
                        'startColumn' => 25,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the token has a given ability.
 *
 * @param  string  $ability
 * @return bool
 */',
                'startLine' => 77,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Laravel\\Sanctum',
                'declaringClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'implementingClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'currentClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'aliasName' => null,
            ],
            'cant' => [
                'name' => 'cant',
                'parameters' => [
                    'ability' => [
                        'name' => 'ability',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 89,
                        'endLine' => 89,
                        'startColumn' => 26,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the token is missing a given ability.
 *
 * @param  string  $ability
 * @return bool
 */',
                'startLine' => 89,
                'endLine' => 92,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Laravel\\Sanctum',
                'declaringClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'implementingClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
                'currentClassName' => 'Laravel\\Sanctum\\PersonalAccessToken',
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
