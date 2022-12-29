<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;

class ShowBettor extends Call
{
    public function handle($id)
    {
        $response = $this->http->get('bettors/' . $id);

        if ($response->status() !== 200) {
            throw new ApiException('API call to show bettor ' . $id . ' has failed. Please try again later!');
        }

        return $response->json();
    }
}