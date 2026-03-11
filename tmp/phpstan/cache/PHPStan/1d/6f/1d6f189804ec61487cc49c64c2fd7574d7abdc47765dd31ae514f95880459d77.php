<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/PruneCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Console\PruneCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-0cbd0f13ca9c431a3715d51f25105614988f7882b951c9640ea95e04a8296c7f-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Console\\PruneCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/PruneCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Console',
        'name' => 'Illuminate\\Database\\Console\\PruneCommand',
        'shortName' => 'PruneCommand',
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
                        'code' => '\'model:prune\'',
                        'attributes' => [
                            'startLine' => 17,
                            'endLine' => 17,
                            'startTokenPos' => 68,
                            'startFilePos' => 514,
                            'endTokenPos' => 68,
                            'endFilePos' => 526,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 17,
        'endLine' => 197,
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
                'declaringClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'model:prune
                                {--model=* : Class names of the models to be pruned}
                                {--except=* : Class names of the models to be excluded from pruning}
                                {--path=* : Absolute path(s) to directories where models are located}
                                {--chunk=1000 : The number of models to retrieve per chunk of models to be deleted}
                                {--pretend : Display the number of prunable records found instead of deleting them}\'',
                    'attributes' => [
                        'startLine' => 25,
                        'endLine' => 30,
                        'startTokenPos' => 90,
                        'startFilePos' => 669,
                        'endTokenPos' => 90,
                        'endFilePos' => 1201,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 117,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Prune models that are no longer needed\'',
                    'attributes' => [
                        'startLine' => 37,
                        'endLine' => 37,
                        'startTokenPos' => 101,
                        'startFilePos' => 1316,
                        'endTokenPos' => 101,
                        'endFilePos' => 1355,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 37,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 70,
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
                    'events' => [
                        'name' => 'events',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 45,
                        'endLine' => 45,
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
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $events
 * @return void
 */',
                'startLine' => 45,
                'endLine' => 86,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'aliasName' => null,
            ],
            'pruneModel' => [
                'name' => 'pruneModel',
                'parameters' => [
                    'model' => [
                        'name' => 'model',
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
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 35,
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
 * Prune the given model.
 *
 * @param  string  $model
 * @return void
 */',
                'startLine' => 94,
                'endLine' => 109,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'aliasName' => null,
            ],
            'models' => [
                'name' => 'models',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine the models that should be pruned.
 *
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 116,
                'endLine' => 144,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'aliasName' => null,
            ],
            'getPath' => [
                'name' => 'getPath',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the path where models are located.
 *
 * @return string[]|string
 */',
                'startLine' => 151,
                'endLine' => 160,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'aliasName' => null,
            ],
            'pretendToPrune' => [
                'name' => 'pretendToPrune',
                'parameters' => [
                    'model' => [
                        'name' => 'model',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 168,
                        'endLine' => 168,
                        'startColumn' => 39,
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
 * Display how many models will be pruned.
 *
 * @param  class-string  $model
 * @return void
 */',
                'startLine' => 168,
                'endLine' => 182,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'aliasName' => null,
            ],
            'isPrunable' => [
                'name' => 'isPrunable',
                'parameters' => [
                    'model' => [
                        'name' => 'model',
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
                        'startLine' => 190,
                        'endLine' => 190,
                        'startColumn' => 35,
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
 * Determine if the given model is prunable.
 *
 * @param  string  $model
 * @return bool
 */',
                'startLine' => 190,
                'endLine' => 196,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
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
