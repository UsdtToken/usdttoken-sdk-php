<?php

$config = [
    //

    // MerchantId
    // 商户号
    'merchant_number' => '630729',

    // api key
    // APP秘钥
    'api_key' => 'uPakKSnFq8O8dgHfCU5vQHvYFnBtd7ug',

    // gateway url
    // 请求网关地址
    'gateway_address' => 'http://192.168.2.47:8088/'

];

define('CLIENTCONFIG', serialize($config));
