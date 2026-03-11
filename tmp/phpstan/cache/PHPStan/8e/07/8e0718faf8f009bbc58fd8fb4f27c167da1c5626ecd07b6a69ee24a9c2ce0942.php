<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/View/Compilers/Concerns/CompilesEchos.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\View\Compilers\Concerns\CompilesEchos
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-0b1e7428a18688d0d920cfffc386400047703caa382f4a876272c914080bbaaf-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/View/Compilers/Concerns/CompilesEchos.php',
            ],
        ],
        'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
        'name' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
        'shortName' => 'CompilesEchos',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 171,
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
            'echoHandlers' => [
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'name' => 'echoHandlers',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 15,
                        'endLine' => 15,
                        'startTokenPos' => 31,
                        'startFilePos' => 254,
                        'endTokenPos' => 32,
                        'endFilePos' => 255,
                    ],
                ],
                'docComment' => '/**
 * Custom rendering callbacks for stringable objects.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 15,
                'endLine' => 15,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'stringable' => [
                'name' => 'stringable',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 24,
                        'endLine' => 24,
                        'startColumn' => 32,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'handler' => [
                        'name' => 'handler',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 24,
                                'endLine' => 24,
                                'startTokenPos' => 50,
                                'startFilePos' => 496,
                                'endTokenPos' => 50,
                                'endFilePos' => 499,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 24,
                        'endLine' => 24,
                        'startColumn' => 40,
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
 * Add a handler to be executed before echoing a given class.
 *
 * @param  string|callable  $class
 * @param  callable|null  $handler
 * @return void
 */',
                'startLine' => 24,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'aliasName' => null,
            ],
            'compileEchos' => [
                'name' => 'compileEchos',
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
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 34,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile Blade echos into valid PHP.
 *
 * @param  string  $value
 * @return string
 */',
                'startLine' => 39,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'aliasName' => null,
            ],
            'getEchoMethods' => [
                'name' => 'getEchoMethods',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the echo methods in the proper order for compilation.
 *
 * @return array
 */',
                'startLine' => 53,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'aliasName' => null,
            ],
            'compileRawEchos' => [
                'name' => 'compileRawEchos',
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
                        'startLine' => 68,
                        'endLine' => 68,
                        'startColumn' => 40,
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
 * Compile the "raw" echo statements.
 *
 * @param  string  $value
 * @return string
 */',
                'startLine' => 68,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'aliasName' => null,
            ],
            'compileRegularEchos' => [
                'name' => 'compileRegularEchos',
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
                        'startLine' => 89,
                        'endLine' => 89,
                        'startColumn' => 44,
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
 * Compile the "regular" echo statements.
 *
 * @param  string  $value
 * @return string
 */',
                'startLine' => 89,
                'endLine' => 102,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'aliasName' => null,
            ],
            'compileEscapedEchos' => [
                'name' => 'compileEscapedEchos',
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
                        'startLine' => 110,
                        'endLine' => 110,
                        'startColumn' => 44,
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
 * Compile the escaped echo statements.
 *
 * @param  string  $value
 * @return string
 */',
                'startLine' => 110,
                'endLine' => 123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'aliasName' => null,
            ],
            'addBladeCompilerVariable' => [
                'name' => 'addBladeCompilerVariable',
                'parameters' => [
                    'result' => [
                        'name' => 'result',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 131,
                        'endLine' => 131,
                        'startColumn' => 49,
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
 * Add an instance of the blade echo handler to the start of the compiled string.
 *
 * @param  string  $result
 * @return string
 */',
                'startLine' => 131,
                'endLine' => 134,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'aliasName' => null,
            ],
            'wrapInEchoHandler' => [
                'name' => 'wrapInEchoHandler',
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
                        'startLine' => 142,
                        'endLine' => 142,
                        'startColumn' => 42,
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
 * Wrap the echoable value in an echo handler if applicable.
 *
 * @param  string  $value
 * @return string
 */',
                'startLine' => 142,
                'endLine' => 151,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'aliasName' => null,
            ],
            'applyEchoHandler' => [
                'name' => 'applyEchoHandler',
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
                        'startLine' => 159,
                        'endLine' => 159,
                        'startColumn' => 38,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Apply the echo handler for the value if it exists.
 *
 * @param  string  $value
 * @return string
 */',
                'startLine' => 159,
                'endLine' => 170,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\View\\Compilers\\Concerns',
                'declaringClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'implementingClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
                'currentClassName' => 'Illuminate\\View\\Compilers\\Concerns\\CompilesEchos',
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
