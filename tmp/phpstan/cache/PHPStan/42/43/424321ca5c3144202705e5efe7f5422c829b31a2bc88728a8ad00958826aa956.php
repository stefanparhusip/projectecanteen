<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/View/Compilers/Concerns/CompilesStacks.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\View\Compilers\Concerns\CompilesStacks
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-64e0fe1938c9adc285abe0e170287041ed82de46f9a3fb1e1fc588b71ddf7f1f-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/View/Compilers/Concerns/CompilesStacks.php',
            ],
        ],
        'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
        'name' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
        'shortName' => 'CompilesStacks',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 7,
        'endLine' => 117,
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
            'compileStack' => [
                'name' => 'compileStack',
                'parameters' => [
                    'expression' => [
                        'name' => 'expression',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 15,
                        'endLine' => 15,
                        'startColumn' => 37,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the stack statements into the content.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 15,
                'endLine' => 18,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'aliasName' => null,
            ],
            'compilePush' => [
                'name' => 'compilePush',
                'parameters' => [
                    'expression' => [
                        'name' => 'expression',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 26,
                        'endLine' => 26,
                        'startColumn' => 36,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the push statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 26,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'aliasName' => null,
            ],
            'compilePushOnce' => [
                'name' => 'compilePushOnce',
                'parameters' => [
                    'expression' => [
                        'name' => 'expression',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 37,
                        'endLine' => 37,
                        'startColumn' => 40,
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
 * Compile the push-once statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 37,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'aliasName' => null,
            ],
            'compileEndpush' => [
                'name' => 'compileEndpush',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the end-push statements into valid PHP.
 *
 * @return string
 */',
                'startLine' => 54,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'aliasName' => null,
            ],
            'compileEndpushOnce' => [
                'name' => 'compileEndpushOnce',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the end-push-once statements into valid PHP.
 *
 * @return string
 */',
                'startLine' => 64,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'aliasName' => null,
            ],
            'compilePrepend' => [
                'name' => 'compilePrepend',
                'parameters' => [
                    'expression' => [
                        'name' => 'expression',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 75,
                        'endLine' => 75,
                        'startColumn' => 39,
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
 * Compile the prepend statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 75,
                'endLine' => 78,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'aliasName' => null,
            ],
            'compilePrependOnce' => [
                'name' => 'compilePrependOnce',
                'parameters' => [
                    'expression' => [
                        'name' => 'expression',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 86,
                        'endLine' => 86,
                        'startColumn' => 43,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the prepend-once statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 86,
                'endLine' => 96,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'aliasName' => null,
            ],
            'compileEndprepend' => [
                'name' => 'compileEndprepend',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the end-prepend statements into valid PHP.
 *
 * @return string
 */',
                'startLine' => 103,
                'endLine' => 106,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'aliasName' => null,
            ],
            'compileEndprependOnce' => [
                'name' => 'compileEndprependOnce',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the end-prepend-once statements into valid PHP.
 *
 * @return string
 */',
                'startLine' => 113,
                'endLine' => 116,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesStacks',
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
