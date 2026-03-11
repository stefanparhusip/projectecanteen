<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Console/Scheduling/ScheduleTestCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Console\Scheduling\ScheduleTestCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-617ad039530759802f2c37ea3d4c0690857c9d0d173cbf76ede3aa15e7fe8c70-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Console\\Scheduling\\ScheduleTestCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Console/Scheduling/ScheduleTestCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'name' => 'Illuminate\\Console\\Scheduling\\ScheduleTestCommand',
        'shortName' => 'ScheduleTestCommand',
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
                        'code' => '\'schedule:test\'',
                        'attributes' => [
                            'startLine' => 11,
                            'endLine' => 11,
                            'startTokenPos' => 35,
                            'startFilePos' => 225,
                            'endTokenPos' => 35,
                            'endFilePos' => 239,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 11,
        'endLine' => 119,
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
            'signature' => [
                'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleTestCommand',
                'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleTestCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'schedule:test {--name= : The name of the scheduled command to run}\'',
                    'attributes' => [
                        'startLine' => 19,
                        'endLine' => 19,
                        'startTokenPos' => 57,
                        'startFilePos' => 389,
                        'endTokenPos' => 57,
                        'endFilePos' => 456,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 96,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleTestCommand',
                'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleTestCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Run a scheduled command\'',
                    'attributes' => [
                        'startLine' => 26,
                        'endLine' => 26,
                        'startTokenPos' => 68,
                        'startFilePos' => 571,
                        'endTokenPos' => 68,
                        'endFilePos' => 595,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 55,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'handle' => [
                'name' => 'handle',
                'parameters' => [
                    'schedule' => [
                        'name' => 'schedule',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Console\\Scheduling\\Schedule',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 34,
                        'endLine' => 34,
                        'startColumn' => 28,
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
 * Execute the console command.
 *
 * @param  \\Illuminate\\Console\\Scheduling\\Schedule  $schedule
 * @return void
 */',
                'startLine' => 34,
                'endLine' => 91,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Scheduling',
                'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleTestCommand',
                'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleTestCommand',
                'currentClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleTestCommand',
                'aliasName' => null,
            ],
            'getSelectedCommandByIndex' => [
                'name' => 'getSelectedCommandByIndex',
                'parameters' => [
                    'commandNames' => [
                        'name' => 'commandNames',
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
                        'startLine' => 99,
                        'endLine' => 99,
                        'startColumn' => 50,
                        'endColumn' => 68,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the selected command name by index.
 *
 * @param  array  $commandNames
 * @return int
 */',
                'startLine' => 99,
                'endLine' => 118,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console\\Scheduling',
                'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleTestCommand',
                'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleTestCommand',
                'currentClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleTestCommand',
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
