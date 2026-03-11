<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Auth/StatefulGuard.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Auth\StatefulGuard
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-32b8484993c35e9ebe24255015a2575856020ad6176d299449290eb5a6d61327-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Auth/StatefulGuard.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Auth',
        'name' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
        'shortName' => 'StatefulGuard',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 63,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Auth\\Guard',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'attempt' => [
                'name' => 'attempt',
                'parameters' => [
                    'credentials' => [
                        'name' => 'credentials',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 14,
                                'endLine' => 14,
                                'startTokenPos' => 31,
                                'startFilePos' => 310,
                                'endTokenPos' => 32,
                                'endFilePos' => 311,
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
                        'startLine' => 14,
                        'endLine' => 14,
                        'startColumn' => 29,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'remember' => [
                        'name' => 'remember',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 14,
                                'endLine' => 14,
                                'startTokenPos' => 39,
                                'startFilePos' => 326,
                                'endTokenPos' => 39,
                                'endFilePos' => 330,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 14,
                        'endLine' => 14,
                        'startColumn' => 54,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Attempt to authenticate a user using the given credentials.
 *
 * @param  array  $credentials
 * @param  bool  $remember
 * @return bool
 */',
                'startLine' => 14,
                'endLine' => 14,
                'startColumn' => 5,
                'endColumn' => 72,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'aliasName' => null,
            ],
            'once' => [
                'name' => 'once',
                'parameters' => [
                    'credentials' => [
                        'name' => 'credentials',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 22,
                                'endLine' => 22,
                                'startTokenPos' => 57,
                                'startFilePos' => 527,
                                'endTokenPos' => 58,
                                'endFilePos' => 528,
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
                        'startLine' => 22,
                        'endLine' => 22,
                        'startColumn' => 26,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Log a user into the application without sessions or cookies.
 *
 * @param  array  $credentials
 * @return bool
 */',
                'startLine' => 22,
                'endLine' => 22,
                'startColumn' => 5,
                'endColumn' => 50,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'aliasName' => null,
            ],
            'login' => [
                'name' => 'login',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Auth\\Authenticatable',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 27,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'remember' => [
                        'name' => 'remember',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 31,
                                'endLine' => 31,
                                'startTokenPos' => 79,
                                'startFilePos' => 773,
                                'endTokenPos' => 79,
                                'endFilePos' => 777,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 50,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Log a user into the application.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @param  bool  $remember
 * @return void
 */',
                'startLine' => 31,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 68,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'aliasName' => null,
            ],
            'loginUsingId' => [
                'name' => 'loginUsingId',
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
                        'startLine' => 40,
                        'endLine' => 40,
                        'startColumn' => 34,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'remember' => [
                        'name' => 'remember',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 40,
                                'endLine' => 40,
                                'startTokenPos' => 98,
                                'startFilePos' => 1027,
                                'endTokenPos' => 98,
                                'endFilePos' => 1031,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 40,
                        'endLine' => 40,
                        'startColumn' => 39,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Log the given user ID into the application.
 *
 * @param  mixed  $id
 * @param  bool  $remember
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|false
 */',
                'startLine' => 40,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 57,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'aliasName' => null,
            ],
            'onceUsingId' => [
                'name' => 'onceUsingId',
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
                        'startLine' => 48,
                        'endLine' => 48,
                        'startColumn' => 33,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Log the given user ID into the application without sessions or cookies.
 *
 * @param  mixed  $id
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|false
 */',
                'startLine' => 48,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 37,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'aliasName' => null,
            ],
            'viaRemember' => [
                'name' => 'viaRemember',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the user was authenticated via "remember me" cookie.
 *
 * @return bool
 */',
                'startLine' => 55,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 34,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'aliasName' => null,
            ],
            'logout' => [
                'name' => 'logout',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Log the user out of the application.
 *
 * @return void
 */',
                'startLine' => 62,
                'endLine' => 62,
                'startColumn' => 5,
                'endColumn' => 29,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
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
