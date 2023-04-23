<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class UpdateBettor extends Call
{
    public function handle($id, $name)
    {
        try {
            return $this->asArray(
                $this->http->patch('bettors/'.$id, [
                    'form_params' => [
                        'name' => $name,
                    ],
                ])
                ->getBody()
            );
        } catch (GuzzleException $e) {
            throw new ApiException('API call to update bettor ' . $id . ' has failed. Please try again later! Message: '.$e->getMessage());
        }
    }
}