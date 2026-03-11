<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Auth/AuthManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Auth\AuthManager
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-e9b940e980a044d1c376a1d23156edb377c32070248d0f13b945b309f38b5b21-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Auth\\AuthManager',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Auth/AuthManager.php',
            ],
        ],
        'namespace' => 'Illuminate\\Auth',
        'name' => 'Illuminate\\Auth\\AuthManager',
        'shortName' => 'AuthManager',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @mixin \\Illuminate\\Contracts\\Auth\\Guard
 * @mixin \\Illuminate\\Contracts\\Auth\\StatefulGuard
 */',
        'attributes' => [
        ],
        'startLine' => 13,
        'endLine' => 336,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Auth\\Factory',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Auth\\CreatesUserProviders',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'app' => [
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
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
                'startLine' => 22,
                'endLine' => 22,
                'startColumn' => 5,
                'endColumn' => 19,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'customCreators' => [
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'name' => 'customCreators',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 29,
                        'endLine' => 29,
                        'startTokenPos' => 58,
                        'startFilePos' => 570,
                        'endTokenPos' => 59,
                        'endFilePos' => 571,
                    ],
                ],
                'docComment' => '/**
 * The registered custom driver creators.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 35,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'guards' => [
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'name' => 'guards',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 36,
                        'endLine' => 36,
                        'startTokenPos' => 70,
                        'startFilePos' => 679,
                        'endTokenPos' => 71,
                        'endFilePos' => 680,
                    ],
                ],
                'docComment' => '/**
 * The array of created "drivers".
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 36,
                'endLine' => 36,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'userResolver' => [
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'name' => 'userResolver',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The user resolver shared by various services.
 *
 * Determines the default user for Gate, Request, and the Authenticatable contract.
 *
 * @var \\Closure
 */',
                'attributes' => [
                ],
                'startLine' => 45,
                'endLine' => 45,
                'startColumn' => 5,
                'endColumn' => 28,
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
                        'startLine' => 52,
                        'endLine' => 52,
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
 * Create a new Auth manager instance.
 *
 * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
 */',
                'startLine' => 52,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
                'aliasName' => null,
            ],
            'guard' => [
                'name' => 'guard',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 65,
                                'endLine' => 65,
                                'startTokenPos' => 147,
                                'startFilePos' => 1433,
                                'endTokenPos' => 147,
                                'endFilePos' => 1436,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 65,
                        'endLine' => 65,
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
 * Attempt to get the guard from the local cache.
 *
 * @param  string|null  $name
 * @return \\Illuminate\\Contracts\\Auth\\Guard|\\Illuminate\\Contracts\\Auth\\StatefulGuard
 */',
                'startLine' => 65,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
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
                        'startLine' => 80,
                        'endLine' => 80,
                        'startColumn' => 32,
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
 * Resolve the given guard.
 *
 * @param  string  $name
 * @return \\Illuminate\\Contracts\\Auth\\Guard|\\Illuminate\\Contracts\\Auth\\StatefulGuard
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 80,
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
                'aliasName' => null,
            ],
            'callCustomCreator' => [
                'name' => 'callCustomCreator',
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
                        'startLine' => 110,
                        'endLine' => 110,
                        'startColumn' => 42,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 110,
                        'endLine' => 110,
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
 * Call a custom driver creator.
 *
 * @param  string  $name
 * @param  array  $config
 * @return mixed
 */',
                'startLine' => 110,
                'endLine' => 113,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
                'aliasName' => null,
            ],
            'createSessionDriver' => [
                'name' => 'createSessionDriver',
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
                        'startLine' => 122,
                        'endLine' => 122,
                        'startColumn' => 41,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'config' => [
                        'name' => 'config',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 122,
                        'endLine' => 122,
                        'startColumn' => 48,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a session based authentication guard.
 *
 * @param  string  $name
 * @param  array  $config
 * @return \\Illuminate\\Auth\\SessionGuard
 */',
                'startLine' => 122,
                'endLine' => 147,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
                'aliasName' => null,
            ],
            'createTokenDriver' => [
                'name' => 'createTokenDriver',
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
                        'startLine' => 156,
                        'endLine' => 156,
                        'startColumn' => 39,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'config' => [
                        'name' => 'config',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 156,
                        'endLine' => 156,
                        'startColumn' => 46,
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
 * Create a token based authentication guard.
 *
 * @param  string  $name
 * @param  array  $config
 * @return \\Illuminate\\Auth\\TokenGuard
 */',
                'startLine' => 156,
                'endLine' => 172,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
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
                        'startLine' => 180,
                        'endLine' => 180,
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
 * Get the guard configuration.
 *
 * @param  string  $name
 * @return array
 */',
                'startLine' => 180,
                'endLine' => 183,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
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
 * Get the default authentication driver name.
 *
 * @return string
 */',
                'startLine' => 190,
                'endLine' => 193,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
                'aliasName' => null,
            ],
            'shouldUse' => [
                'name' => 'shouldUse',
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
                        'startLine' => 201,
                        'endLine' => 201,
                        'startColumn' => 31,
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
 * Set the default guard driver the factory should serve.
 *
 * @param  string  $name
 * @return void
 */',
                'startLine' => 201,
                'endLine' => 208,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
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
                        'startLine' => 216,
                        'endLine' => 216,
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
 * Set the default authentication driver name.
 *
 * @param  string  $name
 * @return void
 */',
                'startLine' => 216,
                'endLine' => 219,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
                'aliasName' => null,
            ],
            'viaRequest' => [
                'name' => 'viaRequest',
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
                        'startLine' => 228,
                        'endLine' => 228,
                        'startColumn' => 32,
                        'endColumn' => 38,
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
                        'startLine' => 228,
                        'endLine' => 228,
                        'startColumn' => 41,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a new callback based request guard.
 *
 * @param  string  $driver
 * @param  callable  $callback
 * @return $this
 */',
                'startLine' => 228,
                'endLine' => 237,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
                'aliasName' => null,
            ],
            'userResolver' => [
                'name' => 'userResolver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the user resolver callback.
 *
 * @return \\Closure
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
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
                'aliasName' => null,
            ],
            'resolveUsersUsing' => [
                'name' => 'resolveUsersUsing',
                'parameters' => [
                    'userResolver' => [
                        'name' => 'userResolver',
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
                        'startLine' => 255,
                        'endLine' => 255,
                        'startColumn' => 39,
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
 * Set the callback to be used to resolve users.
 *
 * @param  \\Closure  $userResolver
 * @return $this
 */',
                'startLine' => 255,
                'endLine' => 260,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
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
                        'startLine' => 269,
                        'endLine' => 269,
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
                        'startLine' => 269,
                        'endLine' => 269,
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
 * @return $this
 */',
                'startLine' => 269,
                'endLine' => 274,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
                'aliasName' => null,
            ],
            'provider' => [
                'name' => 'provider',
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
                        'startLine' => 283,
                        'endLine' => 283,
                        'startColumn' => 30,
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
                        'startLine' => 283,
                        'endLine' => 283,
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
 * Register a custom provider creator Closure.
 *
 * @param  string  $name
 * @param  \\Closure  $callback
 * @return $this
 */',
                'startLine' => 283,
                'endLine' => 288,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
                'aliasName' => null,
            ],
            'hasResolvedGuards' => [
                'name' => 'hasResolvedGuards',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if any guards have already been resolved.
 *
 * @return bool
 */',
                'startLine' => 295,
                'endLine' => 298,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
                'aliasName' => null,
            ],
            'forgetGuards' => [
                'name' => 'forgetGuards',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Forget all of the resolved guard instances.
 *
 * @return $this
 */',
                'startLine' => 305,
                'endLine' => 310,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
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
                        'startLine' => 318,
                        'endLine' => 318,
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
                'startLine' => 318,
                'endLine' => 323,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
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
                        'startLine' => 332,
                        'endLine' => 332,
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
                        'startLine' => 332,
                        'endLine' => 332,
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
                'startLine' => 332,
                'endLine' => 335,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\AuthManager',
                'implementingClassName' => 'Illuminate\\Auth\\AuthManager',
                'currentClassName' => 'Illuminate\\Auth\\AuthManager',
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
