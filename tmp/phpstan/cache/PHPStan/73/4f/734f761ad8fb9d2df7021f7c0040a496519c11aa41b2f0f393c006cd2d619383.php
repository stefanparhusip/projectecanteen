<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Creator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Creator
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-51b033f60194db90962c4582748d7e3977659ccfb8174915defaa1b0d0bda137-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\Traits\\Creator',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Creator.php',
            ],
        ],
        'namespace' => 'Carbon\\Traits',
        'name' => 'Carbon\\Traits\\Creator',
        'shortName' => 'Creator',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Trait Creator.
 *
 * Static creators.
 *
 * Depends on the following methods:
 *
 * @method static Carbon|CarbonImmutable getTestNow()
 */',
        'attributes' => [
        ],
        'startLine' => 45,
        'endLine' => 931,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Carbon\\Traits\\ObjectInitialisation',
            1 => 'Carbon\\Traits\\LocalFactory',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'lastErrors' => [
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'name' => 'lastErrors',
                'modifiers' => 18,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'array',
                                    'isIdentifier' => true,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'bool',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 53,
                        'endLine' => 53,
                        'startTokenPos' => 144,
                        'startFilePos' => 1158,
                        'endTokenPos' => 144,
                        'endFilePos' => 1162,
                    ],
                ],
                'docComment' => '/**
 * The errors that can occur.
 */',
                'attributes' => [
                ],
                'startLine' => 53,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 52,
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
                    'time' => [
                        'name' => 'time',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 64,
                                'endLine' => 64,
                                'startTokenPos' => 174,
                                'startFilePos' => 1535,
                                'endTokenPos' => 174,
                                'endFilePos' => 1538,
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
                                            'name' => 'Carbon\\WeekDay',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Month',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    6 => [
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
                        'startLine' => 64,
                        'endLine' => 64,
                        'startColumn' => 9,
                        'endColumn' => 74,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 65,
                                'endLine' => 65,
                                'startTokenPos' => 189,
                                'startFilePos' => 1590,
                                'endTokenPos' => 189,
                                'endFilePos' => 1593,
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
                        'startLine' => 65,
                        'endLine' => 65,
                        'startColumn' => 9,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new Carbon instance.
 *
 * Please see the testing aids section (specifically static::setTestNow())
 * for more on the possibility of this constructor returning a test instance.
 *
 * @throws InvalidFormatException
 */',
                'startLine' => 63,
                'endLine' => 108,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'constructTimezoneFromDateTime' => [
                'name' => 'constructTimezoneFromDateTime',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'DateTimeInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 114,
                        'endLine' => 114,
                        'startColumn' => 9,
                        'endColumn' => 31,
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
                        'byRef' => true,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 115,
                        'endLine' => 115,
                        'startColumn' => 9,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
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
                'docComment' => '/**
 * Get timezone from a datetime instance.
 */',
                'startLine' => 113,
                'endLine' => 130,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            '__clone' => [
                'name' => '__clone',
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
 * Update constructedObjectId on cloned.
 */',
                'startLine' => 135,
                'endLine' => 138,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'instance' => [
                'name' => 'instance',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'DateTimeInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 143,
                        'endLine' => 143,
                        'startColumn' => 37,
                        'endColumn' => 59,
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
 * Create a Carbon instance from a DateTime one.
 */',
                'startLine' => 143,
                'endLine' => 163,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'rawParse' => [
                'name' => 'rawParse',
                'parameters' => [
                    'time' => [
                        'name' => 'time',
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
                                            'name' => 'Carbon\\WeekDay',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Month',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    6 => [
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
                        'startLine' => 175,
                        'endLine' => 175,
                        'startColumn' => 9,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 176,
                                'endLine' => 176,
                                'startTokenPos' => 907,
                                'startFilePos' => 5152,
                                'endTokenPos' => 907,
                                'endFilePos' => 5155,
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
                        'startLine' => 176,
                        'endLine' => 176,
                        'startColumn' => 9,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
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
 * Create a carbon instance from a string.
 *
 * This is an alias for the constructor that allows better fluent syntax
 * as it allows you to do Carbon::parse(\'Monday next week\')->fn() rather
 * than (new Carbon(\'Monday next week\'))->fn().
 *
 * @throws InvalidFormatException
 */',
                'startLine' => 174,
                'endLine' => 196,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'parse' => [
                'name' => 'parse',
                'parameters' => [
                    'time' => [
                        'name' => 'time',
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
                                            'name' => 'Carbon\\WeekDay',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Month',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    6 => [
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
                        'startLine' => 208,
                        'endLine' => 208,
                        'startColumn' => 9,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 209,
                                'endLine' => 209,
                                'startTokenPos' => 1093,
                                'startFilePos' => 6301,
                                'endTokenPos' => 1093,
                                'endFilePos' => 6304,
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
                        'startLine' => 209,
                        'endLine' => 209,
                        'startColumn' => 9,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
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
 * Create a carbon instance from a string.
 *
 * This is an alias for the constructor that allows better fluent syntax
 * as it allows you to do Carbon::parse(\'Monday next week\')->fn() rather
 * than (new Carbon(\'Monday next week\'))->fn().
 *
 * @throws InvalidFormatException
 */',
                'startLine' => 207,
                'endLine' => 222,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'parseFromLocale' => [
                'name' => 'parseFromLocale',
                'parameters' => [
                    'time' => [
                        'name' => 'time',
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
                        'startLine' => 235,
                        'endLine' => 235,
                        'startColumn' => 9,
                        'endColumn' => 20,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 236,
                                'endLine' => 236,
                                'startTokenPos' => 1211,
                                'startFilePos' => 7309,
                                'endTokenPos' => 1211,
                                'endFilePos' => 7312,
                            ],
                        ],
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
                        'startLine' => 236,
                        'endLine' => 236,
                        'startColumn' => 9,
                        'endColumn' => 30,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 237,
                                'endLine' => 237,
                                'startTokenPos' => 1226,
                                'startFilePos' => 7364,
                                'endTokenPos' => 1226,
                                'endFilePos' => 7367,
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
                        'startLine' => 237,
                        'endLine' => 237,
                        'startColumn' => 9,
                        'endColumn' => 53,
                        'parameterIndex' => 2,
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
 * Create a carbon instance from a localized string (in French, Japanese, Arabic, etc.).
 *
 * @param string                       $time     date/time string in the given language (may also contain English).
 * @param string|null                  $locale   if locale is null or not specified, current global locale will be
 *                                               used instead.
 * @param DateTimeZone|string|int|null $timezone optional timezone for the new instance.
 *
 * @throws InvalidFormatException
 */',
                'startLine' => 234,
                'endLine' => 240,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'now' => [
                'name' => 'now',
                'parameters' => [
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 245,
                                'endLine' => 245,
                                'startTokenPos' => 1286,
                                'startFilePos' => 7654,
                                'endTokenPos' => 1286,
                                'endFilePos' => 7657,
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
                        'startLine' => 245,
                        'endLine' => 245,
                        'startColumn' => 32,
                        'endColumn' => 76,
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
 * Get a Carbon instance for the current date and time.
 */',
                'startLine' => 245,
                'endLine' => 248,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'today' => [
                'name' => 'today',
                'parameters' => [
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 253,
                                'endLine' => 253,
                                'startTokenPos' => 1331,
                                'startFilePos' => 7858,
                                'endTokenPos' => 1331,
                                'endFilePos' => 7861,
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
                        'startLine' => 253,
                        'endLine' => 253,
                        'startColumn' => 34,
                        'endColumn' => 78,
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
 * Create a Carbon instance for today.
 */',
                'startLine' => 253,
                'endLine' => 256,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'tomorrow' => [
                'name' => 'tomorrow',
                'parameters' => [
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 261,
                                'endLine' => 261,
                                'startTokenPos' => 1376,
                                'startFilePos' => 8077,
                                'endTokenPos' => 1376,
                                'endFilePos' => 8080,
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
                        'startLine' => 261,
                        'endLine' => 261,
                        'startColumn' => 37,
                        'endColumn' => 81,
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
 * Create a Carbon instance for tomorrow.
 */',
                'startLine' => 261,
                'endLine' => 264,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'yesterday' => [
                'name' => 'yesterday',
                'parameters' => [
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 269,
                                'endLine' => 269,
                                'startTokenPos' => 1421,
                                'startFilePos' => 8301,
                                'endTokenPos' => 1421,
                                'endFilePos' => 8304,
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
                        'startLine' => 269,
                        'endLine' => 269,
                        'startColumn' => 38,
                        'endColumn' => 82,
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
 * Create a Carbon instance for yesterday.
 */',
                'startLine' => 269,
                'endLine' => 272,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'assertBetween' => [
                'name' => 'assertBetween',
                'parameters' => [
                    'unit' => [
                        'name' => 'unit',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 274,
                        'endLine' => 274,
                        'startColumn' => 43,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 274,
                        'endLine' => 274,
                        'startColumn' => 50,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'min' => [
                        'name' => 'min',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 274,
                        'endLine' => 274,
                        'startColumn' => 58,
                        'endColumn' => 61,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'max' => [
                        'name' => 'max',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 274,
                        'endLine' => 274,
                        'startColumn' => 64,
                        'endColumn' => 67,
                        'parameterIndex' => 3,
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
                'startLine' => 274,
                'endLine' => 279,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'createNowInstance' => [
                'name' => 'createNowInstance',
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
                        'startLine' => 281,
                        'endLine' => 281,
                        'startColumn' => 47,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 281,
                'endLine' => 296,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'create' => [
                'name' => 'create',
                'parameters' => [
                    'year' => [
                        'name' => 'year',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 322,
                                'endLine' => 322,
                                'startTokenPos' => 1647,
                                'startFilePos' => 9991,
                                'endTokenPos' => 1647,
                                'endFilePos' => 9991,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 322,
                        'endLine' => 322,
                        'startColumn' => 35,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'month' => [
                        'name' => 'month',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 322,
                                'endLine' => 322,
                                'startTokenPos' => 1654,
                                'startFilePos' => 10003,
                                'endTokenPos' => 1654,
                                'endFilePos' => 10003,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 322,
                        'endLine' => 322,
                        'startColumn' => 46,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'day' => [
                        'name' => 'day',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 322,
                                'endLine' => 322,
                                'startTokenPos' => 1661,
                                'startFilePos' => 10013,
                                'endTokenPos' => 1661,
                                'endFilePos' => 10013,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 322,
                        'endLine' => 322,
                        'startColumn' => 58,
                        'endColumn' => 65,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'hour' => [
                        'name' => 'hour',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 322,
                                'endLine' => 322,
                                'startTokenPos' => 1668,
                                'startFilePos' => 10024,
                                'endTokenPos' => 1668,
                                'endFilePos' => 10024,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 322,
                        'endLine' => 322,
                        'startColumn' => 68,
                        'endColumn' => 76,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'minute' => [
                        'name' => 'minute',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 322,
                                'endLine' => 322,
                                'startTokenPos' => 1675,
                                'startFilePos' => 10037,
                                'endTokenPos' => 1675,
                                'endFilePos' => 10037,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 322,
                        'endLine' => 322,
                        'startColumn' => 79,
                        'endColumn' => 89,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'second' => [
                        'name' => 'second',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 322,
                                'endLine' => 322,
                                'startTokenPos' => 1682,
                                'startFilePos' => 10050,
                                'endTokenPos' => 1682,
                                'endFilePos' => 10050,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 322,
                        'endLine' => 322,
                        'startColumn' => 92,
                        'endColumn' => 102,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 322,
                                'endLine' => 322,
                                'startTokenPos' => 1689,
                                'startFilePos' => 10065,
                                'endTokenPos' => 1689,
                                'endFilePos' => 10068,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 322,
                        'endLine' => 322,
                        'startColumn' => 105,
                        'endColumn' => 120,
                        'parameterIndex' => 6,
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
                                    'name' => 'static',
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
 * Create a new Carbon instance from a specific date and time.
 *
 * If any of $year, $month or $day are set to null their now() values will
 * be used.
 *
 * If $hour is null it will be set to its now() value and the default
 * values for $minute and $second will be their now() values.
 *
 * If $hour is not null then the default values for $minute and $second
 * will be 0.
 *
 * @param DateTimeInterface|string|int|null $year
 * @param int|null                          $month
 * @param int|null                          $day
 * @param int|null                          $hour
 * @param int|null                          $minute
 * @param int|null                          $second
 * @param DateTimeZone|string|int|null      $timezone
 *
 * @throws InvalidFormatException
 *
 * @return static|null
 */',
                'startLine' => 322,
                'endLine' => 379,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'createSafe' => [
                'name' => 'createSafe',
                'parameters' => [
                    'year' => [
                        'name' => 'year',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 408,
                                'endLine' => 408,
                                'startTokenPos' => 2252,
                                'startFilePos' => 13081,
                                'endTokenPos' => 2252,
                                'endFilePos' => 13084,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 408,
                        'endLine' => 408,
                        'startColumn' => 39,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'month' => [
                        'name' => 'month',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 408,
                                'endLine' => 408,
                                'startTokenPos' => 2259,
                                'startFilePos' => 13096,
                                'endTokenPos' => 2259,
                                'endFilePos' => 13099,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 408,
                        'endLine' => 408,
                        'startColumn' => 53,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'day' => [
                        'name' => 'day',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 408,
                                'endLine' => 408,
                                'startTokenPos' => 2266,
                                'startFilePos' => 13109,
                                'endTokenPos' => 2266,
                                'endFilePos' => 13112,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 408,
                        'endLine' => 408,
                        'startColumn' => 68,
                        'endColumn' => 78,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'hour' => [
                        'name' => 'hour',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 408,
                                'endLine' => 408,
                                'startTokenPos' => 2273,
                                'startFilePos' => 13123,
                                'endTokenPos' => 2273,
                                'endFilePos' => 13126,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 408,
                        'endLine' => 408,
                        'startColumn' => 81,
                        'endColumn' => 92,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'minute' => [
                        'name' => 'minute',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 408,
                                'endLine' => 408,
                                'startTokenPos' => 2280,
                                'startFilePos' => 13139,
                                'endTokenPos' => 2280,
                                'endFilePos' => 13142,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 408,
                        'endLine' => 408,
                        'startColumn' => 95,
                        'endColumn' => 108,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'second' => [
                        'name' => 'second',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 408,
                                'endLine' => 408,
                                'startTokenPos' => 2287,
                                'startFilePos' => 13155,
                                'endTokenPos' => 2287,
                                'endFilePos' => 13158,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 408,
                        'endLine' => 408,
                        'startColumn' => 111,
                        'endColumn' => 124,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 408,
                                'endLine' => 408,
                                'startTokenPos' => 2294,
                                'startFilePos' => 13173,
                                'endTokenPos' => 2294,
                                'endFilePos' => 13176,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 408,
                        'endLine' => 408,
                        'startColumn' => 127,
                        'endColumn' => 142,
                        'parameterIndex' => 6,
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
                                    'name' => 'static',
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
 * Create a new safe Carbon instance from a specific date and time.
 *
 * If any of $year, $month or $day are set to null their now() values will
 * be used.
 *
 * If $hour is null it will be set to its now() value and the default
 * values for $minute and $second will be their now() values.
 *
 * If $hour is not null then the default values for $minute and $second
 * will be 0.
 *
 * If one of the set values is not valid, an InvalidDateException
 * will be thrown.
 *
 * @param int|null                     $year
 * @param int|null                     $month
 * @param int|null                     $day
 * @param int|null                     $hour
 * @param int|null                     $minute
 * @param int|null                     $second
 * @param DateTimeZone|string|int|null $timezone
 *
 * @throws InvalidDateException
 *
 * @return static|null
 */',
                'startLine' => 408,
                'endLine' => 436,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'createStrict' => [
                'name' => 'createStrict',
                'parameters' => [
                    'year' => [
                        'name' => 'year',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 455,
                                'endLine' => 455,
                                'startTokenPos' => 2572,
                                'startFilePos' => 14728,
                                'endTokenPos' => 2572,
                                'endFilePos' => 14728,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
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
                        'startLine' => 455,
                        'endLine' => 455,
                        'startColumn' => 41,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'month' => [
                        'name' => 'month',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 455,
                                'endLine' => 455,
                                'startTokenPos' => 2582,
                                'startFilePos' => 14745,
                                'endTokenPos' => 2582,
                                'endFilePos' => 14745,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
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
                        'startLine' => 455,
                        'endLine' => 455,
                        'startColumn' => 57,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'day' => [
                        'name' => 'day',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 455,
                                'endLine' => 455,
                                'startTokenPos' => 2592,
                                'startFilePos' => 14760,
                                'endTokenPos' => 2592,
                                'endFilePos' => 14760,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
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
                        'startLine' => 455,
                        'endLine' => 455,
                        'startColumn' => 74,
                        'endColumn' => 86,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'hour' => [
                        'name' => 'hour',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 455,
                                'endLine' => 455,
                                'startTokenPos' => 2602,
                                'startFilePos' => 14776,
                                'endTokenPos' => 2602,
                                'endFilePos' => 14776,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
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
                        'startLine' => 455,
                        'endLine' => 455,
                        'startColumn' => 89,
                        'endColumn' => 102,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'minute' => [
                        'name' => 'minute',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 455,
                                'endLine' => 455,
                                'startTokenPos' => 2612,
                                'startFilePos' => 14794,
                                'endTokenPos' => 2612,
                                'endFilePos' => 14794,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
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
                        'startLine' => 455,
                        'endLine' => 455,
                        'startColumn' => 105,
                        'endColumn' => 120,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'second' => [
                        'name' => 'second',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 455,
                                'endLine' => 455,
                                'startTokenPos' => 2622,
                                'startFilePos' => 14812,
                                'endTokenPos' => 2622,
                                'endFilePos' => 14812,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
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
                        'startLine' => 455,
                        'endLine' => 455,
                        'startColumn' => 123,
                        'endColumn' => 138,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 455,
                                'endLine' => 455,
                                'startTokenPos' => 2629,
                                'startFilePos' => 14827,
                                'endTokenPos' => 2629,
                                'endFilePos' => 14830,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 455,
                        'endLine' => 455,
                        'startColumn' => 141,
                        'endColumn' => 156,
                        'parameterIndex' => 6,
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
 * Create a new Carbon instance from a specific date and time using strict validation.
 *
 * @see create()
 *
 * @param int|null                     $year
 * @param int|null                     $month
 * @param int|null                     $day
 * @param int|null                     $hour
 * @param int|null                     $minute
 * @param int|null                     $second
 * @param DateTimeZone|string|int|null $timezone
 *
 * @throws InvalidFormatException
 *
 * @return static
 */',
                'startLine' => 455,
                'endLine' => 467,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'createFromDate' => [
                'name' => 'createFromDate',
                'parameters' => [
                    'year' => [
                        'name' => 'year',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 481,
                                'endLine' => 481,
                                'startTokenPos' => 2727,
                                'startFilePos' => 15596,
                                'endTokenPos' => 2727,
                                'endFilePos' => 15599,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 481,
                        'endLine' => 481,
                        'startColumn' => 43,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'month' => [
                        'name' => 'month',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 481,
                                'endLine' => 481,
                                'startTokenPos' => 2734,
                                'startFilePos' => 15611,
                                'endTokenPos' => 2734,
                                'endFilePos' => 15614,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 481,
                        'endLine' => 481,
                        'startColumn' => 57,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'day' => [
                        'name' => 'day',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 481,
                                'endLine' => 481,
                                'startTokenPos' => 2741,
                                'startFilePos' => 15624,
                                'endTokenPos' => 2741,
                                'endFilePos' => 15627,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 481,
                        'endLine' => 481,
                        'startColumn' => 72,
                        'endColumn' => 82,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 481,
                                'endLine' => 481,
                                'startTokenPos' => 2748,
                                'startFilePos' => 15642,
                                'endTokenPos' => 2748,
                                'endFilePos' => 15645,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 481,
                        'endLine' => 481,
                        'startColumn' => 85,
                        'endColumn' => 100,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a Carbon instance from just a date. The time portion is set to now.
 *
 * @param int|null                     $year
 * @param int|null                     $month
 * @param int|null                     $day
 * @param DateTimeZone|string|int|null $timezone
 *
 * @throws InvalidFormatException
 *
 * @return static
 */',
                'startLine' => 481,
                'endLine' => 484,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'createMidnightDate' => [
                'name' => 'createMidnightDate',
                'parameters' => [
                    'year' => [
                        'name' => 'year',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 498,
                                'endLine' => 498,
                                'startTokenPos' => 2797,
                                'startFilePos' => 16180,
                                'endTokenPos' => 2797,
                                'endFilePos' => 16183,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 498,
                        'endLine' => 498,
                        'startColumn' => 47,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'month' => [
                        'name' => 'month',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 498,
                                'endLine' => 498,
                                'startTokenPos' => 2804,
                                'startFilePos' => 16195,
                                'endTokenPos' => 2804,
                                'endFilePos' => 16198,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 498,
                        'endLine' => 498,
                        'startColumn' => 61,
                        'endColumn' => 73,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'day' => [
                        'name' => 'day',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 498,
                                'endLine' => 498,
                                'startTokenPos' => 2811,
                                'startFilePos' => 16208,
                                'endTokenPos' => 2811,
                                'endFilePos' => 16211,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 498,
                        'endLine' => 498,
                        'startColumn' => 76,
                        'endColumn' => 86,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 498,
                                'endLine' => 498,
                                'startTokenPos' => 2818,
                                'startFilePos' => 16226,
                                'endTokenPos' => 2818,
                                'endFilePos' => 16229,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 498,
                        'endLine' => 498,
                        'startColumn' => 89,
                        'endColumn' => 104,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a Carbon instance from just a date. The time portion is set to midnight.
 *
 * @param int|null                     $year
 * @param int|null                     $month
 * @param int|null                     $day
 * @param DateTimeZone|string|int|null $timezone
 *
 * @throws InvalidFormatException
 *
 * @return static
 */',
                'startLine' => 498,
                'endLine' => 501,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'createFromTime' => [
                'name' => 'createFromTime',
                'parameters' => [
                    'hour' => [
                        'name' => 'hour',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 515,
                                'endLine' => 515,
                                'startTokenPos' => 2867,
                                'startFilePos' => 16752,
                                'endTokenPos' => 2867,
                                'endFilePos' => 16752,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 515,
                        'endLine' => 515,
                        'startColumn' => 43,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'minute' => [
                        'name' => 'minute',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 515,
                                'endLine' => 515,
                                'startTokenPos' => 2874,
                                'startFilePos' => 16765,
                                'endTokenPos' => 2874,
                                'endFilePos' => 16765,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 515,
                        'endLine' => 515,
                        'startColumn' => 54,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'second' => [
                        'name' => 'second',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 515,
                                'endLine' => 515,
                                'startTokenPos' => 2881,
                                'startFilePos' => 16778,
                                'endTokenPos' => 2881,
                                'endFilePos' => 16778,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 515,
                        'endLine' => 515,
                        'startColumn' => 67,
                        'endColumn' => 77,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 515,
                                'endLine' => 515,
                                'startTokenPos' => 2888,
                                'startFilePos' => 16793,
                                'endTokenPos' => 2888,
                                'endFilePos' => 16796,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 515,
                        'endLine' => 515,
                        'startColumn' => 80,
                        'endColumn' => 95,
                        'parameterIndex' => 3,
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
 * Create a Carbon instance from just a time. The date portion is set to today.
 *
 * @param int|null                     $hour
 * @param int|null                     $minute
 * @param int|null                     $second
 * @param DateTimeZone|string|int|null $timezone
 *
 * @throws InvalidFormatException
 *
 * @return static
 */',
                'startLine' => 515,
                'endLine' => 518,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'createFromTimeString' => [
                'name' => 'createFromTimeString',
                'parameters' => [
                    'time' => [
                        'name' => 'time',
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
                        'startLine' => 525,
                        'endLine' => 525,
                        'startColumn' => 49,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 525,
                                'endLine' => 525,
                                'startTokenPos' => 2953,
                                'startFilePos' => 17155,
                                'endTokenPos' => 2953,
                                'endFilePos' => 17158,
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
                        'startLine' => 525,
                        'endLine' => 525,
                        'startColumn' => 63,
                        'endColumn' => 107,
                        'parameterIndex' => 1,
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
 * Create a Carbon instance from a time string. The date portion is set to today.
 *
 * @throws InvalidFormatException
 */',
                'startLine' => 525,
                'endLine' => 528,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'createFromFormatAndTimezone' => [
                'name' => 'createFromFormatAndTimezone',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
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
                        'startLine' => 531,
                        'endLine' => 531,
                        'startColumn' => 9,
                        'endColumn' => 22,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'time' => [
                        'name' => 'time',
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
                        'startLine' => 532,
                        'endLine' => 532,
                        'startColumn' => 9,
                        'endColumn' => 20,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'originalTimezone' => [
                        'name' => 'originalTimezone',
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
                        'startLine' => 533,
                        'endLine' => 533,
                        'startColumn' => 9,
                        'endColumn' => 54,
                        'parameterIndex' => 2,
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
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 530,
                'endLine' => 544,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'getOffsetTimezone' => [
                'name' => 'getOffsetTimezone',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
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
                        'startLine' => 546,
                        'endLine' => 546,
                        'startColumn' => 47,
                        'endColumn' => 57,
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
                'startLine' => 546,
                'endLine' => 553,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'rawCreateFromFormat' => [
                'name' => 'rawCreateFromFormat',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
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
                        'startLine' => 566,
                        'endLine' => 566,
                        'startColumn' => 48,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'time' => [
                        'name' => 'time',
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
                        'startLine' => 566,
                        'endLine' => 566,
                        'startColumn' => 64,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 566,
                                'endLine' => 566,
                                'startTokenPos' => 3209,
                                'startFilePos' => 18587,
                                'endTokenPos' => 3209,
                                'endFilePos' => 18590,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 566,
                        'endLine' => 566,
                        'startColumn' => 78,
                        'endColumn' => 93,
                        'parameterIndex' => 2,
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
                                    'name' => 'static',
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
 * Create a Carbon instance from a specific format.
 *
 * @param string                       $format   Datetime format
 * @param string                       $time
 * @param DateTimeZone|string|int|null $timezone
 *
 * @throws InvalidFormatException
 *
 * @return static|null
 */',
                'startLine' => 566,
                'endLine' => 629,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'createFromFormat' => [
                'name' => 'createFromFormat',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 643,
                        'endLine' => 643,
                        'startColumn' => 45,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'time' => [
                        'name' => 'time',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 643,
                        'endLine' => 643,
                        'startColumn' => 54,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 643,
                                'endLine' => 643,
                                'startTokenPos' => 3742,
                                'startFilePos' => 21815,
                                'endTokenPos' => 3742,
                                'endFilePos' => 21818,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 643,
                        'endLine' => 643,
                        'startColumn' => 61,
                        'endColumn' => 76,
                        'parameterIndex' => 2,
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
                                    'name' => 'static',
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
                    0 => [
                        'name' => 'ReturnTypeWillChange',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * Create a Carbon instance from a specific format.
 *
 * @param string                       $format   Datetime format
 * @param string                       $time
 * @param DateTimeZone|string|int|null $timezone
 *
 * @throws InvalidFormatException
 *
 * @return static|null
 */',
                'startLine' => 642,
                'endLine' => 669,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'createFromIsoFormat' => [
                'name' => 'createFromIsoFormat',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
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
                        'startLine' => 685,
                        'endLine' => 685,
                        'startColumn' => 9,
                        'endColumn' => 22,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'time' => [
                        'name' => 'time',
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
                        'startLine' => 686,
                        'endLine' => 686,
                        'startColumn' => 9,
                        'endColumn' => 20,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 687,
                                'endLine' => 687,
                                'startTokenPos' => 4002,
                                'startFilePos' => 23562,
                                'endTokenPos' => 4002,
                                'endFilePos' => 23565,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 687,
                        'endLine' => 687,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => [
                            'code' => '\\Carbon\\CarbonInterface::DEFAULT_LOCALE',
                            'attributes' => [
                                'startLine' => 688,
                                'endLine' => 688,
                                'startTokenPos' => 4012,
                                'startFilePos' => 23594,
                                'endTokenPos' => 4014,
                                'endFilePos' => 23624,
                            ],
                        ],
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
                        'startLine' => 688,
                        'endLine' => 688,
                        'startColumn' => 9,
                        'endColumn' => 57,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'translator' => [
                        'name' => 'translator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 689,
                                'endLine' => 689,
                                'startTokenPos' => 4024,
                                'startFilePos' => 23670,
                                'endTokenPos' => 4024,
                                'endFilePos' => 23673,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Symfony\\Contracts\\Translation\\TranslatorInterface',
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
                        'startLine' => 689,
                        'endLine' => 689,
                        'startColumn' => 9,
                        'endColumn' => 47,
                        'parameterIndex' => 4,
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
                                    'name' => 'static',
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
 * Create a Carbon instance from a specific ISO format (same replacements as ->isoFormat()).
 *
 * @param string                       $format     Datetime format
 * @param string                       $time
 * @param DateTimeZone|string|int|null $timezone   optional timezone
 * @param string|null                  $locale     locale to be used for LTS, LT, LL, LLL, etc. macro-formats (en by fault, unneeded if no such macro-format in use)
 * @param TranslatorInterface|null     $translator optional custom translator to use for macro-formats
 *
 * @throws InvalidFormatException
 *
 * @return static|null
 */',
                'startLine' => 684,
                'endLine' => 814,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'createFromLocaleFormat' => [
                'name' => 'createFromLocaleFormat',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
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
                        'startLine' => 828,
                        'endLine' => 828,
                        'startColumn' => 51,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 828,
                        'endLine' => 828,
                        'startColumn' => 67,
                        'endColumn' => 80,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'time' => [
                        'name' => 'time',
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
                        'startLine' => 828,
                        'endLine' => 828,
                        'startColumn' => 83,
                        'endColumn' => 94,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 828,
                                'endLine' => 828,
                                'startTokenPos' => 4994,
                                'startFilePos' => 28695,
                                'endTokenPos' => 4994,
                                'endFilePos' => 28698,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 828,
                        'endLine' => 828,
                        'startColumn' => 97,
                        'endColumn' => 112,
                        'parameterIndex' => 3,
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
                                    'name' => 'static',
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
 * Create a Carbon instance from a specific format and a string in a given language.
 *
 * @param string                       $format   Datetime format
 * @param string                       $locale
 * @param string                       $time
 * @param DateTimeZone|string|int|null $timezone
 *
 * @throws InvalidFormatException
 *
 * @return static|null
 */',
                'startLine' => 828,
                'endLine' => 844,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'createFromLocaleIsoFormat' => [
                'name' => 'createFromLocaleIsoFormat',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
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
                        'startLine' => 858,
                        'endLine' => 858,
                        'startColumn' => 54,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 858,
                        'endLine' => 858,
                        'startColumn' => 70,
                        'endColumn' => 83,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'time' => [
                        'name' => 'time',
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
                        'startLine' => 858,
                        'endLine' => 858,
                        'startColumn' => 86,
                        'endColumn' => 97,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 858,
                                'endLine' => 858,
                                'startTokenPos' => 5170,
                                'startFilePos' => 29915,
                                'endTokenPos' => 5170,
                                'endFilePos' => 29918,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 858,
                        'endLine' => 858,
                        'startColumn' => 100,
                        'endColumn' => 115,
                        'parameterIndex' => 3,
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
                                    'name' => 'static',
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
 * Create a Carbon instance from a specific ISO format and a string in a given language.
 *
 * @param string                       $format   Datetime ISO format
 * @param string                       $locale
 * @param string                       $time
 * @param DateTimeZone|string|int|null $timezone
 *
 * @throws InvalidFormatException
 *
 * @return static|null
 */',
                'startLine' => 858,
                'endLine' => 863,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'make' => [
                'name' => 'make',
                'parameters' => [
                    'var' => [
                        'name' => 'var',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 877,
                        'endLine' => 877,
                        'startColumn' => 33,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 877,
                                'endLine' => 877,
                                'startTokenPos' => 5260,
                                'startFilePos' => 30685,
                                'endTokenPos' => 5260,
                                'endFilePos' => 30688,
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
                        'startLine' => 877,
                        'endLine' => 877,
                        'startColumn' => 39,
                        'endColumn' => 79,
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
                                    'name' => 'static',
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
 * Make a Carbon instance from given variable if possible.
 *
 * Always return a new instance. Parse only strings and only these likely to be dates (skip intervals
 * and recurrences). Throw an exception for invalid format, but otherwise return null.
 *
 * @param mixed $var
 *
 * @throws InvalidFormatException
 *
 * @return static|null
 */',
                'startLine' => 877,
                'endLine' => 897,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'setLastErrors' => [
                'name' => 'setLastErrors',
                'parameters' => [
                    'lastErrors' => [
                        'name' => 'lastErrors',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 906,
                        'endLine' => 906,
                        'startColumn' => 43,
                        'endColumn' => 53,
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
 * Set last errors.
 *
 * @param array|bool $lastErrors
 *
 * @return void
 */',
                'startLine' => 906,
                'endLine' => 909,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'getLastErrors' => [
                'name' => 'getLastErrors',
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
                                    'name' => 'array',
                                    'isIdentifier' => true,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'false',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * {@inheritdoc}
 */',
                'startLine' => 914,
                'endLine' => 917,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
                'aliasName' => null,
            ],
            'monthToInt' => [
                'name' => 'monthToInt',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
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
                        'startLine' => 919,
                        'endLine' => 919,
                        'startColumn' => 40,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'unit' => [
                        'name' => 'unit',
                        'default' => [
                            'code' => '\'month\'',
                            'attributes' => [
                                'startLine' => 919,
                                'endLine' => 919,
                                'startTokenPos' => 5460,
                                'startFilePos' => 31604,
                                'endTokenPos' => 5460,
                                'endFilePos' => 31610,
                            ],
                        ],
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
                        'startLine' => 919,
                        'endLine' => 919,
                        'startColumn' => 54,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
                'docComment' => null,
                'startLine' => 919,
                'endLine' => 930,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Creator',
                'implementingClassName' => 'Carbon\\Traits\\Creator',
                'currentClassName' => 'Carbon\\Traits\\Creator',
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
