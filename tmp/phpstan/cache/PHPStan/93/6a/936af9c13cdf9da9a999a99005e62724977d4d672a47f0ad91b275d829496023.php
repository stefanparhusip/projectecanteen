<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/ObserverMakeCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Console\ObserverMakeCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-d79e40fc796769e949f4533747cfae5b8e47b58d954bfabcafacc5f5d508d8c8-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/ObserverMakeCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Console',
        'name' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
        'shortName' => 'ObserverMakeCommand',
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
                        'code' => '\'make:observer\'',
                        'attributes' => [
                            'startLine' => 14,
                            'endLine' => 14,
                            'startTokenPos' => 50,
                            'startFilePos' => 384,
                            'endTokenPos' => 50,
                            'endFilePos' => 398,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 14,
        'endLine' => 169,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\GeneratorCommand',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'name' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'make:observer\'',
                    'attributes' => [
                        'startLine' => 22,
                        'endLine' => 22,
                        'startTokenPos' => 72,
                        'startFilePos' => 552,
                        'endTokenPos' => 72,
                        'endFilePos' => 566,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 22,
                'endLine' => 22,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Create a new observer class\'',
                    'attributes' => [
                        'startLine' => 29,
                        'endLine' => 29,
                        'startTokenPos' => 83,
                        'startFilePos' => 681,
                        'endTokenPos' => 83,
                        'endFilePos' => 709,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 59,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'type' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'name' => 'type',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Observer\'',
                    'attributes' => [
                        'startLine' => 36,
                        'endLine' => 36,
                        'startTokenPos' => 94,
                        'startFilePos' => 819,
                        'endTokenPos' => 94,
                        'endFilePos' => 828,
                    ],
                ],
                'docComment' => '/**
 * The type of class being generated.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 36,
                'endLine' => 36,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'buildClass' => [
                'name' => 'buildClass',
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
                        'startLine' => 44,
                        'endLine' => 44,
                        'startColumn' => 35,
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
 * Build the class with the given name.
 *
 * @param  string  $name
 * @return string
 */',
                'startLine' => 44,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'aliasName' => null,
            ],
            'replaceModel' => [
                'name' => 'replaceModel',
                'parameters' => [
                    'stub' => [
                        'name' => 'stub',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 60,
                        'endLine' => 60,
                        'startColumn' => 37,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'model' => [
                        'name' => 'model',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 60,
                        'endLine' => 60,
                        'startColumn' => 44,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Replace the model for the given stub.
 *
 * @param  string  $stub
 * @param  string  $model
 * @return string
 */',
                'startLine' => 60,
                'endLine' => 79,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'aliasName' => null,
            ],
            'parseModel' => [
                'name' => 'parseModel',
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
                        'startLine' => 89,
                        'endLine' => 89,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the fully-qualified model class name.
 *
 * @param  string  $model
 * @return string
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 89,
                'endLine' => 96,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'aliasName' => null,
            ],
            'getStub' => [
                'name' => 'getStub',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the stub file for the generator.
 *
 * @return string
 */',
                'startLine' => 103,
                'endLine' => 108,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'aliasName' => null,
            ],
            'resolveStubPath' => [
                'name' => 'resolveStubPath',
                'parameters' => [
                    'stub' => [
                        'name' => 'stub',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 116,
                        'endLine' => 116,
                        'startColumn' => 40,
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
 * Resolve the fully-qualified path to the stub.
 *
 * @param  string  $stub
 * @return string
 */',
                'startLine' => 116,
                'endLine' => 121,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'aliasName' => null,
            ],
            'getDefaultNamespace' => [
                'name' => 'getDefaultNamespace',
                'parameters' => [
                    'rootNamespace' => [
                        'name' => 'rootNamespace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 129,
                        'endLine' => 129,
                        'startColumn' => 44,
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
 * Get the default namespace for the class.
 *
 * @param  string  $rootNamespace
 * @return string
 */',
                'startLine' => 129,
                'endLine' => 132,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'aliasName' => null,
            ],
            'getOptions' => [
                'name' => 'getOptions',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the console command arguments.
 *
 * @return array
 */',
                'startLine' => 139,
                'endLine' => 145,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'aliasName' => null,
            ],
            'afterPromptingForMissingArguments' => [
                'name' => 'afterPromptingForMissingArguments',
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
                        'startLine' => 154,
                        'endLine' => 154,
                        'startColumn' => 58,
                        'endColumn' => 78,
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
                        'startLine' => 154,
                        'endLine' => 154,
                        'startColumn' => 81,
                        'endColumn' => 103,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Interact further with the user if they were prompted for missing arguments.
 *
 * @param  \\Symfony\\Component\\Console\\Input\\InputInterface  $input
 * @param  \\Symfony\\Component\\Console\\Output\\OutputInterface  $output
 * @return void
 */',
                'startLine' => 154,
                'endLine' => 168,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ObserverMakeCommand',
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
