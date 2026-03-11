<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/CarbonPeriod.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\CarbonPeriod
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-2a6235be574184f686c55deba968f1913141b323e6d7f140cbc42ac44a8281c4-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\CarbonPeriod',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../nesbot/carbon/src/Carbon/CarbonPeriod.php',
            ],
        ],
        'namespace' => 'Carbon',
        'name' => 'Carbon\\CarbonPeriod',
        'shortName' => 'CarbonPeriod',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Substitution of DatePeriod with some modifications and many more features.
 *
 * @method static static|CarbonInterface start($date = null, $inclusive = null) Create instance specifying start date or modify the start date if called on an instance.
 * @method static static since($date = null, $inclusive = null) Alias for start().
 * @method static static sinceNow($inclusive = null) Create instance with start date set to now or set the start date to now if called on an instance.
 * @method static static|CarbonInterface end($date = null, $inclusive = null) Create instance specifying end date or modify the end date if called on an instance.
 * @method static static until($date = null, $inclusive = null) Alias for end().
 * @method static static untilNow($inclusive = null) Create instance with end date set to now or set the end date to now if called on an instance.
 * @method static static dates($start, $end = null) Create instance with start and end dates or modify the start and end dates if called on an instance.
 * @method static static between($start, $end = null) Create instance with start and end dates or modify the start and end dates if called on an instance.
 * @method static static recurrences($recurrences = null) Create instance with maximum number of recurrences or modify the number of recurrences if called on an instance.
 * @method static static times($recurrences = null) Alias for recurrences().
 * @method static static|int|null options($options = null) Create instance with options or modify the options if called on an instance.
 * @method static static toggle($options, $state = null) Create instance with options toggled on or off, or toggle options if called on an instance.
 * @method static static filter($callback, $name = null) Create instance with filter added to the stack or append a filter if called on an instance.
 * @method static static push($callback, $name = null) Alias for filter().
 * @method static static prepend($callback, $name = null) Create instance with filter prepended to the stack or prepend a filter if called on an instance.
 * @method static static|array filters(array $filters = []) Create instance with filters stack or replace the whole filters stack if called on an instance.
 * @method static static|CarbonInterval interval($interval = null) Create instance with given date interval or modify the interval if called on an instance.
 * @method static static each($interval) Create instance with given date interval or modify the interval if called on an instance.
 * @method static static every($interval) Create instance with given date interval or modify the interval if called on an instance.
 * @method static static step($interval) Create instance with given date interval or modify the interval if called on an instance.
 * @method static static stepBy($interval) Create instance with given date interval or modify the interval if called on an instance.
 * @method static static invert() Create instance with inverted date interval or invert the interval if called on an instance.
 * @method static static years($years = 1) Create instance specifying a number of years for date interval or replace the interval by the given a number of years if called on an instance.
 * @method static static year($years = 1) Alias for years().
 * @method static static months($months = 1) Create instance specifying a number of months for date interval or replace the interval by the given a number of months if called on an instance.
 * @method static static month($months = 1) Alias for months().
 * @method static static weeks($weeks = 1) Create instance specifying a number of weeks for date interval or replace the interval by the given a number of weeks if called on an instance.
 * @method static static week($weeks = 1) Alias for weeks().
 * @method static static days($days = 1) Create instance specifying a number of days for date interval or replace the interval by the given a number of days if called on an instance.
 * @method static static dayz($days = 1) Alias for days().
 * @method static static day($days = 1) Alias for days().
 * @method static static hours($hours = 1) Create instance specifying a number of hours for date interval or replace the interval by the given a number of hours if called on an instance.
 * @method static static hour($hours = 1) Alias for hours().
 * @method static static minutes($minutes = 1) Create instance specifying a number of minutes for date interval or replace the interval by the given a number of minutes if called on an instance.
 * @method static static minute($minutes = 1) Alias for minutes().
 * @method static static seconds($seconds = 1) Create instance specifying a number of seconds for date interval or replace the interval by the given a number of seconds if called on an instance.
 * @method static static second($seconds = 1) Alias for seconds().
 * @method static static milliseconds($milliseconds = 1) Create instance specifying a number of milliseconds for date interval or replace the interval by the given a number of milliseconds if called on an instance.
 * @method static static millisecond($milliseconds = 1) Alias for milliseconds().
 * @method static static microseconds($microseconds = 1) Create instance specifying a number of microseconds for date interval or replace the interval by the given a number of microseconds if called on an instance.
 * @method static static microsecond($microseconds = 1) Alias for microseconds().
 * @method $this roundYear(float $precision = 1, string $function = "round") Round the current instance year with given precision using the given function.
 * @method $this roundYears(float $precision = 1, string $function = "round") Round the current instance year with given precision using the given function.
 * @method $this floorYear(float $precision = 1) Truncate the current instance year with given precision.
 * @method $this floorYears(float $precision = 1) Truncate the current instance year with given precision.
 * @method $this ceilYear(float $precision = 1) Ceil the current instance year with given precision.
 * @method $this ceilYears(float $precision = 1) Ceil the current instance year with given precision.
 * @method $this roundMonth(float $precision = 1, string $function = "round") Round the current instance month with given precision using the given function.
 * @method $this roundMonths(float $precision = 1, string $function = "round") Round the current instance month with given precision using the given function.
 * @method $this floorMonth(float $precision = 1) Truncate the current instance month with given precision.
 * @method $this floorMonths(float $precision = 1) Truncate the current instance month with given precision.
 * @method $this ceilMonth(float $precision = 1) Ceil the current instance month with given precision.
 * @method $this ceilMonths(float $precision = 1) Ceil the current instance month with given precision.
 * @method $this roundWeek(float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this roundWeeks(float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this floorWeek(float $precision = 1) Truncate the current instance day with given precision.
 * @method $this floorWeeks(float $precision = 1) Truncate the current instance day with given precision.
 * @method $this ceilWeek(float $precision = 1) Ceil the current instance day with given precision.
 * @method $this ceilWeeks(float $precision = 1) Ceil the current instance day with given precision.
 * @method $this roundDay(float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this roundDays(float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this floorDay(float $precision = 1) Truncate the current instance day with given precision.
 * @method $this floorDays(float $precision = 1) Truncate the current instance day with given precision.
 * @method $this ceilDay(float $precision = 1) Ceil the current instance day with given precision.
 * @method $this ceilDays(float $precision = 1) Ceil the current instance day with given precision.
 * @method $this roundHour(float $precision = 1, string $function = "round") Round the current instance hour with given precision using the given function.
 * @method $this roundHours(float $precision = 1, string $function = "round") Round the current instance hour with given precision using the given function.
 * @method $this floorHour(float $precision = 1) Truncate the current instance hour with given precision.
 * @method $this floorHours(float $precision = 1) Truncate the current instance hour with given precision.
 * @method $this ceilHour(float $precision = 1) Ceil the current instance hour with given precision.
 * @method $this ceilHours(float $precision = 1) Ceil the current instance hour with given precision.
 * @method $this roundMinute(float $precision = 1, string $function = "round") Round the current instance minute with given precision using the given function.
 * @method $this roundMinutes(float $precision = 1, string $function = "round") Round the current instance minute with given precision using the given function.
 * @method $this floorMinute(float $precision = 1) Truncate the current instance minute with given precision.
 * @method $this floorMinutes(float $precision = 1) Truncate the current instance minute with given precision.
 * @method $this ceilMinute(float $precision = 1) Ceil the current instance minute with given precision.
 * @method $this ceilMinutes(float $precision = 1) Ceil the current instance minute with given precision.
 * @method $this roundSecond(float $precision = 1, string $function = "round") Round the current instance second with given precision using the given function.
 * @method $this roundSeconds(float $precision = 1, string $function = "round") Round the current instance second with given precision using the given function.
 * @method $this floorSecond(float $precision = 1) Truncate the current instance second with given precision.
 * @method $this floorSeconds(float $precision = 1) Truncate the current instance second with given precision.
 * @method $this ceilSecond(float $precision = 1) Ceil the current instance second with given precision.
 * @method $this ceilSeconds(float $precision = 1) Ceil the current instance second with given precision.
 * @method $this roundMillennium(float $precision = 1, string $function = "round") Round the current instance millennium with given precision using the given function.
 * @method $this roundMillennia(float $precision = 1, string $function = "round") Round the current instance millennium with given precision using the given function.
 * @method $this floorMillennium(float $precision = 1) Truncate the current instance millennium with given precision.
 * @method $this floorMillennia(float $precision = 1) Truncate the current instance millennium with given precision.
 * @method $this ceilMillennium(float $precision = 1) Ceil the current instance millennium with given precision.
 * @method $this ceilMillennia(float $precision = 1) Ceil the current instance millennium with given precision.
 * @method $this roundCentury(float $precision = 1, string $function = "round") Round the current instance century with given precision using the given function.
 * @method $this roundCenturies(float $precision = 1, string $function = "round") Round the current instance century with given precision using the given function.
 * @method $this floorCentury(float $precision = 1) Truncate the current instance century with given precision.
 * @method $this floorCenturies(float $precision = 1) Truncate the current instance century with given precision.
 * @method $this ceilCentury(float $precision = 1) Ceil the current instance century with given precision.
 * @method $this ceilCenturies(float $precision = 1) Ceil the current instance century with given precision.
 * @method $this roundDecade(float $precision = 1, string $function = "round") Round the current instance decade with given precision using the given function.
 * @method $this roundDecades(float $precision = 1, string $function = "round") Round the current instance decade with given precision using the given function.
 * @method $this floorDecade(float $precision = 1) Truncate the current instance decade with given precision.
 * @method $this floorDecades(float $precision = 1) Truncate the current instance decade with given precision.
 * @method $this ceilDecade(float $precision = 1) Ceil the current instance decade with given precision.
 * @method $this ceilDecades(float $precision = 1) Ceil the current instance decade with given precision.
 * @method $this roundQuarter(float $precision = 1, string $function = "round") Round the current instance quarter with given precision using the given function.
 * @method $this roundQuarters(float $precision = 1, string $function = "round") Round the current instance quarter with given precision using the given function.
 * @method $this floorQuarter(float $precision = 1) Truncate the current instance quarter with given precision.
 * @method $this floorQuarters(float $precision = 1) Truncate the current instance quarter with given precision.
 * @method $this ceilQuarter(float $precision = 1) Ceil the current instance quarter with given precision.
 * @method $this ceilQuarters(float $precision = 1) Ceil the current instance quarter with given precision.
 * @method $this roundMillisecond(float $precision = 1, string $function = "round") Round the current instance millisecond with given precision using the given function.
 * @method $this roundMilliseconds(float $precision = 1, string $function = "round") Round the current instance millisecond with given precision using the given function.
 * @method $this floorMillisecond(float $precision = 1) Truncate the current instance millisecond with given precision.
 * @method $this floorMilliseconds(float $precision = 1) Truncate the current instance millisecond with given precision.
 * @method $this ceilMillisecond(float $precision = 1) Ceil the current instance millisecond with given precision.
 * @method $this ceilMilliseconds(float $precision = 1) Ceil the current instance millisecond with given precision.
 * @method $this roundMicrosecond(float $precision = 1, string $function = "round") Round the current instance microsecond with given precision using the given function.
 * @method $this roundMicroseconds(float $precision = 1, string $function = "round") Round the current instance microsecond with given precision using the given function.
 * @method $this floorMicrosecond(float $precision = 1) Truncate the current instance microsecond with given precision.
 * @method $this floorMicroseconds(float $precision = 1) Truncate the current instance microsecond with given precision.
 * @method $this ceilMicrosecond(float $precision = 1) Ceil the current instance microsecond with given precision.
 * @method $this ceilMicroseconds(float $precision = 1) Ceil the current instance microsecond with given precision.
 *
 * @mixin DeprecatedPeriodProperties
 *
 * @SuppressWarnings(TooManyFields)
 * @SuppressWarnings(CamelCasePropertyName)
 * @SuppressWarnings(CouplingBetweenObjects)
 */',
        'attributes' => [
        ],
        'startLine' => 184,
        'endLine' => 2718,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Carbon\\DatePeriodBase',
        'implementsClassNames' => [
            0 => 'Countable',
            1 => 'JsonSerializable',
            2 => 'Carbon\\Constants\\UnitValue',
        ],
        'traitClassNames' => [
            0 => 'Carbon\\Traits\\LocalFactory',
            1 => 'Carbon\\Traits\\IntervalRounding',
            2 => 'Carbon\\Traits\\Mixin',
            3 => 'Carbon\\Traits\\Options',
            4 => 'Carbon\\Traits\\ToStringFormat',
        ],
        'immediateConstants' => [
            'RECURRENCES_FILTER' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'RECURRENCES_FILTER',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '[self::class, \'filterRecurrences\']',
                    'attributes' => [
                        'startLine' => 201,
                        'endLine' => 201,
                        'startTokenPos' => 283,
                        'startFilePos' => 17411,
                        'endTokenPos' => 290,
                        'endFilePos' => 17444,
                    ],
                ],
                'docComment' => '/**
 * Built-in filter for limit by recurrences.
 *
 * @var callable
 */',
                'attributes' => [
                ],
                'startLine' => 201,
                'endLine' => 201,
                'startColumn' => 5,
                'endColumn' => 73,
            ],
            'END_DATE_FILTER' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'END_DATE_FILTER',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '[self::class, \'filterEndDate\']',
                    'attributes' => [
                        'startLine' => 208,
                        'endLine' => 208,
                        'startTokenPos' => 303,
                        'startFilePos' => 17571,
                        'endTokenPos' => 310,
                        'endFilePos' => 17600,
                    ],
                ],
                'docComment' => '/**
 * Built-in filter for limit to an end.
 *
 * @var callable
 */',
                'attributes' => [
                ],
                'startLine' => 208,
                'endLine' => 208,
                'startColumn' => 5,
                'endColumn' => 66,
            ],
            'END_ITERATION' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'END_ITERATION',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '[self::class, \'endIteration\']',
                    'attributes' => [
                        'startLine' => 215,
                        'endLine' => 215,
                        'startTokenPos' => 323,
                        'startFilePos' => 17768,
                        'endTokenPos' => 330,
                        'endFilePos' => 17796,
                    ],
                ],
                'docComment' => '/**
 * Special value which can be returned by filters to end iteration. Also a filter.
 *
 * @var callable
 */',
                'attributes' => [
                ],
                'startLine' => 215,
                'endLine' => 215,
                'startColumn' => 5,
                'endColumn' => 63,
            ],
            'EXCLUDE_END_DATE' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'EXCLUDE_END_DATE',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '8',
                    'attributes' => [
                        'startLine' => 222,
                        'endLine' => 222,
                        'startTokenPos' => 343,
                        'startFilePos' => 17915,
                        'endTokenPos' => 343,
                        'endFilePos' => 17915,
                    ],
                ],
                'docComment' => '/**
 * Exclude end date from iteration.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 222,
                'endLine' => 222,
                'startColumn' => 5,
                'endColumn' => 38,
            ],
            'IMMUTABLE' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'IMMUTABLE',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '4',
                    'attributes' => [
                        'startLine' => 229,
                        'endLine' => 229,
                        'startTokenPos' => 356,
                        'startFilePos' => 18027,
                        'endTokenPos' => 356,
                        'endFilePos' => 18027,
                    ],
                ],
                'docComment' => '/**
 * Yield CarbonImmutable instances.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 229,
                'endLine' => 229,
                'startColumn' => 5,
                'endColumn' => 31,
            ],
            'NEXT_MAX_ATTEMPTS' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'NEXT_MAX_ATTEMPTS',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '1000',
                    'attributes' => [
                        'startLine' => 236,
                        'endLine' => 236,
                        'startTokenPos' => 369,
                        'startFilePos' => 18186,
                        'endTokenPos' => 369,
                        'endFilePos' => 18189,
                    ],
                ],
                'docComment' => '/**
 * Number of maximum attempts before giving up on finding next valid date.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 236,
                'endLine' => 236,
                'startColumn' => 5,
                'endColumn' => 42,
            ],
            'END_MAX_ATTEMPTS' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'END_MAX_ATTEMPTS',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '10000',
                    'attributes' => [
                        'startLine' => 243,
                        'endLine' => 243,
                        'startTokenPos' => 382,
                        'startFilePos' => 18340,
                        'endTokenPos' => 382,
                        'endFilePos' => 18344,
                    ],
                ],
                'docComment' => '/**
 * Number of maximum attempts before giving up on finding end date.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 243,
                'endLine' => 243,
                'startColumn' => 5,
                'endColumn' => 42,
            ],
            'DEFAULT_DATE_CLASS' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'DEFAULT_DATE_CLASS',
                'modifiers' => 2,
                'type' => null,
                'value' => [
                    'code' => '\\Carbon\\Carbon::class',
                    'attributes' => [
                        'startLine' => 250,
                        'endLine' => 250,
                        'startTokenPos' => 395,
                        'startFilePos' => 18477,
                        'endTokenPos' => 397,
                        'endFilePos' => 18489,
                    ],
                ],
                'docComment' => '/**
 * Default date class of iteration items.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 250,
                'endLine' => 250,
                'startColumn' => 5,
                'endColumn' => 55,
            ],
        ],
        'immediateProperties' => [
            'macros' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'macros',
                'modifiers' => 18,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 255,
                        'endLine' => 255,
                        'startTokenPos' => 412,
                        'startFilePos' => 18576,
                        'endTokenPos' => 413,
                        'endFilePos' => 18577,
                    ],
                ],
                'docComment' => '/**
 * The registered macros.
 */',
                'attributes' => [
                ],
                'startLine' => 255,
                'endLine' => 255,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'dateClass' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'dateClass',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '\\Carbon\\Carbon::class',
                    'attributes' => [
                        'startLine' => 260,
                        'endLine' => 260,
                        'startTokenPos' => 426,
                        'startFilePos' => 18669,
                        'endTokenPos' => 428,
                        'endFilePos' => 18681,
                    ],
                ],
                'docComment' => '/**
 * Date class of iteration items.
 */',
                'attributes' => [
                ],
                'startLine' => 260,
                'endLine' => 260,
                'startColumn' => 5,
                'endColumn' => 48,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'dateInterval' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'dateInterval',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Carbon\\CarbonInterval',
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
                        'startLine' => 265,
                        'endLine' => 265,
                        'startTokenPos' => 442,
                        'startFilePos' => 18825,
                        'endTokenPos' => 442,
                        'endFilePos' => 18828,
                    ],
                ],
                'docComment' => '/**
 * Underlying date interval instance. Always present, one day by default.
 */',
                'attributes' => [
                ],
                'startLine' => 265,
                'endLine' => 265,
                'startColumn' => 5,
                'endColumn' => 51,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'constructed' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'constructed',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 270,
                        'endLine' => 270,
                        'startTokenPos' => 455,
                        'startFilePos' => 18924,
                        'endTokenPos' => 455,
                        'endFilePos' => 18928,
                    ],
                ],
                'docComment' => '/**
 * True once __construct is finished.
 */',
                'attributes' => [
                ],
                'startLine' => 270,
                'endLine' => 270,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'isDefaultInterval' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'isDefaultInterval',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 275,
                        'endLine' => 275,
                        'startTokenPos' => 468,
                        'startFilePos' => 19045,
                        'endTokenPos' => 468,
                        'endFilePos' => 19049,
                    ],
                ],
                'docComment' => '/**
 * Whether current date interval was set by default.
 */',
                'attributes' => [
                ],
                'startLine' => 275,
                'endLine' => 275,
                'startColumn' => 5,
                'endColumn' => 46,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'filters' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'filters',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 280,
                        'endLine' => 280,
                        'startTokenPos' => 481,
                        'startFilePos' => 19126,
                        'endTokenPos' => 482,
                        'endFilePos' => 19127,
                    ],
                ],
                'docComment' => '/**
 * The filters stack.
 */',
                'attributes' => [
                ],
                'startLine' => 280,
                'endLine' => 280,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'startDate' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'startDate',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Carbon\\CarbonInterface',
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
                        'startLine' => 285,
                        'endLine' => 285,
                        'startTokenPos' => 496,
                        'startFilePos' => 19268,
                        'endTokenPos' => 496,
                        'endFilePos' => 19271,
                    ],
                ],
                'docComment' => '/**
 * Period start date. Applied on rewind. Always present, now by default.
 */',
                'attributes' => [
                ],
                'startLine' => 285,
                'endLine' => 285,
                'startColumn' => 5,
                'endColumn' => 49,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'endDate' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'endDate',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Carbon\\CarbonInterface',
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
                        'startLine' => 290,
                        'endLine' => 290,
                        'startTokenPos' => 510,
                        'startFilePos' => 19434,
                        'endTokenPos' => 510,
                        'endFilePos' => 19437,
                    ],
                ],
                'docComment' => '/**
 * Period end date. For inverted interval should be before the start date. Applied via a filter.
 */',
                'attributes' => [
                ],
                'startLine' => 290,
                'endLine' => 290,
                'startColumn' => 5,
                'endColumn' => 47,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'carbonRecurrences' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'carbonRecurrences',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'int',
                                    'isIdentifier' => true,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'float',
                                    'isIdentifier' => true,
                                ],
                            ],
                            2 => [
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
                        'startLine' => 295,
                        'endLine' => 295,
                        'startTokenPos' => 527,
                        'startFilePos' => 19569,
                        'endTokenPos' => 527,
                        'endFilePos' => 19572,
                    ],
                ],
                'docComment' => '/**
 * Limit for number of recurrences. Applied via a filter.
 */',
                'attributes' => [
                ],
                'startLine' => 295,
                'endLine' => 295,
                'startColumn' => 5,
                'endColumn' => 55,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'options' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'options',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'int',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 300,
                        'endLine' => 300,
                        'startTokenPos' => 541,
                        'startFilePos' => 19648,
                        'endTokenPos' => 541,
                        'endFilePos' => 19651,
                    ],
                ],
                'docComment' => '/**
 * Iteration options.
 */',
                'attributes' => [
                ],
                'startLine' => 300,
                'endLine' => 300,
                'startColumn' => 5,
                'endColumn' => 35,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'key' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'key',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '0',
                    'attributes' => [
                        'startLine' => 306,
                        'endLine' => 306,
                        'startTokenPos' => 554,
                        'startFilePos' => 19842,
                        'endTokenPos' => 554,
                        'endFilePos' => 19842,
                    ],
                ],
                'docComment' => '/**
 * Index of current date. Always sequential, even if some dates are skipped by filters.
 * Equal to null only before the first iteration.
 */',
                'attributes' => [
                ],
                'startLine' => 306,
                'endLine' => 306,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'carbonCurrent' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'carbonCurrent',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Carbon\\CarbonInterface',
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
                        'startLine' => 312,
                        'endLine' => 312,
                        'startTokenPos' => 568,
                        'startFilePos' => 20059,
                        'endTokenPos' => 568,
                        'endFilePos' => 20062,
                    ],
                ],
                'docComment' => '/**
 * Current date. May temporarily hold unaccepted value when looking for a next valid date.
 * Equal to null only before the first iteration.
 */',
                'attributes' => [
                ],
                'startLine' => 312,
                'endLine' => 312,
                'startColumn' => 5,
                'endColumn' => 53,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'timezone' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'timezone',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'DateTimeZone',
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
                        'startLine' => 317,
                        'endLine' => 317,
                        'startTokenPos' => 582,
                        'startFilePos' => 20182,
                        'endTokenPos' => 582,
                        'endFilePos' => 20185,
                    ],
                ],
                'docComment' => '/**
 * Timezone of current date. Taken from the start date.
 */',
                'attributes' => [
                ],
                'startLine' => 317,
                'endLine' => 317,
                'startColumn' => 5,
                'endColumn' => 45,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'validationResult' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'validationResult',
                'modifiers' => 2,
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
                                    'name' => 'string',
                                    'isIdentifier' => true,
                                ],
                            ],
                            2 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'bool',
                                    'isIdentifier' => true,
                                ],
                            ],
                            3 => [
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
                        'startLine' => 322,
                        'endLine' => 322,
                        'startTokenPos' => 601,
                        'startFilePos' => 20316,
                        'endTokenPos' => 601,
                        'endFilePos' => 20319,
                    ],
                ],
                'docComment' => '/**
 * The cached validation result for current date.
 */',
                'attributes' => [
                ],
                'startLine' => 322,
                'endLine' => 322,
                'startColumn' => 5,
                'endColumn' => 62,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'timezoneSetting' => [
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'name' => 'timezoneSetting',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'DateTimeZone',
                                    'isIdentifier' => false,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
                                    'isIdentifier' => true,
                                ],
                            ],
                            2 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'int',
                                    'isIdentifier' => true,
                                ],
                            ],
                            3 => [
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
                        'startLine' => 327,
                        'endLine' => 327,
                        'startTokenPos' => 620,
                        'startFilePos' => 20448,
                        'endTokenPos' => 620,
                        'endFilePos' => 20451,
                    ],
                ],
                'docComment' => '/**
 * Timezone handler for settings() method.
 */',
                'attributes' => [
                ],
                'startLine' => 327,
                'endLine' => 327,
                'startColumn' => 5,
                'endColumn' => 67,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'getIterator' => [
                'name' => 'getIterator',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Generator',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 329,
                'endLine' => 341,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => true,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'make' => [
                'name' => 'make',
                'parameters' => [
                    'var' => [
                        'name' => 'var',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 346,
                        'endLine' => 346,
                        'startColumn' => 33,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'static',
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
                'docComment' => '/**
 * Make a CarbonPeriod instance from given variable if possible.
 */',
                'startLine' => 346,
                'endLine' => 353,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'instance' => [
                'name' => 'instance',
                'parameters' => [
                    'period' => [
                        'name' => 'period',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 358,
                        'endLine' => 358,
                        'startColumn' => 37,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new instance from a DatePeriod or CarbonPeriod object.
 */',
                'startLine' => 358,
                'endLine' => 391,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'create' => [
                'name' => 'create',
                'parameters' => [
                    'params' => [
                        'name' => 'params',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 396,
                        'endLine' => 396,
                        'startColumn' => 35,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new instance.
 */',
                'startLine' => 396,
                'endLine' => 399,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'createFromArray' => [
                'name' => 'createFromArray',
                'parameters' => [
                    'params' => [
                        'name' => 'params',
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
                        'startLine' => 404,
                        'endLine' => 404,
                        'startColumn' => 44,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new instance from an array of parameters.
 */',
                'startLine' => 404,
                'endLine' => 407,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'createFromIso' => [
                'name' => 'createFromIso',
                'parameters' => [
                    'iso' => [
                        'name' => 'iso',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 412,
                        'endLine' => 412,
                        'startColumn' => 42,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 412,
                                'endLine' => 412,
                                'startTokenPos' => 1101,
                                'startFilePos' => 22732,
                                'endTokenPos' => 1101,
                                'endFilePos' => 22735,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
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
                        'startLine' => 412,
                        'endLine' => 412,
                        'startColumn' => 55,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Create CarbonPeriod from ISO 8601 string.
 */',
                'startLine' => 412,
                'endLine' => 422,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'createFromISO8601String' => [
                'name' => 'createFromISO8601String',
                'parameters' => [
                    'iso' => [
                        'name' => 'iso',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 424,
                        'endLine' => 424,
                        'startColumn' => 52,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 424,
                                'endLine' => 424,
                                'startTokenPos' => 1196,
                                'startFilePos' => 23124,
                                'endTokenPos' => 1196,
                                'endFilePos' => 23127,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
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
                        'startLine' => 424,
                        'endLine' => 424,
                        'startColumn' => 65,
                        'endColumn' => 84,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 424,
                'endLine' => 427,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'intervalHasTime' => [
                'name' => 'intervalHasTime',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'DateInterval',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 432,
                        'endLine' => 432,
                        'startColumn' => 47,
                        'endColumn' => 68,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return whether the given interval contains non-zero value of any time unit.
 */',
                'startLine' => 432,
                'endLine' => 435,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'isIso8601' => [
                'name' => 'isIso8601',
                'parameters' => [
                    'var' => [
                        'name' => 'var',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 443,
                        'endLine' => 443,
                        'startColumn' => 41,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return whether given variable is an ISO 8601 specification.
 *
 * Note: Check is very basic, as actual validation will be done later when parsing.
 * We just want to ensure that variable is not any other type of valid parameter.
 */',
                'startLine' => 443,
                'endLine' => 455,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'parseIso8601' => [
                'name' => 'parseIso8601',
                'parameters' => [
                    'iso' => [
                        'name' => 'iso',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 462,
                        'endLine' => 462,
                        'startColumn' => 44,
                        'endColumn' => 54,
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
                'docComment' => '/**
 * Parse given ISO 8601 string into an array of arguments.
 *
 * @SuppressWarnings(ElseExpression)
 */',
                'startLine' => 462,
                'endLine' => 488,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'addMissingParts' => [
                'name' => 'addMissingParts',
                'parameters' => [
                    'source' => [
                        'name' => 'source',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 493,
                        'endLine' => 493,
                        'startColumn' => 47,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'target' => [
                        'name' => 'target',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 493,
                        'endLine' => 493,
                        'startColumn' => 63,
                        'endColumn' => 76,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Add missing parts of the target date from the source date.
 */',
                'startLine' => 493,
                'endLine' => 500,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'makeInterval' => [
                'name' => 'makeInterval',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 502,
                        'endLine' => 502,
                        'startColumn' => 42,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Carbon\\CarbonInterval',
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
                'startLine' => 502,
                'endLine' => 509,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'makeTimezone' => [
                'name' => 'makeTimezone',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 511,
                        'endLine' => 511,
                        'startColumn' => 42,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Carbon\\CarbonTimeZone',
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
                'startLine' => 511,
                'endLine' => 522,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'macro' => [
                'name' => 'macro',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 539,
                        'endLine' => 539,
                        'startColumn' => 34,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'macro' => [
                        'name' => 'macro',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
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
                        'startLine' => 539,
                        'endLine' => 539,
                        'startColumn' => 48,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
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
                'docComment' => '/**
 * Register a custom macro.
 *
 * Pass null macro to remove it.
 *
 * @example
 * ```
 * CarbonPeriod::macro(\'middle\', function () {
 *   return $this->getStartDate()->average($this->getEndDate());
 * });
 * echo CarbonPeriod::since(\'2011-05-12\')->until(\'2011-06-03\')->middle();
 * ```
 *
 * @param-closure-this  static  $macro
 */',
                'startLine' => 539,
                'endLine' => 542,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'mixin' => [
                'name' => 'mixin',
                'parameters' => [
                    'mixin' => [
                        'name' => 'mixin',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'object',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 574,
                        'endLine' => 574,
                        'startColumn' => 34,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'docComment' => '/**
 * Register macros from a mixin object.
 *
 * @example
 * ```
 * CarbonPeriod::mixin(new class {
 *   public function addDays() {
 *     return function ($count = 1) {
 *       return $this->setStartDate(
 *         $this->getStartDate()->addDays($count)
 *       )->setEndDate(
 *         $this->getEndDate()->addDays($count)
 *       );
 *     };
 *   }
 *   public function subDays() {
 *     return function ($count = 1) {
 *       return $this->setStartDate(
 *         $this->getStartDate()->subDays($count)
 *       )->setEndDate(
 *         $this->getEndDate()->subDays($count)
 *       );
 *     };
 *   }
 * });
 * echo CarbonPeriod::create(\'2000-01-01\', \'2000-02-01\')->addDays(5)->subDays(3);
 * ```
 *
 * @throws ReflectionException
 */',
                'startLine' => 574,
                'endLine' => 577,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'hasMacro' => [
                'name' => 'hasMacro',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 582,
                        'endLine' => 582,
                        'startColumn' => 37,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Check if macro is registered.
 */',
                'startLine' => 582,
                'endLine' => 585,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            '__callStatic' => [
                'name' => '__callStatic',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 590,
                        'endLine' => 590,
                        'startColumn' => 41,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
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
                        'startLine' => 590,
                        'endLine' => 590,
                        'startColumn' => 57,
                        'endColumn' => 73,
                        'parameterIndex' => 1,
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
 * Provide static proxy for instance aliases.
 */',
                'startLine' => 590,
                'endLine' => 599,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            '__construct' => [
                'name' => '__construct',
                'parameters' => [
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 608,
                        'endLine' => 608,
                        'startColumn' => 33,
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
 * CarbonPeriod constructor.
 *
 * @SuppressWarnings(ElseExpression)
 *
 * @throws InvalidArgumentException
 */',
                'startLine' => 608,
                'endLine' => 737,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'copy' => [
                'name' => 'copy',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a copy of the instance.
 */',
                'startLine' => 742,
                'endLine' => 745,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'copyIfImmutable' => [
                'name' => 'copyIfImmutable',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepare the instance to be set (self if mutable to be mutated,
 * copy if immutable to generate a new instance).
 */',
                'startLine' => 751,
                'endLine' => 754,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'getGetter' => [
                'name' => 'getGetter',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 759,
                        'endLine' => 759,
                        'startColumn' => 34,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'callable',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the getter for a property allowing both `DatePeriod` snakeCase and camelCase names.
 */',
                'startLine' => 759,
                'endLine' => 778,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'get' => [
                'name' => 'get',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 787,
                        'endLine' => 787,
                        'startColumn' => 25,
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
 * Get a property allowing both `DatePeriod` snakeCase and camelCase names.
 *
 * @param string $name
 *
 * @return bool|CarbonInterface|CarbonInterval|int|null
 */',
                'startLine' => 787,
                'endLine' => 796,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            '__get' => [
                'name' => '__get',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 805,
                        'endLine' => 805,
                        'startColumn' => 27,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a property allowing both `DatePeriod` snakeCase and camelCase names.
 *
 * @param string $name
 *
 * @return bool|CarbonInterface|CarbonInterval|int|null
 */',
                'startLine' => 805,
                'endLine' => 808,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            '__isset' => [
                'name' => '__isset',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 817,
                        'endLine' => 817,
                        'startColumn' => 29,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Check if an attribute exists on the object
 *
 * @param string $name
 *
 * @return bool
 */',
                'startLine' => 817,
                'endLine' => 820,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'clone' => [
                'name' => 'clone',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @alias copy
 *
 * Get a copy of the instance.
 *
 * @return static
 */',
                'startLine' => 829,
                'endLine' => 832,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'setDateClass' => [
                'name' => 'setDateClass',
                'parameters' => [
                    'dateClass' => [
                        'name' => 'dateClass',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 841,
                        'endLine' => 841,
                        'startColumn' => 34,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the iteration item class.
 *
 * @param string $dateClass
 *
 * @return static
 */',
                'startLine' => 841,
                'endLine' => 857,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'getDateClass' => [
                'name' => 'getDateClass',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns iteration item date class.
 *
 * @return string
 */',
                'startLine' => 864,
                'endLine' => 867,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'setDateInterval' => [
                'name' => 'setDateInterval',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 879,
                        'endLine' => 879,
                        'startColumn' => 37,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'unit' => [
                        'name' => 'unit',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 879,
                                'endLine' => 879,
                                'startTokenPos' => 3794,
                                'startFilePos' => 37228,
                                'endTokenPos' => 3794,
                                'endFilePos' => 37231,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
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
                        'startLine' => 879,
                        'endLine' => 879,
                        'startColumn' => 54,
                        'endColumn' => 82,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Change the period date interval.
 *
 * @param DateInterval|Unit|string|int $interval
 * @param Unit|string                  $unit     the unit of $interval if it\'s a number
 *
 * @throws InvalidIntervalException
 *
 * @return static
 */',
                'startLine' => 879,
                'endLine' => 905,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'resetDateInterval' => [
                'name' => 'resetDateInterval',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Reset the date interval to the default value.
 *
 * Difference with simply setting interval to 1-day is that P1D will not appear when calling toIso8601String()
 * and also next adding to the interval won\'t include the default 1-day.
 */',
                'startLine' => 913,
                'endLine' => 921,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'invertDateInterval' => [
                'name' => 'invertDateInterval',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Invert the period date interval.
 */',
                'startLine' => 926,
                'endLine' => 929,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'setDates' => [
                'name' => 'setDates',
                'parameters' => [
                    'start' => [
                        'name' => 'start',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 939,
                        'endLine' => 939,
                        'startColumn' => 30,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'end' => [
                        'name' => 'end',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 939,
                        'endLine' => 939,
                        'startColumn' => 44,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Set start and end date.
 *
 * @param DateTime|DateTimeInterface|string      $start
 * @param DateTime|DateTimeInterface|string|null $end
 *
 * @return static
 */',
                'startLine' => 939,
                'endLine' => 942,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'setOptions' => [
                'name' => 'setOptions',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
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
                        'startLine' => 951,
                        'endLine' => 951,
                        'startColumn' => 32,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Change the period options.
 *
 * @param int|null $options
 *
 * @return static
 */',
                'startLine' => 951,
                'endLine' => 959,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'getOptions' => [
                'name' => 'getOptions',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the period options.
 */',
                'startLine' => 964,
                'endLine' => 967,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'toggleOptions' => [
                'name' => 'toggleOptions',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 979,
                        'endLine' => 979,
                        'startColumn' => 35,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'state' => [
                        'name' => 'state',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 979,
                                'endLine' => 979,
                                'startTokenPos' => 4202,
                                'startFilePos' => 39704,
                                'endTokenPos' => 4202,
                                'endFilePos' => 39707,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'bool',
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
                        'startLine' => 979,
                        'endLine' => 979,
                        'startColumn' => 49,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Toggle given options on or off.
 *
 * @param int       $options
 * @param bool|null $state
 *
 * @throws InvalidArgumentException
 *
 * @return static
 */',
                'startLine' => 979,
                'endLine' => 992,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'excludeStartDate' => [
                'name' => 'excludeStartDate',
                'parameters' => [
                    'state' => [
                        'name' => 'state',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 997,
                                'endLine' => 997,
                                'startTokenPos' => 4304,
                                'startFilePos' => 40133,
                                'endTokenPos' => 4304,
                                'endFilePos' => 40136,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 997,
                        'endLine' => 997,
                        'startColumn' => 38,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Toggle EXCLUDE_START_DATE option.
 */',
                'startLine' => 997,
                'endLine' => 1000,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'excludeEndDate' => [
                'name' => 'excludeEndDate',
                'parameters' => [
                    'state' => [
                        'name' => 'state',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1005,
                                'endLine' => 1005,
                                'startTokenPos' => 4343,
                                'startFilePos' => 40337,
                                'endTokenPos' => 4343,
                                'endFilePos' => 40340,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1005,
                        'endLine' => 1005,
                        'startColumn' => 36,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Toggle EXCLUDE_END_DATE option.
 */',
                'startLine' => 1005,
                'endLine' => 1008,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'getDateInterval' => [
                'name' => 'getDateInterval',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Carbon\\CarbonInterval',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the underlying date interval.
 */',
                'startLine' => 1013,
                'endLine' => 1016,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'getStartDate' => [
                'name' => 'getStartDate',
                'parameters' => [
                    'rounding' => [
                        'name' => 'rounding',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1023,
                                'endLine' => 1023,
                                'startTokenPos' => 4411,
                                'startFilePos' => 40822,
                                'endTokenPos' => 4411,
                                'endFilePos' => 40825,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1023,
                        'endLine' => 1023,
                        'startColumn' => 34,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Carbon\\CarbonInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get start date of the period.
 *
 * @param string|null $rounding Optional rounding \'floor\', \'ceil\', \'round\' using the period interval.
 */',
                'startLine' => 1023,
                'endLine' => 1028,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'getEndDate' => [
                'name' => 'getEndDate',
                'parameters' => [
                    'rounding' => [
                        'name' => 'rounding',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1035,
                                'endLine' => 1035,
                                'startTokenPos' => 4474,
                                'startFilePos' => 41211,
                                'endTokenPos' => 4474,
                                'endFilePos' => 41214,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1035,
                        'endLine' => 1035,
                        'startColumn' => 32,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Carbon\\CarbonInterface',
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
                'docComment' => '/**
 * Get end date of the period.
 *
 * @param string|null $rounding Optional rounding \'floor\', \'ceil\', \'round\' using the period interval.
 */',
                'startLine' => 1035,
                'endLine' => 1044,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'getRecurrences' => [
                'name' => 'getRecurrences',
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
                                    'name' => 'int',
                                    'isIdentifier' => true,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'float',
                                    'isIdentifier' => true,
                                ],
                            ],
                            2 => [
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
                    0 => [
                        'name' => 'ReturnTypeWillChange',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * Get number of recurrences.
 */',
                'startLine' => 1049,
                'endLine' => 1053,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'isStartExcluded' => [
                'name' => 'isStartExcluded',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns true if the start date should be excluded.
 */',
                'startLine' => 1058,
                'endLine' => 1061,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'isEndExcluded' => [
                'name' => 'isEndExcluded',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns true if the end date should be excluded.
 */',
                'startLine' => 1066,
                'endLine' => 1069,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'isStartIncluded' => [
                'name' => 'isStartIncluded',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns true if the start date should be included.
 */',
                'startLine' => 1074,
                'endLine' => 1077,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'isEndIncluded' => [
                'name' => 'isEndIncluded',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns true if the end date should be included.
 */',
                'startLine' => 1082,
                'endLine' => 1085,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'getIncludedStartDate' => [
                'name' => 'getIncludedStartDate',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Carbon\\CarbonInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the start if it\'s included by option, else return the start + 1 period interval.
 */',
                'startLine' => 1090,
                'endLine' => 1099,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'getIncludedEndDate' => [
                'name' => 'getIncludedEndDate',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Carbon\\CarbonInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the end if it\'s included by option, else return the end - 1 period interval.
 * Warning: if the period has no fixed end, this method will iterate the period to calculate it.
 */',
                'startLine' => 1105,
                'endLine' => 1118,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'addFilter' => [
                'name' => 'addFilter',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1125,
                        'endLine' => 1125,
                        'startColumn' => 31,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1125,
                                'endLine' => 1125,
                                'startTokenPos' => 4863,
                                'startFilePos' => 43419,
                                'endTokenPos' => 4863,
                                'endFilePos' => 43422,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1125,
                        'endLine' => 1125,
                        'startColumn' => 58,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a filter to the stack.
 *
 * @SuppressWarnings(UnusedFormalParameter)
 */',
                'startLine' => 1125,
                'endLine' => 1135,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'prependFilter' => [
                'name' => 'prependFilter',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1142,
                        'endLine' => 1142,
                        'startColumn' => 35,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1142,
                                'endLine' => 1142,
                                'startTokenPos' => 4943,
                                'startFilePos' => 43837,
                                'endTokenPos' => 4943,
                                'endFilePos' => 43840,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1142,
                        'endLine' => 1142,
                        'startColumn' => 62,
                        'endColumn' => 81,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepend a filter to the stack.
 *
 * @SuppressWarnings(UnusedFormalParameter)
 */',
                'startLine' => 1142,
                'endLine' => 1152,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'removeFilter' => [
                'name' => 'removeFilter',
                'parameters' => [
                    'filter' => [
                        'name' => 'filter',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1157,
                        'endLine' => 1157,
                        'startColumn' => 34,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove a filter by instance or name.
 */',
                'startLine' => 1157,
                'endLine' => 1172,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'hasFilter' => [
                'name' => 'hasFilter',
                'parameters' => [
                    'filter' => [
                        'name' => 'filter',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1177,
                        'endLine' => 1177,
                        'startColumn' => 31,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return whether given instance or name is in the filter stack.
 */',
                'startLine' => 1177,
                'endLine' => 1188,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'getFilters' => [
                'name' => 'getFilters',
                'parameters' => [
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
                'docComment' => '/**
 * Get filters stack.
 */',
                'startLine' => 1193,
                'endLine' => 1196,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'setFilters' => [
                'name' => 'setFilters',
                'parameters' => [
                    'filters' => [
                        'name' => 'filters',
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
                        'startLine' => 1201,
                        'endLine' => 1201,
                        'startColumn' => 32,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Set filters stack.
 */',
                'startLine' => 1201,
                'endLine' => 1211,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'resetFilters' => [
                'name' => 'resetFilters',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Reset filters stack.
 */',
                'startLine' => 1216,
                'endLine' => 1232,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'setRecurrences' => [
                'name' => 'setRecurrences',
                'parameters' => [
                    'recurrences' => [
                        'name' => 'recurrences',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
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
                        'startLine' => 1239,
                        'endLine' => 1239,
                        'startColumn' => 36,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a recurrences filter (set maximum number of recurrences).
 *
 * @throws InvalidArgumentException
 */',
                'startLine' => 1239,
                'endLine' => 1260,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'setStartDate' => [
                'name' => 'setStartDate',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1272,
                        'endLine' => 1272,
                        'startColumn' => 34,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'inclusive' => [
                        'name' => 'inclusive',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1272,
                                'endLine' => 1272,
                                'startTokenPos' => 5567,
                                'startFilePos' => 46974,
                                'endTokenPos' => 5567,
                                'endFilePos' => 46977,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'bool',
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
                        'startLine' => 1272,
                        'endLine' => 1272,
                        'startColumn' => 47,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Change the period start date.
 *
 * @param DateTime|DateTimeInterface|string $date
 * @param bool|null                         $inclusive
 *
 * @throws InvalidPeriodDateException
 *
 * @return static
 */',
                'startLine' => 1272,
                'endLine' => 1286,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'setEndDate' => [
                'name' => 'setEndDate',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1298,
                        'endLine' => 1298,
                        'startColumn' => 32,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'inclusive' => [
                        'name' => 'inclusive',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1298,
                                'endLine' => 1298,
                                'startTokenPos' => 5708,
                                'startFilePos' => 47746,
                                'endTokenPos' => 5708,
                                'endFilePos' => 47749,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'bool',
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
                        'startLine' => 1298,
                        'endLine' => 1298,
                        'startColumn' => 45,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Change the period end date.
 *
 * @param DateTime|DateTimeInterface|string|null $date
 * @param bool|null                              $inclusive
 *
 * @throws \\InvalidArgumentException
 *
 * @return static
 */',
                'startLine' => 1298,
                'endLine' => 1322,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'valid' => [
                'name' => 'valid',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Check if the current position is valid.
 */',
                'startLine' => 1327,
                'endLine' => 1330,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'key' => [
                'name' => 'key',
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
                                    'name' => 'int',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the current key.
 */',
                'startLine' => 1335,
                'endLine' => 1340,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'current' => [
                'name' => 'current',
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
                                    'name' => 'Carbon\\CarbonInterface',
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
                'docComment' => '/**
 * Return the current date.
 */',
                'startLine' => 1345,
                'endLine' => 1350,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'next' => [
                'name' => 'next',
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
                'docComment' => '/**
 * Move forward to the next date.
 *
 * @throws RuntimeException
 */',
                'startLine' => 1357,
                'endLine' => 1368,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'rewind' => [
                'name' => 'rewind',
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
                'docComment' => '/**
 * Rewind to the start date.
 *
 * Iterating over a date in the UTC timezone avoids bug during backward DST change.
 *
 * @see https://bugs.php.net/bug.php?id=72255
 * @see https://bugs.php.net/bug.php?id=74274
 * @see https://wiki.php.net/rfc/datetime_and_daylight_saving_time
 *
 * @throws RuntimeException
 */',
                'startLine' => 1381,
                'endLine' => 1403,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'skip' => [
                'name' => 'skip',
                'parameters' => [
                    'count' => [
                        'name' => 'count',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 1412,
                                'endLine' => 1412,
                                'startTokenPos' => 6286,
                                'startFilePos' => 50781,
                                'endTokenPos' => 6286,
                                'endFilePos' => 50781,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1412,
                        'endLine' => 1412,
                        'startColumn' => 26,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Skip iterations and returns iteration state (false if ended, true if still valid).
 *
 * @param int $count steps number to skip (1 by default)
 *
 * @return bool
 */',
                'startLine' => 1412,
                'endLine' => 1419,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'toIso8601String' => [
                'name' => 'toIso8601String',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Format the date period as ISO 8601.
 */',
                'startLine' => 1424,
                'endLine' => 1443,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'toString' => [
                'name' => 'toString',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the date period into a string.
 */',
                'startLine' => 1448,
                'endLine' => 1485,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'spec' => [
                'name' => 'spec',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Format the date period as ISO 8601.
 */',
                'startLine' => 1490,
                'endLine' => 1493,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'cast' => [
                'name' => 'cast',
                'parameters' => [
                    'className' => [
                        'name' => 'className',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1502,
                        'endLine' => 1502,
                        'startColumn' => 26,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'object',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Cast the current instance into the given class.
 *
 * @param string $className The $className::instance() method will be called to cast the current object.
 *
 * @return DatePeriod|object
 */',
                'startLine' => 1502,
                'endLine' => 1518,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'toDatePeriod' => [
                'name' => 'toDatePeriod',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'DatePeriod',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return native DatePeriod PHP object matching the current instance.
 *
 * @example
 * ```
 * var_dump(CarbonPeriod::create(\'2021-01-05\', \'2021-02-15\')->toDatePeriod());
 * ```
 */',
                'startLine' => 1528,
                'endLine' => 1531,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'isUnfilteredAndEndLess' => [
                'name' => 'isUnfilteredAndEndLess',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return `true` if the period has no custom filter and is guaranteed to be endless.
 *
 * Note that we can\'t check if a period is endless as soon as it has custom filters
 * because filters can emit `CarbonPeriod::END_ITERATION` to stop the iteration in
 * a way we can\'t predict without actually iterating the period.
 */',
                'startLine' => 1540,
                'endLine' => 1564,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'toArray' => [
                'name' => 'toArray',
                'parameters' => [
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
                'docComment' => '/**
 * Convert the date period into an array without changing current iteration state.
 *
 * @return CarbonInterface[]
 */',
                'startLine' => 1571,
                'endLine' => 1588,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'count' => [
                'name' => 'count',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Count dates in the date period.
 */',
                'startLine' => 1593,
                'endLine' => 1596,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'first' => [
                'name' => 'first',
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
                                    'name' => 'Carbon\\CarbonInterface',
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
                'docComment' => '/**
 * Return the first date in the date period.
 */',
                'startLine' => 1601,
                'endLine' => 1614,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'last' => [
                'name' => 'last',
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
                                    'name' => 'Carbon\\CarbonInterface',
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
                'docComment' => '/**
 * Return the last date in the date period.
 */',
                'startLine' => 1619,
                'endLine' => 1624,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            '__toString' => [
                'name' => '__toString',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the date period into a string.
 */',
                'startLine' => 1629,
                'endLine' => 1632,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            '__call' => [
                'name' => '__call',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1644,
                        'endLine' => 1644,
                        'startColumn' => 28,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
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
                        'startLine' => 1644,
                        'endLine' => 1644,
                        'startColumn' => 44,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
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
 * Add aliases for setters.
 *
 * CarbonPeriod::days(3)->hours(5)->invert()
 *     ->sinceNow()->until(\'2010-01-10\')
 *     ->filter(...)
 *     ->count()
 *
 * Note: We use magic method to let static and instance aliases with the same names.
 */',
                'startLine' => 1644,
                'endLine' => 1792,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'setTimezone' => [
                'name' => 'setTimezone',
                'parameters' => [
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeZone',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
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
                        'startLine' => 1797,
                        'endLine' => 1797,
                        'startColumn' => 33,
                        'endColumn' => 65,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the instance\'s timezone from a string or object and apply it to start/end.
 */',
                'startLine' => 1797,
                'endLine' => 1812,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'shiftTimezone' => [
                'name' => 'shiftTimezone',
                'parameters' => [
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeZone',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
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
                        'startLine' => 1817,
                        'endLine' => 1817,
                        'startColumn' => 35,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the instance\'s timezone from a string or object and add/subtract the offset difference to start/end.
 */',
                'startLine' => 1817,
                'endLine' => 1832,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'calculateEnd' => [
                'name' => 'calculateEnd',
                'parameters' => [
                    'rounding' => [
                        'name' => 'rounding',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1841,
                                'endLine' => 1841,
                                'startTokenPos' => 8657,
                                'startFilePos' => 63146,
                                'endTokenPos' => 8657,
                                'endFilePos' => 63149,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1841,
                        'endLine' => 1841,
                        'startColumn' => 34,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Carbon\\CarbonInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the end is set, else calculated from start and recurrences.
 *
 * @param string|null $rounding Optional rounding \'floor\', \'ceil\', \'round\' using the period interval.
 *
 * @return CarbonInterface
 */',
                'startLine' => 1841,
                'endLine' => 1858,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'getEndFromRecurrences' => [
                'name' => 'getEndFromRecurrences',
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
                                    'name' => 'Carbon\\CarbonInterface',
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
                'startLine' => 1860,
                'endLine' => 1886,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'iterateUntilEnd' => [
                'name' => 'iterateUntilEnd',
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
                                    'name' => 'Carbon\\CarbonInterface',
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
                'startLine' => 1888,
                'endLine' => 1902,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'overlaps' => [
                'name' => 'overlaps',
                'parameters' => [
                    'rangeOrRangeStart' => [
                        'name' => 'rangeOrRangeStart',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1913,
                        'endLine' => 1913,
                        'startColumn' => 30,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'rangeEnd' => [
                        'name' => 'rangeEnd',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1913,
                                'endLine' => 1913,
                                'startTokenPos' => 9078,
                                'startFilePos' => 65488,
                                'endTokenPos' => 9078,
                                'endFilePos' => 65491,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1913,
                        'endLine' => 1913,
                        'startColumn' => 56,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns true if the current period overlaps the given one (if 1 parameter passed)
 * or the period between 2 dates (if 2 parameters passed).
 *
 * @param CarbonPeriod|\\DateTimeInterface|Carbon|CarbonImmutable|string $rangeOrRangeStart
 * @param \\DateTimeInterface|Carbon|CarbonImmutable|string|null         $rangeEnd
 *
 * @return bool
 */',
                'startLine' => 1913,
                'endLine' => 1925,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'forEach' => [
                'name' => 'forEach',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1937,
                        'endLine' => 1937,
                        'startColumn' => 29,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'docComment' => '/**
 * Execute a given function on each date of the period.
 *
 * @example
 * ```
 * Carbon::create(\'2020-11-29\')->daysUntil(\'2020-12-24\')->forEach(function (Carbon $date) {
 *   echo $date->diffInDays(\'2020-12-25\')." days before Christmas!\\n";
 * });
 * ```
 */',
                'startLine' => 1937,
                'endLine' => 1942,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'map' => [
                'name' => 'map',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1955,
                        'endLine' => 1955,
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
                        'name' => 'Generator',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute a given function on each date of the period and yield the result of this function.
 *
 * @example
 * ```
 * $period = Carbon::create(\'2020-11-29\')->daysUntil(\'2020-12-24\');
 * echo implode("\\n", iterator_to_array($period->map(function (Carbon $date) {
 *   return $date->diffInDays(\'2020-12-25\').\' days before Christmas!\';
 * })));
 * ```
 */',
                'startLine' => 1955,
                'endLine' => 1960,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => true,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'eq' => [
                'name' => 'eq',
                'parameters' => [
                    'period' => [
                        'name' => 'period',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1968,
                        'endLine' => 1968,
                        'startColumn' => 24,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the instance is equal to another.
 * Warning: if options differ, instances will never be equal.
 *
 * @see equalTo()
 */',
                'startLine' => 1968,
                'endLine' => 1971,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'equalTo' => [
                'name' => 'equalTo',
                'parameters' => [
                    'period' => [
                        'name' => 'period',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1977,
                        'endLine' => 1977,
                        'startColumn' => 29,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the instance is equal to another.
 * Warning: if options differ, instances will never be equal.
 */',
                'startLine' => 1977,
                'endLine' => 1990,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'ne' => [
                'name' => 'ne',
                'parameters' => [
                    'period' => [
                        'name' => 'period',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1998,
                        'endLine' => 1998,
                        'startColumn' => 24,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the instance is not equal to another.
 * Warning: if options differ, instances will never be equal.
 *
 * @see notEqualTo()
 */',
                'startLine' => 1998,
                'endLine' => 2001,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'notEqualTo' => [
                'name' => 'notEqualTo',
                'parameters' => [
                    'period' => [
                        'name' => 'period',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2007,
                        'endLine' => 2007,
                        'startColumn' => 32,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the instance is not equal to another.
 * Warning: if options differ, instances will never be equal.
 */',
                'startLine' => 2007,
                'endLine' => 2010,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'startsBefore' => [
                'name' => 'startsBefore',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2016,
                                'endLine' => 2016,
                                'startTokenPos' => 9576,
                                'startFilePos' => 68651,
                                'endTokenPos' => 9576,
                                'endFilePos' => 68654,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2016,
                        'endLine' => 2016,
                        'startColumn' => 34,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the start date is before another given date.
 * (Rather start/end are included by options is ignored.)
 */',
                'startLine' => 2016,
                'endLine' => 2019,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'startsBeforeOrAt' => [
                'name' => 'startsBeforeOrAt',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2025,
                                'endLine' => 2025,
                                'startTokenPos' => 9619,
                                'startFilePos' => 68957,
                                'endTokenPos' => 9619,
                                'endFilePos' => 68960,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2025,
                        'endLine' => 2025,
                        'startColumn' => 38,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the start date is before or the same as a given date.
 * (Rather start/end are included by options is ignored.)
 */',
                'startLine' => 2025,
                'endLine' => 2028,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'startsAfter' => [
                'name' => 'startsAfter',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2034,
                                'endLine' => 2034,
                                'startTokenPos' => 9662,
                                'startFilePos' => 69257,
                                'endTokenPos' => 9662,
                                'endFilePos' => 69260,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2034,
                        'endLine' => 2034,
                        'startColumn' => 33,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the start date is after another given date.
 * (Rather start/end are included by options is ignored.)
 */',
                'startLine' => 2034,
                'endLine' => 2037,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'startsAfterOrAt' => [
                'name' => 'startsAfterOrAt',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2043,
                                'endLine' => 2043,
                                'startTokenPos' => 9705,
                                'startFilePos' => 69564,
                                'endTokenPos' => 9705,
                                'endFilePos' => 69567,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2043,
                        'endLine' => 2043,
                        'startColumn' => 37,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the start date is after or the same as a given date.
 * (Rather start/end are included by options is ignored.)
 */',
                'startLine' => 2043,
                'endLine' => 2046,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'startsAt' => [
                'name' => 'startsAt',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2052,
                                'endLine' => 2052,
                                'startTokenPos' => 9748,
                                'startFilePos' => 69864,
                                'endTokenPos' => 9748,
                                'endFilePos' => 69867,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2052,
                        'endLine' => 2052,
                        'startColumn' => 30,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the start date is the same as a given date.
 * (Rather start/end are included by options is ignored.)
 */',
                'startLine' => 2052,
                'endLine' => 2055,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'endsBefore' => [
                'name' => 'endsBefore',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2061,
                                'endLine' => 2061,
                                'startTokenPos' => 9791,
                                'startFilePos' => 70152,
                                'endTokenPos' => 9791,
                                'endFilePos' => 70155,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2061,
                        'endLine' => 2061,
                        'startColumn' => 32,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the end date is before another given date.
 * (Rather start/end are included by options is ignored.)
 */',
                'startLine' => 2061,
                'endLine' => 2064,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'endsBeforeOrAt' => [
                'name' => 'endsBeforeOrAt',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2070,
                                'endLine' => 2070,
                                'startTokenPos' => 9834,
                                'startFilePos' => 70454,
                                'endTokenPos' => 9834,
                                'endFilePos' => 70457,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2070,
                        'endLine' => 2070,
                        'startColumn' => 36,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the end date is before or the same as a given date.
 * (Rather start/end are included by options is ignored.)
 */',
                'startLine' => 2070,
                'endLine' => 2073,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'endsAfter' => [
                'name' => 'endsAfter',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2079,
                                'endLine' => 2079,
                                'startTokenPos' => 9877,
                                'startFilePos' => 70750,
                                'endTokenPos' => 9877,
                                'endFilePos' => 70753,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2079,
                        'endLine' => 2079,
                        'startColumn' => 31,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the end date is after another given date.
 * (Rather start/end are included by options is ignored.)
 */',
                'startLine' => 2079,
                'endLine' => 2082,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'endsAfterOrAt' => [
                'name' => 'endsAfterOrAt',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2088,
                                'endLine' => 2088,
                                'startTokenPos' => 9920,
                                'startFilePos' => 71053,
                                'endTokenPos' => 9920,
                                'endFilePos' => 71056,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2088,
                        'endLine' => 2088,
                        'startColumn' => 35,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the end date is after or the same as a given date.
 * (Rather start/end are included by options is ignored.)
 */',
                'startLine' => 2088,
                'endLine' => 2091,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'endsAt' => [
                'name' => 'endsAt',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2097,
                                'endLine' => 2097,
                                'startTokenPos' => 9963,
                                'startFilePos' => 71349,
                                'endTokenPos' => 9963,
                                'endFilePos' => 71352,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2097,
                        'endLine' => 2097,
                        'startColumn' => 28,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the end date is the same as a given date.
 * (Rather start/end are included by options is ignored.)
 */',
                'startLine' => 2097,
                'endLine' => 2100,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'isStarted' => [
                'name' => 'isStarted',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return true if start date is now or later.
 * (Rather start/end are included by options is ignored.)
 */',
                'startLine' => 2106,
                'endLine' => 2109,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'isEnded' => [
                'name' => 'isEnded',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return true if end date is now or later.
 * (Rather start/end are included by options is ignored.)
 */',
                'startLine' => 2115,
                'endLine' => 2118,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'isInProgress' => [
                'name' => 'isInProgress',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return true if now is between start date (included) and end date (excluded).
 * (Rather start/end are included by options is ignored.)
 */',
                'startLine' => 2124,
                'endLine' => 2127,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'roundUnit' => [
                'name' => 'roundUnit',
                'parameters' => [
                    'unit' => [
                        'name' => 'unit',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2133,
                        'endLine' => 2133,
                        'startColumn' => 9,
                        'endColumn' => 20,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 2134,
                                'endLine' => 2134,
                                'startTokenPos' => 10107,
                                'startFilePos' => 72393,
                                'endTokenPos' => 10107,
                                'endFilePos' => 72393,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    4 => [
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
                        'startLine' => 2134,
                        'endLine' => 2134,
                        'startColumn' => 9,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'function' => [
                        'name' => 'function',
                        'default' => [
                            'code' => '\'round\'',
                            'attributes' => [
                                'startLine' => 2135,
                                'endLine' => 2135,
                                'startTokenPos' => 10118,
                                'startFilePos' => 72432,
                                'endTokenPos' => 10118,
                                'endFilePos' => 72438,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 2135,
                        'endLine' => 2135,
                        'startColumn' => 9,
                        'endColumn' => 43,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Round the current instance at the given unit with given precision if specified and the given function.
 */',
                'startLine' => 2132,
                'endLine' => 2145,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'floorUnit' => [
                'name' => 'floorUnit',
                'parameters' => [
                    'unit' => [
                        'name' => 'unit',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2150,
                        'endLine' => 2150,
                        'startColumn' => 31,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 2150,
                                'endLine' => 2150,
                                'startTokenPos' => 10259,
                                'startFilePos' => 73054,
                                'endTokenPos' => 10259,
                                'endFilePos' => 73054,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    4 => [
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
                        'startLine' => 2150,
                        'endLine' => 2150,
                        'startColumn' => 45,
                        'endColumn' => 93,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Truncate the current instance at the given unit with given precision if specified.
 */',
                'startLine' => 2150,
                'endLine' => 2153,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'ceilUnit' => [
                'name' => 'ceilUnit',
                'parameters' => [
                    'unit' => [
                        'name' => 'unit',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2158,
                        'endLine' => 2158,
                        'startColumn' => 30,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 2158,
                                'endLine' => 2158,
                                'startTokenPos' => 10312,
                                'startFilePos' => 73332,
                                'endTokenPos' => 10312,
                                'endFilePos' => 73332,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    4 => [
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
                        'startLine' => 2158,
                        'endLine' => 2158,
                        'startColumn' => 44,
                        'endColumn' => 92,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Ceil the current instance at the given unit with given precision if specified.
 */',
                'startLine' => 2158,
                'endLine' => 2161,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'round' => [
                'name' => 'round',
                'parameters' => [
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2167,
                                'endLine' => 2167,
                                'startTokenPos' => 10361,
                                'startFilePos' => 73622,
                                'endTokenPos' => 10361,
                                'endFilePos' => 73625,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    4 => [
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
                        'startLine' => 2167,
                        'endLine' => 2167,
                        'startColumn' => 9,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'function' => [
                        'name' => 'function',
                        'default' => [
                            'code' => '\'round\'',
                            'attributes' => [
                                'startLine' => 2168,
                                'endLine' => 2168,
                                'startTokenPos' => 10372,
                                'startFilePos' => 73664,
                                'endTokenPos' => 10372,
                                'endFilePos' => 73670,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 2168,
                        'endLine' => 2168,
                        'startColumn' => 9,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Round the current instance second with given precision if specified (else period interval is used).
 */',
                'startLine' => 2166,
                'endLine' => 2174,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'floor' => [
                'name' => 'floor',
                'parameters' => [
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2179,
                                'endLine' => 2179,
                                'startTokenPos' => 10443,
                                'startFilePos' => 74076,
                                'endTokenPos' => 10443,
                                'endFilePos' => 74079,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    4 => [
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
                        'startLine' => 2179,
                        'endLine' => 2179,
                        'startColumn' => 27,
                        'endColumn' => 78,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Round the current instance second with given precision if specified (else period interval is used).
 */',
                'startLine' => 2179,
                'endLine' => 2182,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'ceil' => [
                'name' => 'ceil',
                'parameters' => [
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2187,
                                'endLine' => 2187,
                                'startTokenPos' => 10488,
                                'startFilePos' => 74348,
                                'endTokenPos' => 10488,
                                'endFilePos' => 74351,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    4 => [
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
                        'startLine' => 2187,
                        'endLine' => 2187,
                        'startColumn' => 26,
                        'endColumn' => 77,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Ceil the current instance second with given precision if specified (else period interval is used).
 */',
                'startLine' => 2187,
                'endLine' => 2190,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'jsonSerialize' => [
                'name' => 'jsonSerialize',
                'parameters' => [
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
                'docComment' => '/**
 * Specify data which should be serialized to JSON.
 *
 * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
 *
 * @return CarbonInterface[]
 */',
                'startLine' => 2199,
                'endLine' => 2202,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'contains' => [
                'name' => 'contains',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2207,
                                'endLine' => 2207,
                                'startTokenPos' => 10551,
                                'startFilePos' => 74828,
                                'endTokenPos' => 10551,
                                'endFilePos' => 74831,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2207,
                        'endLine' => 2207,
                        'startColumn' => 30,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return true if the given date is between start and end.
 */',
                'startLine' => 2207,
                'endLine' => 2213,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'follows' => [
                'name' => 'follows',
                'parameters' => [
                    'period' => [
                        'name' => 'period',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2220,
                        'endLine' => 2220,
                        'startColumn' => 29,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2220,
                        'endLine' => 2220,
                        'startColumn' => 44,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return true if the current period follows a given other period (with no overlap).
 * For instance, [2019-08-01 -> 2019-08-12] follows [2019-07-29 -> 2019-07-31]
 * Note than in this example, follows() would be false if 2019-08-01 or 2019-07-31 was excluded by options.
 */',
                'startLine' => 2220,
                'endLine' => 2225,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'isFollowedBy' => [
                'name' => 'isFollowedBy',
                'parameters' => [
                    'period' => [
                        'name' => 'period',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2232,
                        'endLine' => 2232,
                        'startColumn' => 34,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2232,
                        'endLine' => 2232,
                        'startColumn' => 49,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return true if the given other period follows the current one (with no overlap).
 * For instance, [2019-07-29 -> 2019-07-31] is followed by [2019-08-01 -> 2019-08-12]
 * Note than in this example, isFollowedBy() would be false if 2019-08-01 or 2019-07-31 was excluded by options.
 */',
                'startLine' => 2232,
                'endLine' => 2237,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'isConsecutiveWith' => [
                'name' => 'isConsecutiveWith',
                'parameters' => [
                    'period' => [
                        'name' => 'period',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2245,
                        'endLine' => 2245,
                        'startColumn' => 39,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2245,
                        'endLine' => 2245,
                        'startColumn' => 54,
                        'endColumn' => 72,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return true if the given period either follows or is followed by the current one.
 *
 * @see follows()
 * @see isFollowedBy()
 */',
                'startLine' => 2245,
                'endLine' => 2248,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            '__debugInfo' => [
                'name' => '__debugInfo',
                'parameters' => [
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
                'startLine' => 2250,
                'endLine' => 2264,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            '__unserialize' => [
                'name' => '__unserialize',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 2266,
                        'endLine' => 2266,
                        'startColumn' => 35,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'startLine' => 2266,
                'endLine' => 2345,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'updateInternalState' => [
                'name' => 'updateInternalState',
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
                'docComment' => '/**
 * Update properties after removing built-in filters.
 */',
                'startLine' => 2350,
                'endLine' => 2359,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'createFilterTuple' => [
                'name' => 'createFilterTuple',
                'parameters' => [
                    'parameters' => [
                        'name' => 'parameters',
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
                        'startLine' => 2366,
                        'endLine' => 2366,
                        'startColumn' => 42,
                        'endColumn' => 58,
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
                'docComment' => '/**
 * Create a filter tuple from raw parameters.
 *
 * Will create an automatic filter callback for one of Carbon\'s is* methods.
 */',
                'startLine' => 2366,
                'endLine' => 2375,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'isCarbonPredicateMethod' => [
                'name' => 'isCarbonPredicateMethod',
                'parameters' => [
                    'callable' => [
                        'name' => 'callable',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 2381,
                        'endLine' => 2381,
                        'startColumn' => 48,
                        'endColumn' => 72,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Return whether given callable is a string pointing to one of Carbon\'s is* methods
 * and should be automatically converted to a filter callback.
 */',
                'startLine' => 2381,
                'endLine' => 2385,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'filterRecurrences' => [
                'name' => 'filterRecurrences',
                'parameters' => [
                    'current' => [
                        'name' => 'current',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\CarbonInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2392,
                        'endLine' => 2392,
                        'startColumn' => 42,
                        'endColumn' => 65,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2392,
                        'endLine' => 2392,
                        'startColumn' => 68,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'bool',
                                    'isIdentifier' => true,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'callable',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Recurrences filter callback (limits number of recurrences).
 *
 * @SuppressWarnings(UnusedFormalParameter)
 */',
                'startLine' => 2392,
                'endLine' => 2399,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'filterEndDate' => [
                'name' => 'filterEndDate',
                'parameters' => [
                    'current' => [
                        'name' => 'current',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\CarbonInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2406,
                        'endLine' => 2406,
                        'startColumn' => 38,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'bool',
                                    'isIdentifier' => true,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'callable',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * End date filter callback.
 *
 * @return bool|static::END_ITERATION
 */',
                'startLine' => 2406,
                'endLine' => 2417,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'endIteration' => [
                'name' => 'endIteration',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'callable',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * End iteration filter callback.
 *
 * @return static::END_ITERATION
 */',
                'startLine' => 2424,
                'endLine' => 2427,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'handleChangedParameters' => [
                'name' => 'handleChangedParameters',
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
                'docComment' => '/**
 * Handle change of the parameters.
 */',
                'startLine' => 2432,
                'endLine' => 2441,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'validateCurrentDate' => [
                'name' => 'validateCurrentDate',
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
                                    'name' => 'bool',
                                    'isIdentifier' => true,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'callable',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Validate current date and stop iteration when necessary.
 *
 * Returns true when current date is valid, false if it is not, or static::END_ITERATION
 * when iteration should be stopped.
 *
 * @return bool|static::END_ITERATION
 */',
                'startLine' => 2451,
                'endLine' => 2459,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'checkFilters' => [
                'name' => 'checkFilters',
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
                                    'name' => 'bool',
                                    'isIdentifier' => true,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'callable',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Check whether current value and key pass all the filters.
 *
 * @return bool|static::END_ITERATION
 */',
                'startLine' => 2466,
                'endLine' => 2483,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'prepareForReturn' => [
                'name' => 'prepareForReturn',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\CarbonInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2492,
                        'endLine' => 2492,
                        'startColumn' => 41,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepare given date to be returned to the external logic.
 *
 * @param CarbonInterface $date
 *
 * @return CarbonInterface
 */',
                'startLine' => 2492,
                'endLine' => 2501,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'incrementCurrentDateUntilValid' => [
                'name' => 'incrementCurrentDateUntilValid',
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
                'docComment' => '/**
 * Keep incrementing the current date until a valid date is found or the iteration is ended.
 *
 * @throws RuntimeException
 */',
                'startLine' => 2508,
                'endLine' => 2521,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'callMacro' => [
                'name' => 'callMacro',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2526,
                        'endLine' => 2526,
                        'startColumn' => 34,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
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
                        'startLine' => 2526,
                        'endLine' => 2526,
                        'startColumn' => 48,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
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
 * Call given macro.
 */',
                'startLine' => 2526,
                'endLine' => 2537,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'resolveCarbon' => [
                'name' => 'resolveCarbon',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2547,
                                'endLine' => 2547,
                                'startTokenPos' => 12448,
                                'startFilePos' => 85671,
                                'endTokenPos' => 12448,
                                'endFilePos' => 85674,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2547,
                        'endLine' => 2547,
                        'startColumn' => 38,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the Carbon instance passed through, a now instance in the same timezone
 * if null given or parse the input if string given.
 *
 * @param \\Carbon\\Carbon|\\Carbon\\CarbonPeriod|\\Carbon\\CarbonInterval|\\DateInterval|\\DatePeriod|\\DateTimeInterface|string|null $date
 *
 * @return \\Carbon\\CarbonInterface
 */',
                'startLine' => 2547,
                'endLine' => 2550,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'resolveCarbonPeriod' => [
                'name' => 'resolveCarbonPeriod',
                'parameters' => [
                    'period' => [
                        'name' => 'period',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2555,
                        'endLine' => 2555,
                        'startColumn' => 44,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2555,
                        'endLine' => 2555,
                        'startColumn' => 59,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Resolve passed arguments or DatePeriod to a CarbonPeriod object.
 */',
                'startLine' => 2555,
                'endLine' => 2564,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 2,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'orderCouple' => [
                'name' => 'orderCouple',
                'parameters' => [
                    'first' => [
                        'name' => 'first',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2566,
                        'endLine' => 2566,
                        'startColumn' => 34,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'second' => [
                        'name' => 'second',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2566,
                        'endLine' => 2566,
                        'startColumn' => 42,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
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
                'startLine' => 2566,
                'endLine' => 2569,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'makeDateTime' => [
                'name' => 'makeDateTime',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2571,
                        'endLine' => 2571,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'DateTimeInterface',
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
                'startLine' => 2571,
                'endLine' => 2597,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'isInfiniteDate' => [
                'name' => 'isInfiniteDate',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2599,
                        'endLine' => 2599,
                        'startColumn' => 37,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 2599,
                'endLine' => 2602,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'rawDate' => [
                'name' => 'rawDate',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2604,
                        'endLine' => 2604,
                        'startColumn' => 30,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'DateTimeInterface',
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
                'startLine' => 2604,
                'endLine' => 2623,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'setDefaultParameters' => [
                'name' => 'setDefaultParameters',
                'parameters' => [
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'array',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => true,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2625,
                        'endLine' => 2625,
                        'startColumn' => 50,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'defaults' => [
                        'name' => 'defaults',
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
                        'startLine' => 2625,
                        'endLine' => 2625,
                        'startColumn' => 70,
                        'endColumn' => 84,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
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
                'startLine' => 2625,
                'endLine' => 2632,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'setFromAssociativeArray' => [
                'name' => 'setFromAssociativeArray',
                'parameters' => [
                    'parameters' => [
                        'name' => 'parameters',
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
                        'startLine' => 2634,
                        'endLine' => 2634,
                        'startColumn' => 46,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'startLine' => 2634,
                'endLine' => 2659,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'configureTimezone' => [
                'name' => 'configureTimezone',
                'parameters' => [
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'DateTimeZone',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2661,
                        'endLine' => 2661,
                        'startColumn' => 40,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'sortedArguments' => [
                        'name' => 'sortedArguments',
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
                        'startLine' => 2661,
                        'endLine' => 2661,
                        'startColumn' => 64,
                        'endColumn' => 85,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'originalArguments' => [
                        'name' => 'originalArguments',
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
                        'startLine' => 2661,
                        'endLine' => 2661,
                        'startColumn' => 88,
                        'endColumn' => 111,
                        'parameterIndex' => 2,
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
                'startLine' => 2661,
                'endLine' => 2674,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
            'initializeSerialization' => [
                'name' => 'initializeSerialization',
                'parameters' => [
                    'values' => [
                        'name' => 'values',
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
                        'startLine' => 2676,
                        'endLine' => 2676,
                        'startColumn' => 46,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'startLine' => 2676,
                'endLine' => 2717,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon',
                'declaringClassName' => 'Carbon\\CarbonPeriod',
                'implementingClassName' => 'Carbon\\CarbonPeriod',
                'currentClassName' => 'Carbon\\CarbonPeriod',
                'aliasName' => null,
            ],
        ],
        'traitsData' => [
            'aliases' => [
                'Carbon\\Traits\\Mixin' => [
                    0 => [
                        'alias' => 'baseMixin',
                        'method' => 'mixin',
                        'hash' => 'carbon\\traits\\mixin::mixin',
                    ],
                ],
                'Carbon\\Traits\\Options' => [
                    0 => [
                        'alias' => 'baseDebugInfo',
                        'method' => '__debugInfo',
                        'hash' => 'carbon\\traits\\options::__debuginfo',
                    ],
                ],
            ],
            'modifiers' => [
            ],
            'precedences' => [
            ],
            'hashes' => [
                'carbon\\traits\\mixin::mixin' => 'Carbon\\Traits\\Mixin::mixin',
                'carbon\\traits\\options::__debuginfo' => 'Carbon\\Traits\\Options::__debugInfo',
            ],
        ],
    ],
]);
