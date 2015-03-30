<?php


namespace Silex\Provider;

use League\Fractal\Manager;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class FractalServiceProvider
 * @package Silex\Provider
 */
class FractalServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     */
    public function register(Container $container)
    {
        $container["fractal.manager"] = function () {
            return new Manager();
        };
    }
}

// EOF
