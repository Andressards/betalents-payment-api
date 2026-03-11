<?php

namespace App\Interfaces;

interface GatewayInterface
{
    public function charge(array $data);
    public function refund(string $transactionId);
}
