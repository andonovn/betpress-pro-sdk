<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class GetLeaderboards extends Call
{
    public function handle()
    {
        $response = $this->http->get('leaderboards');

        if ($response->status() !== 200) {
            throw new ApiException('API call to leaderboards has failed. Please try again later!');
        }

        return $response->json();
    }
}