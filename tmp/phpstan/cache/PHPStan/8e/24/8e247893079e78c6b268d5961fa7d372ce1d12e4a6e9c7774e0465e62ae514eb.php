<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/sanctum/src/NewAccessToken.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Sanctum\NewAccessToken
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-ba3c623c8622f51888ef8c0e7a6a745cb5349ee38540f0ddc797e1ef841f6ab2-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Laravel\\Sanctum\\NewAccessToken',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/sanctum/src/NewAccessToken.php',
            ],
        ],
        'namespace' => 'Laravel\\Sanctum',
        'name' => 'Laravel\\Sanctum\\NewAccessToken',
        'shortName' => 'NewAccessToken',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 43,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Support\\Arrayable',
            1 => 'Illuminate\\Contracts\\Support\\Jsonable',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'accessToken' => [
                'declaringClassName' => 'Laravel\\Sanctum\\NewAccessToken',
                'implementingClassName' => 'Laravel\\Sanctum\\NewAccessToken',
                'name' => 'accessToken',
                'modifiers' => 1,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Laravel\\Sanctum\\PersonalAccessToken',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 16,
                'endLine' => 16,
                'startColumn' => 33,
                'endColumn' => 71,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'plainTextToken' => [
                'declaringClassName' => 'Laravel\\Sanctum\\NewAccessToken',
                'implementingClassName' => 'Laravel\\Sanctum\\NewAccessToken',
                'name' => 'plainTextToken',
                'modifiers' => 1,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 16,
                'endLine' => 16,
                'startColumn' => 74,
                'endColumn' => 102,
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
                    'accessToken' => [
                        'name' => 'accessToken',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Laravel\\Sanctum\\PersonalAccessToken',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 16,
                        'endLine' => 16,
                        'startColumn' => 33,
                        'endColumn' => 71,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'plainTextToken' => [
                        'name' => 'plainTextToken',
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
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 16,
                        'endLine' => 16,
                        'startColumn' => 74,
                        'endColumn' => 102,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new access token result.
 *
 * @param  \\Laravel\\Sanctum\\PersonalAccessToken  $accessToken  The access token instance.
 * @param  string  $plainTextToken  The plain text version of the token.
 */',
                'startLine' => 16,
                'endLine' => 18,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Laravel\\Sanctum',
                'declaringClassName' => 'Laravel\\Sanctum\\NewAccessToken',
                'implementingClassName' => 'Laravel\\Sanctum\\NewAccessToken',
                'currentClassName' => 'Laravel\\Sanctum\\NewAccessToken',
                'aliasName' => null,
            ],
            'toArray' => [
                'name' => 'toArray',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the instance as an array.
 *
 * @return array<string, string>
 */',
                'startLine' => 25,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Laravel\\Sanctum',
                'declaringClassName' => 'Laravel\\Sanctum\\NewAccessToken',
                'implementingClassName' => 'Laravel\\Sanctum\\NewAccessToken',
                'currentClassName' => 'Laravel\\Sanctum\\NewAccessToken',
                'aliasName' => null,
            ],
            'toJson' => [
                'name' => 'toJson',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 39,
                                'endLine' => 39,
                                'startTokenPos' => 107,
                                'startFilePos' => 967,
                                'endTokenPos' => 107,
                                'endFilePos' => 967,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 28,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the object to its JSON representation.
 *
 * @param  int  $options
 * @return string
 */',
                'startLine' => 39,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Laravel\\Sanctum',
                'declaringClassName' => 'Laravel\\Sanctum\\NewAccessToken',
                'implementingClassName' => 'Laravel\\Sanctum\\NewAccessToken',
                'currentClassName' => 'Laravel\\Sanctum\\NewAccessToken',
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
