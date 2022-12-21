<?php

namespace Andonovn\BetpressProSdk;

class InstallBetPressPro extends Call
{
    public function handle($name, $email, $url)
    {
        $response = $this->http->post(
            'tenants',
            compact('name', 'email', 'url')
        );

        if ($response->status() !== 201) {
            throw new \Exception('API call to install BetPress Pro has failed. Please try again later!');
        }

        return $response->json();
    }
}