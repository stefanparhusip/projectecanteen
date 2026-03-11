<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/DatabaseInspectionCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Console\DatabaseInspectionCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-332861c26b06133f7d208dbce38df3cb992950cda02e2e7614d70ece8bd0fa0c-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Console\\DatabaseInspectionCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/DatabaseInspectionCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Console',
        'name' => 'Illuminate\\Database\\Console\\DatabaseInspectionCommand',
        'shortName' => 'DatabaseInspectionCommand',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 64,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 50,
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
        ],
        'immediateMethods' => [
            'getConnectionName' => [
                'name' => 'getConnectionName',
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
                        'startLine' => 20,
                        'endLine' => 20,
                        'startColumn' => 42,
                        'endColumn' => 72,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'database' => [
                        'name' => 'database',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 20,
                        'endLine' => 20,
                        'startColumn' => 75,
                        'endColumn' => 83,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a human-readable name for the given connection.
 *
 * @param  \\Illuminate\\Database\\ConnectionInterface  $connection
 * @param  string  $database
 * @return string
 *
 * @deprecated
 */',
                'startLine' => 20,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DatabaseInspectionCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DatabaseInspectionCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DatabaseInspectionCommand',
                'aliasName' => null,
            ],
            'getConnectionCount' => [
                'name' => 'getConnectionCount',
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
                        'startLine' => 33,
                        'endLine' => 33,
                        'startColumn' => 43,
                        'endColumn' => 73,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the number of open connections for a database.
 *
 * @param  \\Illuminate\\Database\\ConnectionInterface  $connection
 * @return int|null
 *
 * @deprecated
 */',
                'startLine' => 33,
                'endLine' => 36,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DatabaseInspectionCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DatabaseInspectionCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DatabaseInspectionCommand',
                'aliasName' => null,
            ],
            'getConfigFromDatabase' => [
                'name' => 'getConfigFromDatabase',
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
                        'startLine' => 44,
                        'endLine' => 44,
                        'startColumn' => 46,
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
 * Get the connection configuration details for the given connection.
 *
 * @param  string|null  $database
 * @return array
 */',
                'startLine' => 44,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\DatabaseInspectionCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\DatabaseInspectionCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\DatabaseInspectionCommand',
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
