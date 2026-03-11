<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/ClosureCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Console\ClosureCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-fc397dfd892c580544611ff51f45d9dc4abbaf672ac6e149efcd70a77b666e0a-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/ClosureCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Console',
        'name' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
        'shortName' => 'ClosureCommand',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @mixin \\Illuminate\\Console\\Scheduling\\Event
 */',
        'attributes' => [
        ],
        'startLine' => 17,
        'endLine' => 127,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\ForwardsCalls',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'callback' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'name' => 'callback',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The command callback.
 *
 * @var \\Closure
 */',
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'\'',
                    'attributes' => [
                        'startLine' => 33,
                        'endLine' => 33,
                        'startTokenPos' => 79,
                        'startFilePos' => 687,
                        'endTokenPos' => 79,
                        'endFilePos' => 688,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 32,
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
                    'signature' => [
                        'name' => 'signature',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 33,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
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
                        'startColumn' => 45,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new command instance.
 *
 * @param  string  $signature
 * @param  \\Closure  $callback
 */',
                'startLine' => 41,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
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
                        'startLine' => 56,
                        'endLine' => 56,
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
                        'startLine' => 56,
                        'endLine' => 56,
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
                ],
                'docComment' => '/**
 * Execute the console command.
 *
 * @param  \\Symfony\\Component\\Console\\Input\\InputInterface  $input
 * @param  \\Symfony\\Component\\Console\\Output\\OutputInterface  $output
 * @return int
 */',
                'startLine' => 56,
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'aliasName' => null,
            ],
            'purpose' => [
                'name' => 'purpose',
                'parameters' => [
                    'description' => [
                        'name' => 'description',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 85,
                        'endLine' => 85,
                        'startColumn' => 29,
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
 * Set the description for the command.
 *
 * @param  string  $description
 * @return $this
 */',
                'startLine' => 85,
                'endLine' => 88,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'aliasName' => null,
            ],
            'describe' => [
                'name' => 'describe',
                'parameters' => [
                    'description' => [
                        'name' => 'description',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 96,
                        'endLine' => 96,
                        'startColumn' => 30,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the description for the command.
 *
 * @param  string  $description
 * @return $this
 */',
                'startLine' => 96,
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'aliasName' => null,
            ],
            'schedule' => [
                'name' => 'schedule',
                'parameters' => [
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 109,
                                'endLine' => 109,
                                'startTokenPos' => 382,
                                'startFilePos' => 2662,
                                'endTokenPos' => 383,
                                'endFilePos' => 2663,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 109,
                        'endLine' => 109,
                        'startColumn' => 30,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new scheduled event for the command.
 *
 * @param  array  $parameters
 * @return \\Illuminate\\Console\\Scheduling\\Event
 */',
                'startLine' => 109,
                'endLine' => 112,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'aliasName' => null,
            ],
            '__call' => [
                'name' => '__call',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 123,
                        'endLine' => 123,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 123,
                        'endLine' => 123,
                        'startColumn' => 37,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dynamically proxy calls to a new scheduled event.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\BadMethodCallException
 */',
                'startLine' => 123,
                'endLine' => 126,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ClosureCommand',
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
