<?php


namespace app\PaymentSystem;


class WebMoney implements PaymentSystemInterface
{

    public function payment()
    {
        echo "WebMoney";
    }
}