<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Request.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Request
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-b588e38f63b4050aeb78e8d0ba90bd5adebba883f5c7391153e457c34e73175d-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Http\\Request',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Request.php',
            ],
        ],
        'namespace' => 'Illuminate\\Http',
        'name' => 'Illuminate\\Http\\Request',
        'shortName' => 'Request',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @method array validate(array $rules, ...$params)
 * @method array validateWithBag(string $errorBag, array $rules, ...$params)
 * @method bool hasValidSignature(bool $absolute = true)
 * @method bool hasValidRelativeSignature()
 * @method bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
 * @method bool hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
 */',
        'attributes' => [
        ],
        'startLine' => 29,
        'endLine' => 843,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Support\\Arrayable',
            1 => 'ArrayAccess',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Http\\Concerns\\CanBePrecognitive',
            1 => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
            2 => 'Illuminate\\Http\\Concerns\\InteractsWithFlashData',
            3 => 'Illuminate\\Http\\Concerns\\InteractsWithInput',
            4 => 'Illuminate\\Support\\Traits\\Conditionable',
            5 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'json' => [
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'name' => 'json',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The decoded JSON content for the request.
 *
 * @var \\Symfony\\Component\\HttpFoundation\\InputBag|null
 */',
                'attributes' => [
                ],
                'startLine' => 43,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 20,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'convertedFiles' => [
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'name' => 'convertedFiles',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * All of the converted files for the request.
 *
 * @var array<int, \\Illuminate\\Http\\UploadedFile|\\Illuminate\\Http\\UploadedFile[]>
 */',
                'attributes' => [
                ],
                'startLine' => 50,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'userResolver' => [
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'name' => 'userResolver',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The user resolver callback.
 *
 * @var \\Closure
 */',
                'attributes' => [
                ],
                'startLine' => 57,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 28,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'routeResolver' => [
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'name' => 'routeResolver',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The route resolver callback.
 *
 * @var \\Closure
 */',
                'attributes' => [
                ],
                'startLine' => 64,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'cachedAcceptHeader' => [
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'name' => 'cachedAcceptHeader',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The cached "Accept" header value.
 *
 * @var string|null
 */',
                'attributes' => [
                ],
                'startLine' => 71,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'capture' => [
                'name' => 'capture',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new Illuminate HTTP request from server variables.
 *
 * @return static
 */',
                'startLine' => 78,
                'endLine' => 83,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'instance' => [
                'name' => 'instance',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the Request instance.
 *
 * @return $this
 */',
                'startLine' => 90,
                'endLine' => 93,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'method' => [
                'name' => 'method',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the request method.
 *
 * @return string
 */',
                'startLine' => 100,
                'endLine' => 103,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'uri' => [
                'name' => 'uri',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a URI instance for the request.
 *
 * @return \\Illuminate\\Support\\Uri
 */',
                'startLine' => 110,
                'endLine' => 113,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'root' => [
                'name' => 'root',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the root URL for the application.
 *
 * @return string
 */',
                'startLine' => 120,
                'endLine' => 123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'url' => [
                'name' => 'url',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the URL (no query string) for the request.
 *
 * @return string
 */',
                'startLine' => 130,
                'endLine' => 133,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'fullUrl' => [
                'name' => 'fullUrl',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the full URL for the request.
 *
 * @return string
 */',
                'startLine' => 140,
                'endLine' => 147,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'fullUrlWithQuery' => [
                'name' => 'fullUrlWithQuery',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
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
                        'startLine' => 155,
                        'endLine' => 155,
                        'startColumn' => 38,
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
 * Get the full URL for the request with the added query string parameters.
 *
 * @param  array  $query
 * @return string
 */',
                'startLine' => 155,
                'endLine' => 162,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'fullUrlWithoutQuery' => [
                'name' => 'fullUrlWithoutQuery',
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
                        'startLine' => 170,
                        'endLine' => 170,
                        'startColumn' => 41,
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
 * Get the full URL for the request without the given query string parameters.
 *
 * @param  array|string  $keys
 * @return string
 */',
                'startLine' => 170,
                'endLine' => 179,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'path' => [
                'name' => 'path',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current path info for the request.
 *
 * @return string
 */',
                'startLine' => 186,
                'endLine' => 191,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'decodedPath' => [
                'name' => 'decodedPath',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current decoded path info for the request.
 *
 * @return string
 */',
                'startLine' => 198,
                'endLine' => 201,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'segment' => [
                'name' => 'segment',
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
                        'startLine' => 210,
                        'endLine' => 210,
                        'startColumn' => 29,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 210,
                                'endLine' => 210,
                                'startTokenPos' => 714,
                                'startFilePos' => 5123,
                                'endTokenPos' => 714,
                                'endFilePos' => 5126,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 210,
                        'endLine' => 210,
                        'startColumn' => 37,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a segment from the URI (1 based index).
 *
 * @param  int  $index
 * @param  string|null  $default
 * @return string|null
 */',
                'startLine' => 210,
                'endLine' => 213,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'segments' => [
                'name' => 'segments',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the segments for the request path.
 *
 * @return array
 */',
                'startLine' => 220,
                'endLine' => 227,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'is' => [
                'name' => 'is',
                'parameters' => [
                    'patterns' => [
                        'name' => 'patterns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 235,
                        'endLine' => 235,
                        'startColumn' => 24,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the current request URI matches a pattern.
 *
 * @param  mixed  ...$patterns
 * @return bool
 */',
                'startLine' => 235,
                'endLine' => 239,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'routeIs' => [
                'name' => 'routeIs',
                'parameters' => [
                    'patterns' => [
                        'name' => 'patterns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 247,
                        'endLine' => 247,
                        'startColumn' => 29,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the route name matches a given pattern.
 *
 * @param  mixed  ...$patterns
 * @return bool
 */',
                'startLine' => 247,
                'endLine' => 250,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'fullUrlIs' => [
                'name' => 'fullUrlIs',
                'parameters' => [
                    'patterns' => [
                        'name' => 'patterns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 258,
                        'endLine' => 258,
                        'startColumn' => 31,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the current request URL and query string match a pattern.
 *
 * @param  mixed  ...$patterns
 * @return bool
 */',
                'startLine' => 258,
                'endLine' => 262,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'host' => [
                'name' => 'host',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the host name.
 *
 * @return string
 */',
                'startLine' => 269,
                'endLine' => 272,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'httpHost' => [
                'name' => 'httpHost',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the HTTP host being requested.
 *
 * @return string
 */',
                'startLine' => 279,
                'endLine' => 282,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'schemeAndHttpHost' => [
                'name' => 'schemeAndHttpHost',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the scheme and HTTP host.
 *
 * @return string
 */',
                'startLine' => 289,
                'endLine' => 292,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'ajax' => [
                'name' => 'ajax',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the request is the result of an AJAX call.
 *
 * @return bool
 */',
                'startLine' => 299,
                'endLine' => 302,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'pjax' => [
                'name' => 'pjax',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the request is the result of a PJAX call.
 *
 * @return bool
 */',
                'startLine' => 309,
                'endLine' => 312,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'prefetch' => [
                'name' => 'prefetch',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the request is the result of a prefetch call.
 *
 * @return bool
 */',
                'startLine' => 319,
                'endLine' => 324,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'secure' => [
                'name' => 'secure',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the request is over HTTPS.
 *
 * @return bool
 */',
                'startLine' => 331,
                'endLine' => 334,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'ip' => [
                'name' => 'ip',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the client IP address.
 *
 * @return string|null
 */',
                'startLine' => 341,
                'endLine' => 344,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'ips' => [
                'name' => 'ips',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the client IP addresses.
 *
 * @return array
 */',
                'startLine' => 351,
                'endLine' => 354,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'userAgent' => [
                'name' => 'userAgent',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the client user agent.
 *
 * @return string|null
 */',
                'startLine' => 361,
                'endLine' => 364,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'getAcceptableContentTypes' => [
                'name' => 'getAcceptableContentTypes',
                'parameters' => [
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
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * {@inheritdoc}
 */',
                'startLine' => 369,
                'endLine' => 381,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'merge' => [
                'name' => 'merge',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
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
                        'startLine' => 389,
                        'endLine' => 389,
                        'startColumn' => 27,
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
 * Merge new input into the current request\'s input array.
 *
 * @param  array  $input
 * @return $this
 */',
                'startLine' => 389,
                'endLine' => 398,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'mergeIfMissing' => [
                'name' => 'mergeIfMissing',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
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
                        'startLine' => 406,
                        'endLine' => 406,
                        'startColumn' => 36,
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
 * Merge new input into the request\'s input, but only when that key is missing from the request.
 *
 * @param  array  $input
 * @return $this
 */',
                'startLine' => 406,
                'endLine' => 412,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'replace' => [
                'name' => 'replace',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
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
                        'startLine' => 420,
                        'endLine' => 420,
                        'startColumn' => 29,
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
 * Replace the input values for the current request.
 *
 * @param  array  $input
 * @return $this
 */',
                'startLine' => 420,
                'endLine' => 425,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'get' => [
                'name' => 'get',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
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
                        'startLine' => 439,
                        'endLine' => 439,
                        'startColumn' => 25,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 439,
                                'endLine' => 439,
                                'startTokenPos' => 1565,
                                'startFilePos' => 10453,
                                'endTokenPos' => 1565,
                                'endFilePos' => 10456,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 439,
                        'endLine' => 439,
                        'startColumn' => 38,
                        'endColumn' => 58,
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
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * This method belongs to Symfony HttpFoundation and is not usually needed when using Laravel.
 *
 * Instead, you may use the "input" method.
 *
 * @param  string  $key
 * @param  mixed  $default
 * @return mixed
 *
 * @deprecated use ->input() instead
 */',
                'startLine' => 438,
                'endLine' => 442,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'json' => [
                'name' => 'json',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 451,
                                'endLine' => 451,
                                'startTokenPos' => 1600,
                                'startFilePos' => 10770,
                                'endTokenPos' => 1600,
                                'endFilePos' => 10773,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 451,
                        'endLine' => 451,
                        'startColumn' => 26,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 451,
                                'endLine' => 451,
                                'startTokenPos' => 1607,
                                'startFilePos' => 10787,
                                'endTokenPos' => 1607,
                                'endFilePos' => 10790,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 451,
                        'endLine' => 451,
                        'startColumn' => 39,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the JSON payload for the request.
 *
 * @param  string|null  $key
 * @param  mixed  $default
 * @return ($key is null ? \\Symfony\\Component\\HttpFoundation\\InputBag : mixed)
 */',
                'startLine' => 451,
                'endLine' => 462,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'getInputSource' => [
                'name' => 'getInputSource',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the input source for the request.
 *
 * @return \\Symfony\\Component\\HttpFoundation\\InputBag
 */',
                'startLine' => 469,
                'endLine' => 476,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'createFrom' => [
                'name' => 'createFrom',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'self',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 485,
                        'endLine' => 485,
                        'startColumn' => 39,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 485,
                                'endLine' => 485,
                                'startTokenPos' => 1790,
                                'startFilePos' => 11702,
                                'endTokenPos' => 1790,
                                'endFilePos' => 11705,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 485,
                        'endLine' => 485,
                        'startColumn' => 51,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new request instance from the given Laravel request.
 *
 * @param  \\Illuminate\\Http\\Request  $from
 * @param  \\Illuminate\\Http\\Request|null  $to
 * @return static
 */',
                'startLine' => 485,
                'endLine' => 518,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'createFromBase' => [
                'name' => 'createFromBase',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\HttpFoundation\\Request',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 526,
                        'endLine' => 526,
                        'startColumn' => 43,
                        'endColumn' => 65,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an Illuminate request from a Symfony instance.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Request  $request
 * @return static
 */',
                'startLine' => 526,
                'endLine' => 542,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'duplicate' => [
                'name' => 'duplicate',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 550,
                                'endLine' => 550,
                                'startTokenPos' => 2180,
                                'startFilePos' => 13479,
                                'endTokenPos' => 2180,
                                'endFilePos' => 13482,
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
                        'startLine' => 550,
                        'endLine' => 550,
                        'startColumn' => 31,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'request' => [
                        'name' => 'request',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 550,
                                'endLine' => 550,
                                'startTokenPos' => 2190,
                                'startFilePos' => 13503,
                                'endTokenPos' => 2190,
                                'endFilePos' => 13506,
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
                        'startLine' => 550,
                        'endLine' => 550,
                        'startColumn' => 53,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 550,
                                'endLine' => 550,
                                'startTokenPos' => 2200,
                                'startFilePos' => 13530,
                                'endTokenPos' => 2200,
                                'endFilePos' => 13533,
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
                        'startLine' => 550,
                        'endLine' => 550,
                        'startColumn' => 77,
                        'endColumn' => 101,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'cookies' => [
                        'name' => 'cookies',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 550,
                                'endLine' => 550,
                                'startTokenPos' => 2210,
                                'startFilePos' => 13554,
                                'endTokenPos' => 2210,
                                'endFilePos' => 13557,
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
                        'startLine' => 550,
                        'endLine' => 550,
                        'startColumn' => 104,
                        'endColumn' => 125,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'files' => [
                        'name' => 'files',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 550,
                                'endLine' => 550,
                                'startTokenPos' => 2220,
                                'startFilePos' => 13576,
                                'endTokenPos' => 2220,
                                'endFilePos' => 13579,
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
                        'startLine' => 550,
                        'endLine' => 550,
                        'startColumn' => 128,
                        'endColumn' => 147,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'server' => [
                        'name' => 'server',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 550,
                                'endLine' => 550,
                                'startTokenPos' => 2230,
                                'startFilePos' => 13599,
                                'endTokenPos' => 2230,
                                'endFilePos' => 13602,
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
                        'startLine' => 550,
                        'endLine' => 550,
                        'startColumn' => 150,
                        'endColumn' => 170,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * {@inheritdoc}
 *
 * @return static
 */',
                'startLine' => 549,
                'endLine' => 553,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'filterFiles' => [
                'name' => 'filterFiles',
                'parameters' => [
                    'files' => [
                        'name' => 'files',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 561,
                        'endLine' => 561,
                        'startColumn' => 36,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Filter the given array of files, removing any empty values.
 *
 * @param  mixed  $files
 * @return mixed
 */',
                'startLine' => 561,
                'endLine' => 578,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'hasSession' => [
                'name' => 'hasSession',
                'parameters' => [
                    'skipIfUninitialized' => [
                        'name' => 'skipIfUninitialized',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 584,
                                'endLine' => 584,
                                'startTokenPos' => 2397,
                                'startFilePos' => 14385,
                                'endTokenPos' => 2397,
                                'endFilePos' => 14389,
                            ],
                        ],
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
                        'startLine' => 584,
                        'endLine' => 584,
                        'startColumn' => 32,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
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
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * {@inheritdoc}
 */',
                'startLine' => 583,
                'endLine' => 587,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'getSession' => [
                'name' => 'getSession',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * {@inheritdoc}
 *
 * @throws \\Symfony\\Component\\HttpFoundation\\Exception\\SessionNotFoundException
 */',
                'startLine' => 594,
                'endLine' => 600,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'session' => [
                'name' => 'session',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the session associated with the request.
 *
 * @return \\Illuminate\\Contracts\\Session\\Session
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 609,
                'endLine' => 616,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'setLaravelSession' => [
                'name' => 'setLaravelSession',
                'parameters' => [
                    'session' => [
                        'name' => 'session',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 624,
                        'endLine' => 624,
                        'startColumn' => 39,
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
 * Set the session instance on the request.
 *
 * @param  \\Illuminate\\Contracts\\Session\\Session  $session
 * @return void
 */',
                'startLine' => 624,
                'endLine' => 627,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'setRequestLocale' => [
                'name' => 'setRequestLocale',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 635,
                        'endLine' => 635,
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
 * Set the locale for the request instance.
 *
 * @param  string  $locale
 * @return void
 */',
                'startLine' => 635,
                'endLine' => 638,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'setDefaultRequestLocale' => [
                'name' => 'setDefaultRequestLocale',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 646,
                        'endLine' => 646,
                        'startColumn' => 45,
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
 * Set the default locale for the request instance.
 *
 * @param  string  $locale
 * @return void
 */',
                'startLine' => 646,
                'endLine' => 649,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'user' => [
                'name' => 'user',
                'parameters' => [
                    'guard' => [
                        'name' => 'guard',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 657,
                                'endLine' => 657,
                                'startTokenPos' => 2604,
                                'startFilePos' => 16070,
                                'endTokenPos' => 2604,
                                'endFilePos' => 16073,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 657,
                        'endLine' => 657,
                        'startColumn' => 26,
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
 * Get the user making the request.
 *
 * @param  string|null  $guard
 * @return mixed
 */',
                'startLine' => 657,
                'endLine' => 660,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'route' => [
                'name' => 'route',
                'parameters' => [
                    'param' => [
                        'name' => 'param',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 669,
                                'endLine' => 669,
                                'startTokenPos' => 2638,
                                'startFilePos' => 16402,
                                'endTokenPos' => 2638,
                                'endFilePos' => 16405,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 669,
                        'endLine' => 669,
                        'startColumn' => 27,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 669,
                                'endLine' => 669,
                                'startTokenPos' => 2645,
                                'startFilePos' => 16419,
                                'endTokenPos' => 2645,
                                'endFilePos' => 16422,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 669,
                        'endLine' => 669,
                        'startColumn' => 42,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the route handling the request.
 *
 * @param  string|null  $param
 * @param  mixed  $default
 * @return ($param is null ? \\Illuminate\\Routing\\Route : object|string|null)
 */',
                'startLine' => 669,
                'endLine' => 678,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'fingerprint' => [
                'name' => 'fingerprint',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a unique fingerprint for the request / route / IP address.
 *
 * @return string
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 687,
                'endLine' => 697,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'setJson' => [
                'name' => 'setJson',
                'parameters' => [
                    'json' => [
                        'name' => 'json',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 705,
                        'endLine' => 705,
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
 * Set the JSON payload for the request.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\InputBag  $json
 * @return $this
 */',
                'startLine' => 705,
                'endLine' => 710,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'getUserResolver' => [
                'name' => 'getUserResolver',
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
                'startLine' => 717,
                'endLine' => 722,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'setUserResolver' => [
                'name' => 'setUserResolver',
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
                        'startLine' => 730,
                        'endLine' => 730,
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
 * Set the user resolver callback.
 *
 * @param  \\Closure  $callback
 * @return $this
 */',
                'startLine' => 730,
                'endLine' => 735,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'getRouteResolver' => [
                'name' => 'getRouteResolver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the route resolver callback.
 *
 * @return \\Closure
 */',
                'startLine' => 742,
                'endLine' => 747,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'setRouteResolver' => [
                'name' => 'setRouteResolver',
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
                        'startLine' => 755,
                        'endLine' => 755,
                        'startColumn' => 38,
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
 * Set the route resolver callback.
 *
 * @param  \\Closure  $callback
 * @return $this
 */',
                'startLine' => 755,
                'endLine' => 760,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'toArray' => [
                'name' => 'toArray',
                'parameters' => [
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
 * Get all of the input and files for the request.
 *
 * @return array
 */',
                'startLine' => 767,
                'endLine' => 770,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'offsetExists' => [
                'name' => 'offsetExists',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 778,
                        'endLine' => 778,
                        'startColumn' => 34,
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
 * Determine if the given offset exists.
 *
 * @param  string  $offset
 * @return bool
 */',
                'startLine' => 778,
                'endLine' => 786,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'offsetGet' => [
                'name' => 'offsetGet',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 794,
                        'endLine' => 794,
                        'startColumn' => 31,
                        'endColumn' => 37,
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
 * Get the value at the given offset.
 *
 * @param  string  $offset
 * @return mixed
 */',
                'startLine' => 794,
                'endLine' => 797,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'offsetSet' => [
                'name' => 'offsetSet',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 806,
                        'endLine' => 806,
                        'startColumn' => 31,
                        'endColumn' => 37,
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
                        'startLine' => 806,
                        'endLine' => 806,
                        'startColumn' => 40,
                        'endColumn' => 45,
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
 * Set the value at the given offset.
 *
 * @param  string  $offset
 * @param  mixed  $value
 * @return void
 */',
                'startLine' => 806,
                'endLine' => 809,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            'offsetUnset' => [
                'name' => 'offsetUnset',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 817,
                        'endLine' => 817,
                        'startColumn' => 33,
                        'endColumn' => 39,
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
 * Remove the value at the given offset.
 *
 * @param  string  $offset
 * @return void
 */',
                'startLine' => 817,
                'endLine' => 820,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            '__isset' => [
                'name' => '__isset',
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
                        'startLine' => 828,
                        'endLine' => 828,
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
 * Check if an input element is set on the request.
 *
 * @param  string  $key
 * @return bool
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
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
                'aliasName' => null,
            ],
            '__get' => [
                'name' => '__get',
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
                        'startLine' => 839,
                        'endLine' => 839,
                        'startColumn' => 27,
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
 * Get an input element from the request.
 *
 * @param  string  $key
 * @return mixed
 */',
                'startLine' => 839,
                'endLine' => 842,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Request',
                'currentClassName' => 'Illuminate\\Http\\Request',
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
