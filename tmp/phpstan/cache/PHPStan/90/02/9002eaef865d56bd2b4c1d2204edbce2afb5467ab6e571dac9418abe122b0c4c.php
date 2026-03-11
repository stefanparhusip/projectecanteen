<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/tinker/src/Console/TinkerCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Tinker\Console\TinkerCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-549df449c62574a109938be6be0061e767de5ecced6004a249702c7fe4b02826-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/tinker/src/Console/TinkerCommand.php',
            ],
        ],
        'namespace' => 'Laravel\\Tinker\\Console',
        'name' => 'Laravel\\Tinker\\Console\\TinkerCommand',
        'shortName' => 'TinkerCommand',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 14,
        'endLine' => 171,
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
            'commandWhitelist' => [
                'declaringClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'implementingClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'name' => 'commandWhitelist',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'clear-compiled\', \'down\', \'env\', \'inspire\', \'migrate\', \'migrate:install\', \'optimize\', \'up\']',
                    'attributes' => [
                        'startLine' => 21,
                        'endLine' => 23,
                        'startTokenPos' => 65,
                        'startFilePos' => 483,
                        'endTokenPos' => 91,
                        'endFilePos' => 589,
                    ],
                ],
                'docComment' => '/**
 * Artisan commands to include in the tinker shell.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 21,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 6,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'name' => [
                'declaringClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'implementingClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'tinker\'',
                    'attributes' => [
                        'startLine' => 30,
                        'endLine' => 30,
                        'startTokenPos' => 102,
                        'startFilePos' => 690,
                        'endTokenPos' => 102,
                        'endFilePos' => 697,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'implementingClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Interact with your application\'',
                    'attributes' => [
                        'startLine' => 37,
                        'endLine' => 37,
                        'startTokenPos' => 113,
                        'startFilePos' => 812,
                        'endTokenPos' => 113,
                        'endFilePos' => 843,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 37,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 62,
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
                'startLine' => 44,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Laravel\\Tinker\\Console',
                'declaringClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'implementingClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'currentClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'aliasName' => null,
            ],
            'getCommands' => [
                'name' => 'getCommands',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get artisan commands to pass through to PsySH.
 *
 * @return array
 */',
                'startLine' => 97,
                'endLine' => 116,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Tinker\\Console',
                'declaringClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'implementingClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'currentClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'aliasName' => null,
            ],
            'getCasters' => [
                'name' => 'getCasters',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an array of Laravel tailored casters.
 *
 * @return array
 */',
                'startLine' => 123,
                'endLine' => 146,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Tinker\\Console',
                'declaringClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'implementingClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'currentClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'aliasName' => null,
            ],
            'getArguments' => [
                'name' => 'getArguments',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the console command arguments.
 *
 * @return array
 */',
                'startLine' => 153,
                'endLine' => 158,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Tinker\\Console',
                'declaringClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'implementingClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'currentClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
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
                'startLine' => 165,
                'endLine' => 170,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Tinker\\Console',
                'declaringClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'implementingClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
                'currentClassName' => 'Laravel\\Tinker\\Console\\TinkerCommand',
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
