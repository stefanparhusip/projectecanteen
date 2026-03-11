<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/Concerns/SupportsInverseRelations.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Relations\Concerns\SupportsInverseRelations
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-a3b1bf009c0a4c6e796099ea41d03b005b7aa876fe90e570640cf63f7dff74fa-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/Concerns/SupportsInverseRelations.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
        'shortName' => 'SupportsInverseRelations',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 10,
        'endLine' => 157,
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
            'inverseRelationship' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'name' => 'inverseRelationship',
                'modifiers' => 2,
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 17,
                        'endLine' => 17,
                        'startTokenPos' => 44,
                        'startFilePos' => 394,
                        'endTokenPos' => 44,
                        'endFilePos' => 397,
                    ],
                ],
                'docComment' => '/**
 * The name of the inverse relationship.
 *
 * @var string|null
 */',
                'attributes' => [
                ],
                'startLine' => 17,
                'endLine' => 17,
                'startColumn' => 5,
                'endColumn' => 50,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'inverse' => [
                'name' => 'inverse',
                'parameters' => [
                    'relation' => [
                        'name' => 'relation',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 27,
                                'endLine' => 27,
                                'startTokenPos' => 62,
                                'startFilePos' => 676,
                                'endTokenPos' => 62,
                                'endFilePos' => 679,
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
                        'startLine' => 27,
                        'endLine' => 27,
                        'startColumn' => 29,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Instruct Eloquent to link the related models back to the parent after the relationship query has run.
 *
 * Alias of "chaperone".
 *
 * @param  string|null  $relation
 * @return $this
 */',
                'startLine' => 27,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'aliasName' => null,
            ],
            'chaperone' => [
                'name' => 'chaperone',
                'parameters' => [
                    'relation' => [
                        'name' => 'relation',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 38,
                                'endLine' => 38,
                                'startTokenPos' => 94,
                                'startFilePos' => 980,
                                'endTokenPos' => 94,
                                'endFilePos' => 983,
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
                        'startLine' => 38,
                        'endLine' => 38,
                        'startColumn' => 31,
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
 * Instruct Eloquent to link the related models back to the parent after the relationship query has run.
 *
 * @param  string|null  $relation
 * @return $this
 */',
                'startLine' => 38,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'aliasName' => null,
            ],
            'guessInverseRelation' => [
                'name' => 'guessInverseRelation',
                'parameters' => [
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
 * Guess the name of the inverse relationship.
 *
 * @return string|null
 */',
                'startLine' => 64,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
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
                'startLine' => 77,
                'endLine' => 86,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'aliasName' => null,
            ],
            'applyInverseRelationToCollection' => [
                'name' => 'applyInverseRelationToCollection',
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
                        'startLine' => 95,
                        'endLine' => 95,
                        'startColumn' => 57,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parent' => [
                        'name' => 'parent',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 95,
                                'endLine' => 95,
                                'startTokenPos' => 453,
                                'startFilePos' => 2960,
                                'endTokenPos' => 453,
                                'endFilePos' => 2963,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Illuminate\\Database\\Eloquent\\Model',
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
                        'startLine' => 95,
                        'endLine' => 95,
                        'startColumn' => 66,
                        'endColumn' => 86,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the inverse relation on all models in a collection.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Collection  $models
 * @param  \\Illuminate\\Database\\Eloquent\\Model|null  $parent
 * @return \\Illuminate\\Database\\Eloquent\\Collection
 */',
                'startLine' => 95,
                'endLine' => 104,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'aliasName' => null,
            ],
            'applyInverseRelationToModel' => [
                'name' => 'applyInverseRelationToModel',
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
                        'startLine' => 113,
                        'endLine' => 113,
                        'startColumn' => 52,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parent' => [
                        'name' => 'parent',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 113,
                                'endLine' => 113,
                                'startTokenPos' => 529,
                                'startFilePos' => 3509,
                                'endTokenPos' => 529,
                                'endFilePos' => 3512,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Illuminate\\Database\\Eloquent\\Model',
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
                        'startLine' => 113,
                        'endLine' => 113,
                        'startColumn' => 66,
                        'endColumn' => 86,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the inverse relation on a model.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $model
 * @param  \\Illuminate\\Database\\Eloquent\\Model|null  $parent
 * @return \\Illuminate\\Database\\Eloquent\\Model
 */',
                'startLine' => 113,
                'endLine' => 122,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'aliasName' => null,
            ],
            'getInverseRelationship' => [
                'name' => 'getInverseRelationship',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the inverse relationship.
 *
 * @return string|null
 */',
                'startLine' => 129,
                'endLine' => 132,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'aliasName' => null,
            ],
            'withoutInverse' => [
                'name' => 'withoutInverse',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove the chaperone / inverse relationship for this query.
 *
 * Alias of "withoutChaperone".
 *
 * @return $this
 */',
                'startLine' => 141,
                'endLine' => 144,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'aliasName' => null,
            ],
            'withoutChaperone' => [
                'name' => 'withoutChaperone',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove the chaperone / inverse relationship for this query.
 *
 * @return $this
 */',
                'startLine' => 151,
                'endLine' => 156,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsInverseRelations',
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
