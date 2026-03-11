<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/TaggedCache.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Cache\TaggedCache
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-68e6b5ad32c13b631af1b04492b7142db387e9c59b79e7dcec4343748dfc792a-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Cache\\TaggedCache',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Cache/TaggedCache.php',
            ],
        ],
        'namespace' => 'Illuminate\\Cache',
        'name' => 'Illuminate\\Cache\\TaggedCache',
        'shortName' => 'TaggedCache',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 134,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Cache\\Repository',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Cache\\RetrievesMultipleKeys',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'tags' => [
                'declaringClassName' => 'Illuminate\\Cache\\TaggedCache',
                'implementingClassName' => 'Illuminate\\Cache\\TaggedCache',
                'name' => 'tags',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The tag set instance.
 *
 * @var \\Illuminate\\Cache\\TagSet
 */',
                'attributes' => [
                ],
                'startLine' => 20,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 20,
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
                    'store' => [
                        'name' => 'store',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Cache\\Store',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 28,
                        'endLine' => 28,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'tags' => [
                        'name' => 'tags',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Cache\\TagSet',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 28,
                        'endLine' => 28,
                        'startColumn' => 47,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new tagged cache instance.
 *
 * @param  \\Illuminate\\Contracts\\Cache\\Store  $store
 * @param  \\Illuminate\\Cache\\TagSet  $tags
 */',
                'startLine' => 28,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\TaggedCache',
                'implementingClassName' => 'Illuminate\\Cache\\TaggedCache',
                'currentClassName' => 'Illuminate\\Cache\\TaggedCache',
                'aliasName' => null,
            ],
            'putMany' => [
                'name' => 'putMany',
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
                        'startLine' => 42,
                        'endLine' => 42,
                        'startColumn' => 29,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ttl' => [
                        'name' => 'ttl',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 42,
                                'endLine' => 42,
                                'startTokenPos' => 110,
                                'startFilePos' => 917,
                                'endTokenPos' => 110,
                                'endFilePos' => 920,
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
                        'startColumn' => 44,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Store multiple items in the cache for a given number of seconds.
 *
 * @param  array  $values
 * @param  int|null  $ttl
 * @return bool
 */',
                'startLine' => 42,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\TaggedCache',
                'implementingClassName' => 'Illuminate\\Cache\\TaggedCache',
                'currentClassName' => 'Illuminate\\Cache\\TaggedCache',
                'aliasName' => null,
            ],
            'increment' => [
                'name' => 'increment',
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
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 31,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 58,
                                'endLine' => 58,
                                'startTokenPos' => 169,
                                'startFilePos' => 1279,
                                'endTokenPos' => 169,
                                'endFilePos' => 1279,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 37,
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
 * Increment the value of an item in the cache.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return int|bool
 */',
                'startLine' => 58,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\TaggedCache',
                'implementingClassName' => 'Illuminate\\Cache\\TaggedCache',
                'currentClassName' => 'Illuminate\\Cache\\TaggedCache',
                'aliasName' => null,
            ],
            'decrement' => [
                'name' => 'decrement',
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
                        'startLine' => 70,
                        'endLine' => 70,
                        'startColumn' => 31,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 70,
                                'endLine' => 70,
                                'startTokenPos' => 211,
                                'startFilePos' => 1566,
                                'endTokenPos' => 211,
                                'endFilePos' => 1566,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 70,
                        'endLine' => 70,
                        'startColumn' => 37,
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
 * Decrement the value of an item in the cache.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return int|bool
 */',
                'startLine' => 70,
                'endLine' => 73,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\TaggedCache',
                'implementingClassName' => 'Illuminate\\Cache\\TaggedCache',
                'currentClassName' => 'Illuminate\\Cache\\TaggedCache',
                'aliasName' => null,
            ],
            'flush' => [
                'name' => 'flush',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove all items from the cache.
 *
 * @return bool
 */',
                'startLine' => 80,
                'endLine' => 89,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\TaggedCache',
                'implementingClassName' => 'Illuminate\\Cache\\TaggedCache',
                'currentClassName' => 'Illuminate\\Cache\\TaggedCache',
                'aliasName' => null,
            ],
            'itemKey' => [
                'name' => 'itemKey',
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
                        'startLine' => 94,
                        'endLine' => 94,
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
 * {@inheritdoc}
 */',
                'startLine' => 94,
                'endLine' => 97,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\TaggedCache',
                'implementingClassName' => 'Illuminate\\Cache\\TaggedCache',
                'currentClassName' => 'Illuminate\\Cache\\TaggedCache',
                'aliasName' => null,
            ],
            'taggedItemKey' => [
                'name' => 'taggedItemKey',
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
                        'startLine' => 105,
                        'endLine' => 105,
                        'startColumn' => 35,
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
 * Get a fully-qualified key for a tagged item.
 *
 * @param  string  $key
 * @return string
 */',
                'startLine' => 105,
                'endLine' => 108,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\TaggedCache',
                'implementingClassName' => 'Illuminate\\Cache\\TaggedCache',
                'currentClassName' => 'Illuminate\\Cache\\TaggedCache',
                'aliasName' => null,
            ],
            'event' => [
                'name' => 'event',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 116,
                        'endLine' => 116,
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
 * Fire an event for this cache instance.
 *
 * @param  object  $event
 * @return void
 */',
                'startLine' => 116,
                'endLine' => 123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\TaggedCache',
                'implementingClassName' => 'Illuminate\\Cache\\TaggedCache',
                'currentClassName' => 'Illuminate\\Cache\\TaggedCache',
                'aliasName' => null,
            ],
            'getTags' => [
                'name' => 'getTags',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the tag set instance.
 *
 * @return \\Illuminate\\Cache\\TagSet
 */',
                'startLine' => 130,
                'endLine' => 133,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Cache',
                'declaringClassName' => 'Illuminate\\Cache\\TaggedCache',
                'implementingClassName' => 'Illuminate\\Cache\\TaggedCache',
                'currentClassName' => 'Illuminate\\Cache\\TaggedCache',
                'aliasName' => null,
            ],
        ],
        'traitsData' => [
            'aliases' => [
                'Illuminate\\Cache\\RetrievesMultipleKeys' => [
                    0 => [
                        'alias' => 'putManyAlias',
                        'method' => 'putMany',
                        'hash' => 'illuminate\\cache\\retrievesmultiplekeys::putmany',
                    ],
                ],
            ],
            'modifiers' => [
            ],
            'precedences' => [
            ],
            'hashes' => [
                'illuminate\\cache\\retrievesmultiplekeys::putmany' => 'Illuminate\\Cache\\RetrievesMultipleKeys::putMany',
            ],
        ],
    ],
]);
