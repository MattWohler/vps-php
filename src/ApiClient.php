<?php

namespace VPS;

use GuzzleHttp\Client;
use VPS\Api\Request;
use VPS\Api\Response;
use VPS\Objects\RequestObjectInterface;

class ApiClient
{
    public function send(RequestObjectInterface $requestObject)
    {
        $request = new Request(new Client, $requestObject);

        return new Response($request);
    }
}