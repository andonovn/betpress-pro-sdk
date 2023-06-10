<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class GetLeaderboardStandings extends Call
{
    public function handle($id, $page)
    {
        try {
            return $this->asArray(
                $this->http->get('leaderboards/'.$id.'/standings?page='.$page)->getBody()
            );
        } catch (GuzzleException $e) {
            throw new ApiException('API call to leaderboards has failed. Please try again later! Message: ' . $e->getMessage());
        }
    }
}