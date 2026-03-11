<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Traits/LocalFactory.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\LocalFactory
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-dd91dfab65d71167276cb3430fb3887c496b14d145e537b7561565a038be1bdd-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\Traits\\LocalFactory',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/Traits/LocalFactory.php',
            ],
        ],
        'namespace' => 'Carbon\\Traits',
        'name' => 'Carbon\\Traits\\LocalFactory',
        'shortName' => 'LocalFactory',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Remember the factory that was the current at the creation of the object.
 */',
        'attributes' => [
        ],
        'startLine' => 24,
        'endLine' => 67,
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
            'clock' => [
                'declaringClassName' => 'Carbon\\Traits\\LocalFactory',
                'implementingClassName' => 'Carbon\\Traits\\LocalFactory',
                'name' => 'clock',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Carbon\\WrapperClock',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 29,
                        'endLine' => 29,
                        'startTokenPos' => 56,
                        'startFilePos' => 634,
                        'endTokenPos' => 56,
                        'endFilePos' => 637,
                    ],
                ],
                'docComment' => '/**
 * The clock that generated the current instance (or FactoryImmutable::getDefaultInstance() if none)
 */',
                'attributes' => [
                ],
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'getClock' => [
                'name' => 'getClock',
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
                                    'name' => 'Carbon\\WrapperClock',
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
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 31,
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\LocalFactory',
                'implementingClassName' => 'Carbon\\Traits\\LocalFactory',
                'currentClassName' => 'Carbon\\Traits\\LocalFactory',
                'aliasName' => null,
            ],
            'initLocalFactory' => [
                'name' => 'initLocalFactory',
                'parameters' => [
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
                'docComment' => null,
                'startLine' => 36,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\LocalFactory',
                'implementingClassName' => 'Carbon\\Traits\\LocalFactory',
                'currentClassName' => 'Carbon\\Traits\\LocalFactory',
                'aliasName' => null,
            ],
            'transmitFactory' => [
                'name' => 'transmitFactory',
                'parameters' => [
                    'action' => [
                        'name' => 'action',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 51,
                        'endLine' => 51,
                        'startColumn' => 38,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'mixed',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Trigger the given action using the local factory of the object, so it will be transmitted
 * to any object also using this trait and calling initLocalFactory() in its constructor.
 *
 * @template T
 *
 * @param Closure(): T $action
 *
 * @return T
 */',
                'startLine' => 51,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\LocalFactory',
                'implementingClassName' => 'Carbon\\Traits\\LocalFactory',
                'currentClassName' => 'Carbon\\Traits\\LocalFactory',
                'aliasName' => null,
            ],
            'getFactory' => [
                'name' => 'getFactory',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Carbon\\Factory',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 63,
                'endLine' => 66,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\LocalFactory',
                'implementingClassName' => 'Carbon\\Traits\\LocalFactory',
                'currentClassName' => 'Carbon\\Traits\\LocalFactory',
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
