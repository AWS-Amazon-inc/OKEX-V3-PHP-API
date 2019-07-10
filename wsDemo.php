<?php
/**
 * Created by PhpStorm.
 * User: hengliu
 * Date: 2019/5/10
 * Time: 8:22 PM
 */

//namespace okv3;

require './vendor/autoload.php';

require './Config.php';

use okv3\Config;
use okv3\Websocket;

$obj = new Websocket(Config::$config);
// 回调函数
$callback = function ($data) use ($obj){

    $ntime = $obj->getTimestamp();
    $otime = $obj -> oldTime;

    $diff = strtotime($ntime)-strtotime($otime);

    print_r($obj->getTimestamp()." ($diff) ".$data);
    print_r("\n");
    $obj -> oldTime = $ntime;

};

$depth200Callback = function ($data) use ($obj){
    print_r(date("Y-m-d H:i:s ",time()).json_encode($data));
    print_r("\n");

};

/**
 * spot
 */
$instrumentId = "BTC-USDT";
//$obj->subscribe($callback,"spot/ticker:$instrumentId");
//$obj->subscribe($callback,"spot/candle60s:$instrumentId");
//$obj->subscribe($callback,"spot/depth:$instrumentId");
//$obj->subscribe($callback,"spot/depth5:$instrumentId");
//$obj->subscribe($callback,"spot/trade:$instrumentId");
//$obj->subscribe($callback);
//$obj->subscribe($callback,"spot/order:$instrumentId");

//$obj->subscribe($callback,["spot/order:$instrumentId","spot/ticker:$instrumentId"]);

/**
 * margin
 */
//$obj->subscribe($callback,"spot/margin_account:EOS-USDT");

/**
 * futures
 */
//$instrumentId= "TRX-USD-190927";
$instrumentId= "BTC-USD-190719";
//$instrumentId= "BTC-USD-190628";
$coin = "EOS";
//$obj->subscribe($callback,"futures/ticker:$instrumentId");
//$obj->subscribe($callback,"futures/candle1800s:$instrumentId");
//$obj->subscribe($callback,"futures/candle60s:$instrumentId");
//$obj->subscribe($callback,"futures/candle900s:$instrumentId");
//$obj->subscribe($callback,"futures/depth:$instrumentId");
$obj->subscribe($callback,"futures/depth5:$instrumentId");
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


