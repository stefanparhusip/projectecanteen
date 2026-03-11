<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Test.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Test
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-76a7fa06455b418e8bf95e53c260c2a28807a857616ef53584ffc79b4339a06c-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\Traits\\Test',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Test.php',
            ],
        ],
        'namespace' => 'Carbon\\Traits',
        'name' => 'Carbon\\Traits\\Test',
        'shortName' => 'Test',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 25,
        'endLine' => 185,
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
            'setTestNow' => [
                'name' => 'setTestNow',
                'parameters' => [
                    'testNow' => [
                        'name' => 'testNow',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 53,
                                'endLine' => 53,
                                'startTokenPos' => 85,
                                'startFilePos' => 1932,
                                'endTokenPos' => 85,
                                'endFilePos' => 1935,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 53,
                        'endLine' => 53,
                        'startColumn' => 39,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => true,
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
 * Set a Carbon instance (real or mock) to be returned when a "now"
 * instance is created.  The provided instance will be returned
 * specifically under the following conditions:
 *   - A call to the static now() method, ex. Carbon::now()
 *   - When a null (or blank string) is passed to the constructor or parse(), ex. new Carbon(null)
 *   - When the string "now" is passed to the constructor or parse(), ex. new Carbon(\'now\')
 *   - When a string containing the desired time is passed to Carbon::parse().
 *
 * Note the timezone parameter was left out of the examples above and
 * has no affect as the mock value will be returned regardless of its value.
 *
 * Only the moment is mocked with setTestNow(), the timezone will still be the one passed
 * as parameter of date_default_timezone_get() as a fallback (see setTestNowAndTimezone()).
 *
 * To clear the test instance call this method using the default
 * parameter of null.
 *
 * /!\\ Use this method for unit tests only.
 *
 * @param DateTimeInterface|Closure|static|string|false|null $testNow real or mock Carbon instance
 */',
                'startLine' => 53,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Test',
                'implementingClassName' => 'Carbon\\Traits\\Test',
                'currentClassName' => 'Carbon\\Traits\\Test',
                'aliasName' => null,
            ],
            'setTestNowAndTimezone' => [
                'name' => 'setTestNowAndTimezone',
                'parameters' => [
                    'testNow' => [
                        'name' => 'testNow',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 77,
                                'endLine' => 77,
                                'startTokenPos' => 121,
                                'startFilePos' => 3086,
                                'endTokenPos' => 121,
                                'endFilePos' => 3089,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 77,
                        'endLine' => 77,
                        'startColumn' => 50,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 77,
                                'endLine' => 77,
                                'startTokenPos' => 128,
                                'startFilePos' => 3104,
                                'endTokenPos' => 128,
                                'endFilePos' => 3107,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 77,
                        'endLine' => 77,
                        'startColumn' => 67,
                        'endColumn' => 82,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Set a Carbon instance (real or mock) to be returned when a "now"
 * instance is created.  The provided instance will be returned
 * specifically under the following conditions:
 *   - A call to the static now() method, ex. Carbon::now()
 *   - When a null (or blank string) is passed to the constructor or parse(), ex. new Carbon(null)
 *   - When the string "now" is passed to the constructor or parse(), ex. new Carbon(\'now\')
 *   - When a string containing the desired time is passed to Carbon::parse().
 *
 * It will also align default timezone (e.g. call date_default_timezone_set()) with
 * the second argument or if null, with the timezone of the given date object.
 *
 * To clear the test instance call this method using the default
 * parameter of null.
 *
 * /!\\ Use this method for unit tests only.
 *
 * @param DateTimeInterface|Closure|static|string|false|null $testNow real or mock Carbon instance
 */',
                'startLine' => 77,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Test',
                'implementingClassName' => 'Carbon\\Traits\\Test',
                'currentClassName' => 'Carbon\\Traits\\Test',
                'aliasName' => null,
            ],
            'withTestNow' => [
                'name' => 'withTestNow',
                'parameters' => [
                    'testNow' => [
                        'name' => 'testNow',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 96,
                        'endLine' => 96,
                        'startColumn' => 40,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 96,
                        'endLine' => 96,
                        'startColumn' => 56,
                        'endColumn' => 73,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'mixed',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Temporarily sets a static date to be used within the callback.
 * Using setTestNow to set the date, executing the callback, then
 * clearing the test instance.
 *
 * /!\\ Use this method for unit tests only.
 *
 * @template T
 *
 * @param DateTimeInterface|Closure|static|string|false|null $testNow  real or mock Carbon instance
 * @param Closure(): T                                       $callback
 *
 * @return T
 */',
                'startLine' => 96,
                'endLine' => 99,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Test',
                'implementingClassName' => 'Carbon\\Traits\\Test',
                'currentClassName' => 'Carbon\\Traits\\Test',
                'aliasName' => null,
            ],
            'getTestNow' => [
                'name' => 'getTestNow',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Closure',
                                    'isIdentifier' => false,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Carbon\\CarbonInterface',
                                    'isIdentifier' => false,
                                ],
                            ],
                            2 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'null',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the Carbon instance (real or mock) to be returned when a "now"
 * instance is created.
 *
 * @return Closure|CarbonInterface|null the current instance used for testing
 */',
                'startLine' => 107,
                'endLine' => 110,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Test',
                'implementingClassName' => 'Carbon\\Traits\\Test',
                'currentClassName' => 'Carbon\\Traits\\Test',
                'aliasName' => null,
            ],
            'hasTestNow' => [
                'name' => 'hasTestNow',
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
 * Determine if there is a valid test instance set. A valid test instance
 * is anything that is not null.
 *
 * @return bool true if there is a test instance, otherwise false
 */',
                'startLine' => 118,
                'endLine' => 121,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Test',
                'implementingClassName' => 'Carbon\\Traits\\Test',
                'currentClassName' => 'Carbon\\Traits\\Test',
                'aliasName' => null,
            ],
            'getMockedTestNow' => [
                'name' => 'getMockedTestNow',
                'parameters' => [
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeZone',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    3 => [
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
                        'startColumn' => 48,
                        'endColumn' => 85,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Carbon\\CarbonInterface',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the mocked date passed in setTestNow() and if it\'s a Closure, execute it.
 */',
                'startLine' => 126,
                'endLine' => 137,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Test',
                'implementingClassName' => 'Carbon\\Traits\\Test',
                'currentClassName' => 'Carbon\\Traits\\Test',
                'aliasName' => null,
            ],
            'mockConstructorParameters' => [
                'name' => 'mockConstructorParameters',
                'parameters' => [
                    'time' => [
                        'name' => 'time',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => true,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 139,
                        'endLine' => 139,
                        'startColumn' => 48,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonTimeZone',
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
                        'startLine' => 139,
                        'endLine' => 139,
                        'startColumn' => 56,
                        'endColumn' => 80,
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
                'startLine' => 139,
                'endLine' => 170,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Test',
                'implementingClassName' => 'Carbon\\Traits\\Test',
                'currentClassName' => 'Carbon\\Traits\\Test',
                'aliasName' => null,
            ],
            'getMockedTestNowClone' => [
                'name' => 'getMockedTestNowClone',
                'parameters' => [
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 172,
                        'endLine' => 172,
                        'startColumn' => 51,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Carbon\\CarbonInterface',
                                    'isIdentifier' => false,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'self',
                                    'isIdentifier' => false,
                                ],
                            ],
                            2 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'null',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 172,
                'endLine' => 177,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Test',
                'implementingClassName' => 'Carbon\\Traits\\Test',
                'currentClassName' => 'Carbon\\Traits\\Test',
                'aliasName' => null,
            ],
            'nowFromClock' => [
                'name' => 'nowFromClock',
                'parameters' => [
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonTimeZone',
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
                        'startLine' => 179,
                        'endLine' => 179,
                        'startColumn' => 35,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'DateTimeImmutable',
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
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 179,
                'endLine' => 184,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Test',
                'implementingClassName' => 'Carbon\\Traits\\Test',
                'currentClassName' => 'Carbon\\Traits\\Test',
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
