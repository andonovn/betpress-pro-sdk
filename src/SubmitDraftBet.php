<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class SubmitDraftBet extends Call
{
    public function handle($bettorId)
    {
        $response = $this->http->post('bettors/' . $bettorId . '/submitted-bets');

        if ($response->status() !== 200) {
            throw ApiException::fromResponse(
                'API call to submit bettor\'s draft bet has failed. Please try again later!',
                $response
            );
        }

        return $response->json();
    }
}