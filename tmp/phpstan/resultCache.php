<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1773200635,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.40',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80326,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, viewDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkModelAppends: true, paths: [C:\\laragon\\www\\usk_no_ai\\app], level: 5, tmpDir: C:\\laragon\\www\\usk_no_ai\\tmp\\phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: [{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser, reflectionProvider: @reflectionProvider}}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\PhpMyAdminDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}]}',
  'analysedPaths' => 
  array (
    0 => 'C:\\laragon\\www\\usk_no_ai\\app',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'C:/laragon/www/usk_no_ai/composer.lock' => '0051e065cf05ecd9c2ec1d733694bc15f0735235cd2a8424527ac1b0613f4836',
  ),
  'composerInstalled' => 
  array (
    'C:/laragon/www/usk_no_ai/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'barryvdh/laravel-dompdf' => 
        array (
          'pretty_version' => 'v3.1.1',
          'version' => '3.1.1.0',
          'reference' => '8e71b99fc53bb8eb77f316c3c452dd74ab7cb25d',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../barryvdh/laravel-dompdf',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.8',
          'version' => '0.14.8.0',
          'reference' => '63422359a44b7f06cae63c3b429b59e8efcc0629',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dompdf/dompdf' => 
        array (
          'pretty_version' => 'v3.1.5',
          'version' => '3.1.5.0',
          'reference' => 'f11ead23a8a76d0ff9bbc6c7c8fd7e05ca328496',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../dompdf/dompdf',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dompdf/php-font-lib' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => 'a6e9a688a2a80016ac080b97be73d3e10c444c9a',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../dompdf/php-font-lib',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dompdf/php-svg-lib' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => '8259ffb930817e72b1ff1caef5d226501f3dfeb1',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../dompdf/php-svg-lib',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'facebook/webdriver' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '21dc724a0583619cd1652f673303492272778051',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.5',
          'version' => '1.0.5.0',
          'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.53.0',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.1.0',
          'version' => '3.1.0.0',
          'reference' => 'dbb2dc20e5c8e1ed3ff289054e1955f269187312',
          'type' => 'phpstan-extension',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/dusk' => 
        array (
          'pretty_version' => 'v8.4.1',
          'version' => '8.4.1.0',
          'reference' => '3e6548a0e183b408d7af4cf50cd6a50b66061add',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../laravel/dusk',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.53.0',
          'version' => '12.53.0.0',
          'reference' => 'f57f035c0d34503d9ff30be76159bb35a003cd1f',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.6',
          'version' => '1.2.6.0',
          'reference' => 'aa71a01c309e7f66bc2ec4fb1a59291b82eb4abf',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.27.1',
          'version' => '1.27.1.0',
          'reference' => '54cca2de13790570c7b6f0f94f37896bee4abcb5',
          'type' => 'project',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.13',
          'version' => '0.3.13.0',
          'reference' => 'ed8c466571b37e977532fb2fd3c272c784d7050d',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.53.0',
          'version' => '1.53.0.0',
          'reference' => 'e340eaa2bea9b99192570c48ed837155dbf24fbb',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sanctum' => 
        array (
          'pretty_version' => 'v4.3.1',
          'version' => '4.3.1.0',
          'reference' => 'e3b85d6e36ad00e5db2d1dcc27c81ffdf15cbf76',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../laravel/sanctum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.10',
          'version' => '2.0.10.0',
          'reference' => '870fc81d2f879903dfc5b60bf8a0f94a1609e669',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.11.1',
          'version' => '2.11.1.0',
          'reference' => 'c9f80cc835649b5c1842898fb043f8cc098dd741',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '4efa10c1e56488e658d10adf7b7b7dcd19940bfb',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.32.0',
          'version' => '3.32.0.0',
          'reference' => '254b1595b16b22dbddaaef9ed6ca9fdac4956725',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '2f669db18a4c20c755c2bb7d3a7b0b2340488079',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.8.0',
          'version' => '7.8.0.0',
          'reference' => '4436c6ec8d458e4244448b069cc572d088230b76',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.8.0',
          'version' => '7.8.0.0',
          'reference' => 'c5c5cd056110fc8afaba29fa6b72a43ced42acd4',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'masterminds/html5' => 
        array (
          'pretty_version' => '2.10.0',
          'version' => '2.10.0.0',
          'reference' => 'fcf91eb64359852f00d921887b219479b4f21251',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../masterminds/html5',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.11.1',
          'version' => '3.11.1.0',
          'reference' => 'f438fcc98f92babee98381d399c65336f3a3827f',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.5',
          'version' => '1.3.5.0',
          'reference' => 'f0ab1a3cda782dbc5da270d28545236aa80c4002',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.3',
          'version' => '4.1.3.0',
          'reference' => 'bb3ea637e3d131d72acc033cfc2746ee893349fe',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.9.1',
          'version' => '8.9.1.0',
          'reference' => 'a1ed3fa530fd60bc515f9303e8520fcb7d4bd935',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '712a31b768f5daea284c2169a7d227031001b9a8',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nyholm/psr7' => 
        array (
          'pretty_version' => '1.8.2',
          'version' => '1.8.2.0',
          'reference' => 'a71f2b11690f4b24d099d6b16690a90ae14fc6f3',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../nyholm/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-http/message-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'php-webdriver/webdriver' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => 'ac0662863aa120b4f645869f584013e4c4dba46a',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../php-webdriver/webdriver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpmyadmin/sql-parser' => 
        array (
          'pretty_version' => '5.11.1',
          'version' => '5.11.1.0',
          'reference' => '1b70d03526df92bd1e170e2670b7d3510e1b722b',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../phpmyadmin/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.40',
          'version' => '2.1.40.0',
          'reference' => '9b2c7aeb83a75d8680ea5e7c9b7fca88052b766b',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '11.0.12',
          'version' => '11.0.12.0',
          'reference' => '2c1ed04922802c15e1de5d7447b4856de949cf56',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '5.1.1',
          'version' => '5.1.1.0',
          'reference' => '2f3a64888c814fc235386b7387dd5b5ed92ad903',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '11.5.55',
          'version' => '11.5.55.0',
          'reference' => 'adc7262fccc12de2b30f12a8aa0b33775d814f00',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.20',
          'version' => '0.12.20.0',
          'reference' => '19678eb6b952a03b8a1d96ecee9edba518bb0373',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.2',
          'version' => '4.9.2.0',
          'reference' => '8429c78ca35a09f27565311b98101e2826affde0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.2',
          ),
        ),
        'sabberworm/php-css-parser' => 
        array (
          'pretty_version' => 'v9.3.0',
          'version' => '9.3.0.0',
          'reference' => '88dbd0f7f91abbfe4402d0a3071e9ff4d81ed949',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sabberworm/php-css-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '6.3.3',
          'version' => '6.3.3.0',
          'reference' => '2c95e1e86cb8dd41beb8d502057d1081ccc8eca9',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '7.2.1',
          'version' => '7.2.1.0',
          'reference' => 'a5c75038693ad2e8d4b6c15ba2403532647830c4',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '6.3.2',
          'version' => '6.3.2.0',
          'reference' => '70a298763b40b213ec087c51c739efcaa90bcd74',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'f6458abbf32a6c8174f8f26261475dc133b3d9dc',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '5.1.3',
          'version' => '5.1.3.0',
          'reference' => 'f77d2d4e78738c98d9a68d2596fe5e8fa380f449',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sentry/sentry' => 
        array (
          'pretty_version' => '4.21.0',
          'version' => '4.21.0.0',
          'reference' => '2bf405fc4d38f00073a7d023cf321e59f614d54c',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sentry/sentry',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'sentry/sentry-laravel' => 
        array (
          'pretty_version' => '4.21.1',
          'version' => '4.21.1.0',
          'reference' => '8e8ac4b0da1c37934db79c3d3f4bbd8d98662146',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../sentry/sentry-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '9169f24776edde469914c1e7a1442a50f7a4e110',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '6d643a93b47398599124022eb24d97c153c12f27',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '2e7c52c647b406e2107dd867db424a4dbac91864',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '8da531f364ddfee53e36092a7eebbbd0b775f6b8',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => 'dc2c0eba1af673e736bb851d747d266108aea746',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '8655bf1076b7a3a346cb11413ffdabff50c7ffcf',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => 'fd97d5e926e988a363cef56fbbf88c5c528e9065',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '002ac0cf4cd972a7fd0912dcd513a95e8a81ce83',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => 'b02726f39a20bc65e30364f5c750c4ddbf1f58e9',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '9fc881d95feae4c6c48678cb6372bd8a7ba04f5f',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/options-resolver' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'b38026df55197f9e39a44f3215788edf83187b80',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/options-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.5',
          'version' => '7.4.5.0',
          'reference' => '608476f4604102976d687c483ac63a79ba18cc97',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/psr-http-message-bridge' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '929ffe10bbfbb92e711ac3818d416f9daffee067',
          'type' => 'symfony-bridge',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/psr-http-message-bridge',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '238d749c56b804b31a9bf3e26519d93b65a60938',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '45112560a3ba2d715666a509a0bc9521d10b6c43',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '9f209231affa85aa930a5e46e6eb03381424b30b',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '1888cf064399868af3784b9e043240f1d89d25ce',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '65a8bc82080447fae78373aa10f8d13b38338977',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '7719ce8aba76be93dfe249192f1fbfa52c588e36',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '045321c440ac18347b136c63d2e9bf28a2dc0291',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.4.6',
          'version' => '7.4.6.0',
          'reference' => '58751048de17bae71c5aa0d13cb19d79bca26391',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'thecodingmachine/safe' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => '705683a25bacf0d4860c7dea4d7947bfd09eea19',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../thecodingmachine/safe',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'b7489ce515e168639d17feec34b8847c326b0b3c',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.3',
          'version' => '5.6.3.0',
          'reference' => '955e7815d677a3eaa7075231212f2110983adecc',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\usk_no_ai\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'C:\\laragon\\www\\usk_no_ai\\vendor\\larastan\\larastan\\bootstrap.php' => 'b2cf600b9489db2a15006ea08673ae536f591b984e92548bd31de184d8f4340e',
    'phar://C:\\laragon\\www\\usk_no_ai\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar://C:\\laragon\\www\\usk_no_ai\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar://C:\\laragon\\www\\usk_no_ai\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar://C:\\laragon\\www\\usk_no_ai\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'bcmath',
    7 => 'calendar',
    8 => 'ctype',
    9 => 'curl',
    10 => 'date',
    11 => 'dom',
    12 => 'exif',
    13 => 'fileinfo',
    14 => 'filter',
    15 => 'gd',
    16 => 'hash',
    17 => 'iconv',
    18 => 'intl',
    19 => 'json',
    20 => 'libxml',
    21 => 'mbstring',
    22 => 'mysqli',
    23 => 'mysqlnd',
    24 => 'openssl',
    25 => 'pcre',
    26 => 'pdo_mysql',
    27 => 'pdo_sqlite',
    28 => 'random',
    29 => 'readline',
    30 => 'session',
    31 => 'sodium',
    32 => 'sqlite3',
    33 => 'standard',
    34 => 'tokenizer',
    35 => 'xml',
    36 => 'xmlreader',
    37 => 'xmlwriter',
    38 => 'xsl',
    39 => 'zip',
    40 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<(int|string),Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\BalanceTransaction>>::map() contains unresolvable type.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$user_id.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 39,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
       'line' => 40,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 40,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe property access "?->name" on left side of ?? is unnecessary. Use -> instead.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
       'line' => 40,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 40,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$email.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 41,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe property access "?->email" on left side of ?? is unnecessary. Use -> instead.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 41,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Support\\Collection<(int|string),array<string, mixed>>::sortByDesc() contains unresolvable type.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
       'line' => 45,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method toIso8601String() on string.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe method call on non-nullable type string. Use -> instead.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\NullsafeMethodCall',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$label.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 24,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$id.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 27,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,Illuminate\\Database\\Eloquent\\Model>::map() contains unresolvable type.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'line' => 29,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 29,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$menu_name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 30,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$quantity.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'line' => 31,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 31,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$subtotal.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'line' => 32,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 32,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method toIso8601String() on string.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 22,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe method call on non-nullable type string. Use -> instead.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 22,
       'nodeType' => 'PhpParser\\Node\\Expr\\NullsafeMethodCall',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$label.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$id.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Events\\TopupApproved.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$amount.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\TopupApproved.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\TopupApproved.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$balance_before.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\TopupApproved.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\TopupApproved.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 27,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$balance_after.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\TopupApproved.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\TopupApproved.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 28,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$updated_at.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\TopupApproved.php',
       'line' => 29,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\TopupApproved.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 29,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Anonymous function has an unused use $request.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 38,
       'nodeType' => 'PhpParser\\Node\\Expr\\Closure',
       'identifier' => 'closure.unusedUse',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'line' => 125,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 125,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe property access "?->name" on left side of ?? is unnecessary. Use -> instead.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'line' => 125,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 125,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$label.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'line' => 127,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 127,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method format() on string.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'line' => 130,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 130,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe method call on non-nullable type string. Use -> instead.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'line' => 130,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 130,
       'nodeType' => 'PhpParser\\Node\\Expr\\NullsafeMethodCall',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,Illuminate\\Database\\Eloquent\\Model>::map() contains unresolvable type.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'line' => 133,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 133,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$menu_name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'line' => 134,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 134,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$quantity.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'line' => 135,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 135,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\MenuController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Match expression does not handle remaining value: mixed',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\MenuController.php',
       'line' => 87,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\MenuController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 87,
       'nodeType' => 'PHPStan\\Node\\MatchExpressionNode',
       'identifier' => 'match.unhandled',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$balance.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php',
       'line' => 73,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 73,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$id.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php',
       'line' => 81,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 81,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\Admin\\OrderController::updateStatus() should return Illuminate\\Http\\RedirectResponse but returns Illuminate\\Http\\JsonResponse.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php',
       'line' => 109,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 109,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$status.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'line' => 64,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 64,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$total_price.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'line' => 74,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 74,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::user().',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'line' => 76,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 76,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$user_id.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'line' => 79,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 79,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$id.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'line' => 83,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 83,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$id.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'line' => 84,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 84,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$total_price.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'line' => 84,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 84,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$id.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'line' => 89,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 89,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$user.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'line' => 90,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 90,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$breakTime.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'line' => 91,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 91,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$total_price.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'line' => 92,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 92,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\RestockRequestController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\RestockRequestController.php',
       'line' => 48,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\RestockRequestController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 48,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\RestockRequestController.php',
       'line' => 64,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\RestockRequestController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 64,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\StockAlertController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\StockAlertController.php',
       'line' => 42,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\StockAlertController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 42,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$description.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 35,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$balance.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php',
       'line' => 42,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 42,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$amount.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php',
       'line' => 43,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 43,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $user of class App\\Events\\TopupApproved constructor expects App\\Models\\User, Illuminate\\Database\\Eloquent\\Model|null given.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$description.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php',
       'line' => 67,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 67,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'line' => 86,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 86,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe property access "?->name" on left side of ?? is unnecessary. Use -> instead.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'line' => 86,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 86,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$type.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'line' => 87,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 87,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$amount.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'line' => 89,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 89,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$balance_before.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'line' => 90,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 90,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$balance_after.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'line' => 91,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 91,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$created_at.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'line' => 93,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 93,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$balance.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'line' => 152,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 152,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$id.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'line' => 158,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 158,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\UserController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Relations\\HasMany::withTrashed().',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\UserController.php',
       'line' => 171,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\UserController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 171,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,Illuminate\\Database\\Eloquent\\Model>::map() contains unresolvable type.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
       'line' => 49,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 45,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$id.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 50,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$type.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
       'line' => 51,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 51,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$amount.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
       'line' => 52,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 52,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$balance_before.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
       'line' => 53,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 53,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$balance_after.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 54,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$created_at.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 56,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,App\\Models\\Menu>::map() contains unresolvable type.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 41,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php',
       'line' => 53,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 53,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\Menu::$is_available.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 54,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php',
       'line' => 84,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 84,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\Menu::$is_available.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php',
       'line' => 85,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 85,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe property access "?->name" on left side of ?? is unnecessary. Use -> instead.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'line' => 74,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 74,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Offset \'cancelled\'|\'collected\'|\'pending\'|\'preparing\'|\'ready\' on array{pending: \'Menunggu\', preparing: \'Sedang Disiapkan\', ready: \'Siap Diambil\', cancelled: \'Dibatalkan\', collected: \'Sudah Diambil\'} on left side of ?? always exists and is not nullable.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'line' => 170,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 170,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullCoalesce.offset',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method toIso8601String() on string.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'line' => 173,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 173,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe method call on non-nullable type string. Use -> instead.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'line' => 173,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 173,
       'nodeType' => 'PhpParser\\Node\\Expr\\NullsafeMethodCall',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,Illuminate\\Database\\Eloquent\\Model>::map() contains unresolvable type.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'line' => 175,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 175,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$menu_id.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'line' => 176,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 176,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$menu_name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'line' => 177,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 177,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$menu_price.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'line' => 178,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 178,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$quantity.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'line' => 179,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 179,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$subtotal.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'line' => 180,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 180,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 98,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 98,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe property access "?->name" on left side of ?? is unnecessary. Use -> instead.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 98,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 98,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$subtotal.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 246,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 246,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$user.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 246,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 246,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe property access "?->stock" on left side of ?? is unnecessary. Use -> instead.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 305,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 305,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,Illuminate\\Database\\Eloquent\\Model>::map() contains unresolvable type.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 347,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 347,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$menu_id.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 349,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 349,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$menu_name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 350,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 350,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$menu_price.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 351,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 351,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$quantity.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 352,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 352,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$subtotal.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 353,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 353,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 399,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 399,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$menu_id.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 465,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 465,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$quantity.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 465,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 465,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'line' => 501,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 501,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::isExpired().',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
       'line' => 339,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 339,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\PointsController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Anonymous function has an unused use $times.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\PointsController.php',
       'line' => 51,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\PointsController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 51,
       'nodeType' => 'PhpParser\\Node\\Expr\\Closure',
       'identifier' => 'closure.unusedUse',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$type.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php',
       'line' => 68,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 68,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$amount.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php',
       'line' => 69,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 69,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\BalanceTransaction::$created_at.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php',
       'line' => 71,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 71,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method toDateTimeString() on string.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php',
       'line' => 106,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 106,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Batch.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Batch::memberFor() should return App\\Models\\BatchMember|null but returns Illuminate\\Database\\Eloquent\\Model|null.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Batch.php',
       'line' => 73,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Batch.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 73,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Offset \'cancelled\'|\'collected\'|\'pending\'|\'preparing\'|\'ready\' on array{pending: \'Menunggu\', preparing: \'Sedang Disiapkan\', ready: \'Siap Diambil\', cancelled: \'Dibatalkan\', collected: \'Sudah Diambil\'} on left side of ?? always exists and is not nullable.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php',
       'line' => 68,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 68,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullCoalesce.offset',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Offset \'cancelled\'|\'collected\'|\'pending\'|\'preparing\'|\'ready\' on array{pending: \'secondary\', preparing: \'primary\', ready: \'success\', cancelled: \'danger\', collected: \'info\'} on left side of ?? always exists and is not nullable.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php',
       'line' => 74,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 74,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullCoalesce.offset',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Order::generateQr() should return App\\Models\\OrderQr but returns Illuminate\\Database\\Eloquent\\Model.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php',
       'line' => 122,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 122,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Promotion.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Match arm comparison between \'time\' and \'time\' is always true.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Promotion.php',
       'line' => 75,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Promotion.php',
       'traitFilePath' => NULL,
       'tip' => 'Remove remaining cases below this one and this error will disappear too.',
       'nodeLine' => 73,
       'nodeType' => 'PHPStan\\Node\\MatchExpressionNode',
       'identifier' => 'match.alwaysTrue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\FeatureFlagService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$is_enabled.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\FeatureFlagService.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\FeatureFlagService.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 50,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$variant.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\FeatureFlagService.php',
       'line' => 81,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\FeatureFlagService.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 81,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\PromoEngine.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Match arm comparison between \'time\' and \'time\' is always true.',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\PromoEngine.php',
       'line' => 97,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\PromoEngine.php',
       'traitFilePath' => NULL,
       'tip' => 'Remove remaining cases below this one and this error will disappear too.',
       'nodeLine' => 95,
       'nodeType' => 'PHPStan\\Node\\MatchExpressionNode',
       'identifier' => 'match.alwaysTrue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\SuspiciousActivityService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Contracts\\Cache\\Store::connection().',
       'file' => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\SuspiciousActivityService.php',
       'line' => 92,
       'canBeIgnored' => true,
       'filePath' => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\SuspiciousActivityService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 92,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\BackupDatabase.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Jobs\\BackupDatabaseJob',
        1 => 'dispatch',
        2 => 32,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\CreateRecurringOrders.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 49,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 83,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 101,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\DetectAnomalies.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'firstOrCreate',
        2 => 139,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Events\\OrderCreated',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Events\\OrderReady',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Events\\TopupApproved.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Events\\TopupApproved',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\AnomalyController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.anomalies.index',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BackupController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.backups.index',
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Http\\Controllers\\Admin\\BackupController',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BackupRestoreRequestController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.restore-requests.index',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 56,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 39,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BreakTimeController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.break-times.index',
      1 => 'admin.break-times.create',
      2 => 'admin.break-times.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 33,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\CategoryController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.categories.index',
      1 => 'admin.categories.create',
      2 => 'admin.categories.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 55,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\DashboardController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.dashboard',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ExportController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.exports.index',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Jobs\\ProcessBulkExport',
        1 => 'dispatch',
        2 => 52,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\FeatureFlagController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.feature-flags.index',
      1 => 'admin.feature-flags.form',
      2 => 'admin.feature-flags.form',
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Http\\Controllers\\Admin\\FeatureFlagController',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 56,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\HealthController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.health.index',
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Http\\Controllers\\Admin\\HealthController',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 47,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ImpersonateController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.impersonation.audit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'session',
        1 => 71,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Auth',
        1 => 'loginUsingId',
        2 => 106,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.kitchen.index',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'set_time_limit',
        1 => 40,
      ),
      1 => 
      array (
        0 => 'sleep',
        1 => 85,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\MenuController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.menus.index',
      1 => 'admin.menus.create',
      2 => 'admin.menus.edit',
      3 => 'admin.trash.menus',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 39,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.orders.index',
      1 => 'admin.orders.show',
      2 => 'admin.trash.orders',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 68,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 80,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\PromotionController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.promotions.index',
      1 => 'admin.promotions.create',
      2 => 'admin.promotions.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 35,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.orders.scan',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 41,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 78,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ReportController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.reports.daily',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\RestockRequestController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.restock-requests.index',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 78,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\StockAlertController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.stock-alerts.index',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.topup.index',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 57,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 39,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.transactions.index',
      1 => 'admin.transactions.bulk-refund',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 143,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 157,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\UserController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.users.index',
      1 => 'admin.trash.users',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 56,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 62,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 93,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 101,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\WebhookController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'admin.webhooks.index',
      1 => 'admin.webhooks.form',
      2 => 'admin.webhooks.form',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 42,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\DocsController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'api.docs',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 64,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 96,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 111,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\AuthController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.register',
      1 => 'auth.login',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\MetricsController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Http\\Controllers\\MetricsController',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BalanceController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'user.balance.index',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 44,
      ),
      1 => 
      array (
        0 => 'App\\Services\\AdminAlertService',
        1 => 'checkTopupSpike',
        2 => 55,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'user.batches.index',
      1 => 'user.batches.show',
      2 => 'user.batches.checkout',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 63,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'insert',
        2 => 204,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 267,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'insert',
        2 => 347,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 370,
      ),
      5 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 392,
      ),
      6 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 442,
      ),
      7 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 478,
      ),
      8 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 494,
      ),
      9 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 534,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\MenuController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'user.menus.index',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'user.orders.create',
      1 => 'user.orders.history',
      2 => 'user.orders.show',
      3 => 'user.orders.qr-print',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 301,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 144,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'insert',
        2 => 238,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 251,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 264,
      ),
      4 => 
      array (
        0 => 'App\\Services\\AdminAlertService',
        1 => 'checkOrderSpike',
        2 => 299,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\PointsController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'user.points.index',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 51,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 65,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\RecurringOrderController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'user.recurring.index',
      1 => 'user.recurring.create',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 55,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\CheckFeatureFlag.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Http\\Middleware\\CheckFeatureFlag',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 26,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\EnsureAdmin.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 17,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\EnsureSuperAdmin.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 18,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Requests\\StoreOrderRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\StoreOrderRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\StoreOrderRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\StoreOrderRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\StoreOrderRequest',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\AutoRestockJob.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Jobs\\AutoRestockJob',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 51,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Bus\\Dispatchable',
        1 => 'Illuminate\\Queue\\InteractsWithQueue',
        2 => 'Illuminate\\Bus\\Queueable',
        3 => 'Illuminate\\Queue\\SerializesModels',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\BackupCleanupJob.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
        1 => 'Illuminate\\Queue\\InteractsWithQueue',
        2 => 'Illuminate\\Queue\\SerializesModels',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\BackupDatabaseJob.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Jobs\\BackupDatabaseJob',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
        1 => 'Illuminate\\Queue\\InteractsWithQueue',
        2 => 'Illuminate\\Queue\\SerializesModels',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\DispatchWebhookJob.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Jobs\\DispatchWebhookJob',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Jobs\\DispatchWebhookJob',
        1 => 'backoff',
        2 => 'App\\Jobs\\DispatchWebhookJob',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Bus\\Dispatchable',
        1 => 'Illuminate\\Queue\\InteractsWithQueue',
        2 => 'Illuminate\\Bus\\Queueable',
        3 => 'Illuminate\\Queue\\SerializesModels',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Jobs\\ProcessBulkExport',
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Bus\\Dispatchable',
        1 => 'Illuminate\\Queue\\InteractsWithQueue',
        2 => 'Illuminate\\Bus\\Queueable',
        3 => 'Illuminate\\Queue\\SerializesModels',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Anomaly.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Anomaly',
        1 => 'casts',
        2 => 'App\\Models\\Anomaly',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Backup.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Backup',
        1 => 'casts',
        2 => 'App\\Models\\Backup',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BackupRestoreRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\BackupRestoreRequest',
        1 => 'casts',
        2 => 'App\\Models\\BackupRestoreRequest',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BalanceTransaction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\BalanceTransaction',
        1 => 'casts',
        2 => 'App\\Models\\BalanceTransaction',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Batch.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Batch',
        1 => 'getStatusLabelAttribute',
        2 => 'App\\Models\\Batch',
      ),
      1 => 
      array (
        0 => 'App\\Models\\Batch',
        1 => 'getStatusColorAttribute',
        2 => 'App\\Models\\Batch',
      ),
      2 => 
      array (
        0 => 'App\\Models\\Batch',
        1 => 'isOpen',
        2 => 'App\\Models\\Batch',
      ),
      3 => 
      array (
        0 => 'App\\Models\\Batch',
        1 => 'isLocked',
        2 => 'App\\Models\\Batch',
      ),
      4 => 
      array (
        0 => 'App\\Models\\Batch',
        1 => 'isCheckedOut',
        2 => 'App\\Models\\Batch',
      ),
      5 => 
      array (
        0 => 'App\\Models\\Batch',
        1 => 'isCancelled',
        2 => 'App\\Models\\Batch',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BatchMember.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\BatchMember',
        1 => 'casts',
        2 => 'App\\Models\\BatchMember',
      ),
      1 => 
      array (
        0 => 'App\\Models\\BatchMember',
        1 => 'isPending',
        2 => 'App\\Models\\BatchMember',
      ),
      2 => 
      array (
        0 => 'App\\Models\\BatchMember',
        1 => 'isPaid',
        2 => 'App\\Models\\BatchMember',
      ),
      3 => 
      array (
        0 => 'App\\Models\\BatchMember',
        1 => 'isWaived',
        2 => 'App\\Models\\BatchMember',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BatchMemberItem.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\BatchMemberItem',
        1 => 'casts',
        2 => 'App\\Models\\BatchMemberItem',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BreakTime.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\BreakTime',
        1 => 'casts',
        2 => 'App\\Models\\BreakTime',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\FeatureFlag.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\FeatureFlag',
        1 => 'casts',
        2 => 'App\\Models\\FeatureFlag',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\ImpersonationLog.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\ImpersonationLog',
        1 => 'casts',
        2 => 'App\\Models\\ImpersonationLog',
      ),
      1 => 
      array (
        0 => 'App\\Models\\ImpersonationLog',
        1 => 'isActive',
        2 => 'App\\Models\\ImpersonationLog',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Menu.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Menu',
        1 => 'casts',
        2 => 'App\\Models\\Menu',
      ),
      1 => 
      array (
        0 => 'App\\Models\\Menu',
        1 => 'getIsAvailableAttribute',
        2 => 'App\\Models\\Menu',
      ),
      2 => 
      array (
        0 => 'App\\Models\\Menu',
        1 => 'getStatusAttribute',
        2 => 'App\\Models\\Menu',
      ),
      3 => 
      array (
        0 => 'App\\Models\\Menu',
        1 => 'isAvailable',
        2 => 'App\\Models\\Menu',
      ),
      4 => 
      array (
        0 => 'App\\Models\\Menu',
        1 => 'isLowStock',
        2 => 'App\\Models\\Menu',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Order',
        1 => 'casts',
        2 => 'App\\Models\\Order',
      ),
      1 => 
      array (
        0 => 'App\\Models\\Order',
        1 => 'getStatusLabelAttribute',
        2 => 'App\\Models\\Order',
      ),
      2 => 
      array (
        0 => 'App\\Models\\Order',
        1 => 'getStatusColorAttribute',
        2 => 'App\\Models\\Order',
      ),
      3 => 
      array (
        0 => 'App\\Models\\Order',
        1 => 'isPreparing',
        2 => 'App\\Models\\Order',
      ),
      4 => 
      array (
        0 => 'App\\Models\\Order',
        1 => 'isReady',
        2 => 'App\\Models\\Order',
      ),
      5 => 
      array (
        0 => 'App\\Models\\Order',
        1 => 'isCancelled',
        2 => 'App\\Models\\Order',
      ),
      6 => 
      array (
        0 => 'App\\Models\\Order',
        1 => 'isCollected',
        2 => 'App\\Models\\Order',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\OrderItem.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\OrderItem',
        1 => 'casts',
        2 => 'App\\Models\\OrderItem',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\OrderQr.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\OrderQr',
        1 => 'casts',
        2 => 'App\\Models\\OrderQr',
      ),
      1 => 
      array (
        0 => 'App\\Models\\OrderQr',
        1 => 'isUsed',
        2 => 'App\\Models\\OrderQr',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\PointTransaction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\PointTransaction',
        1 => 'casts',
        2 => 'App\\Models\\PointTransaction',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\PromoApplication.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\PromoApplication',
        1 => 'casts',
        2 => 'App\\Models\\PromoApplication',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Promotion.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Promotion',
        1 => 'casts',
        2 => 'App\\Models\\Promotion',
      ),
      1 => 
      array (
        0 => 'App\\Models\\Promotion',
        1 => 'getStatusLabel',
        2 => 'App\\Models\\Promotion',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\RecurringOrder.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\RecurringOrder',
        1 => 'casts',
        2 => 'App\\Models\\RecurringOrder',
      ),
      1 => 
      array (
        0 => 'App\\Models\\RecurringOrder',
        1 => 'getDayNameAttribute',
        2 => 'App\\Models\\RecurringOrder',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\RestockRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\RestockRequest',
        1 => 'casts',
        2 => 'App\\Models\\RestockRequest',
      ),
      1 => 
      array (
        0 => 'App\\Models\\RestockRequest',
        1 => 'isPending',
        2 => 'App\\Models\\RestockRequest',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\StockAlert.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\StockAlert',
        1 => 'casts',
        2 => 'App\\Models\\StockAlert',
      ),
      1 => 
      array (
        0 => 'App\\Models\\StockAlert',
        1 => 'isResolved',
        2 => 'App\\Models\\StockAlert',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
      ),
      1 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'isAdmin',
        2 => 'App\\Models\\User',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        3 => 'Laravel\\Sanctum\\HasApiTokens',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\UserFeatureFlagOverride.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\UserFeatureFlagOverride',
        1 => 'casts',
        2 => 'App\\Models\\UserFeatureFlagOverride',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Webhook.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Webhook',
        1 => 'casts',
        2 => 'App\\Models\\Webhook',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Notifications\\LowStockNotification.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Notifications\\LowStockNotification',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Notifications\\LowStockNotification',
        1 => 'via',
        2 => 'App\\Notifications\\LowStockNotification',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Bus\\Queueable',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'for',
        2 => 44,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'for',
        2 => 49,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'for',
        2 => 56,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'for',
        2 => 63,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'for',
        2 => 70,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\AdminAlertService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\AdminAlertService',
        1 => 'checkOrderSpike',
        2 => 88,
      ),
      1 => 
      array (
        0 => 'App\\Services\\AdminAlertService',
        1 => 'checkTopupSpike',
        2 => 89,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\BackupService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Symfony\\Component\\Process\\Process',
        ),
        1 => 'setTimeout',
        2 => 212,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'Symfony\\Component\\Process\\Process',
        ),
        1 => 'run',
        2 => 213,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'unprepared',
        2 => 125,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\FeatureFlagService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Cache',
        1 => 'forget',
        2 => 135,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\HealthCheckService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Cache',
        1 => 'put',
        2 => 155,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'selectOne',
        2 => 56,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Cache',
        1 => 'put',
        2 => 69,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Cache',
        1 => 'forget',
        2 => 71,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\MetricsService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'selectOne',
        2 => 162,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\PromoResult.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Services\\PromoResult',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\PromoResult',
        1 => 'hasDiscount',
        2 => 'App\\Services\\PromoResult',
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\StockAlertService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'rescue',
        1 => 106,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Jobs\\AutoRestockJob',
        1 => 'dispatch',
        2 => 63,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'post',
        2 => 107,
      ),
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\SuspiciousActivityService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\SuspiciousActivityService',
        1 => 'lockKey',
        2 => 'App\\Services\\SuspiciousActivityService',
      ),
      1 => 
      array (
        0 => 'App\\Services\\SuspiciousActivityService',
        1 => 'counterKey',
        2 => 'App\\Services\\SuspiciousActivityService',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Cache',
        1 => 'put',
        2 => 41,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Cache',
        1 => 'put',
        2 => 60,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Cache',
        1 => 'forget',
        2 => 75,
      ),
    ),
  ),
); },
	'dependencies' => array (
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\BackupCleanup.php' => 
  array (
    'fileHash' => '2866ab0def327800276ef1993be9cde5f41202a888496badb186e1830a79cbec',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\BackupDatabase.php' => 
  array (
    'fileHash' => 'f6dba1827f52dba4cd46bc8d99e324a8a2a930559cb0891f4a0aae39ec72b8a8',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\BackupRestore.php' => 
  array (
    'fileHash' => '8b6002dc39b4c588ba4aaa255a117641635b18fc9b5ab34aa7b2b62043107568',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\CheckLowStock.php' => 
  array (
    'fileHash' => '1ece93c8de1af838582c93c81fafaedd6b4df35f5aa09fcdd09c863196e64a63',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\CreateRecurringOrders.php' => 
  array (
    'fileHash' => '7f9c061946182724c5df8e85e74b41d9192c723591e32c341f499d74db66fb07',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\DetectAnomalies.php' => 
  array (
    'fileHash' => '351afe39a8b2b76fca5d9683c1c8762d66b1870511237628a9475b2b8b28225b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php' => 
  array (
    'fileHash' => '64d428956d14dfa43361ed869952a7de867d56179d417383d6ebb0b3acf7fe5b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\ResetMenuStock.php' => 
  array (
    'fileHash' => '38b22649875e6b3f3fe729db178a176c9fc1f3eaf79e68f1fe5e42fc524728fb',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php' => 
  array (
    'fileHash' => '62256b0b26f42f265f398e6ce2f12b48f4094371fcee3c8dd4485b90f97cc32f',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Listeners\\WebhookEventListener.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php' => 
  array (
    'fileHash' => 'cc2352da7d1fc3280e2fee949645e8342af6af741a10111b47899aacee86e29d',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Listeners\\WebhookEventListener.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Events\\TopupApproved.php' => 
  array (
    'fileHash' => '1a9e0ab1d07c64447ba46ea4fed274eca86aac2b39b0f88f87b022ee5914dc52',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Listeners\\WebhookEventListener.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\AnomalyController.php' => 
  array (
    'fileHash' => 'e6a66d61f708a64ddd005b7158ba97d79af65068d34a143e1b98518f40adbdf2',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BackupController.php' => 
  array (
    'fileHash' => '974f4e683940a3c3f279de6f46890f48c92a2f4ba7d52a6a268a1709de66e9a0',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BackupRestoreRequestController.php' => 
  array (
    'fileHash' => '166eada835e280ae474345da94a2be051eef34f8cbba44adc0632d57ea7bb969',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BreakTimeController.php' => 
  array (
    'fileHash' => '5200bcc5a9761bf7f88a55de379749b1bb2cc6f825d4b5b3143e7ad57beee00b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\CategoryController.php' => 
  array (
    'fileHash' => 'a912f74204fe5a0888bcbde53a02d8f86cc9f8c8793092092a237bb3f1fd494c',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\DashboardController.php' => 
  array (
    'fileHash' => 'fef4686bd305a24791252f5f79046d363dc8827c734261fd5b8335614ce037cd',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ExportController.php' => 
  array (
    'fileHash' => '6601a7d057da544268f39da2868f444c3f2362626f5c0d882d7599edf8966b90',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\FeatureFlagController.php' => 
  array (
    'fileHash' => 'b47f15b265aa1aeba3246eb0f89229fa9e986454ebcb579ef155c663ef824b5d',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\HealthController.php' => 
  array (
    'fileHash' => '3084c63dafdca23a0de5eb4c4e3ecb7124c5bc1eb53096ebd04d2476e1a01f05',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ImpersonateController.php' => 
  array (
    'fileHash' => '23d71d348ecc0a17d5829da818a3df2126dd95d6ae16019f1e523e07642c27b3',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php' => 
  array (
    'fileHash' => 'f6048823634453daf90fd4947daab2a7968773c9dda69bb487553f8b51d774ac',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\MenuController.php' => 
  array (
    'fileHash' => '835ef73630085f303e7c7b19b77040910c240f83799dbb76f529604eea2b20b4',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php' => 
  array (
    'fileHash' => '20ca89c01b99faccb5a0280ae996f9b955aec199288d27e16e06c8996147772f',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\PromotionController.php' => 
  array (
    'fileHash' => '0595082f2731412e990d5e7629f374d2d15b9597b64d1547ac526c670450d124',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php' => 
  array (
    'fileHash' => '463e1db212924901996a1c120f0513ee2a9bf6d99862de1bae5d59810807aeb3',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ReportController.php' => 
  array (
    'fileHash' => '8ee8d1219f3ea5b5aa058f4d5974491a85a6daee9ebe9d8407aad44cef45d1cf',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\RestockRequestController.php' => 
  array (
    'fileHash' => 'd3242e198533af20aef64ef8cbf6697da9521ca6e0d6e4561cb815d0712d6936',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\StockAlertController.php' => 
  array (
    'fileHash' => 'a749a7218471921d109fb97ed9afed18ad48a1b9608606e103e7de2f064537b5',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php' => 
  array (
    'fileHash' => 'be5199bfda4274212d60db9550382668fd9bc45c70f3c1f51a9adf808410ced6',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php' => 
  array (
    'fileHash' => 'f1ff4f291b5cb1c3a1e6a819e4a81779b038f5050cd35e67e15ff93a776a6ba2',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\UserController.php' => 
  array (
    'fileHash' => '55666ed4dedfb7a1ee3a86e34fc45f83ababccdeaa3a3edf290163bdd3921b96',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\WebhookController.php' => 
  array (
    'fileHash' => '9b4e5dcf999f6d077dd421ba68425559e9230483b050a09e82690f253f333909',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\DocsController.php' => 
  array (
    'fileHash' => 'ab778505770e4c5868d1cabdf567511646060419c4ab6db0cddb8b41e56b4a66',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\AuthController.php' => 
  array (
    'fileHash' => '9cf8f4090506c079e8dc2f141182a069dddc1ff504ba59d9d702eb485acfff6e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php' => 
  array (
    'fileHash' => '3fc2c2873a4a4e7af7f4c50fa8b4a42f175623b297aa37d3c1572b7c409490fc',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php' => 
  array (
    'fileHash' => 'a26064cad7774adf86de421862daed324d32ba02ba71a72a8d1c6fc5e7de9f43',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php' => 
  array (
    'fileHash' => '02790b04d64209006fac49651680db85ff184575be3ab988c35fae677e605769',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\WebhookController.php' => 
  array (
    'fileHash' => 'acd173f89352d58474cfe876b29c499a0ee32e334b96583700ffef620275d407',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\AuthController.php' => 
  array (
    'fileHash' => '9dce72dadc58fece8e0f1fddf43fe5cbc4b67d3253a816bfb932ce774be431ec',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Controller.php' => 
  array (
    'fileHash' => '25d1c1ef8e6cc8a376553faacfba2b07d9dfaee9bdbb84f14f77517580e9deb1',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\AnomalyController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BackupController.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BackupRestoreRequestController.php',
      3 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BreakTimeController.php',
      4 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\CategoryController.php',
      5 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\DashboardController.php',
      6 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ExportController.php',
      7 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\FeatureFlagController.php',
      8 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\HealthController.php',
      9 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ImpersonateController.php',
      10 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
      11 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\MenuController.php',
      12 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php',
      13 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\PromotionController.php',
      14 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
      15 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ReportController.php',
      16 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\RestockRequestController.php',
      17 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\StockAlertController.php',
      18 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php',
      19 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
      20 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\UserController.php',
      21 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\WebhookController.php',
      22 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\DocsController.php',
      23 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\AuthController.php',
      24 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
      25 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php',
      26 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
      27 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\WebhookController.php',
      28 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\AuthController.php',
      29 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\MetricsController.php',
      30 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BalanceController.php',
      31 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
      32 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\MenuController.php',
      33 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
      34 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\PointsController.php',
      35 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\RecurringOrderController.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\MetricsController.php' => 
  array (
    'fileHash' => '24d13ef0f3d14fd27a375e583e55e1afeee7716dd0a2ff65581577cc3a64d0b5',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BalanceController.php' => 
  array (
    'fileHash' => '3f5dd3f98c8b6a5fc439e5139088468dba16461e31dd0a0485078ab203b986f9',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php' => 
  array (
    'fileHash' => '12861e5bcbf06ffd3bc7b35e2d0e0ab06a2dbf3c8c3e56796def773016b58f49',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\MenuController.php' => 
  array (
    'fileHash' => 'b9e40d48e4554047e03aa382af87cfcddb36249a8a06bd4bfac6a227e433093a',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php' => 
  array (
    'fileHash' => '53ea722057189914c587ac33be7a7820b0f502e70a21dd30edeea1a07f4f6de9',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\PointsController.php' => 
  array (
    'fileHash' => 'd786b4fb8a8e845524840d8f81a64f553e8b2c06329f7217633e256426a374bf',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\RecurringOrderController.php' => 
  array (
    'fileHash' => '1d655e0ccd39577e43fe31d61c9ea49831eb8c0d9fa778dffc596ddec56d360d',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\CheckAccountLocked.php' => 
  array (
    'fileHash' => 'f7c4809890d8a6ad5d6266f4f0f7bdb7eaf05a83bbffba59e3c838e84f0ad9e3',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\CheckFeatureFlag.php' => 
  array (
    'fileHash' => '9d645bbde945c15b352b1bfd0f526a7f76061e295229e89081576faf3f0c3d2b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\EnsureAdmin.php' => 
  array (
    'fileHash' => 'c985f3e0a4e3a560be0a2e3ad6e70b5bc31c89b4c8ea6c1df2470998b845ec4e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\EnsureSuperAdmin.php' => 
  array (
    'fileHash' => 'f2ac33b8f6f8502a6150b01e862d9b379cd69b4a3c6e44e4973714935fd3ed9b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\MetricsAuth.php' => 
  array (
    'fileHash' => '3fb77c2efff983c1ef33c24969a0ac074f45ea54d19837770c4a7a78a84cca6e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Requests\\StoreOrderRequest.php' => 
  array (
    'fileHash' => 'ff6d8475f4a84d34f098f488958a123dd3b7b63ed725f213ad702c02c36ced74',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\AutoRestockJob.php' => 
  array (
    'fileHash' => '7718d83d0b74129c8cc292aca7a4d5a0dfc3081b49e907342fd658071a5ab24c',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\StockAlertService.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\BackupCleanupJob.php' => 
  array (
    'fileHash' => '962614617fd498146403ddba2f2e7a50579e8741980fe81e8c063deb33c09cd5',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\BackupDatabaseJob.php' => 
  array (
    'fileHash' => 'd02433396a8bf30ab548b16f26c2844f00aca2d15cd1d76d882e3cf9f3c3d681',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\BackupDatabase.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\DispatchWebhookJob.php' => 
  array (
    'fileHash' => 'b0c2c567544545e0823031f899d805ed9ec24940fc3ed3a4ab2a3936437953d3',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Listeners\\WebhookEventListener.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php' => 
  array (
    'fileHash' => '8f1414bfc2c9f14d3c1dfcc72434a5f8f241605ce5c88e7c9d78d55d2ef9ea1d',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ExportController.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Listeners\\WebhookEventListener.php' => 
  array (
    'fileHash' => 'e1082f009e417f945091a9c2abd4548c7201db5f301945cd1abc118503fa688c',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Anomaly.php' => 
  array (
    'fileHash' => '54513acca9e29f19d58b738a1e6a68a55da409010f7bb44b1ddfa6f086271f53',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\DetectAnomalies.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\AnomalyController.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\DashboardController.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Backup.php' => 
  array (
    'fileHash' => '585f7cda04f19fa74a805ec3cee0834ece96a2b5eec4a0cf56bc971d1699f178',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\BackupDatabase.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\BackupRestore.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BackupController.php',
      3 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BackupRestoreRequestController.php',
      4 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\HealthController.php',
      5 => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\BackupDatabaseJob.php',
      6 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BackupRestoreRequest.php',
      7 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\BackupService.php',
      8 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\MetricsService.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BackupRestoreRequest.php' => 
  array (
    'fileHash' => 'cc56713fa7f44c7c7fe85b052d565f19c7acc53d080ae7d7ca13cfba36a53fcf',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BackupController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BackupRestoreRequestController.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Backup.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BalanceTransaction.php' => 
  array (
    'fileHash' => '70a54bdac9c726ae383a1aae135f4a72e0c6f07e05687f47b31c959db11886ff',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\CreateRecurringOrders.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\DetectAnomalies.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php',
      3 => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\TopupApproved.php',
      4 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\DashboardController.php',
      5 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php',
      6 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php',
      7 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
      8 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\UserController.php',
      9 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
      10 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BalanceController.php',
      11 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
      12 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
      13 => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php',
      14 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php',
      15 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\User.php',
      16 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\AdminAlertService.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Batch.php' => 
  array (
    'fileHash' => 'b5f646e0577457c1738f738ea94b9c5db04c0dd1ac3a92795612fde840683653',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BatchMember.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BatchMember.php' => 
  array (
    'fileHash' => '0da8082988db11dfbaadb98a1c65fa8bd4ffb0468e90e55a84d96e950013fe94',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Batch.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BatchMemberItem.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BatchMemberItem.php' => 
  array (
    'fileHash' => 'd432b792354ba36591da2c43ee2788b10d9f61cb04ada2a681f99c1b99c746c3',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BatchMember.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BreakTime.php' => 
  array (
    'fileHash' => '7220385a53ffc43ca83b5866fb517da78f3b5583453b7e950d3d6819ac4f49c9',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BreakTimeController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php',
      3 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
      4 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\MenuController.php',
      5 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
      6 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\RecurringOrderController.php',
      7 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Requests\\StoreOrderRequest.php',
      8 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Batch.php',
      9 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php',
      10 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\RecurringOrder.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Category.php' => 
  array (
    'fileHash' => '0eaf6d715ee02099fe0f9ccbb90ddf72032c9bfa179914c448d5794e871e3e81',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\CategoryController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\MenuController.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\MenuController.php',
      3 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Menu.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\ExportJob.php' => 
  array (
    'fileHash' => 'e149673c8e8618b4837cadcbf732514ccba3f313f3b9b9c844843036679d3a5d',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ExportController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\FeatureFlag.php' => 
  array (
    'fileHash' => 'ad443e826686ee77482ea728b1e3a0eeb6c741608be9d39a27a38a2f78ecad02',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\FeatureFlagController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\UserFeatureFlagOverride.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\FeatureFlagService.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\ImpersonationLog.php' => 
  array (
    'fileHash' => 'c194edfd714b82a38886246eb5e173efa7d92691b504a8346bb066ff5a0001b3',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ImpersonateController.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Menu.php' => 
  array (
    'fileHash' => 'ebfa3a9e8111b352def0641cf6af2893a90e0506ccf025c91d94ee7956e97a90',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\CreateRecurringOrders.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\MenuController.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\PromotionController.php',
      3 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php',
      4 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
      5 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
      6 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\MenuController.php',
      7 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
      8 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\RecurringOrderController.php',
      9 => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\AutoRestockJob.php',
      10 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BatchMemberItem.php',
      11 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Category.php',
      12 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\OrderItem.php',
      13 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\RecurringOrder.php',
      14 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\RestockRequest.php',
      15 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\StockAlert.php',
      16 => 'C:\\laragon\\www\\usk_no_ai\\app\\Notifications\\LowStockNotification.php',
      17 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\StockAlertService.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php' => 
  array (
    'fileHash' => '27b31abb2a1bb5bfc9aad4013e94498c361e599d22d810db179c9020c904345a',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\CreateRecurringOrders.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\DetectAnomalies.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php',
      3 => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php',
      4 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\DashboardController.php',
      5 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\HealthController.php',
      6 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php',
      7 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php',
      8 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
      9 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ReportController.php',
      10 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
      11 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
      12 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\WebhookController.php',
      13 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
      14 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
      15 => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php',
      16 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BalanceTransaction.php',
      17 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BatchMember.php',
      18 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BreakTime.php',
      19 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\OrderItem.php',
      20 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\OrderQr.php',
      21 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\PromoApplication.php',
      22 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\User.php',
      23 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\AdminAlertService.php',
      24 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\MetricsService.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\OrderItem.php' => 
  array (
    'fileHash' => 'd5800f12752142d0b27ff86853ca79b2a0202c0a54c1f612a241b888dde57604',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\CreateRecurringOrders.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ReportController.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
      3 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
      4 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
      5 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Menu.php',
      6 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\OrderQr.php' => 
  array (
    'fileHash' => '84b72bd18e1046d0ec1dd65303a889ad64a196f3b72409dde749b0b6a6afce23',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
      3 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\PointTransaction.php' => 
  array (
    'fileHash' => '1bbe3a092395774a94590e2e57fded28febffb6cea28648980dd32970b7c8c1d',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\PointsController.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\User.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\PromoApplication.php' => 
  array (
    'fileHash' => '20de4323ea8dbed08bc2ce995dbe793f311c06eef53fe583116797732559a7c5',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Promotion.php' => 
  array (
    'fileHash' => '9a911aae20bad709ea2f6ebd7a244c9ac20e72b95626c3265ea067d9ec851a86',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\PromotionController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\PromoApplication.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\PromoEngine.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\RecurringOrder.php' => 
  array (
    'fileHash' => '0b32bd4e5b000ac15270a1f0b6b6434878d4b7e74abaebc9a8a79ef3b3c031fe',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\CreateRecurringOrders.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\RecurringOrderController.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\RestockRequest.php' => 
  array (
    'fileHash' => '69ac41745bb0aad0f2ead5077ced0ba040d7998cff36805859ef25756a5e67b5',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\RestockRequestController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\AutoRestockJob.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Menu.php',
      3 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\StockAlert.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\StockAlert.php' => 
  array (
    'fileHash' => 'cd92f8fbf28df4c4c4152ee806183fa5ef98b014ca4c85d5295d1bda18774849',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\StockAlertController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Menu.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\RestockRequest.php',
      3 => 'C:\\laragon\\www\\usk_no_ai\\app\\Notifications\\LowStockNotification.php',
      4 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\StockAlertService.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\User.php' => 
  array (
    'fileHash' => 'c097dc9bbd9245f35bb4a63e22b044849d8d4851fc7b44b5d45ae09a2360b059',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\CreateRecurringOrders.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Events\\TopupApproved.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BackupRestoreRequestController.php',
      3 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\DashboardController.php',
      4 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ExportController.php',
      5 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\FeatureFlagController.php',
      6 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\HealthController.php',
      7 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ImpersonateController.php',
      8 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\StockAlertController.php',
      9 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php',
      10 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\UserController.php',
      11 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\AuthController.php',
      12 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php',
      13 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php',
      14 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\AuthController.php',
      15 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BalanceController.php',
      16 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php',
      17 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
      18 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\PointsController.php',
      19 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\RecurringOrderController.php',
      20 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\CheckAccountLocked.php',
      21 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\CheckFeatureFlag.php',
      22 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\EnsureAdmin.php',
      23 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\EnsureSuperAdmin.php',
      24 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Requests\\StoreOrderRequest.php',
      25 => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php',
      26 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BackupRestoreRequest.php',
      27 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BalanceTransaction.php',
      28 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Batch.php',
      29 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BatchMember.php',
      30 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\ExportJob.php',
      31 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\ImpersonationLog.php',
      32 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php',
      33 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\PointTransaction.php',
      34 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\RecurringOrder.php',
      35 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\RestockRequest.php',
      36 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\UserFeatureFlagOverride.php',
      37 => 'C:\\laragon\\www\\usk_no_ai\\app\\Providers\\AppServiceProvider.php',
      38 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\FeatureFlagService.php',
      39 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\MetricsService.php',
      40 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\SentryService.php',
      41 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\StockAlertService.php',
      42 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\SuspiciousActivityService.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\UserFeatureFlagOverride.php' => 
  array (
    'fileHash' => '5ee18635012bf6155cbef37b022cba4c8deab6f8051d4fab2a7fe063a9113b6f',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\FeatureFlag.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Models\\User.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Webhook.php' => 
  array (
    'fileHash' => '71d7504bc9189f4e3b02e8179e5159adb50e1af075600f84c4449e066f225a21',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\WebhookController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\DispatchWebhookJob.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Listeners\\WebhookEventListener.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Notifications\\LowStockNotification.php' => 
  array (
    'fileHash' => 'a2ce9ed31f7824a5b9e00b943eabcd2510ed8a870715cdda4907ffecdb030a8f',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\StockAlertController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\StockAlertService.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'fileHash' => 'e97ff9821cd36276eb55c87ca95ce852250e422ea1034b8c34e21adf47eb3aa0',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\AdminAlertService.php' => 
  array (
    'fileHash' => 'f2428370d57a89eb2e6d60faff27ee5c7b1f879de610c4c94441cffa576f62cd',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BalanceController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\BackupService.php' => 
  array (
    'fileHash' => '7a569b5b7e754ec35cd848c92d11580a6b06703561627202a615a9d6aaa67f3b',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\BackupCleanup.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\BackupDatabase.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\BackupRestore.php',
      3 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BackupController.php',
      4 => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\BackupCleanupJob.php',
      5 => 'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\BackupDatabaseJob.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\FeatureFlagService.php' => 
  array (
    'fileHash' => '77f7c22669baaba10a9268e0b75daf9b17c1f5c6ee11d43a8c0946022a3e1d72',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\FeatureFlagController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\CheckFeatureFlag.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\HealthCheckService.php' => 
  array (
    'fileHash' => '56673bf84396ee5816e28f4056fba22742ec4ccd434a75df575dda0f20d5d325',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\HealthController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\MetricsService.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\MetricsService.php' => 
  array (
    'fileHash' => '267d6b4b5c5e366821062dc41133eee8e82c26585321e52f9d40f8e6e54baf24',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\MetricsController.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\PromoEngine.php' => 
  array (
    'fileHash' => 'ac1ca0d52f1cc77c9c3cf492699a9c3384d19165da9481a99aa96712498e8477',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\PromoResult.php' => 
  array (
    'fileHash' => 'ff5b7c04831fd3ba66af714b6607e43fc05254729bb2fb0145dbf9323cc540f3',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Services\\PromoEngine.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\SentryService.php' => 
  array (
    'fileHash' => '0be98c49dd4de17353d80e1ae8292516327d0b7ff3bb4b0eb82a7686e42b227a',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\HealthController.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\StockAlertService.php' => 
  array (
    'fileHash' => '40dbcb4f9765ce4438a777d408887a6835c849ed2fabd74199e8c306c47a05c4',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\CheckLowStock.php',
    ),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\SuspiciousActivityService.php' => 
  array (
    'fileHash' => '8a47f6ce8bf40e3974fa5236c7d603ca6ff3d4c9daa1f3f4a939fc1a094c33cf',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\UserController.php',
      1 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\AuthController.php',
      2 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BalanceController.php',
      3 => 'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\CheckAccountLocked.php',
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\BackupCleanup.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\BackupCleanup',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Services\\BackupService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\BackupDatabase.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\BackupDatabase',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Services\\BackupService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\BackupRestore.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\BackupRestore',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Services\\BackupService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\CheckLowStock.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\CheckLowStock',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Scans every menu that has a low_stock_threshold set and fires alerts
 * for those in a low-stock condition.
 *
 * Usage:
 *   php artisan stock:check-alerts           # normal run
 *   php artisan stock:check-alerts --dry-run # counts without persisting
 */',
         'namespace' => 'App\\Console\\Commands',
         'uses' => 
        array (
          'stockalertservice' => 'App\\Services\\StockAlertService',
          'command' => 'Illuminate\\Console\\Command',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Services\\StockAlertService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\CreateRecurringOrders.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\CreateRecurringOrders',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\DetectAnomalies.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\DetectAnomalies',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * DetectAnomalies
 *
 * Computes a rolling baseline (mean ± stddev) for hourly order/refund/topup
 * counts using the past 28 days of history, then flags the most recently
 * completed full hour if its observed value exceeds the threshold.
 *
 * Usage:
 *   php artisan anomalies:detect              # analyses the last completed hour
 *   php artisan anomalies:detect --hours=3   # analyses the last N hours
 *   php artisan anomalies:detect --sigma=3   # custom sigma threshold (default 2)
 *   php artisan anomalies:detect --dry-run   # print result without persisting
 */',
         'namespace' => 'App\\Console\\Commands',
         'uses' => 
        array (
          'anomaly' => 'App\\Models\\Anomaly',
          'balancetransaction' => 'App\\Models\\BalanceTransaction',
          'order' => 'App\\Models\\Order',
          'command' => 'Illuminate\\Console\\Command',
          'collection' => 'Illuminate\\Support\\Collection',
          'db' => 'Illuminate\\Support\\Facades\\DB',
          'log' => 'Illuminate\\Support\\Facades\\Log',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'statistics',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Compute population mean and sample standard deviation.
     *
     * @param  array<int>  $values
     * @return array{mean: float, stddev: float}
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'anomaly' => 'App\\Models\\Anomaly',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'order' => 'App\\Models\\Order',
              'command' => 'Illuminate\\Console\\Command',
              'collection' => 'Illuminate\\Support\\Collection',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'values',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\GenerateReconciliationReport.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\GenerateReconciliationReport',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Console\\Commands\\ResetMenuStock.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\ResetMenuStock',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderCreated.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Events\\OrderCreated',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'order',
               'type' => 'App\\Models\\Order',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toWebhookPayload',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Events\\OrderReady.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Events\\OrderReady',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'order',
               'type' => 'App\\Models\\Order',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toWebhookPayload',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Events\\TopupApproved.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Events\\TopupApproved',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'transaction',
               'type' => 'App\\Models\\BalanceTransaction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toWebhookPayload',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\AnomalyController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\AnomalyController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Paginated list of all flagged anomalies (unresolved first).
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'anomaly' => 'App\\Models\\Anomaly',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolve',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Mark an anomaly as resolved.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'anomaly' => 'App\\Models\\Anomaly',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'anomaly',
               'type' => 'App\\Models\\Anomaly',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveAll',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Mark all unresolved anomalies as resolved at once.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'anomaly' => 'App\\Models\\Anomaly',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BackupController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\BackupController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Services\\BackupService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Trigger a manual backup synchronously. */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'backup' => 'App\\Models\\Backup',
              'backuprestorerequest' => 'App\\Models\\BackupRestoreRequest',
              'backupservice' => 'App\\Services\\BackupService',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'rule' => 'Illuminate\\Validation\\Rule',
              'view' => 'Illuminate\\View\\View',
              'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'download',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Stream-download an encrypted backup file. */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'backup' => 'App\\Models\\Backup',
              'backuprestorerequest' => 'App\\Models\\BackupRestoreRequest',
              'backupservice' => 'App\\Services\\BackupService',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'rule' => 'Illuminate\\Validation\\Rule',
              'view' => 'Illuminate\\View\\View',
              'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse|Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'backup',
               'type' => 'App\\Models\\Backup',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Delete both the encrypted file and its metadata record. */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'backup' => 'App\\Models\\Backup',
              'backuprestorerequest' => 'App\\Models\\BackupRestoreRequest',
              'backupservice' => 'App\\Services\\BackupService',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'rule' => 'Illuminate\\Validation\\Rule',
              'view' => 'Illuminate\\View\\View',
              'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'backup',
               'type' => 'App\\Models\\Backup',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BackupRestoreRequestController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\BackupRestoreRequestController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Any admin may submit a restore request. */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'backup' => 'App\\Models\\Backup',
              'backuprestorerequest' => 'App\\Models\\BackupRestoreRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'approve',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Only super admins can approve — marks as approved but does NOT auto-execute. */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'backup' => 'App\\Models\\Backup',
              'backuprestorerequest' => 'App\\Models\\BackupRestoreRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'backupRestoreRequest',
               'type' => 'App\\Models\\BackupRestoreRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'reject',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Any admin can reject a pending request. */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'backup' => 'App\\Models\\Backup',
              'backuprestorerequest' => 'App\\Models\\BackupRestoreRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'backupRestoreRequest',
               'type' => 'App\\Models\\BackupRestoreRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\BreakTimeController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\BreakTimeController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'breakTime',
               'type' => 'App\\Models\\BreakTime',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'breakTime',
               'type' => 'App\\Models\\BreakTime',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'breakTime',
               'type' => 'App\\Models\\BreakTime',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\CategoryController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\CategoryController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Daftar semua kategori beserta jumlah menu yang dimiliki.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'category' => 'App\\Models\\Category',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Form tambah kategori baru.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'category' => 'App\\Models\\Category',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Route GET /categories/{category} — redirect ke halaman edit.
     * View "show" tidak diperlukan untuk resource internal admin.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'category' => 'App\\Models\\Category',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => 'App\\Models\\Category',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Simpan kategori baru.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'category' => 'App\\Models\\Category',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Form edit kategori.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'category' => 'App\\Models\\Category',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => 'App\\Models\\Category',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Simpan perubahan kategori.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'category' => 'App\\Models\\Category',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => 'App\\Models\\Category',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Hapus kategori.
     * Guard: tidak bisa dihapus jika masih ada menu yang menggunakannya.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'category' => 'App\\Models\\Category',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => 'App\\Models\\Category',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\DashboardController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\DashboardController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'pollQueue',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Endpoint JSON untuk polling status antrean.
     * Dipanggil setiap 30 detik oleh halaman antrean.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'anomaly' => 'App\\Models\\Anomaly',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'order' => 'App\\Models\\Order',
              'user' => 'App\\Models\\User',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ExportController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\ExportController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'download',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'exportJob',
               'type' => 'App\\Models\\ExportJob',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'exportJob',
               'type' => 'App\\Models\\ExportJob',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\FeatureFlagController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\FeatureFlagController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Services\\FeatureFlagService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'featureFlag',
               'type' => 'App\\Models\\FeatureFlag',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'featureFlag',
               'type' => 'App\\Models\\FeatureFlag',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'featureFlag',
               'type' => 'App\\Models\\FeatureFlag',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toggle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Flip is_enabled and return the new state as JSON.
     * Supports fetch() calls from the admin index table.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'featureflag' => 'App\\Models\\FeatureFlag',
              'user' => 'App\\Models\\User',
              'featureflagservice' => 'App\\Services\\FeatureFlagService',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'str' => 'Illuminate\\Support\\Str',
              'rule' => 'Illuminate\\Validation\\Rule',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'featureFlag',
               'type' => 'App\\Models\\FeatureFlag',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'overrideUser',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'featureFlag',
               'type' => 'App\\Models\\FeatureFlag',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'removeOverride',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'featureFlag',
               'type' => 'App\\Models\\FeatureFlag',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\HealthController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\HealthController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'health',
               'type' => 'App\\Services\\HealthCheckService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sentry',
               'type' => 'App\\Services\\SentryService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'triggerTestException',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Trigger a test exception and send it to Sentry.
     * Only super admins may call this to avoid accidental noise.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'backup' => 'App\\Models\\Backup',
              'order' => 'App\\Models\\Order',
              'user' => 'App\\Models\\User',
              'healthcheckservice' => 'App\\Services\\HealthCheckService',
              'sentryservice' => 'App\\Services\\SentryService',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ImpersonateController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\ImpersonateController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Manages admin impersonation of regular users for troubleshooting.
 *
 * Session keys used:
 *  - impersonating_log_id  : ImpersonationLog PK for closing on stop
 *  - impersonated_by       : admin\'s User ID (set by start, cleared by stop)
 *
 * Only super-admins (role=admin && is_super_admin=true) may access these routes.
 */',
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'impersonationlog' => 'App\\Models\\ImpersonationLog',
          'user' => 'App\\Models\\User',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'view' => 'Illuminate\\View\\View',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'audit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Impersonation audit log (super-admin only). */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'impersonationlog' => 'App\\Models\\ImpersonationLog',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'start',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Begin impersonating the given user.
     *
     * Guards:
     *  - Cannot impersonate self
     *  - Cannot impersonate another admin / super-admin
     *  - Cannot start a second impersonation while one is already active
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'impersonationlog' => 'App\\Models\\ImpersonationLog',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'stop',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Revert back to the original admin session.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'impersonationlog' => 'App\\Models\\ImpersonationLog',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\KitchenController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\KitchenController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Halaman utama Kitchen Display System */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'breaktime' => 'App\\Models\\BreakTime',
              'order' => 'App\\Models\\Order',
              'carbon' => 'Carbon\\Carbon',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
              'view' => 'Illuminate\\View\\View',
              'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'stream',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Server-Sent Events stream — kirim data board setiap 2 detik.
     *
     * Format event:
     *   event: board
     *   data: { orders: [...], stats: {...}, server_time: "14:32:01" }
     *
     *   event: ping
     *   data: { t: 1234567890 }   ← heartbeat agar proxy tidak memutus koneksi
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'breaktime' => 'App\\Models\\BreakTime',
              'order' => 'App\\Models\\Order',
              'carbon' => 'Carbon\\Carbon',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
              'view' => 'Illuminate\\View\\View',
              'streamedresponse' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\MenuController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\MenuController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'menu',
               'type' => 'App\\Models\\Menu',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'menu',
               'type' => 'App\\Models\\Menu',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'menu',
               'type' => 'App\\Models\\Menu',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'adjustStock',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Atur stok menu: set manual, tambah, atau kurangi.
     * POST body: action (set|add|subtract), amount (integer >= 0)
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'category' => 'App\\Models\\Category',
              'menu' => 'App\\Models\\Menu',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'menu',
               'type' => 'App\\Models\\Menu',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'trash',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Tampilkan semua menu yang di-soft-delete */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'category' => 'App\\Models\\Category',
              'menu' => 'App\\Models\\Menu',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restore',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Kembalikan menu dari trash */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'category' => 'App\\Models\\Category',
              'menu' => 'App\\Models\\Menu',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'forceDelete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Hapus menu secara permanen */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'category' => 'App\\Models\\Category',
              'menu' => 'App\\Models\\Menu',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\OrderController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\OrderController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Tampilkan antrean pesanan (hanya status preparing, hari ini).
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'breaktime' => 'App\\Models\\BreakTime',
              'order' => 'App\\Models\\Order',
              'orderqr' => 'App\\Models\\OrderQr',
              'pdf' => 'Barryvdh\\DomPDF\\Facade\\Pdf',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
              'symfonyresponse' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'order',
               'type' => 'App\\Models\\Order',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateStatus',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Admin mengubah status pesanan.
     *
     * Aturan bisnis:
     *  - Jika diubah ke \'cancelled\' → saldo user dikembalikan (refund) via DB::transaction.
     *  - Jika diubah ke \'ready\'     → tidak ada perubahan saldo.
     *  - Idempotency: jika status sudah sama, tidak ada aksi.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'breaktime' => 'App\\Models\\BreakTime',
              'order' => 'App\\Models\\Order',
              'orderqr' => 'App\\Models\\OrderQr',
              'pdf' => 'Barryvdh\\DomPDF\\Facade\\Pdf',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
              'symfonyresponse' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'order',
               'type' => 'App\\Models\\Order',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Soft delete pesanan (pindah ke Trash).
     * Hanya pesanan yang sudah selesai (ready/cancelled) yang boleh dihapus.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'breaktime' => 'App\\Models\\BreakTime',
              'order' => 'App\\Models\\Order',
              'orderqr' => 'App\\Models\\OrderQr',
              'pdf' => 'Barryvdh\\DomPDF\\Facade\\Pdf',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
              'symfonyresponse' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'order',
               'type' => 'App\\Models\\Order',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'trash',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Tampilkan semua pesanan di Trash */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'breaktime' => 'App\\Models\\BreakTime',
              'order' => 'App\\Models\\Order',
              'orderqr' => 'App\\Models\\OrderQr',
              'pdf' => 'Barryvdh\\DomPDF\\Facade\\Pdf',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
              'symfonyresponse' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restore',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Pulihkan pesanan dari Trash */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'breaktime' => 'App\\Models\\BreakTime',
              'order' => 'App\\Models\\Order',
              'orderqr' => 'App\\Models\\OrderQr',
              'pdf' => 'Barryvdh\\DomPDF\\Facade\\Pdf',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
              'symfonyresponse' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'invoicePdf',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Unduh invoice PDF untuk satu pesanan. */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'breaktime' => 'App\\Models\\BreakTime',
              'order' => 'App\\Models\\Order',
              'orderqr' => 'App\\Models\\OrderQr',
              'pdf' => 'Barryvdh\\DomPDF\\Facade\\Pdf',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
              'symfonyresponse' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'order',
               'type' => 'App\\Models\\Order',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'forceDelete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Hapus pesanan secara permanen beserta item dan transaksinya */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'breaktime' => 'App\\Models\\BreakTime',
              'order' => 'App\\Models\\Order',
              'orderqr' => 'App\\Models\\OrderQr',
              'pdf' => 'Barryvdh\\DomPDF\\Facade\\Pdf',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
              'symfonyresponse' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\PromotionController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\PromotionController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'promotion',
               'type' => 'App\\Models\\Promotion',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'promotion',
               'type' => 'App\\Models\\Promotion',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'promotion',
               'type' => 'App\\Models\\Promotion',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toggle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'promotion',
               'type' => 'App\\Models\\Promotion',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\QrScanController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\QrScanController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Halaman scanner QR untuk admin */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'order' => 'App\\Models\\Order',
              'orderqr' => 'App\\Models\\OrderQr',
              'pointtransaction' => 'App\\Models\\PointTransaction',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'process',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Proses token QR yang di-scan admin.
     *
     * Flow:
     *  1. Cari OrderQr berdasarkan token (lockForUpdate mencegah double-scan).
     *  2. Validasi: belum dipakai, belum expired, status order harus \'ready\'.
     *  3. Tandai used_at = now() dan ubah status order → \'collected\'.
     *
     * @return JsonResponse  — dikonsumsi oleh JS pada halaman scan.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'order' => 'App\\Models\\Order',
              'orderqr' => 'App\\Models\\OrderQr',
              'pointtransaction' => 'App\\Models\\PointTransaction',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\ReportController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\ReportController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'daily',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\RestockRequestController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\RestockRequestController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'approve',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'restockRequest',
               'type' => 'App\\Models\\RestockRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'reject',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'restockRequest',
               'type' => 'App\\Models\\RestockRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Admin manually creates a restock request for a menu.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'restockrequest' => 'App\\Models\\RestockRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\StockAlertController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\StockAlertController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolve',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'stockAlert',
               'type' => 'App\\Models\\StockAlert',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TopupController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\TopupController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Daftar permintaan top-up yang menunggu persetujuan.
     * Ditandai dengan type=\'topup\' dan balance_after = balance_before (belum diproses).
     * Untuk menyederhanakan, kita menggunakan flag description=\'pending\'.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'approve',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Setujui top-up: tambah saldo user dan catat transaksi final.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'balanceTransaction',
               'type' => 'App\\Models\\BalanceTransaction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'reject',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Tolak permintaan top-up.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'balanceTransaction',
               'type' => 'App\\Models\\BalanceTransaction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\TransactionController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\TransactionController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'export',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bulkRefundIndex',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Tampilkan daftar pesanan yang bisa di-refund secara massal.
     * Eligible: pesanan berstatus pending/preparing (belum ready/cancelled/collected).
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'order' => 'App\\Models\\Order',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bulkRefundProcess',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Proses bulk refund: cancel semua order yang dipilih dan kembalikan saldo.
     *
     * Setiap order diproses dalam sub-transaction indivisible.
     * Jika satu order gagal (misalnya sudah di-cancel), yang lain tetap diproses.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'order' => 'App\\Models\\Order',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\UserController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\UserController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Daftar semua user (kecuali admin) beserta saldo.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'user' => 'App\\Models\\User',
              'suspiciousactivityservice' => 'App\\Services\\SuspiciousActivityService',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'topupDirect',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Admin melakukan top-up langsung ke saldo user (tanpa approval).
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'user' => 'App\\Models\\User',
              'suspiciousactivityservice' => 'App\\Services\\SuspiciousActivityService',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'adjustBalance',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Admin menyesuaikan saldo user (set ulang saldo ke nilai tertentu).
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'user' => 'App\\Models\\User',
              'suspiciousactivityservice' => 'App\\Services\\SuspiciousActivityService',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Soft-delete user (pindah ke Trash).
     * Admin tidak boleh menghapus dirinya sendiri.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'user' => 'App\\Models\\User',
              'suspiciousactivityservice' => 'App\\Services\\SuspiciousActivityService',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'trash',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Tampilkan semua user yang di-soft-delete */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'user' => 'App\\Models\\User',
              'suspiciousactivityservice' => 'App\\Services\\SuspiciousActivityService',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restore',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Pulihkan user dari Trash */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'user' => 'App\\Models\\User',
              'suspiciousactivityservice' => 'App\\Services\\SuspiciousActivityService',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'forceDelete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Hapus user secara permanen.
     * PERHATIAN: order_items & balance_transactions akan tetap ada (order_id nullable
     * melalui nullOnDelete/cascade), tapi orders akan ikut terhapus (cascadeOnDelete).
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'user' => 'App\\Models\\User',
              'suspiciousactivityservice' => 'App\\Services\\SuspiciousActivityService',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unlock',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Unlock a user account that was soft-locked by SuspiciousActivityService.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'user' => 'App\\Models\\User',
              'suspiciousactivityservice' => 'App\\Services\\SuspiciousActivityService',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Admin\\WebhookController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Admin\\WebhookController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'webhook',
               'type' => 'App\\Models\\Webhook',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'webhook',
               'type' => 'App\\Models\\Webhook',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'webhook',
               'type' => 'App\\Models\\Webhook',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testPing',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Kirim test ping ke URL webhook untuk memverifikasi koneksi.
     */',
             'namespace' => 'App\\Http\\Controllers\\Admin',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'webhook' => 'App\\Models\\Webhook',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'webhook',
               'type' => 'App\\Models\\Webhook',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\DocsController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\DocsController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'spec',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Response',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\AuthController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\AuthController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @OA\\Tag(name="Auth", description="Token issuance and revocation")
 */',
         'namespace' => 'App\\Http\\Controllers\\Api\\V1',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'user' => 'App\\Models\\User',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'login',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Issue a Sanctum personal access token.
     *
     * @OA\\Post(
     *   path="/api/v1/auth/login",
     *   tags={"Auth"},
     *   summary="Issue API token",
     *   @OA\\RequestBody(required=true,
     *     @OA\\JsonContent(
     *       required={"email","password"},
     *       @OA\\Property(property="email",    type="string", format="email"),
     *       @OA\\Property(property="password", type="string", format="password"),
     *       @OA\\Property(property="abilities", type="array", @OA\\Items(type="string"),
     *         example={"menus:read","orders:create","orders:read","balance:read"})
     *     )
     *   ),
     *   @OA\\Response(response=200, description="Token issued",
     *     @OA\\JsonContent(
     *       @OA\\Property(property="token",      type="string"),
     *       @OA\\Property(property="token_type", type="string", example="bearer"),
     *       @OA\\Property(property="abilities",  type="array", @OA\\Items(type="string"))
     *     )
     *   ),
     *   @OA\\Response(response=422, description="Invalid credentials")
     * )
     */',
             'namespace' => 'App\\Http\\Controllers\\Api\\V1',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'App\\Models\\User',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logout',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Revoke the current token.
     *
     * @OA\\Post(
     *   path="/api/v1/auth/logout",
     *   tags={"Auth"},
     *   summary="Revoke current token",
     *   security={{"sanctum":{}}},
     *   @OA\\Response(response=200, description="Token revoked")
     * )
     */',
             'namespace' => 'App\\Http\\Controllers\\Api\\V1',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'App\\Models\\User',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\BalanceController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\BalanceController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @OA\\Tag(name="Balance", description="User balance enquiry")
 */',
         'namespace' => 'App\\Http\\Controllers\\Api\\V1',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Return the authenticated user\'s current balance and recent transactions.
     *
     * @OA\\Get(
     *   path="/api/v1/balance",
     *   tags={"Balance"},
     *   summary="Get user balance",
     *   security={{"sanctum":{}}},
     *   @OA\\Response(response=200, description="Balance info",
     *     @OA\\JsonContent(
     *       @OA\\Property(property="data", type="object",
     *         @OA\\Property(property="balance",      type="number", format="float"),
     *         @OA\\Property(property="points_balance", type="integer"),
     *         @OA\\Property(property="transactions", type="array",
     *           @OA\\Items(ref="#/components/schemas/BalanceTransaction")
     *         )
     *       )
     *     )
     *   ),
     *   @OA\\Response(response=403, description="Token missing balance:read ability")
     * )
     */',
             'namespace' => 'App\\Http\\Controllers\\Api\\V1',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\MenuController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\MenuController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @OA\\Tag(name="Menus", description="Menu catalogue")
 */',
         'namespace' => 'App\\Http\\Controllers\\Api\\V1',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'menu' => 'App\\Models\\Menu',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * List available menus, optionally filtered by category.
     *
     * @OA\\Get(
     *   path="/api/v1/menus",
     *   tags={"Menus"},
     *   summary="List available menus",
     *   security={{"sanctum":{}}},
     *   @OA\\Parameter(name="category_id", in="query", required=false, @OA\\Schema(type="integer")),
     *   @OA\\Parameter(name="search",      in="query", required=false, @OA\\Schema(type="string")),
     *   @OA\\Response(response=200, description="Menu list",
     *     @OA\\JsonContent(
     *       @OA\\Property(property="data", type="array",
     *         @OA\\Items(ref="#/components/schemas/Menu")
     *       )
     *     )
     *   )
     * )
     */',
             'namespace' => 'App\\Http\\Controllers\\Api\\V1',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'menu' => 'App\\Models\\Menu',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show a single menu item.
     *
     * @OA\\Get(
     *   path="/api/v1/menus/{id}",
     *   tags={"Menus"},
     *   summary="Show menu detail",
     *   security={{"sanctum":{}}},
     *   @OA\\Parameter(name="id", in="path", required=true, @OA\\Schema(type="integer")),
     *   @OA\\Response(response=200, description="Menu detail",
     *     @OA\\JsonContent(@OA\\Property(property="data", ref="#/components/schemas/Menu"))
     *   ),
     *   @OA\\Response(response=404, description="Menu not found")
     * )
     */',
             'namespace' => 'App\\Http\\Controllers\\Api\\V1',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'menu' => 'App\\Models\\Menu',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'menu',
               'type' => 'App\\Models\\Menu',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\OrderController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\OrderController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @OA\\Tag(name="Orders", description="Order placement and status")
 */',
         'namespace' => 'App\\Http\\Controllers\\Api\\V1',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'balancetransaction' => 'App\\Models\\BalanceTransaction',
          'breaktime' => 'App\\Models\\BreakTime',
          'menu' => 'App\\Models\\Menu',
          'order' => 'App\\Models\\Order',
          'orderitem' => 'App\\Models\\OrderItem',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'db' => 'Illuminate\\Support\\Facades\\DB',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new order.
     *
     * @OA\\Post(
     *   path="/api/v1/orders",
     *   tags={"Orders"},
     *   summary="Create order",
     *   security={{"sanctum":{}}},
     *   @OA\\RequestBody(required=true,
     *     @OA\\JsonContent(
     *       required={"break_time_id","items"},
     *       @OA\\Property(property="break_time_id", type="integer"),
     *       @OA\\Property(property="items", type="array",
     *         @OA\\Items(
     *           @OA\\Property(property="menu_id",  type="integer"),
     *           @OA\\Property(property="quantity", type="integer", minimum=1)
     *         )
     *       ),
     *       @OA\\Property(property="note", type="string", nullable=true)
     *     )
     *   ),
     *   @OA\\Response(response=201, description="Order created",
     *     @OA\\JsonContent(@OA\\Property(property="data", ref="#/components/schemas/Order"))
     *   ),
     *   @OA\\Response(response=422, description="Validation or business-rule error")
     * )
     */',
             'namespace' => 'App\\Http\\Controllers\\Api\\V1',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'breaktime' => 'App\\Models\\BreakTime',
              'menu' => 'App\\Models\\Menu',
              'order' => 'App\\Models\\Order',
              'orderitem' => 'App\\Models\\OrderItem',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get order status.
     *
     * @OA\\Get(
     *   path="/api/v1/orders/{id}",
     *   tags={"Orders"},
     *   summary="Get order status",
     *   security={{"sanctum":{}}},
     *   @OA\\Parameter(name="id", in="path", required=true, @OA\\Schema(type="integer")),
     *   @OA\\Response(response=200, description="Order detail",
     *     @OA\\JsonContent(@OA\\Property(property="data", ref="#/components/schemas/Order"))
     *   ),
     *   @OA\\Response(response=403, description="Not your order"),
     *   @OA\\Response(response=404, description="Order not found")
     * )
     */',
             'namespace' => 'App\\Http\\Controllers\\Api\\V1',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'breaktime' => 'App\\Models\\BreakTime',
              'menu' => 'App\\Models\\Menu',
              'order' => 'App\\Models\\Order',
              'orderitem' => 'App\\Models\\OrderItem',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'order',
               'type' => 'App\\Models\\Order',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Api\\V1\\WebhookController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\V1\\WebhookController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @OA\\Tag(name="Webhooks", description="Inbound order-status webhooks")
 *
 * Webhooks are secured with a shared HMAC-SHA256 secret.
 * Calling system must set the header:
 *   X-Webhook-Signature: sha256=<HMAC-SHA256(raw-body, WEBHOOK_SECRET)>
 */',
         'namespace' => 'App\\Http\\Controllers\\Api\\V1',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'order' => 'App\\Models\\Order',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'log' => 'Illuminate\\Support\\Facades\\Log',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'orderStatus',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Receive an order-status update from an external system (e.g. kitchen display).
     *
     * @OA\\Post(
     *   path="/api/v1/webhooks/order-status",
     *   tags={"Webhooks"},
     *   summary="Update order status via webhook",
     *   @OA\\Parameter(name="X-Webhook-Signature", in="header", required=true,
     *     description="sha256=HMAC-SHA256(raw body, WEBHOOK_SECRET)",
     *     @OA\\Schema(type="string")
     *   ),
     *   @OA\\RequestBody(required=true,
     *     @OA\\JsonContent(
     *       required={"order_id","status"},
     *       @OA\\Property(property="order_id", type="integer"),
     *       @OA\\Property(property="status",   type="string",
     *         enum={"pending","preparing","ready","cancelled","collected"})
     *     )
     *   ),
     *   @OA\\Response(response=200, description="Status updated"),
     *   @OA\\Response(response=401, description="Invalid signature"),
     *   @OA\\Response(response=404, description="Order not found"),
     *   @OA\\Response(response=422, description="Invalid status transition")
     * )
     */',
             'namespace' => 'App\\Http\\Controllers\\Api\\V1',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'order' => 'App\\Models\\Order',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\AuthController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\AuthController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'showRegister',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'showLogin',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'login',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logout',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\MetricsController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\MetricsController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Exposes application metrics in Prometheus text format at GET /metrics.
 *
 * Authentication is handled by the MetricsAuth middleware (bearer token).
 *
 * Prometheus scrape config example:
 *
 *   - job_name: \'usk_canteen\'
 *     scrape_interval: 30s
 *     static_configs:
 *       - targets: [\'your-domain.com\']
 *     metrics_path: /metrics
 *     authorization:
 *       credentials: "your-METRICS_SECRET-value"
 */',
         'namespace' => 'App\\Http\\Controllers',
         'uses' => 
        array (
          'metricsservice' => 'App\\Services\\MetricsService',
          'response' => 'Illuminate\\Http\\Response',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'metrics',
               'type' => 'App\\Services\\MetricsService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Response',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BalanceController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\User\\BalanceController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Halaman saldo: tampilkan saldo saat ini dan riwayat mutasi.
     */',
             'namespace' => 'App\\Http\\Controllers\\User',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'adminalertservice' => 'App\\Services\\AdminAlertService',
              'suspiciousactivityservice' => 'App\\Services\\SuspiciousActivityService',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'requestTopup',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * User mengajukan permintaan top-up.
     * Admin yang akan menyetujuinya (manual / transfer bank).
     */',
             'namespace' => 'App\\Http\\Controllers\\User',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'adminalertservice' => 'App\\Services\\AdminAlertService',
              'suspiciousactivityservice' => 'App\\Services\\SuspiciousActivityService',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\BatchController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\User\\BatchController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'batch',
               'type' => 'App\\Models\\Batch',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'joinByCode',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'join',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'batch',
               'type' => 'App\\Models\\Batch',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'leave',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'batch',
               'type' => 'App\\Models\\Batch',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'saveItems',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'batch',
               'type' => 'App\\Models\\Batch',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lock',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'batch',
               'type' => 'App\\Models\\Batch',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkout',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'batch',
               'type' => 'App\\Models\\Batch',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processCheckout',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'batch',
               'type' => 'App\\Models\\Batch',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cancel',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Cancel a batch.
     * - If open/locked: just cancel (no payments made yet).
     * - If checked_out: cancel all member orders + issue refunds.
     */',
             'namespace' => 'App\\Http\\Controllers\\User',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'batch' => 'App\\Models\\Batch',
              'batchmember' => 'App\\Models\\BatchMember',
              'batchmemberitem' => 'App\\Models\\BatchMemberItem',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'breaktime' => 'App\\Models\\BreakTime',
              'menu' => 'App\\Models\\Menu',
              'order' => 'App\\Models\\Order',
              'orderitem' => 'App\\Models\\OrderItem',
              'user' => 'App\\Models\\User',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'str' => 'Illuminate\\Support\\Str',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'batch',
               'type' => 'App\\Models\\Batch',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\MenuController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\User\\MenuController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\OrderController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\User\\OrderController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Alur keamanan double-spend:
     *  1. Pre-check cepat (stale ok) untuk UX — tampilkan error awal sebelum DB
     *  2. DB::transaction:
     *       a. lockForUpdate pada baris menu   → cegah race pada stok
     *       b. lockForUpdate pada baris user    → cegah double-spend saldo
     *       c. Re-validasi ketersediaan & saldo dengan data terkunci
     *       d. Buat Order + OrderItems + potong saldo + catat BalanceTransaction
     */',
             'namespace' => 'App\\Http\\Controllers\\User',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'storeorderrequest' => 'App\\Http\\Requests\\StoreOrderRequest',
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'breaktime' => 'App\\Models\\BreakTime',
              'menu' => 'App\\Models\\Menu',
              'order' => 'App\\Models\\Order',
              'orderitem' => 'App\\Models\\OrderItem',
              'promoapplication' => 'App\\Models\\PromoApplication',
              'promotion' => 'App\\Models\\Promotion',
              'user' => 'App\\Models\\User',
              'promoengine' => 'App\\Services\\PromoEngine',
              'adminalertservice' => 'App\\Services\\AdminAlertService',
              'suspiciousactivityservice' => 'App\\Services\\SuspiciousActivityService',
              'carbon' => 'Carbon\\Carbon',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse|Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\StoreOrderRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'history',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'order',
               'type' => 'App\\Models\\Order',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'printQr',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'order',
               'type' => 'App\\Models\\Order',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\PointsController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\User\\PointsController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Halaman utama poin — saldo, progress, history singkat */',
             'namespace' => 'App\\Http\\Controllers\\User',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'pointtransaction' => 'App\\Models\\PointTransaction',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'redeem',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Tukar 100 poin → Rp 10.000 saldo */',
             'namespace' => 'App\\Http\\Controllers\\User',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'pointtransaction' => 'App\\Models\\PointTransaction',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Controllers\\User\\RecurringOrderController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\User\\RecurringOrderController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toggle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ro',
               'type' => 'App\\Models\\RecurringOrder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ro',
               'type' => 'App\\Models\\RecurringOrder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\CheckAccountLocked.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\CheckAccountLocked',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Rejects requests from users whose accounts have been soft-locked
 * due to repeated suspicious activity.
 */',
         'namespace' => 'App\\Http\\Middleware',
         'uses' => 
        array (
          'suspiciousactivityservice' => 'App\\Services\\SuspiciousActivityService',
          'closure' => 'Closure',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\CheckFeatureFlag.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\CheckFeatureFlag',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Gate a route behind a feature flag.
 *
 * Usage:  ->middleware(\'feature:flag-key\')
 *
 * Responds with 404 — not 403 — so the feature\'s existence is not disclosed.
 */',
         'namespace' => 'App\\Http\\Middleware',
         'uses' => 
        array (
          'featureflagservice' => 'App\\Services\\FeatureFlagService',
          'closure' => 'Closure',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'flags',
               'type' => 'App\\Services\\FeatureFlagService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'flagKey',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\EnsureAdmin.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\EnsureAdmin',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Hanya izinkan user dengan role \'admin\' untuk mengakses route ini.
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'closure' => 'Closure',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\EnsureSuperAdmin.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\EnsureSuperAdmin',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Restricts access to super-admin–only routes.
 * Super-admins have role=\'admin\' AND is_super_admin=true.
 */',
         'namespace' => 'App\\Http\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Middleware\\MetricsAuth.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\MetricsAuth',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Authenticates the /metrics endpoint via a static bearer token.
 *
 * Configure METRICS_SECRET in your .env file.
 * If METRICS_SECRET is empty, the endpoint is disabled (403).
 *
 * Usage in prometheus.yml:
 *   authorization:
 *     credentials: "your-secret-here"
 */',
         'namespace' => 'App\\Http\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Http\\Requests\\StoreOrderRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\StoreOrderRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'withValidator',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Validasi tambahan setelah rules dasar lolos:
     * 1. Cek jam buka pemesanan (07:00 WIB).
     * 2. Cek apakah waktu pre-order sudah melewati deadline slot yang dipilih.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'breaktime' => 'App\\Models\\BreakTime',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'validator',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\AutoRestockJob.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Jobs\\AutoRestockJob',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Creates a pending RestockRequest for the given menu.
 *
 * The requested_stock is set to menu.default_stock when available,
 * otherwise falls back to 3× the low_stock_threshold.
 *
 * An admin must approve the request before stock is actually updated.
 */',
         'namespace' => 'App\\Jobs',
         'uses' => 
        array (
          'menu' => 'App\\Models\\Menu',
          'restockrequest' => 'App\\Models\\RestockRequest',
          'queueable' => 'Illuminate\\Bus\\Queueable',
          'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
          'dispatchable' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
          'interactswithqueue' => 'Illuminate\\Queue\\InteractsWithQueue',
          'serializesmodels' => 'Illuminate\\Queue\\SerializesModels',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Bus\\Dispatchable',
        1 => 'Illuminate\\Queue\\InteractsWithQueue',
        2 => 'Illuminate\\Bus\\Queueable',
        3 => 'Illuminate\\Queue\\SerializesModels',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'menuId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'stockAlertId',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\BackupCleanupJob.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Jobs\\BackupCleanupJob',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
        1 => 'Illuminate\\Queue\\InteractsWithQueue',
        2 => 'Illuminate\\Queue\\SerializesModels',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tries',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Services\\BackupService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\BackupDatabaseJob.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Jobs\\BackupDatabaseJob',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
        1 => 'Illuminate\\Queue\\InteractsWithQueue',
        2 => 'Illuminate\\Queue\\SerializesModels',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tries',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'timeout',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'retentionDays',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'note',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Services\\BackupService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'failed',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'e',
               'type' => 'Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\DispatchWebhookJob.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Jobs\\DispatchWebhookJob',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Delivers a single webhook call with HMAC-SHA256 signing and automatic retries.
 *
 * Retry schedule (seconds): 30 → 60 → 120 → 300 → 600
 * After 5 failures the job is marked as failed.
 */',
         'namespace' => 'App\\Jobs',
         'uses' => 
        array (
          'webhook' => 'App\\Models\\Webhook',
          'queueable' => 'Illuminate\\Bus\\Queueable',
          'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
          'dispatchable' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
          'interactswithqueue' => 'Illuminate\\Queue\\InteractsWithQueue',
          'serializesmodels' => 'Illuminate\\Queue\\SerializesModels',
          'http' => 'Illuminate\\Support\\Facades\\Http',
          'log' => 'Illuminate\\Support\\Facades\\Log',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Bus\\Dispatchable',
        1 => 'Illuminate\\Queue\\InteractsWithQueue',
        2 => 'Illuminate\\Bus\\Queueable',
        3 => 'Illuminate\\Queue\\SerializesModels',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tries',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'timeout',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'webhook',
               'type' => 'App\\Models\\Webhook',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventPayload',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'backoff',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Back-off in seconds between retries */',
             'namespace' => 'App\\Jobs',
             'uses' => 
            array (
              'webhook' => 'App\\Models\\Webhook',
              'queueable' => 'Illuminate\\Bus\\Queueable',
              'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
              'dispatchable' => 'Illuminate\\Foundation\\Bus\\Dispatchable',
              'interactswithqueue' => 'Illuminate\\Queue\\InteractsWithQueue',
              'serializesmodels' => 'Illuminate\\Queue\\SerializesModels',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'failed',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'e',
               'type' => 'Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Jobs\\ProcessBulkExport.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Jobs\\ProcessBulkExport',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Bus\\Dispatchable',
        1 => 'Illuminate\\Queue\\InteractsWithQueue',
        2 => 'Illuminate\\Bus\\Queueable',
        3 => 'Illuminate\\Queue\\SerializesModels',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'exportJob',
               'type' => 'App\\Models\\ExportJob',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Listeners\\WebhookEventListener.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Listeners\\WebhookEventListener',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Listens to domain events and fans out to all active, subscribed webhook endpoints.
 *
 * Each matching webhook gets its own DispatchWebhookJob, which handles
 * signing, HTTP delivery, and retry/back-off independently.
 */',
         'namespace' => 'App\\Listeners',
         'uses' => 
        array (
          'ordercreated' => 'App\\Events\\OrderCreated',
          'orderready' => 'App\\Events\\OrderReady',
          'topupapproved' => 'App\\Events\\TopupApproved',
          'dispatchwebhookjob' => 'App\\Jobs\\DispatchWebhookJob',
          'webhook' => 'App\\Models\\Webhook',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handleOrderCreated',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'App\\Events\\OrderCreated',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handleOrderReady',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'App\\Events\\OrderReady',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handleTopupApproved',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'App\\Events\\TopupApproved',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Anomaly.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Anomaly',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE_ORDER_SPIKE',
               'value' => '\'order_spike\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE_REFUND_SPIKE',
               'value' => '\'refund_spike\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE_TOPUP_SPIKE',
               'value' => '\'topup_spike\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeUnresolved',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeRecent',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'days',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Backup.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Backup',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHumanSizeAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Human-readable file size, e.g. "1.4 MB" */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'carbon' => 'Carbon\\Carbon',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getExpiresAtAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Date this backup expires (created_at + retention_days) */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'carbon' => 'Carbon\\Carbon',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Carbon\\Carbon',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isExpired',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restoreRequests',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BackupRestoreRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\BackupRestoreRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'backup',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'requester',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BalanceTransaction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\BalanceTransaction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE_TOPUP',
               'value' => '\'topup\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE_DEBIT',
               'value' => '\'debit\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE_REFUND',
               'value' => '\'refund\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** User pemilik transaksi ini */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'order',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Pesanan terkait (nullable untuk top-up) */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Batch.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Batch',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_OPEN',
               'value' => '\'open\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_LOCKED',
               'value' => '\'locked\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_CHECKED_OUT',
               'value' => '\'checked_out\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_CANCELLED',
               'value' => '\'cancelled\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_LABELS',
               'value' => '[self::STATUS_OPEN => \'Terbuka\', self::STATUS_LOCKED => \'Terkunci\', self::STATUS_CHECKED_OUT => \'Lunas\', self::STATUS_CANCELLED => \'Dibatalkan\']',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_COLORS',
               'value' => '[self::STATUS_OPEN => \'success\', self::STATUS_LOCKED => \'warning\', self::STATUS_CHECKED_OUT => \'info\', self::STATUS_CANCELLED => \'secondary\']',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStatusLabelAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStatusColorAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isOpen',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isLocked',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isCheckedOut',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isCancelled',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'totalPrice',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Total nilai seluruh batch (sum subtotal anggota aktif) */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'memberFor',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Kembalikan BatchMember untuk user tertentu, atau null */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Models\\BatchMember',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createdBy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'payer',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'breakTime',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'members',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BatchMember.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\BatchMember',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isPending',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isPaid',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isWaived',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'batch',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'items',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'order',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BatchMemberItem.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\BatchMemberItem',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'batchMember',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'menu',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\BreakTime.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\BreakTime',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Cast kolom waktu ke Carbon agar konsisten bisa dipanggil ->format(\'H:i\').
     * Carbon::parse() pada string waktu \'07:00:00\' menghasilkan Carbon yang valid.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'carbon' => 'Carbon\\Carbon',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'canOrder',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Cek apakah slot ini masih bisa dipesan saat ini.
     *
     * Syarat:
     *  1. Waktu sekarang >= 07:00 (jam buka pemesanan)
     *  2. Waktu sekarang <= order_deadline slot ini
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'carbon' => 'Carbon\\Carbon',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deadlineToday',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Kembalikan Carbon deadline hari ini untuk slot ini.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'carbon' => 'Carbon\\Carbon',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Carbon\\Carbon',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'orders',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Pesanan yang dijadwalkan pada waktu istirahat ini */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'carbon' => 'Carbon\\Carbon',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Category.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Category',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'menus',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Menu-menu yang termasuk kategori ini */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\ExportJob.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\ExportJob',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE_TRANSACTIONS',
               'value' => '\'transactions\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE_ORDERS',
               'value' => '\'orders\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE_USERS',
               'value' => '\'users\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_PENDING',
               'value' => '\'pending\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_PROCESSING',
               'value' => '\'processing\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_DONE',
               'value' => '\'done\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_FAILED',
               'value' => '\'failed\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopePending',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'q',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeDone',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'q',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeFailed',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'q',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'markProcessing',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'markDone',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'rows',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'markFailed',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\FeatureFlag.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\FeatureFlag',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'overrides',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\ImpersonationLog.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\ImpersonationLog',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Immutable audit record of every impersonation session.
 *
 * Records are never updated or deleted — only ended_at is stamped
 * when the admin reverts back to their own session.
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'impersonator',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'target',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isActive',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Menu.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Menu',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getIsAvailableAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Accessor: $menu->is_available
     * Digunakan di view/query warisan — true jika stock > 0.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStatusAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Accessor: $menu->status  → "Tersedia" | "Habis"
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isAvailable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Kembalikan true jika menu masih memiliki stok tersisa.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isLowStock',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * True if stock is at or below the configured low-stock threshold.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'category',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Kategori dari menu ini */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'orderItems',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Item pesanan yang memuat menu ini */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'stockAlerts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Semua alert stok rendah untuk menu ini */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restockRequests',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Semua permintaan restock untuk menu ini */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Order.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Order',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_PENDING',
               'value' => '\'pending\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_PREPARING',
               'value' => '\'preparing\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_READY',
               'value' => '\'ready\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_CANCELLED',
               'value' => '\'cancelled\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_COLLECTED',
               'value' => '\'collected\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_LABELS',
               'value' => '[self::STATUS_PENDING => \'Menunggu\', self::STATUS_PREPARING => \'Sedang Disiapkan\', self::STATUS_READY => \'Siap Diambil\', self::STATUS_CANCELLED => \'Dibatalkan\', self::STATUS_COLLECTED => \'Sudah Diambil\']',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Label status berbahasa Indonesia */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
              'str' => 'Illuminate\\Support\\Str',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_COLORS',
               'value' => '[self::STATUS_PENDING => \'secondary\', self::STATUS_PREPARING => \'primary\', self::STATUS_READY => \'success\', self::STATUS_CANCELLED => \'danger\', self::STATUS_COLLECTED => \'info\']',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Warna Bootstrap badge per status */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
              'str' => 'Illuminate\\Support\\Str',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStatusLabelAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Label status dalam Bahasa Indonesia */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
              'str' => 'Illuminate\\Support\\Str',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStatusColorAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Warna Bootstrap badge */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
              'str' => 'Illuminate\\Support\\Str',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isPreparing',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isReady',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isCancelled',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isCollected',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** User yang membuat pesanan ini.
     *  Menggunakan withTrashed() agar relasi tidak null
     *  ketika user di-soft-delete sementara order masih ada.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
              'str' => 'Illuminate\\Support\\Str',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'breakTime',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Slot waktu istirahat pengambilan */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
              'str' => 'Illuminate\\Support\\Str',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'items',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Detail item-item dalam pesanan ini */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
              'str' => 'Illuminate\\Support\\Str',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'balanceTransaction',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Transaksi saldo yang dipicu pesanan ini */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
              'str' => 'Illuminate\\Support\\Str',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'orderQr',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** QR code pengambilan pesanan */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
              'str' => 'Illuminate\\Support\\Str',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'generateQr',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Buat atau perbarui token QR; berlaku 90 menit sejak dibuat.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'hasone' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
              'str' => 'Illuminate\\Support\\Str',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\OrderQr',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\OrderItem.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\OrderItem',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'order',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Pesanan induk dari item ini */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'menu',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Menu yang dipesan.
     * Gunakan withTrashed() karena menu bisa di-soft-delete
     * namun order item tetap harus mereferensikannya.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\OrderQr.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\OrderQr',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'order',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isExpired',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isUsed',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isValid',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\PointTransaction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\PointTransaction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE_EARN',
               'value' => '\'earn\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE_REDEEM',
               'value' => '\'redeem\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE_ADMIN_ADJUST',
               'value' => '\'admin_adjust\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\PromoApplication.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\PromoApplication',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'order',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'promotion',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Promotion.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Promotion',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE_BUNDLE',
               'value' => '\'bundle\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TYPE_TIME',
               'value' => '\'time\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'DISCOUNT_PERCENTAGE',
               'value' => '\'percentage\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'DISCOUNT_FIXED',
               'value' => '\'fixed\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeActive',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'q',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeInRange',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Only promotions whose validity window includes $now.
     * null start_at => open-ended from the beginning.
     * null end_at   => open-ended going forward.
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'carbon' => 'Carbon\\Carbon',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'q',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'now',
               'type' => 'Carbon\\Carbon',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTypeLabel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDiscountLabel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStatusLabel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\RecurringOrder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\RecurringOrder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'DAY_NAMES',
               'value' => '[0 => \'Minggu\', 1 => \'Senin\', 2 => \'Selasa\', 3 => \'Rabu\', 4 => \'Kamis\', 5 => \'Jumat\', 6 => \'Sabtu\']',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDayNameAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Label hari dari integer day_of_week */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeActive',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeForToday',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Recurring orders yang dijadwalkan hari ini (berdasarkan day_of_week) */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'menu',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'breakTime',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\RestockRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\RestockRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_PENDING',
               'value' => '\'pending\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_APPROVED',
               'value' => '\'approved\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STATUS_REJECTED',
               'value' => '\'rejected\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isPending',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'menu',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'stockAlert',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'requester',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'approver',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\StockAlert.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\StockAlert',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isResolved',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'menu',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restockRequests',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
        2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        3 => 'Laravel\\Sanctum\\HasApiTokens',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isAdmin',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isSuperAdmin',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'orders',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Semua pesanan milik user ini */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'balanceTransactions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Semua mutasi saldo milik user ini */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'pointTransactions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Semua mutasi poin milik user ini */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'featureFlagOverrides',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Semua override feature flag untuk user ini */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'softdeletes' => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\UserFeatureFlagOverride.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\UserFeatureFlagOverride',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'featureFlag',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Models\\Webhook.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Webhook',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'EVENT_ORDER_CREATED',
               'value' => '\'order_created\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'EVENT_ORDER_READY',
               'value' => '\'order_ready\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'EVENT_TOPUP_APPROVED',
               'value' => '\'topup_approved\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'ALL_EVENTS',
               'value' => '[self::EVENT_ORDER_CREATED => \'Pesanan Dibuat\', self::EVENT_ORDER_READY => \'Pesanan Siap Diambil\', self::EVENT_TOPUP_APPROVED => \'Top-Up Disetujui\']',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeActive',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeSubscribedTo',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Return only webhooks subscribed to the given event name */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Notifications\\LowStockNotification.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Notifications\\LowStockNotification',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Notifications\\Notification',
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Bus\\Queueable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'menu',
               'type' => 'App\\Models\\Menu',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'alert',
               'type' => 'App\\Models\\StockAlert',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'via',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notifiable',
               'type' => 'object',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toMail',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Notifications\\Messages\\MailMessage',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notifiable',
               'type' => 'object',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toDatabase',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notifiable',
               'type' => 'object',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Providers\\AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'featureflagservice' => 'App\\Services\\FeatureFlagService',
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'request' => 'Illuminate\\Http\\Request',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'blade' => 'Illuminate\\Support\\Facades\\Blade',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'featureflagservice' => 'App\\Services\\FeatureFlagService',
              'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
              'request' => 'Illuminate\\Http\\Request',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'blade' => 'Illuminate\\Support\\Facades\\Blade',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configureRateLimiting',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\AdminAlertService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\AdminAlertService',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Detects unusual activity spikes and writes structured alert logs.
 * Runs lightweight counts against the DB; results are cached for 1 minute
 * to avoid hammering the DB on every request.
 */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'balancetransaction' => 'App\\Models\\BalanceTransaction',
          'order' => 'App\\Models\\Order',
          'cache' => 'Illuminate\\Support\\Facades\\Cache',
          'log' => 'Illuminate\\Support\\Facades\\Log',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'ORDER_SPIKE_THRESHOLD',
               'value' => '50',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Orders placed in the last window that triggers an alert.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'order' => 'App\\Models\\Order',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TOPUP_PENDING_THRESHOLD',
               'value' => '20',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Top-up requests pending approval that triggers an alert.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'order' => 'App\\Models\\Order',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'SPIKE_WINDOW_MINUTES',
               'value' => '5',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * How many minutes constitute the "recent" window for order spikes.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'order' => 'App\\Models\\Order',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'CACHE_TTL_SECONDS',
               'value' => '60',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Cache TTL (seconds) for alert checks — avoids repeated DB hits.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'order' => 'App\\Models\\Order',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkOrderSpike',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if order volume in the last SPIKE_WINDOW_MINUTES minutes is unusually high.
     * Returns true if an alert was raised.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'order' => 'App\\Models\\Order',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkTopupSpike',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if pending top-up queue is unusually long.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'order' => 'App\\Models\\Order',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'runAll',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run all spike checks. Called after order creation and top-up events.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'balancetransaction' => 'App\\Models\\BalanceTransaction',
              'order' => 'App\\Models\\Order',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'alert',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'context',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\BackupService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\BackupService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'RETENTION_OPTIONS',
               'value' => '[14, 30, 90]',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Allowed retention values (days) */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'backup' => 'App\\Models\\Backup',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'process' => 'Symfony\\Component\\Process\\Process',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Dump the current database, encrypt it, persist to storage, and record
     * metadata in the `backups` table.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'backup' => 'App\\Models\\Backup',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'process' => 'Symfony\\Component\\Process\\Process',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Backup',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'retentionDays',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'note',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createFromContent',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a backup record from already-available SQL content.
     * Useful in tests and for import workflows.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'backup' => 'App\\Models\\Backup',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'process' => 'Symfony\\Component\\Process\\Process',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Backup',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'content',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'retentionDays',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'note',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'verify',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Verify that an existing backup file matches its stored checksum.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'backup' => 'App\\Models\\Backup',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'process' => 'Symfony\\Component\\Process\\Process',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'backup',
               'type' => 'App\\Models\\Backup',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cleanup',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Delete all backups whose retention window has expired.
     *
     * @return int Number of backups removed.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'backup' => 'App\\Models\\Backup',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'process' => 'Symfony\\Component\\Process\\Process',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restore',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Decrypt a backup and restore the database.
     * Only call this after verify() returns true.
     *
     * @throws \\RuntimeException
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'backup' => 'App\\Models\\Backup',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'process' => 'Symfony\\Component\\Process\\Process',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'backup',
               'type' => 'App\\Models\\Backup',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'encrypt',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Encrypt plaintext with AES-256-CBC, prepend the IV, and base64-encode
     * the result.  The encryption key is derived from APP_KEY.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'backup' => 'App\\Models\\Backup',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'process' => 'Symfony\\Component\\Process\\Process',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'decrypt',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Decode and decrypt a value previously encrypted with encrypt().
     *
     * @throws \\RuntimeException on decryption failure.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'backup' => 'App\\Models\\Backup',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'process' => 'Symfony\\Component\\Process\\Process',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ciphertext',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dump',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Dump the active database to a SQL / binary string.
     *
     * - SQLite : binary file copy
     * - MySQL  : mysqldump output
     *
     * @throws \\RuntimeException if driver unsupported or dump fails.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'backup' => 'App\\Models\\Backup',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'storage' => 'Illuminate\\Support\\Facades\\Storage',
              'process' => 'Symfony\\Component\\Process\\Process',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\FeatureFlagService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\FeatureFlagService',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Determines whether a feature flag is active for a given user/request.
 *
 * Evaluation order:
 *  1. Flag must exist and is_enabled = true  (global kill-switch)
 *  2. User-specific override (is_enabled = true/false)
 *  3. Rollout bucket  — deterministic hash(flagKey + userId/cookieUUID) % 100
 *
 * Variant assignment (A/B):
 *  Uses a separate hash seed so variant split is independent of rollout bucket.
 *  Bucket 0-49 → variant A,  50-99 → variant B.
 *  User overrides can pin a specific variant.
 *
 * The cookie `_ab_uid` (UUID v4) tracks anonymous/guest users across requests.
 * It is written to the response by the AssignAbCookie middleware.
 */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'featureflag' => 'App\\Models\\FeatureFlag',
          'user' => 'App\\Models\\User',
          'request' => 'Illuminate\\Http\\Request',
          'cache' => 'Illuminate\\Support\\Facades\\Cache',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'AB_COOKIE',
               'value' => '\'_ab_uid\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Cookie name used for anonymous visitor tracking. */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'featureflag' => 'App\\Models\\FeatureFlag',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isEnabled',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check whether this flag is enabled for the given user/request.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'featureflag' => 'App\\Models\\FeatureFlag',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => '?App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => '?Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getVariant',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Return the assigned A/B variant (\'A\' or \'B\') for this flag, or null if
     * the flag has no variants or is not enabled for this user.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'featureflag' => 'App\\Models\\FeatureFlag',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => '?App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => '?Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bucket',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Returns a stable 0–99 bucket for the given flag+identity combination.
     * Uses crc32 for speed; the goal is uniform distribution, not cryptographic strength.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'featureflag' => 'App\\Models\\FeatureFlag',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'seed',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'identity',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resolveIdentity',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Resolve a stable string identity for bucket assignment.
     * Authenticated users → user ID string.
     * Guests → cookie UUID.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'featureflag' => 'App\\Models\\FeatureFlag',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => '?App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => '?Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'flushCache',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Flush cached flag entry (call after admin updates a flag).
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'featureflag' => 'App\\Models\\FeatureFlag',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\HealthCheckService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\HealthCheckService',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Runs a set of lightweight health checks and returns structured results.
 *
 * Each check returns an array with at minimum a \'status\' key:
 *   \'ok\'             — healthy
 *   \'degraded\'       — working but with warnings
 *   \'error\'          — failed
 *   \'unknown\'        — no data yet (e.g. cron has never run)
 */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'cache' => 'Illuminate\\Support\\Facades\\Cache',
          'db' => 'Illuminate\\Support\\Facades\\DB',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TRACKED_CRON_JOBS',
               'value' => '[\'menu:reset-stock\' => [\'label\' => \'Reset Stok\', \'max_lag_hours\' => 25], \'reports:reconcile\' => [\'label\' => \'Rekonsiliasi\', \'max_lag_hours\' => 25], \'anomalies:detect\' => [\'label\' => \'Deteksi Anomali\', \'max_lag_hours\' => 2], \'stock:check-alerts\' => [\'label\' => \'Alert Stok\', \'max_lag_hours\' => 1], \'orders:recurring\' => [\'label\' => \'Recurring Order\', \'max_lag_hours\' => 25], \'backup:run\' => [\'label\' => \'Backup Harian\', \'max_lag_hours\' => 25], \'backup:cleanup\' => [\'label\' => \'Cleanup Backup\', \'max_lag_hours\' => 25]]',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Ordered list of scheduled jobs to track, with their expected run intervals.
     *
     * \'max_lag_hours\' is how long we wait before marking the job as \'late\'.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'CRON_CACHE_PREFIX',
               'value' => '\'health:cron:\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Cache key template for cron health pings */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'all',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Run all checks and return a keyed array. */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkDatabase',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkCache',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkStorage',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkQueue',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkCron',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkSentry',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'pingCron',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Record that a cron job ran successfully right now. */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'jobKey',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\MetricsService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\MetricsService',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Collects application metrics and renders them in Prometheus text format.
 *
 * This is a skeleton exporter — add more metric families as needed.
 * Prometheus text format spec: https://prometheus.io/docs/instrumenting/exposition_formats/
 */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'backup' => 'App\\Models\\Backup',
          'order' => 'App\\Models\\Order',
          'user' => 'App\\Models\\User',
          'healthcheckservice' => 'App\\Services\\HealthCheckService',
          'cache' => 'Illuminate\\Support\\Facades\\Cache',
          'db' => 'Illuminate\\Support\\Facades\\DB',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Render all metric families as a Prometheus-compatible text string.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'backup' => 'App\\Models\\Backup',
              'order' => 'App\\Models\\Order',
              'user' => 'App\\Models\\User',
              'healthcheckservice' => 'App\\Services\\HealthCheckService',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'db' => 'Illuminate\\Support\\Facades\\DB',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\PromoEngine.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\PromoEngine',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Promotion evaluation engine.
 *
 * Cart items are plain arrays (or array-accessible objects) with keys:
 *   menu_id  (int)
 *   price    (float)   — unit price in Rupiah
 *   quantity (int)
 *
 * Stacking rules
 * ──────────────
 *   • Stackable promos combine freely with each other.
 *   • Non-stackable promos: only the one that yields the highest discount
 *     applies (priority acts as a tiebreak when discounts are equal).
 *   • The final discount = all stackable discounts
 *                        + best non-stackable discount (if any).
 *   • Total discount is capped at the raw cart total (cannot go negative).
 */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'promotion' => 'App\\Models\\Promotion',
          'carbon' => 'Carbon\\Carbon',
          'collection' => 'Illuminate\\Support\\Collection',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'evaluate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Evaluate all active, in-range promotions for a cart.
     *
     * @param  Collection  $cartItems  Items with keys: menu_id, price, quantity
     * @param  Carbon|null $now        Defaults to now() (Asia/Jakarta)
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'promotion' => 'App\\Models\\Promotion',
              'carbon' => 'Carbon\\Carbon',
              'collection' => 'Illuminate\\Support\\Collection',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Services\\PromoResult',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'cartItems',
               'type' => 'Illuminate\\Support\\Collection',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'now',
               'type' => '?Carbon\\Carbon',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'calculateSingleDiscount',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Public single-promo discount calculator — used for per-promo audit trail.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'promotion' => 'App\\Models\\Promotion',
              'carbon' => 'Carbon\\Carbon',
              'collection' => 'Illuminate\\Support\\Collection',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'promo',
               'type' => 'App\\Models\\Promotion',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'rawTotal',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'cartItems',
               'type' => 'Illuminate\\Support\\Collection',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\PromoResult.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\PromoResult',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Immutable value-object returned by PromoEngine::evaluate().
 */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'promotion' => 'App\\Models\\Promotion',
          'collection' => 'Illuminate\\Support\\Collection',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'discountAmount',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'appliedPromos',
               'type' => 'Illuminate\\Support\\Collection',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'rawTotal',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'finalTotal',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hasDiscount',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'appliedIds',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Array of applied promotion IDs, suitable for JSON storage. */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'promotion' => 'App\\Models\\Promotion',
              'collection' => 'Illuminate\\Support\\Collection',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'summary',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Human-readable summary, e.g. "Diskon Rp 5.000 dari: Bundle Hemat". */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'promotion' => 'App\\Models\\Promotion',
              'collection' => 'Illuminate\\Support\\Collection',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\SentryService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\SentryService',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Thin wrapper around the Sentry SDK.
 *
 * Injecting this class (rather than calling \\Sentry\\* directly) means it can
 * be swapped for a mock in PHPUnit tests without touching global state.
 */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'user' => 'App\\Models\\User',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isEnabled',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'capture',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Capture a throwable and send it to Sentry.
     *
     * @return string|null Sentry event ID, or null when Sentry is disabled.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'exception',
               'type' => 'Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'captureMessage',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Capture a plain message at the given severity level.
     *
     * @return string|null Sentry event ID, or null when Sentry is disabled.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'severity',
               'type' => '?Sentry\\Severity',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setUserContext',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Attach the authenticated user to subsequent Sentry events. */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addContext',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** Add arbitrary key/value extra context to the current scope. */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\StockAlertService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\StockAlertService',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Checks every menu that has a low_stock_threshold configured.
 * If stock <= threshold and no unresolved alert already exists, it:
 *  1. Creates a StockAlert record
 *  2. Notifies all admin users (mail + database)
 *  3. Sends an optional Telegram message (if TELEGRAM_* env vars are set)
 *  4. Dispatches AutoRestockJob if auto_restock_enabled = true
 */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'autorestockjob' => 'App\\Jobs\\AutoRestockJob',
          'menu' => 'App\\Models\\Menu',
          'stockalert' => 'App\\Models\\StockAlert',
          'user' => 'App\\Models\\User',
          'lowstocknotification' => 'App\\Notifications\\LowStockNotification',
          'http' => 'Illuminate\\Support\\Facades\\Http',
          'log' => 'Illuminate\\Support\\Facades\\Log',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkAll',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Scan all menus and fire alerts for those in low-stock condition.
     *
     * @return int Number of new alerts created
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'autorestockjob' => 'App\\Jobs\\AutoRestockJob',
              'menu' => 'App\\Models\\Menu',
              'stockalert' => 'App\\Models\\StockAlert',
              'user' => 'App\\Models\\User',
              'lowstocknotification' => 'App\\Notifications\\LowStockNotification',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dryRun',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'notifyAdmins',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Send database + mail notification to all admin users.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'autorestockjob' => 'App\\Jobs\\AutoRestockJob',
              'menu' => 'App\\Models\\Menu',
              'stockalert' => 'App\\Models\\StockAlert',
              'user' => 'App\\Models\\User',
              'lowstocknotification' => 'App\\Notifications\\LowStockNotification',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'menu',
               'type' => 'App\\Models\\Menu',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'alert',
               'type' => 'App\\Models\\StockAlert',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sendTelegramAlert',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Send a Telegram message if TELEGRAM_BOT_TOKEN and TELEGRAM_ADMIN_CHAT_ID are set.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'autorestockjob' => 'App\\Jobs\\AutoRestockJob',
              'menu' => 'App\\Models\\Menu',
              'stockalert' => 'App\\Models\\StockAlert',
              'user' => 'App\\Models\\User',
              'lowstocknotification' => 'App\\Notifications\\LowStockNotification',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'menu',
               'type' => 'App\\Models\\Menu',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'alert',
               'type' => 'App\\Models\\StockAlert',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\usk_no_ai\\app\\Services\\SuspiciousActivityService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\SuspiciousActivityService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'LOCK_THRESHOLD',
               'value' => '3',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Number of suspicious events within the window before the account is locked.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'LOCK_MINUTES',
               'value' => '30',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Lock duration in minutes.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'WINDOW_MINUTES',
               'value' => '10',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Sliding window for counting suspicious events (minutes).
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'record',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Record a suspicious event for a user and lock if threshold exceeded.
     *
     * @param  int|User  $user
     * @param  string    $event   e.g. \'brute_login\', \'order_spam\', \'topup_flood\'
     * @param  string    $ip
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'int|App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ip',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lockUser',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Lock a user account for LOCK_MINUTES.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'reason',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ip',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unlockUser',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Manually unlock a user (e.g. called by admin).
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isLocked',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Returns true if the user\'s account is currently locked.
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'int|App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lockTtlSeconds',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Seconds remaining on the account lock (0 if not locked).
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'log' => 'Illuminate\\Support\\Facades\\Log',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lockKey',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'counterKey',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
