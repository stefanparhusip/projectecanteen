<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Services\BackupService.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Services\BackupService
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-7a569b5b7e754ec35cd848c92d11580a6b06703561627202a615a9d6aaa67f3b',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Services\\BackupService',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Services/BackupService.php',
            ],
        ],
        'namespace' => 'App\\Services',
        'name' => 'App\\Services\\BackupService',
        'shortName' => 'BackupService',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 10,
        'endLine' => 238,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'RETENTION_OPTIONS' => [
                'declaringClassName' => 'App\\Services\\BackupService',
                'implementingClassName' => 'App\\Services\\BackupService',
                'name' => 'RETENTION_OPTIONS',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '[14, 30, 90]',
                    'attributes' => [
                        'startLine' => 13,
                        'endLine' => 13,
                        'startTokenPos' => 43,
                        'startFilePos' => 284,
                        'endTokenPos' => 51,
                        'endFilePos' => 295,
                    ],
                ],
                'docComment' => '/** Allowed retention values (days) */',
                'attributes' => [
                ],
                'startLine' => 13,
                'endLine' => 13,
                'startColumn' => 5,
                'endColumn' => 50,
            ],
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'run' => [
                'name' => 'run',
                'parameters' => [
                    'retentionDays' => [
                        'name' => 'retentionDays',
                        'default' => [
                            'code' => '30',
                            'attributes' => [
                                'startLine' => 21,
                                'endLine' => 21,
                                'startTokenPos' => 70,
                                'startFilePos' => 689,
                                'endTokenPos' => 70,
                                'endFilePos' => 690,
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
                        'startLine' => 21,
                        'endLine' => 21,
                        'startColumn' => 25,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'note' => [
                        'name' => 'note',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 21,
                                'endLine' => 21,
                                'startTokenPos' => 80,
                                'startFilePos' => 709,
                                'endTokenPos' => 80,
                                'endFilePos' => 712,
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
                        'startLine' => 21,
                        'endLine' => 21,
                        'startColumn' => 50,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'App\\Models\\Backup',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the current database, encrypt it, persist to storage, and record
 * metadata in the `backups` table.
 */',
                'startLine' => 21,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\BackupService',
                'implementingClassName' => 'App\\Services\\BackupService',
                'currentClassName' => 'App\\Services\\BackupService',
                'aliasName' => null,
            ],
            'createFromContent' => [
                'name' => 'createFromContent',
                'parameters' => [
                    'content' => [
                        'name' => 'content',
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
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 39,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'retentionDays' => [
                        'name' => 'retentionDays',
                        'default' => [
                            'code' => '30',
                            'attributes' => [
                                'startLine' => 31,
                                'endLine' => 31,
                                'startTokenPos' => 136,
                                'startFilePos' => 1061,
                                'endTokenPos' => 136,
                                'endFilePos' => 1062,
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
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 56,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'note' => [
                        'name' => 'note',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 31,
                                'endLine' => 31,
                                'startTokenPos' => 146,
                                'startFilePos' => 1081,
                                'endTokenPos' => 146,
                                'endFilePos' => 1084,
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
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 81,
                        'endColumn' => 100,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'App\\Models\\Backup',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a backup record from already-available SQL content.
 * Useful in tests and for import workflows.
 */',
                'startLine' => 31,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\BackupService',
                'implementingClassName' => 'App\\Services\\BackupService',
                'currentClassName' => 'App\\Services\\BackupService',
                'aliasName' => null,
            ],
            'verify' => [
                'name' => 'verify',
                'parameters' => [
                    'backup' => [
                        'name' => 'backup',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Backup',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 56,
                        'endLine' => 56,
                        'startColumn' => 28,
                        'endColumn' => 41,
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
 * Verify that an existing backup file matches its stored checksum.
 */',
                'startLine' => 56,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\BackupService',
                'implementingClassName' => 'App\\Services\\BackupService',
                'currentClassName' => 'App\\Services\\BackupService',
                'aliasName' => null,
            ],
            'cleanup' => [
                'name' => 'cleanup',
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
 * Delete all backups whose retention window has expired.
 *
 * @return int Number of backups removed.
 */',
                'startLine' => 76,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\BackupService',
                'implementingClassName' => 'App\\Services\\BackupService',
                'currentClassName' => 'App\\Services\\BackupService',
                'aliasName' => null,
            ],
            'restore' => [
                'name' => 'restore',
                'parameters' => [
                    'backup' => [
                        'name' => 'backup',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Backup',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 98,
                        'endLine' => 98,
                        'startColumn' => 29,
                        'endColumn' => 42,
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
 * Decrypt a backup and restore the database.
 * Only call this after verify() returns true.
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 98,
                'endLine' => 126,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\BackupService',
                'implementingClassName' => 'App\\Services\\BackupService',
                'currentClassName' => 'App\\Services\\BackupService',
                'aliasName' => null,
            ],
            'encrypt' => [
                'name' => 'encrypt',
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
                        'startLine' => 134,
                        'endLine' => 134,
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
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Encrypt plaintext with AES-256-CBC, prepend the IV, and base64-encode
 * the result.  The encryption key is derived from APP_KEY.
 */',
                'startLine' => 134,
                'endLine' => 145,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\BackupService',
                'implementingClassName' => 'App\\Services\\BackupService',
                'currentClassName' => 'App\\Services\\BackupService',
                'aliasName' => null,
            ],
            'decrypt' => [
                'name' => 'decrypt',
                'parameters' => [
                    'ciphertext' => [
                        'name' => 'ciphertext',
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
                        'startLine' => 152,
                        'endLine' => 152,
                        'startColumn' => 29,
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
                'docComment' => '/**
 * Decode and decrypt a value previously encrypted with encrypt().
 *
 * @throws \\RuntimeException on decryption failure.
 */',
                'startLine' => 152,
                'endLine' => 168,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\BackupService',
                'implementingClassName' => 'App\\Services\\BackupService',
                'currentClassName' => 'App\\Services\\BackupService',
                'aliasName' => null,
            ],
            'dump' => [
                'name' => 'dump',
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
                'docComment' => '/**
 * Dump the active database to a SQL / binary string.
 *
 * - SQLite : binary file copy
 * - MySQL  : mysqldump output
 *
 * @throws \\RuntimeException if driver unsupported or dump fails.
 */',
                'startLine' => 180,
                'endLine' => 223,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\BackupService',
                'implementingClassName' => 'App\\Services\\BackupService',
                'currentClassName' => 'App\\Services\\BackupService',
                'aliasName' => null,
            ],
            'encryptionKey' => [
                'name' => 'encryptionKey',
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
                'docComment' => '/** 32-byte AES key derived from the application APP_KEY. */',
                'startLine' => 226,
                'endLine' => 237,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\BackupService',
                'implementingClassName' => 'App\\Services\\BackupService',
                'currentClassName' => 'App\\Services\\BackupService',
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
