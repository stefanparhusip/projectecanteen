<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Console/Concerns/InteractsWithIO.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Console\Concerns\InteractsWithIO
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-9eec9711ff24126e6faace5ca9068673243e0e578a1dee4e5e2d1a03686883ac-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Console/Concerns/InteractsWithIO.php',
            ],
        ],
        'namespace' => 'Illuminate\\Console\\Concerns',
        'name' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
        'shortName' => 'InteractsWithIO',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 16,
        'endLine' => 466,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'components' => [
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'name' => 'components',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The console components factory.
 *
 * @var \\Illuminate\\Console\\View\\Components\\Factory
 */',
                'attributes' => [
                ],
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'input' => [
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'name' => 'input',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The input interface implementation.
 *
 * @var \\Symfony\\Component\\Console\\Input\\InputInterface
 */',
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'output' => [
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'name' => 'output',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The output interface implementation.
 *
 * @var \\Illuminate\\Console\\OutputStyle
 */',
                'attributes' => [
                ],
                'startLine' => 37,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'verbosity' => [
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'name' => 'verbosity',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_NORMAL',
                    'attributes' => [
                        'startLine' => 44,
                        'endLine' => 44,
                        'startTokenPos' => 92,
                        'startFilePos' => 1113,
                        'endTokenPos' => 94,
                        'endFilePos' => 1145,
                    ],
                ],
                'docComment' => '/**
 * The default verbosity of output commands.
 *
 * @var \\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_*
 */',
                'attributes' => [
                ],
                'startLine' => 44,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 61,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'verbosityMap' => [
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'name' => 'verbosityMap',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'v\' => \\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_VERBOSE, \'vv\' => \\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_VERY_VERBOSE, \'vvv\' => \\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_DEBUG, \'quiet\' => \\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_QUIET, \'normal\' => \\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_NORMAL]',
                    'attributes' => [
                        'startLine' => 51,
                        'endLine' => 57,
                        'startTokenPos' => 105,
                        'startFilePos' => 1382,
                        'endTokenPos' => 152,
                        'endFilePos' => 1655,
                    ],
                ],
                'docComment' => '/**
 * The mapping between human-readable verbosity levels and Symfony\'s OutputInterface.
 *
 * @var array<string, \\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_*>
 */',
                'attributes' => [
                ],
                'startLine' => 51,
                'endLine' => 57,
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
            'hasArgument' => [
                'name' => 'hasArgument',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 65,
                        'endLine' => 65,
                        'startColumn' => 33,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the given argument is present.
 *
 * @param  string|int  $name
 * @return bool
 */',
                'startLine' => 65,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'argument' => [
                'name' => 'argument',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 76,
                                'endLine' => 76,
                                'startTokenPos' => 194,
                                'startFilePos' => 2130,
                                'endTokenPos' => 194,
                                'endFilePos' => 2133,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 76,
                        'endLine' => 76,
                        'startColumn' => 30,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the value of a command argument.
 *
 * @param  string|null  $key
 * @return ($key is null ? array<array|string|float|int|bool|null> : array|string|float|int|bool|null)
 */',
                'startLine' => 76,
                'endLine' => 83,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'arguments' => [
                'name' => 'arguments',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the arguments passed to the command.
 *
 * @return array<array|string|float|int|bool|null>
 */',
                'startLine' => 90,
                'endLine' => 93,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'hasOption' => [
                'name' => 'hasOption',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 101,
                        'endLine' => 101,
                        'startColumn' => 31,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine whether the option is defined in the command signature.
 *
 * @param  string  $name
 * @return bool
 */',
                'startLine' => 101,
                'endLine' => 104,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'option' => [
                'name' => 'option',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 112,
                                'endLine' => 112,
                                'startTokenPos' => 299,
                                'startFilePos' => 2979,
                                'endTokenPos' => 299,
                                'endFilePos' => 2982,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 28,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the value of a command option.
 *
 * @param  string|null  $key
 * @return ($key is null ? array<array|string|float|int|bool|null> : array|string|float|int|bool|null)
 */',
                'startLine' => 112,
                'endLine' => 119,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'options' => [
                'name' => 'options',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the options passed to the command.
 *
 * @return array<array|string|float|int|bool|null>
 */',
                'startLine' => 126,
                'endLine' => 129,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'confirm' => [
                'name' => 'confirm',
                'parameters' => [
                    'question' => [
                        'name' => 'question',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 138,
                        'endLine' => 138,
                        'startColumn' => 29,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 138,
                                'endLine' => 138,
                                'startTokenPos' => 380,
                                'startFilePos' => 3534,
                                'endTokenPos' => 380,
                                'endFilePos' => 3538,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 138,
                        'endLine' => 138,
                        'startColumn' => 40,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Confirm a question with the user.
 *
 * @param  string  $question
 * @param  bool  $default
 * @return bool
 */',
                'startLine' => 138,
                'endLine' => 141,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'ask' => [
                'name' => 'ask',
                'parameters' => [
                    'question' => [
                        'name' => 'question',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 150,
                        'endLine' => 150,
                        'startColumn' => 25,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 150,
                                'endLine' => 150,
                                'startTokenPos' => 417,
                                'startFilePos' => 3808,
                                'endTokenPos' => 417,
                                'endFilePos' => 3811,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 150,
                        'endLine' => 150,
                        'startColumn' => 36,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prompt the user for input.
 *
 * @param  string  $question
 * @param  string|null  $default
 * @return mixed
 */',
                'startLine' => 150,
                'endLine' => 153,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'anticipate' => [
                'name' => 'anticipate',
                'parameters' => [
                    'question' => [
                        'name' => 'question',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 163,
                        'endLine' => 163,
                        'startColumn' => 32,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'choices' => [
                        'name' => 'choices',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 163,
                        'endLine' => 163,
                        'startColumn' => 43,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 163,
                                'endLine' => 163,
                                'startTokenPos' => 457,
                                'startFilePos' => 4155,
                                'endTokenPos' => 457,
                                'endFilePos' => 4158,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 163,
                        'endLine' => 163,
                        'startColumn' => 53,
                        'endColumn' => 67,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prompt the user for input with auto completion.
 *
 * @param  string  $question
 * @param  array|callable  $choices
 * @param  string|null  $default
 * @return mixed
 */',
                'startLine' => 163,
                'endLine' => 166,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'askWithCompletion' => [
                'name' => 'askWithCompletion',
                'parameters' => [
                    'question' => [
                        'name' => 'question',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 176,
                        'endLine' => 176,
                        'startColumn' => 39,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'choices' => [
                        'name' => 'choices',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 176,
                        'endLine' => 176,
                        'startColumn' => 50,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 176,
                                'endLine' => 176,
                                'startTokenPos' => 498,
                                'startFilePos' => 4548,
                                'endTokenPos' => 498,
                                'endFilePos' => 4551,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 176,
                        'endLine' => 176,
                        'startColumn' => 60,
                        'endColumn' => 74,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prompt the user for input with auto completion.
 *
 * @param  string  $question
 * @param  iterable|(callable(string): string[])  $choices
 * @param  string|null  $default
 * @return mixed
 */',
                'startLine' => 176,
                'endLine' => 185,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'secret' => [
                'name' => 'secret',
                'parameters' => [
                    'question' => [
                        'name' => 'question',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 194,
                        'endLine' => 194,
                        'startColumn' => 28,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'fallback' => [
                        'name' => 'fallback',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 194,
                                'endLine' => 194,
                                'startTokenPos' => 571,
                                'startFilePos' => 5056,
                                'endTokenPos' => 571,
                                'endFilePos' => 5059,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 194,
                        'endLine' => 194,
                        'startColumn' => 39,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prompt the user for input but hide the answer from the console.
 *
 * @param  string  $question
 * @param  bool  $fallback
 * @return mixed
 */',
                'startLine' => 194,
                'endLine' => 201,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'choice' => [
                'name' => 'choice',
                'parameters' => [
                    'question' => [
                        'name' => 'question',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 213,
                        'endLine' => 213,
                        'startColumn' => 28,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'choices' => [
                        'name' => 'choices',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'array',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 213,
                        'endLine' => 213,
                        'startColumn' => 39,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 213,
                                'endLine' => 213,
                                'startTokenPos' => 635,
                                'startFilePos' => 5632,
                                'endTokenPos' => 635,
                                'endFilePos' => 5635,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 213,
                        'endLine' => 213,
                        'startColumn' => 55,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'attempts' => [
                        'name' => 'attempts',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 213,
                                'endLine' => 213,
                                'startTokenPos' => 642,
                                'startFilePos' => 5650,
                                'endTokenPos' => 642,
                                'endFilePos' => 5653,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 213,
                        'endLine' => 213,
                        'startColumn' => 72,
                        'endColumn' => 87,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'multiple' => [
                        'name' => 'multiple',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 213,
                                'endLine' => 213,
                                'startTokenPos' => 649,
                                'startFilePos' => 5668,
                                'endTokenPos' => 649,
                                'endFilePos' => 5672,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 213,
                        'endLine' => 213,
                        'startColumn' => 90,
                        'endColumn' => 106,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Give the user a single choice from an array of answers.
 *
 * @param  string  $question
 * @param  array<\\Stringable|string|float|int|bool>  $choices
 * @param  string|int|null  $default
 * @param  ?positive-int  $attempts
 * @param  bool  $multiple
 * @return string|array
 */',
                'startLine' => 213,
                'endLine' => 220,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'table' => [
                'name' => 'table',
                'parameters' => [
                    'headers' => [
                        'name' => 'headers',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 231,
                        'endLine' => 231,
                        'startColumn' => 27,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'rows' => [
                        'name' => 'rows',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 231,
                        'endLine' => 231,
                        'startColumn' => 37,
                        'endColumn' => 41,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'tableStyle' => [
                        'name' => 'tableStyle',
                        'default' => [
                            'code' => '\'default\'',
                            'attributes' => [
                                'startLine' => 231,
                                'endLine' => 231,
                                'startTokenPos' => 717,
                                'startFilePos' => 6299,
                                'endTokenPos' => 717,
                                'endFilePos' => 6307,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 231,
                        'endLine' => 231,
                        'startColumn' => 44,
                        'endColumn' => 66,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'columnStyles' => [
                        'name' => 'columnStyles',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 231,
                                'endLine' => 231,
                                'startTokenPos' => 726,
                                'startFilePos' => 6332,
                                'endTokenPos' => 727,
                                'endFilePos' => 6333,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'array',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 231,
                        'endLine' => 231,
                        'startColumn' => 69,
                        'endColumn' => 92,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Format input to textual table.
 *
 * @param  array  $headers
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $rows
 * @param  \\Symfony\\Component\\Console\\Helper\\TableStyle|string  $tableStyle
 * @param  array<int, \\Symfony\\Component\\Console\\Helper\\TableStyle|string>  $columnStyles
 * @return void
 */',
                'startLine' => 231,
                'endLine' => 246,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'withProgressBar' => [
                'name' => 'withProgressBar',
                'parameters' => [
                    'totalSteps' => [
                        'name' => 'totalSteps',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 258,
                        'endLine' => 258,
                        'startColumn' => 37,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 258,
                        'endLine' => 258,
                        'startColumn' => 50,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute a given callback while advancing a progress bar.
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @param  iterable<TKey, TValue>|int  $totalSteps
 * @param  \\Closure(\\Symfony\\Component\\Console\\Helper\\ProgressBar|TValue, \\Symfony\\Component\\Console\\Helper\\ProgressBar|null, TKey|null): void  $callback
 * @return mixed|void
 */',
                'startLine' => 258,
                'endLine' => 281,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'info' => [
                'name' => 'info',
                'parameters' => [
                    'string' => [
                        'name' => 'string',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 290,
                        'endLine' => 290,
                        'startColumn' => 26,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'verbosity' => [
                        'name' => 'verbosity',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 290,
                                'endLine' => 290,
                                'startTokenPos' => 988,
                                'startFilePos' => 8013,
                                'endTokenPos' => 988,
                                'endFilePos' => 8016,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 290,
                        'endLine' => 290,
                        'startColumn' => 35,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Write a string as information output.
 *
 * @param  string  $string
 * @param  \'v\'|\'vv\'|\'vvv\'|\'quiet\'|\'normal\'|\\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_*|null  $verbosity
 * @return void
 */',
                'startLine' => 290,
                'endLine' => 293,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'line' => [
                'name' => 'line',
                'parameters' => [
                    'string' => [
                        'name' => 'string',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 303,
                        'endLine' => 303,
                        'startColumn' => 26,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'style' => [
                        'name' => 'style',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 303,
                                'endLine' => 303,
                                'startTokenPos' => 1024,
                                'startFilePos' => 8447,
                                'endTokenPos' => 1024,
                                'endFilePos' => 8450,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 303,
                        'endLine' => 303,
                        'startColumn' => 35,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'verbosity' => [
                        'name' => 'verbosity',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 303,
                                'endLine' => 303,
                                'startTokenPos' => 1031,
                                'startFilePos' => 8466,
                                'endTokenPos' => 1031,
                                'endFilePos' => 8469,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 303,
                        'endLine' => 303,
                        'startColumn' => 50,
                        'endColumn' => 66,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Write a string as standard output.
 *
 * @param  string  $string
 * @param  \'info\'|\'comment\'|\'question\'|\'error\'|\'warn\'|\'alert\'|null  $style
 * @param  \'v\'|\'vv\'|\'vvv\'|\'quiet\'|\'normal\'|\\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_*|null  $verbosity
 * @return void
 */',
                'startLine' => 303,
                'endLine' => 308,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'comment' => [
                'name' => 'comment',
                'parameters' => [
                    'string' => [
                        'name' => 'string',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 317,
                        'endLine' => 317,
                        'startColumn' => 29,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'verbosity' => [
                        'name' => 'verbosity',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 317,
                                'endLine' => 317,
                                'startTokenPos' => 1094,
                                'startFilePos' => 8919,
                                'endTokenPos' => 1094,
                                'endFilePos' => 8922,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 317,
                        'endLine' => 317,
                        'startColumn' => 38,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Write a string as comment output.
 *
 * @param  string  $string
 * @param  \'v\'|\'vv\'|\'vvv\'|\'quiet\'|\'normal\'|\\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_*|null  $verbosity
 * @return void
 */',
                'startLine' => 317,
                'endLine' => 320,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'question' => [
                'name' => 'question',
                'parameters' => [
                    'string' => [
                        'name' => 'string',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 329,
                        'endLine' => 329,
                        'startColumn' => 30,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'verbosity' => [
                        'name' => 'verbosity',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 329,
                                'endLine' => 329,
                                'startTokenPos' => 1130,
                                'startFilePos' => 9285,
                                'endTokenPos' => 1130,
                                'endFilePos' => 9288,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 329,
                        'endLine' => 329,
                        'startColumn' => 39,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Write a string as question output.
 *
 * @param  string  $string
 * @param  \'v\'|\'vv\'|\'vvv\'|\'quiet\'|\'normal\'|\\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_*|null  $verbosity
 * @return void
 */',
                'startLine' => 329,
                'endLine' => 332,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'error' => [
                'name' => 'error',
                'parameters' => [
                    'string' => [
                        'name' => 'string',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 341,
                        'endLine' => 341,
                        'startColumn' => 27,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'verbosity' => [
                        'name' => 'verbosity',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 341,
                                'endLine' => 341,
                                'startTokenPos' => 1166,
                                'startFilePos' => 9646,
                                'endTokenPos' => 1166,
                                'endFilePos' => 9649,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 341,
                        'endLine' => 341,
                        'startColumn' => 36,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Write a string as error output.
 *
 * @param  string  $string
 * @param  \'v\'|\'vv\'|\'vvv\'|\'quiet\'|\'normal\'|\\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_*|null  $verbosity
 * @return void
 */',
                'startLine' => 341,
                'endLine' => 344,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'warn' => [
                'name' => 'warn',
                'parameters' => [
                    'string' => [
                        'name' => 'string',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 353,
                        'endLine' => 353,
                        'startColumn' => 26,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'verbosity' => [
                        'name' => 'verbosity',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 353,
                                'endLine' => 353,
                                'startTokenPos' => 1202,
                                'startFilePos' => 10005,
                                'endTokenPos' => 1202,
                                'endFilePos' => 10008,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 353,
                        'endLine' => 353,
                        'startColumn' => 35,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Write a string as warning output.
 *
 * @param  string  $string
 * @param  \'v\'|\'vv\'|\'vvv\'|\'quiet\'|\'normal\'|\\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_*|null  $verbosity
 * @return void
 */',
                'startLine' => 353,
                'endLine' => 362,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'alert' => [
                'name' => 'alert',
                'parameters' => [
                    'string' => [
                        'name' => 'string',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 371,
                        'endLine' => 371,
                        'startColumn' => 27,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'verbosity' => [
                        'name' => 'verbosity',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 371,
                                'endLine' => 371,
                                'startTokenPos' => 1290,
                                'startFilePos' => 10574,
                                'endTokenPos' => 1290,
                                'endFilePos' => 10577,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 371,
                        'endLine' => 371,
                        'startColumn' => 36,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Write a string in an alert box.
 *
 * @param  string  $string
 * @param  \'v\'|\'vv\'|\'vvv\'|\'quiet\'|\'normal\'|\\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_*|null  $verbosity
 * @return void
 */',
                'startLine' => 371,
                'endLine' => 380,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'newLine' => [
                'name' => 'newLine',
                'parameters' => [
                    'count' => [
                        'name' => 'count',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 388,
                                'endLine' => 388,
                                'startTokenPos' => 1388,
                                'startFilePos' => 11014,
                                'endTokenPos' => 1388,
                                'endFilePos' => 11014,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 388,
                        'endLine' => 388,
                        'startColumn' => 29,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Write a blank line.
 *
 * @param  int  $count
 * @return $this
 */',
                'startLine' => 388,
                'endLine' => 393,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'setInput' => [
                'name' => 'setInput',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\Console\\Input\\InputInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 401,
                        'endLine' => 401,
                        'startColumn' => 30,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the input interface implementation.
 *
 * @param  \\Symfony\\Component\\Console\\Input\\InputInterface  $input
 * @return void
 */',
                'startLine' => 401,
                'endLine' => 404,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'setOutput' => [
                'name' => 'setOutput',
                'parameters' => [
                    'output' => [
                        'name' => 'output',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Console\\OutputStyle',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 412,
                        'endLine' => 412,
                        'startColumn' => 31,
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
 * Set the output interface implementation.
 *
 * @param  \\Illuminate\\Console\\OutputStyle  $output
 * @return void
 */',
                'startLine' => 412,
                'endLine' => 415,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'setVerbosity' => [
                'name' => 'setVerbosity',
                'parameters' => [
                    'level' => [
                        'name' => 'level',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 423,
                        'endLine' => 423,
                        'startColumn' => 37,
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
 * Set the verbosity level.
 *
 * @param  \'v\'|\'vv\'|\'vvv\'|\'quiet\'|\'normal\'|\\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_*  $level
 * @return void
 */',
                'startLine' => 423,
                'endLine' => 426,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'parseVerbosity' => [
                'name' => 'parseVerbosity',
                'parameters' => [
                    'level' => [
                        'name' => 'level',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 434,
                                'endLine' => 434,
                                'startTokenPos' => 1503,
                                'startFilePos' => 12190,
                                'endTokenPos' => 1503,
                                'endFilePos' => 12193,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 434,
                        'endLine' => 434,
                        'startColumn' => 39,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the verbosity level in terms of Symfony\'s OutputInterface level.
 *
 * @param  \'v\'|\'vv\'|\'vvv\'|\'quiet\'|\'normal\'|\\Symfony\\Component\\Console\\Output\\OutputInterface::VERBOSITY_*|null  $level
 * @return int
 */',
                'startLine' => 434,
                'endLine' => 445,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'getOutput' => [
                'name' => 'getOutput',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the output implementation.
 *
 * @return \\Illuminate\\Console\\OutputStyle
 */',
                'startLine' => 452,
                'endLine' => 455,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'aliasName' => null,
            ],
            'outputComponents' => [
                'name' => 'outputComponents',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the output component factory implementation.
 *
 * @return \\Illuminate\\Console\\View\\Components\\Factory
 */',
                'startLine' => 462,
                'endLine' => 465,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\InteractsWithIO',
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
