<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/CarbonTimeZone.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\CarbonTimeZone
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-17448d3ff260adaf28e2705d16672c808c65fea054a251b7fc48d787a4b422a2-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\CarbonTimeZone',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/CarbonTimeZone.php',
            ],
        ],
        'namespace' => 'Carbon',
        'name' => 'Carbon\\CarbonTimeZone',
        'shortName' => 'CarbonTimeZone',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 25,
        'endLine' => 336,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'DateTimeZone',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Carbon\\Traits\\LocalFactory',
        ],
        'immediateConstants' => [
            'MAXIMUM_TIMEZONE_OFFSET' => [
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'name' => 'MAXIMUM_TIMEZONE_OFFSET',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '99',
                    'attributes' => [
                        'startLine' => 29,
                        'endLine' => 29,
                        'startTokenPos' => 80,
                        'startFilePos' => 607,
                        'endTokenPos' => 80,
                        'endFilePos' => 608,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 46,
            ],
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            '__construct' => [
                'name' => '__construct',
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
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
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
                        'startColumn' => 33,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 31,
                'endLine' => 36,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'parseNumericTimezone' => [
                'name' => 'parseNumericTimezone',
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
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
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
                        'startLine' => 38,
                        'endLine' => 38,
                        'startColumn' => 52,
                        'endColumn' => 77,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'docComment' => null,
                'startLine' => 38,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'getDateTimeZoneNameFromMixed' => [
                'name' => 'getDateTimeZoneNameFromMixed',
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
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
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
                        'startLine' => 50,
                        'endLine' => 50,
                        'startColumn' => 60,
                        'endColumn' => 85,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'docComment' => null,
                'startLine' => 50,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'cast' => [
                'name' => 'cast',
                'parameters' => [
                    'className' => [
                        'name' => 'className',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 70,
                        'endLine' => 70,
                        'startColumn' => 26,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
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
 * Cast the current instance into the given class.
 *
 * @param class-string<DateTimeZone> $className The $className::instance() method will be called to cast the current object.
 *
 * @return DateTimeZone|mixed
 */',
                'startLine' => 70,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'instance' => [
                'name' => 'instance',
                'parameters' => [
                    'object' => [
                        'name' => 'object',
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
                                            'name' => 'false',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    4 => [
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
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 9,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'objectDump' => [
                        'name' => 'objectDump',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 95,
                                'endLine' => 95,
                                'startTokenPos' => 432,
                                'startFilePos' => 2800,
                                'endTokenPos' => 432,
                                'endFilePos' => 2803,
                            ],
                        ],
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
                                            'name' => 'false',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    4 => [
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
                        'startLine' => 95,
                        'endLine' => 95,
                        'startColumn' => 9,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
                                    'name' => 'self',
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
 * Create a CarbonTimeZone from mixed input.
 *
 * @param DateTimeZone|string|int|false|null $object     original value to get CarbonTimeZone from it.
 * @param DateTimeZone|string|int|false|null $objectDump dump of the object for error messages.
 *
 * @throws InvalidTimeZoneException
 *
 * @return static|null
 */',
                'startLine' => 93,
                'endLine' => 120,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'getAbbreviatedName' => [
                'name' => 'getAbbreviatedName',
                'parameters' => [
                    'dst' => [
                        'name' => 'dst',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 129,
                                'endLine' => 129,
                                'startTokenPos' => 627,
                                'startFilePos' => 3768,
                                'endTokenPos' => 627,
                                'endFilePos' => 3772,
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
                        'startLine' => 129,
                        'endLine' => 129,
                        'startColumn' => 40,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
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
 * Returns abbreviated name of the current timezone according to DST setting.
 *
 * @param bool $dst
 *
 * @return string
 */',
                'startLine' => 129,
                'endLine' => 155,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'getAbbr' => [
                'name' => 'getAbbr',
                'parameters' => [
                    'dst' => [
                        'name' => 'dst',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 166,
                                'endLine' => 166,
                                'startTokenPos' => 875,
                                'startFilePos' => 4903,
                                'endTokenPos' => 875,
                                'endFilePos' => 4907,
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
                        'startLine' => 166,
                        'endLine' => 166,
                        'startColumn' => 29,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
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
 * @alias getAbbreviatedName
 *
 * Returns abbreviated name of the current timezone according to DST setting.
 *
 * @param bool $dst
 *
 * @return string
 */',
                'startLine' => 166,
                'endLine' => 169,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'toOffsetName' => [
                'name' => 'toOffsetName',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 174,
                                'endLine' => 174,
                                'startTokenPos' => 910,
                                'startFilePos' => 5128,
                                'endTokenPos' => 910,
                                'endFilePos' => 5131,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
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
                        'startLine' => 174,
                        'endLine' => 174,
                        'startColumn' => 34,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
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
 * Get the offset as string "sHH:MM" (such as "+00:00" or "-12:30").
 */',
                'startLine' => 174,
                'endLine' => 179,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'toOffsetTimeZone' => [
                'name' => 'toOffsetTimeZone',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 184,
                                'endLine' => 184,
                                'startTokenPos' => 962,
                                'startFilePos' => 5457,
                                'endTokenPos' => 962,
                                'endFilePos' => 5460,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
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
                        'startLine' => 184,
                        'endLine' => 184,
                        'startColumn' => 38,
                        'endColumn' => 68,
                        'parameterIndex' => 0,
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
 * Returns a new CarbonTimeZone object using the offset string instead of region string.
 */',
                'startLine' => 184,
                'endLine' => 187,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'toRegionName' => [
                'name' => 'toRegionName',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 195,
                                'endLine' => 195,
                                'startTokenPos' => 1002,
                                'startFilePos' => 5818,
                                'endTokenPos' => 1002,
                                'endFilePos' => 5821,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
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
                        'startLine' => 195,
                        'endLine' => 195,
                        'startColumn' => 34,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'isDST' => [
                        'name' => 'isDST',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 195,
                                'endLine' => 195,
                                'startTokenPos' => 1011,
                                'startFilePos' => 5837,
                                'endTokenPos' => 1011,
                                'endFilePos' => 5837,
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
                        'startLine' => 195,
                        'endLine' => 195,
                        'startColumn' => 67,
                        'endColumn' => 80,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
                                    'name' => 'string',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the first region string (such as "America/Toronto") that matches the current timezone or
 * false if no match is found.
 *
 * @see timezone_name_from_abbr native PHP function.
 */',
                'startLine' => 195,
                'endLine' => 228,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'toRegionTimeZone' => [
                'name' => 'toRegionTimeZone',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 233,
                                'endLine' => 233,
                                'startTokenPos' => 1236,
                                'startFilePos' => 6873,
                                'endTokenPos' => 1236,
                                'endFilePos' => 6876,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
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
                        'startLine' => 233,
                        'endLine' => 233,
                        'startColumn' => 38,
                        'endColumn' => 68,
                        'parameterIndex' => 0,
                        'isOptional' => true,
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
                                    'name' => 'self',
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
 * Returns a new CarbonTimeZone object using the region string instead of offset string.
 */',
                'startLine' => 233,
                'endLine' => 246,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            '__toString' => [
                'name' => '__toString',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Cast to string (get timezone name).
 *
 * @return string
 */',
                'startLine' => 253,
                'endLine' => 256,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'getType' => [
                'name' => 'getType',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the type number:
 *
 * Type 1; A UTC offset, such as -0300
 * Type 2; A timezone abbreviation, such as GMT
 * Type 3: A timezone identifier, such as Europe/London
 */',
                'startLine' => 265,
                'endLine' => 268,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'create' => [
                'name' => 'create',
                'parameters' => [
                    'object' => [
                        'name' => 'object',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 277,
                                'endLine' => 277,
                                'startTokenPos' => 1410,
                                'startFilePos' => 7979,
                                'endTokenPos' => 1410,
                                'endFilePos' => 7982,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 277,
                        'endLine' => 277,
                        'startColumn' => 35,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a CarbonTimeZone from mixed input.
 *
 * @param DateTimeZone|string|int|null $object
 *
 * @return false|static
 */',
                'startLine' => 277,
                'endLine' => 280,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'createFromHourOffset' => [
                'name' => 'createFromHourOffset',
                'parameters' => [
                    'hourOffset' => [
                        'name' => 'hourOffset',
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
                        'startLine' => 289,
                        'endLine' => 289,
                        'startColumn' => 49,
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
 * Create a CarbonTimeZone from int/float hour offset.
 *
 * @param float $hourOffset number of hour of the timezone shift (can be decimal).
 *
 * @return false|static
 */',
                'startLine' => 289,
                'endLine' => 292,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'createFromMinuteOffset' => [
                'name' => 'createFromMinuteOffset',
                'parameters' => [
                    'minuteOffset' => [
                        'name' => 'minuteOffset',
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
                        'startLine' => 301,
                        'endLine' => 301,
                        'startColumn' => 51,
                        'endColumn' => 69,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a CarbonTimeZone from int/float minute offset.
 *
 * @param float $minuteOffset number of total minutes of the timezone shift.
 *
 * @return false|static
 */',
                'startLine' => 301,
                'endLine' => 304,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'getOffsetNameFromMinuteOffset' => [
                'name' => 'getOffsetNameFromMinuteOffset',
                'parameters' => [
                    'minutes' => [
                        'name' => 'minutes',
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
                        'startLine' => 313,
                        'endLine' => 313,
                        'startColumn' => 58,
                        'endColumn' => 71,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
 * Convert a total minutes offset into a standardized timezone offset string.
 *
 * @param float $minutes number of total minutes of the timezone shift.
 *
 * @return string
 */',
                'startLine' => 313,
                'endLine' => 322,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
                'aliasName' => null,
            ],
            'resolveCarbon' => [
                'name' => 'resolveCarbon',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
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
                        'startLine' => 324,
                        'endLine' => 324,
                        'startColumn' => 36,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'DateTimeInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 324,
                'endLine' => 335,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonTimeZone',
                'implementingClassName' => 'Carbon\\CarbonTimeZone',
                'currentClassName' => 'Carbon\\CarbonTimeZone',
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
