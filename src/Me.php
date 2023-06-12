<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class Me extends Call
{
    public function handle()
    {
        try {
            return $this->asArray(
                $this->http->get('me')->getBody()
            );
        } catch (GuzzleException $e) {
            throw new ApiException('API call to the "me" endpoint has failed. Please try again later! Message: '.$e->getMessage());
        }
    }
}