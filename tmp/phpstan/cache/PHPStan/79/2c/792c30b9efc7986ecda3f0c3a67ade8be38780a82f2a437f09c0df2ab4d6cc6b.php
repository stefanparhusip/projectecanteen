<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Jobs\ProcessBulkExport.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Jobs\ProcessBulkExport
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-8f1414bfc2c9f14d3c1dfcc72434a5f8f241605ce5c88e7c9d78d55d2ef9ea1d',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Jobs\\ProcessBulkExport',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Jobs/ProcessBulkExport.php',
            ],
        ],
        'namespace' => 'App\\Jobs',
        'name' => 'App\\Jobs\\ProcessBulkExport',
        'shortName' => 'ProcessBulkExport',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 17,
        'endLine' => 175,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Foundation\\Bus\\Dispatchable',
            1 => 'Illuminate\\Queue\\InteractsWithQueue',
            2 => 'Illuminate\\Bus\\Queueable',
            3 => 'Illuminate\\Queue\\SerializesModels',
        ],
        'immediateConstants' => [
            'CHUNK_SIZE' => [
                'declaringClassName' => 'App\\Jobs\\ProcessBulkExport',
                'implementingClassName' => 'App\\Jobs\\ProcessBulkExport',
                'name' => 'CHUNK_SIZE',
                'modifiers' => 4,
                'type' => null,
                'value' => [
                    'code' => '500',
                    'attributes' => [
                        'startLine' => 22,
                        'endLine' => 22,
                        'startTokenPos' => 96,
                        'startFilePos' => 628,
                        'endTokenPos' => 96,
                        'endFilePos' => 630,
                    ],
                ],
                'docComment' => '/** Rows processed per DB chunk to keep memory usage bounded. */',
                'attributes' => [
                ],
                'startLine' => 22,
                'endLine' => 22,
                'startColumn' => 5,
                'endColumn' => 35,
            ],
        ],
        'immediateProperties' => [
            'exportJob' => [
                'declaringClassName' => 'App\\Jobs\\ProcessBulkExport',
                'implementingClassName' => 'App\\Jobs\\ProcessBulkExport',
                'name' => 'exportJob',
                'modifiers' => 132,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'App\\Models\\ExportJob',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 33,
                'endColumn' => 69,
                'isPromoted' => true,
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
                    'exportJob' => [
                        'name' => 'exportJob',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\ExportJob',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 24,
                        'endLine' => 24,
                        'startColumn' => 33,
                        'endColumn' => 69,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 73,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Jobs',
                'declaringClassName' => 'App\\Jobs\\ProcessBulkExport',
                'implementingClassName' => 'App\\Jobs\\ProcessBulkExport',
                'currentClassName' => 'App\\Jobs\\ProcessBulkExport',
                'aliasName' => null,
            ],
            'handle' => [
                'name' => 'handle',
                'parameters' => [
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
                'startLine' => 26,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Jobs',
                'declaringClassName' => 'App\\Jobs\\ProcessBulkExport',
                'implementingClassName' => 'App\\Jobs\\ProcessBulkExport',
                'currentClassName' => 'App\\Jobs\\ProcessBulkExport',
                'aliasName' => null,
            ],
            'exportTransactions' => [
                'name' => 'exportTransactions',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 47,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Jobs',
                'declaringClassName' => 'App\\Jobs\\ProcessBulkExport',
                'implementingClassName' => 'App\\Jobs\\ProcessBulkExport',
                'currentClassName' => 'App\\Jobs\\ProcessBulkExport',
                'aliasName' => null,
            ],
            'exportOrders' => [
                'name' => 'exportOrders',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 82,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Jobs',
                'declaringClassName' => 'App\\Jobs\\ProcessBulkExport',
                'implementingClassName' => 'App\\Jobs\\ProcessBulkExport',
                'currentClassName' => 'App\\Jobs\\ProcessBulkExport',
                'aliasName' => null,
            ],
            'exportUsers' => [
                'name' => 'exportUsers',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 117,
                'endLine' => 150,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Jobs',
                'declaringClassName' => 'App\\Jobs\\ProcessBulkExport',
                'implementingClassName' => 'App\\Jobs\\ProcessBulkExport',
                'currentClassName' => 'App\\Jobs\\ProcessBulkExport',
                'aliasName' => null,
            ],
            'openCsvFile' => [
                'name' => 'openCsvFile',
                'parameters' => [
                    'relativePath' => [
                        'name' => 'relativePath',
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
                        'startLine' => 161,
                        'endLine' => 161,
                        'startColumn' => 34,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'headers' => [
                        'name' => 'headers',
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
                        'startLine' => 161,
                        'endLine' => 161,
                        'startColumn' => 56,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Open (or create) a CSV file in storage, write the UTF-8 BOM + header row,
 * and return the file handle.
 *
 * @param  string[]  $headers
 * @return resource
 */',
                'startLine' => 161,
                'endLine' => 174,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Jobs',
                'declaringClassName' => 'App\\Jobs\\ProcessBulkExport',
                'implementingClassName' => 'App\\Jobs\\ProcessBulkExport',
                'currentClassName' => 'App\\Jobs\\ProcessBulkExport',
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
