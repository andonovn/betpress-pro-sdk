<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class UpdateBettor extends Call
{
    public function handle($id, $name)
    {
        $response = $this->http
            ->patch(
                'bettors/' . $id,
                [
                    'name' => $name,
                ]
            );

        if ($response->status() !== 200) {
            throw new ApiException('API call to update bettor ' . $id . ' has failed. Please try again later!');
        }

        return $response->json();
    }
}