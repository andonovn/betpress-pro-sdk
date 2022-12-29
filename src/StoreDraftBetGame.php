<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class StoreDraftBetGame extends Call
{
    public function handle($bettorId, $gameId, $prediction)
    {
        $response = $this->http->post(
            'bettors/' . $bettorId . '/draft-bet/automated-games',
            [
                'game_id' => $gameId,
                'type' => 'h2h',
                'prediction' => $prediction,
            ]
        );

        if ($response->status() !== 200 && $response->status() !== 201) {
            throw new ApiException(
                'API call to store bettor\'s draft bet\'s game has failed. Please try again later! Response: '
                    . $response->status()
            );
        }

        return $response->json();
    }
}