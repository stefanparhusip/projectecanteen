<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Auth/SupportsBasicAuth.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Auth\SupportsBasicAuth
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-efc0d2b713ff72df786cbc3b5a8a642b43e52d019570c68d1e4b9ae167b0ed77-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Auth\\SupportsBasicAuth',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Auth/SupportsBasicAuth.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Auth',
        'name' => 'Illuminate\\Contracts\\Auth\\SupportsBasicAuth',
        'shortName' => 'SupportsBasicAuth',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 24,
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
            'basic' => [
                'name' => 'basic',
                'parameters' => [
                    'field' => [
                        'name' => 'field',
                        'default' => [
                            'code' => '\'email\'',
                            'attributes' => [
                                'startLine' => 14,
                                'endLine' => 14,
                                'startTokenPos' => 25,
                                'startFilePos' => 319,
                                'endTokenPos' => 25,
                                'endFilePos' => 325,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 14,
                        'endLine' => 14,
                        'startColumn' => 27,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'extraConditions' => [
                        'name' => 'extraConditions',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 14,
                                'endLine' => 14,
                                'startTokenPos' => 32,
                                'startFilePos' => 347,
                                'endTokenPos' => 33,
                                'endFilePos' => 348,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 14,
                        'endLine' => 14,
                        'startColumn' => 45,
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
 * Attempt to authenticate using HTTP Basic Auth.
 *
 * @param  string  $field
 * @param  array  $extraConditions
 * @return \\Symfony\\Component\\HttpFoundation\\Response|null
 */',
                'startLine' => 14,
                'endLine' => 14,
                'startColumn' => 5,
                'endColumn' => 67,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\SupportsBasicAuth',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\SupportsBasicAuth',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\SupportsBasicAuth',
                'aliasName' => null,
            ],
            'onceBasic' => [
                'name' => 'onceBasic',
                'parameters' => [
                    'field' => [
                        'name' => 'field',
                        'default' => [
                            'code' => '\'email\'',
                            'attributes' => [
                                'startLine' => 23,
                                'endLine' => 23,
                                'startTokenPos' => 49,
                                'startFilePos' => 600,
                                'endTokenPos' => 49,
                                'endFilePos' => 606,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 23,
                        'endLine' => 23,
                        'startColumn' => 31,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'extraConditions' => [
                        'name' => 'extraConditions',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 23,
                                'endLine' => 23,
                                'startTokenPos' => 56,
                                'startFilePos' => 628,
                                'endTokenPos' => 57,
                                'endFilePos' => 629,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 23,
                        'endLine' => 23,
                        'startColumn' => 49,
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
 * Perform a stateless HTTP Basic login attempt.
 *
 * @param  string  $field
 * @param  array  $extraConditions
 * @return \\Symfony\\Component\\HttpFoundation\\Response|null
 */',
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 71,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\SupportsBasicAuth',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\SupportsBasicAuth',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\SupportsBasicAuth',
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
