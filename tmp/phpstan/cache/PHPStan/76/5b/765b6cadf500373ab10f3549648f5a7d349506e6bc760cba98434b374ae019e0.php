<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Boundaries.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Boundaries
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-bc5c1520c19abcb8a3d04dec0b4b1c1ce223f2520ecb263b163eef730965f75d-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\Traits\\Boundaries',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Boundaries.php',
            ],
        ],
        'namespace' => 'Carbon\\Traits',
        'name' => 'Carbon\\Traits\\Boundaries',
        'shortName' => 'Boundaries',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Trait Boundaries.
 *
 * startOf, endOf and derived method for each unit.
 *
 * Depends on the following properties:
 *
 * @property int $year
 * @property int $month
 * @property int $daysInMonth
 * @property int $quarter
 *
 * Depends on the following methods:
 *
 * @method $this setTime(int $hour, int $minute, int $second = 0, int $microseconds = 0)
 * @method $this setDate(int $year, int $month, int $day)
 * @method $this addMonths(int $value = 1)
 */',
        'attributes' => [
        ],
        'startLine' => 38,
        'endLine' => 469,
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
            'startOfDay' => [
                'name' => 'startOfDay',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resets the time to 00:00:00 start of day
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfDay();
 * ```
 *
 * @return static
 */',
                'startLine' => 50,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'endOfDay' => [
                'name' => 'endOfDay',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resets the time to 23:59:59.999999 end of day
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfDay();
 * ```
 *
 * @return static
 */',
                'startLine' => 65,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'startOfMonth' => [
                'name' => 'startOfMonth',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resets the date to the first day of the month and the time to 00:00:00
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfMonth();
 * ```
 *
 * @return static
 */',
                'startLine' => 80,
                'endLine' => 83,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'endOfMonth' => [
                'name' => 'endOfMonth',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resets the date to end of the month and time to 23:59:59.999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfMonth();
 * ```
 *
 * @return static
 */',
                'startLine' => 95,
                'endLine' => 98,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'startOfQuarter' => [
                'name' => 'startOfQuarter',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resets the date to the first day of the quarter and the time to 00:00:00
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfQuarter();
 * ```
 *
 * @return static
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
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'endOfQuarter' => [
                'name' => 'endOfQuarter',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resets the date to end of the quarter and time to 23:59:59.999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfQuarter();
 * ```
 *
 * @return static
 */',
                'startLine' => 127,
                'endLine' => 130,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'startOfYear' => [
                'name' => 'startOfYear',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resets the date to the first day of the year and the time to 00:00:00
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfYear();
 * ```
 *
 * @return static
 */',
                'startLine' => 142,
                'endLine' => 145,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'endOfYear' => [
                'name' => 'endOfYear',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resets the date to end of the year and time to 23:59:59.999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfYear();
 * ```
 *
 * @return static
 */',
                'startLine' => 157,
                'endLine' => 160,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'startOfDecade' => [
                'name' => 'startOfDecade',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resets the date to the first day of the decade and the time to 00:00:00
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfDecade();
 * ```
 *
 * @return static
 */',
                'startLine' => 172,
                'endLine' => 177,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'endOfDecade' => [
                'name' => 'endOfDecade',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resets the date to end of the decade and time to 23:59:59.999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfDecade();
 * ```
 *
 * @return static
 */',
                'startLine' => 189,
                'endLine' => 194,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'startOfCentury' => [
                'name' => 'startOfCentury',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resets the date to the first day of the century and the time to 00:00:00
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfCentury();
 * ```
 *
 * @return static
 */',
                'startLine' => 206,
                'endLine' => 211,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'endOfCentury' => [
                'name' => 'endOfCentury',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resets the date to end of the century and time to 23:59:59.999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfCentury();
 * ```
 *
 * @return static
 */',
                'startLine' => 223,
                'endLine' => 228,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'startOfMillennium' => [
                'name' => 'startOfMillennium',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resets the date to the first day of the millennium and the time to 00:00:00
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfMillennium();
 * ```
 *
 * @return static
 */',
                'startLine' => 240,
                'endLine' => 245,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'endOfMillennium' => [
                'name' => 'endOfMillennium',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resets the date to end of the millennium and time to 23:59:59.999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfMillennium();
 * ```
 *
 * @return static
 */',
                'startLine' => 257,
                'endLine' => 262,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'startOfWeek' => [
                'name' => 'startOfWeek',
                'parameters' => [
                    'weekStartsAt' => [
                        'name' => 'weekStartsAt',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 278,
                                'endLine' => 278,
                                'startTokenPos' => 781,
                                'startFilePos' => 6987,
                                'endTokenPos' => 781,
                                'endFilePos' => 6990,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\WeekDay',
                                            'isIdentifier' => false,
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
                        'startLine' => 278,
                        'endLine' => 278,
                        'startColumn' => 33,
                        'endColumn' => 69,
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
 * Resets the date to the first day of week (defined in $weekStartsAt) and the time to 00:00:00
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfWeek() . "\\n";
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->locale(\'ar\')->startOfWeek() . "\\n";
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfWeek(Carbon::SUNDAY) . "\\n";
 * ```
 *
 * @param WeekDay|int|null $weekStartsAt optional start allow you to specify the day of week to use to start the week
 *
 * @return static
 */',
                'startLine' => 278,
                'endLine' => 286,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'endOfWeek' => [
                'name' => 'endOfWeek',
                'parameters' => [
                    'weekEndsAt' => [
                        'name' => 'weekEndsAt',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 302,
                                'endLine' => 302,
                                'startTokenPos' => 861,
                                'startFilePos' => 7860,
                                'endTokenPos' => 861,
                                'endFilePos' => 7863,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\WeekDay',
                                            'isIdentifier' => false,
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
                        'startLine' => 302,
                        'endLine' => 302,
                        'startColumn' => 31,
                        'endColumn' => 65,
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
 * Resets the date to end of week (defined in $weekEndsAt) and time to 23:59:59.999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfWeek() . "\\n";
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->locale(\'ar\')->endOfWeek() . "\\n";
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfWeek(Carbon::SATURDAY) . "\\n";
 * ```
 *
 * @param WeekDay|int|null $weekEndsAt optional end allow you to specify the day of week to use to end the week
 *
 * @return static
 */',
                'startLine' => 302,
                'endLine' => 310,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'startOfHour' => [
                'name' => 'startOfHour',
                'parameters' => [
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
 * Modify to start of current hour, minutes and seconds become 0
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfHour();
 * ```
 */',
                'startLine' => 320,
                'endLine' => 323,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'endOfHour' => [
                'name' => 'endOfHour',
                'parameters' => [
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
 * Modify to end of current hour, minutes and seconds become 59
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfHour();
 * ```
 */',
                'startLine' => 333,
                'endLine' => 336,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'startOfMinute' => [
                'name' => 'startOfMinute',
                'parameters' => [
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
 * Modify to start of current minute, seconds become 0
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfMinute();
 * ```
 */',
                'startLine' => 346,
                'endLine' => 349,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'endOfMinute' => [
                'name' => 'endOfMinute',
                'parameters' => [
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
 * Modify to end of current minute, seconds become 59
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfMinute();
 * ```
 */',
                'startLine' => 359,
                'endLine' => 362,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'startOfSecond' => [
                'name' => 'startOfSecond',
                'parameters' => [
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
 * Modify to start of current second, microseconds become 0
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16.334455\')
 *   ->startOfSecond()
 *   ->format(\'H:i:s.u\');
 * ```
 */',
                'startLine' => 374,
                'endLine' => 377,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'endOfSecond' => [
                'name' => 'endOfSecond',
                'parameters' => [
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
 * Modify to end of current second, microseconds become 999999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16.334455\')
 *   ->endOfSecond()
 *   ->format(\'H:i:s.u\');
 * ```
 */',
                'startLine' => 389,
                'endLine' => 392,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'startOfMillisecond' => [
                'name' => 'startOfMillisecond',
                'parameters' => [
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
 * Modify to start of current millisecond, microseconds such as 12345 become 123000
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16.334455\')
 *   ->startOfSecond()
 *   ->format(\'H:i:s.u\');
 * ```
 */',
                'startLine' => 404,
                'endLine' => 409,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'endOfMillisecond' => [
                'name' => 'endOfMillisecond',
                'parameters' => [
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
 * Modify to end of current millisecond, microseconds such as 12345 become 123999
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16.334455\')
 *   ->endOfSecond()
 *   ->format(\'H:i:s.u\');
 * ```
 */',
                'startLine' => 421,
                'endLine' => 426,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'startOf' => [
                'name' => 'startOf',
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
                        'startLine' => 438,
                        'endLine' => 438,
                        'startColumn' => 29,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'params' => [
                        'name' => 'params',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 438,
                        'endLine' => 438,
                        'startColumn' => 48,
                        'endColumn' => 63,
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
 * Modify to start of current given unit.
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16.334455\')
 *   ->startOf(Unit::Month)
 *   ->endOf(Unit::Week, Carbon::FRIDAY);
 * ```
 */',
                'startLine' => 438,
                'endLine' => 447,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
                'aliasName' => null,
            ],
            'endOf' => [
                'name' => 'endOf',
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
                        'startLine' => 459,
                        'endLine' => 459,
                        'startColumn' => 27,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'params' => [
                        'name' => 'params',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 459,
                        'endLine' => 459,
                        'startColumn' => 46,
                        'endColumn' => 61,
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
 * Modify to end of current given unit.
 *
 * @example
 * ```
 * echo Carbon::parse(\'2018-07-25 12:45:16.334455\')
 *   ->startOf(Unit::Month)
 *   ->endOf(Unit::Week, Carbon::FRIDAY);
 * ```
 */',
                'startLine' => 459,
                'endLine' => 468,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Boundaries',
                'implementingClassName' => 'Carbon\\Traits\\Boundaries',
                'currentClassName' => 'Carbon\\Traits\\Boundaries',
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
