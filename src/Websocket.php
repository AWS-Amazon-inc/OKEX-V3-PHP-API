<?php
/**
 * Created by PhpStorm.
 * User: hengliu
 * Date: 2019/5/10
 * Time: 8:22 PM
 */

namespace okv3;

//require '../vendor/autoload.php';

use Workerman\Lib\Timer;
use Workerman\Worker;
use Workerman\Connection\AsyncTcpConnection;

/*
*订阅数据函数
$callback type: function 回调函数，当获得数据时会调用
*/

class Websocket extends Utils{

    function subscribe($callback, $sub_str="swap/ticker:BTC-USD-SWAP") {
        $GLOBALS['sub_str'] = $sub_str;
        $GLOBALS['callback'] = $callback;
        $worker = new Worker();
        $worker->onWorkerStart = function($worker) {
            // ssl需要访问443端口
            $con = new AsyncTcpConnection('ws://real.okex.com:10442/ws/v3');

            // 设置以ssl加密方式访问，使之成为wss
            $con->transport = 'ssl';

            // 定时器
            Timer::add(20, function() use ($con)
            {
                $con->send("ping");
//                print_r("hello world");
            });

            $con->onConnect = function($con) {

                // 登陆
                $timestamp = self::get_millisecond();
                $sign = self::signature($timestamp,"GET","/users/self/verify","",self::$apiSecret);
                $data = json_encode([
                    'op' => "login",
                    'args' => [self::$apiKey, self::$passphrase, $timestamp, $sign]
                ]);

                $con->send($data);
            };

            $con->onMessage = function($con, $data) {

                // 解压数据
                $data = gzinflate($data);

                call_user_func_array($GLOBALS['callback'], array($data));

                $data = json_decode($data, true);

                if (isset($data["success"])){
                    // 订阅频道
                    $data = json_encode([
                        'op' => "subscribe",
                        'args' => $GLOBALS['sub_str']
                    ]);
                    $con->send($data);
                }

                if(isset($data['ping'])) {

                }
            };

            $con->onClose = function () use ($con) {
                print_r("reconnecting\n");
                $con->connect();
            };

            $con->connect();
        };

        Worker::runAll();
    }

}

//subscribe(function ($data){print_r(json_encode($data,JSON_PRETTY_PRINT));}, "swap/ticker:BTC-USD-SWAP");
