<?php

namespace Yonyou\Uhy;

use Hanson\Foundation\Foundation;

/**
 * Class Uhy
 *
 * @package Yonyou\Uhy
 *          
 * @property AccessToken\AccessToken   $access_token
 * @property Application\Member\Member $member
 */
class Uhy extends Foundation
{
    protected $providers = [
        AccessToken\ServiceProvider::class,
        Application\Member\ServiceProvider::class,
    ];
}