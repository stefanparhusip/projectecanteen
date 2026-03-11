<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../guzzlehttp/guzzle/src/HandlerStack.php-PHPStan\BetterReflection\Reflection\ReflectionClass-GuzzleHttp\HandlerStack
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-72bb3dc3d5d94eb7546c47254f809a9869b4848811f59ce43f9156b2e18e1d91-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'GuzzleHttp\\HandlerStack',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../guzzlehttp/guzzle/src/HandlerStack.php',
            ],
        ],
        'namespace' => 'GuzzleHttp',
        'name' => 'GuzzleHttp\\HandlerStack',
        'shortName' => 'HandlerStack',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Creates a composed Guzzle handler function by stacking middlewares on top of
 * an HTTP handler function.
 *
 * @final
 */',
        'attributes' => [
        ],
        'startLine' => 15,
        'endLine' => 275,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'handler' => [
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'name' => 'handler',
                'modifiers' => 4,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * @var (callable(RequestInterface, array): PromiseInterface)|null
 */',
                'attributes' => [
                ],
                'startLine' => 20,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'stack' => [
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'name' => 'stack',
                'modifiers' => 4,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 25,
                        'endLine' => 25,
                        'startTokenPos' => 45,
                        'startFilePos' => 559,
                        'endTokenPos' => 46,
                        'endFilePos' => 560,
                    ],
                ],
                'docComment' => '/**
 * @var array{(callable(callable(RequestInterface, array): PromiseInterface): callable), (string|null)}[]
 */',
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'cached' => [
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'name' => 'cached',
                'modifiers' => 4,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * @var (callable(RequestInterface, array): PromiseInterface)|null
 */',
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 20,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'create' => [
                'name' => 'create',
                'parameters' => [
                    'handler' => [
                        'name' => 'handler',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 47,
                                'endLine' => 47,
                                'startTokenPos' => 73,
                                'startFilePos' => 1557,
                                'endTokenPos' => 73,
                                'endFilePos' => 1560,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
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
                        'startLine' => 47,
                        'endLine' => 47,
                        'startColumn' => 35,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Creates a default handler stack that can be used by clients.
 *
 * The returned handler will wrap the provided handler or use the most
 * appropriate default handler for your system. The returned HandlerStack has
 * support for cookies, redirects, HTTP error exceptions, and preparing a body
 * before sending.
 *
 * The returned handler stack can be passed to a client in the "handler"
 * option.
 *
 * @param (callable(RequestInterface, array): PromiseInterface)|null $handler HTTP handler function to use with the stack. If no
 *                                                                            handler is provided, the best handler for your
 *                                                                            system will be utilized.
 */',
                'startLine' => 47,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
                'aliasName' => null,
            ],
            '__construct' => [
                'name' => '__construct',
                'parameters' => [
                    'handler' => [
                        'name' => 'handler',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 61,
                                'endLine' => 61,
                                'startTokenPos' => 184,
                                'startFilePos' => 2094,
                                'endTokenPos' => 184,
                                'endFilePos' => 2097,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
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
                        'startLine' => 61,
                        'endLine' => 61,
                        'startColumn' => 33,
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
 * @param (callable(RequestInterface, array): PromiseInterface)|null $handler Underlying HTTP handler.
 */',
                'startLine' => 61,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
                'aliasName' => null,
            ],
            '__invoke' => [
                'name' => '__invoke',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Psr\\Http\\Message\\RequestInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 71,
                        'endLine' => 71,
                        'startColumn' => 30,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
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
                        'startLine' => 71,
                        'endLine' => 71,
                        'startColumn' => 57,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Invokes the handler stack as a composed handler
 *
 * @return ResponseInterface|PromiseInterface
 */',
                'startLine' => 71,
                'endLine' => 76,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
                'aliasName' => null,
            ],
            '__toString' => [
                'name' => '__toString',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dumps a string representation of the stack.
 *
 * @return string
 */',
                'startLine' => 83,
                'endLine' => 106,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
                'aliasName' => null,
            ],
            'setHandler' => [
                'name' => 'setHandler',
                'parameters' => [
                    'handler' => [
                        'name' => 'handler',
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
                        'startLine' => 114,
                        'endLine' => 114,
                        'startColumn' => 32,
                        'endColumn' => 48,
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
 * Set the HTTP handler that actually returns a promise.
 *
 * @param callable(RequestInterface, array): PromiseInterface $handler Accepts a request and array of options and
 *                                                                     returns a Promise.
 */',
                'startLine' => 114,
                'endLine' => 118,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
                'aliasName' => null,
            ],
            'hasHandler' => [
                'name' => 'hasHandler',
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
 * Returns true if the builder has a handler.
 */',
                'startLine' => 123,
                'endLine' => 126,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
                'aliasName' => null,
            ],
            'unshift' => [
                'name' => 'unshift',
                'parameters' => [
                    'middleware' => [
                        'name' => 'middleware',
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
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 29,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 134,
                                'endLine' => 134,
                                'startTokenPos' => 522,
                                'startFilePos' => 4087,
                                'endTokenPos' => 522,
                                'endFilePos' => 4090,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 51,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Unshift a middleware to the bottom of the stack.
 *
 * @param callable(callable): callable $middleware Middleware function
 * @param string                       $name       Name to register for this middleware.
 */',
                'startLine' => 134,
                'endLine' => 138,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
                'aliasName' => null,
            ],
            'push' => [
                'name' => 'push',
                'parameters' => [
                    'middleware' => [
                        'name' => 'middleware',
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
                        'startLine' => 146,
                        'endLine' => 146,
                        'startColumn' => 26,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 146,
                                'endLine' => 146,
                                'startTokenPos' => 576,
                                'startFilePos' => 4505,
                                'endTokenPos' => 576,
                                'endFilePos' => 4506,
                            ],
                        ],
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
                        'startColumn' => 48,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Push a middleware to the top of the stack.
 *
 * @param callable(callable): callable $middleware Middleware function
 * @param string                       $name       Name to register for this middleware.
 */',
                'startLine' => 146,
                'endLine' => 150,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
                'aliasName' => null,
            ],
            'before' => [
                'name' => 'before',
                'parameters' => [
                    'findName' => [
                        'name' => 'findName',
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
                        'startLine' => 159,
                        'endLine' => 159,
                        'startColumn' => 28,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'middleware' => [
                        'name' => 'middleware',
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
                        'startLine' => 159,
                        'endLine' => 159,
                        'startColumn' => 46,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'withName' => [
                        'name' => 'withName',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 159,
                                'endLine' => 159,
                                'startTokenPos' => 635,
                                'startFilePos' => 5015,
                                'endTokenPos' => 635,
                                'endFilePos' => 5016,
                            ],
                        ],
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
                        'startLine' => 159,
                        'endLine' => 159,
                        'startColumn' => 68,
                        'endColumn' => 88,
                        'parameterIndex' => 2,
                        'isOptional' => true,
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
 * Add a middleware before another middleware by name.
 *
 * @param string                       $findName   Middleware to find
 * @param callable(callable): callable $middleware Middleware function
 * @param string                       $withName   Name to register for this middleware.
 */',
                'startLine' => 159,
                'endLine' => 162,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
                'aliasName' => null,
            ],
            'after' => [
                'name' => 'after',
                'parameters' => [
                    'findName' => [
                        'name' => 'findName',
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
                        'startLine' => 171,
                        'endLine' => 171,
                        'startColumn' => 27,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'middleware' => [
                        'name' => 'middleware',
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
                        'startLine' => 171,
                        'endLine' => 171,
                        'startColumn' => 45,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'withName' => [
                        'name' => 'withName',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 171,
                                'endLine' => 171,
                                'startTokenPos' => 686,
                                'startFilePos' => 5510,
                                'endTokenPos' => 686,
                                'endFilePos' => 5511,
                            ],
                        ],
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
                        'startLine' => 171,
                        'endLine' => 171,
                        'startColumn' => 67,
                        'endColumn' => 87,
                        'parameterIndex' => 2,
                        'isOptional' => true,
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
 * Add a middleware after another middleware by name.
 *
 * @param string                       $findName   Middleware to find
 * @param callable(callable): callable $middleware Middleware function
 * @param string                       $withName   Name to register for this middleware.
 */',
                'startLine' => 171,
                'endLine' => 174,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
                'aliasName' => null,
            ],
            'remove' => [
                'name' => 'remove',
                'parameters' => [
                    'remove' => [
                        'name' => 'remove',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 181,
                        'endLine' => 181,
                        'startColumn' => 28,
                        'endColumn' => 34,
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
 * Remove a middleware by instance or name from the stack.
 *
 * @param callable|string $remove Middleware to remove by instance or name.
 */',
                'startLine' => 181,
                'endLine' => 195,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
                'aliasName' => null,
            ],
            'resolve' => [
                'name' => 'resolve',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'callable',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Compose the middleware and handler into a single callable function.
 *
 * @return callable(RequestInterface, array): PromiseInterface
 */',
                'startLine' => 202,
                'endLine' => 218,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
                'aliasName' => null,
            ],
            'findByName' => [
                'name' => 'findByName',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
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
                        'startLine' => 220,
                        'endLine' => 220,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
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
                'docComment' => null,
                'startLine' => 220,
                'endLine' => 229,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
                'aliasName' => null,
            ],
            'splice' => [
                'name' => 'splice',
                'parameters' => [
                    'findName' => [
                        'name' => 'findName',
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
                        'startLine' => 234,
                        'endLine' => 234,
                        'startColumn' => 29,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'withName' => [
                        'name' => 'withName',
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
                        'startLine' => 234,
                        'endLine' => 234,
                        'startColumn' => 47,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'middleware' => [
                        'name' => 'middleware',
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
                        'startLine' => 234,
                        'endLine' => 234,
                        'startColumn' => 65,
                        'endColumn' => 84,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'before' => [
                        'name' => 'before',
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
                        'startLine' => 234,
                        'endLine' => 234,
                        'startColumn' => 87,
                        'endColumn' => 98,
                        'parameterIndex' => 3,
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
 * Splices a function into the middleware list at a specific position.
 */',
                'startLine' => 234,
                'endLine' => 253,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
                'aliasName' => null,
            ],
            'debugCallable' => [
                'name' => 'debugCallable',
                'parameters' => [
                    'fn' => [
                        'name' => 'fn',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 260,
                        'endLine' => 260,
                        'startColumn' => 36,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
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
 * Provides a debug string for a given callable.
 *
 * @param callable|string $fn Function to write as a string.
 */',
                'startLine' => 260,
                'endLine' => 274,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\HandlerStack',
                'implementingClassName' => 'GuzzleHttp\\HandlerStack',
                'currentClassName' => 'GuzzleHttp\\HandlerStack',
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
