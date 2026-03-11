<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/TableCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Console\TableCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-9a66736d07fd372e18fff031df099d53e6fd0469634be21d137ca05cde6d67ac-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Console\\TableCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/TableCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Console',
        'name' => 'Illuminate\\Database\\Console\\TableCommand',
        'shortName' => 'TableCommand',
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
                        'code' => '\'db:table\'',
                        'attributes' => [
                            'startLine' => 14,
                            'endLine' => 14,
                            'startTokenPos' => 50,
                            'startFilePos' => 342,
                            'endTokenPos' => 50,
                            'endFilePos' => 351,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 14,
        'endLine' => 283,
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
                'declaringClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'db:table
                            {table? : The name of the table}
                            {--database= : The database connection}
                            {--json : Output the table information as JSON}\'',
                    'attributes' => [
                        'startLine' => 22,
                        'endLine' => 25,
                        'startTokenPos' => 72,
                        'startFilePos' => 533,
                        'endTokenPos' => 72,
                        'endFilePos' => 747,
                    ],
                ],
                'docComment' => '/**
 * The name and signature of the console command.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 22,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 77,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Display information about the given database table\'',
                    'attributes' => [
                        'startLine' => 32,
                        'endLine' => 32,
                        'startTokenPos' => 83,
                        'startFilePos' => 862,
                        'endTokenPos' => 83,
                        'endFilePos' => 913,
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
                        'startLine' => 39,
                        'endLine' => 39,
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
 * @return int
 */',
                'startLine' => 39,
                'endLine' => 103,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'aliasName' => null,
            ],
            'columns' => [
                'name' => 'columns',
                'parameters' => [
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
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 32,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'table' => [
                        'name' => 'table',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 49,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the information regarding the table\'s columns.
 *
 * @param  \\Illuminate\\Database\\Schema\\Builder  $schema
 * @param  string  $table
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 112,
                'endLine' => 120,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'aliasName' => null,
            ],
            'getAttributesForColumn' => [
                'name' => 'getAttributesForColumn',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 128,
                        'endLine' => 128,
                        'startColumn' => 47,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the attributes for a table column.
 *
 * @param  array  $column
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 128,
                'endLine' => 137,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'aliasName' => null,
            ],
            'indexes' => [
                'name' => 'indexes',
                'parameters' => [
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
                        'startLine' => 146,
                        'endLine' => 146,
                        'startColumn' => 32,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'table' => [
                        'name' => 'table',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 146,
                        'endLine' => 146,
                        'startColumn' => 49,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the information regarding the table\'s indexes.
 *
 * @param  \\Illuminate\\Database\\Schema\\Builder  $schema
 * @param  string  $table
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 146,
                'endLine' => 153,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'aliasName' => null,
            ],
            'getAttributesForIndex' => [
                'name' => 'getAttributesForIndex',
                'parameters' => [
                    'index' => [
                        'name' => 'index',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 161,
                        'endLine' => 161,
                        'startColumn' => 46,
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
 * Get the attributes for a table index.
 *
 * @param  array  $index
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 161,
                'endLine' => 169,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'aliasName' => null,
            ],
            'foreignKeys' => [
                'name' => 'foreignKeys',
                'parameters' => [
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
                        'startLine' => 178,
                        'endLine' => 178,
                        'startColumn' => 36,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'table' => [
                        'name' => 'table',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 178,
                        'endLine' => 178,
                        'startColumn' => 53,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the information regarding the table\'s foreign keys.
 *
 * @param  \\Illuminate\\Database\\Schema\\Builder  $schema
 * @param  string  $table
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 178,
                'endLine' => 189,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\TableCommand',
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
                        'startLine' => 197,
                        'endLine' => 197,
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
 * Render the table information.
 *
 * @param  array  $data
 * @return void
 */',
                'startLine' => 197,
                'endLine' => 200,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\TableCommand',
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
                        'startLine' => 208,
                        'endLine' => 208,
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
 * Render the table information as JSON.
 *
 * @param  array  $data
 * @return void
 */',
                'startLine' => 208,
                'endLine' => 211,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\TableCommand',
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
                        'startLine' => 219,
                        'endLine' => 219,
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
 * Render the table information formatted for the CLI.
 *
 * @param  array  $data
 * @return void
 */',
                'startLine' => 219,
                'endLine' => 282,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\TableCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\TableCommand',
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
