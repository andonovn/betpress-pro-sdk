<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class GetBets extends Call
{
    public function handle($bettorId, $page)
    {
        try {
            return $this->asArray(
                $this->http->get('bettors/' . $bettorId . '/bets?page='.$page)->getBody()
            );
        } catch (GuzzleException $e) {
            if (method_exists($e, 'getResponse') && $e->getResponse()->getStatusCode() === 402) {
                throw new ExpiredSubscriptionException($e->getMessage());
            }

            throw new ApiException('API call to bettor\'s bets has failed. Please try again later! Message: '.$e->getMessage());
        }
    }
}