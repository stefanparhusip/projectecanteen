<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/ResponseSequence.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Client\ResponseSequence
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-942786bac173d98e3aaff8ebbc4fe5507f96db5b4c07060659f6f7f18974c91f-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/ResponseSequence.php',
            ],
        ],
        'namespace' => 'Illuminate\\Http\\Client',
        'name' => 'Illuminate\\Http\\Client\\ResponseSequence',
        'shortName' => 'ResponseSequence',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 172,
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
            'responses' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'implementingClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'name' => 'responses',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The responses in the sequence.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 18,
                'endLine' => 18,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'failWhenEmpty' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'implementingClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'name' => 'failWhenEmpty',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'true',
                    'attributes' => [
                        'startLine' => 25,
                        'endLine' => 25,
                        'startTokenPos' => 48,
                        'startFilePos' => 434,
                        'endTokenPos' => 48,
                        'endFilePos' => 437,
                    ],
                ],
                'docComment' => '/**
 * Indicates that invoking this sequence when it is empty should throw an exception.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 36,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'emptyResponse' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'implementingClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'name' => 'emptyResponse',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The response that should be returned when the sequence is empty.
 *
 * @var \\GuzzleHttp\\Promise\\PromiseInterface
 */',
                'attributes' => [
                ],
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 29,
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
                    'responses' => [
                        'name' => 'responses',
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
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 33,
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
 * Create a new response sequence.
 *
 * @param  array  $responses
 */',
                'startLine' => 39,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'implementingClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'currentClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'aliasName' => null,
            ],
            'push' => [
                'name' => 'push',
                'parameters' => [
                    'body' => [
                        'name' => 'body',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 52,
                                'endLine' => 52,
                                'startTokenPos' => 96,
                                'startFilePos' => 1029,
                                'endTokenPos' => 96,
                                'endFilePos' => 1032,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 52,
                        'endLine' => 52,
                        'startColumn' => 26,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'status' => [
                        'name' => 'status',
                        'default' => [
                            'code' => '200',
                            'attributes' => [
                                'startLine' => 52,
                                'endLine' => 52,
                                'startTokenPos' => 105,
                                'startFilePos' => 1049,
                                'endTokenPos' => 105,
                                'endFilePos' => 1051,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 52,
                        'endLine' => 52,
                        'startColumn' => 40,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 52,
                                'endLine' => 52,
                                'startTokenPos' => 114,
                                'startFilePos' => 1071,
                                'endTokenPos' => 115,
                                'endFilePos' => 1072,
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
                        'startLine' => 52,
                        'endLine' => 52,
                        'startColumn' => 59,
                        'endColumn' => 77,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Push a response to the sequence.
 *
 * @param  string|array|null  $body
 * @param  int  $status
 * @param  array  $headers
 * @return $this
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
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'implementingClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'currentClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'aliasName' => null,
            ],
            'pushStatus' => [
                'name' => 'pushStatus',
                'parameters' => [
                    'status' => [
                        'name' => 'status',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 66,
                        'endLine' => 66,
                        'startColumn' => 32,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 66,
                                'endLine' => 66,
                                'startTokenPos' => 164,
                                'startFilePos' => 1422,
                                'endTokenPos' => 165,
                                'endFilePos' => 1423,
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
                        'startLine' => 66,
                        'endLine' => 66,
                        'startColumn' => 45,
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
 * Push a response with the given status code to the sequence.
 *
 * @param  int  $status
 * @param  array  $headers
 * @return $this
 */',
                'startLine' => 66,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'implementingClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'currentClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'aliasName' => null,
            ],
            'pushFile' => [
                'name' => 'pushFile',
                'parameters' => [
                    'filePath' => [
                        'name' => 'filePath',
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
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 30,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'status' => [
                        'name' => 'status',
                        'default' => [
                            'code' => '200',
                            'attributes' => [
                                'startLine' => 81,
                                'endLine' => 81,
                                'startTokenPos' => 214,
                                'startFilePos' => 1816,
                                'endTokenPos' => 214,
                                'endFilePos' => 1818,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 48,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 81,
                                'endLine' => 81,
                                'startTokenPos' => 223,
                                'startFilePos' => 1838,
                                'endTokenPos' => 224,
                                'endFilePos' => 1839,
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
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 67,
                        'endColumn' => 85,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Push a response with the contents of a file as the body to the sequence.
 *
 * @param  string  $filePath
 * @param  int  $status
 * @param  array  $headers
 * @return $this
 */',
                'startLine' => 81,
                'endLine' => 88,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'implementingClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'currentClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'aliasName' => null,
            ],
            'pushFailedConnection' => [
                'name' => 'pushFailedConnection',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 96,
                                'endLine' => 96,
                                'startTokenPos' => 276,
                                'startFilePos' => 2194,
                                'endTokenPos' => 276,
                                'endFilePos' => 2197,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 96,
                        'endLine' => 96,
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
 * Push a connection exception to the sequence.
 *
 * @param  string|null  $message
 * @return $this
 */',
                'startLine' => 96,
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'implementingClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'currentClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'aliasName' => null,
            ],
            'pushResponse' => [
                'name' => 'pushResponse',
                'parameters' => [
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 109,
                        'endLine' => 109,
                        'startColumn' => 34,
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
 * Push a response to the sequence.
 *
 * @param  mixed  $response
 * @return $this
 */',
                'startLine' => 109,
                'endLine' => 114,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'implementingClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'currentClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'aliasName' => null,
            ],
            'whenEmpty' => [
                'name' => 'whenEmpty',
                'parameters' => [
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 122,
                        'endLine' => 122,
                        'startColumn' => 31,
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
 * Make the sequence return a default response when it is empty.
 *
 * @param  \\GuzzleHttp\\Promise\\PromiseInterface|\\Closure  $response
 * @return $this
 */',
                'startLine' => 122,
                'endLine' => 128,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'implementingClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'currentClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'aliasName' => null,
            ],
            'dontFailWhenEmpty' => [
                'name' => 'dontFailWhenEmpty',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Make the sequence return a default response when it is empty.
 *
 * @return $this
 */',
                'startLine' => 135,
                'endLine' => 138,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'implementingClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'currentClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'aliasName' => null,
            ],
            'isEmpty' => [
                'name' => 'isEmpty',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that this sequence has depleted all of its responses.
 *
 * @return bool
 */',
                'startLine' => 145,
                'endLine' => 148,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'implementingClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'currentClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'aliasName' => null,
            ],
            '__invoke' => [
                'name' => '__invoke',
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
                        'startLine' => 158,
                        'endLine' => 158,
                        'startColumn' => 30,
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
 * Get the next response in the sequence.
 *
 * @param  \\Illuminate\\Http\\Client\\Request  $request
 * @return mixed
 *
 * @throws \\OutOfBoundsException
 */',
                'startLine' => 158,
                'endLine' => 171,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'implementingClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
                'currentClassName' => 'Illuminate\\Http\\Client\\ResponseSequence',
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
