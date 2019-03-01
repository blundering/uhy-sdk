<?php

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
$member = $uhy->member;
$param = [
    'conditions' => [
        [
            'name' => 'mid',
            'value1' => '100',
            'type' => 'integer',
            'op' => 'eq',
        ]
    ],
];

// $result = $member->query($param);

$param = [
    'phone' => '13002951024'
];

// $result = $member->checkexist($param);

$param = [
    'username' => 'LRB测试1',
    'password' => '123456',
    'phone' => '13002951024',
];

// id 4807384
// $result = $member->register($param);

$param = [
    'username' => '13002951024',
    'password' => '123456',
];

$result = $member->login($param);

$param = [
    'mid' => 100,
    'define1' => '自定义测试12',
    'email' => 'zlutao@qq.com',
    'ts' => '2019-03-01 13:21:20',
];

// $result = $member->save($param);

print(json_encode($result, JSON_UNESCAPED_UNICODE));