<?php

namespace VPS\Api;

class Response
{
    protected $response;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function getResponse()
    {
        return $this->response;
    }
}