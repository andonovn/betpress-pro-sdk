<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class GetDraftBet extends Call
{
    public function handle($bettorId)
    {
        try {
            return $this->asArray(
                $this->http->get('bettors/' . $bettorId . '/draft-bet')->getBody()
            );
        } catch (GuzzleException $e) {
            throw new ApiException('API call to bettor\'s draft bet has failed. Please try again later! Message: ' . $e->getMessage());
        }
    }
}