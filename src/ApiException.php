<?php

namespace Andonovn\BetpressProSdk;

use Exception;

class ApiException extends Exception
{
    protected $response;

    public static function fromResponse($message, $response)
    {
        return (new static($message))->setResponse($response);
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }
}