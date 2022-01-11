<?php

namespace App\Http\Services\Shops;

class AccountService
{
    public function getAccount(string $email)
    {
        echo 'account :' . $email;
    }
}
