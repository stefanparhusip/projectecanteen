<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Hashing/ArgonHasher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Hashing\ArgonHasher
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-f3cee218d9fcca2d23e0e177f412797fe0f5e5fed8d6abe04ec40fa7396a51d1-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Hashing\\ArgonHasher',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Hashing/ArgonHasher.php',
            ],
        ],
        'namespace' => 'Illuminate\\Hashing',
        'name' => 'Illuminate\\Hashing\\ArgonHasher',
        'shortName' => 'ArgonHasher',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 250,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Hashing\\AbstractHasher',
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Hashing\\Hasher',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'memory' => [
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'name' => 'memory',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '1024',
                    'attributes' => [
                        'startLine' => 16,
                        'endLine' => 16,
                        'startTokenPos' => 48,
                        'startFilePos' => 302,
                        'endTokenPos' => 48,
                        'endFilePos' => 305,
                    ],
                ],
                'docComment' => '/**
 * The default memory cost factor.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 16,
                'endLine' => 16,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'time' => [
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'name' => 'time',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '2',
                    'attributes' => [
                        'startLine' => 23,
                        'endLine' => 23,
                        'startTokenPos' => 59,
                        'startFilePos' => 407,
                        'endTokenPos' => 59,
                        'endFilePos' => 407,
                    ],
                ],
                'docComment' => '/**
 * The default time cost factor.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'threads' => [
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'name' => 'threads',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '2',
                    'attributes' => [
                        'startLine' => 30,
                        'endLine' => 30,
                        'startTokenPos' => 70,
                        'startFilePos' => 510,
                        'endTokenPos' => 70,
                        'endFilePos' => 510,
                    ],
                ],
                'docComment' => '/**
 * The default threads factor.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'verifyAlgorithm' => [
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'name' => 'verifyAlgorithm',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 37,
                        'endLine' => 37,
                        'startTokenPos' => 81,
                        'startFilePos' => 643,
                        'endTokenPos' => 81,
                        'endFilePos' => 647,
                    ],
                ],
                'docComment' => '/**
 * Indicates whether to perform an algorithm check.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 37,
                'endLine' => 37,
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
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 44,
                                'endLine' => 44,
                                'startTokenPos' => 98,
                                'startFilePos' => 791,
                                'endTokenPos' => 99,
                                'endFilePos' => 792,
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
                        'startLine' => 44,
                        'endLine' => 44,
                        'startColumn' => 33,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new hasher instance.
 *
 * @param  array  $options
 */',
                'startLine' => 44,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'currentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'aliasName' => null,
            ],
            'make' => [
                'name' => 'make',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
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
                        'startLine' => 61,
                        'endLine' => 61,
                        'startColumn' => 26,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 61,
                                'endLine' => 61,
                                'startTokenPos' => 195,
                                'startFilePos' => 1302,
                                'endTokenPos' => 196,
                                'endFilePos' => 1303,
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
                        'startLine' => 61,
                        'endLine' => 61,
                        'startColumn' => 57,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Hash the given value.
 *
 * @param  string  $value
 * @param  array  $options
 * @return string
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 61,
                'endLine' => 74,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'currentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'aliasName' => null,
            ],
            'algorithm' => [
                'name' => 'algorithm',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the algorithm that should be used for hashing.
 *
 * @return int
 */',
                'startLine' => 81,
                'endLine' => 84,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'currentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'aliasName' => null,
            ],
            'check' => [
                'name' => 'check',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
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
                        'startLine' => 96,
                        'endLine' => 96,
                        'startColumn' => 27,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'hashedValue' => [
                        'name' => 'hashedValue',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 96,
                        'endLine' => 96,
                        'startColumn' => 58,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 96,
                                'endLine' => 96,
                                'startTokenPos' => 335,
                                'startFilePos' => 2212,
                                'endTokenPos' => 336,
                                'endFilePos' => 2213,
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
                        'startLine' => 96,
                        'endLine' => 96,
                        'startColumn' => 72,
                        'endColumn' => 90,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Check the given plain value against a hash.
 *
 * @param  string  $value
 * @param  string  $hashedValue
 * @param  array  $options
 * @return bool
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 96,
                'endLine' => 107,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'currentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'aliasName' => null,
            ],
            'needsRehash' => [
                'name' => 'needsRehash',
                'parameters' => [
                    'hashedValue' => [
                        'name' => 'hashedValue',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 116,
                        'endLine' => 116,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 116,
                                'endLine' => 116,
                                'startTokenPos' => 438,
                                'startFilePos' => 2832,
                                'endTokenPos' => 439,
                                'endFilePos' => 2833,
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
                        'startLine' => 116,
                        'endLine' => 116,
                        'startColumn' => 47,
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
 * Check if the given hash has been hashed using the given options.
 *
 * @param  string  $hashedValue
 * @param  array  $options
 * @return bool
 */',
                'startLine' => 116,
                'endLine' => 123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'currentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'aliasName' => null,
            ],
            'verifyConfiguration' => [
                'name' => 'verifyConfiguration',
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
                        'startLine' => 130,
                        'endLine' => 130,
                        'startColumn' => 41,
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
 * Verifies that the configuration is less than or equal to what is configured.
 *
 * @internal
 */',
                'startLine' => 130,
                'endLine' => 133,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'currentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'aliasName' => null,
            ],
            'isUsingCorrectAlgorithm' => [
                'name' => 'isUsingCorrectAlgorithm',
                'parameters' => [
                    'hashedValue' => [
                        'name' => 'hashedValue',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 141,
                        'endLine' => 141,
                        'startColumn' => 48,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Verify the hashed value\'s algorithm.
 *
 * @param  string  $hashedValue
 * @return bool
 */',
                'startLine' => 141,
                'endLine' => 144,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'currentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'aliasName' => null,
            ],
            'isUsingValidOptions' => [
                'name' => 'isUsingValidOptions',
                'parameters' => [
                    'hashedValue' => [
                        'name' => 'hashedValue',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 152,
                        'endLine' => 152,
                        'startColumn' => 44,
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
 * Verify the hashed value\'s options.
 *
 * @param  string  $hashedValue
 * @return bool
 */',
                'startLine' => 152,
                'endLine' => 173,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'currentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'aliasName' => null,
            ],
            'setMemory' => [
                'name' => 'setMemory',
                'parameters' => [
                    'memory' => [
                        'name' => 'memory',
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
                        'startLine' => 181,
                        'endLine' => 181,
                        'startColumn' => 31,
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
 * Set the default password memory factor.
 *
 * @param  int  $memory
 * @return $this
 */',
                'startLine' => 181,
                'endLine' => 186,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'currentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'aliasName' => null,
            ],
            'setTime' => [
                'name' => 'setTime',
                'parameters' => [
                    'time' => [
                        'name' => 'time',
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
                        'startLine' => 194,
                        'endLine' => 194,
                        'startColumn' => 29,
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
 * Set the default password timing factor.
 *
 * @param  int  $time
 * @return $this
 */',
                'startLine' => 194,
                'endLine' => 199,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'currentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'aliasName' => null,
            ],
            'setThreads' => [
                'name' => 'setThreads',
                'parameters' => [
                    'threads' => [
                        'name' => 'threads',
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
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 32,
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
 * Set the default password threads factor.
 *
 * @param  int  $threads
 * @return $this
 */',
                'startLine' => 207,
                'endLine' => 212,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'currentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'aliasName' => null,
            ],
            'memory' => [
                'name' => 'memory',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
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
                        'startLine' => 220,
                        'endLine' => 220,
                        'startColumn' => 31,
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
 * Extract the memory cost value from the options array.
 *
 * @param  array  $options
 * @return int
 */',
                'startLine' => 220,
                'endLine' => 223,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'currentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'aliasName' => null,
            ],
            'time' => [
                'name' => 'time',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
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
                        'startLine' => 231,
                        'endLine' => 231,
                        'startColumn' => 29,
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
 * Extract the time cost value from the options array.
 *
 * @param  array  $options
 * @return int
 */',
                'startLine' => 231,
                'endLine' => 234,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'currentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'aliasName' => null,
            ],
            'threads' => [
                'name' => 'threads',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
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
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 32,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Extract the thread\'s value from the options array.
 *
 * @param  array  $options
 * @return int
 */',
                'startLine' => 242,
                'endLine' => 249,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\ArgonHasher',
                'currentClassName' => 'Illuminate\\Hashing\\ArgonHasher',
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
