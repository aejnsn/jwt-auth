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

namespace Tymon\JWTAuth\Http;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Contracts\Http\Parser as ParserContract;

class AuthHeaders implements ParserContract
{
    /**
     * The header name.
     *
     * @var string
     */
    protected $header = 'authorization';

    /**
     * The header prefix.
     *
     * @var string
     */
    protected $prefix = 'bearer';

    /**
     * Attempt to parse the token from some other possible headers.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return null|string
     */
    protected function fromAltHeaders(Request $request)
    {
        return $request->server->get('HTTP_AUTHORIZATION',
            $request->server->get('REDIRECT_HTTP_AUTHORIZATION')
        );
    }

    /**
     * Try to parse the token from the request header.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return null|string
     */
    public function parse(Request $request)
    {
        $header = $request->headers->get($this->header, $this->fromAltHeaders($request));

        if (! $header || ! Str::startsWith(strtolower($header), $this->prefix)) {
            return;
        }

        return trim(str_ireplace($this->prefix, '', $header));
    }

    /**
     * Set the header name.
     *
     * @param  string  $headerName
     *
     * @return $this
     */
    public function setHeaderName($headerName)
    {
        $this->header = $headerName;

        return $this;
    }

    /**
     * Set the header prefix.
     *
     * @param  string  $headerPrefix
     *
     * @return $this
     */
    public function setHeaderPrefix($headerPrefix)
    {
        $this->prefix = $headerPrefix;

        return $this;
    }
}
