<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Session/SessionManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Session\SessionManager
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-0734537ee89d202362ffc43ffd006ca05b016b595bd27a95628aab23ec1c3153-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Session\\SessionManager',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Session/SessionManager.php',
            ],
        ],
        'namespace' => 'Illuminate\\Session',
        'name' => 'Illuminate\\Session\\SessionManager',
        'shortName' => 'SessionManager',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @mixin \\Illuminate\\Session\\Store
 */',
        'attributes' => [
        ],
        'startLine' => 10,
        'endLine' => 289,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Support\\Manager',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'callCustomCreator' => [
                'name' => 'callCustomCreator',
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
                        'startLine' => 18,
                        'endLine' => 18,
                        'startColumn' => 42,
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
 * Call a custom driver creator.
 *
 * @param  string  $driver
 * @return \\Illuminate\\Session\\Store
 */',
                'startLine' => 18,
                'endLine' => 21,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
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
 * Create an instance of the "null" session driver.
 *
 * @return \\Illuminate\\Session\\Store
 */',
                'startLine' => 28,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'createArrayDriver' => [
                'name' => 'createArrayDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the "array" session driver.
 *
 * @return \\Illuminate\\Session\\Store
 */',
                'startLine' => 38,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'createCookieDriver' => [
                'name' => 'createCookieDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the "cookie" session driver.
 *
 * @return \\Illuminate\\Session\\Store
 */',
                'startLine' => 50,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'createFileDriver' => [
                'name' => 'createFileDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the file session driver.
 *
 * @return \\Illuminate\\Session\\Store
 */',
                'startLine' => 64,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'createNativeDriver' => [
                'name' => 'createNativeDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the file session driver.
 *
 * @return \\Illuminate\\Session\\Store
 */',
                'startLine' => 74,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'createDatabaseDriver' => [
                'name' => 'createDatabaseDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the database session driver.
 *
 * @return \\Illuminate\\Session\\Store
 */',
                'startLine' => 88,
                'endLine' => 97,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'getDatabaseConnection' => [
                'name' => 'getDatabaseConnection',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the database connection for the database driver.
 *
 * @return \\Illuminate\\Database\\Connection
 */',
                'startLine' => 104,
                'endLine' => 109,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'createApcDriver' => [
                'name' => 'createApcDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the APC session driver.
 *
 * @return \\Illuminate\\Session\\Store
 */',
                'startLine' => 116,
                'endLine' => 119,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'createMemcachedDriver' => [
                'name' => 'createMemcachedDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the Memcached session driver.
 *
 * @return \\Illuminate\\Session\\Store
 */',
                'startLine' => 126,
                'endLine' => 129,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'createRedisDriver' => [
                'name' => 'createRedisDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the Redis session driver.
 *
 * @return \\Illuminate\\Session\\Store
 */',
                'startLine' => 136,
                'endLine' => 145,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'createDynamodbDriver' => [
                'name' => 'createDynamodbDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the DynamoDB session driver.
 *
 * @return \\Illuminate\\Session\\Store
 */',
                'startLine' => 152,
                'endLine' => 155,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'createCacheBased' => [
                'name' => 'createCacheBased',
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
                        'startLine' => 163,
                        'endLine' => 163,
                        'startColumn' => 41,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of a cache driven driver.
 *
 * @param  string  $driver
 * @return \\Illuminate\\Session\\Store
 */',
                'startLine' => 163,
                'endLine' => 166,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'createCacheHandler' => [
                'name' => 'createCacheHandler',
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
                        'startLine' => 174,
                        'endLine' => 174,
                        'startColumn' => 43,
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
 * Create the cache based session handler instance.
 *
 * @param  string  $driver
 * @return \\Illuminate\\Session\\CacheBasedSessionHandler
 */',
                'startLine' => 174,
                'endLine' => 182,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'buildSession' => [
                'name' => 'buildSession',
                'parameters' => [
                    'handler' => [
                        'name' => 'handler',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 190,
                        'endLine' => 190,
                        'startColumn' => 37,
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
 * Build the session instance.
 *
 * @param  \\SessionHandlerInterface  $handler
 * @return \\Illuminate\\Session\\Store
 */',
                'startLine' => 190,
                'endLine' => 200,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'buildEncryptedSession' => [
                'name' => 'buildEncryptedSession',
                'parameters' => [
                    'handler' => [
                        'name' => 'handler',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 208,
                        'endLine' => 208,
                        'startColumn' => 46,
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
 * Build the encrypted session instance.
 *
 * @param  \\SessionHandlerInterface  $handler
 * @return \\Illuminate\\Session\\EncryptedStore
 */',
                'startLine' => 208,
                'endLine' => 217,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'shouldBlock' => [
                'name' => 'shouldBlock',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if requests for the same session should wait for each to finish before executing.
 *
 * @return bool
 */',
                'startLine' => 224,
                'endLine' => 227,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'blockDriver' => [
                'name' => 'blockDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the cache store / driver that should be used to acquire session locks.
 *
 * @return string|null
 */',
                'startLine' => 234,
                'endLine' => 237,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'defaultRouteBlockLockSeconds' => [
                'name' => 'defaultRouteBlockLockSeconds',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the maximum number of seconds the session lock should be held for.
 *
 * @return int
 */',
                'startLine' => 244,
                'endLine' => 247,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'defaultRouteBlockWaitSeconds' => [
                'name' => 'defaultRouteBlockWaitSeconds',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the maximum number of seconds to wait while attempting to acquire a route block session lock.
 *
 * @return int
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
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
                'aliasName' => null,
            ],
            'getSessionConfig' => [
                'name' => 'getSessionConfig',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the session configuration.
 *
 * @return array
 */',
                'startLine' => 264,
                'endLine' => 267,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
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
 * Get the default session driver name.
 *
 * @return string|null
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
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
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
                        'startLine' => 285,
                        'endLine' => 285,
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
 * Set the default session driver name.
 *
 * @param  string  $name
 * @return void
 */',
                'startLine' => 285,
                'endLine' => 288,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Session',
                'declaringClassName' => 'Illuminate\\Session\\SessionManager',
                'implementingClassName' => 'Illuminate\\Session\\SessionManager',
                'currentClassName' => 'Illuminate\\Session\\SessionManager',
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
