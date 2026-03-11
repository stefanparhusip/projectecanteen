<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Console/Concerns/ConfiguresPrompts.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Console\Concerns\ConfiguresPrompts
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6bedfb55d8f7db3e278de8f89d9b886a8c394a43b226212070f3a4a7e77e56c1-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Console/Concerns/ConfiguresPrompts.php',
            ],
        ],
        'namespace' => 'Illuminate\\Console\\Concerns',
        'name' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
        'shortName' => 'ConfiguresPrompts',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 20,
        'endLine' => 292,
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
            'configurePrompts' => [
                'name' => 'configurePrompts',
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
                        'startLine' => 28,
                        'endLine' => 28,
                        'startColumn' => 41,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Configure the prompt fallbacks.
 *
 * @param  \\Symfony\\Component\\Console\\Input\\InputInterface  $input
 * @return void
 */',
                'startLine' => 28,
                'endLine' => 113,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'aliasName' => null,
            ],
            'promptUntilValid' => [
                'name' => 'promptUntilValid',
                'parameters' => [
                    'prompt' => [
                        'name' => 'prompt',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 125,
                        'endLine' => 125,
                        'startColumn' => 41,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'required' => [
                        'name' => 'required',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 125,
                        'endLine' => 125,
                        'startColumn' => 50,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'validate' => [
                        'name' => 'validate',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 125,
                        'endLine' => 125,
                        'startColumn' => 61,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prompt the user until the given validation callback passes.
 *
 * @template PResult
 *
 * @param  \\Closure(): PResult  $prompt
 * @param  bool|string  $required
 * @param  (\\Closure(PResult): mixed)|null  $validate
 * @return PResult
 */',
                'startLine' => 125,
                'endLine' => 154,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'aliasName' => null,
            ],
            'validatePrompt' => [
                'name' => 'validatePrompt',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 163,
                        'endLine' => 163,
                        'startColumn' => 39,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'rules' => [
                        'name' => 'rules',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 163,
                        'endLine' => 163,
                        'startColumn' => 47,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Validate the given prompt value using the validator.
 *
 * @param  mixed  $value
 * @param  mixed  $rules
 * @return ?string
 */',
                'startLine' => 163,
                'endLine' => 184,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'aliasName' => null,
            ],
            'getPromptValidatorInstance' => [
                'name' => 'getPromptValidatorInstance',
                'parameters' => [
                    'field' => [
                        'name' => 'field',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 196,
                        'endLine' => 196,
                        'startColumn' => 51,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 196,
                        'endLine' => 196,
                        'startColumn' => 59,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'rules' => [
                        'name' => 'rules',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 196,
                        'endLine' => 196,
                        'startColumn' => 67,
                        'endColumn' => 72,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'messages' => [
                        'name' => 'messages',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 196,
                                'endLine' => 196,
                                'startTokenPos' => 1341,
                                'startFilePos' => 6679,
                                'endTokenPos' => 1342,
                                'endFilePos' => 6680,
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
                        'startLine' => 196,
                        'endLine' => 196,
                        'startColumn' => 75,
                        'endColumn' => 94,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 196,
                                'endLine' => 196,
                                'startTokenPos' => 1351,
                                'startFilePos' => 6703,
                                'endTokenPos' => 1352,
                                'endFilePos' => 6704,
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
                        'startLine' => 196,
                        'endLine' => 196,
                        'startColumn' => 97,
                        'endColumn' => 118,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the validator instance that should be used to validate prompts.
 *
 * @param  mixed  $field
 * @param  mixed  $value
 * @param  mixed  $rules
 * @param  array  $messages
 * @param  array  $attributes
 * @return \\Illuminate\\Validation\\Validator
 */',
                'startLine' => 196,
                'endLine' => 204,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'aliasName' => null,
            ],
            'validationMessages' => [
                'name' => 'validationMessages',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the validation messages that should be used during prompt validation.
 *
 * @return array<string, string>
 */',
                'startLine' => 211,
                'endLine' => 214,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'aliasName' => null,
            ],
            'validationAttributes' => [
                'name' => 'validationAttributes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the validation attributes that should be used during prompt validation.
 *
 * @return array<string, string>
 */',
                'startLine' => 221,
                'endLine' => 224,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'aliasName' => null,
            ],
            'restorePrompts' => [
                'name' => 'restorePrompts',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Restore the prompts output.
 *
 * @return void
 */',
                'startLine' => 231,
                'endLine' => 234,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'aliasName' => null,
            ],
            'selectFallback' => [
                'name' => 'selectFallback',
                'parameters' => [
                    'label' => [
                        'name' => 'label',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 244,
                        'endLine' => 244,
                        'startColumn' => 37,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 244,
                        'endLine' => 244,
                        'startColumn' => 45,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 244,
                                'endLine' => 244,
                                'startTokenPos' => 1510,
                                'startFilePos' => 7865,
                                'endTokenPos' => 1510,
                                'endFilePos' => 7868,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 244,
                        'endLine' => 244,
                        'startColumn' => 55,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Select fallback.
 *
 * @param  string  $label
 * @param  array<array-key, string>  $options
 * @param  string|int|null  $default
 * @return string|int
 */',
                'startLine' => 244,
                'endLine' => 253,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'aliasName' => null,
            ],
            'multiselectFallback' => [
                'name' => 'multiselectFallback',
                'parameters' => [
                    'label' => [
                        'name' => 'label',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 264,
                        'endLine' => 264,
                        'startColumn' => 42,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 264,
                        'endLine' => 264,
                        'startColumn' => 50,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 264,
                                'endLine' => 264,
                                'startTokenPos' => 1594,
                                'startFilePos' => 8380,
                                'endTokenPos' => 1595,
                                'endFilePos' => 8381,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 264,
                        'endLine' => 264,
                        'startColumn' => 60,
                        'endColumn' => 72,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'required' => [
                        'name' => 'required',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 264,
                                'endLine' => 264,
                                'startTokenPos' => 1602,
                                'startFilePos' => 8396,
                                'endTokenPos' => 1602,
                                'endFilePos' => 8400,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 264,
                        'endLine' => 264,
                        'startColumn' => 75,
                        'endColumn' => 91,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Multi-select fallback.
 *
 * @param  string  $label
 * @param  array  $options
 * @param  array  $default
 * @param  bool|string  $required
 * @return array
 */',
                'startLine' => 264,
                'endLine' => 291,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Illuminate\\Console\\Concerns',
                'declaringClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'implementingClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
                'currentClassName' => 'Illuminate\\Console\\Concerns\\ConfiguresPrompts',
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
