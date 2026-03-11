<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Filesystem/FilesystemAdapter.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Filesystem\FilesystemAdapter
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-2e25e62283e22a6e5e677285720dfe1a46168152cdc81d2ee7a6f18adf1eabf0-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Filesystem/FilesystemAdapter.php',
            ],
        ],
        'namespace' => 'Illuminate\\Filesystem',
        'name' => 'Illuminate\\Filesystem\\FilesystemAdapter',
        'shortName' => 'FilesystemAdapter',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @mixin \\League\\Flysystem\\FilesystemOperator
 */',
        'attributes' => [
        ],
        'startLine' => 44,
        'endLine' => 1130,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Filesystem\\Cloud',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\Conditionable',
            1 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'driver' => [
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'name' => 'driver',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The Flysystem filesystem implementation.
 *
 * @var \\League\\Flysystem\\FilesystemOperator
 */',
                'attributes' => [
                ],
                'startLine' => 56,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'adapter' => [
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'name' => 'adapter',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The Flysystem adapter implementation.
 *
 * @var \\League\\Flysystem\\FilesystemAdapter
 */',
                'attributes' => [
                ],
                'startLine' => 63,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'config' => [
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'name' => 'config',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The filesystem configuration.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 70,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'prefixer' => [
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'name' => 'prefixer',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The Flysystem PathPrefixer instance.
 *
 * @var \\League\\Flysystem\\PathPrefixer
 */',
                'attributes' => [
                ],
                'startLine' => 77,
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'serveCallback' => [
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'name' => 'serveCallback',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The file server callback.
 *
 * @var \\Closure|null
 */',
                'attributes' => [
                ],
                'startLine' => 84,
                'endLine' => 84,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'temporaryUrlCallback' => [
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'name' => 'temporaryUrlCallback',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The temporary URL builder callback.
 *
 * @var \\Closure|null
 */',
                'attributes' => [
                ],
                'startLine' => 91,
                'endLine' => 91,
                'startColumn' => 5,
                'endColumn' => 36,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'temporaryUploadUrlCallback' => [
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'name' => 'temporaryUploadUrlCallback',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The temporary upload URL builder callback.
 *
 * @var \\Closure|null
 */',
                'attributes' => [
                ],
                'startLine' => 98,
                'endLine' => 98,
                'startColumn' => 5,
                'endColumn' => 42,
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
                    'driver' => [
                        'name' => 'driver',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'League\\Flysystem\\FilesystemOperator',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 107,
                        'endLine' => 107,
                        'startColumn' => 33,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'adapter' => [
                        'name' => 'adapter',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'League\\Flysystem\\FilesystemAdapter',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 107,
                        'endLine' => 107,
                        'startColumn' => 61,
                        'endColumn' => 85,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'config' => [
                        'name' => 'config',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 107,
                                'endLine' => 107,
                                'startTokenPos' => 307,
                                'startFilePos' => 2914,
                                'endTokenPos' => 308,
                                'endFilePos' => 2915,
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
                        'startLine' => 107,
                        'endLine' => 107,
                        'startColumn' => 88,
                        'endColumn' => 105,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new filesystem adapter instance.
 *
 * @param  \\League\\Flysystem\\FilesystemOperator  $driver
 * @param  \\League\\Flysystem\\FilesystemAdapter  $adapter
 * @param  array  $config
 */',
                'startLine' => 107,
                'endLine' => 119,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'assertExists' => [
                'name' => 'assertExists',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 128,
                        'endLine' => 128,
                        'startColumn' => 34,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'content' => [
                        'name' => 'content',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 128,
                                'endLine' => 128,
                                'startTokenPos' => 438,
                                'startFilePos' => 3569,
                                'endTokenPos' => 438,
                                'endFilePos' => 3572,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 128,
                        'endLine' => 128,
                        'startColumn' => 41,
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
 * Assert that the given file or directory exists.
 *
 * @param  string|array  $path
 * @param  string|null  $content
 * @return $this
 */',
                'startLine' => 128,
                'endLine' => 151,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'assertCount' => [
                'name' => 'assertCount',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 161,
                        'endLine' => 161,
                        'startColumn' => 33,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'count' => [
                        'name' => 'count',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 161,
                        'endLine' => 161,
                        'startColumn' => 40,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'recursive' => [
                        'name' => 'recursive',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 161,
                                'endLine' => 161,
                                'startTokenPos' => 580,
                                'startFilePos' => 4457,
                                'endTokenPos' => 580,
                                'endFilePos' => 4461,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 161,
                        'endLine' => 161,
                        'startColumn' => 48,
                        'endColumn' => 65,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the number of files in path equals the expected count.
 *
 * @param  string  $path
 * @param  int  $count
 * @param  bool  $recursive
 * @return $this
 */',
                'startLine' => 161,
                'endLine' => 172,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'assertMissing' => [
                'name' => 'assertMissing',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 180,
                        'endLine' => 180,
                        'startColumn' => 35,
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
 * Assert that the given file or directory does not exist.
 *
 * @param  string|array  $path
 * @return $this
 */',
                'startLine' => 180,
                'endLine' => 193,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'assertDirectoryEmpty' => [
                'name' => 'assertDirectoryEmpty',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 201,
                        'endLine' => 201,
                        'startColumn' => 42,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the given directory is empty.
 *
 * @param  string  $path
 * @return $this
 */',
                'startLine' => 201,
                'endLine' => 208,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'exists' => [
                'name' => 'exists',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 216,
                        'endLine' => 216,
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
 * Determine if a file or directory exists.
 *
 * @param  string  $path
 * @return bool
 */',
                'startLine' => 216,
                'endLine' => 219,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'missing' => [
                'name' => 'missing',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 227,
                        'endLine' => 227,
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
 * Determine if a file or directory is missing.
 *
 * @param  string  $path
 * @return bool
 */',
                'startLine' => 227,
                'endLine' => 230,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'fileExists' => [
                'name' => 'fileExists',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 238,
                        'endLine' => 238,
                        'startColumn' => 32,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a file exists.
 *
 * @param  string  $path
 * @return bool
 */',
                'startLine' => 238,
                'endLine' => 241,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'fileMissing' => [
                'name' => 'fileMissing',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 249,
                        'endLine' => 249,
                        'startColumn' => 33,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a file is missing.
 *
 * @param  string  $path
 * @return bool
 */',
                'startLine' => 249,
                'endLine' => 252,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'directoryExists' => [
                'name' => 'directoryExists',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 260,
                        'endLine' => 260,
                        'startColumn' => 37,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a directory exists.
 *
 * @param  string  $path
 * @return bool
 */',
                'startLine' => 260,
                'endLine' => 263,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'directoryMissing' => [
                'name' => 'directoryMissing',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 271,
                        'endLine' => 271,
                        'startColumn' => 38,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a directory is missing.
 *
 * @param  string  $path
 * @return bool
 */',
                'startLine' => 271,
                'endLine' => 274,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'path' => [
                'name' => 'path',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 282,
                        'endLine' => 282,
                        'startColumn' => 26,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the full path to the file that exists at the given relative path.
 *
 * @param  string  $path
 * @return string
 */',
                'startLine' => 282,
                'endLine' => 285,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'get' => [
                'name' => 'get',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 293,
                        'endLine' => 293,
                        'startColumn' => 25,
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
 * Get the contents of a file.
 *
 * @param  string  $path
 * @return string|null
 */',
                'startLine' => 293,
                'endLine' => 302,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'json' => [
                'name' => 'json',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 311,
                        'endLine' => 311,
                        'startColumn' => 26,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'flags' => [
                        'name' => 'flags',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 311,
                                'endLine' => 311,
                                'startTokenPos' => 1034,
                                'startFilePos' => 7586,
                                'endTokenPos' => 1034,
                                'endFilePos' => 7586,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 311,
                        'endLine' => 311,
                        'startColumn' => 33,
                        'endColumn' => 42,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the contents of a file as decoded JSON.
 *
 * @param  string  $path
 * @param  int  $flags
 * @return array|null
 */',
                'startLine' => 311,
                'endLine' => 316,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'response' => [
                'name' => 'response',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 327,
                        'endLine' => 327,
                        'startColumn' => 30,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 327,
                                'endLine' => 327,
                                'startTokenPos' => 1096,
                                'startFilePos' => 8045,
                                'endTokenPos' => 1096,
                                'endFilePos' => 8048,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 327,
                        'endLine' => 327,
                        'startColumn' => 37,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 327,
                                'endLine' => 327,
                                'startTokenPos' => 1105,
                                'startFilePos' => 8068,
                                'endTokenPos' => 1106,
                                'endFilePos' => 8069,
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
                        'startLine' => 327,
                        'endLine' => 327,
                        'startColumn' => 51,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'disposition' => [
                        'name' => 'disposition',
                        'default' => [
                            'code' => '\'inline\'',
                            'attributes' => [
                                'startLine' => 327,
                                'endLine' => 327,
                                'startTokenPos' => 1113,
                                'startFilePos' => 8087,
                                'endTokenPos' => 1113,
                                'endFilePos' => 8094,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 327,
                        'endLine' => 327,
                        'startColumn' => 72,
                        'endColumn' => 94,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a streamed response for a given file.
 *
 * @param  string  $path
 * @param  string|null  $name
 * @param  array  $headers
 * @param  string|null  $disposition
 * @return \\Symfony\\Component\\HttpFoundation\\StreamedResponse
 */',
                'startLine' => 327,
                'endLine' => 353,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'serve' => [
                'name' => 'serve',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Http\\Request',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 364,
                        'endLine' => 364,
                        'startColumn' => 27,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 364,
                        'endLine' => 364,
                        'startColumn' => 45,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 364,
                                'endLine' => 364,
                                'startTokenPos' => 1308,
                                'startFilePos' => 9221,
                                'endTokenPos' => 1308,
                                'endFilePos' => 9224,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 364,
                        'endLine' => 364,
                        'startColumn' => 52,
                        'endColumn' => 63,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 364,
                                'endLine' => 364,
                                'startTokenPos' => 1317,
                                'startFilePos' => 9244,
                                'endTokenPos' => 1318,
                                'endFilePos' => 9245,
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
                        'startLine' => 364,
                        'endLine' => 364,
                        'startColumn' => 66,
                        'endColumn' => 84,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a streamed download response for a given file.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  string  $path
 * @param  string|null  $name
 * @param  array  $headers
 * @return \\Symfony\\Component\\HttpFoundation\\StreamedResponse
 */',
                'startLine' => 364,
                'endLine' => 369,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'download' => [
                'name' => 'download',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 379,
                        'endLine' => 379,
                        'startColumn' => 30,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 379,
                                'endLine' => 379,
                                'startTokenPos' => 1383,
                                'startFilePos' => 9725,
                                'endTokenPos' => 1383,
                                'endFilePos' => 9728,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 379,
                        'endLine' => 379,
                        'startColumn' => 37,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 379,
                                'endLine' => 379,
                                'startTokenPos' => 1392,
                                'startFilePos' => 9748,
                                'endTokenPos' => 1393,
                                'endFilePos' => 9749,
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
                        'startLine' => 379,
                        'endLine' => 379,
                        'startColumn' => 51,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a streamed download response for a given file.
 *
 * @param  string  $path
 * @param  string|null  $name
 * @param  array  $headers
 * @return \\Symfony\\Component\\HttpFoundation\\StreamedResponse
 */',
                'startLine' => 379,
                'endLine' => 382,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'fallbackName' => [
                'name' => 'fallbackName',
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
                        'startLine' => 390,
                        'endLine' => 390,
                        'startColumn' => 37,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the string to ASCII characters that are equivalent to the given name.
 *
 * @param  string  $name
 * @return string
 */',
                'startLine' => 390,
                'endLine' => 393,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'put' => [
                'name' => 'put',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 403,
                        'endLine' => 403,
                        'startColumn' => 25,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'contents' => [
                        'name' => 'contents',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 403,
                        'endLine' => 403,
                        'startColumn' => 32,
                        'endColumn' => 40,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 403,
                                'endLine' => 403,
                                'startTokenPos' => 1471,
                                'startFilePos' => 10434,
                                'endTokenPos' => 1472,
                                'endFilePos' => 10435,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 403,
                        'endLine' => 403,
                        'startColumn' => 43,
                        'endColumn' => 55,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Write the contents of a file.
 *
 * @param  string  $path
 * @param  \\Psr\\Http\\Message\\StreamInterface|\\Illuminate\\Http\\File|\\Illuminate\\Http\\UploadedFile|string|resource  $contents
 * @param  mixed  $options
 * @return string|bool
 */',
                'startLine' => 403,
                'endLine' => 436,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'putFile' => [
                'name' => 'putFile',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 446,
                        'endLine' => 446,
                        'startColumn' => 29,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'file' => [
                        'name' => 'file',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 446,
                                'endLine' => 446,
                                'startTokenPos' => 1694,
                                'startFilePos' => 11915,
                                'endTokenPos' => 1694,
                                'endFilePos' => 11918,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 446,
                        'endLine' => 446,
                        'startColumn' => 36,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 446,
                                'endLine' => 446,
                                'startTokenPos' => 1701,
                                'startFilePos' => 11932,
                                'endTokenPos' => 1702,
                                'endFilePos' => 11933,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 446,
                        'endLine' => 446,
                        'startColumn' => 50,
                        'endColumn' => 62,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Store the uploaded file on the disk.
 *
 * @param  \\Illuminate\\Http\\File|\\Illuminate\\Http\\UploadedFile|string  $path
 * @param  \\Illuminate\\Http\\File|\\Illuminate\\Http\\UploadedFile|string|array|null  $file
 * @param  mixed  $options
 * @return string|false
 */',
                'startLine' => 446,
                'endLine' => 455,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'putFileAs' => [
                'name' => 'putFileAs',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 466,
                        'endLine' => 466,
                        'startColumn' => 31,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'file' => [
                        'name' => 'file',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 466,
                        'endLine' => 466,
                        'startColumn' => 38,
                        'endColumn' => 42,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 466,
                                'endLine' => 466,
                                'startTokenPos' => 1821,
                                'startFilePos' => 12620,
                                'endTokenPos' => 1821,
                                'endFilePos' => 12623,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 466,
                        'endLine' => 466,
                        'startColumn' => 45,
                        'endColumn' => 56,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 466,
                                'endLine' => 466,
                                'startTokenPos' => 1828,
                                'startFilePos' => 12637,
                                'endTokenPos' => 1829,
                                'endFilePos' => 12638,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 466,
                        'endLine' => 466,
                        'startColumn' => 59,
                        'endColumn' => 71,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Store the uploaded file on the disk with a given name.
 *
 * @param  \\Illuminate\\Http\\File|\\Illuminate\\Http\\UploadedFile|string  $path
 * @param  \\Illuminate\\Http\\File|\\Illuminate\\Http\\UploadedFile|string|array|null  $file
 * @param  string|array|null  $name
 * @param  mixed  $options
 * @return string|false
 */',
                'startLine' => 466,
                'endLine' => 486,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'getVisibility' => [
                'name' => 'getVisibility',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 494,
                        'endLine' => 494,
                        'startColumn' => 35,
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
 * Get the visibility for the given path.
 *
 * @param  string  $path
 * @return string
 */',
                'startLine' => 494,
                'endLine' => 501,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'setVisibility' => [
                'name' => 'setVisibility',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 510,
                        'endLine' => 510,
                        'startColumn' => 35,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'visibility' => [
                        'name' => 'visibility',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 510,
                        'endLine' => 510,
                        'startColumn' => 42,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the visibility for the given path.
 *
 * @param  string  $path
 * @param  string  $visibility
 * @return bool
 */',
                'startLine' => 510,
                'endLine' => 523,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'prepend' => [
                'name' => 'prepend',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 533,
                        'endLine' => 533,
                        'startColumn' => 29,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'data' => [
                        'name' => 'data',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 533,
                        'endLine' => 533,
                        'startColumn' => 36,
                        'endColumn' => 40,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'separator' => [
                        'name' => 'separator',
                        'default' => [
                            'code' => 'PHP_EOL',
                            'attributes' => [
                                'startLine' => 533,
                                'endLine' => 533,
                                'startTokenPos' => 2145,
                                'startFilePos' => 14461,
                                'endTokenPos' => 2145,
                                'endFilePos' => 14467,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 533,
                        'endLine' => 533,
                        'startColumn' => 43,
                        'endColumn' => 62,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepend to a file.
 *
 * @param  string  $path
 * @param  string  $data
 * @param  string  $separator
 * @return bool
 */',
                'startLine' => 533,
                'endLine' => 540,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'append' => [
                'name' => 'append',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 550,
                        'endLine' => 550,
                        'startColumn' => 28,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'data' => [
                        'name' => 'data',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 550,
                        'endLine' => 550,
                        'startColumn' => 35,
                        'endColumn' => 39,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'separator' => [
                        'name' => 'separator',
                        'default' => [
                            'code' => 'PHP_EOL',
                            'attributes' => [
                                'startLine' => 550,
                                'endLine' => 550,
                                'startTokenPos' => 2220,
                                'startFilePos' => 14863,
                                'endTokenPos' => 2220,
                                'endFilePos' => 14869,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 550,
                        'endLine' => 550,
                        'startColumn' => 42,
                        'endColumn' => 61,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Append to a file.
 *
 * @param  string  $path
 * @param  string  $data
 * @param  string  $separator
 * @return bool
 */',
                'startLine' => 550,
                'endLine' => 557,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'delete' => [
                'name' => 'delete',
                'parameters' => [
                    'paths' => [
                        'name' => 'paths',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 565,
                        'endLine' => 565,
                        'startColumn' => 28,
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
 * Delete the file at a given path.
 *
 * @param  string|array  $paths
 * @return bool
 */',
                'startLine' => 565,
                'endLine' => 584,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'copy' => [
                'name' => 'copy',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 593,
                        'endLine' => 593,
                        'startColumn' => 26,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 593,
                        'endLine' => 593,
                        'startColumn' => 33,
                        'endColumn' => 35,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Copy a file to a new location.
 *
 * @param  string  $from
 * @param  string  $to
 * @return bool
 */',
                'startLine' => 593,
                'endLine' => 606,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'move' => [
                'name' => 'move',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 615,
                        'endLine' => 615,
                        'startColumn' => 26,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 615,
                        'endLine' => 615,
                        'startColumn' => 33,
                        'endColumn' => 35,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Move a file to a new location.
 *
 * @param  string  $from
 * @param  string  $to
 * @return bool
 */',
                'startLine' => 615,
                'endLine' => 628,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'size' => [
                'name' => 'size',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 636,
                        'endLine' => 636,
                        'startColumn' => 26,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the file size of a given file.
 *
 * @param  string  $path
 * @return int
 */',
                'startLine' => 636,
                'endLine' => 639,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'checksum' => [
                'name' => 'checksum',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
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
                        'startLine' => 648,
                        'endLine' => 648,
                        'startColumn' => 30,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 648,
                                'endLine' => 648,
                                'startTokenPos' => 2600,
                                'startFilePos' => 16889,
                                'endTokenPos' => 2601,
                                'endFilePos' => 16890,
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
                        'startLine' => 648,
                        'endLine' => 648,
                        'startColumn' => 44,
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
 * Get the checksum for a file.
 *
 * @return string|false
 *
 * @throws UnableToProvideChecksum
 */',
                'startLine' => 648,
                'endLine' => 659,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'mimeType' => [
                'name' => 'mimeType',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 667,
                        'endLine' => 667,
                        'startColumn' => 30,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the mime-type of a given file.
 *
 * @param  string  $path
 * @return string|false
 */',
                'startLine' => 667,
                'endLine' => 678,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'lastModified' => [
                'name' => 'lastModified',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 686,
                        'endLine' => 686,
                        'startColumn' => 34,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the file\'s last modification time.
 *
 * @param  string  $path
 * @return int
 */',
                'startLine' => 686,
                'endLine' => 689,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'readStream' => [
                'name' => 'readStream',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 694,
                        'endLine' => 694,
                        'startColumn' => 32,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * {@inheritdoc}
 */',
                'startLine' => 694,
                'endLine' => 703,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'writeStream' => [
                'name' => 'writeStream',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 708,
                        'endLine' => 708,
                        'startColumn' => 33,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'resource' => [
                        'name' => 'resource',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 708,
                        'endLine' => 708,
                        'startColumn' => 40,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 708,
                                'endLine' => 708,
                                'startTokenPos' => 2851,
                                'startFilePos' => 18167,
                                'endTokenPos' => 2852,
                                'endFilePos' => 18168,
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
                        'startLine' => 708,
                        'endLine' => 708,
                        'startColumn' => 51,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * {@inheritdoc}
 */',
                'startLine' => 708,
                'endLine' => 721,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'url' => [
                'name' => 'url',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 731,
                        'endLine' => 731,
                        'startColumn' => 25,
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
 * Get the URL for the file at the given path.
 *
 * @param  string  $path
 * @return string
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 731,
                'endLine' => 750,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'getFtpUrl' => [
                'name' => 'getFtpUrl',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 758,
                        'endLine' => 758,
                        'startColumn' => 34,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the URL for the file at the given path.
 *
 * @param  string  $path
 * @return string
 */',
                'startLine' => 758,
                'endLine' => 763,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'getLocalUrl' => [
                'name' => 'getLocalUrl',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 771,
                        'endLine' => 771,
                        'startColumn' => 36,
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
 * Get the URL for the file at the given path.
 *
 * @param  string  $path
 * @return string
 */',
                'startLine' => 771,
                'endLine' => 790,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'providesTemporaryUrls' => [
                'name' => 'providesTemporaryUrls',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if temporary URLs can be generated.
 *
 * @return bool
 */',
                'startLine' => 797,
                'endLine' => 800,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'providesTemporaryUploadUrls' => [
                'name' => 'providesTemporaryUploadUrls',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if temporary upload URLs can be generated.
 *
 * @return bool
 */',
                'startLine' => 807,
                'endLine' => 810,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'temporaryUrl' => [
                'name' => 'temporaryUrl',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 822,
                        'endLine' => 822,
                        'startColumn' => 34,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'expiration' => [
                        'name' => 'expiration',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 822,
                        'endLine' => 822,
                        'startColumn' => 41,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 822,
                                'endLine' => 822,
                                'startTokenPos' => 3366,
                                'startFilePos' => 21585,
                                'endTokenPos' => 3367,
                                'endFilePos' => 21586,
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
                        'startLine' => 822,
                        'endLine' => 822,
                        'startColumn' => 54,
                        'endColumn' => 72,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a temporary URL for the file at the given path.
 *
 * @param  string  $path
 * @param  \\DateTimeInterface  $expiration
 * @param  array  $options
 * @return string
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 822,
                'endLine' => 835,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'temporaryUploadUrl' => [
                'name' => 'temporaryUploadUrl',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 847,
                        'endLine' => 847,
                        'startColumn' => 40,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'expiration' => [
                        'name' => 'expiration',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 847,
                        'endLine' => 847,
                        'startColumn' => 47,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 847,
                                'endLine' => 847,
                                'startTokenPos' => 3480,
                                'startFilePos' => 22377,
                                'endTokenPos' => 3481,
                                'endFilePos' => 22378,
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
                        'startLine' => 847,
                        'endLine' => 847,
                        'startColumn' => 60,
                        'endColumn' => 78,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a temporary upload URL for the file at the given path.
 *
 * @param  string  $path
 * @param  \\DateTimeInterface  $expiration
 * @param  array  $options
 * @return array
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 847,
                'endLine' => 860,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'concatPathToUrl' => [
                'name' => 'concatPathToUrl',
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
                        'startLine' => 869,
                        'endLine' => 869,
                        'startColumn' => 40,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 869,
                        'endLine' => 869,
                        'startColumn' => 46,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Concatenate a path to a URL.
 *
 * @param  string  $url
 * @param  string  $path
 * @return string
 */',
                'startLine' => 869,
                'endLine' => 872,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'replaceBaseUrl' => [
                'name' => 'replaceBaseUrl',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 881,
                        'endLine' => 881,
                        'startColumn' => 39,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'url' => [
                        'name' => 'url',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 881,
                        'endLine' => 881,
                        'startColumn' => 45,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Replace the scheme, host and port of the given UriInterface with values from the given URL.
 *
 * @param  \\Psr\\Http\\Message\\UriInterface  $uri
 * @param  string  $url
 * @return \\Psr\\Http\\Message\\UriInterface
 */',
                'startLine' => 881,
                'endLine' => 889,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'files' => [
                'name' => 'files',
                'parameters' => [
                    'directory' => [
                        'name' => 'directory',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 898,
                                'endLine' => 898,
                                'startTokenPos' => 3689,
                                'startFilePos' => 23822,
                                'endTokenPos' => 3689,
                                'endFilePos' => 23825,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 898,
                        'endLine' => 898,
                        'startColumn' => 27,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'recursive' => [
                        'name' => 'recursive',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 898,
                                'endLine' => 898,
                                'startTokenPos' => 3696,
                                'startFilePos' => 23841,
                                'endTokenPos' => 3696,
                                'endFilePos' => 23845,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 898,
                        'endLine' => 898,
                        'startColumn' => 46,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an array of all files in a directory.
 *
 * @param  string|null  $directory
 * @param  bool  $recursive
 * @return array
 */',
                'startLine' => 898,
                'endLine' => 909,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'allFiles' => [
                'name' => 'allFiles',
                'parameters' => [
                    'directory' => [
                        'name' => 'directory',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 917,
                                'endLine' => 917,
                                'startTokenPos' => 3794,
                                'startFilePos' => 24422,
                                'endTokenPos' => 3794,
                                'endFilePos' => 24425,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 917,
                        'endLine' => 917,
                        'startColumn' => 30,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the files from the given directory (recursive).
 *
 * @param  string|null  $directory
 * @return array
 */',
                'startLine' => 917,
                'endLine' => 920,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'directories' => [
                'name' => 'directories',
                'parameters' => [
                    'directory' => [
                        'name' => 'directory',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 929,
                                'endLine' => 929,
                                'startTokenPos' => 3826,
                                'startFilePos' => 24708,
                                'endTokenPos' => 3826,
                                'endFilePos' => 24711,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 929,
                        'endLine' => 929,
                        'startColumn' => 33,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'recursive' => [
                        'name' => 'recursive',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 929,
                                'endLine' => 929,
                                'startTokenPos' => 3833,
                                'startFilePos' => 24727,
                                'endTokenPos' => 3833,
                                'endFilePos' => 24731,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 929,
                        'endLine' => 929,
                        'startColumn' => 52,
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
 * Get all of the directories within a given directory.
 *
 * @param  string|null  $directory
 * @param  bool  $recursive
 * @return array
 */',
                'startLine' => 929,
                'endLine' => 939,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'allDirectories' => [
                'name' => 'allDirectories',
                'parameters' => [
                    'directory' => [
                        'name' => 'directory',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 947,
                                'endLine' => 947,
                                'startTokenPos' => 3926,
                                'startFilePos' => 25289,
                                'endTokenPos' => 3926,
                                'endFilePos' => 25292,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 947,
                        'endLine' => 947,
                        'startColumn' => 36,
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
 * Get all the directories within a given directory (recursive).
 *
 * @param  string|null  $directory
 * @return array
 */',
                'startLine' => 947,
                'endLine' => 950,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'makeDirectory' => [
                'name' => 'makeDirectory',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 958,
                        'endLine' => 958,
                        'startColumn' => 35,
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
 * Create a directory.
 *
 * @param  string  $path
 * @return bool
 */',
                'startLine' => 958,
                'endLine' => 971,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'deleteDirectory' => [
                'name' => 'deleteDirectory',
                'parameters' => [
                    'directory' => [
                        'name' => 'directory',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 979,
                        'endLine' => 979,
                        'startColumn' => 37,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Recursively delete a directory.
 *
 * @param  string  $directory
 * @return bool
 */',
                'startLine' => 979,
                'endLine' => 992,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'getDriver' => [
                'name' => 'getDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the Flysystem driver.
 *
 * @return \\League\\Flysystem\\FilesystemOperator
 */',
                'startLine' => 999,
                'endLine' => 1002,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'getAdapter' => [
                'name' => 'getAdapter',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the Flysystem adapter.
 *
 * @return \\League\\Flysystem\\FilesystemAdapter
 */',
                'startLine' => 1009,
                'endLine' => 1012,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'getConfig' => [
                'name' => 'getConfig',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the configuration values.
 *
 * @return array
 */',
                'startLine' => 1019,
                'endLine' => 1022,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'parseVisibility' => [
                'name' => 'parseVisibility',
                'parameters' => [
                    'visibility' => [
                        'name' => 'visibility',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1032,
                        'endLine' => 1032,
                        'startColumn' => 40,
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
 * Parse the given visibility value.
 *
 * @param  string|null  $visibility
 * @return string|null
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 1032,
                'endLine' => 1043,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'serveUsing' => [
                'name' => 'serveUsing',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1051,
                        'endLine' => 1051,
                        'startColumn' => 32,
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
 * Define a custom callback that generates file download responses.
 *
 * @param  \\Closure  $callback
 * @return void
 */',
                'startLine' => 1051,
                'endLine' => 1054,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'buildTemporaryUrlsUsing' => [
                'name' => 'buildTemporaryUrlsUsing',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1062,
                        'endLine' => 1062,
                        'startColumn' => 45,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Define a custom temporary URL builder callback.
 *
 * @param  \\Closure  $callback
 * @return void
 */',
                'startLine' => 1062,
                'endLine' => 1065,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'buildTemporaryUploadUrlsUsing' => [
                'name' => 'buildTemporaryUploadUrlsUsing',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1073,
                        'endLine' => 1073,
                        'startColumn' => 51,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Define a custom temporary upload URL builder callback.
 *
 * @param  \\Closure  $callback
 * @return void
 */',
                'startLine' => 1073,
                'endLine' => 1076,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'throwsExceptions' => [
                'name' => 'throwsExceptions',
                'parameters' => [
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
 * Determine if Flysystem exceptions should be thrown.
 *
 * @return bool
 */',
                'startLine' => 1083,
                'endLine' => 1086,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'report' => [
                'name' => 'report',
                'parameters' => [
                    'exception' => [
                        'name' => 'exception',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1096,
                        'endLine' => 1096,
                        'startColumn' => 31,
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
 * Report the exception.
 *
 * @param  \\Throwable  $exception
 * @return void
 *
 * @throws \\Throwable
 */',
                'startLine' => 1096,
                'endLine' => 1101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            'shouldReport' => [
                'name' => 'shouldReport',
                'parameters' => [
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
 * Determine if Flysystem exceptions should be reported.
 *
 * @return bool
 */',
                'startLine' => 1108,
                'endLine' => 1111,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
            '__call' => [
                'name' => '__call',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1122,
                        'endLine' => 1122,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1122,
                        'endLine' => 1122,
                        'startColumn' => 37,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Pass dynamic methods call onto Flysystem.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\BadMethodCallException
 */',
                'startLine' => 1122,
                'endLine' => 1129,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Filesystem',
                'declaringClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'implementingClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'currentClassName' => 'Illuminate\\Filesystem\\FilesystemAdapter',
                'aliasName' => null,
            ],
        ],
        'traitsData' => [
            'aliases' => [
                'Illuminate\\Support\\Traits\\Macroable' => [
                    0 => [
                        'alias' => 'macroCall',
                        'method' => '__call',
                        'hash' => 'illuminate\\support\\traits\\macroable::__call',
                    ],
                ],
            ],
            'modifiers' => [
            ],
            'precedences' => [
            ],
            'hashes' => [
                'illuminate\\support\\traits\\macroable::__call' => 'Illuminate\\Support\\Traits\\Macroable::__call',
            ],
        ],
    ],
]);
