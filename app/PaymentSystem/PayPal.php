<?php


namespace app\PaymentSystem;


class PayPal implements PaymentSystemInterface
{
    public function payment()
    {
        echo "PayPal";
    }
}