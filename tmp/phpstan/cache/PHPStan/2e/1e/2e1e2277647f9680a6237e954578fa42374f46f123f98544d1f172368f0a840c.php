<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../guzzlehttp/guzzle/src/Client.php-PHPStan\BetterReflection\Reflection\ReflectionClass-GuzzleHttp\Client
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-01d769df8eda4e26bfca70ac1e774a2641ccb2dd82519f1dcd3d73a531da7a7a-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'GuzzleHttp\\Client',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../guzzlehttp/guzzle/src/Client.php',
            ],
        ],
        'namespace' => 'GuzzleHttp',
        'name' => 'GuzzleHttp\\Client',
        'shortName' => 'Client',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @final
 */',
        'attributes' => [
        ],
        'startLine' => 17,
        'endLine' => 483,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'GuzzleHttp\\ClientInterface',
            1 => 'Psr\\Http\\Client\\ClientInterface',
        ],
        'traitClassNames' => [
            0 => 'GuzzleHttp\\ClientTrait',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'config' => [
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'name' => 'config',
                'modifiers' => 4,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * @var array Default request options
 */',
                'attributes' => [
                ],
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 20,
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
                    'config' => [
                        'name' => 'config',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 57,
                                'endLine' => 57,
                                'startTokenPos' => 92,
                                'startFilePos' => 1999,
                                'endTokenPos' => 93,
                                'endFilePos' => 2000,
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
                        'startLine' => 57,
                        'endLine' => 57,
                        'startColumn' => 33,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Clients accept an array of constructor parameters.
 *
 * Here\'s an example of creating a client using a base_uri and an array of
 * default request options to apply to each request:
 *
 *     $client = new Client([
 *         \'base_uri\'        => \'http://www.foo.com/1.0/\',
 *         \'timeout\'         => 0,
 *         \'allow_redirects\' => false,
 *         \'proxy\'           => \'192.168.16.1:10\'
 *     ]);
 *
 * Client configuration settings include the following options:
 *
 * - handler: (callable) Function that transfers HTTP requests over the
 *   wire. The function is called with a Psr7\\Http\\Message\\RequestInterface
 *   and array of transfer options, and must return a
 *   GuzzleHttp\\Promise\\PromiseInterface that is fulfilled with a
 *   Psr7\\Http\\Message\\ResponseInterface on success.
 *   If no handler is provided, a default handler will be created
 *   that enables all of the request options below by attaching all of the
 *   default middleware to the handler.
 * - base_uri: (string|UriInterface) Base URI of the client that is merged
 *   into relative URIs. Can be a string or instance of UriInterface.
 * - **: any request option
 *
 * @param array $config Client configuration settings.
 *
 * @see RequestOptions for a list of available request options.
 */',
                'startLine' => 57,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'currentClassName' => 'GuzzleHttp\\Client',
                'aliasName' => null,
            ],
            '__call' => [
                'name' => '__call',
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
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'args' => [
                        'name' => 'args',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 37,
                        'endColumn' => 41,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @param string $method
 * @param array  $args
 *
 * @return PromiseInterface|ResponseInterface
 *
 * @deprecated Client::__call will be removed in guzzlehttp/guzzle:8.0.
 */',
                'startLine' => 81,
                'endLine' => 93,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'currentClassName' => 'GuzzleHttp\\Client',
                'aliasName' => null,
            ],
            'sendAsync' => [
                'name' => 'sendAsync',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Psr\\Http\\Message\\RequestInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 101,
                        'endLine' => 101,
                        'startColumn' => 31,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 101,
                                'endLine' => 101,
                                'startTokenPos' => 347,
                                'startFilePos' => 3434,
                                'endTokenPos' => 348,
                                'endFilePos' => 3435,
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
                        'startLine' => 101,
                        'endLine' => 101,
                        'startColumn' => 58,
                        'endColumn' => 76,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'GuzzleHttp\\Promise\\PromiseInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asynchronously send an HTTP request.
 *
 * @param array $options Request options to apply to the given
 *                       request and to the transfer. See \\GuzzleHttp\\RequestOptions.
 */',
                'startLine' => 101,
                'endLine' => 110,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'currentClassName' => 'GuzzleHttp\\Client',
                'aliasName' => null,
            ],
            'send' => [
                'name' => 'send',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Psr\\Http\\Message\\RequestInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 120,
                        'endLine' => 120,
                        'startColumn' => 26,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 120,
                                'endLine' => 120,
                                'startTokenPos' => 431,
                                'startFilePos' => 4072,
                                'endTokenPos' => 432,
                                'endFilePos' => 4073,
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
                        'startLine' => 120,
                        'endLine' => 120,
                        'startColumn' => 53,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Psr\\Http\\Message\\ResponseInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Send an HTTP request.
 *
 * @param array $options Request options to apply to the given
 *                       request and to the transfer. See \\GuzzleHttp\\RequestOptions.
 *
 * @throws GuzzleException
 */',
                'startLine' => 120,
                'endLine' => 125,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'currentClassName' => 'GuzzleHttp\\Client',
                'aliasName' => null,
            ],
            'sendRequest' => [
                'name' => 'sendRequest',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Psr\\Http\\Message\\RequestInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 132,
                        'endLine' => 132,
                        'startColumn' => 33,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Psr\\Http\\Message\\ResponseInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * The HttpClient PSR (PSR-18) specify this method.
 *
 * {@inheritDoc}
 */',
                'startLine' => 132,
                'endLine' => 139,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'currentClassName' => 'GuzzleHttp\\Client',
                'aliasName' => null,
            ],
            'requestAsync' => [
                'name' => 'requestAsync',
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
                        'startLine' => 153,
                        'endLine' => 153,
                        'startColumn' => 34,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'uri' => [
                        'name' => 'uri',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 153,
                                'endLine' => 153,
                                'startTokenPos' => 561,
                                'startFilePos' => 5304,
                                'endTokenPos' => 561,
                                'endFilePos' => 5305,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 153,
                        'endLine' => 153,
                        'startColumn' => 50,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 153,
                                'endLine' => 153,
                                'startTokenPos' => 570,
                                'startFilePos' => 5325,
                                'endTokenPos' => 571,
                                'endFilePos' => 5326,
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
                        'startLine' => 153,
                        'endLine' => 153,
                        'startColumn' => 61,
                        'endColumn' => 79,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'GuzzleHttp\\Promise\\PromiseInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Create and send an asynchronous HTTP request.
 *
 * Use an absolute path to override the base path of the client, or a
 * relative path to append to the base path of the client. The URL can
 * contain the query string as well. Use an array to provide a URL
 * template and additional variables to use in the URL template expansion.
 *
 * @param string              $method  HTTP method
 * @param string|UriInterface $uri     URI object or string.
 * @param array               $options Request options to apply. See \\GuzzleHttp\\RequestOptions.
 */',
                'startLine' => 153,
                'endLine' => 170,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'currentClassName' => 'GuzzleHttp\\Client',
                'aliasName' => null,
            ],
            'request' => [
                'name' => 'request',
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
                        'startLine' => 185,
                        'endLine' => 185,
                        'startColumn' => 29,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'uri' => [
                        'name' => 'uri',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 185,
                                'endLine' => 185,
                                'startTokenPos' => 759,
                                'startFilePos' => 6667,
                                'endTokenPos' => 759,
                                'endFilePos' => 6668,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 185,
                        'endLine' => 185,
                        'startColumn' => 45,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 185,
                                'endLine' => 185,
                                'startTokenPos' => 768,
                                'startFilePos' => 6688,
                                'endTokenPos' => 769,
                                'endFilePos' => 6689,
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
                        'startLine' => 185,
                        'endLine' => 185,
                        'startColumn' => 56,
                        'endColumn' => 74,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Psr\\Http\\Message\\ResponseInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Create and send an HTTP request.
 *
 * Use an absolute path to override the base path of the client, or a
 * relative path to append to the base path of the client. The URL can
 * contain the query string as well.
 *
 * @param string              $method  HTTP method.
 * @param string|UriInterface $uri     URI object or string.
 * @param array               $options Request options to apply. See \\GuzzleHttp\\RequestOptions.
 *
 * @throws GuzzleException
 */',
                'startLine' => 185,
                'endLine' => 190,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'currentClassName' => 'GuzzleHttp\\Client',
                'aliasName' => null,
            ],
            'getConfig' => [
                'name' => 'getConfig',
                'parameters' => [
                    'option' => [
                        'name' => 'option',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 205,
                                'endLine' => 205,
                                'startTokenPos' => 826,
                                'startFilePos' => 7332,
                                'endTokenPos' => 826,
                                'endFilePos' => 7335,
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
                        'startLine' => 205,
                        'endLine' => 205,
                        'startColumn' => 31,
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
 * Get a client configuration option.
 *
 * These options include default request options of the client, a "handler"
 * (if utilized by the concrete client), and a "base_uri" if utilized by
 * the concrete client.
 *
 * @param string|null $option The config option to retrieve.
 *
 * @return mixed
 *
 * @deprecated Client::getConfig will be removed in guzzlehttp/guzzle:8.0.
 */',
                'startLine' => 205,
                'endLine' => 210,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'currentClassName' => 'GuzzleHttp\\Client',
                'aliasName' => null,
            ],
            'buildUri' => [
                'name' => 'buildUri',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Psr\\Http\\Message\\UriInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 212,
                        'endLine' => 212,
                        'startColumn' => 31,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'config' => [
                        'name' => 'config',
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
                        'startLine' => 212,
                        'endLine' => 212,
                        'startColumn' => 50,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Psr\\Http\\Message\\UriInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 212,
                'endLine' => 224,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'currentClassName' => 'GuzzleHttp\\Client',
                'aliasName' => null,
            ],
            'configureDefaults' => [
                'name' => 'configureDefaults',
                'parameters' => [
                    'config' => [
                        'name' => 'config',
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
                        'startLine' => 229,
                        'endLine' => 229,
                        'startColumn' => 40,
                        'endColumn' => 52,
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
 * Configures the default options for a client.
 */',
                'startLine' => 229,
                'endLine' => 276,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'currentClassName' => 'GuzzleHttp\\Client',
                'aliasName' => null,
            ],
            'prepareDefaults' => [
                'name' => 'prepareDefaults',
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
                        'startLine' => 283,
                        'endLine' => 283,
                        'startColumn' => 38,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Merges default options into the array.
 *
 * @param array $options Options to modify by reference
 */',
                'startLine' => 283,
                'endLine' => 316,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'currentClassName' => 'GuzzleHttp\\Client',
                'aliasName' => null,
            ],
            'transfer' => [
                'name' => 'transfer',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Psr\\Http\\Message\\RequestInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 326,
                        'endLine' => 326,
                        'startColumn' => 31,
                        'endColumn' => 55,
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
                        'startLine' => 326,
                        'endLine' => 326,
                        'startColumn' => 58,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'GuzzleHttp\\Promise\\PromiseInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Transfers the given request and applies request options.
 *
 * The URI of the request is not modified and the request options are used
 * as-is without merging in default options.
 *
 * @param array $options See \\GuzzleHttp\\RequestOptions.
 */',
                'startLine' => 326,
                'endLine' => 337,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'currentClassName' => 'GuzzleHttp\\Client',
                'aliasName' => null,
            ],
            'applyOptions' => [
                'name' => 'applyOptions',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Psr\\Http\\Message\\RequestInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 342,
                        'endLine' => 342,
                        'startColumn' => 35,
                        'endColumn' => 59,
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
                        'byRef' => true,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 342,
                        'endLine' => 342,
                        'startColumn' => 62,
                        'endColumn' => 76,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Psr\\Http\\Message\\RequestInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Applies the array of request options to a request.
 */',
                'startLine' => 342,
                'endLine' => 470,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'currentClassName' => 'GuzzleHttp\\Client',
                'aliasName' => null,
            ],
            'invalidBody' => [
                'name' => 'invalidBody',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'GuzzleHttp\\Exception\\InvalidArgumentException',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return an InvalidArgumentException with pre-set message.
 */',
                'startLine' => 475,
                'endLine' => 482,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'GuzzleHttp',
                'declaringClassName' => 'GuzzleHttp\\Client',
                'implementingClassName' => 'GuzzleHttp\\Client',
                'currentClassName' => 'GuzzleHttp\\Client',
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
