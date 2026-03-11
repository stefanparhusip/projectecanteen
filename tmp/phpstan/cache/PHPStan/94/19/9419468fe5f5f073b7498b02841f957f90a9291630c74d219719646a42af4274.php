<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/DbCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Console\DbCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-0d18991e4a2bdc1de4d644ff3d6397429bc750222398b494cff3e5291f482c29-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Console\\DbCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/DbCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Console',
        'name' => 'Illuminate\\Database\\Console\\DbCommand',
        'shortName' => 'DbCommand',
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
                        'code' => '\'db\'',
                        'attributes' => [
                            'startLine' => 12,
                            'endLine' => 12,
                            'startTokenPos' => 43,
                            'startFilePos' => 329,
                            'endTokenPos' => 43,
                            'endFilePos' => 332,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 12,
        'endLine' => 257,
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
                'declaringClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'db {connection? : The database connection that should be used}
               {--read : Connect to the read connection}
               {--write : Connect to the write connection}\'',
                    'attributes' => [
                        'startLine' => 20,
                        'endLine' => 22,
                        'startTokenPos' => 65,
                        'startFilePos' => 493,
                        'endTokenPos' => 65,
                        'endFilePos' => 672,
                    ],
                ],
                'docComment' => '/**
 * The name and signature of the console command.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 20,
                'endLine' => 22,
                'startColumn' => 5,
                'endColumn' => 60,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Start a new database CLI session\'',
                    'attributes' => [
                        'startLine' => 29,
                        'endLine' => 29,
                        'startTokenPos' => 76,
                        'startFilePos' => 787,
                        'endTokenPos' => 76,
                        'endFilePos' => 820,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 64,
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
 * @return int
 */',
                'startLine' => 36,
                'endLine' => 65,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'aliasName' => null,
            ],
            'getConnection' => [
                'name' => 'getConnection',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the database connection configuration.
 *
 * @return array
 *
 * @throws \\UnexpectedValueException
 */',
                'startLine' => 74,
                'endLine' => 103,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'aliasName' => null,
            ],
            'commandArguments' => [
                'name' => 'commandArguments',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
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
                        'startLine' => 111,
                        'endLine' => 111,
                        'startColumn' => 38,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the arguments for the database client command.
 *
 * @param  array  $connection
 * @return array
 */',
                'startLine' => 111,
                'endLine' => 116,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'aliasName' => null,
            ],
            'commandEnvironment' => [
                'name' => 'commandEnvironment',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
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
                        'startLine' => 124,
                        'endLine' => 124,
                        'startColumn' => 40,
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
 * Get the environment variables for the database client command.
 *
 * @param  array  $connection
 * @return array|null
 */',
                'startLine' => 124,
                'endLine' => 133,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'aliasName' => null,
            ],
            'getCommand' => [
                'name' => 'getCommand',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
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
                        'startLine' => 141,
                        'endLine' => 141,
                        'startColumn' => 32,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the database client command to run.
 *
 * @param  array  $connection
 * @return string
 */',
                'startLine' => 141,
                'endLine' => 150,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'aliasName' => null,
            ],
            'getMysqlArguments' => [
                'name' => 'getMysqlArguments',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
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
                        'startLine' => 158,
                        'endLine' => 158,
                        'startColumn' => 42,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the arguments for the MySQL CLI.
 *
 * @param  array  $connection
 * @return array
 */',
                'startLine' => 158,
                'endLine' => 175,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'aliasName' => null,
            ],
            'getMariaDbArguments' => [
                'name' => 'getMariaDbArguments',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
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
                        'startLine' => 183,
                        'endLine' => 183,
                        'startColumn' => 44,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the arguments for the MariaDB CLI.
 *
 * @param  array  $connection
 * @return array
 */',
                'startLine' => 183,
                'endLine' => 186,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'aliasName' => null,
            ],
            'getPgsqlArguments' => [
                'name' => 'getPgsqlArguments',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
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
                        'startLine' => 194,
                        'endLine' => 194,
                        'startColumn' => 42,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the arguments for the Postgres CLI.
 *
 * @param  array  $connection
 * @return array
 */',
                'startLine' => 194,
                'endLine' => 197,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'aliasName' => null,
            ],
            'getSqliteArguments' => [
                'name' => 'getSqliteArguments',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
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
                        'startLine' => 205,
                        'endLine' => 205,
                        'startColumn' => 43,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the arguments for the SQLite CLI.
 *
 * @param  array  $connection
 * @return array
 */',
                'startLine' => 205,
                'endLine' => 208,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'aliasName' => null,
            ],
            'getSqlsrvArguments' => [
                'name' => 'getSqlsrvArguments',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
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
                        'startLine' => 216,
                        'endLine' => 216,
                        'startColumn' => 43,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the arguments for the SQL Server CLI.
 *
 * @param  array  $connection
 * @return array
 */',
                'startLine' => 216,
                'endLine' => 226,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'aliasName' => null,
            ],
            'getPgsqlEnvironment' => [
                'name' => 'getPgsqlEnvironment',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
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
                        'startLine' => 234,
                        'endLine' => 234,
                        'startColumn' => 44,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the environment variables for the Postgres CLI.
 *
 * @param  array  $connection
 * @return array|null
 */',
                'startLine' => 234,
                'endLine' => 242,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'aliasName' => null,
            ],
            'getOptionalArguments' => [
                'name' => 'getOptionalArguments',
                'parameters' => [
                    'args' => [
                        'name' => 'args',
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
                        'startLine' => 251,
                        'endLine' => 251,
                        'startColumn' => 45,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'connection' => [
                        'name' => 'connection',
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
                        'startLine' => 251,
                        'endLine' => 251,
                        'startColumn' => 58,
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
 * Get the optional arguments based on the connection configuration.
 *
 * @param  array  $args
 * @param  array  $connection
 * @return array
 */',
                'startLine' => 251,
                'endLine' => 256,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DbCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DbCommand',
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
