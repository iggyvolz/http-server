<?php

namespace Aerys\Root;

use Amp\Struct;

class Stat {
    use Struct;
    public $exists;
    
    // This is the absolute filesystem path (not the resolved request URI path)
    public $path;
    public $size;
    public $mtime;
    public $inode;
    public $buffer;

    // These are generated by the main Root handler -- implementation
    // classes aren't responsible for populating these properties.
    public $etag;
}
