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

namespace Tymon\JWTAuth\Test\Stubs;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\Authenticatable;

class LaravelUserStub implements Authenticatable, JWTSubject
{
    public function getJWTIdentifier()
    {
        return 1;
    }

    public function getJWTCustomClaims()
    {
        return [
            'foo' => 'bar',
            'role' => 'admin',
        ];
    }

    public function getAuthIdentifierName()
    {
        //
    }

    public function getAuthIdentifier()
    {
        //
    }

    public function getAuthPassword()
    {
        //
    }

    public function getRememberToken()
    {
        //
    }

    public function setRememberToken($value)
    {
        //
    }

    public function getRememberTokenName()
    {
        //
    }
}
