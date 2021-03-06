<?php

/*
 * This file is part of jwt-auth.
 *
 * @author Sean Tymon <tymon148@gmail.com>
 * @copyright Copyright (c) Sean Tymon
 * @link https://github.com/tymondesigns/jwt-auth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tymon\JWTAuth\Support;

use Carbon\Carbon;

class Utils
{
    /**
     * Get the Carbon instance for the current time.
     *
     * @return \Carbon\Carbon
     */
    public static function now()
    {
        return Carbon::now();
    }

    /**
     * Get the Carbon instance for the timestamp.
     *
     * @param  int  $timestamp
     *
     * @return \Carbon\Carbon
     */
    public static function timestamp($timestamp)
    {
        return Carbon::createFromTimeStampUTC($timestamp);
    }
}
