<?php

namespace App\Http\Services\Shops;

class SmsService
{
    public function sendSMS(string $mobilePhone)
    {
        echo "Sending an message to " . $mobilePhone;
    }
}
