<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Hashing/BcryptHasher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Hashing\BcryptHasher
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-03832503431d2646bfc05305d2184bdc276f16a4fbb7fc3f9677492d4bb37c70-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Hashing\\BcryptHasher',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Hashing/BcryptHasher.php',
            ],
        ],
        'namespace' => 'Illuminate\\Hashing',
        'name' => 'Illuminate\\Hashing\\BcryptHasher',
        'shortName' => 'BcryptHasher',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 10,
        'endLine' => 174,
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
            'rounds' => [
                'declaringClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'name' => 'rounds',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '12',
                    'attributes' => [
                        'startLine' => 17,
                        'endLine' => 17,
                        'startTokenPos' => 53,
                        'startFilePos' => 326,
                        'endTokenPos' => 53,
                        'endFilePos' => 327,
                    ],
                ],
                'docComment' => '/**
 * The default cost factor.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 17,
                'endLine' => 17,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'verifyAlgorithm' => [
                'declaringClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'name' => 'verifyAlgorithm',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 24,
                        'endLine' => 24,
                        'startTokenPos' => 64,
                        'startFilePos' => 460,
                        'endTokenPos' => 64,
                        'endFilePos' => 464,
                    ],
                ],
                'docComment' => '/**
 * Indicates whether to perform an algorithm check.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'limit' => [
                'declaringClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'name' => 'limit',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The maximum allowed length of strings that can be hashed.
 *
 * @var int|null
 */',
                'attributes' => [
                ],
                'startLine' => 31,
                'endLine' => 31,
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
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 38,
                                'endLine' => 38,
                                'startTokenPos' => 88,
                                'startFilePos' => 740,
                                'endTokenPos' => 89,
                                'endFilePos' => 741,
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
                        'startLine' => 38,
                        'endLine' => 38,
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
                'startLine' => 38,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'currentClassName' => 'Illuminate\\Hashing\\BcryptHasher',
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
                        'startLine' => 55,
                        'endLine' => 55,
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
                                'startLine' => 55,
                                'endLine' => 55,
                                'startTokenPos' => 171,
                                'startFilePos' => 1244,
                                'endTokenPos' => 172,
                                'endFilePos' => 1245,
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
                        'startLine' => 55,
                        'endLine' => 55,
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
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 55,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'currentClassName' => 'Illuminate\\Hashing\\BcryptHasher',
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
                        'startLine' => 82,
                        'endLine' => 82,
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
                        'startLine' => 82,
                        'endLine' => 82,
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
                                'startLine' => 82,
                                'endLine' => 82,
                                'startTokenPos' => 305,
                                'startFilePos' => 2062,
                                'endTokenPos' => 306,
                                'endFilePos' => 2063,
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
                        'startLine' => 82,
                        'endLine' => 82,
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
                'startLine' => 82,
                'endLine' => 93,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'currentClassName' => 'Illuminate\\Hashing\\BcryptHasher',
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
                        'startLine' => 102,
                        'endLine' => 102,
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
                                'startLine' => 102,
                                'endLine' => 102,
                                'startTokenPos' => 408,
                                'startFilePos' => 2681,
                                'endTokenPos' => 409,
                                'endFilePos' => 2682,
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
                        'startLine' => 102,
                        'endLine' => 102,
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
                'startLine' => 102,
                'endLine' => 107,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'currentClassName' => 'Illuminate\\Hashing\\BcryptHasher',
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
                        'startLine' => 114,
                        'endLine' => 114,
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
                'startLine' => 114,
                'endLine' => 117,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'currentClassName' => 'Illuminate\\Hashing\\BcryptHasher',
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
                        'startLine' => 125,
                        'endLine' => 125,
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
                'startLine' => 125,
                'endLine' => 128,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'currentClassName' => 'Illuminate\\Hashing\\BcryptHasher',
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
                        'startLine' => 136,
                        'endLine' => 136,
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
                'startLine' => 136,
                'endLine' => 149,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'currentClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'aliasName' => null,
            ],
            'setRounds' => [
                'name' => 'setRounds',
                'parameters' => [
                    'rounds' => [
                        'name' => 'rounds',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 157,
                        'endLine' => 157,
                        'startColumn' => 31,
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
 * Set the default password work factor.
 *
 * @param  int  $rounds
 * @return $this
 */',
                'startLine' => 157,
                'endLine' => 162,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'currentClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'aliasName' => null,
            ],
            'cost' => [
                'name' => 'cost',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 170,
                                'endLine' => 170,
                                'startTokenPos' => 644,
                                'startFilePos' => 4216,
                                'endTokenPos' => 645,
                                'endFilePos' => 4217,
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
                        'startLine' => 170,
                        'endLine' => 170,
                        'startColumn' => 29,
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
 * Extract the cost value from the options array.
 *
 * @param  array  $options
 * @return int
 */',
                'startLine' => 170,
                'endLine' => 173,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'implementingClassName' => 'Illuminate\\Hashing\\BcryptHasher',
                'currentClassName' => 'Illuminate\\Hashing\\BcryptHasher',
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
