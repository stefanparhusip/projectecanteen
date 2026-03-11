<?php

declare(strict_types=1);

// odsl-C:/laragon/www/usk_no_ai/vendor/composer/../sentry/sentry/src/functions.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-Sentry\captureMessage
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-f2dc07511bc0d75d9f13d22f3231673a0a81eceb2563a9812b4d757b47b374b2',
    'data' => [
        'name' => 'captureMessage',
        'parameters' => [
            'message' => [
                'name' => 'message',
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
                'startLine' => 87,
                'endLine' => 87,
                'startColumn' => 25,
                'endColumn' => 39,
                'parameterIndex' => 0,
                'isOptional' => false,
            ],
            'level' => [
                'name' => 'level',
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 87,
                        'endLine' => 87,
                        'startTokenPos' => 144,
                        'startFilePos' => 2889,
                        'endTokenPos' => 144,
                        'endFilePos' => 2892,
                    ],
                ],
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Sentry\\Severity',
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
                'startLine' => 87,
                'endLine' => 87,
                'startColumn' => 42,
                'endColumn' => 64,
                'parameterIndex' => 1,
                'isOptional' => true,
            ],
            'hint' => [
                'name' => 'hint',
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 87,
                        'endLine' => 87,
                        'startTokenPos' => 154,
                        'startFilePos' => 2914,
                        'endTokenPos' => 154,
                        'endFilePos' => 2917,
                    ],
                ],
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Sentry\\EventHint',
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
                'startLine' => 87,
                'endLine' => 87,
                'startColumn' => 67,
                'endColumn' => 89,
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
                            'name' => 'Sentry\\EventId',
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
 * Captures a message event and sends it to Sentry.
 *
 * @param string         $message The message
 * @param Severity|null  $level   The severity level of the message
 * @param EventHint|null $hint    Object that can contain additional information about the event
 */',
        'startLine' => 87,
        'endLine' => 90,
        'startColumn' => 1,
        'endColumn' => 1,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'isStatic' => false,
        'namespace' => 'Sentry',
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Sentry\\captureMessage',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../sentry/sentry/src/functions.php',
            ],
        ],
    ],
]);
