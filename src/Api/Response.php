<?php

namespace VPS\Api;

use VPS\Api\Request;

class Response
{
    protected $request;

    protected $body;
    protected $payload;
    protected $code;
    protected $reason;

    public function __construct(Request $request)
    {
        $this->request = $request;

        $response = $request->getResponse();

        $this->body = json_decode($response->getBody(), true);
        $this->payload = json_decode($response->getContents(), true);
        $this->code = $response->getStatusCode();
        $this->reason = $response->getReasonPhrase();
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getPayload()
    {
        return $this->payload;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getReason()
    {
        return $this->reason;
    }
}