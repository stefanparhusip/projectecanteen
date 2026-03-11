<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/MonitorCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Console\MonitorCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-9fef4cd620d74a7d1c9c6bdb384a623bbff9dd6ad4a694897e1f0ca3c54e23ed-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/MonitorCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Console',
        'name' => 'Illuminate\\Database\\Console\\MonitorCommand',
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
                        'code' => '\'db:monitor\'',
                        'attributes' => [
                            'startLine' => 11,
                            'endLine' => 11,
                            'startTokenPos' => 38,
                            'startFilePos' => 294,
                            'endTokenPos' => 38,
                            'endFilePos' => 305,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 11,
        'endLine' => 141,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Console\\DatabaseInspectionCommand',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'signature' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'db:monitor
                {--databases= : The database connections to monitor}
                {--max= : The maximum number of connections that can be open before an event is dispatched}\'',
                    'attributes' => [
                        'startLine' => 19,
                        'endLine' => 21,
                        'startTokenPos' => 60,
                        'startFilePos' => 489,
                        'endTokenPos' => 60,
                        'endFilePos' => 677,
                    ],
                ],
                'docComment' => '/**
 * The name and signature of the console command.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 21,
                'startColumn' => 5,
                'endColumn' => 109,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Monitor the number of connections on the specified database\'',
                    'attributes' => [
                        'startLine' => 28,
                        'endLine' => 28,
                        'startTokenPos' => 71,
                        'startFilePos' => 792,
                        'endTokenPos' => 71,
                        'endFilePos' => 852,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 28,
                'endLine' => 28,
                'startColumn' => 5,
                'endColumn' => 91,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'connection' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'name' => 'connection',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The connection resolver instance.
 *
 * @var \\Illuminate\\Database\\ConnectionResolverInterface
 */',
                'attributes' => [
                ],
                'startLine' => 35,
                'endLine' => 35,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'events' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
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
                'startLine' => 42,
                'endLine' => 42,
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
                    'connection' => [
                        'name' => 'connection',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\ConnectionResolverInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 50,
                        'endLine' => 50,
                        'startColumn' => 33,
                        'endColumn' => 71,
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
                        'startLine' => 50,
                        'endLine' => 50,
                        'startColumn' => 74,
                        'endColumn' => 91,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new command instance.
 *
 * @param  \\Illuminate\\Database\\ConnectionResolverInterface  $connection
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $events
 */',
                'startLine' => 50,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
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
                'startLine' => 63,
                'endLine' => 72,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'aliasName' => null,
            ],
            'parseDatabases' => [
                'name' => 'parseDatabases',
                'parameters' => [
                    'databases' => [
                        'name' => 'databases',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 80,
                        'endLine' => 80,
                        'startColumn' => 39,
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
 * Parse the database into an array of the connections.
 *
 * @param  string  $databases
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 80,
                'endLine' => 97,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'aliasName' => null,
            ],
            'displayConnections' => [
                'name' => 'displayConnections',
                'parameters' => [
                    'databases' => [
                        'name' => 'databases',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 105,
                        'endLine' => 105,
                        'startColumn' => 43,
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
 * Display the databases and their connection counts in the console.
 *
 * @param  \\Illuminate\\Support\\Collection  $databases
 * @return void
 */',
                'startLine' => 105,
                'endLine' => 118,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'aliasName' => null,
            ],
            'dispatchEvents' => [
                'name' => 'dispatchEvents',
                'parameters' => [
                    'databases' => [
                        'name' => 'databases',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 126,
                        'endLine' => 126,
                        'startColumn' => 39,
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
 * Dispatch the database monitoring events.
 *
 * @param  \\Illuminate\\Support\\Collection  $databases
 * @return void
 */',
                'startLine' => 126,
                'endLine' => 140,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console',
                'declaringClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\MonitorCommand',
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
