<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../sentry/sentry/src/Severity.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Sentry\Severity
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-80242162d6c58d96d8af90598176e3ff1af7a492ea1d574b18813a74144f3393-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Sentry\\Severity',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../sentry/sentry/src/Severity.php',
            ],
        ],
        'namespace' => 'Sentry',
        'name' => 'Sentry\\Severity',
        'shortName' => 'Severity',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 32,
        'docComment' => '/**
 * This class represents an enum of severity levels an event can be associated
 * to.
 *
 * @author Stefano Arlandini <sarlandini@alice.it>
 */',
        'attributes' => [
        ],
        'startLine' => 13,
        'endLine' => 171,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Stringable',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'DEBUG' => [
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'name' => 'DEBUG',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'debug\'',
                    'attributes' => [
                        'startLine' => 20,
                        'endLine' => 20,
                        'startTokenPos' => 39,
                        'startFilePos' => 371,
                        'endTokenPos' => 39,
                        'endFilePos' => 377,
                    ],
                ],
                'docComment' => '/**
 * This constant represents the "debug" severity level.
 *
 * @internal
 */',
                'attributes' => [
                ],
                'startLine' => 20,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 33,
            ],
            'INFO' => [
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'name' => 'INFO',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'info\'',
                    'attributes' => [
                        'startLine' => 27,
                        'endLine' => 27,
                        'startTokenPos' => 52,
                        'startFilePos' => 504,
                        'endTokenPos' => 52,
                        'endFilePos' => 509,
                    ],
                ],
                'docComment' => '/**
 * This constant represents the "info" severity level.
 *
 * @internal
 */',
                'attributes' => [
                ],
                'startLine' => 27,
                'endLine' => 27,
                'startColumn' => 5,
                'endColumn' => 31,
            ],
            'WARNING' => [
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'name' => 'WARNING',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'warning\'',
                    'attributes' => [
                        'startLine' => 34,
                        'endLine' => 34,
                        'startTokenPos' => 65,
                        'startFilePos' => 642,
                        'endTokenPos' => 65,
                        'endFilePos' => 650,
                    ],
                ],
                'docComment' => '/**
 * This constant represents the "warning" severity level.
 *
 * @internal
 */',
                'attributes' => [
                ],
                'startLine' => 34,
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 37,
            ],
            'ERROR' => [
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'name' => 'ERROR',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'error\'',
                    'attributes' => [
                        'startLine' => 41,
                        'endLine' => 41,
                        'startTokenPos' => 78,
                        'startFilePos' => 779,
                        'endTokenPos' => 78,
                        'endFilePos' => 785,
                    ],
                ],
                'docComment' => '/**
 * This constant represents the "error" severity level.
 *
 * @internal
 */',
                'attributes' => [
                ],
                'startLine' => 41,
                'endLine' => 41,
                'startColumn' => 5,
                'endColumn' => 33,
            ],
            'FATAL' => [
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'name' => 'FATAL',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'fatal\'',
                    'attributes' => [
                        'startLine' => 48,
                        'endLine' => 48,
                        'startTokenPos' => 91,
                        'startFilePos' => 914,
                        'endTokenPos' => 91,
                        'endFilePos' => 920,
                    ],
                ],
                'docComment' => '/**
 * This constant represents the "fatal" severity level.
 *
 * @internal
 */',
                'attributes' => [
                ],
                'startLine' => 48,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 33,
            ],
            'ALLOWED_SEVERITIES' => [
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'name' => 'ALLOWED_SEVERITIES',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '[self::DEBUG, self::INFO, self::WARNING, self::ERROR, self::FATAL]',
                    'attributes' => [
                        'startLine' => 55,
                        'endLine' => 61,
                        'startTokenPos' => 104,
                        'startFilePos' => 1065,
                        'endTokenPos' => 131,
                        'endFilePos' => 1177,
                    ],
                ],
                'docComment' => '/**
 * This constant contains the list of allowed enum values.
 *
 * @internal
 */',
                'attributes' => [
                ],
                'startLine' => 55,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 6,
            ],
        ],
        'immediateProperties' => [
            'value' => [
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'name' => 'value',
                'modifiers' => 4,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * @var string The value of this enum instance
 */',
                'attributes' => [
                ],
                'startLine' => 66,
                'endLine' => 66,
                'startColumn' => 5,
                'endColumn' => 19,
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
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'self::INFO',
                            'attributes' => [
                                'startLine' => 73,
                                'endLine' => 73,
                                'startTokenPos' => 155,
                                'startFilePos' => 1423,
                                'endTokenPos' => 157,
                                'endFilePos' => 1432,
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
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 33,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Constructor.
 *
 * @param string $value The value this instance represents
 */',
                'startLine' => 73,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Sentry',
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'currentClassName' => 'Sentry\\Severity',
                'aliasName' => null,
            ],
            'fromError' => [
                'name' => 'fromError',
                'parameters' => [
                    'severity' => [
                        'name' => 'severity',
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
                        'startLine' => 87,
                        'endLine' => 87,
                        'startColumn' => 38,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Translate a PHP Error constant into a Sentry log level group.
 *
 * @param int $severity PHP E_* error constant
 */',
                'startLine' => 87,
                'endLine' => 112,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Sentry',
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'currentClassName' => 'Sentry\\Severity',
                'aliasName' => null,
            ],
            'debug' => [
                'name' => 'debug',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Creates a new instance of this enum for the "debug" value.
 */',
                'startLine' => 117,
                'endLine' => 120,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Sentry',
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'currentClassName' => 'Sentry\\Severity',
                'aliasName' => null,
            ],
            'info' => [
                'name' => 'info',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Creates a new instance of this enum for the "info" value.
 */',
                'startLine' => 125,
                'endLine' => 128,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Sentry',
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'currentClassName' => 'Sentry\\Severity',
                'aliasName' => null,
            ],
            'warning' => [
                'name' => 'warning',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Creates a new instance of this enum for the "warning" value.
 */',
                'startLine' => 133,
                'endLine' => 136,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Sentry',
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'currentClassName' => 'Sentry\\Severity',
                'aliasName' => null,
            ],
            'error' => [
                'name' => 'error',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Creates a new instance of this enum for the "error" value.
 */',
                'startLine' => 141,
                'endLine' => 144,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Sentry',
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'currentClassName' => 'Sentry\\Severity',
                'aliasName' => null,
            ],
            'fatal' => [
                'name' => 'fatal',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Creates a new instance of this enum for the "fatal" value.
 */',
                'startLine' => 149,
                'endLine' => 152,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Sentry',
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'currentClassName' => 'Sentry\\Severity',
                'aliasName' => null,
            ],
            'isEqualTo' => [
                'name' => 'isEqualTo',
                'parameters' => [
                    'other' => [
                        'name' => 'other',
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
                        'startLine' => 159,
                        'endLine' => 159,
                        'startColumn' => 31,
                        'endColumn' => 41,
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
 * Returns whether two object instances of this class are equal.
 *
 * @param self $other The object to compare
 */',
                'startLine' => 159,
                'endLine' => 162,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Sentry',
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'currentClassName' => 'Sentry\\Severity',
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
 * @see https://www.php.net/manual/en/language.oop5.magic.php#object.tostring
 */',
                'startLine' => 167,
                'endLine' => 170,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Sentry',
                'declaringClassName' => 'Sentry\\Severity',
                'implementingClassName' => 'Sentry\\Severity',
                'currentClassName' => 'Sentry\\Severity',
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
