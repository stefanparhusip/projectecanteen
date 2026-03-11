<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/RouteCacheCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Console\RouteCacheCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-1cef272e6d2a043cb6c51150d084fb34f5c800847d886e796b71f62c05c06b26-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/RouteCacheCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Console',
        'name' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
        'shortName' => 'RouteCacheCommand',
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
                        'code' => '\'route:cache\'',
                        'attributes' => [
                            'startLine' => 11,
                            'endLine' => 11,
                            'startTokenPos' => 42,
                            'startFilePos' => 295,
                            'endTokenPos' => 42,
                            'endFilePos' => 307,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 11,
        'endLine' => 110,
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
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'name' => 'name',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'route:cache\'',
                    'attributes' => [
                        'startLine' => 19,
                        'endLine' => 19,
                        'startTokenPos' => 64,
                        'startFilePos' => 450,
                        'endTokenPos' => 64,
                        'endFilePos' => 462,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 36,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Create a route cache file for faster route registration\'',
                    'attributes' => [
                        'startLine' => 26,
                        'endLine' => 26,
                        'startTokenPos' => 75,
                        'startFilePos' => 577,
                        'endTokenPos' => 75,
                        'endFilePos' => 633,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 87,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'files' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'name' => 'files',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The filesystem instance.
 *
 * @var \\Illuminate\\Filesystem\\Filesystem
 */',
                'attributes' => [
                ],
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 21,
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
                    'files' => [
                        'name' => 'files',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Filesystem\\Filesystem',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 40,
                        'endLine' => 40,
                        'startColumn' => 33,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new route command instance.
 *
 * @param  \\Illuminate\\Filesystem\\Filesystem  $files
 */',
                'startLine' => 40,
                'endLine' => 45,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
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
                'startLine' => 52,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'aliasName' => null,
            ],
            'getFreshApplicationRoutes' => [
                'name' => 'getFreshApplicationRoutes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Boot a fresh copy of the application and get the routes.
 *
 * @return \\Illuminate\\Routing\\RouteCollection
 */',
                'startLine' => 78,
                'endLine' => 84,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'aliasName' => null,
            ],
            'getFreshApplication' => [
                'name' => 'getFreshApplication',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a fresh application instance.
 *
 * @return \\Illuminate\\Contracts\\Foundation\\Application
 */',
                'startLine' => 91,
                'endLine' => 96,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'aliasName' => null,
            ],
            'buildRouteCacheFile' => [
                'name' => 'buildRouteCacheFile',
                'parameters' => [
                    'routes' => [
                        'name' => 'routes',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Routing\\RouteCollection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 104,
                        'endLine' => 104,
                        'startColumn' => 44,
                        'endColumn' => 66,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Build the route cache file.
 *
 * @param  \\Illuminate\\Routing\\RouteCollection  $routes
 * @return string
 */',
                'startLine' => 104,
                'endLine' => 109,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\RouteCacheCommand',
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
