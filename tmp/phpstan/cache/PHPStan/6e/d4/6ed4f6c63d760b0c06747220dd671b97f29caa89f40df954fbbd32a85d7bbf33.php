<?php

declare(strict_types=1);

// odsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-abort_unless
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-3fe9475e8c073a9c58af7e9cb8c74416031941413358f6082d558134d416ba86',
    'data' => [
        'name' => 'abort_unless',
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
                'startLine' => 101,
                'endLine' => 101,
                'startColumn' => 27,
                'endColumn' => 34,
                'parameterIndex' => 0,
                'isOptional' => false,
            ],
            'code' => [
                'name' => 'code',
                'default' => null,
                'type' => null,
                'isVariadic' => false,
                'byRef' => false,
                'isPromoted' => false,
                'attributes' => [
                ],
                'startLine' => 101,
                'endLine' => 101,
                'startColumn' => 37,
                'endColumn' => 41,
                'parameterIndex' => 1,
                'isOptional' => false,
            ],
            'message' => [
                'name' => 'message',
                'default' => [
                    'code' => '\'\'',
                    'attributes' => [
                        'startLine' => 101,
                        'endLine' => 101,
                        'startTokenPos' => 468,
                        'startFilePos' => 3921,
                        'endTokenPos' => 468,
                        'endFilePos' => 3922,
                    ],
                ],
                'type' => null,
                'isVariadic' => false,
                'byRef' => false,
                'isPromoted' => false,
                'attributes' => [
                ],
                'startLine' => 101,
                'endLine' => 101,
                'startColumn' => 44,
                'endColumn' => 56,
                'parameterIndex' => 2,
                'isOptional' => true,
            ],
            'headers' => [
                'name' => 'headers',
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 101,
                        'endLine' => 101,
                        'startTokenPos' => 477,
                        'startFilePos' => 3942,
                        'endTokenPos' => 478,
                        'endFilePos' => 3943,
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
                'startLine' => 101,
                'endLine' => 101,
                'startColumn' => 59,
                'endColumn' => 77,
                'parameterIndex' => 3,
                'isOptional' => true,
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
 * Throw an HttpException with the given data unless the given condition is true.
 *
 * @param  bool  $boolean
 * @param  \\Symfony\\Component\\HttpFoundation\\Response|\\Illuminate\\Contracts\\Support\\Responsable|int  $code
 * @param  string  $message
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\HttpException
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
 */',
        'startLine' => 101,
        'endLine' => 106,
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
                'name' => 'abort_unless',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php',
            ],
        ],
    ],
]);
