<?php
/**
 * Created by PhpStorm.
 * User: rubin
 * Date: 2019-03-04
 * Time: 20:00
 */

namespace Yonyou\Uhy\Application\Points;


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
        $pimple['points'] = function ($pimple) {
            return new Points($pimple['access_token']);
        };
    }
}