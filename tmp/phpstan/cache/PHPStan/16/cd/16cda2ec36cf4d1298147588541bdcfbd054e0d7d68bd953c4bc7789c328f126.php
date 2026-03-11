<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/BelongsToMany.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Relations\BelongsToMany
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-7dead0d6d56275dba7fe831c9f546582c7fbd98ac54e8fad7465b2c05ee19834-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/BelongsToMany.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
        'shortName' => 'BelongsToMany',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @template TRelatedModel of \\Illuminate\\Database\\Eloquent\\Model
 * @template TDeclaringModel of \\Illuminate\\Database\\Eloquent\\Model
 * @template TPivotModel of \\Illuminate\\Database\\Eloquent\\Relations\\Pivot = \\Illuminate\\Database\\Eloquent\\Relations\\Pivot
 * @template TAccessor of string = \'pivot\'
 *
 * @extends \\Illuminate\\Database\\Eloquent\\Relations\\Relation<TRelatedModel, TDeclaringModel, \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel&object{pivot: TPivotModel}>>
 *
 * @todo use TAccessor when PHPStan bug is fixed: https://github.com/phpstan/phpstan/issues/12756
 */',
        'attributes' => [
        ],
        'startLine' => 31,
        'endLine' => 1706,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\InteractsWithDictionary',
            1 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\InteractsWithPivotTable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'table' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'table',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The intermediate table for the relation.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 40,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'foreignPivotKey' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'foreignPivotKey',
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
                'startLine' => 47,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'relatedPivotKey' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'relatedPivotKey',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The associated key of the relation.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 54,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'parentKey' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'parentKey',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The key name of the parent model.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 61,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'relatedKey' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'relatedKey',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The key name of the related model.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 68,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'relationName' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'relationName',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The "name" of the relationship.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 75,
                'endLine' => 75,
                'startColumn' => 5,
                'endColumn' => 28,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'pivotColumns' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'pivotColumns',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 82,
                        'endLine' => 82,
                        'startTokenPos' => 160,
                        'startFilePos' => 2334,
                        'endTokenPos' => 161,
                        'endFilePos' => 2335,
                    ],
                ],
                'docComment' => '/**
 * The pivot table columns to retrieve.
 *
 * @var array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>
 */',
                'attributes' => [
                ],
                'startLine' => 82,
                'endLine' => 82,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'pivotWheres' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'pivotWheres',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 89,
                        'endLine' => 89,
                        'startTokenPos' => 172,
                        'startFilePos' => 2464,
                        'endTokenPos' => 173,
                        'endFilePos' => 2465,
                    ],
                ],
                'docComment' => '/**
 * Any pivot table restrictions for where clauses.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 89,
                'endLine' => 89,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'pivotWhereIns' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'pivotWhereIns',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 96,
                        'endLine' => 96,
                        'startTokenPos' => 184,
                        'startFilePos' => 2598,
                        'endTokenPos' => 185,
                        'endFilePos' => 2599,
                    ],
                ],
                'docComment' => '/**
 * Any pivot table restrictions for whereIn clauses.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 96,
                'endLine' => 96,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'pivotWhereNulls' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'pivotWhereNulls',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 103,
                        'endLine' => 103,
                        'startTokenPos' => 196,
                        'startFilePos' => 2736,
                        'endTokenPos' => 197,
                        'endFilePos' => 2737,
                    ],
                ],
                'docComment' => '/**
 * Any pivot table restrictions for whereNull clauses.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 103,
                'endLine' => 103,
                'startColumn' => 5,
                'endColumn' => 36,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'pivotValues' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'pivotValues',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 110,
                        'endLine' => 110,
                        'startTokenPos' => 208,
                        'startFilePos' => 2860,
                        'endTokenPos' => 209,
                        'endFilePos' => 2861,
                    ],
                ],
                'docComment' => '/**
 * The default values for the pivot columns.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 110,
                'endLine' => 110,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'withTimestamps' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'withTimestamps',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 117,
                        'endLine' => 117,
                        'startTokenPos' => 220,
                        'startFilePos' => 2999,
                        'endTokenPos' => 220,
                        'endFilePos' => 3003,
                    ],
                ],
                'docComment' => '/**
 * Indicates if timestamps are available on the pivot table.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 117,
                'endLine' => 117,
                'startColumn' => 5,
                'endColumn' => 35,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'pivotCreatedAt' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'pivotCreatedAt',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The custom pivot table column for the created_at timestamp.
 *
 * @var string|null
 */',
                'attributes' => [
                ],
                'startLine' => 124,
                'endLine' => 124,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'pivotUpdatedAt' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'pivotUpdatedAt',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The custom pivot table column for the updated_at timestamp.
 *
 * @var string|null
 */',
                'attributes' => [
                ],
                'startLine' => 131,
                'endLine' => 131,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'using' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'using',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The class name of the custom pivot model to use for the relationship.
 *
 * @var class-string<TPivotModel>
 */',
                'attributes' => [
                ],
                'startLine' => 138,
                'endLine' => 138,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'accessor' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'name' => 'accessor',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'pivot\'',
                    'attributes' => [
                        'startLine' => 145,
                        'endLine' => 145,
                        'startTokenPos' => 252,
                        'startFilePos' => 3600,
                        'endTokenPos' => 252,
                        'endFilePos' => 3606,
                    ],
                ],
                'docComment' => '/**
 * The name of the accessor to use for the "pivot" relationship.
 *
 * @var TAccessor
 */',
                'attributes' => [
                ],
                'startLine' => 145,
                'endLine' => 145,
                'startColumn' => 5,
                'endColumn' => 34,
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
                        'startLine' => 160,
                        'endLine' => 160,
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
                        'startLine' => 161,
                        'endLine' => 161,
                        'startColumn' => 9,
                        'endColumn' => 21,
                        'parameterIndex' => 1,
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
                        'startLine' => 162,
                        'endLine' => 162,
                        'startColumn' => 9,
                        'endColumn' => 14,
                        'parameterIndex' => 2,
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
                        'startLine' => 163,
                        'endLine' => 163,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 3,
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
                        'startLine' => 164,
                        'endLine' => 164,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 4,
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
                        'startLine' => 165,
                        'endLine' => 165,
                        'startColumn' => 9,
                        'endColumn' => 18,
                        'parameterIndex' => 5,
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
                        'startLine' => 166,
                        'endLine' => 166,
                        'startColumn' => 9,
                        'endColumn' => 19,
                        'parameterIndex' => 6,
                        'isOptional' => false,
                    ],
                    'relationName' => [
                        'name' => 'relationName',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 167,
                                'endLine' => 167,
                                'startTokenPos' => 293,
                                'startFilePos' => 4270,
                                'endTokenPos' => 293,
                                'endFilePos' => 4273,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 167,
                        'endLine' => 167,
                        'startColumn' => 9,
                        'endColumn' => 28,
                        'parameterIndex' => 7,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new belongs to many relationship instance.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>  $query
 * @param  TDeclaringModel  $parent
 * @param  string|class-string<TRelatedModel>  $table
 * @param  string  $foreignPivotKey
 * @param  string  $relatedPivotKey
 * @param  string  $parentKey
 * @param  string  $relatedKey
 * @param  string|null  $relationName
 */',
                'startLine' => 159,
                'endLine' => 177,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'resolveTableName' => [
                'name' => 'resolveTableName',
                'parameters' => [
                    'table' => [
                        'name' => 'table',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 185,
                        'endLine' => 185,
                        'startColumn' => 41,
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
 * Attempt to resolve the intermediate table name from the given string.
 *
 * @param  string  $table
 * @return string
 */',
                'startLine' => 185,
                'endLine' => 202,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                'startLine' => 209,
                'endLine' => 216,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 224,
                                'endLine' => 224,
                                'startTokenPos' => 539,
                                'startFilePos' => 5688,
                                'endTokenPos' => 539,
                                'endFilePos' => 5691,
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
 * Set the join clause for the relation query.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>|null  $query
 * @return $this
 */',
                'startLine' => 224,
                'endLine' => 239,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                'startLine' => 246,
                'endLine' => 253,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 256,
                        'endLine' => 256,
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
                'startLine' => 256,
                'endLine' => 265,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 268,
                        'endLine' => 268,
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
                        'startLine' => 268,
                        'endLine' => 268,
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
                'startLine' => 268,
                'endLine' => 275,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 278,
                        'endLine' => 278,
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
                        'startLine' => 278,
                        'endLine' => 278,
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
                        'startLine' => 278,
                        'endLine' => 278,
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
                'startLine' => 278,
                'endLine' => 296,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 304,
                        'endLine' => 304,
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
                'startLine' => 304,
                'endLine' => 324,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'getPivotClass' => [
                'name' => 'getPivotClass',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the class being used for pivot models.
 *
 * @return class-string<TPivotModel>
 */',
                'startLine' => 331,
                'endLine' => 334,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'using' => [
                'name' => 'using',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 346,
                        'endLine' => 346,
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
 * Specify the custom pivot model to use for the relationship.
 *
 * @template TNewPivotModel of \\Illuminate\\Database\\Eloquent\\Relations\\Pivot
 *
 * @param  class-string<TNewPivotModel>  $class
 * @return $this
 *
 * @phpstan-this-out static<TRelatedModel, TDeclaringModel, TNewPivotModel, TAccessor>
 */',
                'startLine' => 346,
                'endLine' => 351,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'as' => [
                'name' => 'as',
                'parameters' => [
                    'accessor' => [
                        'name' => 'accessor',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 363,
                        'endLine' => 363,
                        'startColumn' => 24,
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
 * Specify the custom pivot accessor to use for the relationship.
 *
 * @template TNewAccessor of string
 *
 * @param  TNewAccessor  $accessor
 * @return $this
 *
 * @phpstan-this-out static<TRelatedModel, TDeclaringModel, TPivotModel, TNewAccessor>
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
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'wherePivot' => [
                'name' => 'wherePivot',
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
                        'startLine' => 379,
                        'endLine' => 379,
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
                                'startLine' => 379,
                                'endLine' => 379,
                                'startTokenPos' => 1125,
                                'startFilePos' => 10222,
                                'endTokenPos' => 1125,
                                'endFilePos' => 10225,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 379,
                        'endLine' => 379,
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
                                'startLine' => 379,
                                'endLine' => 379,
                                'startTokenPos' => 1132,
                                'startFilePos' => 10237,
                                'endTokenPos' => 1132,
                                'endFilePos' => 10240,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 379,
                        'endLine' => 379,
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
                                'startLine' => 379,
                                'endLine' => 379,
                                'startTokenPos' => 1139,
                                'startFilePos' => 10254,
                                'endTokenPos' => 1139,
                                'endFilePos' => 10258,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 379,
                        'endLine' => 379,
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
 * Set a where clause for a pivot table column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
                'startLine' => 379,
                'endLine' => 384,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'wherePivotBetween' => [
                'name' => 'wherePivotBetween',
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
                        'startLine' => 395,
                        'endLine' => 395,
                        'startColumn' => 39,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 395,
                        'endLine' => 395,
                        'startColumn' => 48,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => [
                            'code' => '\'and\'',
                            'attributes' => [
                                'startLine' => 395,
                                'endLine' => 395,
                                'startTokenPos' => 1203,
                                'startFilePos' => 10763,
                                'endTokenPos' => 1203,
                                'endFilePos' => 10767,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 395,
                        'endLine' => 395,
                        'startColumn' => 63,
                        'endColumn' => 78,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'not' => [
                        'name' => 'not',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 395,
                                'endLine' => 395,
                                'startTokenPos' => 1210,
                                'startFilePos' => 10777,
                                'endTokenPos' => 1210,
                                'endFilePos' => 10781,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 395,
                        'endLine' => 395,
                        'startColumn' => 81,
                        'endColumn' => 92,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a "where between" clause for a pivot table column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  array  $values
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
                'startLine' => 395,
                'endLine' => 398,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'orWherePivotBetween' => [
                'name' => 'orWherePivotBetween',
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
                        'startLine' => 407,
                        'endLine' => 407,
                        'startColumn' => 41,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 407,
                        'endLine' => 407,
                        'startColumn' => 50,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a "or where between" clause for a pivot table column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  array  $values
 * @return $this
 */',
                'startLine' => 407,
                'endLine' => 410,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'wherePivotNotBetween' => [
                'name' => 'wherePivotNotBetween',
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
                        'startLine' => 420,
                        'endLine' => 420,
                        'startColumn' => 42,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 420,
                        'endLine' => 420,
                        'startColumn' => 51,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => [
                            'code' => '\'and\'',
                            'attributes' => [
                                'startLine' => 420,
                                'endLine' => 420,
                                'startTokenPos' => 1297,
                                'startFilePos' => 11587,
                                'endTokenPos' => 1297,
                                'endFilePos' => 11591,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 420,
                        'endLine' => 420,
                        'startColumn' => 66,
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
 * Set a "where pivot not between" clause for a pivot table column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  array  $values
 * @param  string  $boolean
 * @return $this
 */',
                'startLine' => 420,
                'endLine' => 423,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'orWherePivotNotBetween' => [
                'name' => 'orWherePivotNotBetween',
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
                        'startLine' => 432,
                        'endLine' => 432,
                        'startColumn' => 44,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 432,
                        'endLine' => 432,
                        'startColumn' => 53,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a "or where not between" clause for a pivot table column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  array  $values
 * @return $this
 */',
                'startLine' => 432,
                'endLine' => 435,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'wherePivotIn' => [
                'name' => 'wherePivotIn',
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
                        'startLine' => 446,
                        'endLine' => 446,
                        'startColumn' => 34,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 446,
                        'endLine' => 446,
                        'startColumn' => 43,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => [
                            'code' => '\'and\'',
                            'attributes' => [
                                'startLine' => 446,
                                'endLine' => 446,
                                'startTokenPos' => 1380,
                                'startFilePos' => 12385,
                                'endTokenPos' => 1380,
                                'endFilePos' => 12389,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 446,
                        'endLine' => 446,
                        'startColumn' => 52,
                        'endColumn' => 67,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'not' => [
                        'name' => 'not',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 446,
                                'endLine' => 446,
                                'startTokenPos' => 1387,
                                'startFilePos' => 12399,
                                'endTokenPos' => 1387,
                                'endFilePos' => 12403,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 446,
                        'endLine' => 446,
                        'startColumn' => 70,
                        'endColumn' => 81,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a "where in" clause for a pivot table column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $values
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
                'startLine' => 446,
                'endLine' => 451,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'orWherePivot' => [
                'name' => 'orWherePivot',
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
                        'startLine' => 461,
                        'endLine' => 461,
                        'startColumn' => 34,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 461,
                                'endLine' => 461,
                                'startTokenPos' => 1446,
                                'startFilePos' => 12858,
                                'endTokenPos' => 1446,
                                'endFilePos' => 12861,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 461,
                        'endLine' => 461,
                        'startColumn' => 43,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 461,
                                'endLine' => 461,
                                'startTokenPos' => 1453,
                                'startFilePos' => 12873,
                                'endTokenPos' => 1453,
                                'endFilePos' => 12876,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 461,
                        'endLine' => 461,
                        'startColumn' => 61,
                        'endColumn' => 73,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set an "or where" clause for a pivot table column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
                'startLine' => 461,
                'endLine' => 464,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'withPivotValue' => [
                'name' => 'withPivotValue',
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
                        'startLine' => 477,
                        'endLine' => 477,
                        'startColumn' => 36,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 477,
                                'endLine' => 477,
                                'startTokenPos' => 1494,
                                'startFilePos' => 13357,
                                'endTokenPos' => 1494,
                                'endFilePos' => 13360,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 477,
                        'endLine' => 477,
                        'startColumn' => 45,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a where clause for a pivot table column.
 *
 * In addition, new pivot records will receive this value.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression|array<string, string>  $column
 * @param  mixed  $value
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 477,
                'endLine' => 494,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'orWherePivotIn' => [
                'name' => 'orWherePivotIn',
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
                        'startLine' => 503,
                        'endLine' => 503,
                        'startColumn' => 36,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 503,
                        'endLine' => 503,
                        'startColumn' => 45,
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
 * Set an "or where in" clause for a pivot table column.
 *
 * @param  string  $column
 * @param  mixed  $values
 * @return $this
 */',
                'startLine' => 503,
                'endLine' => 506,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'wherePivotNotIn' => [
                'name' => 'wherePivotNotIn',
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
                        'startLine' => 516,
                        'endLine' => 516,
                        'startColumn' => 37,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 516,
                        'endLine' => 516,
                        'startColumn' => 46,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => [
                            'code' => '\'and\'',
                            'attributes' => [
                                'startLine' => 516,
                                'endLine' => 516,
                                'startTokenPos' => 1656,
                                'startFilePos' => 14414,
                                'endTokenPos' => 1656,
                                'endFilePos' => 14418,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 516,
                        'endLine' => 516,
                        'startColumn' => 55,
                        'endColumn' => 70,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a "where not in" clause for a pivot table column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $values
 * @param  string  $boolean
 * @return $this
 */',
                'startLine' => 516,
                'endLine' => 519,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'orWherePivotNotIn' => [
                'name' => 'orWherePivotNotIn',
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
                        'startLine' => 528,
                        'endLine' => 528,
                        'startColumn' => 39,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 528,
                        'endLine' => 528,
                        'startColumn' => 48,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set an "or where not in" clause for a pivot table column.
 *
 * @param  string  $column
 * @param  mixed  $values
 * @return $this
 */',
                'startLine' => 528,
                'endLine' => 531,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'wherePivotNull' => [
                'name' => 'wherePivotNull',
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
                        'startLine' => 541,
                        'endLine' => 541,
                        'startColumn' => 36,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => [
                            'code' => '\'and\'',
                            'attributes' => [
                                'startLine' => 541,
                                'endLine' => 541,
                                'startTokenPos' => 1731,
                                'startFilePos' => 15101,
                                'endTokenPos' => 1731,
                                'endFilePos' => 15105,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 541,
                        'endLine' => 541,
                        'startColumn' => 45,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'not' => [
                        'name' => 'not',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 541,
                                'endLine' => 541,
                                'startTokenPos' => 1738,
                                'startFilePos' => 15115,
                                'endTokenPos' => 1738,
                                'endFilePos' => 15119,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 541,
                        'endLine' => 541,
                        'startColumn' => 63,
                        'endColumn' => 74,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a "where null" clause for a pivot table column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
                'startLine' => 541,
                'endLine' => 546,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'wherePivotNotNull' => [
                'name' => 'wherePivotNotNull',
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
                        'startLine' => 555,
                        'endLine' => 555,
                        'startColumn' => 39,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => [
                            'code' => '\'and\'',
                            'attributes' => [
                                'startLine' => 555,
                                'endLine' => 555,
                                'startTokenPos' => 1794,
                                'startFilePos' => 15549,
                                'endTokenPos' => 1794,
                                'endFilePos' => 15553,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 555,
                        'endLine' => 555,
                        'startColumn' => 48,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a "where not null" clause for a pivot table column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  string  $boolean
 * @return $this
 */',
                'startLine' => 555,
                'endLine' => 558,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'orWherePivotNull' => [
                'name' => 'orWherePivotNull',
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
                        'startLine' => 567,
                        'endLine' => 567,
                        'startColumn' => 38,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'not' => [
                        'name' => 'not',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 567,
                                'endLine' => 567,
                                'startTokenPos' => 1832,
                                'startFilePos' => 15896,
                                'endTokenPos' => 1832,
                                'endFilePos' => 15900,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 567,
                        'endLine' => 567,
                        'startColumn' => 47,
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
 * Set a "or where null" clause for a pivot table column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  bool  $not
 * @return $this
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
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'orWherePivotNotNull' => [
                'name' => 'orWherePivotNotNull',
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
                        'startLine' => 578,
                        'endLine' => 578,
                        'startColumn' => 41,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a "or where not null" clause for a pivot table column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return $this
 */',
                'startLine' => 578,
                'endLine' => 581,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'orderByPivot' => [
                'name' => 'orderByPivot',
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
                        'startLine' => 590,
                        'endLine' => 590,
                        'startColumn' => 34,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'direction' => [
                        'name' => 'direction',
                        'default' => [
                            'code' => '\'asc\'',
                            'attributes' => [
                                'startLine' => 590,
                                'endLine' => 590,
                                'startTokenPos' => 1898,
                                'startFilePos' => 16551,
                                'endTokenPos' => 1898,
                                'endFilePos' => 16555,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 590,
                        'endLine' => 590,
                        'startColumn' => 43,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add an "order by" clause for a pivot table column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  string  $direction
 * @return $this
 */',
                'startLine' => 590,
                'endLine' => 593,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'orderByPivotDesc' => [
                'name' => 'orderByPivotDesc',
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
                        'startLine' => 601,
                        'endLine' => 601,
                        'startColumn' => 38,
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
 * Add an "order by desc" clause for a pivot table column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return $this
 */',
                'startLine' => 601,
                'endLine' => 604,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 617,
                        'endLine' => 617,
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
                                'startLine' => 617,
                                'endLine' => 617,
                                'startTokenPos' => 1971,
                                'startFilePos' => 17462,
                                'endTokenPos' => 1973,
                                'endFilePos' => 17466,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 617,
                        'endLine' => 617,
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
 * Find a related model by its primary key or return a new instance of the related model.
 *
 * @param  mixed  $id
 * @param  array  $columns
 * @return (
 *     $id is (\\Illuminate\\Contracts\\Support\\Arrayable<array-key, mixed>|array<mixed>)
 *     ? \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel&object{pivot: TPivotModel}>
 *     : TRelatedModel&object{pivot: TPivotModel}
 * )
 */',
                'startLine' => 617,
                'endLine' => 624,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 633,
                                'endLine' => 633,
                                'startTokenPos' => 2037,
                                'startFilePos' => 17916,
                                'endTokenPos' => 2038,
                                'endFilePos' => 17917,
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
                        'startLine' => 633,
                        'endLine' => 633,
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
                                'startLine' => 633,
                                'endLine' => 633,
                                'startTokenPos' => 2047,
                                'startFilePos' => 17936,
                                'endTokenPos' => 2048,
                                'endFilePos' => 17937,
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
                        'startLine' => 633,
                        'endLine' => 633,
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
 * @return TRelatedModel&object{pivot: TPivotModel}
 */',
                'startLine' => 633,
                'endLine' => 640,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 651,
                                'endLine' => 651,
                                'startTokenPos' => 2122,
                                'startFilePos' => 18526,
                                'endTokenPos' => 2123,
                                'endFilePos' => 18527,
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
                        'startLine' => 651,
                        'endLine' => 651,
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
                                'startLine' => 651,
                                'endLine' => 651,
                                'startTokenPos' => 2134,
                                'startFilePos' => 18554,
                                'endTokenPos' => 2135,
                                'endFilePos' => 18555,
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
                        'startLine' => 651,
                        'endLine' => 651,
                        'startColumn' => 59,
                        'endColumn' => 84,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'joining' => [
                        'name' => 'joining',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 651,
                                'endLine' => 651,
                                'startTokenPos' => 2144,
                                'startFilePos' => 18575,
                                'endTokenPos' => 2145,
                                'endFilePos' => 18576,
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
                        'startLine' => 651,
                        'endLine' => 651,
                        'startColumn' => 87,
                        'endColumn' => 105,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'touch' => [
                        'name' => 'touch',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 651,
                                'endLine' => 651,
                                'startTokenPos' => 2152,
                                'startFilePos' => 18588,
                                'endTokenPos' => 2152,
                                'endFilePos' => 18591,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 651,
                        'endLine' => 651,
                        'startColumn' => 108,
                        'endColumn' => 120,
                        'parameterIndex' => 3,
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
 * @param  array  $joining
 * @param  bool  $touch
 * @return TRelatedModel&object{pivot: TPivotModel}
 */',
                'startLine' => 651,
                'endLine' => 666,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 677,
                                'endLine' => 677,
                                'startTokenPos' => 2311,
                                'startFilePos' => 19613,
                                'endTokenPos' => 2312,
                                'endFilePos' => 19614,
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
                        'startLine' => 677,
                        'endLine' => 677,
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
                                'startLine' => 677,
                                'endLine' => 677,
                                'startTokenPos' => 2323,
                                'startFilePos' => 19641,
                                'endTokenPos' => 2324,
                                'endFilePos' => 19642,
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
                        'startLine' => 677,
                        'endLine' => 677,
                        'startColumn' => 59,
                        'endColumn' => 84,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'joining' => [
                        'name' => 'joining',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 677,
                                'endLine' => 677,
                                'startTokenPos' => 2333,
                                'startFilePos' => 19662,
                                'endTokenPos' => 2334,
                                'endFilePos' => 19663,
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
                        'startLine' => 677,
                        'endLine' => 677,
                        'startColumn' => 87,
                        'endColumn' => 105,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'touch' => [
                        'name' => 'touch',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 677,
                                'endLine' => 677,
                                'startTokenPos' => 2341,
                                'startFilePos' => 19675,
                                'endTokenPos' => 2341,
                                'endFilePos' => 19678,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 677,
                        'endLine' => 677,
                        'startColumn' => 108,
                        'endColumn' => 120,
                        'parameterIndex' => 3,
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
 * @param  array  $joining
 * @param  bool  $touch
 * @return TRelatedModel&object{pivot: TPivotModel}
 */',
                'startLine' => 677,
                'endLine' => 692,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 703,
                        'endLine' => 703,
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
                                'startLine' => 703,
                                'endLine' => 703,
                                'startTokenPos' => 2549,
                                'startFilePos' => 20729,
                                'endTokenPos' => 2550,
                                'endFilePos' => 20730,
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
                        'startLine' => 703,
                        'endLine' => 703,
                        'startColumn' => 55,
                        'endColumn' => 72,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'joining' => [
                        'name' => 'joining',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 703,
                                'endLine' => 703,
                                'startTokenPos' => 2559,
                                'startFilePos' => 20750,
                                'endTokenPos' => 2560,
                                'endFilePos' => 20751,
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
                        'startLine' => 703,
                        'endLine' => 703,
                        'startColumn' => 75,
                        'endColumn' => 93,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'touch' => [
                        'name' => 'touch',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 703,
                                'endLine' => 703,
                                'startTokenPos' => 2567,
                                'startFilePos' => 20763,
                                'endTokenPos' => 2567,
                                'endFilePos' => 20766,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 703,
                        'endLine' => 703,
                        'startColumn' => 96,
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
 * Create or update a related record matching the attributes, and fill it with values.
 *
 * @param  array  $attributes
 * @param  array  $values
 * @param  array  $joining
 * @param  bool  $touch
 * @return TRelatedModel&object{pivot: TPivotModel}
 */',
                'startLine' => 703,
                'endLine' => 712,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 725,
                        'endLine' => 725,
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
                                'startLine' => 725,
                                'endLine' => 725,
                                'startTokenPos' => 2664,
                                'startFilePos' => 21521,
                                'endTokenPos' => 2666,
                                'endFilePos' => 21525,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 725,
                        'endLine' => 725,
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
 * @return (
 *     $id is (\\Illuminate\\Contracts\\Support\\Arrayable<array-key, mixed>|array<mixed>)
 *     ? \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel&object{pivot: TPivotModel}>
 *     : (TRelatedModel&object{pivot: TPivotModel})|null
 * )
 */',
                'startLine' => 725,
                'endLine' => 734,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 746,
                        'endLine' => 746,
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
                                'startLine' => 746,
                                'endLine' => 746,
                                'startTokenPos' => 2770,
                                'startFilePos' => 22216,
                                'endTokenPos' => 2772,
                                'endFilePos' => 22220,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 746,
                        'endLine' => 746,
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
 * @return TRelatedModel&object{pivot: TPivotModel}
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<TRelatedModel>
 * @throws \\Illuminate\\Database\\MultipleRecordsFoundException
 */',
                'startLine' => 746,
                'endLine' => 751,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 760,
                        'endLine' => 760,
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
                                'startLine' => 760,
                                'endLine' => 760,
                                'startTokenPos' => 2830,
                                'startFilePos' => 22702,
                                'endTokenPos' => 2832,
                                'endFilePos' => 22706,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 760,
                        'endLine' => 760,
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
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel&object{pivot: TPivotModel}>
 */',
                'startLine' => 760,
                'endLine' => 771,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 786,
                        'endLine' => 786,
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
                                'startLine' => 786,
                                'endLine' => 786,
                                'startTokenPos' => 2925,
                                'startFilePos' => 23536,
                                'endTokenPos' => 2927,
                                'endFilePos' => 23540,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 786,
                        'endLine' => 786,
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
 * @return (
 *     $id is (\\Illuminate\\Contracts\\Support\\Arrayable<array-key, mixed>|array<mixed>)
 *     ? \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel&object{pivot: TPivotModel}>
 *     : TRelatedModel&object{pivot: TPivotModel}
 * )
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<TRelatedModel>
 */',
                'startLine' => 786,
                'endLine' => 801,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 817,
                        'endLine' => 817,
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
                                'startLine' => 817,
                                'endLine' => 817,
                                'startTokenPos' => 3070,
                                'startFilePos' => 24566,
                                'endTokenPos' => 3072,
                                'endFilePos' => 24570,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 817,
                        'endLine' => 817,
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
                                'startLine' => 817,
                                'endLine' => 817,
                                'startTokenPos' => 3082,
                                'startFilePos' => 24594,
                                'endTokenPos' => 3082,
                                'endFilePos' => 24597,
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
                        'startLine' => 817,
                        'endLine' => 817,
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
 *     ? \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel&object{pivot: TPivotModel}>|TValue
 *     : (TRelatedModel&object{pivot: TPivotModel})|TValue
 * )
 */',
                'startLine' => 817,
                'endLine' => 838,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 849,
                        'endLine' => 849,
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
                                'startLine' => 849,
                                'endLine' => 849,
                                'startTokenPos' => 3240,
                                'startFilePos' => 25440,
                                'endTokenPos' => 3240,
                                'endFilePos' => 25443,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 849,
                        'endLine' => 849,
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
                                'startLine' => 849,
                                'endLine' => 849,
                                'startTokenPos' => 3247,
                                'startFilePos' => 25455,
                                'endTokenPos' => 3247,
                                'endFilePos' => 25458,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 849,
                        'endLine' => 849,
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
                                'startLine' => 849,
                                'endLine' => 849,
                                'startTokenPos' => 3254,
                                'startFilePos' => 25472,
                                'endTokenPos' => 3254,
                                'endFilePos' => 25476,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 849,
                        'endLine' => 849,
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
 * @return (TRelatedModel&object{pivot: TPivotModel})|null
 */',
                'startLine' => 849,
                'endLine' => 852,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 860,
                                'endLine' => 860,
                                'startTokenPos' => 3296,
                                'startFilePos' => 25773,
                                'endTokenPos' => 3298,
                                'endFilePos' => 25777,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 860,
                        'endLine' => 860,
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
 * Execute the query and get the first result.
 *
 * @param  array  $columns
 * @return (TRelatedModel&object{pivot: TPivotModel})|null
 */',
                'startLine' => 860,
                'endLine' => 865,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 875,
                                'endLine' => 875,
                                'startTokenPos' => 3358,
                                'startFilePos' => 26224,
                                'endTokenPos' => 3360,
                                'endFilePos' => 26228,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 875,
                        'endLine' => 875,
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
 * @return TRelatedModel&object{pivot: TPivotModel}
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<TRelatedModel>
 */',
                'startLine' => 875,
                'endLine' => 882,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 893,
                                'endLine' => 893,
                                'startTokenPos' => 3427,
                                'startFilePos' => 26760,
                                'endTokenPos' => 3429,
                                'endFilePos' => 26764,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 893,
                        'endLine' => 893,
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
                                'startLine' => 893,
                                'endLine' => 893,
                                'startTokenPos' => 3439,
                                'startFilePos' => 26788,
                                'endTokenPos' => 3439,
                                'endFilePos' => 26791,
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
                        'startLine' => 893,
                        'endLine' => 893,
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
 * @return (TRelatedModel&object{pivot: TPivotModel})|TValue
 */',
                'startLine' => 893,
                'endLine' => 906,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                'startLine' => 909,
                'endLine' => 914,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 917,
                                'endLine' => 917,
                                'startTokenPos' => 3574,
                                'startFilePos' => 27311,
                                'endTokenPos' => 3576,
                                'endFilePos' => 27315,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 917,
                        'endLine' => 917,
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
                'startLine' => 917,
                'endLine' => 942,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 950,
                                'endLine' => 950,
                                'startTokenPos' => 3725,
                                'startFilePos' => 28503,
                                'endTokenPos' => 3727,
                                'endFilePos' => 28507,
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
                        'startLine' => 950,
                        'endLine' => 950,
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
 * Get the select columns for the relation query.
 *
 * @param  array  $columns
 * @return array
 */',
                'startLine' => 950,
                'endLine' => 957,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                'startLine' => 966,
                'endLine' => 976,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 987,
                                'endLine' => 987,
                                'startTokenPos' => 3870,
                                'startFilePos' => 29560,
                                'endTokenPos' => 3870,
                                'endFilePos' => 29563,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 987,
                        'endLine' => 987,
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
                                'startLine' => 987,
                                'endLine' => 987,
                                'startTokenPos' => 3877,
                                'startFilePos' => 29577,
                                'endTokenPos' => 3879,
                                'endFilePos' => 29581,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 987,
                        'endLine' => 987,
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
                                'startLine' => 987,
                                'endLine' => 987,
                                'startTokenPos' => 3886,
                                'startFilePos' => 29596,
                                'endTokenPos' => 3886,
                                'endFilePos' => 29601,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 987,
                        'endLine' => 987,
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
                                'startLine' => 987,
                                'endLine' => 987,
                                'startTokenPos' => 3893,
                                'startFilePos' => 29612,
                                'endTokenPos' => 3893,
                                'endFilePos' => 29615,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 987,
                        'endLine' => 987,
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
 * @return \\Illuminate\\Pagination\\LengthAwarePaginator<int, TRelatedModel&object{pivot: TPivotModel}>
 */',
                'startLine' => 987,
                'endLine' => 994,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 1005,
                                'endLine' => 1005,
                                'startTokenPos' => 3974,
                                'startFilePos' => 30235,
                                'endTokenPos' => 3974,
                                'endFilePos' => 30238,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1005,
                        'endLine' => 1005,
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
                                'startLine' => 1005,
                                'endLine' => 1005,
                                'startTokenPos' => 3981,
                                'startFilePos' => 30252,
                                'endTokenPos' => 3983,
                                'endFilePos' => 30256,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1005,
                        'endLine' => 1005,
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
                                'startLine' => 1005,
                                'endLine' => 1005,
                                'startTokenPos' => 3990,
                                'startFilePos' => 30271,
                                'endTokenPos' => 3990,
                                'endFilePos' => 30276,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1005,
                        'endLine' => 1005,
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
                                'startLine' => 1005,
                                'endLine' => 1005,
                                'startTokenPos' => 3997,
                                'startFilePos' => 30287,
                                'endTokenPos' => 3997,
                                'endFilePos' => 30290,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1005,
                        'endLine' => 1005,
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
 * @return \\Illuminate\\Contracts\\Pagination\\Paginator<int, TRelatedModel&object{pivot: TPivotModel}>
 */',
                'startLine' => 1005,
                'endLine' => 1012,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 1023,
                                'endLine' => 1023,
                                'startTokenPos' => 4078,
                                'startFilePos' => 30929,
                                'endTokenPos' => 4078,
                                'endFilePos' => 30932,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1023,
                        'endLine' => 1023,
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
                                'startLine' => 1023,
                                'endLine' => 1023,
                                'startTokenPos' => 4085,
                                'startFilePos' => 30946,
                                'endTokenPos' => 4087,
                                'endFilePos' => 30950,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1023,
                        'endLine' => 1023,
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
                                'startLine' => 1023,
                                'endLine' => 1023,
                                'startTokenPos' => 4094,
                                'startFilePos' => 30967,
                                'endTokenPos' => 4094,
                                'endFilePos' => 30974,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1023,
                        'endLine' => 1023,
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
                                'startLine' => 1023,
                                'endLine' => 1023,
                                'startTokenPos' => 4101,
                                'startFilePos' => 30987,
                                'endTokenPos' => 4101,
                                'endFilePos' => 30990,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1023,
                        'endLine' => 1023,
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
 * @return \\Illuminate\\Contracts\\Pagination\\CursorPaginator<int, TRelatedModel&object{pivot: TPivotModel}>
 */',
                'startLine' => 1023,
                'endLine' => 1030,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 1039,
                        'endLine' => 1039,
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
                        'startLine' => 1039,
                        'endLine' => 1039,
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
                'startLine' => 1039,
                'endLine' => 1046,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 1057,
                        'endLine' => 1057,
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
                        'startLine' => 1057,
                        'endLine' => 1057,
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
                                'startLine' => 1057,
                                'endLine' => 1057,
                                'startTokenPos' => 4267,
                                'startFilePos' => 31999,
                                'endTokenPos' => 4267,
                                'endFilePos' => 32002,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1057,
                        'endLine' => 1057,
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
                                'startLine' => 1057,
                                'endLine' => 1057,
                                'startTokenPos' => 4274,
                                'startFilePos' => 32014,
                                'endTokenPos' => 4274,
                                'endFilePos' => 32017,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1057,
                        'endLine' => 1057,
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
                'startLine' => 1057,
                'endLine' => 1060,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 1071,
                        'endLine' => 1071,
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
                        'startLine' => 1071,
                        'endLine' => 1071,
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
                                'startLine' => 1071,
                                'endLine' => 1071,
                                'startTokenPos' => 4320,
                                'startFilePos' => 32431,
                                'endTokenPos' => 4320,
                                'endFilePos' => 32434,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1071,
                        'endLine' => 1071,
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
                                'startLine' => 1071,
                                'endLine' => 1071,
                                'startTokenPos' => 4327,
                                'startFilePos' => 32446,
                                'endTokenPos' => 4327,
                                'endFilePos' => 32449,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1071,
                        'endLine' => 1071,
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
                'startLine' => 1071,
                'endLine' => 1074,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 1085,
                        'endLine' => 1085,
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
                                'startLine' => 1085,
                                'endLine' => 1085,
                                'startTokenPos' => 4376,
                                'startFilePos' => 32856,
                                'endTokenPos' => 4376,
                                'endFilePos' => 32859,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1085,
                        'endLine' => 1085,
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
                                'startLine' => 1085,
                                'endLine' => 1085,
                                'startTokenPos' => 4383,
                                'startFilePos' => 32872,
                                'endTokenPos' => 4383,
                                'endFilePos' => 32875,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1085,
                        'endLine' => 1085,
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
                                'startLine' => 1085,
                                'endLine' => 1085,
                                'startTokenPos' => 4390,
                                'startFilePos' => 32887,
                                'endTokenPos' => 4390,
                                'endFilePos' => 32890,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1085,
                        'endLine' => 1085,
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
                'startLine' => 1085,
                'endLine' => 1094,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'orderedChunkById' => [
                'name' => 'orderedChunkById',
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
                        'startLine' => 1106,
                        'endLine' => 1106,
                        'startColumn' => 38,
                        'endColumn' => 43,
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
                        'startLine' => 1106,
                        'endLine' => 1106,
                        'startColumn' => 46,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1106,
                                'endLine' => 1106,
                                'startTokenPos' => 4515,
                                'startFilePos' => 33582,
                                'endTokenPos' => 4515,
                                'endFilePos' => 33585,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1106,
                        'endLine' => 1106,
                        'startColumn' => 66,
                        'endColumn' => 79,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'alias' => [
                        'name' => 'alias',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1106,
                                'endLine' => 1106,
                                'startTokenPos' => 4522,
                                'startFilePos' => 33597,
                                'endTokenPos' => 4522,
                                'endFilePos' => 33600,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1106,
                        'endLine' => 1106,
                        'startColumn' => 82,
                        'endColumn' => 94,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'descending' => [
                        'name' => 'descending',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1106,
                                'endLine' => 1106,
                                'startTokenPos' => 4529,
                                'startFilePos' => 33617,
                                'endTokenPos' => 4529,
                                'endFilePos' => 33621,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1106,
                        'endLine' => 1106,
                        'startColumn' => 97,
                        'endColumn' => 115,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Chunk the results of a query by comparing IDs in a given order.
 *
 * @param  int  $count
 * @param  callable  $callback
 * @param  string|null  $column
 * @param  string|null  $alias
 * @param  bool  $descending
 * @return bool
 */',
                'startLine' => 1106,
                'endLine' => 1119,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 1128,
                        'endLine' => 1128,
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
                                'startLine' => 1128,
                                'endLine' => 1128,
                                'startTokenPos' => 4652,
                                'startFilePos' => 34271,
                                'endTokenPos' => 4652,
                                'endFilePos' => 34274,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1128,
                        'endLine' => 1128,
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
                'startLine' => 1128,
                'endLine' => 1137,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 1145,
                                'endLine' => 1145,
                                'startTokenPos' => 4741,
                                'startFilePos' => 34789,
                                'endTokenPos' => 4741,
                                'endFilePos' => 34792,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1145,
                        'endLine' => 1145,
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
 * @return \\Illuminate\\Support\\LazyCollection<int, TRelatedModel&object{pivot: TPivotModel}>
 */',
                'startLine' => 1145,
                'endLine' => 1152,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 1162,
                                'endLine' => 1162,
                                'startTokenPos' => 4802,
                                'startFilePos' => 35324,
                                'endTokenPos' => 4802,
                                'endFilePos' => 35327,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1162,
                        'endLine' => 1162,
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
                                'startLine' => 1162,
                                'endLine' => 1162,
                                'startTokenPos' => 4809,
                                'startFilePos' => 35340,
                                'endTokenPos' => 4809,
                                'endFilePos' => 35343,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1162,
                        'endLine' => 1162,
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
                                'startLine' => 1162,
                                'endLine' => 1162,
                                'startTokenPos' => 4816,
                                'startFilePos' => 35355,
                                'endTokenPos' => 4816,
                                'endFilePos' => 35358,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1162,
                        'endLine' => 1162,
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
 * @return \\Illuminate\\Support\\LazyCollection<int, TRelatedModel&object{pivot: TPivotModel}>
 */',
                'startLine' => 1162,
                'endLine' => 1175,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 1185,
                                'endLine' => 1185,
                                'startTokenPos' => 4916,
                                'startFilePos' => 36090,
                                'endTokenPos' => 4916,
                                'endFilePos' => 36093,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1185,
                        'endLine' => 1185,
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
                                'startLine' => 1185,
                                'endLine' => 1185,
                                'startTokenPos' => 4923,
                                'startFilePos' => 36106,
                                'endTokenPos' => 4923,
                                'endFilePos' => 36109,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1185,
                        'endLine' => 1185,
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
                                'startLine' => 1185,
                                'endLine' => 1185,
                                'startTokenPos' => 4930,
                                'startFilePos' => 36121,
                                'endTokenPos' => 4930,
                                'endFilePos' => 36124,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1185,
                        'endLine' => 1185,
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
 * @return \\Illuminate\\Support\\LazyCollection<int, TRelatedModel&object{pivot: TPivotModel}>
 */',
                'startLine' => 1185,
                'endLine' => 1198,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
 * Get a lazy collection for the given query.
 *
 * @return \\Illuminate\\Support\\LazyCollection<int, TRelatedModel&object{pivot: TPivotModel}>
 */',
                'startLine' => 1205,
                'endLine' => 1212,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'prepareQueryBuilder' => [
                'name' => 'prepareQueryBuilder',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepare the query builder for query execution.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>
 */',
                'startLine' => 1219,
                'endLine' => 1222,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'hydratePivotRelation' => [
                'name' => 'hydratePivotRelation',
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
                        'startLine' => 1230,
                        'endLine' => 1230,
                        'startColumn' => 45,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Hydrate the pivot table relationship on the models.
 *
 * @param  array<int, TRelatedModel>  $models
 * @return void
 */',
                'startLine' => 1230,
                'endLine' => 1240,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'migratePivotAttributes' => [
                'name' => 'migratePivotAttributes',
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
                        'startLine' => 1248,
                        'endLine' => 1248,
                        'startColumn' => 47,
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
 * Get the pivot attributes from a model.
 *
 * @param  TRelatedModel  $model
 * @return array
 */',
                'startLine' => 1248,
                'endLine' => 1264,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'touchIfTouching' => [
                'name' => 'touchIfTouching',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * If we\'re touching the parent model, touch.
 *
 * @return void
 */',
                'startLine' => 1271,
                'endLine' => 1280,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'touchingParent' => [
                'name' => 'touchingParent',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if we should touch the parent on sync.
 *
 * @return bool
 */',
                'startLine' => 1287,
                'endLine' => 1290,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'guessInverseRelation' => [
                'name' => 'guessInverseRelation',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Attempt to guess the name of the inverse of the relation.
 *
 * @return string
 */',
                'startLine' => 1297,
                'endLine' => 1300,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
 * E.g.: Touch all roles associated with this user.
 *
 * @return void
 */',
                'startLine' => 1309,
                'endLine' => 1325,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'allRelatedIds' => [
                'name' => 'allRelatedIds',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the IDs for the related models.
 *
 * @return \\Illuminate\\Support\\Collection<int, int|string>
 */',
                'startLine' => 1332,
                'endLine' => 1335,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 1345,
                        'endLine' => 1345,
                        'startColumn' => 26,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'pivotAttributes' => [
                        'name' => 'pivotAttributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1345,
                                'endLine' => 1345,
                                'startTokenPos' => 5560,
                                'startFilePos' => 40763,
                                'endTokenPos' => 5561,
                                'endFilePos' => 40764,
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
                        'startLine' => 1345,
                        'endLine' => 1345,
                        'startColumn' => 40,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'touch' => [
                        'name' => 'touch',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1345,
                                'endLine' => 1345,
                                'startTokenPos' => 5568,
                                'startFilePos' => 40776,
                                'endTokenPos' => 5568,
                                'endFilePos' => 40779,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1345,
                        'endLine' => 1345,
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
 * Save a new model and attach it to the parent model.
 *
 * @param  TRelatedModel  $model
 * @param  array  $pivotAttributes
 * @param  bool  $touch
 * @return TRelatedModel&object{pivot: TPivotModel}
 */',
                'startLine' => 1345,
                'endLine' => 1352,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 1362,
                        'endLine' => 1362,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'pivotAttributes' => [
                        'name' => 'pivotAttributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1362,
                                'endLine' => 1362,
                                'startTokenPos' => 5627,
                                'startFilePos' => 41259,
                                'endTokenPos' => 5628,
                                'endFilePos' => 41260,
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
                        'startLine' => 1362,
                        'endLine' => 1362,
                        'startColumn' => 47,
                        'endColumn' => 73,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'touch' => [
                        'name' => 'touch',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1362,
                                'endLine' => 1362,
                                'startTokenPos' => 5635,
                                'startFilePos' => 41272,
                                'endTokenPos' => 5635,
                                'endFilePos' => 41275,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1362,
                        'endLine' => 1362,
                        'startColumn' => 76,
                        'endColumn' => 88,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Save a new model without raising any events and attach it to the parent model.
 *
 * @param  TRelatedModel  $model
 * @param  array  $pivotAttributes
 * @param  bool  $touch
 * @return TRelatedModel&object{pivot: TPivotModel}
 */',
                'startLine' => 1362,
                'endLine' => 1367,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 1378,
                        'endLine' => 1378,
                        'startColumn' => 30,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'pivotAttributes' => [
                        'name' => 'pivotAttributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1378,
                                'endLine' => 1378,
                                'startTokenPos' => 5704,
                                'startFilePos' => 41843,
                                'endTokenPos' => 5705,
                                'endFilePos' => 41844,
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
                        'startLine' => 1378,
                        'endLine' => 1378,
                        'startColumn' => 39,
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
 * Save an array of new models and attach them to the parent model.
 *
 * @template TContainer of \\Illuminate\\Support\\Collection<array-key, TRelatedModel>|array<array-key, TRelatedModel>
 *
 * @param  TContainer  $models
 * @param  array  $pivotAttributes
 * @return TContainer
 */',
                'startLine' => 1378,
                'endLine' => 1387,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 1398,
                        'endLine' => 1398,
                        'startColumn' => 37,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'pivotAttributes' => [
                        'name' => 'pivotAttributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1398,
                                'endLine' => 1398,
                                'startTokenPos' => 5785,
                                'startFilePos' => 42475,
                                'endTokenPos' => 5786,
                                'endFilePos' => 42476,
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
                        'startLine' => 1398,
                        'endLine' => 1398,
                        'startColumn' => 46,
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
 * Save an array of new models without raising any events and attach them to the parent model.
 *
 * @template TContainer of \\Illuminate\\Support\\Collection<array-key, TRelatedModel>|array<array-key, TRelatedModel>
 *
 * @param  TContainer  $models
 * @param  array  $pivotAttributes
 * @return TContainer
 */',
                'startLine' => 1398,
                'endLine' => 1403,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                                'startLine' => 1413,
                                'endLine' => 1413,
                                'startTokenPos' => 5846,
                                'startFilePos' => 42919,
                                'endTokenPos' => 5847,
                                'endFilePos' => 42920,
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
                        'startLine' => 1413,
                        'endLine' => 1413,
                        'startColumn' => 28,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'joining' => [
                        'name' => 'joining',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1413,
                                'endLine' => 1413,
                                'startTokenPos' => 5856,
                                'startFilePos' => 42940,
                                'endTokenPos' => 5857,
                                'endFilePos' => 42941,
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
                        'startLine' => 1413,
                        'endLine' => 1413,
                        'startColumn' => 52,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'touch' => [
                        'name' => 'touch',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1413,
                                'endLine' => 1413,
                                'startTokenPos' => 5864,
                                'startFilePos' => 42953,
                                'endTokenPos' => 5864,
                                'endFilePos' => 42956,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1413,
                        'endLine' => 1413,
                        'startColumn' => 73,
                        'endColumn' => 85,
                        'parameterIndex' => 2,
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
 * @param  array  $joining
 * @param  bool  $touch
 * @return TRelatedModel&object{pivot: TPivotModel}
 */',
                'startLine' => 1413,
                'endLine' => 1427,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 1436,
                        'endLine' => 1436,
                        'startColumn' => 32,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'joinings' => [
                        'name' => 'joinings',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1436,
                                'endLine' => 1436,
                                'startTokenPos' => 5962,
                                'startFilePos' => 43785,
                                'endTokenPos' => 5963,
                                'endFilePos' => 43786,
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
                        'startLine' => 1436,
                        'endLine' => 1436,
                        'startColumn' => 51,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an array of new instances of the related models.
 *
 * @param  iterable  $records
 * @param  array  $joinings
 * @return array<int, TRelatedModel&object{pivot: TPivotModel}>
 */',
                'startLine' => 1436,
                'endLine' => 1447,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 1450,
                        'endLine' => 1450,
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
                        'startLine' => 1450,
                        'endLine' => 1450,
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
                                'startLine' => 1450,
                                'endLine' => 1450,
                                'startTokenPos' => 6062,
                                'startFilePos' => 44158,
                                'endTokenPos' => 6064,
                                'endFilePos' => 44162,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1450,
                        'endLine' => 1450,
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
                'startLine' => 1450,
                'endLine' => 1459,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'getRelationExistenceQueryForSelfJoin' => [
                'name' => 'getRelationExistenceQueryForSelfJoin',
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
                        'startLine' => 1469,
                        'endLine' => 1469,
                        'startColumn' => 58,
                        'endColumn' => 71,
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
                        'startLine' => 1469,
                        'endLine' => 1469,
                        'startColumn' => 74,
                        'endColumn' => 93,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 1469,
                                'endLine' => 1469,
                                'startTokenPos' => 6159,
                                'startFilePos' => 44937,
                                'endTokenPos' => 6161,
                                'endFilePos' => 44941,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1469,
                        'endLine' => 1469,
                        'startColumn' => 96,
                        'endColumn' => 111,
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
                'startLine' => 1469,
                'endLine' => 1480,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 1488,
                        'endLine' => 1488,
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
                'startLine' => 1488,
                'endLine' => 1491,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                        'startLine' => 1499,
                        'endLine' => 1499,
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
                'startLine' => 1499,
                'endLine' => 1516,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
                'startLine' => 1523,
                'endLine' => 1526,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'withTimestamps' => [
                'name' => 'withTimestamps',
                'parameters' => [
                    'createdAt' => [
                        'name' => 'createdAt',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1535,
                                'endLine' => 1535,
                                'startTokenPos' => 6434,
                                'startFilePos' => 46595,
                                'endTokenPos' => 6434,
                                'endFilePos' => 46598,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1535,
                        'endLine' => 1535,
                        'startColumn' => 36,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'updatedAt' => [
                        'name' => 'updatedAt',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1535,
                                'endLine' => 1535,
                                'startTokenPos' => 6441,
                                'startFilePos' => 46614,
                                'endTokenPos' => 6441,
                                'endFilePos' => 46617,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1535,
                        'endLine' => 1535,
                        'startColumn' => 55,
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
 * Specify that the pivot table has creation and update timestamps.
 *
 * @param  string|null|false  $createdAt
 * @param  string|null|false  $updatedAt
 * @return $this
 */',
                'startLine' => 1535,
                'endLine' => 1548,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'createdAt' => [
                'name' => 'createdAt',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the "created at" column.
 *
 * @return string
 */',
                'startLine' => 1555,
                'endLine' => 1558,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'updatedAt' => [
                'name' => 'updatedAt',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the "updated at" column.
 *
 * @return string
 */',
                'startLine' => 1565,
                'endLine' => 1568,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'getForeignPivotKeyName' => [
                'name' => 'getForeignPivotKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the foreign key for the relation.
 *
 * @return string
 */',
                'startLine' => 1575,
                'endLine' => 1578,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'getQualifiedForeignPivotKeyName' => [
                'name' => 'getQualifiedForeignPivotKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the fully-qualified foreign key for the relation.
 *
 * @return string
 */',
                'startLine' => 1585,
                'endLine' => 1588,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'getRelatedPivotKeyName' => [
                'name' => 'getRelatedPivotKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the "related key" for the relation.
 *
 * @return string
 */',
                'startLine' => 1595,
                'endLine' => 1598,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'getQualifiedRelatedPivotKeyName' => [
                'name' => 'getQualifiedRelatedPivotKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the fully-qualified "related key" for the relation.
 *
 * @return string
 */',
                'startLine' => 1605,
                'endLine' => 1608,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'getParentKeyName' => [
                'name' => 'getParentKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the parent key for the relationship.
 *
 * @return string
 */',
                'startLine' => 1615,
                'endLine' => 1618,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
 * Get the fully-qualified parent key name for the relation.
 *
 * @return string
 */',
                'startLine' => 1625,
                'endLine' => 1628,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'getRelatedKeyName' => [
                'name' => 'getRelatedKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the related key for the relationship.
 *
 * @return string
 */',
                'startLine' => 1635,
                'endLine' => 1638,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'getQualifiedRelatedKeyName' => [
                'name' => 'getQualifiedRelatedKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the fully-qualified related key name for the relation.
 *
 * @return string
 */',
                'startLine' => 1645,
                'endLine' => 1648,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'getTable' => [
                'name' => 'getTable',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the intermediate table for the relationship.
 *
 * @return string
 */',
                'startLine' => 1655,
                'endLine' => 1658,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
 * Get the relationship name for the relationship.
 *
 * @return string
 */',
                'startLine' => 1665,
                'endLine' => 1668,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'getPivotAccessor' => [
                'name' => 'getPivotAccessor',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the pivot accessor for this relationship.
 *
 * @return TAccessor
 */',
                'startLine' => 1675,
                'endLine' => 1678,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'getPivotColumns' => [
                'name' => 'getPivotColumns',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the pivot columns for this relationship.
 *
 * @return array
 */',
                'startLine' => 1685,
                'endLine' => 1688,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'aliasName' => null,
            ],
            'qualifyPivotColumn' => [
                'name' => 'qualifyPivotColumn',
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
                        'startLine' => 1696,
                        'endLine' => 1696,
                        'startColumn' => 40,
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
 * Qualify the given column name by the pivot table.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return string|\\Illuminate\\Contracts\\Database\\Query\\Expression
 */',
                'startLine' => 1696,
                'endLine' => 1705,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
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
