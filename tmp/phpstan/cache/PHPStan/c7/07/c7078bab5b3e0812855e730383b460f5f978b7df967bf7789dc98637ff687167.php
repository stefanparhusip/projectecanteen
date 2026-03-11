<?php declare(strict_types = 1);

// odsl-C:\laragon\www\usk_no_ai\app\Http\Controllers\Api\V1\WebhookController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Controllers\Api\V1\WebhookController
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.26-acd173f89352d58474cfe876b29c499a0ee32e334b96583700ffef620275d407',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Http\\Controllers\\Api\\V1\\WebhookController',
        'filename' => 'C:/laragon/www/usk_no_ai/app/Http/Controllers/Api/V1/WebhookController.php',
      ),
    ),
    'namespace' => 'App\\Http\\Controllers\\Api\\V1',
    'name' => 'App\\Http\\Controllers\\Api\\V1\\WebhookController',
    'shortName' => 'WebhookController',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @OA\\Tag(name="Webhooks", description="Inbound order-status webhooks")
 *
 * Webhooks are secured with a shared HMAC-SHA256 secret.
 * Calling system must set the header:
 *   X-Webhook-Signature: sha256=<HMAC-SHA256(raw-body, WEBHOOK_SECRET)>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 18,
    'endLine' => 93,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'App\\Http\\Controllers\\Controller',
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
      'orderStatus' => 
      array (
        'name' => 'orderStatus',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Http\\JsonResponse',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
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
        'startLine' => 45,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Controllers\\Api\\V1',
        'declaringClassName' => 'App\\Http\\Controllers\\Api\\V1\\WebhookController',
        'implementingClassName' => 'App\\Http\\Controllers\\Api\\V1\\WebhookController',
        'currentClassName' => 'App\\Http\\Controllers\\Api\\V1\\WebhookController',
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