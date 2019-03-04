<?php
/**
 * Created by PhpStorm.
 * User: rubin
 * Date: 2019-03-04
 * Time: 19:59
 */

header('Content-Type:application/json;charset=utf8');
require_once __DIR__ . '/../vendor/autoload.php';

$config = [
    'appId' => 'U会员系统中分配的appID',
    'secret' => 'U会员系统中分配的secret',
    'accessToken' => 'U会员系统中分配的accessToken',
    'debug' => true,
    'log' => [
        'name' => 'uhy',
        'file' => __DIR__ . '/uhy.log',
        'level' => 'debug',
        'permission' => 0777,
    ],
];

$uhy = new \Yonyou\Uhy\Uhy($config);

$points = $uhy->points;

$params = [
    "mid" => "100",
    "action_type" => "200",
    "money" => 100.00,
    "multiple" => 2,
    "extra_points" => 20,
];

$result = $points->calc($params);
print_r($result);