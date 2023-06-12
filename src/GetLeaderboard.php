<?php

namespace Andonovn\BetpressProSdk;

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
            if (method_exists($e, 'getResponse') && $e->getResponse()->getStatusCode() === 402) {
                throw new ExpiredSubscriptionException($e->getMessage());
            }

            throw new ApiException('API call to leaderboard #'.$id.' has failed. Please try again later! Message: ' . $e->getMessage());
        }
    }
}