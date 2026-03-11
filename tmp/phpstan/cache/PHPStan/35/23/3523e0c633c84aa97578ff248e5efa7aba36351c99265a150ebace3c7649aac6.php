<?php

declare(strict_types=1);

// odsl-C:/laragon/www/usk_no_ai/vendor/composer/../sentry/sentry/src/functions.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-Sentry\captureException
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-f2dc07511bc0d75d9f13d22f3231673a0a81eceb2563a9812b4d757b47b374b2',
    'data' => [
        'name' => 'captureException',
        'parameters' => [
            'exception' => [
                'name' => 'exception',
                'default' => null,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Throwable',
                        'isIdentifier' => false,
                    ],
                ],
                'isVariadic' => false,
                'byRef' => false,
                'isPromoted' => false,
                'attributes' => [
                ],
                'startLine' => 98,
                'endLine' => 98,
                'startColumn' => 27,
                'endColumn' => 47,
                'parameterIndex' => 0,
                'isOptional' => false,
            ],
            'hint' => [
                'name' => 'hint',
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 98,
                        'endLine' => 98,
                        'startTokenPos' => 203,
                        'startFilePos' => 3298,
                        'endTokenPos' => 203,
                        'endFilePos' => 3301,
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
                'startLine' => 98,
                'endLine' => 98,
                'startColumn' => 50,
                'endColumn' => 72,
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
 * Captures an exception event and sends it to Sentry.
 *
 * @param \\Throwable     $exception The exception
 * @param EventHint|null $hint      Object that can contain additional information about the event
 */',
        'startLine' => 98,
        'endLine' => 101,
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
                'name' => 'Sentry\\captureException',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../sentry/sentry/src/functions.php',
            ],
        ],
    ],
]);
