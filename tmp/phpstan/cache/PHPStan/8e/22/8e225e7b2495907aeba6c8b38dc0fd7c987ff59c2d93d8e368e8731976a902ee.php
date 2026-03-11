<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/Console/ForgetCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Cache\Console\ForgetCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-ded1d24ec02f70f40e4a550c8f735ab959c318c9ebb632213ffa40afeef41c74-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Cache\\Console\\ForgetCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/Console/ForgetCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Cache\\Console',
        'name' => 'Illuminate\\Cache\\Console\\ForgetCommand',
        'shortName' => 'ForgetCommand',
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
                        'code' => '\'cache:forget\'',
                        'attributes' => [
                            'startLine' => 9,
                            'endLine' => 9,
                            'startTokenPos' => 28,
                            'startFilePos' => 181,
                            'endTokenPos' => 28,
                            'endFilePos' => 194,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 9,
        'endLine' => 58,
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
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ForgetCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ForgetCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'cache:forget {key : The key to remove} {store? : The store to remove the key from}\'',
                    'attributes' => [
                        'startLine' => 17,
                        'endLine' => 17,
                        'startTokenPos' => 50,
                        'startFilePos' => 338,
                        'endTokenPos' => 50,
                        'endFilePos' => 421,
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
                'endColumn' => 112,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ForgetCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ForgetCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Remove an item from the cache\'',
                    'attributes' => [
                        'startLine' => 24,
                        'endLine' => 24,
                        'startTokenPos' => 61,
                        'startFilePos' => 536,
                        'endTokenPos' => 61,
                        'endFilePos' => 566,
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
                'endColumn' => 61,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'cache' => [
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ForgetCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ForgetCommand',
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
                'startLine' => 31,
                'endLine' => 31,
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
                        'startLine' => 38,
                        'endLine' => 38,
                        'startColumn' => 33,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
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
 */',
                'startLine' => 38,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\Console',
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ForgetCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ForgetCommand',
                'currentClassName' => 'Illuminate\\Cache\\Console\\ForgetCommand',
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
                'startLine' => 50,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\Console',
                'declaringClassName' => 'Illuminate\\Cache\\Console\\ForgetCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\ForgetCommand',
                'currentClassName' => 'Illuminate\\Cache\\Console\\ForgetCommand',
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
