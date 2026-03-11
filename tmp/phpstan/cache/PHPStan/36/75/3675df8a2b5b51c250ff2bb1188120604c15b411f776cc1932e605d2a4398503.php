<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../symfony/http-foundation/JsonResponse.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\HttpFoundation\JsonResponse
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-a081fe94c31dc84f6fd1b3fff3e337bcbbbe53aed2bb9f233f006e7e5a196fca-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../symfony/http-foundation/JsonResponse.php',
            ],
        ],
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'name' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
        'shortName' => 'JsonResponse',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Response represents an HTTP response in JSON format.
 *
 * Note that this class does not force the returned JSON content to be an
 * object. It is however recommended that you do return an object as it
 * protects yourself against XSSI and JSON-JavaScript Hijacking.
 *
 * @see https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/AJAX_Security_Cheat_Sheet.md#always-return-json-with-an-object-on-the-outside
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 */',
        'attributes' => [
        ],
        'startLine' => 25,
        'endLine' => 187,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Symfony\\Component\\HttpFoundation\\Response',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'DEFAULT_ENCODING_OPTIONS' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'name' => 'DEFAULT_ENCODING_OPTIONS',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '15',
                    'attributes' => [
                        'startLine' => 32,
                        'endLine' => 32,
                        'startTokenPos' => 52,
                        'startFilePos' => 1087,
                        'endTokenPos' => 52,
                        'endFilePos' => 1088,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 47,
            ],
        ],
        'immediateProperties' => [
            'data' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'name' => 'data',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'mixed',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 27,
                'endLine' => 27,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'callback' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'name' => 'callback',
                'modifiers' => 2,
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 28,
                        'endLine' => 28,
                        'startTokenPos' => 37,
                        'startFilePos' => 860,
                        'endTokenPos' => 37,
                        'endFilePos' => 863,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 28,
                'endLine' => 28,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'encodingOptions' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'name' => 'encodingOptions',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'self::DEFAULT_ENCODING_OPTIONS',
                    'attributes' => [
                        'startLine' => 34,
                        'endLine' => 34,
                        'startTokenPos' => 63,
                        'startFilePos' => 1129,
                        'endTokenPos' => 65,
                        'endFilePos' => 1158,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 34,
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 68,
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
                    'data' => [
                        'name' => 'data',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 39,
                                'endLine' => 39,
                                'startTokenPos' => 82,
                                'startFilePos' => 1286,
                                'endTokenPos' => 82,
                                'endFilePos' => 1289,
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
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 33,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'status' => [
                        'name' => 'status',
                        'default' => [
                            'code' => '200',
                            'attributes' => [
                                'startLine' => 39,
                                'endLine' => 39,
                                'startTokenPos' => 91,
                                'startFilePos' => 1306,
                                'endTokenPos' => 91,
                                'endFilePos' => 1308,
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
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 53,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 39,
                                'endLine' => 39,
                                'startTokenPos' => 100,
                                'startFilePos' => 1328,
                                'endTokenPos' => 101,
                                'endFilePos' => 1329,
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
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 72,
                        'endColumn' => 90,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'json' => [
                        'name' => 'json',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 39,
                                'endLine' => 39,
                                'startTokenPos' => 110,
                                'startFilePos' => 1345,
                                'endTokenPos' => 110,
                                'endFilePos' => 1349,
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
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 93,
                        'endColumn' => 110,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @param bool $json If the data is already a JSON string
 */',
                'startLine' => 39,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'aliasName' => null,
            ],
            'fromJsonString' => [
                'name' => 'fromJsonString',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 64,
                        'endLine' => 64,
                        'startColumn' => 43,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'status' => [
                        'name' => 'status',
                        'default' => [
                            'code' => '200',
                            'attributes' => [
                                'startLine' => 64,
                                'endLine' => 64,
                                'startTokenPos' => 241,
                                'startFilePos' => 2283,
                                'endTokenPos' => 241,
                                'endFilePos' => 2285,
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
                        'startLine' => 64,
                        'endLine' => 64,
                        'startColumn' => 57,
                        'endColumn' => 73,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 64,
                                'endLine' => 64,
                                'startTokenPos' => 250,
                                'startFilePos' => 2305,
                                'endTokenPos' => 251,
                                'endFilePos' => 2306,
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
                        'startLine' => 64,
                        'endLine' => 64,
                        'startColumn' => 76,
                        'endColumn' => 94,
                        'parameterIndex' => 2,
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
                ],
                'docComment' => '/**
 * Factory method for chainability.
 *
 * Example:
 *
 *     return JsonResponse::fromJsonString(\'{"key": "value"}\')
 *         ->setSharedMaxAge(300);
 *
 * @param string $data    The JSON response string
 * @param int    $status  The response status code (200 "OK" by default)
 * @param array  $headers An array of response headers
 */',
                'startLine' => 64,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'aliasName' => null,
            ],
            'setCallback' => [
                'name' => 'setCallback',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
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
                        'startLine' => 78,
                        'endLine' => 78,
                        'startColumn' => 33,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
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
                ],
                'docComment' => '/**
 * Sets the JSONP callback.
 *
 * @param string|null $callback The JSONP callback or null to use none
 *
 * @return $this
 *
 * @throws \\InvalidArgumentException When the callback name is not valid
 */',
                'startLine' => 78,
                'endLine' => 102,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'aliasName' => null,
            ],
            'setJson' => [
                'name' => 'setJson',
                'parameters' => [
                    'json' => [
                        'name' => 'json',
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
                        'startLine' => 109,
                        'endLine' => 109,
                        'startColumn' => 29,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
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
                ],
                'docComment' => '/**
 * Sets a raw string containing a JSON document to be sent.
 *
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
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'aliasName' => null,
            ],
            'setData' => [
                'name' => 'setData',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 123,
                                'endLine' => 123,
                                'startTokenPos' => 611,
                                'startFilePos' => 4611,
                                'endTokenPos' => 612,
                                'endFilePos' => 4612,
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
                        'startLine' => 123,
                        'endLine' => 123,
                        'startColumn' => 29,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
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
                ],
                'docComment' => '/**
 * Sets the data to be sent as JSON.
 *
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 123,
                'endLine' => 143,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'aliasName' => null,
            ],
            'getEncodingOptions' => [
                'name' => 'getEncodingOptions',
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
                'docComment' => '/**
 * Returns options used while encoding data to JSON.
 */',
                'startLine' => 148,
                'endLine' => 151,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'aliasName' => null,
            ],
            'setEncodingOptions' => [
                'name' => 'setEncodingOptions',
                'parameters' => [
                    'encodingOptions' => [
                        'name' => 'encodingOptions',
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
                        'startLine' => 158,
                        'endLine' => 158,
                        'startColumn' => 40,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
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
                ],
                'docComment' => '/**
 * Sets options used while encoding data to JSON.
 *
 * @return $this
 */',
                'startLine' => 158,
                'endLine' => 163,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'aliasName' => null,
            ],
            'update' => [
                'name' => 'update',
                'parameters' => [
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
                ],
                'docComment' => '/**
 * Updates the content and headers according to the JSON data and callback.
 *
 * @return $this
 */',
                'startLine' => 170,
                'endLine' => 186,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
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
