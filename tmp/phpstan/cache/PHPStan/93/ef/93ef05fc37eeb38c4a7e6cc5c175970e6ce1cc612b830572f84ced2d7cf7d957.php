<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Converter.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Converter
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-cd21f3c4fef4aff09bacf22720ae49a3a8bc1fa63e4613fa244b7181c0e1ee1b-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\Traits\\Converter',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Converter.php',
            ],
        ],
        'namespace' => 'Carbon\\Traits',
        'name' => 'Carbon\\Traits\\Converter',
        'shortName' => 'Converter',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Trait Converter.
 *
 * Change date into different string formats and types and
 * handle the string cast.
 *
 * Depends on the following methods:
 *
 * @method static copy()
 */',
        'attributes' => [
        ],
        'startLine' => 38,
        'endLine' => 556,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Carbon\\Traits\\ToStringFormat',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'format' => [
                'name' => 'format',
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
                        'startLine' => 47,
                        'endLine' => 47,
                        'startColumn' => 28,
                        'endColumn' => 41,
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
 * Returns the formatted date string on success or FALSE on failure.
 *
 * @see https://php.net/manual/en/datetime.format.php
 */',
                'startLine' => 47,
                'endLine' => 62,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'rawFormat' => [
                'name' => 'rawFormat',
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
                        'startLine' => 67,
                        'endLine' => 67,
                        'startColumn' => 31,
                        'endColumn' => 44,
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
 * @see https://php.net/manual/en/datetime.format.php
 */',
                'startLine' => 67,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            '__toString' => [
                'name' => '__toString',
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
 * Format the instance as a string using the set format
 *
 * @example
 * ```
 * echo Carbon::now(); // Carbon instances can be cast to string
 * ```
 */',
                'startLine' => 80,
                'endLine' => 93,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toDateString' => [
                'name' => 'toDateString',
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
 * Format the instance as date
 *
 * @example
 * ```
 * echo Carbon::now()->toDateString();
 * ```
 */',
                'startLine' => 103,
                'endLine' => 106,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toFormattedDateString' => [
                'name' => 'toFormattedDateString',
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
 * Format the instance as a readable date
 *
 * @example
 * ```
 * echo Carbon::now()->toFormattedDateString();
 * ```
 */',
                'startLine' => 116,
                'endLine' => 119,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toFormattedDayDateString' => [
                'name' => 'toFormattedDayDateString',
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
 * Format the instance with the day, and a readable date
 *
 * @example
 * ```
 * echo Carbon::now()->toFormattedDayDateString();
 * ```
 */',
                'startLine' => 129,
                'endLine' => 132,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toTimeString' => [
                'name' => 'toTimeString',
                'parameters' => [
                    'unitPrecision' => [
                        'name' => 'unitPrecision',
                        'default' => [
                            'code' => '\'second\'',
                            'attributes' => [
                                'startLine' => 142,
                                'endLine' => 142,
                                'startTokenPos' => 421,
                                'startFilePos' => 3278,
                                'endTokenPos' => 421,
                                'endFilePos' => 3285,
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
                        'startLine' => 142,
                        'endLine' => 142,
                        'startColumn' => 34,
                        'endColumn' => 65,
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
 * Format the instance as time
 *
 * @example
 * ```
 * echo Carbon::now()->toTimeString();
 * ```
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
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toDateTimeString' => [
                'name' => 'toDateTimeString',
                'parameters' => [
                    'unitPrecision' => [
                        'name' => 'unitPrecision',
                        'default' => [
                            'code' => '\'second\'',
                            'attributes' => [
                                'startLine' => 155,
                                'endLine' => 155,
                                'startTokenPos' => 460,
                                'startFilePos' => 3605,
                                'endTokenPos' => 460,
                                'endFilePos' => 3612,
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
                        'startLine' => 155,
                        'endLine' => 155,
                        'startColumn' => 38,
                        'endColumn' => 69,
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
 * Format the instance as date and time
 *
 * @example
 * ```
 * echo Carbon::now()->toDateTimeString();
 * ```
 */',
                'startLine' => 155,
                'endLine' => 158,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'getTimeFormatByPrecision' => [
                'name' => 'getTimeFormatByPrecision',
                'parameters' => [
                    'unitPrecision' => [
                        'name' => 'unitPrecision',
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
                        'startLine' => 165,
                        'endLine' => 165,
                        'startColumn' => 53,
                        'endColumn' => 73,
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
 * Return a format from H:i to H:i:s.u according to given unit precision.
 *
 * @param string $unitPrecision "minute", "second", "millisecond" or "microsecond"
 */',
                'startLine' => 165,
                'endLine' => 174,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toDateTimeLocalString' => [
                'name' => 'toDateTimeLocalString',
                'parameters' => [
                    'unitPrecision' => [
                        'name' => 'unitPrecision',
                        'default' => [
                            'code' => '\'second\'',
                            'attributes' => [
                                'startLine' => 186,
                                'endLine' => 186,
                                'startTokenPos' => 589,
                                'startFilePos' => 4777,
                                'endTokenPos' => 589,
                                'endFilePos' => 4784,
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
                        'startLine' => 186,
                        'endLine' => 186,
                        'startColumn' => 43,
                        'endColumn' => 74,
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
 * Format the instance as date and time T-separated with no timezone
 *
 * @example
 * ```
 * echo Carbon::now()->toDateTimeLocalString();
 * echo "\\n";
 * echo Carbon::now()->toDateTimeLocalString(\'minute\'); // You can specify precision among: minute, second, millisecond and microsecond
 * ```
 */',
                'startLine' => 186,
                'endLine' => 189,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toDayDateTimeString' => [
                'name' => 'toDayDateTimeString',
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
 * Format the instance with day, date and time
 *
 * @example
 * ```
 * echo Carbon::now()->toDayDateTimeString();
 * ```
 */',
                'startLine' => 199,
                'endLine' => 202,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toAtomString' => [
                'name' => 'toAtomString',
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
 * Format the instance as ATOM
 *
 * @example
 * ```
 * echo Carbon::now()->toAtomString();
 * ```
 */',
                'startLine' => 212,
                'endLine' => 215,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toCookieString' => [
                'name' => 'toCookieString',
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
 * Format the instance as COOKIE
 *
 * @example
 * ```
 * echo Carbon::now()->toCookieString();
 * ```
 */',
                'startLine' => 225,
                'endLine' => 228,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toIso8601String' => [
                'name' => 'toIso8601String',
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
 * Format the instance as ISO8601
 *
 * @example
 * ```
 * echo Carbon::now()->toIso8601String();
 * ```
 */',
                'startLine' => 238,
                'endLine' => 241,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toRfc822String' => [
                'name' => 'toRfc822String',
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
 * Format the instance as RFC822
 *
 * @example
 * ```
 * echo Carbon::now()->toRfc822String();
 * ```
 */',
                'startLine' => 251,
                'endLine' => 254,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toIso8601ZuluString' => [
                'name' => 'toIso8601ZuluString',
                'parameters' => [
                    'unitPrecision' => [
                        'name' => 'unitPrecision',
                        'default' => [
                            'code' => '\'second\'',
                            'attributes' => [
                                'startLine' => 264,
                                'endLine' => 264,
                                'startTokenPos' => 770,
                                'startFilePos' => 6423,
                                'endTokenPos' => 770,
                                'endFilePos' => 6430,
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
                        'startLine' => 264,
                        'endLine' => 264,
                        'startColumn' => 41,
                        'endColumn' => 72,
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
 * Convert the instance to UTC and return as Zulu ISO8601
 *
 * @example
 * ```
 * echo Carbon::now()->toIso8601ZuluString();
 * ```
 */',
                'startLine' => 264,
                'endLine' => 269,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toRfc850String' => [
                'name' => 'toRfc850String',
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
 * Format the instance as RFC850
 *
 * @example
 * ```
 * echo Carbon::now()->toRfc850String();
 * ```
 */',
                'startLine' => 279,
                'endLine' => 282,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toRfc1036String' => [
                'name' => 'toRfc1036String',
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
 * Format the instance as RFC1036
 *
 * @example
 * ```
 * echo Carbon::now()->toRfc1036String();
 * ```
 */',
                'startLine' => 292,
                'endLine' => 295,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toRfc1123String' => [
                'name' => 'toRfc1123String',
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
 * Format the instance as RFC1123
 *
 * @example
 * ```
 * echo Carbon::now()->toRfc1123String();
 * ```
 */',
                'startLine' => 305,
                'endLine' => 308,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toRfc2822String' => [
                'name' => 'toRfc2822String',
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
 * Format the instance as RFC2822
 *
 * @example
 * ```
 * echo Carbon::now()->toRfc2822String();
 * ```
 */',
                'startLine' => 318,
                'endLine' => 321,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toRfc3339String' => [
                'name' => 'toRfc3339String',
                'parameters' => [
                    'extended' => [
                        'name' => 'extended',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 332,
                                'endLine' => 332,
                                'startTokenPos' => 939,
                                'startFilePos' => 7921,
                                'endTokenPos' => 939,
                                'endFilePos' => 7925,
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
                        'startLine' => 332,
                        'endLine' => 332,
                        'startColumn' => 37,
                        'endColumn' => 58,
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
 * Format the instance as RFC3339.
 *
 * @example
 * ```
 * echo Carbon::now()->toRfc3339String() . "\\n";
 * echo Carbon::now()->toRfc3339String(true) . "\\n";
 * ```
 */',
                'startLine' => 332,
                'endLine' => 335,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toRssString' => [
                'name' => 'toRssString',
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
 * Format the instance as RSS
 *
 * @example
 * ```
 * echo Carbon::now()->toRssString();
 * ```
 */',
                'startLine' => 345,
                'endLine' => 348,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toW3cString' => [
                'name' => 'toW3cString',
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
 * Format the instance as W3C
 *
 * @example
 * ```
 * echo Carbon::now()->toW3cString();
 * ```
 */',
                'startLine' => 358,
                'endLine' => 361,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toRfc7231String' => [
                'name' => 'toRfc7231String',
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
 * Format the instance as RFC7231
 *
 * @example
 * ```
 * echo Carbon::now()->toRfc7231String();
 * ```
 */',
                'startLine' => 371,
                'endLine' => 376,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toArray' => [
                'name' => 'toArray',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get default array representation.
 *
 * @example
 * ```
 * var_dump(Carbon::now()->toArray());
 * ```
 */',
                'startLine' => 386,
                'endLine' => 402,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toObject' => [
                'name' => 'toObject',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'object',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get default object representation.
 *
 * @example
 * ```
 * var_dump(Carbon::now()->toObject());
 * ```
 */',
                'startLine' => 412,
                'endLine' => 415,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toString' => [
                'name' => 'toString',
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
 * Returns english human-readable complete date string.
 *
 * @example
 * ```
 * echo Carbon::now()->toString();
 * ```
 */',
                'startLine' => 425,
                'endLine' => 428,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toISOString' => [
                'name' => 'toISOString',
                'parameters' => [
                    'keepOffset' => [
                        'name' => 'keepOffset',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 442,
                                'endLine' => 442,
                                'startTokenPos' => 1310,
                                'startFilePos' => 10813,
                                'endTokenPos' => 1310,
                                'endFilePos' => 10817,
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
                        'startLine' => 442,
                        'endLine' => 442,
                        'startColumn' => 33,
                        'endColumn' => 56,
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
 * Return the ISO-8601 string (ex: 1977-04-22T06:00:00Z, if $keepOffset truthy, offset will be kept:
 * 1977-04-22T01:00:00-05:00).
 *
 * @example
 * ```
 * echo Carbon::now(\'America/Toronto\')->toISOString() . "\\n";
 * echo Carbon::now(\'America/Toronto\')->toISOString(true) . "\\n";
 * ```
 *
 * @param bool $keepOffset Pass true to keep the date offset. Else forced to UTC.
 */',
                'startLine' => 442,
                'endLine' => 453,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toJSON' => [
                'name' => 'toJSON',
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
 * Return the ISO-8601 string (ex: 1977-04-22T06:00:00Z) with UTC timezone.
 *
 * @example
 * ```
 * echo Carbon::now(\'America/Toronto\')->toJSON();
 * ```
 */',
                'startLine' => 463,
                'endLine' => 466,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toDateTime' => [
                'name' => 'toDateTime',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'DateTime',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return native DateTime PHP object matching the current instance.
 *
 * @example
 * ```
 * var_dump(Carbon::now()->toDateTime());
 * ```
 */',
                'startLine' => 476,
                'endLine' => 480,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toDateTimeImmutable' => [
                'name' => 'toDateTimeImmutable',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'DateTimeImmutable',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return native toDateTimeImmutable PHP object matching the current instance.
 *
 * @example
 * ```
 * var_dump(Carbon::now()->toDateTimeImmutable());
 * ```
 */',
                'startLine' => 490,
                'endLine' => 494,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toDate' => [
                'name' => 'toDate',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'DateTime',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * @alias toDateTime
 *
 * Return native DateTime PHP object matching the current instance.
 *
 * @example
 * ```
 * var_dump(Carbon::now()->toDate());
 * ```
 */',
                'startLine' => 506,
                'endLine' => 509,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'toPeriod' => [
                'name' => 'toPeriod',
                'parameters' => [
                    'end' => [
                        'name' => 'end',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 518,
                                'endLine' => 518,
                                'startTokenPos' => 1579,
                                'startFilePos' => 13075,
                                'endTokenPos' => 1579,
                                'endFilePos' => 13078,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 518,
                        'endLine' => 518,
                        'startColumn' => 30,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 518,
                                'endLine' => 518,
                                'startTokenPos' => 1586,
                                'startFilePos' => 13093,
                                'endTokenPos' => 1586,
                                'endFilePos' => 13096,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 518,
                        'endLine' => 518,
                        'startColumn' => 43,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'unit' => [
                        'name' => 'unit',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 518,
                                'endLine' => 518,
                                'startTokenPos' => 1593,
                                'startFilePos' => 13107,
                                'endTokenPos' => 1593,
                                'endFilePos' => 13110,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 518,
                        'endLine' => 518,
                        'startColumn' => 61,
                        'endColumn' => 72,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Carbon\\CarbonPeriod',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a iterable CarbonPeriod object from current date to a given end date (and optional interval).
 *
 * @param \\DateTimeInterface|Carbon|CarbonImmutable|int|null $end      period end date or recurrences count if int
 * @param int|\\DateInterval|string|null                      $interval period default interval or number of the given $unit
 * @param string|null                                        $unit     if specified, $interval must be an integer
 */',
                'startLine' => 518,
                'endLine' => 543,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
                'aliasName' => null,
            ],
            'range' => [
                'name' => 'range',
                'parameters' => [
                    'end' => [
                        'name' => 'end',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 552,
                                'endLine' => 552,
                                'startTokenPos' => 1803,
                                'startFilePos' => 14339,
                                'endTokenPos' => 1803,
                                'endFilePos' => 14342,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 552,
                        'endLine' => 552,
                        'startColumn' => 27,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 552,
                                'endLine' => 552,
                                'startTokenPos' => 1810,
                                'startFilePos' => 14357,
                                'endTokenPos' => 1810,
                                'endFilePos' => 14360,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 552,
                        'endLine' => 552,
                        'startColumn' => 40,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'unit' => [
                        'name' => 'unit',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 552,
                                'endLine' => 552,
                                'startTokenPos' => 1817,
                                'startFilePos' => 14371,
                                'endTokenPos' => 1817,
                                'endFilePos' => 14374,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 552,
                        'endLine' => 552,
                        'startColumn' => 58,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Carbon\\CarbonPeriod',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a iterable CarbonPeriod object from current date to a given end date (and optional interval).
 *
 * @param \\DateTimeInterface|Carbon|CarbonImmutable|null $end      period end date
 * @param int|\\DateInterval|string|null                  $interval period default interval or number of the given $unit
 * @param string|null                                    $unit     if specified, $interval must be an integer
 */',
                'startLine' => 552,
                'endLine' => 555,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Converter',
                'implementingClassName' => 'Carbon\\Traits\\Converter',
                'currentClassName' => 'Carbon\\Traits\\Converter',
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
