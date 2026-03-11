<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Hashing/HashManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Hashing\HashManager
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-8e92eab414ee928221cf454f7606c1e5cee68185568cf7d777f4997601a47ae4-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Hashing\\HashManager',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Hashing/HashManager.php',
            ],
        ],
        'namespace' => 'Illuminate\\Hashing',
        'name' => 'Illuminate\\Hashing\\HashManager',
        'shortName' => 'HashManager',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @mixin \\Illuminate\\Contracts\\Hashing\\Hasher
 */',
        'attributes' => [
        ],
        'startLine' => 11,
        'endLine' => 128,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Support\\Manager',
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Hashing\\Hasher',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'createBcryptDriver' => [
                'name' => 'createBcryptDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the Bcrypt hash Driver.
 *
 * @return \\Illuminate\\Hashing\\BcryptHasher
 */',
                'startLine' => 18,
                'endLine' => 21,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\HashManager',
                'implementingClassName' => 'Illuminate\\Hashing\\HashManager',
                'currentClassName' => 'Illuminate\\Hashing\\HashManager',
                'aliasName' => null,
            ],
            'createArgonDriver' => [
                'name' => 'createArgonDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the Argon2i hash Driver.
 *
 * @return \\Illuminate\\Hashing\\ArgonHasher
 */',
                'startLine' => 28,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\HashManager',
                'implementingClassName' => 'Illuminate\\Hashing\\HashManager',
                'currentClassName' => 'Illuminate\\Hashing\\HashManager',
                'aliasName' => null,
            ],
            'createArgon2idDriver' => [
                'name' => 'createArgon2idDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an instance of the Argon2id hash Driver.
 *
 * @return \\Illuminate\\Hashing\\Argon2IdHasher
 */',
                'startLine' => 38,
                'endLine' => 41,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\HashManager',
                'implementingClassName' => 'Illuminate\\Hashing\\HashManager',
                'currentClassName' => 'Illuminate\\Hashing\\HashManager',
                'aliasName' => null,
            ],
            'info' => [
                'name' => 'info',
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
                        'startLine' => 49,
                        'endLine' => 49,
                        'startColumn' => 26,
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
 * Get information about the given hashed value.
 *
 * @param  string  $hashedValue
 * @return array
 */',
                'startLine' => 49,
                'endLine' => 52,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\HashManager',
                'implementingClassName' => 'Illuminate\\Hashing\\HashManager',
                'currentClassName' => 'Illuminate\\Hashing\\HashManager',
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
                                'startTokenPos' => 191,
                                'startFilePos' => 1435,
                                'endTokenPos' => 192,
                                'endFilePos' => 1436,
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
 */',
                'startLine' => 61,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\HashManager',
                'implementingClassName' => 'Illuminate\\Hashing\\HashManager',
                'currentClassName' => 'Illuminate\\Hashing\\HashManager',
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
                        'startLine' => 74,
                        'endLine' => 74,
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
                        'startLine' => 74,
                        'endLine' => 74,
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
                                'startLine' => 74,
                                'endLine' => 74,
                                'startTokenPos' => 240,
                                'startFilePos' => 1787,
                                'endTokenPos' => 241,
                                'endFilePos' => 1788,
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
                        'startLine' => 74,
                        'endLine' => 74,
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
 */',
                'startLine' => 74,
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\HashManager',
                'implementingClassName' => 'Illuminate\\Hashing\\HashManager',
                'currentClassName' => 'Illuminate\\Hashing\\HashManager',
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
                        'startLine' => 86,
                        'endLine' => 86,
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
                                'startLine' => 86,
                                'endLine' => 86,
                                'startTokenPos' => 285,
                                'startFilePos' => 2120,
                                'endTokenPos' => 286,
                                'endFilePos' => 2121,
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
                        'startLine' => 86,
                        'endLine' => 86,
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
                'startLine' => 86,
                'endLine' => 89,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\HashManager',
                'implementingClassName' => 'Illuminate\\Hashing\\HashManager',
                'currentClassName' => 'Illuminate\\Hashing\\HashManager',
                'aliasName' => null,
            ],
            'isHashed' => [
                'name' => 'isHashed',
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
                        'startLine' => 97,
                        'endLine' => 97,
                        'startColumn' => 30,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a given string is already hashed.
 *
 * @param  string  $value
 * @return bool
 */',
                'startLine' => 97,
                'endLine' => 100,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\HashManager',
                'implementingClassName' => 'Illuminate\\Hashing\\HashManager',
                'currentClassName' => 'Illuminate\\Hashing\\HashManager',
                'aliasName' => null,
            ],
            'getDefaultDriver' => [
                'name' => 'getDefaultDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default driver name.
 *
 * @return string
 */',
                'startLine' => 107,
                'endLine' => 110,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\HashManager',
                'implementingClassName' => 'Illuminate\\Hashing\\HashManager',
                'currentClassName' => 'Illuminate\\Hashing\\HashManager',
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
                        'startLine' => 120,
                        'endLine' => 120,
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
 * @param  array  $value
 * @return bool
 *
 * @internal
 */',
                'startLine' => 120,
                'endLine' => 127,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Hashing',
                'declaringClassName' => 'Illuminate\\Hashing\\HashManager',
                'implementingClassName' => 'Illuminate\\Hashing\\HashManager',
                'currentClassName' => 'Illuminate\\Hashing\\HashManager',
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
