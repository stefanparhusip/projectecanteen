<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/Console/PruneStaleTagsCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Cache\Console\PruneStaleTagsCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-08bf70b258a88f06648177cff87d420fc7aa8f3741236653de5a4444a7938bb4-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Cache\\Console\\PruneStaleTagsCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/Console/PruneStaleTagsCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Cache\\Console',
        'name' => 'Illuminate\\Cache\\Console\\PruneStaleTagsCommand',
        'shortName' => 'PruneStaleTagsCommand',
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
                        'code' => '\'cache:prune-stale-tags\'',
                        'attributes' => [
                            'startLine' => 10,
                            'endLine' => 10,
                            'startTokenPos' => 33,
                            'startFilePos' => 232,
                            'endTokenPos' => 33,
                            'endFilePos' => 255,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 10,
        'endLine' => 55,
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
                'declaringClassName' => 'Illuminate\\Cache\\Console\\PruneStaleTagsCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\PruneStaleTagsCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'cache:prune-stale-tags\'',
                    'attributes' => [
                        'startLine' => 18,
                        'endLine' => 18,
                        'startTokenPos' => 55,
                        'startFilePos' => 402,
                        'endTokenPos' => 55,
                        'endFilePos' => 425,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 18,
                'endLine' => 18,
                'startColumn' => 5,
                'endColumn' => 47,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Cache\\Console\\PruneStaleTagsCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\PruneStaleTagsCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Prune stale cache tags from the cache (Redis only)\'',
                    'attributes' => [
                        'startLine' => 25,
                        'endLine' => 25,
                        'startTokenPos' => 66,
                        'startFilePos' => 540,
                        'endTokenPos' => 66,
                        'endFilePos' => 591,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 82,
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
                        'startLine' => 33,
                        'endLine' => 33,
                        'startColumn' => 28,
                        'endColumn' => 46,
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
 * @param  \\Illuminate\\Cache\\CacheManager  $cache
 * @return int|null
 */',
                'startLine' => 33,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache\\Console',
                'declaringClassName' => 'Illuminate\\Cache\\Console\\PruneStaleTagsCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\PruneStaleTagsCommand',
                'currentClassName' => 'Illuminate\\Cache\\Console\\PruneStaleTagsCommand',
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
                'startLine' => 49,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache\\Console',
                'declaringClassName' => 'Illuminate\\Cache\\Console\\PruneStaleTagsCommand',
                'implementingClassName' => 'Illuminate\\Cache\\Console\\PruneStaleTagsCommand',
                'currentClassName' => 'Illuminate\\Cache\\Console\\PruneStaleTagsCommand',
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
