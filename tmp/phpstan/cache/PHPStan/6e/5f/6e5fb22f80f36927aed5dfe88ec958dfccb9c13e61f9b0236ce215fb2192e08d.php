<?php

declare(strict_types=1);

// osfsl-C:/laragon/www/usk_no_ai/vendor/composer/../psr/http-message/src/StreamInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Psr\Http\Message\StreamInterface
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-0a3267552ebbcac5f0cd522dd10d96ad985595fd4f90d8566b449db2e060b385-8.3.26-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Psr\\Http\\Message\\StreamInterface',
                'filename' => 'C:/laragon/www/usk_no_ai/vendor/composer/../psr/http-message/src/StreamInterface.php',
            ],
        ],
        'namespace' => 'Psr\\Http\\Message',
        'name' => 'Psr\\Http\\Message\\StreamInterface',
        'shortName' => 'StreamInterface',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Describes a data stream.
 *
 * Typically, an instance will wrap a PHP stream; this interface provides
 * a wrapper around the most common operations, including serialization of
 * the entire stream to a string.
 */',
        'attributes' => [
        ],
        'startLine' => 12,
        'endLine' => 158,
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
 * Reads all data from the stream into a string, from the beginning to end.
 *
 * This method MUST attempt to seek to the beginning of the stream before
 * reading data and read the stream until the end is reached.
 *
 * Warning: This could attempt to load a large amount of data into memory.
 *
 * This method MUST NOT raise an exception in order to conform with PHP\'s
 * string casting operations.
 *
 * @see http://php.net/manual/en/language.oop5.magic.php#object.tostring
 * @return string
 */',
                'startLine' => 28,
                'endLine' => 28,
                'startColumn' => 5,
                'endColumn' => 41,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'aliasName' => null,
            ],
            'close' => [
                'name' => 'close',
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
 * Closes the stream and any underlying resources.
 *
 * @return void
 */',
                'startLine' => 35,
                'endLine' => 35,
                'startColumn' => 5,
                'endColumn' => 34,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'aliasName' => null,
            ],
            'detach' => [
                'name' => 'detach',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Separates any underlying resources from the stream.
 *
 * After the stream has been detached, the stream is in an unusable state.
 *
 * @return resource|null Underlying PHP stream, if any
 */',
                'startLine' => 44,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 29,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'aliasName' => null,
            ],
            'getSize' => [
                'name' => 'getSize',
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
 * Get the size of the stream if known.
 *
 * @return int|null Returns the size in bytes if known, or null if unknown.
 */',
                'startLine' => 51,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 36,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'aliasName' => null,
            ],
            'tell' => [
                'name' => 'tell',
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
 * Returns the current position of the file read/write pointer
 *
 * @return int Position of the file pointer
 * @throws \\RuntimeException on error.
 */',
                'startLine' => 59,
                'endLine' => 59,
                'startColumn' => 5,
                'endColumn' => 32,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'aliasName' => null,
            ],
            'eof' => [
                'name' => 'eof',
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
 * Returns true if the stream is at the end of the stream.
 *
 * @return bool
 */',
                'startLine' => 66,
                'endLine' => 66,
                'startColumn' => 5,
                'endColumn' => 32,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'aliasName' => null,
            ],
            'isSeekable' => [
                'name' => 'isSeekable',
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
 * Returns whether or not the stream is seekable.
 *
 * @return bool
 */',
                'startLine' => 73,
                'endLine' => 73,
                'startColumn' => 5,
                'endColumn' => 39,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'aliasName' => null,
            ],
            'seek' => [
                'name' => 'seek',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
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
                        'startLine' => 87,
                        'endLine' => 87,
                        'startColumn' => 26,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'whence' => [
                        'name' => 'whence',
                        'default' => [
                            'code' => 'SEEK_SET',
                            'attributes' => [
                                'startLine' => 87,
                                'endLine' => 87,
                                'startTokenPos' => 130,
                                'startFilePos' => 2599,
                                'endTokenPos' => 130,
                                'endFilePos' => 2606,
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
                        'startLine' => 87,
                        'endLine' => 87,
                        'startColumn' => 39,
                        'endColumn' => 60,
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
 * Seek to a position in the stream.
 *
 * @link http://www.php.net/manual/en/function.fseek.php
 * @param int $offset Stream offset
 * @param int $whence Specifies how the cursor position will be calculated
 *     based on the seek offset. Valid values are identical to the built-in
 *     PHP $whence values for `fseek()`.  SEEK_SET: Set position equal to
 *     offset bytes SEEK_CUR: Set position to current location plus offset
 *     SEEK_END: Set position to end-of-stream plus offset.
 * @throws \\RuntimeException on failure.
 */',
                'startLine' => 87,
                'endLine' => 87,
                'startColumn' => 5,
                'endColumn' => 68,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
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
 * Seek to the beginning of the stream.
 *
 * If the stream is not seekable, this method will raise an exception;
 * otherwise, it will perform a seek(0).
 *
 * @see seek()
 * @link http://www.php.net/manual/en/function.fseek.php
 * @throws \\RuntimeException on failure.
 */',
                'startLine' => 99,
                'endLine' => 99,
                'startColumn' => 5,
                'endColumn' => 35,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'aliasName' => null,
            ],
            'isWritable' => [
                'name' => 'isWritable',
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
 * Returns whether or not the stream is writable.
 *
 * @return bool
 */',
                'startLine' => 106,
                'endLine' => 106,
                'startColumn' => 5,
                'endColumn' => 39,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'aliasName' => null,
            ],
            'write' => [
                'name' => 'write',
                'parameters' => [
                    'string' => [
                        'name' => 'string',
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
                        'startLine' => 115,
                        'endLine' => 115,
                        'startColumn' => 27,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
 * Write data to the stream.
 *
 * @param string $string The string that is to be written.
 * @return int Returns the number of bytes written to the stream.
 * @throws \\RuntimeException on failure.
 */',
                'startLine' => 115,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 47,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'aliasName' => null,
            ],
            'isReadable' => [
                'name' => 'isReadable',
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
 * Returns whether or not the stream is readable.
 *
 * @return bool
 */',
                'startLine' => 122,
                'endLine' => 122,
                'startColumn' => 5,
                'endColumn' => 39,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'aliasName' => null,
            ],
            'read' => [
                'name' => 'read',
                'parameters' => [
                    'length' => [
                        'name' => 'length',
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
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 26,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
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
 * Read data from the stream.
 *
 * @param int $length Read up to $length bytes from the object and return
 *     them. Fewer than $length bytes may be returned if underlying stream
 *     call returns fewer bytes.
 * @return string Returns the data read from the stream, or an empty string
 *     if no bytes are available.
 * @throws \\RuntimeException if an error occurs.
 */',
                'startLine' => 134,
                'endLine' => 134,
                'startColumn' => 5,
                'endColumn' => 46,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'aliasName' => null,
            ],
            'getContents' => [
                'name' => 'getContents',
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
 * Returns the remaining contents in a string
 *
 * @return string
 * @throws \\RuntimeException if unable to read or an error occurs while
 *     reading.
 */',
                'startLine' => 143,
                'endLine' => 143,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'aliasName' => null,
            ],
            'getMetadata' => [
                'name' => 'getMetadata',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 157,
                                'endLine' => 157,
                                'startTokenPos' => 242,
                                'startFilePos' => 4851,
                                'endTokenPos' => 242,
                                'endFilePos' => 4854,
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
                        'startLine' => 157,
                        'endLine' => 157,
                        'startColumn' => 33,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get stream metadata as an associative array or retrieve a specific key.
 *
 * The keys returned are identical to the keys returned from PHP\'s
 * stream_get_meta_data() function.
 *
 * @link http://php.net/manual/en/function.stream-get-meta-data.php
 * @param string|null $key Specific metadata to retrieve.
 * @return array|mixed|null Returns an associative array if no key is
 *     provided. Returns a specific key value if a key is provided and the
 *     value is found, or null if the key is not found.
 */',
                'startLine' => 157,
                'endLine' => 157,
                'startColumn' => 5,
                'endColumn' => 53,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\Http\\Message',
                'declaringClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'implementingClassName' => 'Psr\\Http\\Message\\StreamInterface',
                'currentClassName' => 'Psr\\Http\\Message\\StreamInterface',
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
