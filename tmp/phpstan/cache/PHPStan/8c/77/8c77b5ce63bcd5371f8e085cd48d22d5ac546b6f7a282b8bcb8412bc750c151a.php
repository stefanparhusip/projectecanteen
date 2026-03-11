<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Connection.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Connection
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-3b2e18c30ca187936cd0d936c1523622316b60cc7e419e48702bcb623e1b089b-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Connection',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Connection.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database',
        'name' => 'Illuminate\\Database\\Connection',
        'shortName' => 'Connection',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 30,
        'endLine' => 1782,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Database\\ConnectionInterface',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Database\\DetectsConcurrencyErrors',
            1 => 'Illuminate\\Database\\DetectsLostConnections',
            2 => 'Illuminate\\Database\\Concerns\\ManagesTransactions',
            3 => 'Illuminate\\Support\\InteractsWithTime',
            4 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'pdo' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'pdo',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The active PDO connection.
 *
 * @var \\PDO|(\\Closure(): \\PDO)
 */',
                'attributes' => [
                ],
                'startLine' => 43,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 19,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'readPdo' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'readPdo',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The active PDO connection used for reads.
 *
 * @var \\PDO|(\\Closure(): \\PDO)
 */',
                'attributes' => [
                ],
                'startLine' => 50,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'readPdoConfig' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'readPdoConfig',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 57,
                        'endLine' => 57,
                        'startTokenPos' => 185,
                        'startFilePos' => 1533,
                        'endTokenPos' => 186,
                        'endFilePos' => 1534,
                    ],
                ],
                'docComment' => '/**
 * The database connection configuration options for reading.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 57,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'database' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'database',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The name of the connected database.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 64,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'readWriteType' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'readWriteType',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The type of the connection.
 *
 * @var string|null
 */',
                'attributes' => [
                ],
                'startLine' => 71,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'tablePrefix' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'tablePrefix',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'\'',
                    'attributes' => [
                        'startLine' => 78,
                        'endLine' => 78,
                        'startTokenPos' => 211,
                        'startFilePos' => 1877,
                        'endTokenPos' => 211,
                        'endFilePos' => 1878,
                    ],
                ],
                'docComment' => '/**
 * The table prefix for the connection.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 78,
                'endLine' => 78,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'config' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'config',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 85,
                        'endLine' => 85,
                        'startTokenPos' => 222,
                        'startFilePos' => 2001,
                        'endTokenPos' => 223,
                        'endFilePos' => 2002,
                    ],
                ],
                'docComment' => '/**
 * The database connection configuration options.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 85,
                'endLine' => 85,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'reconnector' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'reconnector',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The reconnector instance for the connection.
 *
 * @var (callable(\\Illuminate\\Database\\Connection): mixed)
 */',
                'attributes' => [
                ],
                'startLine' => 92,
                'endLine' => 92,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'queryGrammar' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'queryGrammar',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The query grammar implementation.
 *
 * @var \\Illuminate\\Database\\Query\\Grammars\\Grammar
 */',
                'attributes' => [
                ],
                'startLine' => 99,
                'endLine' => 99,
                'startColumn' => 5,
                'endColumn' => 28,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'schemaGrammar' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'schemaGrammar',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The schema grammar implementation.
 *
 * @var \\Illuminate\\Database\\Schema\\Grammars\\Grammar
 */',
                'attributes' => [
                ],
                'startLine' => 106,
                'endLine' => 106,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'postProcessor' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'postProcessor',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The query post processor implementation.
 *
 * @var \\Illuminate\\Database\\Query\\Processors\\Processor
 */',
                'attributes' => [
                ],
                'startLine' => 113,
                'endLine' => 113,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'events' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'events',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The event dispatcher instance.
 *
 * @var \\Illuminate\\Contracts\\Events\\Dispatcher|null
 */',
                'attributes' => [
                ],
                'startLine' => 120,
                'endLine' => 120,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'fetchMode' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'fetchMode',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\\PDO::FETCH_OBJ',
                    'attributes' => [
                        'startLine' => 127,
                        'endLine' => 127,
                        'startTokenPos' => 269,
                        'startFilePos' => 2895,
                        'endTokenPos' => 271,
                        'endFilePos' => 2908,
                    ],
                ],
                'docComment' => '/**
 * The default fetch mode of the connection.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 127,
                'endLine' => 127,
                'startColumn' => 5,
                'endColumn' => 42,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'transactions' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'transactions',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '0',
                    'attributes' => [
                        'startLine' => 134,
                        'endLine' => 134,
                        'startTokenPos' => 282,
                        'startFilePos' => 3023,
                        'endTokenPos' => 282,
                        'endFilePos' => 3023,
                    ],
                ],
                'docComment' => '/**
 * The number of active transactions.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 134,
                'endLine' => 134,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'transactionsManager' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'transactionsManager',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The transaction manager instance.
 *
 * @var \\Illuminate\\Database\\DatabaseTransactionsManager|null
 */',
                'attributes' => [
                ],
                'startLine' => 141,
                'endLine' => 141,
                'startColumn' => 5,
                'endColumn' => 35,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'recordsModified' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'recordsModified',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 148,
                        'endLine' => 148,
                        'startTokenPos' => 300,
                        'startFilePos' => 3327,
                        'endTokenPos' => 300,
                        'endFilePos' => 3331,
                    ],
                ],
                'docComment' => '/**
 * Indicates if changes have been made to the database.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 148,
                'endLine' => 148,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'readOnWriteConnection' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'readOnWriteConnection',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 155,
                        'endLine' => 155,
                        'startTokenPos' => 311,
                        'startFilePos' => 3488,
                        'endTokenPos' => 311,
                        'endFilePos' => 3492,
                    ],
                ],
                'docComment' => '/**
 * Indicates if the connection should use the "write" PDO connection.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 155,
                'endLine' => 155,
                'startColumn' => 5,
                'endColumn' => 45,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'queryLog' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'queryLog',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 162,
                        'endLine' => 162,
                        'startTokenPos' => 322,
                        'startFilePos' => 3669,
                        'endTokenPos' => 323,
                        'endFilePos' => 3670,
                    ],
                ],
                'docComment' => '/**
 * All of the queries run against the connection.
 *
 * @var array{query: string, bindings: array, time: float|null}[]
 */',
                'attributes' => [
                ],
                'startLine' => 162,
                'endLine' => 162,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'loggingQueries' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'loggingQueries',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 169,
                        'endLine' => 169,
                        'startTokenPos' => 334,
                        'startFilePos' => 3797,
                        'endTokenPos' => 334,
                        'endFilePos' => 3801,
                    ],
                ],
                'docComment' => '/**
 * Indicates whether queries are being logged.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 169,
                'endLine' => 169,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'totalQueryDuration' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'totalQueryDuration',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '0.0',
                    'attributes' => [
                        'startLine' => 176,
                        'endLine' => 176,
                        'startTokenPos' => 345,
                        'startFilePos' => 3943,
                        'endTokenPos' => 345,
                        'endFilePos' => 3945,
                    ],
                ],
                'docComment' => '/**
 * The duration of all executed queries in milliseconds.
 *
 * @var float
 */',
                'attributes' => [
                ],
                'startLine' => 176,
                'endLine' => 176,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'queryDurationHandlers' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'queryDurationHandlers',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 183,
                        'endLine' => 183,
                        'startTokenPos' => 356,
                        'startFilePos' => 4218,
                        'endTokenPos' => 357,
                        'endFilePos' => 4219,
                    ],
                ],
                'docComment' => '/**
 * All of the registered query duration handlers.
 *
 * @var array{has_run: bool, handler: (callable(\\Illuminate\\Database\\Connection, class-string<\\Illuminate\\Database\\Events\\QueryExecuted>): mixed)}[]
 */',
                'attributes' => [
                ],
                'startLine' => 183,
                'endLine' => 183,
                'startColumn' => 5,
                'endColumn' => 42,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'pretending' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'pretending',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 190,
                        'endLine' => 190,
                        'startTokenPos' => 368,
                        'startFilePos' => 4345,
                        'endTokenPos' => 368,
                        'endFilePos' => 4349,
                    ],
                ],
                'docComment' => '/**
 * Indicates if the connection is in a "dry run".
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 190,
                'endLine' => 190,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'beforeStartingTransaction' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'beforeStartingTransaction',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 197,
                        'endLine' => 197,
                        'startTokenPos' => 379,
                        'startFilePos' => 4526,
                        'endTokenPos' => 380,
                        'endFilePos' => 4527,
                    ],
                ],
                'docComment' => '/**
 * All of the callbacks that should be invoked before a transaction is started.
 *
 * @var \\Closure[]
 */',
                'attributes' => [
                ],
                'startLine' => 197,
                'endLine' => 197,
                'startColumn' => 5,
                'endColumn' => 46,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'beforeExecutingCallbacks' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'beforeExecutingCallbacks',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 204,
                        'endLine' => 204,
                        'startTokenPos' => 391,
                        'startFilePos' => 4755,
                        'endTokenPos' => 392,
                        'endFilePos' => 4756,
                    ],
                ],
                'docComment' => '/**
 * All of the callbacks that should be invoked before a query is executed.
 *
 * @var (\\Closure(string, array, \\Illuminate\\Database\\Connection): mixed)[]
 */',
                'attributes' => [
                ],
                'startLine' => 204,
                'endLine' => 204,
                'startColumn' => 5,
                'endColumn' => 45,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'resolvers' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'resolvers',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 211,
                        'endLine' => 211,
                        'startTokenPos' => 405,
                        'startFilePos' => 4873,
                        'endTokenPos' => 406,
                        'endFilePos' => 4874,
                    ],
                ],
                'docComment' => '/**
 * The connection resolvers.
 *
 * @var \\Closure[]
 */',
                'attributes' => [
                ],
                'startLine' => 211,
                'endLine' => 211,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'latestPdoTypeRetrieved' => [
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'name' => 'latestPdoTypeRetrieved',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 218,
                        'endLine' => 218,
                        'startTokenPos' => 417,
                        'startFilePos' => 5022,
                        'endTokenPos' => 417,
                        'endFilePos' => 5025,
                    ],
                ],
                'docComment' => '/**
 * The last retrieved PDO read / write type.
 *
 * @var null|\'read\'|\'write\'
 */',
                'attributes' => [
                ],
                'startLine' => 218,
                'endLine' => 218,
                'startColumn' => 5,
                'endColumn' => 45,
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
                    'pdo' => [
                        'name' => 'pdo',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 228,
                        'endLine' => 228,
                        'startColumn' => 33,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'database' => [
                        'name' => 'database',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 228,
                                'endLine' => 228,
                                'startTokenPos' => 435,
                                'startFilePos' => 5296,
                                'endTokenPos' => 435,
                                'endFilePos' => 5297,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 228,
                        'endLine' => 228,
                        'startColumn' => 39,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'tablePrefix' => [
                        'name' => 'tablePrefix',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 228,
                                'endLine' => 228,
                                'startTokenPos' => 442,
                                'startFilePos' => 5315,
                                'endTokenPos' => 442,
                                'endFilePos' => 5316,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 228,
                        'endLine' => 228,
                        'startColumn' => 55,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'config' => [
                        'name' => 'config',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 228,
                                'endLine' => 228,
                                'startTokenPos' => 451,
                                'startFilePos' => 5335,
                                'endTokenPos' => 452,
                                'endFilePos' => 5336,
                            ],
                        ],
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
                        'startLine' => 228,
                        'endLine' => 228,
                        'startColumn' => 74,
                        'endColumn' => 91,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new database connection instance.
 *
 * @param  \\PDO|(\\Closure(): \\PDO)  $pdo
 * @param  string  $database
 * @param  string  $tablePrefix
 * @param  array  $config
 */',
                'startLine' => 228,
                'endLine' => 247,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'useDefaultQueryGrammar' => [
                'name' => 'useDefaultQueryGrammar',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the query grammar to the default implementation.
 *
 * @return void
 */',
                'startLine' => 254,
                'endLine' => 257,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getDefaultQueryGrammar' => [
                'name' => 'getDefaultQueryGrammar',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default query grammar instance.
 *
 * @return \\Illuminate\\Database\\Query\\Grammars\\Grammar
 */',
                'startLine' => 264,
                'endLine' => 267,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'useDefaultSchemaGrammar' => [
                'name' => 'useDefaultSchemaGrammar',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the schema grammar to the default implementation.
 *
 * @return void
 */',
                'startLine' => 274,
                'endLine' => 277,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getDefaultSchemaGrammar' => [
                'name' => 'getDefaultSchemaGrammar',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default schema grammar instance.
 *
 * @return \\Illuminate\\Database\\Schema\\Grammars\\Grammar|null
 */',
                'startLine' => 284,
                'endLine' => 287,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'useDefaultPostProcessor' => [
                'name' => 'useDefaultPostProcessor',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the query post processor to the default implementation.
 *
 * @return void
 */',
                'startLine' => 294,
                'endLine' => 297,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getDefaultPostProcessor' => [
                'name' => 'getDefaultPostProcessor',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default post processor instance.
 *
 * @return \\Illuminate\\Database\\Query\\Processors\\Processor
 */',
                'startLine' => 304,
                'endLine' => 307,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getSchemaBuilder' => [
                'name' => 'getSchemaBuilder',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a schema builder instance for the connection.
 *
 * @return \\Illuminate\\Database\\Schema\\Builder
 */',
                'startLine' => 314,
                'endLine' => 321,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'table' => [
                'name' => 'table',
                'parameters' => [
                    'table' => [
                        'name' => 'table',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 330,
                        'endLine' => 330,
                        'startColumn' => 27,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'as' => [
                        'name' => 'as',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 330,
                                'endLine' => 330,
                                'startTokenPos' => 724,
                                'startFilePos' => 8046,
                                'endTokenPos' => 724,
                                'endFilePos' => 8049,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 330,
                        'endLine' => 330,
                        'startColumn' => 35,
                        'endColumn' => 44,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Begin a fluent query against a database table.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Contracts\\Database\\Query\\Expression|\\UnitEnum|string  $table
 * @param  string|null  $as
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
                'startLine' => 330,
                'endLine' => 333,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'query' => [
                'name' => 'query',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a new query builder instance.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
                'startLine' => 340,
                'endLine' => 345,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'selectOne' => [
                'name' => 'selectOne',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 355,
                        'endLine' => 355,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 355,
                                'endLine' => 355,
                                'startTokenPos' => 806,
                                'startFilePos' => 8644,
                                'endTokenPos' => 807,
                                'endFilePos' => 8645,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 355,
                        'endLine' => 355,
                        'startColumn' => 39,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'useReadPdo' => [
                        'name' => 'useReadPdo',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 355,
                                'endLine' => 355,
                                'startTokenPos' => 814,
                                'startFilePos' => 8662,
                                'endTokenPos' => 814,
                                'endFilePos' => 8665,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 355,
                        'endLine' => 355,
                        'startColumn' => 55,
                        'endColumn' => 72,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run a select statement and return a single result.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  bool  $useReadPdo
 * @return mixed
 */',
                'startLine' => 355,
                'endLine' => 360,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'scalar' => [
                'name' => 'scalar',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 372,
                        'endLine' => 372,
                        'startColumn' => 28,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 372,
                                'endLine' => 372,
                                'startTokenPos' => 862,
                                'startFilePos' => 9124,
                                'endTokenPos' => 863,
                                'endFilePos' => 9125,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 372,
                        'endLine' => 372,
                        'startColumn' => 36,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'useReadPdo' => [
                        'name' => 'useReadPdo',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 372,
                                'endLine' => 372,
                                'startTokenPos' => 870,
                                'startFilePos' => 9142,
                                'endTokenPos' => 870,
                                'endFilePos' => 9145,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 372,
                        'endLine' => 372,
                        'startColumn' => 52,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run a select statement and return the first column of the first row.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  bool  $useReadPdo
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\MultipleColumnsSelectedException
 */',
                'startLine' => 372,
                'endLine' => 387,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'selectFromWriteConnection' => [
                'name' => 'selectFromWriteConnection',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 396,
                        'endLine' => 396,
                        'startColumn' => 47,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 396,
                                'endLine' => 396,
                                'startTokenPos' => 969,
                                'startFilePos' => 9696,
                                'endTokenPos' => 970,
                                'endFilePos' => 9697,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 396,
                        'endLine' => 396,
                        'startColumn' => 55,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run a select statement against the database.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return array
 */',
                'startLine' => 396,
                'endLine' => 399,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'select' => [
                'name' => 'select',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 409,
                        'endLine' => 409,
                        'startColumn' => 28,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 409,
                                'endLine' => 409,
                                'startTokenPos' => 1008,
                                'startFilePos' => 10007,
                                'endTokenPos' => 1009,
                                'endFilePos' => 10008,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 409,
                        'endLine' => 409,
                        'startColumn' => 36,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'useReadPdo' => [
                        'name' => 'useReadPdo',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 409,
                                'endLine' => 409,
                                'startTokenPos' => 1016,
                                'startFilePos' => 10025,
                                'endTokenPos' => 1016,
                                'endFilePos' => 10028,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 409,
                        'endLine' => 409,
                        'startColumn' => 52,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run a select statement against the database.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  bool  $useReadPdo
 * @return array
 */',
                'startLine' => 409,
                'endLine' => 429,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'selectResultSets' => [
                'name' => 'selectResultSets',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 439,
                        'endLine' => 439,
                        'startColumn' => 38,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 439,
                                'endLine' => 439,
                                'startTokenPos' => 1153,
                                'startFilePos' => 11058,
                                'endTokenPos' => 1154,
                                'endFilePos' => 11059,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 439,
                        'endLine' => 439,
                        'startColumn' => 46,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'useReadPdo' => [
                        'name' => 'useReadPdo',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 439,
                                'endLine' => 439,
                                'startTokenPos' => 1161,
                                'startFilePos' => 11076,
                                'endTokenPos' => 1161,
                                'endFilePos' => 11079,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 439,
                        'endLine' => 439,
                        'startColumn' => 62,
                        'endColumn' => 79,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run a select statement against the database and returns all of the result sets.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  bool  $useReadPdo
 * @return array
 */',
                'startLine' => 439,
                'endLine' => 462,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'cursor' => [
                'name' => 'cursor',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 472,
                        'endLine' => 472,
                        'startColumn' => 28,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 472,
                                'endLine' => 472,
                                'startTokenPos' => 1326,
                                'startFilePos' => 11974,
                                'endTokenPos' => 1327,
                                'endFilePos' => 11975,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 472,
                        'endLine' => 472,
                        'startColumn' => 36,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'useReadPdo' => [
                        'name' => 'useReadPdo',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 472,
                                'endLine' => 472,
                                'startTokenPos' => 1334,
                                'startFilePos' => 11992,
                                'endTokenPos' => 1334,
                                'endFilePos' => 11995,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 472,
                        'endLine' => 472,
                        'startColumn' => 52,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run a select statement against the database and returns a generator.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  bool  $useReadPdo
 * @return \\Generator<int, \\stdClass>
 */',
                'startLine' => 472,
                'endLine' => 500,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => true,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'prepared' => [
                'name' => 'prepared',
                'parameters' => [
                    'statement' => [
                        'name' => 'statement',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'PDOStatement',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 508,
                        'endLine' => 508,
                        'startColumn' => 33,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Configure the PDO prepared statement.
 *
 * @param  \\PDOStatement  $statement
 * @return \\PDOStatement
 */',
                'startLine' => 508,
                'endLine' => 515,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getPdoForSelect' => [
                'name' => 'getPdoForSelect',
                'parameters' => [
                    'useReadPdo' => [
                        'name' => 'useReadPdo',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 523,
                                'endLine' => 523,
                                'startTokenPos' => 1544,
                                'startFilePos' => 13649,
                                'endTokenPos' => 1544,
                                'endFilePos' => 13652,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 523,
                        'endLine' => 523,
                        'startColumn' => 40,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the PDO connection to use for a select query.
 *
 * @param  bool  $useReadPdo
 * @return \\PDO
 */',
                'startLine' => 523,
                'endLine' => 526,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'insert' => [
                'name' => 'insert',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 535,
                        'endLine' => 535,
                        'startColumn' => 28,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 535,
                                'endLine' => 535,
                                'startTokenPos' => 1587,
                                'startFilePos' => 13941,
                                'endTokenPos' => 1588,
                                'endFilePos' => 13942,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 535,
                        'endLine' => 535,
                        'startColumn' => 36,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run an insert statement against the database.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return bool
 */',
                'startLine' => 535,
                'endLine' => 538,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'update' => [
                'name' => 'update',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 547,
                        'endLine' => 547,
                        'startColumn' => 28,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 547,
                                'endLine' => 547,
                                'startTokenPos' => 1623,
                                'startFilePos' => 14214,
                                'endTokenPos' => 1624,
                                'endFilePos' => 14215,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 547,
                        'endLine' => 547,
                        'startColumn' => 36,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run an update statement against the database.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return int
 */',
                'startLine' => 547,
                'endLine' => 550,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'delete' => [
                'name' => 'delete',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 559,
                        'endLine' => 559,
                        'startColumn' => 28,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 559,
                                'endLine' => 559,
                                'startTokenPos' => 1659,
                                'startFilePos' => 14495,
                                'endTokenPos' => 1660,
                                'endFilePos' => 14496,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 559,
                        'endLine' => 559,
                        'startColumn' => 36,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run a delete statement against the database.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return int
 */',
                'startLine' => 559,
                'endLine' => 562,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'statement' => [
                'name' => 'statement',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 571,
                        'endLine' => 571,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 571,
                                'endLine' => 571,
                                'startTokenPos' => 1695,
                                'startFilePos' => 14791,
                                'endTokenPos' => 1696,
                                'endFilePos' => 14792,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 571,
                        'endLine' => 571,
                        'startColumn' => 39,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute an SQL statement and return the boolean result.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return bool
 */',
                'startLine' => 571,
                'endLine' => 586,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'affectingStatement' => [
                'name' => 'affectingStatement',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 595,
                        'endLine' => 595,
                        'startColumn' => 40,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 595,
                                'endLine' => 595,
                                'startTokenPos' => 1812,
                                'startFilePos' => 15435,
                                'endTokenPos' => 1813,
                                'endFilePos' => 15436,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 595,
                        'endLine' => 595,
                        'startColumn' => 48,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run an SQL statement and get the number of rows affected.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return int
 */',
                'startLine' => 595,
                'endLine' => 617,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'unprepared' => [
                'name' => 'unprepared',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 625,
                        'endLine' => 625,
                        'startColumn' => 32,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run a raw, unprepared query against the PDO connection.
 *
 * @param  string  $query
 * @return bool
 */',
                'startLine' => 625,
                'endLine' => 638,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'threadCount' => [
                'name' => 'threadCount',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the number of open connections for the database.
 *
 * @return int|null
 */',
                'startLine' => 645,
                'endLine' => 650,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'pretend' => [
                'name' => 'pretend',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 658,
                        'endLine' => 658,
                        'startColumn' => 29,
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
 * Execute the given callback in "dry run" mode.
 *
 * @param  (\\Closure(\\Illuminate\\Database\\Connection): mixed)  $callback
 * @return array{query: string, bindings: array, time: float|null}[]
 */',
                'startLine' => 658,
                'endLine' => 674,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'withoutPretending' => [
                'name' => 'withoutPretending',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 682,
                        'endLine' => 682,
                        'startColumn' => 39,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given callback without "pretending".
 *
 * @param  \\Closure  $callback
 * @return mixed
 */',
                'startLine' => 682,
                'endLine' => 695,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'withFreshQueryLog' => [
                'name' => 'withFreshQueryLog',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 703,
                        'endLine' => 703,
                        'startColumn' => 42,
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
 * Execute the given callback in "dry run" mode.
 *
 * @param  (\\Closure(): array{query: string, bindings: array, time: float|null}[])  $callback
 * @return array{query: string, bindings: array, time: float|null}[]
 */',
                'startLine' => 703,
                'endLine' => 722,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'bindValues' => [
                'name' => 'bindValues',
                'parameters' => [
                    'statement' => [
                        'name' => 'statement',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 731,
                        'endLine' => 731,
                        'startColumn' => 32,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 731,
                        'endLine' => 731,
                        'startColumn' => 44,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Bind values to their parameters in the given statement.
 *
 * @param  \\PDOStatement  $statement
 * @param  array  $bindings
 * @return void
 */',
                'startLine' => 731,
                'endLine' => 744,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'prepareBindings' => [
                'name' => 'prepareBindings',
                'parameters' => [
                    'bindings' => [
                        'name' => 'bindings',
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
                        'startLine' => 752,
                        'endLine' => 752,
                        'startColumn' => 37,
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
 * Prepare the query bindings for execution.
 *
 * @param  array  $bindings
 * @return array
 */',
                'startLine' => 752,
                'endLine' => 768,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'run' => [
                'name' => 'run',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 780,
                        'endLine' => 780,
                        'startColumn' => 28,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 780,
                        'endLine' => 780,
                        'startColumn' => 36,
                        'endColumn' => 44,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 780,
                        'endLine' => 780,
                        'startColumn' => 47,
                        'endColumn' => 63,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run a SQL statement and log its execution context.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  \\Closure  $callback
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\QueryException
 */',
                'startLine' => 780,
                'endLine' => 809,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'runQueryCallback' => [
                'name' => 'runQueryCallback',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 821,
                        'endLine' => 821,
                        'startColumn' => 41,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 821,
                        'endLine' => 821,
                        'startColumn' => 49,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 821,
                        'endLine' => 821,
                        'startColumn' => 60,
                        'endColumn' => 76,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run a SQL statement.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  \\Closure  $callback
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\QueryException
 */',
                'startLine' => 821,
                'endLine' => 847,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'isUniqueConstraintError' => [
                'name' => 'isUniqueConstraintError',
                'parameters' => [
                    'exception' => [
                        'name' => 'exception',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Exception',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 855,
                        'endLine' => 855,
                        'startColumn' => 48,
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
 * Determine if the given database exception was caused by a unique constraint violation.
 *
 * @param  \\Exception  $exception
 * @return bool
 */',
                'startLine' => 855,
                'endLine' => 858,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'logQuery' => [
                'name' => 'logQuery',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 868,
                        'endLine' => 868,
                        'startColumn' => 30,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 868,
                        'endLine' => 868,
                        'startColumn' => 38,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'time' => [
                        'name' => 'time',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 868,
                                'endLine' => 868,
                                'startTokenPos' => 2879,
                                'startFilePos' => 24121,
                                'endTokenPos' => 2879,
                                'endFilePos' => 24124,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 868,
                        'endLine' => 868,
                        'startColumn' => 49,
                        'endColumn' => 60,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Log a query in the connection\'s query log.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  float|null  $time
 * @return void
 */',
                'startLine' => 868,
                'endLine' => 883,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getElapsedTime' => [
                'name' => 'getElapsedTime',
                'parameters' => [
                    'start' => [
                        'name' => 'start',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 891,
                        'endLine' => 891,
                        'startColumn' => 39,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the elapsed time in milliseconds since a given starting point.
 *
 * @param  float  $start
 * @return float
 */',
                'startLine' => 891,
                'endLine' => 894,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'whenQueryingForLongerThan' => [
                'name' => 'whenQueryingForLongerThan',
                'parameters' => [
                    'threshold' => [
                        'name' => 'threshold',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 903,
                        'endLine' => 903,
                        'startColumn' => 47,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'handler' => [
                        'name' => 'handler',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 903,
                        'endLine' => 903,
                        'startColumn' => 59,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a callback to be invoked when the connection queries for longer than a given amount of time.
 *
 * @param  \\DateTimeInterface|\\Carbon\\CarbonInterval|float|int  $threshold
 * @param  (callable(\\Illuminate\\Database\\Connection, \\Illuminate\\Database\\Events\\QueryExecuted): mixed)  $handler
 * @return void
 */',
                'startLine' => 903,
                'endLine' => 927,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'allowQueryDurationHandlersToRunAgain' => [
                'name' => 'allowQueryDurationHandlersToRunAgain',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Allow all the query duration handlers to run again, even if they have already run.
 *
 * @return void
 */',
                'startLine' => 934,
                'endLine' => 939,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'totalQueryDuration' => [
                'name' => 'totalQueryDuration',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the duration of all run queries in milliseconds.
 *
 * @return float
 */',
                'startLine' => 946,
                'endLine' => 949,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'resetTotalQueryDuration' => [
                'name' => 'resetTotalQueryDuration',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Reset the duration of all run queries.
 *
 * @return void
 */',
                'startLine' => 956,
                'endLine' => 959,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'handleQueryException' => [
                'name' => 'handleQueryException',
                'parameters' => [
                    'e' => [
                        'name' => 'e',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\QueryException',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 972,
                        'endLine' => 972,
                        'startColumn' => 45,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 972,
                        'endLine' => 972,
                        'startColumn' => 64,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 972,
                        'endLine' => 972,
                        'startColumn' => 72,
                        'endColumn' => 80,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 972,
                        'endLine' => 972,
                        'startColumn' => 83,
                        'endColumn' => 99,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Handle a query exception.
 *
 * @param  \\Illuminate\\Database\\QueryException  $e
 * @param  string  $query
 * @param  array  $bindings
 * @param  \\Closure  $callback
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\QueryException
 */',
                'startLine' => 972,
                'endLine' => 981,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'tryAgainIfCausedByLostConnection' => [
                'name' => 'tryAgainIfCausedByLostConnection',
                'parameters' => [
                    'e' => [
                        'name' => 'e',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\QueryException',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 994,
                        'endLine' => 994,
                        'startColumn' => 57,
                        'endColumn' => 73,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 994,
                        'endLine' => 994,
                        'startColumn' => 76,
                        'endColumn' => 81,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 994,
                        'endLine' => 994,
                        'startColumn' => 84,
                        'endColumn' => 92,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 994,
                        'endLine' => 994,
                        'startColumn' => 95,
                        'endColumn' => 111,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Handle a query exception that occurred during query execution.
 *
 * @param  \\Illuminate\\Database\\QueryException  $e
 * @param  string  $query
 * @param  array  $bindings
 * @param  \\Closure  $callback
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\QueryException
 */',
                'startLine' => 994,
                'endLine' => 1003,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'reconnect' => [
                'name' => 'reconnect',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Reconnect to the database.
 *
 * @return mixed|false
 *
 * @throws \\Illuminate\\Database\\LostConnectionException
 */',
                'startLine' => 1012,
                'endLine' => 1019,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'reconnectIfMissingConnection' => [
                'name' => 'reconnectIfMissingConnection',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Reconnect to the database if a PDO connection is missing.
 *
 * @return void
 */',
                'startLine' => 1026,
                'endLine' => 1031,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'disconnect' => [
                'name' => 'disconnect',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Disconnect from the underlying PDO connection.
 *
 * @return void
 */',
                'startLine' => 1038,
                'endLine' => 1041,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'beforeStartingTransaction' => [
                'name' => 'beforeStartingTransaction',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1049,
                        'endLine' => 1049,
                        'startColumn' => 47,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a hook to be run just before a database transaction is started.
 *
 * @param  \\Closure  $callback
 * @return $this
 */',
                'startLine' => 1049,
                'endLine' => 1054,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'beforeExecuting' => [
                'name' => 'beforeExecuting',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1062,
                        'endLine' => 1062,
                        'startColumn' => 37,
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
 * Register a hook to be run just before a database query is executed.
 *
 * @param  \\Closure  $callback
 * @return $this
 */',
                'startLine' => 1062,
                'endLine' => 1067,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'listen' => [
                'name' => 'listen',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1075,
                        'endLine' => 1075,
                        'startColumn' => 28,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a database query listener with the connection.
 *
 * @param  \\Closure(\\Illuminate\\Database\\Events\\QueryExecuted)  $callback
 * @return void
 */',
                'startLine' => 1075,
                'endLine' => 1078,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'fireConnectionEvent' => [
                'name' => 'fireConnectionEvent',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1086,
                        'endLine' => 1086,
                        'startColumn' => 44,
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
 * Fire an event for this connection.
 *
 * @param  string  $event
 * @return array|null
 */',
                'startLine' => 1086,
                'endLine' => 1095,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'event' => [
                'name' => 'event',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1103,
                        'endLine' => 1103,
                        'startColumn' => 30,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Fire the given event if possible.
 *
 * @param  mixed  $event
 * @return void
 */',
                'startLine' => 1103,
                'endLine' => 1106,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'raw' => [
                'name' => 'raw',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1114,
                        'endLine' => 1114,
                        'startColumn' => 25,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a new raw query expression.
 *
 * @param  mixed  $value
 * @return \\Illuminate\\Contracts\\Database\\Query\\Expression
 */',
                'startLine' => 1114,
                'endLine' => 1117,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'escape' => [
                'name' => 'escape',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1128,
                        'endLine' => 1128,
                        'startColumn' => 28,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'binary' => [
                        'name' => 'binary',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1128,
                                'endLine' => 1128,
                                'startTokenPos' => 3844,
                                'startFilePos' => 31108,
                                'endTokenPos' => 3844,
                                'endFilePos' => 31112,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1128,
                        'endLine' => 1128,
                        'startColumn' => 36,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Escape a value for safe SQL embedding.
 *
 * @param  string|float|int|bool|null  $value
 * @param  bool  $binary
 * @return string
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 1128,
                'endLine' => 1151,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'escapeString' => [
                'name' => 'escapeString',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1159,
                        'endLine' => 1159,
                        'startColumn' => 37,
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
 * Escape a string value for safe SQL embedding.
 *
 * @param  string  $value
 * @return string
 */',
                'startLine' => 1159,
                'endLine' => 1162,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'escapeBool' => [
                'name' => 'escapeBool',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1170,
                        'endLine' => 1170,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Escape a boolean value for safe SQL embedding.
 *
 * @param  bool  $value
 * @return string
 */',
                'startLine' => 1170,
                'endLine' => 1173,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'escapeBinary' => [
                'name' => 'escapeBinary',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1183,
                        'endLine' => 1183,
                        'startColumn' => 37,
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
 * Escape a binary value for safe SQL embedding.
 *
 * @param  string  $value
 * @return string
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 1183,
                'endLine' => 1186,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'hasModifiedRecords' => [
                'name' => 'hasModifiedRecords',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the database connection has modified any database records.
 *
 * @return bool
 */',
                'startLine' => 1193,
                'endLine' => 1196,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'recordsHaveBeenModified' => [
                'name' => 'recordsHaveBeenModified',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1204,
                                'endLine' => 1204,
                                'startTokenPos' => 4150,
                                'startFilePos' => 33184,
                                'endTokenPos' => 4150,
                                'endFilePos' => 33187,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1204,
                        'endLine' => 1204,
                        'startColumn' => 45,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate if any records have been modified.
 *
 * @param  bool  $value
 * @return void
 */',
                'startLine' => 1204,
                'endLine' => 1209,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'setRecordModificationState' => [
                'name' => 'setRecordModificationState',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1217,
                        'endLine' => 1217,
                        'startColumn' => 48,
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
 * Set the record modification state.
 *
 * @param  bool  $value
 * @return $this
 */',
                'startLine' => 1217,
                'endLine' => 1222,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'forgetRecordModificationState' => [
                'name' => 'forgetRecordModificationState',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Reset the record modification state.
 *
 * @return void
 */',
                'startLine' => 1229,
                'endLine' => 1232,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'useWriteConnectionWhenReading' => [
                'name' => 'useWriteConnectionWhenReading',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1240,
                                'endLine' => 1240,
                                'startTokenPos' => 4246,
                                'startFilePos' => 33955,
                                'endTokenPos' => 4246,
                                'endFilePos' => 33958,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1240,
                        'endLine' => 1240,
                        'startColumn' => 51,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the connection should use the write PDO connection for reads.
 *
 * @param  bool  $value
 * @return $this
 */',
                'startLine' => 1240,
                'endLine' => 1245,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getPdo' => [
                'name' => 'getPdo',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current PDO connection.
 *
 * @return \\PDO
 */',
                'startLine' => 1252,
                'endLine' => 1261,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getRawPdo' => [
                'name' => 'getRawPdo',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current PDO connection parameter without executing any reconnect logic.
 *
 * @return \\PDO|\\Closure|null
 */',
                'startLine' => 1268,
                'endLine' => 1271,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getReadPdo' => [
                'name' => 'getReadPdo',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current PDO connection used for reading.
 *
 * @return \\PDO
 */',
                'startLine' => 1278,
                'endLine' => 1296,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getRawReadPdo' => [
                'name' => 'getRawReadPdo',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current read PDO connection parameter without executing any reconnect logic.
 *
 * @return \\PDO|\\Closure|null
 */',
                'startLine' => 1303,
                'endLine' => 1306,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'setPdo' => [
                'name' => 'setPdo',
                'parameters' => [
                    'pdo' => [
                        'name' => 'pdo',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1314,
                        'endLine' => 1314,
                        'startColumn' => 28,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the PDO connection.
 *
 * @param  \\PDO|\\Closure|null  $pdo
 * @return $this
 */',
                'startLine' => 1314,
                'endLine' => 1321,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'setReadPdo' => [
                'name' => 'setReadPdo',
                'parameters' => [
                    'pdo' => [
                        'name' => 'pdo',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1329,
                        'endLine' => 1329,
                        'startColumn' => 32,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the PDO connection used for reading.
 *
 * @param  \\PDO|\\Closure|null  $pdo
 * @return $this
 */',
                'startLine' => 1329,
                'endLine' => 1334,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'setReadPdoConfig' => [
                'name' => 'setReadPdoConfig',
                'parameters' => [
                    'config' => [
                        'name' => 'config',
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
                        'startLine' => 1342,
                        'endLine' => 1342,
                        'startColumn' => 38,
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
 * Set the read PDO connection configuration.
 *
 * @param  array  $config
 * @return $this
 */',
                'startLine' => 1342,
                'endLine' => 1347,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'setReconnector' => [
                'name' => 'setReconnector',
                'parameters' => [
                    'reconnector' => [
                        'name' => 'reconnector',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1355,
                        'endLine' => 1355,
                        'startColumn' => 36,
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
 * Set the reconnect instance on the connection.
 *
 * @param  (callable(\\Illuminate\\Database\\Connection): mixed)  $reconnector
 * @return $this
 */',
                'startLine' => 1355,
                'endLine' => 1360,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getName' => [
                'name' => 'getName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the database connection name.
 *
 * @return string|null
 */',
                'startLine' => 1367,
                'endLine' => 1370,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getNameWithReadWriteType' => [
                'name' => 'getNameWithReadWriteType',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the database connection with its read / write type.
 *
 * @return string|null
 */',
                'startLine' => 1377,
                'endLine' => 1382,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getConfig' => [
                'name' => 'getConfig',
                'parameters' => [
                    'option' => [
                        'name' => 'option',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1390,
                                'endLine' => 1390,
                                'startTokenPos' => 4729,
                                'startFilePos' => 37128,
                                'endTokenPos' => 4729,
                                'endFilePos' => 37131,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1390,
                        'endLine' => 1390,
                        'startColumn' => 31,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an option from the configuration options.
 *
 * @param  string|null  $option
 * @return mixed
 */',
                'startLine' => 1390,
                'endLine' => 1393,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getConnectionDetails' => [
                'name' => 'getConnectionDetails',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the basic connection information as an array for debugging.
 *
 * @return array
 */',
                'startLine' => 1400,
                'endLine' => 1414,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getDriverName' => [
                'name' => 'getDriverName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the PDO driver name.
 *
 * @return string
 */',
                'startLine' => 1421,
                'endLine' => 1424,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getDriverTitle' => [
                'name' => 'getDriverTitle',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a human-readable name for the given connection driver.
 *
 * @return string
 */',
                'startLine' => 1431,
                'endLine' => 1434,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getQueryGrammar' => [
                'name' => 'getQueryGrammar',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the query grammar used by the connection.
 *
 * @return \\Illuminate\\Database\\Query\\Grammars\\Grammar
 */',
                'startLine' => 1441,
                'endLine' => 1444,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'setQueryGrammar' => [
                'name' => 'setQueryGrammar',
                'parameters' => [
                    'grammar' => [
                        'name' => 'grammar',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1452,
                        'endLine' => 1452,
                        'startColumn' => 37,
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
 * Set the query grammar used by the connection.
 *
 * @param  \\Illuminate\\Database\\Query\\Grammars\\Grammar  $grammar
 * @return $this
 */',
                'startLine' => 1452,
                'endLine' => 1457,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getSchemaGrammar' => [
                'name' => 'getSchemaGrammar',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the schema grammar used by the connection.
 *
 * @return \\Illuminate\\Database\\Schema\\Grammars\\Grammar
 */',
                'startLine' => 1464,
                'endLine' => 1467,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'setSchemaGrammar' => [
                'name' => 'setSchemaGrammar',
                'parameters' => [
                    'grammar' => [
                        'name' => 'grammar',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Schema\\Grammars\\Grammar',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1475,
                        'endLine' => 1475,
                        'startColumn' => 38,
                        'endColumn' => 69,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the schema grammar used by the connection.
 *
 * @param  \\Illuminate\\Database\\Schema\\Grammars\\Grammar  $grammar
 * @return $this
 */',
                'startLine' => 1475,
                'endLine' => 1480,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getPostProcessor' => [
                'name' => 'getPostProcessor',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the query post processor used by the connection.
 *
 * @return \\Illuminate\\Database\\Query\\Processors\\Processor
 */',
                'startLine' => 1487,
                'endLine' => 1490,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'setPostProcessor' => [
                'name' => 'setPostProcessor',
                'parameters' => [
                    'processor' => [
                        'name' => 'processor',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Query\\Processors\\Processor',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1498,
                        'endLine' => 1498,
                        'startColumn' => 38,
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
 * Set the query post processor used by the connection.
 *
 * @param  \\Illuminate\\Database\\Query\\Processors\\Processor  $processor
 * @return $this
 */',
                'startLine' => 1498,
                'endLine' => 1503,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getEventDispatcher' => [
                'name' => 'getEventDispatcher',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the event dispatcher used by the connection.
 *
 * @return \\Illuminate\\Contracts\\Events\\Dispatcher|null
 */',
                'startLine' => 1510,
                'endLine' => 1513,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'setEventDispatcher' => [
                'name' => 'setEventDispatcher',
                'parameters' => [
                    'events' => [
                        'name' => 'events',
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
                        'startLine' => 1521,
                        'endLine' => 1521,
                        'startColumn' => 40,
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
 * Set the event dispatcher instance on the connection.
 *
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $events
 * @return $this
 */',
                'startLine' => 1521,
                'endLine' => 1526,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'unsetEventDispatcher' => [
                'name' => 'unsetEventDispatcher',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Unset the event dispatcher for this connection.
 *
 * @return void
 */',
                'startLine' => 1533,
                'endLine' => 1536,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'executeBeginTransactionStatement' => [
                'name' => 'executeBeginTransactionStatement',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run the statement to start a new transaction.
 *
 * @return void
 */',
                'startLine' => 1543,
                'endLine' => 1546,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'setTransactionManager' => [
                'name' => 'setTransactionManager',
                'parameters' => [
                    'manager' => [
                        'name' => 'manager',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1554,
                        'endLine' => 1554,
                        'startColumn' => 43,
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
 * Set the transaction manager instance on the connection.
 *
 * @param  \\Illuminate\\Database\\DatabaseTransactionsManager  $manager
 * @return $this
 */',
                'startLine' => 1554,
                'endLine' => 1559,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'unsetTransactionManager' => [
                'name' => 'unsetTransactionManager',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Unset the transaction manager for this connection.
 *
 * @return void
 */',
                'startLine' => 1566,
                'endLine' => 1569,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'pretending' => [
                'name' => 'pretending',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the connection is in a "dry run".
 *
 * @return bool
 */',
                'startLine' => 1576,
                'endLine' => 1579,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getQueryLog' => [
                'name' => 'getQueryLog',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the connection query log.
 *
 * @return array{query: string, bindings: array, time: float|null}[]
 */',
                'startLine' => 1586,
                'endLine' => 1589,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getRawQueryLog' => [
                'name' => 'getRawQueryLog',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the connection query log with embedded bindings.
 *
 * @return array
 */',
                'startLine' => 1596,
                'endLine' => 1605,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'flushQueryLog' => [
                'name' => 'flushQueryLog',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Clear the query log.
 *
 * @return void
 */',
                'startLine' => 1612,
                'endLine' => 1615,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'enableQueryLog' => [
                'name' => 'enableQueryLog',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Enable the query log on the connection.
 *
 * @return void
 */',
                'startLine' => 1622,
                'endLine' => 1625,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'disableQueryLog' => [
                'name' => 'disableQueryLog',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Disable the query log on the connection.
 *
 * @return void
 */',
                'startLine' => 1632,
                'endLine' => 1635,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'logging' => [
                'name' => 'logging',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine whether we\'re logging queries.
 *
 * @return bool
 */',
                'startLine' => 1642,
                'endLine' => 1645,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getDatabaseName' => [
                'name' => 'getDatabaseName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the connected database.
 *
 * @return string
 */',
                'startLine' => 1652,
                'endLine' => 1655,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'setDatabaseName' => [
                'name' => 'setDatabaseName',
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
                        'startLine' => 1663,
                        'endLine' => 1663,
                        'startColumn' => 37,
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
 * Set the name of the connected database.
 *
 * @param  string  $database
 * @return $this
 */',
                'startLine' => 1663,
                'endLine' => 1668,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'setReadWriteType' => [
                'name' => 'setReadWriteType',
                'parameters' => [
                    'readWriteType' => [
                        'name' => 'readWriteType',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1676,
                        'endLine' => 1676,
                        'startColumn' => 38,
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
 * Set the read / write type of the connection.
 *
 * @param  string|null  $readWriteType
 * @return $this
 */',
                'startLine' => 1676,
                'endLine' => 1681,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'latestReadWriteTypeUsed' => [
                'name' => 'latestReadWriteTypeUsed',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve the latest read / write type used.
 *
 * @return \'read\'|\'write\'|null
 */',
                'startLine' => 1688,
                'endLine' => 1691,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getTablePrefix' => [
                'name' => 'getTablePrefix',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the table prefix for the connection.
 *
 * @return string
 */',
                'startLine' => 1698,
                'endLine' => 1701,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'setTablePrefix' => [
                'name' => 'setTablePrefix',
                'parameters' => [
                    'prefix' => [
                        'name' => 'prefix',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1709,
                        'endLine' => 1709,
                        'startColumn' => 36,
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
 * Set the table prefix in use by the connection.
 *
 * @param  string  $prefix
 * @return $this
 */',
                'startLine' => 1709,
                'endLine' => 1714,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'withoutTablePrefix' => [
                'name' => 'withoutTablePrefix',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1722,
                        'endLine' => 1722,
                        'startColumn' => 40,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'mixed',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given callback without table prefix.
 *
 * @param  \\Closure  $callback
 * @return mixed
 */',
                'startLine' => 1722,
                'endLine' => 1733,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getServerVersion' => [
                'name' => 'getServerVersion',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the server version for the connection.
 *
 * @return string
 */',
                'startLine' => 1740,
                'endLine' => 1743,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'resolverFor' => [
                'name' => 'resolverFor',
                'parameters' => [
                    'driver' => [
                        'name' => 'driver',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1752,
                        'endLine' => 1752,
                        'startColumn' => 40,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1752,
                        'endLine' => 1752,
                        'startColumn' => 49,
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
 * Register a connection resolver.
 *
 * @param  string  $driver
 * @param  \\Closure  $callback
 * @return void
 */',
                'startLine' => 1752,
                'endLine' => 1755,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            'getResolver' => [
                'name' => 'getResolver',
                'parameters' => [
                    'driver' => [
                        'name' => 'driver',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1763,
                        'endLine' => 1763,
                        'startColumn' => 40,
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
 * Get the connection resolver for the given driver.
 *
 * @param  string  $driver
 * @return \\Closure|null
 */',
                'startLine' => 1763,
                'endLine' => 1766,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
                'aliasName' => null,
            ],
            '__clone' => [
                'name' => '__clone',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepare the instance for cloning.
 *
 * @return void
 */',
                'startLine' => 1773,
                'endLine' => 1781,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database',
                'declaringClassName' => 'Illuminate\\Database\\Connection',
                'implementingClassName' => 'Illuminate\\Database\\Connection',
                'currentClassName' => 'Illuminate\\Database\\Connection',
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
