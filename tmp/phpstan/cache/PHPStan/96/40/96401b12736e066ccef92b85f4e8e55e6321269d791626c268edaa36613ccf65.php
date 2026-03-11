<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Hashing/Hasher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Hashing\Hasher
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-98857ddca4bf010ff97d68870f81b225b6f4e2cc863b02434d62e158185aa3ad-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Hashing\\Hasher',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Hashing/Hasher.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Hashing',
        'name' => 'Illuminate\\Contracts\\Hashing\\Hasher',
        'shortName' => 'Hasher',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 42,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
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
                        'startLine' => 13,
                        'endLine' => 13,
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
                'startLine' => 13,
                'endLine' => 13,
                'startColumn' => 5,
                'endColumn' => 39,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Hashing',
                'declaringClassName' => 'Illuminate\\Contracts\\Hashing\\Hasher',
                'implementingClassName' => 'Illuminate\\Contracts\\Hashing\\Hasher',
                'currentClassName' => 'Illuminate\\Contracts\\Hashing\\Hasher',
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
                        'startLine' => 22,
                        'endLine' => 22,
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
                                'startLine' => 22,
                                'endLine' => 22,
                                'startTokenPos' => 46,
                                'startFilePos' => 449,
                                'endTokenPos' => 47,
                                'endFilePos' => 450,
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
                        'startLine' => 22,
                        'endLine' => 22,
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
                'startLine' => 22,
                'endLine' => 22,
                'startColumn' => 5,
                'endColumn' => 77,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Hashing',
                'declaringClassName' => 'Illuminate\\Contracts\\Hashing\\Hasher',
                'implementingClassName' => 'Illuminate\\Contracts\\Hashing\\Hasher',
                'currentClassName' => 'Illuminate\\Contracts\\Hashing\\Hasher',
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
                        'startLine' => 32,
                        'endLine' => 32,
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
                        'startLine' => 32,
                        'endLine' => 32,
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
                                'startLine' => 32,
                                'endLine' => 32,
                                'startTokenPos' => 75,
                                'startFilePos' => 734,
                                'endTokenPos' => 76,
                                'endFilePos' => 735,
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
                        'startLine' => 32,
                        'endLine' => 32,
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
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 92,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Hashing',
                'declaringClassName' => 'Illuminate\\Contracts\\Hashing\\Hasher',
                'implementingClassName' => 'Illuminate\\Contracts\\Hashing\\Hasher',
                'currentClassName' => 'Illuminate\\Contracts\\Hashing\\Hasher',
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
                        'startLine' => 41,
                        'endLine' => 41,
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
                                'startLine' => 41,
                                'endLine' => 41,
                                'startTokenPos' => 97,
                                'startFilePos' => 985,
                                'endTokenPos' => 98,
                                'endFilePos' => 986,
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
                        'startLine' => 41,
                        'endLine' => 41,
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
                'startLine' => 41,
                'endLine' => 41,
                'startColumn' => 5,
                'endColumn' => 67,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Hashing',
                'declaringClassName' => 'Illuminate\\Contracts\\Hashing\\Hasher',
                'implementingClassName' => 'Illuminate\\Contracts\\Hashing\\Hasher',
                'currentClassName' => 'Illuminate\\Contracts\\Hashing\\Hasher',
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
