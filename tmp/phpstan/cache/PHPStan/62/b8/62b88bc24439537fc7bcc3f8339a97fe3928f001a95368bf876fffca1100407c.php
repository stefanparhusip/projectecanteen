<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../guzzlehttp/promises/src/PromiseInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-GuzzleHttp\Promise\PromiseInterface
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-94dc3d5b4f142ddd62eaf4e879ce1ce16525d21e6ebb4d517bfb1292ba2cea85-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../guzzlehttp/promises/src/PromiseInterface.php',
            ],
        ],
        'namespace' => 'GuzzleHttp\\Promise',
        'name' => 'GuzzleHttp\\Promise\\PromiseInterface',
        'shortName' => 'PromiseInterface',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * A promise represents the eventual result of an asynchronous operation.
 *
 * The primary way of interacting with a promise is through its then method,
 * which registers callbacks to receive either a promise’s eventual value or
 * the reason why the promise cannot be fulfilled.
 *
 * @see https://promisesaplus.com/
 */',
        'attributes' => [
        ],
        'startLine' => 16,
        'endLine' => 91,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'PENDING' => [
                'declaringClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'implementingClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'name' => 'PENDING',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'pending\'',
                    'attributes' => [
                        'startLine' => 18,
                        'endLine' => 18,
                        'startTokenPos' => 31,
                        'startFilePos' => 450,
                        'endTokenPos' => 31,
                        'endFilePos' => 458,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 18,
                'endLine' => 18,
                'startColumn' => 5,
                'endColumn' => 37,
            ],
            'FULFILLED' => [
                'declaringClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'implementingClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'name' => 'FULFILLED',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'fulfilled\'',
                    'attributes' => [
                        'startLine' => 19,
                        'endLine' => 19,
                        'startTokenPos' => 42,
                        'startFilePos' => 490,
                        'endTokenPos' => 42,
                        'endFilePos' => 500,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 41,
            ],
            'REJECTED' => [
                'declaringClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'implementingClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'name' => 'REJECTED',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'rejected\'',
                    'attributes' => [
                        'startLine' => 20,
                        'endLine' => 20,
                        'startTokenPos' => 53,
                        'startFilePos' => 531,
                        'endTokenPos' => 53,
                        'endFilePos' => 540,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 20,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 39,
            ],
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'then' => [
                'name' => 'then',
                'parameters' => [
                    'onFulfilled' => [
                        'name' => 'onFulfilled',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 30,
                                'endLine' => 30,
                                'startTokenPos' => 72,
                                'startFilePos' => 923,
                                'endTokenPos' => 72,
                                'endFilePos' => 926,
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
                        'startLine' => 30,
                        'endLine' => 30,
                        'startColumn' => 9,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'onRejected' => [
                        'name' => 'onRejected',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 31,
                                'endLine' => 31,
                                'startTokenPos' => 82,
                                'startFilePos' => 961,
                                'endTokenPos' => 82,
                                'endFilePos' => 964,
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
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 9,
                        'endColumn' => 36,
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
                ],
                'docComment' => '/**
 * Appends fulfillment and rejection handlers to the promise, and returns
 * a new promise resolving to the return value of the called handler.
 *
 * @param callable $onFulfilled Invoked when the promise fulfills.
 * @param callable $onRejected  Invoked when the promise is rejected.
 */',
                'startLine' => 29,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 24,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp\\Promise',
                'declaringClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'implementingClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'currentClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
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
                        'startLine' => 42,
                        'endLine' => 42,
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
                ],
                'docComment' => '/**
 * Appends a rejection handler callback to the promise, and returns a new
 * promise resolving to the return value of the callback if it is called,
 * or to its original fulfillment value if the promise is instead
 * fulfilled.
 *
 * @param callable $onRejected Invoked when the promise is rejected.
 */',
                'startLine' => 42,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 70,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp\\Promise',
                'declaringClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'implementingClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'currentClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
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
                ],
                'docComment' => '/**
 * Get the state of the promise ("pending", "rejected", or "fulfilled").
 *
 * The three states can be checked against the constants defined on
 * PromiseInterface: PENDING, FULFILLED, and REJECTED.
 */',
                'startLine' => 50,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 39,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp\\Promise',
                'declaringClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'implementingClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'currentClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
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
                        'startLine' => 59,
                        'endLine' => 59,
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
                ],
                'docComment' => '/**
 * Resolve the promise with the given value.
 *
 * @param mixed $value
 *
 * @throws \\RuntimeException if the promise is already resolved.
 */',
                'startLine' => 59,
                'endLine' => 59,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp\\Promise',
                'declaringClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'implementingClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'currentClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
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
                        'startLine' => 68,
                        'endLine' => 68,
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
                ],
                'docComment' => '/**
 * Reject the promise with the given reason.
 *
 * @param mixed $reason
 *
 * @throws \\RuntimeException if the promise is already resolved.
 */',
                'startLine' => 68,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp\\Promise',
                'declaringClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'implementingClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'currentClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
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
                ],
                'docComment' => '/**
 * Cancels the promise if possible.
 *
 * @see https://github.com/promises-aplus/cancellation-spec/issues/7
 */',
                'startLine' => 75,
                'endLine' => 75,
                'startColumn' => 5,
                'endColumn' => 35,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp\\Promise',
                'declaringClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'implementingClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'currentClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
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
                                'startLine' => 90,
                                'endLine' => 90,
                                'startTokenPos' => 179,
                                'startFilePos' => 2816,
                                'endTokenPos' => 179,
                                'endFilePos' => 2819,
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
                        'startLine' => 90,
                        'endLine' => 90,
                        'startColumn' => 26,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Waits until the promise completes if possible.
 *
 * Pass $unwrap as true to unwrap the result of the promise, either
 * returning the resolved value or throwing the rejected exception.
 *
 * If the promise cannot be waited on, then the promise will be rejected.
 *
 * @return mixed
 *
 * @throws \\LogicException if the promise has no wait function or if the
 *                         promise does not settle after waiting.
 */',
                'startLine' => 90,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 46,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp\\Promise',
                'declaringClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'implementingClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
                'currentClassName' => 'GuzzleHttp\\Promise\\PromiseInterface',
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
