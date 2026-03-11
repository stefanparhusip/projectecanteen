<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/ResumeCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Queue\Console\ResumeCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-f1d7688cd68d9665d5ae0bbe8b60d37627748f4c43f5a4356aad6b624cb5d1f1-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Queue\\Console\\ResumeCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/ResumeCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Queue\\Console',
        'name' => 'Illuminate\\Queue\\Console\\ResumeCommand',
        'shortName' => 'ResumeCommand',
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
                        'code' => '\'queue:resume\'',
                        'attributes' => [
                            'startLine' => 10,
                            'endLine' => 10,
                            'startTokenPos' => 37,
                            'startFilePos' => 253,
                            'endTokenPos' => 37,
                            'endFilePos' => 266,
                        ],
                    ],
                    'aliases' => [
                        'code' => '[\'queue:continue\']',
                        'attributes' => [
                            'startLine' => 10,
                            'endLine' => 10,
                            'startTokenPos' => 43,
                            'startFilePos' => 278,
                            'endTokenPos' => 45,
                            'endFilePos' => 295,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 10,
        'endLine' => 51,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Queue\\Console\\Concerns\\ParsesQueue',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'signature' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ResumeCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ResumeCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'queue:resume {queue : The name of the queue that should resume processing}\'',
                    'attributes' => [
                        'startLine' => 20,
                        'endLine' => 20,
                        'startTokenPos' => 72,
                        'startFilePos' => 461,
                        'endTokenPos' => 72,
                        'endFilePos' => 536,
                    ],
                ],
                'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 20,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 104,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'aliases' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ResumeCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ResumeCommand',
                'name' => 'aliases',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'queue:continue\']',
                    'attributes' => [
                        'startLine' => 27,
                        'endLine' => 27,
                        'startTokenPos' => 83,
                        'startFilePos' => 654,
                        'endTokenPos' => 85,
                        'endFilePos' => 671,
                    ],
                ],
                'docComment' => '/**
 * The console command name aliases.
 *
 * @var list<string>
 */',
                'attributes' => [
                ],
                'startLine' => 27,
                'endLine' => 27,
                'startColumn' => 5,
                'endColumn' => 44,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ResumeCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ResumeCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Resume job processing for a paused queue\'',
                    'attributes' => [
                        'startLine' => 34,
                        'endLine' => 34,
                        'startTokenPos' => 96,
                        'startFilePos' => 786,
                        'endTokenPos' => 96,
                        'endFilePos' => 827,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 34,
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 72,
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
                    'manager' => [
                        'name' => 'manager',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Queue\\Factory',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 28,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'startLine' => 41,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\ResumeCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\ResumeCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\ResumeCommand',
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
