<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Exceptions/UnknownMethodException.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Exceptions\UnknownMethodException
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-be02a24bd457383e696c54fcd9942a50af9d4d81f547a892175da2c8a1bdace3-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\Exceptions\\UnknownMethodException',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Exceptions/UnknownMethodException.php',
            ],
        ],
        'namespace' => 'Carbon\\Exceptions',
        'name' => 'Carbon\\Exceptions\\UnknownMethodException',
        'shortName' => 'UnknownMethodException',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 19,
        'endLine' => 51,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'BadMethodCallException',
        'implementsClassNames' => [
            0 => 'Carbon\\Exceptions\\BadMethodCallException',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'method' => [
                'declaringClassName' => 'Carbon\\Exceptions\\UnknownMethodException',
                'implementingClassName' => 'Carbon\\Exceptions\\UnknownMethodException',
                'name' => 'method',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The method.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 22,
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
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 35,
                        'endLine' => 35,
                        'startColumn' => 33,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'code' => [
                        'name' => 'code',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 35,
                                'endLine' => 35,
                                'startTokenPos' => 67,
                                'startFilePos' => 751,
                                'endTokenPos' => 67,
                                'endFilePos' => 751,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 35,
                        'endLine' => 35,
                        'startColumn' => 42,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'previous' => [
                        'name' => 'previous',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 35,
                                'endLine' => 35,
                                'startTokenPos' => 77,
                                'startFilePos' => 777,
                                'endTokenPos' => 77,
                                'endFilePos' => 780,
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
                        'startLine' => 35,
                        'endLine' => 35,
                        'startColumn' => 53,
                        'endColumn' => 79,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Constructor.
 *
 * @param string         $method
 * @param int            $code
 * @param Throwable|null $previous
 */',
                'startLine' => 35,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Exceptions',
                'declaringClassName' => 'Carbon\\Exceptions\\UnknownMethodException',
                'implementingClassName' => 'Carbon\\Exceptions\\UnknownMethodException',
                'currentClassName' => 'Carbon\\Exceptions\\UnknownMethodException',
                'aliasName' => null,
            ],
            'getMethod' => [
                'name' => 'getMethod',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the method.
 *
 * @return string
 */',
                'startLine' => 47,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Exceptions',
                'declaringClassName' => 'Carbon\\Exceptions\\UnknownMethodException',
                'implementingClassName' => 'Carbon\\Exceptions\\UnknownMethodException',
                'currentClassName' => 'Carbon\\Exceptions\\UnknownMethodException',
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
