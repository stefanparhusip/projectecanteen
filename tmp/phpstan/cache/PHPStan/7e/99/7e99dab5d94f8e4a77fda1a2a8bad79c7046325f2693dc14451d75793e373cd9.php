<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/ConfigClearCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Console\ConfigClearCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-999f384fbd138aaf9b4f541c0d35ba5a612a18277fd8a7b94385ff400c0ecdf4-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Console\\ConfigClearCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/ConfigClearCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Console',
        'name' => 'Illuminate\\Foundation\\Console\\ConfigClearCommand',
        'shortName' => 'ConfigClearCommand',
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
                        'code' => '\'config:clear\'',
                        'attributes' => [
                            'startLine' => 9,
                            'endLine' => 9,
                            'startTokenPos' => 28,
                            'startFilePos' => 189,
                            'endTokenPos' => 28,
                            'endFilePos' => 202,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 9,
        'endLine' => 56,
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
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ConfigClearCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ConfigClearCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'config:clear\'',
                    'attributes' => [
                        'startLine' => 17,
                        'endLine' => 17,
                        'startTokenPos' => 50,
                        'startFilePos' => 346,
                        'endTokenPos' => 50,
                        'endFilePos' => 359,
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
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ConfigClearCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ConfigClearCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Remove the configuration cache file\'',
                    'attributes' => [
                        'startLine' => 24,
                        'endLine' => 24,
                        'startTokenPos' => 61,
                        'startFilePos' => 474,
                        'endTokenPos' => 61,
                        'endFilePos' => 510,
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
                'endColumn' => 67,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'files' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ConfigClearCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ConfigClearCommand',
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
                        'startLine' => 38,
                        'endLine' => 38,
                        'startColumn' => 33,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new config clear command instance.
 *
 * @param  \\Illuminate\\Filesystem\\Filesystem  $files
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
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ConfigClearCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ConfigClearCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ConfigClearCommand',
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
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\ConfigClearCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\ConfigClearCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\ConfigClearCommand',
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
