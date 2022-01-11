<?php

namespace App\Http\Services\Shops;

class ShopFacade
{
    private static $instance;
    private $accountService;
    private $paymentService;
    private $shippingService;
    private $emailService;
    private $smsService;

    private function __construct()
    {
        $this->accountService = new AccountService();
        $this->paymentService = new PaymentService();
        $this->shippingService = new ShippingService();
        $this->emailService = new EmailService();
        $this->smsService = new SmsService();
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new ShopFacade();
        }
        return self::$instance;
    }

    public function buyProductByCashWithFreeShipping(string $email)
    {
        $this->accountService->getAccount($email);
        $this->paymentService->paymentByCash();
        $this->shippingService->freeShipping();
        $this->emailService->sendMail($email);
        echo 'done : buyProductByCashWithFreeShipping';
    }

    public function buyProductByPaypalWithStandardShipping(string $email, string $mobilePhone)
    {
        $this->accountService->getAccount($email);
        $this->paymentService->paymentByPaypal();
        $this->shippingService->standardShipping();
        $this->emailService->sendMail($email);
        $this->smsService->sendSMS($mobilePhone);

        echo 'done : buyProductByCashWithFreeShipping';
    }
}
