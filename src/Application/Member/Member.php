<?php
/**
 * Created by PhpStorm.
 * User: rubin
 * Date: 2019-02-28
 * Time: 19:51
 */

namespace Yonyou\Uhy\Application\Member;


use Yonyou\Uhy\Core\Api;

class Member extends Api
{
    const URL_PATH = '/open/mm/member/';

    public function query($params)
    {
        return $this->postJson(self::URL_PATH . 'query', $params);
    }

    public function checkexist($params)
    {
        return $this->postJson(self::URL_PATH . 'checkexist', $params);
    }

    public function register($params)
    {
        return $this->postJson(self::URL_PATH . 'register', $params);
    }

    public function login($params)
    {
        return $this->postJSON(self::URL_PATH . 'login', $params);
    }

    public function save($params)
    {
        return $this->postJson(self::URL_PATH . 'save', $params);
    }
}