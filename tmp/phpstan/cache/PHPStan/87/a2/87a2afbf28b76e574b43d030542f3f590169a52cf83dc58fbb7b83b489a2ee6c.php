<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/HasOneOrManyThrough.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Relations\HasOneOrManyThrough
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-fa1f985349b7f7fe82f6058d5fb3cf2381b419579a46f222233416156e11feaa-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/HasOneOrManyThrough.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
        'shortName' => 'HasOneOrManyThrough',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 64,
        'docComment' => '/**
 * @template TRelatedModel of \\Illuminate\\Database\\Eloquent\\Model
 * @template TIntermediateModel of \\Illuminate\\Database\\Eloquent\\Model
 * @template TDeclaringModel of \\Illuminate\\Database\\Eloquent\\Model
 * @template TResult
 *
 * @extends \\Illuminate\\Database\\Eloquent\\Relations\\Relation<TRelatedModel, TIntermediateModel, TResult>
 */',
        'attributes' => [
        ],
        'startLine' => 24,
        'endLine' => 870,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\InteractsWithDictionary',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'throughParent' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'name' => 'throughParent',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The "through" parent model instance.
 *
 * @var TIntermediateModel
 */',
                'attributes' => [
                ],
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'farParent' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'name' => 'farParent',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The far parent model instance.
 *
 * @var TDeclaringModel
 */',
                'attributes' => [
                ],
                'startLine' => 40,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'firstKey' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'name' => 'firstKey',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The near key on the relationship.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 47,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'secondKey' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'name' => 'secondKey',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The far key on the relationship.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 54,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'localKey' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'name' => 'localKey',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The local key on the relationship.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 61,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'secondLocalKey' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'name' => 'secondLocalKey',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The local key on the intermediary model.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 68,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 30,
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
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 33,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'farParent' => [
                        'name' => 'farParent',
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
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 49,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'throughParent' => [
                        'name' => 'throughParent',
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
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 67,
                        'endColumn' => 86,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'firstKey' => [
                        'name' => 'firstKey',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 89,
                        'endColumn' => 97,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'secondKey' => [
                        'name' => 'secondKey',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 100,
                        'endColumn' => 109,
                        'parameterIndex' => 4,
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
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 112,
                        'endColumn' => 120,
                        'parameterIndex' => 5,
                        'isOptional' => false,
                    ],
                    'secondLocalKey' => [
                        'name' => 'secondLocalKey',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 123,
                        'endColumn' => 137,
                        'parameterIndex' => 6,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new has many through relationship instance.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>  $query
 * @param  TDeclaringModel  $farParent
 * @param  TIntermediateModel  $throughParent
 * @param  string  $firstKey
 * @param  string  $secondKey
 * @param  string  $localKey
 * @param  string  $secondLocalKey
 */',
                'startLine' => 81,
                'endLine' => 91,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
                'startLine' => 98,
                'endLine' => 109,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'performJoin' => [
                'name' => 'performJoin',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 117,
                                'endLine' => 117,
                                'startTokenPos' => 318,
                                'startFilePos' => 3142,
                                'endTokenPos' => 318,
                                'endFilePos' => 3145,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                                            'isIdentifier' => false,
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
                        'startLine' => 117,
                        'endLine' => 117,
                        'startColumn' => 36,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the join clause on the query.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>|null  $query
 * @return void
 */',
                'startLine' => 117,
                'endLine' => 130,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
                'startLine' => 137,
                'endLine' => 140,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'throughParentSoftDeletes' => [
                'name' => 'throughParentSoftDeletes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine whether "through" parent of the relation uses Soft Deletes.
 *
 * @return bool
 */',
                'startLine' => 147,
                'endLine' => 150,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'withTrashedParents' => [
                'name' => 'withTrashedParents',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that trashed "through" parents should be included in the query.
 *
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
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
                        'startLine' => 165,
                        'endLine' => 165,
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
                'startLine' => 165,
                'endLine' => 175,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
                        'startLine' => 183,
                        'endLine' => 183,
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
                'startLine' => 183,
                'endLine' => 201,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
                                'startLine' => 210,
                                'endLine' => 210,
                                'startTokenPos' => 704,
                                'startFilePos' => 5905,
                                'endTokenPos' => 705,
                                'endFilePos' => 5906,
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
                        'startLine' => 210,
                        'endLine' => 210,
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
                                'startLine' => 210,
                                'endLine' => 210,
                                'startTokenPos' => 714,
                                'startFilePos' => 5925,
                                'endTokenPos' => 715,
                                'endFilePos' => 5926,
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
                        'startLine' => 210,
                        'endLine' => 210,
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
                'startLine' => 210,
                'endLine' => 217,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
                                'startLine' => 226,
                                'endLine' => 226,
                                'startTokenPos' => 787,
                                'startFilePos' => 6417,
                                'endTokenPos' => 788,
                                'endFilePos' => 6418,
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
                        'startLine' => 226,
                        'endLine' => 226,
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
                                'startLine' => 226,
                                'endLine' => 226,
                                'startTokenPos' => 799,
                                'startFilePos' => 6445,
                                'endTokenPos' => 800,
                                'endFilePos' => 6446,
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
                        'startLine' => 226,
                        'endLine' => 226,
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
                'startLine' => 226,
                'endLine' => 233,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
                                'startLine' => 242,
                                'endLine' => 242,
                                'startTokenPos' => 877,
                                'startFilePos' => 6968,
                                'endTokenPos' => 878,
                                'endFilePos' => 6969,
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
                                'startLine' => 242,
                                'endLine' => 242,
                                'startTokenPos' => 889,
                                'startFilePos' => 6996,
                                'endTokenPos' => 890,
                                'endFilePos' => 6997,
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
                        'startLine' => 242,
                        'endLine' => 242,
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
                'startLine' => 242,
                'endLine' => 249,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
                        'startLine' => 258,
                        'endLine' => 258,
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
                                'startLine' => 258,
                                'endLine' => 258,
                                'startTokenPos' => 989,
                                'startFilePos' => 7582,
                                'endTokenPos' => 990,
                                'endFilePos' => 7583,
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
                        'startLine' => 258,
                        'endLine' => 258,
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
                'startLine' => 258,
                'endLine' => 265,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'firstWhere' => [
                'name' => 'firstWhere',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 276,
                        'endLine' => 276,
                        'startColumn' => 32,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 276,
                                'endLine' => 276,
                                'startTokenPos' => 1071,
                                'startFilePos' => 8149,
                                'endTokenPos' => 1071,
                                'endFilePos' => 8152,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 276,
                        'endLine' => 276,
                        'startColumn' => 41,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 276,
                                'endLine' => 276,
                                'startTokenPos' => 1078,
                                'startFilePos' => 8164,
                                'endTokenPos' => 1078,
                                'endFilePos' => 8167,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 276,
                        'endLine' => 276,
                        'startColumn' => 59,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => [
                            'code' => '\'and\'',
                            'attributes' => [
                                'startLine' => 276,
                                'endLine' => 276,
                                'startTokenPos' => 1085,
                                'startFilePos' => 8181,
                                'endTokenPos' => 1085,
                                'endFilePos' => 8185,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 276,
                        'endLine' => 276,
                        'startColumn' => 74,
                        'endColumn' => 89,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a basic where clause to the query, and return the first result.
 *
 * @param  \\Closure|string|array  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return TRelatedModel|null
 */',
                'startLine' => 276,
                'endLine' => 279,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'first' => [
                'name' => 'first',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 287,
                                'endLine' => 287,
                                'startTokenPos' => 1127,
                                'startFilePos' => 8460,
                                'endTokenPos' => 1129,
                                'endFilePos' => 8464,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 287,
                        'endLine' => 287,
                        'startColumn' => 27,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the query and get the first related model.
 *
 * @param  array  $columns
 * @return TRelatedModel|null
 */',
                'startLine' => 287,
                'endLine' => 292,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'firstOrFail' => [
                'name' => 'firstOrFail',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 302,
                                'endLine' => 302,
                                'startTokenPos' => 1189,
                                'startFilePos' => 8884,
                                'endTokenPos' => 1191,
                                'endFilePos' => 8888,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 302,
                        'endLine' => 302,
                        'startColumn' => 33,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the query and get the first result or throw an exception.
 *
 * @param  array  $columns
 * @return TRelatedModel
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<TRelatedModel>
 */',
                'startLine' => 302,
                'endLine' => 309,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'firstOr' => [
                'name' => 'firstOr',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 320,
                                'endLine' => 320,
                                'startTokenPos' => 1258,
                                'startFilePos' => 9391,
                                'endTokenPos' => 1260,
                                'endFilePos' => 9395,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 320,
                        'endLine' => 320,
                        'startColumn' => 29,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 320,
                                'endLine' => 320,
                                'startTokenPos' => 1270,
                                'startFilePos' => 9419,
                                'endTokenPos' => 1270,
                                'endFilePos' => 9422,
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
                        'startLine' => 320,
                        'endLine' => 320,
                        'startColumn' => 47,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the query and get the first result or call a callback.
 *
 * @template TValue
 *
 * @param  (\\Closure(): TValue)|list<string>  $columns
 * @param  (\\Closure(): TValue)|null  $callback
 * @return TRelatedModel|TValue
 */',
                'startLine' => 320,
                'endLine' => 333,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'find' => [
                'name' => 'find',
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
                        'startLine' => 342,
                        'endLine' => 342,
                        'startColumn' => 26,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 342,
                                'endLine' => 342,
                                'startTokenPos' => 1358,
                                'startFilePos' => 10031,
                                'endTokenPos' => 1360,
                                'endFilePos' => 10035,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 342,
                        'endLine' => 342,
                        'startColumn' => 31,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Find a related model by its primary key.
 *
 * @param  mixed  $id
 * @param  array  $columns
 * @return ($id is (\\Illuminate\\Contracts\\Support\\Arrayable<array-key, mixed>|array<mixed>) ? \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel> : TRelatedModel|null)
 */',
                'startLine' => 342,
                'endLine' => 351,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'findSole' => [
                'name' => 'findSole',
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
                        'startLine' => 363,
                        'endLine' => 363,
                        'startColumn' => 30,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 363,
                                'endLine' => 363,
                                'startTokenPos' => 1447,
                                'startFilePos' => 10655,
                                'endTokenPos' => 1449,
                                'endFilePos' => 10659,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 363,
                        'endLine' => 363,
                        'startColumn' => 35,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Find a sole related model by its primary key.
 *
 * @param  mixed  $id
 * @param  array  $columns
 * @return TRelatedModel
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<TRelatedModel>
 * @throws \\Illuminate\\Database\\MultipleRecordsFoundException
 */',
                'startLine' => 363,
                'endLine' => 368,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'findMany' => [
                'name' => 'findMany',
                'parameters' => [
                    'ids' => [
                        'name' => 'ids',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 377,
                        'endLine' => 377,
                        'startColumn' => 30,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 377,
                                'endLine' => 377,
                                'startTokenPos' => 1502,
                                'startFilePos' => 11098,
                                'endTokenPos' => 1504,
                                'endFilePos' => 11102,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 377,
                        'endLine' => 377,
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
 * Find multiple related models by their primary keys.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $ids
 * @param  array  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>
 */',
                'startLine' => 377,
                'endLine' => 388,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'findOrFail' => [
                'name' => 'findOrFail',
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
                        'startLine' => 399,
                        'endLine' => 399,
                        'startColumn' => 32,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 399,
                                'endLine' => 399,
                                'startTokenPos' => 1603,
                                'startFilePos' => 11862,
                                'endTokenPos' => 1605,
                                'endFilePos' => 11866,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 399,
                        'endLine' => 399,
                        'startColumn' => 37,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Find a related model by its primary key or throw an exception.
 *
 * @param  mixed  $id
 * @param  array  $columns
 * @return ($id is (\\Illuminate\\Contracts\\Support\\Arrayable<array-key, mixed>|array<mixed>) ? \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel> : TRelatedModel)
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<TRelatedModel>
 */',
                'startLine' => 399,
                'endLine' => 414,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'findOr' => [
                'name' => 'findOr',
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
                        'startLine' => 430,
                        'endLine' => 430,
                        'startColumn' => 28,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 430,
                                'endLine' => 430,
                                'startTokenPos' => 1748,
                                'startFilePos' => 12836,
                                'endTokenPos' => 1750,
                                'endFilePos' => 12840,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 430,
                        'endLine' => 430,
                        'startColumn' => 33,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 430,
                                'endLine' => 430,
                                'startTokenPos' => 1760,
                                'startFilePos' => 12864,
                                'endTokenPos' => 1760,
                                'endFilePos' => 12867,
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
                        'startLine' => 430,
                        'endLine' => 430,
                        'startColumn' => 51,
                        'endColumn' => 75,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Find a related model by its primary key or call a callback.
 *
 * @template TValue
 *
 * @param  mixed  $id
 * @param  (\\Closure(): TValue)|list<string>|string  $columns
 * @param  (\\Closure(): TValue)|null  $callback
 * @return (
 *     $id is (\\Illuminate\\Contracts\\Support\\Arrayable<array-key, mixed>|array<mixed>)
 *     ? \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>|TValue
 *     : TRelatedModel|TValue
 * )
 */',
                'startLine' => 430,
                'endLine' => 451,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'get' => [
                'name' => 'get',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 454,
                                'endLine' => 454,
                                'startTokenPos' => 1915,
                                'startFilePos' => 13416,
                                'endTokenPos' => 1917,
                                'endFilePos' => 13420,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 454,
                        'endLine' => 454,
                        'startColumn' => 25,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 454,
                'endLine' => 470,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'paginate' => [
                'name' => 'paginate',
                'parameters' => [
                    'perPage' => [
                        'name' => 'perPage',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 481,
                                'endLine' => 481,
                                'startTokenPos' => 2015,
                                'startFilePos' => 14309,
                                'endTokenPos' => 2015,
                                'endFilePos' => 14312,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 481,
                        'endLine' => 481,
                        'startColumn' => 30,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 481,
                                'endLine' => 481,
                                'startTokenPos' => 2022,
                                'startFilePos' => 14326,
                                'endTokenPos' => 2024,
                                'endFilePos' => 14330,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 481,
                        'endLine' => 481,
                        'startColumn' => 47,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'pageName' => [
                        'name' => 'pageName',
                        'default' => [
                            'code' => '\'page\'',
                            'attributes' => [
                                'startLine' => 481,
                                'endLine' => 481,
                                'startTokenPos' => 2031,
                                'startFilePos' => 14345,
                                'endTokenPos' => 2031,
                                'endFilePos' => 14350,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 481,
                        'endLine' => 481,
                        'startColumn' => 65,
                        'endColumn' => 82,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'page' => [
                        'name' => 'page',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 481,
                                'endLine' => 481,
                                'startTokenPos' => 2038,
                                'startFilePos' => 14361,
                                'endTokenPos' => 2038,
                                'endFilePos' => 14364,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 481,
                        'endLine' => 481,
                        'startColumn' => 85,
                        'endColumn' => 96,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a paginator for the "select" statement.
 *
 * @param  int|null  $perPage
 * @param  array  $columns
 * @param  string  $pageName
 * @param  int|null  $page
 * @return \\Illuminate\\Pagination\\LengthAwarePaginator
 */',
                'startLine' => 481,
                'endLine' => 486,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'simplePaginate' => [
                'name' => 'simplePaginate',
                'parameters' => [
                    'perPage' => [
                        'name' => 'perPage',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 497,
                                'endLine' => 497,
                                'startTokenPos' => 2093,
                                'startFilePos' => 14835,
                                'endTokenPos' => 2093,
                                'endFilePos' => 14838,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 497,
                        'endLine' => 497,
                        'startColumn' => 36,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 497,
                                'endLine' => 497,
                                'startTokenPos' => 2100,
                                'startFilePos' => 14852,
                                'endTokenPos' => 2102,
                                'endFilePos' => 14856,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 497,
                        'endLine' => 497,
                        'startColumn' => 53,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'pageName' => [
                        'name' => 'pageName',
                        'default' => [
                            'code' => '\'page\'',
                            'attributes' => [
                                'startLine' => 497,
                                'endLine' => 497,
                                'startTokenPos' => 2109,
                                'startFilePos' => 14871,
                                'endTokenPos' => 2109,
                                'endFilePos' => 14876,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 497,
                        'endLine' => 497,
                        'startColumn' => 71,
                        'endColumn' => 88,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'page' => [
                        'name' => 'page',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 497,
                                'endLine' => 497,
                                'startTokenPos' => 2116,
                                'startFilePos' => 14887,
                                'endTokenPos' => 2116,
                                'endFilePos' => 14890,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 497,
                        'endLine' => 497,
                        'startColumn' => 91,
                        'endColumn' => 102,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Paginate the given query into a simple paginator.
 *
 * @param  int|null  $perPage
 * @param  array  $columns
 * @param  string  $pageName
 * @param  int|null  $page
 * @return \\Illuminate\\Contracts\\Pagination\\Paginator
 */',
                'startLine' => 497,
                'endLine' => 502,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'cursorPaginate' => [
                'name' => 'cursorPaginate',
                'parameters' => [
                    'perPage' => [
                        'name' => 'perPage',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 513,
                                'endLine' => 513,
                                'startTokenPos' => 2171,
                                'startFilePos' => 15380,
                                'endTokenPos' => 2171,
                                'endFilePos' => 15383,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 513,
                        'endLine' => 513,
                        'startColumn' => 36,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 513,
                                'endLine' => 513,
                                'startTokenPos' => 2178,
                                'startFilePos' => 15397,
                                'endTokenPos' => 2180,
                                'endFilePos' => 15401,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 513,
                        'endLine' => 513,
                        'startColumn' => 53,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'cursorName' => [
                        'name' => 'cursorName',
                        'default' => [
                            'code' => '\'cursor\'',
                            'attributes' => [
                                'startLine' => 513,
                                'endLine' => 513,
                                'startTokenPos' => 2187,
                                'startFilePos' => 15418,
                                'endTokenPos' => 2187,
                                'endFilePos' => 15425,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 513,
                        'endLine' => 513,
                        'startColumn' => 71,
                        'endColumn' => 92,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'cursor' => [
                        'name' => 'cursor',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 513,
                                'endLine' => 513,
                                'startTokenPos' => 2194,
                                'startFilePos' => 15438,
                                'endTokenPos' => 2194,
                                'endFilePos' => 15441,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 513,
                        'endLine' => 513,
                        'startColumn' => 95,
                        'endColumn' => 108,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Paginate the given query into a cursor paginator.
 *
 * @param  int|null  $perPage
 * @param  array  $columns
 * @param  string  $cursorName
 * @param  string|null  $cursor
 * @return \\Illuminate\\Contracts\\Pagination\\CursorPaginator
 */',
                'startLine' => 513,
                'endLine' => 518,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'shouldSelect' => [
                'name' => 'shouldSelect',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 526,
                                'endLine' => 526,
                                'startTokenPos' => 2251,
                                'startFilePos' => 15790,
                                'endTokenPos' => 2253,
                                'endFilePos' => 15794,
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
                        'startLine' => 526,
                        'endLine' => 526,
                        'startColumn' => 37,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the select clause for the relation query.
 *
 * @param  array  $columns
 * @return array
 */',
                'startLine' => 526,
                'endLine' => 533,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'chunk' => [
                'name' => 'chunk',
                'parameters' => [
                    'count' => [
                        'name' => 'count',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 542,
                        'endLine' => 542,
                        'startColumn' => 27,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 542,
                        'endLine' => 542,
                        'startColumn' => 35,
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
 * Chunk the results of the query.
 *
 * @param  int  $count
 * @param  callable  $callback
 * @return bool
 */',
                'startLine' => 542,
                'endLine' => 545,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'chunkById' => [
                'name' => 'chunkById',
                'parameters' => [
                    'count' => [
                        'name' => 'count',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 556,
                        'endLine' => 556,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 556,
                        'endLine' => 556,
                        'startColumn' => 39,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 556,
                                'endLine' => 556,
                                'startTokenPos' => 2368,
                                'startFilePos' => 16604,
                                'endTokenPos' => 2368,
                                'endFilePos' => 16607,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 556,
                        'endLine' => 556,
                        'startColumn' => 59,
                        'endColumn' => 72,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'alias' => [
                        'name' => 'alias',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 556,
                                'endLine' => 556,
                                'startTokenPos' => 2375,
                                'startFilePos' => 16619,
                                'endTokenPos' => 2375,
                                'endFilePos' => 16622,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 556,
                        'endLine' => 556,
                        'startColumn' => 75,
                        'endColumn' => 87,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Chunk the results of a query by comparing numeric IDs.
 *
 * @param  int  $count
 * @param  callable  $callback
 * @param  string|null  $column
 * @param  string|null  $alias
 * @return bool
 */',
                'startLine' => 556,
                'endLine' => 563,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'chunkByIdDesc' => [
                'name' => 'chunkByIdDesc',
                'parameters' => [
                    'count' => [
                        'name' => 'count',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 574,
                        'endLine' => 574,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 574,
                        'endLine' => 574,
                        'startColumn' => 43,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 574,
                                'endLine' => 574,
                                'startTokenPos' => 2455,
                                'startFilePos' => 17172,
                                'endTokenPos' => 2455,
                                'endFilePos' => 17175,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 574,
                        'endLine' => 574,
                        'startColumn' => 63,
                        'endColumn' => 76,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'alias' => [
                        'name' => 'alias',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 574,
                                'endLine' => 574,
                                'startTokenPos' => 2462,
                                'startFilePos' => 17187,
                                'endTokenPos' => 2462,
                                'endFilePos' => 17190,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 574,
                        'endLine' => 574,
                        'startColumn' => 79,
                        'endColumn' => 91,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Chunk the results of a query by comparing IDs in descending order.
 *
 * @param  int  $count
 * @param  callable  $callback
 * @param  string|null  $column
 * @param  string|null  $alias
 * @return bool
 */',
                'startLine' => 574,
                'endLine' => 581,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'eachById' => [
                'name' => 'eachById',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 592,
                        'endLine' => 592,
                        'startColumn' => 30,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'count' => [
                        'name' => 'count',
                        'default' => [
                            'code' => '1000',
                            'attributes' => [
                                'startLine' => 592,
                                'endLine' => 592,
                                'startTokenPos' => 2539,
                                'startFilePos' => 17719,
                                'endTokenPos' => 2539,
                                'endFilePos' => 17722,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 592,
                        'endLine' => 592,
                        'startColumn' => 50,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 592,
                                'endLine' => 592,
                                'startTokenPos' => 2546,
                                'startFilePos' => 17735,
                                'endTokenPos' => 2546,
                                'endFilePos' => 17738,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 592,
                        'endLine' => 592,
                        'startColumn' => 65,
                        'endColumn' => 78,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'alias' => [
                        'name' => 'alias',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 592,
                                'endLine' => 592,
                                'startTokenPos' => 2553,
                                'startFilePos' => 17750,
                                'endTokenPos' => 2553,
                                'endFilePos' => 17753,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 592,
                        'endLine' => 592,
                        'startColumn' => 81,
                        'endColumn' => 93,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute a callback over each item while chunking by ID.
 *
 * @param  callable  $callback
 * @param  int  $count
 * @param  string|null  $column
 * @param  string|null  $alias
 * @return bool
 */',
                'startLine' => 592,
                'endLine' => 599,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'cursor' => [
                'name' => 'cursor',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a generator for the given query.
 *
 * @return \\Illuminate\\Support\\LazyCollection<int, TRelatedModel>
 */',
                'startLine' => 606,
                'endLine' => 609,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'each' => [
                'name' => 'each',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 618,
                        'endLine' => 618,
                        'startColumn' => 26,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'count' => [
                        'name' => 'count',
                        'default' => [
                            'code' => '1000',
                            'attributes' => [
                                'startLine' => 618,
                                'endLine' => 618,
                                'startTokenPos' => 2665,
                                'startFilePos' => 18447,
                                'endTokenPos' => 2665,
                                'endFilePos' => 18450,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 618,
                        'endLine' => 618,
                        'startColumn' => 46,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute a callback over each item while chunking.
 *
 * @param  callable  $callback
 * @param  int  $count
 * @return bool
 */',
                'startLine' => 618,
                'endLine' => 627,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'lazy' => [
                'name' => 'lazy',
                'parameters' => [
                    'chunkSize' => [
                        'name' => 'chunkSize',
                        'default' => [
                            'code' => '1000',
                            'attributes' => [
                                'startLine' => 635,
                                'endLine' => 635,
                                'startTokenPos' => 2754,
                                'startFilePos' => 18938,
                                'endTokenPos' => 2754,
                                'endFilePos' => 18941,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 635,
                        'endLine' => 635,
                        'startColumn' => 26,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Query lazily, by chunks of the given size.
 *
 * @param  int  $chunkSize
 * @return \\Illuminate\\Support\\LazyCollection<int, TRelatedModel>
 */',
                'startLine' => 635,
                'endLine' => 638,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'lazyById' => [
                'name' => 'lazyById',
                'parameters' => [
                    'chunkSize' => [
                        'name' => 'chunkSize',
                        'default' => [
                            'code' => '1000',
                            'attributes' => [
                                'startLine' => 648,
                                'endLine' => 648,
                                'startTokenPos' => 2787,
                                'startFilePos' => 19331,
                                'endTokenPos' => 2787,
                                'endFilePos' => 19334,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 648,
                        'endLine' => 648,
                        'startColumn' => 30,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 648,
                                'endLine' => 648,
                                'startTokenPos' => 2794,
                                'startFilePos' => 19347,
                                'endTokenPos' => 2794,
                                'endFilePos' => 19350,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 648,
                        'endLine' => 648,
                        'startColumn' => 49,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'alias' => [
                        'name' => 'alias',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 648,
                                'endLine' => 648,
                                'startTokenPos' => 2801,
                                'startFilePos' => 19362,
                                'endTokenPos' => 2801,
                                'endFilePos' => 19365,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 648,
                        'endLine' => 648,
                        'startColumn' => 65,
                        'endColumn' => 77,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Query lazily, by chunking the results of a query by comparing IDs.
 *
 * @param  int  $chunkSize
 * @param  string|null  $column
 * @param  string|null  $alias
 * @return \\Illuminate\\Support\\LazyCollection<int, TRelatedModel>
 */',
                'startLine' => 648,
                'endLine' => 655,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'lazyByIdDesc' => [
                'name' => 'lazyByIdDesc',
                'parameters' => [
                    'chunkSize' => [
                        'name' => 'chunkSize',
                        'default' => [
                            'code' => '1000',
                            'attributes' => [
                                'startLine' => 665,
                                'endLine' => 665,
                                'startTokenPos' => 2870,
                                'startFilePos' => 19920,
                                'endTokenPos' => 2870,
                                'endFilePos' => 19923,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 665,
                        'endLine' => 665,
                        'startColumn' => 34,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 665,
                                'endLine' => 665,
                                'startTokenPos' => 2877,
                                'startFilePos' => 19936,
                                'endTokenPos' => 2877,
                                'endFilePos' => 19939,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 665,
                        'endLine' => 665,
                        'startColumn' => 53,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'alias' => [
                        'name' => 'alias',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 665,
                                'endLine' => 665,
                                'startTokenPos' => 2884,
                                'startFilePos' => 19951,
                                'endTokenPos' => 2884,
                                'endFilePos' => 19954,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 665,
                        'endLine' => 665,
                        'startColumn' => 69,
                        'endColumn' => 81,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Query lazily, by chunking the results of a query by comparing IDs in descending order.
 *
 * @param  int  $chunkSize
 * @param  string|null  $column
 * @param  string|null  $alias
 * @return \\Illuminate\\Support\\LazyCollection<int, TRelatedModel>
 */',
                'startLine' => 665,
                'endLine' => 672,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'prepareQueryBuilder' => [
                'name' => 'prepareQueryBuilder',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 680,
                                'endLine' => 680,
                                'startTokenPos' => 2953,
                                'startFilePos' => 20408,
                                'endTokenPos' => 2955,
                                'endFilePos' => 20412,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 680,
                        'endLine' => 680,
                        'startColumn' => 44,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepare the query builder for query execution.
 *
 * @param  array  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>
 */',
                'startLine' => 680,
                'endLine' => 687,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
                        'startLine' => 690,
                        'endLine' => 690,
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
                        'startLine' => 690,
                        'endLine' => 690,
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
                                'startLine' => 690,
                                'endLine' => 690,
                                'startTokenPos' => 3029,
                                'startFilePos' => 20721,
                                'endTokenPos' => 3031,
                                'endFilePos' => 20725,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 690,
                        'endLine' => 690,
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
                'startLine' => 690,
                'endLine' => 705,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
                        'startLine' => 715,
                        'endLine' => 715,
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
                        'startLine' => 715,
                        'endLine' => 715,
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
                                'startLine' => 715,
                                'endLine' => 715,
                                'startTokenPos' => 3183,
                                'startFilePos' => 21779,
                                'endTokenPos' => 3185,
                                'endFilePos' => 21783,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 715,
                        'endLine' => 715,
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
                'startLine' => 715,
                'endLine' => 730,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'getRelationExistenceQueryForThroughSelfRelation' => [
                'name' => 'getRelationExistenceQueryForThroughSelfRelation',
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
                        'startLine' => 740,
                        'endLine' => 740,
                        'startColumn' => 69,
                        'endColumn' => 82,
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
                        'startLine' => 740,
                        'endLine' => 740,
                        'startColumn' => 85,
                        'endColumn' => 104,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 740,
                                'endLine' => 740,
                                'startTokenPos' => 3354,
                                'startFilePos' => 22875,
                                'endTokenPos' => 3356,
                                'endFilePos' => 22879,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 740,
                        'endLine' => 740,
                        'startColumn' => 107,
                        'endColumn' => 122,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the constraints for a relationship query on the same table as the through parent.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TDeclaringModel>  $parentQuery
 * @param  mixed  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>
 */',
                'startLine' => 740,
                'endLine' => 753,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
                        'startLine' => 761,
                        'endLine' => 761,
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
                'startLine' => 761,
                'endLine' => 764,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
                        'startLine' => 772,
                        'endLine' => 772,
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
                'startLine' => 772,
                'endLine' => 789,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'getQualifiedFarKeyName' => [
                'name' => 'getQualifiedFarKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the qualified foreign key on the related model.
 *
 * @return string
 */',
                'startLine' => 796,
                'endLine' => 799,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'getFirstKeyName' => [
                'name' => 'getFirstKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the foreign key on the "through" model.
 *
 * @return string
 */',
                'startLine' => 806,
                'endLine' => 809,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'getQualifiedFirstKeyName' => [
                'name' => 'getQualifiedFirstKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the qualified foreign key on the "through" model.
 *
 * @return string
 */',
                'startLine' => 816,
                'endLine' => 819,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
 * Get the foreign key on the related model.
 *
 * @return string
 */',
                'startLine' => 826,
                'endLine' => 829,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
 * Get the qualified foreign key on the related model.
 *
 * @return string
 */',
                'startLine' => 836,
                'endLine' => 839,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
 * Get the local key on the far parent model.
 *
 * @return string
 */',
                'startLine' => 846,
                'endLine' => 849,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'getQualifiedLocalKeyName' => [
                'name' => 'getQualifiedLocalKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the qualified local key on the far parent model.
 *
 * @return string
 */',
                'startLine' => 856,
                'endLine' => 859,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'aliasName' => null,
            ],
            'getSecondLocalKeyName' => [
                'name' => 'getSecondLocalKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the local key on the intermediary model.
 *
 * @return string
 */',
                'startLine' => 866,
                'endLine' => 869,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrManyThrough',
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
