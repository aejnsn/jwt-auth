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

namespace Tymon\JWTAuth\Claims;

class NotBefore extends Claim
{
    /**
     * The claim name.
     *
     * @var string
     */
    protected $name = 'nbf';

    /**
     * Validate the not before claim.
     *
     * @param  mixed  $value
     *
     * @return bool
     */
    public function validate($value)
    {
        return is_numeric($value);
    }
}
