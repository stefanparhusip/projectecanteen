<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/Migrations/FreshCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Console\Migrations\FreshCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-8b52ae6b267b3f3503b759ed5e69c639632f221ca5afa21cb9e6766162a87557-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/Migrations/FreshCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Console\\Migrations',
        'name' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
        'shortName' => 'FreshCommand',
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
                        'code' => '\'migrate:fresh\'',
                        'attributes' => [
                            'startLine' => 14,
                            'endLine' => 14,
                            'startTokenPos' => 53,
                            'startFilePos' => 426,
                            'endTokenPos' => 53,
                            'endFilePos' => 440,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 14,
        'endLine' => 148,
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
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'migrate:fresh\'',
                    'attributes' => [
                        'startLine' => 24,
                        'endLine' => 24,
                        'startTokenPos' => 83,
                        'startFilePos' => 619,
                        'endTokenPos' => 83,
                        'endFilePos' => 633,
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
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Drop all tables and re-run all migrations\'',
                    'attributes' => [
                        'startLine' => 31,
                        'endLine' => 31,
                        'startTokenPos' => 94,
                        'startFilePos' => 748,
                        'endTokenPos' => 94,
                        'endFilePos' => 790,
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
                'endColumn' => 73,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'migrator' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'name' => 'migrator',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The migrator instance.
 *
 * @var \\Illuminate\\Database\\Migrations\\Migrator
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
                    'migrator' => [
                        'name' => 'migrator',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Migrations\\Migrator',
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
 * Create a new fresh command instance.
 *
 * @param  \\Illuminate\\Database\\Migrations\\Migrator  $migrator
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
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
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
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'aliasName' => null,
            ],
            'needsSeeding' => [
                'name' => 'needsSeeding',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the developer has requested database seeding.
 *
 * @return bool
 */',
                'startLine' => 108,
                'endLine' => 111,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'aliasName' => null,
            ],
            'runSeeder' => [
                'name' => 'runSeeder',
                'parameters' => [
                    'database' => [
                        'name' => 'database',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 119,
                        'endLine' => 119,
                        'startColumn' => 34,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run the database seeder command.
 *
 * @param  string  $database
 * @return void
 */',
                'startLine' => 119,
                'endLine' => 126,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
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
                'endLine' => 147,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\FreshCommand',
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
