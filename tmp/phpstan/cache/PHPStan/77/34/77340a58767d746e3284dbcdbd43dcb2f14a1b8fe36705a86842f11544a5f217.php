<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/View/Compilers/Concerns/CompilesConditionals.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\View\Compilers\Concerns\CompilesConditionals
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-f84e1c1511efd6dfb4b2bd0dfd21c8cff7b170f91ab361fdc8a75a70f1fe6d0a-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/View/Compilers/Concerns/CompilesConditionals.php',
            ],
        ],
        'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
        'name' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
        'shortName' => 'CompilesConditionals',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 7,
        'endLine' => 440,
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
            'firstCaseInSwitch' => [
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'name' => 'firstCaseInSwitch',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'true',
                    'attributes' => [
                        'startLine' => 14,
                        'endLine' => 14,
                        'startTokenPos' => 26,
                        'startFilePos' => 249,
                        'endTokenPos' => 26,
                        'endFilePos' => 252,
                    ],
                ],
                'docComment' => '/**
 * Identifier for the first case in the switch statement.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 14,
                'endLine' => 14,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'compileAuth' => [
                'name' => 'compileAuth',
                'parameters' => [
                    'guard' => [
                        'name' => 'guard',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 22,
                                'endLine' => 22,
                                'startTokenPos' => 41,
                                'startFilePos' => 434,
                                'endTokenPos' => 41,
                                'endFilePos' => 437,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 22,
                        'endLine' => 22,
                        'startColumn' => 36,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the if-auth statements into valid PHP.
 *
 * @param  string|null  $guard
 * @return string
 */',
                'startLine' => 22,
                'endLine' => 27,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileElseAuth' => [
                'name' => 'compileElseAuth',
                'parameters' => [
                    'guard' => [
                        'name' => 'guard',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 35,
                                'endLine' => 35,
                                'startTokenPos' => 89,
                                'startFilePos' => 751,
                                'endTokenPos' => 89,
                                'endFilePos' => 754,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 35,
                        'endLine' => 35,
                        'startColumn' => 40,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the else-auth statements into valid PHP.
 *
 * @param  string|null  $guard
 * @return string
 */',
                'startLine' => 35,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileEndAuth' => [
                'name' => 'compileEndAuth',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the end-auth statements into valid PHP.
 *
 * @return string
 */',
                'startLine' => 47,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileEnv' => [
                'name' => 'compileEnv',
                'parameters' => [
                    'environments' => [
                        'name' => 'environments',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 35,
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
 * Compile the env statements into valid PHP.
 *
 * @param  string  $environments
 * @return string
 */',
                'startLine' => 58,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileEndEnv' => [
                'name' => 'compileEndEnv',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the end-env statements into valid PHP.
 *
 * @return string
 */',
                'startLine' => 68,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileProduction' => [
                'name' => 'compileProduction',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the production statements into valid PHP.
 *
 * @return string
 */',
                'startLine' => 78,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileEndProduction' => [
                'name' => 'compileEndProduction',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the end-production statements into valid PHP.
 *
 * @return string
 */',
                'startLine' => 88,
                'endLine' => 91,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileGuest' => [
                'name' => 'compileGuest',
                'parameters' => [
                    'guard' => [
                        'name' => 'guard',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 99,
                                'endLine' => 99,
                                'startTokenPos' => 239,
                                'startFilePos' => 2122,
                                'endTokenPos' => 239,
                                'endFilePos' => 2125,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 99,
                        'endLine' => 99,
                        'startColumn' => 37,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the if-guest statements into valid PHP.
 *
 * @param  string|null  $guard
 * @return string
 */',
                'startLine' => 99,
                'endLine' => 104,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileElseGuest' => [
                'name' => 'compileElseGuest',
                'parameters' => [
                    'guard' => [
                        'name' => 'guard',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 112,
                                'endLine' => 112,
                                'startTokenPos' => 287,
                                'startFilePos' => 2441,
                                'endTokenPos' => 287,
                                'endFilePos' => 2444,
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
                        'startColumn' => 41,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the else-guest statements into valid PHP.
 *
 * @param  string|null  $guard
 * @return string
 */',
                'startLine' => 112,
                'endLine' => 117,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileEndGuest' => [
                'name' => 'compileEndGuest',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the end-guest statements into valid PHP.
 *
 * @return string
 */',
                'startLine' => 124,
                'endLine' => 127,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileHasSection' => [
                'name' => 'compileHasSection',
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
                        'startLine' => 135,
                        'endLine' => 135,
                        'startColumn' => 42,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the has-section statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 135,
                'endLine' => 138,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileHasStack' => [
                'name' => 'compileHasStack',
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
                        'startLine' => 146,
                        'endLine' => 146,
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
 * Compile the has-stack statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 146,
                'endLine' => 149,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileSectionMissing' => [
                'name' => 'compileSectionMissing',
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
                        'startLine' => 157,
                        'endLine' => 157,
                        'startColumn' => 46,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the section-missing statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 157,
                'endLine' => 160,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileIf' => [
                'name' => 'compileIf',
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
                        'startLine' => 168,
                        'endLine' => 168,
                        'startColumn' => 34,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the if statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 168,
                'endLine' => 171,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileUnless' => [
                'name' => 'compileUnless',
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
                        'startLine' => 179,
                        'endLine' => 179,
                        'startColumn' => 38,
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
 * Compile the unless statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 179,
                'endLine' => 182,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileElseif' => [
                'name' => 'compileElseif',
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
                        'startLine' => 190,
                        'endLine' => 190,
                        'startColumn' => 38,
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
 * Compile the else-if statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 190,
                'endLine' => 193,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileElse' => [
                'name' => 'compileElse',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the else statements into valid PHP.
 *
 * @return string
 */',
                'startLine' => 200,
                'endLine' => 203,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileEndif' => [
                'name' => 'compileEndif',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the end-if statements into valid PHP.
 *
 * @return string
 */',
                'startLine' => 210,
                'endLine' => 213,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileEndunless' => [
                'name' => 'compileEndunless',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the end-unless statements into valid PHP.
 *
 * @return string
 */',
                'startLine' => 220,
                'endLine' => 223,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileIsset' => [
                'name' => 'compileIsset',
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
                        'startLine' => 231,
                        'endLine' => 231,
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
 * Compile the if-isset statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
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
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileEndIsset' => [
                'name' => 'compileEndIsset',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the end-isset statements into valid PHP.
 *
 * @return string
 */',
                'startLine' => 241,
                'endLine' => 244,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileSwitch' => [
                'name' => 'compileSwitch',
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
                        'startLine' => 252,
                        'endLine' => 252,
                        'startColumn' => 38,
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
 * Compile the switch statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 252,
                'endLine' => 257,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileCase' => [
                'name' => 'compileCase',
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
                        'startLine' => 265,
                        'endLine' => 265,
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
 * Compile the case statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 265,
                'endLine' => 274,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileDefault' => [
                'name' => 'compileDefault',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the default statements in switch case into valid PHP.
 *
 * @return string
 */',
                'startLine' => 281,
                'endLine' => 284,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileEndSwitch' => [
                'name' => 'compileEndSwitch',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the end switch statements into valid PHP.
 *
 * @return string
 */',
                'startLine' => 291,
                'endLine' => 294,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileOnce' => [
                'name' => 'compileOnce',
                'parameters' => [
                    'id' => [
                        'name' => 'id',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 302,
                                'endLine' => 302,
                                'startTokenPos' => 743,
                                'startFilePos' => 6557,
                                'endTokenPos' => 743,
                                'endFilePos' => 6560,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 302,
                        'endLine' => 302,
                        'startColumn' => 36,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile a once block into valid PHP.
 *
 * @param  string|null  $id
 * @return string
 */',
                'startLine' => 302,
                'endLine' => 307,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileEndOnce' => [
                'name' => 'compileEndOnce',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile an end-once block into valid PHP.
 *
 * @return string
 */',
                'startLine' => 314,
                'endLine' => 317,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileBool' => [
                'name' => 'compileBool',
                'parameters' => [
                    'condition' => [
                        'name' => 'condition',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 325,
                        'endLine' => 325,
                        'startColumn' => 36,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile a boolean value into a raw true / false value for embedding into HTML attributes or JavaScript.
 *
 * @param  bool  $condition
 * @return string
 */',
                'startLine' => 325,
                'endLine' => 328,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileChecked' => [
                'name' => 'compileChecked',
                'parameters' => [
                    'condition' => [
                        'name' => 'condition',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 336,
                        'endLine' => 336,
                        'startColumn' => 39,
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
 * Compile a checked block into valid PHP.
 *
 * @param  string  $condition
 * @return string
 */',
                'startLine' => 336,
                'endLine' => 339,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileDisabled' => [
                'name' => 'compileDisabled',
                'parameters' => [
                    'condition' => [
                        'name' => 'condition',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 347,
                        'endLine' => 347,
                        'startColumn' => 40,
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
 * Compile a disabled block into valid PHP.
 *
 * @param  string  $condition
 * @return string
 */',
                'startLine' => 347,
                'endLine' => 350,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileRequired' => [
                'name' => 'compileRequired',
                'parameters' => [
                    'condition' => [
                        'name' => 'condition',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 358,
                        'endLine' => 358,
                        'startColumn' => 40,
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
 * Compile a required block into valid PHP.
 *
 * @param  string  $condition
 * @return string
 */',
                'startLine' => 358,
                'endLine' => 361,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileReadonly' => [
                'name' => 'compileReadonly',
                'parameters' => [
                    'condition' => [
                        'name' => 'condition',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 369,
                        'endLine' => 369,
                        'startColumn' => 40,
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
 * Compile a readonly block into valid PHP.
 *
 * @param  string  $condition
 * @return string
 */',
                'startLine' => 369,
                'endLine' => 372,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileSelected' => [
                'name' => 'compileSelected',
                'parameters' => [
                    'condition' => [
                        'name' => 'condition',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 380,
                        'endLine' => 380,
                        'startColumn' => 40,
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
 * Compile a selected block into valid PHP.
 *
 * @param  string  $condition
 * @return string
 */',
                'startLine' => 380,
                'endLine' => 383,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compilePushIf' => [
                'name' => 'compilePushIf',
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
                        'startLine' => 391,
                        'endLine' => 391,
                        'startColumn' => 38,
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
 * Compile the push statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 391,
                'endLine' => 405,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileElsePushIf' => [
                'name' => 'compileElsePushIf',
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
                        'startLine' => 413,
                        'endLine' => 413,
                        'startColumn' => 42,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the else-if push statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 413,
                'endLine' => 418,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileElsePush' => [
                'name' => 'compileElsePush',
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
                        'startLine' => 426,
                        'endLine' => 426,
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
 * Compile the else push statements into valid PHP.
 *
 * @param  string  $expression
 * @return string
 */',
                'startLine' => 426,
                'endLine' => 429,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'aliasName' => null,
            ],
            'compileEndPushIf' => [
                'name' => 'compileEndPushIf',
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
                'startLine' => 436,
                'endLine' => 439,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesConditionals',
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
