<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../dompdf/dompdf/src/Frame/FrameTree.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Dompdf\Frame\FrameTree
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-afb047edd5e3327701fbce9494ebc1f618274735853adca257b69573d2fed197-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Dompdf\\Frame\\FrameTree',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../dompdf/dompdf/src/Frame/FrameTree.php',
            ],
        ],
        'namespace' => 'Dompdf\\Frame',
        'name' => 'Dompdf\\Frame\\FrameTree',
        'shortName' => 'FrameTree',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Represents an entire document as a tree of frames
 *
 * The FrameTree consists of {@link Frame} objects each tied to specific
 * DOMNode objects in a specific DomDocument.  The FrameTree has the same
 * structure as the DomDocument, but adds additional capabilities for
 * styling and layout.
 *
 * @package dompdf
 */',
        'attributes' => [
        ],
        'startLine' => 28,
        'endLine' => 324,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'IteratorAggregate',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'HIDDEN_TAGS' => [
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'name' => 'HIDDEN_TAGS',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '["area", "base", "basefont", "head", "style", "meta", "title", "colgroup", "noembed", "param", "#comment"]',
                    'attributes' => [
                        'startLine' => 35,
                        'endLine' => 47,
                        'startTokenPos' => 65,
                        'startFilePos' => 809,
                        'endTokenPos' => 99,
                        'endFilePos' => 1008,
                    ],
                ],
                'docComment' => '/**
 * Tags to ignore while parsing the tree
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 35,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 6,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            '_dom' => [
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'name' => '_dom',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The main DomDocument
 *
 * @see http://ca2.php.net/manual/en/ref.dom.php
 * @var DOMDocument
 */',
                'attributes' => [
                ],
                'startLine' => 55,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 20,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            '_root' => [
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'name' => '_root',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The root node of the FrameTree.
 *
 * @var Frame
 */',
                'attributes' => [
                ],
                'startLine' => 62,
                'endLine' => 62,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            '_absolute_frames' => [
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'name' => '_absolute_frames',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * Subtrees of absolutely positioned elements
 *
 * @var array of Frames
 */',
                'attributes' => [
                ],
                'startLine' => 69,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            '_registry' => [
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'name' => '_registry',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * A mapping of {@link Frame} objects to DOMNode objects
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 76,
                'endLine' => 76,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
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
                    'dom' => [
                        'name' => 'dom',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'DOMDocument',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 83,
                        'endLine' => 83,
                        'startColumn' => 33,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Class constructor
 *
 * @param DOMDocument $dom the main DomDocument object representing the current html document
 */',
                'startLine' => 83,
                'endLine' => 88,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf\\Frame',
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'currentClassName' => 'Dompdf\\Frame\\FrameTree',
                'aliasName' => null,
            ],
            'get_dom' => [
                'name' => 'get_dom',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the DOMDocument object representing the current html document
 *
 * @return DOMDocument
 */',
                'startLine' => 95,
                'endLine' => 98,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf\\Frame',
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'currentClassName' => 'Dompdf\\Frame\\FrameTree',
                'aliasName' => null,
            ],
            'get_root' => [
                'name' => 'get_root',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the root frame of the tree
 *
 * @return Frame
 */',
                'startLine' => 105,
                'endLine' => 108,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf\\Frame',
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'currentClassName' => 'Dompdf\\Frame\\FrameTree',
                'aliasName' => null,
            ],
            'get_frame' => [
                'name' => 'get_frame',
                'parameters' => [
                    'id' => [
                        'name' => 'id',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 117,
                        'endLine' => 117,
                        'startColumn' => 31,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns a specific frame given its id
 *
 * @param string $id
 *
 * @return Frame|null
 */',
                'startLine' => 117,
                'endLine' => 120,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf\\Frame',
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'currentClassName' => 'Dompdf\\Frame\\FrameTree',
                'aliasName' => null,
            ],
            'get_frames' => [
                'name' => 'get_frames',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Dompdf\\Frame\\FrameTreeIterator',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns a post-order iterator for all frames in the tree
 *
 * @deprecated Iterate the tree directly instead
 * @return FrameTreeIterator
 */',
                'startLine' => 128,
                'endLine' => 131,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf\\Frame',
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'currentClassName' => 'Dompdf\\Frame\\FrameTree',
                'aliasName' => null,
            ],
            'getIterator' => [
                'name' => 'getIterator',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Dompdf\\Frame\\FrameTreeIterator',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns a post-order iterator for all frames in the tree
 *
 * @return FrameTreeIterator
 */',
                'startLine' => 138,
                'endLine' => 141,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf\\Frame',
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'currentClassName' => 'Dompdf\\Frame\\FrameTree',
                'aliasName' => null,
            ],
            'build_tree' => [
                'name' => 'build_tree',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Builds the tree
 */',
                'startLine' => 146,
                'endLine' => 160,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf\\Frame',
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'currentClassName' => 'Dompdf\\Frame\\FrameTree',
                'aliasName' => null,
            ],
            'fix_tables' => [
                'name' => 'fix_tables',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Adds missing TBODYs around TR
 */',
                'startLine' => 165,
                'endLine' => 200,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Dompdf\\Frame',
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'currentClassName' => 'Dompdf\\Frame\\FrameTree',
                'aliasName' => null,
            ],
            '_remove_node' => [
                'name' => '_remove_node',
                'parameters' => [
                    'node' => [
                        'name' => 'node',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'DOMNode',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 213,
                        'endLine' => 213,
                        'startColumn' => 37,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'children' => [
                        'name' => 'children',
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
                        'startLine' => 213,
                        'endLine' => 213,
                        'startColumn' => 52,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'index' => [
                        'name' => 'index',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 213,
                        'endLine' => 213,
                        'startColumn' => 70,
                        'endColumn' => 75,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove a child from a node
 *
 * Remove a child from a node. If the removed node results in two
 * adjacent #text nodes then combine them.
 *
 * @param DOMNode $node the current DOMNode being considered
 * @param array $children an array of nodes that are the children of $node
 * @param int $index index from the $children array of the node to remove
 */',
                'startLine' => 213,
                'endLine' => 226,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Dompdf\\Frame',
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'currentClassName' => 'Dompdf\\Frame\\FrameTree',
                'aliasName' => null,
            ],
            '_build_tree_r' => [
                'name' => '_build_tree_r',
                'parameters' => [
                    'node' => [
                        'name' => 'node',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'DOMNode',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 240,
                        'endLine' => 240,
                        'startColumn' => 38,
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
 * Recursively adds {@link Frame} objects to the tree
 *
 * Recursively build a tree of Frame objects based on a dom tree.
 * No layout information is calculated at this time, although the
 * tree may be adjusted (i.e. nodes and frames for generated content
 * and images may be created).
 *
 * @param DOMNode $node the current DOMNode being considered
 *
 * @return Frame
 */',
                'startLine' => 240,
                'endLine' => 289,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Dompdf\\Frame',
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'currentClassName' => 'Dompdf\\Frame\\FrameTree',
                'aliasName' => null,
            ],
            'insert_node' => [
                'name' => 'insert_node',
                'parameters' => [
                    'node' => [
                        'name' => 'node',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'DOMElement',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 298,
                        'endLine' => 298,
                        'startColumn' => 33,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'new_node' => [
                        'name' => 'new_node',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'DOMElement',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 298,
                        'endLine' => 298,
                        'startColumn' => 51,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'pos' => [
                        'name' => 'pos',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 298,
                        'endLine' => 298,
                        'startColumn' => 73,
                        'endColumn' => 76,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @param DOMElement $node
 * @param DOMElement $new_node
 * @param string $pos
 *
 * @return mixed
 */',
                'startLine' => 298,
                'endLine' => 323,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Dompdf\\Frame',
                'declaringClassName' => 'Dompdf\\Frame\\FrameTree',
                'implementingClassName' => 'Dompdf\\Frame\\FrameTree',
                'currentClassName' => 'Dompdf\\Frame\\FrameTree',
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
