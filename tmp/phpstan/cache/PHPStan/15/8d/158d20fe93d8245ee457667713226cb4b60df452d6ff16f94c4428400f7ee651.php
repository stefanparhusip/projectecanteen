<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../symfony/http-foundation/RedirectResponse.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\HttpFoundation\RedirectResponse
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-e39aefecfeb338b43c3d5a28942548a064bfd2564977c41ad5e5a2673d6cf497-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../symfony/http-foundation/RedirectResponse.php',
            ],
        ],
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'name' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        'shortName' => 'RedirectResponse',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * RedirectResponse represents an HTTP response doing a redirect.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
        'attributes' => [
        ],
        'startLine' => 19,
        'endLine' => 92,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Symfony\\Component\\HttpFoundation\\Response',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'targetUrl' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
                'name' => 'targetUrl',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 21,
                'endLine' => 21,
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
            '__construct' => [
                'name' => '__construct',
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
                        'startLine' => 35,
                        'endLine' => 35,
                        'startColumn' => 33,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'status' => [
                        'name' => 'status',
                        'default' => [
                            'code' => '302',
                            'attributes' => [
                                'startLine' => 35,
                                'endLine' => 35,
                                'startTokenPos' => 47,
                                'startFilePos' => 1141,
                                'endTokenPos' => 47,
                                'endFilePos' => 1143,
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
                        'startLine' => 35,
                        'endLine' => 35,
                        'startColumn' => 46,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 35,
                                'endLine' => 35,
                                'startTokenPos' => 56,
                                'startFilePos' => 1163,
                                'endTokenPos' => 57,
                                'endFilePos' => 1164,
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
                        'startLine' => 35,
                        'endLine' => 35,
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
 * Creates a redirect response so that it conforms to the rules defined for a redirect status code.
 *
 * @param string $url     The URL to redirect to. The URL should be a full URL, with schema etc.,
 *                        but practically every browser redirects on paths only as well
 * @param int    $status  The HTTP status code (302 "Found" by default)
 * @param array  $headers The headers (Location is always set to the given URL)
 *
 * @throws \\InvalidArgumentException
 *
 * @see https://tools.ietf.org/html/rfc2616#section-10.3
 */',
                'startLine' => 35,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
                'aliasName' => null,
            ],
            'getTargetUrl' => [
                'name' => 'getTargetUrl',
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
 * Returns the target URL.
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
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
                'aliasName' => null,
            ],
            'setTargetUrl' => [
                'name' => 'setTargetUrl',
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
                        'startLine' => 65,
                        'endLine' => 65,
                        'startColumn' => 34,
                        'endColumn' => 44,
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
                ],
                'docComment' => '/**
 * Sets the redirect target of this response.
 *
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 65,
                'endLine' => 91,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
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
