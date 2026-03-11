<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Console/Scheduling/ScheduleFinishCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Console\Scheduling\ScheduleFinishCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-416bf22af93e1c6b7ac36c273c0b4ec170715837348033e0626d0b6e08f7ec0e-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Console/Scheduling/ScheduleFinishCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Console\\Scheduling',
        'name' => 'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand',
        'shortName' => 'ScheduleFinishCommand',
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
                        'code' => '\'schedule:finish\'',
                        'attributes' => [
                            'startLine' => 11,
                            'endLine' => 11,
                            'startTokenPos' => 38,
                            'startFilePos' => 293,
                            'endTokenPos' => 38,
                            'endFilePos' => 309,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 11,
        'endLine' => 51,
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
                'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand',
                'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'schedule:finish {id} {code=0}\'',
                    'attributes' => [
                        'startLine' => 19,
                        'endLine' => 19,
                        'startTokenPos' => 60,
                        'startFilePos' => 461,
                        'endTokenPos' => 60,
                        'endFilePos' => 491,
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
                'endColumn' => 59,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand',
                'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Handle the completion of a scheduled command\'',
                    'attributes' => [
                        'startLine' => 26,
                        'endLine' => 26,
                        'startTokenPos' => 71,
                        'startFilePos' => 606,
                        'endTokenPos' => 71,
                        'endFilePos' => 651,
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
                'endColumn' => 76,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'hidden' => [
                'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand',
                'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand',
                'name' => 'hidden',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'true',
                    'attributes' => [
                        'startLine' => 33,
                        'endLine' => 33,
                        'startTokenPos' => 82,
                        'startFilePos' => 801,
                        'endTokenPos' => 82,
                        'endFilePos' => 804,
                    ],
                ],
                'docComment' => '/**
 * Indicates whether the command should be shown in the Artisan command list.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 29,
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
                        'startLine' => 41,
                        'endLine' => 41,
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
                'startLine' => 41,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Scheduling',
                'declaringClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand',
                'implementingClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand',
                'currentClassName' => 'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand',
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
