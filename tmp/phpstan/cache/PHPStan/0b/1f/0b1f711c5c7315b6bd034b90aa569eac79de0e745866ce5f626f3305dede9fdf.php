<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/ShowCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Console\ShowCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-5355f826c92463c783416c3c74196269f3481b7f216805f3774831fd5f4b4b6b-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Console\\ShowCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/ShowCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Console',
        'name' => 'Illuminate\\Database\\Console\\ShowCommand',
        'shortName' => 'ShowCommand',
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
                        'code' => '\'db:show\'',
                        'attributes' => [
                            'startLine' => 13,
                            'endLine' => 13,
                            'startTokenPos' => 48,
                            'startFilePos' => 349,
                            'endTokenPos' => 48,
                            'endFilePos' => 357,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 13,
        'endLine' => 241,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Console\\DatabaseInspectionCommand',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'signature' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'db:show {--database= : The database connection}
                {--json : Output the database information as JSON}
                {--counts : Show the table row count <bg=red;options=bold> Note: This can be slow on large databases </>}
                {--views : Show the database views <bg=red;options=bold> Note: This can be slow on large databases </>}
                {--types : Show the user defined types}\'',
                    'attributes' => [
                        'startLine' => 21,
                        'endLine' => 25,
                        'startTokenPos' => 70,
                        'startFilePos' => 538,
                        'endTokenPos' => 70,
                        'endFilePos' => 951,
                    ],
                ],
                'docComment' => '/**
 * The name and signature of the console command.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 21,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 57,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Display information about the given database\'',
                    'attributes' => [
                        'startLine' => 32,
                        'endLine' => 32,
                        'startTokenPos' => 81,
                        'startFilePos' => 1066,
                        'endTokenPos' => 81,
                        'endFilePos' => 1111,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 76,
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
                    'connections' => [
                        'name' => 'connections',
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
                        'startLine' => 40,
                        'endLine' => 40,
                        'startColumn' => 28,
                        'endColumn' => 67,
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
 * @param  \\Illuminate\\Database\\ConnectionResolverInterface  $connections
 * @return int
 */',
                'startLine' => 40,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'aliasName' => null,
            ],
            'tables' => [
                'name' => 'tables',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\ConnectionInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 77,
                        'endLine' => 77,
                        'startColumn' => 31,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'schema' => [
                        'name' => 'schema',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Schema\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 77,
                        'endLine' => 77,
                        'startColumn' => 64,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get information regarding the tables within the database.
 *
 * @param  \\Illuminate\\Database\\ConnectionInterface  $connection
 * @param  \\Illuminate\\Database\\Schema\\Builder  $schema
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 77,
                'endLine' => 91,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'aliasName' => null,
            ],
            'views' => [
                'name' => 'views',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\ConnectionInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 100,
                        'endLine' => 100,
                        'startColumn' => 30,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'schema' => [
                        'name' => 'schema',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Schema\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 100,
                        'endLine' => 100,
                        'startColumn' => 63,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get information regarding the views within the database.
 *
 * @param  \\Illuminate\\Database\\ConnectionInterface  $connection
 * @param  \\Illuminate\\Database\\Schema\\Builder  $schema
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 100,
                'endLine' => 108,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'aliasName' => null,
            ],
            'types' => [
                'name' => 'types',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\ConnectionInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 117,
                        'endLine' => 117,
                        'startColumn' => 30,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'schema' => [
                        'name' => 'schema',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Schema\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 117,
                        'endLine' => 117,
                        'startColumn' => 63,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get information regarding the user-defined types within the database.
 *
 * @param  \\Illuminate\\Database\\ConnectionInterface  $connection
 * @param  \\Illuminate\\Database\\Schema\\Builder  $schema
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 117,
                'endLine' => 126,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'aliasName' => null,
            ],
            'display' => [
                'name' => 'display',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 32,
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
 * Render the database information.
 *
 * @param  array  $data
 * @return void
 */',
                'startLine' => 134,
                'endLine' => 137,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'aliasName' => null,
            ],
            'displayJson' => [
                'name' => 'displayJson',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 145,
                        'endLine' => 145,
                        'startColumn' => 36,
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
 * Render the database information as JSON.
 *
 * @param  array  $data
 * @return void
 */',
                'startLine' => 145,
                'endLine' => 148,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'aliasName' => null,
            ],
            'displayForCli' => [
                'name' => 'displayForCli',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 156,
                        'endLine' => 156,
                        'startColumn' => 38,
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
 * Render the database information formatted for the CLI.
 *
 * @param  array  $data
 * @return void
 */',
                'startLine' => 156,
                'endLine' => 240,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\ShowCommand',
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
