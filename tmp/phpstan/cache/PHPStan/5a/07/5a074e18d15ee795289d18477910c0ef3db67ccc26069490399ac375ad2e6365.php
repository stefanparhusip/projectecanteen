<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/HasOneOrMany.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Relations\HasOneOrMany
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-ff78ffa00c6c9407a5fdbf2bd7c56bb8e5414faf77bb8d4759ca82890b0d51c8-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/HasOneOrMany.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
        'shortName' => 'HasOneOrMany',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 64,
        'docComment' => '/**
 * @template TRelatedModel of \\Illuminate\\Database\\Eloquent\\Model
 * @template TDeclaringModel of \\Illuminate\\Database\\Eloquent\\Model
 * @template TResult
 *
 * @extends \\Illuminate\\Database\\Eloquent\\Relations\\Relation<TRelatedModel, TDeclaringModel, TResult>
 */',
        'attributes' => [
        ],
        'startLine' => 21,
        'endLine' => 623,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\InteractsWithDictionary',
            1 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'foreignKey' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'name' => 'foreignKey',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The foreign key of the parent model.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'localKey' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'name' => 'localKey',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The local key of the parent model.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 37,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 24,
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
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 47,
                        'endLine' => 47,
                        'startColumn' => 33,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parent' => [
                        'name' => 'parent',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Model',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 47,
                        'endLine' => 47,
                        'startColumn' => 49,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'foreignKey' => [
                        'name' => 'foreignKey',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 47,
                        'endLine' => 47,
                        'startColumn' => 64,
                        'endColumn' => 74,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'localKey' => [
                        'name' => 'localKey',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 47,
                        'endLine' => 47,
                        'startColumn' => 77,
                        'endColumn' => 85,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new has one or many relationship instance.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>  $query
 * @param  TDeclaringModel  $parent
 * @param  string  $foreignKey
 * @param  string  $localKey
 */',
                'startLine' => 47,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'make' => [
                'name' => 'make',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 61,
                                'endLine' => 61,
                                'startTokenPos' => 158,
                                'startFilePos' => 1753,
                                'endTokenPos' => 159,
                                'endFilePos' => 1754,
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
                        'startColumn' => 26,
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
 * Create and return an un-saved instance of the related model.
 *
 * @param  array  $attributes
 * @return TRelatedModel
 */',
                'startLine' => 61,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'makeMany' => [
                'name' => 'makeMany',
                'parameters' => [
                    'records' => [
                        'name' => 'records',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 75,
                        'endLine' => 75,
                        'startColumn' => 30,
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
 * Create and return an un-saved instance of the related models.
 *
 * @param  iterable  $records
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>
 */',
                'startLine' => 75,
                'endLine' => 84,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'addConstraints' => [
                'name' => 'addConstraints',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the base constraints on the relation query.
 *
 * @return void
 */',
                'startLine' => 91,
                'endLine' => 100,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'addEagerConstraints' => [
                'name' => 'addEagerConstraints',
                'parameters' => [
                    'models' => [
                        'name' => 'models',
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
                        'startLine' => 103,
                        'endLine' => 103,
                        'startColumn' => 41,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 103,
                'endLine' => 113,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'matchOne' => [
                'name' => 'matchOne',
                'parameters' => [
                    'models' => [
                        'name' => 'models',
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
                        'startLine' => 123,
                        'endLine' => 123,
                        'startColumn' => 30,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'results' => [
                        'name' => 'results',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Collection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 123,
                        'endLine' => 123,
                        'startColumn' => 45,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'relation' => [
                        'name' => 'relation',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 123,
                        'endLine' => 123,
                        'startColumn' => 74,
                        'endColumn' => 82,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Match the eagerly loaded results to their single parents.
 *
 * @param  array<int, TDeclaringModel>  $models
 * @param  \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>  $results
 * @param  string  $relation
 * @return array<int, TDeclaringModel>
 */',
                'startLine' => 123,
                'endLine' => 126,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'matchMany' => [
                'name' => 'matchMany',
                'parameters' => [
                    'models' => [
                        'name' => 'models',
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
                        'startLine' => 136,
                        'endLine' => 136,
                        'startColumn' => 31,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'results' => [
                        'name' => 'results',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Collection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 136,
                        'endLine' => 136,
                        'startColumn' => 46,
                        'endColumn' => 72,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'relation' => [
                        'name' => 'relation',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 136,
                        'endLine' => 136,
                        'startColumn' => 75,
                        'endColumn' => 83,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Match the eagerly loaded results to their many parents.
 *
 * @param  array<int, TDeclaringModel>  $models
 * @param  \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>  $results
 * @param  string  $relation
 * @return array<int, TDeclaringModel>
 */',
                'startLine' => 136,
                'endLine' => 139,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'matchOneOrMany' => [
                'name' => 'matchOneOrMany',
                'parameters' => [
                    'models' => [
                        'name' => 'models',
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
                        'startLine' => 150,
                        'endLine' => 150,
                        'startColumn' => 39,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'results' => [
                        'name' => 'results',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Collection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 150,
                        'endLine' => 150,
                        'startColumn' => 54,
                        'endColumn' => 80,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'relation' => [
                        'name' => 'relation',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 150,
                        'endLine' => 150,
                        'startColumn' => 83,
                        'endColumn' => 91,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'type' => [
                        'name' => 'type',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 150,
                        'endLine' => 150,
                        'startColumn' => 94,
                        'endColumn' => 98,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Match the eagerly loaded results to their many parents.
 *
 * @param  array<int, TDeclaringModel>  $models
 * @param  \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>  $results
 * @param  string  $relation
 * @param  string  $type
 * @return array<int, TDeclaringModel>
 */',
                'startLine' => 150,
                'endLine' => 173,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'getRelationValue' => [
                'name' => 'getRelationValue',
                'parameters' => [
                    'dictionary' => [
                        'name' => 'dictionary',
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
                        'startLine' => 183,
                        'endLine' => 183,
                        'startColumn' => 41,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 183,
                        'endLine' => 183,
                        'startColumn' => 60,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'type' => [
                        'name' => 'type',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 183,
                        'endLine' => 183,
                        'startColumn' => 66,
                        'endColumn' => 70,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the value of a relationship by one or many type.
 *
 * @param  array  $dictionary
 * @param  string  $key
 * @param  string  $type
 * @return mixed
 */',
                'startLine' => 183,
                'endLine' => 188,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'buildDictionary' => [
                'name' => 'buildDictionary',
                'parameters' => [
                    'results' => [
                        'name' => 'results',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Collection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 196,
                        'endLine' => 196,
                        'startColumn' => 40,
                        'endColumn' => 66,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Build model dictionary keyed by the relation\'s foreign key.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>  $results
 * @return array<array<array-key, TRelatedModel>>
 */',
                'startLine' => 196,
                'endLine' => 215,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'findOrNew' => [
                'name' => 'findOrNew',
                'parameters' => [
                    'id' => [
                        'name' => 'id',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 224,
                        'endLine' => 224,
                        'startColumn' => 31,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 224,
                                'endLine' => 224,
                                'startTokenPos' => 871,
                                'startFilePos' => 7025,
                                'endTokenPos' => 873,
                                'endFilePos' => 7029,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 224,
                        'endLine' => 224,
                        'startColumn' => 36,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Find a model by its primary key or return a new instance of the related model.
 *
 * @param  mixed  $id
 * @param  array  $columns
 * @return ($id is (\\Illuminate\\Contracts\\Support\\Arrayable<array-key, mixed>|array<mixed>) ? \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel> : TRelatedModel)
 */',
                'startLine' => 224,
                'endLine' => 233,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'firstOrNew' => [
                'name' => 'firstOrNew',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 242,
                                'endLine' => 242,
                                'startTokenPos' => 945,
                                'startFilePos' => 7514,
                                'endTokenPos' => 946,
                                'endFilePos' => 7515,
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
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 32,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 242,
                                'endLine' => 242,
                                'startTokenPos' => 955,
                                'startFilePos' => 7534,
                                'endTokenPos' => 956,
                                'endFilePos' => 7535,
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
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 56,
                        'endColumn' => 73,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the first related model record matching the attributes or instantiate it.
 *
 * @param  array  $attributes
 * @param  array  $values
 * @return TRelatedModel
 */',
                'startLine' => 242,
                'endLine' => 251,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'firstOrCreate' => [
                'name' => 'firstOrCreate',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 260,
                                'endLine' => 260,
                                'startTokenPos' => 1036,
                                'startFilePos' => 8091,
                                'endTokenPos' => 1037,
                                'endFilePos' => 8092,
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
                        'startLine' => 260,
                        'endLine' => 260,
                        'startColumn' => 35,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 260,
                                'endLine' => 260,
                                'startTokenPos' => 1048,
                                'startFilePos' => 8119,
                                'endTokenPos' => 1049,
                                'endFilePos' => 8120,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'array',
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
                        'startLine' => 260,
                        'endLine' => 260,
                        'startColumn' => 59,
                        'endColumn' => 84,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the first record matching the attributes. If the record is not found, create it.
 *
 * @param  array  $attributes
 * @param  (\\Closure(): array)|array  $values
 * @return TRelatedModel
 */',
                'startLine' => 260,
                'endLine' => 267,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'createOrFirst' => [
                'name' => 'createOrFirst',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 276,
                                'endLine' => 276,
                                'startTokenPos' => 1120,
                                'startFilePos' => 8625,
                                'endTokenPos' => 1121,
                                'endFilePos' => 8626,
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
                        'startLine' => 276,
                        'endLine' => 276,
                        'startColumn' => 35,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 276,
                                'endLine' => 276,
                                'startTokenPos' => 1132,
                                'startFilePos' => 8653,
                                'endTokenPos' => 1133,
                                'endFilePos' => 8654,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'array',
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
                        'startLine' => 276,
                        'endLine' => 276,
                        'startColumn' => 59,
                        'endColumn' => 84,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Attempt to create the record. If a unique constraint violation occurs, attempt to find the matching record.
 *
 * @param  array  $attributes
 * @param  (\\Closure(): array)|array  $values
 * @return TRelatedModel
 */',
                'startLine' => 276,
                'endLine' => 283,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'updateOrCreate' => [
                'name' => 'updateOrCreate',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
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
                        'startLine' => 292,
                        'endLine' => 292,
                        'startColumn' => 36,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 292,
                                'endLine' => 292,
                                'startTokenPos' => 1236,
                                'startFilePos' => 9238,
                                'endTokenPos' => 1237,
                                'endFilePos' => 9239,
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
                        'startLine' => 292,
                        'endLine' => 292,
                        'startColumn' => 55,
                        'endColumn' => 72,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create or update a related record matching the attributes, and fill it with values.
 *
 * @param  array  $attributes
 * @param  array  $values
 * @return TRelatedModel
 */',
                'startLine' => 292,
                'endLine' => 299,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'upsert' => [
                'name' => 'upsert',
                'parameters' => [
                    'values' => [
                        'name' => 'values',
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
                        'startLine' => 309,
                        'endLine' => 309,
                        'startColumn' => 28,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'uniqueBy' => [
                        'name' => 'uniqueBy',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 309,
                        'endLine' => 309,
                        'startColumn' => 43,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'update' => [
                        'name' => 'update',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 309,
                                'endLine' => 309,
                                'startTokenPos' => 1323,
                                'startFilePos' => 9746,
                                'endTokenPos' => 1323,
                                'endFilePos' => 9749,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 309,
                        'endLine' => 309,
                        'startColumn' => 54,
                        'endColumn' => 67,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Insert new records or update the existing ones.
 *
 * @param  array  $values
 * @param  array|string  $uniqueBy
 * @param  array|null  $update
 * @return int
 */',
                'startLine' => 309,
                'endLine' => 320,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'save' => [
                'name' => 'save',
                'parameters' => [
                    'model' => [
                        'name' => 'model',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Model',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 328,
                        'endLine' => 328,
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
 * Attach a model instance to the parent model.
 *
 * @param  TRelatedModel  $model
 * @return TRelatedModel|false
 */',
                'startLine' => 328,
                'endLine' => 333,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'saveQuietly' => [
                'name' => 'saveQuietly',
                'parameters' => [
                    'model' => [
                        'name' => 'model',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Model',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 341,
                        'endLine' => 341,
                        'startColumn' => 33,
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
 * Attach a model instance without raising any events to the parent model.
 *
 * @param  TRelatedModel  $model
 * @return TRelatedModel|false
 */',
                'startLine' => 341,
                'endLine' => 346,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'saveMany' => [
                'name' => 'saveMany',
                'parameters' => [
                    'models' => [
                        'name' => 'models',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 354,
                        'endLine' => 354,
                        'startColumn' => 30,
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
 * Attach a collection of models to the parent instance.
 *
 * @param  iterable<TRelatedModel>  $models
 * @return iterable<TRelatedModel>
 */',
                'startLine' => 354,
                'endLine' => 361,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'saveManyQuietly' => [
                'name' => 'saveManyQuietly',
                'parameters' => [
                    'models' => [
                        'name' => 'models',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 369,
                        'endLine' => 369,
                        'startColumn' => 37,
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
 * Attach a collection of models to the parent instance without raising any events to the parent model.
 *
 * @param  iterable<TRelatedModel>  $models
 * @return iterable<TRelatedModel>
 */',
                'startLine' => 369,
                'endLine' => 374,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'create' => [
                'name' => 'create',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 382,
                                'endLine' => 382,
                                'startTokenPos' => 1621,
                                'startFilePos' => 11643,
                                'endTokenPos' => 1622,
                                'endFilePos' => 11644,
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
                        'startLine' => 382,
                        'endLine' => 382,
                        'startColumn' => 28,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new instance of the related model.
 *
 * @param  array  $attributes
 * @return TRelatedModel
 */',
                'startLine' => 382,
                'endLine' => 391,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'createQuietly' => [
                'name' => 'createQuietly',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 399,
                                'endLine' => 399,
                                'startTokenPos' => 1692,
                                'startFilePos' => 12147,
                                'endTokenPos' => 1693,
                                'endFilePos' => 12148,
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
                        'startLine' => 399,
                        'endLine' => 399,
                        'startColumn' => 35,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new instance of the related model without raising any events to the parent model.
 *
 * @param  array  $attributes
 * @return TRelatedModel
 */',
                'startLine' => 399,
                'endLine' => 402,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'forceCreate' => [
                'name' => 'forceCreate',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 410,
                                'endLine' => 410,
                                'startTokenPos' => 1736,
                                'startFilePos' => 12450,
                                'endTokenPos' => 1737,
                                'endFilePos' => 12451,
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
                        'startLine' => 410,
                        'endLine' => 410,
                        'startColumn' => 33,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new instance of the related model. Allow mass-assignment.
 *
 * @param  array  $attributes
 * @return TRelatedModel
 */',
                'startLine' => 410,
                'endLine' => 415,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'forceCreateQuietly' => [
                'name' => 'forceCreateQuietly',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 423,
                                'endLine' => 423,
                                'startTokenPos' => 1793,
                                'startFilePos' => 12880,
                                'endTokenPos' => 1794,
                                'endFilePos' => 12881,
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
                        'startLine' => 423,
                        'endLine' => 423,
                        'startColumn' => 40,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new instance of the related model with mass assignment without raising model events.
 *
 * @param  array  $attributes
 * @return TRelatedModel
 */',
                'startLine' => 423,
                'endLine' => 426,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'createMany' => [
                'name' => 'createMany',
                'parameters' => [
                    'records' => [
                        'name' => 'records',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'iterable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 434,
                        'endLine' => 434,
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
 * Create a Collection of new instances of the related model.
 *
 * @param  iterable  $records
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>
 */',
                'startLine' => 434,
                'endLine' => 443,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'createManyQuietly' => [
                'name' => 'createManyQuietly',
                'parameters' => [
                    'records' => [
                        'name' => 'records',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'iterable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 451,
                        'endLine' => 451,
                        'startColumn' => 39,
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
 * Create a Collection of new instances of the related model without raising any events to the parent model.
 *
 * @param  iterable  $records
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>
 */',
                'startLine' => 451,
                'endLine' => 454,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'forceCreateMany' => [
                'name' => 'forceCreateMany',
                'parameters' => [
                    'records' => [
                        'name' => 'records',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'iterable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 462,
                        'endLine' => 462,
                        'startColumn' => 37,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a Collection of new instances of the related model, allowing mass-assignment.
 *
 * @param  iterable  $records
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>
 */',
                'startLine' => 462,
                'endLine' => 471,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'forceCreateManyQuietly' => [
                'name' => 'forceCreateManyQuietly',
                'parameters' => [
                    'records' => [
                        'name' => 'records',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'iterable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 479,
                        'endLine' => 479,
                        'startColumn' => 44,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a Collection of new instances of the related model, allowing mass-assignment and without raising any events to the parent model.
 *
 * @param  iterable  $records
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>
 */',
                'startLine' => 479,
                'endLine' => 482,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'setForeignAttributesForCreate' => [
                'name' => 'setForeignAttributesForCreate',
                'parameters' => [
                    'model' => [
                        'name' => 'model',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Model',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 490,
                        'endLine' => 490,
                        'startColumn' => 54,
                        'endColumn' => 65,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the foreign ID for creating a related model.
 *
 * @param  TRelatedModel  $model
 * @return void
 */',
                'startLine' => 490,
                'endLine' => 503,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'getRelationExistenceQuery' => [
                'name' => 'getRelationExistenceQuery',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 506,
                        'endLine' => 506,
                        'startColumn' => 47,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parentQuery' => [
                        'name' => 'parentQuery',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 506,
                        'endLine' => 506,
                        'startColumn' => 63,
                        'endColumn' => 82,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 506,
                                'endLine' => 506,
                                'startTokenPos' => 2155,
                                'startFilePos' => 15463,
                                'endTokenPos' => 2157,
                                'endFilePos' => 15467,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 506,
                        'endLine' => 506,
                        'startColumn' => 85,
                        'endColumn' => 100,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 506,
                'endLine' => 513,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'getRelationExistenceQueryForSelfRelation' => [
                'name' => 'getRelationExistenceQueryForSelfRelation',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 523,
                        'endLine' => 523,
                        'startColumn' => 62,
                        'endColumn' => 75,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parentQuery' => [
                        'name' => 'parentQuery',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 523,
                        'endLine' => 523,
                        'startColumn' => 78,
                        'endColumn' => 97,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 523,
                                'endLine' => 523,
                                'startTokenPos' => 2244,
                                'startFilePos' => 16213,
                                'endTokenPos' => 2246,
                                'endFilePos' => 16217,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 523,
                        'endLine' => 523,
                        'startColumn' => 100,
                        'endColumn' => 115,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the constraints for a relationship query on the same table.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TDeclaringModel>  $parentQuery
 * @param  mixed  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>
 */',
                'startLine' => 523,
                'endLine' => 532,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'take' => [
                'name' => 'take',
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
                        'startLine' => 540,
                        'endLine' => 540,
                        'startColumn' => 26,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Alias to set the "limit" value of the query.
 *
 * @param  int  $value
 * @return $this
 */',
                'startLine' => 540,
                'endLine' => 543,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'limit' => [
                'name' => 'limit',
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
                        'startLine' => 551,
                        'endLine' => 551,
                        'startColumn' => 27,
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
 * Set the "limit" value of the query.
 *
 * @param  int  $value
 * @return $this
 */',
                'startLine' => 551,
                'endLine' => 560,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'getExistenceCompareKey' => [
                'name' => 'getExistenceCompareKey',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the key for comparing against the parent key in "has" query.
 *
 * @return string
 */',
                'startLine' => 567,
                'endLine' => 570,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'getParentKey' => [
                'name' => 'getParentKey',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the key value of the parent\'s local key.
 *
 * @return mixed
 */',
                'startLine' => 577,
                'endLine' => 580,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'getQualifiedParentKeyName' => [
                'name' => 'getQualifiedParentKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the fully-qualified parent key name.
 *
 * @return string
 */',
                'startLine' => 587,
                'endLine' => 590,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'getForeignKeyName' => [
                'name' => 'getForeignKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the plain foreign key.
 *
 * @return string
 */',
                'startLine' => 597,
                'endLine' => 602,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'getQualifiedForeignKeyName' => [
                'name' => 'getQualifiedForeignKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the foreign key for the relationship.
 *
 * @return string
 */',
                'startLine' => 609,
                'endLine' => 612,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'aliasName' => null,
            ],
            'getLocalKeyName' => [
                'name' => 'getLocalKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the local key for the relationship.
 *
 * @return string
 */',
                'startLine' => 619,
                'endLine' => 622,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
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
