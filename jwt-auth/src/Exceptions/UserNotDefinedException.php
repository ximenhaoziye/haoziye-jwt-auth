<?php

/*
 * This file is part of jwt-auth.
 *
 * (c) Sean Tymon <tymon148@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tymon\JWTAuth\Exceptions;

use Throwable;

class UserNotDefinedException extends JWTException
{
    //
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, 941, $previous);
    }
}
