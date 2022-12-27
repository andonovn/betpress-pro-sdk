<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class Me extends Call
{
    public function handle()
    {
        $response = $this->http->get('me');

        if ($response->status() !== 200) {
            throw new ApiException('API call to me has failed. Please try again later!');
        }

        return $response->json();
    }
}