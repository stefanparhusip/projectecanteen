<?php

declare(strict_types=1);

// odsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-logs
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-3fe9475e8c073a9c58af7e9cb8c74416031941413358f6082d558134d416ba86',
    'data' => [
        'name' => 'logs',
        'parameters' => [
            'driver' => [
                'name' => 'driver',
                'default' => [
                    'code' => '\\null',
                    'attributes' => [
                        'startLine' => 582,
                        'endLine' => 582,
                        'startTokenPos' => 2639,
                        'startFilePos' => 16256,
                        'endTokenPos' => 2639,
                        'endFilePos' => 16259,
                    ],
                ],
                'type' => null,
                'isVariadic' => false,
                'byRef' => false,
                'isPromoted' => false,
                'attributes' => [
                ],
                'startLine' => 582,
                'endLine' => 582,
                'startColumn' => 19,
                'endColumn' => 32,
                'parameterIndex' => 0,
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
                            'name' => 'Psr\\Log\\LoggerInterface',
                            'isIdentifier' => false,
                        ],
                    ],
                    1 => [
                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                        'data' => [
                            'name' => 'Illuminate\\Log\\LogManager',
                            'isIdentifier' => false,
                        ],
                    ],
                ],
            ],
        ],
        'attributes' => [
        ],
        'docComment' => '/**
 * Get a log driver instance.
 *
 * @param  string|null  $driver
 * @return ($driver is null ? \\Illuminate\\Log\\LogManager : \\Psr\\Log\\LoggerInterface)
 */',
        'startLine' => 582,
        'endLine' => 585,
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
                'name' => 'logs',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php',
            ],
        ],
    ],
]);
