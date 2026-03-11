<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/RetryCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Queue\Console\RetryCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-af9b5b934fcfdebf4d30fc10d70374daf817f8db3af2403eedf466a1f90610dc-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/RetryCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Queue\\Console',
        'name' => 'Illuminate\\Queue\\Console\\RetryCommand',
        'shortName' => 'RetryCommand',
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
                        'code' => '\'queue:retry\'',
                        'attributes' => [
                            'startLine' => 14,
                            'endLine' => 14,
                            'startTokenPos' => 53,
                            'startFilePos' => 348,
                            'endTokenPos' => 53,
                            'endFilePos' => 360,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 14,
        'endLine' => 242,
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
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'queue:retry
                            {id?* : The ID of the failed job or "all" to retry all jobs}
                            {--queue= : Retry all of the failed jobs for the specified queue}
                            {--range=* : Range of job IDs (numeric) to be retried (e.g. 1-5)}\'',
                    'attributes' => [
                        'startLine' => 22,
                        'endLine' => 25,
                        'startTokenPos' => 75,
                        'startFilePos' => 508,
                        'endTokenPos' => 75,
                        'endFilePos' => 797,
                    ],
                ],
                'docComment' => '/**
 * The console command signature.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 22,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 95,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Retry a failed queue job\'',
                    'attributes' => [
                        'startLine' => 32,
                        'endLine' => 32,
                        'startTokenPos' => 86,
                        'startFilePos' => 912,
                        'endTokenPos' => 86,
                        'endFilePos' => 937,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 56,
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
                'startLine' => 39,
                'endLine' => 62,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'aliasName' => null,
            ],
            'getJobIds' => [
                'name' => 'getJobIds',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the job IDs to be retried.
 *
 * @return array
 */',
                'startLine' => 69,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'aliasName' => null,
            ],
            'getJobIdsByQueue' => [
                'name' => 'getJobIdsByQueue',
                'parameters' => [
                    'queue' => [
                        'name' => 'queue',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 98,
                        'endLine' => 98,
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
 * Get the job IDs by queue, if applicable.
 *
 * @param  string  $queue
 * @return array
 */',
                'startLine' => 98,
                'endLine' => 114,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'aliasName' => null,
            ],
            'getJobIdsByRanges' => [
                'name' => 'getJobIdsByRanges',
                'parameters' => [
                    'ranges' => [
                        'name' => 'ranges',
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
                        'startLine' => 122,
                        'endLine' => 122,
                        'startColumn' => 42,
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
 * Get the job IDs ranges, if applicable.
 *
 * @param  array  $ranges
 * @return array
 */',
                'startLine' => 122,
                'endLine' => 133,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'aliasName' => null,
            ],
            'retryJob' => [
                'name' => 'retryJob',
                'parameters' => [
                    'job' => [
                        'name' => 'job',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 141,
                        'endLine' => 141,
                        'startColumn' => 33,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retry the queue job.
 *
 * @param  \\stdClass  $job
 * @return void
 */',
                'startLine' => 141,
                'endLine' => 150,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'aliasName' => null,
            ],
            'resetAttempts' => [
                'name' => 'resetAttempts',
                'parameters' => [
                    'payload' => [
                        'name' => 'payload',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 160,
                        'endLine' => 160,
                        'startColumn' => 38,
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
 * Reset the payload attempts.
 *
 * Applicable to Redis and other jobs which store attempts in their payload.
 *
 * @param  string  $payload
 * @return string
 */',
                'startLine' => 160,
                'endLine' => 169,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'aliasName' => null,
            ],
            'refreshRetryUntil' => [
                'name' => 'refreshRetryUntil',
                'parameters' => [
                    'payload' => [
                        'name' => 'payload',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 179,
                        'endLine' => 179,
                        'startColumn' => 42,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Refresh the "retry until" timestamp for the job.
 *
 * @param  string  $payload
 * @return string
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 179,
                'endLine' => 198,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'aliasName' => null,
            ],
            'getQueueableOptions' => [
                'name' => 'getQueueableOptions',
                'parameters' => [
                    'queue' => [
                        'name' => 'queue',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 44,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'job' => [
                        'name' => 'job',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 52,
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
 * Get the queueable options from the job.
 *
 * @param  $queue
 * @param  \\stdClass  $job
 * @return array
 */',
                'startLine' => 207,
                'endLine' => 220,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'aliasName' => null,
            ],
            'getInstanceFromPayload' => [
                'name' => 'getInstanceFromPayload',
                'parameters' => [
                    'payload' => [
                        'name' => 'payload',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 230,
                        'endLine' => 230,
                        'startColumn' => 47,
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
 * Get the job instance from the given payload.
 *
 * @param  array  $payload
 * @return mixed
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 230,
                'endLine' => 241,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\RetryCommand',
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
