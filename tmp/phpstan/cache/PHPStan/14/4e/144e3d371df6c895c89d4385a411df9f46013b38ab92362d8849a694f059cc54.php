<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Notifications/RoutesNotifications.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Notifications\RoutesNotifications
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-82891713db67f6df9ea3b400c9905d26da7834b51d26f53dd3bdb1d7f6a78497-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Notifications\\RoutesNotifications',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/framework/src/Illuminate/Notifications/RoutesNotifications.php',
            ],
        ],
        'namespace' => 'Illuminate\\Notifications',
        'name' => 'Illuminate\\Notifications\\RoutesNotifications',
        'shortName' => 'RoutesNotifications',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 52,
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
            'notify' => [
                'name' => 'notify',
                'parameters' => [
                    'instance' => [
                        'name' => 'instance',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 16,
                        'endLine' => 16,
                        'startColumn' => 28,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Send the given notification.
 *
 * @param  mixed  $instance
 * @return void
 */',
                'startLine' => 16,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Notifications',
                'declaringClassName' => 'Illuminate\\Notifications\\RoutesNotifications',
                'implementingClassName' => 'Illuminate\\Notifications\\RoutesNotifications',
                'currentClassName' => 'Illuminate\\Notifications\\RoutesNotifications',
                'aliasName' => null,
            ],
            'notifyNow' => [
                'name' => 'notifyNow',
                'parameters' => [
                    'instance' => [
                        'name' => 'instance',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 28,
                        'endLine' => 28,
                        'startColumn' => 31,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'channels' => [
                        'name' => 'channels',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 28,
                                'endLine' => 28,
                                'startTokenPos' => 72,
                                'startFilePos' => 590,
                                'endTokenPos' => 72,
                                'endFilePos' => 593,
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
                        'startLine' => 28,
                        'endLine' => 28,
                        'startColumn' => 42,
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
 * Send the given notification immediately.
 *
 * @param  mixed  $instance
 * @param  array|null  $channels
 * @return void
 */',
                'startLine' => 28,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Notifications',
                'declaringClassName' => 'Illuminate\\Notifications\\RoutesNotifications',
                'implementingClassName' => 'Illuminate\\Notifications\\RoutesNotifications',
                'currentClassName' => 'Illuminate\\Notifications\\RoutesNotifications',
                'aliasName' => null,
            ],
            'routeNotificationFor' => [
                'name' => 'routeNotificationFor',
                'parameters' => [
                    'driver' => [
                        'name' => 'driver',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 40,
                        'endLine' => 40,
                        'startColumn' => 42,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'notification' => [
                        'name' => 'notification',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 40,
                                'endLine' => 40,
                                'startTokenPos' => 113,
                                'startFilePos' => 964,
                                'endTokenPos' => 113,
                                'endFilePos' => 967,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 40,
                        'endLine' => 40,
                        'startColumn' => 51,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the notification routing information for the given driver.
 *
 * @param  string  $driver
 * @param  \\Illuminate\\Notifications\\Notification|null  $notification
 * @return mixed
 */',
                'startLine' => 40,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Notifications',
                'declaringClassName' => 'Illuminate\\Notifications\\RoutesNotifications',
                'implementingClassName' => 'Illuminate\\Notifications\\RoutesNotifications',
                'currentClassName' => 'Illuminate\\Notifications\\RoutesNotifications',
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
