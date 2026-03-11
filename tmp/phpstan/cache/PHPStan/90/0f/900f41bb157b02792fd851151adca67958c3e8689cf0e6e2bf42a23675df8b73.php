<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Exceptions/HttpResponseException.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Exceptions\HttpResponseException
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-473e663a1dca5a936357eebfd739cf136c8f1bc0d82757141310382d2e3e8f95-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Exceptions/HttpResponseException.php',
            ],
        ],
        'namespace' => 'Illuminate\\Http\\Exceptions',
        'name' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
        'shortName' => 'HttpResponseException',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 40,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'RuntimeException',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'response' => [
                'declaringClassName' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
                'implementingClassName' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
                'name' => 'response',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The underlying response instance.
 *
 * @var \\Symfony\\Component\\HttpFoundation\\Response
 */',
                'attributes' => [
                ],
                'startLine' => 16,
                'endLine' => 16,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            '__construct' => [
                'name' => '__construct',
                'parameters' => [
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\HttpFoundation\\Response',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 24,
                        'endLine' => 24,
                        'startColumn' => 33,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'previous' => [
                        'name' => 'previous',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 24,
                                'endLine' => 24,
                                'startTokenPos' => 59,
                                'startFilePos' => 594,
                                'endTokenPos' => 59,
                                'endFilePos' => 597,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Throwable',
                                            'isIdentifier' => false,
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
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 24,
                        'endLine' => 24,
                        'startColumn' => 53,
                        'endColumn' => 79,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new HTTP response exception instance.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Response  $response
 * @param  \\Throwable|null  $previous
 */',
                'startLine' => 24,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Exceptions',
                'declaringClassName' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
                'implementingClassName' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
                'currentClassName' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
                'aliasName' => null,
            ],
            'getResponse' => [
                'name' => 'getResponse',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the underlying response instance.
 *
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
                'startLine' => 36,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Exceptions',
                'declaringClassName' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
                'implementingClassName' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
                'currentClassName' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
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
