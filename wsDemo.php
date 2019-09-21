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
    $dataArr = json_decode($data, true);

    $ntime = $obj->getTimestamp();
//    $key = $dataArr
//    print_r($dataArr["op"]);
//    die();
    if (!empty($dataArr["table"]))
        $key = $dataArr["table"];
    elseif(!empty($dataArr["op"]))
        $key = $dataArr["op"];
    else
        $key = "else";

    // 上一次时间
    if (!empty($key) && !empty($obj -> oldTime[$key]))
        $otime = $obj -> oldTime[$key];
    else
        $otime = $ntime;

    // 上次与本次推送时间差，
    $lastDiff = $obj->dateToTimestamp($ntime)-$obj->dateToTimestamp($otime);
//    print_r($ntime." ($diff) ".$data);
//    print_r("\n");

    // 本次，本地时间戳与推送数据时间戳的差
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

//    if (!empty($key) && !empty($obj -> oldTime[$key]))
    $obj -> oldTime[$key] = $ntime;


};

/**
 * spot
 */
$instrumentId = "BTC-USDT";
$coin = "EOS";
//$obj->subscribe($callbackTime,"spot/ticker:$instrumentId");
//$obj->subscribe($callback,"spot/candle3600s:$instrumentId");
//$obj->subscribe($callbackTime,"spot/depth:$instrumentId");
//$obj->subscribe($callbackTime,"spot/depth5:$instrumentId");
//$obj->subscribe($callbackTime,"spot/trade:$instrumentId");
//$obj->subscribe($callback);
//$obj->subscribe($callbackTime,"spot/order:$instrumentId");
//$obj->subscribe($callback,"spot/account:OKDK");

//$obj->subscribe($callbackTime,["spot/ticker:BCH-BTC","spot/ticker:BSV-BTC","spot/ticker:DASH-BTC","spot/ticker:ADA-BTC","spot/ticker:ABL-BTC","spot/ticker:AE-BTC","spot/ticker:ALGO-BTC","spot/ticker:ARDR-BTC","spot/ticker:ATOM-BTC","spot/ticker:BLOC-BTC","spot/ticker:BTT-BTC","spot/ticker:CAI-BTC","spot/ticker:CTXC-BTC","spot/ticker:CVT-BTC","spot/ticker:DCR-BTC","spot/ticker:EGT-BTC","spot/ticker:GUSD-BTC","spot/ticker:HPB-BTC","spot/ticker:HYC-BTC","spot/ticker:KAN-BTC","spot/ticker:LBA-BTC","spot/ticker:LEO-BTC","spot/ticker:LET-BTC","spot/ticker:LSK-BTC","spot/ticker:NXT-BTC","spot/ticker:ORS-BTC","spot/ticker:PAX-BTC","spot/ticker:SC-BTC","spot/ticker:TUSD-BTC","spot/ticker:USDC-BTC","spot/ticker:VITE-BTC","spot/ticker:WAVES-BTC","spot/ticker:WIN-BTC","spot/ticker:WXT-BTC","spot/ticker:XAS-BTC","spot/ticker:YOU-BTC","spot/ticker:ZCO-BTC","spot/ticker:ZIL-BTC","spot/ticker:XRP-BTC","spot/ticker:ELF-BTC","spot/ticker:LRC-BTC","spot/ticker:MCO-BTC","spot/ticker:NULS-BTC","spot/ticker:BCX-BTC","spot/ticker:CMT-BTC","spot/ticker:EDO-BTC","spot/ticker:ITC-BTC","spot/ticker:SBTC-BTC","spot/ticker:ZEC-BTC","spot/ticker:NEO-BTC","spot/ticker:GAS-BTC","spot/ticker:HC-BTC","spot/ticker:QTUM-BTC","spot/ticker:IOTA-BTC","spot/ticker:XUC-BTC","spot/ticker:EOS-BTC","spot/ticker:SNT-BTC","spot/ticker:OMG-BTC","spot/ticker:LTC-BTC","spot/ticker:ETH-BTC","spot/ticker:ETC-BTC","spot/ticker:BCD-BTC","spot/ticker:BTG-BTC","spot/ticker:ACT-BTC","spot/ticker:PAY-BTC","spot/ticker:BTM-BTC","spot/ticker:DGD-BTC","spot/ticker:GNT-BTC","spot/ticker:LINK-BTC","spot/ticker:WTC-BTC","spot/ticker:ZRX-BTC","spot/ticker:BNT-BTC","spot/ticker:CVC-BTC","spot/ticker:MANA-BTC","spot/ticker:KNC-BTC","spot/ticker:GNX-BTC","spot/ticker:ICX-BTC","spot/ticker:XEM-BTC","spot/ticker:ARK-BTC","spot/ticker:YOYO-BTC","spot/ticker:FUN-BTC","spot/ticker:ACE-BTC","spot/ticker:TRX-BTC","spot/ticker:DGB-BTC","spot/ticker:SWFTC-BTC","spot/ticker:XMR-BTC","spot/ticker:XLM-BTC","spot/ticker:KCASH-BTC","spot/ticker:MDT-BTC","spot/ticker:NAS-BTC","spot/ticker:UGC-BTC","spot/ticker:DPY-BTC","spot/ticker:SSC-BTC","spot/ticker:AAC-BTC","spot/ticker:VIB-BTC","spot/ticker:QUN-BTC","spot/ticker:INT-BTC","spot/ticker:IOST-BTC","spot/ticker:INS-BTC","spot/ticker:MOF-BTC"]);

