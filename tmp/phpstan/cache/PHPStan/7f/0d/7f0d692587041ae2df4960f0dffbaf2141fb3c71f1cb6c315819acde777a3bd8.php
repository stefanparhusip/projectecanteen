<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Console/ConfirmableTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Console\ConfirmableTrait
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-263058bb8e912eed3f4b704031d0a12201d5ff4cc434921c24f8aa0fb747a25d-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Console\\ConfirmableTrait',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Console/ConfirmableTrait.php',
            ],
        ],
        'namespace' => 'Illuminate\\Console',
        'name' => 'Illuminate\\Console\\ConfirmableTrait',
        'shortName' => 'ConfirmableTrait',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 7,
        'endLine' => 56,
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
        ],
        'immediateMethods' => [
            'confirmToProceed' => [
                'name' => 'confirmToProceed',
                'parameters' => [
                    'warning' => [
                        'name' => 'warning',
                        'default' => [
                            'code' => '\'Application In Production\'',
                            'attributes' => [
                                'startLine' => 20,
                                'endLine' => 20,
                                'startTokenPos' => 32,
                                'startFilePos' => 479,
                                'endTokenPos' => 32,
                                'endFilePos' => 505,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 20,
                        'endLine' => 20,
                        'startColumn' => 38,
                        'endColumn' => 75,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 20,
                                'endLine' => 20,
                                'startTokenPos' => 39,
                                'startFilePos' => 520,
                                'endTokenPos' => 39,
                                'endFilePos' => 523,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 20,
                        'endLine' => 20,
                        'startColumn' => 78,
                        'endColumn' => 93,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Confirm before proceeding with the action.
 *
 * This method only asks for confirmation in production.
 *
 * @template TReturn of bool = bool
 *
 * @param  string  $warning
 * @param  (\\Closure(): TReturn)|TReturn|null  $callback
 * @return (TReturn is false ? true : bool)
 */',
                'startLine' => 20,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Console',
                'declaringClassName' => 'Illuminate\\Console\\ConfirmableTrait',
                'implementingClassName' => 'Illuminate\\Console\\ConfirmableTrait',
                'currentClassName' => 'Illuminate\\Console\\ConfirmableTrait',
                'aliasName' => null,
            ],
            'getDefaultConfirmCallback' => [
                'name' => 'getDefaultConfirmCallback',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default confirmation callback.
 *
 * @return \\Closure(): bool
 */',
                'startLine' => 50,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console',
                'declaringClassName' => 'Illuminate\\Console\\ConfirmableTrait',
                'implementingClassName' => 'Illuminate\\Console\\ConfirmableTrait',
                'currentClassName' => 'Illuminate\\Console\\ConfirmableTrait',
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
