<?php

namespace app;

use app\PaymentSystem\PaymentSystemInterface;

class PaymentService
{
    public function payment(PaymentSystemInterface $paymentSystem) {
        $paymentSystem->payment();
    }
}