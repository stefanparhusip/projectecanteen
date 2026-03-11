<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Support/Traits/ForwardsCalls.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Traits\ForwardsCalls
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-b90103bc7248a11bd7629c525e064a45a50dd93ae0d836bcb79937e63f0b3568-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Support/Traits/ForwardsCalls.php',
            ],
        ],
        'namespace' => 'Illuminate\\Support\\Traits',
        'name' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
        'shortName' => 'ForwardsCalls',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 71,
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
            'forwardCallTo' => [
                'name' => 'forwardCallTo',
                'parameters' => [
                    'object' => [
                        'name' => 'object',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 20,
                        'endLine' => 20,
                        'startColumn' => 38,
                        'endColumn' => 44,
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
                        'startLine' => 20,
                        'endLine' => 20,
                        'startColumn' => 47,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 20,
                        'endLine' => 20,
                        'startColumn' => 56,
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
 * Forward a method call to the given object.
 *
 * @param  mixed  $object
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\BadMethodCallException
 */',
                'startLine' => 20,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support\\Traits',
                'declaringClassName' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
                'implementingClassName' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
                'currentClassName' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
                'aliasName' => null,
            ],
            'forwardDecoratedCallTo' => [
                'name' => 'forwardDecoratedCallTo',
                'parameters' => [
                    'object' => [
                        'name' => 'object',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 50,
                        'endLine' => 50,
                        'startColumn' => 47,
                        'endColumn' => 53,
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
                        'startLine' => 50,
                        'endLine' => 50,
                        'startColumn' => 56,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 50,
                        'endLine' => 50,
                        'startColumn' => 65,
                        'endColumn' => 75,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Forward a method call to the given object, returning $this if the forwarded call returned itself.
 *
 * @param  mixed  $object
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\BadMethodCallException
 */',
                'startLine' => 50,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support\\Traits',
                'declaringClassName' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
                'implementingClassName' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
                'currentClassName' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
                'aliasName' => null,
            ],
            'throwBadMethodCallException' => [
                'name' => 'throwBadMethodCallException',
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
                        'startLine' => 65,
                        'endLine' => 65,
                        'startColumn' => 59,
                        'endColumn' => 65,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Throw a bad method call exception for the given method.
 *
 * @param  string  $method
 * @return never
 *
 * @throws \\BadMethodCallException
 */',
                'startLine' => 65,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Illuminate\\Support\\Traits',
                'declaringClassName' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
                'implementingClassName' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
                'currentClassName' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
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
