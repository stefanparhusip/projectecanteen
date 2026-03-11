<?php declare(strict_types = 1);

// odsl-C:\laragon\www\usk_no_ai\app\Services\StockAlertService.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Services\StockAlertService
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.26-40dbcb4f9765ce4438a777d408887a6835c849ed2fabd74199e8c306c47a05c4',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Services\\StockAlertService',
        'filename' => 'C:/laragon/www/usk_no_ai/app/Services/StockAlertService.php',
      ),
    ),
    'namespace' => 'App\\Services',
    'name' => 'App\\Services\\StockAlertService',
    'shortName' => 'StockAlertService',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Checks every menu that has a low_stock_threshold configured.
 * If stock <= threshold and no unresolved alert already exists, it:
 *  1. Creates a StockAlert record
 *  2. Notifies all admin users (mail + database)
 *  3. Sends an optional Telegram message (if TELEGRAM_* env vars are set)
 *  4. Dispatches AutoRestockJob if auto_restock_enabled = true
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 116,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'checkAll' => 
      array (
        'name' => 'checkAll',
        'parameters' => 
        array (
          'dryRun' => 
          array (
            'name' => 'dryRun',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 28,
                'endLine' => 28,
                'startTokenPos' => 64,
                'startFilePos' => 853,
                'endTokenPos' => 64,
                'endFilePos' => 857,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 30,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Scan all menus and fire alerts for those in low-stock condition.
 *
 * @return int Number of new alerts created
 */',
        'startLine' => 28,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services',
        'declaringClassName' => 'App\\Services\\StockAlertService',
        'implementingClassName' => 'App\\Services\\StockAlertService',
        'currentClassName' => 'App\\Services\\StockAlertService',
        'aliasName' => NULL,
      ),
      'notifyAdmins' => 
      array (
        'name' => 'notifyAdmins',
        'parameters' => 
        array (
          'menu' => 
          array (
            'name' => 'menu',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Models\\Menu',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 77,
            'endLine' => 77,
            'startColumn' => 34,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'alert' => 
          array (
            'name' => 'alert',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Models\\StockAlert',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 77,
            'endLine' => 77,
            'startColumn' => 46,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Send database + mail notification to all admin users.
 */',
        'startLine' => 77,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services',
        'declaringClassName' => 'App\\Services\\StockAlertService',
        'implementingClassName' => 'App\\Services\\StockAlertService',
        'currentClassName' => 'App\\Services\\StockAlertService',
        'aliasName' => NULL,
      ),
      'sendTelegramAlert' => 
      array (
        'name' => 'sendTelegramAlert',
        'parameters' => 
        array (
          'menu' => 
          array (
            'name' => 'menu',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Models\\Menu',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 39,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'alert' => 
          array (
            'name' => 'alert',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Models\\StockAlert',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 51,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Send a Telegram message if TELEGRAM_BOT_TOKEN and TELEGRAM_ADMIN_CHAT_ID are set.
 */',
        'startLine' => 89,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services',
        'declaringClassName' => 'App\\Services\\StockAlertService',
        'implementingClassName' => 'App\\Services\\StockAlertService',
        'currentClassName' => 'App\\Services\\StockAlertService',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));