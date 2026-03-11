<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/ListenerMakeCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Console\ListenerMakeCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-2d1430c9403e61e056bdc971ed4d1c3872e8098c1187b28d50c4cedb3d9fe8ae-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/ListenerMakeCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Console',
        'name' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
        'shortName' => 'ListenerMakeCommand',
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
                        'code' => '\'make:listener\'',
                        'attributes' => [
                            'startLine' => 15,
                            'endLine' => 15,
                            'startTokenPos' => 55,
                            'startFilePos' => 435,
                            'endTokenPos' => 55,
                            'endFilePos' => 449,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 15,
        'endLine' => 157,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\GeneratorCommand',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Console\\Concerns\\CreatesMatchingTest',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'name' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'make:listener\'',
                    'attributes' => [
                        'startLine' => 25,
                        'endLine' => 25,
                        'startTokenPos' => 82,
                        'startFilePos' => 633,
                        'endTokenPos' => 82,
                        'endFilePos' => 647,
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
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Create a new event listener class\'',
                    'attributes' => [
                        'startLine' => 32,
                        'endLine' => 32,
                        'startTokenPos' => 93,
                        'startFilePos' => 762,
                        'endTokenPos' => 93,
                        'endFilePos' => 796,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 65,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'type' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'name' => 'type',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Listener\'',
                    'attributes' => [
                        'startLine' => 39,
                        'endLine' => 39,
                        'startTokenPos' => 104,
                        'startFilePos' => 906,
                        'endTokenPos' => 104,
                        'endFilePos' => 915,
                    ],
                ],
                'docComment' => '/**
 * The type of class being generated.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 39,
                'endLine' => 39,
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
                        'startLine' => 47,
                        'endLine' => 47,
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
                'startLine' => 47,
                'endLine' => 66,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
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
                        'startLine' => 74,
                        'endLine' => 74,
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
                'startLine' => 74,
                'endLine' => 79,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
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
                'startLine' => 86,
                'endLine' => 97,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'aliasName' => null,
            ],
            'alreadyExists' => [
                'name' => 'alreadyExists',
                'parameters' => [
                    'rawName' => [
                        'name' => 'rawName',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 105,
                        'endLine' => 105,
                        'startColumn' => 38,
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
 * Determine if the class already exists.
 *
 * @param  string  $rawName
 * @return bool
 */',
                'startLine' => 105,
                'endLine' => 108,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
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
                        'startLine' => 116,
                        'endLine' => 116,
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
                'startLine' => 116,
                'endLine' => 119,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
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
 * Get the console command options.
 *
 * @return array
 */',
                'startLine' => 126,
                'endLine' => 133,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
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
                        'startLine' => 142,
                        'endLine' => 142,
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
                        'startLine' => 142,
                        'endLine' => 142,
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
                'startLine' => 142,
                'endLine' => 156,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ListenerMakeCommand',
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
