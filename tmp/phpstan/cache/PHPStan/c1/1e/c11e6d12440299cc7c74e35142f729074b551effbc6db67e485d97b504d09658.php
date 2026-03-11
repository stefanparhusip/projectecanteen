<?php declare(strict_types = 1);

// odsl-C:\laragon\www\usk_no_ai\app\Models\Order.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\Order
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.26-27b31abb2a1bb5bfc9aad4013e94498c361e599d22d810db179c9020c904345a',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\Order',
        'filename' => 'C:/laragon/www/usk_no_ai/app/Models/Order.php',
      ),
    ),
    'namespace' => 'App\\Models',
    'name' => 'App\\Models\\Order',
    'shortName' => 'Order',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 131,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
    ),
    'immediateConstants' => 
    array (
      'STATUS_PENDING' => 
      array (
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'name' => 'STATUS_PENDING',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'pending\'',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 39,
            'startTokenPos' => 148,
            'startFilePos' => 1102,
            'endTokenPos' => 148,
            'endFilePos' => 1110,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'STATUS_PREPARING' => 
      array (
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'name' => 'STATUS_PREPARING',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'preparing\'',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 40,
            'startTokenPos' => 157,
            'startFilePos' => 1143,
            'endTokenPos' => 157,
            'endFilePos' => 1153,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 41,
      ),
      'STATUS_READY' => 
      array (
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'name' => 'STATUS_READY',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'ready\'',
          'attributes' => 
          array (
            'startLine' => 41,
            'endLine' => 41,
            'startTokenPos' => 166,
            'startFilePos' => 1186,
            'endTokenPos' => 166,
            'endFilePos' => 1192,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 37,
      ),
      'STATUS_CANCELLED' => 
      array (
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'name' => 'STATUS_CANCELLED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'cancelled\'',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 175,
            'startFilePos' => 1225,
            'endTokenPos' => 175,
            'endFilePos' => 1235,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 41,
      ),
      'STATUS_COLLECTED' => 
      array (
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'name' => 'STATUS_COLLECTED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'collected\'',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 184,
            'startFilePos' => 1268,
            'endTokenPos' => 184,
            'endFilePos' => 1278,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 41,
      ),
      'STATUS_LABELS' => 
      array (
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'name' => 'STATUS_LABELS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[self::STATUS_PENDING => \'Menunggu\', self::STATUS_PREPARING => \'Sedang Disiapkan\', self::STATUS_READY => \'Siap Diambil\', self::STATUS_CANCELLED => \'Dibatalkan\', self::STATUS_COLLECTED => \'Sudah Diambil\']',
          'attributes' => 
          array (
            'startLine' => 46,
            'endLine' => 52,
            'startTokenPos' => 195,
            'startFilePos' => 1355,
            'endTokenPos' => 242,
            'endFilePos' => 1616,
          ),
        ),
        'docComment' => '/** Label status berbahasa Indonesia */',
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 6,
      ),
      'STATUS_COLORS' => 
      array (
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'name' => 'STATUS_COLORS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[self::STATUS_PENDING => \'secondary\', self::STATUS_PREPARING => \'primary\', self::STATUS_READY => \'success\', self::STATUS_CANCELLED => \'danger\', self::STATUS_COLLECTED => \'info\']',
          'attributes' => 
          array (
            'startLine' => 55,
            'endLine' => 61,
            'startTokenPos' => 253,
            'startFilePos' => 1693,
            'endTokenPos' => 300,
            'endFilePos' => 1928,
          ),
        ),
        'docComment' => '/** Warna Bootstrap badge per status */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 6,
      ),
    ),
    'immediateProperties' => 
    array (
      'fillable' => 
      array (
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'user_id\', \'break_time_id\', \'status\', \'total_price\', \'discount_amount\', \'promo_ids\', \'note\', \'ordered_at\', \'idempotency_key\']',
          'attributes' => 
          array (
            'startLine' => 15,
            'endLine' => 25,
            'startTokenPos' => 58,
            'startFilePos' => 391,
            'endTokenPos' => 87,
            'endFilePos' => 605,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      'casts' => 
      array (
        'name' => 'casts',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 27,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'getStatusLabelAttribute' => 
      array (
        'name' => 'getStatusLabelAttribute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/** Label status dalam Bahasa Indonesia */',
        'startLine' => 66,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'getStatusColorAttribute' => 
      array (
        'name' => 'getStatusColorAttribute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/** Warna Bootstrap badge */',
        'startLine' => 72,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'isPreparing' => 
      array (
        'name' => 'isPreparing',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 93,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'isReady' => 
      array (
        'name' => 'isReady',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 89,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'isCancelled' => 
      array (
        'name' => 'isCancelled',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 93,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'isCollected' => 
      array (
        'name' => 'isCollected',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 93,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'user' => 
      array (
        'name' => 'user',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/** User yang membuat pesanan ini.
 *  Menggunakan withTrashed() agar relasi tidak null
 *  ketika user di-soft-delete sementara order masih ada.
 */',
        'startLine' => 88,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'breakTime' => 
      array (
        'name' => 'breakTime',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/** Slot waktu istirahat pengambilan */',
        'startLine' => 94,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'items' => 
      array (
        'name' => 'items',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/** Detail item-item dalam pesanan ini */',
        'startLine' => 100,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'balanceTransaction' => 
      array (
        'name' => 'balanceTransaction',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/** Transaksi saldo yang dipicu pesanan ini */',
        'startLine' => 106,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'orderQr' => 
      array (
        'name' => 'orderQr',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/** QR code pengambilan pesanan */',
        'startLine' => 112,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'generateQr' => 
      array (
        'name' => 'generateQr',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Models\\OrderQr',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Buat atau perbarui token QR; berlaku 90 menit sejak dibuat.
 */',
        'startLine' => 120,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
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