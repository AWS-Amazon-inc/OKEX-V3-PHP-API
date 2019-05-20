<?php
/**
 * Created by PhpStorm.
 * User: hengliu
 * Date: 2019/5/7
 * Time: 2:59 PM
 */

require './vendor/autoload.php';

use okv3\Config;
use okv3\FuturesApi;
use okv3\SpotApi;
use Workerman\Connection\AsyncTcpConnection;
use Workerman\Worker;



// 交割合约-Ticker
$obj = new FuturesApi(Config::$config);
//$res = $obj->getSpecificTicker("EOS-USD-190628");
$res = $obj->getCoinAccounts("eos");

// 币币交易-Ticker
//$obj = new SpotApi();
//$res = $obj->getSpecificTicker("EOS-USDT");

//var_dump($res);
var_dump(json_encode($res, JSON_PRETTY_PRINT));


