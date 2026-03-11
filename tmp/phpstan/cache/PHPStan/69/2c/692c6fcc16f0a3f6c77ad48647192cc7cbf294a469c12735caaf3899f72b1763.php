<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/Request.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Client\Request
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-ad3302477e293a15e881a38dd9eafc0a927581a076095a7af93804f385a237b0-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Http\\Client\\Request',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/Request.php',
            ],
        ],
        'namespace' => 'Illuminate\\Http\\Client',
        'name' => 'Illuminate\\Http\\Client\\Request',
        'shortName' => 'Request',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 11,
        'endLine' => 335,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'ArrayAccess',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'request' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'name' => 'request',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The underlying PSR request.
 *
 * @var \\Psr\\Http\\Message\\RequestInterface
 */',
                'attributes' => [
                ],
                'startLine' => 20,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'data' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'name' => 'data',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The decoded payload for the request.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 27,
                'endLine' => 27,
                'startColumn' => 5,
                'endColumn' => 20,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'attributes' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'name' => 'attributes',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 34,
                        'endLine' => 34,
                        'startTokenPos' => 69,
                        'startFilePos' => 634,
                        'endTokenPos' => 70,
                        'endFilePos' => 635,
                    ],
                ],
                'docComment' => '/**
 * The attribute data passed when building the PendingRequest.
 *
 * @var array<array-key, mixed>
 */',
                'attributes' => [
                ],
                'startLine' => 34,
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 31,
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
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 41,
                        'endLine' => 41,
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
 * Create a new request instance.
 *
 * @param  \\Psr\\Http\\Message\\RequestInterface  $request
 */',
                'startLine' => 41,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
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
                'startLine' => 51,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
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
 * Get the URL of the request.
 *
 * @return string
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
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'hasHeader' => [
                'name' => 'hasHeader',
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
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 31,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 73,
                                'endLine' => 73,
                                'startTokenPos' => 164,
                                'startFilePos' => 1378,
                                'endTokenPos' => 164,
                                'endFilePos' => 1381,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 37,
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
 * Determine if the request has a given header.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return bool
 */',
                'startLine' => 73,
                'endLine' => 88,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'hasHeaders' => [
                'name' => 'hasHeaders',
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
                        'startLine' => 96,
                        'endLine' => 96,
                        'startColumn' => 32,
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
 * Determine if the request has the given headers.
 *
 * @param  array|string  $headers
 * @return bool
 */',
                'startLine' => 96,
                'endLine' => 109,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
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
                        'startLine' => 117,
                        'endLine' => 117,
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
 * Get the values for the header with the given name.
 *
 * @param  string  $key
 * @return array
 */',
                'startLine' => 117,
                'endLine' => 120,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'headers' => [
                'name' => 'headers',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the request headers.
 *
 * @return array
 */',
                'startLine' => 127,
                'endLine' => 130,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'body' => [
                'name' => 'body',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the body of the request.
 *
 * @return string
 */',
                'startLine' => 137,
                'endLine' => 140,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'hasFile' => [
                'name' => 'hasFile',
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
                        'startLine' => 150,
                        'endLine' => 150,
                        'startColumn' => 29,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 150,
                                'endLine' => 150,
                                'startTokenPos' => 468,
                                'startFilePos' => 2999,
                                'endTokenPos' => 468,
                                'endFilePos' => 3002,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 150,
                        'endLine' => 150,
                        'startColumn' => 36,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'filename' => [
                        'name' => 'filename',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 150,
                                'endLine' => 150,
                                'startTokenPos' => 475,
                                'startFilePos' => 3017,
                                'endTokenPos' => 475,
                                'endFilePos' => 3020,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 150,
                        'endLine' => 150,
                        'startColumn' => 51,
                        'endColumn' => 66,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the request contains the given file.
 *
 * @param  string  $name
 * @param  string|null  $value
 * @param  string|null  $filename
 * @return bool
 */',
                'startLine' => 150,
                'endLine' => 161,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'data' => [
                'name' => 'data',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the request\'s data (form parameters or JSON).
 *
 * @return array
 */',
                'startLine' => 168,
                'endLine' => 177,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'parameters' => [
                'name' => 'parameters',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the request\'s form parameters.
 *
 * @return array
 */',
                'startLine' => 184,
                'endLine' => 193,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'json' => [
                'name' => 'json',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the decoded JSON body of the request.
 *
 * @return array
 */',
                'startLine' => 200,
                'endLine' => 207,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'isForm' => [
                'name' => 'isForm',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the request is simple form data.
 *
 * @return bool
 */',
                'startLine' => 214,
                'endLine' => 217,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'isJson' => [
                'name' => 'isJson',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the request is JSON.
 *
 * @return bool
 */',
                'startLine' => 224,
                'endLine' => 228,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'isMultipart' => [
                'name' => 'isMultipart',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the request is multipart.
 *
 * @return bool
 */',
                'startLine' => 235,
                'endLine' => 239,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'withData' => [
                'name' => 'withData',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 247,
                        'endLine' => 247,
                        'startColumn' => 30,
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
 * Set the decoded data on the request.
 *
 * @param  array  $data
 * @return $this
 */',
                'startLine' => 247,
                'endLine' => 252,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'attributes' => [
                'name' => 'attributes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the attribute data from the request.
 *
 * @return array<array-key, mixed>
 */',
                'startLine' => 259,
                'endLine' => 262,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'setRequestAttributes' => [
                'name' => 'setRequestAttributes',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 270,
                        'endLine' => 270,
                        'startColumn' => 42,
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
 * Set the request\'s attribute data.
 *
 * @param  array<array-key, mixed>  $attributes
 * @return $this
 */',
                'startLine' => 270,
                'endLine' => 275,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
                'aliasName' => null,
            ],
            'toPsrRequest' => [
                'name' => 'toPsrRequest',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the underlying PSR compliant request instance.
 *
 * @return \\Psr\\Http\\Message\\RequestInterface
 */',
                'startLine' => 282,
                'endLine' => 285,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
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
                        'startLine' => 293,
                        'endLine' => 293,
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
                'startLine' => 293,
                'endLine' => 296,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
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
                        'startLine' => 304,
                        'endLine' => 304,
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
 * Get the value for a given offset.
 *
 * @param  string  $offset
 * @return mixed
 */',
                'startLine' => 304,
                'endLine' => 307,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
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
                        'startLine' => 318,
                        'endLine' => 318,
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
                        'startLine' => 318,
                        'endLine' => 318,
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
 *
 * @throws \\LogicException
 */',
                'startLine' => 318,
                'endLine' => 321,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
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
                        'startLine' => 331,
                        'endLine' => 331,
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
 * Unset the value at the given offset.
 *
 * @param  string  $offset
 * @return void
 *
 * @throws \\LogicException
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
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Request',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Request',
                'currentClassName' => 'Illuminate\\Http\\Client\\Request',
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
