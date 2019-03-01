<?php
/**
 * Created by PhpStorm.
 * User: rubin
 * Date: 2019-02-28
 * Time: 20:15
 */

namespace Yonyou\Uhy\AccessToken;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $pimple)
    {
        $pimple['access_token'] = function ($pimple) {
            return new AccessToken($pimple->getConfig()['appId'], $pimple->getConfig()['secret'], $pimple->getConfig()['accessToken']);
        };
    }
}