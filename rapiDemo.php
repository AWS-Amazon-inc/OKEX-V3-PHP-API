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
use okv3\MarginApi;
use okv3\SpotApi;
use okv3\SwapApi;
use Workerman\Connection\AsyncTcpConnection;
use Workerman\Worker;

/**
 * 资金账户
 */
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
//$res = $obj -> getWithdrawalFee($coin);

/**
 * 币币
 */
$instrumentId = "EOS-USDT";
$currency = "EOS";
$obj = new SpotApi(Config::$config);
// 币币账户信息
//$res = $obj -> getAccountInfo();
// 单一币种账户信息
//$res = $obj -> getCoinAccountInfo($currency);
// 账单流水查询
//$res = $obj -> getLedgerRecord($currency);
// 下单
//$res = $obj -> takeOrder($instrumentId,"buy","0.1","3");
// 撤销指定订单
//$res = $obj -> cancelOrder($instrumentId,"3271097095905280");
// 获取订单列表
//$res = $obj -> getOrdersList($instrumentId,"2","","",1);
// 获取订单信息
//$res = $obj -> getOrderInfo($instrumentId,"3271189018971137");
// 获取成交明细
//$res = $obj -> getFills($instrumentId,"3230072570268672");
// 获取币对信息
//$res = $obj -> getCoinInfo();
// 获取深度数据
//$res = $obj -> getDepth($instrumentId,1);
// 获取全部ticker信息
//$res = $obj -> getTicker();
// 获取某个ticker信息
//$res = $obj -> getSpecificTicker($instrumentId);
// 获取成交数据
//$res = $obj -> getDeal($instrumentId);
// 获取K线
//$res = $obj -> getKine($instrumentId);

// 币币杠杆账户信息
$instrumentId = "EOS-USDT";
$currency = "EOS";
$obj = new MarginApi(Config::$config);
//$res = $obj -> getAccountInfo();
// 单一币种账户信息
//$res = $obj -> getCoinAccountInfo($instrumentId);
// 账单流水查询
//$res = $obj -> getLedgerRecord($instrumentId);
// 杠杆配置信息
//$res = $obj -> getMarginConf();
// 某个杠杆配置信息
//$res = $obj -> getMarginSpecialConf($instrumentId);
// 获取借币记录
//$res = $obj -> getBorrowedRecord();
// 某账户借币记录
$res = $obj -> getSpecialBorrowedRecord($instrumentId,0);
// 借币
//$res = $obj -> borrowCoin($instrumentId, $currency, 0.1);
// 还币
//$res = $obj -> returnCoin($instrumentId, $currency, 0.1, "");
// 下单
//$res = $obj -> takeOrder($instrumentId,"sell","0.1","2","10");
// 撤销指定订单
//$res = $obj -> cancelOrder($instrumentId,"3292706588398592");
// 获取订单列表
//$res = $obj -> getOrdersList($instrumentId,"-1","","",1);
// 获取订单信息
//$res = $obj -> getOrderInfo($instrumentId,"3292706588398592");
// 获取成交明细
//$res = $obj -> getFills($instrumentId,"3292706588398592");


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
