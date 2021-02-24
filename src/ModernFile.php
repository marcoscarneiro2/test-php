<?php

namespace Live\Collection;

/**
 * Modern File
 * 
Lê um arquivo com o poder do SplFileInfo
 *
 * @package Live\Collection
 */
class ModernFile extends \SplFileObject implements \Iterator
{
    public function __construct(string $path)
    {
        parent:: __construct($path);
    }
}
