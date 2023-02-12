<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class GetBets extends Call
{
    public function handle($bettorId)
    {
        $response = $this->http->get('bettors/' . $bettorId . '/bets');

        if ($response->status() !== 200) {
            throw new ApiException('API call to bettor\'s bets has failed. Please try again later! Response: ' . $response->status());
        }

        return $response->json();
    }
}