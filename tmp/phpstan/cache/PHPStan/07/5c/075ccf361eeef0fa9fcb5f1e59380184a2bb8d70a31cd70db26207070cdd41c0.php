<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/RequestException.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Client\RequestException
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-dd288f940d3aa2eb6d03458fa833586fdd7d08a2633b784afca18de067d5f66e-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Http\\Client\\RequestException',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/RequestException.php',
            ],
        ],
        'namespace' => 'Illuminate\\Http\\Client',
        'name' => 'Illuminate\\Http\\Client\\RequestException',
        'shortName' => 'RequestException',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 7,
        'endLine' => 123,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Http\\Client\\HttpClientException',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'response' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'implementingClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'name' => 'response',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The response instance.
 *
 * @var \\Illuminate\\Http\\Client\\Response
 */',
                'attributes' => [
                ],
                'startLine' => 14,
                'endLine' => 14,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'truncateExceptionsAt' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'implementingClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'name' => 'truncateExceptionsAt',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The current truncation length for the exception message.
 *
 * @var int|false|null
 */',
                'attributes' => [
                ],
                'startLine' => 21,
                'endLine' => 21,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'truncateAt' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'implementingClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'name' => 'truncateAt',
                'modifiers' => 17,
                'type' => null,
                'default' => [
                    'code' => '120',
                    'attributes' => [
                        'startLine' => 28,
                        'endLine' => 28,
                        'startTokenPos' => 46,
                        'startFilePos' => 535,
                        'endTokenPos' => 46,
                        'endFilePos' => 537,
                    ],
                ],
                'docComment' => '/**
 * The global truncation length for the exception message.
 *
 * @var int|false
 */',
                'attributes' => [
                ],
                'startLine' => 28,
                'endLine' => 28,
                'startColumn' => 5,
                'endColumn' => 36,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'hasBeenSummarized' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'implementingClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'name' => 'hasBeenSummarized',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 35,
                        'endLine' => 35,
                        'startTokenPos' => 57,
                        'startFilePos' => 677,
                        'endTokenPos' => 57,
                        'endFilePos' => 681,
                    ],
                ],
                'docComment' => '/**
 * Whether the response has been summarized in the message.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 35,
                'endLine' => 35,
                'startColumn' => 5,
                'endColumn' => 38,
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
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Http\\Client\\Response',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 43,
                        'endLine' => 43,
                        'startColumn' => 33,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'truncateExceptionsAt' => [
                        'name' => 'truncateExceptionsAt',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 43,
                                'endLine' => 43,
                                'startTokenPos' => 77,
                                'startFilePos' => 936,
                                'endTokenPos' => 77,
                                'endFilePos' => 939,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 43,
                        'endLine' => 43,
                        'startColumn' => 53,
                        'endColumn' => 80,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new exception instance.
 *
 * @param  \\Illuminate\\Http\\Client\\Response  $response
 * @param  int|false|null  $truncateExceptionsAt
 */',
                'startLine' => 43,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'implementingClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'currentClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'aliasName' => null,
            ],
            'truncate' => [
                'name' => 'truncate',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Enable truncation of request exception messages.
 *
 * @return void
 */',
                'startLine' => 57,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'implementingClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'currentClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'aliasName' => null,
            ],
            'truncateAt' => [
                'name' => 'truncateAt',
                'parameters' => [
                    'length' => [
                        'name' => 'length',
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
                        'startLine' => 68,
                        'endLine' => 68,
                        'startColumn' => 39,
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
 * Set the truncation length for request exception messages.
 *
 * @param  int  $length
 * @return void
 */',
                'startLine' => 68,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'implementingClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'currentClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'aliasName' => null,
            ],
            'dontTruncate' => [
                'name' => 'dontTruncate',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Disable truncation of request exception messages.
 *
 * @return void
 */',
                'startLine' => 78,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'implementingClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'currentClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'aliasName' => null,
            ],
            'report' => [
                'name' => 'report',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepare the exception message.
 *
 * @return bool
 */',
                'startLine' => 88,
                'endLine' => 97,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'implementingClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'currentClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'aliasName' => null,
            ],
            'prepareMessage' => [
                'name' => 'prepareMessage',
                'parameters' => [
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Http\\Client\\Response',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 105,
                        'endLine' => 105,
                        'startColumn' => 39,
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
 * Prepare the exception message.
 *
 * @param  \\Illuminate\\Http\\Client\\Response  $response
 * @return string
 */',
                'startLine' => 105,
                'endLine' => 122,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'implementingClassName' => 'Illuminate\\Http\\Client\\RequestException',
                'currentClassName' => 'Illuminate\\Http\\Client\\RequestException',
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
