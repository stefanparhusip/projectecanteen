<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Pagination/LengthAwarePaginator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Pagination\LengthAwarePaginator
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-04052ccf8d845ffa117f09b7d74da90f5a1e2a00dabf8db3026985860d111cb5-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Pagination\\LengthAwarePaginator',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Pagination/LengthAwarePaginator.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'name' => 'Illuminate\\Contracts\\Pagination\\LengthAwarePaginator',
        'shortName' => 'LengthAwarePaginator',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @template TKey of array-key
 *
 * @template-covariant TValue
 *
 * @extends Paginator<TKey, TValue>
 */',
        'attributes' => [
        ],
        'startLine' => 12,
        'endLine' => 36,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Pagination\\Paginator',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'getUrlRange' => [
                'name' => 'getUrlRange',
                'parameters' => [
                    'start' => [
                        'name' => 'start',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 21,
                        'endLine' => 21,
                        'startColumn' => 33,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'end' => [
                        'name' => 'end',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 21,
                        'endLine' => 21,
                        'startColumn' => 41,
                        'endColumn' => 44,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a range of pagination URLs.
 *
 * @param  int  $start
 * @param  int  $end
 * @return array
 */',
                'startLine' => 21,
                'endLine' => 21,
                'startColumn' => 5,
                'endColumn' => 46,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Pagination',
                'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\LengthAwarePaginator',
                'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\LengthAwarePaginator',
                'currentClassName' => 'Illuminate\\Contracts\\Pagination\\LengthAwarePaginator',
                'aliasName' => null,
            ],
            'total' => [
                'name' => 'total',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine the total number of items in the data store.
 *
 * @return int
 */',
                'startLine' => 28,
                'endLine' => 28,
                'startColumn' => 5,
                'endColumn' => 28,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Pagination',
                'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\LengthAwarePaginator',
                'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\LengthAwarePaginator',
                'currentClassName' => 'Illuminate\\Contracts\\Pagination\\LengthAwarePaginator',
                'aliasName' => null,
            ],
            'lastPage' => [
                'name' => 'lastPage',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the page number of the last available page.
 *
 * @return int
 */',
                'startLine' => 35,
                'endLine' => 35,
                'startColumn' => 5,
                'endColumn' => 31,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Pagination',
                'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\LengthAwarePaginator',
                'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\LengthAwarePaginator',
                'currentClassName' => 'Illuminate\\Contracts\\Pagination\\LengthAwarePaginator',
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
