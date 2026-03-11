<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Response.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Response
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-882f3b7e469ea9c7bf932783c6c178aeec1845b2f1b81aefb8dad43028fe34ba-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Http\\Response',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Response.php',
            ],
        ],
        'namespace' => 'Illuminate\\Http',
        'name' => 'Illuminate\\Http\\Response',
        'shortName' => 'Response',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 15,
        'endLine' => 117,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Symfony\\Component\\HttpFoundation\\Response',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Http\\ResponseTrait',
            1 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            '__construct' => [
                'name' => '__construct',
                'parameters' => [
                    'content' => [
                        'name' => 'content',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 30,
                                'endLine' => 30,
                                'startTokenPos' => 98,
                                'startFilePos' => 762,
                                'endTokenPos' => 98,
                                'endFilePos' => 763,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 30,
                        'endLine' => 30,
                        'startColumn' => 33,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'status' => [
                        'name' => 'status',
                        'default' => [
                            'code' => '200',
                            'attributes' => [
                                'startLine' => 30,
                                'endLine' => 30,
                                'startTokenPos' => 105,
                                'startFilePos' => 776,
                                'endTokenPos' => 105,
                                'endFilePos' => 778,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 30,
                        'endLine' => 30,
                        'startColumn' => 48,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 30,
                                'endLine' => 30,
                                'startTokenPos' => 114,
                                'startFilePos' => 798,
                                'endTokenPos' => 115,
                                'endFilePos' => 799,
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
                        'startLine' => 30,
                        'endLine' => 30,
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
 * Create a new HTTP response.
 *
 * @param  mixed  $content
 * @param  int  $status
 * @param  array  $headers
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 30,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Response',
                'currentClassName' => 'Illuminate\\Http\\Response',
                'aliasName' => null,
            ],
            'getContent' => [
                'name' => 'getContent',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
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
                                    'name' => 'false',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * Get the response content.
 */',
                'startLine' => 42,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Response',
                'currentClassName' => 'Illuminate\\Http\\Response',
                'aliasName' => null,
            ],
            'setContent' => [
                'name' => 'setContent',
                'parameters' => [
                    'content' => [
                        'name' => 'content',
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
                        'startLine' => 57,
                        'endLine' => 57,
                        'startColumn' => 32,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                    0 => [
                        'name' => 'Override',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * Set the content on the response.
 *
 * @param  mixed  $content
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 56,
                'endLine' => 84,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Response',
                'currentClassName' => 'Illuminate\\Http\\Response',
                'aliasName' => null,
            ],
            'shouldBeJson' => [
                'name' => 'shouldBeJson',
                'parameters' => [
                    'content' => [
                        'name' => 'content',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 92,
                        'endLine' => 92,
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
 * Determine if the given content should be turned into JSON.
 *
 * @param  mixed  $content
 * @return bool
 */',
                'startLine' => 92,
                'endLine' => 99,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Response',
                'currentClassName' => 'Illuminate\\Http\\Response',
                'aliasName' => null,
            ],
            'morphToJson' => [
                'name' => 'morphToJson',
                'parameters' => [
                    'content' => [
                        'name' => 'content',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 107,
                        'endLine' => 107,
                        'startColumn' => 36,
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
 * Morph the given content into JSON.
 *
 * @param  mixed  $content
 * @return string|false
 */',
                'startLine' => 107,
                'endLine' => 116,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Response',
                'currentClassName' => 'Illuminate\\Http\\Response',
                'aliasName' => null,
            ],
        ],
        'traitsData' => [
            'aliases' => [
                'Illuminate\\Support\\Traits\\Macroable' => [
                    0 => [
                        'alias' => 'macroCall',
                        'method' => '__call',
                        'hash' => 'illuminate\\support\\traits\\macroable::__call',
                    ],
                ],
            ],
            'modifiers' => [
            ],
            'precedences' => [
            ],
            'hashes' => [
                'illuminate\\support\\traits\\macroable::__call' => 'Illuminate\\Support\\Traits\\Macroable::__call',
            ],
        ],
    ],
]);
