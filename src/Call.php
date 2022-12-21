<?php

namespace Andonovn\BetpressProSdk;

abstract class Call
{
    protected $http;

    public function __construct($apiUrl = null)
    {
        $this->http = (new \Illuminate\Http\Client\Factory())
            ->baseUrl($apiUrl ?: 'https://betpress.pro/api/');
    }
}