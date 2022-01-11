<?php

namespace App\Http\Services\Shops;

class EmailService
{
    public function sendMail(string $mailTo)
    {
        echo 'send mail to:'. $mailTo;
    }
}
