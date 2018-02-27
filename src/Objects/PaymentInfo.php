<?php

namespace VPS\Objects;

class PaymentInfo extends AbstractObject implements RequestObjectInterface
{
    protected $method = 'POST';

    public function getUrl()
    {
        return 'https://devel.vpsenv.com/vps.apis.gatewayapi/Payment/v1/GenerateTID';
    }

    public function getMethod()
    {
        return $this->method;
    }
}