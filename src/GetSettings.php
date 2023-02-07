<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class GetSettings extends Call
{
    public function handle()
    {
        $response = $this->http->get('settings');

        if ($response->status() !== 200) {
            throw new ApiException('API call to settings has failed. Please try again later!');
        }

        return $response->json();
    }
}