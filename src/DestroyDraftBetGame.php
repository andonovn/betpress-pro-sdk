<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class DestroyDraftBetGame extends Call
{
    public function handle($bettorId, $gameId)
    {
        try {
            return $this->asArray(
                $this->http->delete('bettors/' . $bettorId . '/draft-bet/automated-games/' . $gameId)->getBody()
            );
        } catch (GuzzleException $e) {
            throw new ApiException('API call to destroy bettor\'s draft bet\'s game has failed. Please try again later! Message: '.$e->getMessage());
        }
    }
}