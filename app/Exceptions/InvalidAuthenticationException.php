<?php

namespace App\Exceptions;

use App\Traits\RenderToJson;
use Exception;

class InvalidAuthenticationException extends Exception
{   
    use RenderToJson;

    protected $message = 'Your credentials don\'t match.'; // feedback para o desenvolvendo API
    protected $code = 400;
}
