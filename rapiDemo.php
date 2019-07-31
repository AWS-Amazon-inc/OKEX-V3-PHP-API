<?php
/**
 * Created by PhpStorm.
 * User: hengliu
 * Date: 2019/5/7
 * Time: 2:59 PM
 */

require './vendor/autoload.php';

require './Config.php';

use okv3\AccountApi;
use okv3\Config;
use okv3\FuturesApi;
use okv3\SpotApi;
use okv3\SwapApi;
use Workerman\Connection\AsyncTcpConnection;
use Workerman\Worker;

// 资金账户API
$obj = new AccountApi(Config::$config);
$coin = "EOS";
// 资金账户信息，多个币种
//$res = $obj -> getWalletInfo();
// 单一币种账户信息
//$res = $obj -> getSpecialWalletInfo($coin);
// 资金划转
//$res = $obj -> transfer($coin,"0.1","6","1","","");
// 提币
//$res = $obj -> withdrawal($coin,"0.1","3","eostoliuheng","123","1");
// 账单流水
//$res = $obj -> getLeger("EOS");
// 获取充值地址
//$res = $obj -> getDepositAddress($coin);
// 查询所有币种的提币记录
//$res = $obj -> getWithdrawalHistory();
// 查询单个币种的提币记录
//$res = $obj -> getCoinWithdrawalHistory($coin);
// 获取所有币种的充值记录
//$res = $obj -> getDepositHistory();
// 查询单个币种的充值记录
//$res = $obj -> getCoinDepositHistory($coin);
// 获取币种列表
//$res = $obj -> getCurrencies();
// 提币手续费
$res = $obj -> getWithdrawalFee($coin);



// 交割合约-Ticker
$instrumentId = "EOS-USD-190927";
$obj = new FuturesApi(Config::$config);
//$res = $obj->getKline("EOS-USD-190628","60");
//$res = $obj->getSpecificTicker($instrumentId);
//$res = $obj->getCoinAccounts("eos");

// 永续合约-Ticker
$obj = new SwapApi(Config::$config);
//$res = $obj->getSpecificTicker("EOS-USD-SWAP");
//$res = $obj->getCoinAccounts("EOS-USD-SWAP");

// 币币交易-Ticker
$obj = new SpotApi(Config::$config);
//$res = $obj->getSpecificTicker("EOS-USDT");

//var_dump($res);
echo (json_encode($res, JSON_PRETTY_PRINT));
echo "\n";
