<?php

declare(strict_types=1);

// odsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-redirect
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-3fe9475e8c073a9c58af7e9cb8c74416031941413358f6082d558134d416ba86',
    'data' => [
        'name' => 'redirect',
        'parameters' => [
            'to' => [
                'name' => 'to',
                'default' => [
                    'code' => '\\null',
                    'attributes' => [
                        'startLine' => 707,
                        'endLine' => 707,
                        'startTokenPos' => 3152,
                        'startFilePos' => 19268,
                        'endTokenPos' => 3152,
                        'endFilePos' => 19271,
                    ],
                ],
                'type' => null,
                'isVariadic' => false,
                'byRef' => false,
                'isPromoted' => false,
                'attributes' => [
                ],
                'startLine' => 707,
                'endLine' => 707,
                'startColumn' => 23,
                'endColumn' => 32,
                'parameterIndex' => 0,
                'isOptional' => true,
            ],
            'status' => [
                'name' => 'status',
                'default' => [
                    'code' => '302',
                    'attributes' => [
                        'startLine' => 707,
                        'endLine' => 707,
                        'startTokenPos' => 3159,
                        'startFilePos' => 19284,
                        'endTokenPos' => 3159,
                        'endFilePos' => 19286,
                    ],
                ],
                'type' => null,
                'isVariadic' => false,
                'byRef' => false,
                'isPromoted' => false,
                'attributes' => [
                ],
                'startLine' => 707,
                'endLine' => 707,
                'startColumn' => 35,
                'endColumn' => 47,
                'parameterIndex' => 1,
                'isOptional' => true,
            ],
            'headers' => [
                'name' => 'headers',
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 707,
                        'endLine' => 707,
                        'startTokenPos' => 3166,
                        'startFilePos' => 19300,
                        'endTokenPos' => 3167,
                        'endFilePos' => 19301,
                    ],
                ],
                'type' => null,
                'isVariadic' => false,
                'byRef' => false,
                'isPromoted' => false,
                'attributes' => [
                ],
                'startLine' => 707,
                'endLine' => 707,
                'startColumn' => 50,
                'endColumn' => 62,
                'parameterIndex' => 2,
                'isOptional' => true,
            ],
            'secure' => [
                'name' => 'secure',
                'default' => [
                    'code' => '\\null',
                    'attributes' => [
                        'startLine' => 707,
                        'endLine' => 707,
                        'startTokenPos' => 3174,
                        'startFilePos' => 19314,
                        'endTokenPos' => 3174,
                        'endFilePos' => 19317,
                    ],
                ],
                'type' => null,
                'isVariadic' => false,
                'byRef' => false,
                'isPromoted' => false,
                'attributes' => [
                ],
                'startLine' => 707,
                'endLine' => 707,
                'startColumn' => 65,
                'endColumn' => 78,
                'parameterIndex' => 3,
                'isOptional' => true,
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
                            'name' => 'Illuminate\\Routing\\Redirector',
                            'isIdentifier' => false,
                        ],
                    ],
                    1 => [
                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                        'data' => [
                            'name' => 'Illuminate\\Http\\RedirectResponse',
                            'isIdentifier' => false,
                        ],
                    ],
                ],
            ],
        ],
        'attributes' => [
        ],
        'docComment' => '/**
 * Get an instance of the redirector.
 *
 * @param  string|null  $to
 * @param  int  $status
 * @param  array  $headers
 * @param  bool|null  $secure
 * @return ($to is null ? \\Illuminate\\Routing\\Redirector : \\Illuminate\\Http\\RedirectResponse)
 */',
        'startLine' => 707,
        'endLine' => 714,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'isStatic' => false,
        'namespace' => null,
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'redirect',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php',
            ],
        ],
    ],
]);
