<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Console/Scheduling/ScheduleInterruptCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Console\Scheduling\ScheduleInterruptCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-950130233265981d31046cfab130310f9fb6f55c3dda7d75b00afdfe42fb5546-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Console/Scheduling/ScheduleInterruptCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'name' => 'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand',
        'shortName' => 'ScheduleInterruptCommand',
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
                        'code' => '\'schedule:interrupt\'',
                        'attributes' => [
                            'startLine' => 10,
                            'endLine' => 10,
                            'startTokenPos' => 37,
                            'startFilePos' => 240,
                            'endTokenPos' => 37,
                            'endFilePos' => 259,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 10,
        'endLine' => 57,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'name' => [
                'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand',
                'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'schedule:interrupt\'',
                    'attributes' => [
                        'startLine' => 18,
                        'endLine' => 18,
                        'startTokenPos' => 59,
                        'startFilePos' => 409,
                        'endTokenPos' => 59,
                        'endFilePos' => 428,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 18,
                'endLine' => 18,
                'startColumn' => 5,
                'endColumn' => 43,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand',
                'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Interrupt the current schedule run\'',
                    'attributes' => [
                        'startLine' => 25,
                        'endLine' => 25,
                        'startTokenPos' => 70,
                        'startFilePos' => 543,
                        'endTokenPos' => 70,
                        'endFilePos' => 578,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 66,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'cache' => [
                'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand',
                'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand',
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
                'startLine' => 32,
                'endLine' => 32,
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
                        'startLine' => 39,
                        'endLine' => 39,
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
 * Create a new schedule interrupt command.
 *
 * @param  \\Illuminate\\Contracts\\Cache\\Repository  $cache
 */',
                'startLine' => 39,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Scheduling',
                'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand',
                'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand',
                'currentClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand',
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
                'startLine' => 51,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Scheduling',
                'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand',
                'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand',
                'currentClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleInterruptCommand',
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
