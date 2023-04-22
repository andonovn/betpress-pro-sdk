<?php

namespace Andonovn\BetpressProSdk;

use GuzzleHttp\Client;

abstract class Call
{
    protected $http;

    public function __construct($token, $apiUrl = null)
    {
        $options = [
            'base_uri' => $apiUrl ?: 'https://betpress.pro/api/',
            'headers' => [
                'Accept' => 'application/json',
            ],
        ];

        if ($token) {
            $options['headers']['X-BetPressPro-Token'] = $token;
        }

        $this->http = new Client($options);
    }

    protected function asArray($json)
    {
        return json_decode($json, true);
    }
}
