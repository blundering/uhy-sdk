<?php
/**
 * Created by PhpStorm.
 * User: rubin
 * Date: 2019-03-04
 * Time: 19:56
 */

namespace Yonyou\Uhy\Application\Points;

use Yonyou\Uhy\Core\Api;

class Points extends Api
{
    const URL_PATH = '/open/mm/points/';

    public function calc($params)
    {
        return $this->postJSON(self::URL_PATH . 'calc', $params);
    }
}