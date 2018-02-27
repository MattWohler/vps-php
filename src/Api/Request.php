<?php

namespace VPS\Api;

use GuzzleHttp\Client;
use VPS\Objects\RequestObjectInterface;

class Request
{
    protected $response;

    public function __construct(Client $httpClient, RequestObjectInterface $reqObject)
    {

        try {
            $this->response = $httpClient->request($reqObject->getMethod(), $reqObject->getUrl(), [
                'json' => $reqObject->getPayload(),
                'query' => $reqObject->getQuery(),
            ]);
        } catch (\Exception $e) {
            throw $e;
        }

    }

    public function getResponse()
    {
        return $this->response;
    }
}