/**
 * margin
 */
//$obj->subscribe($callback,"spot/margin_account:EOS-USDT");

/**
 * futures
 */
//$instrumentId= "EOS-USD-190816";
$instrumentId= "EOS-USD-190920";
$coin = "EOS";
//$obj->subscribe($callbackTime,"futures/ticker:$instrumentId");
//$obj->subscribe($callback,"futures/candle1800s:$instrumentId");
//$obj->subscribe($callback,"futures/candle60s:$instrumentId");
//$obj->subscribe($callback,"futures/candle900s:$instrumentId");
//$obj->subscribe($callbackTime,"futures/depth:$instrumentId");
//$obj->subscribe($callbackTime,"futures/depth5:$instrumentId");
//$obj->subscribe($callbackTime,"futures/trade:$instrumentId");
//$obj->subscribe($callback,["futures/account:$coin"]);
$obj->subscribe($callbackTime,"futures/order:$instrumentId");

//$obj->subscribe($callbackTime,"futures/position:$instrumentId");
//$obj->subscribe($callback,"futures/estimated_price:$instrumentId");
//$obj->subscribe($callback,"futures/price_range:$instrumentId");
//$obj->subscribe($callback,"futures/mark_price:$instrumentId");
//$obj->subscribe($callback,"futures/mark_price:$instrumentId");
//$obj->subscribe($callback,"futures/instruments");

//$obj->subscribe($callbackTime,["futures/depth:$instrumentId","futures/depth5:$instrumentId"]);
//$obj->subscribe($callbackTime,['futures/position:BTC-USD-190927', 'futures/position:LTC-USD-190927', 'futures/position:ETH-USD-190927', 'futures/position:ETC-USD-190927', 'futures/position:XRP-USD-190927', 'futures/position:EOS-USD-190927', 'futures/position:BCH-USD-190927', 'futures/position:BSV-USD-190927', 'futures/position:TRX-USD-190927']);


/**
 * swap
 */
$instrumentId= "BTC-USD-SWAP";
$coin = "EOS";
//$obj->subscribe($callbackTime,"swap/ticker:$instrumentId");
//$obj->subscribe($callback,"swap/candle60s:$instrumentId");
//$obj->subscribe($callbackTime,"swap/depth:$instrumentId");
//$obj->subscribe($callback,"swap/depth5:$instrumentId");
//$obj->subscribe($callback,"swap/trade:$instrumentId");
//$obj->subscribe($callback,"swap/account:$instrumentId");
//$obj->subscribe($callbackTime,"swap/order:$instrumentId");
//$obj->subscribe($callbackTime,["swap/ticker:$instrumentId","swap/depth5:$instrumentId"]);


//$obj->subscribe($callback,"swap/position:$instrumentId");
//$obj->subscribe($callback,"swap/funding_rate:$instrumentId");
//$obj->subscribe($callback,"swap/price_range:$instrumentId");
//$obj->subscribe($callback,"swap/mark_price:$instrumentId");

/**
 * index
 */
//$obj->subscribe($callback,"index/ticker:BTC-USD");
//$obj->subscribe($callback,"index/candle60s:EOS-USD");


