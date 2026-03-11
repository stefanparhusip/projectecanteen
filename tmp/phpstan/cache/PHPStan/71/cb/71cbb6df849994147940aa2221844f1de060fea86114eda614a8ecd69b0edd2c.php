<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/MorphOneOrMany.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Relations\MorphOneOrMany
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-4f49571bec9b1cfd697f138b76ca4f714f9abff4673387cc84c8f5b90c5c8e8f-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/MorphOneOrMany.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
        'shortName' => 'MorphOneOrMany',
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
 * @extends \\Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany<TRelatedModel, TDeclaringModel, TResult>
 */',
        'attributes' => [
        ],
        'startLine' => 16,
        'endLine' => 180,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'morphType' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'name' => 'morphType',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The foreign key type for the relationship.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'morphClass' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'name' => 'morphClass',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The class name of the parent model.
 *
 * @var class-string<TRelatedModel>
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
                        'startLine' => 41,
                        'endLine' => 41,
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
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 49,
                        'endColumn' => 61,
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
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 64,
                        'endColumn' => 68,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'id' => [
                        'name' => 'id',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 71,
                        'endColumn' => 73,
                        'parameterIndex' => 3,
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
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 76,
                        'endColumn' => 84,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new morph one or many relationship instance.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>  $query
 * @param  TDeclaringModel  $parent
 * @param  string  $type
 * @param  string  $id
 * @param  string  $localKey
 */',
                'startLine' => 41,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
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
                'startLine' => 55,
                'endLine' => 62,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
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
                        'startLine' => 65,
                        'endLine' => 65,
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
                'startLine' => 65,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
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
                                'startLine' => 78,
                                'endLine' => 78,
                                'startTokenPos' => 230,
                                'startFilePos' => 2032,
                                'endTokenPos' => 231,
                                'endFilePos' => 2033,
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
                        'startLine' => 78,
                        'endLine' => 78,
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
                'startLine' => 78,
                'endLine' => 84,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
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
                        'startLine' => 92,
                        'endLine' => 92,
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
 * Set the foreign ID and type for creating a related model.
 *
 * @param  TRelatedModel  $model
 * @return void
 */',
                'startLine' => 92,
                'endLine' => 107,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
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
                        'startLine' => 117,
                        'endLine' => 117,
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
                        'startLine' => 117,
                        'endLine' => 117,
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
                                'startLine' => 117,
                                'endLine' => 117,
                                'startTokenPos' => 434,
                                'startFilePos' => 3217,
                                'endTokenPos' => 434,
                                'endFilePos' => 3220,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 117,
                        'endLine' => 117,
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
                'startLine' => 117,
                'endLine' => 128,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
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
                        'startLine' => 131,
                        'endLine' => 131,
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
                        'startLine' => 131,
                        'endLine' => 131,
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
                                'startLine' => 131,
                                'endLine' => 131,
                                'startTokenPos' => 554,
                                'startFilePos' => 3658,
                                'endTokenPos' => 556,
                                'endFilePos' => 3662,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 131,
                        'endLine' => 131,
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
                'startLine' => 131,
                'endLine' => 136,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'aliasName' => null,
            ],
            'getQualifiedMorphType' => [
                'name' => 'getQualifiedMorphType',
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
                'startLine' => 143,
                'endLine' => 146,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
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
 * Get the plain morph type name without the table.
 *
 * @return string
 */',
                'startLine' => 153,
                'endLine' => 156,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'aliasName' => null,
            ],
            'getMorphClass' => [
                'name' => 'getMorphClass',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the class name of the parent model.
 *
 * @return class-string<TRelatedModel>
 */',
                'startLine' => 163,
                'endLine' => 166,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'aliasName' => null,
            ],
            'getPossibleInverseRelations' => [
                'name' => 'getPossibleInverseRelations',
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
 * Get the possible inverse relations for the parent model.
 *
 * @return array<non-empty-string>
 */',
                'startLine' => 173,
                'endLine' => 179,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
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
