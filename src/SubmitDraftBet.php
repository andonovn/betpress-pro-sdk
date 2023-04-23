<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;

class SubmitDraftBet extends Call
{
    public function handle($bettorId)
    {
        try {
            return $this->asArray(
                $this->http->post('bettors/'.$bettorId.'/submitted-bets')->getBody()
            );
        } catch (ClientException $e) {
            throw ApiException::fromValidationErrors(
                'API call to submit bettor\'s draft bet has failed validation. Please try again later! Message: '.$e->getMessage(),
                $this->asArray($e->getResponse()->getBody())['message']
            );
        } catch (GuzzleException $e) {
            throw new ApiException('API call to submit bettor\'s draft bet has failed. Please try again later! Message: '.$e->getMessage());
        }
    }
}