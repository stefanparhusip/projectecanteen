<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/MorphTo.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Relations\MorphTo
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-d17c52489569ca85418b2041a1c3607b3dc7e70b915daf7cad28c137bfde43f5-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/MorphTo.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
        'shortName' => 'MorphTo',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @template TRelatedModel of \\Illuminate\\Database\\Eloquent\\Model
 * @template TDeclaringModel of \\Illuminate\\Database\\Eloquent\\Model
 *
 * @extends \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo<TRelatedModel, TDeclaringModel>
 */',
        'attributes' => [
        ],
        'startLine' => 18,
        'endLine' => 462,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\InteractsWithDictionary',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'morphType' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'name' => 'morphType',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The type of the polymorphic relation.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 27,
                'endLine' => 27,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'ownerKey' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'name' => 'ownerKey',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The associated key on the parent model.
 *
 * @var string|null
 */',
                'attributes' => [
                ],
                'startLine' => 34,
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'models' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'name' => 'models',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The models whose relations are being eager loaded.
 *
 * @var \\Illuminate\\Database\\Eloquent\\Collection<int, TDeclaringModel>
 */',
                'attributes' => [
                ],
                'startLine' => 41,
                'endLine' => 41,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'dictionary' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'name' => 'dictionary',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 48,
                        'endLine' => 48,
                        'startTokenPos' => 87,
                        'startFilePos' => 1169,
                        'endTokenPos' => 88,
                        'endFilePos' => 1170,
                    ],
                ],
                'docComment' => '/**
 * All of the models keyed by ID.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 48,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'macroBuffer' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'name' => 'macroBuffer',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 55,
                        'endLine' => 55,
                        'startTokenPos' => 99,
                        'startFilePos' => 1294,
                        'endTokenPos' => 100,
                        'endFilePos' => 1295,
                    ],
                ],
                'docComment' => '/**
 * A buffer of dynamic calls to query macros.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 55,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'morphableEagerLoads' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'name' => 'morphableEagerLoads',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 62,
                        'endLine' => 62,
                        'startTokenPos' => 111,
                        'startFilePos' => 1443,
                        'endTokenPos' => 112,
                        'endFilePos' => 1444,
                    ],
                ],
                'docComment' => '/**
 * A map of relations to load for each individual morph type.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 62,
                'endLine' => 62,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'morphableEagerLoadCounts' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'name' => 'morphableEagerLoadCounts',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 69,
                        'endLine' => 69,
                        'startTokenPos' => 123,
                        'startFilePos' => 1607,
                        'endTokenPos' => 124,
                        'endFilePos' => 1608,
                    ],
                ],
                'docComment' => '/**
 * A map of relationship counts to load for each individual morph type.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 69,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 45,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'morphableConstraints' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'name' => 'morphableConstraints',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 76,
                        'endLine' => 76,
                        'startTokenPos' => 135,
                        'startFilePos' => 1760,
                        'endTokenPos' => 136,
                        'endFilePos' => 1761,
                    ],
                ],
                'docComment' => '/**
 * A map of constraints to apply for each individual morph type.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 76,
                'endLine' => 76,
                'startColumn' => 5,
                'endColumn' => 41,
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
                        'startLine' => 88,
                        'endLine' => 88,
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
                        'startLine' => 88,
                        'endLine' => 88,
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
                        'startLine' => 88,
                        'endLine' => 88,
                        'startColumn' => 64,
                        'endColumn' => 74,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'ownerKey' => [
                        'name' => 'ownerKey',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 88,
                        'endLine' => 88,
                        'startColumn' => 77,
                        'endColumn' => 85,
                        'parameterIndex' => 3,
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
                        'startLine' => 88,
                        'endLine' => 88,
                        'startColumn' => 88,
                        'endColumn' => 92,
                        'parameterIndex' => 4,
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
                        'startLine' => 88,
                        'endLine' => 88,
                        'startColumn' => 95,
                        'endColumn' => 103,
                        'parameterIndex' => 5,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new morph to relationship instance.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>  $query
 * @param  TDeclaringModel  $parent
 * @param  string  $foreignKey
 * @param  string|null  $ownerKey
 * @param  string  $type
 * @param  string  $relation
 */',
                'startLine' => 88,
                'endLine' => 93,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
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
                        'startLine' => 97,
                        'endLine' => 97,
                        'startColumn' => 41,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 96,
                'endLine' => 100,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'buildDictionary' => [
                'name' => 'buildDictionary',
                'parameters' => [
                    'models' => [
                        'name' => 'models',
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
                        'startLine' => 108,
                        'endLine' => 108,
                        'startColumn' => 40,
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
 * Build a dictionary with the models.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>  $models
 * @return void
 */',
                'startLine' => 108,
                'endLine' => 124,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'getEager' => [
                'name' => 'getEager',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the results of the relationship.
 *
 * Called via eager load method of Eloquent query builder.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TDeclaringModel>
 */',
                'startLine' => 133,
                'endLine' => 140,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'getResultsByType' => [
                'name' => 'getResultsByType',
                'parameters' => [
                    'type' => [
                        'name' => 'type',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 148,
                        'endLine' => 148,
                        'startColumn' => 41,
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
 * Get all of the relation results for a type.
 *
 * @param  string  $type
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>
 */',
                'startLine' => 148,
                'endLine' => 173,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'gatherKeysByType' => [
                'name' => 'gatherKeysByType',
                'parameters' => [
                    'type' => [
                        'name' => 'type',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 182,
                        'endLine' => 182,
                        'startColumn' => 41,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'keyType' => [
                        'name' => 'keyType',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 182,
                        'endLine' => 182,
                        'startColumn' => 48,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Gather all of the foreign keys for a given type.
 *
 * @param  string  $type
 * @param  string  $keyType
 * @return array
 */',
                'startLine' => 182,
                'endLine' => 189,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'createModelByType' => [
                'name' => 'createModelByType',
                'parameters' => [
                    'type' => [
                        'name' => 'type',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 197,
                        'endLine' => 197,
                        'startColumn' => 39,
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
 * Create a new model instance by type.
 *
 * @param  string  $type
 * @return TRelatedModel
 */',
                'startLine' => 197,
                'endLine' => 206,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'match' => [
                'name' => 'match',
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
                        'startLine' => 210,
                        'endLine' => 210,
                        'startColumn' => 27,
                        'endColumn' => 39,
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
                        'startLine' => 210,
                        'endLine' => 210,
                        'startColumn' => 42,
                        'endColumn' => 68,
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
                        'startLine' => 210,
                        'endLine' => 210,
                        'startColumn' => 71,
                        'endColumn' => 79,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 209,
                'endLine' => 213,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'matchToMorphParents' => [
                'name' => 'matchToMorphParents',
                'parameters' => [
                    'type' => [
                        'name' => 'type',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 222,
                        'endLine' => 222,
                        'startColumn' => 44,
                        'endColumn' => 48,
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
                        'startLine' => 222,
                        'endLine' => 222,
                        'startColumn' => 51,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Match the results for a given type to their parents.
 *
 * @param  string  $type
 * @param  \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>  $results
 * @return void
 */',
                'startLine' => 222,
                'endLine' => 233,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'associate' => [
                'name' => 'associate',
                'parameters' => [
                    'model' => [
                        'name' => 'model',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * Associate the model instance to the given parent.
 *
 * @param  TRelatedModel|null  $model
 * @return TDeclaringModel
 */',
                'startLine' => 241,
                'endLine' => 259,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'dissociate' => [
                'name' => 'dissociate',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * Dissociate previously associated model from the given parent.
 *
 * @return TDeclaringModel
 */',
                'startLine' => 266,
                'endLine' => 274,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'touch' => [
                'name' => 'touch',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 277,
                'endLine' => 283,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'newRelatedInstanceFor' => [
                'name' => 'newRelatedInstanceFor',
                'parameters' => [
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
                        'startLine' => 287,
                        'endLine' => 287,
                        'startColumn' => 46,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 286,
                'endLine' => 290,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'getMorphType' => [
                'name' => 'getMorphType',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the foreign key "type" name.
 *
 * @return string
 */',
                'startLine' => 297,
                'endLine' => 300,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'getDictionary' => [
                'name' => 'getDictionary',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the dictionary used by the relationship.
 *
 * @return array
 */',
                'startLine' => 307,
                'endLine' => 310,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'morphWith' => [
                'name' => 'morphWith',
                'parameters' => [
                    'with' => [
                        'name' => 'with',
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
                        'startLine' => 318,
                        'endLine' => 318,
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
 * Specify which relations to load for a given morph type.
 *
 * @param  array  $with
 * @return $this
 */',
                'startLine' => 318,
                'endLine' => 325,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'morphWithCount' => [
                'name' => 'morphWithCount',
                'parameters' => [
                    'withCount' => [
                        'name' => 'withCount',
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
                        'startLine' => 333,
                        'endLine' => 333,
                        'startColumn' => 36,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify which relationship counts to load for a given morph type.
 *
 * @param  array  $withCount
 * @return $this
 */',
                'startLine' => 333,
                'endLine' => 340,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'constrain' => [
                'name' => 'constrain',
                'parameters' => [
                    'callbacks' => [
                        'name' => 'callbacks',
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
                        'startLine' => 348,
                        'endLine' => 348,
                        'startColumn' => 31,
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
 * Specify constraints on the query for a given morph type.
 *
 * @param  array  $callbacks
 * @return $this
 */',
                'startLine' => 348,
                'endLine' => 355,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'withTrashed' => [
                'name' => 'withTrashed',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that soft deleted models should be included in the results.
 *
 * @return $this
 */',
                'startLine' => 362,
                'endLine' => 372,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'withoutTrashed' => [
                'name' => 'withoutTrashed',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that soft deleted models should not be included in the results.
 *
 * @return $this
 */',
                'startLine' => 379,
                'endLine' => 389,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'onlyTrashed' => [
                'name' => 'onlyTrashed',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that only soft deleted models should be included in the results.
 *
 * @return $this
 */',
                'startLine' => 396,
                'endLine' => 406,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'replayMacros' => [
                'name' => 'replayMacros',
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
                        'startLine' => 414,
                        'endLine' => 414,
                        'startColumn' => 37,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Replay stored macro calls on the actual related instance.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>  $query
 * @return \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>
 */',
                'startLine' => 414,
                'endLine' => 421,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            'getQualifiedOwnerKeyName' => [
                'name' => 'getQualifiedOwnerKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 424,
                'endLine' => 432,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'aliasName' => null,
            ],
            '__call' => [
                'name' => '__call',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 441,
                        'endLine' => 441,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 441,
                        'endLine' => 441,
                        'startColumn' => 37,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Handle dynamic method calls to the relationship.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 441,
                'endLine' => 461,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
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
