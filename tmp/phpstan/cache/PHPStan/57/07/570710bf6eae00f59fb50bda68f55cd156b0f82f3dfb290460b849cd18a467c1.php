<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/ResponseTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\ResponseTrait
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-3c82814621299a17a9b8a37120e8d4d669b34e9628a866009d671fd1ff3c54ed-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Http\\ResponseTrait',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/ResponseTrait.php',
            ],
        ],
        'namespace' => 'Illuminate\\Http',
        'name' => 'Illuminate\\Http\\ResponseTrait',
        'shortName' => 'ResponseTrait',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 197,
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
            'original' => [
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'name' => 'original',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The original content of the response.
 *
 * @var mixed
 */',
                'attributes' => [
                ],
                'startLine' => 16,
                'endLine' => 16,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'exception' => [
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'name' => 'exception',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The exception that triggered the error response (if applicable).
 *
 * @var \\Throwable|null
 */',
                'attributes' => [
                ],
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'status' => [
                'name' => 'status',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the status code for the response.
 *
 * @return int
 */',
                'startLine' => 30,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'currentClassName' => 'Illuminate\\Http\\ResponseTrait',
                'aliasName' => null,
            ],
            'statusText' => [
                'name' => 'statusText',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the status text for the response.
 *
 * @return string
 */',
                'startLine' => 40,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'currentClassName' => 'Illuminate\\Http\\ResponseTrait',
                'aliasName' => null,
            ],
            'content' => [
                'name' => 'content',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the content of the response.
 *
 * @return string
 */',
                'startLine' => 50,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'currentClassName' => 'Illuminate\\Http\\ResponseTrait',
                'aliasName' => null,
            ],
            'getOriginalContent' => [
                'name' => 'getOriginalContent',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the original response content.
 *
 * @return mixed
 */',
                'startLine' => 60,
                'endLine' => 65,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'currentClassName' => 'Illuminate\\Http\\ResponseTrait',
                'aliasName' => null,
            ],
            'header' => [
                'name' => 'header',
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
                        'startLine' => 75,
                        'endLine' => 75,
                        'startColumn' => 28,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 75,
                        'endLine' => 75,
                        'startColumn' => 34,
                        'endColumn' => 40,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 75,
                                'endLine' => 75,
                                'startTokenPos' => 173,
                                'startFilePos' => 1424,
                                'endTokenPos' => 173,
                                'endFilePos' => 1427,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 75,
                        'endLine' => 75,
                        'startColumn' => 43,
                        'endColumn' => 57,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a header on the Response.
 *
 * @param  string  $key
 * @param  array|string  $values
 * @param  bool  $replace
 * @return $this
 */',
                'startLine' => 75,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'currentClassName' => 'Illuminate\\Http\\ResponseTrait',
                'aliasName' => null,
            ],
            'withHeaders' => [
                'name' => 'withHeaders',
                'parameters' => [
                    'headers' => [
                        'name' => 'headers',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 88,
                        'endLine' => 88,
                        'startColumn' => 33,
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
 * Add an array of headers to the response.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\HeaderBag|array  $headers
 * @return $this
 */',
                'startLine' => 88,
                'endLine' => 99,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'currentClassName' => 'Illuminate\\Http\\ResponseTrait',
                'aliasName' => null,
            ],
            'withoutHeader' => [
                'name' => 'withoutHeader',
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
                        'startLine' => 107,
                        'endLine' => 107,
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
 * Remove a header(s) from the response.
 *
 * @param  array|string  $key
 * @return $this
 */',
                'startLine' => 107,
                'endLine' => 114,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'currentClassName' => 'Illuminate\\Http\\ResponseTrait',
                'aliasName' => null,
            ],
            'cookie' => [
                'name' => 'cookie',
                'parameters' => [
                    'cookie' => [
                        'name' => 'cookie',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 122,
                        'endLine' => 122,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a cookie to the response.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Cookie|mixed  $cookie
 * @return $this
 */',
                'startLine' => 122,
                'endLine' => 125,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'currentClassName' => 'Illuminate\\Http\\ResponseTrait',
                'aliasName' => null,
            ],
            'withCookie' => [
                'name' => 'withCookie',
                'parameters' => [
                    'cookie' => [
                        'name' => 'cookie',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 133,
                        'endLine' => 133,
                        'startColumn' => 32,
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
 * Add a cookie to the response.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Cookie|mixed  $cookie
 * @return $this
 */',
                'startLine' => 133,
                'endLine' => 142,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'currentClassName' => 'Illuminate\\Http\\ResponseTrait',
                'aliasName' => null,
            ],
            'withoutCookie' => [
                'name' => 'withoutCookie',
                'parameters' => [
                    'cookie' => [
                        'name' => 'cookie',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 152,
                        'endLine' => 152,
                        'startColumn' => 35,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'path' => [
                        'name' => 'path',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 152,
                                'endLine' => 152,
                                'startTokenPos' => 429,
                                'startFilePos' => 3200,
                                'endTokenPos' => 429,
                                'endFilePos' => 3203,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 152,
                        'endLine' => 152,
                        'startColumn' => 44,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'domain' => [
                        'name' => 'domain',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 152,
                                'endLine' => 152,
                                'startTokenPos' => 436,
                                'startFilePos' => 3216,
                                'endTokenPos' => 436,
                                'endFilePos' => 3219,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 152,
                        'endLine' => 152,
                        'startColumn' => 58,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Expire a cookie when sending the response.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Cookie|mixed  $cookie
 * @param  string|null  $path
 * @param  string|null  $domain
 * @return $this
 */',
                'startLine' => 152,
                'endLine' => 161,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'currentClassName' => 'Illuminate\\Http\\ResponseTrait',
                'aliasName' => null,
            ],
            'getCallback' => [
                'name' => 'getCallback',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the callback of the response.
 *
 * @return string|null
 */',
                'startLine' => 168,
                'endLine' => 171,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'currentClassName' => 'Illuminate\\Http\\ResponseTrait',
                'aliasName' => null,
            ],
            'withException' => [
                'name' => 'withException',
                'parameters' => [
                    'e' => [
                        'name' => 'e',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Throwable',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 179,
                        'endLine' => 179,
                        'startColumn' => 35,
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
 * Set the exception to attach to the response.
 *
 * @param  \\Throwable  $e
 * @return $this
 */',
                'startLine' => 179,
                'endLine' => 184,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'currentClassName' => 'Illuminate\\Http\\ResponseTrait',
                'aliasName' => null,
            ],
            'throwResponse' => [
                'name' => 'throwResponse',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Throws the response in a HttpResponseException instance.
 *
 * @return never
 *
 * @throws \\Illuminate\\Http\\Exceptions\\HttpResponseException
 */',
                'startLine' => 193,
                'endLine' => 196,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\ResponseTrait',
                'implementingClassName' => 'Illuminate\\Http\\ResponseTrait',
                'currentClassName' => 'Illuminate\\Http\\ResponseTrait',
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
