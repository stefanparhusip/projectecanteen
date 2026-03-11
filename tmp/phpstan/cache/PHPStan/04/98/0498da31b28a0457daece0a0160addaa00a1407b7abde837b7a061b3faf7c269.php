<?php

declare(strict_types=1);

// odsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-response
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-3fe9475e8c073a9c58af7e9cb8c74416031941413358f6082d558134d416ba86',
    'data' => [
        'name' => 'response',
        'parameters' => [
            'content' => [
                'name' => 'content',
                'default' => [
                    'code' => '\\null',
                    'attributes' => [
                        'startLine' => 848,
                        'endLine' => 848,
                        'startTokenPos' => 3743,
                        'startFilePos' => 22820,
                        'endTokenPos' => 3743,
                        'endFilePos' => 22823,
                    ],
                ],
                'type' => null,
                'isVariadic' => false,
                'byRef' => false,
                'isPromoted' => false,
                'attributes' => [
                ],
                'startLine' => 848,
                'endLine' => 848,
                'startColumn' => 23,
                'endColumn' => 37,
                'parameterIndex' => 0,
                'isOptional' => true,
            ],
            'status' => [
                'name' => 'status',
                'default' => [
                    'code' => '200',
                    'attributes' => [
                        'startLine' => 848,
                        'endLine' => 848,
                        'startTokenPos' => 3750,
                        'startFilePos' => 22836,
                        'endTokenPos' => 3750,
                        'endFilePos' => 22838,
                    ],
                ],
                'type' => null,
                'isVariadic' => false,
                'byRef' => false,
                'isPromoted' => false,
                'attributes' => [
                ],
                'startLine' => 848,
                'endLine' => 848,
                'startColumn' => 40,
                'endColumn' => 52,
                'parameterIndex' => 1,
                'isOptional' => true,
            ],
            'headers' => [
                'name' => 'headers',
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 848,
                        'endLine' => 848,
                        'startTokenPos' => 3759,
                        'startFilePos' => 22858,
                        'endTokenPos' => 3760,
                        'endFilePos' => 22859,
                    ],
                ],
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
                'startLine' => 848,
                'endLine' => 848,
                'startColumn' => 55,
                'endColumn' => 73,
                'parameterIndex' => 2,
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
                            'name' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
                            'isIdentifier' => false,
                        ],
                    ],
                    1 => [
                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                        'data' => [
                            'name' => 'Illuminate\\Http\\Response',
                            'isIdentifier' => false,
                        ],
                    ],
                ],
            ],
        ],
        'attributes' => [
        ],
        'docComment' => '/**
 * Return a new response from the application.
 *
 * @param  \\Illuminate\\Contracts\\View\\View|string|array|null  $content
 * @param  int  $status
 * @return ($content is null ? \\Illuminate\\Contracts\\Routing\\ResponseFactory : \\Illuminate\\Http\\Response)
 */',
        'startLine' => 848,
        'endLine' => 857,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'isStatic' => false,
        'namespace' => null,
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'response',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php',
            ],
        ],
    ],
]);
