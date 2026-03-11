<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/RestartCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Queue\Console\RestartCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-781f01f535ac456e614dbf8bfee8027b2893b0e45c8a0c9b9ee78f9b14bff0a6-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Queue\\Console\\RestartCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/RestartCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Queue\\Console',
        'name' => 'Illuminate\\Queue\\Console\\RestartCommand',
        'shortName' => 'RestartCommand',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
            0 => [
                'name' => 'Symfony\\Component\\Console\\Attribute\\AsCommand',
                'isRepeated' => false,
                'arguments' => [
                    'name' => [
                        'code' => '\'queue:restart\'',
                        'attributes' => [
                            'startLine' => 10,
                            'endLine' => 10,
                            'startTokenPos' => 37,
                            'startFilePos' => 240,
                            'endTokenPos' => 37,
                            'endFilePos' => 254,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 10,
        'endLine' => 59,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\InteractsWithTime',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'name' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RestartCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RestartCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'queue:restart\'',
                    'attributes' => [
                        'startLine' => 20,
                        'endLine' => 20,
                        'startTokenPos' => 64,
                        'startFilePos' => 422,
                        'endTokenPos' => 64,
                        'endFilePos' => 436,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 20,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RestartCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RestartCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Restart queue worker daemons after their current job\'',
                    'attributes' => [
                        'startLine' => 27,
                        'endLine' => 27,
                        'startTokenPos' => 75,
                        'startFilePos' => 551,
                        'endTokenPos' => 75,
                        'endFilePos' => 604,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 27,
                'endLine' => 27,
                'startColumn' => 5,
                'endColumn' => 84,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'cache' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RestartCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RestartCommand',
                'name' => 'cache',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The cache store implementation.
 *
 * @var \\Illuminate\\Contracts\\Cache\\Repository
 */',
                'attributes' => [
                ],
                'startLine' => 34,
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 21,
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
                    'cache' => [
                        'name' => 'cache',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Cache\\Repository',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new queue restart command.
 *
 * @param  \\Illuminate\\Contracts\\Cache\\Repository  $cache
 */',
                'startLine' => 41,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RestartCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RestartCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\RestartCommand',
                'aliasName' => null,
            ],
            'handle' => [
                'name' => 'handle',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the console command.
 *
 * @return void
 */',
                'startLine' => 53,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RestartCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RestartCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\RestartCommand',
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
