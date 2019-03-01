<?php

namespace Yonyou\Uhy\Core;

use Hanson\Foundation\AbstractApi;
use Yonyou\Uhy\AccessToken\AccessToken;

class Api extends AbstractApi
{
    public $accessToken;
    public $domain;

    public function __construct(AccessToken $accessToken)
    {
        $this->accessToken = $accessToken;
        $this->domain = $accessToken::DOMAIN;
    }

    public function request($method, $params, $files =[])
    {
        $url = $this->domain . '/' . trim($params[0], '/');
        $url .= '/v1?access_token=' . $this->accessToken->getToken();
        $params = array_merge($params[1], [
            'timestamp' => time(),
        ]);
        $sign = $this->accessToken->signature($params);
        $http = $this->getHttp();
        $this->http->addMiddleware($this->headerMiddleware([
            'X-Authorization' => $sign,
        ]));
        $response = call_user_func_array([$http, $method], [$url, $params, $files]);

        return json_decode(strval($response->getBody()), true);
    }

    public function postJSON($path, $params)
    {
        return $this->request('json', [$path, $params]);
    }

}