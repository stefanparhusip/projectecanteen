<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../symfony/process/Exception/ProcessStartFailedException.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\Process\Exception\ProcessStartFailedException
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-b262411891190a990a2b8538ec492b59691390777cbd37cad605afd103c72059-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Symfony\\Component\\Process\\Exception\\ProcessStartFailedException',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../symfony/process/Exception/ProcessStartFailedException.php',
            ],
        ],
        'namespace' => 'Symfony\\Component\\Process\\Exception',
        'name' => 'Symfony\\Component\\Process\\Exception\\ProcessStartFailedException',
        'shortName' => 'ProcessStartFailedException',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Exception for processes failed during startup.
 */',
        'attributes' => [
        ],
        'startLine' => 19,
        'endLine' => 43,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Symfony\\Component\\Process\\Exception\\ProcessFailedException',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'process' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Exception\\ProcessStartFailedException',
                'implementingClassName' => 'Symfony\\Component\\Process\\Exception\\ProcessStartFailedException',
                'name' => 'process',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\Process\\Process',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 22,
                'endLine' => 22,
                'startColumn' => 9,
                'endColumn' => 32,
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
                    'process' => [
                        'name' => 'process',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\Process\\Process',
                                'isIdentifier' => false,
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
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => [
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
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 23,
                        'endLine' => 23,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 21,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process\\Exception',
                'declaringClassName' => 'Symfony\\Component\\Process\\Exception\\ProcessStartFailedException',
                'implementingClassName' => 'Symfony\\Component\\Process\\Exception\\ProcessStartFailedException',
                'currentClassName' => 'Symfony\\Component\\Process\\Exception\\ProcessStartFailedException',
                'aliasName' => null,
            ],
            'getProcess' => [
                'name' => 'getProcess',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\Process\\Process',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 39,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process\\Exception',
                'declaringClassName' => 'Symfony\\Component\\Process\\Exception\\ProcessStartFailedException',
                'implementingClassName' => 'Symfony\\Component\\Process\\Exception\\ProcessStartFailedException',
                'currentClassName' => 'Symfony\\Component\\Process\\Exception\\ProcessStartFailedException',
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
