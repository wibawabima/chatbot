<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array
     */
    // protected $proxies;
    protected $proxies = '**';

    // protected $proxies = [
    //     '192.168.1.1',
    //     '192.168.1.2',
    // ];

    /**
     * The current proxy header mappings.
     *
     * @var array
     */
    protected $headers = [
        // Request::HEADER_FORWARDED => 'FORWARDED',
        // Request::HEADER_X_FORWARDED_FOR => 'X_FORWARDED_FOR',
        // Request::HEADER_X_FORWARDED_HOST => 'X_FORWARDED_HOST',
        // Request::HEADER_X_FORWARDED_PORT => 'X_FORWARDED_PORT',
        // Request::HEADER_X_FORWARDED_PROTO => 'X_FORWARDED_PROTO',
        Request::HEADER_FORWARDED => null,
        Illuminate\Http\Request::HEADER_CLIENT_IP    => 'X_FORWARDED_FOR',
        Illuminate\Http\Request::HEADER_CLIENT_HOST  => null, // not set on AWS or Heroku
        Illuminate\Http\Request::HEADER_CLIENT_PROTO => 'X_FORWARDED_PROTO',
        Illuminate\Http\Request::HEADER_CLIENT_PORT  => 'X_FORWARDED_PORT',
    ];
}
