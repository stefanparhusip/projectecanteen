<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/Seeds/SeedCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Console\Seeds\SeedCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-27c9de49a7106a04995c143e4dae31bf0769812a9bf34d3ef15c86805c2193a3-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/Seeds/SeedCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Console\\Seeds',
        'name' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
        'shortName' => 'SeedCommand',
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
                        'code' => '\'db:seed\'',
                        'attributes' => [
                            'startLine' => 14,
                            'endLine' => 14,
                            'startTokenPos' => 57,
                            'startFilePos' => 438,
                            'endTokenPos' => 57,
                            'endFilePos' => 446,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 14,
        'endLine' => 141,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Console\\ConfirmableTrait',
            1 => 'Illuminate\\Console\\Prohibitable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'name' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'db:seed\'',
                    'attributes' => [
                        'startLine' => 24,
                        'endLine' => 24,
                        'startTokenPos' => 87,
                        'startFilePos' => 624,
                        'endTokenPos' => 87,
                        'endFilePos' => 632,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Seed the database with records\'',
                    'attributes' => [
                        'startLine' => 31,
                        'endLine' => 31,
                        'startTokenPos' => 98,
                        'startFilePos' => 747,
                        'endTokenPos' => 98,
                        'endFilePos' => 778,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 31,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 62,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'resolver' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'name' => 'resolver',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The connection resolver instance.
 *
 * @var \\Illuminate\\Database\\ConnectionResolverInterface
 */',
                'attributes' => [
                ],
                'startLine' => 38,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 24,
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
                    'resolver' => [
                        'name' => 'resolver',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\ConnectionResolverInterface',
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
                        'startColumn' => 33,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new database seed command instance.
 *
 * @param  \\Illuminate\\Database\\ConnectionResolverInterface  $resolver
 */',
                'startLine' => 45,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console\\Seeds',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
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
                'startLine' => 57,
                'endLine' => 79,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console\\Seeds',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'aliasName' => null,
            ],
            'getSeeder' => [
                'name' => 'getSeeder',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a seeder instance from the container.
 *
 * @return \\Illuminate\\Database\\Seeder
 */',
                'startLine' => 86,
                'endLine' => 102,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Seeds',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'aliasName' => null,
            ],
            'getDatabase' => [
                'name' => 'getDatabase',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the database connection to use.
 *
 * @return string
 */',
                'startLine' => 109,
                'endLine' => 114,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Seeds',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
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
                'startLine' => 121,
                'endLine' => 126,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Seeds',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
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
                'startLine' => 133,
                'endLine' => 140,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Seeds',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Seeds\\SeedCommand',
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
