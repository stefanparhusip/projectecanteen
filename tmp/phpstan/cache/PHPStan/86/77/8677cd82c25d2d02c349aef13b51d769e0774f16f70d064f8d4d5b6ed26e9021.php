<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/EnvironmentEncryptCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Console\EnvironmentEncryptCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-41eac273e52764d0ca1659ba7a06ba9c6305af4d0c99a319717a652842e88308-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/EnvironmentEncryptCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Console',
        'name' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
        'shortName' => 'EnvironmentEncryptCommand',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
            0 => [
                'name' => 'Symfony\\Component\\Console\\Attribute\\AsCommand',
                'isRepeated' => false,
                'arguments' => [
                    'name' => [
                        'code' => '\'env:encrypt\'',
                        'attributes' => [
                            'startLine' => 16,
                            'endLine' => 16,
                            'startTokenPos' => 62,
                            'startFilePos' => 371,
                            'endTokenPos' => 62,
                            'endFilePos' => 383,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 16,
        'endLine' => 172,
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
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'env:encrypt
                    {--key= : The encryption key}
                    {--cipher= : The encryption cipher}
                    {--env= : The environment to be encrypted}
                    {--readable : Encrypt each variable individually with readable, plain-text variable names}
                    {--prune : Delete the original environment file}
                    {--force : Overwrite the existing encrypted environment file}\'',
                    'attributes' => [
                        'startLine' => 24,
                        'endLine' => 30,
                        'startTokenPos' => 84,
                        'startFilePos' => 560,
                        'endTokenPos' => 84,
                        'endFilePos' => 1003,
                    ],
                ],
                'docComment' => '/**
 * The name and signature of the console command.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 24,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 83,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Encrypt an environment file\'',
                    'attributes' => [
                        'startLine' => 37,
                        'endLine' => 37,
                        'startTokenPos' => 95,
                        'startFilePos' => 1118,
                        'endTokenPos' => 95,
                        'endFilePos' => 1146,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 37,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 59,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'files' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'name' => 'files',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The filesystem instance.
 *
 * @var \\Illuminate\\Filesystem\\Filesystem
 */',
                'attributes' => [
                ],
                'startLine' => 44,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 21,
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
                    'files' => [
                        'name' => 'files',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Filesystem\\Filesystem',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 51,
                        'endLine' => 51,
                        'startColumn' => 33,
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
 * Create a new command instance.
 *
 * @param  \\Illuminate\\Filesystem\\Filesystem  $files
 */',
                'startLine' => 51,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'aliasName' => null,
            ],
            'handle' => [
                'name' => 'handle',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the console command.
 *
 * @return void
 */',
                'startLine' => 63,
                'endLine' => 129,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'aliasName' => null,
            ],
            'encryptReadableFormat' => [
                'name' => 'encryptReadableFormat',
                'parameters' => [
                    'contents' => [
                        'name' => 'contents',
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
                        'startLine' => 138,
                        'endLine' => 138,
                        'startColumn' => 46,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'encrypter' => [
                        'name' => 'encrypter',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Encryption\\Encrypter',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 138,
                        'endLine' => 138,
                        'startColumn' => 64,
                        'endColumn' => 83,
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
                'docComment' => '/**
 * Encrypt the environment file in readable format.
 *
 * @param  string  $contents
 * @param  \\Illuminate\\Encryption\\Encrypter  $encrypter
 * @return string
 */',
                'startLine' => 138,
                'endLine' => 156,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'aliasName' => null,
            ],
            'parseKey' => [
                'name' => 'parseKey',
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
                        'startLine' => 164,
                        'endLine' => 164,
                        'startColumn' => 33,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Parse the encryption key.
 *
 * @param  string  $key
 * @return string
 */',
                'startLine' => 164,
                'endLine' => 171,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EnvironmentEncryptCommand',
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
