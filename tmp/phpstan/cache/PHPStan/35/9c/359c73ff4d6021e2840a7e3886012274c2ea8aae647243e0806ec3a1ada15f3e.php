<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HasEvents.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Concerns\HasEvents
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-71152dc3e696b917c3e46dcf598285a882caa9f8bda386126e5f271a1cbd087d-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HasEvents.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'name' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
        'shortName' => 'HasEvents',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 14,
        'endLine' => 461,
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
            'dispatchesEvents' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'name' => 'dispatchesEvents',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 23,
                        'endLine' => 23,
                        'startTokenPos' => 61,
                        'startFilePos' => 574,
                        'endTokenPos' => 62,
                        'endFilePos' => 575,
                    ],
                ],
                'docComment' => '/**
 * The event map for the model.
 *
 * Allows for object-based events for native Eloquent events.
 *
 * @var array<string, class-string>
 */',
                'attributes' => [
                ],
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'observables' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'name' => 'observables',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 32,
                        'endLine' => 32,
                        'startTokenPos' => 73,
                        'startFilePos' => 769,
                        'endTokenPos' => 74,
                        'endFilePos' => 770,
                    ],
                ],
                'docComment' => '/**
 * User exposed observable events.
 *
 * These are extra user-defined events observers may subscribe to.
 *
 * @var string[]
 */',
                'attributes' => [
                ],
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'bootHasEvents' => [
                'name' => 'bootHasEvents',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Boot the has event trait for a model.
 *
 * @return void
 */',
                'startLine' => 39,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'resolveObserveAttributes' => [
                'name' => 'resolveObserveAttributes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resolve the observe class names from the attributes.
 *
 * @return array
 */',
                'startLine' => 49,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'observe' => [
                'name' => 'observe',
                'parameters' => [
                    'classes' => [
                        'name' => 'classes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 74,
                        'endLine' => 74,
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
 * Register observers with the model.
 *
 * @param  object|string[]|string  $classes
 * @return void
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 74,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'registerObserver' => [
                'name' => 'registerObserver',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 91,
                        'endLine' => 91,
                        'startColumn' => 41,
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
 * Register a single observer with the model.
 *
 * @param  object|string  $class
 * @return void
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 91,
                'endLine' => 103,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'resolveObserverClassName' => [
                'name' => 'resolveObserverClassName',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 113,
                        'endLine' => 113,
                        'startColumn' => 47,
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
 * Resolve the observer\'s class name from an object or string.
 *
 * @param  object|string  $class
 * @return class-string
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 113,
                'endLine' => 124,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'getObservableEvents' => [
                'name' => 'getObservableEvents',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the observable event names.
 *
 * @return string[]
 */',
                'startLine' => 131,
                'endLine' => 141,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'setObservableEvents' => [
                'name' => 'setObservableEvents',
                'parameters' => [
                    'observables' => [
                        'name' => 'observables',
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
                        'startLine' => 149,
                        'endLine' => 149,
                        'startColumn' => 41,
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
 * Set the observable event names.
 *
 * @param  string[]  $observables
 * @return $this
 */',
                'startLine' => 149,
                'endLine' => 154,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'addObservableEvents' => [
                'name' => 'addObservableEvents',
                'parameters' => [
                    'observables' => [
                        'name' => 'observables',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 162,
                        'endLine' => 162,
                        'startColumn' => 41,
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
 * Add an observable event name.
 *
 * @param  string|string[]  $observables
 * @return void
 */',
                'startLine' => 162,
                'endLine' => 167,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'removeObservableEvents' => [
                'name' => 'removeObservableEvents',
                'parameters' => [
                    'observables' => [
                        'name' => 'observables',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 175,
                        'endLine' => 175,
                        'startColumn' => 44,
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
 * Remove an observable event name.
 *
 * @param  string|string[]  $observables
 * @return void
 */',
                'startLine' => 175,
                'endLine' => 180,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'registerModelEvent' => [
                'name' => 'registerModelEvent',
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
                        'startLine' => 189,
                        'endLine' => 189,
                        'startColumn' => 50,
                        'endColumn' => 55,
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
                        'startLine' => 189,
                        'endLine' => 189,
                        'startColumn' => 58,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a model event with the dispatcher.
 *
 * @param  string  $event
 * @param  \\Illuminate\\Events\\QueuedClosure|callable|array|class-string  $callback
 * @return void
 */',
                'startLine' => 189,
                'endLine' => 196,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'fireModelEvent' => [
                'name' => 'fireModelEvent',
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
                        'startLine' => 205,
                        'endLine' => 205,
                        'startColumn' => 39,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'halt' => [
                        'name' => 'halt',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 205,
                                'endLine' => 205,
                                'startTokenPos' => 758,
                                'startFilePos' => 5526,
                                'endTokenPos' => 758,
                                'endFilePos' => 5529,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 205,
                        'endLine' => 205,
                        'startColumn' => 47,
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
 * Fire the given event for the model.
 *
 * @param  string  $event
 * @param  bool  $halt
 * @return mixed
 */',
                'startLine' => 205,
                'endLine' => 227,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'fireCustomModelEvent' => [
                'name' => 'fireCustomModelEvent',
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
                        'startLine' => 236,
                        'endLine' => 236,
                        'startColumn' => 45,
                        'endColumn' => 50,
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
                        'startLine' => 236,
                        'endLine' => 236,
                        'startColumn' => 53,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Fire a custom model event for the given event.
 *
 * @param  string  $event
 * @param  \'until\'|\'dispatch\'  $method
 * @return array|null|void
 */',
                'startLine' => 236,
                'endLine' => 247,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'filterModelEventResults' => [
                'name' => 'filterModelEventResults',
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
                        'startLine' => 255,
                        'endLine' => 255,
                        'startColumn' => 48,
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
 * Filter the model event results.
 *
 * @param  mixed  $result
 * @return mixed
 */',
                'startLine' => 255,
                'endLine' => 264,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'retrieved' => [
                'name' => 'retrieved',
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
                        'startLine' => 272,
                        'endLine' => 272,
                        'startColumn' => 38,
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
 * Register a retrieved model event with the dispatcher.
 *
 * @param  \\Illuminate\\Events\\QueuedClosure|callable|array|class-string  $callback
 * @return void
 */',
                'startLine' => 272,
                'endLine' => 275,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'saving' => [
                'name' => 'saving',
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
                        'startLine' => 283,
                        'endLine' => 283,
                        'startColumn' => 35,
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
 * Register a saving model event with the dispatcher.
 *
 * @param  \\Illuminate\\Events\\QueuedClosure|callable|array|class-string  $callback
 * @return void
 */',
                'startLine' => 283,
                'endLine' => 286,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'saved' => [
                'name' => 'saved',
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
                        'startLine' => 294,
                        'endLine' => 294,
                        'startColumn' => 34,
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
 * Register a saved model event with the dispatcher.
 *
 * @param  \\Illuminate\\Events\\QueuedClosure|callable|array|class-string  $callback
 * @return void
 */',
                'startLine' => 294,
                'endLine' => 297,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'updating' => [
                'name' => 'updating',
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
                        'startLine' => 305,
                        'endLine' => 305,
                        'startColumn' => 37,
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
 * Register an updating model event with the dispatcher.
 *
 * @param  \\Illuminate\\Events\\QueuedClosure|callable|array|class-string  $callback
 * @return void
 */',
                'startLine' => 305,
                'endLine' => 308,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'updated' => [
                'name' => 'updated',
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
                        'startLine' => 316,
                        'endLine' => 316,
                        'startColumn' => 36,
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
 * Register an updated model event with the dispatcher.
 *
 * @param  \\Illuminate\\Events\\QueuedClosure|callable|array|class-string  $callback
 * @return void
 */',
                'startLine' => 316,
                'endLine' => 319,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'creating' => [
                'name' => 'creating',
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
                        'startLine' => 327,
                        'endLine' => 327,
                        'startColumn' => 37,
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
 * Register a creating model event with the dispatcher.
 *
 * @param  \\Illuminate\\Events\\QueuedClosure|callable|array|class-string  $callback
 * @return void
 */',
                'startLine' => 327,
                'endLine' => 330,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'created' => [
                'name' => 'created',
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
                        'startLine' => 338,
                        'endLine' => 338,
                        'startColumn' => 36,
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
 * Register a created model event with the dispatcher.
 *
 * @param  \\Illuminate\\Events\\QueuedClosure|callable|array|class-string  $callback
 * @return void
 */',
                'startLine' => 338,
                'endLine' => 341,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'replicating' => [
                'name' => 'replicating',
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
                        'startLine' => 349,
                        'endLine' => 349,
                        'startColumn' => 40,
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
 * Register a replicating model event with the dispatcher.
 *
 * @param  \\Illuminate\\Events\\QueuedClosure|callable|array|class-string  $callback
 * @return void
 */',
                'startLine' => 349,
                'endLine' => 352,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'deleting' => [
                'name' => 'deleting',
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
                        'startLine' => 360,
                        'endLine' => 360,
                        'startColumn' => 37,
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
 * Register a deleting model event with the dispatcher.
 *
 * @param  \\Illuminate\\Events\\QueuedClosure|callable|array|class-string  $callback
 * @return void
 */',
                'startLine' => 360,
                'endLine' => 363,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'deleted' => [
                'name' => 'deleted',
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
                        'startLine' => 371,
                        'endLine' => 371,
                        'startColumn' => 36,
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
 * Register a deleted model event with the dispatcher.
 *
 * @param  \\Illuminate\\Events\\QueuedClosure|callable|array|class-string  $callback
 * @return void
 */',
                'startLine' => 371,
                'endLine' => 374,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'flushEventListeners' => [
                'name' => 'flushEventListeners',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove all the event listeners for the model.
 *
 * @return void
 */',
                'startLine' => 381,
                'endLine' => 396,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'dispatchesEvents' => [
                'name' => 'dispatchesEvents',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the event map for the model.
 *
 * @return array
 */',
                'startLine' => 403,
                'endLine' => 406,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'getEventDispatcher' => [
                'name' => 'getEventDispatcher',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the event dispatcher instance.
 *
 * @return \\Illuminate\\Contracts\\Events\\Dispatcher|null
 */',
                'startLine' => 413,
                'endLine' => 416,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'setEventDispatcher' => [
                'name' => 'setEventDispatcher',
                'parameters' => [
                    'dispatcher' => [
                        'name' => 'dispatcher',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 424,
                        'endLine' => 424,
                        'startColumn' => 47,
                        'endColumn' => 68,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the event dispatcher instance.
 *
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $dispatcher
 * @return void
 */',
                'startLine' => 424,
                'endLine' => 427,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'unsetEventDispatcher' => [
                'name' => 'unsetEventDispatcher',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Unset the event dispatcher for models.
 *
 * @return void
 */',
                'startLine' => 434,
                'endLine' => 437,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'aliasName' => null,
            ],
            'withoutEvents' => [
                'name' => 'withoutEvents',
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
                        'startLine' => 445,
                        'endLine' => 445,
                        'startColumn' => 42,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute a callback without firing any model events for any model type.
 *
 * @param  callable  $callback
 * @return mixed
 */',
                'startLine' => 445,
                'endLine' => 460,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
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
