<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Support/Carbon.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Carbon
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-349b50ba1ae2a00dc919a9fea2d7d1899f788c4800cfaaf2dc63c8ce3bb88eeb-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Support\\Carbon',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Support/Carbon.php',
            ],
        ],
        'namespace' => 'Illuminate\\Support',
        'name' => 'Illuminate\\Support\\Carbon',
        'shortName' => 'Carbon',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 12,
        'endLine' => 74,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Carbon\\Carbon',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\Conditionable',
            1 => 'Illuminate\\Support\\Traits\\Dumpable',
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
                                'startLine' => 19,
                                'endLine' => 19,
                                'startTokenPos' => 79,
                                'startFilePos' => 422,
                                'endTokenPos' => 79,
                                'endFilePos' => 425,
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
                        'startLine' => 19,
                        'endLine' => 19,
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
 * {@inheritdoc}
 */',
                'startLine' => 19,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Carbon',
                'implementingClassName' => 'Illuminate\\Support\\Carbon',
                'currentClassName' => 'Illuminate\\Support\\Carbon',
                'aliasName' => null,
            ],
            'createFromId' => [
                'name' => 'createFromId',
                'parameters' => [
                    'id' => [
                        'name' => 'id',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Ramsey\\Uuid\\Uuid',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Symfony\\Component\\Uid\\Ulid',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 28,
                        'endLine' => 28,
                        'startColumn' => 41,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a Carbon instance from a given ordered UUID or ULID.
 */',
                'startLine' => 28,
                'endLine' => 35,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Carbon',
                'implementingClassName' => 'Illuminate\\Support\\Carbon',
                'currentClassName' => 'Illuminate\\Support\\Carbon',
                'aliasName' => null,
            ],
            'plus' => [
                'name' => 'plus',
                'parameters' => [
                    'years' => [
                        'name' => 'years',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 41,
                                'endLine' => 41,
                                'startTokenPos' => 203,
                                'startFilePos' => 1024,
                                'endTokenPos' => 203,
                                'endFilePos' => 1024,
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
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 9,
                        'endColumn' => 22,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'months' => [
                        'name' => 'months',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 42,
                                'endLine' => 42,
                                'startTokenPos' => 212,
                                'startFilePos' => 1049,
                                'endTokenPos' => 212,
                                'endFilePos' => 1049,
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
                        'startLine' => 42,
                        'endLine' => 42,
                        'startColumn' => 9,
                        'endColumn' => 23,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'weeks' => [
                        'name' => 'weeks',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 43,
                                'endLine' => 43,
                                'startTokenPos' => 221,
                                'startFilePos' => 1073,
                                'endTokenPos' => 221,
                                'endFilePos' => 1073,
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
                        'startLine' => 43,
                        'endLine' => 43,
                        'startColumn' => 9,
                        'endColumn' => 22,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'days' => [
                        'name' => 'days',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 44,
                                'endLine' => 44,
                                'startTokenPos' => 230,
                                'startFilePos' => 1096,
                                'endTokenPos' => 230,
                                'endFilePos' => 1096,
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
                        'startLine' => 44,
                        'endLine' => 44,
                        'startColumn' => 9,
                        'endColumn' => 21,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'hours' => [
                        'name' => 'hours',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 45,
                                'endLine' => 45,
                                'startTokenPos' => 239,
                                'startFilePos' => 1120,
                                'endTokenPos' => 239,
                                'endFilePos' => 1120,
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
                        'startLine' => 45,
                        'endLine' => 45,
                        'startColumn' => 9,
                        'endColumn' => 22,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'minutes' => [
                        'name' => 'minutes',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 46,
                                'endLine' => 46,
                                'startTokenPos' => 248,
                                'startFilePos' => 1146,
                                'endTokenPos' => 248,
                                'endFilePos' => 1146,
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
                        'startLine' => 46,
                        'endLine' => 46,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                    'seconds' => [
                        'name' => 'seconds',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 47,
                                'endLine' => 47,
                                'startTokenPos' => 257,
                                'startFilePos' => 1172,
                                'endTokenPos' => 257,
                                'endFilePos' => 1172,
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
                        'startLine' => 47,
                        'endLine' => 47,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 6,
                        'isOptional' => true,
                    ],
                    'microseconds' => [
                        'name' => 'microseconds',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 48,
                                'endLine' => 48,
                                'startTokenPos' => 266,
                                'startFilePos' => 1203,
                                'endTokenPos' => 266,
                                'endFilePos' => 1203,
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
                        'startLine' => 48,
                        'endLine' => 48,
                        'startColumn' => 9,
                        'endColumn' => 29,
                        'parameterIndex' => 7,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current date / time plus a given amount of time.
 */',
                'startLine' => 40,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Carbon',
                'implementingClassName' => 'Illuminate\\Support\\Carbon',
                'currentClassName' => 'Illuminate\\Support\\Carbon',
                'aliasName' => null,
            ],
            'minus' => [
                'name' => 'minus',
                'parameters' => [
                    'years' => [
                        'name' => 'years',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 60,
                                'endLine' => 60,
                                'startTokenPos' => 320,
                                'startFilePos' => 1547,
                                'endTokenPos' => 320,
                                'endFilePos' => 1547,
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
                        'startLine' => 60,
                        'endLine' => 60,
                        'startColumn' => 9,
                        'endColumn' => 22,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'months' => [
                        'name' => 'months',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 61,
                                'endLine' => 61,
                                'startTokenPos' => 329,
                                'startFilePos' => 1572,
                                'endTokenPos' => 329,
                                'endFilePos' => 1572,
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
                        'startLine' => 61,
                        'endLine' => 61,
                        'startColumn' => 9,
                        'endColumn' => 23,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'weeks' => [
                        'name' => 'weeks',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 62,
                                'endLine' => 62,
                                'startTokenPos' => 338,
                                'startFilePos' => 1596,
                                'endTokenPos' => 338,
                                'endFilePos' => 1596,
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
                        'startLine' => 62,
                        'endLine' => 62,
                        'startColumn' => 9,
                        'endColumn' => 22,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'days' => [
                        'name' => 'days',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 63,
                                'endLine' => 63,
                                'startTokenPos' => 347,
                                'startFilePos' => 1619,
                                'endTokenPos' => 347,
                                'endFilePos' => 1619,
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
                        'startLine' => 63,
                        'endLine' => 63,
                        'startColumn' => 9,
                        'endColumn' => 21,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'hours' => [
                        'name' => 'hours',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 64,
                                'endLine' => 64,
                                'startTokenPos' => 356,
                                'startFilePos' => 1643,
                                'endTokenPos' => 356,
                                'endFilePos' => 1643,
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
                        'startLine' => 64,
                        'endLine' => 64,
                        'startColumn' => 9,
                        'endColumn' => 22,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'minutes' => [
                        'name' => 'minutes',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 65,
                                'endLine' => 65,
                                'startTokenPos' => 365,
                                'startFilePos' => 1669,
                                'endTokenPos' => 365,
                                'endFilePos' => 1669,
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
                        'startLine' => 65,
                        'endLine' => 65,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                    'seconds' => [
                        'name' => 'seconds',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 66,
                                'endLine' => 66,
                                'startTokenPos' => 374,
                                'startFilePos' => 1695,
                                'endTokenPos' => 374,
                                'endFilePos' => 1695,
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
                        'startLine' => 66,
                        'endLine' => 66,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 6,
                        'isOptional' => true,
                    ],
                    'microseconds' => [
                        'name' => 'microseconds',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 67,
                                'endLine' => 67,
                                'startTokenPos' => 383,
                                'startFilePos' => 1726,
                                'endTokenPos' => 383,
                                'endFilePos' => 1726,
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
                        'startLine' => 67,
                        'endLine' => 67,
                        'startColumn' => 9,
                        'endColumn' => 29,
                        'parameterIndex' => 7,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current date / time minus a given amount of time.
 */',
                'startLine' => 59,
                'endLine' => 73,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Carbon',
                'implementingClassName' => 'Illuminate\\Support\\Carbon',
                'currentClassName' => 'Illuminate\\Support\\Carbon',
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
