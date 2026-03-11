<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/TransformsToResource.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Concerns\TransformsToResource
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-e30570c5f7750017b7826b1c1afb595a5c38afa742ac1232580476d2709283d4-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/TransformsToResource.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'name' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
        'shortName' => 'TransformsToResource',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 11,
        'endLine' => 97,
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
            'toResource' => [
                'name' => 'toResource',
                'parameters' => [
                    'resourceClass' => [
                        'name' => 'resourceClass',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 19,
                                'endLine' => 19,
                                'startTokenPos' => 53,
                                'startFilePos' => 556,
                                'endTokenPos' => 53,
                                'endFilePos' => 559,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'null',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 19,
                        'endLine' => 19,
                        'startColumn' => 32,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new resource object for the given resource.
 *
 * @param  class-string<\\Illuminate\\Http\\Resources\\Json\\JsonResource>|null  $resourceClass
 * @return \\Illuminate\\Http\\Resources\\Json\\JsonResource
 */',
                'startLine' => 19,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
                'aliasName' => null,
            ],
            'guessResource' => [
                'name' => 'guessResource',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Guess the resource class for the model.
 *
 * @return \\Illuminate\\Http\\Resources\\Json\\JsonResource
 */',
                'startLine' => 33,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
                'aliasName' => null,
            ],
            'guessResourceName' => [
                'name' => 'guessResourceName',
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
                'docComment' => '/**
 * Guess the resource class name for the model.
 *
 * @return array{class-string<\\Illuminate\\Http\\Resources\\Json\\JsonResource>, class-string<\\Illuminate\\Http\\Resources\\Json\\JsonResource>}
 */',
                'startLine' => 55,
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
                'aliasName' => null,
            ],
            'resolveResourceFromAttribute' => [
                'name' => 'resolveResourceFromAttribute',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
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
                        'startLine' => 85,
                        'endLine' => 85,
                        'startColumn' => 53,
                        'endColumn' => 65,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
                                    'isIdentifier' => true,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'null',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the resource class from the class attribute.
 *
 * @param  class-string<\\Illuminate\\Http\\Resources\\Json\\JsonResource>  $class
 * @return class-string<*>|null
 */',
                'startLine' => 85,
                'endLine' => 96,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
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
