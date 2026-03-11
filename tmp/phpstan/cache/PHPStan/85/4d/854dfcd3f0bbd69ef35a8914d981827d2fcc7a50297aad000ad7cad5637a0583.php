<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Support/Str.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Str
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-1603e498b4519404c6a549557052af86ae72130361189cdf07ae8a9d572c38b0-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Support\\Str',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Support/Str.php',
            ],
        ],
        'namespace' => 'Illuminate\\Support',
        'name' => 'Illuminate\\Support\\Str',
        'shortName' => 'Str',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 23,
        'endLine' => 2131,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
            'INVISIBLE_CHARACTERS' => [
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'name' => 'INVISIBLE_CHARACTERS',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'\\x{0009}\\x{0020}\\x{00A0}\\x{00AD}\\x{034F}\\x{061C}\\x{115F}\\x{1160}\\x{17B4}\\x{17B5}\\x{180E}\\x{2000}\\x{2001}\\x{2002}\\x{2003}\\x{2004}\\x{2005}\\x{2006}\\x{2007}\\x{2008}\\x{2009}\\x{200A}\\x{200B}\\x{200C}\\x{200D}\\x{200E}\\x{200F}\\x{202F}\\x{205F}\\x{2060}\\x{2061}\\x{2062}\\x{2063}\\x{2064}\\x{2065}\\x{206A}\\x{206B}\\x{206C}\\x{206D}\\x{206E}\\x{206F}\\x{3000}\\x{2800}\\x{3164}\\x{FEFF}\\x{FFA0}\\x{1D159}\\x{1D173}\\x{1D174}\\x{1D175}\\x{1D176}\\x{1D177}\\x{1D178}\\x{1D179}\\x{1D17A}\\x{E0020}\'',
                    'attributes' => [
                        'startLine' => 32,
                        'endLine' => 32,
                        'startTokenPos' => 111,
                        'startFilePos' => 869,
                        'endTokenPos' => 111,
                        'endFilePos' => 1328,
                    ],
                ],
                'docComment' => '/**
 * The list of characters that are considered "invisible" in strings.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 494,
            ],
        ],
        'immediateProperties' => [
            'snakeCache' => [
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'name' => 'snakeCache',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 39,
                        'endLine' => 39,
                        'startTokenPos' => 124,
                        'startFilePos' => 1463,
                        'endTokenPos' => 125,
                        'endFilePos' => 1464,
                    ],
                ],
                'docComment' => '/**
 * The cache of snake-cased words.
 *
 * @var array<string, string>
 */',
                'attributes' => [
                ],
                'startLine' => 39,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'camelCache' => [
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'name' => 'camelCache',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 46,
                        'endLine' => 46,
                        'startTokenPos' => 138,
                        'startFilePos' => 1599,
                        'endTokenPos' => 139,
                        'endFilePos' => 1600,
                    ],
                ],
                'docComment' => '/**
 * The cache of camel-cased words.
 *
 * @var array<string, string>
 */',
                'attributes' => [
                ],
                'startLine' => 46,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'studlyCache' => [
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'name' => 'studlyCache',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 53,
                        'endLine' => 53,
                        'startTokenPos' => 152,
                        'startFilePos' => 1737,
                        'endTokenPos' => 153,
                        'endFilePos' => 1738,
                    ],
                ],
                'docComment' => '/**
 * The cache of studly-cased words.
 *
 * @var array<string, string>
 */',
                'attributes' => [
                ],
                'startLine' => 53,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'uuidFactory' => [
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'name' => 'uuidFactory',
                'modifiers' => 18,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The callback that should be used to generate UUIDs.
 *
 * @var (callable(): \\Ramsey\\Uuid\\UuidInterface)|null
 */',
                'attributes' => [
                ],
                'startLine' => 60,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'ulidFactory' => [
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'name' => 'ulidFactory',
                'modifiers' => 18,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The callback that should be used to generate ULIDs.
 *
 * @var (callable(): \\Symfony\\Component\\Uid\\Ulid)|null
 */',
                'attributes' => [
                ],
                'startLine' => 67,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'randomStringFactory' => [
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'name' => 'randomStringFactory',
                'modifiers' => 18,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The callback that should be used to generate random strings.
 *
 * @var (callable(int): string)|null
 */',
                'attributes' => [
                ],
                'startLine' => 74,
                'endLine' => 74,
                'startColumn' => 5,
                'endColumn' => 42,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'of' => [
                'name' => 'of',
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
                        'startLine' => 82,
                        'endLine' => 82,
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
 * Get a new stringable object from the given string.
 *
 * @param  string  $string
 * @return \\Illuminate\\Support\\Stringable
 */',
                'startLine' => 82,
                'endLine' => 85,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'after' => [
                'name' => 'after',
                'parameters' => [
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 34,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 44,
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
 * Return the remainder of a string after the first occurrence of a given value.
 *
 * @param  string  $subject
 * @param  string  $search
 * @return string
 */',
                'startLine' => 94,
                'endLine' => 97,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'afterLast' => [
                'name' => 'afterLast',
                'parameters' => [
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 106,
                        'endLine' => 106,
                        'startColumn' => 38,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 106,
                        'endLine' => 106,
                        'startColumn' => 48,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
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
 * @param  string  $subject
 * @param  string  $search
 * @return string
 */',
                'startLine' => 106,
                'endLine' => 119,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'ascii' => [
                'name' => 'ascii',
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
                        'startLine' => 128,
                        'endLine' => 128,
                        'startColumn' => 34,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'language' => [
                        'name' => 'language',
                        'default' => [
                            'code' => '\'en\'',
                            'attributes' => [
                                'startLine' => 128,
                                'endLine' => 128,
                                'startTokenPos' => 372,
                                'startFilePos' => 3613,
                                'endTokenPos' => 372,
                                'endFilePos' => 3616,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 128,
                        'endLine' => 128,
                        'startColumn' => 42,
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
 * Transliterate a UTF-8 value to ASCII.
 *
 * @param  string  $value
 * @param  string  $language
 * @return string
 */',
                'startLine' => 128,
                'endLine' => 131,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'transliterate' => [
                'name' => 'transliterate',
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
                        'startLine' => 141,
                        'endLine' => 141,
                        'startColumn' => 42,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'unknown' => [
                        'name' => 'unknown',
                        'default' => [
                            'code' => '\'?\'',
                            'attributes' => [
                                'startLine' => 141,
                                'endLine' => 141,
                                'startTokenPos' => 417,
                                'startFilePos' => 4001,
                                'endTokenPos' => 417,
                                'endFilePos' => 4003,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 141,
                        'endLine' => 141,
                        'startColumn' => 51,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'strict' => [
                        'name' => 'strict',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 141,
                                'endLine' => 141,
                                'startTokenPos' => 424,
                                'startFilePos' => 4016,
                                'endTokenPos' => 424,
                                'endFilePos' => 4020,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 141,
                        'endLine' => 141,
                        'startColumn' => 67,
                        'endColumn' => 81,
                        'parameterIndex' => 2,
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
 * @param  string  $string
 * @param  string|null  $unknown
 * @param  bool|null  $strict
 * @return string
 */',
                'startLine' => 141,
                'endLine' => 144,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'before' => [
                'name' => 'before',
                'parameters' => [
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 153,
                        'endLine' => 153,
                        'startColumn' => 35,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 153,
                        'endLine' => 153,
                        'startColumn' => 45,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
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
 * @param  string  $subject
 * @param  string  $search
 * @return string
 */',
                'startLine' => 153,
                'endLine' => 162,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'beforeLast' => [
                'name' => 'beforeLast',
                'parameters' => [
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 171,
                        'endLine' => 171,
                        'startColumn' => 39,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'search' => [
                        'name' => 'search',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 171,
                        'endLine' => 171,
                        'startColumn' => 49,
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
 * Get the portion of a string before the last occurrence of a given value.
 *
 * @param  string  $subject
 * @param  string  $search
 * @return string
 */',
                'startLine' => 171,
                'endLine' => 184,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'between' => [
                'name' => 'between',
                'parameters' => [
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 194,
                        'endLine' => 194,
                        'startColumn' => 36,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 194,
                        'endLine' => 194,
                        'startColumn' => 46,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
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
                        'startLine' => 194,
                        'endLine' => 194,
                        'startColumn' => 53,
                        'endColumn' => 55,
                        'parameterIndex' => 2,
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
 * @param  string  $subject
 * @param  string  $from
 * @param  string  $to
 * @return string
 */',
                'startLine' => 194,
                'endLine' => 201,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'betweenFirst' => [
                'name' => 'betweenFirst',
                'parameters' => [
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 211,
                        'endLine' => 211,
                        'startColumn' => 41,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 211,
                        'endLine' => 211,
                        'startColumn' => 51,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
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
                        'startLine' => 211,
                        'endLine' => 211,
                        'startColumn' => 58,
                        'endColumn' => 60,
                        'parameterIndex' => 2,
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
 * @param  string  $subject
 * @param  string  $from
 * @param  string  $to
 * @return string
 */',
                'startLine' => 211,
                'endLine' => 218,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'camel' => [
                'name' => 'camel',
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
                        'startLine' => 226,
                        'endLine' => 226,
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
 * Convert a value to camel case.
 *
 * @param  string  $value
 * @return ($value is \'\' ? \'\' : string)
 */',
                'startLine' => 226,
                'endLine' => 233,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'charAt' => [
                'name' => 'charAt',
                'parameters' => [
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 35,
                        'endColumn' => 42,
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
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 45,
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
 * Get the character at the specified index.
 *
 * @param  string  $subject
 * @param  int  $index
 * @return string|false
 */',
                'startLine' => 242,
                'endLine' => 251,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'chopStart' => [
                'name' => 'chopStart',
                'parameters' => [
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 260,
                        'endLine' => 260,
                        'startColumn' => 38,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'needle' => [
                        'name' => 'needle',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 260,
                        'endLine' => 260,
                        'startColumn' => 48,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove the given string(s) if it exists at the start of the haystack.
 *
 * @param  string  $subject
 * @param  string|string[]  $needle
 * @return string
 */',
                'startLine' => 260,
                'endLine' => 269,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'chopEnd' => [
                'name' => 'chopEnd',
                'parameters' => [
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 278,
                        'endLine' => 278,
                        'startColumn' => 36,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'needle' => [
                        'name' => 'needle',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 278,
                        'endLine' => 278,
                        'startColumn' => 46,
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
 * Remove the given string(s) if it exists at the end of the haystack.
 *
 * @param  string  $subject
 * @param  string|string[]  $needle
 * @return string
 */',
                'startLine' => 278,
                'endLine' => 287,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'contains' => [
                'name' => 'contains',
                'parameters' => [
                    'haystack' => [
                        'name' => 'haystack',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 297,
                        'endLine' => 297,
                        'startColumn' => 37,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 297,
                        'endLine' => 297,
                        'startColumn' => 48,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'ignoreCase' => [
                        'name' => 'ignoreCase',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 297,
                                'endLine' => 297,
                                'startTokenPos' => 1083,
                                'startFilePos' => 8004,
                                'endTokenPos' => 1083,
                                'endFilePos' => 8008,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 297,
                        'endLine' => 297,
                        'startColumn' => 58,
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
 * Determine if a given string contains a given substring.
 *
 * @param  string  $haystack
 * @param  string|iterable<string>  $needles
 * @param  bool  $ignoreCase
 * @return ($needles is array{} ? false : ($haystack is non-empty-string ? bool : false))
 */',
                'startLine' => 297,
                'endLine' => 322,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'containsAll' => [
                'name' => 'containsAll',
                'parameters' => [
                    'haystack' => [
                        'name' => 'haystack',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 332,
                        'endLine' => 332,
                        'startColumn' => 40,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 332,
                        'endLine' => 332,
                        'startColumn' => 51,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'ignoreCase' => [
                        'name' => 'ignoreCase',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 332,
                                'endLine' => 332,
                                'startTokenPos' => 1240,
                                'startFilePos' => 8917,
                                'endTokenPos' => 1240,
                                'endFilePos' => 8921,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 332,
                        'endLine' => 332,
                        'startColumn' => 61,
                        'endColumn' => 79,
                        'parameterIndex' => 2,
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
 * @param  string  $haystack
 * @param  iterable<string>  $needles
 * @param  bool  $ignoreCase
 * @return ($needles is array{} ? false : ($haystack is non-empty-string ? bool : false))
 */',
                'startLine' => 332,
                'endLine' => 341,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'doesntContain' => [
                'name' => 'doesntContain',
                'parameters' => [
                    'haystack' => [
                        'name' => 'haystack',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 351,
                        'endLine' => 351,
                        'startColumn' => 42,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 351,
                        'endLine' => 351,
                        'startColumn' => 53,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'ignoreCase' => [
                        'name' => 'ignoreCase',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 351,
                                'endLine' => 351,
                                'startTokenPos' => 1314,
                                'startFilePos' => 9500,
                                'endTokenPos' => 1314,
                                'endFilePos' => 9504,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 351,
                        'endLine' => 351,
                        'startColumn' => 63,
                        'endColumn' => 81,
                        'parameterIndex' => 2,
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
 * @param  string  $haystack
 * @param  string|iterable<string>  $needles
 * @param  bool  $ignoreCase
 * @return ($needles is array{} ? true : ($haystack is non-empty-string ? bool : true))
 */',
                'startLine' => 351,
                'endLine' => 354,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'convertCase' => [
                'name' => 'convertCase',
                'parameters' => [
                    'string' => [
                        'name' => 'string',
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
                        'startLine' => 364,
                        'endLine' => 364,
                        'startColumn' => 40,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'mode' => [
                        'name' => 'mode',
                        'default' => [
                            'code' => 'MB_CASE_FOLD',
                            'attributes' => [
                                'startLine' => 364,
                                'endLine' => 364,
                                'startTokenPos' => 1360,
                                'startFilePos' => 9990,
                                'endTokenPos' => 1360,
                                'endFilePos' => 10001,
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
                        'startLine' => 364,
                        'endLine' => 364,
                        'startColumn' => 56,
                        'endColumn' => 79,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'encoding' => [
                        'name' => 'encoding',
                        'default' => [
                            'code' => '\'UTF-8\'',
                            'attributes' => [
                                'startLine' => 364,
                                'endLine' => 364,
                                'startTokenPos' => 1370,
                                'startFilePos' => 10024,
                                'endTokenPos' => 1370,
                                'endFilePos' => 10030,
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
                        'startLine' => 364,
                        'endLine' => 364,
                        'startColumn' => 82,
                        'endColumn' => 108,
                        'parameterIndex' => 2,
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
 * @param  string  $string
 * @param  MB_CASE_UPPER|MB_CASE_LOWER|MB_CASE_TITLE|MB_CASE_FOLD|MB_CASE_UPPER_SIMPLE|MB_CASE_LOWER_SIMPLE|MB_CASE_TITLE_SIMPLE|MB_CASE_FOLD_SIMPLE  $mode
 * @param  string|null  $encoding
 * @return ($string is \'\' ? \'\' : string)
 */',
                'startLine' => 364,
                'endLine' => 367,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'deduplicate' => [
                'name' => 'deduplicate',
                'parameters' => [
                    'string' => [
                        'name' => 'string',
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
                        'startLine' => 376,
                        'endLine' => 376,
                        'startColumn' => 40,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'characters' => [
                        'name' => 'characters',
                        'default' => [
                            'code' => '\' \'',
                            'attributes' => [
                                'startLine' => 376,
                                'endLine' => 376,
                                'startTokenPos' => 1414,
                                'startFilePos' => 10438,
                                'endTokenPos' => 1414,
                                'endFilePos' => 10440,
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
                        'startLine' => 376,
                        'endLine' => 376,
                        'startColumn' => 56,
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
 * Replace consecutive instances of a given character with a single character in the given string.
 *
 * @param  string  $string
 * @param  array<string>|string  $characters
 * @return ($string is \'\' ? \'\' : string)
 */',
                'startLine' => 376,
                'endLine' => 387,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'endsWith' => [
                'name' => 'endsWith',
                'parameters' => [
                    'haystack' => [
                        'name' => 'haystack',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 396,
                        'endLine' => 396,
                        'startColumn' => 37,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 396,
                        'endLine' => 396,
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
 * Determine if a given string ends with a given substring.
 *
 * @param  string  $haystack
 * @param  string|iterable<string>  $needles
 * @return ($needles is array{} ? false : ($haystack is non-empty-string ? bool : false))
 */',
                'startLine' => 396,
                'endLine' => 413,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'doesntEndWith' => [
                'name' => 'doesntEndWith',
                'parameters' => [
                    'haystack' => [
                        'name' => 'haystack',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 422,
                        'endLine' => 422,
                        'startColumn' => 42,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 422,
                        'endLine' => 422,
                        'startColumn' => 53,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
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
 * @param  string  $haystack
 * @param  string|iterable<string>  $needles
 * @return ($needles is array{} ? true : ($haystack is non-empty-string ? bool : true))
 */',
                'startLine' => 422,
                'endLine' => 425,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'excerpt' => [
                'name' => 'excerpt',
                'parameters' => [
                    'text' => [
                        'name' => 'text',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 435,
                        'endLine' => 435,
                        'startColumn' => 36,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'phrase' => [
                        'name' => 'phrase',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 435,
                                'endLine' => 435,
                                'startTokenPos' => 1668,
                                'startFilePos' => 12201,
                                'endTokenPos' => 1668,
                                'endFilePos' => 12202,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 435,
                        'endLine' => 435,
                        'startColumn' => 43,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 435,
                                'endLine' => 435,
                                'startTokenPos' => 1675,
                                'startFilePos' => 12216,
                                'endTokenPos' => 1676,
                                'endFilePos' => 12217,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 435,
                        'endLine' => 435,
                        'startColumn' => 57,
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
 * Extracts an excerpt from text that matches the first instance of a phrase.
 *
 * @param  string  $text
 * @param  string  $phrase
 * @param  array{radius?: int|float, omission?: string}  $options
 * @return string|null
 */',
                'startLine' => 435,
                'endLine' => 461,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'finish' => [
                'name' => 'finish',
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
                        'startLine' => 470,
                        'endLine' => 470,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'cap' => [
                        'name' => 'cap',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 470,
                        'endLine' => 470,
                        'startColumn' => 43,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
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
 * @param  string  $value
 * @param  string  $cap
 * @return ($value is \'\' ? ($cap is \'\' ? \'\' : non-empty-string) : non-empty-string)
 */',
                'startLine' => 470,
                'endLine' => 475,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'wrap' => [
                'name' => 'wrap',
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
                        'startLine' => 485,
                        'endLine' => 485,
                        'startColumn' => 33,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'before' => [
                        'name' => 'before',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 485,
                        'endLine' => 485,
                        'startColumn' => 41,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'after' => [
                        'name' => 'after',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 485,
                                'endLine' => 485,
                                'startTokenPos' => 2020,
                                'startFilePos' => 13928,
                                'endTokenPos' => 2020,
                                'endFilePos' => 13931,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 485,
                        'endLine' => 485,
                        'startColumn' => 50,
                        'endColumn' => 62,
                        'parameterIndex' => 2,
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
 * @param  string  $value
 * @param  string  $before
 * @param  string|null  $after
 * @return ($value is \'\' ? ($before is \'\' ? ($after is \'\' ? \'\' : ($after is null ? \'\' : non-empty-string)) : non-empty-string) : non-empty-string)
 */',
                'startLine' => 485,
                'endLine' => 488,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'unwrap' => [
                'name' => 'unwrap',
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
                        'startLine' => 498,
                        'endLine' => 498,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'before' => [
                        'name' => 'before',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 498,
                        'endLine' => 498,
                        'startColumn' => 43,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'after' => [
                        'name' => 'after',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 498,
                                'endLine' => 498,
                                'startTokenPos' => 2062,
                                'startFilePos' => 14248,
                                'endTokenPos' => 2062,
                                'endFilePos' => 14251,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 498,
                        'endLine' => 498,
                        'startColumn' => 52,
                        'endColumn' => 64,
                        'parameterIndex' => 2,
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
 * @param  string  $value
 * @param  string  $before
 * @param  string|null  $after
 * @return string
 */',
                'startLine' => 498,
                'endLine' => 509,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
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
                        'startLine' => 519,
                        'endLine' => 519,
                        'startColumn' => 31,
                        'endColumn' => 38,
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
                        'startLine' => 519,
                        'endLine' => 519,
                        'startColumn' => 41,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'ignoreCase' => [
                        'name' => 'ignoreCase',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 519,
                                'endLine' => 519,
                                'startTokenPos' => 2178,
                                'startFilePos' => 14843,
                                'endTokenPos' => 2178,
                                'endFilePos' => 14847,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 519,
                        'endLine' => 519,
                        'startColumn' => 49,
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
 * Determine if a given string matches a given pattern.
 *
 * @param  string|iterable<string>  $pattern
 * @param  string  $value
 * @param  bool  $ignoreCase
 * @return bool
 */',
                'startLine' => 519,
                'endLine' => 554,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'isAscii' => [
                'name' => 'isAscii',
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
                        'startLine' => 562,
                        'endLine' => 562,
                        'startColumn' => 36,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a given string is 7 bit ASCII.
 *
 * @param  string  $value
 * @return bool
 */',
                'startLine' => 562,
                'endLine' => 565,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'isJson' => [
                'name' => 'isJson',
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
                        'startLine' => 575,
                        'endLine' => 575,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a given value is valid JSON.
 *
 * @param  mixed  $value
 * @return bool
 *
 * @phpstan-assert-if-true =non-empty-string $value
 */',
                'startLine' => 575,
                'endLine' => 582,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'isUrl' => [
                'name' => 'isUrl',
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
                        'startLine' => 593,
                        'endLine' => 593,
                        'startColumn' => 34,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'protocols' => [
                        'name' => 'protocols',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 593,
                                'endLine' => 593,
                                'startTokenPos' => 2480,
                                'startFilePos' => 16945,
                                'endTokenPos' => 2481,
                                'endFilePos' => 16946,
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
                        'startLine' => 593,
                        'endLine' => 593,
                        'startColumn' => 42,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
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
 * @param  mixed  $value
 * @param  string[]  $protocols
 * @return bool
 *
 * @phpstan-assert-if-true =non-empty-string $value
 */',
                'startLine' => 593,
                'endLine' => 633,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'isUuid' => [
                'name' => 'isUuid',
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
                        'startLine' => 644,
                        'endLine' => 644,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'version' => [
                        'name' => 'version',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 644,
                                'endLine' => 644,
                                'startTokenPos' => 2582,
                                'startFilePos' => 23564,
                                'endTokenPos' => 2582,
                                'endFilePos' => 23567,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 644,
                        'endLine' => 644,
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
 * Determine if a given value is a valid UUID.
 *
 * @param  mixed  $value
 * @param  int<0, 8>|\'nil\'|\'max\'|null  $version
 * @return bool
 *
 * @phpstan-assert-if-true =non-empty-string $value
 */',
                'startLine' => 644,
                'endLine' => 677,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'isUlid' => [
                'name' => 'isUlid',
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
                        'startLine' => 687,
                        'endLine' => 687,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a given value is a valid ULID.
 *
 * @param  mixed  $value
 * @return bool
 *
 * @phpstan-assert-if-true =non-empty-string $value
 */',
                'startLine' => 687,
                'endLine' => 694,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'kebab' => [
                'name' => 'kebab',
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
                        'startLine' => 702,
                        'endLine' => 702,
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
 * Convert a string to kebab case.
 *
 * @param  string  $value
 * @return ($value is \'\' ? \'\' : string)
 */',
                'startLine' => 702,
                'endLine' => 705,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'length' => [
                'name' => 'length',
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
                        'startLine' => 714,
                        'endLine' => 714,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'encoding' => [
                        'name' => 'encoding',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 714,
                                'endLine' => 714,
                                'startTokenPos' => 2875,
                                'startFilePos' => 25190,
                                'endTokenPos' => 2875,
                                'endFilePos' => 25193,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 714,
                        'endLine' => 714,
                        'startColumn' => 43,
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
 * Return the length of the given string.
 *
 * @param  string  $value
 * @param  string|null  $encoding
 * @return non-negative-int
 */',
                'startLine' => 714,
                'endLine' => 717,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'limit' => [
                'name' => 'limit',
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
                        'startLine' => 728,
                        'endLine' => 728,
                        'startColumn' => 34,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'limit' => [
                        'name' => 'limit',
                        'default' => [
                            'code' => '100',
                            'attributes' => [
                                'startLine' => 728,
                                'endLine' => 728,
                                'startTokenPos' => 2910,
                                'startFilePos' => 25521,
                                'endTokenPos' => 2910,
                                'endFilePos' => 25523,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 728,
                        'endLine' => 728,
                        'startColumn' => 42,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'end' => [
                        'name' => 'end',
                        'default' => [
                            'code' => '\'...\'',
                            'attributes' => [
                                'startLine' => 728,
                                'endLine' => 728,
                                'startTokenPos' => 2917,
                                'startFilePos' => 25533,
                                'endTokenPos' => 2917,
                                'endFilePos' => 25537,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 728,
                        'endLine' => 728,
                        'startColumn' => 56,
                        'endColumn' => 67,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'preserveWords' => [
                        'name' => 'preserveWords',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 728,
                                'endLine' => 728,
                                'startTokenPos' => 2924,
                                'startFilePos' => 25557,
                                'endTokenPos' => 2924,
                                'endFilePos' => 25561,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 728,
                        'endLine' => 728,
                        'startColumn' => 70,
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
 * Limit the number of characters in a string.
 *
 * @param  string  $value
 * @param  int  $limit
 * @param  string  $end
 * @param  bool  $preserveWords
 * @return string
 */',
                'startLine' => 728,
                'endLine' => 747,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'lower' => [
                'name' => 'lower',
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
                        'startLine' => 755,
                        'endLine' => 755,
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
 * Convert the given string to lower-case.
 *
 * @param  string  $value
 * @return ($value is \'\' ? \'\' : non-empty-string&lowercase-string)
 */',
                'startLine' => 755,
                'endLine' => 758,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'words' => [
                'name' => 'words',
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
                        'startLine' => 768,
                        'endLine' => 768,
                        'startColumn' => 34,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'words' => [
                        'name' => 'words',
                        'default' => [
                            'code' => '100',
                            'attributes' => [
                                'startLine' => 768,
                                'endLine' => 768,
                                'startTokenPos' => 3134,
                                'startFilePos' => 26608,
                                'endTokenPos' => 3134,
                                'endFilePos' => 26610,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 768,
                        'endLine' => 768,
                        'startColumn' => 42,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'end' => [
                        'name' => 'end',
                        'default' => [
                            'code' => '\'...\'',
                            'attributes' => [
                                'startLine' => 768,
                                'endLine' => 768,
                                'startTokenPos' => 3141,
                                'startFilePos' => 26620,
                                'endTokenPos' => 3141,
                                'endFilePos' => 26624,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 768,
                        'endLine' => 768,
                        'startColumn' => 56,
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
 * Limit the number of words in a string.
 *
 * @param  string  $value
 * @param  int  $words
 * @param  string  $end
 * @return string
 */',
                'startLine' => 768,
                'endLine' => 777,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'markdown' => [
                'name' => 'markdown',
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
                        'startLine' => 787,
                        'endLine' => 787,
                        'startColumn' => 37,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 787,
                                'endLine' => 787,
                                'startTokenPos' => 3240,
                                'startFilePos' => 27211,
                                'endTokenPos' => 3241,
                                'endFilePos' => 27212,
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
                        'startLine' => 787,
                        'endLine' => 787,
                        'startColumn' => 46,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'extensions' => [
                        'name' => 'extensions',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 787,
                                'endLine' => 787,
                                'startTokenPos' => 3250,
                                'startFilePos' => 27235,
                                'endTokenPos' => 3251,
                                'endFilePos' => 27236,
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
                        'startLine' => 787,
                        'endLine' => 787,
                        'startColumn' => 67,
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
 * Converts GitHub flavored Markdown into HTML.
 *
 * @param  string  $string
 * @param  array  $options
 * @param  \\League\\CommonMark\\Extension\\ExtensionInterface[]  $extensions
 * @return ($string is \'\' ? \'\' : string)
 */',
                'startLine' => 787,
                'endLine' => 798,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'inlineMarkdown' => [
                'name' => 'inlineMarkdown',
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
                        'startLine' => 808,
                        'endLine' => 808,
                        'startColumn' => 43,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 808,
                                'endLine' => 808,
                                'startTokenPos' => 3334,
                                'startFilePos' => 27857,
                                'endTokenPos' => 3335,
                                'endFilePos' => 27858,
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
                        'startLine' => 808,
                        'endLine' => 808,
                        'startColumn' => 52,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'extensions' => [
                        'name' => 'extensions',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 808,
                                'endLine' => 808,
                                'startTokenPos' => 3344,
                                'startFilePos' => 27881,
                                'endTokenPos' => 3345,
                                'endFilePos' => 27882,
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
                        'startLine' => 808,
                        'endLine' => 808,
                        'startColumn' => 73,
                        'endColumn' => 94,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Converts inline Markdown into HTML.
 *
 * @param  string  $string
 * @param  array  $options
 * @param  \\League\\CommonMark\\Extension\\ExtensionInterface[]  $extensions
 * @return ($string is \'\' ? \'\' : string)
 */',
                'startLine' => 808,
                'endLine' => 822,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'mask' => [
                'name' => 'mask',
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
                        'startLine' => 834,
                        'endLine' => 834,
                        'startColumn' => 33,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'character' => [
                        'name' => 'character',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 834,
                        'endLine' => 834,
                        'startColumn' => 42,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
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
                        'startLine' => 834,
                        'endLine' => 834,
                        'startColumn' => 54,
                        'endColumn' => 59,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 834,
                                'endLine' => 834,
                                'startTokenPos' => 3457,
                                'startFilePos' => 28647,
                                'endTokenPos' => 3457,
                                'endFilePos' => 28650,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 834,
                        'endLine' => 834,
                        'startColumn' => 62,
                        'endColumn' => 75,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'encoding' => [
                        'name' => 'encoding',
                        'default' => [
                            'code' => '\'UTF-8\'',
                            'attributes' => [
                                'startLine' => 834,
                                'endLine' => 834,
                                'startTokenPos' => 3464,
                                'startFilePos' => 28665,
                                'endTokenPos' => 3464,
                                'endFilePos' => 28671,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 834,
                        'endLine' => 834,
                        'startColumn' => 78,
                        'endColumn' => 96,
                        'parameterIndex' => 4,
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
 * @param  string  $string
 * @param  string  $character
 * @param  int  $index
 * @param  int|null  $length
 * @param  string  $encoding
 * @return string
 */',
                'startLine' => 834,
                'endLine' => 858,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
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
                        'startLine' => 867,
                        'endLine' => 867,
                        'startColumn' => 34,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 867,
                        'endLine' => 867,
                        'startColumn' => 44,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
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
 * @param  string  $subject
 * @return string
 */',
                'startLine' => 867,
                'endLine' => 876,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
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
                        'startLine' => 885,
                        'endLine' => 885,
                        'startColumn' => 36,
                        'endColumn' => 43,
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
                        'startLine' => 885,
                        'endLine' => 885,
                        'startColumn' => 46,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
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
 * @param  string  $value
 * @return ($pattern is array{} ? false : bool)
 */',
                'startLine' => 885,
                'endLine' => 902,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
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
                        'startLine' => 911,
                        'endLine' => 911,
                        'startColumn' => 37,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 911,
                        'endLine' => 911,
                        'startColumn' => 47,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
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
 * @param  string  $subject
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 911,
                'endLine' => 920,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'numbers' => [
                'name' => 'numbers',
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
                        'startLine' => 928,
                        'endLine' => 928,
                        'startColumn' => 36,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove all non-numeric characters from a string.
 *
 * @param  string  $value
 * @return string
 */',
                'startLine' => 928,
                'endLine' => 931,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'padBoth' => [
                'name' => 'padBoth',
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
                        'startLine' => 941,
                        'endLine' => 941,
                        'startColumn' => 36,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 941,
                        'endLine' => 941,
                        'startColumn' => 44,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'pad' => [
                        'name' => 'pad',
                        'default' => [
                            'code' => '\' \'',
                            'attributes' => [
                                'startLine' => 941,
                                'endLine' => 941,
                                'startTokenPos' => 3958,
                                'startFilePos' => 31272,
                                'endTokenPos' => 3958,
                                'endFilePos' => 31274,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 941,
                        'endLine' => 941,
                        'startColumn' => 53,
                        'endColumn' => 62,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Pad both sides of a string with another.
 *
 * @param  string  $value
 * @param  int  $length
 * @param  string  $pad
 * @return string
 */',
                'startLine' => 941,
                'endLine' => 944,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'padLeft' => [
                'name' => 'padLeft',
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
                        'startLine' => 954,
                        'endLine' => 954,
                        'startColumn' => 36,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 954,
                        'endLine' => 954,
                        'startColumn' => 44,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'pad' => [
                        'name' => 'pad',
                        'default' => [
                            'code' => '\' \'',
                            'attributes' => [
                                'startLine' => 954,
                                'endLine' => 954,
                                'startTokenPos' => 4002,
                                'startFilePos' => 31595,
                                'endTokenPos' => 4002,
                                'endFilePos' => 31597,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 954,
                        'endLine' => 954,
                        'startColumn' => 53,
                        'endColumn' => 62,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Pad the left side of a string with another.
 *
 * @param  string  $value
 * @param  int  $length
 * @param  string  $pad
 * @return string
 */',
                'startLine' => 954,
                'endLine' => 957,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'padRight' => [
                'name' => 'padRight',
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
                        'startLine' => 967,
                        'endLine' => 967,
                        'startColumn' => 37,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 967,
                        'endLine' => 967,
                        'startColumn' => 45,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'pad' => [
                        'name' => 'pad',
                        'default' => [
                            'code' => '\' \'',
                            'attributes' => [
                                'startLine' => 967,
                                'endLine' => 967,
                                'startTokenPos' => 4046,
                                'startFilePos' => 31920,
                                'endTokenPos' => 4046,
                                'endFilePos' => 31922,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 967,
                        'endLine' => 967,
                        'startColumn' => 54,
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
 * Pad the right side of a string with another.
 *
 * @param  string  $value
 * @param  int  $length
 * @param  string  $pad
 * @return string
 */',
                'startLine' => 967,
                'endLine' => 970,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'parseCallback' => [
                'name' => 'parseCallback',
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
                        'startLine' => 979,
                        'endLine' => 979,
                        'startColumn' => 42,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 979,
                                'endLine' => 979,
                                'startTokenPos' => 4087,
                                'startFilePos' => 32266,
                                'endTokenPos' => 4087,
                                'endFilePos' => 32269,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 979,
                        'endLine' => 979,
                        'startColumn' => 53,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Parse a Class[@]method style callback into class and method.
 *
 * @param  string  $callback
 * @param  string|null  $default
 * @return array<int, string|null>
 */',
                'startLine' => 979,
                'endLine' => 993,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'plural' => [
                'name' => 'plural',
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
                        'startLine' => 1003,
                        'endLine' => 1003,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'count' => [
                        'name' => 'count',
                        'default' => [
                            'code' => '2',
                            'attributes' => [
                                'startLine' => 1003,
                                'endLine' => 1003,
                                'startTokenPos' => 4225,
                                'startFilePos' => 32980,
                                'endTokenPos' => 4225,
                                'endFilePos' => 32980,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1003,
                        'endLine' => 1003,
                        'startColumn' => 43,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'prependCount' => [
                        'name' => 'prependCount',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1003,
                                'endLine' => 1003,
                                'startTokenPos' => 4232,
                                'startFilePos' => 32999,
                                'endTokenPos' => 4232,
                                'endFilePos' => 33003,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1003,
                        'endLine' => 1003,
                        'startColumn' => 55,
                        'endColumn' => 75,
                        'parameterIndex' => 2,
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
 * @param  string  $value
 * @param  int|array|\\Countable  $count
 * @param  bool  $prependCount
 * @return string
 */',
                'startLine' => 1003,
                'endLine' => 1010,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'pluralStudly' => [
                'name' => 'pluralStudly',
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
                        'startLine' => 1019,
                        'endLine' => 1019,
                        'startColumn' => 41,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'count' => [
                        'name' => 'count',
                        'default' => [
                            'code' => '2',
                            'attributes' => [
                                'startLine' => 1019,
                                'endLine' => 1019,
                                'startTokenPos' => 4311,
                                'startFilePos' => 33450,
                                'endTokenPos' => 4311,
                                'endFilePos' => 33450,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1019,
                        'endLine' => 1019,
                        'startColumn' => 49,
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
 * Pluralize the last word of an English, studly caps case string.
 *
 * @param  string  $value
 * @param  int|array|\\Countable  $count
 * @return string
 */',
                'startLine' => 1019,
                'endLine' => 1026,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'pluralPascal' => [
                'name' => 'pluralPascal',
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
                        'startLine' => 1035,
                        'endLine' => 1035,
                        'startColumn' => 41,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'count' => [
                        'name' => 'count',
                        'default' => [
                            'code' => '2',
                            'attributes' => [
                                'startLine' => 1035,
                                'endLine' => 1035,
                                'startTokenPos' => 4386,
                                'startFilePos' => 33908,
                                'endTokenPos' => 4386,
                                'endFilePos' => 33908,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1035,
                        'endLine' => 1035,
                        'startColumn' => 49,
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
 * Pluralize the last word of an English, Pascal caps case string.
 *
 * @param  string  $value
 * @param  int|array|\\Countable  $count
 * @return string
 */',
                'startLine' => 1035,
                'endLine' => 1038,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'password' => [
                'name' => 'password',
                'parameters' => [
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => '32',
                            'attributes' => [
                                'startLine' => 1050,
                                'endLine' => 1050,
                                'startTokenPos' => 4420,
                                'startFilePos' => 34388,
                                'endTokenPos' => 4420,
                                'endFilePos' => 34389,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1050,
                        'endLine' => 1050,
                        'startColumn' => 37,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'letters' => [
                        'name' => 'letters',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1050,
                                'endLine' => 1050,
                                'startTokenPos' => 4427,
                                'startFilePos' => 34403,
                                'endTokenPos' => 4427,
                                'endFilePos' => 34406,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1050,
                        'endLine' => 1050,
                        'startColumn' => 51,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'numbers' => [
                        'name' => 'numbers',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1050,
                                'endLine' => 1050,
                                'startTokenPos' => 4434,
                                'startFilePos' => 34420,
                                'endTokenPos' => 4434,
                                'endFilePos' => 34423,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1050,
                        'endLine' => 1050,
                        'startColumn' => 68,
                        'endColumn' => 82,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'symbols' => [
                        'name' => 'symbols',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1050,
                                'endLine' => 1050,
                                'startTokenPos' => 4441,
                                'startFilePos' => 34437,
                                'endTokenPos' => 4441,
                                'endFilePos' => 34440,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1050,
                        'endLine' => 1050,
                        'startColumn' => 85,
                        'endColumn' => 99,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'spaces' => [
                        'name' => 'spaces',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1050,
                                'endLine' => 1050,
                                'startTokenPos' => 4448,
                                'startFilePos' => 34453,
                                'endTokenPos' => 4448,
                                'endFilePos' => 34457,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1050,
                        'endLine' => 1050,
                        'startColumn' => 102,
                        'endColumn' => 116,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Generate a random, secure password.
 *
 * @param  int  $length
 * @param  bool  $letters
 * @param  bool  $numbers
 * @param  bool  $symbols
 * @param  bool  $spaces
 * @return ($letters is false ? ($numbers is true ? ($symbols is false ? ($spaces is false ? numeric-string : string) : string) : string) : string)
 */',
                'startLine' => 1050,
                'endLine' => 1081,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'position' => [
                'name' => 'position',
                'parameters' => [
                    'haystack' => [
                        'name' => 'haystack',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1092,
                        'endLine' => 1092,
                        'startColumn' => 37,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'needle' => [
                        'name' => 'needle',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1092,
                        'endLine' => 1092,
                        'startColumn' => 48,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'offset' => [
                        'name' => 'offset',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 1092,
                                'endLine' => 1092,
                                'startTokenPos' => 4976,
                                'startFilePos' => 36165,
                                'endTokenPos' => 4976,
                                'endFilePos' => 36165,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1092,
                        'endLine' => 1092,
                        'startColumn' => 57,
                        'endColumn' => 67,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'encoding' => [
                        'name' => 'encoding',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1092,
                                'endLine' => 1092,
                                'startTokenPos' => 4983,
                                'startFilePos' => 36180,
                                'endTokenPos' => 4983,
                                'endFilePos' => 36183,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1092,
                        'endLine' => 1092,
                        'startColumn' => 70,
                        'endColumn' => 85,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Find the multi-byte safe position of the first occurrence of a given substring in a string.
 *
 * @param  string  $haystack
 * @param  string  $needle
 * @param  int  $offset
 * @param  string|null  $encoding
 * @return ($haystack is \'\' ? false : ($needle is \'\' ? false : int|false))
 */',
                'startLine' => 1092,
                'endLine' => 1095,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'random' => [
                'name' => 'random',
                'parameters' => [
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => '16',
                            'attributes' => [
                                'startLine' => 1103,
                                'endLine' => 1103,
                                'startTokenPos' => 5023,
                                'startFilePos' => 36451,
                                'endTokenPos' => 5023,
                                'endFilePos' => 36452,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1103,
                        'endLine' => 1103,
                        'startColumn' => 35,
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
 * Generate a more truly "random" alpha-numeric string.
 *
 * @param  int  $length
 * @return string
 */',
                'startLine' => 1103,
                'endLine' => 1120,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'createRandomStringsUsing' => [
                'name' => 'createRandomStringsUsing',
                'parameters' => [
                    'factory' => [
                        'name' => 'factory',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1128,
                                'endLine' => 1128,
                                'startTokenPos' => 5183,
                                'startFilePos' => 37177,
                                'endTokenPos' => 5183,
                                'endFilePos' => 37180,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
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
                        'startLine' => 1128,
                        'endLine' => 1128,
                        'startColumn' => 53,
                        'endColumn' => 77,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the callable that will be used to generate random strings.
 *
 * @param  (callable(int): string)|null  $factory
 * @return void
 */',
                'startLine' => 1128,
                'endLine' => 1131,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'createRandomStringsUsingSequence' => [
                'name' => 'createRandomStringsUsingSequence',
                'parameters' => [
                    'sequence' => [
                        'name' => 'sequence',
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
                        'startLine' => 1140,
                        'endLine' => 1140,
                        'startColumn' => 61,
                        'endColumn' => 75,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'whenMissing' => [
                        'name' => 'whenMissing',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1140,
                                'endLine' => 1140,
                                'startTokenPos' => 5218,
                                'startFilePos' => 37543,
                                'endTokenPos' => 5218,
                                'endFilePos' => 37546,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1140,
                        'endLine' => 1140,
                        'startColumn' => 78,
                        'endColumn' => 96,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the sequence that will be used to generate random strings.
 *
 * @param  string[]  $sequence
 * @param  (callable(int): string)|null  $whenMissing
 * @return void
 */',
                'startLine' => 1140,
                'endLine' => 1165,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'createRandomStringsNormally' => [
                'name' => 'createRandomStringsNormally',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that random strings should be created normally and not using a custom factory.
 *
 * @return void
 */',
                'startLine' => 1172,
                'endLine' => 1175,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'repeat' => [
                'name' => 'repeat',
                'parameters' => [
                    'string' => [
                        'name' => 'string',
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
                        'startLine' => 1184,
                        'endLine' => 1184,
                        'startColumn' => 35,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 1184,
                        'endLine' => 1184,
                        'startColumn' => 51,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Repeat the given string.
 *
 * @param  string  $string
 * @param  int  $times
 * @return string
 */',
                'startLine' => 1184,
                'endLine' => 1187,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
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
                        'startLine' => 1197,
                        'endLine' => 1197,
                        'startColumn' => 41,
                        'endColumn' => 47,
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
                        'startLine' => 1197,
                        'endLine' => 1197,
                        'startColumn' => 50,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1197,
                        'endLine' => 1197,
                        'startColumn' => 60,
                        'endColumn' => 67,
                        'parameterIndex' => 2,
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
 * @param  string  $subject
 * @return string
 */',
                'startLine' => 1197,
                'endLine' => 1212,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'toStringOr' => [
                'name' => 'toStringOr',
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
                        'startLine' => 1221,
                        'endLine' => 1221,
                        'startColumn' => 40,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'fallback' => [
                        'name' => 'fallback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1221,
                        'endLine' => 1221,
                        'startColumn' => 48,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the given value to a string or return the given fallback on failure.
 *
 * @param  mixed  $value
 * @param  string  $fallback
 * @return string
 */',
                'startLine' => 1221,
                'endLine' => 1228,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
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
                        'startLine' => 1239,
                        'endLine' => 1239,
                        'startColumn' => 36,
                        'endColumn' => 42,
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
                        'startLine' => 1239,
                        'endLine' => 1239,
                        'startColumn' => 45,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1239,
                        'endLine' => 1239,
                        'startColumn' => 55,
                        'endColumn' => 62,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'caseSensitive' => [
                        'name' => 'caseSensitive',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1239,
                                'endLine' => 1239,
                                'startTokenPos' => 5612,
                                'startFilePos' => 40150,
                                'endTokenPos' => 5612,
                                'endFilePos' => 40153,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1239,
                        'endLine' => 1239,
                        'startColumn' => 65,
                        'endColumn' => 85,
                        'parameterIndex' => 3,
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
 * @param  string|iterable<string>  $subject
 * @param  bool  $caseSensitive
 * @return ($subject is string ? string : string[])
 */',
                'startLine' => 1239,
                'endLine' => 1256,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
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
                        'startLine' => 1266,
                        'endLine' => 1266,
                        'startColumn' => 41,
                        'endColumn' => 47,
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
                        'startLine' => 1266,
                        'endLine' => 1266,
                        'startColumn' => 50,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1266,
                        'endLine' => 1266,
                        'startColumn' => 60,
                        'endColumn' => 67,
                        'parameterIndex' => 2,
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
 * @param  string  $subject
 * @return string
 */',
                'startLine' => 1266,
                'endLine' => 1281,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
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
                        'startLine' => 1291,
                        'endLine' => 1291,
                        'startColumn' => 41,
                        'endColumn' => 47,
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
                        'startLine' => 1291,
                        'endLine' => 1291,
                        'startColumn' => 50,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1291,
                        'endLine' => 1291,
                        'startColumn' => 60,
                        'endColumn' => 67,
                        'parameterIndex' => 2,
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
 * @param  string  $subject
 * @return string
 */',
                'startLine' => 1291,
                'endLine' => 1304,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
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
                        'startLine' => 1314,
                        'endLine' => 1314,
                        'startColumn' => 40,
                        'endColumn' => 46,
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
                        'startLine' => 1314,
                        'endLine' => 1314,
                        'startColumn' => 49,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1314,
                        'endLine' => 1314,
                        'startColumn' => 59,
                        'endColumn' => 66,
                        'parameterIndex' => 2,
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
 * @param  string  $subject
 * @return string
 */',
                'startLine' => 1314,
                'endLine' => 1329,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
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
                        'startLine' => 1339,
                        'endLine' => 1339,
                        'startColumn' => 39,
                        'endColumn' => 45,
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
                        'startLine' => 1339,
                        'endLine' => 1339,
                        'startColumn' => 48,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1339,
                        'endLine' => 1339,
                        'startColumn' => 58,
                        'endColumn' => 65,
                        'parameterIndex' => 2,
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
 * @param  string  $subject
 * @return string
 */',
                'startLine' => 1339,
                'endLine' => 1352,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
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
                        'startLine' => 1363,
                        'endLine' => 1363,
                        'startColumn' => 43,
                        'endColumn' => 50,
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
                        'startLine' => 1363,
                        'endLine' => 1363,
                        'startColumn' => 53,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1363,
                        'endLine' => 1363,
                        'startColumn' => 63,
                        'endColumn' => 70,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'limit' => [
                        'name' => 'limit',
                        'default' => [
                            'code' => '-1',
                            'attributes' => [
                                'startLine' => 1363,
                                'endLine' => 1363,
                                'startTokenPos' => 6137,
                                'startFilePos' => 43383,
                                'endTokenPos' => 6138,
                                'endFilePos' => 43384,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1363,
                        'endLine' => 1363,
                        'startColumn' => 73,
                        'endColumn' => 83,
                        'parameterIndex' => 3,
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
 * @param  string|string[]  $pattern
 * @param  (\\Closure(array): string)|string[]|string  $replace
 * @param  string[]|string  $subject
 * @param  int  $limit
 * @return ($subject is array ? string[]|null : string|null)
 */',
                'startLine' => 1363,
                'endLine' => 1370,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
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
                        'startLine' => 1380,
                        'endLine' => 1380,
                        'startColumn' => 35,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1380,
                        'endLine' => 1380,
                        'startColumn' => 44,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'caseSensitive' => [
                        'name' => 'caseSensitive',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1380,
                                'endLine' => 1380,
                                'startTokenPos' => 6213,
                                'startFilePos' => 43914,
                                'endTokenPos' => 6213,
                                'endFilePos' => 43917,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1380,
                        'endLine' => 1380,
                        'startColumn' => 54,
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
 * Remove any occurrence of the given string in the subject.
 *
 * @param  string|iterable<string>  $search
 * @param  string|iterable<string>  $subject
 * @param  bool  $caseSensitive
 * @return string
 */',
                'startLine' => 1380,
                'endLine' => 1389,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'reverse' => [
                'name' => 'reverse',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
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
                        'startLine' => 1397,
                        'endLine' => 1397,
                        'startColumn' => 36,
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
 * Reverse the given string.
 *
 * @param  string  $value
 * @return string
 */',
                'startLine' => 1397,
                'endLine' => 1400,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'start' => [
                'name' => 'start',
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
                        'startLine' => 1409,
                        'endLine' => 1409,
                        'startColumn' => 34,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'prefix' => [
                        'name' => 'prefix',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1409,
                        'endLine' => 1409,
                        'startColumn' => 42,
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
 * Begin a string with a single instance of a given value.
 *
 * @param  string  $value
 * @param  string  $prefix
 * @return ($value is \'\' ? ($prefix is \'\' ? \'\' : non-empty-string): non-empty-string)
 */',
                'startLine' => 1409,
                'endLine' => 1414,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'upper' => [
                'name' => 'upper',
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
                        'startLine' => 1422,
                        'endLine' => 1422,
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
 * Convert the given string to upper-case.
 *
 * @param  string  $value
 * @return ($value is \'\' ? \'\' : non-empty-string&uppercase-string)
 */',
                'startLine' => 1422,
                'endLine' => 1425,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'title' => [
                'name' => 'title',
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
                        'startLine' => 1433,
                        'endLine' => 1433,
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
 * Convert the given string to proper case.
 *
 * @param  string  $value
 * @return string
 */',
                'startLine' => 1433,
                'endLine' => 1436,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'headline' => [
                'name' => 'headline',
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
                        'startLine' => 1444,
                        'endLine' => 1444,
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
 * Convert the given string to proper case for each word.
 *
 * @param  string  $value
 * @return string
 */',
                'startLine' => 1444,
                'endLine' => 1455,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'apa' => [
                'name' => 'apa',
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
                        'startLine' => 1465,
                        'endLine' => 1465,
                        'startColumn' => 32,
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
 * Convert the given string to APA-style title case.
 *
 * See: https://apastyle.apa.org/style-grammar-guidelines/capitalization/title-case
 *
 * @param  string  $value
 * @return string
 */',
                'startLine' => 1465,
                'endLine' => 1507,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'singular' => [
                'name' => 'singular',
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
                        'startLine' => 1515,
                        'endLine' => 1515,
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
 * Get the singular form of an English word.
 *
 * @param  string  $value
 * @return string
 */',
                'startLine' => 1515,
                'endLine' => 1518,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'slug' => [
                'name' => 'slug',
                'parameters' => [
                    'title' => [
                        'name' => 'title',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1529,
                        'endLine' => 1529,
                        'startColumn' => 33,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'separator' => [
                        'name' => 'separator',
                        'default' => [
                            'code' => '\'-\'',
                            'attributes' => [
                                'startLine' => 1529,
                                'endLine' => 1529,
                                'startTokenPos' => 7088,
                                'startFilePos' => 48301,
                                'endTokenPos' => 7088,
                                'endFilePos' => 48303,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1529,
                        'endLine' => 1529,
                        'startColumn' => 41,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'language' => [
                        'name' => 'language',
                        'default' => [
                            'code' => '\'en\'',
                            'attributes' => [
                                'startLine' => 1529,
                                'endLine' => 1529,
                                'startTokenPos' => 7095,
                                'startFilePos' => 48318,
                                'endTokenPos' => 7095,
                                'endFilePos' => 48321,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1529,
                        'endLine' => 1529,
                        'startColumn' => 59,
                        'endColumn' => 74,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'dictionary' => [
                        'name' => 'dictionary',
                        'default' => [
                            'code' => '[\'@\' => \'at\']',
                            'attributes' => [
                                'startLine' => 1529,
                                'endLine' => 1529,
                                'startTokenPos' => 7102,
                                'startFilePos' => 48338,
                                'endTokenPos' => 7108,
                                'endFilePos' => 48350,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1529,
                        'endLine' => 1529,
                        'startColumn' => 77,
                        'endColumn' => 103,
                        'parameterIndex' => 3,
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
 * @param  string  $title
 * @param  string  $separator
 * @param  string|null  $language
 * @param  array<string, string>  $dictionary
 * @return string
 */',
                'startLine' => 1529,
                'endLine' => 1552,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'snake' => [
                'name' => 'snake',
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
                        'startLine' => 1561,
                        'endLine' => 1561,
                        'startColumn' => 34,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'delimiter' => [
                        'name' => 'delimiter',
                        'default' => [
                            'code' => '\'_\'',
                            'attributes' => [
                                'startLine' => 1561,
                                'endLine' => 1561,
                                'startTokenPos' => 7321,
                                'startFilePos' => 49489,
                                'endTokenPos' => 7321,
                                'endFilePos' => 49491,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1561,
                        'endLine' => 1561,
                        'startColumn' => 42,
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
 * Convert a string to snake case.
 *
 * @param  string  $value
 * @param  string  $delimiter
 * @return string
 */',
                'startLine' => 1561,
                'endLine' => 1576,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'trim' => [
                'name' => 'trim',
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
                        'startLine' => 1585,
                        'endLine' => 1585,
                        'startColumn' => 33,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'charlist' => [
                        'name' => 'charlist',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1585,
                                'endLine' => 1585,
                                'startTokenPos' => 7460,
                                'startFilePos' => 50154,
                                'endTokenPos' => 7460,
                                'endFilePos' => 50157,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1585,
                        'endLine' => 1585,
                        'startColumn' => 41,
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
 * Remove all whitespace from both ends of a string.
 *
 * @param  string  $value
 * @param  string|null  $charlist
 * @return string
 */',
                'startLine' => 1585,
                'endLine' => 1594,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'ltrim' => [
                'name' => 'ltrim',
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
                        'startLine' => 1603,
                        'endLine' => 1603,
                        'startColumn' => 34,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'charlist' => [
                        'name' => 'charlist',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1603,
                                'endLine' => 1603,
                                'startTokenPos' => 7553,
                                'startFilePos' => 50725,
                                'endTokenPos' => 7553,
                                'endFilePos' => 50728,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1603,
                        'endLine' => 1603,
                        'startColumn' => 42,
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
 * Remove all whitespace from the beginning of a string.
 *
 * @param  string  $value
 * @param  string|null  $charlist
 * @return string
 */',
                'startLine' => 1603,
                'endLine' => 1612,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'rtrim' => [
                'name' => 'rtrim',
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
                        'startLine' => 1621,
                        'endLine' => 1621,
                        'startColumn' => 34,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'charlist' => [
                        'name' => 'charlist',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1621,
                                'endLine' => 1621,
                                'startTokenPos' => 7638,
                                'startFilePos' => 51234,
                                'endTokenPos' => 7638,
                                'endFilePos' => 51237,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1621,
                        'endLine' => 1621,
                        'startColumn' => 42,
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
 * Remove all whitespace from the end of a string.
 *
 * @param  string  $value
 * @param  string|null  $charlist
 * @return string
 */',
                'startLine' => 1621,
                'endLine' => 1630,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'squish' => [
                'name' => 'squish',
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
                        'startLine' => 1638,
                        'endLine' => 1638,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove all "extra" blank space from the given string.
 *
 * @param  string  $value
 * @return string
 */',
                'startLine' => 1638,
                'endLine' => 1641,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'startsWith' => [
                'name' => 'startsWith',
                'parameters' => [
                    'haystack' => [
                        'name' => 'haystack',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1652,
                        'endLine' => 1652,
                        'startColumn' => 39,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1652,
                        'endLine' => 1652,
                        'startColumn' => 50,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
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
 * @param  string  $haystack
 * @param  string|iterable<string>  $needles
 * @return ($needles is array{} ? false : ($haystack is non-empty-string ? bool : false))
 *
 * @phpstan-assert-if-true =non-empty-string $haystack
 */',
                'startLine' => 1652,
                'endLine' => 1669,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'doesntStartWith' => [
                'name' => 'doesntStartWith',
                'parameters' => [
                    'haystack' => [
                        'name' => 'haystack',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1680,
                        'endLine' => 1680,
                        'startColumn' => 44,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1680,
                        'endLine' => 1680,
                        'startColumn' => 55,
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
 * Determine if a given string doesn\'t start with a given substring.
 *
 * @param  string  $haystack
 * @param  string|iterable<string>  $needles
 * @return ($needles is array{} ? true : ($haystack is non-empty-string ? bool : true))
 *
 * @phpstan-assert-if-false =non-empty-string $haystack
 */',
                'startLine' => 1680,
                'endLine' => 1683,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'studly' => [
                'name' => 'studly',
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
                        'startLine' => 1691,
                        'endLine' => 1691,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert a value to studly caps case.
 *
 * @param  string  $value
 * @return ($value is \'\' ? \'\' : string)
 */',
                'startLine' => 1691,
                'endLine' => 1704,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'pascal' => [
                'name' => 'pascal',
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
                        'startLine' => 1712,
                        'endLine' => 1712,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert a value to Pascal case.
 *
 * @param  string  $value
 * @return ($value is \'\' ? \'\' : string)
 */',
                'startLine' => 1712,
                'endLine' => 1715,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'substr' => [
                'name' => 'substr',
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
                        'startLine' => 1726,
                        'endLine' => 1726,
                        'startColumn' => 35,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'start' => [
                        'name' => 'start',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1726,
                        'endLine' => 1726,
                        'startColumn' => 44,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1726,
                                'endLine' => 1726,
                                'startTokenPos' => 8060,
                                'startFilePos' => 54127,
                                'endTokenPos' => 8060,
                                'endFilePos' => 54130,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1726,
                        'endLine' => 1726,
                        'startColumn' => 52,
                        'endColumn' => 65,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'encoding' => [
                        'name' => 'encoding',
                        'default' => [
                            'code' => '\'UTF-8\'',
                            'attributes' => [
                                'startLine' => 1726,
                                'endLine' => 1726,
                                'startTokenPos' => 8067,
                                'startFilePos' => 54145,
                                'endTokenPos' => 8067,
                                'endFilePos' => 54151,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1726,
                        'endLine' => 1726,
                        'startColumn' => 68,
                        'endColumn' => 86,
                        'parameterIndex' => 3,
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
 * @param  string  $string
 * @param  int  $start
 * @param  int|null  $length
 * @param  string  $encoding
 * @return string
 */',
                'startLine' => 1726,
                'endLine' => 1729,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'substrCount' => [
                'name' => 'substrCount',
                'parameters' => [
                    'haystack' => [
                        'name' => 'haystack',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1740,
                        'endLine' => 1740,
                        'startColumn' => 40,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'needle' => [
                        'name' => 'needle',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1740,
                        'endLine' => 1740,
                        'startColumn' => 51,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'offset' => [
                        'name' => 'offset',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 1740,
                                'endLine' => 1740,
                                'startTokenPos' => 8111,
                                'startFilePos' => 54518,
                                'endTokenPos' => 8111,
                                'endFilePos' => 54518,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1740,
                        'endLine' => 1740,
                        'startColumn' => 60,
                        'endColumn' => 70,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1740,
                                'endLine' => 1740,
                                'startTokenPos' => 8118,
                                'startFilePos' => 54531,
                                'endTokenPos' => 8118,
                                'endFilePos' => 54534,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1740,
                        'endLine' => 1740,
                        'startColumn' => 73,
                        'endColumn' => 86,
                        'parameterIndex' => 3,
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
 * @param  string  $haystack
 * @param  string  $needle
 * @param  int  $offset
 * @param  int|null  $length
 * @return int
 */',
                'startLine' => 1740,
                'endLine' => 1747,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'substrReplace' => [
                'name' => 'substrReplace',
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
                        'startLine' => 1758,
                        'endLine' => 1758,
                        'startColumn' => 42,
                        'endColumn' => 48,
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
                        'startLine' => 1758,
                        'endLine' => 1758,
                        'startColumn' => 51,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'offset' => [
                        'name' => 'offset',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 1758,
                                'endLine' => 1758,
                                'startTokenPos' => 8191,
                                'startFilePos' => 55052,
                                'endTokenPos' => 8191,
                                'endFilePos' => 55052,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1758,
                        'endLine' => 1758,
                        'startColumn' => 61,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1758,
                                'endLine' => 1758,
                                'startTokenPos' => 8198,
                                'startFilePos' => 55065,
                                'endTokenPos' => 8198,
                                'endFilePos' => 55068,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1758,
                        'endLine' => 1758,
                        'startColumn' => 74,
                        'endColumn' => 87,
                        'parameterIndex' => 3,
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
 * @param  string|string[]  $string
 * @param  string|string[]  $replace
 * @param  int|int[]  $offset
 * @param  int|int[]|null  $length
 * @return string|string[]
 */',
                'startLine' => 1758,
                'endLine' => 1767,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
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
                        'startLine' => 1776,
                        'endLine' => 1776,
                        'startColumn' => 33,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'subject' => [
                        'name' => 'subject',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1776,
                        'endLine' => 1776,
                        'startColumn' => 45,
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
 * Swap multiple keywords in a string with other keywords.
 *
 * @param  array<string, string>  $map
 * @param  string  $subject
 * @return string
 */',
                'startLine' => 1776,
                'endLine' => 1779,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'take' => [
                'name' => 'take',
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
                        'startLine' => 1788,
                        'endLine' => 1788,
                        'startColumn' => 33,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 1788,
                        'endLine' => 1788,
                        'startColumn' => 42,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
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
 * Take the first or last {$limit} characters of a string.
 *
 * @param  string  $string
 * @param  int  $limit
 * @return string
 */',
                'startLine' => 1788,
                'endLine' => 1795,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'toBase64' => [
                'name' => 'toBase64',
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
                        'startLine' => 1803,
                        'endLine' => 1803,
                        'startColumn' => 37,
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
 * Convert the given string to Base64 encoding.
 *
 * @param  string  $string
 * @return ($string is \'\' ? \'\' : string)
 */',
                'startLine' => 1803,
                'endLine' => 1806,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'fromBase64' => [
                'name' => 'fromBase64',
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
                        'startLine' => 1815,
                        'endLine' => 1815,
                        'startColumn' => 39,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'strict' => [
                        'name' => 'strict',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1815,
                                'endLine' => 1815,
                                'startTokenPos' => 8409,
                                'startFilePos' => 56518,
                                'endTokenPos' => 8409,
                                'endFilePos' => 56522,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1815,
                        'endLine' => 1815,
                        'startColumn' => 48,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Decode the given Base64 encoded string.
 *
 * @param  string  $string
 * @param  bool  $strict
 * @return ($strict is true ? ($string is \'\' ? \'\' : string|false) : ($string is \'\' ? \'\' : string))
 */',
                'startLine' => 1815,
                'endLine' => 1818,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'lcfirst' => [
                'name' => 'lcfirst',
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
                        'startLine' => 1826,
                        'endLine' => 1826,
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
 * Make a string\'s first character lowercase.
 *
 * @param  string  $string
 * @return ($string is \'\' ? \'\' : non-empty-string)
 */',
                'startLine' => 1826,
                'endLine' => 1829,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'ucfirst' => [
                'name' => 'ucfirst',
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
                        'startLine' => 1837,
                        'endLine' => 1837,
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
 * Make a string\'s first character uppercase.
 *
 * @param  string  $string
 * @return ($string is \'\' ? \'\' : non-empty-string)
 */',
                'startLine' => 1837,
                'endLine' => 1840,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'ucwords' => [
                'name' => 'ucwords',
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
                        'startLine' => 1849,
                        'endLine' => 1849,
                        'startColumn' => 36,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'separators' => [
                        'name' => 'separators',
                        'default' => [
                            'code' => '" \\t\\r\\n\\f\\v"',
                            'attributes' => [
                                'startLine' => 1849,
                                'endLine' => 1849,
                                'startTokenPos' => 8540,
                                'startFilePos' => 57460,
                                'endTokenPos' => 8540,
                                'endFilePos' => 57472,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1849,
                        'endLine' => 1849,
                        'startColumn' => 45,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
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
 * @param  string  $string
 * @param  string  $separators
 * @return ($string is \'\' ? \'\' : non-empty-string)
 */',
                'startLine' => 1849,
                'endLine' => 1856,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'ucsplit' => [
                'name' => 'ucsplit',
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
                        'startLine' => 1864,
                        'endLine' => 1864,
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
 * Split a string into pieces by uppercase characters.
 *
 * @param  string  $string
 * @return ($string is \'\' ? array{} : string[])
 */',
                'startLine' => 1864,
                'endLine' => 1867,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'wordCount' => [
                'name' => 'wordCount',
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
                        'startLine' => 1876,
                        'endLine' => 1876,
                        'startColumn' => 38,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'characters' => [
                        'name' => 'characters',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1876,
                                'endLine' => 1876,
                                'startTokenPos' => 8654,
                                'startFilePos' => 58246,
                                'endTokenPos' => 8654,
                                'endFilePos' => 58249,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1876,
                        'endLine' => 1876,
                        'startColumn' => 47,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
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
 * @param  string  $string
 * @param  string|null  $characters
 * @return non-negative-int
 */',
                'startLine' => 1876,
                'endLine' => 1879,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'wordWrap' => [
                'name' => 'wordWrap',
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
                        'startLine' => 1890,
                        'endLine' => 1890,
                        'startColumn' => 37,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'characters' => [
                        'name' => 'characters',
                        'default' => [
                            'code' => '75',
                            'attributes' => [
                                'startLine' => 1890,
                                'endLine' => 1890,
                                'startTokenPos' => 8692,
                                'startFilePos' => 58607,
                                'endTokenPos' => 8692,
                                'endFilePos' => 58608,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1890,
                        'endLine' => 1890,
                        'startColumn' => 46,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'break' => [
                        'name' => 'break',
                        'default' => [
                            'code' => '"\\n"',
                            'attributes' => [
                                'startLine' => 1890,
                                'endLine' => 1890,
                                'startTokenPos' => 8699,
                                'startFilePos' => 58620,
                                'endTokenPos' => 8699,
                                'endFilePos' => 58623,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1890,
                        'endLine' => 1890,
                        'startColumn' => 64,
                        'endColumn' => 76,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'cutLongWords' => [
                        'name' => 'cutLongWords',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1890,
                                'endLine' => 1890,
                                'startTokenPos' => 8706,
                                'startFilePos' => 58642,
                                'endTokenPos' => 8706,
                                'endFilePos' => 58646,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1890,
                        'endLine' => 1890,
                        'startColumn' => 79,
                        'endColumn' => 99,
                        'parameterIndex' => 3,
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
 * @param  string  $string
 * @param  int  $characters
 * @param  string  $break
 * @param  bool  $cutLongWords
 * @return string
 */',
                'startLine' => 1890,
                'endLine' => 1893,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'uuid' => [
                'name' => 'uuid',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Generate a UUID (version 4).
 *
 * @return \\Ramsey\\Uuid\\UuidInterface
 */',
                'startLine' => 1900,
                'endLine' => 1905,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'uuid7' => [
                'name' => 'uuid7',
                'parameters' => [
                    'time' => [
                        'name' => 'time',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1913,
                                'endLine' => 1913,
                                'startTokenPos' => 8784,
                                'startFilePos' => 59184,
                                'endTokenPos' => 8784,
                                'endFilePos' => 59187,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1913,
                        'endLine' => 1913,
                        'startColumn' => 34,
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
 * Generate a UUID (version 7).
 *
 * @param  \\DateTimeInterface|null  $time
 * @return \\Ramsey\\Uuid\\UuidInterface
 */',
                'startLine' => 1913,
                'endLine' => 1918,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'orderedUuid' => [
                'name' => 'orderedUuid',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Generate a time-ordered UUID.
 *
 * @return \\Ramsey\\Uuid\\UuidInterface
 */',
                'startLine' => 1925,
                'endLine' => 1943,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'createUuidsUsing' => [
                'name' => 'createUuidsUsing',
                'parameters' => [
                    'factory' => [
                        'name' => 'factory',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1951,
                                'endLine' => 1951,
                                'startTokenPos' => 8934,
                                'startFilePos' => 60159,
                                'endTokenPos' => 8934,
                                'endFilePos' => 60162,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
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
                        'startLine' => 1951,
                        'endLine' => 1951,
                        'startColumn' => 45,
                        'endColumn' => 69,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the callable that will be used to generate UUIDs.
 *
 * @param  (callable(): \\Ramsey\\Uuid\\UuidInterface)|null  $factory
 * @return void
 */',
                'startLine' => 1951,
                'endLine' => 1954,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'createUuidsUsingSequence' => [
                'name' => 'createUuidsUsingSequence',
                'parameters' => [
                    'sequence' => [
                        'name' => 'sequence',
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
                        'startLine' => 1963,
                        'endLine' => 1963,
                        'startColumn' => 53,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'whenMissing' => [
                        'name' => 'whenMissing',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1963,
                                'endLine' => 1963,
                                'startTokenPos' => 8969,
                                'startFilePos' => 60537,
                                'endTokenPos' => 8969,
                                'endFilePos' => 60540,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1963,
                        'endLine' => 1963,
                        'startColumn' => 70,
                        'endColumn' => 88,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the sequence that will be used to generate UUIDs.
 *
 * @param  \\Ramsey\\Uuid\\UuidInterface[]  $sequence
 * @param  (callable(): \\Ramsey\\Uuid\\UuidInterface)|null  $whenMissing
 * @return void
 */',
                'startLine' => 1963,
                'endLine' => 1988,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'freezeUuids' => [
                'name' => 'freezeUuids',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1996,
                                'endLine' => 1996,
                                'startTokenPos' => 9128,
                                'startFilePos' => 61377,
                                'endTokenPos' => 9128,
                                'endFilePos' => 61380,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
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
                        'startLine' => 1996,
                        'endLine' => 1996,
                        'startColumn' => 40,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Always return the same UUID when generating new UUIDs.
 *
 * @param  (\\Closure(\\Ramsey\\Uuid\\UuidInterface): mixed)|null  $callback
 * @return \\Ramsey\\Uuid\\UuidInterface
 */',
                'startLine' => 1996,
                'endLine' => 2011,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'createUuidsNormally' => [
                'name' => 'createUuidsNormally',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that UUIDs should be created normally and not using a custom factory.
 *
 * @return void
 */',
                'startLine' => 2018,
                'endLine' => 2021,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'ulid' => [
                'name' => 'ulid',
                'parameters' => [
                    'time' => [
                        'name' => 'time',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2029,
                                'endLine' => 2029,
                                'startTokenPos' => 9244,
                                'startFilePos' => 62079,
                                'endTokenPos' => 9244,
                                'endFilePos' => 62082,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2029,
                        'endLine' => 2029,
                        'startColumn' => 33,
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
 * Generate a ULID.
 *
 * @param  \\DateTimeInterface|null  $time
 * @return \\Symfony\\Component\\Uid\\Ulid
 */',
                'startLine' => 2029,
                'endLine' => 2040,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'createUlidsNormally' => [
                'name' => 'createUlidsNormally',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that ULIDs should be created normally and not using a custom factory.
 *
 * @return void
 */',
                'startLine' => 2047,
                'endLine' => 2050,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'createUlidsUsing' => [
                'name' => 'createUlidsUsing',
                'parameters' => [
                    'factory' => [
                        'name' => 'factory',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2058,
                                'endLine' => 2058,
                                'startTokenPos' => 9353,
                                'startFilePos' => 62791,
                                'endTokenPos' => 9353,
                                'endFilePos' => 62794,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
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
                        'startLine' => 2058,
                        'endLine' => 2058,
                        'startColumn' => 45,
                        'endColumn' => 69,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the callable that will be used to generate ULIDs.
 *
 * @param  (callable(): \\Symfony\\Component\\Uid\\Ulid)|null  $factory
 * @return void
 */',
                'startLine' => 2058,
                'endLine' => 2061,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'createUlidsUsingSequence' => [
                'name' => 'createUlidsUsingSequence',
                'parameters' => [
                    'sequence' => [
                        'name' => 'sequence',
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
                        'startLine' => 2070,
                        'endLine' => 2070,
                        'startColumn' => 53,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'whenMissing' => [
                        'name' => 'whenMissing',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2070,
                                'endLine' => 2070,
                                'startTokenPos' => 9388,
                                'startFilePos' => 63171,
                                'endTokenPos' => 9388,
                                'endFilePos' => 63174,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2070,
                        'endLine' => 2070,
                        'startColumn' => 70,
                        'endColumn' => 88,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the sequence that will be used to generate ULIDs.
 *
 * @param  \\Symfony\\Component\\Uid\\Ulid[]  $sequence
 * @param  (callable(): \\Symfony\\Component\\Uid\\Ulid)|null  $whenMissing
 * @return void
 */',
                'startLine' => 2070,
                'endLine' => 2095,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'freezeUlids' => [
                'name' => 'freezeUlids',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2103,
                                'endLine' => 2103,
                                'startTokenPos' => 9547,
                                'startFilePos' => 63966,
                                'endTokenPos' => 9547,
                                'endFilePos' => 63969,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
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
                        'startLine' => 2103,
                        'endLine' => 2103,
                        'startColumn' => 40,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Always return the same ULID when generating new ULIDs.
 *
 * @param  (Closure(Ulid): mixed)|null  $callback
 * @return Ulid
 */',
                'startLine' => 2103,
                'endLine' => 2118,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
                'aliasName' => null,
            ],
            'flushCache' => [
                'name' => 'flushCache',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove all strings from the casing caches.
 *
 * @return void
 */',
                'startLine' => 2125,
                'endLine' => 2130,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Str',
                'implementingClassName' => 'Illuminate\\Support\\Str',
                'currentClassName' => 'Illuminate\\Support\\Str',
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
