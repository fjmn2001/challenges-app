<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class EmailNoValidoException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct("email email@hack.net no valido", $code, $previous);
    }
}
