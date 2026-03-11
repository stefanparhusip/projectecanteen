<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/Migrations/InstallCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Console\Migrations\InstallCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6018a1e1605f8a2cda537bbf172182a45d92f540c7a7f8f36730dce4d3599fbf-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Database/Console/Migrations/InstallCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Console\\Migrations',
        'name' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
        'shortName' => 'InstallCommand',
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
                        'code' => '\'migrate:install\'',
                        'attributes' => [
                            'startLine' => 10,
                            'endLine' => 10,
                            'startTokenPos' => 33,
                            'startFilePos' => 274,
                            'endTokenPos' => 33,
                            'endFilePos' => 290,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 10,
        'endLine' => 73,
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
            'name' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'migrate:install\'',
                    'attributes' => [
                        'startLine' => 18,
                        'endLine' => 18,
                        'startTokenPos' => 55,
                        'startFilePos' => 430,
                        'endTokenPos' => 55,
                        'endFilePos' => 446,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 18,
                'endLine' => 18,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Create the migration repository\'',
                    'attributes' => [
                        'startLine' => 25,
                        'endLine' => 25,
                        'startTokenPos' => 66,
                        'startFilePos' => 561,
                        'endTokenPos' => 66,
                        'endFilePos' => 593,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 63,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'repository' => [
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
                'name' => 'repository',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The repository instance.
 *
 * @var \\Illuminate\\Database\\Migrations\\MigrationRepositoryInterface
 */',
                'attributes' => [
                ],
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 26,
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
                    'repository' => [
                        'name' => 'repository',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Migrations\\MigrationRepositoryInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 33,
                        'endColumn' => 72,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new migration install command instance.
 *
 * @param  \\Illuminate\\Database\\Migrations\\MigrationRepositoryInterface  $repository
 */',
                'startLine' => 39,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
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
 * @return void
 */',
                'startLine' => 51,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
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
                'startLine' => 67,
                'endLine' => 72,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Console\\Migrations',
                'declaringClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
                'implementingClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
                'currentClassName' => 'Illuminate\\Database\\Console\\Migrations\\InstallCommand',
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
