<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/BelongsTo.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Relations\BelongsTo
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6d518a79c6fcff640edc471f6174401289e2485470e8702e57e2a4edc2a54f2c-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/BelongsTo.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        'shortName' => 'BelongsTo',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @template TRelatedModel of \\Illuminate\\Database\\Eloquent\\Model
 * @template TDeclaringModel of \\Illuminate\\Database\\Eloquent\\Model
 *
 * @extends \\Illuminate\\Database\\Eloquent\\Relations\\Relation<TRelatedModel, TDeclaringModel, ?TRelatedModel>
 */',
        'attributes' => [
        ],
        'startLine' => 20,
        'endLine' => 382,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\ComparesRelatedModels',
            1 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\InteractsWithDictionary',
            2 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'child' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'name' => 'child',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The child model instance of the relation.
 *
 * @var TDeclaringModel
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
            'foreignKey' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
                'startLine' => 38,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'ownerKey' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'name' => 'ownerKey',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The associated key on the parent model.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 45,
                'endLine' => 45,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'relationName' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'name' => 'relationName',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The name of the relationship.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 52,
                'endLine' => 52,
                'startColumn' => 5,
                'endColumn' => 28,
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
                        'startLine' => 63,
                        'endLine' => 63,
                        'startColumn' => 33,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'child' => [
                        'name' => 'child',
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
                        'startLine' => 63,
                        'endLine' => 63,
                        'startColumn' => 49,
                        'endColumn' => 60,
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
                        'startLine' => 63,
                        'endLine' => 63,
                        'startColumn' => 63,
                        'endColumn' => 73,
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
                        'startLine' => 63,
                        'endLine' => 63,
                        'startColumn' => 76,
                        'endColumn' => 84,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'relationName' => [
                        'name' => 'relationName',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 63,
                        'endLine' => 63,
                        'startColumn' => 87,
                        'endColumn' => 99,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new belongs to relationship instance.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>  $query
 * @param  TDeclaringModel  $child
 * @param  string  $foreignKey
 * @param  string  $ownerKey
 * @param  string  $relationName
 */',
                'startLine' => 63,
                'endLine' => 75,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'aliasName' => null,
            ],
            'getResults' => [
                'name' => 'getResults',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 78,
                'endLine' => 85,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
                'startLine' => 92,
                'endLine' => 102,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
                        'startLine' => 105,
                        'endLine' => 105,
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
                'startLine' => 105,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'aliasName' => null,
            ],
            'getEagerModelKeys' => [
                'name' => 'getEagerModelKeys',
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
                        'startColumn' => 42,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Gather the keys from an array of related models.
 *
 * @param  array<int, TDeclaringModel>  $models
 * @return array
 */',
                'startLine' => 123,
                'endLine' => 139,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'aliasName' => null,
            ],
            'initRelation' => [
                'name' => 'initRelation',
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
                        'startLine' => 142,
                        'endLine' => 142,
                        'startColumn' => 34,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
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
                        'startLine' => 142,
                        'endLine' => 142,
                        'startColumn' => 49,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 142,
                'endLine' => 149,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
                        'startLine' => 152,
                        'endLine' => 152,
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
                        'startLine' => 152,
                        'endLine' => 152,
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
                        'startLine' => 152,
                        'endLine' => 152,
                        'startColumn' => 71,
                        'endColumn' => 79,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 152,
                'endLine' => 177,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
                        'startLine' => 185,
                        'endLine' => 185,
                        'startColumn' => 31,
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
 * Associate the model instance to the given parent.
 *
 * @param  TRelatedModel|int|string|null  $model
 * @return TDeclaringModel
 */',
                'startLine' => 185,
                'endLine' => 198,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'aliasName' => null,
            ],
            'dissociate' => [
                'name' => 'dissociate',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dissociate previously associated model from the given parent.
 *
 * @return TDeclaringModel
 */',
                'startLine' => 205,
                'endLine' => 210,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'aliasName' => null,
            ],
            'disassociate' => [
                'name' => 'disassociate',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Alias of "dissociate" method.
 *
 * @return TDeclaringModel
 */',
                'startLine' => 217,
                'endLine' => 220,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'aliasName' => null,
            ],
            'touch' => [
                'name' => 'touch',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Touch all of the related models for the relationship.
 *
 * @return void
 */',
                'startLine' => 227,
                'endLine' => 232,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
                        'startLine' => 235,
                        'endLine' => 235,
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
                        'startLine' => 235,
                        'endLine' => 235,
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
                                'startLine' => 235,
                                'endLine' => 235,
                                'startTokenPos' => 941,
                                'startFilePos' => 7178,
                                'endTokenPos' => 943,
                                'endFilePos' => 7182,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 235,
                        'endLine' => 235,
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
                'startLine' => 235,
                'endLine' => 244,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
                        'startLine' => 254,
                        'endLine' => 254,
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
                        'startLine' => 254,
                        'endLine' => 254,
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
                                'startLine' => 254,
                                'endLine' => 254,
                                'startTokenPos' => 1048,
                                'startFilePos' => 8004,
                                'endTokenPos' => 1050,
                                'endFilePos' => 8008,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 254,
                        'endLine' => 254,
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
                'startLine' => 254,
                'endLine' => 265,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'aliasName' => null,
            ],
            'relationHasIncrementingId' => [
                'name' => 'relationHasIncrementingId',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the related model has an auto-incrementing ID.
 *
 * @return bool
 */',
                'startLine' => 272,
                'endLine' => 276,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
                        'startLine' => 284,
                        'endLine' => 284,
                        'startColumn' => 46,
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
 * Make a new related instance for the given model.
 *
 * @param  TDeclaringModel  $parent
 * @return TRelatedModel
 */',
                'startLine' => 284,
                'endLine' => 287,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'aliasName' => null,
            ],
            'getChild' => [
                'name' => 'getChild',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the child of the relationship.
 *
 * @return TDeclaringModel
 */',
                'startLine' => 294,
                'endLine' => 297,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
 * Get the foreign key of the relationship.
 *
 * @return string
 */',
                'startLine' => 304,
                'endLine' => 307,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
 * Get the fully-qualified foreign key of the relationship.
 *
 * @return string
 */',
                'startLine' => 314,
                'endLine' => 317,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
 * Get the key value of the child\'s foreign key.
 *
 * @return mixed
 */',
                'startLine' => 324,
                'endLine' => 327,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'aliasName' => null,
            ],
            'getOwnerKeyName' => [
                'name' => 'getOwnerKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the associated key of the relationship.
 *
 * @return string
 */',
                'startLine' => 334,
                'endLine' => 337,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'aliasName' => null,
            ],
            'getQualifiedOwnerKeyName' => [
                'name' => 'getQualifiedOwnerKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the fully-qualified associated key of the relationship.
 *
 * @return string
 */',
                'startLine' => 344,
                'endLine' => 347,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'aliasName' => null,
            ],
            'getRelatedKeyFrom' => [
                'name' => 'getRelatedKeyFrom',
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
                        'startLine' => 355,
                        'endLine' => 355,
                        'startColumn' => 42,
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
 * Get the value of the model\'s foreign key.
 *
 * @param  TRelatedModel  $model
 * @return int|string
 */',
                'startLine' => 355,
                'endLine' => 358,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'aliasName' => null,
            ],
            'getForeignKeyFrom' => [
                'name' => 'getForeignKeyFrom',
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
                        'startLine' => 366,
                        'endLine' => 366,
                        'startColumn' => 42,
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
 * Get the value of the model\'s foreign key.
 *
 * @param  TDeclaringModel  $model
 * @return mixed
 */',
                'startLine' => 366,
                'endLine' => 371,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'aliasName' => null,
            ],
            'getRelationName' => [
                'name' => 'getRelationName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the relationship.
 *
 * @return string
 */',
                'startLine' => 378,
                'endLine' => 381,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
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
