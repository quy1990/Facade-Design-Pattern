<?php

namespace App\Http\Services\Shops;

class PaymentService
{
    public function paymentByPaypal()
    {
        echo "Payment by Paypal";
    }

    public function PaymentByCreditCard()
    {
        echo "Payment by CreditCard";
    }

    public function PaymentByEBankingAccount()
    {
        echo "Payment by  E-banking account";
    }

    public function PaymentByCash()
    {
        echo "Payment by cash";
    }
}
