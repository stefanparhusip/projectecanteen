<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Console/Command.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Console\Command
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-34cce221b150a23e403701aca08a934ea6d313cd3c627194c3b1f1a8ea52d89e-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Console\\Command',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Console/Command.php',
            ],
        ],
        'namespace' => 'Illuminate\\Console',
        'name' => 'Illuminate\\Console\\Command',
        'shortName' => 'Command',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 14,
        'endLine' => 325,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Console\\Concerns\\CallsCommands',
            1 => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
            2 => 'Illuminate\\Console\\Concerns\\HasParameters',
            3 => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
            4 => 'Illuminate\\Console\\Concerns\\InteractsWithSignals',
            5 => 'Illuminate\\Console\\Concerns\\PromptsForMissingInput',
            6 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'laravel' => [
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'name' => 'laravel',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The Laravel application instance.
 *
 * @var \\Illuminate\\Contracts\\Foundation\\Application
 */',
                'attributes' => [
                ],
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'signature' => [
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The name and signature of the console command.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 36,
                'endLine' => 36,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'name' => [
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 43,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 20,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'\'',
                    'attributes' => [
                        'startLine' => 50,
                        'endLine' => 50,
                        'startTokenPos' => 113,
                        'startFilePos' => 1158,
                        'endTokenPos' => 113,
                        'endFilePos' => 1159,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 50,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'help' => [
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'name' => 'help',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'\'',
                    'attributes' => [
                        'startLine' => 57,
                        'endLine' => 57,
                        'startTokenPos' => 124,
                        'startFilePos' => 1265,
                        'endTokenPos' => 124,
                        'endFilePos' => 1266,
                    ],
                ],
                'docComment' => '/**
 * The console command help text.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 57,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'hidden' => [
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'name' => 'hidden',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 64,
                        'endLine' => 64,
                        'startTokenPos' => 135,
                        'startFilePos' => 1416,
                        'endTokenPos' => 135,
                        'endFilePos' => 1420,
                    ],
                ],
                'docComment' => '/**
 * Indicates whether the command should be shown in the Artisan command list.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 64,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'isolated' => [
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'name' => 'isolated',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 71,
                        'endLine' => 71,
                        'startTokenPos' => 146,
                        'startFilePos' => 1575,
                        'endTokenPos' => 146,
                        'endFilePos' => 1579,
                    ],
                ],
                'docComment' => '/**
 * Indicates whether only one instance of the command can run at any given time.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 71,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'isolatedExitCode' => [
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'name' => 'isolatedExitCode',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'self::SUCCESS',
                    'attributes' => [
                        'startLine' => 78,
                        'endLine' => 78,
                        'startTokenPos' => 157,
                        'startFilePos' => 1746,
                        'endTokenPos' => 159,
                        'endFilePos' => 1758,
                    ],
                ],
                'docComment' => '/**
 * The default exit code for isolated commands.
 *
 * @var self::SUCCESS|self::FAILURE|self::INVALID
 */',
                'attributes' => [
                ],
                'startLine' => 78,
                'endLine' => 78,
                'startColumn' => 5,
                'endColumn' => 48,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'aliases' => [
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'name' => 'aliases',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The console command name aliases.
 *
 * @var string[]
 */',
                'attributes' => [
                ],
                'startLine' => 85,
                'endLine' => 85,
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
            '__construct' => [
                'name' => '__construct',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new console command instance.
 */',
                'startLine' => 90,
                'endLine' => 125,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console',
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'currentClassName' => 'Illuminate\\Console\\Command',
                'aliasName' => null,
            ],
            'configureUsingFluentDefinition' => [
                'name' => 'configureUsingFluentDefinition',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Configure the console command using a fluent definition.
 *
 * @return void
 */',
                'startLine' => 132,
                'endLine' => 143,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console',
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'currentClassName' => 'Illuminate\\Console\\Command',
                'aliasName' => null,
            ],
            'configureIsolation' => [
                'name' => 'configureIsolation',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Configure the console command for isolation.
 *
 * @return void
 */',
                'startLine' => 150,
                'endLine' => 159,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console',
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'currentClassName' => 'Illuminate\\Console\\Command',
                'aliasName' => null,
            ],
            'run' => [
                'name' => 'run',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\Console\\Input\\InputInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 169,
                        'endLine' => 169,
                        'startColumn' => 25,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'output' => [
                        'name' => 'output',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 169,
                        'endLine' => 169,
                        'startColumn' => 48,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * Run the console command.
 *
 * @param  \\Symfony\\Component\\Console\\Input\\InputInterface  $input
 * @param  \\Symfony\\Component\\Console\\Output\\OutputInterface  $output
 * @return int
 */',
                'startLine' => 168,
                'endLine' => 186,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console',
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'currentClassName' => 'Illuminate\\Console\\Command',
                'aliasName' => null,
            ],
            'execute' => [
                'name' => 'execute',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\Console\\Input\\InputInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 195,
                        'endLine' => 195,
                        'startColumn' => 32,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'output' => [
                        'name' => 'output',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 195,
                        'endLine' => 195,
                        'startColumn' => 55,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * Execute the console command.
 *
 * @param  \\Symfony\\Component\\Console\\Input\\InputInterface  $input
 * @param  \\Symfony\\Component\\Console\\Output\\OutputInterface  $output
 */',
                'startLine' => 194,
                'endLine' => 221,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console',
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'currentClassName' => 'Illuminate\\Console\\Command',
                'aliasName' => null,
            ],
            'commandIsolationMutex' => [
                'name' => 'commandIsolationMutex',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a command isolation mutex instance for the command.
 *
 * @return \\Illuminate\\Console\\CommandMutex
 */',
                'startLine' => 228,
                'endLine' => 233,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console',
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'currentClassName' => 'Illuminate\\Console\\Command',
                'aliasName' => null,
            ],
            'resolveCommand' => [
                'name' => 'resolveCommand',
                'parameters' => [
                    'command' => [
                        'name' => 'command',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 241,
                        'endLine' => 241,
                        'startColumn' => 39,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resolve the console command instance for the given command.
 *
 * @param  \\Symfony\\Component\\Console\\Command\\Command|string  $command
 * @return \\Symfony\\Component\\Console\\Command\\Command
 */',
                'startLine' => 241,
                'endLine' => 260,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console',
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'currentClassName' => 'Illuminate\\Console\\Command',
                'aliasName' => null,
            ],
            'fail' => [
                'name' => 'fail',
                'parameters' => [
                    'exception' => [
                        'name' => 'exception',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 270,
                                'endLine' => 270,
                                'startTokenPos' => 1103,
                                'startFilePos' => 7710,
                                'endTokenPos' => 1103,
                                'endFilePos' => 7713,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Throwable',
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
                        'startLine' => 270,
                        'endLine' => 270,
                        'startColumn' => 26,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Fail the command manually.
 *
 * @param  \\Throwable|string|null  $exception
 * @return never
 *
 * @throws \\Illuminate\\Console\\ManuallyFailedException|\\Throwable
 */',
                'startLine' => 270,
                'endLine' => 281,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console',
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'currentClassName' => 'Illuminate\\Console\\Command',
                'aliasName' => null,
            ],
            'isHidden' => [
                'name' => 'isHidden',
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
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * {@inheritdoc}
 *
 * @return bool
 */',
                'startLine' => 288,
                'endLine' => 292,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console',
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'currentClassName' => 'Illuminate\\Console\\Command',
                'aliasName' => null,
            ],
            'setHidden' => [
                'name' => 'setHidden',
                'parameters' => [
                    'hidden' => [
                        'name' => 'hidden',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 298,
                                'endLine' => 298,
                                'startTokenPos' => 1206,
                                'startFilePos' => 8228,
                                'endTokenPos' => 1206,
                                'endFilePos' => 8231,
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
                        'startLine' => 298,
                        'endLine' => 298,
                        'startColumn' => 31,
                        'endColumn' => 49,
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
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * {@inheritdoc}
 */',
                'startLine' => 297,
                'endLine' => 303,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console',
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'currentClassName' => 'Illuminate\\Console\\Command',
                'aliasName' => null,
            ],
            'getLaravel' => [
                'name' => 'getLaravel',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the Laravel application instance.
 *
 * @return \\Illuminate\\Contracts\\Foundation\\Application
 */',
                'startLine' => 310,
                'endLine' => 313,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console',
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'currentClassName' => 'Illuminate\\Console\\Command',
                'aliasName' => null,
            ],
            'setLaravel' => [
                'name' => 'setLaravel',
                'parameters' => [
                    'laravel' => [
                        'name' => 'laravel',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 321,
                        'endLine' => 321,
                        'startColumn' => 32,
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
 * Set the Laravel application instance.
 *
 * @param  \\Illuminate\\Contracts\\Container\\Container  $laravel
 * @return void
 */',
                'startLine' => 321,
                'endLine' => 324,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console',
                'declaringClassName' => 'Illuminate\\Console\\Command',
                'implementingClassName' => 'Illuminate\\Console\\Command',
                'currentClassName' => 'Illuminate\\Console\\Command',
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
