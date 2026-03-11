<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/CacheManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Cache\CacheManager
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-60ee8c14aa63db48d7c76d9c86809c4e034ee419c47e460f7e86f7a0eb1a69e9-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Cache\\CacheManager',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/CacheManager.php',
            ],
        ],
        'namespace' => 'Illuminate\\Cache',
        'name' => 'Illuminate\\Cache\\CacheManager',
        'shortName' => 'CacheManager',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @mixin \\Illuminate\\Cache\\Repository
 * @mixin \\Illuminate\\Contracts\\Cache\\LockProvider
 */',
        'attributes' => [
        ],
        'startLine' => 19,
        'endLine' => 560,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Cache\\Factory',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'app' => [
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'name' => 'app',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The application instance.
 *
 * @var \\Illuminate\\Contracts\\Foundation\\Application
 */',
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 19,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'stores' => [
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'name' => 'stores',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 33,
                        'endLine' => 33,
                        'startTokenPos' => 87,
                        'startFilePos' => 738,
                        'endTokenPos' => 88,
                        'endFilePos' => 739,
                    ],
                ],
                'docComment' => '/**
 * The array of resolved cache stores.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'customCreators' => [
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'name' => 'customCreators',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 40,
                        'endLine' => 40,
                        'startTokenPos' => 99,
                        'startFilePos' => 862,
                        'endTokenPos' => 100,
                        'endFilePos' => 863,
                    ],
                ],
                'docComment' => '/**
 * The registered custom driver creators.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 40,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 35,
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
                    'app' => [
                        'name' => 'app',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 47,
                        'endLine' => 47,
                        'startColumn' => 33,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new Cache manager instance.
 *
 * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
 */',
                'startLine' => 47,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'store' => [
                'name' => 'store',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 58,
                                'endLine' => 58,
                                'startTokenPos' => 139,
                                'startFilePos' => 1291,
                                'endTokenPos' => 139,
                                'endFilePos' => 1294,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 27,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a cache store instance by name, wrapped in a repository.
 *
 * @param  string|null  $name
 * @return \\Illuminate\\Contracts\\Cache\\Repository
 */',
                'startLine' => 58,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'driver' => [
                'name' => 'driver',
                'parameters' => [
                    'driver' => [
                        'name' => 'driver',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 71,
                                'endLine' => 71,
                                'startTokenPos' => 192,
                                'startFilePos' => 1612,
                                'endTokenPos' => 192,
                                'endFilePos' => 1615,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 71,
                        'endLine' => 71,
                        'startColumn' => 28,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a cache driver instance.
 *
 * @param  string|null  $driver
 * @return \\Illuminate\\Contracts\\Cache\\Repository
 */',
                'startLine' => 71,
                'endLine' => 74,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'memo' => [
                'name' => 'memo',
                'parameters' => [
                    'driver' => [
                        'name' => 'driver',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 82,
                                'endLine' => 82,
                                'startTokenPos' => 221,
                                'startFilePos' => 1862,
                                'endTokenPos' => 221,
                                'endFilePos' => 1865,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 82,
                        'endLine' => 82,
                        'startColumn' => 26,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a memoized cache driver instance.
 *
 * @param  string|null  $driver
 * @return \\Illuminate\\Contracts\\Cache\\Repository
 */',
                'startLine' => 82,
                'endLine' => 99,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'resolve' => [
                'name' => 'resolve',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 109,
                        'endLine' => 109,
                        'startColumn' => 29,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resolve the given store.
 *
 * @param  string  $name
 * @return \\Illuminate\\Contracts\\Cache\\Repository
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 109,
                'endLine' => 120,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'build' => [
                'name' => 'build',
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
                        'startLine' => 130,
                        'endLine' => 130,
                        'startColumn' => 27,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Build a cache repository with the given configuration.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 130,
                'endLine' => 145,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'callCustomCreator' => [
                'name' => 'callCustomCreator',
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
                        'startLine' => 153,
                        'endLine' => 153,
                        'startColumn' => 42,
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
 * Call a custom driver creator.
 *
 * @param  array  $config
 * @return mixed
 */',
                'startLine' => 153,
                'endLine' => 156,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'createApcDriver' => [
                'name' => 'createApcDriver',
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
                        'startLine' => 164,
                        'endLine' => 164,
                        'startColumn' => 40,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the APC cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
                'startLine' => 164,
                'endLine' => 169,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'createArrayDriver' => [
                'name' => 'createArrayDriver',
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
                        'startLine' => 177,
                        'endLine' => 177,
                        'startColumn' => 42,
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
 * Create an instance of the array cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
                'startLine' => 177,
                'endLine' => 183,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'createDatabaseDriver' => [
                'name' => 'createDatabaseDriver',
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
                        'startLine' => 191,
                        'endLine' => 191,
                        'startColumn' => 45,
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
 * Create an instance of the database cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
                'startLine' => 191,
                'endLine' => 211,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'createDynamodbDriver' => [
                'name' => 'createDynamodbDriver',
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
                        'startLine' => 219,
                        'endLine' => 219,
                        'startColumn' => 45,
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
 * Create an instance of the DynamoDB cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
                'startLine' => 219,
                'endLine' => 235,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'newDynamodbClient' => [
                'name' => 'newDynamodbClient',
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
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 42,
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
 * Create new DynamoDb Client instance.
 *
 * @return \\Aws\\DynamoDb\\DynamoDbClient
 */',
                'startLine' => 242,
                'endLine' => 261,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'createFailoverDriver' => [
                'name' => 'createFailoverDriver',
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
                        'startLine' => 269,
                        'endLine' => 269,
                        'startColumn' => 45,
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
 * Create an instance of the failover cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
                'startLine' => 269,
                'endLine' => 276,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'createFileDriver' => [
                'name' => 'createFileDriver',
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
                        'startLine' => 284,
                        'endLine' => 284,
                        'startColumn' => 41,
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
 * Create an instance of the file cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
                'startLine' => 284,
                'endLine' => 296,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'createMemcachedDriver' => [
                'name' => 'createMemcachedDriver',
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
                        'startLine' => 304,
                        'endLine' => 304,
                        'startColumn' => 46,
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
 * Create an instance of the Memcached cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
                'startLine' => 304,
                'endLine' => 316,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'createNullDriver' => [
                'name' => 'createNullDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the Null cache driver.
 *
 * @return \\Illuminate\\Cache\\Repository
 */',
                'startLine' => 323,
                'endLine' => 326,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'createRedisDriver' => [
                'name' => 'createRedisDriver',
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
                        'startLine' => 334,
                        'endLine' => 334,
                        'startColumn' => 42,
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
 * Create an instance of the Redis cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
                'startLine' => 334,
                'endLine' => 351,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'createSessionDriver' => [
                'name' => 'createSessionDriver',
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
                        'startLine' => 359,
                        'endLine' => 359,
                        'startColumn' => 44,
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
 * Create an instance of the session cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
                'startLine' => 359,
                'endLine' => 368,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'getSession' => [
                'name' => 'getSession',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the session store implementation.
 *
 * @return \\Illuminate\\Contracts\\Session\\Session
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 377,
                'endLine' => 386,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'repository' => [
                'name' => 'repository',
                'parameters' => [
                    'store' => [
                        'name' => 'store',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Cache\\Store',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 395,
                        'endLine' => 395,
                        'startColumn' => 32,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'config' => [
                        'name' => 'config',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 395,
                                'endLine' => 395,
                                'startTokenPos' => 1690,
                                'startFilePos' => 10621,
                                'endTokenPos' => 1691,
                                'endFilePos' => 10622,
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
                        'startLine' => 395,
                        'endLine' => 395,
                        'startColumn' => 46,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new cache repository with the given implementation.
 *
 * @param  \\Illuminate\\Contracts\\Cache\\Store  $store
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
                'startLine' => 395,
                'endLine' => 402,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'setEventDispatcher' => [
                'name' => 'setEventDispatcher',
                'parameters' => [
                    'repository' => [
                        'name' => 'repository',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Cache\\Repository',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 410,
                        'endLine' => 410,
                        'startColumn' => 43,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the event dispatcher on the given repository instance.
 *
 * @param  \\Illuminate\\Cache\\Repository  $repository
 * @return void
 */',
                'startLine' => 410,
                'endLine' => 419,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'refreshEventDispatcher' => [
                'name' => 'refreshEventDispatcher',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Re-set the event dispatcher on all resolved cache repositories.
 *
 * @return void
 */',
                'startLine' => 426,
                'endLine' => 429,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'getPrefix' => [
                'name' => 'getPrefix',
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
                        'startLine' => 437,
                        'endLine' => 437,
                        'startColumn' => 34,
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
 * Get the cache prefix.
 *
 * @param  array  $config
 * @return string
 */',
                'startLine' => 437,
                'endLine' => 440,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'getSerializableClasses' => [
                'name' => 'getSerializableClasses',
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
                        'startLine' => 448,
                        'endLine' => 448,
                        'startColumn' => 47,
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
 * Get the classes that should be allowed during unserialization.
 *
 * @param  array  $config
 * @return array|bool|null
 */',
                'startLine' => 448,
                'endLine' => 451,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'getConfig' => [
                'name' => 'getConfig',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 459,
                        'endLine' => 459,
                        'startColumn' => 34,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the cache connection configuration.
 *
 * @param  string  $name
 * @return array|null
 */',
                'startLine' => 459,
                'endLine' => 464,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'getDefaultDriver' => [
                'name' => 'getDefaultDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default cache driver name.
 *
 * @return string
 */',
                'startLine' => 471,
                'endLine' => 474,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'setDefaultDriver' => [
                'name' => 'setDefaultDriver',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 482,
                        'endLine' => 482,
                        'startColumn' => 38,
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
 * Set the default cache driver name.
 *
 * @param  string  $name
 * @return void
 */',
                'startLine' => 482,
                'endLine' => 485,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'forgetDriver' => [
                'name' => 'forgetDriver',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 493,
                                'endLine' => 493,
                                'startTokenPos' => 2049,
                                'startFilePos' => 12998,
                                'endTokenPos' => 2049,
                                'endFilePos' => 13001,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 493,
                        'endLine' => 493,
                        'startColumn' => 34,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Unset the given driver instances.
 *
 * @param  array|string|null  $name
 * @return $this
 */',
                'startLine' => 493,
                'endLine' => 504,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'purge' => [
                'name' => 'purge',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 512,
                                'endLine' => 512,
                                'startTokenPos' => 2129,
                                'startFilePos' => 13435,
                                'endTokenPos' => 2129,
                                'endFilePos' => 13438,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 512,
                        'endLine' => 512,
                        'startColumn' => 27,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Disconnect the given driver and remove from local cache.
 *
 * @param  string|null  $name
 * @return void
 */',
                'startLine' => 512,
                'endLine' => 517,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'extend' => [
                'name' => 'extend',
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
                        'startLine' => 529,
                        'endLine' => 529,
                        'startColumn' => 28,
                        'endColumn' => 34,
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
                        'startLine' => 529,
                        'endLine' => 529,
                        'startColumn' => 37,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a custom driver creator Closure.
 *
 * @param  string  $driver
 * @param  \\Closure  $callback
 *
 * @param-closure-this  $this  $callback
 *
 * @return $this
 */',
                'startLine' => 529,
                'endLine' => 534,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            'setApplication' => [
                'name' => 'setApplication',
                'parameters' => [
                    'app' => [
                        'name' => 'app',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 542,
                        'endLine' => 542,
                        'startColumn' => 36,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the application instance used by the manager.
 *
 * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
 * @return $this
 */',
                'startLine' => 542,
                'endLine' => 547,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
                'aliasName' => null,
            ],
            '__call' => [
                'name' => '__call',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 556,
                        'endLine' => 556,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 556,
                        'endLine' => 556,
                        'startColumn' => 37,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dynamically call the default driver instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 556,
                'endLine' => 559,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
                'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
                'currentClassName' => 'Illuminate\\Cache\\CacheManager',
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
