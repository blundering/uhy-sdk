<?php
/**
 * Created by PhpStorm.
 * User: rubin
 * Date: 2019-02-28
 * Time: 19:59
 */

namespace Yonyou\Uhy\Application\Member;


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
        $pimple['member'] = function ($pimple) {
            return new Member($pimple['access_token']);
        };
    }
}