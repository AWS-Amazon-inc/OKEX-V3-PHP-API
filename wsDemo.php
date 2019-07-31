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

    print_r($ntime." ".$data);
    print_r("\n");
};

$callbackTime = function ($data) use ($obj){

    $ntime = $obj->getTimestamp();
    $otime = $obj -> oldTime;

    // 上次与本次推送时间差，
    $lastDiff = $obj->dateToTimestamp($ntime)-$obj->dateToTimestamp($otime);
//    print_r($ntime." ($diff) ".$data);
//    print_r("\n");

    // 本次，本地时间戳与推送数据时间戳的差
    $dataArr = json_decode($data, true);
    if (!empty($dataArr["data"][0]["timestamp"])){
        $timestamp = $dataArr["data"][0]["timestamp"];
//    if (!empty($dataArr["data"][0]["last_fill_time"])){
//        $timestamp = $dataArr["data"][0]["last_fill_time"];
        @$diff = $obj->dateToTimestamp($ntime)-$obj->dateToTimestamp($timestamp);
        print_r($ntime." ($lastDiff)"." ($diff) ".$data);
        print_r("\n");
    }else{
        print_r($obj->getTimestamp()." ".$data);
        print_r("\n");
    }

    $obj -> oldTime = $ntime;

};

/**
 * spot
 */
$instrumentId = "BTC-USDT";
//$obj->subscribe($callbackTime,"spot/ticker:$instrumentId");
//$obj->subscribe($callback,"spot/candle60s:$instrumentId");
//$obj->subscribe($callback,"spot/depth:$instrumentId");
//$obj->subscribe($callback,"spot/depth5:$instrumentId");
//$obj->subscribe($callbackTime,"spot/trade:$instrumentId");
//$obj->subscribe($callback);
//$obj->subscribe($callbackTime,"spot/order:$instrumentId");
//$obj->subscribe($callback,"spot/account:OKDK");

//$obj->subscribe($callbackTime,["spot/ticker:$instrumentId","spot/depth5:$instrumentId"]);

/**
 * margin
 */
//$obj->subscribe($callback,"spot/margin_account:EOS-USDT");

/**
 * futures
 */
//$instrumentId= "TRX-USD-190927";
$instrumentId= "BTC-USD-190802";
//$instrumentId= "BTC-USD-190628";
$coin = "EOS";
$obj->subscribe($callbackTime,"futures/ticker:$instrumentId");
//$obj->subscribe($callback,"futures/candle1800s:$instrumentId");
//$obj->subscribe($callback,"futures/candle60s:$instrumentId");
//$obj->subscribe($callback,"futures/candle900s:$instrumentId");
//$obj->subscribe($callback,"futures/depth:$instrumentId");
//$obj->subscribe($callbackTime,"futures/depth5:$instrumentId");
//$obj->subscribe($callback,"futures/trade:$instrumentId");
//$obj->subscribe($callback,"futures/account:$coin");
$obj->subscribe($callbackTime,"futures/order:$instrumentId");

//$obj->subscribe($callback,"futures/position:$instrumentId");
//$obj->subscribe($callback,"futures/estimated_price:$instrumentId");
//$obj->subscribe($callback,"futures/price_range:$instrumentId");
//$obj->subscribe($callback,"futures/mark_price:$instrumentId");
//$obj->subscribe($callback,"futures/mark_price:$instrumentId");
//$obj->subscribe($callback,"futures/instruments");

//$obj->subscribe($callback,["futures/position:$instrumentId","futures/order:$instrumentId"]);


/**
 * swap
 */
$instrumentId= "TRX-USD-SWAP";
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


