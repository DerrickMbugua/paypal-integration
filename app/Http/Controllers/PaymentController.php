<?php

namespace App\Http\Controllers;

use Omnipay\Omnipay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    // private $gateway;

    // public function __construct()
    // {
    //     Log::info("Gateway");
    //     $this->gateway = Omnipay::create('PayPal_Rest');
    //     $this->gateway = setClientId(env('PAYPAL_CLIENT_ID'));
    //     $this->gateway = setSecret(env('PAYPAL_CLIENT_SECRET'));
    //     $this->gateway = setTestMode(true);
    // }

    // public function pay(){
    //     try {
    //         Log::info("Pay");
    //         $response = $this->gateway->purchase(array(
    //             'amount' => 1,
    //             'currency' => env('PAYPAL_CURRENCY'),
    //             'returnUrl' => url('success'),
    //             'cancelUrl' => url('error')
    //         ))->send();

    //         if($response->isRedirect()){
    //             $response->redirect();
    //         }else{
    //             return $response->getMessage();
    //         }

    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }
    // }
}
