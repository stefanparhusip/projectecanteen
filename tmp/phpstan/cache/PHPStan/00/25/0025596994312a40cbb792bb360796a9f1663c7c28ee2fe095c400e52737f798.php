<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../symfony/http-kernel/Exception/HttpException.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\HttpKernel\Exception\HttpException
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-eb9012af4a3bb1eef340f3b329abba79971ee2ab3bfc7bbec4802db13ced3d68-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../symfony/http-kernel/Exception/HttpException.php',
            ],
        ],
        'namespace' => 'Symfony\\Component\\HttpKernel\\Exception',
        'name' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
        'shortName' => 'HttpException',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * HttpException.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */',
        'attributes' => [
        ],
        'startLine' => 19,
        'endLine' => 66,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'RuntimeException',
        'implementsClassNames' => [
            0 => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'statusCode' => [
                'declaringClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'implementingClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'name' => 'statusCode',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 22,
                'endLine' => 22,
                'startColumn' => 9,
                'endColumn' => 31,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'headers' => [
                'declaringClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'implementingClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'name' => 'headers',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 9,
                'endColumn' => 35,
                'isPromoted' => true,
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
                    'statusCode' => [
                        'name' => 'statusCode',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 22,
                        'endLine' => 22,
                        'startColumn' => 9,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 23,
                                'endLine' => 23,
                                'startTokenPos' => 45,
                                'startFilePos' => 537,
                                'endTokenPos' => 45,
                                'endFilePos' => 538,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 23,
                        'endLine' => 23,
                        'startColumn' => 9,
                        'endColumn' => 28,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'previous' => [
                        'name' => 'previous',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 24,
                                'endLine' => 24,
                                'startTokenPos' => 55,
                                'startFilePos' => 573,
                                'endTokenPos' => 55,
                                'endFilePos' => 576,
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
                        'startColumn' => 9,
                        'endColumn' => 36,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 25,
                                'endLine' => 25,
                                'startTokenPos' => 66,
                                'startFilePos' => 612,
                                'endTokenPos' => 67,
                                'endFilePos' => 613,
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
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 25,
                        'endLine' => 25,
                        'startColumn' => 9,
                        'endColumn' => 35,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'code' => [
                        'name' => 'code',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 26,
                                'endLine' => 26,
                                'startTokenPos' => 76,
                                'startFilePos' => 636,
                                'endTokenPos' => 76,
                                'endFilePos' => 636,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 26,
                        'endLine' => 26,
                        'startColumn' => 9,
                        'endColumn' => 21,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 21,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpKernel\\Exception',
                'declaringClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'implementingClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'currentClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'aliasName' => null,
            ],
            'fromStatusCode' => [
                'name' => 'fromStatusCode',
                'parameters' => [
                    'statusCode' => [
                        'name' => 'statusCode',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 43,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 31,
                                'endLine' => 31,
                                'startTokenPos' => 118,
                                'startFilePos' => 788,
                                'endTokenPos' => 118,
                                'endFilePos' => 789,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 60,
                        'endColumn' => 79,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'previous' => [
                        'name' => 'previous',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 31,
                                'endLine' => 31,
                                'startTokenPos' => 128,
                                'startFilePos' => 816,
                                'endTokenPos' => 128,
                                'endFilePos' => 819,
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
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 82,
                        'endColumn' => 109,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 31,
                                'endLine' => 31,
                                'startTokenPos' => 137,
                                'startFilePos' => 839,
                                'endTokenPos' => 138,
                                'endFilePos' => 840,
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
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 112,
                        'endColumn' => 130,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'code' => [
                        'name' => 'code',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 31,
                                'endLine' => 31,
                                'startTokenPos' => 147,
                                'startFilePos' => 855,
                                'endTokenPos' => 147,
                                'endFilePos' => 855,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 133,
                        'endColumn' => 145,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 31,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpKernel\\Exception',
                'declaringClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'implementingClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'currentClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'aliasName' => null,
            ],
            'getStatusCode' => [
                'name' => 'getStatusCode',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 52,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpKernel\\Exception',
                'declaringClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'implementingClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'currentClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'aliasName' => null,
            ],
            'getHeaders' => [
                'name' => 'getHeaders',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 57,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpKernel\\Exception',
                'declaringClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'implementingClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'currentClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'aliasName' => null,
            ],
            'setHeaders' => [
                'name' => 'setHeaders',
                'parameters' => [
                    'headers' => [
                        'name' => 'headers',
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
                        'startLine' => 62,
                        'endLine' => 62,
                        'startColumn' => 32,
                        'endColumn' => 45,
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
                'docComment' => null,
                'startLine' => 62,
                'endLine' => 65,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpKernel\\Exception',
                'declaringClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'implementingClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
                'currentClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
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
