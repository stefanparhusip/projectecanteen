<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/pail/src/Console/Commands/PailCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Pail\Console\Commands\PailCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-dd0d6aa43da93e610724eab58a7d3d54f0f1bcd70b699eb9c5049474cd2dda90-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Laravel\\Pail\\Console\\Commands\\PailCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/pail/src/Console/Commands/PailCommand.php',
            ],
        ],
        'namespace' => 'Laravel\\Pail\\Console\\Commands',
        'name' => 'Laravel\\Pail\\Console\\Commands\\PailCommand',
        'shortName' => 'PailCommand',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
            0 => [
                'name' => 'Symfony\\Component\\Console\\Attribute\\AsCommand',
                'isRepeated' => false,
                'arguments' => [
                    'name' => [
                        'code' => '\'pail\'',
                        'attributes' => [
                            'startLine' => 17,
                            'endLine' => 17,
                            'startTokenPos' => 67,
                            'startFilePos' => 473,
                            'endTokenPos' => 67,
                            'endFilePos' => 478,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 17,
        'endLine' => 107,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'signature' => [
                'declaringClassName' => 'Laravel\\Pail\\Console\\Commands\\PailCommand',
                'implementingClassName' => 'Laravel\\Pail\\Console\\Commands\\PailCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'pail
        {--filter= : Filter the logs by the given value}
        {--message= : Filter the logs by the given message}
        {--level= : Filter the logs by the given level}
        {--auth= : Filter the logs by the given authenticated ID}
        {--user= : Filter the logs by the given authenticated ID (alias for --auth)}
        {--timeout=3600 : The maximum execution time in seconds}\'',
                    'attributes' => [
                        'startLine' => 23,
                        'endLine' => 29,
                        'startTokenPos' => 89,
                        'startFilePos' => 582,
                        'endTokenPos' => 89,
                        'endFilePos' => 976,
                    ],
                ],
                'docComment' => '/**
 * {@inheritDoc}
 */',
                'attributes' => [
                ],
                'startLine' => 23,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 66,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Laravel\\Pail\\Console\\Commands\\PailCommand',
                'implementingClassName' => 'Laravel\\Pail\\Console\\Commands\\PailCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Tails the application logs\'',
                    'attributes' => [
                        'startLine' => 34,
                        'endLine' => 34,
                        'startTokenPos' => 100,
                        'startFilePos' => 1046,
                        'endTokenPos' => 100,
                        'endFilePos' => 1073,
                    ],
                ],
                'docComment' => '/**
 * {@inheritDoc}
 */',
                'attributes' => [
                ],
                'startLine' => 34,
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 58,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'file' => [
                'declaringClassName' => 'Laravel\\Pail\\Console\\Commands\\PailCommand',
                'implementingClassName' => 'Laravel\\Pail\\Console\\Commands\\PailCommand',
                'name' => 'file',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Laravel\\Pail\\File',
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
                        'startLine' => 39,
                        'endLine' => 39,
                        'startTokenPos' => 114,
                        'startFilePos' => 1155,
                        'endTokenPos' => 114,
                        'endFilePos' => 1158,
                    ],
                ],
                'docComment' => '/**
 * The file instance, if any.
 */',
                'attributes' => [
                ],
                'startLine' => 39,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'handle' => [
                'name' => 'handle',
                'parameters' => [
                    'processFactory' => [
                        'name' => 'processFactory',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Laravel\\Pail\\ProcessFactory',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 44,
                        'endLine' => 44,
                        'startColumn' => 28,
                        'endColumn' => 57,
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
 * Handles the command execution.
 */',
                'startLine' => 44,
                'endLine' => 96,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Laravel\\Pail\\Console\\Commands',
                'declaringClassName' => 'Laravel\\Pail\\Console\\Commands\\PailCommand',
                'implementingClassName' => 'Laravel\\Pail\\Console\\Commands\\PailCommand',
                'currentClassName' => 'Laravel\\Pail\\Console\\Commands\\PailCommand',
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
                'docComment' => '/**
 * Handles the object destruction.
 */',
                'startLine' => 101,
                'endLine' => 106,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Laravel\\Pail\\Console\\Commands',
                'declaringClassName' => 'Laravel\\Pail\\Console\\Commands\\PailCommand',
                'implementingClassName' => 'Laravel\\Pail\\Console\\Commands\\PailCommand',
                'currentClassName' => 'Laravel\\Pail\\Console\\Commands\\PailCommand',
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
