<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/MailMakeCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Console\MailMakeCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-578a03b09372d531c1e29779ad6f0c66a9cdff2328f08cae97d13544f6b5b01f-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/MailMakeCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Console',
        'name' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
        'shortName' => 'MailMakeCommand',
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
                        'code' => '\'make:mail\'',
                        'attributes' => [
                            'startLine' => 17,
                            'endLine' => 17,
                            'startTokenPos' => 65,
                            'startFilePos' => 506,
                            'endTokenPos' => 65,
                            'endFilePos' => 516,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 17,
        'endLine' => 245,
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
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'make:mail\'',
                    'attributes' => [
                        'startLine' => 27,
                        'endLine' => 27,
                        'startTokenPos' => 92,
                        'startFilePos' => 696,
                        'endTokenPos' => 92,
                        'endFilePos' => 706,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 27,
                'endLine' => 27,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Create a new email class\'',
                    'attributes' => [
                        'startLine' => 34,
                        'endLine' => 34,
                        'startTokenPos' => 103,
                        'startFilePos' => 821,
                        'endTokenPos' => 103,
                        'endFilePos' => 846,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 34,
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 56,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'type' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'name' => 'type',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Mailable\'',
                    'attributes' => [
                        'startLine' => 41,
                        'endLine' => 41,
                        'startTokenPos' => 114,
                        'startFilePos' => 956,
                        'endTokenPos' => 114,
                        'endFilePos' => 965,
                    ],
                ],
                'docComment' => '/**
 * The type of class being generated.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 41,
                'endLine' => 41,
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
                'startLine' => 48,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'aliasName' => null,
            ],
            'writeMarkdownTemplate' => [
                'name' => 'writeMarkdownTemplate',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Write the Markdown template for the mailable.
 *
 * @return void
 */',
                'startLine' => 68,
                'endLine' => 89,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'aliasName' => null,
            ],
            'writeView' => [
                'name' => 'writeView',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Write the Blade template for the mailable.
 *
 * @return void
 */',
                'startLine' => 96,
                'endLine' => 123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'aliasName' => null,
            ],
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
                        'startLine' => 131,
                        'endLine' => 131,
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
                'startLine' => 131,
                'endLine' => 144,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'aliasName' => null,
            ],
            'getView' => [
                'name' => 'getView',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the view name.
 *
 * @return string
 */',
                'startLine' => 151,
                'endLine' => 164,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
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
                'startLine' => 171,
                'endLine' => 182,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
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
                        'startLine' => 190,
                        'endLine' => 190,
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
                'startLine' => 190,
                'endLine' => 195,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
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
                        'startLine' => 203,
                        'endLine' => 203,
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
                'startLine' => 203,
                'endLine' => 206,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
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
                'startLine' => 213,
                'endLine' => 220,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
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
                        'startLine' => 229,
                        'endLine' => 229,
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
                        'startLine' => 229,
                        'endLine' => 229,
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
                'startLine' => 229,
                'endLine' => 244,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\MailMakeCommand',
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
