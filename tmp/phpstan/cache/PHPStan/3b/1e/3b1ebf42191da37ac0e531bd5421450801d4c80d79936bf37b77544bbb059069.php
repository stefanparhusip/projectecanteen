<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Support/Timebox.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Timebox
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-d3247d6d89ffb9303944fcb472ba5faf3227b969591158ef4812cb08cb4ff57a-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Support\\Timebox',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Support/Timebox.php',
            ],
        ],
        'namespace' => 'Illuminate\\Support',
        'name' => 'Illuminate\\Support\\Timebox',
        'shortName' => 'Timebox',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 7,
        'endLine' => 86,
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
            'earlyReturn' => [
                'declaringClassName' => 'Illuminate\\Support\\Timebox',
                'implementingClassName' => 'Illuminate\\Support\\Timebox',
                'name' => 'earlyReturn',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 14,
                        'endLine' => 14,
                        'startTokenPos' => 26,
                        'startFilePos' => 196,
                        'endTokenPos' => 26,
                        'endFilePos' => 200,
                    ],
                ],
                'docComment' => '/**
 * Indicates if the timebox is allowed to return early.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 14,
                'endLine' => 14,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'call' => [
                'name' => 'call',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 27,
                        'endLine' => 27,
                        'startColumn' => 26,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'microseconds' => [
                        'name' => 'microseconds',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 27,
                        'endLine' => 27,
                        'startColumn' => 46,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Invoke the given callback within the specified timebox minimum.
 *
 * @template TCallReturnType
 *
 * @param  (callable($this): TCallReturnType)  $callback
 * @param  int  $microseconds
 * @return TCallReturnType
 *
 * @throws \\Throwable
 */',
                'startLine' => 27,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Timebox',
                'implementingClassName' => 'Illuminate\\Support\\Timebox',
                'currentClassName' => 'Illuminate\\Support\\Timebox',
                'aliasName' => null,
            ],
            'returnEarly' => [
                'name' => 'returnEarly',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the timebox can return early.
 *
 * @return $this
 */',
                'startLine' => 57,
                'endLine' => 62,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Timebox',
                'implementingClassName' => 'Illuminate\\Support\\Timebox',
                'currentClassName' => 'Illuminate\\Support\\Timebox',
                'aliasName' => null,
            ],
            'dontReturnEarly' => [
                'name' => 'dontReturnEarly',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the timebox cannot return early.
 *
 * @return $this
 */',
                'startLine' => 69,
                'endLine' => 74,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Timebox',
                'implementingClassName' => 'Illuminate\\Support\\Timebox',
                'currentClassName' => 'Illuminate\\Support\\Timebox',
                'aliasName' => null,
            ],
            'usleep' => [
                'name' => 'usleep',
                'parameters' => [
                    'microseconds' => [
                        'name' => 'microseconds',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 82,
                        'endLine' => 82,
                        'startColumn' => 31,
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
 * Sleep for the specified number of microseconds.
 *
 * @param  int  $microseconds
 * @return void
 */',
                'startLine' => 82,
                'endLine' => 85,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Timebox',
                'implementingClassName' => 'Illuminate\\Support\\Timebox',
                'currentClassName' => 'Illuminate\\Support\\Timebox',
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
