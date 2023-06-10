<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class GetLeaderboard extends Call
{
    public function handle($id)
    {
        try {
            return $this->asArray(
                $this->http->get('leaderboards/'.$id)->getBody()
            );
        } catch (GuzzleException $e) {
            throw new ApiException('API call to leaderboard #'.$id.' has failed. Please try again later! Message: ' . $e->getMessage());
        }
    }
}