<?php
//demo
//回调示例
$call_back_data = array(
    'timestamp' => (string) $_POST['timestamp'],
    'nonce' => (string) $_POST['nonce'],
    'sign' => (string) $_POST['sign'],
    'body' => (string) $_POST['body'],
);

file_put_contents("call_back_data.txt", "\n" . date('Y-m-d H:i:s') . $call_back_data['body'] . "\n", FILE_APPEND);

$sign = md5($call_back_data['body'] . $CLIENTCONFIG['api_key'] . $call_back_data['nonce'] . $call_back_data['timestamp']);

if ($call_back_data['sign'] == $sign) {
    $body = json_decode($call_back_data['body']);

    //$body->tradeType 1 get deposit callback   2 get withdraw callback
    //$body->tradeType 1充币回调 2提币回调
    if ($body->tradeType == 1) {

        return "success";

    } elseif ($body->tradeType == 2) {
        //$body->status  1 success  2 failed
        //$body->status 1成功 2失败
        if($body->status == 1){
            //todo
            //业务处理
        }
        else if($body->status == 2){
             //todo
            //业务处理 
        }
        return "success";
    }

} else {
    echo 'sign error';
    file_put_contents("call_back_data.txt", "\n" . date('Y-m-d H:i:s') . "\n sign error: \n" . $sign . "\n" . $call_back_data['sign'] . "\n", FILE_APPEND);
}
