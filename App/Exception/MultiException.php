<?php

namespace App\Exception;


use App\T4Collection;

class MultiException
    extends \Exception
    implements \ArrayAccess, \Iterator
{
    use T4Collection;

}