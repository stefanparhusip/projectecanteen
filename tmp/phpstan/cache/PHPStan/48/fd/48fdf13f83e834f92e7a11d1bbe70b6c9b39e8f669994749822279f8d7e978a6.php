<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Services\SuspiciousActivityService.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Services\SuspiciousActivityService
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-8a47f6ce8bf40e3974fa5236c7d603ca6ff3d4c9daa1f3f4a939fc1a094c33cf',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Services\\SuspiciousActivityService',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Services/SuspiciousActivityService.php',
            ],
        ],
        'namespace' => 'App\\Services',
        'name' => 'App\\Services\\SuspiciousActivityService',
        'shortName' => 'SuspiciousActivityService',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 106,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'LOCK_THRESHOLD' => [
                'declaringClassName' => 'App\\Services\\SuspiciousActivityService',
                'implementingClassName' => 'App\\Services\\SuspiciousActivityService',
                'name' => 'LOCK_THRESHOLD',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '3',
                    'attributes' => [
                        'startLine' => 14,
                        'endLine' => 14,
                        'startTokenPos' => 36,
                        'startFilePos' => 301,
                        'endTokenPos' => 36,
                        'endFilePos' => 301,
                    ],
                ],
                'docComment' => '/**
 * Number of suspicious events within the window before the account is locked.
 */',
                'attributes' => [
                ],
                'startLine' => 14,
                'endLine' => 14,
                'startColumn' => 5,
                'endColumn' => 29,
            ],
            'LOCK_MINUTES' => [
                'declaringClassName' => 'App\\Services\\SuspiciousActivityService',
                'implementingClassName' => 'App\\Services\\SuspiciousActivityService',
                'name' => 'LOCK_MINUTES',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '30',
                    'attributes' => [
                        'startLine' => 19,
                        'endLine' => 19,
                        'startTokenPos' => 47,
                        'startFilePos' => 384,
                        'endTokenPos' => 47,
                        'endFilePos' => 385,
                    ],
                ],
                'docComment' => '/**
 * Lock duration in minutes.
 */',
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 28,
            ],
            'WINDOW_MINUTES' => [
                'declaringClassName' => 'App\\Services\\SuspiciousActivityService',
                'implementingClassName' => 'App\\Services\\SuspiciousActivityService',
                'name' => 'WINDOW_MINUTES',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '10',
                    'attributes' => [
                        'startLine' => 24,
                        'endLine' => 24,
                        'startTokenPos' => 58,
                        'startFilePos' => 501,
                        'endTokenPos' => 58,
                        'endFilePos' => 502,
                    ],
                ],
                'docComment' => '/**
 * Sliding window for counting suspicious events (minutes).
 */',
                'attributes' => [
                ],
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 30,
            ],
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'record' => [
                'name' => 'record',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'App\\Models\\User',
                                            'isIdentifier' => false,
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
                        'startLine' => 35,
                        'endLine' => 35,
                        'startColumn' => 35,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'event' => [
                        'name' => 'event',
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
                        'startLine' => 35,
                        'endLine' => 35,
                        'startColumn' => 51,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'ip' => [
                        'name' => 'ip',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 35,
                                'endLine' => 35,
                                'startTokenPos' => 91,
                                'startFilePos' => 1043,
                                'endTokenPos' => 91,
                                'endFilePos' => 1044,
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
                        'startLine' => 35,
                        'endLine' => 35,
                        'startColumn' => 66,
                        'endColumn' => 80,
                        'parameterIndex' => 2,
                        'isOptional' => true,
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
 * Record a suspicious event for a user and lock if threshold exceeded.
 *
 * @param  int|User  $user
 * @param  string    $event   e.g. \'brute_login\', \'order_spam\', \'topup_flood\'
 * @param  string    $ip
 */',
                'startLine' => 35,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\SuspiciousActivityService',
                'implementingClassName' => 'App\\Services\\SuspiciousActivityService',
                'currentClassName' => 'App\\Services\\SuspiciousActivityService',
                'aliasName' => null,
            ],
            'lockUser' => [
                'name' => 'lockUser',
                'parameters' => [
                    'userId' => [
                        'name' => 'userId',
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
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 37,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'reason' => [
                        'name' => 'reason',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 58,
                                'endLine' => 58,
                                'startTokenPos' => 278,
                                'startFilePos' => 1769,
                                'endTokenPos' => 278,
                                'endFilePos' => 1770,
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
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 50,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'ip' => [
                        'name' => 'ip',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 58,
                                'endLine' => 58,
                                'startTokenPos' => 287,
                                'startFilePos' => 1786,
                                'endTokenPos' => 287,
                                'endFilePos' => 1787,
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
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 71,
                        'endColumn' => 85,
                        'parameterIndex' => 2,
                        'isOptional' => true,
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
 * Lock a user account for LOCK_MINUTES.
 */',
                'startLine' => 58,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\SuspiciousActivityService',
                'implementingClassName' => 'App\\Services\\SuspiciousActivityService',
                'currentClassName' => 'App\\Services\\SuspiciousActivityService',
                'aliasName' => null,
            ],
            'unlockUser' => [
                'name' => 'unlockUser',
                'parameters' => [
                    'userId' => [
                        'name' => 'userId',
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
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 39,
                        'endColumn' => 49,
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
 * Manually unlock a user (e.g. called by admin).
 */',
                'startLine' => 73,
                'endLine' => 76,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\SuspiciousActivityService',
                'implementingClassName' => 'App\\Services\\SuspiciousActivityService',
                'currentClassName' => 'App\\Services\\SuspiciousActivityService',
                'aliasName' => null,
            ],
            'isLocked' => [
                'name' => 'isLocked',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'App\\Models\\User',
                                            'isIdentifier' => false,
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
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 37,
                        'endColumn' => 50,
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
 * Returns true if the user\'s account is currently locked.
 */',
                'startLine' => 81,
                'endLine' => 85,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\SuspiciousActivityService',
                'implementingClassName' => 'App\\Services\\SuspiciousActivityService',
                'currentClassName' => 'App\\Services\\SuspiciousActivityService',
                'aliasName' => null,
            ],
            'lockTtlSeconds' => [
                'name' => 'lockTtlSeconds',
                'parameters' => [
                    'userId' => [
                        'name' => 'userId',
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
                        'startLine' => 90,
                        'endLine' => 90,
                        'startColumn' => 43,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
 * Seconds remaining on the account lock (0 if not locked).
 */',
                'startLine' => 90,
                'endLine' => 93,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\SuspiciousActivityService',
                'implementingClassName' => 'App\\Services\\SuspiciousActivityService',
                'currentClassName' => 'App\\Services\\SuspiciousActivityService',
                'aliasName' => null,
            ],
            'lockKey' => [
                'name' => 'lockKey',
                'parameters' => [
                    'userId' => [
                        'name' => 'userId',
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
                        'startLine' => 97,
                        'endLine' => 97,
                        'startColumn' => 36,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'startLine' => 97,
                'endLine' => 100,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\SuspiciousActivityService',
                'implementingClassName' => 'App\\Services\\SuspiciousActivityService',
                'currentClassName' => 'App\\Services\\SuspiciousActivityService',
                'aliasName' => null,
            ],
            'counterKey' => [
                'name' => 'counterKey',
                'parameters' => [
                    'userId' => [
                        'name' => 'userId',
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
                        'startLine' => 102,
                        'endLine' => 102,
                        'startColumn' => 39,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'event' => [
                        'name' => 'event',
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
                        'startLine' => 102,
                        'endLine' => 102,
                        'startColumn' => 52,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
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
                'startLine' => 102,
                'endLine' => 105,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\SuspiciousActivityService',
                'implementingClassName' => 'App\\Services\\SuspiciousActivityService',
                'currentClassName' => 'App\\Services\\SuspiciousActivityService',
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
