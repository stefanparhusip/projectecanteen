<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/Migrations/StatusCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Console\Migrations\StatusCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-cd83f32df2b1ab4d341ff68713ebbdc4726e8f6902d8c34e82564c0853e810c1-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/Migrations/StatusCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Console\\Migrations',
        'name' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
        'shortName' => 'StatusCommand',
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
                        'code' => '\'migrate:status\'',
                        'attributes' => [
                            'startLine' => 11,
                            'endLine' => 11,
                            'startTokenPos' => 38,
                            'startFilePos' => 292,
                            'endTokenPos' => 38,
                            'endFilePos' => 307,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 11,
        'endLine' => 142,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Console\\Migrations\\BaseCommand',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'name' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'migrate:status\'',
                    'attributes' => [
                        'startLine' => 19,
                        'endLine' => 19,
                        'startTokenPos' => 60,
                        'startFilePos' => 450,
                        'endTokenPos' => 60,
                        'endFilePos' => 465,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Show the status of each migration\'',
                    'attributes' => [
                        'startLine' => 26,
                        'endLine' => 26,
                        'startTokenPos' => 71,
                        'startFilePos' => 580,
                        'endTokenPos' => 71,
                        'endFilePos' => 614,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 65,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'migrator' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
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
                'startLine' => 33,
                'endLine' => 33,
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
                        'startLine' => 40,
                        'endLine' => 40,
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
 * Create a new migration rollback command instance.
 *
 * @param  \\Illuminate\\Database\\Migrations\\Migrator  $migrator
 */',
                'startLine' => 40,
                'endLine' => 45,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
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
 * @return int|null
 */',
                'startLine' => 52,
                'endLine' => 91,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'aliasName' => null,
            ],
            'getStatusFor' => [
                'name' => 'getStatusFor',
                'parameters' => [
                    'ran' => [
                        'name' => 'ran',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'array',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 100,
                        'endLine' => 100,
                        'startColumn' => 37,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'batches' => [
                        'name' => 'batches',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'array',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 100,
                        'endLine' => 100,
                        'startColumn' => 49,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the status for the given run migrations.
 *
 * @param  array  $ran
 * @param  array  $batches
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 100,
                'endLine' => 116,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'aliasName' => null,
            ],
            'getAllMigrationFiles' => [
                'name' => 'getAllMigrationFiles',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an array of all of the migration files.
 *
 * @return array
 */',
                'startLine' => 123,
                'endLine' => 126,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
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
                'endLine' => 141,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\StatusCommand',
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
