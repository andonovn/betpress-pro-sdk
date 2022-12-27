<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class StoreBettor extends Call
{
    public function handle($id, $name)
    {
        $response = $this->http
            ->post(
                'bettors',
                [
                    'wp_id' => $id,
                    'name' => $name,
                ]
            );

        if ($response->status() !== 201) {
            throw new ApiException('API call to store bettor has failed. Please try again later!');
        }

        return $response->json();
    }
}