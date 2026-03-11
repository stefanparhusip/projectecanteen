<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/View/Factory.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\View\Factory
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-8103d999989c2385bb482b5a3530e7d84a103f1626bbd0c9d386818219330753-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\View\\Factory',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/View/Factory.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\View',
        'name' => 'Illuminate\\Contracts\\View\\Factory',
        'shortName' => 'Factory',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 79,
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
            'exists' => [
                'name' => 'exists',
                'parameters' => [
                    'view' => [
                        'name' => 'view',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 13,
                        'endLine' => 13,
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
 * Determine if a given view exists.
 *
 * @param  string  $view
 * @return bool
 */',
                'startLine' => 13,
                'endLine' => 13,
                'startColumn' => 5,
                'endColumn' => 34,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\View',
                'declaringClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'implementingClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'currentClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'aliasName' => null,
            ],
            'file' => [
                'name' => 'file',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 23,
                        'endLine' => 23,
                        'startColumn' => 26,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'data' => [
                        'name' => 'data',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 23,
                                'endLine' => 23,
                                'startTokenPos' => 40,
                                'startFilePos' => 513,
                                'endTokenPos' => 41,
                                'endFilePos' => 514,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 23,
                        'endLine' => 23,
                        'startColumn' => 33,
                        'endColumn' => 42,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'mergeData' => [
                        'name' => 'mergeData',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 23,
                                'endLine' => 23,
                                'startTokenPos' => 48,
                                'startFilePos' => 530,
                                'endTokenPos' => 49,
                                'endFilePos' => 531,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 23,
                        'endLine' => 23,
                        'startColumn' => 45,
                        'endColumn' => 59,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the evaluated view contents for the given path.
 *
 * @param  string  $path
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $data
 * @param  array  $mergeData
 * @return \\Illuminate\\Contracts\\View\\View
 */',
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 61,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\View',
                'declaringClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'implementingClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'currentClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'aliasName' => null,
            ],
            'make' => [
                'name' => 'make',
                'parameters' => [
                    'view' => [
                        'name' => 'view',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 33,
                        'endLine' => 33,
                        'startColumn' => 26,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'data' => [
                        'name' => 'data',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 33,
                                'endLine' => 33,
                                'startTokenPos' => 68,
                                'startFilePos' => 835,
                                'endTokenPos' => 69,
                                'endFilePos' => 836,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 33,
                        'endLine' => 33,
                        'startColumn' => 33,
                        'endColumn' => 42,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'mergeData' => [
                        'name' => 'mergeData',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 33,
                                'endLine' => 33,
                                'startTokenPos' => 76,
                                'startFilePos' => 852,
                                'endTokenPos' => 77,
                                'endFilePos' => 853,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 33,
                        'endLine' => 33,
                        'startColumn' => 45,
                        'endColumn' => 59,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the evaluated view contents for the given view.
 *
 * @param  string  $view
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $data
 * @param  array  $mergeData
 * @return \\Illuminate\\Contracts\\View\\View
 */',
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 61,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\View',
                'declaringClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'implementingClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'currentClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'aliasName' => null,
            ],
            'share' => [
                'name' => 'share',
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
                        'startLine' => 42,
                        'endLine' => 42,
                        'startColumn' => 27,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 42,
                                'endLine' => 42,
                                'startTokenPos' => 96,
                                'startFilePos' => 1060,
                                'endTokenPos' => 96,
                                'endFilePos' => 1063,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 42,
                        'endLine' => 42,
                        'startColumn' => 33,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a piece of shared data to the environment.
 *
 * @param  array|string  $key
 * @param  mixed  $value
 * @return mixed
 */',
                'startLine' => 42,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 47,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\View',
                'declaringClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'implementingClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'currentClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'aliasName' => null,
            ],
            'composer' => [
                'name' => 'composer',
                'parameters' => [
                    'views' => [
                        'name' => 'views',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 51,
                        'endLine' => 51,
                        'startColumn' => 30,
                        'endColumn' => 35,
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
                        'startLine' => 51,
                        'endLine' => 51,
                        'startColumn' => 38,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a view composer event.
 *
 * @param  array|string  $views
 * @param  \\Closure|string  $callback
 * @return array
 */',
                'startLine' => 51,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 48,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\View',
                'declaringClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'implementingClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'currentClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'aliasName' => null,
            ],
            'creator' => [
                'name' => 'creator',
                'parameters' => [
                    'views' => [
                        'name' => 'views',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 60,
                        'endLine' => 60,
                        'startColumn' => 29,
                        'endColumn' => 34,
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
                        'startLine' => 60,
                        'endLine' => 60,
                        'startColumn' => 37,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a view creator event.
 *
 * @param  array|string  $views
 * @param  \\Closure|string  $callback
 * @return array
 */',
                'startLine' => 60,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 47,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\View',
                'declaringClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'implementingClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'currentClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'aliasName' => null,
            ],
            'addNamespace' => [
                'name' => 'addNamespace',
                'parameters' => [
                    'namespace' => [
                        'name' => 'namespace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 69,
                        'endLine' => 69,
                        'startColumn' => 34,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'hints' => [
                        'name' => 'hints',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 69,
                        'endLine' => 69,
                        'startColumn' => 46,
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
 * Add a new namespace to the loader.
 *
 * @param  string  $namespace
 * @param  string|array  $hints
 * @return $this
 */',
                'startLine' => 69,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 53,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\View',
                'declaringClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'implementingClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'currentClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'aliasName' => null,
            ],
            'replaceNamespace' => [
                'name' => 'replaceNamespace',
                'parameters' => [
                    'namespace' => [
                        'name' => 'namespace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 78,
                        'endLine' => 78,
                        'startColumn' => 38,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'hints' => [
                        'name' => 'hints',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 78,
                        'endLine' => 78,
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
 * Replace the namespace hints for the given namespace.
 *
 * @param  string  $namespace
 * @param  string|array  $hints
 * @return $this
 */',
                'startLine' => 78,
                'endLine' => 78,
                'startColumn' => 5,
                'endColumn' => 57,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\View',
                'declaringClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'implementingClassName' => 'Illuminate\\Contracts\\View\\Factory',
                'currentClassName' => 'Illuminate\\Contracts\\View\\Factory',
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
