<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class GetBets extends Call
{
    public function handle($bettorId)
    {
        try {
            return $this->asArray(
                $this->http->get('bettors/' . $bettorId . '/bets')->getBody()
            );
        } catch (GuzzleException $e) {
            throw new ApiException('API call to bettor\'s bets has failed. Please try again later! Message: '.$e->getMessage());
        }
    }
}