<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class UpdateDraftBetStake extends Call
{
    public function handle($bettorId, $stake)
    {
        $response = $this->http->put('bettors/' . $bettorId . '/draft-bet/stake', [
            'stake' => $stake,
        ]);

        if ($response->status() !== 200) {
            throw new ApiException(
                'API call to update bettor\'s draft bet\'s stake has failed. Please try again later! Response: '
                    . $response->status()
            );
        }

        return $response->json();
    }
}