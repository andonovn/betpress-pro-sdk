<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class DestroyDraftBetGame extends Call
{
    public function handle($bettorId, $gameId)
    {
        $response = $this->http->delete('bettors/' . $bettorId . '/draft-bet/automated-games/' . $gameId);

        if ($response->status() !== 200 && $response->status() !== 201) {
            throw ApiException::fromResponse(
                'API call to destroy bettor\'s draft bet\'s game has failed. Please try again later!',
                $response
            );
        }

        return $response->json();
    }
}