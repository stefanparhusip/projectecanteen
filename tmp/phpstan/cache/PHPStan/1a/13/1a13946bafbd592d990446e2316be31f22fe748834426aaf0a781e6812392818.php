<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/PendingRequest.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Client\PendingRequest
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-df2959e5dac57b3f47a166a53353ff2887ab5fc3eeb6dd7c858924704c78a41a-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Http\\Client\\PendingRequest',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/PendingRequest.php',
            ],
        ],
        'namespace' => 'Illuminate\\Http\\Client',
        'name' => 'Illuminate\\Http\\Client\\PendingRequest',
        'shortName' => 'PendingRequest',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @template TAsync of bool = false
 */',
        'attributes' => [
        ],
        'startLine' => 38,
        'endLine' => 1897,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\Conditionable',
            1 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'factory' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'factory',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The factory instance.
 *
 * @var \\Illuminate\\Http\\Client\\Factory|null
 */',
                'attributes' => [
                ],
                'startLine' => 47,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'client' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'client',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The Guzzle client instance.
 *
 * @var \\GuzzleHttp\\Client
 */',
                'attributes' => [
                ],
                'startLine' => 54,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'handler' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'handler',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The Guzzle HTTP handler.
 *
 * @var callable
 */',
                'attributes' => [
                ],
                'startLine' => 61,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'baseUrl' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'baseUrl',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'\'',
                    'attributes' => [
                        'startLine' => 68,
                        'endLine' => 68,
                        'startTokenPos' => 197,
                        'startFilePos' => 1644,
                        'endTokenPos' => 197,
                        'endFilePos' => 1645,
                    ],
                ],
                'docComment' => '/**
 * The base URL for the request.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 68,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 28,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'urlParameters' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'urlParameters',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 75,
                        'endLine' => 75,
                        'startTokenPos' => 208,
                        'startFilePos' => 1781,
                        'endTokenPos' => 209,
                        'endFilePos' => 1782,
                    ],
                ],
                'docComment' => '/**
 * The parameters that can be substituted into the URL.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 75,
                'endLine' => 75,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'bodyFormat' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'bodyFormat',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The request body format.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 82,
                'endLine' => 82,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'pendingBody' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'pendingBody',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The raw body for the request.
 *
 * @var \\Psr\\Http\\Message\\StreamInterface|string
 */',
                'attributes' => [
                ],
                'startLine' => 89,
                'endLine' => 89,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'pendingFiles' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'pendingFiles',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 96,
                        'endLine' => 96,
                        'startTokenPos' => 234,
                        'startFilePos' => 2143,
                        'endTokenPos' => 235,
                        'endFilePos' => 2144,
                    ],
                ],
                'docComment' => '/**
 * The pending files for the request.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 96,
                'endLine' => 96,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'cookies' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'cookies',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The request cookies.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 103,
                'endLine' => 103,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'transferStats' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'transferStats',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The transfer stats for the request.
 *
 * @var \\GuzzleHttp\\TransferStats
 */',
                'attributes' => [
                ],
                'startLine' => 110,
                'endLine' => 110,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'options' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'options',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 117,
                        'endLine' => 117,
                        'startTokenPos' => 260,
                        'startFilePos' => 2471,
                        'endTokenPos' => 261,
                        'endFilePos' => 2472,
                    ],
                ],
                'docComment' => '/**
 * The request options.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 117,
                'endLine' => 117,
                'startColumn' => 5,
                'endColumn' => 28,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'throwCallback' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'throwCallback',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * A callback to run when throwing if a server or client error occurs.
 *
 * @var \\Closure
 */',
                'attributes' => [
                ],
                'startLine' => 124,
                'endLine' => 124,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'throwIfCallback' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'throwIfCallback',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * A callback to check if an exception should be thrown when a server or client error occurs.
 *
 * @var \\Closure
 */',
                'attributes' => [
                ],
                'startLine' => 131,
                'endLine' => 131,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'tries' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'tries',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '1',
                    'attributes' => [
                        'startLine' => 138,
                        'endLine' => 138,
                        'startTokenPos' => 286,
                        'startFilePos' => 2910,
                        'endTokenPos' => 286,
                        'endFilePos' => 2910,
                    ],
                ],
                'docComment' => '/**
 * The number of times to try the request.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 138,
                'endLine' => 138,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'retryDelay' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'retryDelay',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '100',
                    'attributes' => [
                        'startLine' => 145,
                        'endLine' => 145,
                        'startTokenPos' => 297,
                        'startFilePos' => 3067,
                        'endTokenPos' => 297,
                        'endFilePos' => 3069,
                    ],
                ],
                'docComment' => '/**
 * The number of milliseconds to wait between retries.
 *
 * @var (Closure(int, mixed): int)|int
 */',
                'attributes' => [
                ],
                'startLine' => 145,
                'endLine' => 145,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'retryThrow' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'retryThrow',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'true',
                    'attributes' => [
                        'startLine' => 152,
                        'endLine' => 152,
                        'startTokenPos' => 308,
                        'startFilePos' => 3201,
                        'endTokenPos' => 308,
                        'endFilePos' => 3204,
                    ],
                ],
                'docComment' => '/**
 * Whether to throw an exception when all retries fail.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 152,
                'endLine' => 152,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'retryWhenCallback' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'retryWhenCallback',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 159,
                        'endLine' => 159,
                        'startTokenPos' => 319,
                        'startFilePos' => 3407,
                        'endTokenPos' => 319,
                        'endFilePos' => 3410,
                    ],
                ],
                'docComment' => '/**
 * The callback that will determine if the request should be retried.
 *
 * @var (callable(\\Throwable, static, string|null): bool)|null
 */',
                'attributes' => [
                ],
                'startLine' => 159,
                'endLine' => 159,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'beforeSendingCallbacks' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'beforeSendingCallbacks',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The callbacks that should execute before the request is sent.
 *
 * @var \\Illuminate\\Support\\Collection
 */',
                'attributes' => [
                ],
                'startLine' => 166,
                'endLine' => 166,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'afterResponseCallbacks' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'afterResponseCallbacks',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The callbacks that should execute after the Laravel Response is built.
 *
 * @var \\Illuminate\\Support\\Collection<int, (callable(\\Illuminate\\Http\\Client\\Response): \\Illuminate\\Http\\Client\\Response|null)>
 */',
                'attributes' => [
                ],
                'startLine' => 173,
                'endLine' => 173,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'stubCallbacks' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'stubCallbacks',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The stub callables that will handle requests.
 *
 * @var \\Illuminate\\Support\\Collection|null
 */',
                'attributes' => [
                ],
                'startLine' => 180,
                'endLine' => 180,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'preventStrayRequests' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'preventStrayRequests',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 187,
                        'endLine' => 187,
                        'startTokenPos' => 351,
                        'startFilePos' => 4177,
                        'endTokenPos' => 351,
                        'endFilePos' => 4181,
                    ],
                ],
                'docComment' => '/**
 * Indicates that an exception should be thrown if any request is not faked.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 187,
                'endLine' => 187,
                'startColumn' => 5,
                'endColumn' => 44,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'allowedStrayRequestUrls' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'allowedStrayRequestUrls',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 194,
                        'endLine' => 194,
                        'startTokenPos' => 362,
                        'startFilePos' => 4362,
                        'endTokenPos' => 363,
                        'endFilePos' => 4363,
                    ],
                ],
                'docComment' => '/**
 * A list of URL patterns that are allowed to bypass the stray request guard.
 *
 * @var array<int, string>
 */',
                'attributes' => [
                ],
                'startLine' => 194,
                'endLine' => 194,
                'startColumn' => 5,
                'endColumn' => 44,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'middleware' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'middleware',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The middleware callables added by users that will handle requests.
 *
 * @var \\Illuminate\\Support\\Collection
 */',
                'attributes' => [
                ],
                'startLine' => 201,
                'endLine' => 201,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'async' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'async',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 208,
                        'endLine' => 208,
                        'startTokenPos' => 381,
                        'startFilePos' => 4652,
                        'endTokenPos' => 381,
                        'endFilePos' => 4656,
                    ],
                ],
                'docComment' => '/**
 * Whether the requests should be asynchronous.
 *
 * @var TAsync
 */',
                'attributes' => [
                ],
                'startLine' => 208,
                'endLine' => 208,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'attributes' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'attributes',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 215,
                        'endLine' => 215,
                        'startTokenPos' => 392,
                        'startFilePos' => 4796,
                        'endTokenPos' => 393,
                        'endFilePos' => 4797,
                    ],
                ],
                'docComment' => '/**
 * The attributes to track with the request.
 *
 * @var array<array-key, mixed>
 */',
                'attributes' => [
                ],
                'startLine' => 215,
                'endLine' => 215,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'promise' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'promise',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The pending request promise.
 *
 * @var \\GuzzleHttp\\Promise\\PromiseInterface
 */',
                'attributes' => [
                ],
                'startLine' => 222,
                'endLine' => 222,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'request' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'request',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The sent request object, if a request has been made.
 *
 * @var \\Illuminate\\Http\\Client\\Request|null
 */',
                'attributes' => [
                ],
                'startLine' => 229,
                'endLine' => 229,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'mergeableOptions' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'mergeableOptions',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'cookies\', \'form_params\', \'headers\', \'json\', \'multipart\', \'query\']',
                    'attributes' => [
                        'startLine' => 236,
                        'endLine' => 243,
                        'startTokenPos' => 418,
                        'startFilePos' => 5246,
                        'endTokenPos' => 438,
                        'endFilePos' => 5367,
                    ],
                ],
                'docComment' => '/**
 * The Guzzle request options that are mergeable via array_merge_recursive.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 236,
                'endLine' => 243,
                'startColumn' => 5,
                'endColumn' => 6,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'truncateExceptionsAt' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'name' => 'truncateExceptionsAt',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 250,
                        'endLine' => 250,
                        'startTokenPos' => 449,
                        'startFilePos' => 5532,
                        'endTokenPos' => 449,
                        'endFilePos' => 5535,
                    ],
                ],
                'docComment' => '/**
 * The length at which request exceptions will be truncated.
 *
 * @var int<1, max>|false|null
 */',
                'attributes' => [
                ],
                'startLine' => 250,
                'endLine' => 250,
                'startColumn' => 5,
                'endColumn' => 43,
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
                    'factory' => [
                        'name' => 'factory',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 258,
                                'endLine' => 258,
                                'startTokenPos' => 467,
                                'startFilePos' => 5752,
                                'endTokenPos' => 467,
                                'endFilePos' => 5755,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Illuminate\\Http\\Client\\Factory',
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
                        'startLine' => 258,
                        'endLine' => 258,
                        'startColumn' => 33,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'middleware' => [
                        'name' => 'middleware',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 258,
                                'endLine' => 258,
                                'startTokenPos' => 474,
                                'startFilePos' => 5772,
                                'endTokenPos' => 475,
                                'endFilePos' => 5773,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 258,
                        'endLine' => 258,
                        'startColumn' => 59,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new HTTP Client instance.
 *
 * @param  \\Illuminate\\Http\\Client\\Factory|null  $factory
 * @param  array  $middleware
 */',
                'startLine' => 258,
                'endLine' => 280,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'baseUrl' => [
                'name' => 'baseUrl',
                'parameters' => [
                    'url' => [
                        'name' => 'url',
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
                        'startLine' => 288,
                        'endLine' => 288,
                        'startColumn' => 29,
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
 * Set the base URL for the pending request.
 *
 * @param  string  $url
 * @return $this
 */',
                'startLine' => 288,
                'endLine' => 293,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withBody' => [
                'name' => 'withBody',
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
                        'startLine' => 302,
                        'endLine' => 302,
                        'startColumn' => 30,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'contentType' => [
                        'name' => 'contentType',
                        'default' => [
                            'code' => '\'application/json\'',
                            'attributes' => [
                                'startLine' => 302,
                                'endLine' => 302,
                                'startTokenPos' => 674,
                                'startFilePos' => 6963,
                                'endTokenPos' => 674,
                                'endFilePos' => 6980,
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
                        'startColumn' => 40,
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
 * Attach a raw body to the request.
 *
 * @param  \\Psr\\Http\\Message\\StreamInterface|string  $content
 * @param  string  $contentType
 * @return $this
 */',
                'startLine' => 302,
                'endLine' => 311,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'asJson' => [
                'name' => 'asJson',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate the request contains JSON.
 *
 * @return $this
 */',
                'startLine' => 318,
                'endLine' => 321,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'asForm' => [
                'name' => 'asForm',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate the request contains form parameters.
 *
 * @return $this
 */',
                'startLine' => 328,
                'endLine' => 331,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'attach' => [
                'name' => 'attach',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 342,
                        'endLine' => 342,
                        'startColumn' => 28,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'contents' => [
                        'name' => 'contents',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 342,
                                'endLine' => 342,
                                'startTokenPos' => 784,
                                'startFilePos' => 7853,
                                'endTokenPos' => 784,
                                'endFilePos' => 7854,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 342,
                        'endLine' => 342,
                        'startColumn' => 35,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'filename' => [
                        'name' => 'filename',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 342,
                                'endLine' => 342,
                                'startTokenPos' => 791,
                                'startFilePos' => 7869,
                                'endTokenPos' => 791,
                                'endFilePos' => 7872,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 342,
                        'endLine' => 342,
                        'startColumn' => 51,
                        'endColumn' => 66,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 342,
                                'endLine' => 342,
                                'startTokenPos' => 800,
                                'startFilePos' => 7892,
                                'endTokenPos' => 801,
                                'endFilePos' => 7893,
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
                        'startLine' => 342,
                        'endLine' => 342,
                        'startColumn' => 69,
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
 * Attach a file to the request.
 *
 * @param  string|array  $name
 * @param  string|resource  $contents
 * @param  string|null  $filename
 * @param  array  $headers
 * @return $this
 */',
                'startLine' => 342,
                'endLine' => 362,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'asMultipart' => [
                'name' => 'asMultipart',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate the request is a multi-part form request.
 *
 * @return $this
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
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'bodyFormat' => [
                'name' => 'bodyFormat',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
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
                        'startLine' => 380,
                        'endLine' => 380,
                        'startColumn' => 32,
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
 * Specify the body format of the request.
 *
 * @param  string  $format
 * @return $this
 */',
                'startLine' => 380,
                'endLine' => 385,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withQueryParameters' => [
                'name' => 'withQueryParameters',
                'parameters' => [
                    'parameters' => [
                        'name' => 'parameters',
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
                        'startLine' => 393,
                        'endLine' => 393,
                        'startColumn' => 41,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the given query parameters in the request URI.
 *
 * @param  array  $parameters
 * @return $this
 */',
                'startLine' => 393,
                'endLine' => 400,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'contentType' => [
                'name' => 'contentType',
                'parameters' => [
                    'contentType' => [
                        'name' => 'contentType',
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
                        'startLine' => 408,
                        'endLine' => 408,
                        'startColumn' => 33,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify the request\'s content type.
 *
 * @param  string  $contentType
 * @return $this
 */',
                'startLine' => 408,
                'endLine' => 413,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'acceptJson' => [
                'name' => 'acceptJson',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that JSON should be returned by the server.
 *
 * @return $this
 */',
                'startLine' => 420,
                'endLine' => 423,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'accept' => [
                'name' => 'accept',
                'parameters' => [
                    'contentType' => [
                        'name' => 'contentType',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 431,
                        'endLine' => 431,
                        'startColumn' => 28,
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
 * Indicate the type of content that should be returned by the server.
 *
 * @param  string  $contentType
 * @return $this
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
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withHeaders' => [
                'name' => 'withHeaders',
                'parameters' => [
                    'headers' => [
                        'name' => 'headers',
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
                        'startLine' => 442,
                        'endLine' => 442,
                        'startColumn' => 33,
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
 * Add the given headers to the request.
 *
 * @param  array  $headers
 * @return $this
 */',
                'startLine' => 442,
                'endLine' => 449,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withHeader' => [
                'name' => 'withHeader',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 458,
                        'endLine' => 458,
                        'startColumn' => 32,
                        'endColumn' => 36,
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
                        'startLine' => 458,
                        'endLine' => 458,
                        'startColumn' => 39,
                        'endColumn' => 44,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the given header to the request.
 *
 * @param  string  $name
 * @param  mixed  $value
 * @return $this
 */',
                'startLine' => 458,
                'endLine' => 461,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'replaceHeaders' => [
                'name' => 'replaceHeaders',
                'parameters' => [
                    'headers' => [
                        'name' => 'headers',
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
                        'startLine' => 469,
                        'endLine' => 469,
                        'startColumn' => 36,
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
 * Replace the given headers on the request.
 *
 * @param  array  $headers
 * @return $this
 */',
                'startLine' => 469,
                'endLine' => 474,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withBasicAuth' => [
                'name' => 'withBasicAuth',
                'parameters' => [
                    'username' => [
                        'name' => 'username',
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
                        'startLine' => 483,
                        'endLine' => 483,
                        'startColumn' => 35,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'password' => [
                        'name' => 'password',
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
                        'startLine' => 483,
                        'endLine' => 483,
                        'startColumn' => 53,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify the basic authentication username and password for the request.
 *
 * @param  string  $username
 * @param  string  $password
 * @return $this
 */',
                'startLine' => 483,
                'endLine' => 488,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withDigestAuth' => [
                'name' => 'withDigestAuth',
                'parameters' => [
                    'username' => [
                        'name' => 'username',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 497,
                        'endLine' => 497,
                        'startColumn' => 36,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'password' => [
                        'name' => 'password',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 497,
                        'endLine' => 497,
                        'startColumn' => 47,
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
 * Specify the digest authentication username and password for the request.
 *
 * @param  string  $username
 * @param  string  $password
 * @return $this
 */',
                'startLine' => 497,
                'endLine' => 502,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withNtlmAuth' => [
                'name' => 'withNtlmAuth',
                'parameters' => [
                    'username' => [
                        'name' => 'username',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 511,
                        'endLine' => 511,
                        'startColumn' => 34,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'password' => [
                        'name' => 'password',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 511,
                        'endLine' => 511,
                        'startColumn' => 45,
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
 * Specify the NTLM authentication username and password for the request.
 *
 * @param  string  $username
 * @param  string  $password
 * @return $this
 */',
                'startLine' => 511,
                'endLine' => 516,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withToken' => [
                'name' => 'withToken',
                'parameters' => [
                    'token' => [
                        'name' => 'token',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 525,
                        'endLine' => 525,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'type' => [
                        'name' => 'type',
                        'default' => [
                            'code' => '\'Bearer\'',
                            'attributes' => [
                                'startLine' => 525,
                                'endLine' => 525,
                                'startTokenPos' => 1500,
                                'startFilePos' => 12325,
                                'endTokenPos' => 1500,
                                'endFilePos' => 12332,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 525,
                        'endLine' => 525,
                        'startColumn' => 39,
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
 * Specify an authorization token for the request.
 *
 * @param  string  $token
 * @param  string  $type
 * @return $this
 */',
                'startLine' => 525,
                'endLine' => 530,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withUserAgent' => [
                'name' => 'withUserAgent',
                'parameters' => [
                    'userAgent' => [
                        'name' => 'userAgent',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 538,
                        'endLine' => 538,
                        'startColumn' => 35,
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
 * Specify the user agent for the request.
 *
 * @param  string|bool  $userAgent
 * @return $this
 */',
                'startLine' => 538,
                'endLine' => 543,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withUrlParameters' => [
                'name' => 'withUrlParameters',
                'parameters' => [
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 551,
                                'endLine' => 551,
                                'startTokenPos' => 1627,
                                'startFilePos' => 13047,
                                'endTokenPos' => 1628,
                                'endFilePos' => 13048,
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
                        'startLine' => 551,
                        'endLine' => 551,
                        'startColumn' => 39,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify the URL parameters that can be substituted into the request URL.
 *
 * @param  array  $parameters
 * @return $this
 */',
                'startLine' => 551,
                'endLine' => 556,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withCookies' => [
                'name' => 'withCookies',
                'parameters' => [
                    'cookies' => [
                        'name' => 'cookies',
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
                        'startLine' => 565,
                        'endLine' => 565,
                        'startColumn' => 33,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'domain' => [
                        'name' => 'domain',
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
                        'startLine' => 565,
                        'endLine' => 565,
                        'startColumn' => 49,
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
 * Specify the cookies that should be included with the request.
 *
 * @param  array  $cookies
 * @param  string  $domain
 * @return $this
 */',
                'startLine' => 565,
                'endLine' => 572,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'maxRedirects' => [
                'name' => 'maxRedirects',
                'parameters' => [
                    'max' => [
                        'name' => 'max',
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
                        'startLine' => 580,
                        'endLine' => 580,
                        'startColumn' => 34,
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
 * Specify the maximum number of redirects to allow.
 *
 * @param  int  $max
 * @return $this
 */',
                'startLine' => 580,
                'endLine' => 585,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withoutRedirecting' => [
                'name' => 'withoutRedirecting',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that redirects should not be followed.
 *
 * @return $this
 */',
                'startLine' => 592,
                'endLine' => 597,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withoutVerifying' => [
                'name' => 'withoutVerifying',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that TLS certificates should not be verified.
 *
 * @return $this
 */',
                'startLine' => 604,
                'endLine' => 609,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'sink' => [
                'name' => 'sink',
                'parameters' => [
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 617,
                        'endLine' => 617,
                        'startColumn' => 26,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify the path where the body of the response should be stored.
 *
 * @param  string|resource  $to
 * @return $this
 */',
                'startLine' => 617,
                'endLine' => 622,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'timeout' => [
                'name' => 'timeout',
                'parameters' => [
                    'seconds' => [
                        'name' => 'seconds',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
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
                        'startLine' => 630,
                        'endLine' => 630,
                        'startColumn' => 29,
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
 * Specify the timeout (in seconds) for the request.
 *
 * @param  int|float  $seconds
 * @return $this
 */',
                'startLine' => 630,
                'endLine' => 635,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'connectTimeout' => [
                'name' => 'connectTimeout',
                'parameters' => [
                    'seconds' => [
                        'name' => 'seconds',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
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
                        'startLine' => 643,
                        'endLine' => 643,
                        'startColumn' => 36,
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
 * Specify the connect timeout (in seconds) for the request.
 *
 * @param  int|float  $seconds
 * @return $this
 */',
                'startLine' => 643,
                'endLine' => 648,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'retry' => [
                'name' => 'retry',
                'parameters' => [
                    'times' => [
                        'name' => 'times',
                        'default' => null,
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
                                            'name' => 'int',
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
                        'startLine' => 659,
                        'endLine' => 659,
                        'startColumn' => 27,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'sleepMilliseconds' => [
                        'name' => 'sleepMilliseconds',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 659,
                                'endLine' => 659,
                                'startTokenPos' => 2087,
                                'startFilePos' => 15866,
                                'endTokenPos' => 2087,
                                'endFilePos' => 15866,
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
                                            'name' => 'int',
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
                        'startLine' => 659,
                        'endLine' => 659,
                        'startColumn' => 45,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'when' => [
                        'name' => 'when',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 659,
                                'endLine' => 659,
                                'startTokenPos' => 2097,
                                'startFilePos' => 15887,
                                'endTokenPos' => 2097,
                                'endFilePos' => 15890,
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
                        'startLine' => 659,
                        'endLine' => 659,
                        'startColumn' => 81,
                        'endColumn' => 102,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'throw' => [
                        'name' => 'throw',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 659,
                                'endLine' => 659,
                                'startTokenPos' => 2106,
                                'startFilePos' => 15907,
                                'endTokenPos' => 2106,
                                'endFilePos' => 15910,
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
                        'startLine' => 659,
                        'endLine' => 659,
                        'startColumn' => 105,
                        'endColumn' => 122,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify the number of times the request should be attempted.
 *
 * @param  array|int  $times
 * @param  (Closure(int, mixed): int)|int  $sleepMilliseconds
 * @param  (callable(\\Throwable, static, string|null): bool)|null  $when
 * @param  bool  $throw
 * @return $this
 */',
                'startLine' => 659,
                'endLine' => 667,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withOptions' => [
                'name' => 'withOptions',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
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
                        'startLine' => 675,
                        'endLine' => 675,
                        'startColumn' => 33,
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
 * Replace the specified options on the request.
 *
 * @param  array  $options
 * @return $this
 */',
                'startLine' => 675,
                'endLine' => 683,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withMiddleware' => [
                'name' => 'withMiddleware',
                'parameters' => [
                    'middleware' => [
                        'name' => 'middleware',
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
                        'startLine' => 691,
                        'endLine' => 691,
                        'startColumn' => 36,
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
 * Add new middleware the client handler stack.
 *
 * @param  callable  $middleware
 * @return $this
 */',
                'startLine' => 691,
                'endLine' => 696,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withRequestMiddleware' => [
                'name' => 'withRequestMiddleware',
                'parameters' => [
                    'middleware' => [
                        'name' => 'middleware',
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
                        'startLine' => 704,
                        'endLine' => 704,
                        'startColumn' => 43,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add new request middleware the client handler stack.
 *
 * @param  callable  $middleware
 * @return $this
 */',
                'startLine' => 704,
                'endLine' => 709,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withResponseMiddleware' => [
                'name' => 'withResponseMiddleware',
                'parameters' => [
                    'middleware' => [
                        'name' => 'middleware',
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
                        'startLine' => 717,
                        'endLine' => 717,
                        'startColumn' => 44,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add new response middleware the client handler stack.
 *
 * @param  callable  $middleware
 * @return $this
 */',
                'startLine' => 717,
                'endLine' => 722,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'withAttributes' => [
                'name' => 'withAttributes',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 730,
                        'endLine' => 730,
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
 * Set arbitrary attributes to store with the request.
 *
 * @param  array<array-key, mixed>  $attributes
 * @return $this
 */',
                'startLine' => 730,
                'endLine' => 735,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'beforeSending' => [
                'name' => 'beforeSending',
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
                        'startLine' => 743,
                        'endLine' => 743,
                        'startColumn' => 35,
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
 * Add a new "before sending" callback to the request.
 *
 * @param  callable  $callback
 * @return $this
 */',
                'startLine' => 743,
                'endLine' => 748,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'afterResponse' => [
                'name' => 'afterResponse',
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
                        'startLine' => 756,
                        'endLine' => 756,
                        'startColumn' => 35,
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
 * Add a new callback to execute after the response is built.
 *
 * @param  (callable(\\Illuminate\\Http\\Client\\Response): \\Illuminate\\Http\\Client\\Response|null)  $callback
 * @return $this
 */',
                'startLine' => 756,
                'endLine' => 761,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'throw' => [
                'name' => 'throw',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 769,
                                'endLine' => 769,
                                'startTokenPos' => 2471,
                                'startFilePos' => 18654,
                                'endTokenPos' => 2471,
                                'endFilePos' => 18657,
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
                        'startLine' => 769,
                        'endLine' => 769,
                        'startColumn' => 27,
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
 * Throw an exception if a server or client error occurs.
 *
 * @param  callable|null  $callback
 * @return $this
 */',
                'startLine' => 769,
                'endLine' => 774,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'throwIf' => [
                'name' => 'throwIf',
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
                        'startLine' => 782,
                        'endLine' => 782,
                        'startColumn' => 29,
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
 * Throw an exception if a server or client error occurred and the given condition evaluates to true.
 *
 * @param  callable|bool  $condition
 * @return $this
 */',
                'startLine' => 782,
                'endLine' => 789,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'throwUnless' => [
                'name' => 'throwUnless',
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
                        'startLine' => 797,
                        'endLine' => 797,
                        'startColumn' => 33,
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
 * Throw an exception if a server or client error occurred and the given condition evaluates to false.
 *
 * @param  callable|bool  $condition
 * @return $this
 */',
                'startLine' => 797,
                'endLine' => 800,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'dump' => [
                'name' => 'dump',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the request before sending.
 *
 * @return $this
 */',
                'startLine' => 807,
                'endLine' => 816,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'dd' => [
                'name' => 'dd',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the request before sending and end the script.
 *
 * @return $this
 */',
                'startLine' => 823,
                'endLine' => 834,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'get' => [
                'name' => 'get',
                'parameters' => [
                    'url' => [
                        'name' => 'url',
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
                        'startLine' => 847,
                        'endLine' => 847,
                        'startColumn' => 25,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'query' => [
                        'name' => 'query',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 847,
                                'endLine' => 847,
                                'startTokenPos' => 2792,
                                'startFilePos' => 20766,
                                'endTokenPos' => 2792,
                                'endFilePos' => 20769,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 847,
                        'endLine' => 847,
                        'startColumn' => 38,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Issue a GET request to the given URL.
 *
 * @param  string  $url
 * @param  array|string|null  $query
 * @return \\Illuminate\\Http\\Client\\Response|\\GuzzleHttp\\Promise\\PromiseInterface
 *
 * @phpstan-return (TAsync is false ?  \\Illuminate\\Http\\Client\\Response : \\GuzzleHttp\\Promise\\PromiseInterface)
 *
 * @throws \\Illuminate\\Http\\Client\\ConnectionException
 */',
                'startLine' => 847,
                'endLine' => 852,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'head' => [
                'name' => 'head',
                'parameters' => [
                    'url' => [
                        'name' => 'url',
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
                        'startLine' => 865,
                        'endLine' => 865,
                        'startColumn' => 26,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'query' => [
                        'name' => 'query',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 865,
                                'endLine' => 865,
                                'startTokenPos' => 2856,
                                'startFilePos' => 21358,
                                'endTokenPos' => 2856,
                                'endFilePos' => 21361,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 865,
                        'endLine' => 865,
                        'startColumn' => 39,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Issue a HEAD request to the given URL.
 *
 * @param  string  $url
 * @param  array|string|null  $query
 * @return \\Illuminate\\Http\\Client\\Response|\\GuzzleHttp\\Promise\\PromiseInterface
 *
 * @phpstan-return (TAsync is false ?  \\Illuminate\\Http\\Client\\Response : \\GuzzleHttp\\Promise\\PromiseInterface)
 *
 * @throws \\Illuminate\\Http\\Client\\ConnectionException
 */',
                'startLine' => 865,
                'endLine' => 870,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'post' => [
                'name' => 'post',
                'parameters' => [
                    'url' => [
                        'name' => 'url',
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
                        'startLine' => 883,
                        'endLine' => 883,
                        'startColumn' => 26,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'data' => [
                        'name' => 'data',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 883,
                                'endLine' => 883,
                                'startTokenPos' => 2920,
                                'startFilePos' => 21995,
                                'endTokenPos' => 2921,
                                'endFilePos' => 21996,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 883,
                        'endLine' => 883,
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
 * Issue a POST request to the given URL.
 *
 * @param  string  $url
 * @param  array|\\JsonSerializable|\\Illuminate\\Contracts\\Support\\Arrayable  $data
 * @return \\Illuminate\\Http\\Client\\Response|\\GuzzleHttp\\Promise\\PromiseInterface
 *
 * @phpstan-return (TAsync is false ?  \\Illuminate\\Http\\Client\\Response : \\GuzzleHttp\\Promise\\PromiseInterface)
 *
 * @throws \\Illuminate\\Http\\Client\\ConnectionException
 */',
                'startLine' => 883,
                'endLine' => 888,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'patch' => [
                'name' => 'patch',
                'parameters' => [
                    'url' => [
                        'name' => 'url',
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
                        'startLine' => 901,
                        'endLine' => 901,
                        'startColumn' => 27,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'data' => [
                        'name' => 'data',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 901,
                                'endLine' => 901,
                                'startTokenPos' => 2972,
                                'startFilePos' => 22612,
                                'endTokenPos' => 2973,
                                'endFilePos' => 22613,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 901,
                        'endLine' => 901,
                        'startColumn' => 40,
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
 * Issue a PATCH request to the given URL.
 *
 * @param  string  $url
 * @param  array|\\JsonSerializable|\\Illuminate\\Contracts\\Support\\Arrayable  $data
 * @return \\Illuminate\\Http\\Client\\Response|\\GuzzleHttp\\Promise\\PromiseInterface
 *
 * @phpstan-return (TAsync is false ?  \\Illuminate\\Http\\Client\\Response : \\GuzzleHttp\\Promise\\PromiseInterface)
 *
 * @throws \\Illuminate\\Http\\Client\\ConnectionException
 */',
                'startLine' => 901,
                'endLine' => 906,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'put' => [
                'name' => 'put',
                'parameters' => [
                    'url' => [
                        'name' => 'url',
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
                        'startLine' => 919,
                        'endLine' => 919,
                        'startColumn' => 25,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'data' => [
                        'name' => 'data',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 919,
                                'endLine' => 919,
                                'startTokenPos' => 3024,
                                'startFilePos' => 23226,
                                'endTokenPos' => 3025,
                                'endFilePos' => 23227,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 919,
                        'endLine' => 919,
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
 * Issue a PUT request to the given URL.
 *
 * @param  string  $url
 * @param  array|\\JsonSerializable|\\Illuminate\\Contracts\\Support\\Arrayable  $data
 * @return \\Illuminate\\Http\\Client\\Response|\\GuzzleHttp\\Promise\\PromiseInterface
 *
 * @phpstan-return (TAsync is false ?  \\Illuminate\\Http\\Client\\Response : \\GuzzleHttp\\Promise\\PromiseInterface)
 *
 * @throws \\Illuminate\\Http\\Client\\ConnectionException
 */',
                'startLine' => 919,
                'endLine' => 924,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'delete' => [
                'name' => 'delete',
                'parameters' => [
                    'url' => [
                        'name' => 'url',
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
                        'startLine' => 937,
                        'endLine' => 937,
                        'startColumn' => 28,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'data' => [
                        'name' => 'data',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 937,
                                'endLine' => 937,
                                'startTokenPos' => 3076,
                                'startFilePos' => 23844,
                                'endTokenPos' => 3077,
                                'endFilePos' => 23845,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 937,
                        'endLine' => 937,
                        'startColumn' => 41,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Issue a DELETE request to the given URL.
 *
 * @param  string  $url
 * @param  array|\\JsonSerializable|\\Illuminate\\Contracts\\Support\\Arrayable  $data
 * @return \\Illuminate\\Http\\Client\\Response|\\GuzzleHttp\\Promise\\PromiseInterface
 *
 * @phpstan-return (TAsync is false ?  \\Illuminate\\Http\\Client\\Response : \\GuzzleHttp\\Promise\\PromiseInterface)
 *
 * @throws \\Illuminate\\Http\\Client\\ConnectionException
 */',
                'startLine' => 937,
                'endLine' => 942,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'pool' => [
                'name' => 'pool',
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
                        'startLine' => 951,
                        'endLine' => 951,
                        'startColumn' => 26,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'concurrency' => [
                        'name' => 'concurrency',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 951,
                                'endLine' => 951,
                                'startTokenPos' => 3143,
                                'startFilePos' => 24326,
                                'endTokenPos' => 3143,
                                'endFilePos' => 24329,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
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
                        'startLine' => 951,
                        'endLine' => 951,
                        'startColumn' => 46,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Send a pool of asynchronous requests concurrently.
 *
 * @param  (callable(\\Illuminate\\Http\\Client\\Pool): mixed)  $callback
 * @param  non-negative-int|null  $concurrency
 * @return array<array-key, \\Illuminate\\Http\\Client\\Response|\\Throwable>
 */',
                'startLine' => 951,
                'endLine' => 995,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => true,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'batch' => [
                'name' => 'batch',
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
                        'startLine' => 1003,
                        'endLine' => 1003,
                        'startColumn' => 27,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Http\\Client\\Batch',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Send a pool of asynchronous requests concurrently, with callbacks for introspection.
 *
 * @param  callable  $callback
 * @return \\Illuminate\\Http\\Client\\Batch
 */',
                'startLine' => 1003,
                'endLine' => 1006,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'send' => [
                'name' => 'send',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
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
                        'startLine' => 1021,
                        'endLine' => 1021,
                        'startColumn' => 26,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'url' => [
                        'name' => 'url',
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
                        'startLine' => 1021,
                        'endLine' => 1021,
                        'startColumn' => 42,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1021,
                                'endLine' => 1021,
                                'startTokenPos' => 3603,
                                'startFilePos' => 26676,
                                'endTokenPos' => 3604,
                                'endFilePos' => 26677,
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
                        'startLine' => 1021,
                        'endLine' => 1021,
                        'startColumn' => 55,
                        'endColumn' => 73,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Send the request to the given URL.
 *
 * @param  string  $method
 * @param  string  $url
 * @param  array  $options
 * @return \\Illuminate\\Http\\Client\\Response|\\Illuminate\\Http\\Client\\Promises\\LazyPromise
 *
 * @phpstan-return (TAsync is false ? \\Illuminate\\Http\\Client\\Response : \\Illuminate\\Http\\Client\\Promises\\LazyPromise)
 *
 * @throws \\Exception
 * @throws \\Illuminate\\Http\\Client\\ConnectionException
 */',
                'startLine' => 1021,
                'endLine' => 1101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'expandUrlParameters' => [
                'name' => 'expandUrlParameters',
                'parameters' => [
                    'url' => [
                        'name' => 'url',
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
                        'startLine' => 1109,
                        'endLine' => 1109,
                        'startColumn' => 44,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Substitute the URL parameters in the given URL.
 *
 * @param  string  $url
 * @return string
 */',
                'startLine' => 1109,
                'endLine' => 1112,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'parseHttpOptions' => [
                'name' => 'parseHttpOptions',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
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
                        'startLine' => 1120,
                        'endLine' => 1120,
                        'startColumn' => 41,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Parse the given HTTP options and set the appropriate additional options.
 *
 * @param  array  $options
 * @return array
 */',
                'startLine' => 1120,
                'endLine' => 1147,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'parseMultipartBodyFormat' => [
                'name' => 'parseMultipartBodyFormat',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 1155,
                        'endLine' => 1155,
                        'startColumn' => 49,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Parse multi-part form data.
 *
 * @param  array  $data
 * @return array|array[]
 */',
                'startLine' => 1155,
                'endLine' => 1175,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'makePromise' => [
                'name' => 'makePromise',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
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
                        'startLine' => 1186,
                        'endLine' => 1186,
                        'startColumn' => 36,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'url' => [
                        'name' => 'url',
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
                        'startLine' => 1186,
                        'endLine' => 1186,
                        'startColumn' => 52,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1186,
                                'endLine' => 1186,
                                'startTokenPos' => 4788,
                                'startFilePos' => 32598,
                                'endTokenPos' => 4789,
                                'endFilePos' => 32599,
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
                        'startLine' => 1186,
                        'endLine' => 1186,
                        'startColumn' => 65,
                        'endColumn' => 83,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'attempt' => [
                        'name' => 'attempt',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 1186,
                                'endLine' => 1186,
                                'startTokenPos' => 4798,
                                'startFilePos' => 32617,
                                'endTokenPos' => 4798,
                                'endFilePos' => 32617,
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
                        'startLine' => 1186,
                        'endLine' => 1186,
                        'startColumn' => 86,
                        'endColumn' => 101,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Send an asynchronous request to the given URL.
 *
 * @param  string  $method
 * @param  string  $url
 * @param  array  $options
 * @param  int  $attempt
 * @return \\GuzzleHttp\\Promise\\PromiseInterface
 */',
                'startLine' => 1186,
                'endLine' => 1218,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'handlePromiseResponse' => [
                'name' => 'handlePromiseResponse',
                'parameters' => [
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Illuminate\\Http\\Client\\Response',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Throwable',
                                            'isIdentifier' => false,
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
                        'startLine' => 1230,
                        'endLine' => 1230,
                        'startColumn' => 46,
                        'endColumn' => 73,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1230,
                        'endLine' => 1230,
                        'startColumn' => 76,
                        'endColumn' => 82,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'url' => [
                        'name' => 'url',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1230,
                        'endLine' => 1230,
                        'startColumn' => 85,
                        'endColumn' => 88,
                        'parameterIndex' => 2,
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
                        'startLine' => 1230,
                        'endLine' => 1230,
                        'startColumn' => 91,
                        'endColumn' => 98,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'attempt' => [
                        'name' => 'attempt',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1230,
                        'endLine' => 1230,
                        'startColumn' => 101,
                        'endColumn' => 108,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Handle the response of an asynchronous request.
 *
 * @param  \\Illuminate\\Http\\Client\\Response|\\Throwable  $response
 * @param  string  $method
 * @param  string  $url
 * @param  array  $options
 * @param  int  $attempt
 * @return mixed
 */',
                'startLine' => 1230,
                'endLine' => 1275,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'sendRequest' => [
                'name' => 'sendRequest',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
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
                        'startLine' => 1287,
                        'endLine' => 1287,
                        'startColumn' => 36,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'url' => [
                        'name' => 'url',
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
                        'startLine' => 1287,
                        'endLine' => 1287,
                        'startColumn' => 52,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1287,
                                'endLine' => 1287,
                                'startTokenPos' => 5495,
                                'startFilePos' => 36316,
                                'endTokenPos' => 5496,
                                'endFilePos' => 36317,
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
                        'startLine' => 1287,
                        'endLine' => 1287,
                        'startColumn' => 65,
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
 * Send a request either synchronously or asynchronously.
 *
 * @param  string  $method
 * @param  string  $url
 * @param  array  $options
 * @return \\Psr\\Http\\Message\\MessageInterface|\\GuzzleHttp\\Promise\\PromiseInterface
 *
 * @throws \\Exception
 */',
                'startLine' => 1287,
                'endLine' => 1313,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'parseRequestData' => [
                'name' => 'parseRequestData',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1323,
                        'endLine' => 1323,
                        'startColumn' => 41,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'url' => [
                        'name' => 'url',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1323,
                        'endLine' => 1323,
                        'startColumn' => 50,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
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
                        'startLine' => 1323,
                        'endLine' => 1323,
                        'startColumn' => 56,
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
 * Get the request data as an array so that we can attach it to the request for convenient assertions.
 *
 * @param  string  $method
 * @param  string  $url
 * @param  array  $options
 * @return array
 */',
                'startLine' => 1323,
                'endLine' => 1348,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'normalizeRequestOptions' => [
                'name' => 'normalizeRequestOptions',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
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
                        'startLine' => 1356,
                        'endLine' => 1356,
                        'startColumn' => 48,
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
 * Normalize the given request options.
 *
 * @param  array  $options
 * @return array
 */',
                'startLine' => 1356,
                'endLine' => 1367,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'populateResponse' => [
                'name' => 'populateResponse',
                'parameters' => [
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Http\\Client\\Response',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1375,
                        'endLine' => 1375,
                        'startColumn' => 41,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Populate the given response with additional data.
 *
 * @param  \\Illuminate\\Http\\Client\\Response  $response
 * @return \\Illuminate\\Http\\Client\\Response
 */',
                'startLine' => 1375,
                'endLine' => 1382,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'buildClient' => [
                'name' => 'buildClient',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Build the Guzzle client.
 *
 * @return \\GuzzleHttp\\Client
 */',
                'startLine' => 1389,
                'endLine' => 1392,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'requestsReusableClient' => [
                'name' => 'requestsReusableClient',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a reusable client is required.
 *
 * @return bool
 */',
                'startLine' => 1399,
                'endLine' => 1402,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'getReusableClient' => [
                'name' => 'getReusableClient',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve a reusable Guzzle client.
 *
 * @return \\GuzzleHttp\\Client
 */',
                'startLine' => 1409,
                'endLine' => 1412,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'createClient' => [
                'name' => 'createClient',
                'parameters' => [
                    'handlerStack' => [
                        'name' => 'handlerStack',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1420,
                        'endLine' => 1420,
                        'startColumn' => 34,
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
 * Create new Guzzle client.
 *
 * @param  \\GuzzleHttp\\HandlerStack  $handlerStack
 * @return \\GuzzleHttp\\Client
 */',
                'startLine' => 1420,
                'endLine' => 1426,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'buildHandlerStack' => [
                'name' => 'buildHandlerStack',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Build the Guzzle client handler stack.
 *
 * @return \\GuzzleHttp\\HandlerStack
 */',
                'startLine' => 1433,
                'endLine' => 1436,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'pushHandlers' => [
                'name' => 'pushHandlers',
                'parameters' => [
                    'handlerStack' => [
                        'name' => 'handlerStack',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1444,
                        'endLine' => 1444,
                        'startColumn' => 34,
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
 * Add the necessary handlers to the given handler stack.
 *
 * @param  \\GuzzleHttp\\HandlerStack  $handlerStack
 * @return \\GuzzleHttp\\HandlerStack
 */',
                'startLine' => 1444,
                'endLine' => 1455,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'buildBeforeSendingHandler' => [
                'name' => 'buildBeforeSendingHandler',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Build the before sending handler.
 *
 * @return \\Closure
 */',
                'startLine' => 1462,
                'endLine' => 1469,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'buildRecorderHandler' => [
                'name' => 'buildRecorderHandler',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Build the recorder handler.
 *
 * @return \\Closure
 */',
                'startLine' => 1476,
                'endLine' => 1494,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'buildStubHandler' => [
                'name' => 'buildStubHandler',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Build the stub handler.
 *
 * @return \\Closure
 *
 * @throws \\Illuminate\\Http\\Client\\Exceptions\\StrayRequestException
 */',
                'startLine' => 1503,
                'endLine' => 1537,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'sinkStubHandler' => [
                'name' => 'sinkStubHandler',
                'parameters' => [
                    'sink' => [
                        'name' => 'sink',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1545,
                        'endLine' => 1545,
                        'startColumn' => 40,
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
 * Get the sink stub handler callback.
 *
 * @param  string  $sink
 * @return \\Closure
 */',
                'startLine' => 1545,
                'endLine' => 1559,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'runBeforeSendingCallbacks' => [
                'name' => 'runBeforeSendingCallbacks',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1568,
                        'endLine' => 1568,
                        'startColumn' => 47,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
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
                        'startLine' => 1568,
                        'endLine' => 1568,
                        'startColumn' => 57,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the "before sending" callbacks.
 *
 * @param  \\Psr\\Http\\Message\\RequestInterface  $request
 * @param  array  $options
 * @return \\Psr\\Http\\Message\\RequestInterface
 */',
                'startLine' => 1568,
                'endLine' => 1588,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'mergeOptions' => [
                'name' => 'mergeOptions',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1596,
                        'endLine' => 1596,
                        'startColumn' => 34,
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
 * Replace the given options with the current request options.
 *
 * @param  array  ...$options
 * @return array
 */',
                'startLine' => 1596,
                'endLine' => 1602,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'newResponse' => [
                'name' => 'newResponse',
                'parameters' => [
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1610,
                        'endLine' => 1610,
                        'startColumn' => 36,
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
 * Create a new response instance using the given PSR response.
 *
 * @param  \\Psr\\Http\\Message\\MessageInterface  $response
 * @return Response
 */',
                'startLine' => 1610,
                'endLine' => 1621,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'runAfterResponseCallbacks' => [
                'name' => 'runAfterResponseCallbacks',
                'parameters' => [
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Http\\Client\\Response',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1629,
                        'endLine' => 1629,
                        'startColumn' => 50,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the "after response" callbacks.
 *
 * @param  \\Illuminate\\Http\\Client\\Response  $response
 * @return \\Illuminate\\Http\\Client\\Response
 */',
                'startLine' => 1629,
                'endLine' => 1640,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'stub' => [
                'name' => 'stub',
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
                        'startLine' => 1648,
                        'endLine' => 1648,
                        'startColumn' => 26,
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
 * Register a stub callable that will intercept requests and be able to return stub responses.
 *
 * @param  callable  $callback
 * @return $this
 */',
                'startLine' => 1648,
                'endLine' => 1653,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'preventStrayRequests' => [
                'name' => 'preventStrayRequests',
                'parameters' => [
                    'prevent' => [
                        'name' => 'prevent',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1661,
                                'endLine' => 1661,
                                'startTokenPos' => 7283,
                                'startFilePos' => 47137,
                                'endTokenPos' => 7283,
                                'endFilePos' => 47140,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1661,
                        'endLine' => 1661,
                        'startColumn' => 42,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that an exception should be thrown if any request is not faked.
 *
 * @param  bool  $prevent
 * @return $this
 */',
                'startLine' => 1661,
                'endLine' => 1666,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'allowStrayRequests' => [
                'name' => 'allowStrayRequests',
                'parameters' => [
                    'only' => [
                        'name' => 'only',
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
                        'startLine' => 1674,
                        'endLine' => 1674,
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
 * Allow stray, unfaked requests entirely, or optionally allow only specific URLs.
 *
 * @param  array<int, string>  $only
 * @return $this
 */',
                'startLine' => 1674,
                'endLine' => 1679,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'isAllowedRequestUrl' => [
                'name' => 'isAllowedRequestUrl',
                'parameters' => [
                    'url' => [
                        'name' => 'url',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1687,
                        'endLine' => 1687,
                        'startColumn' => 41,
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
 * Determine if the given URL is allowed as a stray request.
 *
 * @param  string  $url
 * @return bool
 */',
                'startLine' => 1687,
                'endLine' => 1700,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'async' => [
                'name' => 'async',
                'parameters' => [
                    'async' => [
                        'name' => 'async',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1712,
                                'endLine' => 1712,
                                'startTokenPos' => 7430,
                                'startFilePos' => 48241,
                                'endTokenPos' => 7430,
                                'endFilePos' => 48244,
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
                        'startLine' => 1712,
                        'endLine' => 1712,
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
 * Toggle asynchronicity in requests.
 *
 * @template T of bool = true
 *
 * @param  T  $async
 * @return self<T>
 *
 * @phpstan-self-out self<T>
 */',
                'startLine' => 1712,
                'endLine' => 1717,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'getPromise' => [
                'name' => 'getPromise',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve the pending request promise.
 *
 * @return \\GuzzleHttp\\Promise\\PromiseInterface|null
 */',
                'startLine' => 1724,
                'endLine' => 1727,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'dispatchRequestSendingEvent' => [
                'name' => 'dispatchRequestSendingEvent',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dispatch the RequestSending event if a dispatcher is available.
 *
 * @return void
 */',
                'startLine' => 1734,
                'endLine' => 1739,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'dispatchResponseReceivedEvent' => [
                'name' => 'dispatchResponseReceivedEvent',
                'parameters' => [
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Http\\Client\\Response',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1747,
                        'endLine' => 1747,
                        'startColumn' => 54,
                        'endColumn' => 71,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dispatch the ResponseReceived event if a dispatcher is available.
 *
 * @param  \\Illuminate\\Http\\Client\\Response  $response
 * @return void
 */',
                'startLine' => 1747,
                'endLine' => 1754,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'dispatchConnectionFailedEvent' => [
                'name' => 'dispatchConnectionFailedEvent',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Http\\Client\\Request',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1763,
                        'endLine' => 1763,
                        'startColumn' => 54,
                        'endColumn' => 69,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'exception' => [
                        'name' => 'exception',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Http\\Client\\ConnectionException',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1763,
                        'endLine' => 1763,
                        'startColumn' => 72,
                        'endColumn' => 101,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dispatch the ConnectionFailed event if a dispatcher is available.
 *
 * @param  \\Illuminate\\Http\\Client\\Request  $request
 * @param  \\Illuminate\\Http\\Client\\ConnectionException  $exception
 * @return void
 */',
                'startLine' => 1763,
                'endLine' => 1768,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'truncateExceptionsAt' => [
                'name' => 'truncateExceptionsAt',
                'parameters' => [
                    'length' => [
                        'name' => 'length',
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
                        'startLine' => 1776,
                        'endLine' => 1776,
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
 * Indicate that request exceptions should be truncated to the given length.
 *
 * @param  int<1, max>  $length
 * @return $this
 */',
                'startLine' => 1776,
                'endLine' => 1781,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'dontTruncateExceptions' => [
                'name' => 'dontTruncateExceptions',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that request exceptions should not be truncated.
 *
 * @return $this
 */',
                'startLine' => 1788,
                'endLine' => 1793,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'marshalConnectionException' => [
                'name' => 'marshalConnectionException',
                'parameters' => [
                    'e' => [
                        'name' => 'e',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'GuzzleHttp\\Exception\\ConnectException',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1803,
                        'endLine' => 1803,
                        'startColumn' => 51,
                        'endColumn' => 69,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Handle the given connection exception.
 *
 * @param  \\GuzzleHttp\\Exception\\ConnectException  $e
 * @return void
 *
 * @throws \\Illuminate\\Http\\Client\\ConnectionException
 */',
                'startLine' => 1803,
                'endLine' => 1816,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'marshalRequestExceptionWithoutResponse' => [
                'name' => 'marshalRequestExceptionWithoutResponse',
                'parameters' => [
                    'e' => [
                        'name' => 'e',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'GuzzleHttp\\Exception\\RequestException',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1826,
                        'endLine' => 1826,
                        'startColumn' => 63,
                        'endColumn' => 81,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Handle the given request exception.
 *
 * @param  \\GuzzleHttp\\Exception\\RequestException  $e
 * @return void
 *
 * @throws \\Illuminate\\Http\\Client\\ConnectionException
 */',
                'startLine' => 1826,
                'endLine' => 1839,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'marshalRequestExceptionWithResponse' => [
                'name' => 'marshalRequestExceptionWithResponse',
                'parameters' => [
                    'e' => [
                        'name' => 'e',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'GuzzleHttp\\Exception\\RequestException',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1850,
                        'endLine' => 1850,
                        'startColumn' => 60,
                        'endColumn' => 78,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Handle the given request exception.
 *
 * @param  \\GuzzleHttp\\Exception\\RequestException  $e
 * @return void
 *
 * @throws \\Illuminate\\Http\\Client\\RequestException
 * @throws \\Illuminate\\Http\\Client\\ConnectionException
 */',
                'startLine' => 1850,
                'endLine' => 1860,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'setClient' => [
                'name' => 'setClient',
                'parameters' => [
                    'client' => [
                        'name' => 'client',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'GuzzleHttp\\Client',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1868,
                        'endLine' => 1868,
                        'startColumn' => 31,
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
 * Set the client instance.
 *
 * @param  \\GuzzleHttp\\Client  $client
 * @return $this
 */',
                'startLine' => 1868,
                'endLine' => 1873,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'setHandler' => [
                'name' => 'setHandler',
                'parameters' => [
                    'handler' => [
                        'name' => 'handler',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1881,
                        'endLine' => 1881,
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
 * Create a new client instance using the given handler.
 *
 * @param  callable  $handler
 * @return $this
 */',
                'startLine' => 1881,
                'endLine' => 1886,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'aliasName' => null,
            ],
            'getOptions' => [
                'name' => 'getOptions',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the pending request options.
 *
 * @return array
 */',
                'startLine' => 1893,
                'endLine' => 1896,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'implementingClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
                'currentClassName' => 'Illuminate\\Http\\Client\\PendingRequest',
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
