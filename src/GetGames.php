<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class GetGames extends Call
{
    public function handle()
    {
        $response = $this->http->get('games');

        if ($response->status() !== 200) {
            throw new ApiException('API call to games has failed. Please try again later!');
        }

        return $response->json();
    }
}