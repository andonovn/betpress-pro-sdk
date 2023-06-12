<?php

namespace Andonovn\BetpressProSdk;

use Andonovn\BetpressProSdk\ApiException;
use GuzzleHttp\Exception\GuzzleException;

class GetSettings extends Call
{
    public function handle()
    {
        try {
            return $this->asArray(
                $this->http->get('settings')->getBody()
            );
        } catch (GuzzleException $e) {
            if (method_exists($e, 'getResponse') && $e->getResponse()->getStatusCode() === 402) {
                throw new ExpiredSubscriptionException($e->getMessage());
            }

            throw new ApiException('API call to settings has failed. Please try again later! Message: ' . $e->getMessage());
        }
    }
}