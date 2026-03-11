<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../symfony/console/Command/CompleteCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\Console\Command\CompleteCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-b4cb5828faf8a03bc62023eeb4342569f879e654d7b225b69bcab2e6e3eecd80-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../symfony/console/Command/CompleteCommand.php',
            ],
        ],
        'namespace' => 'Symfony\\Component\\Console\\Command',
        'name' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
        'shortName' => 'CompleteCommand',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 32,
        'docComment' => '/**
 * Responsible for providing the values to the shell completion.
 *
 * @author Wouter de Jong <wouter@wouterj.nl>
 */',
        'attributes' => [
            0 => [
                'name' => 'Symfony\\Component\\Console\\Attribute\\AsCommand',
                'isRepeated' => false,
                'arguments' => [
                    'name' => [
                        'code' => '\'|_complete\'',
                        'attributes' => [
                            'startLine' => 32,
                            'endLine' => 32,
                            'startTokenPos' => 77,
                            'startFilePos' => 1163,
                            'endTokenPos' => 77,
                            'endFilePos' => 1174,
                        ],
                    ],
                    'description' => [
                        'code' => '\'Internal command to provide shell completion suggestions\'',
                        'attributes' => [
                            'startLine' => 32,
                            'endLine' => 32,
                            'startTokenPos' => 83,
                            'startFilePos' => 1190,
                            'endTokenPos' => 83,
                            'endFilePos' => 1247,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 32,
        'endLine' => 217,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'COMPLETION_API_VERSION' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'name' => 'COMPLETION_API_VERSION',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'1\'',
                    'attributes' => [
                        'startLine' => 35,
                        'endLine' => 35,
                        'startTokenPos' => 107,
                        'startFilePos' => 1339,
                        'endTokenPos' => 107,
                        'endFilePos' => 1341,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 35,
                'endLine' => 35,
                'startColumn' => 5,
                'endColumn' => 46,
            ],
        ],
        'immediateProperties' => [
            'completionOutputs' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'name' => 'completionOutputs',
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
                'startLine' => 37,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'isDebug' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'name' => 'isDebug',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 38,
                        'endLine' => 38,
                        'startTokenPos' => 125,
                        'startFilePos' => 1411,
                        'endTokenPos' => 125,
                        'endFilePos' => 1415,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 38,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 34,
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
                    'completionOutputs' => [
                        'name' => 'completionOutputs',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 43,
                                'endLine' => 43,
                                'startTokenPos' => 142,
                                'startFilePos' => 1664,
                                'endTokenPos' => 143,
                                'endFilePos' => 1665,
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
                        'startLine' => 43,
                        'endLine' => 43,
                        'startColumn' => 33,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @param array<string, class-string<CompletionOutputInterface>> $completionOutputs A list of additional completion outputs, with shell name as key and FQCN as value
 */',
                'startLine' => 43,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'aliasName' => null,
            ],
            'configure' => [
                'name' => 'configure',
                'parameters' => [
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
                'startLine' => 55,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'aliasName' => null,
            ],
            'initialize' => [
                'name' => 'initialize',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\Console\\Input\\InputInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 66,
                        'endLine' => 66,
                        'startColumn' => 35,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'output' => [
                        'name' => 'output',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 66,
                        'endLine' => 66,
                        'startColumn' => 58,
                        'endColumn' => 80,
                        'parameterIndex' => 1,
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
                'startLine' => 66,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'aliasName' => null,
            ],
            'execute' => [
                'name' => 'execute',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\Console\\Input\\InputInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 71,
                        'endLine' => 71,
                        'startColumn' => 32,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'output' => [
                        'name' => 'output',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 71,
                        'endLine' => 71,
                        'startColumn' => 55,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
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
                'startLine' => 71,
                'endLine' => 174,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'aliasName' => null,
            ],
            'createCompletionInput' => [
                'name' => 'createCompletionInput',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\Console\\Input\\InputInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 176,
                        'endLine' => 176,
                        'startColumn' => 44,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\Console\\Completion\\CompletionInput',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 176,
                'endLine' => 191,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'aliasName' => null,
            ],
            'findCommand' => [
                'name' => 'findCommand',
                'parameters' => [
                    'completionInput' => [
                        'name' => 'completionInput',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\Console\\Completion\\CompletionInput',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 193,
                        'endLine' => 193,
                        'startColumn' => 34,
                        'endColumn' => 65,
                        'parameterIndex' => 0,
                        'isOptional' => false,
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
                                    'name' => 'Symfony\\Component\\Console\\Command\\Command',
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
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 193,
                'endLine' => 206,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'aliasName' => null,
            ],
            'log' => [
                'name' => 'log',
                'parameters' => [
                    'messages' => [
                        'name' => 'messages',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 208,
                        'endLine' => 208,
                        'startColumn' => 26,
                        'endColumn' => 34,
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
                'startLine' => 208,
                'endLine' => 216,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\CompleteCommand',
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
