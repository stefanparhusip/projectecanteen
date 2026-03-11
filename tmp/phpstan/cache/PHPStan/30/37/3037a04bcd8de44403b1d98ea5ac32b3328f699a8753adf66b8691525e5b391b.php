<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../symfony/process/Process.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\Process\Process
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-bc06ac9c96603abaef0baf08238429bd4ee73716058ca804c2c26f55538a60e9-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Symfony\\Component\\Process\\Process',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../symfony/process/Process.php',
            ],
        ],
        'namespace' => 'Symfony\\Component\\Process',
        'name' => 'Symfony\\Component\\Process\\Process',
        'shortName' => 'Process',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Process is a thin wrapper around proc_* functions to easily
 * start independent PHP processes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @implements \\IteratorAggregate<string, string>
 */',
        'attributes' => [
        ],
        'startLine' => 33,
        'endLine' => 1676,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'IteratorAggregate',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'ERR' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'ERR',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'err\'',
                    'attributes' => [
                        'startLine' => 35,
                        'endLine' => 35,
                        'startTokenPos' => 74,
                        'startFilePos' => 1145,
                        'endTokenPos' => 74,
                        'endFilePos' => 1149,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 35,
                'endLine' => 35,
                'startColumn' => 5,
                'endColumn' => 29,
            ],
            'OUT' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'OUT',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'out\'',
                    'attributes' => [
                        'startLine' => 36,
                        'endLine' => 36,
                        'startTokenPos' => 85,
                        'startFilePos' => 1175,
                        'endTokenPos' => 85,
                        'endFilePos' => 1179,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 36,
                'endLine' => 36,
                'startColumn' => 5,
                'endColumn' => 29,
            ],
            'STATUS_READY' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'STATUS_READY',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'ready\'',
                    'attributes' => [
                        'startLine' => 38,
                        'endLine' => 38,
                        'startTokenPos' => 96,
                        'startFilePos' => 1215,
                        'endTokenPos' => 96,
                        'endFilePos' => 1221,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 38,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 40,
            ],
            'STATUS_STARTED' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'STATUS_STARTED',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'started\'',
                    'attributes' => [
                        'startLine' => 39,
                        'endLine' => 39,
                        'startTokenPos' => 107,
                        'startFilePos' => 1258,
                        'endTokenPos' => 107,
                        'endFilePos' => 1266,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 39,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 44,
            ],
            'STATUS_TERMINATED' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'STATUS_TERMINATED',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'terminated\'',
                    'attributes' => [
                        'startLine' => 40,
                        'endLine' => 40,
                        'startTokenPos' => 118,
                        'startFilePos' => 1306,
                        'endTokenPos' => 118,
                        'endFilePos' => 1317,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 40,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 50,
            ],
            'STDIN' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'STDIN',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '0',
                    'attributes' => [
                        'startLine' => 42,
                        'endLine' => 42,
                        'startTokenPos' => 129,
                        'startFilePos' => 1346,
                        'endTokenPos' => 129,
                        'endFilePos' => 1346,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 42,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 27,
            ],
            'STDOUT' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'STDOUT',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '1',
                    'attributes' => [
                        'startLine' => 43,
                        'endLine' => 43,
                        'startTokenPos' => 140,
                        'startFilePos' => 1375,
                        'endTokenPos' => 140,
                        'endFilePos' => 1375,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 43,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 28,
            ],
            'STDERR' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'STDERR',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '2',
                    'attributes' => [
                        'startLine' => 44,
                        'endLine' => 44,
                        'startTokenPos' => 151,
                        'startFilePos' => 1404,
                        'endTokenPos' => 151,
                        'endFilePos' => 1404,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 44,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 28,
            ],
            'TIMEOUT_PRECISION' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'TIMEOUT_PRECISION',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '0.2',
                    'attributes' => [
                        'startLine' => 47,
                        'endLine' => 47,
                        'startTokenPos' => 164,
                        'startFilePos' => 1482,
                        'endTokenPos' => 164,
                        'endFilePos' => 1484,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 47,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 41,
            ],
            'ITER_NON_BLOCKING' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'ITER_NON_BLOCKING',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '1',
                    'attributes' => [
                        'startLine' => 49,
                        'endLine' => 49,
                        'startTokenPos' => 175,
                        'startFilePos' => 1525,
                        'endTokenPos' => 175,
                        'endFilePos' => 1525,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 49,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 39,
            ],
            'ITER_KEEP_OUTPUT' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'ITER_KEEP_OUTPUT',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '2',
                    'attributes' => [
                        'startLine' => 50,
                        'endLine' => 50,
                        'startTokenPos' => 188,
                        'startFilePos' => 1660,
                        'endTokenPos' => 188,
                        'endFilePos' => 1660,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 50,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 38,
            ],
            'ITER_SKIP_OUT' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'ITER_SKIP_OUT',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '4',
                    'attributes' => [
                        'startLine' => 51,
                        'endLine' => 51,
                        'startTokenPos' => 201,
                        'startFilePos' => 1786,
                        'endTokenPos' => 201,
                        'endFilePos' => 1786,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 51,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 35,
            ],
            'ITER_SKIP_ERR' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'ITER_SKIP_ERR',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '8',
                    'attributes' => [
                        'startLine' => 52,
                        'endLine' => 52,
                        'startTokenPos' => 214,
                        'startFilePos' => 1874,
                        'endTokenPos' => 214,
                        'endFilePos' => 1874,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 52,
                'endLine' => 52,
                'startColumn' => 5,
                'endColumn' => 35,
            ],
        ],
        'immediateProperties' => [
            'callback' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'callback',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Closure',
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
                        'startLine' => 57,
                        'endLine' => 57,
                        'startTokenPos' => 230,
                        'startFilePos' => 2032,
                        'endTokenPos' => 230,
                        'endFilePos' => 2035,
                    ],
                ],
                'docComment' => '/**
 * @var \\Closure(\'out\'|\'err\', string):bool|null
 */',
                'attributes' => [
                ],
                'startLine' => 57,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'commandline' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'commandline',
                'modifiers' => 4,
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
                                    'name' => 'string',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 58,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'cwd' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'cwd',
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
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 59,
                'endLine' => 59,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'env' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'env',
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
                        'startLine' => 60,
                        'endLine' => 60,
                        'startTokenPos' => 258,
                        'startFilePos' => 2128,
                        'endTokenPos' => 259,
                        'endFilePos' => 2129,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 60,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 28,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'input' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'input',
                'modifiers' => 4,
                'type' => null,
                'default' => null,
                'docComment' => '/** @var resource|string|\\Iterator|null */',
                'attributes' => [
                ],
                'startLine' => 62,
                'endLine' => 62,
                'startColumn' => 5,
                'endColumn' => 19,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'starttime' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'starttime',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'float',
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
                        'startLine' => 63,
                        'endLine' => 63,
                        'startTokenPos' => 278,
                        'startFilePos' => 2231,
                        'endTokenPos' => 278,
                        'endFilePos' => 2234,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 63,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'lastOutputTime' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'lastOutputTime',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'float',
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
                        'startLine' => 64,
                        'endLine' => 64,
                        'startTokenPos' => 290,
                        'startFilePos' => 2274,
                        'endTokenPos' => 290,
                        'endFilePos' => 2277,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 64,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 42,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'timeout' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'timeout',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'float',
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
                        'startLine' => 65,
                        'endLine' => 65,
                        'startTokenPos' => 302,
                        'startFilePos' => 2310,
                        'endTokenPos' => 302,
                        'endFilePos' => 2313,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 65,
                'endLine' => 65,
                'startColumn' => 5,
                'endColumn' => 35,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'idleTimeout' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'idleTimeout',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'float',
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
                        'startLine' => 66,
                        'endLine' => 66,
                        'startTokenPos' => 314,
                        'startFilePos' => 2350,
                        'endTokenPos' => 314,
                        'endFilePos' => 2353,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 66,
                'endLine' => 66,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'exitcode' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'exitcode',
                'modifiers' => 4,
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 67,
                        'endLine' => 67,
                        'startTokenPos' => 326,
                        'startFilePos' => 2385,
                        'endTokenPos' => 326,
                        'endFilePos' => 2388,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 67,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'fallbackStatus' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'fallbackStatus',
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
                        'startLine' => 68,
                        'endLine' => 68,
                        'startTokenPos' => 337,
                        'startFilePos' => 2427,
                        'endTokenPos' => 338,
                        'endFilePos' => 2428,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 68,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'processInformation' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'processInformation',
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
                'startLine' => 69,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'outputDisabled' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'outputDisabled',
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
                        'startLine' => 70,
                        'endLine' => 70,
                        'startTokenPos' => 356,
                        'startFilePos' => 2505,
                        'endTokenPos' => 356,
                        'endFilePos' => 2509,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 70,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 41,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'stdout' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'stdout',
                'modifiers' => 4,
                'type' => null,
                'default' => null,
                'docComment' => '/** @var resource */',
                'attributes' => [
                ],
                'startLine' => 72,
                'endLine' => 72,
                'startColumn' => 5,
                'endColumn' => 20,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'stderr' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'stderr',
                'modifiers' => 4,
                'type' => null,
                'default' => null,
                'docComment' => '/** @var resource */',
                'attributes' => [
                ],
                'startLine' => 74,
                'endLine' => 74,
                'startColumn' => 5,
                'endColumn' => 20,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'process' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'process',
                'modifiers' => 4,
                'type' => null,
                'default' => null,
                'docComment' => '/** @var resource|null */',
                'attributes' => [
                ],
                'startLine' => 76,
                'endLine' => 76,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'status' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'status',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'self::STATUS_READY',
                    'attributes' => [
                        'startLine' => 77,
                        'endLine' => 77,
                        'startTokenPos' => 388,
                        'startFilePos' => 2685,
                        'endTokenPos' => 390,
                        'endFilePos' => 2702,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 77,
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 48,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'incrementalOutputOffset' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'incrementalOutputOffset',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '0',
                    'attributes' => [
                        'startLine' => 78,
                        'endLine' => 78,
                        'startTokenPos' => 401,
                        'startFilePos' => 2748,
                        'endTokenPos' => 401,
                        'endFilePos' => 2748,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 78,
                'endLine' => 78,
                'startColumn' => 5,
                'endColumn' => 45,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'incrementalErrorOutputOffset' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'incrementalErrorOutputOffset',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '0',
                    'attributes' => [
                        'startLine' => 79,
                        'endLine' => 79,
                        'startTokenPos' => 412,
                        'startFilePos' => 2799,
                        'endTokenPos' => 412,
                        'endFilePos' => 2799,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 79,
                'endLine' => 79,
                'startColumn' => 5,
                'endColumn' => 50,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'tty' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'tty',
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
                        'startLine' => 80,
                        'endLine' => 80,
                        'startTokenPos' => 423,
                        'startFilePos' => 2826,
                        'endTokenPos' => 423,
                        'endFilePos' => 2830,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 80,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'pty' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'pty',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 81,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'options' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'options',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[\'suppress_errors\' => true, \'bypass_shell\' => true]',
                    'attributes' => [
                        'startLine' => 82,
                        'endLine' => 82,
                        'startTokenPos' => 441,
                        'startFilePos' => 2885,
                        'endTokenPos' => 454,
                        'endFilePos' => 2935,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 82,
                'endLine' => 82,
                'startColumn' => 5,
                'endColumn' => 81,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'ignoredSignals' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'ignoredSignals',
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
                        'startLine' => 83,
                        'endLine' => 83,
                        'startTokenPos' => 465,
                        'startFilePos' => 2974,
                        'endTokenPos' => 466,
                        'endFilePos' => 2975,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 83,
                'endLine' => 83,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'processPipes' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'processPipes',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
                                    'isIdentifier' => false,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
                                    'isIdentifier' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 85,
                'endLine' => 85,
                'startColumn' => 5,
                'endColumn' => 49,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'latestSignal' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'latestSignal',
                'modifiers' => 4,
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 87,
                        'endLine' => 87,
                        'startTokenPos' => 487,
                        'startFilePos' => 3063,
                        'endTokenPos' => 487,
                        'endFilePos' => 3066,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 87,
                'endLine' => 87,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'sigchild' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'sigchild',
                'modifiers' => 20,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'bool',
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
                        'startLine' => 89,
                        'endLine' => 89,
                        'startTokenPos' => 501,
                        'startFilePos' => 3107,
                        'endTokenPos' => 501,
                        'endFilePos' => 3110,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 89,
                'endLine' => 89,
                'startColumn' => 5,
                'endColumn' => 42,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'executables' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'executables',
                'modifiers' => 20,
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
                        'startLine' => 90,
                        'endLine' => 90,
                        'startTokenPos' => 514,
                        'startFilePos' => 3153,
                        'endTokenPos' => 515,
                        'endFilePos' => 3154,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 90,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 43,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'exitCodes' => [
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'name' => 'exitCodes',
                'modifiers' => 17,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[
    0 => \'OK\',
    1 => \'General error\',
    2 => \'Misuse of shell builtins\',
    126 => \'Invoked command cannot execute\',
    127 => \'Command not found\',
    128 => \'Invalid exit argument\',
    // signals
    129 => \'Hangup\',
    130 => \'Interrupt\',
    131 => \'Quit and dump core\',
    132 => \'Illegal instruction\',
    133 => \'Trace/breakpoint trap\',
    134 => \'Process aborted\',
    135 => \'Bus error: "access to undefined portion of memory object"\',
    136 => \'Floating point exception: "erroneous arithmetic operation"\',
    137 => \'Kill (terminate immediately)\',
    138 => \'User-defined 1\',
    139 => \'Segmentation violation\',
    140 => \'User-defined 2\',
    141 => \'Write to pipe with no one reading\',
    142 => \'Signal raised by alarm\',
    143 => \'Termination (request to terminate)\',
    // 144 - not defined
    145 => \'Child process terminated, stopped (or continued*)\',
    146 => \'Continue if stopped\',
    147 => \'Stop executing temporarily\',
    148 => \'Terminal stop signal\',
    149 => \'Background process attempting to read from tty ("in")\',
    150 => \'Background process attempting to write to tty ("out")\',
    151 => \'Urgent data available on socket\',
    152 => \'CPU time limit exceeded\',
    153 => \'File size limit exceeded\',
    154 => \'Signal raised by timer counting virtual time: "virtual timer expired"\',
    155 => \'Profiling timer expired\',
    // 156 - not defined
    157 => \'Pollable event\',
    // 158 - not defined
    159 => \'Bad syscall\',
]',
                    'attributes' => [
                        'startLine' => 97,
                        'endLine' => 138,
                        'startTokenPos' => 530,
                        'startFilePos' => 3323,
                        'endTokenPos' => 778,
                        'endFilePos' => 4969,
                    ],
                ],
                'docComment' => '/**
 * Exit codes translation table.
 *
 * User-defined errors must use exit codes in the 64-113 range.
 */',
                'attributes' => [
                ],
                'startLine' => 97,
                'endLine' => 138,
                'startColumn' => 5,
                'endColumn' => 6,
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
                    'command' => [
                        'name' => 'command',
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
                        'startLine' => 149,
                        'endLine' => 149,
                        'startColumn' => 33,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'cwd' => [
                        'name' => 'cwd',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 149,
                                'endLine' => 149,
                                'startTokenPos' => 801,
                                'startFilePos' => 5661,
                                'endTokenPos' => 801,
                                'endFilePos' => 5664,
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
                        'startLine' => 149,
                        'endLine' => 149,
                        'startColumn' => 49,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'env' => [
                        'name' => 'env',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 149,
                                'endLine' => 149,
                                'startTokenPos' => 811,
                                'startFilePos' => 5681,
                                'endTokenPos' => 811,
                                'endFilePos' => 5684,
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
                        'startLine' => 149,
                        'endLine' => 149,
                        'startColumn' => 70,
                        'endColumn' => 87,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'input' => [
                        'name' => 'input',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 149,
                                'endLine' => 149,
                                'startTokenPos' => 820,
                                'startFilePos' => 5702,
                                'endTokenPos' => 820,
                                'endFilePos' => 5705,
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
                        'startLine' => 149,
                        'endLine' => 149,
                        'startColumn' => 90,
                        'endColumn' => 108,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'default' => [
                            'code' => '60',
                            'attributes' => [
                                'startLine' => 149,
                                'endLine' => 149,
                                'startTokenPos' => 830,
                                'startFilePos' => 5726,
                                'endTokenPos' => 830,
                                'endFilePos' => 5727,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
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
                        'startLine' => 149,
                        'endLine' => 149,
                        'startColumn' => 111,
                        'endColumn' => 130,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @param array          $command The command to run and its arguments listed as separate entries
 * @param string|null    $cwd     The working directory or null to use the working dir of the current PHP process
 * @param array|null     $env     The environment variables or null to use the same environment as the current PHP process
 * @param mixed          $input   The input as stream resource, scalar or \\Traversable, or null for no input
 * @param int|float|null $timeout The timeout in seconds or null to disable
 *
 * @throws LogicException When proc_open is not installed
 */',
                'startLine' => 149,
                'endLine' => 172,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'fromShellCommandline' => [
                'name' => 'fromShellCommandline',
                'parameters' => [
                    'command' => [
                        'name' => 'command',
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
                        'startLine' => 195,
                        'endLine' => 195,
                        'startColumn' => 49,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'cwd' => [
                        'name' => 'cwd',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 195,
                                'endLine' => 195,
                                'startTokenPos' => 1000,
                                'startFilePos' => 7956,
                                'endTokenPos' => 1000,
                                'endFilePos' => 7959,
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
                        'startLine' => 195,
                        'endLine' => 195,
                        'startColumn' => 66,
                        'endColumn' => 84,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'env' => [
                        'name' => 'env',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 195,
                                'endLine' => 195,
                                'startTokenPos' => 1010,
                                'startFilePos' => 7976,
                                'endTokenPos' => 1010,
                                'endFilePos' => 7979,
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
                        'startLine' => 195,
                        'endLine' => 195,
                        'startColumn' => 87,
                        'endColumn' => 104,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'input' => [
                        'name' => 'input',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 195,
                                'endLine' => 195,
                                'startTokenPos' => 1019,
                                'startFilePos' => 7997,
                                'endTokenPos' => 1019,
                                'endFilePos' => 8000,
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
                        'startLine' => 195,
                        'endLine' => 195,
                        'startColumn' => 107,
                        'endColumn' => 125,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'timeout' => [
                        'name' => 'timeout',
                        'default' => [
                            'code' => '60',
                            'attributes' => [
                                'startLine' => 195,
                                'endLine' => 195,
                                'startTokenPos' => 1029,
                                'startFilePos' => 8021,
                                'endTokenPos' => 1029,
                                'endFilePos' => 8022,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
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
                        'startLine' => 195,
                        'endLine' => 195,
                        'startColumn' => 128,
                        'endColumn' => 147,
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
 * Creates a Process instance as a command-line to be run in a shell wrapper.
 *
 * Command-lines are parsed by the shell of your OS (/bin/sh on Unix-like, cmd.exe on Windows.)
 * This allows using e.g. pipes or conditional execution. In this mode, signals are sent to the
 * shell wrapper and not to your commands.
 *
 * In order to inject dynamic values into command-lines, we strongly recommend using placeholders.
 * This will save escaping values, which is not portable nor secure anyway:
 *
 *   $process = Process::fromShellCommandline(\'my_command "${:MY_VAR}"\');
 *   $process->run(null, [\'MY_VAR\' => $theValue]);
 *
 * @param string         $command The command line to pass to the shell of the OS
 * @param string|null    $cwd     The working directory or null to use the working dir of the current PHP process
 * @param array|null     $env     The environment variables or null to use the same environment as the current PHP process
 * @param mixed          $input   The input as stream resource, scalar or \\Traversable, or null for no input
 * @param int|float|null $timeout The timeout in seconds or null to disable
 *
 * @throws LogicException When proc_open is not installed
 */',
                'startLine' => 195,
                'endLine' => 201,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            '__serialize' => [
                'name' => '__serialize',
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
                'startLine' => 203,
                'endLine' => 206,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            '__unserialize' => [
                'name' => '__unserialize',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 208,
                        'endLine' => 208,
                        'startColumn' => 35,
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
                'startLine' => 208,
                'endLine' => 211,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            '__destruct' => [
                'name' => '__destruct',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 213,
                'endLine' => 220,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            '__clone' => [
                'name' => '__clone',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 222,
                'endLine' => 225,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'run' => [
                'name' => 'run',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 250,
                                'endLine' => 250,
                                'startTokenPos' => 1223,
                                'startFilePos' => 9862,
                                'endTokenPos' => 1223,
                                'endFilePos' => 9865,
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
                        'startLine' => 250,
                        'endLine' => 250,
                        'startColumn' => 25,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'env' => [
                        'name' => 'env',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 250,
                                'endLine' => 250,
                                'startTokenPos' => 1232,
                                'startFilePos' => 9881,
                                'endTokenPos' => 1233,
                                'endFilePos' => 9882,
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
                        'startLine' => 250,
                        'endLine' => 250,
                        'startColumn' => 53,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Runs the process.
 *
 * The callback receives the type of output (out or err) and
 * some bytes from the output in real-time. It allows to have feedback
 * from the independent process during execution.
 *
 * The STDOUT and STDERR are also available after the process is finished
 * via the getOutput() and getErrorOutput() methods.
 *
 * @param (callable(\'out\'|\'err\', string):void)|null $callback A PHP callback to run whenever there is some
 *                                                            output available on STDOUT or STDERR
 *
 * @return int The exit status code
 *
 * @throws ProcessStartFailedException When process can\'t be launched
 * @throws RuntimeException            When process is already running
 * @throws ProcessTimedOutException    When process timed out
 * @throws ProcessSignaledException    When process stopped after receiving signal
 * @throws LogicException              In case a callback is provided and output has been disabled
 *
 * @final
 */',
                'startLine' => 250,
                'endLine' => 255,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'mustRun' => [
                'name' => 'mustRun',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 277,
                                'endLine' => 277,
                                'startTokenPos' => 1278,
                                'startFilePos' => 10945,
                                'endTokenPos' => 1278,
                                'endFilePos' => 10948,
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
                        'startLine' => 277,
                        'endLine' => 277,
                        'startColumn' => 29,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'env' => [
                        'name' => 'env',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 277,
                                'endLine' => 277,
                                'startTokenPos' => 1287,
                                'startFilePos' => 10964,
                                'endTokenPos' => 1288,
                                'endFilePos' => 10965,
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
                        'startLine' => 277,
                        'endLine' => 277,
                        'startColumn' => 57,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
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
 * Runs the process.
 *
 * This is identical to run() except that an exception is thrown if the process
 * exits with a non-zero exit code.
 *
 * @param (callable(\'out\'|\'err\', string):void)|null $callback A PHP callback to run whenever there is some
 *                                                            output available on STDOUT or STDERR
 *
 * @return $this
 *
 * @throws ProcessFailedException   When process didn\'t terminate successfully
 * @throws RuntimeException         When process can\'t be launched
 * @throws RuntimeException         When process is already running
 * @throws ProcessTimedOutException When process timed out
 * @throws ProcessSignaledException When process stopped after receiving signal
 * @throws LogicException           In case a callback is provided and output has been disabled
 *
 * @final
 */',
                'startLine' => 277,
                'endLine' => 284,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'start' => [
                'name' => 'start',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 305,
                                'endLine' => 305,
                                'startTokenPos' => 1350,
                                'startFilePos' => 12204,
                                'endTokenPos' => 1350,
                                'endFilePos' => 12207,
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
                        'startLine' => 305,
                        'endLine' => 305,
                        'startColumn' => 27,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'env' => [
                        'name' => 'env',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 305,
                                'endLine' => 305,
                                'startTokenPos' => 1359,
                                'startFilePos' => 12223,
                                'endTokenPos' => 1360,
                                'endFilePos' => 12224,
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
                        'startLine' => 305,
                        'endLine' => 305,
                        'startColumn' => 55,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
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
 * Starts the process and returns after writing the input to STDIN.
 *
 * This method blocks until all STDIN data is sent to the process then it
 * returns while the process runs in the background.
 *
 * The termination of the process can be awaited with wait().
 *
 * The callback receives the type of output (out or err) and some bytes from
 * the output in real-time while writing the standard input to the process.
 * It allows to have feedback from the independent process during execution.
 *
 * @param (callable(\'out\'|\'err\', string):void)|null $callback A PHP callback to run whenever there is some
 *                                                            output available on STDOUT or STDERR
 *
 * @throws ProcessStartFailedException When process can\'t be launched
 * @throws RuntimeException            When process is already running
 * @throws LogicException              In case a callback is provided and output has been disabled
 */',
                'startLine' => 305,
                'endLine' => 402,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'restart' => [
                'name' => 'restart',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 419,
                                'endLine' => 419,
                                'startTokenPos' => 2199,
                                'startFilePos' => 16738,
                                'endTokenPos' => 2199,
                                'endFilePos' => 16741,
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
                        'startLine' => 419,
                        'endLine' => 419,
                        'startColumn' => 29,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'env' => [
                        'name' => 'env',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 419,
                                'endLine' => 419,
                                'startTokenPos' => 2208,
                                'startFilePos' => 16757,
                                'endTokenPos' => 2209,
                                'endFilePos' => 16758,
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
                        'startLine' => 419,
                        'endLine' => 419,
                        'startColumn' => 57,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
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
 * Restarts the process.
 *
 * Be warned that the process is cloned before being started.
 *
 * @param (callable(\'out\'|\'err\', string):void)|null $callback A PHP callback to run whenever there is some
 *                                                            output available on STDOUT or STDERR
 *
 * @throws ProcessStartFailedException When process can\'t be launched
 * @throws RuntimeException            When process is already running
 *
 * @see start()
 *
 * @final
 */',
                'startLine' => 419,
                'endLine' => 429,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'wait' => [
                'name' => 'wait',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 447,
                                'endLine' => 447,
                                'startTokenPos' => 2283,
                                'startFilePos' => 17854,
                                'endTokenPos' => 2283,
                                'endFilePos' => 17857,
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
                        'startLine' => 447,
                        'endLine' => 447,
                        'startColumn' => 26,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
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
 * Waits for the process to terminate.
 *
 * The callback receives the type of output (out or err) and some bytes
 * from the output in real-time while writing the standard input to the process.
 * It allows to have feedback from the independent process during execution.
 *
 * @param (callable(\'out\'|\'err\', string):void)|null $callback A PHP callback to run whenever there is some
 *                                                            output available on STDOUT or STDERR
 *
 * @return int The exitcode of the process
 *
 * @throws ProcessTimedOutException When process timed out
 * @throws ProcessSignaledException When process stopped after receiving signal
 * @throws LogicException           When process is not yet started
 */',
                'startLine' => 447,
                'endLine' => 477,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'waitUntil' => [
                'name' => 'waitUntil',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
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
                        'startLine' => 493,
                        'endLine' => 493,
                        'startColumn' => 31,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
 * Waits until the callback returns true.
 *
 * The callback receives the type of output (out or err) and some bytes
 * from the output in real-time while writing the standard input to the process.
 * It allows to have feedback from the independent process during execution.
 *
 * @param (callable(\'out\'|\'err\', string):bool)|null $callback A PHP callback to run whenever there is some
 *                                                            output available on STDOUT or STDERR
 *
 * @throws RuntimeException         When process timed out
 * @throws LogicException           When process is not yet started
 * @throws ProcessTimedOutException In case the timeout was reached
 */',
                'startLine' => 493,
                'endLine' => 526,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getPid' => [
                'name' => 'getPid',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the Pid (process identifier), if applicable.
 *
 * @return int|null The process id if running, null otherwise
 */',
                'startLine' => 533,
                'endLine' => 536,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'signal' => [
                'name' => 'signal',
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
                        'startLine' => 549,
                        'endLine' => 549,
                        'startColumn' => 28,
                        'endColumn' => 38,
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
 * Sends a POSIX signal to the process.
 *
 * @param int $signal A valid POSIX signal (see https://php.net/pcntl.constants)
 *
 * @return $this
 *
 * @throws LogicException   In case the process is not running
 * @throws RuntimeException In case --enable-sigchild is activated and the process can\'t be killed
 * @throws RuntimeException In case of failure
 */',
                'startLine' => 549,
                'endLine' => 554,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'disableOutput' => [
                'name' => 'disableOutput',
                'parameters' => [
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
 * Disables fetching output and error output from the underlying process.
 *
 * @return $this
 *
 * @throws RuntimeException In case the process is already running
 * @throws LogicException   if an idle timeout is set
 */',
                'startLine' => 564,
                'endLine' => 576,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'enableOutput' => [
                'name' => 'enableOutput',
                'parameters' => [
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
 * Enables fetching output and error output from the underlying process.
 *
 * @return $this
 *
 * @throws RuntimeException In case the process is already running
 */',
                'startLine' => 585,
                'endLine' => 594,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'isOutputDisabled' => [
                'name' => 'isOutputDisabled',
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
 * Returns true in case the output is disabled, false otherwise.
 */',
                'startLine' => 599,
                'endLine' => 602,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getOutput' => [
                'name' => 'getOutput',
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
 * Returns the current output of the process (STDOUT).
 *
 * @throws LogicException in case the output has been disabled
 * @throws LogicException In case the process is not started
 */',
                'startLine' => 610,
                'endLine' => 619,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getIncrementalOutput' => [
                'name' => 'getIncrementalOutput',
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
 * Returns the output incrementally.
 *
 * In comparison with the getOutput method which always return the whole
 * output, this one returns the new output since the last call.
 *
 * @throws LogicException in case the output has been disabled
 * @throws LogicException In case the process is not started
 */',
                'startLine' => 630,
                'endLine' => 642,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getIterator' => [
                'name' => 'getIterator',
                'parameters' => [
                    'flags' => [
                        'name' => 'flags',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 654,
                                'endLine' => 654,
                                'startTokenPos' => 3215,
                                'startFilePos' => 24695,
                                'endTokenPos' => 3215,
                                'endFilePos' => 24695,
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
                        'startLine' => 654,
                        'endLine' => 654,
                        'startColumn' => 33,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Generator',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns an iterator to the output of the process, with the output type as keys (Process::OUT/ERR).
 *
 * @param int $flags A bit field of Process::ITER_* flags
 *
 * @return \\Generator<string, string>
 *
 * @throws LogicException in case the output has been disabled
 * @throws LogicException In case the process is not started
 */',
                'startLine' => 654,
                'endLine' => 699,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => true,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'clearOutput' => [
                'name' => 'clearOutput',
                'parameters' => [
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
 * Clears the process output.
 *
 * @return $this
 */',
                'startLine' => 706,
                'endLine' => 713,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getErrorOutput' => [
                'name' => 'getErrorOutput',
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
 * Returns the current error output of the process (STDERR).
 *
 * @throws LogicException in case the output has been disabled
 * @throws LogicException In case the process is not started
 */',
                'startLine' => 721,
                'endLine' => 730,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getIncrementalErrorOutput' => [
                'name' => 'getIncrementalErrorOutput',
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
 * Returns the errorOutput incrementally.
 *
 * In comparison with the getErrorOutput method which always return the
 * whole error output, this one returns the new error output since the last
 * call.
 *
 * @throws LogicException in case the output has been disabled
 * @throws LogicException In case the process is not started
 */',
                'startLine' => 742,
                'endLine' => 754,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'clearErrorOutput' => [
                'name' => 'clearErrorOutput',
                'parameters' => [
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
 * Clears the process output.
 *
 * @return $this
 */',
                'startLine' => 761,
                'endLine' => 768,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getExitCode' => [
                'name' => 'getExitCode',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the exit code returned by the process.
 *
 * @return int|null The exit status code, null if the Process is not terminated
 */',
                'startLine' => 775,
                'endLine' => 780,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getExitCodeText' => [
                'name' => 'getExitCodeText',
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
 * Returns a string representation for the exit code returned by the process.
 *
 * This method relies on the Unix exit code status standardization
 * and might not be relevant for other operating systems.
 *
 * @return string|null A string representation for the exit status code, null if the Process is not terminated
 *
 * @see http://tldp.org/LDP/abs/html/exitcodes.html
 * @see http://en.wikipedia.org/wiki/Unix_signal
 */',
                'startLine' => 793,
                'endLine' => 800,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'isSuccessful' => [
                'name' => 'isSuccessful',
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
 * Checks if the process ended successfully.
 */',
                'startLine' => 805,
                'endLine' => 808,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'hasBeenSignaled' => [
                'name' => 'hasBeenSignaled',
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
 * Returns true if the child process has been terminated by an uncaught signal.
 *
 * It always returns false on Windows.
 *
 * @throws LogicException In case the process is not terminated
 */',
                'startLine' => 817,
                'endLine' => 822,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getTermSignal' => [
                'name' => 'getTermSignal',
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
                'docComment' => '/**
 * Returns the number of the signal that caused the child process to terminate its execution.
 *
 * It is only meaningful if hasBeenSignaled() returns true.
 *
 * @throws RuntimeException In case --enable-sigchild is activated
 * @throws LogicException   In case the process is not terminated
 */',
                'startLine' => 832,
                'endLine' => 841,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'hasBeenStopped' => [
                'name' => 'hasBeenStopped',
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
 * Returns true if the child process has been stopped by a signal.
 *
 * It always returns false on Windows.
 *
 * @throws LogicException In case the process is not terminated
 */',
                'startLine' => 850,
                'endLine' => 855,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getStopSignal' => [
                'name' => 'getStopSignal',
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
                'docComment' => '/**
 * Returns the number of the signal that caused the child process to stop its execution.
 *
 * It is only meaningful if hasBeenStopped() returns true.
 *
 * @throws LogicException In case the process is not terminated
 */',
                'startLine' => 864,
                'endLine' => 869,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'isRunning' => [
                'name' => 'isRunning',
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
 * Checks if the process is currently running.
 */',
                'startLine' => 874,
                'endLine' => 883,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'isStarted' => [
                'name' => 'isStarted',
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
 * Checks if the process has been started with no regard to the current state.
 */',
                'startLine' => 888,
                'endLine' => 891,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'isTerminated' => [
                'name' => 'isTerminated',
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
 * Checks if the process is terminated.
 */',
                'startLine' => 896,
                'endLine' => 901,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getStatus' => [
                'name' => 'getStatus',
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
 * Gets the process status.
 *
 * The status is one of: ready, started, terminated.
 */',
                'startLine' => 908,
                'endLine' => 913,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'stop' => [
                'name' => 'stop',
                'parameters' => [
                    'timeout' => [
                        'name' => 'timeout',
                        'default' => [
                            'code' => '10',
                            'attributes' => [
                                'startLine' => 923,
                                'endLine' => 923,
                                'startTokenPos' => 4327,
                                'startFilePos' => 32398,
                                'endTokenPos' => 4327,
                                'endFilePos' => 32399,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'float',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 923,
                        'endLine' => 923,
                        'startColumn' => 26,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'signal' => [
                        'name' => 'signal',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 923,
                                'endLine' => 923,
                                'startTokenPos' => 4337,
                                'startFilePos' => 32417,
                                'endTokenPos' => 4337,
                                'endFilePos' => 32420,
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
                        'startLine' => 923,
                        'endLine' => 923,
                        'startColumn' => 47,
                        'endColumn' => 65,
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
 * Stops the process.
 *
 * @param int|float $timeout The timeout in seconds
 * @param int|null  $signal  A POSIX signal to send in case the process has not stop at timeout, default is SIGKILL (9)
 *
 * @return int|null The exit-code of the process or null if it\'s not running
 */',
                'startLine' => 923,
                'endLine' => 950,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'addOutput' => [
                'name' => 'addOutput',
                'parameters' => [
                    'line' => [
                        'name' => 'line',
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
                        'startLine' => 957,
                        'endLine' => 957,
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
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Adds a line to the STDOUT stream.
 *
 * @internal
 */',
                'startLine' => 957,
                'endLine' => 964,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'addErrorOutput' => [
                'name' => 'addErrorOutput',
                'parameters' => [
                    'line' => [
                        'name' => 'line',
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
                        'startLine' => 971,
                        'endLine' => 971,
                        'startColumn' => 36,
                        'endColumn' => 47,
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
 * Adds a line to the STDERR stream.
 *
 * @internal
 */',
                'startLine' => 971,
                'endLine' => 978,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getLastOutputTime' => [
                'name' => 'getLastOutputTime',
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
                                    'name' => 'float',
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
 * Gets the last output time in seconds.
 */',
                'startLine' => 983,
                'endLine' => 986,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getCommandLine' => [
                'name' => 'getCommandLine',
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
 * Gets the command line to be executed.
 */',
                'startLine' => 991,
                'endLine' => 994,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getTimeout' => [
                'name' => 'getTimeout',
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
                                    'name' => 'float',
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
 * Gets the process timeout in seconds (max. runtime).
 */',
                'startLine' => 999,
                'endLine' => 1002,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getIdleTimeout' => [
                'name' => 'getIdleTimeout',
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
                                    'name' => 'float',
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
 * Gets the process idle timeout in seconds (max. time since last output).
 */',
                'startLine' => 1007,
                'endLine' => 1010,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'setTimeout' => [
                'name' => 'setTimeout',
                'parameters' => [
                    'timeout' => [
                        'name' => 'timeout',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
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
                        'startLine' => 1021,
                        'endLine' => 1021,
                        'startColumn' => 32,
                        'endColumn' => 46,
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
 * Sets the process timeout (max. runtime) in seconds.
 *
 * To disable the timeout, set this value to null.
 *
 * @return $this
 *
 * @throws InvalidArgumentException if the timeout is negative
 */',
                'startLine' => 1021,
                'endLine' => 1026,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'setIdleTimeout' => [
                'name' => 'setIdleTimeout',
                'parameters' => [
                    'timeout' => [
                        'name' => 'timeout',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
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
                        'startLine' => 1038,
                        'endLine' => 1038,
                        'startColumn' => 36,
                        'endColumn' => 50,
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
 * Sets the process idle timeout (max. time since last output) in seconds.
 *
 * To disable the timeout, set this value to null.
 *
 * @return $this
 *
 * @throws LogicException           if the output is disabled
 * @throws InvalidArgumentException if the timeout is negative
 */',
                'startLine' => 1038,
                'endLine' => 1047,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'setTty' => [
                'name' => 'setTty',
                'parameters' => [
                    'tty' => [
                        'name' => 'tty',
                        'default' => null,
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
                        'startLine' => 1056,
                        'endLine' => 1056,
                        'startColumn' => 28,
                        'endColumn' => 36,
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
 * Enables or disables the TTY mode.
 *
 * @return $this
 *
 * @throws RuntimeException In case the TTY mode is not supported
 */',
                'startLine' => 1056,
                'endLine' => 1069,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'isTty' => [
                'name' => 'isTty',
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
 * Checks if the TTY mode is enabled.
 */',
                'startLine' => 1074,
                'endLine' => 1077,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'setPty' => [
                'name' => 'setPty',
                'parameters' => [
                    'bool' => [
                        'name' => 'bool',
                        'default' => null,
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
                        'startLine' => 1084,
                        'endLine' => 1084,
                        'startColumn' => 28,
                        'endColumn' => 37,
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
 * Sets PTY mode.
 *
 * @return $this
 */',
                'startLine' => 1084,
                'endLine' => 1089,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'isPty' => [
                'name' => 'isPty',
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
 * Returns PTY state.
 */',
                'startLine' => 1094,
                'endLine' => 1097,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getWorkingDirectory' => [
                'name' => 'getWorkingDirectory',
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
 * Gets the working directory.
 */',
                'startLine' => 1102,
                'endLine' => 1111,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'setWorkingDirectory' => [
                'name' => 'setWorkingDirectory',
                'parameters' => [
                    'cwd' => [
                        'name' => 'cwd',
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
                        'startLine' => 1118,
                        'endLine' => 1118,
                        'startColumn' => 41,
                        'endColumn' => 51,
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
 * Sets the current working directory.
 *
 * @return $this
 */',
                'startLine' => 1118,
                'endLine' => 1123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getEnv' => [
                'name' => 'getEnv',
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
 * Gets the environment variables.
 */',
                'startLine' => 1128,
                'endLine' => 1131,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'setEnv' => [
                'name' => 'setEnv',
                'parameters' => [
                    'env' => [
                        'name' => 'env',
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
                        'startLine' => 1140,
                        'endLine' => 1140,
                        'startColumn' => 28,
                        'endColumn' => 37,
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
 * Sets the environment variables.
 *
 * @param array<string|\\Stringable> $env The new environment variables
 *
 * @return $this
 */',
                'startLine' => 1140,
                'endLine' => 1145,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getInput' => [
                'name' => 'getInput',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the Process input.
 *
 * @return resource|string|\\Iterator|null
 */',
                'startLine' => 1152,
                'endLine' => 1155,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'setInput' => [
                'name' => 'setInput',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
                        'default' => null,
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
                        'startLine' => 1168,
                        'endLine' => 1168,
                        'startColumn' => 30,
                        'endColumn' => 41,
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
 * Sets the input.
 *
 * This content will be passed to the underlying process standard input.
 *
 * @param string|resource|\\Traversable|self|null $input The content
 *
 * @return $this
 *
 * @throws LogicException In case the process is running
 */',
                'startLine' => 1168,
                'endLine' => 1177,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'checkTimeout' => [
                'name' => 'checkTimeout',
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
 * Performs a check between the timeout definition and the time the process started.
 *
 * In case you run a background process (with the start method), you should
 * trigger this method regularly to ensure the process timeout
 *
 * @throws ProcessTimedOutException In case the timeout was reached
 */',
                'startLine' => 1187,
                'endLine' => 1204,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getStartTime' => [
                'name' => 'getStartTime',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'float',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * @throws LogicException in case process is not started
 */',
                'startLine' => 1209,
                'endLine' => 1216,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'setOptions' => [
                'name' => 'setOptions',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
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
                        'startLine' => 1226,
                        'endLine' => 1226,
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
                'docComment' => '/**
 * Defines options to pass to the underlying proc_open().
 *
 * @see https://php.net/proc_open for the options supported by PHP.
 *
 * Enabling the "create_new_console" option allows a subprocess to continue
 * to run after the main process exited, on both Windows and *nix
 */',
                'startLine' => 1226,
                'endLine' => 1242,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'setIgnoredSignals' => [
                'name' => 'setIgnoredSignals',
                'parameters' => [
                    'signals' => [
                        'name' => 'signals',
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
                        'startLine' => 1249,
                        'endLine' => 1249,
                        'startColumn' => 39,
                        'endColumn' => 52,
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
 * Defines a list of posix signals that will not be propagated to the process.
 *
 * @param list<\\SIG*> $signals
 */',
                'startLine' => 1249,
                'endLine' => 1256,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'isTtySupported' => [
                'name' => 'isTtySupported',
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
 * Returns whether TTY is supported on the current operating system.
 */',
                'startLine' => 1261,
                'endLine' => 1266,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'isPtySupported' => [
                'name' => 'isPtySupported',
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
 * Returns whether PTY is supported on the current operating system.
 */',
                'startLine' => 1271,
                'endLine' => 1284,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getDescriptors' => [
                'name' => 'getDescriptors',
                'parameters' => [
                    'hasCallback' => [
                        'name' => 'hasCallback',
                        'default' => null,
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
                        'startLine' => 1289,
                        'endLine' => 1289,
                        'startColumn' => 37,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
 * Creates the descriptors needed by the proc_open.
 */',
                'startLine' => 1289,
                'endLine' => 1301,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'buildCallback' => [
                'name' => 'buildCallback',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1313,
                                'endLine' => 1313,
                                'startTokenPos' => 6010,
                                'startFilePos' => 43119,
                                'endTokenPos' => 6010,
                                'endFilePos' => 43122,
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
                        'startLine' => 1313,
                        'endLine' => 1313,
                        'startColumn' => 38,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Closure',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Builds up the callback used by wait().
 *
 * The callbacks adds all occurred output to the specific buffer and calls
 * the user callback (if present) with the received output.
 *
 * @param callable(\'out\'|\'err\', string)|null $callback
 *
 * @return \\Closure(\'out\'|\'err\', string):bool
 */',
                'startLine' => 1313,
                'endLine' => 1327,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'updateStatus' => [
                'name' => 'updateStatus',
                'parameters' => [
                    'blocking' => [
                        'name' => 'blocking',
                        'default' => null,
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
                        'startLine' => 1334,
                        'endLine' => 1334,
                        'startColumn' => 37,
                        'endColumn' => 50,
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
 * Updates the status of the process, reads pipes.
 *
 * @param bool $blocking Whether to use a blocking read call
 */',
                'startLine' => 1334,
                'endLine' => 1354,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'isSigchildEnabled' => [
                'name' => 'isSigchildEnabled',
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
 * Returns whether PHP has been compiled with the \'--enable-sigchild\' option or not.
 */',
                'startLine' => 1359,
                'endLine' => 1373,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'readPipesForOutput' => [
                'name' => 'readPipesForOutput',
                'parameters' => [
                    'caller' => [
                        'name' => 'caller',
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
                        'startLine' => 1383,
                        'endLine' => 1383,
                        'startColumn' => 41,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'blocking' => [
                        'name' => 'blocking',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1383,
                                'endLine' => 1383,
                                'startTokenPos' => 6427,
                                'startFilePos' => 45285,
                                'endTokenPos' => 6427,
                                'endFilePos' => 45289,
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
                        'startLine' => 1383,
                        'endLine' => 1383,
                        'startColumn' => 57,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
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
 * Reads pipes for the freshest output.
 *
 * @param string $caller   The name of the method that needs fresh outputs
 * @param bool   $blocking Whether to use blocking calls or not
 *
 * @throws LogicException in case output has been disabled or process is not started
 */',
                'startLine' => 1383,
                'endLine' => 1392,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'validateTimeout' => [
                'name' => 'validateTimeout',
                'parameters' => [
                    'timeout' => [
                        'name' => 'timeout',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
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
                        'startLine' => 1399,
                        'endLine' => 1399,
                        'startColumn' => 38,
                        'endColumn' => 52,
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
                                    'name' => 'float',
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
 * Validates and returns the filtered timeout.
 *
 * @throws InvalidArgumentException if the given timeout is a negative number
 */',
                'startLine' => 1399,
                'endLine' => 1410,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'readPipes' => [
                'name' => 'readPipes',
                'parameters' => [
                    'blocking' => [
                        'name' => 'blocking',
                        'default' => null,
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
                        'startLine' => 1418,
                        'endLine' => 1418,
                        'startColumn' => 32,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'close' => [
                        'name' => 'close',
                        'default' => null,
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
                        'startLine' => 1418,
                        'endLine' => 1418,
                        'startColumn' => 48,
                        'endColumn' => 58,
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
 * Reads pipes, executes callback.
 *
 * @param bool $blocking Whether to use blocking calls or not
 * @param bool $close    Whether to close file handles or not
 */',
                'startLine' => 1418,
                'endLine' => 1430,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'close' => [
                'name' => 'close',
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
                'docComment' => '/**
 * Closes process resource, closes file handles, sets the exitcode.
 *
 * @return int The exitcode
 */',
                'startLine' => 1437,
                'endLine' => 1463,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'resetProcessData' => [
                'name' => 'resetProcessData',
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
 * Resets data related to the latest run of the process.
 */',
                'startLine' => 1468,
                'endLine' => 1482,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'doSignal' => [
                'name' => 'doSignal',
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
                        'startLine' => 1494,
                        'endLine' => 1494,
                        'startColumn' => 31,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'throwException' => [
                        'name' => 'throwException',
                        'default' => null,
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
                        'startLine' => 1494,
                        'endLine' => 1494,
                        'startColumn' => 44,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
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
 * Sends a POSIX signal to the process.
 *
 * @param int  $signal         A valid POSIX signal (see https://php.net/pcntl.constants)
 * @param bool $throwException Whether to throw exception in case signal failed
 *
 * @throws LogicException   In case the process is not running
 * @throws RuntimeException In case --enable-sigchild is activated and the process can\'t be killed
 * @throws RuntimeException In case of failure
 */',
                'startLine' => 1494,
                'endLine' => 1541,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'buildShellCommandline' => [
                'name' => 'buildShellCommandline',
                'parameters' => [
                    'commandline' => [
                        'name' => 'commandline',
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
                                            'name' => 'array',
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
                        'startLine' => 1543,
                        'endLine' => 1543,
                        'startColumn' => 44,
                        'endColumn' => 68,
                        'parameterIndex' => 0,
                        'isOptional' => false,
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
                'docComment' => null,
                'startLine' => 1543,
                'endLine' => 1556,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'prepareWindowsCommandLine' => [
                'name' => 'prepareWindowsCommandLine',
                'parameters' => [
                    'cmd' => [
                        'name' => 'cmd',
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
                                            'name' => 'array',
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
                        'startLine' => 1558,
                        'endLine' => 1558,
                        'startColumn' => 48,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'env' => [
                        'name' => 'env',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'array',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => true,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1558,
                        'endLine' => 1558,
                        'startColumn' => 67,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => false,
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
                'docComment' => null,
                'startLine' => 1558,
                'endLine' => 1610,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'requireProcessIsStarted' => [
                'name' => 'requireProcessIsStarted',
                'parameters' => [
                    'functionName' => [
                        'name' => 'functionName',
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
                        'startLine' => 1617,
                        'endLine' => 1617,
                        'startColumn' => 46,
                        'endColumn' => 65,
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
 * Ensures the process is running or terminated, throws a LogicException if the process has a not started.
 *
 * @throws LogicException if the process has not run
 */',
                'startLine' => 1617,
                'endLine' => 1622,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'requireProcessIsTerminated' => [
                'name' => 'requireProcessIsTerminated',
                'parameters' => [
                    'functionName' => [
                        'name' => 'functionName',
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
                        'startLine' => 1629,
                        'endLine' => 1629,
                        'startColumn' => 49,
                        'endColumn' => 68,
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
 * Ensures the process is terminated, throws a LogicException if the process has a status different than "terminated".
 *
 * @throws LogicException if the process is not yet terminated
 */',
                'startLine' => 1629,
                'endLine' => 1634,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'escapeArgument' => [
                'name' => 'escapeArgument',
                'parameters' => [
                    'argument' => [
                        'name' => 'argument',
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
                        'startLine' => 1639,
                        'endLine' => 1639,
                        'startColumn' => 37,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
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
 * Escapes a string to be used as a shell argument.
 */',
                'startLine' => 1639,
                'endLine' => 1656,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'replacePlaceholders' => [
                'name' => 'replacePlaceholders',
                'parameters' => [
                    'commandline' => [
                        'name' => 'commandline',
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
                        'startLine' => 1658,
                        'endLine' => 1658,
                        'startColumn' => 42,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'env' => [
                        'name' => 'env',
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
                        'startLine' => 1658,
                        'endLine' => 1658,
                        'startColumn' => 63,
                        'endColumn' => 72,
                        'parameterIndex' => 1,
                        'isOptional' => false,
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
                'docComment' => null,
                'startLine' => 1658,
                'endLine' => 1667,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
                'aliasName' => null,
            ],
            'getDefaultEnv' => [
                'name' => 'getDefaultEnv',
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
                'startLine' => 1669,
                'endLine' => 1675,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\Process',
                'declaringClassName' => 'Symfony\\Component\\Process\\Process',
                'implementingClassName' => 'Symfony\\Component\\Process\\Process',
                'currentClassName' => 'Symfony\\Component\\Process\\Process',
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
