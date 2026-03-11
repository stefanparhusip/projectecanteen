<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../monolog/monolog/src/Monolog/Logger.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Monolog\Logger
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-fe7a0a0a924ff3b2174c8b7b8decdf6691fb3daea0994b2b60a7218a93acdfaf-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Monolog\\Logger',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../monolog/monolog/src/Monolog/Logger.php',
            ],
        ],
        'namespace' => 'Monolog',
        'name' => 'Monolog\\Logger',
        'shortName' => 'Logger',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Monolog log channel
 *
 * It contains a stack of Handlers and a stack of Processors,
 * and uses them to store records that are added to it.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @final
 */',
        'attributes' => [
        ],
        'startLine' => 35,
        'endLine' => 751,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Psr\\Log\\LoggerInterface',
            1 => 'Monolog\\ResettableInterface',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'DEBUG' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'DEBUG',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '100',
                    'attributes' => [
                        'startLine' => 42,
                        'endLine' => 42,
                        'startTokenPos' => 96,
                        'startFilePos' => 939,
                        'endTokenPos' => 96,
                        'endFilePos' => 941,
                    ],
                ],
                'docComment' => '/**
 * Detailed debug information
 *
 * @deprecated Use \\Monolog\\Level::Debug
 */',
                'attributes' => [
                ],
                'startLine' => 42,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 29,
            ],
            'INFO' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'INFO',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '200',
                    'attributes' => [
                        'startLine' => 51,
                        'endLine' => 51,
                        'startTokenPos' => 109,
                        'startFilePos' => 1110,
                        'endTokenPos' => 109,
                        'endFilePos' => 1112,
                    ],
                ],
                'docComment' => '/**
 * Interesting events
 *
 * Examples: User logs in, SQL logs.
 *
 * @deprecated Use \\Monolog\\Level::Info
 */',
                'attributes' => [
                ],
                'startLine' => 51,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 28,
            ],
            'NOTICE' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'NOTICE',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '250',
                    'attributes' => [
                        'startLine' => 58,
                        'endLine' => 58,
                        'startTokenPos' => 122,
                        'startFilePos' => 1234,
                        'endTokenPos' => 122,
                        'endFilePos' => 1236,
                    ],
                ],
                'docComment' => '/**
 * Uncommon events
 *
 * @deprecated Use \\Monolog\\Level::Notice
 */',
                'attributes' => [
                ],
                'startLine' => 58,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 30,
            ],
            'WARNING' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'WARNING',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '300',
                    'attributes' => [
                        'startLine' => 68,
                        'endLine' => 68,
                        'startTokenPos' => 135,
                        'startFilePos' => 1514,
                        'endTokenPos' => 135,
                        'endFilePos' => 1516,
                    ],
                ],
                'docComment' => '/**
 * Exceptional occurrences that are not errors
 *
 * Examples: Use of deprecated APIs, poor use of an API,
 * undesirable things that are not necessarily wrong.
 *
 * @deprecated Use \\Monolog\\Level::Warning
 */',
                'attributes' => [
                ],
                'startLine' => 68,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 31,
            ],
            'ERROR' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'ERROR',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '400',
                    'attributes' => [
                        'startLine' => 75,
                        'endLine' => 75,
                        'startTokenPos' => 148,
                        'startFilePos' => 1635,
                        'endTokenPos' => 148,
                        'endFilePos' => 1637,
                    ],
                ],
                'docComment' => '/**
 * Runtime errors
 *
 * @deprecated Use \\Monolog\\Level::Error
 */',
                'attributes' => [
                ],
                'startLine' => 75,
                'endLine' => 75,
                'startColumn' => 5,
                'endColumn' => 29,
            ],
            'CRITICAL' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'CRITICAL',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '500',
                    'attributes' => [
                        'startLine' => 84,
                        'endLine' => 84,
                        'startTokenPos' => 161,
                        'startFilePos' => 1847,
                        'endTokenPos' => 161,
                        'endFilePos' => 1849,
                    ],
                ],
                'docComment' => '/**
 * Critical conditions
 *
 * Example: Application component unavailable, unexpected exception.
 *
 * @deprecated Use \\Monolog\\Level::Critical
 */',
                'attributes' => [
                ],
                'startLine' => 84,
                'endLine' => 84,
                'startColumn' => 5,
                'endColumn' => 32,
            ],
            'ALERT' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'ALERT',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '550',
                    'attributes' => [
                        'startLine' => 94,
                        'endLine' => 94,
                        'startTokenPos' => 174,
                        'startFilePos' => 2116,
                        'endTokenPos' => 174,
                        'endFilePos' => 2118,
                    ],
                ],
                'docComment' => '/**
 * Action must be taken immediately
 *
 * Example: Entire website down, database unavailable, etc.
 * This should trigger the SMS alerts and wake you up.
 *
 * @deprecated Use \\Monolog\\Level::Alert
 */',
                'attributes' => [
                ],
                'startLine' => 94,
                'endLine' => 94,
                'startColumn' => 5,
                'endColumn' => 29,
            ],
            'EMERGENCY' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'EMERGENCY',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '600',
                    'attributes' => [
                        'startLine' => 101,
                        'endLine' => 101,
                        'startTokenPos' => 187,
                        'startFilePos' => 2244,
                        'endTokenPos' => 187,
                        'endFilePos' => 2246,
                    ],
                ],
                'docComment' => '/**
 * Urgent alert.
 *
 * @deprecated Use \\Monolog\\Level::Emergency
 */',
                'attributes' => [
                ],
                'startLine' => 101,
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 33,
            ],
            'API' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'API',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '3',
                    'attributes' => [
                        'startLine' => 109,
                        'endLine' => 109,
                        'startTokenPos' => 200,
                        'startFilePos' => 2433,
                        'endTokenPos' => 200,
                        'endFilePos' => 2433,
                    ],
                ],
                'docComment' => '/**
 * Monolog API version
 *
 * This is only bumped when API breaks are done and should
 * follow the major version of the library
 */',
                'attributes' => [
                ],
                'startLine' => 109,
                'endLine' => 109,
                'startColumn' => 5,
                'endColumn' => 25,
            ],
            'RFC_5424_LEVELS' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'RFC_5424_LEVELS',
                'modifiers' => 4,
                'type' => null,
                'value' => [
                    'code' => '[7 => \\Monolog\\Level::Debug, 6 => \\Monolog\\Level::Info, 5 => \\Monolog\\Level::Notice, 4 => \\Monolog\\Level::Warning, 3 => \\Monolog\\Level::Error, 2 => \\Monolog\\Level::Critical, 1 => \\Monolog\\Level::Alert, 0 => \\Monolog\\Level::Emergency]',
                    'attributes' => [
                        'startLine' => 116,
                        'endLine' => 125,
                        'startTokenPos' => 213,
                        'startFilePos' => 2626,
                        'endTokenPos' => 287,
                        'endFilePos' => 2857,
                    ],
                ],
                'docComment' => '/**
 * Mapping between levels numbers defined in RFC 5424 and Monolog ones
 *
 * @phpstan-var array<int, Level> $rfc_5424_levels
 */',
                'attributes' => [
                ],
                'startLine' => 116,
                'endLine' => 125,
                'startColumn' => 5,
                'endColumn' => 6,
            ],
        ],
        'immediateProperties' => [
            'name' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'name',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 127,
                'endLine' => 127,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'handlers' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'handlers',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * The handler stack
 *
 * @var list<HandlerInterface>
 */',
                'attributes' => [
                ],
                'startLine' => 134,
                'endLine' => 134,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'processors' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'processors',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * Processors that will process all log records
 *
 * To process records of a single handler instead, add the processor on that specific handler
 *
 * @var array<(callable(LogRecord): LogRecord)|ProcessorInterface>
 */',
                'attributes' => [
                ],
                'startLine' => 143,
                'endLine' => 143,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'microsecondTimestamps' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'microsecondTimestamps',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'true',
                    'attributes' => [
                        'startLine' => 145,
                        'endLine' => 145,
                        'startTokenPos' => 323,
                        'startFilePos' => 3334,
                        'endTokenPos' => 323,
                        'endFilePos' => 3337,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 145,
                'endLine' => 145,
                'startColumn' => 5,
                'endColumn' => 49,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'timezone' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'timezone',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'DateTimeZone',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 147,
                'endLine' => 147,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'exceptionHandler' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'exceptionHandler',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Closure',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 149,
                        'endLine' => 149,
                        'startTokenPos' => 343,
                        'startFilePos' => 3427,
                        'endTokenPos' => 343,
                        'endFilePos' => 3430,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 149,
                'endLine' => 149,
                'startColumn' => 5,
                'endColumn' => 52,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'logDepth' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'logDepth',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '0',
                    'attributes' => [
                        'startLine' => 154,
                        'endLine' => 154,
                        'startTokenPos' => 356,
                        'startFilePos' => 3540,
                        'endTokenPos' => 356,
                        'endFilePos' => 3540,
                    ],
                ],
                'docComment' => '/**
 * Keeps track of depth to prevent infinite logging loops
 */',
                'attributes' => [
                ],
                'startLine' => 154,
                'endLine' => 154,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'fiberLogDepth' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'fiberLogDepth',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'WeakMap',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * @var WeakMap<Fiber<mixed, mixed, mixed, mixed>, int> Keeps track of depth inside fibers to prevent infinite logging loops
 */',
                'attributes' => [
                ],
                'startLine' => 159,
                'endLine' => 159,
                'startColumn' => 5,
                'endColumn' => 35,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'detectCycles' => [
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'name' => 'detectCycles',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'true',
                    'attributes' => [
                        'startLine' => 165,
                        'endLine' => 165,
                        'startTokenPos' => 378,
                        'startFilePos' => 3945,
                        'endTokenPos' => 378,
                        'endFilePos' => 3948,
                    ],
                ],
                'docComment' => '/**
 * Whether to detect infinite logging loops
 * This can be disabled via {@see useLoggingLoopDetection} if you have async handlers that do not play well with this
 */',
                'attributes' => [
                ],
                'startLine' => 165,
                'endLine' => 165,
                'startColumn' => 5,
                'endColumn' => 38,
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
                    'name' => [
                        'name' => 'name',
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
                        'startLine' => 175,
                        'endLine' => 175,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'handlers' => [
                        'name' => 'handlers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 175,
                                'endLine' => 175,
                                'startTokenPos' => 400,
                                'startFilePos' => 4581,
                                'endTokenPos' => 401,
                                'endFilePos' => 4582,
                            ],
                        ],
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
                        'startLine' => 175,
                        'endLine' => 175,
                        'startColumn' => 47,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'processors' => [
                        'name' => 'processors',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 175,
                                'endLine' => 175,
                                'startTokenPos' => 410,
                                'startFilePos' => 4605,
                                'endTokenPos' => 411,
                                'endFilePos' => 4606,
                            ],
                        ],
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
                        'startLine' => 175,
                        'endLine' => 175,
                        'startColumn' => 69,
                        'endColumn' => 90,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 175,
                                'endLine' => 175,
                                'startTokenPos' => 422,
                                'startFilePos' => 4639,
                                'endTokenPos' => 422,
                                'endFilePos' => 4642,
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
                        'startColumn' => 93,
                        'endColumn' => 126,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @param string             $name       The logging channel, a simple descriptive name that is attached to all log records
 * @param list<HandlerInterface> $handlers   Optional stack of handlers, the first one in the array is called first, etc.
 * @param callable[]         $processors Optional array of processors
 * @param DateTimeZone|null  $timezone   Optional timezone, if not provided date_default_timezone_get() will be used
 *
 * @phpstan-param array<(callable(LogRecord): LogRecord)|ProcessorInterface> $processors
 */',
                'startLine' => 175,
                'endLine' => 182,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'getName' => [
                'name' => 'getName',
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
                'docComment' => null,
                'startLine' => 184,
                'endLine' => 187,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'withName' => [
                'name' => 'withName',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
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
                        'startLine' => 194,
                        'endLine' => 194,
                        'startColumn' => 30,
                        'endColumn' => 41,
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
 * Return a new cloned instance with the name changed
 *
 * @return static
 */',
                'startLine' => 194,
                'endLine' => 200,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'pushHandler' => [
                'name' => 'pushHandler',
                'parameters' => [
                    'handler' => [
                        'name' => 'handler',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Monolog\\Handler\\HandlerInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 33,
                        'endColumn' => 57,
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
 * Pushes a handler on to the stack.
 *
 * @return $this
 */',
                'startLine' => 207,
                'endLine' => 212,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'popHandler' => [
                'name' => 'popHandler',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Monolog\\Handler\\HandlerInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Pops a handler from the stack
 *
 * @throws \\LogicException If empty handler stack
 */',
                'startLine' => 219,
                'endLine' => 226,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'setHandlers' => [
                'name' => 'setHandlers',
                'parameters' => [
                    'handlers' => [
                        'name' => 'handlers',
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
                        'startLine' => 236,
                        'endLine' => 236,
                        'startColumn' => 33,
                        'endColumn' => 47,
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
 * Set handlers, replacing all existing ones.
 *
 * If a map is passed, keys will be ignored.
 *
 * @param  list<HandlerInterface> $handlers
 * @return $this
 */',
                'startLine' => 236,
                'endLine' => 244,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'getHandlers' => [
                'name' => 'getHandlers',
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
 * @return list<HandlerInterface>
 */',
                'startLine' => 249,
                'endLine' => 252,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'pushProcessor' => [
                'name' => 'pushProcessor',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Monolog\\Processor\\ProcessorInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
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
                        'startLine' => 260,
                        'endLine' => 260,
                        'startColumn' => 35,
                        'endColumn' => 71,
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
 * Adds a processor on to the stack.
 *
 * @phpstan-param ProcessorInterface|(callable(LogRecord): LogRecord) $callback
 * @return $this
 */',
                'startLine' => 260,
                'endLine' => 265,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'popProcessor' => [
                'name' => 'popProcessor',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'callable',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Removes the processor on top of the stack and returns it.
 *
 * @phpstan-return ProcessorInterface|(callable(LogRecord): LogRecord)
 * @throws \\LogicException If empty processor stack
 */',
                'startLine' => 273,
                'endLine' => 280,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'getProcessors' => [
                'name' => 'getProcessors',
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
 * @return callable[]
 * @phpstan-return array<ProcessorInterface|(callable(LogRecord): LogRecord)>
 */',
                'startLine' => 286,
                'endLine' => 289,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'useMicrosecondTimestamps' => [
                'name' => 'useMicrosecondTimestamps',
                'parameters' => [
                    'micro' => [
                        'name' => 'micro',
                        'default' => null,
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
                        'startLine' => 303,
                        'endLine' => 303,
                        'startColumn' => 46,
                        'endColumn' => 56,
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
 * Control the use of microsecond resolution timestamps in the \'datetime\'
 * member of new records.
 *
 * As of PHP7.1 microseconds are always included by the engine, so
 * there is no performance penalty and Monolog 2 enabled microseconds
 * by default. This function lets you disable them though in case you want
 * to suppress microseconds from the output.
 *
 * @param  bool  $micro True to use microtime() to create timestamps
 * @return $this
 */',
                'startLine' => 303,
                'endLine' => 308,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'useLoggingLoopDetection' => [
                'name' => 'useLoggingLoopDetection',
                'parameters' => [
                    'detectCycles' => [
                        'name' => 'detectCycles',
                        'default' => null,
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
                        'startLine' => 313,
                        'endLine' => 313,
                        'startColumn' => 45,
                        'endColumn' => 62,
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
 * @return $this
 */',
                'startLine' => 313,
                'endLine' => 318,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'addRecord' => [
                'name' => 'addRecord',
                'parameters' => [
                    'level' => [
                        'name' => 'level',
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
                                            'name' => 'Monolog\\Level',
                                            'isIdentifier' => false,
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
                        'startLine' => 332,
                        'endLine' => 332,
                        'startColumn' => 31,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 332,
                        'endLine' => 332,
                        'startColumn' => 49,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 332,
                                'endLine' => 332,
                                'startTokenPos' => 941,
                                'startFilePos' => 8873,
                                'endTokenPos' => 942,
                                'endFilePos' => 8874,
                            ],
                        ],
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
                        'startLine' => 332,
                        'endLine' => 332,
                        'startColumn' => 66,
                        'endColumn' => 84,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'datetime' => [
                        'name' => 'datetime',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 332,
                                'endLine' => 332,
                                'startTokenPos' => 953,
                                'startFilePos' => 8928,
                                'endTokenPos' => 953,
                                'endFilePos' => 8931,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Monolog\\JsonSerializableDateTimeImmutable',
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
                        'startLine' => 332,
                        'endLine' => 332,
                        'startColumn' => 87,
                        'endColumn' => 141,
                        'parameterIndex' => 3,
                        'isOptional' => true,
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
 * Adds a log record.
 *
 * @param  int                    $level    The logging level (a Monolog or RFC 5424 level)
 * @param  string                 $message  The log message
 * @param  mixed[]                $context  The log context
 * @param  JsonSerializableDateTimeImmutable|null $datetime Optional log date to log into the past or future
 *
 * @return bool                   Whether the record has been processed
 *
 * @phpstan-param value-of<Level::VALUES>|Level $level
 */',
                'startLine' => 332,
                'endLine' => 411,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'close' => [
                'name' => 'close',
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
 * Ends a log cycle and frees all resources used by handlers.
 *
 * Closing a Handler means flushing all buffers and freeing any open resources/handles.
 * Handlers that have been closed should be able to accept log records again and re-open
 * themselves on demand, but this may not always be possible depending on implementation.
 *
 * This is useful at the end of a request and will be called automatically on every handler
 * when they get destructed.
 */',
                'startLine' => 423,
                'endLine' => 428,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'reset' => [
                'name' => 'reset',
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
 * Ends a log cycle and resets all handlers and processors to their initial state.
 *
 * Resetting a Handler or a Processor means flushing/cleaning all buffers, resetting internal
 * state, and getting it back to a state in which it can receive log records again.
 *
 * This is useful in case you want to avoid logs leaking between two requests or jobs when you
 * have a long running process like a worker or an application server serving multiple requests
 * in one process.
 */',
                'startLine' => 440,
                'endLine' => 453,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'getLevelName' => [
                'name' => 'getLevelName',
                'parameters' => [
                    'level' => [
                        'name' => 'level',
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
                                            'name' => 'Monolog\\Level',
                                            'isIdentifier' => false,
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
                        'startLine' => 467,
                        'endLine' => 467,
                        'startColumn' => 41,
                        'endColumn' => 56,
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
 * Gets the name of the logging level as a string.
 *
 * This still returns a string instead of a Level for BC, but new code should not rely on this method.
 *
 * @throws \\Psr\\Log\\InvalidArgumentException If level is not defined
 *
 * @phpstan-param  value-of<Level::VALUES>|Level $level
 * @phpstan-return value-of<Level::NAMES>
 *
 * @deprecated Since 3.0, use {@see toMonologLevel} or {@see \\Monolog\\Level->getName()} instead
 */',
                'startLine' => 467,
                'endLine' => 470,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'toMonologLevel' => [
                'name' => 'toMonologLevel',
                'parameters' => [
                    'level' => [
                        'name' => 'level',
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
                                            'name' => 'Monolog\\Level',
                                            'isIdentifier' => false,
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
                        'startLine' => 480,
                        'endLine' => 480,
                        'startColumn' => 43,
                        'endColumn' => 65,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Monolog\\Level',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Converts PSR-3 levels to Monolog ones if necessary
 *
 * @param  int|string|Level|LogLevel::*      $level Level number (monolog) or name (PSR-3)
 * @throws \\Psr\\Log\\InvalidArgumentException If level is not defined
 *
 * @phpstan-param value-of<Level::VALUES>|value-of<Level::NAMES>|Level|LogLevel::* $level
 */',
                'startLine' => 480,
                'endLine' => 512,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'isHandling' => [
                'name' => 'isHandling',
                'parameters' => [
                    'level' => [
                        'name' => 'level',
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
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Monolog\\Level',
                                            'isIdentifier' => false,
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
                        'startLine' => 519,
                        'endLine' => 519,
                        'startColumn' => 32,
                        'endColumn' => 54,
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
 * Checks whether the Logger has a handler that listens on the given level
 *
 * @phpstan-param value-of<Level::VALUES>|value-of<Level::NAMES>|Level|LogLevel::* $level
 */',
                'startLine' => 519,
                'endLine' => 535,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'setExceptionHandler' => [
                'name' => 'setExceptionHandler',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
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
                        'startLine' => 544,
                        'endLine' => 544,
                        'startColumn' => 41,
                        'endColumn' => 62,
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
 * Set a custom exception handler that will be called if adding a new record fails
 *
 * The Closure will receive an exception object and the record that failed to be logged
 *
 * @return $this
 */',
                'startLine' => 544,
                'endLine' => 549,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'getExceptionHandler' => [
                'name' => 'getExceptionHandler',
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
                                    'name' => 'Closure',
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
                'startLine' => 551,
                'endLine' => 554,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'log' => [
                'name' => 'log',
                'parameters' => [
                    'level' => [
                        'name' => 'level',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 567,
                        'endLine' => 567,
                        'startColumn' => 25,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
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
                                            'name' => 'Stringable',
                                            'isIdentifier' => false,
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
                        'startLine' => 567,
                        'endLine' => 567,
                        'startColumn' => 33,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 567,
                                'endLine' => 567,
                                'startTokenPos' => 2170,
                                'startFilePos' => 17422,
                                'endTokenPos' => 2171,
                                'endFilePos' => 17423,
                            ],
                        ],
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
                        'startLine' => 567,
                        'endLine' => 567,
                        'startColumn' => 62,
                        'endColumn' => 80,
                        'parameterIndex' => 2,
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
 * Adds a log record at an arbitrary level.
 *
 * This method allows for compatibility with common interfaces.
 *
 * @param mixed             $level   The log level (a Monolog, PSR-3 or RFC 5424 level)
 * @param string|Stringable $message The log message
 * @param mixed[]           $context The log context
 *
 * @phpstan-param Level|LogLevel::* $level
 */',
                'startLine' => 567,
                'endLine' => 582,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'debug' => [
                'name' => 'debug',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
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
                                            'name' => 'Stringable',
                                            'isIdentifier' => false,
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
                        'startLine' => 592,
                        'endLine' => 592,
                        'startColumn' => 27,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 592,
                                'endLine' => 592,
                                'startTokenPos' => 2313,
                                'startFilePos' => 18266,
                                'endTokenPos' => 2314,
                                'endFilePos' => 18267,
                            ],
                        ],
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
                        'startLine' => 592,
                        'endLine' => 592,
                        'startColumn' => 56,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
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
 * Adds a log record at the DEBUG level.
 *
 * This method allows for compatibility with common interfaces.
 *
 * @param string|Stringable $message The log message
 * @param mixed[]           $context The log context
 */',
                'startLine' => 592,
                'endLine' => 595,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'info' => [
                'name' => 'info',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
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
                                            'name' => 'Stringable',
                                            'isIdentifier' => false,
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
                        'startLine' => 605,
                        'endLine' => 605,
                        'startColumn' => 26,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 605,
                                'endLine' => 605,
                                'startTokenPos' => 2363,
                                'startFilePos' => 18685,
                                'endTokenPos' => 2364,
                                'endFilePos' => 18686,
                            ],
                        ],
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
                        'startLine' => 605,
                        'endLine' => 605,
                        'startColumn' => 55,
                        'endColumn' => 73,
                        'parameterIndex' => 1,
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
 * Adds a log record at the INFO level.
 *
 * This method allows for compatibility with common interfaces.
 *
 * @param string|Stringable $message The log message
 * @param mixed[]           $context The log context
 */',
                'startLine' => 605,
                'endLine' => 608,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'notice' => [
                'name' => 'notice',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
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
                                            'name' => 'Stringable',
                                            'isIdentifier' => false,
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
                        'startLine' => 618,
                        'endLine' => 618,
                        'startColumn' => 28,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 618,
                                'endLine' => 618,
                                'startTokenPos' => 2413,
                                'startFilePos' => 19107,
                                'endTokenPos' => 2414,
                                'endFilePos' => 19108,
                            ],
                        ],
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
                        'startLine' => 618,
                        'endLine' => 618,
                        'startColumn' => 57,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
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
 * Adds a log record at the NOTICE level.
 *
 * This method allows for compatibility with common interfaces.
 *
 * @param string|Stringable $message The log message
 * @param mixed[]           $context The log context
 */',
                'startLine' => 618,
                'endLine' => 621,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'warning' => [
                'name' => 'warning',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
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
                                            'name' => 'Stringable',
                                            'isIdentifier' => false,
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
                        'startLine' => 631,
                        'endLine' => 631,
                        'startColumn' => 29,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 631,
                                'endLine' => 631,
                                'startTokenPos' => 2463,
                                'startFilePos' => 19533,
                                'endTokenPos' => 2464,
                                'endFilePos' => 19534,
                            ],
                        ],
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
                        'startLine' => 631,
                        'endLine' => 631,
                        'startColumn' => 58,
                        'endColumn' => 76,
                        'parameterIndex' => 1,
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
 * Adds a log record at the WARNING level.
 *
 * This method allows for compatibility with common interfaces.
 *
 * @param string|Stringable $message The log message
 * @param mixed[]           $context The log context
 */',
                'startLine' => 631,
                'endLine' => 634,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'error' => [
                'name' => 'error',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
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
                                            'name' => 'Stringable',
                                            'isIdentifier' => false,
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
                        'startLine' => 644,
                        'endLine' => 644,
                        'startColumn' => 27,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 644,
                                'endLine' => 644,
                                'startTokenPos' => 2513,
                                'startFilePos' => 19956,
                                'endTokenPos' => 2514,
                                'endFilePos' => 19957,
                            ],
                        ],
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
                        'startLine' => 644,
                        'endLine' => 644,
                        'startColumn' => 56,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
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
 * Adds a log record at the ERROR level.
 *
 * This method allows for compatibility with common interfaces.
 *
 * @param string|Stringable $message The log message
 * @param mixed[]           $context The log context
 */',
                'startLine' => 644,
                'endLine' => 647,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'critical' => [
                'name' => 'critical',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
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
                                            'name' => 'Stringable',
                                            'isIdentifier' => false,
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
                        'startLine' => 657,
                        'endLine' => 657,
                        'startColumn' => 30,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 657,
                                'endLine' => 657,
                                'startTokenPos' => 2563,
                                'startFilePos' => 20383,
                                'endTokenPos' => 2564,
                                'endFilePos' => 20384,
                            ],
                        ],
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
                        'startLine' => 657,
                        'endLine' => 657,
                        'startColumn' => 59,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
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
 * Adds a log record at the CRITICAL level.
 *
 * This method allows for compatibility with common interfaces.
 *
 * @param string|Stringable $message The log message
 * @param mixed[]           $context The log context
 */',
                'startLine' => 657,
                'endLine' => 660,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'alert' => [
                'name' => 'alert',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
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
                                            'name' => 'Stringable',
                                            'isIdentifier' => false,
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
                        'startLine' => 670,
                        'endLine' => 670,
                        'startColumn' => 27,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 670,
                                'endLine' => 670,
                                'startTokenPos' => 2613,
                                'startFilePos' => 20807,
                                'endTokenPos' => 2614,
                                'endFilePos' => 20808,
                            ],
                        ],
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
                        'startLine' => 670,
                        'endLine' => 670,
                        'startColumn' => 56,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
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
 * Adds a log record at the ALERT level.
 *
 * This method allows for compatibility with common interfaces.
 *
 * @param string|Stringable $message The log message
 * @param mixed[]           $context The log context
 */',
                'startLine' => 670,
                'endLine' => 673,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'emergency' => [
                'name' => 'emergency',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
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
                                            'name' => 'Stringable',
                                            'isIdentifier' => false,
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
                        'startLine' => 683,
                        'endLine' => 683,
                        'startColumn' => 31,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 683,
                                'endLine' => 683,
                                'startTokenPos' => 2663,
                                'startFilePos' => 21236,
                                'endTokenPos' => 2664,
                                'endFilePos' => 21237,
                            ],
                        ],
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
                        'startLine' => 683,
                        'endLine' => 683,
                        'startColumn' => 60,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
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
 * Adds a log record at the EMERGENCY level.
 *
 * This method allows for compatibility with common interfaces.
 *
 * @param string|Stringable $message The log message
 * @param mixed[]           $context The log context
 */',
                'startLine' => 683,
                'endLine' => 686,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'setTimezone' => [
                'name' => 'setTimezone',
                'parameters' => [
                    'tz' => [
                        'name' => 'tz',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'DateTimeZone',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 693,
                        'endLine' => 693,
                        'startColumn' => 33,
                        'endColumn' => 48,
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
 * Sets the timezone to be used for the timestamp of log records.
 *
 * @return $this
 */',
                'startLine' => 693,
                'endLine' => 698,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'getTimezone' => [
                'name' => 'getTimezone',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'DateTimeZone',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the timezone to be used for the timestamp of log records.
 */',
                'startLine' => 703,
                'endLine' => 706,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            'handleException' => [
                'name' => 'handleException',
                'parameters' => [
                    'e' => [
                        'name' => 'e',
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
                        'startLine' => 712,
                        'endLine' => 712,
                        'startColumn' => 40,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'record' => [
                        'name' => 'record',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Monolog\\LogRecord',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 712,
                        'endLine' => 712,
                        'startColumn' => 54,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
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
 * Delegates exception management to the custom exception handler,
 * or throws the exception if no custom handler is set.
 */',
                'startLine' => 712,
                'endLine' => 719,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            '__serialize' => [
                'name' => '__serialize',
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
 * @return array<string, mixed>
 */',
                'startLine' => 724,
                'endLine' => 736,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
                'aliasName' => null,
            ],
            '__unserialize' => [
                'name' => '__unserialize',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 741,
                        'endLine' => 741,
                        'startColumn' => 35,
                        'endColumn' => 45,
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
 * @param array<string, mixed> $data
 */',
                'startLine' => 741,
                'endLine' => 750,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Monolog',
                'declaringClassName' => 'Monolog\\Logger',
                'implementingClassName' => 'Monolog\\Logger',
                'currentClassName' => 'Monolog\\Logger',
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
