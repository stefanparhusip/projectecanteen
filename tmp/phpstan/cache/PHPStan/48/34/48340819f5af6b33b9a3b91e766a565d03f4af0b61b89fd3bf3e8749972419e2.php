<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Log/LogManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Log\LogManager
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-4bc5fcf71836d6834643210d6a067266931cba21e2b27c5369cd9ce1dacc0d8e-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Log\\LogManager',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Log/LogManager.php',
            ],
        ],
        'namespace' => 'Illuminate\\Log',
        'name' => 'Illuminate\\Log\\LogManager',
        'shortName' => 'LogManager',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @mixin \\Illuminate\\Log\\Logger
 */',
        'attributes' => [
        ],
        'startLine' => 29,
        'endLine' => 796,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Psr\\Log\\LoggerInterface',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Log\\ParsesLogConfiguration',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'app' => [
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'name' => 'app',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The application instance.
 *
 * @var \\Illuminate\\Contracts\\Foundation\\Application
 */',
                'attributes' => [
                ],
                'startLine' => 38,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 19,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'channels' => [
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'name' => 'channels',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 45,
                        'endLine' => 45,
                        'startTokenPos' => 143,
                        'startFilePos' => 1115,
                        'endTokenPos' => 144,
                        'endFilePos' => 1116,
                    ],
                ],
                'docComment' => '/**
 * The array of resolved channels.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 45,
                'endLine' => 45,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'sharedContext' => [
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'name' => 'sharedContext',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 52,
                        'endLine' => 52,
                        'startTokenPos' => 155,
                        'startFilePos' => 1246,
                        'endTokenPos' => 156,
                        'endFilePos' => 1247,
                    ],
                ],
                'docComment' => '/**
 * The context shared across channels and stacks.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 52,
                'endLine' => 52,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'customCreators' => [
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'name' => 'customCreators',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 59,
                        'endLine' => 59,
                        'startTokenPos' => 167,
                        'startFilePos' => 1370,
                        'endTokenPos' => 168,
                        'endFilePos' => 1371,
                    ],
                ],
                'docComment' => '/**
 * The registered custom driver creators.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 59,
                'endLine' => 59,
                'startColumn' => 5,
                'endColumn' => 35,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'dateFormat' => [
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'name' => 'dateFormat',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Y-m-d H:i:s\'',
                    'attributes' => [
                        'startLine' => 66,
                        'endLine' => 66,
                        'startTokenPos' => 179,
                        'startFilePos' => 1503,
                        'endTokenPos' => 179,
                        'endFilePos' => 1515,
                    ],
                ],
                'docComment' => '/**
 * The standard date format to use when writing logs.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 66,
                'endLine' => 66,
                'startColumn' => 5,
                'endColumn' => 42,
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
                    'app' => [
                        'name' => 'app',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 33,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new Log manager instance.
 *
 * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
 */',
                'startLine' => 73,
                'endLine' => 76,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'build' => [
                'name' => 'build',
                'parameters' => [
                    'config' => [
                        'name' => 'config',
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
                        'startLine' => 84,
                        'endLine' => 84,
                        'startColumn' => 27,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Build an on-demand log channel.
 *
 * @param  array  $config
 * @return \\Psr\\Log\\LoggerInterface
 */',
                'startLine' => 84,
                'endLine' => 89,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'stack' => [
                'name' => 'stack',
                'parameters' => [
                    'channels' => [
                        'name' => 'channels',
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
                        'startLine' => 98,
                        'endLine' => 98,
                        'startColumn' => 27,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'channel' => [
                        'name' => 'channel',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 98,
                                'endLine' => 98,
                                'startTokenPos' => 264,
                                'startFilePos' => 2251,
                                'endTokenPos' => 264,
                                'endFilePos' => 2254,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 98,
                        'endLine' => 98,
                        'startColumn' => 44,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new, on-demand aggregate logger instance.
 *
 * @param  array  $channels
 * @param  string|null  $channel
 * @return \\Psr\\Log\\LoggerInterface
 */',
                'startLine' => 98,
                'endLine' => 104,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'channel' => [
                'name' => 'channel',
                'parameters' => [
                    'channel' => [
                        'name' => 'channel',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 112,
                                'endLine' => 112,
                                'startTokenPos' => 323,
                                'startFilePos' => 2622,
                                'endTokenPos' => 323,
                                'endFilePos' => 2625,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 29,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a log channel instance.
 *
 * @param  string|null  $channel
 * @return \\Psr\\Log\\LoggerInterface
 */',
                'startLine' => 112,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'driver' => [
                'name' => 'driver',
                'parameters' => [
                    'driver' => [
                        'name' => 'driver',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 123,
                                'endLine' => 123,
                                'startTokenPos' => 352,
                                'startFilePos' => 2851,
                                'endTokenPos' => 352,
                                'endFilePos' => 2854,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 123,
                        'endLine' => 123,
                        'startColumn' => 28,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a log driver instance.
 *
 * @param  string|null  $driver
 * @return \\Psr\\Log\\LoggerInterface
 */',
                'startLine' => 123,
                'endLine' => 126,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'get' => [
                'name' => 'get',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 135,
                        'endLine' => 135,
                        'startColumn' => 28,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'config' => [
                        'name' => 'config',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 135,
                                'endLine' => 135,
                                'startTokenPos' => 392,
                                'startFilePos' => 3156,
                                'endTokenPos' => 392,
                                'endFilePos' => 3159,
                            ],
                        ],
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
                        'startLine' => 135,
                        'endLine' => 135,
                        'startColumn' => 35,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Attempt to get the log from the local cache.
 *
 * @param  string  $name
 * @param  array|null  $config
 * @return \\Psr\\Log\\LoggerInterface
 */',
                'startLine' => 135,
                'endLine' => 157,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'tap' => [
                'name' => 'tap',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 166,
                        'endLine' => 166,
                        'startColumn' => 28,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'logger' => [
                        'name' => 'logger',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Log\\Logger',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 166,
                        'endLine' => 166,
                        'startColumn' => 35,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Apply the configured taps for the logger.
 *
 * @param  string  $name
 * @param  \\Illuminate\\Log\\Logger  $logger
 * @return \\Illuminate\\Log\\Logger
 */',
                'startLine' => 166,
                'endLine' => 175,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'parseTap' => [
                'name' => 'parseTap',
                'parameters' => [
                    'tap' => [
                        'name' => 'tap',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 183,
                        'endLine' => 183,
                        'startColumn' => 33,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Parse the given tap class string into a class name and arguments string.
 *
 * @param  string  $tap
 * @return array
 */',
                'startLine' => 183,
                'endLine' => 186,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'createEmergencyLogger' => [
                'name' => 'createEmergencyLogger',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an emergency log handler to avoid white screens of death.
 *
 * @return \\Psr\\Log\\LoggerInterface
 */',
                'startLine' => 193,
                'endLine' => 206,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'resolve' => [
                'name' => 'resolve',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 217,
                        'endLine' => 217,
                        'startColumn' => 32,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'config' => [
                        'name' => 'config',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 217,
                                'endLine' => 217,
                                'startTokenPos' => 860,
                                'startFilePos' => 5719,
                                'endTokenPos' => 860,
                                'endFilePos' => 5722,
                            ],
                        ],
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
                        'startLine' => 217,
                        'endLine' => 217,
                        'startColumn' => 39,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resolve the given log instance by name.
 *
 * @param  string  $name
 * @param  array|null  $config
 * @return \\Psr\\Log\\LoggerInterface
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 217,
                'endLine' => 236,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'callCustomCreator' => [
                'name' => 'callCustomCreator',
                'parameters' => [
                    'config' => [
                        'name' => 'config',
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
                        'startLine' => 244,
                        'endLine' => 244,
                        'startColumn' => 42,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Call a custom driver creator.
 *
 * @param  array  $config
 * @return mixed
 */',
                'startLine' => 244,
                'endLine' => 247,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'createCustomDriver' => [
                'name' => 'createCustomDriver',
                'parameters' => [
                    'config' => [
                        'name' => 'config',
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
                        'startLine' => 255,
                        'endLine' => 255,
                        'startColumn' => 43,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a custom log driver instance.
 *
 * @param  array  $config
 * @return \\Psr\\Log\\LoggerInterface
 */',
                'startLine' => 255,
                'endLine' => 260,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'createStackDriver' => [
                'name' => 'createStackDriver',
                'parameters' => [
                    'config' => [
                        'name' => 'config',
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
                        'startLine' => 268,
                        'endLine' => 268,
                        'startColumn' => 42,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an aggregate log driver instance.
 *
 * @param  array  $config
 * @return \\Psr\\Log\\LoggerInterface
 */',
                'startLine' => 268,
                'endLine' => 295,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'createSingleDriver' => [
                'name' => 'createSingleDriver',
                'parameters' => [
                    'config' => [
                        'name' => 'config',
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
                        'startLine' => 303,
                        'endLine' => 303,
                        'startColumn' => 43,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the single file log driver.
 *
 * @param  array  $config
 * @return \\Psr\\Log\\LoggerInterface
 */',
                'startLine' => 303,
                'endLine' => 313,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'createDailyDriver' => [
                'name' => 'createDailyDriver',
                'parameters' => [
                    'config' => [
                        'name' => 'config',
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
                        'startLine' => 321,
                        'endLine' => 321,
                        'startColumn' => 42,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the daily file log driver.
 *
 * @param  array  $config
 * @return \\Psr\\Log\\LoggerInterface
 */',
                'startLine' => 321,
                'endLine' => 329,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'createSlackDriver' => [
                'name' => 'createSlackDriver',
                'parameters' => [
                    'config' => [
                        'name' => 'config',
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
                        'startLine' => 337,
                        'endLine' => 337,
                        'startColumn' => 42,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the Slack log driver.
 *
 * @param  array  $config
 * @return \\Psr\\Log\\LoggerInterface
 */',
                'startLine' => 337,
                'endLine' => 353,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'createSyslogDriver' => [
                'name' => 'createSyslogDriver',
                'parameters' => [
                    'config' => [
                        'name' => 'config',
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
                        'startLine' => 361,
                        'endLine' => 361,
                        'startColumn' => 43,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the syslog log driver.
 *
 * @param  array  $config
 * @return \\Psr\\Log\\LoggerInterface
 */',
                'startLine' => 361,
                'endLine' => 369,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'createErrorlogDriver' => [
                'name' => 'createErrorlogDriver',
                'parameters' => [
                    'config' => [
                        'name' => 'config',
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
                        'startLine' => 377,
                        'endLine' => 377,
                        'startColumn' => 45,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the "error log" log driver.
 *
 * @param  array  $config
 * @return \\Psr\\Log\\LoggerInterface
 */',
                'startLine' => 377,
                'endLine' => 384,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'createMonologDriver' => [
                'name' => 'createMonologDriver',
                'parameters' => [
                    'config' => [
                        'name' => 'config',
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
                        'startLine' => 395,
                        'endLine' => 395,
                        'startColumn' => 44,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of any handler available in Monolog.
 *
 * @param  array  $config
 * @return \\Psr\\Log\\LoggerInterface
 *
 * @throws \\InvalidArgumentException
 * @throws \\Illuminate\\Contracts\\Container\\BindingResolutionException
 */',
                'startLine' => 395,
                'endLine' => 432,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'prepareHandlers' => [
                'name' => 'prepareHandlers',
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
                        'startLine' => 440,
                        'endLine' => 440,
                        'startColumn' => 40,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepare the handlers for usage by Monolog.
 *
 * @param  array  $handlers
 * @return array
 */',
                'startLine' => 440,
                'endLine' => 447,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'prepareHandler' => [
                'name' => 'prepareHandler',
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
                        'startLine' => 456,
                        'endLine' => 456,
                        'startColumn' => 39,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'config' => [
                        'name' => 'config',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 456,
                                'endLine' => 456,
                                'startTokenPos' => 2359,
                                'startFilePos' => 13610,
                                'endTokenPos' => 2360,
                                'endFilePos' => 13611,
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
                        'startLine' => 456,
                        'endLine' => 456,
                        'startColumn' => 66,
                        'endColumn' => 83,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepare the handler for usage by Monolog.
 *
 * @param  \\Monolog\\Handler\\HandlerInterface  $handler
 * @param  array  $config
 * @return \\Monolog\\Handler\\HandlerInterface
 */',
                'startLine' => 456,
                'endLine' => 479,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'formatter' => [
                'name' => 'formatter',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a Monolog formatter instance.
 *
 * @return \\Monolog\\Formatter\\FormatterInterface
 */',
                'startLine' => 486,
                'endLine' => 489,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'shareContext' => [
                'name' => 'shareContext',
                'parameters' => [
                    'context' => [
                        'name' => 'context',
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
                        'startLine' => 497,
                        'endLine' => 497,
                        'startColumn' => 34,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Share context across channels and stacks.
 *
 * @param  array  $context
 * @return $this
 */',
                'startLine' => 497,
                'endLine' => 506,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'sharedContext' => [
                'name' => 'sharedContext',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * The context shared across channels and stacks.
 *
 * @return array
 */',
                'startLine' => 513,
                'endLine' => 516,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'withoutContext' => [
                'name' => 'withoutContext',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 524,
                                'endLine' => 524,
                                'startTokenPos' => 2660,
                                'startFilePos' => 15328,
                                'endTokenPos' => 2660,
                                'endFilePos' => 15331,
                            ],
                        ],
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
                        'startLine' => 524,
                        'endLine' => 524,
                        'startColumn' => 36,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flush the log context on all currently resolved channels.
 *
 * @param  string[]|null  $keys
 * @return $this
 */',
                'startLine' => 524,
                'endLine' => 533,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'flushSharedContext' => [
                'name' => 'flushSharedContext',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flush the shared context.
 *
 * @return $this
 */',
                'startLine' => 540,
                'endLine' => 545,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'getFallbackChannelName' => [
                'name' => 'getFallbackChannelName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get fallback log channel name.
 *
 * @return string
 */',
                'startLine' => 552,
                'endLine' => 555,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'configurationFor' => [
                'name' => 'configurationFor',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 563,
                        'endLine' => 563,
                        'startColumn' => 41,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the log connection configuration.
 *
 * @param  string  $name
 * @return array|null
 */',
                'startLine' => 563,
                'endLine' => 566,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'getDefaultDriver' => [
                'name' => 'getDefaultDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default log driver name.
 *
 * @return string|null
 */',
                'startLine' => 573,
                'endLine' => 576,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'setDefaultDriver' => [
                'name' => 'setDefaultDriver',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 584,
                        'endLine' => 584,
                        'startColumn' => 38,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the default log driver name.
 *
 * @param  string  $name
 * @return void
 */',
                'startLine' => 584,
                'endLine' => 587,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'extend' => [
                'name' => 'extend',
                'parameters' => [
                    'driver' => [
                        'name' => 'driver',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 599,
                        'endLine' => 599,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 599,
                        'endLine' => 599,
                        'startColumn' => 37,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a custom driver creator Closure.
 *
 * @param  string  $driver
 * @param  \\Closure  $callback
 *
 * @param-closure-this  $this  $callback
 *
 * @return $this
 */',
                'startLine' => 599,
                'endLine' => 604,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'forgetChannel' => [
                'name' => 'forgetChannel',
                'parameters' => [
                    'driver' => [
                        'name' => 'driver',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 612,
                                'endLine' => 612,
                                'startTokenPos' => 2928,
                                'startFilePos' => 17188,
                                'endTokenPos' => 2928,
                                'endFilePos' => 17191,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 612,
                        'endLine' => 612,
                        'startColumn' => 35,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Unset the given channel instance.
 *
 * @param  string|null  $driver
 * @return void
 */',
                'startLine' => 612,
                'endLine' => 619,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'parseDriver' => [
                'name' => 'parseDriver',
                'parameters' => [
                    'driver' => [
                        'name' => 'driver',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 627,
                        'endLine' => 627,
                        'startColumn' => 36,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Parse the driver name.
 *
 * @param  string|null  $driver
 * @return string|null
 */',
                'startLine' => 627,
                'endLine' => 640,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'getChannels' => [
                'name' => 'getChannels',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the resolved log channels.
 *
 * @return array
 */',
                'startLine' => 647,
                'endLine' => 650,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'emergency' => [
                'name' => 'emergency',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 659,
                        'endLine' => 659,
                        'startColumn' => 31,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 659,
                                'endLine' => 659,
                                'startTokenPos' => 3090,
                                'startFilePos' => 18135,
                                'endTokenPos' => 3091,
                                'endFilePos' => 18136,
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
                        'startLine' => 659,
                        'endLine' => 659,
                        'startColumn' => 41,
                        'endColumn' => 59,
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
 * System is unusable.
 *
 * @param  string|\\Stringable  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 659,
                'endLine' => 662,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'alert' => [
                'name' => 'alert',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 674,
                        'endLine' => 674,
                        'startColumn' => 27,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 674,
                                'endLine' => 674,
                                'startTokenPos' => 3133,
                                'startFilePos' => 18556,
                                'endTokenPos' => 3134,
                                'endFilePos' => 18557,
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
                        'startLine' => 674,
                        'endLine' => 674,
                        'startColumn' => 37,
                        'endColumn' => 55,
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
 * Action must be taken immediately.
 *
 * Example: Entire website down, database unavailable, etc. This should
 * trigger the SMS alerts and wake you up.
 *
 * @param  string|\\Stringable  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 674,
                'endLine' => 677,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'critical' => [
                'name' => 'critical',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 688,
                        'endLine' => 688,
                        'startColumn' => 30,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 688,
                                'endLine' => 688,
                                'startTokenPos' => 3176,
                                'startFilePos' => 18913,
                                'endTokenPos' => 3177,
                                'endFilePos' => 18914,
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
                        'startLine' => 688,
                        'endLine' => 688,
                        'startColumn' => 40,
                        'endColumn' => 58,
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
 * Critical conditions.
 *
 * Example: Application component unavailable, unexpected exception.
 *
 * @param  string|\\Stringable  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 688,
                'endLine' => 691,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'error' => [
                'name' => 'error',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 701,
                        'endLine' => 701,
                        'startColumn' => 27,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 701,
                                'endLine' => 701,
                                'startTokenPos' => 3219,
                                'startFilePos' => 19274,
                                'endTokenPos' => 3220,
                                'endFilePos' => 19275,
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
                        'startLine' => 701,
                        'endLine' => 701,
                        'startColumn' => 37,
                        'endColumn' => 55,
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
 * Runtime errors that do not require immediate action but should typically
 * be logged and monitored.
 *
 * @param  string|\\Stringable  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 701,
                'endLine' => 704,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'warning' => [
                'name' => 'warning',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 716,
                        'endLine' => 716,
                        'startColumn' => 29,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 716,
                                'endLine' => 716,
                                'startTokenPos' => 3262,
                                'startFilePos' => 19699,
                                'endTokenPos' => 3263,
                                'endFilePos' => 19700,
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
                        'startLine' => 716,
                        'endLine' => 716,
                        'startColumn' => 39,
                        'endColumn' => 57,
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
 * Exceptional occurrences that are not errors.
 *
 * Example: Use of deprecated APIs, poor use of an API, undesirable things
 * that are not necessarily wrong.
 *
 * @param  string|\\Stringable  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 716,
                'endLine' => 719,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'notice' => [
                'name' => 'notice',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 728,
                        'endLine' => 728,
                        'startColumn' => 28,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 728,
                                'endLine' => 728,
                                'startTokenPos' => 3305,
                                'startFilePos' => 19986,
                                'endTokenPos' => 3306,
                                'endFilePos' => 19987,
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
                        'startLine' => 728,
                        'endLine' => 728,
                        'startColumn' => 38,
                        'endColumn' => 56,
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
 * Normal but significant events.
 *
 * @param  string|\\Stringable  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 728,
                'endLine' => 731,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'info' => [
                'name' => 'info',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 742,
                        'endLine' => 742,
                        'startColumn' => 26,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 742,
                                'endLine' => 742,
                                'startTokenPos' => 3348,
                                'startFilePos' => 20306,
                                'endTokenPos' => 3349,
                                'endFilePos' => 20307,
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
                        'startLine' => 742,
                        'endLine' => 742,
                        'startColumn' => 36,
                        'endColumn' => 54,
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
 * Interesting events.
 *
 * Example: User logs in, SQL logs.
 *
 * @param  string|\\Stringable  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 742,
                'endLine' => 745,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'debug' => [
                'name' => 'debug',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 754,
                        'endLine' => 754,
                        'startColumn' => 27,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 754,
                                'endLine' => 754,
                                'startTokenPos' => 3391,
                                'startFilePos' => 20586,
                                'endTokenPos' => 3392,
                                'endFilePos' => 20587,
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
                        'startLine' => 754,
                        'endLine' => 754,
                        'startColumn' => 37,
                        'endColumn' => 55,
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
 * Detailed debug information.
 *
 * @param  string|\\Stringable  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 754,
                'endLine' => 757,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
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
                        'startLine' => 767,
                        'endLine' => 767,
                        'startColumn' => 25,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 767,
                        'endLine' => 767,
                        'startColumn' => 33,
                        'endColumn' => 40,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 767,
                                'endLine' => 767,
                                'startTokenPos' => 3437,
                                'startFilePos' => 20904,
                                'endTokenPos' => 3438,
                                'endFilePos' => 20905,
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
                        'startLine' => 767,
                        'endLine' => 767,
                        'startColumn' => 43,
                        'endColumn' => 61,
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
 * Logs with an arbitrary level.
 *
 * @param  mixed  $level
 * @param  string|\\Stringable  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 767,
                'endLine' => 770,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            'setApplication' => [
                'name' => 'setApplication',
                'parameters' => [
                    'app' => [
                        'name' => 'app',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 778,
                        'endLine' => 778,
                        'startColumn' => 36,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the application instance used by the manager.
 *
 * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
 * @return $this
 */',
                'startLine' => 778,
                'endLine' => 783,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
                'aliasName' => null,
            ],
            '__call' => [
                'name' => '__call',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 792,
                        'endLine' => 792,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 792,
                        'endLine' => 792,
                        'startColumn' => 37,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dynamically call the default driver instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 792,
                'endLine' => 795,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\LogManager',
                'implementingClassName' => 'Illuminate\\Log\\LogManager',
                'currentClassName' => 'Illuminate\\Log\\LogManager',
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
