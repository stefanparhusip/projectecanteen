<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Auth/SessionGuard.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Auth\SessionGuard
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-44d43ed436a8773eb6da22188eff08e599063ded8e1c7dfc81d4d7a5fdca05cc-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Auth\\SessionGuard',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Auth/SessionGuard.php',
            ],
        ],
        'namespace' => 'Illuminate\\Auth',
        'name' => 'Illuminate\\Auth\\SessionGuard',
        'shortName' => 'SessionGuard',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 30,
        'endLine' => 1039,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
            1 => 'Illuminate\\Contracts\\Auth\\SupportsBasicAuth',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Auth\\GuardHelpers',
            1 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'name' => [
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'name' => 'name',
                'modifiers' => 2177,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * The name of the guard. Typically "web".
 *
 * Corresponds to guard name in authentication configuration.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 41,
                'endLine' => 41,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'lastAttempted' => [
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'name' => 'lastAttempted',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The user we last attempted to retrieve.
 *
 * @var \\Illuminate\\Contracts\\Auth\\Authenticatable
 */',
                'attributes' => [
                ],
                'startLine' => 48,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'viaRemember' => [
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'name' => 'viaRemember',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 55,
                        'endLine' => 55,
                        'startTokenPos' => 182,
                        'startFilePos' => 1638,
                        'endTokenPos' => 182,
                        'endFilePos' => 1642,
                    ],
                ],
                'docComment' => '/**
 * Indicates if the user was authenticated via a recaller cookie.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 55,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 35,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'rememberDuration' => [
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'name' => 'rememberDuration',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '576000',
                    'attributes' => [
                        'startLine' => 62,
                        'endLine' => 62,
                        'startTokenPos' => 193,
                        'startFilePos' => 1799,
                        'endTokenPos' => 193,
                        'endFilePos' => 1804,
                    ],
                ],
                'docComment' => '/**
 * The number of minutes that the "remember me" cookie should be valid for.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 62,
                'endLine' => 62,
                'startColumn' => 5,
                'endColumn' => 41,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'session' => [
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'name' => 'session',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The session used by the guard.
 *
 * @var \\Illuminate\\Contracts\\Session\\Session
 */',
                'attributes' => [
                ],
                'startLine' => 69,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'cookie' => [
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'name' => 'cookie',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The Illuminate cookie creator service.
 *
 * @var \\Illuminate\\Contracts\\Cookie\\QueueingFactory
 */',
                'attributes' => [
                ],
                'startLine' => 76,
                'endLine' => 76,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'request' => [
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'name' => 'request',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The request instance.
 *
 * @var \\Symfony\\Component\\HttpFoundation\\Request
 */',
                'attributes' => [
                ],
                'startLine' => 83,
                'endLine' => 83,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'events' => [
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'name' => 'events',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The event dispatcher instance.
 *
 * @var \\Illuminate\\Contracts\\Events\\Dispatcher
 */',
                'attributes' => [
                ],
                'startLine' => 90,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'timebox' => [
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'name' => 'timebox',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The timebox instance.
 *
 * @var \\Illuminate\\Support\\Timebox
 */',
                'attributes' => [
                ],
                'startLine' => 97,
                'endLine' => 97,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'timeboxDuration' => [
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'name' => 'timeboxDuration',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The number of microseconds that the timebox should wait for.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 104,
                'endLine' => 104,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'rehashOnLogin' => [
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'name' => 'rehashOnLogin',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * Indicates if passwords should be rehashed on login if needed.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 111,
                'endLine' => 111,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'hashKey' => [
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'name' => 'hashKey',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The key used to hash recaller cookie values.
 *
 * @var string|null
 */',
                'attributes' => [
                ],
                'startLine' => 118,
                'endLine' => 118,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'loggedOut' => [
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'name' => 'loggedOut',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 125,
                        'endLine' => 125,
                        'startTokenPos' => 260,
                        'startFilePos' => 3005,
                        'endTokenPos' => 260,
                        'endFilePos' => 3009,
                    ],
                ],
                'docComment' => '/**
 * Indicates if the logout method has been called.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 125,
                'endLine' => 125,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'recallAttempted' => [
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'name' => 'recallAttempted',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 132,
                        'endLine' => 132,
                        'startTokenPos' => 271,
                        'startFilePos' => 3149,
                        'endTokenPos' => 271,
                        'endFilePos' => 3153,
                    ],
                ],
                'docComment' => '/**
 * Indicates if a token user retrieval has been attempted.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 132,
                'endLine' => 132,
                'startColumn' => 5,
                'endColumn' => 39,
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
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 147,
                        'endLine' => 147,
                        'startColumn' => 9,
                        'endColumn' => 13,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'provider' => [
                        'name' => 'provider',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 148,
                        'endLine' => 148,
                        'startColumn' => 9,
                        'endColumn' => 30,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'session' => [
                        'name' => 'session',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Session\\Session',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 149,
                        'endLine' => 149,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'request' => [
                        'name' => 'request',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 150,
                                'endLine' => 150,
                                'startTokenPos' => 303,
                                'startFilePos' => 3754,
                                'endTokenPos' => 303,
                                'endFilePos' => 3757,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Symfony\\Component\\HttpFoundation\\Request',
                                            'isIdentifier' => false,
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
                        'startLine' => 150,
                        'endLine' => 150,
                        'startColumn' => 9,
                        'endColumn' => 32,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'timebox' => [
                        'name' => 'timebox',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 151,
                                'endLine' => 151,
                                'startTokenPos' => 313,
                                'startFilePos' => 3788,
                                'endTokenPos' => 313,
                                'endFilePos' => 3791,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Illuminate\\Support\\Timebox',
                                            'isIdentifier' => false,
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
                        'startLine' => 151,
                        'endLine' => 151,
                        'startColumn' => 9,
                        'endColumn' => 32,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'rehashOnLogin' => [
                        'name' => 'rehashOnLogin',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 152,
                                'endLine' => 152,
                                'startTokenPos' => 322,
                                'startFilePos' => 3824,
                                'endTokenPos' => 322,
                                'endFilePos' => 3827,
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
                        'startLine' => 152,
                        'endLine' => 152,
                        'startColumn' => 9,
                        'endColumn' => 34,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                    'timeboxDuration' => [
                        'name' => 'timeboxDuration',
                        'default' => [
                            'code' => '200000',
                            'attributes' => [
                                'startLine' => 153,
                                'endLine' => 153,
                                'startTokenPos' => 331,
                                'startFilePos' => 3861,
                                'endTokenPos' => 331,
                                'endFilePos' => 3866,
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
                        'startLine' => 153,
                        'endLine' => 153,
                        'startColumn' => 9,
                        'endColumn' => 37,
                        'parameterIndex' => 6,
                        'isOptional' => true,
                    ],
                    'hashKey' => [
                        'name' => 'hashKey',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 154,
                                'endLine' => 154,
                                'startTokenPos' => 341,
                                'startFilePos' => 3896,
                                'endTokenPos' => 341,
                                'endFilePos' => 3899,
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
                        'startLine' => 154,
                        'endLine' => 154,
                        'startColumn' => 9,
                        'endColumn' => 31,
                        'parameterIndex' => 7,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new authentication guard.
 *
 * @param  string  $name
 * @param  \\Illuminate\\Contracts\\Auth\\UserProvider  $provider
 * @param  \\Illuminate\\Contracts\\Session\\Session  $session
 * @param  \\Symfony\\Component\\HttpFoundation\\Request|null  $request
 * @param  \\Illuminate\\Support\\Timebox|null  $timebox
 * @param  bool  $rehashOnLogin
 * @param  int  $timeboxDuration
 * @param  string|null  $hashKey
 */',
                'startLine' => 146,
                'endLine' => 164,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'user' => [
                'name' => 'user',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the currently authenticated user.
 *
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|null
 */',
                'startLine' => 171,
                'endLine' => 207,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'userFromRecaller' => [
                'name' => 'userFromRecaller',
                'parameters' => [
                    'recaller' => [
                        'name' => 'recaller',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 215,
                        'endLine' => 215,
                        'startColumn' => 41,
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
 * Pull a user from the repository by its "remember me" cookie token.
 *
 * @param  \\Illuminate\\Auth\\Recaller  $recaller
 * @return mixed
 */',
                'startLine' => 215,
                'endLine' => 231,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'recaller' => [
                'name' => 'recaller',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the decrypted recaller cookie for the request.
 *
 * @return \\Illuminate\\Auth\\Recaller|null
 */',
                'startLine' => 238,
                'endLine' => 247,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'id' => [
                'name' => 'id',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the ID for the currently authenticated user.
 *
 * @return int|string|null
 */',
                'startLine' => 254,
                'endLine' => 263,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
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
                                'startLine' => 271,
                                'endLine' => 271,
                                'startTokenPos' => 898,
                                'startFilePos' => 7539,
                                'endTokenPos' => 899,
                                'endFilePos' => 7540,
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
                        'startLine' => 271,
                        'endLine' => 271,
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
                'startLine' => 271,
                'endLine' => 286,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
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
                        'startLine' => 294,
                        'endLine' => 294,
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
                'startLine' => 294,
                'endLine' => 303,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'validate' => [
                'name' => 'validate',
                'parameters' => [
                    'credentials' => [
                        'name' => 'credentials',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 311,
                                'endLine' => 311,
                                'startTokenPos' => 1048,
                                'startFilePos' => 8481,
                                'endTokenPos' => 1049,
                                'endFilePos' => 8482,
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
                        'startLine' => 311,
                        'endLine' => 311,
                        'startColumn' => 30,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Validate a user\'s credentials.
 *
 * @param  array  $credentials
 * @return bool
 */',
                'startLine' => 311,
                'endLine' => 324,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'basic' => [
                'name' => 'basic',
                'parameters' => [
                    'field' => [
                        'name' => 'field',
                        'default' => [
                            'code' => '\'email\'',
                            'attributes' => [
                                'startLine' => 335,
                                'endLine' => 335,
                                'startTokenPos' => 1156,
                                'startFilePos' => 9233,
                                'endTokenPos' => 1156,
                                'endFilePos' => 9239,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 335,
                        'endLine' => 335,
                        'startColumn' => 27,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'extraConditions' => [
                        'name' => 'extraConditions',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 335,
                                'endLine' => 335,
                                'startTokenPos' => 1163,
                                'startFilePos' => 9261,
                                'endTokenPos' => 1164,
                                'endFilePos' => 9262,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 335,
                        'endLine' => 335,
                        'startColumn' => 45,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Attempt to authenticate using HTTP Basic Auth.
 *
 * @param  string  $field
 * @param  array  $extraConditions
 * @return \\Symfony\\Component\\HttpFoundation\\Response|null
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\UnauthorizedHttpException
 */',
                'startLine' => 335,
                'endLine' => 349,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'onceBasic' => [
                'name' => 'onceBasic',
                'parameters' => [
                    'field' => [
                        'name' => 'field',
                        'default' => [
                            'code' => '\'email\'',
                            'attributes' => [
                                'startLine' => 360,
                                'endLine' => 360,
                                'startTokenPos' => 1243,
                                'startFilePos' => 10082,
                                'endTokenPos' => 1243,
                                'endFilePos' => 10088,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 360,
                        'endLine' => 360,
                        'startColumn' => 31,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'extraConditions' => [
                        'name' => 'extraConditions',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 360,
                                'endLine' => 360,
                                'startTokenPos' => 1250,
                                'startFilePos' => 10110,
                                'endTokenPos' => 1251,
                                'endFilePos' => 10111,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 360,
                        'endLine' => 360,
                        'startColumn' => 49,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Perform a stateless HTTP Basic login attempt.
 *
 * @param  string  $field
 * @param  array  $extraConditions
 * @return \\Symfony\\Component\\HttpFoundation\\Response|null
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\UnauthorizedHttpException
 */',
                'startLine' => 360,
                'endLine' => 367,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'attemptBasic' => [
                'name' => 'attemptBasic',
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
                        'startLine' => 377,
                        'endLine' => 377,
                        'startColumn' => 37,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'field' => [
                        'name' => 'field',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 377,
                        'endLine' => 377,
                        'startColumn' => 55,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'extraConditions' => [
                        'name' => 'extraConditions',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 377,
                                'endLine' => 377,
                                'startTokenPos' => 1329,
                                'startFilePos' => 10657,
                                'endTokenPos' => 1330,
                                'endFilePos' => 10658,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 377,
                        'endLine' => 377,
                        'startColumn' => 63,
                        'endColumn' => 83,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Attempt to authenticate using basic authentication.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Request  $request
 * @param  string  $field
 * @param  array  $extraConditions
 * @return bool
 */',
                'startLine' => 377,
                'endLine' => 386,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'basicCredentials' => [
                'name' => 'basicCredentials',
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
                        'startLine' => 395,
                        'endLine' => 395,
                        'startColumn' => 41,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'field' => [
                        'name' => 'field',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 395,
                        'endLine' => 395,
                        'startColumn' => 59,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the credential array for an HTTP Basic request.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Request  $request
 * @param  string  $field
 * @return array
 */',
                'startLine' => 395,
                'endLine' => 398,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'failedBasicResponse' => [
                'name' => 'failedBasicResponse',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the response for basic authentication.
 *
 * @return void
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\UnauthorizedHttpException
 */',
                'startLine' => 407,
                'endLine' => 410,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'attempt' => [
                'name' => 'attempt',
                'parameters' => [
                    'credentials' => [
                        'name' => 'credentials',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 419,
                                'endLine' => 419,
                                'startTokenPos' => 1471,
                                'startFilePos' => 11783,
                                'endTokenPos' => 1472,
                                'endFilePos' => 11784,
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
                        'startLine' => 419,
                        'endLine' => 419,
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
                                'startLine' => 419,
                                'endLine' => 419,
                                'startTokenPos' => 1479,
                                'startFilePos' => 11799,
                                'endTokenPos' => 1479,
                                'endFilePos' => 11803,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 419,
                        'endLine' => 419,
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
                'startLine' => 419,
                'endLine' => 446,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'attemptWhen' => [
                'name' => 'attemptWhen',
                'parameters' => [
                    'credentials' => [
                        'name' => 'credentials',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 456,
                                'endLine' => 456,
                                'startTokenPos' => 1645,
                                'startFilePos' => 13273,
                                'endTokenPos' => 1646,
                                'endFilePos' => 13274,
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
                        'startLine' => 456,
                        'endLine' => 456,
                        'startColumn' => 33,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'callbacks' => [
                        'name' => 'callbacks',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 456,
                                'endLine' => 456,
                                'startTokenPos' => 1653,
                                'startFilePos' => 13290,
                                'endTokenPos' => 1653,
                                'endFilePos' => 13293,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 456,
                        'endLine' => 456,
                        'startColumn' => 58,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'remember' => [
                        'name' => 'remember',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 456,
                                'endLine' => 456,
                                'startTokenPos' => 1660,
                                'startFilePos' => 13308,
                                'endTokenPos' => 1660,
                                'endFilePos' => 13312,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 456,
                        'endLine' => 456,
                        'startColumn' => 77,
                        'endColumn' => 93,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Attempt to authenticate a user with credentials and additional callbacks.
 *
 * @param  array  $credentials
 * @param  array|callable|null  $callbacks
 * @param  bool  $remember
 * @return bool
 */',
                'startLine' => 456,
                'endLine' => 480,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'hasValidCredentials' => [
                'name' => 'hasValidCredentials',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 489,
                        'endLine' => 489,
                        'startColumn' => 44,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'credentials' => [
                        'name' => 'credentials',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 489,
                        'endLine' => 489,
                        'startColumn' => 51,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the user matches the credentials.
 *
 * @param  mixed  $user
 * @param  array  $credentials
 * @return bool
 */',
                'startLine' => 489,
                'endLine' => 498,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'shouldLogin' => [
                'name' => 'shouldLogin',
                'parameters' => [
                    'callbacks' => [
                        'name' => 'callbacks',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 507,
                        'endLine' => 507,
                        'startColumn' => 36,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 507,
                        'endLine' => 507,
                        'startColumn' => 48,
                        'endColumn' => 76,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the user should login by executing the given callbacks.
 *
 * @param  array|callable|null  $callbacks
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return bool
 */',
                'startLine' => 507,
                'endLine' => 516,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'rehashPasswordIfRequired' => [
                'name' => 'rehashPasswordIfRequired',
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
                        'startLine' => 525,
                        'endLine' => 525,
                        'startColumn' => 49,
                        'endColumn' => 77,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'credentials' => [
                        'name' => 'credentials',
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
                            0 => [
                                'name' => 'SensitiveParameter',
                                'isRepeated' => false,
                                'arguments' => [
                                ],
                            ],
                        ],
                        'startLine' => 525,
                        'endLine' => 525,
                        'startColumn' => 80,
                        'endColumn' => 120,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Rehash the user\'s password if enabled and required.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @param  array  $credentials
 * @return void
 */',
                'startLine' => 525,
                'endLine' => 530,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
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
                        'startLine' => 539,
                        'endLine' => 539,
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
                                'startLine' => 539,
                                'endLine' => 539,
                                'startTokenPos' => 2021,
                                'startFilePos' => 15962,
                                'endTokenPos' => 2021,
                                'endFilePos' => 15966,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 539,
                        'endLine' => 539,
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
                'startLine' => 539,
                'endLine' => 548,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
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
                        'startLine' => 557,
                        'endLine' => 557,
                        'startColumn' => 27,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'remember' => [
                        'name' => 'remember',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 557,
                                'endLine' => 557,
                                'startTokenPos' => 2092,
                                'startFilePos' => 16403,
                                'endTokenPos' => 2092,
                                'endFilePos' => 16407,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 557,
                        'endLine' => 557,
                        'startColumn' => 58,
                        'endColumn' => 74,
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
                'startLine' => 557,
                'endLine' => 576,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'updateSession' => [
                'name' => 'updateSession',
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
                        'startLine' => 584,
                        'endLine' => 584,
                        'startColumn' => 38,
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
 * Update the session with the given ID and regenerate the session\'s token.
 *
 * @param  string  $id
 * @return void
 */',
                'startLine' => 584,
                'endLine' => 589,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'ensureRememberTokenIsSet' => [
                'name' => 'ensureRememberTokenIsSet',
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
                        'startLine' => 597,
                        'endLine' => 597,
                        'startColumn' => 49,
                        'endColumn' => 77,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new "remember me" token for the user if one doesn\'t already exist.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return void
 */',
                'startLine' => 597,
                'endLine' => 602,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'queueRecallerCookie' => [
                'name' => 'queueRecallerCookie',
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
                        'startLine' => 610,
                        'endLine' => 610,
                        'startColumn' => 44,
                        'endColumn' => 72,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Queue the recaller cookie into the cookie jar.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return void
 */',
                'startLine' => 610,
                'endLine' => 617,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'createRecaller' => [
                'name' => 'createRecaller',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 625,
                        'endLine' => 625,
                        'startColumn' => 39,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a "remember me" cookie for a given ID.
 *
 * @param  string  $value
 * @return \\Symfony\\Component\\HttpFoundation\\Cookie
 */',
                'startLine' => 625,
                'endLine' => 628,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'hashPasswordForCookie' => [
                'name' => 'hashPasswordForCookie',
                'parameters' => [
                    'passwordHash' => [
                        'name' => 'passwordHash',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 636,
                        'endLine' => 636,
                        'startColumn' => 43,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a HMAC of the password hash for storage in cookies.
 *
 * @param  string  $passwordHash
 * @return string
 */',
                'startLine' => 636,
                'endLine' => 643,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
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
                'startLine' => 650,
                'endLine' => 671,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'logoutCurrentDevice' => [
                'name' => 'logoutCurrentDevice',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Log the user out of the application on their current device only.
 *
 * This method does not cycle the "remember" token.
 *
 * @return void
 */',
                'startLine' => 680,
                'endLine' => 697,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'clearUserDataFromStorage' => [
                'name' => 'clearUserDataFromStorage',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove the user data from the session and cookies.
 *
 * @return void
 */',
                'startLine' => 704,
                'endLine' => 715,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'cycleRememberToken' => [
                'name' => 'cycleRememberToken',
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
                        'startLine' => 723,
                        'endLine' => 723,
                        'startColumn' => 43,
                        'endColumn' => 71,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Refresh the "remember me" token for the user.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return void
 */',
                'startLine' => 723,
                'endLine' => 728,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'logoutOtherDevices' => [
                'name' => 'logoutOtherDevices',
                'parameters' => [
                    'password' => [
                        'name' => 'password',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 740,
                        'endLine' => 740,
                        'startColumn' => 40,
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
 * Invalidate other sessions for the current user.
 *
 * The application must be using the AuthenticateSession middleware.
 *
 * @param  string  $password
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|null
 *
 * @throws \\Illuminate\\Auth\\AuthenticationException
 */',
                'startLine' => 740,
                'endLine' => 756,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'rehashUserPasswordForDeviceLogout' => [
                'name' => 'rehashUserPasswordForDeviceLogout',
                'parameters' => [
                    'password' => [
                        'name' => 'password',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 766,
                        'endLine' => 766,
                        'startColumn' => 58,
                        'endColumn' => 66,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Rehash the current user\'s password for logging out other devices via AuthenticateSession.
 *
 * @param  string  $password
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|null
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 766,
                'endLine' => 777,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'attempting' => [
                'name' => 'attempting',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 785,
                        'endLine' => 785,
                        'startColumn' => 32,
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
 * Register an authentication attempt event listener.
 *
 * @param  mixed  $callback
 * @return void
 */',
                'startLine' => 785,
                'endLine' => 788,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'fireAttemptEvent' => [
                'name' => 'fireAttemptEvent',
                'parameters' => [
                    'credentials' => [
                        'name' => 'credentials',
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
                        'startLine' => 797,
                        'endLine' => 797,
                        'startColumn' => 41,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'remember' => [
                        'name' => 'remember',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 797,
                                'endLine' => 797,
                                'startTokenPos' => 2974,
                                'startFilePos' => 23727,
                                'endTokenPos' => 2974,
                                'endFilePos' => 23731,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 797,
                        'endLine' => 797,
                        'startColumn' => 61,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Fire the attempt event with the arguments.
 *
 * @param  array  $credentials
 * @param  bool  $remember
 * @return void
 */',
                'startLine' => 797,
                'endLine' => 800,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'fireValidatedEvent' => [
                'name' => 'fireValidatedEvent',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 808,
                        'endLine' => 808,
                        'startColumn' => 43,
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
 * Fires the validated event if the dispatcher is set.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return void
 */',
                'startLine' => 808,
                'endLine' => 811,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'fireLoginEvent' => [
                'name' => 'fireLoginEvent',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 820,
                        'endLine' => 820,
                        'startColumn' => 39,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'remember' => [
                        'name' => 'remember',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 820,
                                'endLine' => 820,
                                'startTokenPos' => 3054,
                                'startFilePos' => 24383,
                                'endTokenPos' => 3054,
                                'endFilePos' => 24387,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 820,
                        'endLine' => 820,
                        'startColumn' => 46,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Fire the login event if the dispatcher is set.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @param  bool  $remember
 * @return void
 */',
                'startLine' => 820,
                'endLine' => 823,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'fireAuthenticatedEvent' => [
                'name' => 'fireAuthenticatedEvent',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 831,
                        'endLine' => 831,
                        'startColumn' => 47,
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
 * Fire the authenticated event if the dispatcher is set.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return void
 */',
                'startLine' => 831,
                'endLine' => 834,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'fireOtherDeviceLogoutEvent' => [
                'name' => 'fireOtherDeviceLogoutEvent',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 842,
                        'endLine' => 842,
                        'startColumn' => 51,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Fire the other device logout event if the dispatcher is set.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return void
 */',
                'startLine' => 842,
                'endLine' => 845,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'fireFailedEvent' => [
                'name' => 'fireFailedEvent',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 854,
                        'endLine' => 854,
                        'startColumn' => 40,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'credentials' => [
                        'name' => 'credentials',
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
                        'startLine' => 854,
                        'endLine' => 854,
                        'startColumn' => 47,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Fire the failed authentication attempt event with the given arguments.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable|null  $user
 * @param  array  $credentials
 * @return void
 */',
                'startLine' => 854,
                'endLine' => 857,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'getLastAttempted' => [
                'name' => 'getLastAttempted',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the last user we attempted to authenticate.
 *
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable
 */',
                'startLine' => 864,
                'endLine' => 867,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'getName' => [
                'name' => 'getName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a unique identifier for the auth session value.
 *
 * @return string
 */',
                'startLine' => 874,
                'endLine' => 877,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'getRecallerName' => [
                'name' => 'getRecallerName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the cookie used to store the "recaller".
 *
 * @return string
 */',
                'startLine' => 884,
                'endLine' => 887,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
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
                'startLine' => 894,
                'endLine' => 897,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'getRememberDuration' => [
                'name' => 'getRememberDuration',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the number of minutes the remember me cookie should be valid for.
 *
 * @return int
 */',
                'startLine' => 904,
                'endLine' => 907,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'setRememberDuration' => [
                'name' => 'setRememberDuration',
                'parameters' => [
                    'minutes' => [
                        'name' => 'minutes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 915,
                        'endLine' => 915,
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
 * Set the number of minutes the remember me cookie should be valid for.
 *
 * @param  int  $minutes
 * @return $this
 */',
                'startLine' => 915,
                'endLine' => 920,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'getCookieJar' => [
                'name' => 'getCookieJar',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the cookie creator instance used by the guard.
 *
 * @return \\Illuminate\\Contracts\\Cookie\\QueueingFactory
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 929,
                'endLine' => 936,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'setCookieJar' => [
                'name' => 'setCookieJar',
                'parameters' => [
                    'cookie' => [
                        'name' => 'cookie',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Cookie\\QueueingFactory',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 944,
                        'endLine' => 944,
                        'startColumn' => 34,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the cookie creator instance used by the guard.
 *
 * @param  \\Illuminate\\Contracts\\Cookie\\QueueingFactory  $cookie
 * @return void
 */',
                'startLine' => 944,
                'endLine' => 947,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'getDispatcher' => [
                'name' => 'getDispatcher',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the event dispatcher instance.
 *
 * @return \\Illuminate\\Contracts\\Events\\Dispatcher
 */',
                'startLine' => 954,
                'endLine' => 957,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'setDispatcher' => [
                'name' => 'setDispatcher',
                'parameters' => [
                    'events' => [
                        'name' => 'events',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 965,
                        'endLine' => 965,
                        'startColumn' => 35,
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
 * Set the event dispatcher instance.
 *
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $events
 * @return void
 */',
                'startLine' => 965,
                'endLine' => 968,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'getSession' => [
                'name' => 'getSession',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the session store used by the guard.
 *
 * @return \\Illuminate\\Contracts\\Session\\Session
 */',
                'startLine' => 975,
                'endLine' => 978,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'getUser' => [
                'name' => 'getUser',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the currently cached user.
 *
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|null
 */',
                'startLine' => 985,
                'endLine' => 988,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'setUser' => [
                'name' => 'setUser',
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
                        'startLine' => 996,
                        'endLine' => 996,
                        'startColumn' => 29,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the current user.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return $this
 */',
                'startLine' => 996,
                'endLine' => 1005,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'getRequest' => [
                'name' => 'getRequest',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current request instance.
 *
 * @return \\Symfony\\Component\\HttpFoundation\\Request
 */',
                'startLine' => 1012,
                'endLine' => 1015,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'setRequest' => [
                'name' => 'setRequest',
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
                        'startLine' => 1023,
                        'endLine' => 1023,
                        'startColumn' => 32,
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
 * Set the current request instance.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Request  $request
 * @return $this
 */',
                'startLine' => 1023,
                'endLine' => 1028,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
                'aliasName' => null,
            ],
            'getTimebox' => [
                'name' => 'getTimebox',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the timebox instance used by the guard.
 *
 * @return \\Illuminate\\Support\\Timebox
 */',
                'startLine' => 1035,
                'endLine' => 1038,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
                'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
                'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
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
