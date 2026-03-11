<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/BroadcastingInstallCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Console\BroadcastingInstallCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-832df92e26dcb6fbbc0cce67e6f8385a4df32c6db5011e6016c8799d722e7af1-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/BroadcastingInstallCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Console',
        'name' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
        'shortName' => 'BroadcastingInstallCommand',
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
                        'code' => '\'install:broadcasting\'',
                        'attributes' => [
                            'startLine' => 19,
                            'endLine' => 19,
                            'startTokenPos' => 85,
                            'startFilePos' => 531,
                            'endTokenPos' => 85,
                            'endFilePos' => 552,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 19,
        'endLine' => 524,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Foundation\\Console\\InteractsWithComposerPackages',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'signature' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'install:broadcasting
                    {--composer=global : Absolute path to the Composer binary which should be used to install packages}
                    {--force : Overwrite any existing broadcasting routes file}
                    {--without-reverb : Do not prompt to install Laravel Reverb}
                    {--reverb : Install Laravel Reverb as the default broadcaster}
                    {--pusher : Install Pusher as the default broadcaster}
                    {--ably : Install Ably as the default broadcaster}
                    {--without-node : Do not prompt to install Node dependencies}\'',
                    'attributes' => [
                        'startLine' => 29,
                        'endLine' => 36,
                        'startTokenPos' => 112,
                        'startFilePos' => 770,
                        'endTokenPos' => 112,
                        'endFilePos' => 1383,
                    ],
                ],
                'docComment' => '/**
 * The name and signature of the console command.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 29,
                'endLine' => 36,
                'startColumn' => 5,
                'endColumn' => 83,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Create a broadcasting channel routes file\'',
                    'attributes' => [
                        'startLine' => 43,
                        'endLine' => 43,
                        'startTokenPos' => 123,
                        'startFilePos' => 1498,
                        'endTokenPos' => 123,
                        'endFilePos' => 1540,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 43,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 73,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'driver' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'name' => 'driver',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 50,
                        'endLine' => 50,
                        'startTokenPos' => 134,
                        'startFilePos' => 1654,
                        'endTokenPos' => 134,
                        'endFilePos' => 1657,
                    ],
                ],
                'docComment' => '/**
 * The broadcasting driver to use.
 *
 * @var string|null
 */',
                'attributes' => [
                ],
                'startLine' => 50,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'frameworkPackages' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'name' => 'frameworkPackages',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'react\' => \'@laravel/echo-react\', \'vue\' => \'@laravel/echo-vue\']',
                    'attributes' => [
                        'startLine' => 57,
                        'endLine' => 60,
                        'startTokenPos' => 145,
                        'startFilePos' => 1779,
                        'endTokenPos' => 161,
                        'endFilePos' => 1865,
                    ],
                ],
                'docComment' => '/**
 * The framework packages to install.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 57,
                'endLine' => 60,
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
                'startLine' => 67,
                'endLine' => 137,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'aliasName' => null,
            ],
            'uncommentChannelsRoutesFile' => [
                'name' => 'uncommentChannelsRoutesFile',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Uncomment the "channels" routes file in the application bootstrap file.
 *
 * @return void
 */',
                'startLine' => 144,
                'endLine' => 173,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'aliasName' => null,
            ],
            'enableBroadcastServiceProvider' => [
                'name' => 'enableBroadcastServiceProvider',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Uncomment the "BroadcastServiceProvider" in the application configuration.
 *
 * @return void
 */',
                'startLine' => 180,
                'endLine' => 200,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'aliasName' => null,
            ],
            'collectDriverConfig' => [
                'name' => 'collectDriverConfig',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Collect the driver configuration.
 *
 * @return void
 */',
                'startLine' => 207,
                'endLine' => 220,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'aliasName' => null,
            ],
            'installDriverPackages' => [
                'name' => 'installDriverPackages',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Install the driver packages.
 *
 * @return void
 */',
                'startLine' => 227,
                'endLine' => 240,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'aliasName' => null,
            ],
            'collectPusherConfig' => [
                'name' => 'collectPusherConfig',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Collect the Pusher configuration.
 *
 * @return void
 */',
                'startLine' => 247,
                'endLine' => 278,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'aliasName' => null,
            ],
            'collectAblyConfig' => [
                'name' => 'collectAblyConfig',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Collect the Ably configuration.
 *
 * @return void
 */',
                'startLine' => 285,
                'endLine' => 298,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'aliasName' => null,
            ],
            'injectFrameworkSpecificConfiguration' => [
                'name' => 'injectFrameworkSpecificConfiguration',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Inject Echo configuration into the application\'s main file.
 *
 * @return void
 */',
                'startLine' => 305,
                'endLine' => 365,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'aliasName' => null,
            ],
            'installReverb' => [
                'name' => 'installReverb',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Install Laravel Reverb into the application if desired.
 *
 * @return void
 */',
                'startLine' => 372,
                'endLine' => 393,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'aliasName' => null,
            ],
            'installNodeDependencies' => [
                'name' => 'installNodeDependencies',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Install and build Node dependencies.
 *
 * @return void
 */',
                'startLine' => 400,
                'endLine' => 448,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'aliasName' => null,
            ],
            'resolveDriver' => [
                'name' => 'resolveDriver',
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
 * Resolve the provider to use based on the user\'s choice.
 *
 * @return string
 */',
                'startLine' => 455,
                'endLine' => 474,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'aliasName' => null,
            ],
            'isUsingSupportedFramework' => [
                'name' => 'isUsingSupportedFramework',
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
 * Detect if the user is using a supported framework (React or Vue).
 *
 * @return bool
 */',
                'startLine' => 481,
                'endLine' => 484,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'aliasName' => null,
            ],
            'appUsesReact' => [
                'name' => 'appUsesReact',
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
 * Detect if the user is using React.
 *
 * @return bool
 */',
                'startLine' => 491,
                'endLine' => 494,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'aliasName' => null,
            ],
            'appUsesVue' => [
                'name' => 'appUsesVue',
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
 * Detect if the user is using Vue.
 *
 * @return bool
 */',
                'startLine' => 501,
                'endLine' => 504,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'aliasName' => null,
            ],
            'packageDependenciesInclude' => [
                'name' => 'packageDependenciesInclude',
                'parameters' => [
                    'package' => [
                        'name' => 'package',
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
                        'startColumn' => 51,
                        'endColumn' => 65,
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
 * Detect if the package is installed.
 *
 * @return bool
 */',
                'startLine' => 511,
                'endLine' => 523,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\BroadcastingInstallCommand',
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
