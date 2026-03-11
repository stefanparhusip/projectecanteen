<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/RateLimiting/Limit.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Cache\RateLimiting\Limit
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-429213e04f75318b5fd8df901f95100a726f524bd77888f2b0852641e41457d3-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/RateLimiting/Limit.php',
            ],
        ],
        'namespace' => 'Illuminate\\Cache\\RateLimiting',
        'name' => 'Illuminate\\Cache\\RateLimiting\\Limit',
        'shortName' => 'Limit',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 176,
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
            'key' => [
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'name' => 'key',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The rate limit signature key.
 *
 * @var mixed
 */',
                'attributes' => [
                ],
                'startLine' => 12,
                'endLine' => 12,
                'startColumn' => 5,
                'endColumn' => 16,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'maxAttempts' => [
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'name' => 'maxAttempts',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The maximum number of attempts allowed within the given number of seconds.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'decaySeconds' => [
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'name' => 'decaySeconds',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The number of seconds until the rate limit is reset.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'afterCallback' => [
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'name' => 'afterCallback',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 33,
                        'endLine' => 33,
                        'startTokenPos' => 42,
                        'startFilePos' => 579,
                        'endTokenPos' => 42,
                        'endFilePos' => 582,
                    ],
                ],
                'docComment' => '/**
 * The after callback used to determine if the limiter should be hit.
 *
 * @var ?callable
 */',
                'attributes' => [
                ],
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'responseCallback' => [
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'name' => 'responseCallback',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The response generator callback.
 *
 * @var callable
 */',
                'attributes' => [
                ],
                'startLine' => 40,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            '__construct' => [
                'name' => '__construct',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 49,
                                'endLine' => 49,
                                'startTokenPos' => 64,
                                'startFilePos' => 893,
                                'endTokenPos' => 64,
                                'endFilePos' => 894,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 49,
                        'endLine' => 49,
                        'startColumn' => 33,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'maxAttempts' => [
                        'name' => 'maxAttempts',
                        'default' => [
                            'code' => '60',
                            'attributes' => [
                                'startLine' => 49,
                                'endLine' => 49,
                                'startTokenPos' => 73,
                                'startFilePos' => 916,
                                'endTokenPos' => 73,
                                'endFilePos' => 917,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 49,
                        'endLine' => 49,
                        'startColumn' => 44,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'decaySeconds' => [
                        'name' => 'decaySeconds',
                        'default' => [
                            'code' => '60',
                            'attributes' => [
                                'startLine' => 49,
                                'endLine' => 49,
                                'startTokenPos' => 82,
                                'startFilePos' => 940,
                                'endTokenPos' => 82,
                                'endFilePos' => 941,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 49,
                        'endLine' => 49,
                        'startColumn' => 67,
                        'endColumn' => 88,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new limit instance.
 *
 * @param  mixed  $key
 * @param  int  $maxAttempts
 * @param  int  $decaySeconds
 */',
                'startLine' => 49,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\RateLimiting',
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'aliasName' => null,
            ],
            'perSecond' => [
                'name' => 'perSecond',
                'parameters' => [
                    'maxAttempts' => [
                        'name' => 'maxAttempts',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 63,
                        'endLine' => 63,
                        'startColumn' => 38,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'decaySeconds' => [
                        'name' => 'decaySeconds',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 63,
                                'endLine' => 63,
                                'startTokenPos' => 133,
                                'startFilePos' => 1283,
                                'endTokenPos' => 133,
                                'endFilePos' => 1283,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 63,
                        'endLine' => 63,
                        'startColumn' => 52,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new rate limit.
 *
 * @param  int  $maxAttempts
 * @param  int  $decaySeconds
 * @return static
 */',
                'startLine' => 63,
                'endLine' => 66,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Cache\\RateLimiting',
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'aliasName' => null,
            ],
            'perMinute' => [
                'name' => 'perMinute',
                'parameters' => [
                    'maxAttempts' => [
                        'name' => 'maxAttempts',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 75,
                        'endLine' => 75,
                        'startColumn' => 38,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'decayMinutes' => [
                        'name' => 'decayMinutes',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 75,
                                'endLine' => 75,
                                'startTokenPos' => 173,
                                'startFilePos' => 1570,
                                'endTokenPos' => 173,
                                'endFilePos' => 1570,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 75,
                        'endLine' => 75,
                        'startColumn' => 52,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new rate limit.
 *
 * @param  int  $maxAttempts
 * @param  int  $decayMinutes
 * @return static
 */',
                'startLine' => 75,
                'endLine' => 78,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Cache\\RateLimiting',
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'aliasName' => null,
            ],
            'perMinutes' => [
                'name' => 'perMinutes',
                'parameters' => [
                    'decayMinutes' => [
                        'name' => 'decayMinutes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 87,
                        'endLine' => 87,
                        'startColumn' => 39,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'maxAttempts' => [
                        'name' => 'maxAttempts',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 87,
                        'endLine' => 87,
                        'startColumn' => 54,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new rate limit using minutes as decay time.
 *
 * @param  int  $decayMinutes
 * @param  int  $maxAttempts
 * @return static
 */',
                'startLine' => 87,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Cache\\RateLimiting',
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'aliasName' => null,
            ],
            'perHour' => [
                'name' => 'perHour',
                'parameters' => [
                    'maxAttempts' => [
                        'name' => 'maxAttempts',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 99,
                        'endLine' => 99,
                        'startColumn' => 36,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'decayHours' => [
                        'name' => 'decayHours',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 99,
                                'endLine' => 99,
                                'startTokenPos' => 257,
                                'startFilePos' => 2199,
                                'endTokenPos' => 257,
                                'endFilePos' => 2199,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 99,
                        'endLine' => 99,
                        'startColumn' => 50,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new rate limit using hours as decay time.
 *
 * @param  int  $maxAttempts
 * @param  int  $decayHours
 * @return static
 */',
                'startLine' => 99,
                'endLine' => 102,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Cache\\RateLimiting',
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'aliasName' => null,
            ],
            'perDay' => [
                'name' => 'perDay',
                'parameters' => [
                    'maxAttempts' => [
                        'name' => 'maxAttempts',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 111,
                        'endLine' => 111,
                        'startColumn' => 35,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'decayDays' => [
                        'name' => 'decayDays',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 111,
                                'endLine' => 111,
                                'startTokenPos' => 305,
                                'startFilePos' => 2510,
                                'endTokenPos' => 305,
                                'endFilePos' => 2510,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 111,
                        'endLine' => 111,
                        'startColumn' => 49,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new rate limit using days as decay time.
 *
 * @param  int  $maxAttempts
 * @param  int  $decayDays
 * @return static
 */',
                'startLine' => 111,
                'endLine' => 114,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Cache\\RateLimiting',
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'aliasName' => null,
            ],
            'none' => [
                'name' => 'none',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new unlimited rate limit.
 *
 * @return static
 */',
                'startLine' => 121,
                'endLine' => 124,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Cache\\RateLimiting',
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'aliasName' => null,
            ],
            'by' => [
                'name' => 'by',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 132,
                        'endLine' => 132,
                        'startColumn' => 24,
                        'endColumn' => 27,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the key of the rate limit.
 *
 * @param  mixed  $key
 * @return $this
 */',
                'startLine' => 132,
                'endLine' => 137,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\RateLimiting',
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'aliasName' => null,
            ],
            'after' => [
                'name' => 'after',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 145,
                        'endLine' => 145,
                        'startColumn' => 27,
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
 * Set the callback to determine if the limiter should be hit.
 *
 * @param  callable  $callback
 * @return $this
 */',
                'startLine' => 145,
                'endLine' => 150,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\RateLimiting',
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'aliasName' => null,
            ],
            'response' => [
                'name' => 'response',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 158,
                        'endLine' => 158,
                        'startColumn' => 30,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the callback that should generate the response when the limit is exceeded.
 *
 * @param  callable  $callback
 * @return $this
 */',
                'startLine' => 158,
                'endLine' => 163,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\RateLimiting',
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'aliasName' => null,
            ],
            'fallbackKey' => [
                'name' => 'fallbackKey',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a potential fallback key for the limit.
 *
 * @return string
 */',
                'startLine' => 170,
                'endLine' => 175,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\RateLimiting',
                'declaringClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'implementingClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                'currentClassName' => 'Illuminate\\Cache\\RateLimiting\\Limit',
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
