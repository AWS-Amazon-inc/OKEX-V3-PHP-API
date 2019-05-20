<?php
/**
 * Created by PhpStorm.
 * User: hengliu
 * Date: 2019/5/10
 * Time: 8:22 PM
 */

//namespace okv3;

require './vendor/autoload.php';

use okv3\Config;
use okv3\Websocket;

$obj = new Websocket(Config::$config);
// 回调函数
$callback = function ($data){
    print_r($data);
    print_r("\n");
};

/**
 * spot
 */
//$obj->subscribe($callback,"spot/ticker:EOS-USDT");
//$obj->subscribe($callback,"spot/candle60s:EOS-USDT");
//$obj->subscribe($callback,"spot/depth:EOS-USDT");
//$obj->subscribe($callback,"spot/depth5:EOS-USDT");
$obj->subscribe($callback,"spot/account:EOS");
//$obj->subscribe($callback,"spot/order:EOS-USDT");


//$obj->subscribe($callback,"spot/account:EOS");
//$obj->subscribe($callback,["futures/account:EOS","spot/account:EOS"]);
//$obj->subscribe($callback,"spot/order:LTC-USDT");


// subscribe($callback,"swap/ticker:BTC-USD-SWAP");
// subscribe($callback,"swap/ticker:BTC-USD-SWAP");
