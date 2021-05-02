<?php

use app\PaymentSystem\PayPal;

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'vendor/autoload.php';

$webmoney = new \app\PaymentSystem\WebMoney();

$paymentService = new \app\PaymentService();

$paymentService->payment(new PayPal());
$paymentService->payment($webmoney);

//TODO tests