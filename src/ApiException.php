<?php

namespace Andonovn\BetpressProSdk;

use Exception;

class ApiException extends Exception
{
    protected $validationErrors;

    public static function fromValidationErrors($message, $validationErrors)
    {
        return (new static($message))->setValidationErrors($validationErrors);
    }

    public function getValidationErrors()
    {
        return $this->validationErrors;
    }

    public function setValidationErrors($validationErrors)
    {
        $this->validationErrors = $validationErrors;

        return $this;
    }
}