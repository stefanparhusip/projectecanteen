<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/Promises/LazyPromise.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Client\Promises\LazyPromise
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-ada5d4b9fd3f79138dfa4f8876e6a5f08f0cccf0bf47e01fa5ac05243c5e3318-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/Promises/LazyPromise.php',
            ],
        ],
        'namespace' => 'Illuminate\\Http\\Client\\Promises',
        'name' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
        'shortName' => 'LazyPromise',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 129,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'GuzzleHttp\\Promise\\PromiseInterface',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'pending' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'name' => 'pending',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 16,
                        'endLine' => 16,
                        'startTokenPos' => 42,
                        'startFilePos' => 330,
                        'endTokenPos' => 43,
                        'endFilePos' => 331,
                    ],
                ],
                'docComment' => '/**
 * The callbacks to execute after the Guzzle Promise has been built.
 *
 * @var list<callable>
 */',
                'attributes' => [
                ],
                'startLine' => 16,
                'endLine' => 16,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'guzzlePromise' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'name' => 'guzzlePromise',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'GuzzleHttp\\Promise\\PromiseInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * The promise built by the creator.
 *
 * @var \\GuzzleHttp\\Promise\\PromiseInterface
 */',
                'attributes' => [
                ],
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 46,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'promiseBuilder' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'name' => 'promiseBuilder',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Closure',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 33,
                'endColumn' => 65,
                'isPromoted' => true,
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
                    'promiseBuilder' => [
                        'name' => 'promiseBuilder',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 30,
                        'endLine' => 30,
                        'startColumn' => 33,
                        'endColumn' => 65,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new lazy promise instance.
 *
 * @param  (\\Closure(): \\GuzzleHttp\\Promise\\PromiseInterface)  $promiseBuilder  The callback to build a new PromiseInterface.
 */',
                'startLine' => 30,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client\\Promises',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'currentClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'aliasName' => null,
            ],
            'buildPromise' => [
                'name' => 'buildPromise',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'GuzzleHttp\\Promise\\PromiseInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Build the promise from the promise builder.
 *
 * @return \\GuzzleHttp\\Promise\\PromiseInterface
 *
 * @throws \\RuntimeException If the promise has already been built
 */',
                'startLine' => 41,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client\\Promises',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'currentClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'aliasName' => null,
            ],
            'then' => [
                'name' => 'then',
                'parameters' => [
                    'onFulfilled' => [
                        'name' => 'onFulfilled',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 59,
                                'endLine' => 59,
                                'startTokenPos' => 189,
                                'startFilePos' => 1485,
                                'endTokenPos' => 189,
                                'endFilePos' => 1488,
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
                        'startLine' => 59,
                        'endLine' => 59,
                        'startColumn' => 26,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'onRejected' => [
                        'name' => 'onRejected',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 59,
                                'endLine' => 59,
                                'startTokenPos' => 199,
                                'startFilePos' => 1515,
                                'endTokenPos' => 199,
                                'endFilePos' => 1518,
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
                        'startLine' => 59,
                        'endLine' => 59,
                        'startColumn' => 57,
                        'endColumn' => 84,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'GuzzleHttp\\Promise\\PromiseInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => null,
                'startLine' => 58,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client\\Promises',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'currentClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'aliasName' => null,
            ],
            'otherwise' => [
                'name' => 'otherwise',
                'parameters' => [
                    'onRejected' => [
                        'name' => 'onRejected',
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
                        'startLine' => 71,
                        'endLine' => 71,
                        'startColumn' => 31,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'GuzzleHttp\\Promise\\PromiseInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => null,
                'startLine' => 70,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client\\Promises',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'currentClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'aliasName' => null,
            ],
            'getState' => [
                'name' => 'getState',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => null,
                'startLine' => 82,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client\\Promises',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'currentClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'aliasName' => null,
            ],
            'resolve' => [
                'name' => 'resolve',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 93,
                        'endLine' => 93,
                        'startColumn' => 29,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
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
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => null,
                'startLine' => 92,
                'endLine' => 96,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client\\Promises',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'currentClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'aliasName' => null,
            ],
            'reject' => [
                'name' => 'reject',
                'parameters' => [
                    'reason' => [
                        'name' => 'reason',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 99,
                        'endLine' => 99,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
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
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => null,
                'startLine' => 98,
                'endLine' => 102,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client\\Promises',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'currentClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'aliasName' => null,
            ],
            'cancel' => [
                'name' => 'cancel',
                'parameters' => [
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
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => null,
                'startLine' => 104,
                'endLine' => 108,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client\\Promises',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'currentClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'aliasName' => null,
            ],
            'wait' => [
                'name' => 'wait',
                'parameters' => [
                    'unwrap' => [
                        'name' => 'unwrap',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 111,
                                'endLine' => 111,
                                'startTokenPos' => 511,
                                'startFilePos' => 2852,
                                'endTokenPos' => 511,
                                'endFilePos' => 2855,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 111,
                        'endLine' => 111,
                        'startColumn' => 26,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => null,
                'startLine' => 110,
                'endLine' => 118,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client\\Promises',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'currentClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'aliasName' => null,
            ],
            'promiseNeedsBuilt' => [
                'name' => 'promiseNeedsBuilt',
                'parameters' => [
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
 * Determine if the promise has been created from the promise builder.
 *
 * @return bool
 */',
                'startLine' => 125,
                'endLine' => 128,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client\\Promises',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
                'currentClassName' => 'Illuminate\\Http\\Client\\Promises\\LazyPromise',
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
