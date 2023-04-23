<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;

class StoreDraftBetGame extends Call
{
    public function handle($bettorId, $gameId, $prediction)
    {
        try {
            return $this->asArray(
                $this->http->post('bettors/'.$bettorId.'/draft-bet/automated-games', [
                    'form_params' => [
                        'game_id' => $gameId,
                        'type' => 'h2h',
                        'prediction' => $prediction,
                    ],
                ])
                ->getBody()
            );
        } catch (ClientException $e) {
            throw ApiException::fromValidationErrors(
                'API call to store bettor\'s draft bet\'s game has failed validation. Please try again later! Message: '.$e->getMessage(),
                $this->asArray($e->getResponse()->getBody())['message']
            );
        } catch (GuzzleException $e) {
            throw new ApiException('API call to store bettor\'s draft bet\'s game has failed. Please try again later! Message: '.$e->getMessage());
        }
    }
}