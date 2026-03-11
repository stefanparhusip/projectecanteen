<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/ModelNotFoundException.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\ModelNotFoundException
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-57cdd6a28037394a59e8009e6f8ca973be35f5171266269ae4bafb3a1ff6453b-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/ModelNotFoundException.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'name' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
        'shortName' => 'ModelNotFoundException',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @template TModel of \\Illuminate\\Database\\Eloquent\\Model
 */',
        'attributes' => [
        ],
        'startLine' => 11,
        'endLine' => 69,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\RecordsNotFoundException',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'model' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
                'name' => 'model',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * Name of the affected Eloquent model.
 *
 * @var class-string<TModel>
 */',
                'attributes' => [
                ],
                'startLine' => 18,
                'endLine' => 18,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'ids' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
                'name' => 'ids',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The affected model IDs.
 *
 * @var array<int, int|string>
 */',
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 19,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'setModel' => [
                'name' => 'setModel',
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
                        'startLine' => 34,
                        'endLine' => 34,
                        'startColumn' => 30,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ids' => [
                        'name' => 'ids',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 34,
                                'endLine' => 34,
                                'startTokenPos' => 58,
                                'startFilePos' => 735,
                                'endTokenPos' => 59,
                                'endFilePos' => 736,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 34,
                        'endLine' => 34,
                        'startColumn' => 38,
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
 * Set the affected Eloquent model and instance ids.
 *
 * @param  class-string<TModel>  $model
 * @param  array<int, int|string>|int|string  $ids
 * @return $this
 */',
                'startLine' => 34,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
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
 * Get the affected Eloquent model.
 *
 * @return class-string<TModel>
 */',
                'startLine' => 55,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
                'aliasName' => null,
            ],
            'getIds' => [
                'name' => 'getIds',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the affected Eloquent model IDs.
 *
 * @return array<int, int|string>
 */',
                'startLine' => 65,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
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
