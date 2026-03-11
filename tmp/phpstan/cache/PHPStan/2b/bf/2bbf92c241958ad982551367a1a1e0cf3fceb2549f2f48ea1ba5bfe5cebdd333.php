<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Concerns/InteractsWithFlashData.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Concerns\InteractsWithFlashData
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-f1e1cfc096426ec1002825015f43b034aadbb1787391bb1077fb1a7adc3c486d-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Concerns/InteractsWithFlashData.php',
            ],
        ],
        'namespace' => 'Illuminate\\Http\\Concerns',
        'name' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
        'shortName' => 'InteractsWithFlashData',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 7,
        'endLine' => 68,
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
            'old' => [
                'name' => 'old',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 16,
                                'endLine' => 16,
                                'startTokenPos' => 30,
                                'startFilePos' => 350,
                                'endTokenPos' => 30,
                                'endFilePos' => 353,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 16,
                        'endLine' => 16,
                        'startColumn' => 25,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 16,
                                'endLine' => 16,
                                'startTokenPos' => 37,
                                'startFilePos' => 367,
                                'endTokenPos' => 37,
                                'endFilePos' => 370,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 16,
                        'endLine' => 16,
                        'startColumn' => 38,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve an old input item.
 *
 * @param  string|null  $key
 * @param  \\Illuminate\\Database\\Eloquent\\Model|string|array|null  $default
 * @return string|array|null
 */',
                'startLine' => 16,
                'endLine' => 21,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'aliasName' => null,
            ],
            'flash' => [
                'name' => 'flash',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flash the input for the current request to the session.
 *
 * @return void
 */',
                'startLine' => 28,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'aliasName' => null,
            ],
            'flashOnly' => [
                'name' => 'flashOnly',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 31,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flash only some of the input to the session.
 *
 * @param  mixed  $keys
 * @return void
 */',
                'startLine' => 39,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'aliasName' => null,
            ],
            'flashExcept' => [
                'name' => 'flashExcept',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 52,
                        'endLine' => 52,
                        'startColumn' => 33,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flash only some of the input to the session.
 *
 * @param  mixed  $keys
 * @return void
 */',
                'startLine' => 52,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'aliasName' => null,
            ],
            'flush' => [
                'name' => 'flush',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flush all of the old input from the session.
 *
 * @return void
 */',
                'startLine' => 64,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
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
