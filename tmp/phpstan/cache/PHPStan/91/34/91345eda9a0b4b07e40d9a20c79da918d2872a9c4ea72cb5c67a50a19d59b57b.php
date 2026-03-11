<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../guzzlehttp/psr7/src/Response.php-PHPStan\BetterReflection\Reflection\ReflectionClass-GuzzleHttp\Psr7\Response
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-85f711119e3248a8e7cc6c7a8ea74d02fb2193d0f3c7098015aed29a3376af8f-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'GuzzleHttp\\Psr7\\Response',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../guzzlehttp/psr7/src/Response.php',
            ],
        ],
        'namespace' => 'GuzzleHttp\\Psr7',
        'name' => 'GuzzleHttp\\Psr7\\Response',
        'shortName' => 'Response',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * PSR-7 response implementation.
 */',
        'attributes' => [
        ],
        'startLine' => 13,
        'endLine' => 161,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Psr\\Http\\Message\\ResponseInterface',
        ],
        'traitClassNames' => [
            0 => 'GuzzleHttp\\Psr7\\MessageTrait',
        ],
        'immediateConstants' => [
            'PHRASES' => [
                'declaringClassName' => 'GuzzleHttp\\Psr7\\Response',
                'implementingClassName' => 'GuzzleHttp\\Psr7\\Response',
                'name' => 'PHRASES',
                'modifiers' => 4,
                'type' => null,
                'value' => [
                    'code' => '[100 => \'Continue\', 101 => \'Switching Protocols\', 102 => \'Processing\', 200 => \'OK\', 201 => \'Created\', 202 => \'Accepted\', 203 => \'Non-Authoritative Information\', 204 => \'No Content\', 205 => \'Reset Content\', 206 => \'Partial Content\', 207 => \'Multi-status\', 208 => \'Already Reported\', 300 => \'Multiple Choices\', 301 => \'Moved Permanently\', 302 => \'Found\', 303 => \'See Other\', 304 => \'Not Modified\', 305 => \'Use Proxy\', 306 => \'Switch Proxy\', 307 => \'Temporary Redirect\', 308 => \'Permanent Redirect\', 400 => \'Bad Request\', 401 => \'Unauthorized\', 402 => \'Payment Required\', 403 => \'Forbidden\', 404 => \'Not Found\', 405 => \'Method Not Allowed\', 406 => \'Not Acceptable\', 407 => \'Proxy Authentication Required\', 408 => \'Request Time-out\', 409 => \'Conflict\', 410 => \'Gone\', 411 => \'Length Required\', 412 => \'Precondition Failed\', 413 => \'Request Entity Too Large\', 414 => \'Request-URI Too Large\', 415 => \'Unsupported Media Type\', 416 => \'Requested range not satisfiable\', 417 => \'Expectation Failed\', 418 => \'I\\\'m a teapot\', 422 => \'Unprocessable Entity\', 423 => \'Locked\', 424 => \'Failed Dependency\', 425 => \'Unordered Collection\', 426 => \'Upgrade Required\', 428 => \'Precondition Required\', 429 => \'Too Many Requests\', 431 => \'Request Header Fields Too Large\', 451 => \'Unavailable For Legal Reasons\', 500 => \'Internal Server Error\', 501 => \'Not Implemented\', 502 => \'Bad Gateway\', 503 => \'Service Unavailable\', 504 => \'Gateway Time-out\', 505 => \'HTTP Version not supported\', 506 => \'Variant Also Negotiates\', 507 => \'Insufficient Storage\', 508 => \'Loop Detected\', 510 => \'Not Extended\', 511 => \'Network Authentication Required\']',
                    'attributes' => [
                        'startLine' => 18,
                        'endLine' => 79,
                        'startTokenPos' => 52,
                        'startFilePos' => 338,
                        'endTokenPos' => 474,
                        'endFilePos' => 2442,
                    ],
                ],
                'docComment' => '/** Map of standard HTTP status code/reason phrases */',
                'attributes' => [
                ],
                'startLine' => 18,
                'endLine' => 79,
                'startColumn' => 5,
                'endColumn' => 6,
            ],
        ],
        'immediateProperties' => [
            'reasonPhrase' => [
                'declaringClassName' => 'GuzzleHttp\\Psr7\\Response',
                'implementingClassName' => 'GuzzleHttp\\Psr7\\Response',
                'name' => 'reasonPhrase',
                'modifiers' => 4,
                'type' => null,
                'default' => null,
                'docComment' => '/** @var string */',
                'attributes' => [
                ],
                'startLine' => 82,
                'endLine' => 82,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'statusCode' => [
                'declaringClassName' => 'GuzzleHttp\\Psr7\\Response',
                'implementingClassName' => 'GuzzleHttp\\Psr7\\Response',
                'name' => 'statusCode',
                'modifiers' => 4,
                'type' => null,
                'default' => null,
                'docComment' => '/** @var int */',
                'attributes' => [
                ],
                'startLine' => 85,
                'endLine' => 85,
                'startColumn' => 5,
                'endColumn' => 24,
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
                    'status' => [
                        'name' => 'status',
                        'default' => [
                            'code' => '200',
                            'attributes' => [
                                'startLine' => 95,
                                'endLine' => 95,
                                'startTokenPos' => 506,
                                'startFilePos' => 3049,
                                'endTokenPos' => 506,
                                'endFilePos' => 3051,
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
                        'startLine' => 95,
                        'endLine' => 95,
                        'startColumn' => 9,
                        'endColumn' => 25,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 96,
                                'endLine' => 96,
                                'startTokenPos' => 515,
                                'startFilePos' => 3079,
                                'endTokenPos' => 516,
                                'endFilePos' => 3080,
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
                        'startLine' => 96,
                        'endLine' => 96,
                        'startColumn' => 9,
                        'endColumn' => 27,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'body' => [
                        'name' => 'body',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 97,
                                'endLine' => 97,
                                'startTokenPos' => 523,
                                'startFilePos' => 3099,
                                'endTokenPos' => 523,
                                'endFilePos' => 3102,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 97,
                        'endLine' => 97,
                        'startColumn' => 9,
                        'endColumn' => 20,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'version' => [
                        'name' => 'version',
                        'default' => [
                            'code' => '\'1.1\'',
                            'attributes' => [
                                'startLine' => 98,
                                'endLine' => 98,
                                'startTokenPos' => 532,
                                'startFilePos' => 3131,
                                'endTokenPos' => 532,
                                'endFilePos' => 3135,
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
                        'startLine' => 98,
                        'endLine' => 98,
                        'startColumn' => 9,
                        'endColumn' => 31,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'reason' => [
                        'name' => 'reason',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 99,
                                'endLine' => 99,
                                'startTokenPos' => 542,
                                'startFilePos' => 3164,
                                'endTokenPos' => 542,
                                'endFilePos' => 3167,
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
                        'startLine' => 99,
                        'endLine' => 99,
                        'startColumn' => 9,
                        'endColumn' => 30,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @param int                                  $status  Status code
 * @param (string|string[])[]                  $headers Response headers
 * @param string|resource|StreamInterface|null $body    Response body
 * @param string                               $version Protocol version
 * @param string|null                          $reason  Reason phrase (when empty a default will be used based on the status code)
 */',
                'startLine' => 94,
                'endLine' => 117,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp\\Psr7',
                'declaringClassName' => 'GuzzleHttp\\Psr7\\Response',
                'implementingClassName' => 'GuzzleHttp\\Psr7\\Response',
                'currentClassName' => 'GuzzleHttp\\Psr7\\Response',
                'aliasName' => null,
            ],
            'getStatusCode' => [
                'name' => 'getStatusCode',
                'parameters' => [
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
                'startLine' => 119,
                'endLine' => 122,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp\\Psr7',
                'declaringClassName' => 'GuzzleHttp\\Psr7\\Response',
                'implementingClassName' => 'GuzzleHttp\\Psr7\\Response',
                'currentClassName' => 'GuzzleHttp\\Psr7\\Response',
                'aliasName' => null,
            ],
            'getReasonPhrase' => [
                'name' => 'getReasonPhrase',
                'parameters' => [
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
                'docComment' => null,
                'startLine' => 124,
                'endLine' => 127,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp\\Psr7',
                'declaringClassName' => 'GuzzleHttp\\Psr7\\Response',
                'implementingClassName' => 'GuzzleHttp\\Psr7\\Response',
                'currentClassName' => 'GuzzleHttp\\Psr7\\Response',
                'aliasName' => null,
            ],
            'withStatus' => [
                'name' => 'withStatus',
                'parameters' => [
                    'code' => [
                        'name' => 'code',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 129,
                        'endLine' => 129,
                        'startColumn' => 32,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'reasonPhrase' => [
                        'name' => 'reasonPhrase',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 129,
                                'endLine' => 129,
                                'startTokenPos' => 738,
                                'startFilePos' => 3910,
                                'endTokenPos' => 738,
                                'endFilePos' => 3911,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 129,
                        'endLine' => 129,
                        'startColumn' => 39,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Psr\\Http\\Message\\ResponseInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 129,
                'endLine' => 143,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp\\Psr7',
                'declaringClassName' => 'GuzzleHttp\\Psr7\\Response',
                'implementingClassName' => 'GuzzleHttp\\Psr7\\Response',
                'currentClassName' => 'GuzzleHttp\\Psr7\\Response',
                'aliasName' => null,
            ],
            'assertStatusCodeIsInteger' => [
                'name' => 'assertStatusCodeIsInteger',
                'parameters' => [
                    'statusCode' => [
                        'name' => 'statusCode',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 148,
                        'endLine' => 148,
                        'startColumn' => 48,
                        'endColumn' => 58,
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
 * @param mixed $statusCode
 */',
                'startLine' => 148,
                'endLine' => 153,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'GuzzleHttp\\Psr7',
                'declaringClassName' => 'GuzzleHttp\\Psr7\\Response',
                'implementingClassName' => 'GuzzleHttp\\Psr7\\Response',
                'currentClassName' => 'GuzzleHttp\\Psr7\\Response',
                'aliasName' => null,
            ],
            'assertStatusCodeRange' => [
                'name' => 'assertStatusCodeRange',
                'parameters' => [
                    'statusCode' => [
                        'name' => 'statusCode',
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
                        'startLine' => 155,
                        'endLine' => 155,
                        'startColumn' => 44,
                        'endColumn' => 58,
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
                'docComment' => null,
                'startLine' => 155,
                'endLine' => 160,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'GuzzleHttp\\Psr7',
                'declaringClassName' => 'GuzzleHttp\\Psr7\\Response',
                'implementingClassName' => 'GuzzleHttp\\Psr7\\Response',
                'currentClassName' => 'GuzzleHttp\\Psr7\\Response',
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
