<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/Console/ClearCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Cache\Console\ClearCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-c462c1c9496017467bfdee1f62464d88bf90662173f2de8a2b073e867ad6a567-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/Console/ClearCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Cache\\Console',
        'name' => 'Illuminate\\Cache\\Console\\ClearCommand',
        'shortName' => 'ClearCommand',
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
                        'code' => '\'cache:clear\'',
                        'attributes' => [
                            'startLine' => 12,
                            'endLine' => 12,
                            'startTokenPos' => 43,
                            'startFilePos' => 319,
                            'endTokenPos' => 43,
                            'endFilePos' => 331,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 12,
        'endLine' => 150,
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
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'cache:clear\'',
                    'attributes' => [
                        'startLine' => 20,
                        'endLine' => 20,
                        'startTokenPos' => 65,
                        'startFilePos' => 469,
                        'endTokenPos' => 65,
                        'endFilePos' => 481,
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
                'endColumn' => 36,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Flush the application cache\'',
                    'attributes' => [
                        'startLine' => 27,
                        'endLine' => 27,
                        'startTokenPos' => 76,
                        'startFilePos' => 596,
                        'endTokenPos' => 76,
                        'endFilePos' => 624,
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
                'endColumn' => 59,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'cache' => [
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'name' => 'cache',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The cache manager instance.
 *
 * @var \\Illuminate\\Cache\\CacheManager
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
            'files' => [
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'name' => 'files',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The filesystem instance.
 *
 * @var \\Illuminate\\Filesystem\\Filesystem
 */',
                'attributes' => [
                ],
                'startLine' => 41,
                'endLine' => 41,
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
                                'name' => 'Illuminate\\Cache\\CacheManager',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 49,
                        'endLine' => 49,
                        'startColumn' => 33,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'files' => [
                        'name' => 'files',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Filesystem\\Filesystem',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 49,
                        'endLine' => 49,
                        'startColumn' => 54,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new cache clear command instance.
 *
 * @param  \\Illuminate\\Cache\\CacheManager  $cache
 * @param  \\Illuminate\\Filesystem\\Filesystem  $files
 */',
                'startLine' => 49,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\Console',
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'currentClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
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
 * @return int
 */',
                'startLine' => 62,
                'endLine' => 85,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\Console',
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'currentClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'aliasName' => null,
            ],
            'flushFacades' => [
                'name' => 'flushFacades',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flush the real-time facades stored in the cache directory.
 *
 * @return void
 */',
                'startLine' => 92,
                'endLine' => 103,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\Console',
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'currentClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'aliasName' => null,
            ],
            'cache' => [
                'name' => 'cache',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the cache instance for the command.
 *
 * @return \\Illuminate\\Cache\\Repository
 */',
                'startLine' => 110,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache\\Console',
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'currentClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'aliasName' => null,
            ],
            'tags' => [
                'name' => 'tags',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the tags passed to the command.
 *
 * @return array
 */',
                'startLine' => 122,
                'endLine' => 125,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache\\Console',
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'currentClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'aliasName' => null,
            ],
            'getArguments' => [
                'name' => 'getArguments',
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
                'startLine' => 132,
                'endLine' => 137,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache\\Console',
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'currentClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
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
                'startLine' => 144,
                'endLine' => 149,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache\\Console',
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
                'currentClassName' => 'Illuminate\\Cache\\Console\\ClearCommand',
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
