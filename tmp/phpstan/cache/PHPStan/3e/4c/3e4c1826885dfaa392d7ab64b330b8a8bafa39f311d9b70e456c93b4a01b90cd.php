<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/GuardsAttributes.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Concerns\GuardsAttributes
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-0ffecda662a87c4f7f925fff5f788542be48c5fb0ec3f16828e507f865719010-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/GuardsAttributes.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'name' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
        'shortName' => 'GuardsAttributes',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 262,
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
            'fillable' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'name' => 'fillable',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 12,
                        'endLine' => 12,
                        'startTokenPos' => 21,
                        'startFilePos' => 210,
                        'endTokenPos' => 22,
                        'endFilePos' => 211,
                    ],
                ],
                'docComment' => '/**
 * The attributes that are mass assignable.
 *
 * @var array<int, string>
 */',
                'attributes' => [
                ],
                'startLine' => 12,
                'endLine' => 12,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'guarded' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'name' => 'guarded',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'*\']',
                    'attributes' => [
                        'startLine' => 19,
                        'endLine' => 19,
                        'startTokenPos' => 33,
                        'startFilePos' => 340,
                        'endTokenPos' => 35,
                        'endFilePos' => 344,
                    ],
                ],
                'docComment' => '/**
 * The attributes that aren\'t mass assignable.
 *
 * @var array<string>
 */',
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'unguarded' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'name' => 'unguarded',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 26,
                        'endLine' => 26,
                        'startTokenPos' => 48,
                        'startFilePos' => 474,
                        'endTokenPos' => 48,
                        'endFilePos' => 478,
                    ],
                ],
                'docComment' => '/**
 * Indicates if all mass assignment is enabled.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'guardableColumns' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'name' => 'guardableColumns',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 33,
                        'endLine' => 33,
                        'startTokenPos' => 61,
                        'startFilePos' => 664,
                        'endTokenPos' => 62,
                        'endFilePos' => 665,
                    ],
                ],
                'docComment' => '/**
 * The actual columns that exist on the database and can be guarded.
 *
 * @var array<class-string,list<string>>
 */',
                'attributes' => [
                ],
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 44,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'getFillable' => [
                'name' => 'getFillable',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the fillable attributes for the model.
 *
 * @return array<string>
 */',
                'startLine' => 40,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'aliasName' => null,
            ],
            'fillable' => [
                'name' => 'fillable',
                'parameters' => [
                    'fillable' => [
                        'name' => 'fillable',
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
                        'startLine' => 51,
                        'endLine' => 51,
                        'startColumn' => 30,
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
 * Set the fillable attributes for the model.
 *
 * @param  array<string>  $fillable
 * @return $this
 */',
                'startLine' => 51,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'aliasName' => null,
            ],
            'mergeFillable' => [
                'name' => 'mergeFillable',
                'parameters' => [
                    'fillable' => [
                        'name' => 'fillable',
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
                        'startLine' => 64,
                        'endLine' => 64,
                        'startColumn' => 35,
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
 * Merge new fillable attributes with existing fillable attributes on the model.
 *
 * @param  array<string>  $fillable
 * @return $this
 */',
                'startLine' => 64,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'aliasName' => null,
            ],
            'getGuarded' => [
                'name' => 'getGuarded',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the guarded attributes for the model.
 *
 * @return array<string>
 */',
                'startLine' => 76,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'aliasName' => null,
            ],
            'guard' => [
                'name' => 'guard',
                'parameters' => [
                    'guarded' => [
                        'name' => 'guarded',
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
                        'startLine' => 89,
                        'endLine' => 89,
                        'startColumn' => 27,
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
 * Set the guarded attributes for the model.
 *
 * @param  array<string>  $guarded
 * @return $this
 */',
                'startLine' => 89,
                'endLine' => 94,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'aliasName' => null,
            ],
            'mergeGuarded' => [
                'name' => 'mergeGuarded',
                'parameters' => [
                    'guarded' => [
                        'name' => 'guarded',
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
                        'startLine' => 102,
                        'endLine' => 102,
                        'startColumn' => 34,
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
 * Merge new guarded attributes with existing guarded attributes on the model.
 *
 * @param  array<string>  $guarded
 * @return $this
 */',
                'startLine' => 102,
                'endLine' => 107,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'aliasName' => null,
            ],
            'unguard' => [
                'name' => 'unguard',
                'parameters' => [
                    'state' => [
                        'name' => 'state',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 115,
                                'endLine' => 115,
                                'startTokenPos' => 288,
                                'startFilePos' => 2441,
                                'endTokenPos' => 288,
                                'endFilePos' => 2444,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 115,
                        'endLine' => 115,
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
 * Disable all mass assignable restrictions.
 *
 * @param  bool  $state
 * @return void
 */',
                'startLine' => 115,
                'endLine' => 118,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'aliasName' => null,
            ],
            'reguard' => [
                'name' => 'reguard',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Enable the mass assignment restrictions.
 *
 * @return void
 */',
                'startLine' => 125,
                'endLine' => 128,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'aliasName' => null,
            ],
            'isUnguarded' => [
                'name' => 'isUnguarded',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the current state is "unguarded".
 *
 * @return bool
 */',
                'startLine' => 135,
                'endLine' => 138,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'aliasName' => null,
            ],
            'unguarded' => [
                'name' => 'unguarded',
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
                        'startLine' => 148,
                        'endLine' => 148,
                        'startColumn' => 38,
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
 * Run the given callable while being unguarded.
 *
 * @template TReturn
 *
 * @param  callable(): TReturn  $callback
 * @return TReturn
 */',
                'startLine' => 148,
                'endLine' => 161,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'aliasName' => null,
            ],
            'isFillable' => [
                'name' => 'isFillable',
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
                        'startLine' => 169,
                        'endLine' => 169,
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
 * Determine if the given attribute may be mass assigned.
 *
 * @param  string  $key
 * @return bool
 */',
                'startLine' => 169,
                'endLine' => 192,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'aliasName' => null,
            ],
            'isGuarded' => [
                'name' => 'isGuarded',
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
                        'startLine' => 200,
                        'endLine' => 200,
                        'startColumn' => 31,
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
 * Determine if the given key is guarded.
 *
 * @param  string  $key
 * @return bool
 */',
                'startLine' => 200,
                'endLine' => 209,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'aliasName' => null,
            ],
            'isGuardableColumn' => [
                'name' => 'isGuardableColumn',
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
                        'startLine' => 217,
                        'endLine' => 217,
                        'startColumn' => 42,
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
 * Determine if the given column is a valid, guardable column.
 *
 * @param  string  $key
 * @return bool
 */',
                'startLine' => 217,
                'endLine' => 236,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'aliasName' => null,
            ],
            'totallyGuarded' => [
                'name' => 'totallyGuarded',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the model is totally guarded.
 *
 * @return bool
 */',
                'startLine' => 243,
                'endLine' => 246,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'aliasName' => null,
            ],
            'fillableFromArray' => [
                'name' => 'fillableFromArray',
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
                        'startLine' => 254,
                        'endLine' => 254,
                        'startColumn' => 42,
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
 * Get the fillable attributes of a given array.
 *
 * @param  array<string, mixed>  $attributes
 * @return array<string, mixed>
 */',
                'startLine' => 254,
                'endLine' => 261,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
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
