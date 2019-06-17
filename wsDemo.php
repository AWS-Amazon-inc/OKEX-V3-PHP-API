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
    print_r(date("Y-m-d H:i:s ",time()).$data);
    print_r("\n");
};

/**
 * spot
 */
//$obj->subscribe($callback,"spot/ticker:EOS-USDT");
//$obj->subscribe($callback,"spot/candle60s:EOS-USDT");
//$obj->subscribe($callback,"spot/depth:XRP-BTC");
//$obj->subscribe($callback,"spot/depth5:EOS-USDT");
//$obj->subscribe($callback,"spot/trade:ETH-USDT");
//$obj->subscribe($callback,"spot/account:EOS");
$obj->subscribe($callback,"spot/order:EOS-USDT");

//$obj->subscribe($callback,["spot/order:EOS-USDT","spot/ticker:EOS-USDT"]);

/**
 * margin
 */
//$obj->subscribe($callback,"spot/margin_account:EOS-USDT");

/**
 * futures
 */
$instrumentId= "BTC-USD-190614";
$coin = "EOS";
//$obj->subscribe($callback,"futures/ticker:$instrumentId");
//$obj->subscribe($callback,"futures/candle60s:$instrumentId");
//$obj->subscribe($callback,"futures/depth:$instrumentId");
//$obj->subscribe($callback,"futures/depth5:$instrumentId");
//$obj->subscribe($callback,"futures/trade:$instrumentId");
//$obj->subscribe($callback,"futures/account:$coin");
//$obj->subscribe($callback,"futures/order:$instrumentId");

//$obj->subscribe($callback,"futures/position:$instrumentId");
//$obj->subscribe($callback,"futures/estimated_price:$instrumentId");
//$obj->subscribe($callback,"futures/price_range:$instrumentId");
//$obj->subscribe($callback,"futures/mark_price:$instrumentId");
//$obj->subscribe($callback,"futures/mark_price:$instrumentId");

/**
 * swap
 */
$instrumentId= "EOS-USD-SWAP";
$coin = "EOS";
//$obj->subscribe($callback,"swap/ticker:$instrumentId");
//$obj->subscribe($callback,"swap/candle60s:$instrumentId");
//$obj->subscribe($callback,"swap/depth:$instrumentId");
//$obj->subscribe($callback,"swap/depth5:$instrumentId");
//$obj->subscribe($callback,"swap/trade:$instrumentId");
//$obj->subscribe($callback,"swap/account:$instrumentId");
//$obj->subscribe($callback,"swap/order:$instrumentId");

//$obj->subscribe($callback,"swap/position:$instrumentId");
//$obj->subscribe($callback,"swap/funding_rate:$instrumentId");
//$obj->subscribe($callback,"swap/price_range:$instrumentId");
//$obj->subscribe($callback,"swap/mark_price:$instrumentId");

/**
 * index
 */
//$obj->subscribe($callback,"index/ticker:EOS-USD");
//$obj->subscribe($callback,"index/candle60s:EOS-USD");


