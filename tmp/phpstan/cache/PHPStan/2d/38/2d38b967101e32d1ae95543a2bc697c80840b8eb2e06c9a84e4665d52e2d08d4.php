<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/MorphToMany.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Relations\MorphToMany
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-f89b1d671f6d22af7aa5b9af4e89141291f0838a8674462ebe3562c157e44317-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/MorphToMany.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
        'shortName' => 'MorphToMany',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @template TRelatedModel of \\Illuminate\\Database\\Eloquent\\Model
 * @template TDeclaringModel of \\Illuminate\\Database\\Eloquent\\Model
 * @template TPivotModel of \\Illuminate\\Database\\Eloquent\\Relations\\Pivot = \\Illuminate\\Database\\Eloquent\\Relations\\MorphPivot
 * @template TAccessor of string = \'pivot\'
 *
 * @extends \\Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany<TRelatedModel, TDeclaringModel, TPivotModel, TAccessor>
 */',
        'attributes' => [
        ],
        'startLine' => 18,
        'endLine' => 233,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'morphType' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
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
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'morphClass' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'name' => 'morphClass',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The class name of the morph type constraint.
 *
 * @var class-string<TRelatedModel>
 */',
                'attributes' => [
                ],
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'inverse' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'name' => 'inverse',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * Indicates if we are connecting the inverse of the relation.
 *
 * This primarily affects the morphClass constraint.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 41,
                'endLine' => 41,
                'startColumn' => 5,
                'endColumn' => 23,
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
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 9,
                        'endColumn' => 22,
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
                        'startLine' => 59,
                        'endLine' => 59,
                        'startColumn' => 9,
                        'endColumn' => 21,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 60,
                        'endLine' => 60,
                        'startColumn' => 9,
                        'endColumn' => 13,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'table' => [
                        'name' => 'table',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 61,
                        'endLine' => 61,
                        'startColumn' => 9,
                        'endColumn' => 14,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'foreignPivotKey' => [
                        'name' => 'foreignPivotKey',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 62,
                        'endLine' => 62,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                    'relatedPivotKey' => [
                        'name' => 'relatedPivotKey',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 63,
                        'endLine' => 63,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 5,
                        'isOptional' => false,
                    ],
                    'parentKey' => [
                        'name' => 'parentKey',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 64,
                        'endLine' => 64,
                        'startColumn' => 9,
                        'endColumn' => 18,
                        'parameterIndex' => 6,
                        'isOptional' => false,
                    ],
                    'relatedKey' => [
                        'name' => 'relatedKey',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 65,
                        'endLine' => 65,
                        'startColumn' => 9,
                        'endColumn' => 19,
                        'parameterIndex' => 7,
                        'isOptional' => false,
                    ],
                    'relationName' => [
                        'name' => 'relationName',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 66,
                                'endLine' => 66,
                                'startTokenPos' => 101,
                                'startFilePos' => 1840,
                                'endTokenPos' => 101,
                                'endFilePos' => 1843,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 66,
                        'endLine' => 66,
                        'startColumn' => 9,
                        'endColumn' => 28,
                        'parameterIndex' => 8,
                        'isOptional' => true,
                    ],
                    'inverse' => [
                        'name' => 'inverse',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 67,
                                'endLine' => 67,
                                'startTokenPos' => 108,
                                'startFilePos' => 1865,
                                'endTokenPos' => 108,
                                'endFilePos' => 1869,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 67,
                        'endLine' => 67,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 9,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new morph to many relationship instance.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>  $query
 * @param  TDeclaringModel  $parent
 * @param  string  $name
 * @param  string  $table
 * @param  string  $foreignPivotKey
 * @param  string  $relatedPivotKey
 * @param  string  $parentKey
 * @param  string  $relatedKey
 * @param  string|null  $relationName
 * @param  bool  $inverse
 */',
                'startLine' => 57,
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'aliasName' => null,
            ],
            'addWhereConstraints' => [
                'name' => 'addWhereConstraints',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the where clause for the relation query.
 *
 * @return $this
 */',
                'startLine' => 84,
                'endLine' => 91,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
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
                        'startLine' => 94,
                        'endLine' => 94,
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
                'startLine' => 94,
                'endLine' => 99,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'aliasName' => null,
            ],
            'baseAttachRecord' => [
                'name' => 'baseAttachRecord',
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
                        'startLine' => 108,
                        'endLine' => 108,
                        'startColumn' => 41,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'timed' => [
                        'name' => 'timed',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 108,
                        'endLine' => 108,
                        'startColumn' => 46,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new pivot attachment record.
 *
 * @param  int  $id
 * @param  bool  $timed
 * @return array
 */',
                'startLine' => 108,
                'endLine' => 113,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
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
                        'startLine' => 116,
                        'endLine' => 116,
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
                        'startLine' => 116,
                        'endLine' => 116,
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
                                'startLine' => 116,
                                'endLine' => 116,
                                'startTokenPos' => 362,
                                'startFilePos' => 3221,
                                'endTokenPos' => 364,
                                'endFilePos' => 3225,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 116,
                        'endLine' => 116,
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
                'startLine' => 116,
                'endLine' => 121,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'aliasName' => null,
            ],
            'getCurrentlyAttachedPivotsForIds' => [
                'name' => 'getCurrentlyAttachedPivotsForIds',
                'parameters' => [
                    'ids' => [
                        'name' => 'ids',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 129,
                                'endLine' => 129,
                                'startTokenPos' => 418,
                                'startFilePos' => 3682,
                                'endTokenPos' => 418,
                                'endFilePos' => 3685,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 129,
                        'endLine' => 129,
                        'startColumn' => 57,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the pivot models that are currently attached, filtered by related model keys.
 *
 * @param  mixed  $ids
 * @return \\Illuminate\\Support\\Collection<int, TPivotModel>
 */',
                'startLine' => 129,
                'endLine' => 137,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'aliasName' => null,
            ],
            'newPivotQuery' => [
                'name' => 'newPivotQuery',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new query builder for the pivot table.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
                'startLine' => 144,
                'endLine' => 147,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'aliasName' => null,
            ],
            'newPivot' => [
                'name' => 'newPivot',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 156,
                                'endLine' => 156,
                                'startTokenPos' => 529,
                                'startFilePos' => 4455,
                                'endTokenPos' => 530,
                                'endFilePos' => 4456,
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
                        'startLine' => 156,
                        'endLine' => 156,
                        'startColumn' => 30,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'exists' => [
                        'name' => 'exists',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 156,
                                'endLine' => 156,
                                'startTokenPos' => 537,
                                'startFilePos' => 4469,
                                'endTokenPos' => 537,
                                'endFilePos' => 4473,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 156,
                        'endLine' => 156,
                        'startColumn' => 54,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new pivot model instance.
 *
 * @param  array  $attributes
 * @param  bool  $exists
 * @return TPivotModel
 */',
                'startLine' => 156,
                'endLine' => 172,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'aliasName' => null,
            ],
            'aliasedPivotColumns' => [
                'name' => 'aliasedPivotColumns',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the pivot columns for the relation.
 *
 * "pivot_" is prefixed at each column for easy removal later.
 *
 * @return array
 */',
                'startLine' => 181,
                'endLine' => 192,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
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
                'startLine' => 199,
                'endLine' => 202,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'aliasName' => null,
            ],
            'getQualifiedMorphTypeName' => [
                'name' => 'getQualifiedMorphTypeName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the fully-qualified morph type for the relation.
 *
 * @return string
 */',
                'startLine' => 209,
                'endLine' => 212,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
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
                'startLine' => 219,
                'endLine' => 222,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'aliasName' => null,
            ],
            'getInverse' => [
                'name' => 'getInverse',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the indicator for a reverse relationship.
 *
 * @return bool
 */',
                'startLine' => 229,
                'endLine' => 232,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphToMany',
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
