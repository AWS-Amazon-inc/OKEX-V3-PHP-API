<?php
/**
 * Created by PhpStorm.
 * User: hengliu
 * Date: 2019/5/7
 * Time: 2:59 PM
 */

require './vendor/autoload.php';

require './Config.php';

use okv3\Config;
use okv3\FuturesApi;
use okv3\SpotApi;
use okv3\SwapApi;
use Workerman\Connection\AsyncTcpConnection;
use Workerman\Worker;


// 交割合约-Ticker
$obj = new FuturesApi(Config::$config);
//$res = $obj->getKline("EOS-USD-190628","60");
//$res = $obj->getTicker("EOS-USD-190628");
//$res = $obj->getCoinAccounts("eos");

// 永续合约-Ticker
$obj = new SwapApi(Config::$config);
$res = $obj->getSpecificTicker("EOS-USD-SWAP");
//$res = $obj->getCoinAccounts("EOS-USD-SWAP");

// 币币交易-Ticker
$obj = new SpotApi(Config::$config);
//$res = $obj->getSpecificTicker("EOS-USDT");

//var_dump($res);
var_dump(json_encode($res, JSON_PRETTY_PRINT));
