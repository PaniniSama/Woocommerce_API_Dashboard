<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Automattic\WooCommerce\Client;
use Session;

class ConnectionController extends Controller
{
    public $woocommerce;

    public function __construct(){
        $this->woocommerce = new Client(
            // Session::get('woo_host'),
            // Session::get('woo_key'),
            // Session::get('woo_secret'),
            "http://localhost/atelier_woocommerce",
            "ck_9750fab615b8d9ecc9663e2f853e2b1f2eff1951",
            "cs_d471d900b9945f8ab747ed2fc6d2fa654e47e478",
            [
                'wp_api' => true,
                'version' => 'wc/v3',
            ]
        );
    }

    
}
