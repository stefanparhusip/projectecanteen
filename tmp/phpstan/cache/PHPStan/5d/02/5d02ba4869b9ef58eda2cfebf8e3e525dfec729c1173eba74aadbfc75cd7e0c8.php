<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Notifications\LowStockNotification.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Notifications\LowStockNotification
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-a2ce9ed31f7824a5b9e00b943eabcd2510ed8a870715cdda4907ffecdb030a8f',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Notifications\\LowStockNotification',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Notifications/LowStockNotification.php',
            ],
        ],
        'namespace' => 'App\\Notifications',
        'name' => 'App\\Notifications\\LowStockNotification',
        'shortName' => 'LowStockNotification',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 12,
        'endLine' => 56,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Notifications\\Notification',
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Bus\\Queueable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'menu' => [
                'declaringClassName' => 'App\\Notifications\\LowStockNotification',
                'implementingClassName' => 'App\\Notifications\\LowStockNotification',
                'name' => 'menu',
                'modifiers' => 2177,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'App\\Models\\Menu',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 17,
                'endLine' => 17,
                'startColumn' => 9,
                'endColumn' => 40,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'alert' => [
                'declaringClassName' => 'App\\Notifications\\LowStockNotification',
                'implementingClassName' => 'App\\Notifications\\LowStockNotification',
                'name' => 'alert',
                'modifiers' => 2177,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'App\\Models\\StockAlert',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 18,
                'endLine' => 18,
                'startColumn' => 9,
                'endColumn' => 41,
                'isPromoted' => true,
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
                    'menu' => [
                        'name' => 'menu',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Menu',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 17,
                        'endLine' => 17,
                        'startColumn' => 9,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'alert' => [
                        'name' => 'alert',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\StockAlert',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 18,
                        'endLine' => 18,
                        'startColumn' => 9,
                        'endColumn' => 41,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 16,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 8,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Notifications',
                'declaringClassName' => 'App\\Notifications\\LowStockNotification',
                'implementingClassName' => 'App\\Notifications\\LowStockNotification',
                'currentClassName' => 'App\\Notifications\\LowStockNotification',
                'aliasName' => null,
            ],
            'via' => [
                'name' => 'via',
                'parameters' => [
                    'notifiable' => [
                        'name' => 'notifiable',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'object',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 21,
                        'endLine' => 21,
                        'startColumn' => 25,
                        'endColumn' => 42,
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
                'docComment' => null,
                'startLine' => 21,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Notifications',
                'declaringClassName' => 'App\\Notifications\\LowStockNotification',
                'implementingClassName' => 'App\\Notifications\\LowStockNotification',
                'currentClassName' => 'App\\Notifications\\LowStockNotification',
                'aliasName' => null,
            ],
            'toMail' => [
                'name' => 'toMail',
                'parameters' => [
                    'notifiable' => [
                        'name' => 'notifiable',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'object',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 28,
                        'endLine' => 28,
                        'startColumn' => 28,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Notifications\\Messages\\MailMessage',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 28,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Notifications',
                'declaringClassName' => 'App\\Notifications\\LowStockNotification',
                'implementingClassName' => 'App\\Notifications\\LowStockNotification',
                'currentClassName' => 'App\\Notifications\\LowStockNotification',
                'aliasName' => null,
            ],
            'toDatabase' => [
                'name' => 'toDatabase',
                'parameters' => [
                    'notifiable' => [
                        'name' => 'notifiable',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'object',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 44,
                        'endLine' => 44,
                        'startColumn' => 32,
                        'endColumn' => 49,
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
                'docComment' => null,
                'startLine' => 44,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Notifications',
                'declaringClassName' => 'App\\Notifications\\LowStockNotification',
                'implementingClassName' => 'App\\Notifications\\LowStockNotification',
                'currentClassName' => 'App\\Notifications\\LowStockNotification',
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
