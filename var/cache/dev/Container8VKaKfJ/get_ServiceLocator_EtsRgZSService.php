<?php

namespace Container8VKaKfJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EtsRgZSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EtsRgZS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EtsRgZS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'request' => ['privates', '.errored..service_locator.EtsRgZS.Symfony\\Component\\BrowserKit\\Request', NULL, 'Cannot autowire service ".service_locator.EtsRgZS": it references class "Symfony\\Component\\BrowserKit\\Request" but no such service exists.'],
        ], [
            'request' => 'Symfony\\Component\\BrowserKit\\Request',
        ]);
    }
}
