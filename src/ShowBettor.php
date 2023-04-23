<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class ShowBettor extends Call
{
    public function handle($id)
    {
        try {
            return $this->asArray(
                $this->http->get('bettors/'.$id)->getBody()
            );
        } catch (GuzzleException $e) {
            throw new ApiException('API call to show bettor '.$id.' has failed. Please try again later! Message: ' . $e->getMessage());
        }
    }
}