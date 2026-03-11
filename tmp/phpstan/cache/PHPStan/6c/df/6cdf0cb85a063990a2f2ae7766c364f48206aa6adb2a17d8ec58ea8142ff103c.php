<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/EventListCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Console\EventListCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-0227dbb9ee526056f3ff3a0463c89d0445bcfb5bc25b71510bfd718d3b833328-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/EventListCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Console',
        'name' => 'Illuminate\\Foundation\\Console\\EventListCommand',
        'shortName' => 'EventListCommand',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
            0 => [
                'name' => 'Symfony\\Component\\Console\\Attribute\\AsCommand',
                'isRepeated' => false,
                'arguments' => [
                    'name' => [
                        'code' => '\'event:list\'',
                        'attributes' => [
                            'startLine' => 13,
                            'endLine' => 13,
                            'startTokenPos' => 48,
                            'startFilePos' => 322,
                            'endTokenPos' => 48,
                            'endFilePos' => 333,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 13,
        'endLine' => 265,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'signature' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'event:list
                            {--event= : Filter the events by name}
                            {--json : Output the events and listeners as JSON}\'',
                    'attributes' => [
                        'startLine' => 21,
                        'endLine' => 23,
                        'startTokenPos' => 70,
                        'startFilePos' => 501,
                        'endTokenPos' => 70,
                        'endFilePos' => 658,
                    ],
                ],
                'docComment' => '/**
 * The name and signature of the console command.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 21,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 80,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '"List the application\'s events and listeners"',
                    'attributes' => [
                        'startLine' => 30,
                        'endLine' => 30,
                        'startTokenPos' => 81,
                        'startFilePos' => 773,
                        'endTokenPos' => 81,
                        'endFilePos' => 817,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 75,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'eventsResolver' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'name' => 'eventsResolver',
                'modifiers' => 18,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The events dispatcher resolver callback.
 *
 * @var \\Closure|null
 */',
                'attributes' => [
                ],
                'startLine' => 37,
                'endLine' => 37,
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
            'handle' => [
                'name' => 'handle',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the console command.
 *
 * @return void
 */',
                'startLine' => 44,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'aliasName' => null,
            ],
            'displayJson' => [
                'name' => 'displayJson',
                'parameters' => [
                    'events' => [
                        'name' => 'events',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Support\\Collection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 71,
                        'endLine' => 71,
                        'startColumn' => 36,
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
 * Display events and their listeners in JSON.
 *
 * @param  \\Illuminate\\Support\\Collection  $events
 * @return void
 */',
                'startLine' => 71,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'aliasName' => null,
            ],
            'displayForCli' => [
                'name' => 'displayForCli',
                'parameters' => [
                    'events' => [
                        'name' => 'events',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Support\\Collection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 89,
                        'endLine' => 89,
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
 * Display the events and their listeners for the CLI.
 *
 * @param  \\Illuminate\\Support\\Collection  $events
 * @return void
 */',
                'startLine' => 89,
                'endLine' => 99,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'aliasName' => null,
            ],
            'getEvents' => [
                'name' => 'getEvents',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the events and listeners configured for the application.
 *
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 106,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'aliasName' => null,
            ],
            'getListenersOnDispatcher' => [
                'name' => 'getListenersOnDispatcher',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the event / listeners from the dispatcher object.
 *
 * @return array
 */',
                'startLine' => 122,
                'endLine' => 143,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'aliasName' => null,
            ],
            'appendEventInterfaces' => [
                'name' => 'appendEventInterfaces',
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
                        'startLine' => 151,
                        'endLine' => 151,
                        'startColumn' => 46,
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
 * Add the event implemented interfaces to the output.
 *
 * @param  string  $event
 * @return string
 */',
                'startLine' => 151,
                'endLine' => 164,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'aliasName' => null,
            ],
            'appendListenerInterfaces' => [
                'name' => 'appendListenerInterfaces',
                'parameters' => [
                    'listener' => [
                        'name' => 'listener',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 172,
                        'endLine' => 172,
                        'startColumn' => 49,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the listener implemented interfaces to the output.
 *
 * @param  string  $listener
 * @return string
 */',
                'startLine' => 172,
                'endLine' => 185,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'aliasName' => null,
            ],
            'stringifyClosure' => [
                'name' => 'stringifyClosure',
                'parameters' => [
                    'rawListener' => [
                        'name' => 'rawListener',
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
                        'startLine' => 193,
                        'endLine' => 193,
                        'startColumn' => 41,
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
 * Get a displayable string representation of a Closure listener.
 *
 * @param  \\Closure  $rawListener
 * @return string
 */',
                'startLine' => 193,
                'endLine' => 200,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'aliasName' => null,
            ],
            'filterEvents' => [
                'name' => 'filterEvents',
                'parameters' => [
                    'events' => [
                        'name' => 'events',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 208,
                        'endLine' => 208,
                        'startColumn' => 37,
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
 * Filter the given events using the provided event name filter.
 *
 * @param  \\Illuminate\\Support\\Collection  $events
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 208,
                'endLine' => 217,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'aliasName' => null,
            ],
            'filteringByEvent' => [
                'name' => 'filteringByEvent',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine whether the user is filtering by an event name.
 *
 * @return bool
 */',
                'startLine' => 224,
                'endLine' => 227,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'aliasName' => null,
            ],
            'getRawListeners' => [
                'name' => 'getRawListeners',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the raw version of event listeners from the event dispatcher.
 *
 * @return array
 *
 * @throws \\Illuminate\\Contracts\\Container\\BindingResolutionException
 */',
                'startLine' => 236,
                'endLine' => 239,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'aliasName' => null,
            ],
            'getEventsDispatcher' => [
                'name' => 'getEventsDispatcher',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the event dispatcher.
 *
 * @return \\Illuminate\\Events\\Dispatcher
 *
 * @throws \\Illuminate\\Contracts\\Container\\BindingResolutionException
 */',
                'startLine' => 248,
                'endLine' => 253,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'aliasName' => null,
            ],
            'resolveEventsUsing' => [
                'name' => 'resolveEventsUsing',
                'parameters' => [
                    'resolver' => [
                        'name' => 'resolver',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 261,
                        'endLine' => 261,
                        'startColumn' => 47,
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
 * Set a callback that should be used when resolving the events dispatcher.
 *
 * @param  \\Closure|null  $resolver
 * @return void
 */',
                'startLine' => 261,
                'endLine' => 264,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\EventListCommand',
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
