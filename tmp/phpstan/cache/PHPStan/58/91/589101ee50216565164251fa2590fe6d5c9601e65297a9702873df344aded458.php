<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Concerns/BuildsWhereDateClauses.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Concerns\BuildsWhereDateClauses
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-63f2222578dc1dd4ba6e051e7136c277c0266eeba601cb7cd919ee9af964b984-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Concerns/BuildsWhereDateClauses.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Concerns',
        'name' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
        'shortName' => 'BuildsWhereDateClauses',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 249,
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
        ],
        'immediateMethods' => [
            'wherePast' => [
                'name' => 'wherePast',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 16,
                        'endLine' => 16,
                        'startColumn' => 31,
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
 * Add a where clause to determine if a "date" column is in the past to the query.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 16,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'whereNowOrPast' => [
                'name' => 'whereNowOrPast',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 27,
                        'endLine' => 27,
                        'startColumn' => 36,
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
 * Add a where clause to determine if a "date" column is in the past or now to the query.
 *
 * @param  array|string  $columns
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
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'orWherePast' => [
                'name' => 'orWherePast',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 38,
                        'endLine' => 38,
                        'startColumn' => 33,
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
 * Add an "or where" clause to determine if a "date" column is in the past to the query.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 38,
                'endLine' => 41,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'orWhereNowOrPast' => [
                'name' => 'orWhereNowOrPast',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 49,
                        'endLine' => 49,
                        'startColumn' => 38,
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
 * Add a where clause to determine if a "date" column is in the past or now to the query.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 49,
                'endLine' => 52,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'whereFuture' => [
                'name' => 'whereFuture',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 60,
                        'endLine' => 60,
                        'startColumn' => 33,
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
 * Add a where clause to determine if a "date" column is in the future to the query.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 60,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'whereNowOrFuture' => [
                'name' => 'whereNowOrFuture',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 71,
                        'endLine' => 71,
                        'startColumn' => 38,
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
 * Add a where clause to determine if a "date" column is in the future or now to the query.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 71,
                'endLine' => 74,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'orWhereFuture' => [
                'name' => 'orWhereFuture',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 82,
                        'endLine' => 82,
                        'startColumn' => 35,
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
 * Add an "or where" clause to determine if a "date" column is in the future to the query.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 82,
                'endLine' => 85,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'orWhereNowOrFuture' => [
                'name' => 'orWhereNowOrFuture',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 93,
                        'endLine' => 93,
                        'startColumn' => 40,
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
 * Add an "or where" clause to determine if a "date" column is in the future or now to the query.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 93,
                'endLine' => 96,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'wherePastOrFuture' => [
                'name' => 'wherePastOrFuture',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 106,
                        'endLine' => 106,
                        'startColumn' => 42,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 106,
                        'endLine' => 106,
                        'startColumn' => 52,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 106,
                        'endLine' => 106,
                        'startColumn' => 63,
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
 * Add an "where" clause to determine if a "date" column is in the past or future.
 *
 * @param  array|string  $columns
 * @param  string  $operator
 * @param  string  $boolean
 * @return $this
 */',
                'startLine' => 106,
                'endLine' => 118,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'whereToday' => [
                'name' => 'whereToday',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 127,
                        'endLine' => 127,
                        'startColumn' => 32,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => [
                            'code' => '\'and\'',
                            'attributes' => [
                                'startLine' => 127,
                                'endLine' => 127,
                                'startTokenPos' => 383,
                                'startFilePos' => 3341,
                                'endTokenPos' => 383,
                                'endFilePos' => 3345,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 127,
                        'endLine' => 127,
                        'startColumn' => 42,
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
 * Add a "where date" clause to determine if a "date" column is today to the query.
 *
 * @param  array|string  $columns
 * @param  string  $boolean
 * @return $this
 */',
                'startLine' => 127,
                'endLine' => 130,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'whereBeforeToday' => [
                'name' => 'whereBeforeToday',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 138,
                        'endLine' => 138,
                        'startColumn' => 38,
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
 * Add a "where date" clause to determine if a "date" column is before today.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 138,
                'endLine' => 141,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'whereTodayOrBefore' => [
                'name' => 'whereTodayOrBefore',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 149,
                        'endLine' => 149,
                        'startColumn' => 40,
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
 * Add a "where date" clause to determine if a "date" column is today or before to the query.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 149,
                'endLine' => 152,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'whereAfterToday' => [
                'name' => 'whereAfterToday',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 160,
                        'endLine' => 160,
                        'startColumn' => 37,
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
 * Add a "where date" clause to determine if a "date" column is after today.
 *
 * @param  array|string  $columns
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
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'whereTodayOrAfter' => [
                'name' => 'whereTodayOrAfter',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 171,
                        'endLine' => 171,
                        'startColumn' => 39,
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
 * Add a "where date" clause to determine if a "date" column is today or after to the query.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 171,
                'endLine' => 174,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'orWhereToday' => [
                'name' => 'orWhereToday',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 182,
                        'endLine' => 182,
                        'startColumn' => 34,
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
 * Add an "or where date" clause to determine if a "date" column is today to the query.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 182,
                'endLine' => 185,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'orWhereBeforeToday' => [
                'name' => 'orWhereBeforeToday',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 193,
                        'endLine' => 193,
                        'startColumn' => 40,
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
 * Add an "or where date" clause to determine if a "date" column is before today.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 193,
                'endLine' => 196,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'orWhereTodayOrBefore' => [
                'name' => 'orWhereTodayOrBefore',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 204,
                        'endLine' => 204,
                        'startColumn' => 42,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add an "or where date" clause to determine if a "date" column is today or before to the query.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 204,
                'endLine' => 207,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'orWhereAfterToday' => [
                'name' => 'orWhereAfterToday',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 215,
                        'endLine' => 215,
                        'startColumn' => 39,
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
 * Add an "or where date" clause to determine if a "date" column is after today.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 215,
                'endLine' => 218,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'orWhereTodayOrAfter' => [
                'name' => 'orWhereTodayOrAfter',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 226,
                        'endLine' => 226,
                        'startColumn' => 41,
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
 * Add an "or where date" clause to determine if a "date" column is today or after to the query.
 *
 * @param  array|string  $columns
 * @return $this
 */',
                'startLine' => 226,
                'endLine' => 229,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'aliasName' => null,
            ],
            'whereTodayBeforeOrAfter' => [
                'name' => 'whereTodayBeforeOrAfter',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 239,
                        'endLine' => 239,
                        'startColumn' => 48,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 239,
                        'endLine' => 239,
                        'startColumn' => 58,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 239,
                        'endLine' => 239,
                        'startColumn' => 69,
                        'endColumn' => 76,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a "where date" clause to determine if a "date" column is today or after to the query.
 *
 * @param  array|string  $columns
 * @param  string  $operator
 * @param  string  $boolean
 * @return $this
 */',
                'startLine' => 239,
                'endLine' => 248,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'implementingClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
                'currentClassName' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
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
