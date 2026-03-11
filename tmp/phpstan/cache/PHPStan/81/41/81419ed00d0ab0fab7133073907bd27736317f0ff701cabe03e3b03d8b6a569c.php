<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Collection.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Collection
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-2f9d416134af815277d958b8690b03af7b79fb649ba33d3aef06b7cd0e81441d-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Collection',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Collection.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'name' => 'Illuminate\\Database\\Eloquent\\Collection',
        'shortName' => 'Collection',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @template TKey of array-key
 * @template TModel of \\Illuminate\\Database\\Eloquent\\Model
 *
 * @extends \\Illuminate\\Support\\Collection<TKey, TModel>
 */',
        'attributes' => [
        ],
        'startLine' => 19,
        'endLine' => 934,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Support\\Collection',
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Queue\\QueueableCollection',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\InteractsWithDictionary',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'find' => [
                'name' => 'find',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 32,
                        'endLine' => 32,
                        'startColumn' => 26,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 32,
                                'endLine' => 32,
                                'startTokenPos' => 82,
                                'startFilePos' => 978,
                                'endTokenPos' => 82,
                                'endFilePos' => 981,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 32,
                        'endLine' => 32,
                        'startColumn' => 32,
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
 * Find a model in the collection by key.
 *
 * @template TFindDefault
 *
 * @param  mixed  $key
 * @param  TFindDefault  $default
 * @return ($key is (\\Illuminate\\Contracts\\Support\\Arrayable<array-key, mixed>|array<mixed>) ? static : TModel|TFindDefault)
 */',
                'startLine' => 32,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'findOrFail' => [
                'name' => 'findOrFail',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 61,
                        'endLine' => 61,
                        'startColumn' => 32,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Find a model in the collection by key or throw an exception.
 *
 * @param  mixed  $key
 * @return TModel
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException
 */',
                'startLine' => 61,
                'endLine' => 82,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'load' => [
                'name' => 'load',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 90,
                        'endLine' => 90,
                        'startColumn' => 26,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Load a set of relationships onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @return $this
 */',
                'startLine' => 90,
                'endLine' => 103,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'loadAggregate' => [
                'name' => 'loadAggregate',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 113,
                        'endLine' => 113,
                        'startColumn' => 35,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 113,
                        'endLine' => 113,
                        'startColumn' => 47,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'function' => [
                        'name' => 'function',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 113,
                                'endLine' => 113,
                                'startTokenPos' => 511,
                                'startFilePos' => 3287,
                                'endTokenPos' => 511,
                                'endFilePos' => 3290,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 113,
                        'endLine' => 113,
                        'startColumn' => 56,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Load a set of aggregations over relationship\'s column onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @param  string  $column
 * @param  string|null  $function
 * @return $this
 */',
                'startLine' => 113,
                'endLine' => 140,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'loadCount' => [
                'name' => 'loadCount',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 148,
                        'endLine' => 148,
                        'startColumn' => 31,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Load a set of relationship counts onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @return $this
 */',
                'startLine' => 148,
                'endLine' => 151,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'loadMax' => [
                'name' => 'loadMax',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 160,
                        'endLine' => 160,
                        'startColumn' => 29,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 160,
                        'endLine' => 160,
                        'startColumn' => 41,
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
 * Load a set of relationship\'s max column values onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @param  string  $column
 * @return $this
 */',
                'startLine' => 160,
                'endLine' => 163,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'loadMin' => [
                'name' => 'loadMin',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 172,
                        'endLine' => 172,
                        'startColumn' => 29,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 172,
                        'endLine' => 172,
                        'startColumn' => 41,
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
 * Load a set of relationship\'s min column values onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @param  string  $column
 * @return $this
 */',
                'startLine' => 172,
                'endLine' => 175,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'loadSum' => [
                'name' => 'loadSum',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 184,
                        'endLine' => 184,
                        'startColumn' => 29,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 184,
                        'endLine' => 184,
                        'startColumn' => 41,
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
 * Load a set of relationship\'s column summations onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @param  string  $column
 * @return $this
 */',
                'startLine' => 184,
                'endLine' => 187,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'loadAvg' => [
                'name' => 'loadAvg',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 196,
                        'endLine' => 196,
                        'startColumn' => 29,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 196,
                        'endLine' => 196,
                        'startColumn' => 41,
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
 * Load a set of relationship\'s average column values onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @param  string  $column
 * @return $this
 */',
                'startLine' => 196,
                'endLine' => 199,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'loadExists' => [
                'name' => 'loadExists',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 32,
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
 * Load a set of related existences onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @return $this
 */',
                'startLine' => 207,
                'endLine' => 210,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'loadMissing' => [
                'name' => 'loadMissing',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 218,
                        'endLine' => 218,
                        'startColumn' => 33,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Load a set of relationships onto the collection if they are not already eager loaded.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @return $this
 */',
                'startLine' => 218,
                'endLine' => 249,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'loadMissingRelationshipChain' => [
                'name' => 'loadMissingRelationshipChain',
                'parameters' => [
                    'tuples' => [
                        'name' => 'tuples',
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
                        'startLine' => 257,
                        'endLine' => 257,
                        'startColumn' => 50,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Load a relationship path for models of the given type if it is not already eager loaded.
 *
 * @param  array<int, <string, class-string>>  $tuples
 * @return void
 */',
                'startLine' => 257,
                'endLine' => 278,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'loadMissingRelation' => [
                'name' => 'loadMissingRelation',
                'parameters' => [
                    'models' => [
                        'name' => 'models',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'self',
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
                        'startColumn' => 44,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'path' => [
                        'name' => 'path',
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
                        'startLine' => 287,
                        'endLine' => 287,
                        'startColumn' => 58,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Load a relationship path if it is not already eager loaded.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Collection<int, TModel>  $models
 * @param  array  $path
 * @return void
 */',
                'startLine' => 287,
                'endLine' => 310,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'loadMorph' => [
                'name' => 'loadMorph',
                'parameters' => [
                    'relation' => [
                        'name' => 'relation',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 319,
                        'endLine' => 319,
                        'startColumn' => 31,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 319,
                        'endLine' => 319,
                        'startColumn' => 42,
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
 * Load a set of relationships onto the mixed relationship collection.
 *
 * @param  string  $relation
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>  $relations
 * @return $this
 */',
                'startLine' => 319,
                'endLine' => 327,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'loadMorphCount' => [
                'name' => 'loadMorphCount',
                'parameters' => [
                    'relation' => [
                        'name' => 'relation',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 336,
                        'endLine' => 336,
                        'startColumn' => 36,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 336,
                        'endLine' => 336,
                        'startColumn' => 47,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Load a set of relationship counts onto the mixed relationship collection.
 *
 * @param  string  $relation
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>  $relations
 * @return $this
 */',
                'startLine' => 336,
                'endLine' => 344,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'contains' => [
                'name' => 'contains',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
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
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 354,
                                'endLine' => 354,
                                'startTokenPos' => 1731,
                                'startFilePos' => 11051,
                                'endTokenPos' => 1731,
                                'endFilePos' => 11054,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 354,
                        'endLine' => 354,
                        'startColumn' => 36,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 354,
                                'endLine' => 354,
                                'startTokenPos' => 1738,
                                'startFilePos' => 11066,
                                'endTokenPos' => 1738,
                                'endFilePos' => 11069,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 354,
                        'endLine' => 354,
                        'startColumn' => 54,
                        'endColumn' => 66,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a key exists in the collection.
 *
 * @param  (callable(TModel, TKey): bool)|TModel|string|int  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return bool
 */',
                'startLine' => 354,
                'endLine' => 365,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'doesntContain' => [
                'name' => 'doesntContain',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 375,
                        'endLine' => 375,
                        'startColumn' => 35,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 375,
                                'endLine' => 375,
                                'startTokenPos' => 1861,
                                'startFilePos' => 11696,
                                'endTokenPos' => 1861,
                                'endFilePos' => 11699,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 375,
                        'endLine' => 375,
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
                                'startLine' => 375,
                                'endLine' => 375,
                                'startTokenPos' => 1868,
                                'startFilePos' => 11711,
                                'endTokenPos' => 1868,
                                'endFilePos' => 11714,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 375,
                        'endLine' => 375,
                        'startColumn' => 59,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a key does not exist in the collection.
 *
 * @param  (callable(TModel, TKey): bool)|TModel|string|int  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return bool
 */',
                'startLine' => 375,
                'endLine' => 378,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'modelKeys' => [
                'name' => 'modelKeys',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the array of primary keys.
 *
 * @return array<int, array-key>
 */',
                'startLine' => 385,
                'endLine' => 388,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'merge' => [
                'name' => 'merge',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 396,
                        'endLine' => 396,
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
 * Merge the collection with the given items.
 *
 * @param  iterable<array-key, TModel>  $items
 * @return static
 */',
                'startLine' => 396,
                'endLine' => 405,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'map' => [
                'name' => 'map',
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
                        'startLine' => 415,
                        'endLine' => 415,
                        'startColumn' => 25,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run a map over each of the items.
 *
 * @template TMapValue
 *
 * @param  callable(TModel, TKey): TMapValue  $callback
 * @return \\Illuminate\\Support\\Collection<TKey, TMapValue>|static<TKey, TMapValue>
 */',
                'startLine' => 415,
                'endLine' => 420,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'mapWithKeys' => [
                'name' => 'mapWithKeys',
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
                        'startLine' => 433,
                        'endLine' => 433,
                        'startColumn' => 33,
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
 * Run an associative map over each of the items.
 *
 * The callback should return an associative array with a single key / value pair.
 *
 * @template TMapWithKeysKey of array-key
 * @template TMapWithKeysValue
 *
 * @param  callable(TModel, TKey): array<TMapWithKeysKey, TMapWithKeysValue>  $callback
 * @return \\Illuminate\\Support\\Collection<TMapWithKeysKey, TMapWithKeysValue>|static<TMapWithKeysKey, TMapWithKeysValue>
 */',
                'startLine' => 433,
                'endLine' => 438,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'fresh' => [
                'name' => 'fresh',
                'parameters' => [
                    'with' => [
                        'name' => 'with',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 446,
                                'endLine' => 446,
                                'startTokenPos' => 2143,
                                'startFilePos' => 13771,
                                'endTokenPos' => 2144,
                                'endFilePos' => 13772,
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
                        'startColumn' => 27,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Reload a fresh model instance from the database for all the entities.
 *
 * @param  array<array-key, string>|string  $with
 * @return static
 */',
                'startLine' => 446,
                'endLine' => 462,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'diff' => [
                'name' => 'diff',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 470,
                        'endLine' => 470,
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
 * Diff the collection with the given items.
 *
 * @param  iterable<array-key, TModel>  $items
 * @return static
 */',
                'startLine' => 470,
                'endLine' => 483,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'intersect' => [
                'name' => 'intersect',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 491,
                        'endLine' => 491,
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
 * Intersect the collection with the given items.
 *
 * @param  iterable<array-key, TModel>  $items
 * @return static
 */',
                'startLine' => 491,
                'endLine' => 508,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'unique' => [
                'name' => 'unique',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 517,
                                'endLine' => 517,
                                'startTokenPos' => 2507,
                                'startFilePos' => 15575,
                                'endTokenPos' => 2507,
                                'endFilePos' => 15578,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 517,
                        'endLine' => 517,
                        'startColumn' => 28,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'strict' => [
                        'name' => 'strict',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 517,
                                'endLine' => 517,
                                'startTokenPos' => 2514,
                                'startFilePos' => 15591,
                                'endTokenPos' => 2514,
                                'endFilePos' => 15595,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 517,
                        'endLine' => 517,
                        'startColumn' => 41,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Return only unique items from the collection.
 *
 * @param  (callable(TModel, TKey): mixed)|string|null  $key
 * @param  bool  $strict
 * @return static
 */',
                'startLine' => 517,
                'endLine' => 524,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'only' => [
                'name' => 'only',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 532,
                        'endLine' => 532,
                        'startColumn' => 26,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns only the models from the collection with the specified keys.
 *
 * @param  array<array-key, mixed>|null  $keys
 * @return static
 */',
                'startLine' => 532,
                'endLine' => 541,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'except' => [
                'name' => 'except',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 549,
                        'endLine' => 549,
                        'startColumn' => 28,
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
 * Returns all models in the collection except the models with specified keys.
 *
 * @param  array<array-key, mixed>|null  $keys
 * @return static
 */',
                'startLine' => 549,
                'endLine' => 558,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'makeHidden' => [
                'name' => 'makeHidden',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 566,
                        'endLine' => 566,
                        'startColumn' => 32,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Make the given, typically visible, attributes hidden across the entire collection.
 *
 * @param  array<array-key, string>|string  $attributes
 * @return $this
 */',
                'startLine' => 566,
                'endLine' => 569,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'mergeHidden' => [
                'name' => 'mergeHidden',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 577,
                        'endLine' => 577,
                        'startColumn' => 33,
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
 * Merge the given, typically visible, attributes hidden across the entire collection.
 *
 * @param  array<array-key, string>|string  $attributes
 * @return $this
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
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'setHidden' => [
                'name' => 'setHidden',
                'parameters' => [
                    'hidden' => [
                        'name' => 'hidden',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 588,
                        'endLine' => 588,
                        'startColumn' => 31,
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
 * Set the hidden attributes across the entire collection.
 *
 * @param  array<int, string>  $hidden
 * @return $this
 */',
                'startLine' => 588,
                'endLine' => 591,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'makeVisible' => [
                'name' => 'makeVisible',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 599,
                        'endLine' => 599,
                        'startColumn' => 33,
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
 * Make the given, typically hidden, attributes visible across the entire collection.
 *
 * @param  array<array-key, string>|string  $attributes
 * @return $this
 */',
                'startLine' => 599,
                'endLine' => 602,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'mergeVisible' => [
                'name' => 'mergeVisible',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 610,
                        'endLine' => 610,
                        'startColumn' => 34,
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
 * Merge the given, typically hidden, attributes visible across the entire collection.
 *
 * @param  array<array-key, string>|string  $attributes
 * @return $this
 */',
                'startLine' => 610,
                'endLine' => 613,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'setVisible' => [
                'name' => 'setVisible',
                'parameters' => [
                    'visible' => [
                        'name' => 'visible',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 621,
                        'endLine' => 621,
                        'startColumn' => 32,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the visible attributes across the entire collection.
 *
 * @param  array<int, string>  $visible
 * @return $this
 */',
                'startLine' => 621,
                'endLine' => 624,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'append' => [
                'name' => 'append',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 632,
                        'endLine' => 632,
                        'startColumn' => 28,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Append an attribute across the entire collection.
 *
 * @param  array<array-key, string>|string  $attributes
 * @return $this
 */',
                'startLine' => 632,
                'endLine' => 635,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'setAppends' => [
                'name' => 'setAppends',
                'parameters' => [
                    'appends' => [
                        'name' => 'appends',
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
                        'startLine' => 643,
                        'endLine' => 643,
                        'startColumn' => 32,
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
 * Sets the appends on every element of the collection, overwriting the existing appends for each.
 *
 * @param  array<array-key, mixed>  $appends
 * @return $this
 */',
                'startLine' => 643,
                'endLine' => 646,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'withoutAppends' => [
                'name' => 'withoutAppends',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove appended properties from every element in the collection.
 *
 * @return $this
 */',
                'startLine' => 653,
                'endLine' => 656,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'getDictionary' => [
                'name' => 'getDictionary',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 664,
                                'endLine' => 664,
                                'startTokenPos' => 2991,
                                'startFilePos' => 19435,
                                'endTokenPos' => 2991,
                                'endFilePos' => 19438,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 664,
                        'endLine' => 664,
                        'startColumn' => 35,
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
 * Get a dictionary keyed by primary keys.
 *
 * @param  iterable<array-key, TModel>|null  $items
 * @return array<array-key, TModel>
 */',
                'startLine' => 664,
                'endLine' => 675,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'countBy' => [
                'name' => 'countBy',
                'parameters' => [
                    'countBy' => [
                        'name' => 'countBy',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 687,
                                'endLine' => 687,
                                'startTokenPos' => 3082,
                                'startFilePos' => 19952,
                                'endTokenPos' => 3082,
                                'endFilePos' => 19955,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 687,
                        'endLine' => 687,
                        'startColumn' => 29,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
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
 * {@inheritDoc}
 *
 * @return \\Illuminate\\Support\\Collection<array-key, int>
 */',
                'startLine' => 686,
                'endLine' => 690,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'collapse' => [
                'name' => 'collapse',
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
 * {@inheritDoc}
 *
 * @return \\Illuminate\\Support\\Collection<int, mixed>
 */',
                'startLine' => 697,
                'endLine' => 701,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'flatten' => [
                'name' => 'flatten',
                'parameters' => [
                    'depth' => [
                        'name' => 'depth',
                        'default' => [
                            'code' => 'INF',
                            'attributes' => [
                                'startLine' => 709,
                                'endLine' => 709,
                                'startTokenPos' => 3150,
                                'startFilePos' => 20385,
                                'endTokenPos' => 3150,
                                'endFilePos' => 20387,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 709,
                        'endLine' => 709,
                        'startColumn' => 29,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => true,
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
 * {@inheritDoc}
 *
 * @return \\Illuminate\\Support\\Collection<int, mixed>
 */',
                'startLine' => 708,
                'endLine' => 712,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'flip' => [
                'name' => 'flip',
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
 * {@inheritDoc}
 *
 * @return \\Illuminate\\Support\\Collection<TModel, TKey>
 */',
                'startLine' => 719,
                'endLine' => 723,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'keys' => [
                'name' => 'keys',
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
 * {@inheritDoc}
 *
 * @return \\Illuminate\\Support\\Collection<int, TKey>
 */',
                'startLine' => 730,
                'endLine' => 734,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'pad' => [
                'name' => 'pad',
                'parameters' => [
                    'size' => [
                        'name' => 'size',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 744,
                        'endLine' => 744,
                        'startColumn' => 25,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 744,
                        'endLine' => 744,
                        'startColumn' => 32,
                        'endColumn' => 37,
                        'parameterIndex' => 1,
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
 * {@inheritDoc}
 *
 * @template TPadValue
 *
 * @return \\Illuminate\\Support\\Collection<int, TModel|TPadValue>
 */',
                'startLine' => 743,
                'endLine' => 747,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'partition' => [
                'name' => 'partition',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 755,
                        'endLine' => 755,
                        'startColumn' => 31,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 755,
                                'endLine' => 755,
                                'startTokenPos' => 3291,
                                'startFilePos' => 21307,
                                'endTokenPos' => 3291,
                                'endFilePos' => 21310,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 755,
                        'endLine' => 755,
                        'startColumn' => 37,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 755,
                                'endLine' => 755,
                                'startTokenPos' => 3298,
                                'startFilePos' => 21322,
                                'endTokenPos' => 3298,
                                'endFilePos' => 21325,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 755,
                        'endLine' => 755,
                        'startColumn' => 55,
                        'endColumn' => 67,
                        'parameterIndex' => 2,
                        'isOptional' => true,
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
 * {@inheritDoc}
 *
 * @return \\Illuminate\\Support\\Collection<int<0, 1>, static<TKey, TModel>>
 */',
                'startLine' => 754,
                'endLine' => 758,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'pluck' => [
                'name' => 'pluck',
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
                        'startLine' => 766,
                        'endLine' => 766,
                        'startColumn' => 27,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 766,
                                'endLine' => 766,
                                'startTokenPos' => 3341,
                                'startFilePos' => 21571,
                                'endTokenPos' => 3341,
                                'endFilePos' => 21574,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 766,
                        'endLine' => 766,
                        'startColumn' => 35,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * {@inheritDoc}
 *
 * @return \\Illuminate\\Support\\Collection<array-key, mixed>
 */',
                'startLine' => 765,
                'endLine' => 769,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'zip' => [
                'name' => 'zip',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 779,
                        'endLine' => 779,
                        'startColumn' => 25,
                        'endColumn' => 30,
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
 * {@inheritDoc}
 *
 * @template TZipValue
 *
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Support\\Collection<int, TModel|TZipValue>>
 */',
                'startLine' => 778,
                'endLine' => 782,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'duplicateComparator' => [
                'name' => 'duplicateComparator',
                'parameters' => [
                    'strict' => [
                        'name' => 'strict',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 789,
                        'endLine' => 789,
                        'startColumn' => 44,
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
 * Get the comparison function to detect duplicates.
 *
 * @return callable(TModel, TModel): bool
 */',
                'startLine' => 789,
                'endLine' => 792,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'withRelationshipAutoloading' => [
                'name' => 'withRelationshipAutoloading',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Enable relationship autoloading for all models in this collection.
 *
 * @return $this
 */',
                'startLine' => 799,
                'endLine' => 810,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'getQueueableClass' => [
                'name' => 'getQueueableClass',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the type of the entities being queued.
 *
 * @return string|null
 *
 * @throws \\LogicException
 */',
                'startLine' => 819,
                'endLine' => 834,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'getQueueableModelClass' => [
                'name' => 'getQueueableModelClass',
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
                        'startLine' => 842,
                        'endLine' => 842,
                        'startColumn' => 47,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the queueable class name for the given model.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $model
 * @return string
 */',
                'startLine' => 842,
                'endLine' => 847,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'getQueueableIds' => [
                'name' => 'getQueueableIds',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the identifiers for all of the entities.
 *
 * @return array<int, mixed>
 */',
                'startLine' => 854,
                'endLine' => 863,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'getQueueableRelations' => [
                'name' => 'getQueueableRelations',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the relationships of the entities being queued.
 *
 * @return array<int, string>
 */',
                'startLine' => 870,
                'endLine' => 885,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'getQueueableConnection' => [
                'name' => 'getQueueableConnection',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the connection of the entities being queued.
 *
 * @return string|null
 *
 * @throws \\LogicException
 */',
                'startLine' => 894,
                'endLine' => 909,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'aliasName' => null,
            ],
            'toQuery' => [
                'name' => 'toQuery',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the Eloquent query builder from the collection.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Builder<TModel>
 *
 * @throws \\LogicException
 */',
                'startLine' => 918,
                'endLine' => 933,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
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
