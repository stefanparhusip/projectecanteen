<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/PruneBatchesCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Queue\Console\PruneBatchesCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-81dd1796b8db30fffa1a5a67bea738a030c3cb5479c3542c95588889e6732f97-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Queue\\Console\\PruneBatchesCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Queue/Console/PruneBatchesCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Queue\\Console',
        'name' => 'Illuminate\\Queue\\Console\\PruneBatchesCommand',
        'shortName' => 'PruneBatchesCommand',
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
                        'code' => '\'queue:prune-batches\'',
                        'attributes' => [
                            'startLine' => 12,
                            'endLine' => 12,
                            'startTokenPos' => 43,
                            'startFilePos' => 301,
                            'endTokenPos' => 43,
                            'endFilePos' => 321,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 12,
        'endLine' => 69,
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
                'declaringClassName' => 'Illuminate\\Queue\\Console\\PruneBatchesCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\PruneBatchesCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'queue:prune-batches
                {--hours=24 : The number of hours to retain batch data}
                {--unfinished= : The number of hours to retain unfinished batch data }
                {--cancelled= : The number of hours to retain cancelled batch data }\'',
                    'attributes' => [
                        'startLine' => 20,
                        'endLine' => 23,
                        'startTokenPos' => 65,
                        'startFilePos' => 476,
                        'endTokenPos' => 65,
                        'endFilePos' => 740,
                    ],
                ],
                'docComment' => '/**
 * The console command signature.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 20,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 86,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Queue\\Console\\PruneBatchesCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\PruneBatchesCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Prune stale entries from the batches database\'',
                    'attributes' => [
                        'startLine' => 30,
                        'endLine' => 30,
                        'startTokenPos' => 76,
                        'startFilePos' => 855,
                        'endTokenPos' => 76,
                        'endFilePos' => 901,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 77,
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
                'startLine' => 37,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Queue\\Console',
                'declaringClassName' => 'Illuminate\\Queue\\Console\\PruneBatchesCommand',
                'implementingClassName' => 'Illuminate\\Queue\\Console\\PruneBatchesCommand',
                'currentClassName' => 'Illuminate\\Queue\\Console\\PruneBatchesCommand',
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
