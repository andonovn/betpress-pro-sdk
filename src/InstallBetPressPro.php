<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class InstallBetPressPro extends Call
{
    public function handle($name, $email, $url)
    {
        $response = $this->http->post(
            'tenants',
            compact('name', 'email', 'url')
        );

        if ($response->status() !== 201) {
            throw new ApiException('API call to install BetPress Pro has failed. Please try again later!');
        }

        return $response->json();
    }
}