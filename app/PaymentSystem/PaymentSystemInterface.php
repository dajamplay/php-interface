<?php

namespace app\PaymentSystem;

interface PaymentSystemInterface
{

    /**
     * Реализует механизм оплаты
     * @return mixed
     */
    public function payment();
}