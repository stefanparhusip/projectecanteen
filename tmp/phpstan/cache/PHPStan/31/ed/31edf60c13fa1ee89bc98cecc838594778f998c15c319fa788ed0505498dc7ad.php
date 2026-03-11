<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Queue\Console\WorkCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-658103974545da8c1bdf7b8645eb1e0e135460e50a257da8ea013d30a6ceb7a1-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Queue\\Console',
        'name' => 'Illuminate\\Queue\\Console\\WorkCommand',
        'shortName' => 'WorkCommand',
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
                        'code' => '\'queue:work\'',
                        'attributes' => [
                            'startLine' => 23,
                            'endLine' => 23,
                            'startTokenPos' => 99,
                            'startFilePos' => 674,
                            'endTokenPos' => 99,
                            'endFilePos' => 685,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 23,
        'endLine' => 392,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\InteractsWithTime',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'signature' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'queue:work
                            {connection? : The name of the queue connection to work}
                            {--name=default : The name of the worker}
                            {--queue= : The names of the queues to work}
                            {--daemon : Run the worker in daemon mode (Deprecated)}
                            {--once : Only process the next job on the queue}
                            {--stop-when-empty : Stop when the queue is empty}
                            {--delay=0 : The number of seconds to delay failed jobs (Deprecated)}
                            {--backoff=0 : The number of seconds to wait before retrying a job that encountered an uncaught exception}
                            {--max-jobs=0 : The number of jobs to process before stopping}
                            {--max-time=0 : The maximum number of seconds the worker should run}
                            {--force : Force the worker to run even in maintenance mode}
                            {--memory=128 : The memory limit in megabytes}
                            {--sleep=3 : The number of seconds to sleep when no job is available}
                            {--rest=0 : The number of seconds to rest between jobs}
                            {--timeout=60 : The number of seconds a child process can run}
                            {--tries=1 : The number of times to attempt a job before logging it failed}
                            {--json : Output the queue worker information as JSON}\'',
                    'attributes' => [
                        'startLine' => 33,
                        'endLine' => 50,
                        'startTokenPos' => 126,
                        'startFilePos' => 855,
                        'endTokenPos' => 126,
                        'endFilePos' => 2380,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 33,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 84,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Start processing jobs on the queue as a daemon\'',
                    'attributes' => [
                        'startLine' => 57,
                        'endLine' => 57,
                        'startTokenPos' => 137,
                        'startFilePos' => 2495,
                        'endTokenPos' => 137,
                        'endFilePos' => 2542,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 57,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 78,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'worker' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'name' => 'worker',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The queue worker instance.
 *
 * @var \\Illuminate\\Queue\\Worker
 */',
                'attributes' => [
                ],
                'startLine' => 64,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'cache' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'name' => 'cache',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The cache store implementation.
 *
 * @var \\Illuminate\\Contracts\\Cache\\Repository
 */',
                'attributes' => [
                ],
                'startLine' => 71,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'latestStartedAt' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'name' => 'latestStartedAt',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * Holds the start time of the last processed job, if any.
 *
 * @var float|null
 */',
                'attributes' => [
                ],
                'startLine' => 78,
                'endLine' => 78,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'hasRegisteredListeners' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'name' => 'hasRegisteredListeners',
                'modifiers' => 20,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 85,
                        'endLine' => 85,
                        'startTokenPos' => 171,
                        'startFilePos' => 3098,
                        'endTokenPos' => 171,
                        'endFilePos' => 3102,
                    ],
                ],
                'docComment' => '/**
 * Indicates if the worker\'s event listeners have been registered.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 85,
                'endLine' => 85,
                'startColumn' => 5,
                'endColumn' => 51,
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
                    'worker' => [
                        'name' => 'worker',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Queue\\Worker',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 93,
                        'endLine' => 93,
                        'startColumn' => 33,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'cache' => [
                        'name' => 'cache',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Cache\\Repository',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 93,
                        'endLine' => 93,
                        'startColumn' => 49,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new queue work command.
 *
 * @param  \\Illuminate\\Queue\\Worker  $worker
 * @param  \\Illuminate\\Contracts\\Cache\\Repository  $cache
 */',
                'startLine' => 93,
                'endLine' => 99,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
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
 * @return int|null
 */',
                'startLine' => 106,
                'endLine' => 134,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'aliasName' => null,
            ],
            'runWorker' => [
                'name' => 'runWorker',
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
                        'startLine' => 143,
                        'endLine' => 143,
                        'startColumn' => 34,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'queue' => [
                        'name' => 'queue',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 143,
                        'endLine' => 143,
                        'startColumn' => 47,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run the worker instance.
 *
 * @param  string  $connection
 * @param  string  $queue
 * @return int|null
 */',
                'startLine' => 143,
                'endLine' => 151,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'aliasName' => null,
            ],
            'gatherWorkerOptions' => [
                'name' => 'gatherWorkerOptions',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Gather all of the queue worker options as a single object.
 *
 * @return \\Illuminate\\Queue\\WorkerOptions
 */',
                'startLine' => 158,
                'endLine' => 173,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'aliasName' => null,
            ],
            'listenForEvents' => [
                'name' => 'listenForEvents',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Listen for the queue events in order to update the console output.
 *
 * @return void
 */',
                'startLine' => 180,
                'endLine' => 205,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'aliasName' => null,
            ],
            'writeOutput' => [
                'name' => 'writeOutput',
                'parameters' => [
                    'job' => [
                        'name' => 'job',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Queue\\Job',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 215,
                        'endLine' => 215,
                        'startColumn' => 36,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'status' => [
                        'name' => 'status',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 215,
                        'endLine' => 215,
                        'startColumn' => 46,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'exception' => [
                        'name' => 'exception',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 215,
                                'endLine' => 215,
                                'startTokenPos' => 839,
                                'startFilePos' => 7189,
                                'endTokenPos' => 839,
                                'endFilePos' => 7192,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Throwable',
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
                        'startLine' => 215,
                        'endLine' => 215,
                        'startColumn' => 55,
                        'endColumn' => 82,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Write the status output for the queue worker for JSON or TTY.
 *
 * @param  Job  $job
 * @param  string  $status
 * @param  \\Throwable|null  $exception
 * @return void
 */',
                'startLine' => 215,
                'endLine' => 224,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'aliasName' => null,
            ],
            'writeOutputForCli' => [
                'name' => 'writeOutputForCli',
                'parameters' => [
                    'job' => [
                        'name' => 'job',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Queue\\Job',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 233,
                        'endLine' => 233,
                        'startColumn' => 42,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'status' => [
                        'name' => 'status',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 233,
                        'endLine' => 233,
                        'startColumn' => 52,
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
 * Write the status output for the queue worker.
 *
 * @param  \\Illuminate\\Contracts\\Queue\\Job  $job
 * @param  string  $status
 * @return void
 */',
                'startLine' => 233,
                'endLine' => 272,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'aliasName' => null,
            ],
            'writeOutputAsJson' => [
                'name' => 'writeOutputAsJson',
                'parameters' => [
                    'job' => [
                        'name' => 'job',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Queue\\Job',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 282,
                        'endLine' => 282,
                        'startColumn' => 42,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'status' => [
                        'name' => 'status',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 282,
                        'endLine' => 282,
                        'startColumn' => 52,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'exception' => [
                        'name' => 'exception',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 282,
                                'endLine' => 282,
                                'startTokenPos' => 1351,
                                'startFilePos' => 9646,
                                'endTokenPos' => 1351,
                                'endFilePos' => 9649,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Throwable',
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
                        'startLine' => 282,
                        'endLine' => 282,
                        'startColumn' => 61,
                        'endColumn' => 88,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Write the status output for the queue worker in JSON format.
 *
 * @param  \\Illuminate\\Contracts\\Queue\\Job  $job
 * @param  string  $status
 * @param  \\Throwable|null  $exception
 * @return void
 */',
                'startLine' => 282,
                'endLine' => 311,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'aliasName' => null,
            ],
            'now' => [
                'name' => 'now',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current date / time.
 *
 * @return \\Illuminate\\Support\\Carbon
 */',
                'startLine' => 318,
                'endLine' => 328,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'aliasName' => null,
            ],
            'logFailedJob' => [
                'name' => 'logFailedJob',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Queue\\Events\\JobFailed',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 336,
                        'endLine' => 336,
                        'startColumn' => 37,
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
 * Store a failed job event.
 *
 * @param  \\Illuminate\\Queue\\Events\\JobFailed  $event
 * @return void
 */',
                'startLine' => 336,
                'endLine' => 344,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
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
                        'startLine' => 352,
                        'endLine' => 352,
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
 * Get the queue name for the worker.
 *
 * @param  string  $connection
 * @return string
 */',
                'startLine' => 352,
                'endLine' => 357,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'aliasName' => null,
            ],
            'downForMaintenance' => [
                'name' => 'downForMaintenance',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the worker should run in maintenance mode.
 *
 * @return bool
 */',
                'startLine' => 364,
                'endLine' => 367,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'aliasName' => null,
            ],
            'outputUsingJson' => [
                'name' => 'outputUsingJson',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the worker should output using JSON.
 *
 * @return bool
 */',
                'startLine' => 374,
                'endLine' => 381,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'aliasName' => null,
            ],
            'flushState' => [
                'name' => 'flushState',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Reset static variables.
 *
 * @return void
 */',
                'startLine' => 388,
                'endLine' => 391,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\WorkCommand',
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
