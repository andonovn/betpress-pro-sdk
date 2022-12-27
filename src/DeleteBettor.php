<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class DeleteBettor extends Call
{
    public function handle($id)
    {
        $response = $this->http->delete('bettors/' . $id);

        if ($response->status() !== 200) {
            throw new ApiException('API call to delete bettor ' . $id . ' has failed. Please try again later!');
        }

        return $response->json();
    }
}