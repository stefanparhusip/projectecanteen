<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Container/Container.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Container\Container
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-cca1c6c4c50aa8bf7007e786cde473cc9bab83317367f384ab711a0c4d305611-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Container\\Container',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Container/Container.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Container',
        'name' => 'Illuminate\\Contracts\\Container\\Container',
        'shortName' => 'Container',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 235,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Psr\\Container\\ContainerInterface',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'get' => [
                'name' => 'get',
                'parameters' => [
                    'id' => [
                        'name' => 'id',
                        'default' => null,
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
                        'startLine' => 18,
                        'endLine' => 18,
                        'startColumn' => 25,
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
 * {@inheritdoc}
 *
 * @template TClass of object
 *
 * @param  string|class-string<TClass>  $id
 * @return ($id is class-string<TClass> ? TClass : mixed)
 */',
                'startLine' => 18,
                'endLine' => 18,
                'startColumn' => 5,
                'endColumn' => 36,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'bound' => [
                'name' => 'bound',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 26,
                        'endLine' => 26,
                        'startColumn' => 27,
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
 * Determine if the given abstract type has been bound.
 *
 * @param  string  $abstract
 * @return bool
 */',
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 37,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'alias' => [
                'name' => 'alias',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 37,
                        'endLine' => 37,
                        'startColumn' => 27,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'alias' => [
                        'name' => 'alias',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 37,
                        'endLine' => 37,
                        'startColumn' => 38,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Alias a type to a different name.
 *
 * @param  string  $abstract
 * @param  string  $alias
 * @return void
 *
 * @throws \\LogicException
 */',
                'startLine' => 37,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 45,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'tag' => [
                'name' => 'tag',
                'parameters' => [
                    'abstracts' => [
                        'name' => 'abstracts',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 46,
                        'endLine' => 46,
                        'startColumn' => 25,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'tags' => [
                        'name' => 'tags',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 46,
                        'endLine' => 46,
                        'startColumn' => 37,
                        'endColumn' => 41,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assign a set of tags to a given binding.
 *
 * @param  array|string  $abstracts
 * @param  mixed  ...$tags
 * @return void
 */',
                'startLine' => 46,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'tagged' => [
                'name' => 'tagged',
                'parameters' => [
                    'tag' => [
                        'name' => 'tag',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 54,
                        'endLine' => 54,
                        'startColumn' => 28,
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
 * Resolve all of the bindings for a given tag.
 *
 * @param  string  $tag
 * @return iterable
 */',
                'startLine' => 54,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'bind' => [
                'name' => 'bind',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 64,
                        'endLine' => 64,
                        'startColumn' => 26,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'concrete' => [
                        'name' => 'concrete',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 64,
                                'endLine' => 64,
                                'startTokenPos' => 110,
                                'startFilePos' => 1415,
                                'endTokenPos' => 110,
                                'endFilePos' => 1418,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 64,
                        'endLine' => 64,
                        'startColumn' => 37,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'shared' => [
                        'name' => 'shared',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 64,
                                'endLine' => 64,
                                'startTokenPos' => 117,
                                'startFilePos' => 1431,
                                'endTokenPos' => 117,
                                'endFilePos' => 1435,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 64,
                        'endLine' => 64,
                        'startColumn' => 55,
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
 * Register a binding with the container.
 *
 * @param  \\Closure|string  $abstract
 * @param  \\Closure|string|null  $concrete
 * @param  bool  $shared
 * @return void
 */',
                'startLine' => 64,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 71,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'bindMethod' => [
                'name' => 'bindMethod',
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
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 32,
                        'endColumn' => 38,
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
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 41,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Bind a callback to resolve with Container::call.
 *
 * @param  array|string  $method
 * @param  \\Closure  $callback
 * @return void
 */',
                'startLine' => 73,
                'endLine' => 73,
                'startColumn' => 5,
                'endColumn' => 51,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'bindIf' => [
                'name' => 'bindIf',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 83,
                        'endLine' => 83,
                        'startColumn' => 28,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'concrete' => [
                        'name' => 'concrete',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 83,
                                'endLine' => 83,
                                'startTokenPos' => 151,
                                'startFilePos' => 1939,
                                'endTokenPos' => 151,
                                'endFilePos' => 1942,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 83,
                        'endLine' => 83,
                        'startColumn' => 39,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'shared' => [
                        'name' => 'shared',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 83,
                                'endLine' => 83,
                                'startTokenPos' => 158,
                                'startFilePos' => 1955,
                                'endTokenPos' => 158,
                                'endFilePos' => 1959,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 83,
                        'endLine' => 83,
                        'startColumn' => 57,
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
 * Register a binding if it hasn\'t already been registered.
 *
 * @param  \\Closure|string  $abstract
 * @param  \\Closure|string|null  $concrete
 * @param  bool  $shared
 * @return void
 */',
                'startLine' => 83,
                'endLine' => 83,
                'startColumn' => 5,
                'endColumn' => 73,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'singleton' => [
                'name' => 'singleton',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 92,
                        'endLine' => 92,
                        'startColumn' => 31,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'concrete' => [
                        'name' => 'concrete',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 92,
                                'endLine' => 92,
                                'startTokenPos' => 177,
                                'startFilePos' => 2200,
                                'endTokenPos' => 177,
                                'endFilePos' => 2203,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 92,
                        'endLine' => 92,
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
 * Register a shared binding in the container.
 *
 * @param  \\Closure|string  $abstract
 * @param  \\Closure|string|null  $concrete
 * @return void
 */',
                'startLine' => 92,
                'endLine' => 92,
                'startColumn' => 5,
                'endColumn' => 59,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'singletonIf' => [
                'name' => 'singletonIf',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 101,
                        'endLine' => 101,
                        'startColumn' => 33,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'concrete' => [
                        'name' => 'concrete',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 101,
                                'endLine' => 101,
                                'startTokenPos' => 196,
                                'startFilePos' => 2466,
                                'endTokenPos' => 196,
                                'endFilePos' => 2469,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 101,
                        'endLine' => 101,
                        'startColumn' => 44,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a shared binding if it hasn\'t already been registered.
 *
 * @param  \\Closure|string  $abstract
 * @param  \\Closure|string|null  $concrete
 * @return void
 */',
                'startLine' => 101,
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 61,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'scoped' => [
                'name' => 'scoped',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 110,
                        'endLine' => 110,
                        'startColumn' => 28,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'concrete' => [
                        'name' => 'concrete',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 110,
                                'endLine' => 110,
                                'startTokenPos' => 215,
                                'startFilePos' => 2707,
                                'endTokenPos' => 215,
                                'endFilePos' => 2710,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 110,
                        'endLine' => 110,
                        'startColumn' => 39,
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
 * Register a scoped binding in the container.
 *
 * @param  \\Closure|string  $abstract
 * @param  \\Closure|string|null  $concrete
 * @return void
 */',
                'startLine' => 110,
                'endLine' => 110,
                'startColumn' => 5,
                'endColumn' => 56,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'scopedIf' => [
                'name' => 'scopedIf',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 119,
                        'endLine' => 119,
                        'startColumn' => 30,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'concrete' => [
                        'name' => 'concrete',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 119,
                                'endLine' => 119,
                                'startTokenPos' => 234,
                                'startFilePos' => 2970,
                                'endTokenPos' => 234,
                                'endFilePos' => 2973,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 119,
                        'endLine' => 119,
                        'startColumn' => 41,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a scoped binding if it hasn\'t already been registered.
 *
 * @param  \\Closure|string  $abstract
 * @param  \\Closure|string|null  $concrete
 * @return void
 */',
                'startLine' => 119,
                'endLine' => 119,
                'startColumn' => 5,
                'endColumn' => 58,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'extend' => [
                'name' => 'extend',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 130,
                        'endLine' => 130,
                        'startColumn' => 28,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'closure' => [
                        'name' => 'closure',
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
                        'startLine' => 130,
                        'endLine' => 130,
                        'startColumn' => 39,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * "Extend" an abstract type in the container.
 *
 * @param  \\Closure|string  $abstract
 * @param  \\Closure  $closure
 * @return void
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 130,
                'endLine' => 130,
                'startColumn' => 5,
                'endColumn' => 56,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'instance' => [
                'name' => 'instance',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 141,
                        'endLine' => 141,
                        'startColumn' => 30,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'instance' => [
                        'name' => 'instance',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 141,
                        'endLine' => 141,
                        'startColumn' => 41,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register an existing instance as shared in the container.
 *
 * @template TInstance of mixed
 *
 * @param  \\Closure|string  $abstract
 * @param  TInstance  $instance
 * @return TInstance
 */',
                'startLine' => 141,
                'endLine' => 141,
                'startColumn' => 5,
                'endColumn' => 51,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'addContextualBinding' => [
                'name' => 'addContextualBinding',
                'parameters' => [
                    'concrete' => [
                        'name' => 'concrete',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 151,
                        'endLine' => 151,
                        'startColumn' => 42,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 151,
                        'endLine' => 151,
                        'startColumn' => 53,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'implementation' => [
                        'name' => 'implementation',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 151,
                        'endLine' => 151,
                        'startColumn' => 64,
                        'endColumn' => 78,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a contextual binding to the container.
 *
 * @param  string  $concrete
 * @param  \\Closure|string  $abstract
 * @param  \\Closure|string  $implementation
 * @return void
 */',
                'startLine' => 151,
                'endLine' => 151,
                'startColumn' => 5,
                'endColumn' => 80,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'when' => [
                'name' => 'when',
                'parameters' => [
                    'concrete' => [
                        'name' => 'concrete',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 159,
                        'endLine' => 159,
                        'startColumn' => 26,
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
 * Define a contextual binding.
 *
 * @param  string|array  $concrete
 * @return \\Illuminate\\Contracts\\Container\\ContextualBindingBuilder
 */',
                'startLine' => 159,
                'endLine' => 159,
                'startColumn' => 5,
                'endColumn' => 36,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'factory' => [
                'name' => 'factory',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 169,
                        'endLine' => 169,
                        'startColumn' => 29,
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
 * Get a closure to resolve the given type from the container.
 *
 * @template TClass of object
 *
 * @param  string|class-string<TClass>  $abstract
 * @return ($abstract is class-string<TClass> ? \\Closure(): TClass : \\Closure(): mixed)
 */',
                'startLine' => 169,
                'endLine' => 169,
                'startColumn' => 5,
                'endColumn' => 39,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
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
 * Flush the container of all bindings and resolved instances.
 *
 * @return void
 */',
                'startLine' => 176,
                'endLine' => 176,
                'startColumn' => 5,
                'endColumn' => 28,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'make' => [
                'name' => 'make',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 189,
                        'endLine' => 189,
                        'startColumn' => 26,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 189,
                                'endLine' => 189,
                                'startTokenPos' => 340,
                                'startFilePos' => 4912,
                                'endTokenPos' => 341,
                                'endFilePos' => 4913,
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
                        'startLine' => 189,
                        'endLine' => 189,
                        'startColumn' => 37,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resolve the given type from the container.
 *
 * @template TClass of object
 *
 * @param  string|class-string<TClass>  $abstract
 * @param  array  $parameters
 * @return ($abstract is class-string<TClass> ? TClass : mixed)
 *
 * @throws \\Illuminate\\Contracts\\Container\\BindingResolutionException
 */',
                'startLine' => 189,
                'endLine' => 189,
                'startColumn' => 5,
                'endColumn' => 60,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'call' => [
                'name' => 'call',
                'parameters' => [
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
                        'startColumn' => 26,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 199,
                                'endLine' => 199,
                                'startTokenPos' => 362,
                                'startFilePos' => 5211,
                                'endTokenPos' => 363,
                                'endFilePos' => 5212,
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
                        'startLine' => 199,
                        'endLine' => 199,
                        'startColumn' => 37,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'defaultMethod' => [
                        'name' => 'defaultMethod',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 199,
                                'endLine' => 199,
                                'startTokenPos' => 370,
                                'startFilePos' => 5232,
                                'endTokenPos' => 370,
                                'endFilePos' => 5235,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 199,
                        'endLine' => 199,
                        'startColumn' => 61,
                        'endColumn' => 81,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Call the given Closure / class@method and inject its dependencies.
 *
 * @param  callable|string  $callback
 * @param  array  $parameters
 * @param  string|null  $defaultMethod
 * @return mixed
 */',
                'startLine' => 199,
                'endLine' => 199,
                'startColumn' => 5,
                'endColumn' => 83,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'resolved' => [
                'name' => 'resolved',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 30,
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
 * Determine if the given abstract type has been resolved.
 *
 * @param  string  $abstract
 * @return bool
 */',
                'startLine' => 207,
                'endLine' => 207,
                'startColumn' => 5,
                'endColumn' => 40,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'beforeResolving' => [
                'name' => 'beforeResolving',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 216,
                        'endLine' => 216,
                        'startColumn' => 37,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 216,
                                'endLine' => 216,
                                'startTokenPos' => 404,
                                'startFilePos' => 5663,
                                'endTokenPos' => 404,
                                'endFilePos' => 5666,
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
                        'startLine' => 216,
                        'endLine' => 216,
                        'startColumn' => 48,
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
 * Register a new before resolving callback.
 *
 * @param  \\Closure|string  $abstract
 * @param  \\Closure|null  $callback
 * @return void
 */',
                'startLine' => 216,
                'endLine' => 216,
                'startColumn' => 5,
                'endColumn' => 74,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'resolving' => [
                'name' => 'resolving',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 225,
                        'endLine' => 225,
                        'startColumn' => 31,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 225,
                                'endLine' => 225,
                                'startTokenPos' => 426,
                                'startFilePos' => 5900,
                                'endTokenPos' => 426,
                                'endFilePos' => 5903,
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
                        'startLine' => 225,
                        'endLine' => 225,
                        'startColumn' => 42,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a new resolving callback.
 *
 * @param  \\Closure|string  $abstract
 * @param  \\Closure|null  $callback
 * @return void
 */',
                'startLine' => 225,
                'endLine' => 225,
                'startColumn' => 5,
                'endColumn' => 68,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'aliasName' => null,
            ],
            'afterResolving' => [
                'name' => 'afterResolving',
                'parameters' => [
                    'abstract' => [
                        'name' => 'abstract',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 234,
                        'endLine' => 234,
                        'startColumn' => 36,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 234,
                                'endLine' => 234,
                                'startTokenPos' => 448,
                                'startFilePos' => 6148,
                                'endTokenPos' => 448,
                                'endFilePos' => 6151,
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
                        'startLine' => 234,
                        'endLine' => 234,
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
 * Register a new after resolving callback.
 *
 * @param  \\Closure|string  $abstract
 * @param  \\Closure|null  $callback
 * @return void
 */',
                'startLine' => 234,
                'endLine' => 234,
                'startColumn' => 5,
                'endColumn' => 73,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Container',
                'declaringClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'implementingClassName' => 'Illuminate\\Contracts\\Container\\Container',
                'currentClassName' => 'Illuminate\\Contracts\\Container\\Container',
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
