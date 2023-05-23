<?php

namespace App\Services\Payments;

interface PaymentProcessor
{
    public function processPayment(): string;
}
