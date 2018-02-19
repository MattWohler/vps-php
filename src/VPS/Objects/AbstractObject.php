<?php

namespace VPS\Objects;

abstract class AbstractObject
{
    protected $payload = [];

    public function __construct(array $params = [])
    {
        if (empty($params)) return;

        $this->setParameters($params);
    }

    public function setParameters(array $params)
    {
        array_walk($params, function($value, $key){
            $this->payload[$key] = (string) $value;
        }, $this);
    }
}