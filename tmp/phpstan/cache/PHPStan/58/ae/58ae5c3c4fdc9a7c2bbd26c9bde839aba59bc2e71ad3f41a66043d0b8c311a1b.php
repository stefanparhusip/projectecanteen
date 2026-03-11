<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/DownCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Console\DownCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-642c8be360560edc82c400230196a6c8954cfc9bce235707311d4a12050377eb-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/DownCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Console',
        'name' => 'Illuminate\\Foundation\\Console\\DownCommand',
        'shortName' => 'DownCommand',
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
                        'code' => '\'down\'',
                        'attributes' => [
                            'startLine' => 17,
                            'endLine' => 17,
                            'startTokenPos' => 72,
                            'startFilePos' => 554,
                            'endTokenPos' => 72,
                            'endFilePos' => 559,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 17,
        'endLine' => 182,
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
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'down {--redirect= : The path that users should be redirected to}
                                 {--render= : The view that should be prerendered for display during maintenance mode}
                                 {--retry= : The number of seconds or the datetime after which the request may be retried}
                                 {--refresh= : The number of seconds after which the browser may refresh}
                                 {--secret= : The secret phrase that may be used to bypass maintenance mode}
                                 {--with-secret : Generate a random secret phrase that may be used to bypass maintenance mode}
                                 {--status=503 : The status code that should be used when returning the maintenance mode response}\'',
                    'attributes' => [
                        'startLine' => 25,
                        'endLine' => 31,
                        'startTokenPos' => 94,
                        'startFilePos' => 706,
                        'endTokenPos' => 94,
                        'endFilePos' => 1486,
                    ],
                ],
                'docComment' => '/**
 * The console command signature.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 132,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Put the application into maintenance / demo mode\'',
                    'attributes' => [
                        'startLine' => 38,
                        'endLine' => 38,
                        'startTokenPos' => 105,
                        'startFilePos' => 1601,
                        'endTokenPos' => 105,
                        'endFilePos' => 1650,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 38,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 80,
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
                'startLine' => 45,
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'aliasName' => null,
            ],
            'getDownFilePayload' => [
                'name' => 'getDownFilePayload',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the payload to be placed in the "down" file.
 *
 * @return array
 */',
                'startLine' => 84,
                'endLine' => 95,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'aliasName' => null,
            ],
            'excludedPaths' => [
                'name' => 'excludedPaths',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the paths that should be excluded from maintenance mode.
 *
 * @return array
 */',
                'startLine' => 102,
                'endLine' => 113,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'aliasName' => null,
            ],
            'redirectPath' => [
                'name' => 'redirectPath',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the path that users should be redirected to.
 *
 * @return string
 */',
                'startLine' => 120,
                'endLine' => 127,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'aliasName' => null,
            ],
            'prerenderView' => [
                'name' => 'prerenderView',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prerender the specified view so that it can be rendered even before loading Composer.
 *
 * @return string
 */',
                'startLine' => 134,
                'endLine' => 141,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'aliasName' => null,
            ],
            'getRetryTime' => [
                'name' => 'getRetryTime',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the number of seconds or date / time the client should wait before retrying their request.
 *
 * @return int|string|null
 */',
                'startLine' => 148,
                'endLine' => 167,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'aliasName' => null,
            ],
            'getSecret' => [
                'name' => 'getSecret',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the secret phrase that may be used to bypass maintenance mode.
 *
 * @return string|null
 */',
                'startLine' => 174,
                'endLine' => 181,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\DownCommand',
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
