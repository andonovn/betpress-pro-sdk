<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class StoreBettor extends Call
{
    public function handle($id, $name)
    {
        try {
            return json_decode($this->http
                ->post('bettors', [
                    'form_params' => [
                        'wp_id' => $id,
                        'name' => $name,
                    ],
                ])
                ->getBody(), true);
        } catch (GuzzleException $e) {
            throw new ApiException('API call to store bettor has failed. Please try again later! Message: '.$e->getMessage());
        }
    }
}