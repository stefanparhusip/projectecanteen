<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/VendorPublishCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Console\VendorPublishCommand
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-057a1649f0dddf2300136c82a1827353525fb9004ff66153e2df7b6e79973f8d-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Console/VendorPublishCommand.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Console',
        'name' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'shortName' => 'VendorPublishCommand',
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
                        'code' => '\'vendor:publish\'',
                        'attributes' => [
                            'startLine' => 21,
                            'endLine' => 21,
                            'startTokenPos' => 95,
                            'startFilePos' => 659,
                            'endTokenPos' => 95,
                            'endFilePos' => 674,
                        ],
                    ],
                ],
            ],
        ],
        'startLine' => 21,
        'endLine' => 404,
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
            'files' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
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
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'provider' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'name' => 'provider',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 36,
                        'endLine' => 36,
                        'startTokenPos' => 124,
                        'startFilePos' => 952,
                        'endTokenPos' => 124,
                        'endFilePos' => 955,
                    ],
                ],
                'docComment' => '/**
 * The provider to publish.
 *
 * @var string|null
 */',
                'attributes' => [
                ],
                'startLine' => 36,
                'endLine' => 36,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'tags' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'name' => 'tags',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 43,
                        'endLine' => 43,
                        'startTokenPos' => 135,
                        'startFilePos' => 1050,
                        'endTokenPos' => 136,
                        'endFilePos' => 1051,
                    ],
                ],
                'docComment' => '/**
 * The tags to publish.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 43,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'publishedAt' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'name' => 'publishedAt',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The time the command started.
 *
 * @var \\Illuminate\\Support\\Carbon|null
 */',
                'attributes' => [
                ],
                'startLine' => 50,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'signature' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'vendor:publish
                    {--existing : Publish and overwrite only the files that have already been published}
                    {--force : Overwrite any existing files}
                    {--all : Publish assets for all service providers without prompt}
                    {--provider= : The service provider that has assets you want to publish}
                    {--tag=* : One or many tags that have assets you want to publish}\'',
                    'attributes' => [
                        'startLine' => 57,
                        'endLine' => 62,
                        'startTokenPos' => 154,
                        'startFilePos' => 1295,
                        'endTokenPos' => 154,
                        'endFilePos' => 1741,
                    ],
                ],
                'docComment' => '/**
 * The console command signature.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 57,
                'endLine' => 62,
                'startColumn' => 5,
                'endColumn' => 87,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Publish any publishable assets from vendor packages\'',
                    'attributes' => [
                        'startLine' => 69,
                        'endLine' => 69,
                        'startTokenPos' => 165,
                        'startFilePos' => 1856,
                        'endTokenPos' => 165,
                        'endFilePos' => 1908,
                    ],
                ],
                'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 69,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 83,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'updateMigrationDates' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'name' => 'updateMigrationDates',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => 'true',
                    'attributes' => [
                        'startLine' => 76,
                        'endLine' => 76,
                        'startTokenPos' => 178,
                        'startFilePos' => 2069,
                        'endTokenPos' => 178,
                        'endFilePos' => 2072,
                    ],
                ],
                'docComment' => '/**
 * Indicates if migration dates should be updated while publishing.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 76,
                'endLine' => 76,
                'startColumn' => 5,
                'endColumn' => 50,
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
                        'startLine' => 83,
                        'endLine' => 83,
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
 * Create a new command instance.
 *
 * @param  \\Illuminate\\Filesystem\\Filesystem  $files
 */',
                'startLine' => 83,
                'endLine' => 88,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
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
                'startLine' => 95,
                'endLine' => 104,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'aliasName' => null,
            ],
            'determineWhatShouldBePublished' => [
                'name' => 'determineWhatShouldBePublished',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine the provider or tag(s) to publish.
 *
 * @return void
 */',
                'startLine' => 111,
                'endLine' => 124,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'aliasName' => null,
            ],
            'promptForProviderOrTag' => [
                'name' => 'promptForProviderOrTag',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prompt for which provider or tag to publish.
 *
 * @return void
 */',
                'startLine' => 131,
                'endLine' => 156,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'aliasName' => null,
            ],
            'publishableChoices' => [
                'name' => 'publishableChoices',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * The choices available via the prompt.
 *
 * @return array
 */',
                'startLine' => 163,
                'endLine' => 170,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'aliasName' => null,
            ],
            'parseChoice' => [
                'name' => 'parseChoice',
                'parameters' => [
                    'choice' => [
                        'name' => 'choice',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 178,
                        'endLine' => 178,
                        'startColumn' => 36,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Parse the answer that was given via the prompt.
 *
 * @param  string  $choice
 * @return void
 */',
                'startLine' => 178,
                'endLine' => 187,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'aliasName' => null,
            ],
            'publishTag' => [
                'name' => 'publishTag',
                'parameters' => [
                    'tag' => [
                        'name' => 'tag',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 195,
                        'endLine' => 195,
                        'startColumn' => 35,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Publishes the assets for a tag.
 *
 * @param  string  $tag
 * @return void
 */',
                'startLine' => 195,
                'endLine' => 217,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'aliasName' => null,
            ],
            'pathsToPublish' => [
                'name' => 'pathsToPublish',
                'parameters' => [
                    'tag' => [
                        'name' => 'tag',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 225,
                        'endLine' => 225,
                        'startColumn' => 39,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the paths to publish.
 *
 * @param  string  $tag
 * @return array
 */',
                'startLine' => 225,
                'endLine' => 230,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'aliasName' => null,
            ],
            'publishItem' => [
                'name' => 'publishItem',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 239,
                        'endLine' => 239,
                        'startColumn' => 36,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 239,
                        'endLine' => 239,
                        'startColumn' => 43,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Publish the given item from and to the given location.
 *
 * @param  string  $from
 * @param  string  $to
 * @return void
 */',
                'startLine' => 239,
                'endLine' => 248,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'aliasName' => null,
            ],
            'publishFile' => [
                'name' => 'publishFile',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 257,
                        'endLine' => 257,
                        'startColumn' => 36,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 257,
                        'endLine' => 257,
                        'startColumn' => 43,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Publish the file to the given path.
 *
 * @param  string  $from
 * @param  string  $to
 * @return void
 */',
                'startLine' => 257,
                'endLine' => 281,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'aliasName' => null,
            ],
            'publishDirectory' => [
                'name' => 'publishDirectory',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 290,
                        'endLine' => 290,
                        'startColumn' => 41,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 290,
                        'endLine' => 290,
                        'startColumn' => 48,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Publish the directory to the given directory.
 *
 * @param  string  $from
 * @param  string  $to
 * @return void
 */',
                'startLine' => 290,
                'endLine' => 300,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'aliasName' => null,
            ],
            'moveManagedFiles' => [
                'name' => 'moveManagedFiles',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 309,
                        'endLine' => 309,
                        'startColumn' => 41,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'manager' => [
                        'name' => 'manager',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 309,
                        'endLine' => 309,
                        'startColumn' => 48,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Move all the files in the given MountManager.
 *
 * @param  string  $from
 * @param  \\League\\Flysystem\\MountManager  $manager
 * @return void
 */',
                'startLine' => 309,
                'endLine' => 326,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'aliasName' => null,
            ],
            'createParentDirectory' => [
                'name' => 'createParentDirectory',
                'parameters' => [
                    'directory' => [
                        'name' => 'directory',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 334,
                        'endLine' => 334,
                        'startColumn' => 46,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create the directory to house the published files if needed.
 *
 * @param  string  $directory
 * @return void
 */',
                'startLine' => 334,
                'endLine' => 339,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'aliasName' => null,
            ],
            'ensureMigrationNameIsUpToDate' => [
                'name' => 'ensureMigrationNameIsUpToDate',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 348,
                        'endLine' => 348,
                        'startColumn' => 54,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 348,
                        'endLine' => 348,
                        'startColumn' => 61,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Ensure the given migration name is up-to-date.
 *
 * @param  string  $from
 * @param  string  $to
 * @return string
 */',
                'startLine' => 348,
                'endLine' => 371,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'aliasName' => null,
            ],
            'status' => [
                'name' => 'status',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 381,
                        'endLine' => 381,
                        'startColumn' => 31,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 381,
                        'endLine' => 381,
                        'startColumn' => 38,
                        'endColumn' => 40,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'type' => [
                        'name' => 'type',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 381,
                        'endLine' => 381,
                        'startColumn' => 43,
                        'endColumn' => 47,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Write a status message to the console.
 *
 * @param  string  $from
 * @param  string  $to
 * @param  string  $type
 * @return void
 */',
                'startLine' => 381,
                'endLine' => 393,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'aliasName' => null,
            ],
            'dontUpdateMigrationDates' => [
                'name' => 'dontUpdateMigrationDates',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Instruct the command to not update the dates on migrations when publishing.
 *
 * @return void
 */',
                'startLine' => 400,
                'endLine' => 403,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Foundation\\Console',
                'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
                'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
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
