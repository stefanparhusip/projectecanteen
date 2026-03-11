<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/SerializesAndRestoresModelIdentifiers.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Queue\SerializesAndRestoresModelIdentifiers
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-d4cb97259a134d2089c54c969c2176704f0df2fa2483f149b61029c5c993f82d-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/SerializesAndRestoresModelIdentifiers.php',
            ],
        ],
        'namespace' => 'Illuminate\\Queue',
        'name' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
        'shortName' => 'SerializesAndRestoresModelIdentifiers',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 13,
        'endLine' => 128,
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
            'getSerializedPropertyValue' => [
                'name' => 'getSerializedPropertyValue',
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
                        'startLine' => 22,
                        'endLine' => 22,
                        'startColumn' => 51,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'withRelations' => [
                        'name' => 'withRelations',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 22,
                                'endLine' => 22,
                                'startTokenPos' => 67,
                                'startFilePos' => 689,
                                'endTokenPos' => 67,
                                'endFilePos' => 692,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 22,
                        'endLine' => 22,
                        'startColumn' => 59,
                        'endColumn' => 79,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the property value prepared for serialization.
 *
 * @param  mixed  $value
 * @param  bool  $withRelations
 * @return mixed
 */',
                'startLine' => 22,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue',
                'declaringClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'implementingClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'currentClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'aliasName' => null,
            ],
            'getRestoredPropertyValue' => [
                'name' => 'getRestoredPropertyValue',
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
                        'startLine' => 55,
                        'endLine' => 55,
                        'startColumn' => 49,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the restored property value after deserialization.
 *
 * @param  mixed  $value
 * @return mixed
 */',
                'startLine' => 55,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue',
                'declaringClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'implementingClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'currentClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'aliasName' => null,
            ],
            'restoreCollection' => [
                'name' => 'restoreCollection',
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
                        'startLine' => 72,
                        'endLine' => 72,
                        'startColumn' => 42,
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
 * Restore a queueable collection instance.
 *
 * @param  \\Illuminate\\Contracts\\Database\\ModelIdentifier  $value
 * @return \\Illuminate\\Database\\Eloquent\\Collection
 */',
                'startLine' => 72,
                'endLine' => 100,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue',
                'declaringClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'implementingClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'currentClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'aliasName' => null,
            ],
            'restoreModel' => [
                'name' => 'restoreModel',
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
                        'startLine' => 108,
                        'endLine' => 108,
                        'startColumn' => 34,
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
 * Restore the model from the model identifier instance.
 *
 * @param  \\Illuminate\\Contracts\\Database\\ModelIdentifier  $value
 * @return \\Illuminate\\Database\\Eloquent\\Model
 */',
                'startLine' => 108,
                'endLine' => 113,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Queue',
                'declaringClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'implementingClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'currentClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'aliasName' => null,
            ],
            'getQueryForModelRestoration' => [
                'name' => 'getQueryForModelRestoration',
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
                        'startLine' => 124,
                        'endLine' => 124,
                        'startColumn' => 52,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ids' => [
                        'name' => 'ids',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 124,
                        'endLine' => 124,
                        'startColumn' => 60,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the query for model restoration.
 *
 * @template TModel of \\Illuminate\\Database\\Eloquent\\Model
 *
 * @param  TModel  $model
 * @param  array|int  $ids
 * @return \\Illuminate\\Database\\Eloquent\\Builder<TModel>
 */',
                'startLine' => 124,
                'endLine' => 127,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue',
                'declaringClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'implementingClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
                'currentClassName' => 'Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers',
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
