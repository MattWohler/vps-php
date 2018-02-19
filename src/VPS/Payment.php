<?php

namespace VPS;

class Payment
{
    public function createPayment(PaymentObject $object)
    {
        return new Payment($object, new Request);
    }
}