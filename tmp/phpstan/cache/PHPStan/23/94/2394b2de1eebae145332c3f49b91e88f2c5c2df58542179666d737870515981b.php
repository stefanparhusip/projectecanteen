<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Support/Stringable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Stringable
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-48057161ead01815e85974ecd756b4d1102038e570811d840fac3a1e38cbc1d6-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Support\\Stringable',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Support/Stringable.php',
            ],
        ],
        'namespace' => 'Illuminate\\Support',
        'name' => 'Illuminate\\Support\\Stringable',
        'shortName' => 'Stringable',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 15,
        'endLine' => 1613,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'JsonSerializable',
            1 => 'ArrayAccess',
            2 => 'Stringable',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\Conditionable',
            1 => 'Illuminate\\Support\\Traits\\Dumpable',
            2 => 'Illuminate\\Support\\Traits\\Macroable',
            3 => 'Illuminate\\Support\\Traits\\Tappable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'value' => [
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'name' => 'value',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The underlying string value.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 21,
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
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 31,
                                'endLine' => 31,
                                'startTokenPos' => 105,
                                'startFilePos' => 697,
                                'endTokenPos' => 105,
                                'endFilePos' => 698,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 33,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new instance of the class.
 *
 * @param  string  $value
 */',
                'startLine' => 31,
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'after' => [
                'name' => 'after',
                'parameters' => [
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 42,
                        'endLine' => 42,
                        'startColumn' => 27,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the remainder of a string after the first occurrence of a given value.
 *
 * @param  string  $search
 * @return static
 */',
                'startLine' => 42,
                'endLine' => 45,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'afterLast' => [
                'name' => 'afterLast',
                'parameters' => [
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 53,
                        'endLine' => 53,
                        'startColumn' => 31,
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
 * Return the remainder of a string after the last occurrence of a given value.
 *
 * @param  string  $search
 * @return static
 */',
                'startLine' => 53,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'append' => [
                'name' => 'append',
                'parameters' => [
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 64,
                        'endLine' => 64,
                        'startColumn' => 28,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Append the given values to the string.
 *
 * @param  array|string  ...$values
 * @return static
 */',
                'startLine' => 64,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
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
                                'startLine' => 75,
                                'endLine' => 75,
                                'startTokenPos' => 241,
                                'startFilePos' => 1696,
                                'endTokenPos' => 241,
                                'endFilePos' => 1696,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 75,
                        'endLine' => 75,
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
 * Append a new line to the string.
 *
 * @param  int  $count
 * @return $this
 */',
                'startLine' => 75,
                'endLine' => 78,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'ascii' => [
                'name' => 'ascii',
                'parameters' => [
                    'language' => [
                        'name' => 'language',
                        'default' => [
                            'code' => '\'en\'',
                            'attributes' => [
                                'startLine' => 86,
                                'endLine' => 86,
                                'startTokenPos' => 276,
                                'startFilePos' => 1932,
                                'endTokenPos' => 276,
                                'endFilePos' => 1935,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 86,
                        'endLine' => 86,
                        'startColumn' => 27,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Transliterate a UTF-8 value to ASCII.
 *
 * @param  string  $language
 * @return static
 */',
                'startLine' => 86,
                'endLine' => 89,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'basename' => [
                'name' => 'basename',
                'parameters' => [
                    'suffix' => [
                        'name' => 'suffix',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 97,
                                'endLine' => 97,
                                'startTokenPos' => 315,
                                'startFilePos' => 2182,
                                'endTokenPos' => 315,
                                'endFilePos' => 2183,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 97,
                        'endLine' => 97,
                        'startColumn' => 30,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the trailing name component of the path.
 *
 * @param  string  $suffix
 * @return static
 */',
                'startLine' => 97,
                'endLine' => 100,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'charAt' => [
                'name' => 'charAt',
                'parameters' => [
                    'index' => [
                        'name' => 'index',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 108,
                        'endLine' => 108,
                        'startColumn' => 28,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the character at the specified index.
 *
 * @param  int  $index
 * @return string|false
 */',
                'startLine' => 108,
                'endLine' => 111,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'chopStart' => [
                'name' => 'chopStart',
                'parameters' => [
                    'needle' => [
                        'name' => 'needle',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 119,
                        'endLine' => 119,
                        'startColumn' => 31,
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
 * Remove the given string if it exists at the start of the current string.
 *
 * @param  string|array  $needle
 * @return static
 */',
                'startLine' => 119,
                'endLine' => 122,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'chopEnd' => [
                'name' => 'chopEnd',
                'parameters' => [
                    'needle' => [
                        'name' => 'needle',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 130,
                        'endLine' => 130,
                        'startColumn' => 29,
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
 * Remove the given string if it exists at the end of the current string.
 *
 * @param  string|array  $needle
 * @return static
 */',
                'startLine' => 130,
                'endLine' => 133,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'classBasename' => [
                'name' => 'classBasename',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the basename of the class path.
 *
 * @return static
 */',
                'startLine' => 140,
                'endLine' => 143,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'before' => [
                'name' => 'before',
                'parameters' => [
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 151,
                        'endLine' => 151,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the portion of a string before the first occurrence of a given value.
 *
 * @param  string  $search
 * @return static
 */',
                'startLine' => 151,
                'endLine' => 154,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'beforeLast' => [
                'name' => 'beforeLast',
                'parameters' => [
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 162,
                        'endLine' => 162,
                        'startColumn' => 32,
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
 * Get the portion of a string before the last occurrence of a given value.
 *
 * @param  string  $search
 * @return static
 */',
                'startLine' => 162,
                'endLine' => 165,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'between' => [
                'name' => 'between',
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
                        'startLine' => 174,
                        'endLine' => 174,
                        'startColumn' => 29,
                        'endColumn' => 33,
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
                        'startLine' => 174,
                        'endLine' => 174,
                        'startColumn' => 36,
                        'endColumn' => 38,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the portion of a string between two given values.
 *
 * @param  string  $from
 * @param  string  $to
 * @return static
 */',
                'startLine' => 174,
                'endLine' => 177,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'betweenFirst' => [
                'name' => 'betweenFirst',
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
                        'startLine' => 186,
                        'endLine' => 186,
                        'startColumn' => 34,
                        'endColumn' => 38,
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
                        'startLine' => 186,
                        'endLine' => 186,
                        'startColumn' => 41,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the smallest possible portion of a string between two given values.
 *
 * @param  string  $from
 * @param  string  $to
 * @return static
 */',
                'startLine' => 186,
                'endLine' => 189,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'camel' => [
                'name' => 'camel',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert a value to camel case.
 *
 * @return static
 */',
                'startLine' => 196,
                'endLine' => 199,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'contains' => [
                'name' => 'contains',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 208,
                        'endLine' => 208,
                        'startColumn' => 30,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ignoreCase' => [
                        'name' => 'ignoreCase',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 208,
                                'endLine' => 208,
                                'startTokenPos' => 667,
                                'startFilePos' => 4787,
                                'endTokenPos' => 667,
                                'endFilePos' => 4791,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 208,
                        'endLine' => 208,
                        'startColumn' => 40,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a given string contains a given substring.
 *
 * @param  string|iterable<string>  $needles
 * @param  bool  $ignoreCase
 * @return bool
 */',
                'startLine' => 208,
                'endLine' => 211,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'containsAll' => [
                'name' => 'containsAll',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 220,
                        'endLine' => 220,
                        'startColumn' => 33,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ignoreCase' => [
                        'name' => 'ignoreCase',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 220,
                                'endLine' => 220,
                                'startTokenPos' => 707,
                                'startFilePos' => 5110,
                                'endTokenPos' => 707,
                                'endFilePos' => 5114,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 220,
                        'endLine' => 220,
                        'startColumn' => 43,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a given string contains all array values.
 *
 * @param  iterable<string>  $needles
 * @param  bool  $ignoreCase
 * @return bool
 */',
                'startLine' => 220,
                'endLine' => 223,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'doesntContain' => [
                'name' => 'doesntContain',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 232,
                        'endLine' => 232,
                        'startColumn' => 35,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ignoreCase' => [
                        'name' => 'ignoreCase',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 232,
                                'endLine' => 232,
                                'startTokenPos' => 747,
                                'startFilePos' => 5453,
                                'endTokenPos' => 747,
                                'endFilePos' => 5457,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 232,
                        'endLine' => 232,
                        'startColumn' => 45,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a given string doesn\'t contain a given substring.
 *
 * @param  string|iterable<string>  $needles
 * @param  bool  $ignoreCase
 * @return bool
 */',
                'startLine' => 232,
                'endLine' => 235,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'convertCase' => [
                'name' => 'convertCase',
                'parameters' => [
                    'mode' => [
                        'name' => 'mode',
                        'default' => [
                            'code' => 'MB_CASE_FOLD',
                            'attributes' => [
                                'startLine' => 244,
                                'endLine' => 244,
                                'startTokenPos' => 786,
                                'startFilePos' => 5735,
                                'endTokenPos' => 786,
                                'endFilePos' => 5746,
                            ],
                        ],
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
                        'startLine' => 244,
                        'endLine' => 244,
                        'startColumn' => 33,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'encoding' => [
                        'name' => 'encoding',
                        'default' => [
                            'code' => '\'UTF-8\'',
                            'attributes' => [
                                'startLine' => 244,
                                'endLine' => 244,
                                'startTokenPos' => 796,
                                'startFilePos' => 5769,
                                'endTokenPos' => 796,
                                'endFilePos' => 5775,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'null',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 244,
                        'endLine' => 244,
                        'startColumn' => 59,
                        'endColumn' => 85,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the case of a string.
 *
 * @param  int  $mode
 * @param  string|null  $encoding
 * @return static
 */',
                'startLine' => 244,
                'endLine' => 247,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'deduplicate' => [
                'name' => 'deduplicate',
                'parameters' => [
                    'characters' => [
                        'name' => 'characters',
                        'default' => [
                            'code' => '\' \'',
                            'attributes' => [
                                'startLine' => 255,
                                'endLine' => 255,
                                'startTokenPos' => 842,
                                'startFilePos' => 6104,
                                'endTokenPos' => 842,
                                'endFilePos' => 6106,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'array',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 255,
                        'endLine' => 255,
                        'startColumn' => 33,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Replace consecutive instances of a given character with a single character.
 *
 * @param  array<string>|string  $characters
 * @return static
 */',
                'startLine' => 255,
                'endLine' => 258,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'dirname' => [
                'name' => 'dirname',
                'parameters' => [
                    'levels' => [
                        'name' => 'levels',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 266,
                                'endLine' => 266,
                                'startTokenPos' => 881,
                                'startFilePos' => 6345,
                                'endTokenPos' => 881,
                                'endFilePos' => 6345,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 266,
                        'endLine' => 266,
                        'startColumn' => 29,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the parent directory\'s path.
 *
 * @param  int  $levels
 * @return static
 */',
                'startLine' => 266,
                'endLine' => 269,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'endsWith' => [
                'name' => 'endsWith',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 277,
                        'endLine' => 277,
                        'startColumn' => 30,
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
 * Determine if a given string ends with a given substring.
 *
 * @param  string|iterable<string>  $needles
 * @return bool
 */',
                'startLine' => 277,
                'endLine' => 280,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'doesntEndWith' => [
                'name' => 'doesntEndWith',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 288,
                        'endLine' => 288,
                        'startColumn' => 35,
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
 * Determine if a given string doesn\'t end with a given substring.
 *
 * @param  string|iterable<string>  $needles
 * @return bool
 */',
                'startLine' => 288,
                'endLine' => 291,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'exactly' => [
                'name' => 'exactly',
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
                        'startLine' => 299,
                        'endLine' => 299,
                        'startColumn' => 29,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the string is an exact match with the given value.
 *
 * @param  \\Illuminate\\Support\\Stringable|string  $value
 * @return bool
 */',
                'startLine' => 299,
                'endLine' => 306,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'excerpt' => [
                'name' => 'excerpt',
                'parameters' => [
                    'phrase' => [
                        'name' => 'phrase',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 315,
                                'endLine' => 315,
                                'startTokenPos' => 1029,
                                'startFilePos' => 7553,
                                'endTokenPos' => 1029,
                                'endFilePos' => 7554,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 315,
                        'endLine' => 315,
                        'startColumn' => 29,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 315,
                                'endLine' => 315,
                                'startTokenPos' => 1036,
                                'startFilePos' => 7568,
                                'endTokenPos' => 1037,
                                'endFilePos' => 7569,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 315,
                        'endLine' => 315,
                        'startColumn' => 43,
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
 * Extracts an excerpt from text that matches the first instance of a phrase.
 *
 * @param  string  $phrase
 * @param  array  $options
 * @return string|null
 */',
                'startLine' => 315,
                'endLine' => 318,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'explode' => [
                'name' => 'explode',
                'parameters' => [
                    'delimiter' => [
                        'name' => 'delimiter',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 327,
                        'endLine' => 327,
                        'startColumn' => 29,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'limit' => [
                        'name' => 'limit',
                        'default' => [
                            'code' => 'PHP_INT_MAX',
                            'attributes' => [
                                'startLine' => 327,
                                'endLine' => 327,
                                'startTokenPos' => 1077,
                                'startFilePos' => 7884,
                                'endTokenPos' => 1077,
                                'endFilePos' => 7894,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 327,
                        'endLine' => 327,
                        'startColumn' => 41,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Explode the string into a collection.
 *
 * @param  string  $delimiter
 * @param  int  $limit
 * @return \\Illuminate\\Support\\Collection<int, string>
 */',
                'startLine' => 327,
                'endLine' => 330,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'split' => [
                'name' => 'split',
                'parameters' => [
                    'pattern' => [
                        'name' => 'pattern',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 27,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'limit' => [
                        'name' => 'limit',
                        'default' => [
                            'code' => '-1',
                            'attributes' => [
                                'startLine' => 340,
                                'endLine' => 340,
                                'startTokenPos' => 1120,
                                'startFilePos' => 8264,
                                'endTokenPos' => 1121,
                                'endFilePos' => 8265,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 37,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'flags' => [
                        'name' => 'flags',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 340,
                                'endLine' => 340,
                                'startTokenPos' => 1128,
                                'startFilePos' => 8277,
                                'endTokenPos' => 1128,
                                'endFilePos' => 8277,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 50,
                        'endColumn' => 59,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Split a string using a regular expression or by length.
 *
 * @param  string|int  $pattern
 * @param  int  $limit
 * @param  int  $flags
 * @return \\Illuminate\\Support\\Collection<int, string>
 */',
                'startLine' => 340,
                'endLine' => 349,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'finish' => [
                'name' => 'finish',
                'parameters' => [
                    'cap' => [
                        'name' => 'cap',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 357,
                        'endLine' => 357,
                        'startColumn' => 28,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Cap a string with a single instance of a given value.
 *
 * @param  string  $cap
 * @return static
 */',
                'startLine' => 357,
                'endLine' => 360,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'is' => [
                'name' => 'is',
                'parameters' => [
                    'pattern' => [
                        'name' => 'pattern',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 369,
                        'endLine' => 369,
                        'startColumn' => 24,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ignoreCase' => [
                        'name' => 'ignoreCase',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 369,
                                'endLine' => 369,
                                'startTokenPos' => 1269,
                                'startFilePos' => 9069,
                                'endTokenPos' => 1269,
                                'endFilePos' => 9073,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 369,
                        'endLine' => 369,
                        'startColumn' => 34,
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
 * Determine if a given string matches a given pattern.
 *
 * @param  string|iterable<string>  $pattern
 * @param  bool  $ignoreCase
 * @return bool
 */',
                'startLine' => 369,
                'endLine' => 372,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'isAscii' => [
                'name' => 'isAscii',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a given string is 7 bit ASCII.
 *
 * @return bool
 */',
                'startLine' => 379,
                'endLine' => 382,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'isJson' => [
                'name' => 'isJson',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a given string is valid JSON.
 *
 * @return bool
 */',
                'startLine' => 389,
                'endLine' => 392,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'isUrl' => [
                'name' => 'isUrl',
                'parameters' => [
                    'protocols' => [
                        'name' => 'protocols',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 400,
                                'endLine' => 400,
                                'startTokenPos' => 1360,
                                'startFilePos' => 9678,
                                'endTokenPos' => 1361,
                                'endFilePos' => 9679,
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
                        'startLine' => 400,
                        'endLine' => 400,
                        'startColumn' => 27,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a given value is a valid URL.
 *
 * @param  array  $protocols
 * @return bool
 */',
                'startLine' => 400,
                'endLine' => 403,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'isUuid' => [
                'name' => 'isUuid',
                'parameters' => [
                    'version' => [
                        'name' => 'version',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 411,
                                'endLine' => 411,
                                'startTokenPos' => 1395,
                                'startFilePos' => 9927,
                                'endTokenPos' => 1395,
                                'endFilePos' => 9930,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 411,
                        'endLine' => 411,
                        'startColumn' => 28,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a given string is a valid UUID.
 *
 * @param  int<0, 8>|\'max\'|null  $version
 * @return bool
 */',
                'startLine' => 411,
                'endLine' => 414,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'isUlid' => [
                'name' => 'isUlid',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a given string is a valid ULID.
 *
 * @return bool
 */',
                'startLine' => 421,
                'endLine' => 424,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'isEmpty' => [
                'name' => 'isEmpty',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the given string is empty.
 *
 * @return bool
 */',
                'startLine' => 431,
                'endLine' => 434,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'isNotEmpty' => [
                'name' => 'isNotEmpty',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the given string is not empty.
 *
 * @return bool
 */',
                'startLine' => 441,
                'endLine' => 444,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'kebab' => [
                'name' => 'kebab',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert a string to kebab case.
 *
 * @return static
 */',
                'startLine' => 451,
                'endLine' => 454,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'length' => [
                'name' => 'length',
                'parameters' => [
                    'encoding' => [
                        'name' => 'encoding',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 462,
                                'endLine' => 462,
                                'startTokenPos' => 1536,
                                'startFilePos' => 10864,
                                'endTokenPos' => 1536,
                                'endFilePos' => 10867,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 462,
                        'endLine' => 462,
                        'startColumn' => 28,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the length of the given string.
 *
 * @param  string|null  $encoding
 * @return int
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
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'limit' => [
                'name' => 'limit',
                'parameters' => [
                    'limit' => [
                        'name' => 'limit',
                        'default' => [
                            'code' => '100',
                            'attributes' => [
                                'startLine' => 475,
                                'endLine' => 475,
                                'startTokenPos' => 1570,
                                'startFilePos' => 11158,
                                'endTokenPos' => 1570,
                                'endFilePos' => 11160,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 475,
                        'endLine' => 475,
                        'startColumn' => 27,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'end' => [
                        'name' => 'end',
                        'default' => [
                            'code' => '\'...\'',
                            'attributes' => [
                                'startLine' => 475,
                                'endLine' => 475,
                                'startTokenPos' => 1577,
                                'startFilePos' => 11170,
                                'endTokenPos' => 1577,
                                'endFilePos' => 11174,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 475,
                        'endLine' => 475,
                        'startColumn' => 41,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'preserveWords' => [
                        'name' => 'preserveWords',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 475,
                                'endLine' => 475,
                                'startTokenPos' => 1584,
                                'startFilePos' => 11194,
                                'endTokenPos' => 1584,
                                'endFilePos' => 11198,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 475,
                        'endLine' => 475,
                        'startColumn' => 55,
                        'endColumn' => 76,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Limit the number of characters in a string.
 *
 * @param  int  $limit
 * @param  string  $end
 * @param  bool  $preserveWords
 * @return static
 */',
                'startLine' => 475,
                'endLine' => 478,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'lower' => [
                'name' => 'lower',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the given string to lower-case.
 *
 * @return static
 */',
                'startLine' => 485,
                'endLine' => 488,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'markdown' => [
                'name' => 'markdown',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 497,
                                'endLine' => 497,
                                'startTokenPos' => 1662,
                                'startFilePos' => 11690,
                                'endTokenPos' => 1663,
                                'endFilePos' => 11691,
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
                        'startLine' => 497,
                        'endLine' => 497,
                        'startColumn' => 30,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'extensions' => [
                        'name' => 'extensions',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 497,
                                'endLine' => 497,
                                'startTokenPos' => 1672,
                                'startFilePos' => 11714,
                                'endTokenPos' => 1673,
                                'endFilePos' => 11715,
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
                        'startLine' => 497,
                        'endLine' => 497,
                        'startColumn' => 51,
                        'endColumn' => 72,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert GitHub flavored Markdown into HTML.
 *
 * @param  array  $options
 * @param  array  $extensions
 * @return static
 */',
                'startLine' => 497,
                'endLine' => 500,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'inlineMarkdown' => [
                'name' => 'inlineMarkdown',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 509,
                                'endLine' => 509,
                                'startTokenPos' => 1717,
                                'startFilePos' => 12014,
                                'endTokenPos' => 1718,
                                'endFilePos' => 12015,
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
                        'startLine' => 509,
                        'endLine' => 509,
                        'startColumn' => 36,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'extensions' => [
                        'name' => 'extensions',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 509,
                                'endLine' => 509,
                                'startTokenPos' => 1727,
                                'startFilePos' => 12038,
                                'endTokenPos' => 1728,
                                'endFilePos' => 12039,
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
                        'startLine' => 509,
                        'endLine' => 509,
                        'startColumn' => 57,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert inline Markdown into HTML.
 *
 * @param  array  $options
 * @param  array  $extensions
 * @return static
 */',
                'startLine' => 509,
                'endLine' => 512,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'mask' => [
                'name' => 'mask',
                'parameters' => [
                    'character' => [
                        'name' => 'character',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 523,
                        'endLine' => 523,
                        'startColumn' => 26,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'index' => [
                        'name' => 'index',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 523,
                        'endLine' => 523,
                        'startColumn' => 38,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 523,
                                'endLine' => 523,
                                'startTokenPos' => 1776,
                                'startFilePos' => 12429,
                                'endTokenPos' => 1776,
                                'endFilePos' => 12432,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 523,
                        'endLine' => 523,
                        'startColumn' => 46,
                        'endColumn' => 59,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'encoding' => [
                        'name' => 'encoding',
                        'default' => [
                            'code' => '\'UTF-8\'',
                            'attributes' => [
                                'startLine' => 523,
                                'endLine' => 523,
                                'startTokenPos' => 1783,
                                'startFilePos' => 12447,
                                'endTokenPos' => 1783,
                                'endFilePos' => 12453,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 523,
                        'endLine' => 523,
                        'startColumn' => 62,
                        'endColumn' => 80,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Masks a portion of a string with a repeated character.
 *
 * @param  string  $character
 * @param  int  $index
 * @param  int|null  $length
 * @param  string  $encoding
 * @return static
 */',
                'startLine' => 523,
                'endLine' => 526,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'match' => [
                'name' => 'match',
                'parameters' => [
                    'pattern' => [
                        'name' => 'pattern',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 534,
                        'endLine' => 534,
                        'startColumn' => 27,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the string matching the given pattern.
 *
 * @param  string  $pattern
 * @return static
 */',
                'startLine' => 534,
                'endLine' => 537,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'isMatch' => [
                'name' => 'isMatch',
                'parameters' => [
                    'pattern' => [
                        'name' => 'pattern',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 545,
                        'endLine' => 545,
                        'startColumn' => 29,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a given string matches a given pattern.
 *
 * @param  string|iterable<string>  $pattern
 * @return bool
 */',
                'startLine' => 545,
                'endLine' => 548,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'matchAll' => [
                'name' => 'matchAll',
                'parameters' => [
                    'pattern' => [
                        'name' => 'pattern',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 556,
                        'endLine' => 556,
                        'startColumn' => 30,
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
 * Get the string matching the given pattern.
 *
 * @param  string  $pattern
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 556,
                'endLine' => 559,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'test' => [
                'name' => 'test',
                'parameters' => [
                    'pattern' => [
                        'name' => 'pattern',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 567,
                        'endLine' => 567,
                        'startColumn' => 26,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the string matches the given pattern.
 *
 * @param  string  $pattern
 * @return bool
 */',
                'startLine' => 567,
                'endLine' => 570,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'numbers' => [
                'name' => 'numbers',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove all non-numeric characters from a string.
 *
 * @return static
 */',
                'startLine' => 577,
                'endLine' => 580,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'padBoth' => [
                'name' => 'padBoth',
                'parameters' => [
                    'length' => [
                        'name' => 'length',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 589,
                        'endLine' => 589,
                        'startColumn' => 29,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'pad' => [
                        'name' => 'pad',
                        'default' => [
                            'code' => '\' \'',
                            'attributes' => [
                                'startLine' => 589,
                                'endLine' => 589,
                                'startTokenPos' => 1985,
                                'startFilePos' => 13929,
                                'endTokenPos' => 1985,
                                'endFilePos' => 13931,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 589,
                        'endLine' => 589,
                        'startColumn' => 38,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Pad both sides of the string with another.
 *
 * @param  int  $length
 * @param  string  $pad
 * @return static
 */',
                'startLine' => 589,
                'endLine' => 592,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'padLeft' => [
                'name' => 'padLeft',
                'parameters' => [
                    'length' => [
                        'name' => 'length',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 601,
                        'endLine' => 601,
                        'startColumn' => 29,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'pad' => [
                        'name' => 'pad',
                        'default' => [
                            'code' => '\' \'',
                            'attributes' => [
                                'startLine' => 601,
                                'endLine' => 601,
                                'startTokenPos' => 2030,
                                'startFilePos' => 14215,
                                'endTokenPos' => 2030,
                                'endFilePos' => 14217,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 601,
                        'endLine' => 601,
                        'startColumn' => 38,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Pad the left side of the string with another.
 *
 * @param  int  $length
 * @param  string  $pad
 * @return static
 */',
                'startLine' => 601,
                'endLine' => 604,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'padRight' => [
                'name' => 'padRight',
                'parameters' => [
                    'length' => [
                        'name' => 'length',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 613,
                        'endLine' => 613,
                        'startColumn' => 30,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'pad' => [
                        'name' => 'pad',
                        'default' => [
                            'code' => '\' \'',
                            'attributes' => [
                                'startLine' => 613,
                                'endLine' => 613,
                                'startTokenPos' => 2075,
                                'startFilePos' => 14503,
                                'endTokenPos' => 2075,
                                'endFilePos' => 14505,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 613,
                        'endLine' => 613,
                        'startColumn' => 39,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Pad the right side of the string with another.
 *
 * @param  int  $length
 * @param  string  $pad
 * @return static
 */',
                'startLine' => 613,
                'endLine' => 616,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'parseCallback' => [
                'name' => 'parseCallback',
                'parameters' => [
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 624,
                                'endLine' => 624,
                                'startTokenPos' => 2117,
                                'startFilePos' => 14802,
                                'endTokenPos' => 2117,
                                'endFilePos' => 14805,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 624,
                        'endLine' => 624,
                        'startColumn' => 35,
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
 * Parse a Class@method style callback into class and method.
 *
 * @param  string|null  $default
 * @return array<int, string|null>
 */',
                'startLine' => 624,
                'endLine' => 627,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'pipe' => [
                'name' => 'pipe',
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
                        'startLine' => 635,
                        'endLine' => 635,
                        'startColumn' => 26,
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
 * Call the given callback and return a new string.
 *
 * @param  callable  $callback
 * @return static
 */',
                'startLine' => 635,
                'endLine' => 638,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'plural' => [
                'name' => 'plural',
                'parameters' => [
                    'count' => [
                        'name' => 'count',
                        'default' => [
                            'code' => '2',
                            'attributes' => [
                                'startLine' => 647,
                                'endLine' => 647,
                                'startTokenPos' => 2181,
                                'startFilePos' => 15326,
                                'endTokenPos' => 2181,
                                'endFilePos' => 15326,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 647,
                        'endLine' => 647,
                        'startColumn' => 28,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'prependCount' => [
                        'name' => 'prependCount',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 647,
                                'endLine' => 647,
                                'startTokenPos' => 2188,
                                'startFilePos' => 15345,
                                'endTokenPos' => 2188,
                                'endFilePos' => 15349,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 647,
                        'endLine' => 647,
                        'startColumn' => 40,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the plural form of an English word.
 *
 * @param  int|array|\\Countable  $count
 * @param  bool  $prependCount
 * @return static
 */',
                'startLine' => 647,
                'endLine' => 650,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'pluralStudly' => [
                'name' => 'pluralStudly',
                'parameters' => [
                    'count' => [
                        'name' => 'count',
                        'default' => [
                            'code' => '2',
                            'attributes' => [
                                'startLine' => 658,
                                'endLine' => 658,
                                'startTokenPos' => 2230,
                                'startFilePos' => 15644,
                                'endTokenPos' => 2230,
                                'endFilePos' => 15644,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 658,
                        'endLine' => 658,
                        'startColumn' => 34,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Pluralize the last word of an English, studly caps case string.
 *
 * @param  int|array|\\Countable  $count
 * @return static
 */',
                'startLine' => 658,
                'endLine' => 661,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'pluralPascal' => [
                'name' => 'pluralPascal',
                'parameters' => [
                    'count' => [
                        'name' => 'count',
                        'default' => [
                            'code' => '2',
                            'attributes' => [
                                'startLine' => 669,
                                'endLine' => 669,
                                'startTokenPos' => 2269,
                                'startFilePos' => 15930,
                                'endTokenPos' => 2269,
                                'endFilePos' => 15930,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 669,
                        'endLine' => 669,
                        'startColumn' => 34,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Pluralize the last word of an English, Pascal caps case string.
 *
 * @param  int|array|\\Countable  $count
 * @return static
 */',
                'startLine' => 669,
                'endLine' => 672,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'position' => [
                'name' => 'position',
                'parameters' => [
                    'needle' => [
                        'name' => 'needle',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 682,
                        'endLine' => 682,
                        'startColumn' => 30,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'offset' => [
                        'name' => 'offset',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 682,
                                'endLine' => 682,
                                'startTokenPos' => 2311,
                                'startFilePos' => 16296,
                                'endTokenPos' => 2311,
                                'endFilePos' => 16296,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 682,
                        'endLine' => 682,
                        'startColumn' => 39,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'encoding' => [
                        'name' => 'encoding',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 682,
                                'endLine' => 682,
                                'startTokenPos' => 2318,
                                'startFilePos' => 16311,
                                'endTokenPos' => 2318,
                                'endFilePos' => 16314,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 682,
                        'endLine' => 682,
                        'startColumn' => 52,
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
 * Find the multi-byte safe position of the first occurrence of the given substring.
 *
 * @param  string  $needle
 * @param  int  $offset
 * @param  string|null  $encoding
 * @return int|false
 */',
                'startLine' => 682,
                'endLine' => 685,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'prepend' => [
                'name' => 'prepend',
                'parameters' => [
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 693,
                        'endLine' => 693,
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
 * Prepend the given values to the string.
 *
 * @param  string  ...$values
 * @return static
 */',
                'startLine' => 693,
                'endLine' => 696,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'remove' => [
                'name' => 'remove',
                'parameters' => [
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 705,
                        'endLine' => 705,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'caseSensitive' => [
                        'name' => 'caseSensitive',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 705,
                                'endLine' => 705,
                                'startTokenPos' => 2397,
                                'startFilePos' => 16891,
                                'endTokenPos' => 2397,
                                'endFilePos' => 16894,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 705,
                        'endLine' => 705,
                        'startColumn' => 37,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove any occurrence of the given string in the subject.
 *
 * @param  string|iterable<string>  $search
 * @param  bool  $caseSensitive
 * @return static
 */',
                'startLine' => 705,
                'endLine' => 708,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'reverse' => [
                'name' => 'reverse',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Reverse the string.
 *
 * @return static
 */',
                'startLine' => 715,
                'endLine' => 718,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'repeat' => [
                'name' => 'repeat',
                'parameters' => [
                    'times' => [
                        'name' => 'times',
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
                        'startLine' => 726,
                        'endLine' => 726,
                        'startColumn' => 28,
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
 * Repeat the string.
 *
 * @param  int  $times
 * @return static
 */',
                'startLine' => 726,
                'endLine' => 729,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'replace' => [
                'name' => 'replace',
                'parameters' => [
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 739,
                        'endLine' => 739,
                        'startColumn' => 29,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 739,
                        'endLine' => 739,
                        'startColumn' => 38,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'caseSensitive' => [
                        'name' => 'caseSensitive',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 739,
                                'endLine' => 739,
                                'startTokenPos' => 2511,
                                'startFilePos' => 17664,
                                'endTokenPos' => 2511,
                                'endFilePos' => 17667,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 739,
                        'endLine' => 739,
                        'startColumn' => 48,
                        'endColumn' => 68,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Replace the given value in the given string.
 *
 * @param  string|iterable<string>  $search
 * @param  string|iterable<string>  $replace
 * @param  bool  $caseSensitive
 * @return static
 */',
                'startLine' => 739,
                'endLine' => 742,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'replaceArray' => [
                'name' => 'replaceArray',
                'parameters' => [
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 751,
                        'endLine' => 751,
                        'startColumn' => 34,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 751,
                        'endLine' => 751,
                        'startColumn' => 43,
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
 * Replace a given value in the string sequentially with an array.
 *
 * @param  string  $search
 * @param  iterable<string>  $replace
 * @return static
 */',
                'startLine' => 751,
                'endLine' => 754,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'replaceFirst' => [
                'name' => 'replaceFirst',
                'parameters' => [
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 763,
                        'endLine' => 763,
                        'startColumn' => 34,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 763,
                        'endLine' => 763,
                        'startColumn' => 43,
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
 * Replace the first occurrence of a given value in the string.
 *
 * @param  string  $search
 * @param  string  $replace
 * @return static
 */',
                'startLine' => 763,
                'endLine' => 766,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'replaceStart' => [
                'name' => 'replaceStart',
                'parameters' => [
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 775,
                        'endLine' => 775,
                        'startColumn' => 34,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 775,
                        'endLine' => 775,
                        'startColumn' => 43,
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
 * Replace the first occurrence of the given value if it appears at the start of the string.
 *
 * @param  string  $search
 * @param  string  $replace
 * @return static
 */',
                'startLine' => 775,
                'endLine' => 778,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'replaceLast' => [
                'name' => 'replaceLast',
                'parameters' => [
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 787,
                        'endLine' => 787,
                        'startColumn' => 33,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 787,
                        'endLine' => 787,
                        'startColumn' => 42,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Replace the last occurrence of a given value in the string.
 *
 * @param  string  $search
 * @param  string  $replace
 * @return static
 */',
                'startLine' => 787,
                'endLine' => 790,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'replaceEnd' => [
                'name' => 'replaceEnd',
                'parameters' => [
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 799,
                        'endLine' => 799,
                        'startColumn' => 32,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 799,
                        'endLine' => 799,
                        'startColumn' => 41,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Replace the last occurrence of a given value if it appears at the end of the string.
 *
 * @param  string  $search
 * @param  string  $replace
 * @return static
 */',
                'startLine' => 799,
                'endLine' => 802,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'replaceMatches' => [
                'name' => 'replaceMatches',
                'parameters' => [
                    'pattern' => [
                        'name' => 'pattern',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 812,
                        'endLine' => 812,
                        'startColumn' => 36,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 812,
                        'endLine' => 812,
                        'startColumn' => 46,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'limit' => [
                        'name' => 'limit',
                        'default' => [
                            'code' => '-1',
                            'attributes' => [
                                'startLine' => 812,
                                'endLine' => 812,
                                'startTokenPos' => 2767,
                                'startFilePos' => 19723,
                                'endTokenPos' => 2768,
                                'endFilePos' => 19724,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 812,
                        'endLine' => 812,
                        'startColumn' => 56,
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
 * Replace the patterns matching the given regular expression.
 *
 * @param  array|string  $pattern
 * @param  \\Closure|string[]|string  $replace
 * @param  int  $limit
 * @return static
 */',
                'startLine' => 812,
                'endLine' => 819,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'scan' => [
                'name' => 'scan',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 827,
                        'endLine' => 827,
                        'startColumn' => 26,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Parse input from a string to a collection, according to a format.
 *
 * @param  string  $format
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 827,
                'endLine' => 830,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'squish' => [
                'name' => 'squish',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove all "extra" blank space from the given string.
 *
 * @return static
 */',
                'startLine' => 837,
                'endLine' => 840,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'start' => [
                'name' => 'start',
                'parameters' => [
                    'prefix' => [
                        'name' => 'prefix',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 848,
                        'endLine' => 848,
                        'startColumn' => 27,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Begin a string with a single instance of a given value.
 *
 * @param  string  $prefix
 * @return static
 */',
                'startLine' => 848,
                'endLine' => 851,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'stripTags' => [
                'name' => 'stripTags',
                'parameters' => [
                    'allowedTags' => [
                        'name' => 'allowedTags',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 859,
                                'endLine' => 859,
                                'startTokenPos' => 2948,
                                'startFilePos' => 20900,
                                'endTokenPos' => 2948,
                                'endFilePos' => 20903,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 859,
                        'endLine' => 859,
                        'startColumn' => 31,
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
 * Strip HTML and PHP tags from the given string.
 *
 * @param  string[]|string|null  $allowedTags
 * @return static
 */',
                'startLine' => 859,
                'endLine' => 862,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'upper' => [
                'name' => 'upper',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the given string to upper-case.
 *
 * @return static
 */',
                'startLine' => 869,
                'endLine' => 872,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'title' => [
                'name' => 'title',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the given string to proper case.
 *
 * @return static
 */',
                'startLine' => 879,
                'endLine' => 882,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'headline' => [
                'name' => 'headline',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the given string to proper case for each word.
 *
 * @return static
 */',
                'startLine' => 889,
                'endLine' => 892,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'apa' => [
                'name' => 'apa',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the given string to APA-style title case.
 *
 * @return static
 */',
                'startLine' => 899,
                'endLine' => 902,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'transliterate' => [
                'name' => 'transliterate',
                'parameters' => [
                    'unknown' => [
                        'name' => 'unknown',
                        'default' => [
                            'code' => '\'?\'',
                            'attributes' => [
                                'startLine' => 911,
                                'endLine' => 911,
                                'startTokenPos' => 3109,
                                'startFilePos' => 21986,
                                'endTokenPos' => 3109,
                                'endFilePos' => 21988,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 911,
                        'endLine' => 911,
                        'startColumn' => 35,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'strict' => [
                        'name' => 'strict',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 911,
                                'endLine' => 911,
                                'startTokenPos' => 3116,
                                'startFilePos' => 22001,
                                'endTokenPos' => 3116,
                                'endFilePos' => 22005,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 911,
                        'endLine' => 911,
                        'startColumn' => 51,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Transliterate a string to its closest ASCII representation.
 *
 * @param  string|null  $unknown
 * @param  bool|null  $strict
 * @return static
 */',
                'startLine' => 911,
                'endLine' => 914,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'singular' => [
                'name' => 'singular',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the singular form of an English word.
 *
 * @return static
 */',
                'startLine' => 921,
                'endLine' => 924,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'slug' => [
                'name' => 'slug',
                'parameters' => [
                    'separator' => [
                        'name' => 'separator',
                        'default' => [
                            'code' => '\'-\'',
                            'attributes' => [
                                'startLine' => 934,
                                'endLine' => 934,
                                'startTokenPos' => 3189,
                                'startFilePos' => 22559,
                                'endTokenPos' => 3189,
                                'endFilePos' => 22561,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 934,
                        'endLine' => 934,
                        'startColumn' => 26,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'language' => [
                        'name' => 'language',
                        'default' => [
                            'code' => '\'en\'',
                            'attributes' => [
                                'startLine' => 934,
                                'endLine' => 934,
                                'startTokenPos' => 3196,
                                'startFilePos' => 22576,
                                'endTokenPos' => 3196,
                                'endFilePos' => 22579,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 934,
                        'endLine' => 934,
                        'startColumn' => 44,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'dictionary' => [
                        'name' => 'dictionary',
                        'default' => [
                            'code' => '[\'@\' => \'at\']',
                            'attributes' => [
                                'startLine' => 934,
                                'endLine' => 934,
                                'startTokenPos' => 3203,
                                'startFilePos' => 22596,
                                'endTokenPos' => 3209,
                                'endFilePos' => 22608,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 934,
                        'endLine' => 934,
                        'startColumn' => 62,
                        'endColumn' => 88,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Generate a URL friendly "slug" from a given string.
 *
 * @param  string  $separator
 * @param  string|null  $language
 * @param  array<string, string>  $dictionary
 * @return static
 */',
                'startLine' => 934,
                'endLine' => 937,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'snake' => [
                'name' => 'snake',
                'parameters' => [
                    'delimiter' => [
                        'name' => 'delimiter',
                        'default' => [
                            'code' => '\'_\'',
                            'attributes' => [
                                'startLine' => 945,
                                'endLine' => 945,
                                'startTokenPos' => 3254,
                                'startFilePos' => 22869,
                                'endTokenPos' => 3254,
                                'endFilePos' => 22871,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 945,
                        'endLine' => 945,
                        'startColumn' => 27,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert a string to snake case.
 *
 * @param  string  $delimiter
 * @return static
 */',
                'startLine' => 945,
                'endLine' => 948,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'startsWith' => [
                'name' => 'startsWith',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 956,
                        'endLine' => 956,
                        'startColumn' => 32,
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
 * Determine if a given string starts with a given substring.
 *
 * @param  string|iterable<string>  $needles
 * @return bool
 */',
                'startLine' => 956,
                'endLine' => 959,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'doesntStartWith' => [
                'name' => 'doesntStartWith',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 967,
                        'endLine' => 967,
                        'startColumn' => 37,
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
 * Determine if a given string doesn\'t start with a given substring.
 *
 * @param  string|iterable<string>  $needles
 * @return bool
 */',
                'startLine' => 967,
                'endLine' => 970,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'studly' => [
                'name' => 'studly',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert a value to studly caps case.
 *
 * @return static
 */',
                'startLine' => 977,
                'endLine' => 980,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'pascal' => [
                'name' => 'pascal',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the string to Pascal case.
 *
 * @return static
 */',
                'startLine' => 987,
                'endLine' => 990,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'substr' => [
                'name' => 'substr',
                'parameters' => [
                    'start' => [
                        'name' => 'start',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1000,
                        'endLine' => 1000,
                        'startColumn' => 28,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1000,
                                'endLine' => 1000,
                                'startTokenPos' => 3418,
                                'startFilePos' => 24143,
                                'endTokenPos' => 3418,
                                'endFilePos' => 24146,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1000,
                        'endLine' => 1000,
                        'startColumn' => 36,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'encoding' => [
                        'name' => 'encoding',
                        'default' => [
                            'code' => '\'UTF-8\'',
                            'attributes' => [
                                'startLine' => 1000,
                                'endLine' => 1000,
                                'startTokenPos' => 3425,
                                'startFilePos' => 24161,
                                'endTokenPos' => 3425,
                                'endFilePos' => 24167,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1000,
                        'endLine' => 1000,
                        'startColumn' => 52,
                        'endColumn' => 70,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the portion of the string specified by the start and length parameters.
 *
 * @param  int  $start
 * @param  int|null  $length
 * @param  string  $encoding
 * @return static
 */',
                'startLine' => 1000,
                'endLine' => 1003,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'substrCount' => [
                'name' => 'substrCount',
                'parameters' => [
                    'needle' => [
                        'name' => 'needle',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1013,
                        'endLine' => 1013,
                        'startColumn' => 33,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'offset' => [
                        'name' => 'offset',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 1013,
                                'endLine' => 1013,
                                'startTokenPos' => 3473,
                                'startFilePos' => 24502,
                                'endTokenPos' => 3473,
                                'endFilePos' => 24502,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1013,
                        'endLine' => 1013,
                        'startColumn' => 42,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1013,
                                'endLine' => 1013,
                                'startTokenPos' => 3480,
                                'startFilePos' => 24515,
                                'endTokenPos' => 3480,
                                'endFilePos' => 24518,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1013,
                        'endLine' => 1013,
                        'startColumn' => 55,
                        'endColumn' => 68,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the number of substring occurrences.
 *
 * @param  string  $needle
 * @param  int  $offset
 * @param  int|null  $length
 * @return int
 */',
                'startLine' => 1013,
                'endLine' => 1016,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'substrReplace' => [
                'name' => 'substrReplace',
                'parameters' => [
                    'replace' => [
                        'name' => 'replace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1026,
                        'endLine' => 1026,
                        'startColumn' => 35,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'offset' => [
                        'name' => 'offset',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 1026,
                                'endLine' => 1026,
                                'startTokenPos' => 3523,
                                'startFilePos' => 24871,
                                'endTokenPos' => 3523,
                                'endFilePos' => 24871,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1026,
                        'endLine' => 1026,
                        'startColumn' => 45,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1026,
                                'endLine' => 1026,
                                'startTokenPos' => 3530,
                                'startFilePos' => 24884,
                                'endTokenPos' => 3530,
                                'endFilePos' => 24887,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1026,
                        'endLine' => 1026,
                        'startColumn' => 58,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Replace text within a portion of a string.
 *
 * @param  string|string[]  $replace
 * @param  int|int[]  $offset
 * @param  int|int[]|null  $length
 * @return static
 */',
                'startLine' => 1026,
                'endLine' => 1029,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'swap' => [
                'name' => 'swap',
                'parameters' => [
                    'map' => [
                        'name' => 'map',
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
                        'startLine' => 1037,
                        'endLine' => 1037,
                        'startColumn' => 26,
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
 * Swap multiple keywords in a string with other keywords.
 *
 * @param  array  $map
 * @return static
 */',
                'startLine' => 1037,
                'endLine' => 1040,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'take' => [
                'name' => 'take',
                'parameters' => [
                    'limit' => [
                        'name' => 'limit',
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
                        'startLine' => 1048,
                        'endLine' => 1048,
                        'startColumn' => 26,
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
 * Take the first or last {$limit} characters.
 *
 * @param  int  $limit
 * @return static
 */',
                'startLine' => 1048,
                'endLine' => 1055,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'trim' => [
                'name' => 'trim',
                'parameters' => [
                    'characters' => [
                        'name' => 'characters',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1063,
                                'endLine' => 1063,
                                'startTokenPos' => 3664,
                                'startFilePos' => 25696,
                                'endTokenPos' => 3664,
                                'endFilePos' => 25699,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1063,
                        'endLine' => 1063,
                        'startColumn' => 26,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Trim the string of the given characters.
 *
 * @param  string|null  $characters
 * @return static
 */',
                'startLine' => 1063,
                'endLine' => 1066,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'ltrim' => [
                'name' => 'ltrim',
                'parameters' => [
                    'characters' => [
                        'name' => 'characters',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1074,
                                'endLine' => 1074,
                                'startTokenPos' => 3711,
                                'startFilePos' => 25980,
                                'endTokenPos' => 3711,
                                'endFilePos' => 25983,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1074,
                        'endLine' => 1074,
                        'startColumn' => 27,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Left trim the string of the given characters.
 *
 * @param  string|null  $characters
 * @return static
 */',
                'startLine' => 1074,
                'endLine' => 1077,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'rtrim' => [
                'name' => 'rtrim',
                'parameters' => [
                    'characters' => [
                        'name' => 'characters',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1085,
                                'endLine' => 1085,
                                'startTokenPos' => 3758,
                                'startFilePos' => 26266,
                                'endTokenPos' => 3758,
                                'endFilePos' => 26269,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1085,
                        'endLine' => 1085,
                        'startColumn' => 27,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Right trim the string of the given characters.
 *
 * @param  string|null  $characters
 * @return static
 */',
                'startLine' => 1085,
                'endLine' => 1088,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'lcfirst' => [
                'name' => 'lcfirst',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Make a string\'s first character lowercase.
 *
 * @return static
 */',
                'startLine' => 1095,
                'endLine' => 1098,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'ucfirst' => [
                'name' => 'ucfirst',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Make a string\'s first character uppercase.
 *
 * @return static
 */',
                'startLine' => 1105,
                'endLine' => 1108,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'ucwords' => [
                'name' => 'ucwords',
                'parameters' => [
                    'separators' => [
                        'name' => 'separators',
                        'default' => [
                            'code' => '" \\t\\r\\n\\f\\v"',
                            'attributes' => [
                                'startLine' => 1116,
                                'endLine' => 1116,
                                'startTokenPos' => 3867,
                                'startFilePos' => 26945,
                                'endTokenPos' => 3867,
                                'endFilePos' => 26957,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1116,
                        'endLine' => 1116,
                        'startColumn' => 29,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Capitalize the first character of each word in a string.
 *
 * @param  string  $separators
 * @return static
 */',
                'startLine' => 1116,
                'endLine' => 1119,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'ucsplit' => [
                'name' => 'ucsplit',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Split a string by uppercase characters.
 *
 * @return \\Illuminate\\Support\\Collection<int, string>
 */',
                'startLine' => 1126,
                'endLine' => 1129,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenContains' => [
                'name' => 'whenContains',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1139,
                        'endLine' => 1139,
                        'startColumn' => 34,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1139,
                        'endLine' => 1139,
                        'startColumn' => 44,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1139,
                                'endLine' => 1139,
                                'startTokenPos' => 3943,
                                'startFilePos' => 27581,
                                'endTokenPos' => 3943,
                                'endFilePos' => 27584,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1139,
                        'endLine' => 1139,
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
 * Execute the given callback if the string contains a given substring.
 *
 * @param  string|iterable<string>  $needles
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1139,
                'endLine' => 1142,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenContainsAll' => [
                'name' => 'whenContainsAll',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
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
                        'startLine' => 1152,
                        'endLine' => 1152,
                        'startColumn' => 37,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1152,
                        'endLine' => 1152,
                        'startColumn' => 53,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1152,
                                'endLine' => 1152,
                                'startTokenPos' => 3991,
                                'startFilePos' => 27986,
                                'endTokenPos' => 3991,
                                'endFilePos' => 27989,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1152,
                        'endLine' => 1152,
                        'startColumn' => 64,
                        'endColumn' => 78,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given callback if the string contains all array values.
 *
 * @param  iterable<string>  $needles
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1152,
                'endLine' => 1155,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenEmpty' => [
                'name' => 'whenEmpty',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1164,
                        'endLine' => 1164,
                        'startColumn' => 31,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1164,
                                'endLine' => 1164,
                                'startTokenPos' => 4034,
                                'startFilePos' => 28313,
                                'endTokenPos' => 4034,
                                'endFilePos' => 28316,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1164,
                        'endLine' => 1164,
                        'startColumn' => 42,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given callback if the string is empty.
 *
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1164,
                'endLine' => 1167,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenNotEmpty' => [
                'name' => 'whenNotEmpty',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1176,
                        'endLine' => 1176,
                        'startColumn' => 34,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1176,
                                'endLine' => 1176,
                                'startTokenPos' => 4076,
                                'startFilePos' => 28635,
                                'endTokenPos' => 4076,
                                'endFilePos' => 28638,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1176,
                        'endLine' => 1176,
                        'startColumn' => 45,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given callback if the string is not empty.
 *
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1176,
                'endLine' => 1179,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenEndsWith' => [
                'name' => 'whenEndsWith',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1189,
                        'endLine' => 1189,
                        'startColumn' => 34,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1189,
                        'endLine' => 1189,
                        'startColumn' => 44,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1189,
                                'endLine' => 1189,
                                'startTokenPos' => 4121,
                                'startFilePos' => 29034,
                                'endTokenPos' => 4121,
                                'endFilePos' => 29037,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1189,
                        'endLine' => 1189,
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
 * Execute the given callback if the string ends with a given substring.
 *
 * @param  string|iterable<string>  $needles
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1189,
                'endLine' => 1192,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenDoesntEndWith' => [
                'name' => 'whenDoesntEndWith',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1202,
                        'endLine' => 1202,
                        'startColumn' => 39,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1202,
                        'endLine' => 1202,
                        'startColumn' => 49,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1202,
                                'endLine' => 1202,
                                'startTokenPos' => 4167,
                                'startFilePos' => 29451,
                                'endTokenPos' => 4167,
                                'endFilePos' => 29454,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1202,
                        'endLine' => 1202,
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
 * Execute the given callback if the string doesn\'t end with a given substring.
 *
 * @param  string|iterable<string>  $needles
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1202,
                'endLine' => 1205,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenExactly' => [
                'name' => 'whenExactly',
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
                        'startLine' => 1215,
                        'endLine' => 1215,
                        'startColumn' => 33,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1215,
                        'endLine' => 1215,
                        'startColumn' => 41,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1215,
                                'endLine' => 1215,
                                'startTokenPos' => 4213,
                                'startFilePos' => 29850,
                                'endTokenPos' => 4213,
                                'endFilePos' => 29853,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1215,
                        'endLine' => 1215,
                        'startColumn' => 52,
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
 * Execute the given callback if the string is an exact match with the given value.
 *
 * @param  string  $value
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1215,
                'endLine' => 1218,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenNotExactly' => [
                'name' => 'whenNotExactly',
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
                        'startLine' => 1228,
                        'endLine' => 1228,
                        'startColumn' => 36,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1228,
                        'endLine' => 1228,
                        'startColumn' => 44,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1228,
                                'endLine' => 1228,
                                'startTokenPos' => 4259,
                                'startFilePos' => 30248,
                                'endTokenPos' => 4259,
                                'endFilePos' => 30251,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1228,
                        'endLine' => 1228,
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
 * Execute the given callback if the string is not an exact match with the given value.
 *
 * @param  string  $value
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1228,
                'endLine' => 1231,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenIs' => [
                'name' => 'whenIs',
                'parameters' => [
                    'pattern' => [
                        'name' => 'pattern',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1241,
                        'endLine' => 1241,
                        'startColumn' => 28,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1241,
                        'endLine' => 1241,
                        'startColumn' => 38,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1241,
                                'endLine' => 1241,
                                'startTokenPos' => 4307,
                                'startFilePos' => 30642,
                                'endTokenPos' => 4307,
                                'endFilePos' => 30645,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1241,
                        'endLine' => 1241,
                        'startColumn' => 49,
                        'endColumn' => 63,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given callback if the string matches a given pattern.
 *
 * @param  string|iterable<string>  $pattern
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1241,
                'endLine' => 1244,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenIsAscii' => [
                'name' => 'whenIsAscii',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1253,
                        'endLine' => 1253,
                        'startColumn' => 33,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1253,
                                'endLine' => 1253,
                                'startTokenPos' => 4350,
                                'startFilePos' => 30968,
                                'endTokenPos' => 4350,
                                'endFilePos' => 30971,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1253,
                        'endLine' => 1253,
                        'startColumn' => 44,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given callback if the string is 7 bit ASCII.
 *
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1253,
                'endLine' => 1256,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenIsUuid' => [
                'name' => 'whenIsUuid',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1265,
                        'endLine' => 1265,
                        'startColumn' => 32,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1265,
                                'endLine' => 1265,
                                'startTokenPos' => 4392,
                                'startFilePos' => 31291,
                                'endTokenPos' => 4392,
                                'endFilePos' => 31294,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1265,
                        'endLine' => 1265,
                        'startColumn' => 43,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given callback if the string is a valid UUID.
 *
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1265,
                'endLine' => 1268,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenIsUlid' => [
                'name' => 'whenIsUlid',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1277,
                        'endLine' => 1277,
                        'startColumn' => 32,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1277,
                                'endLine' => 1277,
                                'startTokenPos' => 4434,
                                'startFilePos' => 31613,
                                'endTokenPos' => 4434,
                                'endFilePos' => 31616,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1277,
                        'endLine' => 1277,
                        'startColumn' => 43,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given callback if the string is a valid ULID.
 *
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1277,
                'endLine' => 1280,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenStartsWith' => [
                'name' => 'whenStartsWith',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1290,
                        'endLine' => 1290,
                        'startColumn' => 36,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1290,
                        'endLine' => 1290,
                        'startColumn' => 46,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1290,
                                'endLine' => 1290,
                                'startTokenPos' => 4479,
                                'startFilePos' => 32012,
                                'endTokenPos' => 4479,
                                'endFilePos' => 32015,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1290,
                        'endLine' => 1290,
                        'startColumn' => 57,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given callback if the string starts with a given substring.
 *
 * @param  string|iterable<string>  $needles
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1290,
                'endLine' => 1293,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenDoesntStartWith' => [
                'name' => 'whenDoesntStartWith',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1303,
                        'endLine' => 1303,
                        'startColumn' => 41,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1303,
                        'endLine' => 1303,
                        'startColumn' => 51,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1303,
                                'endLine' => 1303,
                                'startTokenPos' => 4525,
                                'startFilePos' => 32435,
                                'endTokenPos' => 4525,
                                'endFilePos' => 32438,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1303,
                        'endLine' => 1303,
                        'startColumn' => 62,
                        'endColumn' => 76,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given callback if the string doesn\'t start with a given substring.
 *
 * @param  string|iterable<string>  $needles
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1303,
                'endLine' => 1306,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'whenTest' => [
                'name' => 'whenTest',
                'parameters' => [
                    'pattern' => [
                        'name' => 'pattern',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1316,
                        'endLine' => 1316,
                        'startColumn' => 30,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1316,
                        'endLine' => 1316,
                        'startColumn' => 40,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1316,
                                'endLine' => 1316,
                                'startTokenPos' => 4571,
                                'startFilePos' => 32824,
                                'endTokenPos' => 4571,
                                'endFilePos' => 32827,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1316,
                        'endLine' => 1316,
                        'startColumn' => 51,
                        'endColumn' => 65,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given callback if the string matches the given pattern.
 *
 * @param  string  $pattern
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return static
 */',
                'startLine' => 1316,
                'endLine' => 1319,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'words' => [
                'name' => 'words',
                'parameters' => [
                    'words' => [
                        'name' => 'words',
                        'default' => [
                            'code' => '100',
                            'attributes' => [
                                'startLine' => 1328,
                                'endLine' => 1328,
                                'startTokenPos' => 4611,
                                'startFilePos' => 33096,
                                'endTokenPos' => 4611,
                                'endFilePos' => 33098,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1328,
                        'endLine' => 1328,
                        'startColumn' => 27,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'end' => [
                        'name' => 'end',
                        'default' => [
                            'code' => '\'...\'',
                            'attributes' => [
                                'startLine' => 1328,
                                'endLine' => 1328,
                                'startTokenPos' => 4618,
                                'startFilePos' => 33108,
                                'endTokenPos' => 4618,
                                'endFilePos' => 33112,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1328,
                        'endLine' => 1328,
                        'startColumn' => 41,
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
 * Limit the number of words in a string.
 *
 * @param  int  $words
 * @param  string  $end
 * @return static
 */',
                'startLine' => 1328,
                'endLine' => 1331,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'wordCount' => [
                'name' => 'wordCount',
                'parameters' => [
                    'characters' => [
                        'name' => 'characters',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1339,
                                'endLine' => 1339,
                                'startTokenPos' => 4660,
                                'startFilePos' => 33371,
                                'endTokenPos' => 4660,
                                'endFilePos' => 33374,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1339,
                        'endLine' => 1339,
                        'startColumn' => 31,
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
 * Get the number of words a string contains.
 *
 * @param  string|null  $characters
 * @return int
 */',
                'startLine' => 1339,
                'endLine' => 1342,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'wordWrap' => [
                'name' => 'wordWrap',
                'parameters' => [
                    'characters' => [
                        'name' => 'characters',
                        'default' => [
                            'code' => '75',
                            'attributes' => [
                                'startLine' => 1352,
                                'endLine' => 1352,
                                'startTokenPos' => 4694,
                                'startFilePos' => 33687,
                                'endTokenPos' => 4694,
                                'endFilePos' => 33688,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1352,
                        'endLine' => 1352,
                        'startColumn' => 30,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'break' => [
                        'name' => 'break',
                        'default' => [
                            'code' => '"\\n"',
                            'attributes' => [
                                'startLine' => 1352,
                                'endLine' => 1352,
                                'startTokenPos' => 4701,
                                'startFilePos' => 33700,
                                'endTokenPos' => 4701,
                                'endFilePos' => 33703,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1352,
                        'endLine' => 1352,
                        'startColumn' => 48,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'cutLongWords' => [
                        'name' => 'cutLongWords',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1352,
                                'endLine' => 1352,
                                'startTokenPos' => 4708,
                                'startFilePos' => 33722,
                                'endTokenPos' => 4708,
                                'endFilePos' => 33726,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1352,
                        'endLine' => 1352,
                        'startColumn' => 63,
                        'endColumn' => 83,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Wrap a string to a given number of characters.
 *
 * @param  int  $characters
 * @param  string  $break
 * @param  bool  $cutLongWords
 * @return static
 */',
                'startLine' => 1352,
                'endLine' => 1355,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'wrap' => [
                'name' => 'wrap',
                'parameters' => [
                    'before' => [
                        'name' => 'before',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1364,
                        'endLine' => 1364,
                        'startColumn' => 26,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'after' => [
                        'name' => 'after',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1364,
                                'endLine' => 1364,
                                'startTokenPos' => 4756,
                                'startFilePos' => 34035,
                                'endTokenPos' => 4756,
                                'endFilePos' => 34038,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1364,
                        'endLine' => 1364,
                        'startColumn' => 35,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Wrap the string with the given strings.
 *
 * @param  string  $before
 * @param  string|null  $after
 * @return static
 */',
                'startLine' => 1364,
                'endLine' => 1367,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'unwrap' => [
                'name' => 'unwrap',
                'parameters' => [
                    'before' => [
                        'name' => 'before',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1376,
                        'endLine' => 1376,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'after' => [
                        'name' => 'after',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1376,
                                'endLine' => 1376,
                                'startTokenPos' => 4801,
                                'startFilePos' => 34328,
                                'endTokenPos' => 4801,
                                'endFilePos' => 34331,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1376,
                        'endLine' => 1376,
                        'startColumn' => 37,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Unwrap the string with the given strings.
 *
 * @param  string  $before
 * @param  string|null  $after
 * @return static
 */',
                'startLine' => 1376,
                'endLine' => 1379,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'toHtmlString' => [
                'name' => 'toHtmlString',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the string into a `HtmlString` instance.
 *
 * @return \\Illuminate\\Support\\HtmlString
 */',
                'startLine' => 1386,
                'endLine' => 1389,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'toBase64' => [
                'name' => 'toBase64',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the string to Base64 encoding.
 *
 * @return static
 */',
                'startLine' => 1396,
                'endLine' => 1399,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'fromBase64' => [
                'name' => 'fromBase64',
                'parameters' => [
                    'strict' => [
                        'name' => 'strict',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1407,
                                'endLine' => 1407,
                                'startTokenPos' => 4898,
                                'startFilePos' => 34983,
                                'endTokenPos' => 4898,
                                'endFilePos' => 34987,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1407,
                        'endLine' => 1407,
                        'startColumn' => 32,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Decode the Base64 encoded string.
 *
 * @param  bool  $strict
 * @return static
 */',
                'startLine' => 1407,
                'endLine' => 1410,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'hash' => [
                'name' => 'hash',
                'parameters' => [
                    'algorithm' => [
                        'name' => 'algorithm',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1418,
                        'endLine' => 1418,
                        'startColumn' => 26,
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
 * Hash the string using the given algorithm.
 *
 * @param  string  $algorithm
 * @return static
 */',
                'startLine' => 1418,
                'endLine' => 1421,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'encrypt' => [
                'name' => 'encrypt',
                'parameters' => [
                    'serialize' => [
                        'name' => 'serialize',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1429,
                                'endLine' => 1429,
                                'startTokenPos' => 4972,
                                'startFilePos' => 35463,
                                'endTokenPos' => 4972,
                                'endFilePos' => 35467,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1429,
                        'endLine' => 1429,
                        'startColumn' => 29,
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
 * Encrypt the string.
 *
 * @param  bool  $serialize
 * @return static
 */',
                'startLine' => 1429,
                'endLine' => 1432,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'decrypt' => [
                'name' => 'decrypt',
                'parameters' => [
                    'serialize' => [
                        'name' => 'serialize',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1440,
                                'endLine' => 1440,
                                'startTokenPos' => 5011,
                                'startFilePos' => 35695,
                                'endTokenPos' => 5011,
                                'endFilePos' => 35699,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1440,
                        'endLine' => 1440,
                        'startColumn' => 29,
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
 * Decrypt the string.
 *
 * @param  bool  $serialize
 * @return static
 */',
                'startLine' => 1440,
                'endLine' => 1443,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'dump' => [
                'name' => 'dump',
                'parameters' => [
                    'args' => [
                        'name' => 'args',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1451,
                        'endLine' => 1451,
                        'startColumn' => 26,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the string.
 *
 * @param  mixed  ...$args
 * @return $this
 */',
                'startLine' => 1451,
                'endLine' => 1456,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'value' => [
                'name' => 'value',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the underlying string value.
 *
 * @return string
 */',
                'startLine' => 1463,
                'endLine' => 1466,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'toString' => [
                'name' => 'toString',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the underlying string value.
 *
 * @return string
 */',
                'startLine' => 1473,
                'endLine' => 1476,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'toInteger' => [
                'name' => 'toInteger',
                'parameters' => [
                    'base' => [
                        'name' => 'base',
                        'default' => [
                            'code' => '10',
                            'attributes' => [
                                'startLine' => 1484,
                                'endLine' => 1484,
                                'startTokenPos' => 5125,
                                'startFilePos' => 36463,
                                'endTokenPos' => 5125,
                                'endFilePos' => 36464,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1484,
                        'endLine' => 1484,
                        'startColumn' => 31,
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
 * Get the underlying string value as an integer.
 *
 * @param  int  $base
 * @return int
 */',
                'startLine' => 1484,
                'endLine' => 1487,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'toFloat' => [
                'name' => 'toFloat',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the underlying string value as a float.
 *
 * @return float
 */',
                'startLine' => 1494,
                'endLine' => 1497,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'toBoolean' => [
                'name' => 'toBoolean',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the underlying string value as a boolean.
 *
 * Returns true when value is "1", "true", "on", and "yes". Otherwise, returns false.
 *
 * @return bool
 */',
                'startLine' => 1506,
                'endLine' => 1509,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'toDate' => [
                'name' => 'toDate',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1520,
                                'endLine' => 1520,
                                'startTokenPos' => 5207,
                                'startFilePos' => 37298,
                                'endTokenPos' => 5207,
                                'endFilePos' => 37301,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1520,
                        'endLine' => 1520,
                        'startColumn' => 28,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'tz' => [
                        'name' => 'tz',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1520,
                                'endLine' => 1520,
                                'startTokenPos' => 5214,
                                'startFilePos' => 37310,
                                'endTokenPos' => 5214,
                                'endFilePos' => 37313,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1520,
                        'endLine' => 1520,
                        'startColumn' => 44,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the underlying string value as a Carbon instance.
 *
 * @param  string|null  $format
 * @param  string|null  $tz
 * @return \\Illuminate\\Support\\Carbon
 *
 * @throws \\Carbon\\Exceptions\\InvalidFormatException
 */',
                'startLine' => 1520,
                'endLine' => 1527,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'toUri' => [
                'name' => 'toUri',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the underlying string value as a Uri instance.
 *
 * @return \\Illuminate\\Support\\Uri
 */',
                'startLine' => 1534,
                'endLine' => 1537,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'jsonSerialize' => [
                'name' => 'jsonSerialize',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the object to a string when JSON encoded.
 *
 * @return string
 */',
                'startLine' => 1544,
                'endLine' => 1547,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'offsetExists' => [
                'name' => 'offsetExists',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1555,
                        'endLine' => 1555,
                        'startColumn' => 34,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the given offset exists.
 *
 * @param  mixed  $offset
 * @return bool
 */',
                'startLine' => 1555,
                'endLine' => 1558,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'offsetGet' => [
                'name' => 'offsetGet',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1566,
                        'endLine' => 1566,
                        'startColumn' => 31,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the value at the given offset.
 *
 * @param  mixed  $offset
 * @return string
 */',
                'startLine' => 1566,
                'endLine' => 1569,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'offsetSet' => [
                'name' => 'offsetSet',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1577,
                        'endLine' => 1577,
                        'startColumn' => 31,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1577,
                        'endLine' => 1577,
                        'startColumn' => 46,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the value at the given offset.
 *
 * @param  mixed  $offset
 * @return void
 */',
                'startLine' => 1577,
                'endLine' => 1580,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            'offsetUnset' => [
                'name' => 'offsetUnset',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1588,
                        'endLine' => 1588,
                        'startColumn' => 33,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Unset the value at the given offset.
 *
 * @param  mixed  $offset
 * @return void
 */',
                'startLine' => 1588,
                'endLine' => 1591,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            '__get' => [
                'name' => '__get',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1599,
                        'endLine' => 1599,
                        'startColumn' => 27,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Proxy dynamic properties onto methods.
 *
 * @param  string  $key
 * @return mixed
 */',
                'startLine' => 1599,
                'endLine' => 1602,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
                'aliasName' => null,
            ],
            '__toString' => [
                'name' => '__toString',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the raw string value.
 *
 * @return string
 */',
                'startLine' => 1609,
                'endLine' => 1612,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Stringable',
                'implementingClassName' => 'Illuminate\\Support\\Stringable',
                'currentClassName' => 'Illuminate\\Support\\Stringable',
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
