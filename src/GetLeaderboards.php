<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class GetLeaderboards extends Call
{
    public function handle($page)
    {
        try {
            return $this->asArray(
                $this->http->get('leaderboards?page='.$page)->getBody()
            );
        } catch (GuzzleException $e) {
            throw new ApiException('API call to leaderboards has failed. Please try again later! Message: ' . $e->getMessage());
        }
    }
}