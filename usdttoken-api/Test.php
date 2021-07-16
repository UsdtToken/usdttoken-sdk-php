<?php

//demo

include_once('Clients.php');

$client = new Clients();
//Get Support Coins
// 获取商户支持的币种信息
//$res = $client->supportCoins(true);

// Create Address
// 生成地址
//$res = $client->createAddress(1, '');

// Check Address
// 校验地址合法性
//$res = $client->checkAddress(1, '0x3eb3ecc863d756825e80594e46f3d82abec47a97');

//withdraw
//发送提币申请
//$res = $client->withdraw(1, 1, 2, '0x3eb3ecc863d756825e80594e46f3d82abec47a97', 'http://localhost:8080/callback', time(), 'test withdraw');


echo '<pre>';
print_r(json_decode($res));
echo '</pre>';