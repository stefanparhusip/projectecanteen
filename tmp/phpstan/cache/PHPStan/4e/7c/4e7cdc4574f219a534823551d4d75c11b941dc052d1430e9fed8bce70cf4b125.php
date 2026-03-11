<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../symfony/console/Command/SignalableCommandInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\Console\Command\SignalableCommandInterface
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-33f93b23ad8b389347461df3205d1ecd5ae313dc0e05c585a5a89b27b9c16e24-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../symfony/console/Command/SignalableCommandInterface.php',
            ],
        ],
        'namespace' => 'Symfony\\Component\\Console\\Command',
        'name' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
        'shortName' => 'SignalableCommandInterface',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Interface for command reacting to signal.
 *
 * @author Grégoire Pineau <lyrixx@lyrix.info>
 */',
        'attributes' => [
        ],
        'startLine' => 19,
        'endLine' => 36,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'getSubscribedSignals' => [
                'name' => 'getSubscribedSignals',
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
                'docComment' => '/**
 * Returns the list of signals to subscribe.
 *
 * @return list<\\SIG*>
 *
 * @see https://php.net/pcntl.constants for signals
 */',
                'startLine' => 28,
                'endLine' => 28,
                'startColumn' => 5,
                'endColumn' => 50,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
                'aliasName' => null,
            ],
            'handleSignal' => [
                'name' => 'handleSignal',
                'parameters' => [
                    'signal' => [
                        'name' => 'signal',
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
                        'startLine' => 35,
                        'endLine' => 35,
                        'startColumn' => 34,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'previousExitCode' => [
                        'name' => 'previousExitCode',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 35,
                                'endLine' => 35,
                                'startTokenPos' => 52,
                                'startFilePos' => 898,
                                'endTokenPos' => 52,
                                'endFilePos' => 898,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'false',
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
                        'startColumn' => 47,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
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
                                    'name' => 'int',
                                    'isIdentifier' => true,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'false',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * The method will be called when the application is signaled.
 *
 * @return int|false The exit code to return or false to continue the normal execution
 */',
                'startLine' => 35,
                'endLine' => 35,
                'startColumn' => 5,
                'endColumn' => 90,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
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
