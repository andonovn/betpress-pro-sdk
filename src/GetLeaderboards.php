<?php

namespace Andonovn\BetpressProSdk;

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
            if (method_exists($e, 'getResponse') && $e->getResponse()->getStatusCode() === 402) {
                throw new ExpiredSubscriptionException($e->getMessage());
            }

            throw new ApiException('API call to leaderboards has failed. Please try again later! Message: ' . $e->getMessage());
        }
    }
}