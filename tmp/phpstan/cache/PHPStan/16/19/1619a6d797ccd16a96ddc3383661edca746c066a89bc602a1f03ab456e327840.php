<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HasTimestamps.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Concerns\HasTimestamps
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-9fa7c087144f0d53f5770e26469c547f75934d320c239b7a2bfba21e955d5c2c-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HasTimestamps.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'name' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
        'shortName' => 'HasTimestamps',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 7,
        'endLine' => 232,
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
            'timestamps' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'name' => 'timestamps',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => 'true',
                    'attributes' => [
                        'startLine' => 14,
                        'endLine' => 14,
                        'startTokenPos' => 26,
                        'startFilePos' => 235,
                        'endTokenPos' => 26,
                        'endFilePos' => 238,
                    ],
                ],
                'docComment' => '/**
 * Indicates if the model should be timestamped.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 14,
                'endLine' => 14,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'ignoreTimestampsOn' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'name' => 'ignoreTimestampsOn',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 21,
                        'endLine' => 21,
                        'startTokenPos' => 39,
                        'startFilePos' => 403,
                        'endTokenPos' => 40,
                        'endFilePos' => 404,
                    ],
                ],
                'docComment' => '/**
 * The list of models classes that have timestamps temporarily disabled.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 21,
                'endLine' => 21,
                'startColumn' => 5,
                'endColumn' => 46,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'touch' => [
                'name' => 'touch',
                'parameters' => [
                    'attribute' => [
                        'name' => 'attribute',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 29,
                                'endLine' => 29,
                                'startTokenPos' => 55,
                                'startFilePos' => 573,
                                'endTokenPos' => 55,
                                'endFilePos' => 576,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 29,
                        'endLine' => 29,
                        'startColumn' => 27,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Update the model\'s update timestamp.
 *
 * @param  string|null  $attribute
 * @return bool
 */',
                'startLine' => 29,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'aliasName' => null,
            ],
            'touchQuietly' => [
                'name' => 'touchQuietly',
                'parameters' => [
                    'attribute' => [
                        'name' => 'attribute',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 52,
                                'endLine' => 52,
                                'startTokenPos' => 143,
                                'startFilePos' => 1064,
                                'endTokenPos' => 143,
                                'endFilePos' => 1067,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 52,
                        'endLine' => 52,
                        'startColumn' => 34,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Update the model\'s update timestamp without raising any events.
 *
 * @param  string|null  $attribute
 * @return bool
 */',
                'startLine' => 52,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'aliasName' => null,
            ],
            'updateTimestamps' => [
                'name' => 'updateTimestamps',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Update the creation and update timestamps.
 *
 * @return $this
 */',
                'startLine' => 62,
                'endLine' => 79,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'aliasName' => null,
            ],
            'setCreatedAt' => [
                'name' => 'setCreatedAt',
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
                        'startLine' => 87,
                        'endLine' => 87,
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
 * Set the value of the "created at" attribute.
 *
 * @param  mixed  $value
 * @return $this
 */',
                'startLine' => 87,
                'endLine' => 92,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'aliasName' => null,
            ],
            'setUpdatedAt' => [
                'name' => 'setUpdatedAt',
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
                        'startLine' => 100,
                        'endLine' => 100,
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
 * Set the value of the "updated at" attribute.
 *
 * @param  mixed  $value
 * @return $this
 */',
                'startLine' => 100,
                'endLine' => 105,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'aliasName' => null,
            ],
            'freshTimestamp' => [
                'name' => 'freshTimestamp',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a fresh timestamp for the model.
 *
 * @return \\Illuminate\\Support\\Carbon
 */',
                'startLine' => 112,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'aliasName' => null,
            ],
            'freshTimestampString' => [
                'name' => 'freshTimestampString',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a fresh timestamp for the model.
 *
 * @return string
 */',
                'startLine' => 122,
                'endLine' => 125,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'aliasName' => null,
            ],
            'usesTimestamps' => [
                'name' => 'usesTimestamps',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the model uses timestamps.
 *
 * @return bool
 */',
                'startLine' => 132,
                'endLine' => 135,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'aliasName' => null,
            ],
            'getCreatedAtColumn' => [
                'name' => 'getCreatedAtColumn',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the "created at" column.
 *
 * @return string|null
 */',
                'startLine' => 142,
                'endLine' => 145,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'aliasName' => null,
            ],
            'getUpdatedAtColumn' => [
                'name' => 'getUpdatedAtColumn',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the "updated at" column.
 *
 * @return string|null
 */',
                'startLine' => 152,
                'endLine' => 155,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'aliasName' => null,
            ],
            'getQualifiedCreatedAtColumn' => [
                'name' => 'getQualifiedCreatedAtColumn',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the fully-qualified "created at" column.
 *
 * @return string|null
 */',
                'startLine' => 162,
                'endLine' => 167,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'aliasName' => null,
            ],
            'getQualifiedUpdatedAtColumn' => [
                'name' => 'getQualifiedUpdatedAtColumn',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the fully-qualified "updated at" column.
 *
 * @return string|null
 */',
                'startLine' => 174,
                'endLine' => 179,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'aliasName' => null,
            ],
            'withoutTimestamps' => [
                'name' => 'withoutTimestamps',
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
                        'startLine' => 187,
                        'endLine' => 187,
                        'startColumn' => 46,
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
 * Disable timestamps for the current class during the given callback scope.
 *
 * @param  callable  $callback
 * @return mixed
 */',
                'startLine' => 187,
                'endLine' => 190,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'aliasName' => null,
            ],
            'withoutTimestampsOn' => [
                'name' => 'withoutTimestampsOn',
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
                        'startLine' => 199,
                        'endLine' => 199,
                        'startColumn' => 48,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 199,
                        'endLine' => 199,
                        'startColumn' => 57,
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
 * Disable timestamps for the given model classes during the given callback scope.
 *
 * @param  array  $models
 * @param  callable  $callback
 * @return mixed
 */',
                'startLine' => 199,
                'endLine' => 212,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'aliasName' => null,
            ],
            'isIgnoringTimestamps' => [
                'name' => 'isIgnoringTimestamps',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 220,
                                'endLine' => 220,
                                'startTokenPos' => 748,
                                'startFilePos' => 5023,
                                'endTokenPos' => 748,
                                'endFilePos' => 5026,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 220,
                        'endLine' => 220,
                        'startColumn' => 49,
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
 * Determine if the given model is ignoring timestamps / touches.
 *
 * @param  string|null  $class
 * @return bool
 */',
                'startLine' => 220,
                'endLine' => 231,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
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
