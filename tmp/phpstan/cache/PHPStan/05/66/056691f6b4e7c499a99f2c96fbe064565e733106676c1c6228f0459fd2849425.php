<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/dusk/src/Console/InstallCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Dusk\Console\InstallCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-dcf1b44aa1d21fe09a9acf8e2b41e3b3dd9f762c998dc05aa0e1117c39365759-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/dusk/src/Console/InstallCommand.php',
            ],
        ],
        'namespace' => 'Laravel\\Dusk\\Console',
        'name' => 'Laravel\\Dusk\\Console\\InstallCommand',
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
                        'code' => '\'dusk:install\'',
                        'attributes' => [
                            'startLine' => 8,
                            'endLine' => 8,
                            'startTokenPos' => 23,
                            'startFilePos' => 142,
                            'endTokenPos' => 23,
                            'endFilePos' => 155,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 8,
        'endLine' => 169,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Laravel\\Dusk\\Console\\Concerns\\InteractsWithTestingFrameworks',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'signature' => [
                'declaringClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'implementingClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'dusk:install
                {--proxy= : The proxy to download the binary through (example: "tcp://127.0.0.1:9000")}
                {--ssl-no-verify : Bypass SSL certificate verification when installing through a proxy}\'',
                    'attributes' => [
                        'startLine' => 18,
                        'endLine' => 20,
                        'startTokenPos' => 50,
                        'startFilePos' => 371,
                        'endTokenPos' => 50,
                        'endFilePos' => 592,
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
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 105,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'implementingClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Install Dusk into the application\'',
                    'attributes' => [
                        'startLine' => 27,
                        'endLine' => 27,
                        'startTokenPos' => 61,
                        'startFilePos' => 707,
                        'endTokenPos' => 61,
                        'endFilePos' => 741,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 27,
                'endLine' => 27,
                'startColumn' => 5,
                'endColumn' => 65,
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
 * @return mixed
 */',
                'startLine' => 34,
                'endLine' => 126,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Laravel\\Dusk\\Console',
                'declaringClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'implementingClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'currentClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'aliasName' => null,
            ],
            'createScreenshotsDirectory' => [
                'name' => 'createScreenshotsDirectory',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create the screenshots directory.
 *
 * @return void
 */',
                'startLine' => 133,
                'endLine' => 140,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Dusk\\Console',
                'declaringClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'implementingClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'currentClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'aliasName' => null,
            ],
            'createConsoleDirectory' => [
                'name' => 'createConsoleDirectory',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create the console directory.
 *
 * @return void
 */',
                'startLine' => 147,
                'endLine' => 154,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Dusk\\Console',
                'declaringClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'implementingClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'currentClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'aliasName' => null,
            ],
            'createSourceDirectory' => [
                'name' => 'createSourceDirectory',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create the source directory.
 *
 * @return void
 */',
                'startLine' => 161,
                'endLine' => 168,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Dusk\\Console',
                'declaringClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'implementingClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
                'currentClassName' => 'Laravel\\Dusk\\Console\\InstallCommand',
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
