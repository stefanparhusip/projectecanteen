<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/HasOne.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Relations\HasOne
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-c8edc86b08dd2e34876734b809353e626d2c035b422546d8ca500019ae83ae5a-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/HasOne.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
        'shortName' => 'HasOne',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @template TRelatedModel of \\Illuminate\\Database\\Eloquent\\Model
 * @template TDeclaringModel of \\Illuminate\\Database\\Eloquent\\Model
 *
 * @extends \\Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany<TRelatedModel, TDeclaringModel, ?TRelatedModel>
 */',
        'attributes' => [
        ],
        'startLine' => 20,
        'endLine' => 118,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Database\\Eloquent\\SupportsPartialRelations',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\ComparesRelatedModels',
            1 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
            2 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'getResults' => [
                'name' => 'getResults',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 25,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
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
                        'startLine' => 35,
                        'endLine' => 35,
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
                        'startLine' => 35,
                        'endLine' => 35,
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
                'startLine' => 35,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
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
                        'startLine' => 45,
                        'endLine' => 45,
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
                        'startLine' => 45,
                        'endLine' => 45,
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
                        'startLine' => 45,
                        'endLine' => 45,
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
                'startLine' => 45,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
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
                        'startLine' => 51,
                        'endLine' => 51,
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
                        'startLine' => 51,
                        'endLine' => 51,
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
                                'startLine' => 51,
                                'endLine' => 51,
                                'startTokenPos' => 262,
                                'startFilePos' => 1736,
                                'endTokenPos' => 264,
                                'endFilePos' => 1740,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 51,
                        'endLine' => 51,
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
                'startLine' => 51,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'aliasName' => null,
            ],
            'addOneOfManySubQueryConstraints' => [
                'name' => 'addOneOfManySubQueryConstraints',
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
                        'startLine' => 68,
                        'endLine' => 68,
                        'startColumn' => 53,
                        'endColumn' => 66,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 68,
                                'endLine' => 68,
                                'startTokenPos' => 326,
                                'startFilePos' => 2286,
                                'endTokenPos' => 326,
                                'endFilePos' => 2289,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 68,
                        'endLine' => 68,
                        'startColumn' => 69,
                        'endColumn' => 82,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'aggregate' => [
                        'name' => 'aggregate',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 68,
                                'endLine' => 68,
                                'startTokenPos' => 333,
                                'startFilePos' => 2305,
                                'endTokenPos' => 333,
                                'endFilePos' => 2308,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 68,
                        'endLine' => 68,
                        'startColumn' => 85,
                        'endColumn' => 101,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add constraints for inner join subselect for one of many relationships.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>  $query
 * @param  string|null  $column
 * @param  string|null  $aggregate
 * @return void
 */',
                'startLine' => 68,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'aliasName' => null,
            ],
            'getOneOfManySubQuerySelectColumns' => [
                'name' => 'getOneOfManySubQuerySelectColumns',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the columns that should be selected by the one of many subquery.
 *
 * @return array|string
 */',
                'startLine' => 78,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'aliasName' => null,
            ],
            'addOneOfManyJoinSubQueryConstraints' => [
                'name' => 'addOneOfManyJoinSubQueryConstraints',
                'parameters' => [
                    'join' => [
                        'name' => 'join',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Query\\JoinClause',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 89,
                        'endLine' => 89,
                        'startColumn' => 57,
                        'endColumn' => 72,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add join query constraints for one of many relationships.
 *
 * @param  \\Illuminate\\Database\\Query\\JoinClause  $join
 * @return void
 */',
                'startLine' => 89,
                'endLine' => 92,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
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
                        'startLine' => 100,
                        'endLine' => 100,
                        'startColumn' => 43,
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
 * Make a new related instance for the given model.
 *
 * @param  TDeclaringModel  $parent
 * @return TRelatedModel
 */',
                'startLine' => 100,
                'endLine' => 106,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
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
                        'startLine' => 114,
                        'endLine' => 114,
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
                'startLine' => 114,
                'endLine' => 117,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
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
