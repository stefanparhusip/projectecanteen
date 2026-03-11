<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/Factory.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Client\Factory
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-a29343855cc33b2b39b237694634b3cd3e418c379993660a73cee3402bee5afa-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Http\\Client\\Factory',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/Factory.php',
            ],
        ],
        'namespace' => 'Illuminate\\Http\\Client',
        'name' => 'Illuminate\\Http\\Client\\Factory',
        'shortName' => 'Factory',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @mixin \\Illuminate\\Http\\Client\\PendingRequest
 */',
        'attributes' => [
        ],
        'startLine' => 21,
        'endLine' => 557,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'dispatcher' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'name' => 'dispatcher',
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
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'globalMiddleware' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'name' => 'globalMiddleware',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 39,
                        'endLine' => 39,
                        'startTokenPos' => 113,
                        'startFilePos' => 868,
                        'endTokenPos' => 114,
                        'endFilePos' => 869,
                    ],
                ],
                'docComment' => '/**
 * The middleware to apply to every request.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 39,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'globalOptions' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'name' => 'globalOptions',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 46,
                        'endLine' => 46,
                        'startTokenPos' => 125,
                        'startFilePos' => 1000,
                        'endTokenPos' => 126,
                        'endFilePos' => 1001,
                    ],
                ],
                'docComment' => '/**
 * The options to apply to every request.
 *
 * @var \\Closure|array
 */',
                'attributes' => [
                ],
                'startLine' => 46,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'stubCallbacks' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'name' => 'stubCallbacks',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The stub callables that will handle requests.
 *
 * @var \\Illuminate\\Support\\Collection
 */',
                'attributes' => [
                ],
                'startLine' => 53,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'recording' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'name' => 'recording',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 60,
                        'endLine' => 60,
                        'startTokenPos' => 144,
                        'startFilePos' => 1291,
                        'endTokenPos' => 144,
                        'endFilePos' => 1295,
                    ],
                ],
                'docComment' => '/**
 * Indicates if the factory is recording requests and responses.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 60,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'recorded' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'name' => 'recorded',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 67,
                        'endLine' => 67,
                        'startTokenPos' => 155,
                        'startFilePos' => 1486,
                        'endTokenPos' => 156,
                        'endFilePos' => 1487,
                    ],
                ],
                'docComment' => '/**
 * The recorded response array.
 *
 * @var list<array{0: \\Illuminate\\Http\\Client\\Request, 1: \\Illuminate\\Http\\Client\\Response|null}>
 */',
                'attributes' => [
                ],
                'startLine' => 67,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'responseSequences' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'name' => 'responseSequences',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 74,
                        'endLine' => 74,
                        'startTokenPos' => 167,
                        'startFilePos' => 1647,
                        'endTokenPos' => 168,
                        'endFilePos' => 1648,
                    ],
                ],
                'docComment' => '/**
 * All created response sequences.
 *
 * @var list<\\Illuminate\\Http\\Client\\ResponseSequence>
 */',
                'attributes' => [
                ],
                'startLine' => 74,
                'endLine' => 74,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'preventStrayRequests' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'name' => 'preventStrayRequests',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 81,
                        'endLine' => 81,
                        'startTokenPos' => 179,
                        'startFilePos' => 1811,
                        'endTokenPos' => 179,
                        'endFilePos' => 1815,
                    ],
                ],
                'docComment' => '/**
 * Indicates that an exception should be thrown if any request is not faked.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 81,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 44,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'allowedStrayRequestUrls' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'name' => 'allowedStrayRequestUrls',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 88,
                        'endLine' => 88,
                        'startTokenPos' => 190,
                        'startFilePos' => 1996,
                        'endTokenPos' => 191,
                        'endFilePos' => 1997,
                    ],
                ],
                'docComment' => '/**
 * A list of URL patterns that are allowed to bypass the stray request guard.
 *
 * @var array<int, string>
 */',
                'attributes' => [
                ],
                'startLine' => 88,
                'endLine' => 88,
                'startColumn' => 5,
                'endColumn' => 44,
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
                    'dispatcher' => [
                        'name' => 'dispatcher',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 95,
                                'endLine' => 95,
                                'startTokenPos' => 209,
                                'startFilePos' => 2193,
                                'endTokenPos' => 209,
                                'endFilePos' => 2196,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'null',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 95,
                        'endLine' => 95,
                        'startColumn' => 33,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new factory instance.
 *
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher|null  $dispatcher
 */',
                'startLine' => 95,
                'endLine' => 100,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'globalMiddleware' => [
                'name' => 'globalMiddleware',
                'parameters' => [
                    'middleware' => [
                        'name' => 'middleware',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 108,
                        'endLine' => 108,
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
 * Add middleware to apply to every request.
 *
 * @param  callable  $middleware
 * @return $this
 */',
                'startLine' => 108,
                'endLine' => 113,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'globalRequestMiddleware' => [
                'name' => 'globalRequestMiddleware',
                'parameters' => [
                    'middleware' => [
                        'name' => 'middleware',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 121,
                        'endLine' => 121,
                        'startColumn' => 45,
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
 * Add request middleware to apply to every request.
 *
 * @param  callable  $middleware
 * @return $this
 */',
                'startLine' => 121,
                'endLine' => 126,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'globalResponseMiddleware' => [
                'name' => 'globalResponseMiddleware',
                'parameters' => [
                    'middleware' => [
                        'name' => 'middleware',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 46,
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
 * Add response middleware to apply to every request.
 *
 * @param  callable  $middleware
 * @return $this
 */',
                'startLine' => 134,
                'endLine' => 139,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'globalOptions' => [
                'name' => 'globalOptions',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 147,
                        'endLine' => 147,
                        'startColumn' => 35,
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
 * Set the options to apply to every request.
 *
 * @param  \\Closure|array  $options
 * @return $this
 */',
                'startLine' => 147,
                'endLine' => 152,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'response' => [
                'name' => 'response',
                'parameters' => [
                    'body' => [
                        'name' => 'body',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 162,
                                'endLine' => 162,
                                'startTokenPos' => 382,
                                'startFilePos' => 3713,
                                'endTokenPos' => 382,
                                'endFilePos' => 3716,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 162,
                        'endLine' => 162,
                        'startColumn' => 37,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'status' => [
                        'name' => 'status',
                        'default' => [
                            'code' => '200',
                            'attributes' => [
                                'startLine' => 162,
                                'endLine' => 162,
                                'startTokenPos' => 389,
                                'startFilePos' => 3729,
                                'endTokenPos' => 389,
                                'endFilePos' => 3731,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 162,
                        'endLine' => 162,
                        'startColumn' => 51,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 162,
                                'endLine' => 162,
                                'startTokenPos' => 396,
                                'startFilePos' => 3745,
                                'endTokenPos' => 397,
                                'endFilePos' => 3746,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 162,
                        'endLine' => 162,
                        'startColumn' => 66,
                        'endColumn' => 78,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new response instance for use during stubbing.
 *
 * @param  array|string|null  $body
 * @param  int  $status
 * @param  array  $headers
 * @return \\GuzzleHttp\\Promise\\PromiseInterface
 */',
                'startLine' => 162,
                'endLine' => 167,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'psr7Response' => [
                'name' => 'psr7Response',
                'parameters' => [
                    'body' => [
                        'name' => 'body',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 177,
                                'endLine' => 177,
                                'startTokenPos' => 441,
                                'startFilePos' => 4162,
                                'endTokenPos' => 441,
                                'endFilePos' => 4165,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 177,
                        'endLine' => 177,
                        'startColumn' => 41,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'status' => [
                        'name' => 'status',
                        'default' => [
                            'code' => '200',
                            'attributes' => [
                                'startLine' => 177,
                                'endLine' => 177,
                                'startTokenPos' => 448,
                                'startFilePos' => 4178,
                                'endTokenPos' => 448,
                                'endFilePos' => 4180,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 177,
                        'endLine' => 177,
                        'startColumn' => 55,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 177,
                                'endLine' => 177,
                                'startTokenPos' => 455,
                                'startFilePos' => 4194,
                                'endTokenPos' => 456,
                                'endFilePos' => 4195,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 177,
                        'endLine' => 177,
                        'startColumn' => 70,
                        'endColumn' => 82,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new PSR-7 response instance for use during stubbing.
 *
 * @param  array|string|null  $body
 * @param  int  $status
 * @param  array<string, mixed>  $headers
 * @return \\GuzzleHttp\\Psr7\\Response
 */',
                'startLine' => 177,
                'endLine' => 186,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'failedRequest' => [
                'name' => 'failedRequest',
                'parameters' => [
                    'body' => [
                        'name' => 'body',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 196,
                                'endLine' => 196,
                                'startTokenPos' => 526,
                                'startFilePos' => 4725,
                                'endTokenPos' => 526,
                                'endFilePos' => 4728,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 196,
                        'endLine' => 196,
                        'startColumn' => 42,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'status' => [
                        'name' => 'status',
                        'default' => [
                            'code' => '200',
                            'attributes' => [
                                'startLine' => 196,
                                'endLine' => 196,
                                'startTokenPos' => 533,
                                'startFilePos' => 4741,
                                'endTokenPos' => 533,
                                'endFilePos' => 4743,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 196,
                        'endLine' => 196,
                        'startColumn' => 56,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 196,
                                'endLine' => 196,
                                'startTokenPos' => 540,
                                'startFilePos' => 4757,
                                'endTokenPos' => 541,
                                'endFilePos' => 4758,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 196,
                        'endLine' => 196,
                        'startColumn' => 71,
                        'endColumn' => 83,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new RequestException instance for use during stubbing.
 *
 * @param  array|string|null  $body
 * @param  int  $status
 * @param  array<string, mixed>  $headers
 * @return \\Illuminate\\Http\\Client\\RequestException
 */',
                'startLine' => 196,
                'endLine' => 199,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'failedConnection' => [
                'name' => 'failedConnection',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 207,
                                'endLine' => 207,
                                'startTokenPos' => 588,
                                'startFilePos' => 5149,
                                'endTokenPos' => 588,
                                'endFilePos' => 5152,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 45,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new connection exception for use during stubbing.
 *
 * @param  string|null  $message
 * @return \\Closure(\\Illuminate\\Http\\Client\\Request): \\GuzzleHttp\\Promise\\PromiseInterface
 */',
                'startLine' => 207,
                'endLine' => 215,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'sequence' => [
                'name' => 'sequence',
                'parameters' => [
                    'responses' => [
                        'name' => 'responses',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 223,
                                'endLine' => 223,
                                'startTokenPos' => 687,
                                'startFilePos' => 5829,
                                'endTokenPos' => 688,
                                'endFilePos' => 5830,
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
                        'startLine' => 223,
                        'endLine' => 223,
                        'startColumn' => 30,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an invokable object that returns a sequence of responses in order for use during stubbing.
 *
 * @param  array  $responses
 * @return \\Illuminate\\Http\\Client\\ResponseSequence
 */',
                'startLine' => 223,
                'endLine' => 226,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'fake' => [
                'name' => 'fake',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 234,
                                'endLine' => 234,
                                'startTokenPos' => 725,
                                'startFilePos' => 6165,
                                'endTokenPos' => 725,
                                'endFilePos' => 6168,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 234,
                        'endLine' => 234,
                        'startColumn' => 26,
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
 * Register a stub callable that will intercept requests and be able to return stub responses.
 *
 * @param  callable|array<string, mixed>|null  $callback
 * @return $this
 */',
                'startLine' => 234,
                'endLine' => 274,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'fakeSequence' => [
                'name' => 'fakeSequence',
                'parameters' => [
                    'url' => [
                        'name' => 'url',
                        'default' => [
                            'code' => '\'*\'',
                            'attributes' => [
                                'startLine' => 282,
                                'endLine' => 282,
                                'startTokenPos' => 973,
                                'startFilePos' => 7438,
                                'endTokenPos' => 973,
                                'endFilePos' => 7440,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 282,
                        'endLine' => 282,
                        'startColumn' => 34,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a response sequence for the given URL pattern.
 *
 * @param  string  $url
 * @return \\Illuminate\\Http\\Client\\ResponseSequence
 */',
                'startLine' => 282,
                'endLine' => 287,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'stubUrl' => [
                'name' => 'stubUrl',
                'parameters' => [
                    'url' => [
                        'name' => 'url',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 296,
                        'endLine' => 296,
                        'startColumn' => 29,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
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
                        'startLine' => 296,
                        'endLine' => 296,
                        'startColumn' => 35,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Stub the given URL using the given callback.
 *
 * @param  string  $url
 * @param  \\Illuminate\\Http\\Client\\Response|\\GuzzleHttp\\Promise\\PromiseInterface|callable|int|string|array|\\Illuminate\\Http\\Client\\ResponseSequence  $callback
 * @return $this
 */',
                'startLine' => 296,
                'endLine' => 317,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'preventStrayRequests' => [
                'name' => 'preventStrayRequests',
                'parameters' => [
                    'prevent' => [
                        'name' => 'prevent',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 325,
                                'endLine' => 325,
                                'startTokenPos' => 1228,
                                'startFilePos' => 8805,
                                'endTokenPos' => 1228,
                                'endFilePos' => 8808,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 325,
                        'endLine' => 325,
                        'startColumn' => 42,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that an exception should be thrown if any request is not faked.
 *
 * @param  bool  $prevent
 * @return $this
 */',
                'startLine' => 325,
                'endLine' => 330,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'preventingStrayRequests' => [
                'name' => 'preventingStrayRequests',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if stray requests are being prevented.
 *
 * @return bool
 */',
                'startLine' => 337,
                'endLine' => 340,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'allowStrayRequests' => [
                'name' => 'allowStrayRequests',
                'parameters' => [
                    'only' => [
                        'name' => 'only',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 348,
                                'endLine' => 348,
                                'startTokenPos' => 1285,
                                'startFilePos' => 9328,
                                'endTokenPos' => 1285,
                                'endFilePos' => 9331,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'array',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'null',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 348,
                        'endLine' => 348,
                        'startColumn' => 40,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Allow stray, unfaked requests entirely, or optionally allow only specific URLs.
 *
 * @param  array<int, string>|null  $only
 * @return $this
 */',
                'startLine' => 348,
                'endLine' => 359,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'record' => [
                'name' => 'record',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Begin recording request / response pairs.
 *
 * @return $this
 */',
                'startLine' => 366,
                'endLine' => 371,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'recordRequestResponsePair' => [
                'name' => 'recordRequestResponsePair',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 380,
                        'endLine' => 380,
                        'startColumn' => 47,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 380,
                        'endLine' => 380,
                        'startColumn' => 57,
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
 * Record a request response pair.
 *
 * @param  \\Illuminate\\Http\\Client\\Request  $request
 * @param  \\Illuminate\\Http\\Client\\Response|null  $response
 * @return void
 */',
                'startLine' => 380,
                'endLine' => 385,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'assertSent' => [
                'name' => 'assertSent',
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
                        'startLine' => 393,
                        'endLine' => 393,
                        'startColumn' => 32,
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
 * Assert that a request / response pair was recorded matching a given truth test.
 *
 * @param  callable|(\\Closure(\\Illuminate\\Http\\Client\\Request, \\Illuminate\\Http\\Client\\Response|null): bool)  $callback
 * @return void
 */',
                'startLine' => 393,
                'endLine' => 399,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'assertSentInOrder' => [
                'name' => 'assertSentInOrder',
                'parameters' => [
                    'callbacks' => [
                        'name' => 'callbacks',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 407,
                        'endLine' => 407,
                        'startColumn' => 39,
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
 * Assert that the given request was sent in the given order.
 *
 * @param  list<string|(\\Closure(\\Illuminate\\Http\\Client\\Request, \\Illuminate\\Http\\Client\\Response|null): bool)|callable>  $callbacks
 * @return void
 */',
                'startLine' => 407,
                'endLine' => 421,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'assertNotSent' => [
                'name' => 'assertNotSent',
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
                        'startLine' => 429,
                        'endLine' => 429,
                        'startColumn' => 35,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that a request / response pair was not recorded matching a given truth test.
 *
 * @param  callable|(\\Closure(\\Illuminate\\Http\\Client\\Request, \\Illuminate\\Http\\Client\\Response|null): bool)  $callback
 * @return void
 */',
                'startLine' => 429,
                'endLine' => 435,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'assertNothingSent' => [
                'name' => 'assertNothingSent',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that no request / response pair was recorded.
 *
 * @return void
 */',
                'startLine' => 442,
                'endLine' => 448,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'assertSentCount' => [
                'name' => 'assertSentCount',
                'parameters' => [
                    'count' => [
                        'name' => 'count',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 456,
                        'endLine' => 456,
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
 * Assert how many requests have been recorded.
 *
 * @param  int  $count
 * @return void
 */',
                'startLine' => 456,
                'endLine' => 459,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'assertSequencesAreEmpty' => [
                'name' => 'assertSequencesAreEmpty',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that every created response sequence is empty.
 *
 * @return void
 */',
                'startLine' => 466,
                'endLine' => 474,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'recorded' => [
                'name' => 'recorded',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 482,
                                'endLine' => 482,
                                'startTokenPos' => 1752,
                                'startFilePos' => 13147,
                                'endTokenPos' => 1752,
                                'endFilePos' => 13150,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 482,
                        'endLine' => 482,
                        'startColumn' => 30,
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
 * Get a collection of the request / response pairs matching the given truth test.
 *
 * @param  (\\Closure(\\Illuminate\\Http\\Client\\Request, \\Illuminate\\Http\\Client\\Response|null): bool)|callable  $callback
 * @return \\Illuminate\\Support\\Collection<int, array{0: \\Illuminate\\Http\\Client\\Request, 1: \\Illuminate\\Http\\Client\\Response|null}>
 */',
                'startLine' => 482,
                'endLine' => 495,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'createPendingRequest' => [
                'name' => 'createPendingRequest',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new pending request instance for this factory.
 *
 * @return \\Illuminate\\Http\\Client\\PendingRequest
 */',
                'startLine' => 502,
                'endLine' => 510,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'newPendingRequest' => [
                'name' => 'newPendingRequest',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Instantiate a new pending request instance for this factory.
 *
 * @return \\Illuminate\\Http\\Client\\PendingRequest
 */',
                'startLine' => 517,
                'endLine' => 520,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'getDispatcher' => [
                'name' => 'getDispatcher',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current event dispatcher implementation.
 *
 * @return \\Illuminate\\Contracts\\Events\\Dispatcher|null
 */',
                'startLine' => 527,
                'endLine' => 530,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
            'getGlobalMiddleware' => [
                'name' => 'getGlobalMiddleware',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the array of global middleware.
 *
 * @return array
 */',
                'startLine' => 537,
                'endLine' => 540,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
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
                        'startLine' => 549,
                        'endLine' => 549,
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
                        'startLine' => 549,
                        'endLine' => 549,
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
 * Execute a method against a new pending request instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 549,
                'endLine' => 556,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Factory',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Factory',
                'currentClassName' => 'Illuminate\\Http\\Client\\Factory',
                'aliasName' => null,
            ],
        ],
        'traitsData' => [
            'aliases' => [
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
                'illuminate\\support\\traits\\macroable::__call' => 'Illuminate\\Support\\Traits\\Macroable::__call',
            ],
        ],
    ],
]);
