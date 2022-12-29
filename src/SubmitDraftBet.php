<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class SubmitDraftBet extends Call
{
    public function handle($bettorId)
    {
        $response = $this->http->post('bettors/' . $bettorId . '/submitted-bets');

        if ($response->status() !== 200) {
            throw new ApiException(
                'API call to submit bettor\'s draft bet has failed. Please try again later! Response: '
                    . $response->status()
            );
        }

        return $response->json();
    }
}