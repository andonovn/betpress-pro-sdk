<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class GetDraftBet extends Call
{
    public function handle($bettorId)
    {
        $response = $this->http->get('bettors/' . $bettorId . '/draft-bet');

        if ($response->status() !== 200 && $response->status() !== 201) {
            throw new ApiException('API call to bettor\'s draft bet has failed. Please try again later! Response: ' . $response->status());
        }

        return $response->json();
    }
}