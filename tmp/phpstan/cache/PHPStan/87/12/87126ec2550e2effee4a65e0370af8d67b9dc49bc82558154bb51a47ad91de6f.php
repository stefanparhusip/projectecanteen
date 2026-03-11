<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Validation/ValidatesWhenResolvedTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Validation\ValidatesWhenResolvedTrait
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-b316bc93ae2979a859a378068b4b613d4908ff1ef8c24696ba36168c4ac28723-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Validation/ValidatesWhenResolvedTrait.php',
            ],
        ],
        'namespace' => 'Illuminate\\Validation',
        'name' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
        'shortName' => 'ValidatesWhenResolvedTrait',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Provides default implementation of ValidatesWhenResolved contract.
 */',
        'attributes' => [
        ],
        'startLine' => 10,
        'endLine' => 108,
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
            'validateResolved' => [
                'name' => 'validateResolved',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Validate the class instance.
 *
 * @return void
 */',
                'startLine' => 17,
                'endLine' => 36,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Validation',
                'declaringClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'implementingClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'currentClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'aliasName' => null,
            ],
            'prepareForValidation' => [
                'name' => 'prepareForValidation',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepare the data for validation.
 *
 * @return void
 */',
                'startLine' => 43,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Validation',
                'declaringClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'implementingClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'currentClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'aliasName' => null,
            ],
            'getValidatorInstance' => [
                'name' => 'getValidatorInstance',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the validator instance for the request.
 *
 * @return \\Illuminate\\Validation\\Validator
 */',
                'startLine' => 53,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Validation',
                'declaringClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'implementingClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'currentClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'aliasName' => null,
            ],
            'passedValidation' => [
                'name' => 'passedValidation',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Handle a passed validation attempt.
 *
 * @return void
 */',
                'startLine' => 63,
                'endLine' => 66,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Validation',
                'declaringClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'implementingClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'currentClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'aliasName' => null,
            ],
            'failedValidation' => [
                'name' => 'failedValidation',
                'parameters' => [
                    'validator' => [
                        'name' => 'validator',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Validation\\Validator',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 76,
                        'endLine' => 76,
                        'startColumn' => 41,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Handle a failed validation attempt.
 *
 * @param  \\Illuminate\\Validation\\Validator  $validator
 * @return void
 *
 * @throws \\Illuminate\\Validation\\ValidationException
 */',
                'startLine' => 76,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Validation',
                'declaringClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'implementingClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'currentClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'aliasName' => null,
            ],
            'passesAuthorization' => [
                'name' => 'passesAuthorization',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the request passes the authorization check.
 *
 * @return bool
 */',
                'startLine' => 88,
                'endLine' => 95,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Validation',
                'declaringClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'implementingClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'currentClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'aliasName' => null,
            ],
            'failedAuthorization' => [
                'name' => 'failedAuthorization',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Handle a failed authorization attempt.
 *
 * @return void
 *
 * @throws \\Illuminate\\Validation\\UnauthorizedException
 */',
                'startLine' => 104,
                'endLine' => 107,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Validation',
                'declaringClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'implementingClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
                'currentClassName' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
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
