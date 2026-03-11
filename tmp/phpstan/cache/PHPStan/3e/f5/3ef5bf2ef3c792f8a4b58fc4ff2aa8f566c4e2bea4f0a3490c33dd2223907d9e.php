<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Traits/StaticOptions.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\StaticOptions
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-0ef3d75f6f5a57a48e333a12b1e9ab47d204e78e97c7b80f156a2e6c93564501-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\Traits\\StaticOptions',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Traits/StaticOptions.php',
            ],
        ],
        'namespace' => 'Carbon\\Traits',
        'name' => 'Carbon\\Traits\\StaticOptions',
        'shortName' => 'StaticOptions',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Options related to a static variable.
 */',
        'attributes' => [
        ],
        'startLine' => 21,
        'endLine' => 164,
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
            'formatFunction' => [
                'declaringClassName' => 'Carbon\\Traits\\StaticOptions',
                'implementingClassName' => 'Carbon\\Traits\\StaticOptions',
                'name' => 'formatFunction',
                'modifiers' => 18,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * Function to call instead of format.
 *
 * @var string|callable|null
 */',
                'attributes' => [
                ],
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'createFromFormatFunction' => [
                'declaringClassName' => 'Carbon\\Traits\\StaticOptions',
                'implementingClassName' => 'Carbon\\Traits\\StaticOptions',
                'name' => 'createFromFormatFunction',
                'modifiers' => 18,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * Function to call instead of createFromFormat.
 *
 * @var string|callable|null
 */',
                'attributes' => [
                ],
                'startLine' => 39,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 47,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'parseFunction' => [
                'declaringClassName' => 'Carbon\\Traits\\StaticOptions',
                'implementingClassName' => 'Carbon\\Traits\\StaticOptions',
                'name' => 'parseFunction',
                'modifiers' => 18,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * Function to call instead of parse.
 *
 * @var string|callable|null
 */',
                'attributes' => [
                ],
                'startLine' => 46,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 36,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'useStrictMode' => [
                'name' => 'useStrictMode',
                'parameters' => [
                    'strictModeEnabled' => [
                        'name' => 'strictModeEnabled',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 61,
                                'endLine' => 61,
                                'startTokenPos' => 85,
                                'startFilePos' => 1650,
                                'endTokenPos' => 85,
                                'endFilePos' => 1653,
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
                        'startLine' => 61,
                        'endLine' => 61,
                        'startColumn' => 42,
                        'endColumn' => 71,
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
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather use the ->settings() method.
 * @see settings
 *
 * Enable the strict mode (or disable with passing false).
 *
 * @param bool $strictModeEnabled
 */',
                'startLine' => 61,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\StaticOptions',
                'implementingClassName' => 'Carbon\\Traits\\StaticOptions',
                'currentClassName' => 'Carbon\\Traits\\StaticOptions',
                'aliasName' => null,
            ],
            'isStrictModeEnabled' => [
                'name' => 'isStrictModeEnabled',
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
 * Returns true if the strict mode is globally in use, false else.
 * (It can be overridden in specific instances.)
 *
 * @return bool
 */',
                'startLine' => 72,
                'endLine' => 75,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\StaticOptions',
                'implementingClassName' => 'Carbon\\Traits\\StaticOptions',
                'currentClassName' => 'Carbon\\Traits\\StaticOptions',
                'aliasName' => null,
            ],
            'useMonthsOverflow' => [
                'name' => 'useMonthsOverflow',
                'parameters' => [
                    'monthsOverflow' => [
                        'name' => 'monthsOverflow',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 90,
                                'endLine' => 90,
                                'startTokenPos' => 155,
                                'startFilePos' => 2707,
                                'endTokenPos' => 155,
                                'endFilePos' => 2710,
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
                        'startColumn' => 46,
                        'endColumn' => 72,
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
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather use the ->settings() method.
 *             Or you can use method variants: addMonthsWithOverflow/addMonthsNoOverflow, same variants
 *             are available for quarters, years, decade, centuries, millennia (singular and plural forms).
 * @see settings
 *
 * Indicates if months should be calculated with overflow.
 *
 * @param bool $monthsOverflow
 *
 * @return void
 */',
                'startLine' => 90,
                'endLine' => 93,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\StaticOptions',
                'implementingClassName' => 'Carbon\\Traits\\StaticOptions',
                'currentClassName' => 'Carbon\\Traits\\StaticOptions',
                'aliasName' => null,
            ],
            'resetMonthsOverflow' => [
                'name' => 'resetMonthsOverflow',
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
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather use the ->settings() method.
 *             Or you can use method variants: addMonthsWithOverflow/addMonthsNoOverflow, same variants
 *             are available for quarters, years, decade, centuries, millennia (singular and plural forms).
 * @see settings
 *
 * Reset the month overflow behavior.
 *
 * @return void
 */',
                'startLine' => 106,
                'endLine' => 109,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\StaticOptions',
                'implementingClassName' => 'Carbon\\Traits\\StaticOptions',
                'currentClassName' => 'Carbon\\Traits\\StaticOptions',
                'aliasName' => null,
            ],
            'shouldOverflowMonths' => [
                'name' => 'shouldOverflowMonths',
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
 * Get the month overflow global behavior (can be overridden in specific instances).
 *
 * @return bool
 */',
                'startLine' => 116,
                'endLine' => 119,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\StaticOptions',
                'implementingClassName' => 'Carbon\\Traits\\StaticOptions',
                'currentClassName' => 'Carbon\\Traits\\StaticOptions',
                'aliasName' => null,
            ],
            'useYearsOverflow' => [
                'name' => 'useYearsOverflow',
                'parameters' => [
                    'yearsOverflow' => [
                        'name' => 'yearsOverflow',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 134,
                                'endLine' => 134,
                                'startTokenPos' => 255,
                                'startFilePos' => 4377,
                                'endTokenPos' => 255,
                                'endFilePos' => 4380,
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
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 45,
                        'endColumn' => 70,
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
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather use the ->settings() method.
 *             Or you can use method variants: addYearsWithOverflow/addYearsNoOverflow, same variants
 *             are available for quarters, years, decade, centuries, millennia (singular and plural forms).
 * @see settings
 *
 * Indicates if years should be calculated with overflow.
 *
 * @param bool $yearsOverflow
 *
 * @return void
 */',
                'startLine' => 134,
                'endLine' => 137,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\StaticOptions',
                'implementingClassName' => 'Carbon\\Traits\\StaticOptions',
                'currentClassName' => 'Carbon\\Traits\\StaticOptions',
                'aliasName' => null,
            ],
            'resetYearsOverflow' => [
                'name' => 'resetYearsOverflow',
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
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather use the ->settings() method.
 *             Or you can use method variants: addYearsWithOverflow/addYearsNoOverflow, same variants
 *             are available for quarters, years, decade, centuries, millennia (singular and plural forms).
 * @see settings
 *
 * Reset the month overflow behavior.
 *
 * @return void
 */',
                'startLine' => 150,
                'endLine' => 153,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\StaticOptions',
                'implementingClassName' => 'Carbon\\Traits\\StaticOptions',
                'currentClassName' => 'Carbon\\Traits\\StaticOptions',
                'aliasName' => null,
            ],
            'shouldOverflowYears' => [
                'name' => 'shouldOverflowYears',
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
 * Get the month overflow global behavior (can be overridden in specific instances).
 *
 * @return bool
 */',
                'startLine' => 160,
                'endLine' => 163,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\StaticOptions',
                'implementingClassName' => 'Carbon\\Traits\\StaticOptions',
                'currentClassName' => 'Carbon\\Traits\\StaticOptions',
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
