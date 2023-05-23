<?php

namespace App\Services\Payments;

class CreditCardProcessor implements PaymentProcessor
{
    private const STATUSES = [
        'успешно', 'недостаточно денег', 'банк отклонил платеж'
    ];

    public function processPayment(): string
    {
        return self::STATUSES[array_rand(self::STATUSES)];

    }
}
