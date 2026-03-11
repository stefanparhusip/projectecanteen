<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/Migrations/MigrateCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Console\Migrations\MigrateCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-cb3e368123b293aefe4fe884641c30221ce1081ad7719836f083c70012986720-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/Migrations/MigrateCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Console\\Migrations',
        'name' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
        'shortName' => 'MigrateCommand',
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
                        'code' => '\'migrate\'',
                        'attributes' => [
                            'startLine' => 20,
                            'endLine' => 20,
                            'startTokenPos' => 80,
                            'startFilePos' => 576,
                            'endTokenPos' => 80,
                            'endFilePos' => 584,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 20,
        'endLine' => 341,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Console\\Migrations\\BaseCommand',
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Console\\Isolatable',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Console\\ConfirmableTrait',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'signature' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'migrate {--database= : The database connection to use}
                {--force : Force the operation to run when in production}
                {--path=* : The path(s) to the migrations files to be executed}
                {--realpath : Indicate any provided migration file paths are pre-resolved absolute paths}
                {--schema-path= : The path to a schema dump file}
                {--pretend : Dump the SQL queries that would be run}
                {--seed : Indicates if the seed task should be re-run}
                {--seeder= : The class name of the root seeder}
                {--step : Force the migrations to be run so they can be rolled back individually}
                {--graceful : Return a successful exit code even if an error occurs}\'',
                    'attributes' => [
                        'startLine' => 30,
                        'endLine' => 39,
                        'startTokenPos' => 111,
                        'startFilePos' => 803,
                        'endTokenPos' => 111,
                        'endFilePos' => 1571,
                    ],
                ],
                'docComment' => '/**
 * The name and signature of the console command.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 86,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Run the database migrations\'',
                    'attributes' => [
                        'startLine' => 46,
                        'endLine' => 46,
                        'startTokenPos' => 122,
                        'startFilePos' => 1686,
                        'endTokenPos' => 122,
                        'endFilePos' => 1714,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 46,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 59,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'migrator' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
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
                'startLine' => 53,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'dispatcher' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'name' => 'dispatcher',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The event dispatcher instance.
 *
 * @var \\Illuminate\\Contracts\\Events\\Dispatcher
 */',
                'attributes' => [
                ],
                'startLine' => 60,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 26,
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
                        'startLine' => 68,
                        'endLine' => 68,
                        'startColumn' => 33,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'dispatcher' => [
                        'name' => 'dispatcher',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 68,
                        'endLine' => 68,
                        'startColumn' => 53,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new migration command instance.
 *
 * @param  \\Illuminate\\Database\\Migrations\\Migrator  $migrator
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $dispatcher
 */',
                'startLine' => 68,
                'endLine' => 74,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
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
                'startLine' => 81,
                'endLine' => 100,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'aliasName' => null,
            ],
            'runMigrations' => [
                'name' => 'runMigrations',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run the pending migrations.
 *
 * @return void
 */',
                'startLine' => 107,
                'endLine' => 131,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'aliasName' => null,
            ],
            'prepareDatabase' => [
                'name' => 'prepareDatabase',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepare the migration database for running.
 *
 * @return void
 */',
                'startLine' => 138,
                'endLine' => 155,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'aliasName' => null,
            ],
            'repositoryExists' => [
                'name' => 'repositoryExists',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the migrator repository exists.
 *
 * @return bool
 */',
                'startLine' => 162,
                'endLine' => 171,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'aliasName' => null,
            ],
            'handleMissingDatabase' => [
                'name' => 'handleMissingDatabase',
                'parameters' => [
                    'e' => [
                        'name' => 'e',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Throwable',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 179,
                        'endLine' => 179,
                        'startColumn' => 46,
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
 * Attempt to create the database if it is missing.
 *
 * @param  \\Throwable  $e
 * @return bool
 */',
                'startLine' => 179,
                'endLine' => 199,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'aliasName' => null,
            ],
            'createMissingSqliteDatabase' => [
                'name' => 'createMissingSqliteDatabase',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 209,
                        'endLine' => 209,
                        'startColumn' => 52,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a missing SQLite database.
 *
 * @param  string  $path
 * @return bool
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 209,
                'endLine' => 228,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'aliasName' => null,
            ],
            'createMissingMySqlOrPgsqlDatabase' => [
                'name' => 'createMissingMySqlOrPgsqlDatabase',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 238,
                        'endLine' => 238,
                        'startColumn' => 58,
                        'endColumn' => 68,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a missing MySQL or Postgres database.
 *
 * @param  \\Illuminate\\Database\\Connection  $connection
 * @return bool
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 238,
                'endLine' => 281,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'aliasName' => null,
            ],
            'loadSchemaState' => [
                'name' => 'loadSchemaState',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Load the schema state to seed the initial database schema structure.
 *
 * @return void
 */',
                'startLine' => 288,
                'endLine' => 321,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'aliasName' => null,
            ],
            'schemaPath' => [
                'name' => 'schemaPath',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 329,
                        'endLine' => 329,
                        'startColumn' => 35,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the path to the stored schema for the given connection.
 *
 * @param  \\Illuminate\\Database\\Connection  $connection
 * @return string
 */',
                'startLine' => 329,
                'endLine' => 340,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\MigrateCommand',
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
