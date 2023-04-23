<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class DeleteBettor extends Call
{
    public function handle($id)
    {
        try {
            return $this->asArray(
                $this->http->delete('bettors/' . $id)->getBody()
            );
        } catch (GuzzleException $e) {
            throw new ApiException('API call to delete bettor '.$id.' has failed. Please try again later! Message: '.$e->getMessage());
        }
    }
}