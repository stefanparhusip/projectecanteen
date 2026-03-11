<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Console\Commands\BackupDatabase.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Console\Commands\BackupDatabase
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-f6dba1827f52dba4cd46bc8d99e324a8a2a930559cb0891f4a0aae39ec72b8a8',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Console\\Commands\\BackupDatabase',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Console/Commands/BackupDatabase.php',
            ],
        ],
        'namespace' => 'App\\Console\\Commands',
        'name' => 'App\\Console\\Commands\\BackupDatabase',
        'shortName' => 'BackupDatabase',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 61,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'signature' => [
                'declaringClassName' => 'App\\Console\\Commands\\BackupDatabase',
                'implementingClassName' => 'App\\Console\\Commands\\BackupDatabase',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'backup:run
        {--retention=30 : Retention in days (14, 30, or 90)}
        {--note= : Optional descriptive note stored with the backup}
        {--queue : Dispatch to queue instead of running synchronously}\'',
                    'attributes' => [
                        'startLine' => 11,
                        'endLine' => 14,
                        'startTokenPos' => 38,
                        'startFilePos' => 213,
                        'endTokenPos' => 38,
                        'endFilePos' => 428,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 11,
                'endLine' => 14,
                'startColumn' => 5,
                'endColumn' => 72,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'App\\Console\\Commands\\BackupDatabase',
                'implementingClassName' => 'App\\Console\\Commands\\BackupDatabase',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Create an encrypted database backup\'',
                    'attributes' => [
                        'startLine' => 16,
                        'endLine' => 16,
                        'startTokenPos' => 47,
                        'startFilePos' => 463,
                        'endTokenPos' => 47,
                        'endFilePos' => 499,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 16,
                'endLine' => 16,
                'startColumn' => 5,
                'endColumn' => 67,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'handle' => [
                'name' => 'handle',
                'parameters' => [
                    'service' => [
                        'name' => 'service',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Services\\BackupService',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 18,
                        'endLine' => 18,
                        'startColumn' => 28,
                        'endColumn' => 49,
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
                'docComment' => null,
                'startLine' => 18,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\BackupDatabase',
                'implementingClassName' => 'App\\Console\\Commands\\BackupDatabase',
                'currentClassName' => 'App\\Console\\Commands\\BackupDatabase',
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
