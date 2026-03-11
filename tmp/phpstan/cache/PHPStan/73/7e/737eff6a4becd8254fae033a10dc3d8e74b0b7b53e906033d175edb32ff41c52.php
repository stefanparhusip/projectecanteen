<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Collections/HigherOrderCollectionProxy.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\HigherOrderCollectionProxy
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-d349049fb2e7ef3bca390a46335831efd74be239f6f406c70e92760dea8880ce-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Collections/HigherOrderCollectionProxy.php',
            ],
        ],
        'namespace' => 'Illuminate\\Support',
        'name' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
        'shortName' => 'HigherOrderCollectionProxy',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @template TKey of array-key
 *
 * @template-covariant TValue
 *
 * @mixin \\Illuminate\\Support\\Enumerable<TKey, TValue>
 * @mixin TValue
 */',
        'attributes' => [
        ],
        'startLine' => 13,
        'endLine' => 69,
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
            'collection' => [
                'declaringClassName' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
                'implementingClassName' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
                'name' => 'collection',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The collection being operated on.
 *
 * @var \\Illuminate\\Support\\Enumerable<TKey, TValue>
 */',
                'attributes' => [
                ],
                'startLine' => 20,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'method' => [
                'declaringClassName' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
                'implementingClassName' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
                'name' => 'method',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The method being proxied.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 27,
                'endLine' => 27,
                'startColumn' => 5,
                'endColumn' => 22,
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
                    'collection' => [
                        'name' => 'collection',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Support\\Enumerable',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 35,
                        'endLine' => 35,
                        'startColumn' => 33,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 35,
                        'endLine' => 35,
                        'startColumn' => 57,
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
 * Create a new proxy instance.
 *
 * @param  \\Illuminate\\Support\\Enumerable<TKey, TValue>  $collection
 * @param  string  $method
 */',
                'startLine' => 35,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
                'implementingClassName' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
                'currentClassName' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
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
                        'startLine' => 47,
                        'endLine' => 47,
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
 * Proxy accessing an attribute onto the collection items.
 *
 * @param  string  $key
 * @return mixed
 */',
                'startLine' => 47,
                'endLine' => 52,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
                'implementingClassName' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
                'currentClassName' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
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
                        'startLine' => 61,
                        'endLine' => 61,
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
                        'startLine' => 61,
                        'endLine' => 61,
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
 * Proxy a method call onto the collection items.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 61,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
                'implementingClassName' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
                'currentClassName' => 'Illuminate\\Support\\HigherOrderCollectionProxy',
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
