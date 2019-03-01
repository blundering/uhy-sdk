# uhy-sdk

## uhy-sdk是什么?
基于 [foundation-sdk](https://github.com/Hanson/foundation-sdk) 学习编写的 [U会员](https://uhy.yonyoucloud.com/) SDK.

## 实例 Demo
生成实例
```PHP
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

/*
请求URL：
https://uhy.yonyoucloud.com/open/mm/member/checkexist/v1?access_token=ACCESS_TOKEN

请求方式：
POST

请求参数
{
    "username": "zhangsan",
    "phone": "13888888888"
}
*/

// 使用SDK
$params = [
    'phone' => '13888888888',
];
$result = $member->checkexist($params);
```