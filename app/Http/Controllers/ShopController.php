<?php

namespace App\Http\Controllers;

use App\Http\Services\Shops\ShopFacade;

class ShopController extends Controller
{
    public function index()
    {
        ShopFacade::getInstance()->buyProductByCashWithFreeShipping("abc@abc.com");
        ShopFacade::getInstance()->buyProductByPaypalWithStandardShipping("abc@abc.com", '123456');
    }
}
