<?php

namespace VPS\Objects;

class ConfirmationAcknowlegdment extends AbstractObject implements RequestObjectInterface
{
    protected $method = 'POST';

    public function getUrl()
    {
        return 'https://demo.valuepaymentsystems.com/vpssubmit/Acknowledge.aspx';
    }

    public function getMethod()
    {
        return $this->method;
    }
}