<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/Migrations/ResetCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Console\Migrations\ResetCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-665447ebcdd2bb0d657885f5360367726343ca67079b2b7fdafed16854da5d34-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/Migrations/ResetCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Console\\Migrations',
        'name' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
        'shortName' => 'ResetCommand',
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
                        'code' => '\'migrate:reset\'',
                        'attributes' => [
                            'startLine' => 12,
                            'endLine' => 12,
                            'startTokenPos' => 43,
                            'startFilePos' => 332,
                            'endTokenPos' => 43,
                            'endFilePos' => 346,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 12,
        'endLine' => 95,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Console\\Migrations\\BaseCommand',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Console\\ConfirmableTrait',
            1 => 'Illuminate\\Console\\Prohibitable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'name' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'migrate:reset\'',
                    'attributes' => [
                        'startLine' => 22,
                        'endLine' => 22,
                        'startTokenPos' => 73,
                        'startFilePos' => 529,
                        'endTokenPos' => 73,
                        'endFilePos' => 543,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 22,
                'endLine' => 22,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Rollback all database migrations\'',
                    'attributes' => [
                        'startLine' => 29,
                        'endLine' => 29,
                        'startTokenPos' => 84,
                        'startFilePos' => 658,
                        'endTokenPos' => 84,
                        'endFilePos' => 691,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 64,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'migrator' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'name' => 'migrator',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The migrator instance.
 *
 * @var \\Illuminate\\Database\\Migrations\\Migrator
 */',
                'attributes' => [
                ],
                'startLine' => 36,
                'endLine' => 36,
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
                    'migrator' => [
                        'name' => 'migrator',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Migrations\\Migrator',
                                'isIdentifier' => false,
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
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new migration rollback command instance.
 *
 * @param  \\Illuminate\\Database\\Migrations\\Migrator  $migrator
 */',
                'startLine' => 43,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'aliasName' => null,
            ],
            'handle' => [
                'name' => 'handle',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the console command.
 *
 * @return int
 */',
                'startLine' => 55,
                'endLine' => 74,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'aliasName' => null,
            ],
            'getOptions' => [
                'name' => 'getOptions',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the console command options.
 *
 * @return array
 */',
                'startLine' => 81,
                'endLine' => 94,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\ResetCommand',
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
