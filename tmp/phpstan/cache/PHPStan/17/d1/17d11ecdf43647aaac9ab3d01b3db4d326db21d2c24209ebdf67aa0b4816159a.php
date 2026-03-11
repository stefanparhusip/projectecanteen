<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Queue/InteractsWithUniqueJobs.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Queue\InteractsWithUniqueJobs
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-28d1f1ae89927e732785059a3a4c7654be3d37f8baa2b2be7dedc0491e0dea65-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Queue\\InteractsWithUniqueJobs',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Queue/InteractsWithUniqueJobs.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Queue',
        'name' => 'Illuminate\\Foundation\\Queue\\InteractsWithUniqueJobs',
        'shortName' => 'InteractsWithUniqueJobs',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 55,
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
            'addUniqueJobInformationToContext' => [
                'name' => 'addUniqueJobInformationToContext',
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
                        'startLine' => 17,
                        'endLine' => 17,
                        'startColumn' => 54,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Store unique job information in the context in case we can\'t resolve the job on the queue side.
 *
 * @param  mixed  $job
 * @return void
 */',
                'startLine' => 17,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Queue',
                'declaringClassName' => 'Illuminate\\Foundation\\Queue\\InteractsWithUniqueJobs',
                'implementingClassName' => 'Illuminate\\Foundation\\Queue\\InteractsWithUniqueJobs',
                'currentClassName' => 'Illuminate\\Foundation\\Queue\\InteractsWithUniqueJobs',
                'aliasName' => null,
            ],
            'removeUniqueJobInformationFromContext' => [
                'name' => 'removeUniqueJobInformationFromContext',
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
                        'startLine' => 33,
                        'endLine' => 33,
                        'startColumn' => 59,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove the unique job information from the context.
 *
 * @param  mixed  $job
 * @return void
 */',
                'startLine' => 33,
                'endLine' => 41,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Queue',
                'declaringClassName' => 'Illuminate\\Foundation\\Queue\\InteractsWithUniqueJobs',
                'implementingClassName' => 'Illuminate\\Foundation\\Queue\\InteractsWithUniqueJobs',
                'currentClassName' => 'Illuminate\\Foundation\\Queue\\InteractsWithUniqueJobs',
                'aliasName' => null,
            ],
            'getUniqueJobCacheStore' => [
                'name' => 'getUniqueJobCacheStore',
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
                        'startLine' => 49,
                        'endLine' => 49,
                        'startColumn' => 47,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
                                    'isIdentifier' => true,
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine the cache store used by the unique job to acquire locks.
 *
 * @param  mixed  $job
 * @return string|null
 */',
                'startLine' => 49,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Queue',
                'declaringClassName' => 'Illuminate\\Foundation\\Queue\\InteractsWithUniqueJobs',
                'implementingClassName' => 'Illuminate\\Foundation\\Queue\\InteractsWithUniqueJobs',
                'currentClassName' => 'Illuminate\\Foundation\\Queue\\InteractsWithUniqueJobs',
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
