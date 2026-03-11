<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/ListFailedCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Queue\Console\ListFailedCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-64a9b3842e8a79c45a6b1a2063225d95f13ad61290f83a2f56a0e9575e6b82a0-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/ListFailedCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Queue\\Console',
        'name' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
        'shortName' => 'ListFailedCommand',
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
                        'code' => '\'queue:failed\'',
                        'attributes' => [
                            'startLine' => 10,
                            'endLine' => 10,
                            'startTokenPos' => 33,
                            'startFilePos' => 209,
                            'endTokenPos' => 33,
                            'endFilePos' => 222,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 10,
        'endLine' => 125,
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
            'name' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'queue:failed\'',
                    'attributes' => [
                        'startLine' => 18,
                        'endLine' => 18,
                        'startTokenPos' => 55,
                        'startFilePos' => 365,
                        'endTokenPos' => 55,
                        'endFilePos' => 378,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 18,
                'endLine' => 18,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'List all of the failed queue jobs\'',
                    'attributes' => [
                        'startLine' => 25,
                        'endLine' => 25,
                        'startTokenPos' => 66,
                        'startFilePos' => 493,
                        'endTokenPos' => 66,
                        'endFilePos' => 527,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 65,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'headers' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'name' => 'headers',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'ID\', \'Connection\', \'Queue\', \'Class\', \'Failed At\']',
                    'attributes' => [
                        'startLine' => 32,
                        'endLine' => 32,
                        'startTokenPos' => 77,
                        'startFilePos' => 642,
                        'endTokenPos' => 91,
                        'endFilePos' => 692,
                    ],
                ],
                'docComment' => '/**
 * The table headers for the command.
 *
 * @var string[]
 */',
                'attributes' => [
                ],
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 77,
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
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'aliasName' => null,
            ],
            'getFailedJobs' => [
                'name' => 'getFailedJobs',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the failed jobs into a displayable format.
 *
 * @return array
 */',
                'startLine' => 55,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'aliasName' => null,
            ],
            'parseFailedJob' => [
                'name' => 'parseFailedJob',
                'parameters' => [
                    'failed' => [
                        'name' => 'failed',
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
                        'startLine' => 71,
                        'endLine' => 71,
                        'startColumn' => 39,
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
 * Parse the failed job row.
 *
 * @param  array  $failed
 * @return array
 */',
                'startLine' => 71,
                'endLine' => 78,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'aliasName' => null,
            ],
            'extractJobName' => [
                'name' => 'extractJobName',
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
                        'startLine' => 86,
                        'endLine' => 86,
                        'startColumn' => 37,
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
 * Extract the failed job name from payload.
 *
 * @param  string  $payload
 * @return string|null
 */',
                'startLine' => 86,
                'endLine' => 95,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'aliasName' => null,
            ],
            'matchJobName' => [
                'name' => 'matchJobName',
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
                        'startLine' => 103,
                        'endLine' => 103,
                        'startColumn' => 37,
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
 * Match the job name from the payload.
 *
 * @param  array  $payload
 * @return string|null
 */',
                'startLine' => 103,
                'endLine' => 108,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'aliasName' => null,
            ],
            'displayFailedJobs' => [
                'name' => 'displayFailedJobs',
                'parameters' => [
                    'jobs' => [
                        'name' => 'jobs',
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
                        'startLine' => 116,
                        'endLine' => 116,
                        'startColumn' => 42,
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
 * Display the failed jobs in the console.
 *
 * @param  array  $jobs
 * @return void
 */',
                'startLine' => 116,
                'endLine' => 124,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\ListFailedCommand',
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
