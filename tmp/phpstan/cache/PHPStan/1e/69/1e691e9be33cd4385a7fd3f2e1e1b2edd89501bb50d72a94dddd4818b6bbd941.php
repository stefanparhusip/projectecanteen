<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/MonitorCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Queue\Console\MonitorCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-5ae7976a012969f5fba2e8bd6e47987f51f60e3926dbae13c800240246abd5d7-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/MonitorCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Queue\\Console',
        'name' => 'Illuminate\\Queue\\Console\\MonitorCommand',
        'shortName' => 'MonitorCommand',
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
                        'code' => '\'queue:monitor\'',
                        'attributes' => [
                            'startLine' => 12,
                            'endLine' => 12,
                            'startTokenPos' => 43,
                            'startFilePos' => 304,
                            'endTokenPos' => 43,
                            'endFilePos' => 318,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 12,
        'endLine' => 167,
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
                'declaringClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'queue:monitor
                       {queues : The names of the queues to monitor}
                       {--max=1000 : The maximum number of jobs that can be on the queue before an event is dispatched}
                       {--json : Output the queue size as JSON}\'',
                    'attributes' => [
                        'startLine' => 20,
                        'endLine' => 23,
                        'startTokenPos' => 65,
                        'startFilePos' => 463,
                        'endTokenPos' => 65,
                        'endFilePos' => 730,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 20,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 65,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Monitor the size of the specified queues\'',
                    'attributes' => [
                        'startLine' => 30,
                        'endLine' => 30,
                        'startTokenPos' => 76,
                        'startFilePos' => 845,
                        'endTokenPos' => 76,
                        'endFilePos' => 886,
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
                'endColumn' => 72,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'manager' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'name' => 'manager',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The queue manager instance.
 *
 * @var \\Illuminate\\Contracts\\Queue\\Factory
 */',
                'attributes' => [
                ],
                'startLine' => 37,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'events' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'name' => 'events',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The events dispatcher instance.
 *
 * @var \\Illuminate\\Contracts\\Events\\Dispatcher
 */',
                'attributes' => [
                ],
                'startLine' => 44,
                'endLine' => 44,
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
                    'manager' => [
                        'name' => 'manager',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Queue\\Factory',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 52,
                        'endLine' => 52,
                        'startColumn' => 33,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'events' => [
                        'name' => 'events',
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
                        'startLine' => 52,
                        'endLine' => 52,
                        'startColumn' => 51,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new queue monitor command.
 *
 * @param  \\Illuminate\\Contracts\\Queue\\Factory  $manager
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $events
 */',
                'startLine' => 52,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'aliasName' => null,
            ],
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
                'startLine' => 65,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'aliasName' => null,
            ],
            'parseQueues' => [
                'name' => 'parseQueues',
                'parameters' => [
                    'queues' => [
                        'name' => 'queues',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 88,
                        'endLine' => 88,
                        'startColumn' => 36,
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
 * Parse the queues into an array of the connections and queues.
 *
 * @param  string  $queues
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 88,
                'endLine' => 117,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'aliasName' => null,
            ],
            'displaySizes' => [
                'name' => 'displaySizes',
                'parameters' => [
                    'queues' => [
                        'name' => 'queues',
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
                        'startLine' => 125,
                        'endLine' => 125,
                        'startColumn' => 37,
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
 * Display the queue sizes in the console.
 *
 * @param  \\Illuminate\\Support\\Collection  $queues
 * @return void
 */',
                'startLine' => 125,
                'endLine' => 143,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'aliasName' => null,
            ],
            'dispatchEvents' => [
                'name' => 'dispatchEvents',
                'parameters' => [
                    'queues' => [
                        'name' => 'queues',
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
                        'startLine' => 151,
                        'endLine' => 151,
                        'startColumn' => 39,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Fire the monitoring events.
 *
 * @param  \\Illuminate\\Support\\Collection  $queues
 * @return void
 */',
                'startLine' => 151,
                'endLine' => 166,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\MonitorCommand',
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
