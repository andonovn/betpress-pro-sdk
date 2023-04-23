<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class UpdateDraftBetStake extends Call
{
    public function handle($bettorId, $stake)
    {
        try {
            return $this->asArray(
                $this->http->put('bettors/'.$bettorId.'/draft-bet/stake', [
                    'form_params' => [
                        'stake' => $stake,
                    ],
                ])
                ->getBody()
            );
        } catch (GuzzleException $e) {
            throw new ApiException('API call to update bettor\'s draft bet\'s stake has failed. Please try again later! Message: '.$e->getMessage());
        }
    }
}