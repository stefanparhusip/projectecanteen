<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../symfony/console/Command/Command.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\Console\Command\Command
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-eff4e0235a3e958d97c438c72cb5235404c54f2d46c2d1530aff3b9d7799a70b-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Symfony\\Component\\Console\\Command\\Command',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../symfony/console/Command/Command.php',
            ],
        ],
        'namespace' => 'Symfony\\Component\\Console\\Command',
        'name' => 'Symfony\\Component\\Console\\Command\\Command',
        'shortName' => 'Command',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Base class for all commands.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
        'attributes' => [
        ],
        'startLine' => 35,
        'endLine' => 733,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Symfony\\Component\\Console\\Command\\SignalableCommandInterface',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'SUCCESS' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'SUCCESS',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '0',
                    'attributes' => [
                        'startLine' => 38,
                        'endLine' => 38,
                        'startTokenPos' => 106,
                        'startFilePos' => 1326,
                        'endTokenPos' => 106,
                        'endFilePos' => 1326,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 38,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 29,
            ],
            'FAILURE' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'FAILURE',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '1',
                    'attributes' => [
                        'startLine' => 39,
                        'endLine' => 39,
                        'startTokenPos' => 117,
                        'startFilePos' => 1356,
                        'endTokenPos' => 117,
                        'endFilePos' => 1356,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 39,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 29,
            ],
            'INVALID' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'INVALID',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '2',
                    'attributes' => [
                        'startLine' => 40,
                        'endLine' => 40,
                        'startTokenPos' => 128,
                        'startFilePos' => 1386,
                        'endTokenPos' => 128,
                        'endFilePos' => 1386,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 40,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 29,
            ],
        ],
        'immediateProperties' => [
            'application' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'application',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Symfony\\Component\\Console\\Application',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 42,
                        'endLine' => 42,
                        'startTokenPos' => 140,
                        'startFilePos' => 1430,
                        'endTokenPos' => 140,
                        'endFilePos' => 1433,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 42,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 45,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'name' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'name',
                'modifiers' => 4,
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 43,
                        'endLine' => 43,
                        'startTokenPos' => 152,
                        'startFilePos' => 1464,
                        'endTokenPos' => 152,
                        'endFilePos' => 1467,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 43,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'processTitle' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'processTitle',
                'modifiers' => 4,
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 44,
                        'endLine' => 44,
                        'startTokenPos' => 164,
                        'startFilePos' => 1506,
                        'endTokenPos' => 164,
                        'endFilePos' => 1509,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 44,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 41,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'aliases' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'aliases',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 45,
                        'endLine' => 45,
                        'startTokenPos' => 175,
                        'startFilePos' => 1541,
                        'endTokenPos' => 176,
                        'endFilePos' => 1542,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 45,
                'endLine' => 45,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'definition' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'definition',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\Console\\Input\\InputDefinition',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 46,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'hidden' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'hidden',
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
                        'startLine' => 47,
                        'endLine' => 47,
                        'startTokenPos' => 194,
                        'startFilePos' => 1613,
                        'endTokenPos' => 194,
                        'endFilePos' => 1617,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 47,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'help' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'help',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '\'\'',
                    'attributes' => [
                        'startLine' => 48,
                        'endLine' => 48,
                        'startTokenPos' => 205,
                        'startFilePos' => 1647,
                        'endTokenPos' => 205,
                        'endFilePos' => 1648,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 48,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'description',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '\'\'',
                    'attributes' => [
                        'startLine' => 49,
                        'endLine' => 49,
                        'startTokenPos' => 216,
                        'startFilePos' => 1685,
                        'endTokenPos' => 216,
                        'endFilePos' => 1686,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 49,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'fullDefinition' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'fullDefinition',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Symfony\\Component\\Console\\Input\\InputDefinition',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 50,
                        'endLine' => 50,
                        'startTokenPos' => 228,
                        'startFilePos' => 1736,
                        'endTokenPos' => 228,
                        'endFilePos' => 1739,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 50,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 52,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'ignoreValidationErrors' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'ignoreValidationErrors',
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
                        'startLine' => 51,
                        'endLine' => 51,
                        'startTokenPos' => 239,
                        'startFilePos' => 1785,
                        'endTokenPos' => 239,
                        'endFilePos' => 1789,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 51,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 49,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'code' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'code',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Symfony\\Component\\Console\\Command\\InvokableCommand',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 52,
                        'endLine' => 52,
                        'startTokenPos' => 251,
                        'startFilePos' => 1830,
                        'endTokenPos' => 251,
                        'endFilePos' => 1833,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 52,
                'endLine' => 52,
                'startColumn' => 5,
                'endColumn' => 43,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'synopsis' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'synopsis',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 53,
                        'endLine' => 53,
                        'startTokenPos' => 262,
                        'startFilePos' => 1866,
                        'endTokenPos' => 263,
                        'endFilePos' => 1867,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 53,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'usages' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'usages',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 54,
                        'endLine' => 54,
                        'startTokenPos' => 274,
                        'startFilePos' => 1898,
                        'endTokenPos' => 275,
                        'endFilePos' => 1899,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 54,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'helperSet' => [
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'name' => 'helperSet',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Symfony\\Component\\Console\\Helper\\HelperSet',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 55,
                        'endLine' => 55,
                        'startTokenPos' => 287,
                        'startFilePos' => 1938,
                        'endTokenPos' => 287,
                        'endFilePos' => 1941,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 55,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 41,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'getDefaultName' => [
                'name' => 'getDefaultName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
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
                'attributes' => [
                ],
                'docComment' => '/**
 * @deprecated since Symfony 7.3, use the #[AsCommand] attribute instead
 */',
                'startLine' => 60,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'getDefaultDescription' => [
                'name' => 'getDefaultDescription',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
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
                'attributes' => [
                ],
                'docComment' => '/**
 * @deprecated since Symfony 7.3, use the #[AsCommand] attribute instead
 */',
                'startLine' => 74,
                'endLine' => 83,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            '__construct' => [
                'name' => '__construct',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 90,
                                'endLine' => 90,
                                'startTokenPos' => 473,
                                'startFilePos' => 3237,
                                'endTokenPos' => 473,
                                'endFilePos' => 3240,
                            ],
                        ],
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
                        'startLine' => 90,
                        'endLine' => 90,
                        'startColumn' => 33,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'code' => [
                        'name' => 'code',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 90,
                                'endLine' => 90,
                                'startTokenPos' => 483,
                                'startFilePos' => 3261,
                                'endTokenPos' => 483,
                                'endFilePos' => 3264,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
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
                        'startLine' => 90,
                        'endLine' => 90,
                        'startColumn' => 55,
                        'endColumn' => 76,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @param string|null $name The name of the command; passing null means it must be set in configure()
 *
 * @throws LogicException When the command name is empty
 */',
                'startLine' => 90,
                'endLine' => 161,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'ignoreValidationErrors' => [
                'name' => 'ignoreValidationErrors',
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
                'docComment' => '/**
 * Ignores validation errors.
 *
 * This is mainly useful for the help command.
 */',
                'startLine' => 168,
                'endLine' => 171,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'setApplication' => [
                'name' => 'setApplication',
                'parameters' => [
                    'application' => [
                        'name' => 'application',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Symfony\\Component\\Console\\Application',
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
                        'startLine' => 173,
                        'endLine' => 173,
                        'startColumn' => 36,
                        'endColumn' => 60,
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
                'startLine' => 173,
                'endLine' => 183,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'setHelperSet' => [
                'name' => 'setHelperSet',
                'parameters' => [
                    'helperSet' => [
                        'name' => 'helperSet',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\Console\\Helper\\HelperSet',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 185,
                        'endLine' => 185,
                        'startColumn' => 34,
                        'endColumn' => 53,
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
                'startLine' => 185,
                'endLine' => 188,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'getHelperSet' => [
                'name' => 'getHelperSet',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Symfony\\Component\\Console\\Helper\\HelperSet',
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
                'docComment' => '/**
 * Gets the helper set.
 */',
                'startLine' => 193,
                'endLine' => 196,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'getApplication' => [
                'name' => 'getApplication',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Symfony\\Component\\Console\\Application',
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
                'docComment' => '/**
 * Gets the application instance for this command.
 */',
                'startLine' => 201,
                'endLine' => 204,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'isEnabled' => [
                'name' => 'isEnabled',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Checks whether the command is enabled or not in the current environment.
 *
 * Override this to check for x or y and return false if the command cannot
 * run properly under the current conditions.
 */',
                'startLine' => 212,
                'endLine' => 215,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'configure' => [
                'name' => 'configure',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Configures the current command.
 *
 * @return void
 */',
                'startLine' => 222,
                'endLine' => 224,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
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
                        'startLine' => 240,
                        'endLine' => 240,
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
                        'startLine' => 240,
                        'endLine' => 240,
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
                'docComment' => '/**
 * Executes the current command.
 *
 * This method is not abstract because you can use this class
 * as a concrete class. In this case, instead of defining the
 * execute() method, you set the code to execute by passing
 * a Closure to the setCode() method.
 *
 * @return int 0 if everything went fine, or an exit code
 *
 * @throws LogicException When this abstract method is not implemented
 *
 * @see setCode()
 */',
                'startLine' => 240,
                'endLine' => 243,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'interact' => [
                'name' => 'interact',
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
                        'startLine' => 254,
                        'endLine' => 254,
                        'startColumn' => 33,
                        'endColumn' => 53,
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
                        'startLine' => 254,
                        'endLine' => 254,
                        'startColumn' => 56,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Interacts with the user.
 *
 * This method is executed before the InputDefinition is validated.
 * This means that this is the only place where the command can
 * interactively ask for values of missing required arguments.
 *
 * @return void
 */',
                'startLine' => 254,
                'endLine' => 256,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
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
                        'startLine' => 270,
                        'endLine' => 270,
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
                        'startLine' => 270,
                        'endLine' => 270,
                        'startColumn' => 58,
                        'endColumn' => 80,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Initializes the command after the input has been bound and before the input
 * is validated.
 *
 * This is mainly useful when a lot of commands extends one main command
 * where some things need to be initialized based on the input arguments and options.
 *
 * @see InputInterface::bind()
 * @see InputInterface::validate()
 *
 * @return void
 */',
                'startLine' => 270,
                'endLine' => 272,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'run' => [
                'name' => 'run',
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
                        'startLine' => 288,
                        'endLine' => 288,
                        'startColumn' => 25,
                        'endColumn' => 45,
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
                        'startLine' => 288,
                        'endLine' => 288,
                        'startColumn' => 48,
                        'endColumn' => 70,
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
                'docComment' => '/**
 * Runs the command.
 *
 * The code to execute is either defined directly with the
 * setCode() method or by overriding the execute() method
 * in a sub-class.
 *
 * @return int The command exit code
 *
 * @throws ExceptionInterface When input binding fails. Bypass this by calling {@link ignoreValidationErrors()}.
 *
 * @see setCode()
 * @see execute()
 */',
                'startLine' => 288,
                'endLine' => 342,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'complete' => [
                'name' => 'complete',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
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
                        'startLine' => 347,
                        'endLine' => 347,
                        'startColumn' => 30,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'suggestions' => [
                        'name' => 'suggestions',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\Console\\Completion\\CompletionSuggestions',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 347,
                        'endLine' => 347,
                        'startColumn' => 54,
                        'endColumn' => 87,
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
                'docComment' => '/**
 * Supplies suggestions when resolving possible completion options for input (e.g. option or argument).
 */',
                'startLine' => 347,
                'endLine' => 355,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'getCode' => [
                'name' => 'getCode',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'callable',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the code that is executed by the command.
 *
 * @return ?callable null if the code has not been set with setCode()
 */',
                'startLine' => 362,
                'endLine' => 365,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'setCode' => [
                'name' => 'setCode',
                'parameters' => [
                    'code' => [
                        'name' => 'code',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 381,
                        'endLine' => 381,
                        'startColumn' => 29,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Sets the code to execute when running this command.
 *
 * If this method is used, it overrides the code defined
 * in the execute() method.
 *
 * @param callable $code A callable(InputInterface $input, OutputInterface $output)
 *
 * @return $this
 *
 * @throws InvalidArgumentException
 *
 * @see execute()
 */',
                'startLine' => 381,
                'endLine' => 386,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'mergeApplicationDefinition' => [
                'name' => 'mergeApplicationDefinition',
                'parameters' => [
                    'mergeArgs' => [
                        'name' => 'mergeArgs',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 397,
                                'endLine' => 397,
                                'startTokenPos' => 1996,
                                'startFilePos' => 13661,
                                'endTokenPos' => 1996,
                                'endFilePos' => 13664,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 397,
                        'endLine' => 397,
                        'startColumn' => 48,
                        'endColumn' => 69,
                        'parameterIndex' => 0,
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
 * Merges the application definition with the command definition.
 *
 * This method is not part of public API and should not be used directly.
 *
 * @param bool $mergeArgs Whether to merge or not the Application definition arguments to Command definition arguments
 *
 * @internal
 */',
                'startLine' => 397,
                'endLine' => 413,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'setDefinition' => [
                'name' => 'setDefinition',
                'parameters' => [
                    'definition' => [
                        'name' => 'definition',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'array',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Symfony\\Component\\Console\\Input\\InputDefinition',
                                            'isIdentifier' => false,
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
                        'startLine' => 420,
                        'endLine' => 420,
                        'startColumn' => 35,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Sets an array of argument and option instances.
 *
 * @return $this
 */',
                'startLine' => 420,
                'endLine' => 431,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'getDefinition' => [
                'name' => 'getDefinition',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\Console\\Input\\InputDefinition',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the InputDefinition attached to this Command.
 */',
                'startLine' => 436,
                'endLine' => 439,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'getNativeDefinition' => [
                'name' => 'getNativeDefinition',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\Console\\Input\\InputDefinition',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the InputDefinition to be used to create representations of this Command.
 *
 * Can be overridden to provide the original command representation when it would otherwise
 * be changed by merging with the application InputDefinition.
 *
 * This method is not part of public API and should not be used directly.
 */',
                'startLine' => 449,
                'endLine' => 458,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'addArgument' => [
                'name' => 'addArgument',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
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
                        'startLine' => 471,
                        'endLine' => 471,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'mode' => [
                        'name' => 'mode',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 471,
                                'endLine' => 471,
                                'startTokenPos' => 2359,
                                'startFilePos' => 16466,
                                'endTokenPos' => 2359,
                                'endFilePos' => 16469,
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
                        'startLine' => 471,
                        'endLine' => 471,
                        'startColumn' => 47,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'description' => [
                        'name' => 'description',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 471,
                                'endLine' => 471,
                                'startTokenPos' => 2368,
                                'startFilePos' => 16494,
                                'endTokenPos' => 2368,
                                'endFilePos' => 16495,
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
                        'startLine' => 471,
                        'endLine' => 471,
                        'startColumn' => 66,
                        'endColumn' => 89,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 471,
                                'endLine' => 471,
                                'startTokenPos' => 2377,
                                'startFilePos' => 16515,
                                'endTokenPos' => 2377,
                                'endFilePos' => 16518,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 471,
                        'endLine' => 471,
                        'startColumn' => 92,
                        'endColumn' => 112,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'suggestedValues' => [
                        'name' => 'suggestedValues',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 471,
                                'endLine' => 471,
                                'startTokenPos' => 2388,
                                'startFilePos' => 16555,
                                'endTokenPos' => 2389,
                                'endFilePos' => 16556,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'array',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
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
                        'startLine' => 471,
                        'endLine' => 471,
                        'startColumn' => 115,
                        'endColumn' => 150,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Adds an argument.
 *
 * @param                                                                               $mode            The argument mode: InputArgument::REQUIRED or InputArgument::OPTIONAL
 * @param                                                                               $default         The default value (for InputArgument::OPTIONAL mode only)
 * @param array|\\Closure(CompletionInput,CompletionSuggestions):list<string|Suggestion> $suggestedValues The values used for input completion
 *
 * @return $this
 *
 * @throws InvalidArgumentException When argument mode is not valid
 */',
                'startLine' => 471,
                'endLine' => 477,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'addOption' => [
                'name' => 'addOption',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
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
                        'startLine' => 491,
                        'endLine' => 491,
                        'startColumn' => 31,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'shortcut' => [
                        'name' => 'shortcut',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 491,
                                'endLine' => 491,
                                'startTokenPos' => 2481,
                                'startFilePos' => 17758,
                                'endTokenPos' => 2481,
                                'endFilePos' => 17761,
                            ],
                        ],
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
                                            'name' => 'array',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
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
                        'startLine' => 491,
                        'endLine' => 491,
                        'startColumn' => 45,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'mode' => [
                        'name' => 'mode',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 491,
                                'endLine' => 491,
                                'startTokenPos' => 2491,
                                'startFilePos' => 17777,
                                'endTokenPos' => 2491,
                                'endFilePos' => 17780,
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
                        'startLine' => 491,
                        'endLine' => 491,
                        'startColumn' => 81,
                        'endColumn' => 97,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'description' => [
                        'name' => 'description',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 491,
                                'endLine' => 491,
                                'startTokenPos' => 2500,
                                'startFilePos' => 17805,
                                'endTokenPos' => 2500,
                                'endFilePos' => 17806,
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
                        'startLine' => 491,
                        'endLine' => 491,
                        'startColumn' => 100,
                        'endColumn' => 123,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 491,
                                'endLine' => 491,
                                'startTokenPos' => 2509,
                                'startFilePos' => 17826,
                                'endTokenPos' => 2509,
                                'endFilePos' => 17829,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 491,
                        'endLine' => 491,
                        'startColumn' => 126,
                        'endColumn' => 146,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'suggestedValues' => [
                        'name' => 'suggestedValues',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 491,
                                'endLine' => 491,
                                'startTokenPos' => 2520,
                                'startFilePos' => 17866,
                                'endTokenPos' => 2521,
                                'endFilePos' => 17867,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'array',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
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
                        'startLine' => 491,
                        'endLine' => 491,
                        'startColumn' => 149,
                        'endColumn' => 184,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Adds an option.
 *
 * @param                                                                               $shortcut        The shortcuts, can be null, a string of shortcuts delimited by | or an array of shortcuts
 * @param                                                                               $mode            The option mode: One of the InputOption::VALUE_* constants
 * @param                                                                               $default         The default value (must be null for InputOption::VALUE_NONE)
 * @param array|\\Closure(CompletionInput,CompletionSuggestions):list<string|Suggestion> $suggestedValues The values used for input completion
 *
 * @return $this
 *
 * @throws InvalidArgumentException If option mode is invalid or incompatible
 */',
                'startLine' => 491,
                'endLine' => 497,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'setName' => [
                'name' => 'setName',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
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
                        'startLine' => 511,
                        'endLine' => 511,
                        'startColumn' => 29,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Sets the name of the command.
 *
 * This method can set both the namespace and the name if
 * you separate them by a colon (:)
 *
 *     $command->setName(\'foo:bar\');
 *
 * @return $this
 *
 * @throws InvalidArgumentException When the name is invalid
 */',
                'startLine' => 511,
                'endLine' => 518,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'setProcessTitle' => [
                'name' => 'setProcessTitle',
                'parameters' => [
                    'title' => [
                        'name' => 'title',
                        'default' => null,
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
                        'startLine' => 528,
                        'endLine' => 528,
                        'startColumn' => 37,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Sets the process title of the command.
 *
 * This feature should be used only when creating a long process command,
 * like a daemon.
 *
 * @return $this
 */',
                'startLine' => 528,
                'endLine' => 533,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'getName' => [
                'name' => 'getName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the command name.
 */',
                'startLine' => 538,
                'endLine' => 541,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'setHidden' => [
                'name' => 'setHidden',
                'parameters' => [
                    'hidden' => [
                        'name' => 'hidden',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 548,
                                'endLine' => 548,
                                'startTokenPos' => 2711,
                                'startFilePos' => 19270,
                                'endTokenPos' => 2711,
                                'endFilePos' => 19273,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 548,
                        'endLine' => 548,
                        'startColumn' => 31,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * @param bool $hidden Whether or not the command should be hidden from the list of commands
 *
 * @return $this
 */',
                'startLine' => 548,
                'endLine' => 553,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'isHidden' => [
                'name' => 'isHidden',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * @return bool whether the command should be publicly shown or not
 */',
                'startLine' => 558,
                'endLine' => 561,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'setDescription' => [
                'name' => 'setDescription',
                'parameters' => [
                    'description' => [
                        'name' => 'description',
                        'default' => null,
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
                        'startLine' => 568,
                        'endLine' => 568,
                        'startColumn' => 36,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Sets the description for the command.
 *
 * @return $this
 */',
                'startLine' => 568,
                'endLine' => 573,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'getDescription' => [
                'name' => 'getDescription',
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
 * Returns the description for the command.
 */',
                'startLine' => 578,
                'endLine' => 581,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'setHelp' => [
                'name' => 'setHelp',
                'parameters' => [
                    'help' => [
                        'name' => 'help',
                        'default' => null,
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
                        'startLine' => 588,
                        'endLine' => 588,
                        'startColumn' => 29,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Sets the help for the command.
 *
 * @return $this
 */',
                'startLine' => 588,
                'endLine' => 593,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'getHelp' => [
                'name' => 'getHelp',
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
 * Returns the help for the command.
 */',
                'startLine' => 598,
                'endLine' => 601,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'getProcessedHelp' => [
                'name' => 'getProcessedHelp',
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
 * Returns the processed help for the command replacing the %command.name% and
 * %command.full_name% patterns with the real values dynamically.
 */',
                'startLine' => 607,
                'endLine' => 622,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'setAliases' => [
                'name' => 'setAliases',
                'parameters' => [
                    'aliases' => [
                        'name' => 'aliases',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'iterable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 633,
                        'endLine' => 633,
                        'startColumn' => 32,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Sets the aliases for the command.
 *
 * @param string[] $aliases An array of aliases for the command
 *
 * @return $this
 *
 * @throws InvalidArgumentException When an alias is invalid
 */',
                'startLine' => 633,
                'endLine' => 645,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'getAliases' => [
                'name' => 'getAliases',
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
 * Returns the aliases for the command.
 */',
                'startLine' => 650,
                'endLine' => 653,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'getSynopsis' => [
                'name' => 'getSynopsis',
                'parameters' => [
                    'short' => [
                        'name' => 'short',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 660,
                                'endLine' => 660,
                                'startTokenPos' => 3111,
                                'startFilePos' => 21813,
                                'endTokenPos' => 3111,
                                'endFilePos' => 21817,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 660,
                        'endLine' => 660,
                        'startColumn' => 33,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
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
 * Returns the synopsis for the command.
 *
 * @param bool $short Whether to show the short version of the synopsis (with options folded) or not
 */',
                'startLine' => 660,
                'endLine' => 669,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'addUsage' => [
                'name' => 'addUsage',
                'parameters' => [
                    'usage' => [
                        'name' => 'usage',
                        'default' => null,
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
                        'startLine' => 676,
                        'endLine' => 676,
                        'startColumn' => 30,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a command usage example, it\'ll be prefixed with the command name.
 *
 * @return $this
 */',
                'startLine' => 676,
                'endLine' => 685,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'getUsages' => [
                'name' => 'getUsages',
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
 * Returns alternative usages of the command.
 */',
                'startLine' => 690,
                'endLine' => 693,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'getHelper' => [
                'name' => 'getHelper',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
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
                        'startLine' => 701,
                        'endLine' => 701,
                        'startColumn' => 31,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\Console\\Helper\\HelperInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets a helper instance by name.
 *
 * @throws LogicException           if no HelperSet is defined
 * @throws InvalidArgumentException if the helper is not defined
 */',
                'startLine' => 701,
                'endLine' => 708,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
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
                'docComment' => null,
                'startLine' => 710,
                'endLine' => 713,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
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
                        'startLine' => 715,
                        'endLine' => 715,
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
                                'startLine' => 715,
                                'endLine' => 715,
                                'startTokenPos' => 3409,
                                'startFilePos' => 23503,
                                'endTokenPos' => 3409,
                                'endFilePos' => 23503,
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
                        'startLine' => 715,
                        'endLine' => 715,
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
                'docComment' => null,
                'startLine' => 715,
                'endLine' => 718,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'aliasName' => null,
            ],
            'validateName' => [
                'name' => 'validateName',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
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
                        'startLine' => 727,
                        'endLine' => 727,
                        'startColumn' => 35,
                        'endColumn' => 46,
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
                'docComment' => '/**
 * Validates a command name.
 *
 * It must be non-empty and parts can optionally be separated by ":".
 *
 * @throws InvalidArgumentException When the name is invalid
 */',
                'startLine' => 727,
                'endLine' => 732,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Console\\Command',
                'declaringClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'implementingClassName' => 'Symfony\\Component\\Console\\Command\\Command',
                'currentClassName' => 'Symfony\\Component\\Console\\Command\\Command',
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
