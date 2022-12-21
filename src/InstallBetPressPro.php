<?php

namespace Andonovn\BetpressProSdk;

class InstallBetPressPro extends Call
{
    public function handle($name, $url)
    {
        $response = $this->http->post(
            'tenants',
            compact('name', 'url')
        );

        // test

        return $response;
    }
}