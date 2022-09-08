<?php

/**
 * @see       https://github.com/laughface809/php-api-server for the canonical source repository
 * @copyright https://github.com/laughface809/php-api-server/blob/master/COPYRIGHT.md
 * @license   https://github.com/laughface809/php-api-server/blob/master/LICENSE.md New BSD License
 */

namespace Domain\Service\Logic;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class DataLogicFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $options = $options ?: null;
        return new $requestedName();
    }
}
