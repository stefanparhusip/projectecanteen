<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Cookie/QueueingFactory.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Cookie\QueueingFactory
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-994eccd423e783c1138b95299d60a2b2bcda578052e344fa7d5db49e0df24c5e-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Cookie\\QueueingFactory',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Cookie/QueueingFactory.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Cookie',
        'name' => 'Illuminate\\Contracts\\Cookie\\QueueingFactory',
        'shortName' => 'QueueingFactory',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 30,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Cookie\\Factory',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'queue' => [
                'name' => 'queue',
                'parameters' => [
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 13,
                        'endLine' => 13,
                        'startColumn' => 27,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Queue a cookie to send with the next response.
 *
 * @param  mixed  ...$parameters
 * @return void
 */',
                'startLine' => 13,
                'endLine' => 13,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cookie',
                'declaringClassName' => 'Illuminate\\Contracts\\Cookie\\QueueingFactory',
                'implementingClassName' => 'Illuminate\\Contracts\\Cookie\\QueueingFactory',
                'currentClassName' => 'Illuminate\\Contracts\\Cookie\\QueueingFactory',
                'aliasName' => null,
            ],
            'unqueue' => [
                'name' => 'unqueue',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 22,
                        'endLine' => 22,
                        'startColumn' => 29,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'path' => [
                        'name' => 'path',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 22,
                                'endLine' => 22,
                                'startTokenPos' => 45,
                                'startFilePos' => 457,
                                'endTokenPos' => 45,
                                'endFilePos' => 460,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 22,
                        'endLine' => 22,
                        'startColumn' => 36,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove a cookie from the queue.
 *
 * @param  string  $name
 * @param  string|null  $path
 * @return void
 */',
                'startLine' => 22,
                'endLine' => 22,
                'startColumn' => 5,
                'endColumn' => 49,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cookie',
                'declaringClassName' => 'Illuminate\\Contracts\\Cookie\\QueueingFactory',
                'implementingClassName' => 'Illuminate\\Contracts\\Cookie\\QueueingFactory',
                'currentClassName' => 'Illuminate\\Contracts\\Cookie\\QueueingFactory',
                'aliasName' => null,
            ],
            'getQueuedCookies' => [
                'name' => 'getQueuedCookies',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the cookies which have been queued for the next request.
 *
 * @return array
 */',
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 39,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cookie',
                'declaringClassName' => 'Illuminate\\Contracts\\Cookie\\QueueingFactory',
                'implementingClassName' => 'Illuminate\\Contracts\\Cookie\\QueueingFactory',
                'currentClassName' => 'Illuminate\\Contracts\\Cookie\\QueueingFactory',
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
