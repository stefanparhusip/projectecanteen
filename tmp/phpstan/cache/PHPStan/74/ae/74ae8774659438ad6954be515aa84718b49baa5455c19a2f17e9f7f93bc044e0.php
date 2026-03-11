<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Bus/Dispatchable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Bus\Dispatchable
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-551294291775e57fbd590f0ed288a91cca683d42fac08e60c87e39b73617d47b-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Bus/Dispatchable.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'name' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
        'shortName' => 'Dispatchable',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 111,
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
        ],
        'immediateMethods' => [
            'dispatch' => [
                'name' => 'dispatch',
                'parameters' => [
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 17,
                        'endLine' => 17,
                        'startColumn' => 37,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dispatch the job with the given arguments.
 *
 * @param  mixed  ...$arguments
 * @return \\Illuminate\\Foundation\\Bus\\PendingDispatch
 */',
                'startLine' => 17,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Foundation\\Bus',
                'declaringClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'implementingClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'currentClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'aliasName' => null,
            ],
            'dispatchIf' => [
                'name' => 'dispatchIf',
                'parameters' => [
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 29,
                        'endLine' => 29,
                        'startColumn' => 39,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 29,
                        'endLine' => 29,
                        'startColumn' => 49,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dispatch the job with the given arguments if the given truth test passes.
 *
 * @param  bool|\\Closure  $boolean
 * @param  mixed  ...$arguments
 * @return \\Illuminate\\Foundation\\Bus\\PendingDispatch|\\Illuminate\\Support\\Fluent
 */',
                'startLine' => 29,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Foundation\\Bus',
                'declaringClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'implementingClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'currentClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'aliasName' => null,
            ],
            'dispatchUnless' => [
                'name' => 'dispatchUnless',
                'parameters' => [
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 51,
                        'endLine' => 51,
                        'startColumn' => 43,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 51,
                        'endLine' => 51,
                        'startColumn' => 53,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dispatch the job with the given arguments unless the given truth test passes.
 *
 * @param  bool|\\Closure  $boolean
 * @param  mixed  ...$arguments
 * @return \\Illuminate\\Foundation\\Bus\\PendingDispatch|\\Illuminate\\Support\\Fluent
 */',
                'startLine' => 51,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Foundation\\Bus',
                'declaringClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'implementingClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'currentClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'aliasName' => null,
            ],
            'dispatchSync' => [
                'name' => 'dispatchSync',
                'parameters' => [
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 74,
                        'endLine' => 74,
                        'startColumn' => 41,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dispatch a command to its appropriate handler in the current process.
 *
 * Queueable jobs will be dispatched to the "sync" queue.
 *
 * @param  mixed  ...$arguments
 * @return mixed
 */',
                'startLine' => 74,
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Foundation\\Bus',
                'declaringClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'implementingClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'currentClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'aliasName' => null,
            ],
            'dispatchAfterResponse' => [
                'name' => 'dispatchAfterResponse',
                'parameters' => [
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 85,
                        'endLine' => 85,
                        'startColumn' => 50,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dispatch a command to its appropriate handler after the current process.
 *
 * @param  mixed  ...$arguments
 * @return mixed
 */',
                'startLine' => 85,
                'endLine' => 88,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Foundation\\Bus',
                'declaringClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'implementingClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'currentClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'aliasName' => null,
            ],
            'withChain' => [
                'name' => 'withChain',
                'parameters' => [
                    'chain' => [
                        'name' => 'chain',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 96,
                        'endLine' => 96,
                        'startColumn' => 38,
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
 * Set the jobs that should run if this job is successful.
 *
 * @param  array  $chain
 * @return \\Illuminate\\Foundation\\Bus\\PendingChain
 */',
                'startLine' => 96,
                'endLine' => 99,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Foundation\\Bus',
                'declaringClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'implementingClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'currentClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'aliasName' => null,
            ],
            'newPendingDispatch' => [
                'name' => 'newPendingDispatch',
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
                        'startLine' => 107,
                        'endLine' => 107,
                        'startColumn' => 50,
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
 * Create a new pending job dispatch instance.
 *
 * @param  mixed  $job
 * @return \\Illuminate\\Foundation\\Bus\\PendingDispatch
 */',
                'startLine' => 107,
                'endLine' => 110,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Illuminate\\Foundation\\Bus',
                'declaringClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'implementingClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
                'currentClassName' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
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
