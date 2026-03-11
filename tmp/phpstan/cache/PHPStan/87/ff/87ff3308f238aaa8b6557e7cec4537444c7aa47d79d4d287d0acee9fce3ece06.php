<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Support/InteractsWithTime.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\InteractsWithTime
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-ee4ef3a2e714fa539b223287a3a62b618b1d3a9e44f2e1f92981f2c3e2773ad5-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Support\\InteractsWithTime',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Support/InteractsWithTime.php',
            ],
        ],
        'namespace' => 'Illuminate\\Support',
        'name' => 'Illuminate\\Support\\InteractsWithTime',
        'shortName' => 'InteractsWithTime',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 83,
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
            'secondsUntil' => [
                'name' => 'secondsUntil',
                'parameters' => [
                    'delay' => [
                        'name' => 'delay',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 17,
                        'endLine' => 17,
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
 * Get the number of seconds until the given DateTime.
 *
 * @param  \\DateTimeInterface|\\DateInterval|int  $delay
 * @return int
 */',
                'startLine' => 17,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\InteractsWithTime',
                'implementingClassName' => 'Illuminate\\Support\\InteractsWithTime',
                'currentClassName' => 'Illuminate\\Support\\InteractsWithTime',
                'aliasName' => null,
            ],
            'availableAt' => [
                'name' => 'availableAt',
                'parameters' => [
                    'delay' => [
                        'name' => 'delay',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 32,
                                'endLine' => 32,
                                'startTokenPos' => 104,
                                'startFilePos' => 742,
                                'endTokenPos' => 104,
                                'endFilePos' => 742,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 32,
                        'endLine' => 32,
                        'startColumn' => 36,
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
 * Get the "available at" UNIX timestamp.
 *
 * @param  \\DateTimeInterface|\\DateInterval|int  $delay
 * @return int
 */',
                'startLine' => 32,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\InteractsWithTime',
                'implementingClassName' => 'Illuminate\\Support\\InteractsWithTime',
                'currentClassName' => 'Illuminate\\Support\\InteractsWithTime',
                'aliasName' => null,
            ],
            'parseDateInterval' => [
                'name' => 'parseDateInterval',
                'parameters' => [
                    'delay' => [
                        'name' => 'delay',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 47,
                        'endLine' => 47,
                        'startColumn' => 42,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * If the given value is an interval, convert it to a DateTime instance.
 *
 * @param  \\DateTimeInterface|\\DateInterval|int  $delay
 * @return \\DateTimeInterface|int
 */',
                'startLine' => 47,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\InteractsWithTime',
                'implementingClassName' => 'Illuminate\\Support\\InteractsWithTime',
                'currentClassName' => 'Illuminate\\Support\\InteractsWithTime',
                'aliasName' => null,
            ],
            'currentTime' => [
                'name' => 'currentTime',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current system time as a UNIX timestamp.
 *
 * @return int
 */',
                'startLine' => 61,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\InteractsWithTime',
                'implementingClassName' => 'Illuminate\\Support\\InteractsWithTime',
                'currentClassName' => 'Illuminate\\Support\\InteractsWithTime',
                'aliasName' => null,
            ],
            'runTimeForHumans' => [
                'name' => 'runTimeForHumans',
                'parameters' => [
                    'startTime' => [
                        'name' => 'startTime',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 41,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'endTime' => [
                        'name' => 'endTime',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 73,
                                'endLine' => 73,
                                'startTokenPos' => 249,
                                'startFilePos' => 1799,
                                'endTokenPos' => 249,
                                'endFilePos' => 1802,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 73,
                        'endLine' => 73,
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
 * Given a start time, format the total run time for human readability.
 *
 * @param  float  $startTime
 * @param  float|null  $endTime
 * @return string
 */',
                'startLine' => 73,
                'endLine' => 82,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\InteractsWithTime',
                'implementingClassName' => 'Illuminate\\Support\\InteractsWithTime',
                'currentClassName' => 'Illuminate\\Support\\InteractsWithTime',
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
