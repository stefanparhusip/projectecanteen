<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Units.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Units
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-d6c84f9ba10bee8319bb250cbb20a5682034d415dce5d5c223a2a3f1e9b4cb0c-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\Traits\\Units',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Units.php',
            ],
        ],
        'namespace' => 'Carbon\\Traits',
        'name' => 'Carbon\\Traits\\Units',
        'shortName' => 'Units',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Trait Units.
 *
 * Add, subtract and set units.
 */',
        'attributes' => [
        ],
        'startLine' => 34,
        'endLine' => 472,
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
            'addRealUnit' => [
                'name' => 'addRealUnit',
                'parameters' => [
                    'unit' => [
                        'name' => 'unit',
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
                        'startLine' => 47,
                        'endLine' => 47,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 47,
                                'endLine' => 47,
                                'startTokenPos' => 102,
                                'startFilePos' => 1156,
                                'endTokenPos' => 102,
                                'endFilePos' => 1156,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 47,
                        'endLine' => 47,
                        'startColumn' => 47,
                        'endColumn' => 56,
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
 * @deprecated Prefer to use add addUTCUnit() which more accurately defines what it\'s doing.
 *
 * Add seconds to the instance using timestamp. Positive $value travels
 * forward while negative $value travels into the past.
 *
 * @param string         $unit
 * @param int|float|null $value
 *
 * @return static
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
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Units',
                'implementingClassName' => 'Carbon\\Traits\\Units',
                'currentClassName' => 'Carbon\\Traits\\Units',
                'aliasName' => null,
            ],
            'addUTCUnit' => [
                'name' => 'addUTCUnit',
                'parameters' => [
                    'unit' => [
                        'name' => 'unit',
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
                        'startLine' => 61,
                        'endLine' => 61,
                        'startColumn' => 32,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 61,
                                'endLine' => 61,
                                'startTokenPos' => 142,
                                'startFilePos' => 1542,
                                'endTokenPos' => 142,
                                'endFilePos' => 1542,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 61,
                        'endLine' => 61,
                        'startColumn' => 46,
                        'endColumn' => 55,
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
 * Add seconds to the instance using timestamp. Positive $value travels
 * forward while negative $value travels into the past.
 *
 * @param string         $unit
 * @param int|float|null $value
 *
 * @return static
 */',
                'startLine' => 61,
                'endLine' => 167,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Units',
                'implementingClassName' => 'Carbon\\Traits\\Units',
                'currentClassName' => 'Carbon\\Traits\\Units',
                'aliasName' => null,
            ],
            'subRealUnit' => [
                'name' => 'subRealUnit',
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
                        'startLine' => 180,
                        'endLine' => 180,
                        'startColumn' => 33,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 180,
                                'endLine' => 180,
                                'startTokenPos' => 844,
                                'startFilePos' => 5553,
                                'endTokenPos' => 844,
                                'endFilePos' => 5553,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 180,
                        'endLine' => 180,
                        'startColumn' => 40,
                        'endColumn' => 49,
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
 * @deprecated Prefer to use add subUTCUnit() which more accurately defines what it\'s doing.
 *
 * Subtract seconds to the instance using timestamp. Positive $value travels
 * into the past while negative $value travels forward.
 *
 * @param string $unit
 * @param int    $value
 *
 * @return static
 */',
                'startLine' => 180,
                'endLine' => 183,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Units',
                'implementingClassName' => 'Carbon\\Traits\\Units',
                'currentClassName' => 'Carbon\\Traits\\Units',
                'aliasName' => null,
            ],
            'subUTCUnit' => [
                'name' => 'subUTCUnit',
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
                        'startLine' => 194,
                        'endLine' => 194,
                        'startColumn' => 32,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 194,
                                'endLine' => 194,
                                'startTokenPos' => 883,
                                'startFilePos' => 5922,
                                'endTokenPos' => 883,
                                'endFilePos' => 5922,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 194,
                        'endLine' => 194,
                        'startColumn' => 39,
                        'endColumn' => 48,
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
 * Subtract seconds to the instance using timestamp. Positive $value travels
 * into the past while negative $value travels forward.
 *
 * @param string $unit
 * @param int    $value
 *
 * @return static
 */',
                'startLine' => 194,
                'endLine' => 197,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Units',
                'implementingClassName' => 'Carbon\\Traits\\Units',
                'currentClassName' => 'Carbon\\Traits\\Units',
                'aliasName' => null,
            ],
            'isModifiableUnit' => [
                'name' => 'isModifiableUnit',
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
                        'startLine' => 206,
                        'endLine' => 206,
                        'startColumn' => 45,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
 * Returns true if a property can be changed via setter.
 *
 * @param string $unit
 *
 * @return bool
 */',
                'startLine' => 206,
                'endLine' => 224,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Units',
                'implementingClassName' => 'Carbon\\Traits\\Units',
                'currentClassName' => 'Carbon\\Traits\\Units',
                'aliasName' => null,
            ],
            'rawAdd' => [
                'name' => 'rawAdd',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'DateInterval',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 233,
                        'endLine' => 233,
                        'startColumn' => 28,
                        'endColumn' => 49,
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
 * Call native PHP DateTime/DateTimeImmutable add() method.
 *
 * @param DateInterval $interval
 *
 * @return static
 */',
                'startLine' => 233,
                'endLine' => 236,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Units',
                'implementingClassName' => 'Carbon\\Traits\\Units',
                'currentClassName' => 'Carbon\\Traits\\Units',
                'aliasName' => null,
            ],
            'add' => [
                'name' => 'add',
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
                        'startLine' => 252,
                        'endLine' => 252,
                        'startColumn' => 25,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 252,
                                'endLine' => 252,
                                'startTokenPos' => 1046,
                                'startFilePos' => 7493,
                                'endTokenPos' => 1046,
                                'endFilePos' => 7493,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 252,
                        'endLine' => 252,
                        'startColumn' => 32,
                        'endColumn' => 41,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'overflow' => [
                        'name' => 'overflow',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 252,
                                'endLine' => 252,
                                'startTokenPos' => 1056,
                                'startFilePos' => 7514,
                                'endTokenPos' => 1056,
                                'endFilePos' => 7517,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'bool',
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
                        'startLine' => 252,
                        'endLine' => 252,
                        'startColumn' => 44,
                        'endColumn' => 65,
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
                    0 => [
                        'name' => 'ReturnTypeWillChange',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * Add given units or interval to the current instance.
 *
 * @example $date->add(\'hour\', 3)
 * @example $date->add(15, \'days\')
 * @example $date->add(CarbonInterval::days(4))
 *
 * @param Unit|int|string|DateInterval|Closure|CarbonConverterInterface $unit
 * @param Unit|int|float|string                                         $value
 * @param bool|null                                                     $overflow
 *
 * @return static
 */',
                'startLine' => 251,
                'endLine' => 284,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Units',
                'implementingClassName' => 'Carbon\\Traits\\Units',
                'currentClassName' => 'Carbon\\Traits\\Units',
                'aliasName' => null,
            ],
            'addUnit' => [
                'name' => 'addUnit',
                'parameters' => [
                    'unit' => [
                        'name' => 'unit',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
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
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 289,
                        'endLine' => 289,
                        'startColumn' => 29,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 289,
                                'endLine' => 289,
                                'startTokenPos' => 1328,
                                'startFilePos' => 8564,
                                'endTokenPos' => 1328,
                                'endFilePos' => 8564,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 289,
                        'endLine' => 289,
                        'startColumn' => 48,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'overflow' => [
                        'name' => 'overflow',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 289,
                                'endLine' => 289,
                                'startTokenPos' => 1338,
                                'startFilePos' => 8585,
                                'endTokenPos' => 1338,
                                'endFilePos' => 8588,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'bool',
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
                        'startLine' => 289,
                        'endLine' => 289,
                        'startColumn' => 60,
                        'endColumn' => 81,
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
 * Add given units to the current instance.
 */',
                'startLine' => 289,
                'endLine' => 372,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Units',
                'implementingClassName' => 'Carbon\\Traits\\Units',
                'currentClassName' => 'Carbon\\Traits\\Units',
                'aliasName' => null,
            ],
            'subUnit' => [
                'name' => 'subUnit',
                'parameters' => [
                    'unit' => [
                        'name' => 'unit',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
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
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 377,
                        'endLine' => 377,
                        'startColumn' => 29,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 377,
                                'endLine' => 377,
                                'startTokenPos' => 2089,
                                'startFilePos' => 11723,
                                'endTokenPos' => 2089,
                                'endFilePos' => 11723,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 377,
                        'endLine' => 377,
                        'startColumn' => 48,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'overflow' => [
                        'name' => 'overflow',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 377,
                                'endLine' => 377,
                                'startTokenPos' => 2099,
                                'startFilePos' => 11744,
                                'endTokenPos' => 2099,
                                'endFilePos' => 11747,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'bool',
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
                        'startLine' => 377,
                        'endLine' => 377,
                        'startColumn' => 60,
                        'endColumn' => 81,
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
 * Subtract given units to the current instance.
 */',
                'startLine' => 377,
                'endLine' => 380,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Units',
                'implementingClassName' => 'Carbon\\Traits\\Units',
                'currentClassName' => 'Carbon\\Traits\\Units',
                'aliasName' => null,
            ],
            'rawSub' => [
                'name' => 'rawSub',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'DateInterval',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 385,
                        'endLine' => 385,
                        'startColumn' => 28,
                        'endColumn' => 49,
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
 * Call native PHP DateTime/DateTimeImmutable sub() method.
 */',
                'startLine' => 385,
                'endLine' => 388,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Units',
                'implementingClassName' => 'Carbon\\Traits\\Units',
                'currentClassName' => 'Carbon\\Traits\\Units',
                'aliasName' => null,
            ],
            'sub' => [
                'name' => 'sub',
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
                        'startLine' => 404,
                        'endLine' => 404,
                        'startColumn' => 25,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 404,
                                'endLine' => 404,
                                'startTokenPos' => 2175,
                                'startFilePos' => 12592,
                                'endTokenPos' => 2175,
                                'endFilePos' => 12592,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 404,
                        'endLine' => 404,
                        'startColumn' => 32,
                        'endColumn' => 41,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'overflow' => [
                        'name' => 'overflow',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 404,
                                'endLine' => 404,
                                'startTokenPos' => 2185,
                                'startFilePos' => 12613,
                                'endTokenPos' => 2185,
                                'endFilePos' => 12616,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'bool',
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
                        'startLine' => 404,
                        'endLine' => 404,
                        'startColumn' => 44,
                        'endColumn' => 65,
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
                    0 => [
                        'name' => 'ReturnTypeWillChange',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * Subtract given units or interval to the current instance.
 *
 * @example $date->sub(\'hour\', 3)
 * @example $date->sub(15, \'days\')
 * @example $date->sub(CarbonInterval::days(4))
 *
 * @param Unit|int|string|DateInterval|Closure|CarbonConverterInterface $unit
 * @param Unit|int|float|string                                         $value
 * @param bool|null                                                     $overflow
 *
 * @return static
 */',
                'startLine' => 403,
                'endLine' => 436,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Units',
                'implementingClassName' => 'Carbon\\Traits\\Units',
                'currentClassName' => 'Carbon\\Traits\\Units',
                'aliasName' => null,
            ],
            'subtract' => [
                'name' => 'subtract',
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
                        'startLine' => 449,
                        'endLine' => 449,
                        'startColumn' => 30,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 449,
                                'endLine' => 449,
                                'startTokenPos' => 2456,
                                'startFilePos' => 13890,
                                'endTokenPos' => 2456,
                                'endFilePos' => 13890,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 449,
                        'endLine' => 449,
                        'startColumn' => 37,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'overflow' => [
                        'name' => 'overflow',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 449,
                                'endLine' => 449,
                                'startTokenPos' => 2466,
                                'startFilePos' => 13911,
                                'endTokenPos' => 2466,
                                'endFilePos' => 13914,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'bool',
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
                        'startLine' => 449,
                        'endLine' => 449,
                        'startColumn' => 49,
                        'endColumn' => 70,
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
 * Subtract given units or interval to the current instance.
 *
 * @see sub()
 *
 * @param Unit|int|string|DateInterval $unit
 * @param Unit|int|float|string        $value
 * @param bool|null                    $overflow
 *
 * @return static
 */',
                'startLine' => 449,
                'endLine' => 456,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Units',
                'implementingClassName' => 'Carbon\\Traits\\Units',
                'currentClassName' => 'Carbon\\Traits\\Units',
                'aliasName' => null,
            ],
            'rawAddUnit' => [
                'name' => 'rawAddUnit',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'self',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 458,
                        'endLine' => 458,
                        'startColumn' => 40,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'unit' => [
                        'name' => 'unit',
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
                        'startLine' => 458,
                        'endLine' => 458,
                        'startColumn' => 52,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
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
                        'startLine' => 458,
                        'endLine' => 458,
                        'startColumn' => 66,
                        'endColumn' => 81,
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
                'docComment' => null,
                'startLine' => 458,
                'endLine' => 471,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Units',
                'implementingClassName' => 'Carbon\\Traits\\Units',
                'currentClassName' => 'Carbon\\Traits\\Units',
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
