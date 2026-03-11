<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../sentry/sentry/src/EventHint.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Sentry\EventHint
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-bf83089bdc108102a88deb36e9cc63f3663377c1ea122f4863c5374e28d90de1-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Sentry\\EventHint',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../sentry/sentry/src/EventHint.php',
            ],
        ],
        'namespace' => 'Sentry',
        'name' => 'Sentry\\EventHint',
        'shortName' => 'EventHint',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 32,
        'docComment' => '/**
 * This class represents hints on how to process an event.
 */',
        'attributes' => [
        ],
        'startLine' => 10,
        'endLine' => 81,
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
            'exception' => [
                'declaringClassName' => 'Sentry\\EventHint',
                'implementingClassName' => 'Sentry\\EventHint',
                'name' => 'exception',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The original exception to add to the event.
 *
 * @var \\Throwable|null
 */',
                'attributes' => [
                ],
                'startLine' => 17,
                'endLine' => 17,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'mechanism' => [
                'declaringClassName' => 'Sentry\\EventHint',
                'implementingClassName' => 'Sentry\\EventHint',
                'name' => 'mechanism',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * An object describing the mechanism of the original exception.
 *
 * @var ExceptionMechanism|null
 */',
                'attributes' => [
                ],
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'stacktrace' => [
                'declaringClassName' => 'Sentry\\EventHint',
                'implementingClassName' => 'Sentry\\EventHint',
                'name' => 'stacktrace',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The stacktrace to set on the event.
 *
 * @var Stacktrace|null
 */',
                'attributes' => [
                ],
                'startLine' => 31,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'extra' => [
                'declaringClassName' => 'Sentry\\EventHint',
                'implementingClassName' => 'Sentry\\EventHint',
                'name' => 'extra',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 38,
                        'endLine' => 38,
                        'startTokenPos' => 54,
                        'startFilePos' => 681,
                        'endTokenPos' => 55,
                        'endFilePos' => 682,
                    ],
                ],
                'docComment' => '/**
 * Any extra data that might be needed to process the event.
 *
 * @var array<string, mixed>
 */',
                'attributes' => [
                ],
                'startLine' => 38,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'fromArray' => [
                'name' => 'fromArray',
                'parameters' => [
                    'hintData' => [
                        'name' => 'hintData',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'array',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 50,
                        'endLine' => 50,
                        'startColumn' => 38,
                        'endColumn' => 52,
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
 * Create a EventHint instance from an array of values.
 *
 * @psalm-param array{
 *     exception?: \\Throwable|null,
 *     mechanism?: ExceptionMechanism|null,
 *     stacktrace?: Stacktrace|null,
 *     extra?: array<string, mixed>
 * } $hintData
 */',
                'startLine' => 50,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Sentry',
                'declaringClassName' => 'Sentry\\EventHint',
                'implementingClassName' => 'Sentry\\EventHint',
                'currentClassName' => 'Sentry\\EventHint',
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
