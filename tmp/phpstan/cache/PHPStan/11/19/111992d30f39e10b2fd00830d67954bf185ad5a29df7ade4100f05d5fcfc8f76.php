<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/Repository.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Cache\Repository
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-d9f8389a671560e14cff7d484d81ff7211ee8e0f7a8aaa9a055b5230ec41f60c-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Cache\\Repository',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/Repository.php',
            ],
        ],
        'namespace' => 'Illuminate\\Cache',
        'name' => 'Illuminate\\Cache\\Repository',
        'shortName' => 'Repository',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @mixin \\Illuminate\\Contracts\\Cache\\Store
 */',
        'attributes' => [
        ],
        'startLine' => 40,
        'endLine' => 991,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'ArrayAccess',
            1 => 'Illuminate\\Contracts\\Cache\\Repository',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\InteractsWithTime',
            1 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'store' => [
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'name' => 'store',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The cache store implementation.
 *
 * @var \\Illuminate\\Contracts\\Cache\\Store
 */',
                'attributes' => [
                ],
                'startLine' => 51,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'events' => [
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'name' => 'events',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The event dispatcher implementation.
 *
 * @var \\Illuminate\\Contracts\\Events\\Dispatcher|null
 */',
                'attributes' => [
                ],
                'startLine' => 58,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'default' => [
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'name' => 'default',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '3600',
                    'attributes' => [
                        'startLine' => 65,
                        'endLine' => 65,
                        'startTokenPos' => 220,
                        'startFilePos' => 1810,
                        'endTokenPos' => 220,
                        'endFilePos' => 1813,
                    ],
                ],
                'docComment' => '/**
 * The default number of seconds to store items.
 *
 * @var int|null
 */',
                'attributes' => [
                ],
                'startLine' => 65,
                'endLine' => 65,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'config' => [
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'name' => 'config',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 72,
                        'endLine' => 72,
                        'startTokenPos' => 231,
                        'startFilePos' => 1928,
                        'endTokenPos' => 232,
                        'endFilePos' => 1929,
                    ],
                ],
                'docComment' => '/**
 * The cache store configuration options.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 72,
                'endLine' => 72,
                'startColumn' => 5,
                'endColumn' => 27,
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
                        'startLine' => 80,
                        'endLine' => 80,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'config' => [
                        'name' => 'config',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 80,
                                'endLine' => 80,
                                'startTokenPos' => 254,
                                'startFilePos' => 2152,
                                'endTokenPos' => 255,
                                'endFilePos' => 2153,
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
                        'startLine' => 80,
                        'endLine' => 80,
                        'startColumn' => 47,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new cache repository instance.
 *
 * @param  \\Illuminate\\Contracts\\Cache\\Store  $store
 * @param  array  $config
 */',
                'startLine' => 80,
                'endLine' => 84,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'has' => [
                'name' => 'has',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 92,
                        'endLine' => 92,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if an item exists in the cache.
 *
 * @param  \\UnitEnum|array|string  $key
 * @return bool
 */',
                'startLine' => 92,
                'endLine' => 95,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'missing' => [
                'name' => 'missing',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 103,
                        'endLine' => 103,
                        'startColumn' => 29,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if an item doesn\'t exist in the cache.
 *
 * @param  \\UnitEnum|string  $key
 * @return bool
 */',
                'startLine' => 103,
                'endLine' => 106,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'get' => [
                'name' => 'get',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 115,
                        'endLine' => 115,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 115,
                                'endLine' => 115,
                                'startTokenPos' => 355,
                                'startFilePos' => 2888,
                                'endTokenPos' => 355,
                                'endFilePos' => 2891,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 115,
                        'endLine' => 115,
                        'startColumn' => 31,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Retrieve an item from the cache by key.
 *
 * @param  \\UnitEnum|array|string  $key
 * @param  mixed  $default
 * @return mixed
 */',
                'startLine' => 115,
                'endLine' => 139,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'many' => [
                'name' => 'many',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
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
                        'startLine' => 149,
                        'endLine' => 149,
                        'startColumn' => 26,
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
 * Retrieve multiple items from the cache by key.
 *
 * Items not found in the cache will have a null value.
 *
 * @param  array  $keys
 * @return array
 */',
                'startLine' => 149,
                'endLine' => 162,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'getMultiple' => [
                'name' => 'getMultiple',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 169,
                        'endLine' => 169,
                        'startColumn' => 33,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 169,
                                'endLine' => 169,
                                'startTokenPos' => 680,
                                'startFilePos' => 4446,
                                'endTokenPos' => 680,
                                'endFilePos' => 4449,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 169,
                        'endLine' => 169,
                        'startColumn' => 40,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'iterable',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * {@inheritdoc}
 *
 * @return iterable
 */',
                'startLine' => 169,
                'endLine' => 178,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'handleManyResult' => [
                'name' => 'handleManyResult',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 188,
                        'endLine' => 188,
                        'startColumn' => 41,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 188,
                        'endLine' => 188,
                        'startColumn' => 48,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 188,
                        'endLine' => 188,
                        'startColumn' => 54,
                        'endColumn' => 59,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Handle a result for the "many" method.
 *
 * @param  array  $keys
 * @param  string  $key
 * @param  mixed  $value
 * @return mixed
 */',
                'startLine' => 188,
                'endLine' => 205,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'pull' => [
                'name' => 'pull',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 214,
                        'endLine' => 214,
                        'startColumn' => 26,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 214,
                                'endLine' => 214,
                                'startTokenPos' => 880,
                                'startFilePos' => 5903,
                                'endTokenPos' => 880,
                                'endFilePos' => 5906,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 214,
                        'endLine' => 214,
                        'startColumn' => 32,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve an item from the cache and delete it.
 *
 * @param  \\UnitEnum|array|string  $key
 * @param  mixed  $default
 * @return mixed
 */',
                'startLine' => 214,
                'endLine' => 219,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'string' => [
                'name' => 'string',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 230,
                        'endLine' => 230,
                        'startColumn' => 28,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 230,
                                'endLine' => 230,
                                'startTokenPos' => 942,
                                'startFilePos' => 6324,
                                'endTokenPos' => 942,
                                'endFilePos' => 6327,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 230,
                        'endLine' => 230,
                        'startColumn' => 34,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
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
 * Retrieve a string item from the cache.
 *
 * @param  \\UnitEnum|string  $key
 * @param  (\\Closure():(string|null))|string|null  $default
 * @return string
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 230,
                'endLine' => 241,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'integer' => [
                'name' => 'integer',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 252,
                        'endLine' => 252,
                        'startColumn' => 29,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 252,
                                'endLine' => 252,
                                'startTokenPos' => 1026,
                                'startFilePos' => 6911,
                                'endTokenPos' => 1026,
                                'endFilePos' => 6914,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 252,
                        'endLine' => 252,
                        'startColumn' => 35,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve an integer item from the cache.
 *
 * @param  \\UnitEnum|string  $key
 * @param  (\\Closure():(int|null))|int|null  $default
 * @return int
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 252,
                'endLine' => 267,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'float' => [
                'name' => 'float',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 278,
                        'endLine' => 278,
                        'startColumn' => 27,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 278,
                                'endLine' => 278,
                                'startTokenPos' => 1135,
                                'startFilePos' => 7594,
                                'endTokenPos' => 1135,
                                'endFilePos' => 7597,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 278,
                        'endLine' => 278,
                        'startColumn' => 33,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'float',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve a float item from the cache.
 *
 * @param  \\UnitEnum|string  $key
 * @param  (\\Closure():(float|null))|float|null  $default
 * @return float
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 278,
                'endLine' => 293,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'boolean' => [
                'name' => 'boolean',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 304,
                        'endLine' => 304,
                        'startColumn' => 29,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 304,
                                'endLine' => 304,
                                'startTokenPos' => 1244,
                                'startFilePos' => 8283,
                                'endTokenPos' => 1244,
                                'endFilePos' => 8286,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 304,
                        'endLine' => 304,
                        'startColumn' => 35,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve a boolean item from the cache.
 *
 * @param  \\UnitEnum|string  $key
 * @param  (\\Closure():(bool|null))|bool|null  $default
 * @return bool
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 304,
                'endLine' => 315,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'array' => [
                'name' => 'array',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 326,
                        'endLine' => 326,
                        'startColumn' => 27,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 326,
                                'endLine' => 326,
                                'startTokenPos' => 1328,
                                'startFilePos' => 8923,
                                'endTokenPos' => 1328,
                                'endFilePos' => 8926,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 326,
                        'endLine' => 326,
                        'startColumn' => 33,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve an array item from the cache.
 *
 * @param  \\UnitEnum|string  $key
 * @param  (\\Closure():(array<array-key, mixed>|null))|array<array-key, mixed>|null  $default
 * @return array<array-key, mixed>
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 326,
                'endLine' => 337,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'put' => [
                'name' => 'put',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 347,
                        'endLine' => 347,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 347,
                        'endLine' => 347,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'ttl' => [
                        'name' => 'ttl',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 347,
                                'endLine' => 347,
                                'startTokenPos' => 1415,
                                'startFilePos' => 9488,
                                'endTokenPos' => 1415,
                                'endFilePos' => 9491,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 347,
                        'endLine' => 347,
                        'startColumn' => 39,
                        'endColumn' => 49,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Store an item in the cache.
 *
 * @param  \\UnitEnum|array|string  $key
 * @param  mixed  $value
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $ttl
 * @return bool
 */',
                'startLine' => 347,
                'endLine' => 376,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'set' => [
                'name' => 'set',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 386,
                        'endLine' => 386,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 386,
                        'endLine' => 386,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'ttl' => [
                        'name' => 'ttl',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 386,
                                'endLine' => 386,
                                'startTokenPos' => 1663,
                                'startFilePos' => 10510,
                                'endTokenPos' => 1663,
                                'endFilePos' => 10513,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 386,
                        'endLine' => 386,
                        'startColumn' => 39,
                        'endColumn' => 49,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Store an item in the cache.
 *
 * @param  \\UnitEnum|array|string  $key
 * @param  mixed  $value
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $ttl
 * @return bool
 */',
                'startLine' => 386,
                'endLine' => 389,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'putMany' => [
                'name' => 'putMany',
                'parameters' => [
                    'values' => [
                        'name' => 'values',
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
                        'startLine' => 398,
                        'endLine' => 398,
                        'startColumn' => 29,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ttl' => [
                        'name' => 'ttl',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 398,
                                'endLine' => 398,
                                'startTokenPos' => 1706,
                                'startFilePos' => 10840,
                                'endTokenPos' => 1706,
                                'endFilePos' => 10843,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 398,
                        'endLine' => 398,
                        'startColumn' => 44,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Store multiple items in the cache for a given number of seconds.
 *
 * @param  array  $values
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $ttl
 * @return bool
 */',
                'startLine' => 398,
                'endLine' => 423,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'putManyForever' => [
                'name' => 'putManyForever',
                'parameters' => [
                    'values' => [
                        'name' => 'values',
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
                        'startLine' => 431,
                        'endLine' => 431,
                        'startColumn' => 39,
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
 * Store multiple items in the cache indefinitely.
 *
 * @param  array  $values
 * @return bool
 */',
                'startLine' => 431,
                'endLine' => 442,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'setMultiple' => [
                'name' => 'setMultiple',
                'parameters' => [
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 449,
                        'endLine' => 449,
                        'startColumn' => 33,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ttl' => [
                        'name' => 'ttl',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 449,
                                'endLine' => 449,
                                'startTokenPos' => 2005,
                                'startFilePos' => 12107,
                                'endTokenPos' => 2005,
                                'endFilePos' => 12110,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 449,
                        'endLine' => 449,
                        'startColumn' => 42,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * {@inheritdoc}
 *
 * @return bool
 */',
                'startLine' => 449,
                'endLine' => 452,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'add' => [
                'name' => 'add',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 462,
                        'endLine' => 462,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 462,
                        'endLine' => 462,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'ttl' => [
                        'name' => 'ttl',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 462,
                                'endLine' => 462,
                                'startTokenPos' => 2060,
                                'startFilePos' => 12512,
                                'endTokenPos' => 2060,
                                'endFilePos' => 12515,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 462,
                        'endLine' => 462,
                        'startColumn' => 39,
                        'endColumn' => 49,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Store an item in the cache if the key does not exist.
 *
 * @param  \\UnitEnum|array|string  $key
 * @param  mixed  $value
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $ttl
 * @return bool
 */',
                'startLine' => 462,
                'endLine' => 493,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'increment' => [
                'name' => 'increment',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 502,
                        'endLine' => 502,
                        'startColumn' => 31,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 502,
                                'endLine' => 502,
                                'startTokenPos' => 2238,
                                'startFilePos' => 13804,
                                'endTokenPos' => 2238,
                                'endFilePos' => 13804,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 502,
                        'endLine' => 502,
                        'startColumn' => 37,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Increment the value of an item in the cache.
 *
 * @param  \\UnitEnum|string  $key
 * @param  mixed  $value
 * @return int|bool
 */',
                'startLine' => 502,
                'endLine' => 505,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'decrement' => [
                'name' => 'decrement',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 514,
                        'endLine' => 514,
                        'startColumn' => 31,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 514,
                                'endLine' => 514,
                                'startTokenPos' => 2278,
                                'startFilePos' => 14097,
                                'endTokenPos' => 2278,
                                'endFilePos' => 14097,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 514,
                        'endLine' => 514,
                        'startColumn' => 37,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Decrement the value of an item in the cache.
 *
 * @param  \\UnitEnum|string  $key
 * @param  mixed  $value
 * @return int|bool
 */',
                'startLine' => 514,
                'endLine' => 517,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'forever' => [
                'name' => 'forever',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 526,
                        'endLine' => 526,
                        'startColumn' => 29,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 526,
                        'endLine' => 526,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Store an item in the cache indefinitely.
 *
 * @param  \\UnitEnum|string  $key
 * @param  mixed  $value
 * @return bool
 */',
                'startLine' => 526,
                'endLine' => 541,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'remember' => [
                'name' => 'remember',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 553,
                        'endLine' => 553,
                        'startColumn' => 30,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ttl' => [
                        'name' => 'ttl',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 553,
                        'endLine' => 553,
                        'startColumn' => 36,
                        'endColumn' => 39,
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
                        'startLine' => 553,
                        'endLine' => 553,
                        'startColumn' => 42,
                        'endColumn' => 58,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an item from the cache, or execute the given Closure and store the result.
 *
 * @template TCacheValue
 *
 * @param  \\UnitEnum|string  $key
 * @param  \\Closure|\\DateTimeInterface|\\DateInterval|int|null  $ttl
 * @param  \\Closure(): TCacheValue  $callback
 * @return TCacheValue
 */',
                'startLine' => 553,
                'endLine' => 569,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'sear' => [
                'name' => 'sear',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 580,
                        'endLine' => 580,
                        'startColumn' => 26,
                        'endColumn' => 29,
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
                        'startLine' => 580,
                        'endLine' => 580,
                        'startColumn' => 32,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an item from the cache, or execute the given Closure and store the result forever.
 *
 * @template TCacheValue
 *
 * @param  \\UnitEnum|string  $key
 * @param  \\Closure(): TCacheValue  $callback
 * @return TCacheValue
 */',
                'startLine' => 580,
                'endLine' => 583,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'rememberForever' => [
                'name' => 'rememberForever',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 594,
                        'endLine' => 594,
                        'startColumn' => 37,
                        'endColumn' => 40,
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
                        'startLine' => 594,
                        'endLine' => 594,
                        'startColumn' => 43,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an item from the cache, or execute the given Closure and store the result forever.
 *
 * @template TCacheValue
 *
 * @param  \\UnitEnum|string  $key
 * @param  \\Closure(): TCacheValue  $callback
 * @return TCacheValue
 */',
                'startLine' => 594,
                'endLine' => 608,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'flexible' => [
                'name' => 'flexible',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 622,
                        'endLine' => 622,
                        'startColumn' => 30,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ttl' => [
                        'name' => 'ttl',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 622,
                        'endLine' => 622,
                        'startColumn' => 36,
                        'endColumn' => 39,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 622,
                        'endLine' => 622,
                        'startColumn' => 42,
                        'endColumn' => 50,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'lock' => [
                        'name' => 'lock',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 622,
                                'endLine' => 622,
                                'startTokenPos' => 2672,
                                'startFilePos' => 17357,
                                'endTokenPos' => 2672,
                                'endFilePos' => 17360,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 622,
                        'endLine' => 622,
                        'startColumn' => 53,
                        'endColumn' => 64,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'alwaysDefer' => [
                        'name' => 'alwaysDefer',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 622,
                                'endLine' => 622,
                                'startTokenPos' => 2679,
                                'startFilePos' => 17378,
                                'endTokenPos' => 2679,
                                'endFilePos' => 17382,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 622,
                        'endLine' => 622,
                        'startColumn' => 67,
                        'endColumn' => 86,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve an item from the cache by key, refreshing it in the background if it is stale.
 *
 * @template TCacheValue
 *
 * @param  \\UnitEnum|string  $key
 * @param  array{ 0: \\DateTimeInterface|\\DateInterval|int, 1: \\DateTimeInterface|\\DateInterval|int }  $ttl
 * @param  (callable(): TCacheValue)  $callback
 * @param  array{ seconds?: int, owner?: string }|null  $lock
 * @param  bool  $alwaysDefer
 * @return TCacheValue
 */',
                'startLine' => 622,
                'endLine' => 662,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'withoutOverlapping' => [
                'name' => 'withoutOverlapping',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 678,
                        'endLine' => 678,
                        'startColumn' => 40,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
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
                        'startLine' => 678,
                        'endLine' => 678,
                        'startColumn' => 46,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'lockFor' => [
                        'name' => 'lockFor',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 678,
                                'endLine' => 678,
                                'startTokenPos' => 3078,
                                'startFilePos' => 19323,
                                'endTokenPos' => 3078,
                                'endFilePos' => 19323,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 678,
                        'endLine' => 678,
                        'startColumn' => 66,
                        'endColumn' => 77,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'waitFor' => [
                        'name' => 'waitFor',
                        'default' => [
                            'code' => '10',
                            'attributes' => [
                                'startLine' => 678,
                                'endLine' => 678,
                                'startTokenPos' => 3085,
                                'startFilePos' => 19337,
                                'endTokenPos' => 3085,
                                'endFilePos' => 19338,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 678,
                        'endLine' => 678,
                        'startColumn' => 80,
                        'endColumn' => 92,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'owner' => [
                        'name' => 'owner',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 678,
                                'endLine' => 678,
                                'startTokenPos' => 3092,
                                'startFilePos' => 19350,
                                'endTokenPos' => 3092,
                                'endFilePos' => 19353,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 678,
                        'endLine' => 678,
                        'startColumn' => 95,
                        'endColumn' => 107,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute a callback while holding an atomic lock on a cache mutex to prevent overlapping calls.
 *
 * @template TReturn
 *
 * @param  \\UnitEnum|string  $key
 * @param  callable(): TReturn  $callback
 * @param  int  $lockFor
 * @param  int  $waitFor
 * @param  string|null  $owner
 * @return TReturn
 *
 * @throws \\Illuminate\\Contracts\\Cache\\LockTimeoutException
 */',
                'startLine' => 678,
                'endLine' => 681,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'funnel' => [
                'name' => 'funnel',
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
                        'startLine' => 689,
                        'endLine' => 689,
                        'startColumn' => 28,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Funnel a callback for a maximum number of simultaneous executions.
 *
 * @param  \\UnitEnum|string  $name
 * @return \\Illuminate\\Cache\\Limiters\\ConcurrencyLimiterBuilder
 */',
                'startLine' => 689,
                'endLine' => 696,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'forget' => [
                'name' => 'forget',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 704,
                        'endLine' => 704,
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
 * Remove an item from the cache.
 *
 * @param  \\UnitEnum|array|string  $key
 * @return bool
 */',
                'startLine' => 704,
                'endLine' => 717,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'delete' => [
                'name' => 'delete',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 725,
                        'endLine' => 725,
                        'startColumn' => 28,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove an item from the cache.
 *
 * @param  \\UnitEnum|array|string  $key
 * @return bool
 */',
                'startLine' => 725,
                'endLine' => 728,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'deleteMultiple' => [
                'name' => 'deleteMultiple',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 735,
                        'endLine' => 735,
                        'startColumn' => 36,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * {@inheritdoc}
 *
 * @return bool
 */',
                'startLine' => 735,
                'endLine' => 746,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'clear' => [
                'name' => 'clear',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * {@inheritdoc}
 *
 * @return bool
 */',
                'startLine' => 753,
                'endLine' => 766,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'tags' => [
                'name' => 'tags',
                'parameters' => [
                    'names' => [
                        'name' => 'names',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 776,
                        'endLine' => 776,
                        'startColumn' => 26,
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
 * Begin executing a new tags operation if the store supports it.
 *
 * @param  mixed  $names
 * @return \\Illuminate\\Cache\\TaggedCache
 *
 * @throws \\BadMethodCallException
 */',
                'startLine' => 776,
                'endLine' => 791,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'itemKey' => [
                'name' => 'itemKey',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 799,
                        'endLine' => 799,
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
 * Format the key for a cache item.
 *
 * @param  string  $key
 * @return string
 */',
                'startLine' => 799,
                'endLine' => 802,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'getSeconds' => [
                'name' => 'getSeconds',
                'parameters' => [
                    'ttl' => [
                        'name' => 'ttl',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 810,
                        'endLine' => 810,
                        'startColumn' => 35,
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
 * Calculate the number of seconds for the given TTL.
 *
 * @param  \\DateTimeInterface|\\DateInterval|int  $ttl
 * @return int
 */',
                'startLine' => 810,
                'endLine' => 821,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
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
 * Get the name of the cache store.
 *
 * @return string|null
 */',
                'startLine' => 828,
                'endLine' => 831,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'supportsTags' => [
                'name' => 'supportsTags',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the current store supports tags.
 *
 * @return bool
 */',
                'startLine' => 838,
                'endLine' => 841,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'getDefaultCacheTime' => [
                'name' => 'getDefaultCacheTime',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default cache time.
 *
 * @return int|null
 */',
                'startLine' => 848,
                'endLine' => 851,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'setDefaultCacheTime' => [
                'name' => 'setDefaultCacheTime',
                'parameters' => [
                    'seconds' => [
                        'name' => 'seconds',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 859,
                        'endLine' => 859,
                        'startColumn' => 41,
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
 * Set the default cache time in seconds.
 *
 * @param  int|null  $seconds
 * @return $this
 */',
                'startLine' => 859,
                'endLine' => 864,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'getStore' => [
                'name' => 'getStore',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the cache store implementation.
 *
 * @return \\Illuminate\\Contracts\\Cache\\Store
 */',
                'startLine' => 871,
                'endLine' => 874,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'setStore' => [
                'name' => 'setStore',
                'parameters' => [
                    'store' => [
                        'name' => 'store',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 882,
                        'endLine' => 882,
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
 * Set the cache store implementation.
 *
 * @param  \\Illuminate\\Contracts\\Cache\\Store  $store
 * @return static
 */',
                'startLine' => 882,
                'endLine' => 887,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
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
                        'startLine' => 895,
                        'endLine' => 895,
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
 * Fire an event for this cache instance.
 *
 * @param  object|string  $event
 * @return void
 */',
                'startLine' => 895,
                'endLine' => 898,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
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
 * Get the event dispatcher instance.
 *
 * @return \\Illuminate\\Contracts\\Events\\Dispatcher|null
 */',
                'startLine' => 905,
                'endLine' => 908,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
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
                        'startLine' => 916,
                        'endLine' => 916,
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
 * Set the event dispatcher instance.
 *
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $events
 * @return void
 */',
                'startLine' => 916,
                'endLine' => 919,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'offsetExists' => [
                'name' => 'offsetExists',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 927,
                        'endLine' => 927,
                        'startColumn' => 34,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a cached value exists.
 *
 * @param  \\UnitEnum|string  $key
 * @return bool
 */',
                'startLine' => 927,
                'endLine' => 930,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'offsetGet' => [
                'name' => 'offsetGet',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 938,
                        'endLine' => 938,
                        'startColumn' => 31,
                        'endColumn' => 34,
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
 * Retrieve an item from the cache by key.
 *
 * @param  \\UnitEnum|string  $key
 * @return mixed
 */',
                'startLine' => 938,
                'endLine' => 941,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'offsetSet' => [
                'name' => 'offsetSet',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 950,
                        'endLine' => 950,
                        'startColumn' => 31,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 950,
                        'endLine' => 950,
                        'startColumn' => 37,
                        'endColumn' => 42,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Store an item in the cache for the default time.
 *
 * @param  \\UnitEnum|string  $key
 * @param  mixed  $value
 * @return void
 */',
                'startLine' => 950,
                'endLine' => 953,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
            'offsetUnset' => [
                'name' => 'offsetUnset',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 961,
                        'endLine' => 961,
                        'startColumn' => 33,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove an item from the cache.
 *
 * @param  \\UnitEnum|string  $key
 * @return void
 */',
                'startLine' => 961,
                'endLine' => 964,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
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
                        'startLine' => 973,
                        'endLine' => 973,
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
                        'startLine' => 973,
                        'endLine' => 973,
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
 * Handle dynamic calls into macros or pass missing methods to the store.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 973,
                'endLine' => 980,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
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
 * Clone cache repository instance.
 *
 * @return void
 */',
                'startLine' => 987,
                'endLine' => 990,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Cache\\Repository',
                'aliasName' => null,
            ],
        ],
        'traitsData' => [
            'aliases' => [
                'Illuminate\\Support\\InteractsWithTime' => [
                    0 => [
                        'alias' => 'macroCall',
                        'method' => '__call',
                        'hash' => 'illuminate\\support\\interactswithtime::__call',
                    ],
                ],
                'Illuminate\\Support\\Traits\\Macroable' => [
                    0 => [
                        'alias' => 'macroCall',
                        'method' => '__call',
                        'hash' => 'illuminate\\support\\traits\\macroable::__call',
                    ],
                ],
            ],
            'modifiers' => [
            ],
            'precedences' => [
            ],
            'hashes' => [
                'illuminate\\support\\interactswithtime::__call' => 'Illuminate\\Support\\InteractsWithTime::__call',
                'illuminate\\support\\traits\\macroable::__call' => 'Illuminate\\Support\\Traits\\Macroable::__call',
            ],
        ],
    ],
]);
