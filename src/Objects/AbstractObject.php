<?php

namespace VPS\Objects;

abstract class AbstractObject
{
    protected $payload = [];

    protected $queryParams = [];

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

    public function queryParams(array $params = [])
    {
        $this->queryParams = $params;
    }

    public function getPayload() 
    {
        return $this->payload;
    }

    public function getFullUrl()
    {
        return $this->getUrl() . '?' . http_build_query($this->queryParams, '', '&');
    }
}