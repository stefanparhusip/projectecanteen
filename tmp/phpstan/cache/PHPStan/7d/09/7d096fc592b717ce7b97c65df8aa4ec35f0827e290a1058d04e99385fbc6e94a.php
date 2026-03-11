<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Builder.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Builder
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-be1d0214d9293cf08ad17fdcf7ccabbe55eaf1574097b4cbd8d39bc4f3c44e7f-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'name' => 'Illuminate\\Database\\Eloquent\\Builder',
        'shortName' => 'Builder',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @template TModel of \\Illuminate\\Database\\Eloquent\\Model
 *
 * @property-read HigherOrderBuilderProxy|$this $orWhere
 * @property-read HigherOrderBuilderProxy|$this $whereNot
 * @property-read HigherOrderBuilderProxy|$this $orWhereNot
 *
 * @mixin \\Illuminate\\Database\\Query\\Builder
 */',
        'attributes' => [
        ],
        'startLine' => 35,
        'endLine' => 2333,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            1 => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'query' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'name' => 'query',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The base query builder instance.
 *
 * @var \\Illuminate\\Database\\Query\\Builder
 */',
                'attributes' => [
                ],
                'startLine' => 47,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'model' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'name' => 'model',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The model being queried.
 *
 * @var TModel
 */',
                'attributes' => [
                ],
                'startLine' => 54,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'pendingAttributes' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'name' => 'pendingAttributes',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 61,
                        'endLine' => 61,
                        'startTokenPos' => 178,
                        'startFilePos' => 1792,
                        'endTokenPos' => 179,
                        'endFilePos' => 1793,
                    ],
                ],
                'docComment' => '/**
 * The attributes that should be added to new models created by this builder.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 61,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 35,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'eagerLoad' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'name' => 'eagerLoad',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 68,
                        'endLine' => 68,
                        'startTokenPos' => 190,
                        'startFilePos' => 1919,
                        'endTokenPos' => 191,
                        'endFilePos' => 1920,
                    ],
                ],
                'docComment' => '/**
 * The relationships that should be eager loaded.
 *
 * @var array
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
            'macros' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'name' => 'macros',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 75,
                        'endLine' => 75,
                        'startTokenPos' => 204,
                        'startFilePos' => 2050,
                        'endTokenPos' => 205,
                        'endFilePos' => 2051,
                    ],
                ],
                'docComment' => '/**
 * All of the globally registered builder macros.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 75,
                'endLine' => 75,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'localMacros' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'name' => 'localMacros',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 82,
                        'endLine' => 82,
                        'startTokenPos' => 216,
                        'startFilePos' => 2178,
                        'endTokenPos' => 217,
                        'endFilePos' => 2179,
                    ],
                ],
                'docComment' => '/**
 * All of the locally registered builder macros.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 82,
                'endLine' => 82,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'onDelete' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'name' => 'onDelete',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * A replacement for the typical delete function.
 *
 * @var \\Closure
 */',
                'attributes' => [
                ],
                'startLine' => 89,
                'endLine' => 89,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'propertyPassthru' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'name' => 'propertyPassthru',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'from\']',
                    'attributes' => [
                        'startLine' => 96,
                        'endLine' => 98,
                        'startTokenPos' => 235,
                        'startFilePos' => 2451,
                        'endTokenPos' => 240,
                        'endFilePos' => 2473,
                    ],
                ],
                'docComment' => '/**
 * The properties that should be returned from query builder.
 *
 * @var string[]
 */',
                'attributes' => [
                ],
                'startLine' => 96,
                'endLine' => 98,
                'startColumn' => 5,
                'endColumn' => 6,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'passthru' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'name' => 'passthru',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'aggregate\', \'average\', \'avg\', \'count\', \'dd\', \'ddrawsql\', \'doesntexist\', \'doesntexistor\', \'dump\', \'dumprawsql\', \'exists\', \'existsor\', \'explain\', \'getbindings\', \'getconnection\', \'getcountforpagination\', \'getgrammar\', \'getrawbindings\', \'implode\', \'insert\', \'insertgetid\', \'insertorignore\', \'insertusing\', \'insertorignoreusing\', \'max\', \'min\', \'numericaggregate\', \'raw\', \'rawvalue\', \'sum\', \'tosql\', \'torawsql\']',
                    'attributes' => [
                        'startLine' => 105,
                        'endLine' => 138,
                        'startTokenPos' => 251,
                        'startFilePos' => 2610,
                        'endTokenPos' => 349,
                        'endFilePos' => 3279,
                    ],
                ],
                'docComment' => '/**
 * The methods that should be returned from query builder.
 *
 * @var string[]
 */',
                'attributes' => [
                ],
                'startLine' => 105,
                'endLine' => 138,
                'startColumn' => 5,
                'endColumn' => 6,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'scopes' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'name' => 'scopes',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 145,
                        'endLine' => 145,
                        'startTokenPos' => 360,
                        'startFilePos' => 3378,
                        'endTokenPos' => 361,
                        'endFilePos' => 3379,
                    ],
                ],
                'docComment' => '/**
 * Applied global scopes.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 145,
                'endLine' => 145,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'removedScopes' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'name' => 'removedScopes',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 152,
                        'endLine' => 152,
                        'startTokenPos' => 372,
                        'startFilePos' => 3485,
                        'endTokenPos' => 373,
                        'endFilePos' => 3486,
                    ],
                ],
                'docComment' => '/**
 * Removed global scopes.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 152,
                'endLine' => 152,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'afterQueryCallbacks' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'name' => 'afterQueryCallbacks',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 159,
                        'endLine' => 159,
                        'startTokenPos' => 384,
                        'startFilePos' => 3653,
                        'endTokenPos' => 385,
                        'endFilePos' => 3654,
                    ],
                ],
                'docComment' => '/**
 * The callbacks that should be invoked after retrieving data from the database.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 159,
                'endLine' => 159,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'onCloneCallbacks' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'name' => 'onCloneCallbacks',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 166,
                        'endLine' => 166,
                        'startTokenPos' => 396,
                        'startFilePos' => 3787,
                        'endTokenPos' => 397,
                        'endFilePos' => 3788,
                    ],
                ],
                'docComment' => '/**
 * The callbacks that should be invoked on clone.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 166,
                'endLine' => 166,
                'startColumn' => 5,
                'endColumn' => 37,
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
                                'name' => 'Illuminate\\Database\\Query\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 173,
                        'endLine' => 173,
                        'startColumn' => 33,
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
 * Create a new Eloquent query builder instance.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 */',
                'startLine' => 173,
                'endLine' => 176,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'make' => [
                'name' => 'make',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 184,
                                'endLine' => 184,
                                'startTokenPos' => 440,
                                'startFilePos' => 4200,
                                'endTokenPos' => 441,
                                'endFilePos' => 4201,
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
                        'startLine' => 184,
                        'endLine' => 184,
                        'startColumn' => 26,
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
 * Create and return an un-saved model instance.
 *
 * @param  array  $attributes
 * @return TModel
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
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'withGlobalScope' => [
                'name' => 'withGlobalScope',
                'parameters' => [
                    'identifier' => [
                        'name' => 'identifier',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 196,
                        'endLine' => 196,
                        'startColumn' => 37,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'scope' => [
                        'name' => 'scope',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 196,
                        'endLine' => 196,
                        'startColumn' => 50,
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
 * Register a new global scope.
 *
 * @param  string  $identifier
 * @param  \\Illuminate\\Database\\Eloquent\\Scope|\\Closure  $scope
 * @return $this
 */',
                'startLine' => 196,
                'endLine' => 205,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'withoutGlobalScope' => [
                'name' => 'withoutGlobalScope',
                'parameters' => [
                    'scope' => [
                        'name' => 'scope',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 213,
                        'endLine' => 213,
                        'startColumn' => 40,
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
 * Remove a registered global scope.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Scope|string  $scope
 * @return $this
 */',
                'startLine' => 213,
                'endLine' => 224,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'withoutGlobalScopes' => [
                'name' => 'withoutGlobalScopes',
                'parameters' => [
                    'scopes' => [
                        'name' => 'scopes',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 232,
                                'endLine' => 232,
                                'startTokenPos' => 599,
                                'startFilePos' => 5274,
                                'endTokenPos' => 599,
                                'endFilePos' => 5277,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'array',
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
                        'startLine' => 232,
                        'endLine' => 232,
                        'startColumn' => 41,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove all or passed registered global scopes.
 *
 * @param  array|null  $scopes
 * @return $this
 */',
                'startLine' => 232,
                'endLine' => 243,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'withoutGlobalScopesExcept' => [
                'name' => 'withoutGlobalScopesExcept',
                'parameters' => [
                    'scopes' => [
                        'name' => 'scopes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 251,
                                'endLine' => 251,
                                'startTokenPos' => 674,
                                'startFilePos' => 5699,
                                'endTokenPos' => 675,
                                'endFilePos' => 5700,
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
                        'startLine' => 251,
                        'endLine' => 251,
                        'startColumn' => 47,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove all global scopes except the given scopes.
 *
 * @param  array  $scopes
 * @return $this
 */',
                'startLine' => 251,
                'endLine' => 258,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'removedScopes' => [
                'name' => 'removedScopes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an array of global scopes that were removed from the query.
 *
 * @return array
 */',
                'startLine' => 265,
                'endLine' => 268,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'whereKey' => [
                'name' => 'whereKey',
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
                        'startLine' => 276,
                        'endLine' => 276,
                        'startColumn' => 30,
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
 * Add a where clause on the primary key to the query.
 *
 * @param  mixed  $id
 * @return $this
 */',
                'startLine' => 276,
                'endLine' => 297,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'whereKeyNot' => [
                'name' => 'whereKeyNot',
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
                        'startLine' => 305,
                        'endLine' => 305,
                        'startColumn' => 33,
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
 * Add a where clause on the primary key to the query.
 *
 * @param  mixed  $id
 * @return $this
 */',
                'startLine' => 305,
                'endLine' => 326,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'except' => [
                'name' => 'except',
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
                        'startLine' => 334,
                        'endLine' => 334,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Exclude the given models from the query results.
 *
 * @param  iterable|mixed  $models
 * @return static
 */',
                'startLine' => 334,
                'endLine' => 341,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'where' => [
                'name' => 'where',
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
                        'startLine' => 352,
                        'endLine' => 352,
                        'startColumn' => 27,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 352,
                                'endLine' => 352,
                                'startTokenPos' => 1188,
                                'startFilePos' => 8410,
                                'endTokenPos' => 1188,
                                'endFilePos' => 8413,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 352,
                        'endLine' => 352,
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
                                'startLine' => 352,
                                'endLine' => 352,
                                'startTokenPos' => 1195,
                                'startFilePos' => 8425,
                                'endTokenPos' => 1195,
                                'endFilePos' => 8428,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 352,
                        'endLine' => 352,
                        'startColumn' => 54,
                        'endColumn' => 66,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => [
                            'code' => '\'and\'',
                            'attributes' => [
                                'startLine' => 352,
                                'endLine' => 352,
                                'startTokenPos' => 1202,
                                'startFilePos' => 8442,
                                'endTokenPos' => 1202,
                                'endFilePos' => 8446,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 352,
                        'endLine' => 352,
                        'startColumn' => 69,
                        'endColumn' => 84,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a basic where clause to the query.
 *
 * @param  (\\Closure(static): mixed)|string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
                'startLine' => 352,
                'endLine' => 365,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                        'startLine' => 376,
                        'endLine' => 376,
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
                                'startLine' => 376,
                                'endLine' => 376,
                                'startTokenPos' => 1323,
                                'startFilePos' => 9252,
                                'endTokenPos' => 1323,
                                'endFilePos' => 9255,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 376,
                        'endLine' => 376,
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
                                'startLine' => 376,
                                'endLine' => 376,
                                'startTokenPos' => 1330,
                                'startFilePos' => 9267,
                                'endTokenPos' => 1330,
                                'endFilePos' => 9270,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 376,
                        'endLine' => 376,
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
                                'startLine' => 376,
                                'endLine' => 376,
                                'startTokenPos' => 1337,
                                'startFilePos' => 9284,
                                'endTokenPos' => 1337,
                                'endFilePos' => 9288,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 376,
                        'endLine' => 376,
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
 * @param  (\\Closure(static): mixed)|string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return TModel|null
 */',
                'startLine' => 376,
                'endLine' => 379,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'orWhere' => [
                'name' => 'orWhere',
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
                        'startLine' => 389,
                        'endLine' => 389,
                        'startColumn' => 29,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 389,
                                'endLine' => 389,
                                'startTokenPos' => 1376,
                                'startFilePos' => 9673,
                                'endTokenPos' => 1376,
                                'endFilePos' => 9676,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 389,
                        'endLine' => 389,
                        'startColumn' => 38,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 389,
                                'endLine' => 389,
                                'startTokenPos' => 1383,
                                'startFilePos' => 9688,
                                'endTokenPos' => 1383,
                                'endFilePos' => 9691,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 389,
                        'endLine' => 389,
                        'startColumn' => 56,
                        'endColumn' => 68,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add an "or where" clause to the query.
 *
 * @param  (\\Closure(static): mixed)|array|string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
                'startLine' => 389,
                'endLine' => 396,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'whereNot' => [
                'name' => 'whereNot',
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
                        'startColumn' => 30,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 407,
                                'endLine' => 407,
                                'startTokenPos' => 1457,
                                'startFilePos' => 10254,
                                'endTokenPos' => 1457,
                                'endFilePos' => 10257,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 407,
                        'endLine' => 407,
                        'startColumn' => 39,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 407,
                                'endLine' => 407,
                                'startTokenPos' => 1464,
                                'startFilePos' => 10269,
                                'endTokenPos' => 1464,
                                'endFilePos' => 10272,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 407,
                        'endLine' => 407,
                        'startColumn' => 57,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => [
                            'code' => '\'and\'',
                            'attributes' => [
                                'startLine' => 407,
                                'endLine' => 407,
                                'startTokenPos' => 1471,
                                'startFilePos' => 10286,
                                'endTokenPos' => 1471,
                                'endFilePos' => 10290,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 407,
                        'endLine' => 407,
                        'startColumn' => 72,
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
 * Add a basic "where not" clause to the query.
 *
 * @param  (\\Closure(static): mixed)|string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
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
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'orWhereNot' => [
                'name' => 'orWhereNot',
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
                                'startLine' => 420,
                                'endLine' => 420,
                                'startTokenPos' => 1514,
                                'startFilePos' => 10698,
                                'endTokenPos' => 1514,
                                'endFilePos' => 10701,
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
                                'startLine' => 420,
                                'endLine' => 420,
                                'startTokenPos' => 1521,
                                'startFilePos' => 10713,
                                'endTokenPos' => 1521,
                                'endFilePos' => 10716,
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
 * Add an "or where not" clause to the query.
 *
 * @param  (\\Closure(static): mixed)|array|string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
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
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'latest' => [
                'name' => 'latest',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 431,
                                'endLine' => 431,
                                'startTokenPos' => 1559,
                                'startFilePos' => 11020,
                                'endTokenPos' => 1559,
                                'endFilePos' => 11023,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 431,
                        'endLine' => 431,
                        'startColumn' => 28,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add an "order by" clause for a timestamp to the query.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return $this
 */',
                'startLine' => 431,
                'endLine' => 440,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'oldest' => [
                'name' => 'oldest',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 448,
                                'endLine' => 448,
                                'startTokenPos' => 1623,
                                'startFilePos' => 11440,
                                'endTokenPos' => 1623,
                                'endFilePos' => 11443,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 448,
                        'endLine' => 448,
                        'startColumn' => 28,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add an "order by" clause for a timestamp to the query.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return $this
 */',
                'startLine' => 448,
                'endLine' => 457,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'hydrate' => [
                'name' => 'hydrate',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
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
                        'startLine' => 465,
                        'endLine' => 465,
                        'startColumn' => 29,
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
 * Create a collection of models from plain arrays.
 *
 * @param  array  $items
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TModel>
 */',
                'startLine' => 465,
                'endLine' => 478,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'fillAndInsert' => [
                'name' => 'fillAndInsert',
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
                        'startLine' => 486,
                        'endLine' => 486,
                        'startColumn' => 35,
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
 * Insert into the database after merging the model\'s default attributes, setting timestamps, and casting values.
 *
 * @param  array<int, array<string, mixed>>  $values
 * @return bool
 */',
                'startLine' => 486,
                'endLine' => 489,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'fillAndInsertOrIgnore' => [
                'name' => 'fillAndInsertOrIgnore',
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
                        'startLine' => 497,
                        'endLine' => 497,
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
 * Insert (ignoring errors) into the database after merging the model\'s default attributes, setting timestamps, and casting values.
 *
 * @param  array<int, array<string, mixed>>  $values
 * @return int
 */',
                'startLine' => 497,
                'endLine' => 500,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'fillAndInsertGetId' => [
                'name' => 'fillAndInsertGetId',
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
                        'startLine' => 508,
                        'endLine' => 508,
                        'startColumn' => 40,
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
 * Insert a record into the database and get its ID after merging the model\'s default attributes, setting timestamps, and casting values.
 *
 * @param  array<string, mixed>  $values
 * @return int
 */',
                'startLine' => 508,
                'endLine' => 511,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'fillForInsert' => [
                'name' => 'fillForInsert',
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
                        'startLine' => 519,
                        'endLine' => 519,
                        'startColumn' => 35,
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
 * Enrich the given values by merging in the model\'s default attributes, adding timestamps, and casting values.
 *
 * @param  array<int, array<string, mixed>>  $values
 * @return array<int, array<string, mixed>>
 */',
                'startLine' => 519,
                'endLine' => 539,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'fromQuery' => [
                'name' => 'fromQuery',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 548,
                        'endLine' => 548,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'bindings' => [
                        'name' => 'bindings',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 548,
                                'endLine' => 548,
                                'startTokenPos' => 2053,
                                'startFilePos' => 14436,
                                'endTokenPos' => 2054,
                                'endFilePos' => 14437,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 548,
                        'endLine' => 548,
                        'startColumn' => 39,
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
 * Create a collection of models from a raw query.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TModel>
 */',
                'startLine' => 548,
                'endLine' => 553,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                        'startLine' => 562,
                        'endLine' => 562,
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
                                'startLine' => 562,
                                'endLine' => 562,
                                'startTokenPos' => 2102,
                                'startFilePos' => 14899,
                                'endTokenPos' => 2104,
                                'endFilePos' => 14903,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 562,
                        'endLine' => 562,
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
 * Find a model by its primary key.
 *
 * @param  mixed  $id
 * @param  array|string  $columns
 * @return ($id is (\\Illuminate\\Contracts\\Support\\Arrayable<array-key, mixed>|array<mixed>) ? \\Illuminate\\Database\\Eloquent\\Collection<int, TModel> : TModel|null)
 */',
                'startLine' => 562,
                'endLine' => 569,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                        'startLine' => 581,
                        'endLine' => 581,
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
                                'startLine' => 581,
                                'endLine' => 581,
                                'startTokenPos' => 2175,
                                'startFilePos' => 15440,
                                'endTokenPos' => 2177,
                                'endFilePos' => 15444,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 581,
                        'endLine' => 581,
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
 * Find a sole model by its primary key.
 *
 * @param  mixed  $id
 * @param  array|string  $columns
 * @return TModel
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<TModel>
 * @throws \\Illuminate\\Database\\MultipleRecordsFoundException
 */',
                'startLine' => 581,
                'endLine' => 584,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                        'startLine' => 593,
                        'endLine' => 593,
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
                                'startLine' => 593,
                                'endLine' => 593,
                                'startTokenPos' => 2214,
                                'startFilePos' => 15807,
                                'endTokenPos' => 2216,
                                'endFilePos' => 15811,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 593,
                        'endLine' => 593,
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
 * Find multiple models by their primary keys.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $ids
 * @param  array|string  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TModel>
 */',
                'startLine' => 593,
                'endLine' => 602,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                        'startLine' => 613,
                        'endLine' => 613,
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
                                'startLine' => 613,
                                'endLine' => 613,
                                'startTokenPos' => 2300,
                                'startFilePos' => 16477,
                                'endTokenPos' => 2302,
                                'endFilePos' => 16481,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 613,
                        'endLine' => 613,
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
 * Find a model by its primary key or throw an exception.
 *
 * @param  mixed  $id
 * @param  array|string  $columns
 * @return ($id is (\\Illuminate\\Contracts\\Support\\Arrayable<array-key, mixed>|array<mixed>) ? \\Illuminate\\Database\\Eloquent\\Collection<int, TModel> : TModel)
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<TModel>
 */',
                'startLine' => 613,
                'endLine' => 636,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                        'startLine' => 645,
                        'endLine' => 645,
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
                                'startLine' => 645,
                                'endLine' => 645,
                                'startTokenPos' => 2479,
                                'startFilePos' => 17469,
                                'endTokenPos' => 2481,
                                'endFilePos' => 17473,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 645,
                        'endLine' => 645,
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
 * Find a model by its primary key or return fresh model instance.
 *
 * @param  mixed  $id
 * @param  array|string  $columns
 * @return ($id is (\\Illuminate\\Contracts\\Support\\Arrayable<array-key, mixed>|array<mixed>) ? \\Illuminate\\Database\\Eloquent\\Collection<int, TModel> : TModel)
 */',
                'startLine' => 645,
                'endLine' => 652,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                        'startLine' => 668,
                        'endLine' => 668,
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
                                'startLine' => 668,
                                'endLine' => 668,
                                'startTokenPos' => 2544,
                                'startFilePos' => 18142,
                                'endTokenPos' => 2546,
                                'endFilePos' => 18146,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 668,
                        'endLine' => 668,
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
                                'startLine' => 668,
                                'endLine' => 668,
                                'startTokenPos' => 2556,
                                'startFilePos' => 18170,
                                'endTokenPos' => 2556,
                                'endFilePos' => 18173,
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
                        'startLine' => 668,
                        'endLine' => 668,
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
 * Find a model by its primary key or call a callback.
 *
 * @template TValue
 *
 * @param  mixed  $id
 * @param  (\\Closure(): TValue)|list<string>|string  $columns
 * @param  (\\Closure(): TValue)|null  $callback
 * @return (
 *     $id is (\\Illuminate\\Contracts\\Support\\Arrayable<array-key, mixed>|array<mixed>)
 *     ? \\Illuminate\\Database\\Eloquent\\Collection<int, TModel>
 *     : TModel|TValue
 * )
 */',
                'startLine' => 668,
                'endLine' => 681,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                                'startLine' => 690,
                                'endLine' => 690,
                                'startTokenPos' => 2646,
                                'startFilePos' => 18667,
                                'endTokenPos' => 2647,
                                'endFilePos' => 18668,
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
                        'startLine' => 690,
                        'endLine' => 690,
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
                                'startLine' => 690,
                                'endLine' => 690,
                                'startTokenPos' => 2656,
                                'startFilePos' => 18687,
                                'endTokenPos' => 2657,
                                'endFilePos' => 18688,
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
                        'startLine' => 690,
                        'endLine' => 690,
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
 * Get the first record matching the attributes or instantiate it.
 *
 * @param  array  $attributes
 * @param  array  $values
 * @return TModel
 */',
                'startLine' => 690,
                'endLine' => 697,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                                'startLine' => 706,
                                'endLine' => 706,
                                'startTokenPos' => 2727,
                                'startFilePos' => 19168,
                                'endTokenPos' => 2728,
                                'endFilePos' => 19169,
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
                        'startLine' => 706,
                        'endLine' => 706,
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
                                'startLine' => 706,
                                'endLine' => 706,
                                'startTokenPos' => 2739,
                                'startFilePos' => 19196,
                                'endTokenPos' => 2740,
                                'endFilePos' => 19197,
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
                        'startLine' => 706,
                        'endLine' => 706,
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
 * @return TModel
 */',
                'startLine' => 706,
                'endLine' => 713,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                                'startLine' => 722,
                                'endLine' => 722,
                                'startTokenPos' => 2811,
                                'startFilePos' => 19692,
                                'endTokenPos' => 2812,
                                'endFilePos' => 19693,
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
                        'startLine' => 722,
                        'endLine' => 722,
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
                                'startLine' => 722,
                                'endLine' => 722,
                                'startTokenPos' => 2823,
                                'startFilePos' => 19720,
                                'endTokenPos' => 2824,
                                'endFilePos' => 19721,
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
                        'startLine' => 722,
                        'endLine' => 722,
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
 * @return TModel
 */',
                'startLine' => 722,
                'endLine' => 729,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                        'startLine' => 738,
                        'endLine' => 738,
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
                                'startLine' => 738,
                                'endLine' => 738,
                                'startTokenPos' => 2923,
                                'startFilePos' => 20278,
                                'endTokenPos' => 2924,
                                'endFilePos' => 20279,
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
                        'startLine' => 738,
                        'endLine' => 738,
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
 * Create or update a record matching the attributes, and fill it with values.
 *
 * @param  array  $attributes
 * @param  array  $values
 * @return TModel
 */',
                'startLine' => 738,
                'endLine' => 745,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'incrementOrCreate' => [
                'name' => 'incrementOrCreate',
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
                        'startLine' => 757,
                        'endLine' => 757,
                        'startColumn' => 39,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => '\'count\'',
                            'attributes' => [
                                'startLine' => 757,
                                'endLine' => 757,
                                'startTokenPos' => 3009,
                                'startFilePos' => 20884,
                                'endTokenPos' => 3009,
                                'endFilePos' => 20890,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 757,
                        'endLine' => 757,
                        'startColumn' => 58,
                        'endColumn' => 81,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 757,
                                'endLine' => 757,
                                'startTokenPos' => 3016,
                                'startFilePos' => 20904,
                                'endTokenPos' => 3016,
                                'endFilePos' => 20904,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 757,
                        'endLine' => 757,
                        'startColumn' => 84,
                        'endColumn' => 95,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'step' => [
                        'name' => 'step',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 757,
                                'endLine' => 757,
                                'startTokenPos' => 3023,
                                'startFilePos' => 20915,
                                'endTokenPos' => 3023,
                                'endFilePos' => 20915,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 757,
                        'endLine' => 757,
                        'startColumn' => 98,
                        'endColumn' => 106,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'extra' => [
                        'name' => 'extra',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 757,
                                'endLine' => 757,
                                'startTokenPos' => 3032,
                                'startFilePos' => 20933,
                                'endTokenPos' => 3033,
                                'endFilePos' => 20934,
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
                        'startLine' => 757,
                        'endLine' => 757,
                        'startColumn' => 109,
                        'endColumn' => 125,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a record matching the attributes, or increment the existing record.
 *
 * @param  array  $attributes
 * @param  string  $column
 * @param  int|float  $default
 * @param  int|float  $step
 * @param  array  $extra
 * @return TModel
 */',
                'startLine' => 757,
                'endLine' => 764,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                                'startLine' => 774,
                                'endLine' => 774,
                                'startTokenPos' => 3125,
                                'startFilePos' => 21500,
                                'endTokenPos' => 3127,
                                'endFilePos' => 21504,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 774,
                        'endLine' => 774,
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
 * @param  array|string  $columns
 * @return TModel
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<TModel>
 */',
                'startLine' => 774,
                'endLine' => 781,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                                'startLine' => 792,
                                'endLine' => 792,
                                'startTokenPos' => 3194,
                                'startFilePos' => 21998,
                                'endTokenPos' => 3196,
                                'endFilePos' => 22002,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 792,
                        'endLine' => 792,
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
                                'startLine' => 792,
                                'endLine' => 792,
                                'startTokenPos' => 3206,
                                'startFilePos' => 22026,
                                'endTokenPos' => 3206,
                                'endFilePos' => 22029,
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
                        'startLine' => 792,
                        'endLine' => 792,
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
 * @return TModel|TValue
 */',
                'startLine' => 792,
                'endLine' => 805,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'sole' => [
                'name' => 'sole',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 816,
                                'endLine' => 816,
                                'startTokenPos' => 3291,
                                'startFilePos' => 22640,
                                'endTokenPos' => 3293,
                                'endFilePos' => 22644,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 816,
                        'endLine' => 816,
                        'startColumn' => 26,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the query and get the first result if it\'s the sole matching record.
 *
 * @param  array|string  $columns
 * @return TModel
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<TModel>
 * @throws \\Illuminate\\Database\\MultipleRecordsFoundException
 */',
                'startLine' => 816,
                'endLine' => 823,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'value' => [
                'name' => 'value',
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
                        'startLine' => 831,
                        'endLine' => 831,
                        'startColumn' => 27,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a single column\'s value from the first result of a query.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return mixed
 */',
                'startLine' => 831,
                'endLine' => 838,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'soleValue' => [
                'name' => 'soleValue',
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
 * Get a single column\'s value from the first result of a query if it\'s the sole matching record.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<TModel>
 * @throws \\Illuminate\\Database\\MultipleRecordsFoundException
 */',
                'startLine' => 849,
                'endLine' => 854,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'valueOrFail' => [
                'name' => 'valueOrFail',
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
                        'startLine' => 864,
                        'endLine' => 864,
                        'startColumn' => 33,
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
 * Get a single column\'s value from the first result of the query or throw an exception.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<TModel>
 */',
                'startLine' => 864,
                'endLine' => 869,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                                'startLine' => 877,
                                'endLine' => 877,
                                'startTokenPos' => 3572,
                                'startFilePos' => 24667,
                                'endTokenPos' => 3574,
                                'endFilePos' => 24671,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 877,
                        'endLine' => 877,
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
                'docComment' => '/**
 * Execute the query as a "select" statement.
 *
 * @param  array|string  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TModel>
 */',
                'startLine' => 877,
                'endLine' => 891,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'getModels' => [
                'name' => 'getModels',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 899,
                                'endLine' => 899,
                                'startTokenPos' => 3669,
                                'startFilePos' => 25423,
                                'endTokenPos' => 3671,
                                'endFilePos' => 25427,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 899,
                        'endLine' => 899,
                        'startColumn' => 31,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the hydrated models without eager loading.
 *
 * @param  array|string  $columns
 * @return array<int, TModel>
 */',
                'startLine' => 899,
                'endLine' => 904,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'eagerLoadRelations' => [
                'name' => 'eagerLoadRelations',
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
                        'startLine' => 912,
                        'endLine' => 912,
                        'startColumn' => 40,
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
 * Eager load the relationships for the models.
 *
 * @param  array<int, TModel>  $models
 * @return array<int, TModel>
 */',
                'startLine' => 912,
                'endLine' => 924,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'eagerLoadRelation' => [
                'name' => 'eagerLoadRelation',
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
                        'startLine' => 934,
                        'endLine' => 934,
                        'startColumn' => 42,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
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
                        'startLine' => 934,
                        'endLine' => 934,
                        'startColumn' => 57,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'constraints' => [
                        'name' => 'constraints',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 934,
                        'endLine' => 934,
                        'startColumn' => 64,
                        'endColumn' => 83,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Eagerly load the relationship on a set of models.
 *
 * @param  array  $models
 * @param  string  $name
 * @param  \\Closure  $constraints
 * @return array
 */',
                'startLine' => 934,
                'endLine' => 952,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'getRelation' => [
                'name' => 'getRelation',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 960,
                        'endLine' => 960,
                        'startColumn' => 33,
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
 * Get the relation instance for the given relation name.
 *
 * @param  string  $name
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\Relation<\\Illuminate\\Database\\Eloquent\\Model, TModel, *>
 */',
                'startLine' => 960,
                'endLine' => 983,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'relationsNestedUnder' => [
                'name' => 'relationsNestedUnder',
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
                        'startLine' => 991,
                        'endLine' => 991,
                        'startColumn' => 45,
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
 * Get the deeply nested relations for a given top-level relation.
 *
 * @param  string  $relation
 * @return array
 */',
                'startLine' => 991,
                'endLine' => 1005,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'isNestedUnder' => [
                'name' => 'isNestedUnder',
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
                        'startLine' => 1014,
                        'endLine' => 1014,
                        'startColumn' => 38,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
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
                        'startLine' => 1014,
                        'endLine' => 1014,
                        'startColumn' => 49,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the relationship is nested.
 *
 * @param  string  $relation
 * @param  string  $name
 * @return bool
 */',
                'startLine' => 1014,
                'endLine' => 1017,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'afterQuery' => [
                'name' => 'afterQuery',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1025,
                        'endLine' => 1025,
                        'startColumn' => 32,
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
 * Register a closure to be invoked after the query is executed.
 *
 * @param  \\Closure  $callback
 * @return $this
 */',
                'startLine' => 1025,
                'endLine' => 1030,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'applyAfterQueryCallbacks' => [
                'name' => 'applyAfterQueryCallbacks',
                'parameters' => [
                    'result' => [
                        'name' => 'result',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1038,
                        'endLine' => 1038,
                        'startColumn' => 46,
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
 * Invoke the "after query" modification callbacks.
 *
 * @param  mixed  $result
 * @return mixed
 */',
                'startLine' => 1038,
                'endLine' => 1045,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
 * @return \\Illuminate\\Support\\LazyCollection<int, TModel>
 */',
                'startLine' => 1052,
                'endLine' => 1059,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'enforceOrderBy' => [
                'name' => 'enforceOrderBy',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a generic "order by" clause if the query doesn\'t already have one.
 *
 * @return void
 */',
                'startLine' => 1066,
                'endLine' => 1071,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'pluck' => [
                'name' => 'pluck',
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
                        'startLine' => 1080,
                        'endLine' => 1080,
                        'startColumn' => 27,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1080,
                                'endLine' => 1080,
                                'startTokenPos' => 4423,
                                'startFilePos' => 31433,
                                'endTokenPos' => 4423,
                                'endFilePos' => 31436,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1080,
                        'endLine' => 1080,
                        'startColumn' => 36,
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
 * Get a collection with the values of a given column.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  string|null  $key
 * @return \\Illuminate\\Support\\Collection<array-key, mixed>
 */',
                'startLine' => 1080,
                'endLine' => 1102,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                                'startLine' => 1116,
                                'endLine' => 1116,
                                'startTokenPos' => 4634,
                                'startFilePos' => 32777,
                                'endTokenPos' => 4634,
                                'endFilePos' => 32780,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1116,
                        'endLine' => 1116,
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
                                'startLine' => 1116,
                                'endLine' => 1116,
                                'startTokenPos' => 4641,
                                'startFilePos' => 32794,
                                'endTokenPos' => 4643,
                                'endFilePos' => 32798,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1116,
                        'endLine' => 1116,
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
                                'startLine' => 1116,
                                'endLine' => 1116,
                                'startTokenPos' => 4650,
                                'startFilePos' => 32813,
                                'endTokenPos' => 4650,
                                'endFilePos' => 32818,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1116,
                        'endLine' => 1116,
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
                                'startLine' => 1116,
                                'endLine' => 1116,
                                'startTokenPos' => 4657,
                                'startFilePos' => 32829,
                                'endTokenPos' => 4657,
                                'endFilePos' => 32832,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1116,
                        'endLine' => 1116,
                        'startColumn' => 85,
                        'endColumn' => 96,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'total' => [
                        'name' => 'total',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1116,
                                'endLine' => 1116,
                                'startTokenPos' => 4664,
                                'startFilePos' => 32844,
                                'endTokenPos' => 4664,
                                'endFilePos' => 32847,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1116,
                        'endLine' => 1116,
                        'startColumn' => 99,
                        'endColumn' => 111,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Paginate the given query.
 *
 * @param  int|null|\\Closure  $perPage
 * @param  array|string  $columns
 * @param  string  $pageName
 * @param  int|null  $page
 * @param  \\Closure|int|null  $total
 * @return \\Illuminate\\Pagination\\LengthAwarePaginator
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 1116,
                'endLine' => 1132,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                                'startLine' => 1143,
                                'endLine' => 1143,
                                'startTokenPos' => 4822,
                                'startFilePos' => 33709,
                                'endTokenPos' => 4822,
                                'endFilePos' => 33712,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1143,
                        'endLine' => 1143,
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
                                'startLine' => 1143,
                                'endLine' => 1143,
                                'startTokenPos' => 4829,
                                'startFilePos' => 33726,
                                'endTokenPos' => 4831,
                                'endFilePos' => 33730,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1143,
                        'endLine' => 1143,
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
                                'startLine' => 1143,
                                'endLine' => 1143,
                                'startTokenPos' => 4838,
                                'startFilePos' => 33745,
                                'endTokenPos' => 4838,
                                'endFilePos' => 33750,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1143,
                        'endLine' => 1143,
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
                                'startLine' => 1143,
                                'endLine' => 1143,
                                'startTokenPos' => 4845,
                                'startFilePos' => 33761,
                                'endTokenPos' => 4845,
                                'endFilePos' => 33764,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1143,
                        'endLine' => 1143,
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
 * @param  array|string  $columns
 * @param  string  $pageName
 * @param  int|null  $page
 * @return \\Illuminate\\Contracts\\Pagination\\Paginator
 */',
                'startLine' => 1143,
                'endLine' => 1158,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                                'startLine' => 1169,
                                'endLine' => 1169,
                                'startTokenPos' => 4976,
                                'startFilePos' => 34779,
                                'endTokenPos' => 4976,
                                'endFilePos' => 34782,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1169,
                        'endLine' => 1169,
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
                                'startLine' => 1169,
                                'endLine' => 1169,
                                'startTokenPos' => 4983,
                                'startFilePos' => 34796,
                                'endTokenPos' => 4985,
                                'endFilePos' => 34800,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1169,
                        'endLine' => 1169,
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
                                'startLine' => 1169,
                                'endLine' => 1169,
                                'startTokenPos' => 4992,
                                'startFilePos' => 34817,
                                'endTokenPos' => 4992,
                                'endFilePos' => 34824,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1169,
                        'endLine' => 1169,
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
                                'startLine' => 1169,
                                'endLine' => 1169,
                                'startTokenPos' => 4999,
                                'startFilePos' => 34837,
                                'endTokenPos' => 4999,
                                'endFilePos' => 34840,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1169,
                        'endLine' => 1169,
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
 * @param  array|string  $columns
 * @param  string  $cursorName
 * @param  \\Illuminate\\Pagination\\Cursor|string|null  $cursor
 * @return \\Illuminate\\Contracts\\Pagination\\CursorPaginator
 */',
                'startLine' => 1169,
                'endLine' => 1174,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'ensureOrderForCursorPagination' => [
                'name' => 'ensureOrderForCursorPagination',
                'parameters' => [
                    'shouldReverse' => [
                        'name' => 'shouldReverse',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1182,
                                'endLine' => 1182,
                                'startTokenPos' => 5055,
                                'startFilePos' => 35243,
                                'endTokenPos' => 5055,
                                'endFilePos' => 35247,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1182,
                        'endLine' => 1182,
                        'startColumn' => 55,
                        'endColumn' => 76,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Ensure the proper order by required for cursor pagination.
 *
 * @param  bool  $shouldReverse
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 1182,
                'endLine' => 1208,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                                'startLine' => 1216,
                                'endLine' => 1216,
                                'startTokenPos' => 5322,
                                'startFilePos' => 36350,
                                'endTokenPos' => 5323,
                                'endFilePos' => 36351,
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
                        'startLine' => 1216,
                        'endLine' => 1216,
                        'startColumn' => 28,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Save a new model and return the instance.
 *
 * @param  array  $attributes
 * @return TModel
 */',
                'startLine' => 1216,
                'endLine' => 1221,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'createQuietly' => [
                'name' => 'createQuietly',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1229,
                                'endLine' => 1229,
                                'startTokenPos' => 5375,
                                'startFilePos' => 36701,
                                'endTokenPos' => 5376,
                                'endFilePos' => 36702,
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
                        'startLine' => 1229,
                        'endLine' => 1229,
                        'startColumn' => 35,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Save a new model and return the instance without raising model events.
 *
 * @param  array  $attributes
 * @return TModel
 */',
                'startLine' => 1229,
                'endLine' => 1232,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'forceCreate' => [
                'name' => 'forceCreate',
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
                        'startLine' => 1240,
                        'endLine' => 1240,
                        'startColumn' => 33,
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
 * Save a new model and return the instance. Allow mass-assignment.
 *
 * @param  array  $attributes
 * @return TModel
 */',
                'startLine' => 1240,
                'endLine' => 1245,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'forceCreateQuietly' => [
                'name' => 'forceCreateQuietly',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1253,
                                'endLine' => 1253,
                                'startTokenPos' => 5475,
                                'startFilePos' => 37379,
                                'endTokenPos' => 5476,
                                'endFilePos' => 37380,
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
                        'startLine' => 1253,
                        'endLine' => 1253,
                        'startColumn' => 40,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Save a new model instance with mass assignment without raising model events.
 *
 * @param  array  $attributes
 * @return TModel
 */',
                'startLine' => 1253,
                'endLine' => 1256,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'update' => [
                'name' => 'update',
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
                        'startLine' => 1264,
                        'endLine' => 1264,
                        'startColumn' => 28,
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
 * Update records in the database.
 *
 * @param  array  $values
 * @return int
 */',
                'startLine' => 1264,
                'endLine' => 1267,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                        'startLine' => 1277,
                        'endLine' => 1277,
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
                        'startLine' => 1277,
                        'endLine' => 1277,
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
                                'startLine' => 1277,
                                'endLine' => 1277,
                                'startTokenPos' => 5561,
                                'startFilePos' => 37981,
                                'endTokenPos' => 5561,
                                'endFilePos' => 37984,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1277,
                        'endLine' => 1277,
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
                'startLine' => 1277,
                'endLine' => 1296,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'touch' => [
                'name' => 'touch',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1304,
                                'endLine' => 1304,
                                'startTokenPos' => 5688,
                                'startFilePos' => 38641,
                                'endTokenPos' => 5688,
                                'endFilePos' => 38644,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1304,
                        'endLine' => 1304,
                        'startColumn' => 27,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Update the column\'s update timestamp.
 *
 * @param  string|null  $column
 * @return int|false
 */',
                'startLine' => 1304,
                'endLine' => 1319,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'increment' => [
                'name' => 'increment',
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
                        'startLine' => 1329,
                        'endLine' => 1329,
                        'startColumn' => 31,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'amount' => [
                        'name' => 'amount',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 1329,
                                'endLine' => 1329,
                                'startTokenPos' => 5816,
                                'startFilePos' => 39313,
                                'endTokenPos' => 5816,
                                'endFilePos' => 39313,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1329,
                        'endLine' => 1329,
                        'startColumn' => 40,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'extra' => [
                        'name' => 'extra',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1329,
                                'endLine' => 1329,
                                'startTokenPos' => 5825,
                                'startFilePos' => 39331,
                                'endTokenPos' => 5826,
                                'endFilePos' => 39332,
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
                        'startLine' => 1329,
                        'endLine' => 1329,
                        'startColumn' => 53,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Increment a column\'s value by a given amount.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  float|int  $amount
 * @param  array  $extra
 * @return int
 */',
                'startLine' => 1329,
                'endLine' => 1334,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'decrement' => [
                'name' => 'decrement',
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
                        'startLine' => 1344,
                        'endLine' => 1344,
                        'startColumn' => 31,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'amount' => [
                        'name' => 'amount',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 1344,
                                'endLine' => 1344,
                                'startTokenPos' => 5875,
                                'startFilePos' => 39752,
                                'endTokenPos' => 5875,
                                'endFilePos' => 39752,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1344,
                        'endLine' => 1344,
                        'startColumn' => 40,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'extra' => [
                        'name' => 'extra',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1344,
                                'endLine' => 1344,
                                'startTokenPos' => 5884,
                                'startFilePos' => 39770,
                                'endTokenPos' => 5885,
                                'endFilePos' => 39771,
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
                        'startLine' => 1344,
                        'endLine' => 1344,
                        'startColumn' => 53,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Decrement a column\'s value by a given amount.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  float|int  $amount
 * @param  array  $extra
 * @return int
 */',
                'startLine' => 1344,
                'endLine' => 1349,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'addUpdatedAtColumn' => [
                'name' => 'addUpdatedAtColumn',
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
                        'startLine' => 1357,
                        'endLine' => 1357,
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
 * Add the "updated at" column to an array of values.
 *
 * @param  array  $values
 * @return array
 */',
                'startLine' => 1357,
                'endLine' => 1391,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'addUniqueIdsToUpsertValues' => [
                'name' => 'addUniqueIdsToUpsertValues',
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
                        'startLine' => 1399,
                        'endLine' => 1399,
                        'startColumn' => 51,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add unique IDs to the inserted values.
 *
 * @param  array  $values
 * @return array
 */',
                'startLine' => 1399,
                'endLine' => 1414,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'addTimestampsToUpsertValues' => [
                'name' => 'addTimestampsToUpsertValues',
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
                        'startLine' => 1422,
                        'endLine' => 1422,
                        'startColumn' => 52,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add timestamps to the inserted values.
 *
 * @param  array  $values
 * @return array
 */',
                'startLine' => 1422,
                'endLine' => 1442,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'addUpdatedAtToUpsertColumns' => [
                'name' => 'addUpdatedAtToUpsertColumns',
                'parameters' => [
                    'update' => [
                        'name' => 'update',
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
                        'startLine' => 1450,
                        'endLine' => 1450,
                        'startColumn' => 52,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the "updated at" column to the updated columns.
 *
 * @param  array  $update
 * @return array
 */',
                'startLine' => 1450,
                'endLine' => 1465,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'delete' => [
                'name' => 'delete',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Delete records from the database.
 *
 * @return mixed
 */',
                'startLine' => 1472,
                'endLine' => 1479,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'forceDelete' => [
                'name' => 'forceDelete',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run the default delete function on the builder.
 *
 * Since we do not apply scopes here, the row will actually be deleted.
 *
 * @return mixed
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
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'onDelete' => [
                'name' => 'onDelete',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1499,
                        'endLine' => 1499,
                        'startColumn' => 30,
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
 * Register a replacement for the default delete function.
 *
 * @param  \\Closure  $callback
 * @return void
 */',
                'startLine' => 1499,
                'endLine' => 1502,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'hasNamedScope' => [
                'name' => 'hasNamedScope',
                'parameters' => [
                    'scope' => [
                        'name' => 'scope',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1510,
                        'endLine' => 1510,
                        'startColumn' => 35,
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
 * Determine if the given model has a scope.
 *
 * @param  string  $scope
 * @return bool
 */',
                'startLine' => 1510,
                'endLine' => 1513,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'scopes' => [
                'name' => 'scopes',
                'parameters' => [
                    'scopes' => [
                        'name' => 'scopes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1521,
                        'endLine' => 1521,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Call the given local model scopes.
 *
 * @param  array|string  $scopes
 * @return static|mixed
 */',
                'startLine' => 1521,
                'endLine' => 1542,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'applyScopes' => [
                'name' => 'applyScopes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Apply the scopes to the Eloquent builder instance and return it.
 *
 * @return static
 */',
                'startLine' => 1549,
                'endLine' => 1580,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'callScope' => [
                'name' => 'callScope',
                'parameters' => [
                    'scope' => [
                        'name' => 'scope',
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
                        'startLine' => 1589,
                        'endLine' => 1589,
                        'startColumn' => 34,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1589,
                                'endLine' => 1589,
                                'startTokenPos' => 6995,
                                'startFilePos' => 46698,
                                'endTokenPos' => 6996,
                                'endFilePos' => 46699,
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
                        'startLine' => 1589,
                        'endLine' => 1589,
                        'startColumn' => 51,
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
 * Apply the given scope on the current builder instance.
 *
 * @param  callable  $scope
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 1589,
                'endLine' => 1609,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'callNamedScope' => [
                'name' => 'callNamedScope',
                'parameters' => [
                    'scope' => [
                        'name' => 'scope',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1618,
                        'endLine' => 1618,
                        'startColumn' => 39,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1618,
                                'endLine' => 1618,
                                'startTokenPos' => 7123,
                                'startFilePos' => 47620,
                                'endTokenPos' => 7124,
                                'endFilePos' => 47621,
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
                        'startLine' => 1618,
                        'endLine' => 1618,
                        'startColumn' => 47,
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
 * Apply the given named scope on the current builder instance.
 *
 * @param  string  $scope
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 1618,
                'endLine' => 1623,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'addNewWheresWithinGroup' => [
                'name' => 'addNewWheresWithinGroup',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Query\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1632,
                        'endLine' => 1632,
                        'startColumn' => 48,
                        'endColumn' => 66,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'originalWhereCount' => [
                        'name' => 'originalWhereCount',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1632,
                        'endLine' => 1632,
                        'startColumn' => 69,
                        'endColumn' => 87,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Nest where conditions by slicing them at the given where count.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  int  $originalWhereCount
 * @return void
 */',
                'startLine' => 1632,
                'endLine' => 1648,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'groupWhereSliceForScope' => [
                'name' => 'groupWhereSliceForScope',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Query\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1657,
                        'endLine' => 1657,
                        'startColumn' => 48,
                        'endColumn' => 66,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'whereSlice' => [
                        'name' => 'whereSlice',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1657,
                        'endLine' => 1657,
                        'startColumn' => 69,
                        'endColumn' => 79,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Slice where conditions at the given offset and add them to the query as a nested condition.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $whereSlice
 * @return void
 */',
                'startLine' => 1657,
                'endLine' => 1671,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'createNestedWhere' => [
                'name' => 'createNestedWhere',
                'parameters' => [
                    'whereSlice' => [
                        'name' => 'whereSlice',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1680,
                        'endLine' => 1680,
                        'startColumn' => 42,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => [
                            'code' => '\'and\'',
                            'attributes' => [
                                'startLine' => 1680,
                                'endLine' => 1680,
                                'startTokenPos' => 7406,
                                'startFilePos' => 49893,
                                'endTokenPos' => 7406,
                                'endFilePos' => 49897,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1680,
                        'endLine' => 1680,
                        'startColumn' => 55,
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
 * Create a where array with nested where conditions.
 *
 * @param  array  $whereSlice
 * @param  string  $boolean
 * @return array
 */',
                'startLine' => 1680,
                'endLine' => 1687,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'with' => [
                'name' => 'with',
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
                        'startLine' => 1696,
                        'endLine' => 1696,
                        'startColumn' => 26,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1696,
                                'endLine' => 1696,
                                'startTokenPos' => 7477,
                                'startFilePos' => 50505,
                                'endTokenPos' => 7477,
                                'endFilePos' => 50508,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1696,
                        'endLine' => 1696,
                        'startColumn' => 38,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify relationships that should be eager loaded.
 *
 * @param  array<array-key, array|(\\Closure(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*,*,*>): mixed)|string>|string  $relations
 * @param  (\\Closure(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*,*,*>): mixed)|string|null  $callback
 * @return $this
 */',
                'startLine' => 1696,
                'endLine' => 1707,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'without' => [
                'name' => 'without',
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
                        'startLine' => 1715,
                        'endLine' => 1715,
                        'startColumn' => 29,
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
 * Prevent the specified relations from being eager loaded.
 *
 * @param  mixed  $relations
 * @return $this
 */',
                'startLine' => 1715,
                'endLine' => 1722,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'withOnly' => [
                'name' => 'withOnly',
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
                        'startLine' => 1730,
                        'endLine' => 1730,
                        'startColumn' => 30,
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
 * Set the relationships that should be eager loaded while removing any previously added eager loading specifications.
 *
 * @param  array<array-key, array|(\\Closure(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*,*,*>): mixed)|string>|string  $relations
 * @return $this
 */',
                'startLine' => 1730,
                'endLine' => 1735,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'newModelInstance' => [
                'name' => 'newModelInstance',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1743,
                                'endLine' => 1743,
                                'startTokenPos' => 7671,
                                'startFilePos' => 51860,
                                'endTokenPos' => 7672,
                                'endFilePos' => 51861,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1743,
                        'endLine' => 1743,
                        'startColumn' => 38,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new instance of the model being queried.
 *
 * @param  array  $attributes
 * @return TModel
 */',
                'startLine' => 1743,
                'endLine' => 1750,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'parseWithRelations' => [
                'name' => 'parseWithRelations',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
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
                        'startLine' => 1758,
                        'endLine' => 1758,
                        'startColumn' => 43,
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
 * Parse a list of relations into individuals.
 *
 * @param  array  $relations
 * @return array
 */',
                'startLine' => 1758,
                'endLine' => 1776,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'prepareNestedWithRelationships' => [
                'name' => 'prepareNestedWithRelationships',
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
                        'startLine' => 1785,
                        'endLine' => 1785,
                        'startColumn' => 55,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'prefix' => [
                        'name' => 'prefix',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 1785,
                                'endLine' => 1785,
                                'startTokenPos' => 7843,
                                'startFilePos' => 53099,
                                'endTokenPos' => 7843,
                                'endFilePos' => 53100,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1785,
                        'endLine' => 1785,
                        'startColumn' => 67,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepare nested with relationships.
 *
 * @param  array  $relations
 * @param  string  $prefix
 * @return array
 */',
                'startLine' => 1785,
                'endLine' => 1829,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'combineConstraints' => [
                'name' => 'combineConstraints',
                'parameters' => [
                    'constraints' => [
                        'name' => 'constraints',
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
                        'startLine' => 1837,
                        'endLine' => 1837,
                        'startColumn' => 43,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Combine an array of constraints into a single constraint.
 *
 * @param  array  $constraints
 * @return \\Closure
 */',
                'startLine' => 1837,
                'endLine' => 1846,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'parseNameAndAttributeSelectionConstraint' => [
                'name' => 'parseNameAndAttributeSelectionConstraint',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1854,
                        'endLine' => 1854,
                        'startColumn' => 65,
                        'endColumn' => 69,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Parse the attribute select constraints from the name.
 *
 * @param  string  $name
 * @return array
 */',
                'startLine' => 1854,
                'endLine' => 1861,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'createSelectWithConstraint' => [
                'name' => 'createSelectWithConstraint',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1869,
                        'endLine' => 1869,
                        'startColumn' => 51,
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
 * Create a constraint to select the given columns for the relation.
 *
 * @param  string  $name
 * @return array
 */',
                'startLine' => 1869,
                'endLine' => 1878,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'addNestedWiths' => [
                'name' => 'addNestedWiths',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1887,
                        'endLine' => 1887,
                        'startColumn' => 39,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'results' => [
                        'name' => 'results',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1887,
                        'endLine' => 1887,
                        'startColumn' => 46,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Parse the nested relationships in a relation.
 *
 * @param  string  $name
 * @param  array  $results
 * @return array
 */',
                'startLine' => 1887,
                'endLine' => 1905,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'withAttributes' => [
                'name' => 'withAttributes',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
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
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1917,
                        'endLine' => 1917,
                        'startColumn' => 36,
                        'endColumn' => 70,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1917,
                                'endLine' => 1917,
                                'startTokenPos' => 8495,
                                'startFilePos' => 57500,
                                'endTokenPos' => 8495,
                                'endFilePos' => 57503,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1917,
                        'endLine' => 1917,
                        'startColumn' => 73,
                        'endColumn' => 85,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'asConditions' => [
                        'name' => 'asConditions',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1917,
                                'endLine' => 1917,
                                'startTokenPos' => 8502,
                                'startFilePos' => 57522,
                                'endTokenPos' => 8502,
                                'endFilePos' => 57525,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1917,
                        'endLine' => 1917,
                        'startColumn' => 88,
                        'endColumn' => 107,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify attributes that should be added to any new models created by this builder.
 *
 * The given key / value pairs will also be added as where conditions to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|array|string  $attributes
 * @param  mixed  $value
 * @param  bool  $asConditions
 * @return $this
 */',
                'startLine' => 1917,
                'endLine' => 1932,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'withCasts' => [
                'name' => 'withCasts',
                'parameters' => [
                    'casts' => [
                        'name' => 'casts',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1940,
                        'endLine' => 1940,
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
 * Apply query-time casts to the model instance.
 *
 * @param  array  $casts
 * @return $this
 */',
                'startLine' => 1940,
                'endLine' => 1945,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'withSavepointIfNeeded' => [
                'name' => 'withSavepointIfNeeded',
                'parameters' => [
                    'scope' => [
                        'name' => 'scope',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1955,
                        'endLine' => 1955,
                        'startColumn' => 43,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'mixed',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given Closure within a transaction savepoint if needed.
 *
 * @template TModelValue
 *
 * @param  \\Closure(): TModelValue  $scope
 * @return TModelValue
 */',
                'startLine' => 1955,
                'endLine' => 1960,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'getUnionBuilders' => [
                'name' => 'getUnionBuilders',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the Eloquent builder instances that are used in the union of the query.
 *
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 1967,
                'endLine' => 1972,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'getQuery' => [
                'name' => 'getQuery',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the underlying query builder instance.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
                'startLine' => 1979,
                'endLine' => 1982,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'setQuery' => [
                'name' => 'setQuery',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1990,
                        'endLine' => 1990,
                        'startColumn' => 30,
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
 * Set the underlying query builder instance.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return $this
 */',
                'startLine' => 1990,
                'endLine' => 1995,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'toBase' => [
                'name' => 'toBase',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a base query builder instance.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
                'startLine' => 2002,
                'endLine' => 2005,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'getEagerLoads' => [
                'name' => 'getEagerLoads',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the relationships being eagerly loaded.
 *
 * @return array
 */',
                'startLine' => 2012,
                'endLine' => 2015,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'setEagerLoads' => [
                'name' => 'setEagerLoads',
                'parameters' => [
                    'eagerLoad' => [
                        'name' => 'eagerLoad',
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
                        'startLine' => 2023,
                        'endLine' => 2023,
                        'startColumn' => 35,
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
 * Set the relationships being eagerly loaded.
 *
 * @param  array  $eagerLoad
 * @return $this
 */',
                'startLine' => 2023,
                'endLine' => 2028,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'withoutEagerLoad' => [
                'name' => 'withoutEagerLoad',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
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
                        'startLine' => 2036,
                        'endLine' => 2036,
                        'startColumn' => 38,
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
 * Indicate that the given relationships should not be eagerly loaded.
 *
 * @param  array  $relations
 * @return $this
 */',
                'startLine' => 2036,
                'endLine' => 2041,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'withoutEagerLoads' => [
                'name' => 'withoutEagerLoads',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flush the relationships being eagerly loaded.
 *
 * @return $this
 */',
                'startLine' => 2048,
                'endLine' => 2051,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'getLimit' => [
                'name' => 'getLimit',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the "limit" value from the query or null if it\'s not set.
 *
 * @return mixed
 */',
                'startLine' => 2058,
                'endLine' => 2061,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'getOffset' => [
                'name' => 'getOffset',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the "offset" value from the query or null if it\'s not set.
 *
 * @return mixed
 */',
                'startLine' => 2068,
                'endLine' => 2071,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'defaultKeyName' => [
                'name' => 'defaultKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default key name of the table.
 *
 * @return string
 */',
                'startLine' => 2078,
                'endLine' => 2081,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'getModel' => [
                'name' => 'getModel',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the model instance being queried.
 *
 * @return TModel
 */',
                'startLine' => 2088,
                'endLine' => 2091,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'setModel' => [
                'name' => 'setModel',
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
                        'startLine' => 2101,
                        'endLine' => 2101,
                        'startColumn' => 30,
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
 * Set a model instance for the model being queried.
 *
 * @template TModelNew of \\Illuminate\\Database\\Eloquent\\Model
 *
 * @param  TModelNew  $model
 * @return static<TModelNew>
 */',
                'startLine' => 2101,
                'endLine' => 2108,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'qualifyColumn' => [
                'name' => 'qualifyColumn',
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
                        'startLine' => 2116,
                        'endLine' => 2116,
                        'startColumn' => 35,
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
 * Qualify the given column name by the model\'s table.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return string
 */',
                'startLine' => 2116,
                'endLine' => 2121,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'qualifyColumns' => [
                'name' => 'qualifyColumns',
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
                        'startLine' => 2129,
                        'endLine' => 2129,
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
 * Qualify the given columns with the model\'s table.
 *
 * @param  array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $columns
 * @return array
 */',
                'startLine' => 2129,
                'endLine' => 2132,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'getMacro' => [
                'name' => 'getMacro',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2140,
                        'endLine' => 2140,
                        'startColumn' => 30,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the given macro by name.
 *
 * @param  string  $name
 * @return \\Closure
 */',
                'startLine' => 2140,
                'endLine' => 2143,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'hasMacro' => [
                'name' => 'hasMacro',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2151,
                        'endLine' => 2151,
                        'startColumn' => 30,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Checks if a macro is registered.
 *
 * @param  string  $name
 * @return bool
 */',
                'startLine' => 2151,
                'endLine' => 2154,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'getGlobalMacro' => [
                'name' => 'getGlobalMacro',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2162,
                        'endLine' => 2162,
                        'startColumn' => 43,
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
 * Get the given global macro by name.
 *
 * @param  string  $name
 * @return \\Closure
 */',
                'startLine' => 2162,
                'endLine' => 2165,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'hasGlobalMacro' => [
                'name' => 'hasGlobalMacro',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2173,
                        'endLine' => 2173,
                        'startColumn' => 43,
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
 * Checks if a global macro is registered.
 *
 * @param  string  $name
 * @return bool
 */',
                'startLine' => 2173,
                'endLine' => 2176,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            '__get' => [
                'name' => '__get',
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
                        'startLine' => 2186,
                        'endLine' => 2186,
                        'startColumn' => 27,
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
 * Dynamically access builder proxies.
 *
 * @param  string  $key
 * @return mixed
 *
 * @throws \\Exception
 */',
                'startLine' => 2186,
                'endLine' => 2197,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                        'startLine' => 2206,
                        'endLine' => 2206,
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
                        'startLine' => 2206,
                        'endLine' => 2206,
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
 * Dynamically handle calls into the query instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 2206,
                'endLine' => 2241,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            '__callStatic' => [
                'name' => '__callStatic',
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
                        'startLine' => 2252,
                        'endLine' => 2252,
                        'startColumn' => 41,
                        'endColumn' => 47,
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
                        'startLine' => 2252,
                        'endLine' => 2252,
                        'startColumn' => 50,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dynamically handle calls into the query instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\BadMethodCallException
 */',
                'startLine' => 2252,
                'endLine' => 2275,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'registerMixin' => [
                'name' => 'registerMixin',
                'parameters' => [
                    'mixin' => [
                        'name' => 'mixin',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2284,
                        'endLine' => 2284,
                        'startColumn' => 45,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2284,
                        'endLine' => 2284,
                        'startColumn' => 53,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register the given mixin with the builder.
 *
 * @param  string  $mixin
 * @param  bool  $replace
 * @return void
 */',
                'startLine' => 2284,
                'endLine' => 2295,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'clone' => [
                'name' => 'clone',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Clone the Eloquent query builder.
 *
 * @return static
 */',
                'startLine' => 2302,
                'endLine' => 2305,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            'onClone' => [
                'name' => 'onClone',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2313,
                        'endLine' => 2313,
                        'startColumn' => 29,
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
 * Register a closure to be invoked on a clone.
 *
 * @param  \\Closure  $callback
 * @return $this
 */',
                'startLine' => 2313,
                'endLine' => 2318,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
            '__clone' => [
                'name' => '__clone',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Force a clone of the underlying query builder when cloning.
 *
 * @return void
 */',
                'startLine' => 2325,
                'endLine' => 2332,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Builder',
                'aliasName' => null,
            ],
        ],
        'traitsData' => [
            'aliases' => [
                'Illuminate\\Database\\Concerns\\BuildsQueries' => [
                    0 => [
                        'alias' => 'baseSole',
                        'method' => 'sole',
                        'hash' => 'illuminate\\database\\concerns\\buildsqueries::sole',
                    ],
                ],
            ],
            'modifiers' => [
            ],
            'precedences' => [
            ],
            'hashes' => [
                'illuminate\\database\\concerns\\buildsqueries::sole' => 'Illuminate\\Database\\Concerns\\BuildsQueries::sole',
            ],
        ],
    ],
]);
