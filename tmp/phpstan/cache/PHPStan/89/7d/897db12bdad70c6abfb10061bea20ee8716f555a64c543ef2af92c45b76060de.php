<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../dompdf/dompdf/src/Canvas.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Dompdf\Canvas
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-f076a318e78fc8309b66cbcad3f89da7d0114640e8bec3461b8c9d3295bd3e77-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Dompdf\\Canvas',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../dompdf/dompdf/src/Canvas.php',
            ],
        ],
        'namespace' => 'Dompdf',
        'name' => 'Dompdf\\Canvas',
        'shortName' => 'Canvas',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Main rendering interface
 *
 * Currently {@link Dompdf\\Adapter\\CPDF}, {@link Dompdf\\Adapter\\PDFLib}, and {@link Dompdf\\Adapter\\GD}
 * implement this interface.
 *
 * Implementations should measure x and y increasing to the left and down,
 * respectively, with the origin in the top left corner.  Implementations
 * are free to use a unit other than points for length, but I can\'t
 * guarantee that the results will look any good.
 *
 * @package dompdf
 */',
        'attributes' => [
        ],
        'startLine' => 22,
        'endLine' => 487,
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
            '__construct' => [
                'name' => '__construct',
                'parameters' => [
                    'paper' => [
                        'name' => 'paper',
                        'default' => [
                            'code' => '"letter"',
                            'attributes' => [
                                'startLine' => 30,
                                'endLine' => 30,
                                'startTokenPos' => 28,
                                'startFilePos' => 1150,
                                'endTokenPos' => 28,
                                'endFilePos' => 1157,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 30,
                        'endLine' => 30,
                        'startColumn' => 33,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'orientation' => [
                        'name' => 'orientation',
                        'default' => [
                            'code' => '"portrait"',
                            'attributes' => [
                                'startLine' => 30,
                                'endLine' => 30,
                                'startTokenPos' => 37,
                                'startFilePos' => 1182,
                                'endTokenPos' => 37,
                                'endFilePos' => 1191,
                            ],
                        ],
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
                        'startLine' => 30,
                        'endLine' => 30,
                        'startColumn' => 52,
                        'endColumn' => 83,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'dompdf' => [
                        'name' => 'dompdf',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 30,
                                'endLine' => 30,
                                'startTokenPos' => 47,
                                'startFilePos' => 1212,
                                'endTokenPos' => 47,
                                'endFilePos' => 1215,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Dompdf\\Dompdf',
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
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 30,
                        'endLine' => 30,
                        'startColumn' => 86,
                        'endColumn' => 107,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @param string|float[] $paper       The paper size to use as either a standard paper size (see {@link Dompdf\\Adapter\\CPDF::$PAPER_SIZES})
 *                                    or an array of the form `[x1, y1, x2, y2]` (typically `[0, 0, width, height]`).
 * @param string         $orientation The paper orientation, either `portrait` or `landscape`.
 * @param Dompdf|null    $dompdf      The Dompdf instance.
 */',
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 109,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'get_dompdf' => [
                'name' => 'get_dompdf',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @return Dompdf
 */',
                'startLine' => 35,
                'endLine' => 35,
                'startColumn' => 5,
                'endColumn' => 26,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'get_page_number' => [
                'name' => 'get_page_number',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the current page number
 *
 * @return int
 */',
                'startLine' => 42,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 31,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'get_page_count' => [
                'name' => 'get_page_count',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the total number of pages in the document
 *
 * @return int
 */',
                'startLine' => 49,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 30,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'set_page_count' => [
                'name' => 'set_page_count',
                'parameters' => [
                    'count' => [
                        'name' => 'count',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 56,
                        'endLine' => 56,
                        'startColumn' => 29,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Sets the total number of pages
 *
 * @param int $count
 */',
                'startLine' => 56,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 36,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'line' => [
                'name' => 'line',
                'parameters' => [
                    'x1' => [
                        'name' => 'x1',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 74,
                        'endLine' => 74,
                        'startColumn' => 19,
                        'endColumn' => 21,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'y1' => [
                        'name' => 'y1',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 74,
                        'endLine' => 74,
                        'startColumn' => 24,
                        'endColumn' => 26,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'x2' => [
                        'name' => 'x2',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 74,
                        'endLine' => 74,
                        'startColumn' => 29,
                        'endColumn' => 31,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'y2' => [
                        'name' => 'y2',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 74,
                        'endLine' => 74,
                        'startColumn' => 34,
                        'endColumn' => 36,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'color' => [
                        'name' => 'color',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 74,
                        'endLine' => 74,
                        'startColumn' => 39,
                        'endColumn' => 44,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                    'width' => [
                        'name' => 'width',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 74,
                        'endLine' => 74,
                        'startColumn' => 47,
                        'endColumn' => 52,
                        'parameterIndex' => 5,
                        'isOptional' => false,
                    ],
                    'style' => [
                        'name' => 'style',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 74,
                                'endLine' => 74,
                                'startTokenPos' => 116,
                                'startFilePos' => 2304,
                                'endTokenPos' => 117,
                                'endFilePos' => 2305,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 74,
                        'endLine' => 74,
                        'startColumn' => 55,
                        'endColumn' => 65,
                        'parameterIndex' => 6,
                        'isOptional' => true,
                    ],
                    'cap' => [
                        'name' => 'cap',
                        'default' => [
                            'code' => '"butt"',
                            'attributes' => [
                                'startLine' => 74,
                                'endLine' => 74,
                                'startTokenPos' => 124,
                                'startFilePos' => 2315,
                                'endTokenPos' => 124,
                                'endFilePos' => 2320,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 74,
                        'endLine' => 74,
                        'startColumn' => 68,
                        'endColumn' => 80,
                        'parameterIndex' => 7,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Draws a line from x1,y1 to x2,y2
 *
 * See {@link Cpdf::setLineStyle()} for a description of the format of the
 * $style and $cap parameters (aka dash and cap).
 *
 * @param float  $x1
 * @param float  $y1
 * @param float  $x2
 * @param float  $y2
 * @param array  $color Color array in the format `[r, g, b, "alpha" => alpha]`
 *                      where r, g, b, and alpha are float values between 0 and 1
 * @param float  $width
 * @param array  $style
 * @param string $cap   `butt`, `round`, or `square`
 */',
                'startLine' => 74,
                'endLine' => 74,
                'startColumn' => 5,
                'endColumn' => 82,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'arc' => [
                'name' => 'arc',
                'parameters' => [
                    'x' => [
                        'name' => 'x',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 18,
                        'endColumn' => 19,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'y' => [
                        'name' => 'y',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 22,
                        'endColumn' => 23,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'r1' => [
                        'name' => 'r1',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 26,
                        'endColumn' => 28,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'r2' => [
                        'name' => 'r2',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 31,
                        'endColumn' => 33,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'astart' => [
                        'name' => 'astart',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 36,
                        'endColumn' => 42,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                    'aend' => [
                        'name' => 'aend',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 45,
                        'endColumn' => 49,
                        'parameterIndex' => 5,
                        'isOptional' => false,
                    ],
                    'color' => [
                        'name' => 'color',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 52,
                        'endColumn' => 57,
                        'parameterIndex' => 6,
                        'isOptional' => false,
                    ],
                    'width' => [
                        'name' => 'width',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 60,
                        'endColumn' => 65,
                        'parameterIndex' => 7,
                        'isOptional' => false,
                    ],
                    'style' => [
                        'name' => 'style',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 94,
                                'endLine' => 94,
                                'startTokenPos' => 162,
                                'startFilePos' => 3153,
                                'endTokenPos' => 163,
                                'endFilePos' => 3154,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 68,
                        'endColumn' => 78,
                        'parameterIndex' => 8,
                        'isOptional' => true,
                    ],
                    'cap' => [
                        'name' => 'cap',
                        'default' => [
                            'code' => '"butt"',
                            'attributes' => [
                                'startLine' => 94,
                                'endLine' => 94,
                                'startTokenPos' => 170,
                                'startFilePos' => 3164,
                                'endTokenPos' => 170,
                                'endFilePos' => 3169,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 81,
                        'endColumn' => 93,
                        'parameterIndex' => 9,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Draws an arc
 *
 * See {@link Cpdf::setLineStyle()} for a description of the format of the
 * $style and $cap parameters (aka dash and cap).
 *
 * @param float  $x      X coordinate of the arc
 * @param float  $y      Y coordinate of the arc
 * @param float  $r1     Radius 1
 * @param float  $r2     Radius 2
 * @param float  $astart Start angle in degrees
 * @param float  $aend   End angle in degrees
 * @param array  $color  Color array in the format `[r, g, b, "alpha" => alpha]`
 *                       where r, g, b, and alpha are float values between 0 and 1
 * @param float  $width
 * @param array  $style
 * @param string $cap   `butt`, `round`, or `square`
 */',
                'startLine' => 94,
                'endLine' => 94,
                'startColumn' => 5,
                'endColumn' => 95,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'rectangle' => [
                'name' => 'rectangle',
                'parameters' => [
                    'x1' => [
                        'name' => 'x1',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 24,
                        'endColumn' => 26,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'y1' => [
                        'name' => 'y1',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 29,
                        'endColumn' => 31,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'w' => [
                        'name' => 'w',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 34,
                        'endColumn' => 35,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'h' => [
                        'name' => 'h',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 38,
                        'endColumn' => 39,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'color' => [
                        'name' => 'color',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 42,
                        'endColumn' => 47,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                    'width' => [
                        'name' => 'width',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 50,
                        'endColumn' => 55,
                        'parameterIndex' => 5,
                        'isOptional' => false,
                    ],
                    'style' => [
                        'name' => 'style',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 112,
                                'endLine' => 112,
                                'startTokenPos' => 202,
                                'startFilePos' => 3846,
                                'endTokenPos' => 203,
                                'endFilePos' => 3847,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 58,
                        'endColumn' => 68,
                        'parameterIndex' => 6,
                        'isOptional' => true,
                    ],
                    'cap' => [
                        'name' => 'cap',
                        'default' => [
                            'code' => '"butt"',
                            'attributes' => [
                                'startLine' => 112,
                                'endLine' => 112,
                                'startTokenPos' => 210,
                                'startFilePos' => 3857,
                                'endTokenPos' => 210,
                                'endFilePos' => 3862,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 71,
                        'endColumn' => 83,
                        'parameterIndex' => 7,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Draws a rectangle at x1,y1 with width w and height h
 *
 * See {@link Cpdf::setLineStyle()} for a description of the format of the
 * $style and $cap parameters (aka dash and cap).
 *
 * @param float  $x1
 * @param float  $y1
 * @param float  $w
 * @param float  $h
 * @param array  $color  Color array in the format `[r, g, b, "alpha" => alpha]`
 *                       where r, g, b, and alpha are float values between 0 and 1
 * @param float  $width
 * @param array  $style
 * @param string $cap   `butt`, `round`, or `square`
 */',
                'startLine' => 112,
                'endLine' => 112,
                'startColumn' => 5,
                'endColumn' => 85,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'filled_rectangle' => [
                'name' => 'filled_rectangle',
                'parameters' => [
                    'x1' => [
                        'name' => 'x1',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 124,
                        'endLine' => 124,
                        'startColumn' => 31,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'y1' => [
                        'name' => 'y1',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 124,
                        'endLine' => 124,
                        'startColumn' => 36,
                        'endColumn' => 38,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'w' => [
                        'name' => 'w',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 124,
                        'endLine' => 124,
                        'startColumn' => 41,
                        'endColumn' => 42,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'h' => [
                        'name' => 'h',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 124,
                        'endLine' => 124,
                        'startColumn' => 45,
                        'endColumn' => 46,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'color' => [
                        'name' => 'color',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 124,
                        'endLine' => 124,
                        'startColumn' => 49,
                        'endColumn' => 54,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Draws a filled rectangle at x1,y1 with width w and height h
 *
 * @param float $x1
 * @param float $y1
 * @param float $w
 * @param float $h
 * @param array $color Color array in the format `[r, g, b, "alpha" => alpha]`
 *                     where r, g, b, and alpha are float values between 0 and 1
 */',
                'startLine' => 124,
                'endLine' => 124,
                'startColumn' => 5,
                'endColumn' => 56,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'clipping_rectangle' => [
                'name' => 'clipping_rectangle',
                'parameters' => [
                    'x1' => [
                        'name' => 'x1',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 33,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'y1' => [
                        'name' => 'y1',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 38,
                        'endColumn' => 40,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'w' => [
                        'name' => 'w',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 43,
                        'endColumn' => 44,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'h' => [
                        'name' => 'h',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 47,
                        'endColumn' => 48,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Starts a clipping rectangle at x1,y1 with width w and height h
 *
 * @param float $x1
 * @param float $y1
 * @param float $w
 * @param float $h
 */',
                'startLine' => 134,
                'endLine' => 134,
                'startColumn' => 5,
                'endColumn' => 50,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'clipping_roundrectangle' => [
                'name' => 'clipping_roundrectangle',
                'parameters' => [
                    'x1' => [
                        'name' => 'x1',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 148,
                        'endLine' => 148,
                        'startColumn' => 38,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'y1' => [
                        'name' => 'y1',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 148,
                        'endLine' => 148,
                        'startColumn' => 43,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'w' => [
                        'name' => 'w',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 148,
                        'endLine' => 148,
                        'startColumn' => 48,
                        'endColumn' => 49,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'h' => [
                        'name' => 'h',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 148,
                        'endLine' => 148,
                        'startColumn' => 52,
                        'endColumn' => 53,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'tl' => [
                        'name' => 'tl',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 148,
                        'endLine' => 148,
                        'startColumn' => 56,
                        'endColumn' => 58,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                    'tr' => [
                        'name' => 'tr',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 148,
                        'endLine' => 148,
                        'startColumn' => 61,
                        'endColumn' => 63,
                        'parameterIndex' => 5,
                        'isOptional' => false,
                    ],
                    'br' => [
                        'name' => 'br',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 148,
                        'endLine' => 148,
                        'startColumn' => 66,
                        'endColumn' => 68,
                        'parameterIndex' => 6,
                        'isOptional' => false,
                    ],
                    'bl' => [
                        'name' => 'bl',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 148,
                        'endLine' => 148,
                        'startColumn' => 71,
                        'endColumn' => 73,
                        'parameterIndex' => 7,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Starts a rounded clipping rectangle at x1,y1 with width w and height h
 *
 * @param float $x1
 * @param float $y1
 * @param float $w
 * @param float $h
 * @param float $tl
 * @param float $tr
 * @param float $br
 * @param float $bl
 */',
                'startLine' => 148,
                'endLine' => 148,
                'startColumn' => 5,
                'endColumn' => 75,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'clipping_polygon' => [
                'name' => 'clipping_polygon',
                'parameters' => [
                    'points' => [
                        'name' => 'points',
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
                        'startLine' => 155,
                        'endLine' => 155,
                        'startColumn' => 38,
                        'endColumn' => 50,
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
 * Starts a clipping polygon
 *
 * @param float[] $points
 */',
                'startLine' => 155,
                'endLine' => 155,
                'startColumn' => 5,
                'endColumn' => 58,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'clipping_end' => [
                'name' => 'clipping_end',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Ends the last clipping shape
 */',
                'startLine' => 160,
                'endLine' => 160,
                'startColumn' => 5,
                'endColumn' => 28,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'page_script' => [
                'name' => 'page_script',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 174,
                        'endLine' => 174,
                        'startColumn' => 33,
                        'endColumn' => 41,
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
 * Processes a callback on every page.
 *
 * The callback function receives the four parameters `int $pageNumber`,
 * `int $pageCount`, `Canvas $canvas`, and `FontMetrics $fontMetrics`, in
 * that order.
 *
 * This function can be used to add page numbers to all pages after the
 * first one, for example.
 *
 * @param callable $callback The callback function to process on every page
 */',
                'startLine' => 174,
                'endLine' => 174,
                'startColumn' => 5,
                'endColumn' => 49,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'page_text' => [
                'name' => 'page_text',
                'parameters' => [
                    'x' => [
                        'name' => 'x',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 193,
                        'endLine' => 193,
                        'startColumn' => 31,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'y' => [
                        'name' => 'y',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 193,
                        'endLine' => 193,
                        'startColumn' => 35,
                        'endColumn' => 36,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'text' => [
                        'name' => 'text',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 193,
                        'endLine' => 193,
                        'startColumn' => 39,
                        'endColumn' => 43,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'font' => [
                        'name' => 'font',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 193,
                        'endLine' => 193,
                        'startColumn' => 46,
                        'endColumn' => 50,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'size' => [
                        'name' => 'size',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 193,
                        'endLine' => 193,
                        'startColumn' => 53,
                        'endColumn' => 57,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                    'color' => [
                        'name' => 'color',
                        'default' => [
                            'code' => '[0, 0, 0]',
                            'attributes' => [
                                'startLine' => 193,
                                'endLine' => 193,
                                'startTokenPos' => 354,
                                'startFilePos' => 6495,
                                'endTokenPos' => 362,
                                'endFilePos' => 6503,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 193,
                        'endLine' => 193,
                        'startColumn' => 60,
                        'endColumn' => 77,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                    'word_space' => [
                        'name' => 'word_space',
                        'default' => [
                            'code' => '0.0',
                            'attributes' => [
                                'startLine' => 193,
                                'endLine' => 193,
                                'startTokenPos' => 369,
                                'startFilePos' => 6520,
                                'endTokenPos' => 369,
                                'endFilePos' => 6522,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 193,
                        'endLine' => 193,
                        'startColumn' => 80,
                        'endColumn' => 96,
                        'parameterIndex' => 6,
                        'isOptional' => true,
                    ],
                    'char_space' => [
                        'name' => 'char_space',
                        'default' => [
                            'code' => '0.0',
                            'attributes' => [
                                'startLine' => 193,
                                'endLine' => 193,
                                'startTokenPos' => 376,
                                'startFilePos' => 6539,
                                'endTokenPos' => 376,
                                'endFilePos' => 6541,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 193,
                        'endLine' => 193,
                        'startColumn' => 99,
                        'endColumn' => 115,
                        'parameterIndex' => 7,
                        'isOptional' => true,
                    ],
                    'angle' => [
                        'name' => 'angle',
                        'default' => [
                            'code' => '0.0',
                            'attributes' => [
                                'startLine' => 193,
                                'endLine' => 193,
                                'startTokenPos' => 383,
                                'startFilePos' => 6553,
                                'endTokenPos' => 383,
                                'endFilePos' => 6555,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 193,
                        'endLine' => 193,
                        'startColumn' => 118,
                        'endColumn' => 129,
                        'parameterIndex' => 8,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Writes text at the specified x and y coordinates on every page.
 *
 * The strings \'{PAGE_NUM}\' and \'{PAGE_COUNT}\' are automatically replaced
 * with their current values.
 *
 * @param float  $x
 * @param float  $y
 * @param string $text       The text to write
 * @param string $font       The font file to use
 * @param float  $size       The font size, in points
 * @param array  $color      Color array in the format `[r, g, b, "alpha" => alpha]`
 *                           where r, g, b, and alpha are float values between 0 and 1
 * @param float  $word_space Word spacing adjustment
 * @param float  $char_space Char spacing adjustment
 * @param float  $angle      Angle to write the text at, measured clockwise starting from the x-axis
 */',
                'startLine' => 193,
                'endLine' => 193,
                'startColumn' => 5,
                'endColumn' => 131,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'page_line' => [
                'name' => 'page_line',
                'parameters' => [
                    'x1' => [
                        'name' => 'x1',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 31,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'y1' => [
                        'name' => 'y1',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 36,
                        'endColumn' => 38,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'x2' => [
                        'name' => 'x2',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 41,
                        'endColumn' => 43,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'y2' => [
                        'name' => 'y2',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 46,
                        'endColumn' => 48,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'color' => [
                        'name' => 'color',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 51,
                        'endColumn' => 56,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                    'width' => [
                        'name' => 'width',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 59,
                        'endColumn' => 64,
                        'parameterIndex' => 5,
                        'isOptional' => false,
                    ],
                    'style' => [
                        'name' => 'style',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 207,
                                'endLine' => 207,
                                'startTokenPos' => 417,
                                'startFilePos' => 7040,
                                'endTokenPos' => 418,
                                'endFilePos' => 7041,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 67,
                        'endColumn' => 77,
                        'parameterIndex' => 6,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Draws a line at the specified coordinates on every page.
 *
 * @param float $x1
 * @param float $y1
 * @param float $x2
 * @param float $y2
 * @param array $color Color array in the format `[r, g, b, "alpha" => alpha]`
 *                     where r, g, b, and alpha are float values between 0 and 1
 * @param float $width
 * @param array $style
 */',
                'startLine' => 207,
                'endLine' => 207,
                'startColumn' => 5,
                'endColumn' => 79,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'save' => [
                'name' => 'save',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Save current state
 */',
                'startLine' => 212,
                'endLine' => 212,
                'startColumn' => 5,
                'endColumn' => 20,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'restore' => [
                'name' => 'restore',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Restore last state
 */',
                'startLine' => 217,
                'endLine' => 217,
                'startColumn' => 5,
                'endColumn' => 23,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'rotate' => [
                'name' => 'rotate',
                'parameters' => [
                    'angle' => [
                        'name' => 'angle',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 226,
                        'endLine' => 226,
                        'startColumn' => 21,
                        'endColumn' => 26,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'x' => [
                        'name' => 'x',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 226,
                        'endLine' => 226,
                        'startColumn' => 29,
                        'endColumn' => 30,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'y' => [
                        'name' => 'y',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 226,
                        'endLine' => 226,
                        'startColumn' => 33,
                        'endColumn' => 34,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Rotate
 *
 * @param float $angle angle in degrees for counter-clockwise rotation
 * @param float $x     Origin abscissa
 * @param float $y     Origin ordinate
 */',
                'startLine' => 226,
                'endLine' => 226,
                'startColumn' => 5,
                'endColumn' => 36,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'skew' => [
                'name' => 'skew',
                'parameters' => [
                    'angle_x' => [
                        'name' => 'angle_x',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 236,
                        'endLine' => 236,
                        'startColumn' => 19,
                        'endColumn' => 26,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'angle_y' => [
                        'name' => 'angle_y',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 236,
                        'endLine' => 236,
                        'startColumn' => 29,
                        'endColumn' => 36,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'x' => [
                        'name' => 'x',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 236,
                        'endLine' => 236,
                        'startColumn' => 39,
                        'endColumn' => 40,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'y' => [
                        'name' => 'y',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 236,
                        'endLine' => 236,
                        'startColumn' => 43,
                        'endColumn' => 44,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Skew
 *
 * @param float $angle_x
 * @param float $angle_y
 * @param float $x       Origin abscissa
 * @param float $y       Origin ordinate
 */',
                'startLine' => 236,
                'endLine' => 236,
                'startColumn' => 5,
                'endColumn' => 46,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'scale' => [
                'name' => 'scale',
                'parameters' => [
                    's_x' => [
                        'name' => 's_x',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 246,
                        'endLine' => 246,
                        'startColumn' => 20,
                        'endColumn' => 23,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    's_y' => [
                        'name' => 's_y',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 246,
                        'endLine' => 246,
                        'startColumn' => 26,
                        'endColumn' => 29,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'x' => [
                        'name' => 'x',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 246,
                        'endLine' => 246,
                        'startColumn' => 32,
                        'endColumn' => 33,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'y' => [
                        'name' => 'y',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 246,
                        'endLine' => 246,
                        'startColumn' => 36,
                        'endColumn' => 37,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Scale
 *
 * @param float $s_x scaling factor for width as percent
 * @param float $s_y scaling factor for height as percent
 * @param float $x   Origin abscissa
 * @param float $y   Origin ordinate
 */',
                'startLine' => 246,
                'endLine' => 246,
                'startColumn' => 5,
                'endColumn' => 39,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'translate' => [
                'name' => 'translate',
                'parameters' => [
                    't_x' => [
                        'name' => 't_x',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 254,
                        'endLine' => 254,
                        'startColumn' => 24,
                        'endColumn' => 27,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    't_y' => [
                        'name' => 't_y',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 254,
                        'endLine' => 254,
                        'startColumn' => 30,
                        'endColumn' => 33,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Translate
 *
 * @param float $t_x movement to the right
 * @param float $t_y movement to the bottom
 */',
                'startLine' => 254,
                'endLine' => 254,
                'startColumn' => 5,
                'endColumn' => 35,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'transform' => [
                'name' => 'transform',
                'parameters' => [
                    'a' => [
                        'name' => 'a',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 266,
                        'endLine' => 266,
                        'startColumn' => 24,
                        'endColumn' => 25,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'b' => [
                        'name' => 'b',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 266,
                        'endLine' => 266,
                        'startColumn' => 28,
                        'endColumn' => 29,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'c' => [
                        'name' => 'c',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 266,
                        'endLine' => 266,
                        'startColumn' => 32,
                        'endColumn' => 33,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'd' => [
                        'name' => 'd',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 266,
                        'endLine' => 266,
                        'startColumn' => 36,
                        'endColumn' => 37,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'e' => [
                        'name' => 'e',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 266,
                        'endLine' => 266,
                        'startColumn' => 40,
                        'endColumn' => 41,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                    'f' => [
                        'name' => 'f',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 266,
                        'endLine' => 266,
                        'startColumn' => 44,
                        'endColumn' => 45,
                        'parameterIndex' => 5,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Transform
 *
 * @param float $a
 * @param float $b
 * @param float $c
 * @param float $d
 * @param float $e
 * @param float $f
 */',
                'startLine' => 266,
                'endLine' => 266,
                'startColumn' => 5,
                'endColumn' => 47,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'polygon' => [
                'name' => 'polygon',
                'parameters' => [
                    'points' => [
                        'name' => 'points',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 292,
                        'endLine' => 292,
                        'startColumn' => 22,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'color' => [
                        'name' => 'color',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 292,
                        'endLine' => 292,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'width' => [
                        'name' => 'width',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 292,
                                'endLine' => 292,
                                'startTokenPos' => 548,
                                'startFilePos' => 9125,
                                'endTokenPos' => 548,
                                'endFilePos' => 9128,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 292,
                        'endLine' => 292,
                        'startColumn' => 39,
                        'endColumn' => 51,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'style' => [
                        'name' => 'style',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 292,
                                'endLine' => 292,
                                'startTokenPos' => 555,
                                'startFilePos' => 9140,
                                'endTokenPos' => 556,
                                'endFilePos' => 9141,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 292,
                        'endLine' => 292,
                        'startColumn' => 54,
                        'endColumn' => 64,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'fill' => [
                        'name' => 'fill',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 292,
                                'endLine' => 292,
                                'startTokenPos' => 563,
                                'startFilePos' => 9152,
                                'endTokenPos' => 563,
                                'endFilePos' => 9156,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 292,
                        'endLine' => 292,
                        'startColumn' => 67,
                        'endColumn' => 79,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Draws a polygon
 *
 * The polygon is formed by joining all the points stored in the $points
 * array.  $points has the following structure:
 * ```
 * array(0 => x1,
 *       1 => y1,
 *       2 => x2,
 *       3 => y2,
 *       ...
 *       );
 * ```
 *
 * See {@link Cpdf::setLineStyle()} for a description of the format of the
 * $style parameter (aka dash).
 *
 * @param array $points
 * @param array $color  Color array in the format `[r, g, b, "alpha" => alpha]`
 *                      where r, g, b, and alpha are float values between 0 and 1
 * @param float $width
 * @param array $style
 * @param bool  $fill   Fills the polygon if true
 */',
                'startLine' => 292,
                'endLine' => 292,
                'startColumn' => 5,
                'endColumn' => 81,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'circle' => [
                'name' => 'circle',
                'parameters' => [
                    'x' => [
                        'name' => 'x',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 309,
                        'endLine' => 309,
                        'startColumn' => 21,
                        'endColumn' => 22,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'y' => [
                        'name' => 'y',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 309,
                        'endLine' => 309,
                        'startColumn' => 25,
                        'endColumn' => 26,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'r' => [
                        'name' => 'r',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 309,
                        'endLine' => 309,
                        'startColumn' => 29,
                        'endColumn' => 30,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'color' => [
                        'name' => 'color',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 309,
                        'endLine' => 309,
                        'startColumn' => 33,
                        'endColumn' => 38,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'width' => [
                        'name' => 'width',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 309,
                                'endLine' => 309,
                                'startTokenPos' => 589,
                                'startFilePos' => 9744,
                                'endTokenPos' => 589,
                                'endFilePos' => 9747,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 309,
                        'endLine' => 309,
                        'startColumn' => 41,
                        'endColumn' => 53,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'style' => [
                        'name' => 'style',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 309,
                                'endLine' => 309,
                                'startTokenPos' => 596,
                                'startFilePos' => 9759,
                                'endTokenPos' => 597,
                                'endFilePos' => 9760,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 309,
                        'endLine' => 309,
                        'startColumn' => 56,
                        'endColumn' => 66,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                    'fill' => [
                        'name' => 'fill',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 309,
                                'endLine' => 309,
                                'startTokenPos' => 604,
                                'startFilePos' => 9771,
                                'endTokenPos' => 604,
                                'endFilePos' => 9775,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 309,
                        'endLine' => 309,
                        'startColumn' => 69,
                        'endColumn' => 81,
                        'parameterIndex' => 6,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Draws a circle at $x,$y with radius $r
 *
 * See {@link Cpdf::setLineStyle()} for a description of the format of the
 * $style parameter (aka dash).
 *
 * @param float $x
 * @param float $y
 * @param float $r
 * @param array $color Color array in the format `[r, g, b, "alpha" => alpha]`
 *                     where r, g, b, and alpha are float values between 0 and 1
 * @param float $width
 * @param array $style
 * @param bool  $fill  Fills the circle if true
 */',
                'startLine' => 309,
                'endLine' => 309,
                'startColumn' => 5,
                'endColumn' => 83,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'image' => [
                'name' => 'image',
                'parameters' => [
                    'img' => [
                        'name' => 'img',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 324,
                        'endLine' => 324,
                        'startColumn' => 20,
                        'endColumn' => 23,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'x' => [
                        'name' => 'x',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 324,
                        'endLine' => 324,
                        'startColumn' => 26,
                        'endColumn' => 27,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'y' => [
                        'name' => 'y',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 324,
                        'endLine' => 324,
                        'startColumn' => 30,
                        'endColumn' => 31,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'w' => [
                        'name' => 'w',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 324,
                        'endLine' => 324,
                        'startColumn' => 34,
                        'endColumn' => 35,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'h' => [
                        'name' => 'h',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 324,
                        'endLine' => 324,
                        'startColumn' => 38,
                        'endColumn' => 39,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                    'resolution' => [
                        'name' => 'resolution',
                        'default' => [
                            'code' => '"normal"',
                            'attributes' => [
                                'startLine' => 324,
                                'endLine' => 324,
                                'startTokenPos' => 633,
                                'startFilePos' => 10284,
                                'endTokenPos' => 633,
                                'endFilePos' => 10291,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 324,
                        'endLine' => 324,
                        'startColumn' => 42,
                        'endColumn' => 63,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add an image to the pdf.
 *
 * The image is placed at the specified x and y coordinates with the
 * given width and height.
 *
 * @param string $img        The path to the image
 * @param float  $x          X position
 * @param float  $y          Y position
 * @param float  $w          Width
 * @param float  $h          Height
 * @param string $resolution The resolution of the image
 */',
                'startLine' => 324,
                'endLine' => 324,
                'startColumn' => 5,
                'endColumn' => 65,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'text' => [
                'name' => 'text',
                'parameters' => [
                    'x' => [
                        'name' => 'x',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 19,
                        'endColumn' => 20,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'y' => [
                        'name' => 'y',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 23,
                        'endColumn' => 24,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'text' => [
                        'name' => 'text',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 27,
                        'endColumn' => 31,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'font' => [
                        'name' => 'font',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 34,
                        'endColumn' => 38,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'size' => [
                        'name' => 'size',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 41,
                        'endColumn' => 45,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                    'color' => [
                        'name' => 'color',
                        'default' => [
                            'code' => '[0, 0, 0]',
                            'attributes' => [
                                'startLine' => 340,
                                'endLine' => 340,
                                'startTokenPos' => 662,
                                'startFilePos' => 11049,
                                'endTokenPos' => 670,
                                'endFilePos' => 11057,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 48,
                        'endColumn' => 65,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                    'word_space' => [
                        'name' => 'word_space',
                        'default' => [
                            'code' => '0.0',
                            'attributes' => [
                                'startLine' => 340,
                                'endLine' => 340,
                                'startTokenPos' => 677,
                                'startFilePos' => 11074,
                                'endTokenPos' => 677,
                                'endFilePos' => 11076,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 68,
                        'endColumn' => 84,
                        'parameterIndex' => 6,
                        'isOptional' => true,
                    ],
                    'char_space' => [
                        'name' => 'char_space',
                        'default' => [
                            'code' => '0.0',
                            'attributes' => [
                                'startLine' => 340,
                                'endLine' => 340,
                                'startTokenPos' => 684,
                                'startFilePos' => 11093,
                                'endTokenPos' => 684,
                                'endFilePos' => 11095,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 87,
                        'endColumn' => 103,
                        'parameterIndex' => 7,
                        'isOptional' => true,
                    ],
                    'angle' => [
                        'name' => 'angle',
                        'default' => [
                            'code' => '0.0',
                            'attributes' => [
                                'startLine' => 340,
                                'endLine' => 340,
                                'startTokenPos' => 691,
                                'startFilePos' => 11107,
                                'endTokenPos' => 691,
                                'endFilePos' => 11109,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 106,
                        'endColumn' => 117,
                        'parameterIndex' => 8,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Writes text at the specified x and y coordinates
 *
 * @param float  $x
 * @param float  $y
 * @param string $text        The text to write
 * @param string $font        The font file to use
 * @param float  $size        The font size, in points
 * @param array  $color       Color array in the format `[r, g, b, "alpha" => alpha]`
 *                            where r, g, b, and alpha are float values between 0 and 1
 * @param float  $word_space  Word spacing adjustment
 * @param float  $char_space  Char spacing adjustment
 * @param float  $angle       Angle to write the text at, measured clockwise starting from the x-axis
 */',
                'startLine' => 340,
                'endLine' => 340,
                'startColumn' => 5,
                'endColumn' => 119,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'add_named_dest' => [
                'name' => 'add_named_dest',
                'parameters' => [
                    'anchorname' => [
                        'name' => 'anchorname',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 347,
                        'endLine' => 347,
                        'startColumn' => 29,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a named destination (similar to <a name="foo">...</a> in html)
 *
 * @param string $anchorname The name of the named destination
 */',
                'startLine' => 347,
                'endLine' => 347,
                'startColumn' => 5,
                'endColumn' => 41,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'add_link' => [
                'name' => 'add_link',
                'parameters' => [
                    'url' => [
                        'name' => 'url',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 358,
                        'endLine' => 358,
                        'startColumn' => 23,
                        'endColumn' => 26,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'x' => [
                        'name' => 'x',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 358,
                        'endLine' => 358,
                        'startColumn' => 29,
                        'endColumn' => 30,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'y' => [
                        'name' => 'y',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 358,
                        'endLine' => 358,
                        'startColumn' => 33,
                        'endColumn' => 34,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'width' => [
                        'name' => 'width',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 358,
                        'endLine' => 358,
                        'startColumn' => 37,
                        'endColumn' => 42,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'height' => [
                        'name' => 'height',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 358,
                        'endLine' => 358,
                        'startColumn' => 45,
                        'endColumn' => 51,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a link to the pdf
 *
 * @param string $url    The url to link to
 * @param float  $x      The x position of the link
 * @param float  $y      The y position of the link
 * @param float  $width  The width of the link
 * @param float  $height The height of the link
 */',
                'startLine' => 358,
                'endLine' => 358,
                'startColumn' => 5,
                'endColumn' => 53,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'add_info' => [
                'name' => 'add_info',
                'parameters' => [
                    'label' => [
                        'name' => 'label',
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
                        'startLine' => 366,
                        'endLine' => 366,
                        'startColumn' => 30,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
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
                        'startLine' => 366,
                        'endLine' => 366,
                        'startColumn' => 45,
                        'endColumn' => 57,
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
 * Add meta information to the PDF.
 *
 * @param string $label Label of the value (Creator, Producer, etc.)
 * @param string $value The text to set
 */',
                'startLine' => 366,
                'endLine' => 366,
                'startColumn' => 5,
                'endColumn' => 65,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'font_supports_char' => [
                'name' => 'font_supports_char',
                'parameters' => [
                    'font' => [
                        'name' => 'font',
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
                        'startLine' => 376,
                        'endLine' => 376,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'char' => [
                        'name' => 'char',
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
                        'startLine' => 376,
                        'endLine' => 376,
                        'startColumn' => 47,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
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
 * Determines if the font supports the given character
 *
 * @param string $font The font file to use
 * @param string $char The character to check
 *
 * @return bool
 */',
                'startLine' => 376,
                'endLine' => 376,
                'startColumn' => 5,
                'endColumn' => 66,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'get_text_width' => [
                'name' => 'get_text_width',
                'parameters' => [
                    'text' => [
                        'name' => 'text',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 389,
                        'endLine' => 389,
                        'startColumn' => 29,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'font' => [
                        'name' => 'font',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 389,
                        'endLine' => 389,
                        'startColumn' => 36,
                        'endColumn' => 40,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'size' => [
                        'name' => 'size',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 389,
                        'endLine' => 389,
                        'startColumn' => 43,
                        'endColumn' => 47,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'word_spacing' => [
                        'name' => 'word_spacing',
                        'default' => [
                            'code' => '0.0',
                            'attributes' => [
                                'startLine' => 389,
                                'endLine' => 389,
                                'startTokenPos' => 788,
                                'startFilePos' => 12652,
                                'endTokenPos' => 788,
                                'endFilePos' => 12654,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 389,
                        'endLine' => 389,
                        'startColumn' => 50,
                        'endColumn' => 68,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'char_spacing' => [
                        'name' => 'char_spacing',
                        'default' => [
                            'code' => '0.0',
                            'attributes' => [
                                'startLine' => 389,
                                'endLine' => 389,
                                'startTokenPos' => 795,
                                'startFilePos' => 12673,
                                'endTokenPos' => 795,
                                'endFilePos' => 12675,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 389,
                        'endLine' => 389,
                        'startColumn' => 71,
                        'endColumn' => 89,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Calculates text size, in points
 *
 * @param string $text         The text to be sized
 * @param string $font         The font file to use
 * @param float  $size         The font size, in points
 * @param float  $word_spacing Word spacing, if any
 * @param float  $char_spacing Char spacing, if any
 *
 * @return float
 */',
                'startLine' => 389,
                'endLine' => 389,
                'startColumn' => 5,
                'endColumn' => 91,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'get_font_height' => [
                'name' => 'get_font_height',
                'parameters' => [
                    'font' => [
                        'name' => 'font',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 399,
                        'endLine' => 399,
                        'startColumn' => 30,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'size' => [
                        'name' => 'size',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 399,
                        'endLine' => 399,
                        'startColumn' => 37,
                        'endColumn' => 41,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Calculates font height, in points
 *
 * @param string $font The font file to use
 * @param float  $size The font size, in points
 *
 * @return float
 */',
                'startLine' => 399,
                'endLine' => 399,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'get_font_baseline' => [
                'name' => 'get_font_baseline',
                'parameters' => [
                    'font' => [
                        'name' => 'font',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 419,
                        'endLine' => 419,
                        'startColumn' => 32,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'size' => [
                        'name' => 'size',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 419,
                        'endLine' => 419,
                        'startColumn' => 39,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Calculates font baseline, in points
 *
 * @param string $font The font file to use
 * @param float  $size The font size, in points
 *
 * @return float
 */',
                'startLine' => 419,
                'endLine' => 419,
                'startColumn' => 5,
                'endColumn' => 45,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'get_width' => [
                'name' => 'get_width',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the PDF\'s width in points
 *
 * @return float
 */',
                'startLine' => 426,
                'endLine' => 426,
                'startColumn' => 5,
                'endColumn' => 25,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'get_height' => [
                'name' => 'get_height',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the PDF\'s height in points
 *
 * @return float
 */',
                'startLine' => 433,
                'endLine' => 433,
                'startColumn' => 5,
                'endColumn' => 26,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'set_opacity' => [
                'name' => 'set_opacity',
                'parameters' => [
                    'opacity' => [
                        'name' => 'opacity',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'float',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 441,
                        'endLine' => 441,
                        'startColumn' => 33,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'mode' => [
                        'name' => 'mode',
                        'default' => [
                            'code' => '"Normal"',
                            'attributes' => [
                                'startLine' => 441,
                                'endLine' => 441,
                                'startTokenPos' => 866,
                                'startFilePos' => 13795,
                                'endTokenPos' => 866,
                                'endFilePos' => 13802,
                            ],
                        ],
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
                        'startLine' => 441,
                        'endLine' => 441,
                        'startColumn' => 49,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Sets the opacity
 *
 * @param float  $opacity
 * @param string $mode
 */',
                'startLine' => 441,
                'endLine' => 441,
                'startColumn' => 5,
                'endColumn' => 79,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'set_default_view' => [
                'name' => 'set_default_view',
                'parameters' => [
                    'view' => [
                        'name' => 'view',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 457,
                        'endLine' => 457,
                        'startColumn' => 31,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 457,
                                'endLine' => 457,
                                'startTokenPos' => 886,
                                'startFilePos' => 14134,
                                'endTokenPos' => 887,
                                'endFilePos' => 14135,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 457,
                        'endLine' => 457,
                        'startColumn' => 38,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Sets the default view
 *
 * @param string $view
 * \'XYZ\'  left, top, zoom
 * \'Fit\'
 * \'FitH\' top
 * \'FitV\' left
 * \'FitR\' left,bottom,right
 * \'FitB\'
 * \'FitBH\' top
 * \'FitBV\' left
 * @param array $options
 */',
                'startLine' => 457,
                'endLine' => 457,
                'startColumn' => 5,
                'endColumn' => 52,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'javascript' => [
                'name' => 'javascript',
                'parameters' => [
                    'code' => [
                        'name' => 'code',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 462,
                        'endLine' => 462,
                        'startColumn' => 25,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @param string $code
 */',
                'startLine' => 462,
                'endLine' => 462,
                'startColumn' => 5,
                'endColumn' => 31,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'new_page' => [
                'name' => 'new_page',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Starts a new page
 *
 * Subsequent drawing operations will appear on the new page.
 */',
                'startLine' => 469,
                'endLine' => 469,
                'startColumn' => 5,
                'endColumn' => 24,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'stream' => [
                'name' => 'stream',
                'parameters' => [
                    'filename' => [
                        'name' => 'filename',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 477,
                        'endLine' => 477,
                        'startColumn' => 21,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 477,
                                'endLine' => 477,
                                'startTokenPos' => 923,
                                'startFilePos' => 14649,
                                'endTokenPos' => 924,
                                'endFilePos' => 14650,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 477,
                        'endLine' => 477,
                        'startColumn' => 32,
                        'endColumn' => 44,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Streams the PDF to the client.
 *
 * @param string $filename The filename to present to the client.
 * @param array  $options  Associative array: \'compress\' => 1 or 0 (default 1); \'Attachment\' => 1 or 0 (default 1).
 */',
                'startLine' => 477,
                'endLine' => 477,
                'startColumn' => 5,
                'endColumn' => 46,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
                'aliasName' => null,
            ],
            'output' => [
                'name' => 'output',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 486,
                                'endLine' => 486,
                                'startTokenPos' => 938,
                                'startFilePos' => 14856,
                                'endTokenPos' => 939,
                                'endFilePos' => 14857,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 486,
                        'endLine' => 486,
                        'startColumn' => 21,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the PDF as a string.
 *
 * @param array $options Associative array: \'compress\' => 1 or 0 (default 1).
 *
 * @return string
 */',
                'startLine' => 486,
                'endLine' => 486,
                'startColumn' => 5,
                'endColumn' => 35,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf',
                'declaringClassName' => 'Dompdf\\Canvas',
                'implementingClassName' => 'Dompdf\\Canvas',
                'currentClassName' => 'Dompdf\\Canvas',
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
