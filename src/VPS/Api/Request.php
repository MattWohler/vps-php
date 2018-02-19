<?php

namespace VPS\Api;

class Request
{
    protected $errors;
    protected $content;

    public function __construct($object)
    {
        try{
            $client = new Client();

            $res = $client->request($object->getMethod(), $object->getUrl(), [
                'json' => $object->getPayload(),
            ]);
        } catch (\Exception $e) {
            // 'request_id'     => $payload['RequestID'],
            // 'transaction_id' => $payload['TransactionID'],
            // 'request_status' => $payload['RequestStatus'],
            // 'status_message' => $payload['StatusMessage'],
            // 'redirect_url'   => sprintf("%s%s", $this->paymentCustomerUrl, $payload['TransactionID']),
        }

        if($response->getStatusCode() >= 299) {

        }

        // return new Response;
    }
}