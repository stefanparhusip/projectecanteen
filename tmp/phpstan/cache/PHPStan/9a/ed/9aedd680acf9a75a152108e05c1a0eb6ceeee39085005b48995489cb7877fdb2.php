<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/Limiters/ConcurrencyLimiterBuilder.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Cache\Limiters\ConcurrencyLimiterBuilder
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-229bc472f890b53e13e1b1c605c200484a554c344d1901561a650e4c82075f96-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/Limiters/ConcurrencyLimiterBuilder.php',
            ],
        ],
        'namespace' => 'Illuminate\\Cache\\Limiters',
        'name' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
        'shortName' => 'ConcurrencyLimiterBuilder',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 7,
        'endLine' => 153,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\InteractsWithTime',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'connection' => [
                'declaringClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'implementingClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'name' => 'connection',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The cache repository or Redis connection.
 *
 * @var \\Illuminate\\Cache\\Repository
 */',
                'attributes' => [
                ],
                'startLine' => 16,
                'endLine' => 16,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'name' => [
                'declaringClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'implementingClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'name' => 'name',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The name of the lock.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 17,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'maxLocks' => [
                'declaringClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'implementingClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'name' => 'maxLocks',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The maximum number of entities that can hold the lock at the same time.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'releaseAfter' => [
                'declaringClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'implementingClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'name' => 'releaseAfter',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => '60',
                    'attributes' => [
                        'startLine' => 37,
                        'endLine' => 37,
                        'startTokenPos' => 52,
                        'startFilePos' => 671,
                        'endTokenPos' => 52,
                        'endFilePos' => 672,
                    ],
                ],
                'docComment' => '/**
 * The number of seconds to maintain the lock until it is automatically released.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 37,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'timeout' => [
                'declaringClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'implementingClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'name' => 'timeout',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => '3',
                    'attributes' => [
                        'startLine' => 44,
                        'endLine' => 44,
                        'startTokenPos' => 63,
                        'startFilePos' => 802,
                        'endTokenPos' => 63,
                        'endFilePos' => 802,
                    ],
                ],
                'docComment' => '/**
 * The number of seconds to block until a lock is available.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 44,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'sleep' => [
                'declaringClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'implementingClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'name' => 'sleep',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => '250',
                    'attributes' => [
                        'startLine' => 51,
                        'endLine' => 51,
                        'startTokenPos' => 74,
                        'startFilePos' => 945,
                        'endTokenPos' => 74,
                        'endFilePos' => 947,
                    ],
                ],
                'docComment' => '/**
 * The number of milliseconds to wait between attempts to acquire the lock.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 51,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 24,
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
                    'connection' => [
                        'name' => 'connection',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 59,
                        'endLine' => 59,
                        'startColumn' => 33,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 59,
                        'endLine' => 59,
                        'startColumn' => 46,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new builder instance.
 *
 * @param  mixed  $connection
 * @param  string  $name
 */',
                'startLine' => 59,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\Limiters',
                'declaringClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'implementingClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'currentClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'aliasName' => null,
            ],
            'limit' => [
                'name' => 'limit',
                'parameters' => [
                    'maxLocks' => [
                        'name' => 'maxLocks',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 71,
                        'endLine' => 71,
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
 * Set the maximum number of locks that can be obtained per time window.
 *
 * @param  int  $maxLocks
 * @return $this
 */',
                'startLine' => 71,
                'endLine' => 76,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\Limiters',
                'declaringClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'implementingClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'currentClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'aliasName' => null,
            ],
            'releaseAfter' => [
                'name' => 'releaseAfter',
                'parameters' => [
                    'releaseAfter' => [
                        'name' => 'releaseAfter',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 84,
                        'endLine' => 84,
                        'startColumn' => 34,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the number of seconds until the lock will be released.
 *
 * @param  int  $releaseAfter
 * @return $this
 */',
                'startLine' => 84,
                'endLine' => 89,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\Limiters',
                'declaringClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'implementingClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'currentClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'aliasName' => null,
            ],
            'block' => [
                'name' => 'block',
                'parameters' => [
                    'timeout' => [
                        'name' => 'timeout',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 97,
                        'endLine' => 97,
                        'startColumn' => 27,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the number of seconds to block until a lock is available.
 *
 * @param  int  $timeout
 * @return $this
 */',
                'startLine' => 97,
                'endLine' => 102,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\Limiters',
                'declaringClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'implementingClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'currentClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'aliasName' => null,
            ],
            'sleep' => [
                'name' => 'sleep',
                'parameters' => [
                    'sleep' => [
                        'name' => 'sleep',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 110,
                        'endLine' => 110,
                        'startColumn' => 27,
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
 * The number of milliseconds to wait between lock acquisition attempts.
 *
 * @param  int  $sleep
 * @return $this
 */',
                'startLine' => 110,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\Limiters',
                'declaringClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'implementingClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'currentClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'aliasName' => null,
            ],
            'then' => [
                'name' => 'then',
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
                        'startLine' => 126,
                        'endLine' => 126,
                        'startColumn' => 26,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'failure' => [
                        'name' => 'failure',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 126,
                                'endLine' => 126,
                                'startTokenPos' => 254,
                                'startFilePos' => 2614,
                                'endTokenPos' => 254,
                                'endFilePos' => 2617,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
                                            'isIdentifier' => true,
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
                        'startLine' => 126,
                        'endLine' => 126,
                        'startColumn' => 46,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given callback if a lock is obtained, otherwise call the failure callback.
 *
 * @param  callable  $callback
 * @param  callable|null  $failure
 * @return mixed
 *
 * @throws \\Illuminate\\Cache\\Limiters\\LimiterTimeoutException
 */',
                'startLine' => 126,
                'endLine' => 137,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\Limiters',
                'declaringClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'implementingClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'currentClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'aliasName' => null,
            ],
            'createLimiter' => [
                'name' => 'createLimiter',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create the concurrency limiter instance.
 *
 * @return \\Illuminate\\Cache\\Limiters\\ConcurrencyLimiter
 */',
                'startLine' => 144,
                'endLine' => 152,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache\\Limiters',
                'declaringClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'implementingClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
                'currentClassName' => 'Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder',
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
