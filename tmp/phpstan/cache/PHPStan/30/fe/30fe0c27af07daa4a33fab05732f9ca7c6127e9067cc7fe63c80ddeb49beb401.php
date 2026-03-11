<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/dusk/src/Console/PurgeCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Dusk\Console\PurgeCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-3a78b4dddf76af5e1e677178ff52a8dfcd2da8094d55373689dd64abbb0a87a4-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/dusk/src/Console/PurgeCommand.php',
            ],
        ],
        'namespace' => 'Laravel\\Dusk\\Console',
        'name' => 'Laravel\\Dusk\\Console\\PurgeCommand',
        'shortName' => 'PurgeCommand',
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
                        'code' => '\'dusk:purge\'',
                        'attributes' => [
                            'startLine' => 10,
                            'endLine' => 10,
                            'startTokenPos' => 33,
                            'startFilePos' => 233,
                            'endTokenPos' => 33,
                            'endFilePos' => 244,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 10,
        'endLine' => 116,
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
                'declaringClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'implementingClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'dusk:purge\'',
                    'attributes' => [
                        'startLine' => 18,
                        'endLine' => 18,
                        'startTokenPos' => 55,
                        'startFilePos' => 408,
                        'endTokenPos' => 55,
                        'endFilePos' => 419,
                    ],
                ],
                'docComment' => '/**
 * The name and signature of the console command.
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
                'declaringClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'implementingClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Purge dusk test debugging files\'',
                    'attributes' => [
                        'startLine' => 25,
                        'endLine' => 25,
                        'startTokenPos' => 66,
                        'startFilePos' => 534,
                        'endTokenPos' => 66,
                        'endFilePos' => 566,
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
        ],
        'immediateMethods' => [
            '__construct' => [
                'name' => '__construct',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new command instance.
 *
 * @return void
 */',
                'startLine' => 32,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Laravel\\Dusk\\Console',
                'declaringClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'implementingClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'currentClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
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
 * @return mixed
 */',
                'startLine' => 44,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Laravel\\Dusk\\Console',
                'declaringClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'implementingClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'currentClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'aliasName' => null,
            ],
            'purgeScreenshots' => [
                'name' => 'purgeScreenshots',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Purge the failure screenshots.
 *
 * @return void
 */',
                'startLine' => 56,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Dusk\\Console',
                'declaringClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'implementingClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'currentClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'aliasName' => null,
            ],
            'purgeConsoleLogs' => [
                'name' => 'purgeConsoleLogs',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Purge the console logs.
 *
 * @return void
 */',
                'startLine' => 68,
                'endLine' => 73,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Dusk\\Console',
                'declaringClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'implementingClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'currentClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'aliasName' => null,
            ],
            'purgeSourceLogs' => [
                'name' => 'purgeSourceLogs',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Purge the source logs.
 *
 * @return void
 */',
                'startLine' => 80,
                'endLine' => 85,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Dusk\\Console',
                'declaringClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'implementingClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'currentClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'aliasName' => null,
            ],
            'purgeDebuggingFiles' => [
                'name' => 'purgeDebuggingFiles',
                'parameters' => [
                    'relativePath' => [
                        'name' => 'relativePath',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 44,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'patterns' => [
                        'name' => 'patterns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 59,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Purge debugging files based on path and patterns.
 *
 * @param  string  $relativePath
 * @param  string  $patterns
 * @return void
 */',
                'startLine' => 94,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Dusk\\Console',
                'declaringClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'implementingClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
                'currentClassName' => 'Laravel\\Dusk\\Console\\PurgeCommand',
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
