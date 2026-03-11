<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Concerns/InteractsWithContentTypes.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Concerns\InteractsWithContentTypes
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-c218c1865944decf23f907e07e6281db3a57ab5140b09524838862609255dd76-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Concerns/InteractsWithContentTypes.php',
            ],
        ],
        'namespace' => 'Illuminate\\Http\\Concerns',
        'name' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
        'shortName' => 'InteractsWithContentTypes',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 7,
        'endLine' => 187,
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
            'isJson' => [
                'name' => 'isJson',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the request is sending JSON.
 *
 * @return bool
 */',
                'startLine' => 14,
                'endLine' => 17,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'aliasName' => null,
            ],
            'expectsJson' => [
                'name' => 'expectsJson',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the current request probably expects a JSON response.
 *
 * @return bool
 */',
                'startLine' => 24,
                'endLine' => 27,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'aliasName' => null,
            ],
            'wantsJson' => [
                'name' => 'wantsJson',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the current request is asking for JSON.
 *
 * @return bool
 */',
                'startLine' => 34,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'aliasName' => null,
            ],
            'accepts' => [
                'name' => 'accepts',
                'parameters' => [
                    'contentTypes' => [
                        'name' => 'contentTypes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 47,
                        'endLine' => 47,
                        'startColumn' => 29,
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
 * Determines whether the current requests accepts a given content type.
 *
 * @param  string|array  $contentTypes
 * @return bool
 */',
                'startLine' => 47,
                'endLine' => 78,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'aliasName' => null,
            ],
            'prefers' => [
                'name' => 'prefers',
                'parameters' => [
                    'contentTypes' => [
                        'name' => 'contentTypes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 86,
                        'endLine' => 86,
                        'startColumn' => 29,
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
 * Return the most suitable content type from the given array based on content negotiation.
 *
 * @param  string|array  $contentTypes
 * @return string|null
 */',
                'startLine' => 86,
                'endLine' => 117,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'aliasName' => null,
            ],
            'acceptsAnyContentType' => [
                'name' => 'acceptsAnyContentType',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the current request accepts any content type.
 *
 * @return bool
 */',
                'startLine' => 124,
                'endLine' => 131,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'aliasName' => null,
            ],
            'acceptsJson' => [
                'name' => 'acceptsJson',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines whether a request accepts JSON.
 *
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
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'aliasName' => null,
            ],
            'acceptsHtml' => [
                'name' => 'acceptsHtml',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines whether a request accepts HTML.
 *
 * @return bool
 */',
                'startLine' => 148,
                'endLine' => 151,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'aliasName' => null,
            ],
            'matchesType' => [
                'name' => 'matchesType',
                'parameters' => [
                    'actual' => [
                        'name' => 'actual',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 160,
                        'endLine' => 160,
                        'startColumn' => 40,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'type' => [
                        'name' => 'type',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 160,
                        'endLine' => 160,
                        'startColumn' => 49,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the given content types match.
 *
 * @param  string  $actual
 * @param  string  $type
 * @return bool
 */',
                'startLine' => 160,
                'endLine' => 169,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'aliasName' => null,
            ],
            'format' => [
                'name' => 'format',
                'parameters' => [
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => '\'html\'',
                            'attributes' => [
                                'startLine' => 177,
                                'endLine' => 177,
                                'startTokenPos' => 854,
                                'startFilePos' => 4396,
                                'endTokenPos' => 854,
                                'endFilePos' => 4401,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 177,
                        'endLine' => 177,
                        'startColumn' => 28,
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
 * Get the data format expected in the response.
 *
 * @param  string  $default
 * @return string
 */',
                'startLine' => 177,
                'endLine' => 186,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Concerns',
                'declaringClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'implementingClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
                'currentClassName' => 'Illuminate\\Http\\Concerns\\InteractsWithContentTypes',
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
