<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/ListenCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Queue\Console\ListenCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6c0506e49c1d38cc9bd6bd9475875daa22f925b894bdb9e85a333c689851215e-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/ListenCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Queue\\Console',
        'name' => 'Illuminate\\Queue\\Console\\ListenCommand',
        'shortName' => 'ListenCommand',
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
                        'code' => '\'queue:listen\'',
                        'attributes' => [
                            'startLine' => 11,
                            'endLine' => 11,
                            'startTokenPos' => 38,
                            'startFilePos' => 250,
                            'endTokenPos' => 38,
                            'endFilePos' => 263,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 11,
        'endLine' => 130,
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
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'queue:listen
                            {connection? : The name of connection}
                            {--name=default : The name of the worker}
                            {--delay=0 : The number of seconds to delay failed jobs (Deprecated)}
                            {--backoff=0 : The number of seconds to wait before retrying a job that encountered an uncaught exception}
                            {--force : Force the worker to run even in maintenance mode}
                            {--memory=128 : The memory limit in megabytes}
                            {--queue= : The queue to listen on}
                            {--sleep=3 : The number of seconds to sleep when no job is available}
                            {--rest=0 : The number of seconds to rest between jobs}
                            {--timeout=60 : The number of seconds a child process can run}
                            {--tries=1 : The number of times to attempt a job before logging it failed}\'',
                    'attributes' => [
                        'startLine' => 19,
                        'endLine' => 30,
                        'startTokenPos' => 60,
                        'startFilePos' => 407,
                        'endTokenPos' => 60,
                        'endFilePos' => 1395,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 105,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Listen to a given queue\'',
                    'attributes' => [
                        'startLine' => 37,
                        'endLine' => 37,
                        'startTokenPos' => 71,
                        'startFilePos' => 1510,
                        'endTokenPos' => 71,
                        'endFilePos' => 1534,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 37,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 55,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'listener' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'name' => 'listener',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The queue listener instance.
 *
 * @var \\Illuminate\\Queue\\Listener
 */',
                'attributes' => [
                ],
                'startLine' => 44,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 24,
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
                    'listener' => [
                        'name' => 'listener',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Queue\\Listener',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 51,
                        'endLine' => 51,
                        'startColumn' => 33,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new queue listen command.
 *
 * @param  \\Illuminate\\Queue\\Listener  $listener
 */',
                'startLine' => 51,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
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
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'aliasName' => null,
            ],
            'getQueue' => [
                'name' => 'getQueue',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 85,
                        'endLine' => 85,
                        'startColumn' => 33,
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
 * Get the name of the queue connection to listen on.
 *
 * @param  string  $connection
 * @return string
 */',
                'startLine' => 85,
                'endLine' => 92,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'aliasName' => null,
            ],
            'gatherOptions' => [
                'name' => 'gatherOptions',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the listener options for the command.
 *
 * @return \\Illuminate\\Queue\\ListenerOptions
 */',
                'startLine' => 99,
                'endLine' => 116,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'aliasName' => null,
            ],
            'setOutputHandler' => [
                'name' => 'setOutputHandler',
                'parameters' => [
                    'listener' => [
                        'name' => 'listener',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Queue\\Listener',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 124,
                        'endLine' => 124,
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
 * Set the options on the queue listener.
 *
 * @param  \\Illuminate\\Queue\\Listener  $listener
 * @return void
 */',
                'startLine' => 124,
                'endLine' => 129,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\ListenCommand',
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
