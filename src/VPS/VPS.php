<?php

namespace VPS;

class VPS
{
    public function request(RequestObjectInterface $requestObject)
    {
        $request = new Request($requestObject);
        $response = new Response($request);

        return $response->getResponse();
    }
}