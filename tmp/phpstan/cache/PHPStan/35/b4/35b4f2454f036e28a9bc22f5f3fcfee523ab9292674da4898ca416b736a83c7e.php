<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../laravel/sail/src/Console/Concerns/InteractsWithDockerComposeServices.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Sail\Console\Concerns\InteractsWithDockerComposeServices
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-ce8685dfd0d4184c716bcaa16059a8f1f7cd3051d4cc90e71658c0c9d9a0e3d4-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../laravel/sail/src/Console/Concerns/InteractsWithDockerComposeServices.php',
            ],
        ],
        'namespace' => 'Laravel\\Sail\\Console\\Concerns',
        'name' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
        'shortName' => 'InteractsWithDockerComposeServices',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 343,
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
            'composePaths' => [
                'declaringClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'implementingClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'name' => 'composePaths',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'compose.yaml\', \'compose.yml\', \'docker-compose.yaml\', \'docker-compose.yml\']',
                    'attributes' => [
                        'startLine' => 15,
                        'endLine' => 20,
                        'startTokenPos' => 31,
                        'startFilePos' => 310,
                        'endTokenPos' => 45,
                        'endFilePos' => 424,
                    ],
                ],
                'docComment' => '/**
 * Possible names for the compose file according to the spec.
 *
 * @var array<string>
 */',
                'attributes' => [
                ],
                'startLine' => 15,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 6,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'services' => [
                'declaringClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'implementingClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'name' => 'services',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'mysql\', \'pgsql\', \'mariadb\', \'mongodb\', \'redis\', \'valkey\', \'memcached\', \'meilisearch\', \'typesense\', \'minio\', \'rustfs\', \'mailpit\', \'rabbitmq\', \'selenium\', \'soketi\']',
                    'attributes' => [
                        'startLine' => 27,
                        'endLine' => 43,
                        'startTokenPos' => 56,
                        'startFilePos' => 556,
                        'endTokenPos' => 103,
                        'endFilePos' => 846,
                    ],
                ],
                'docComment' => '/**
 * The available services that may be installed.
 *
 * @var array<string>
 */',
                'attributes' => [
                ],
                'startLine' => 27,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 6,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'defaultServices' => [
                'declaringClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'implementingClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'name' => 'defaultServices',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'mysql\', \'redis\', \'selenium\', \'mailpit\']',
                    'attributes' => [
                        'startLine' => 50,
                        'endLine' => 50,
                        'startTokenPos' => 114,
                        'startFilePos' => 1004,
                        'endTokenPos' => 125,
                        'endFilePos' => 1044,
                    ],
                ],
                'docComment' => '/**
 * The default services used when the user chooses non-interactive mode.
 *
 * @var string[]
 */',
                'attributes' => [
                ],
                'startLine' => 50,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 75,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'gatherServicesInteractively' => [
                'name' => 'gatherServicesInteractively',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Gather the desired Sail services using an interactive prompt.
 *
 * @return array
 */',
                'startLine' => 57,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Sail\\Console\\Concerns',
                'declaringClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'implementingClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'currentClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'aliasName' => null,
            ],
            'buildDockerCompose' => [
                'name' => 'buildDockerCompose',
                'parameters' => [
                    'services' => [
                        'name' => 'services',
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
                        'startLine' => 76,
                        'endLine' => 76,
                        'startColumn' => 43,
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
 * Build the Docker Compose file.
 *
 * @param  array  $services
 * @return void
 */',
                'startLine' => 76,
                'endLine' => 128,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Sail\\Console\\Concerns',
                'declaringClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'implementingClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'currentClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'aliasName' => null,
            ],
            'replaceEnvVariables' => [
                'name' => 'replaceEnvVariables',
                'parameters' => [
                    'services' => [
                        'name' => 'services',
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
                        'startLine' => 136,
                        'endLine' => 136,
                        'startColumn' => 44,
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
 * Replace the Host environment variables in the app\'s .env file.
 *
 * @param  array  $services
 * @return void
 */',
                'startLine' => 136,
                'endLine' => 229,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Sail\\Console\\Concerns',
                'declaringClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'implementingClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'currentClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'aliasName' => null,
            ],
            'configurePhpUnit' => [
                'name' => 'configurePhpUnit',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Configure PHPUnit to use the dedicated testing database.
 *
 * @return void
 */',
                'startLine' => 236,
                'endLine' => 259,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Sail\\Console\\Concerns',
                'declaringClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'implementingClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'currentClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'aliasName' => null,
            ],
            'installDevContainer' => [
                'name' => 'installDevContainer',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Install the devcontainer.json configuration file.
 *
 * @return void
 */',
                'startLine' => 266,
                'endLine' => 283,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Sail\\Console\\Concerns',
                'declaringClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'implementingClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'currentClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'aliasName' => null,
            ],
            'prepareInstallation' => [
                'name' => 'prepareInstallation',
                'parameters' => [
                    'services' => [
                        'name' => 'services',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 291,
                        'endLine' => 291,
                        'startColumn' => 44,
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
 * Prepare the installation by pulling and building any necessary images.
 *
 * @param  array  $services
 * @return void
 */',
                'startLine' => 291,
                'endLine' => 307,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Sail\\Console\\Concerns',
                'declaringClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'implementingClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'currentClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'aliasName' => null,
            ],
            'runCommands' => [
                'name' => 'runCommands',
                'parameters' => [
                    'commands' => [
                        'name' => 'commands',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 315,
                        'endLine' => 315,
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
 * Run the given commands.
 *
 * @param  array  $commands
 * @return int
 */',
                'startLine' => 315,
                'endLine' => 330,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Sail\\Console\\Concerns',
                'declaringClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'implementingClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'currentClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'aliasName' => null,
            ],
            'composePath' => [
                'name' => 'composePath',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the path to an existing Compose file or fall back to a default of `compose.yaml`.
 *
 * @return string
 */',
                'startLine' => 337,
                'endLine' => 342,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Laravel\\Sail\\Console\\Concerns',
                'declaringClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'implementingClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
                'currentClassName' => 'Laravel\\Sail\\Console\\Concerns\\InteractsWithDockerComposeServices',
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
