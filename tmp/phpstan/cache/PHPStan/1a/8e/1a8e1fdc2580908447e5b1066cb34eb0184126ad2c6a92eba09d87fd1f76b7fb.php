<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/RuleMakeCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Console\RuleMakeCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-0375baf303499a179607ddd16fe4a9187de2af937da0cf893ef83fd711d4b6b4-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/RuleMakeCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Console',
        'name' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
        'shortName' => 'RuleMakeCommand',
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
                        'code' => '\'make:rule\'',
                        'attributes' => [
                            'startLine' => 9,
                            'endLine' => 9,
                            'startTokenPos' => 28,
                            'startFilePos' => 209,
                            'endTokenPos' => 28,
                            'endFilePos' => 219,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 9,
        'endLine' => 89,
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
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'make:rule\'',
                    'attributes' => [
                        'startLine' => 17,
                        'endLine' => 17,
                        'startTokenPos' => 50,
                        'startFilePos' => 369,
                        'endTokenPos' => 50,
                        'endFilePos' => 379,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 17,
                'endLine' => 17,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Create a new validation rule\'',
                    'attributes' => [
                        'startLine' => 24,
                        'endLine' => 24,
                        'startTokenPos' => 61,
                        'startFilePos' => 494,
                        'endTokenPos' => 61,
                        'endFilePos' => 523,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 60,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'type' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'name' => 'type',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Rule\'',
                    'attributes' => [
                        'startLine' => 31,
                        'endLine' => 31,
                        'startTokenPos' => 72,
                        'startFilePos' => 633,
                        'endTokenPos' => 72,
                        'endFilePos' => 638,
                    ],
                ],
                'docComment' => '/**
 * The type of class being generated.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 31,
                'endLine' => 31,
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
                        'startLine' => 41,
                        'endLine' => 41,
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
 *
 * @throws \\Illuminate\\Contracts\\Filesystem\\FileNotFoundException
 */',
                'startLine' => 41,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
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
                'startLine' => 55,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
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
                        'startLine' => 72,
                        'endLine' => 72,
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
                'startLine' => 72,
                'endLine' => 75,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
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
                'startLine' => 82,
                'endLine' => 88,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\RuleMakeCommand',
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
