<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class StoreBettorsSync extends Call
{
    public function handle($users)
    {
        try {
            return $this->asArray(
                $this->http->post('bettors-syncs', [
                    'form_params' => compact('users'),
                ])
                ->getBody()
            );
        } catch (GuzzleException $e) {
            throw new ApiException('API call to store bettors sync has failed. Please try again later! Message: '.$e->getMessage());
        }
    }
}