<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Session/Session.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Session\Session
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-9369f38a80fd6f415aa4f83fdb767f1cf51e6205ec6ecafe025534daa25e8ff6-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Session\\Session',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Session/Session.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Session',
        'name' => 'Illuminate\\Contracts\\Session\\Session',
        'shortName' => 'Session',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 213,
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
        ],
        'immediateMethods' => [
            'getName' => [
                'name' => 'getName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the session.
 *
 * @return string
 */',
                'startLine' => 12,
                'endLine' => 12,
                'startColumn' => 5,
                'endColumn' => 30,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'setName' => [
                'name' => 'setName',
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
                        'startLine' => 20,
                        'endLine' => 20,
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
 * Set the name of the session.
 *
 * @param  string  $name
 * @return void
 */',
                'startLine' => 20,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 35,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'getId' => [
                'name' => 'getId',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current session ID.
 *
 * @return string
 */',
                'startLine' => 27,
                'endLine' => 27,
                'startColumn' => 5,
                'endColumn' => 28,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'setId' => [
                'name' => 'setId',
                'parameters' => [
                    'id' => [
                        'name' => 'id',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 35,
                        'endLine' => 35,
                        'startColumn' => 27,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the session ID.
 *
 * @param  string  $id
 * @return void
 */',
                'startLine' => 35,
                'endLine' => 35,
                'startColumn' => 5,
                'endColumn' => 31,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'start' => [
                'name' => 'start',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Start the session, reading the data from a handler.
 *
 * @return bool
 */',
                'startLine' => 42,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 28,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'save' => [
                'name' => 'save',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Save the session data to storage.
 *
 * @return void
 */',
                'startLine' => 49,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 27,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'all' => [
                'name' => 'all',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the session data.
 *
 * @return array
 */',
                'startLine' => 56,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 26,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'exists' => [
                'name' => 'exists',
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
                        'startLine' => 64,
                        'endLine' => 64,
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
 * Checks if a key exists.
 *
 * @param  string|array  $key
 * @return bool
 */',
                'startLine' => 64,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'has' => [
                'name' => 'has',
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
                        'startLine' => 72,
                        'endLine' => 72,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Checks if a key is present and not null.
 *
 * @param  string|array  $key
 * @return bool
 */',
                'startLine' => 72,
                'endLine' => 72,
                'startColumn' => 5,
                'endColumn' => 30,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'get' => [
                'name' => 'get',
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
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 81,
                                'endLine' => 81,
                                'startTokenPos' => 131,
                                'startFilePos' => 1400,
                                'endTokenPos' => 131,
                                'endFilePos' => 1403,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 31,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an item from the session.
 *
 * @param  string  $key
 * @param  mixed  $default
 * @return mixed
 */',
                'startLine' => 81,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 47,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'pull' => [
                'name' => 'pull',
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
                        'startLine' => 90,
                        'endLine' => 90,
                        'startColumn' => 26,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 90,
                                'endLine' => 90,
                                'startTokenPos' => 150,
                                'startFilePos' => 1609,
                                'endTokenPos' => 150,
                                'endFilePos' => 1612,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 90,
                        'endLine' => 90,
                        'startColumn' => 32,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the value of a given key and then forget it.
 *
 * @param  string  $key
 * @param  mixed  $default
 * @return mixed
 */',
                'startLine' => 90,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 48,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'put' => [
                'name' => 'put',
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
                        'startLine' => 99,
                        'endLine' => 99,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 99,
                                'endLine' => 99,
                                'startTokenPos' => 169,
                                'startFilePos' => 1838,
                                'endTokenPos' => 169,
                                'endFilePos' => 1841,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 99,
                        'endLine' => 99,
                        'startColumn' => 31,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Put a key / value pair or array of key / value pairs in the session.
 *
 * @param  string|array  $key
 * @param  mixed  $value
 * @return void
 */',
                'startLine' => 99,
                'endLine' => 99,
                'startColumn' => 5,
                'endColumn' => 45,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'flash' => [
                'name' => 'flash',
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
                        'startLine' => 108,
                        'endLine' => 108,
                        'startColumn' => 27,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 108,
                                'endLine' => 108,
                                'startTokenPos' => 190,
                                'startFilePos' => 2042,
                                'endTokenPos' => 190,
                                'endFilePos' => 2045,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 108,
                        'endLine' => 108,
                        'startColumn' => 40,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flash a key / value pair to the session.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return void
 */',
                'startLine' => 108,
                'endLine' => 108,
                'startColumn' => 5,
                'endColumn' => 54,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'token' => [
                'name' => 'token',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the CSRF token value.
 *
 * @return string
 */',
                'startLine' => 115,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 28,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'regenerateToken' => [
                'name' => 'regenerateToken',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Regenerate the CSRF token value.
 *
 * @return void
 */',
                'startLine' => 122,
                'endLine' => 122,
                'startColumn' => 5,
                'endColumn' => 38,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'remove' => [
                'name' => 'remove',
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
                        'startLine' => 130,
                        'endLine' => 130,
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
 * Remove an item from the session, returning its value.
 *
 * @param  string  $key
 * @return mixed
 */',
                'startLine' => 130,
                'endLine' => 130,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'forget' => [
                'name' => 'forget',
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
                        'startLine' => 138,
                        'endLine' => 138,
                        'startColumn' => 28,
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
 * Remove one or many items from the session.
 *
 * @param  string|array  $keys
 * @return void
 */',
                'startLine' => 138,
                'endLine' => 138,
                'startColumn' => 5,
                'endColumn' => 34,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'flush' => [
                'name' => 'flush',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove all of the items from the session.
 *
 * @return void
 */',
                'startLine' => 145,
                'endLine' => 145,
                'startColumn' => 5,
                'endColumn' => 28,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'invalidate' => [
                'name' => 'invalidate',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flush the session data and regenerate the ID.
 *
 * @return bool
 */',
                'startLine' => 152,
                'endLine' => 152,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'regenerate' => [
                'name' => 'regenerate',
                'parameters' => [
                    'destroy' => [
                        'name' => 'destroy',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 160,
                                'endLine' => 160,
                                'startTokenPos' => 274,
                                'startFilePos' => 3023,
                                'endTokenPos' => 274,
                                'endFilePos' => 3027,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 160,
                        'endLine' => 160,
                        'startColumn' => 32,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Generate a new session identifier.
 *
 * @param  bool  $destroy
 * @return bool
 */',
                'startLine' => 160,
                'endLine' => 160,
                'startColumn' => 5,
                'endColumn' => 49,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'migrate' => [
                'name' => 'migrate',
                'parameters' => [
                    'destroy' => [
                        'name' => 'destroy',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 168,
                                'endLine' => 168,
                                'startTokenPos' => 290,
                                'startFilePos' => 3194,
                                'endTokenPos' => 290,
                                'endFilePos' => 3198,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 168,
                        'endLine' => 168,
                        'startColumn' => 29,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Generate a new session ID for the session.
 *
 * @param  bool  $destroy
 * @return bool
 */',
                'startLine' => 168,
                'endLine' => 168,
                'startColumn' => 5,
                'endColumn' => 46,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'isStarted' => [
                'name' => 'isStarted',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the session has been started.
 *
 * @return bool
 */',
                'startLine' => 175,
                'endLine' => 175,
                'startColumn' => 5,
                'endColumn' => 32,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'previousUrl' => [
                'name' => 'previousUrl',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the previous URL from the session.
 *
 * @return string|null
 */',
                'startLine' => 182,
                'endLine' => 182,
                'startColumn' => 5,
                'endColumn' => 34,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'setPreviousUrl' => [
                'name' => 'setPreviousUrl',
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
                        'startLine' => 190,
                        'endLine' => 190,
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
 * Set the "previous" URL in the session.
 *
 * @param  string  $url
 * @return void
 */',
                'startLine' => 190,
                'endLine' => 190,
                'startColumn' => 5,
                'endColumn' => 41,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'getHandler' => [
                'name' => 'getHandler',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the session handler instance.
 *
 * @return \\SessionHandlerInterface
 */',
                'startLine' => 197,
                'endLine' => 197,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'handlerNeedsRequest' => [
                'name' => 'handlerNeedsRequest',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the session handler needs a request.
 *
 * @return bool
 */',
                'startLine' => 204,
                'endLine' => 204,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'aliasName' => null,
            ],
            'setRequestOnHandler' => [
                'name' => 'setRequestOnHandler',
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
                        'startLine' => 212,
                        'endLine' => 212,
                        'startColumn' => 41,
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
 * Set the request on the handler instance.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return void
 */',
                'startLine' => 212,
                'endLine' => 212,
                'startColumn' => 5,
                'endColumn' => 50,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Session',
                'declaringClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'implementingClassName' => 'Illuminate\\Contracts\\Session\\Session',
                'currentClassName' => 'Illuminate\\Contracts\\Session\\Session',
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
