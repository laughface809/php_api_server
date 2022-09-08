<?php

/**
 * @see       https://github.com/laughface809/php-api-server for the canonical source repository
 * @copyright https://github.com/laughface809/php-api-server/blob/master/COPYRIGHT.md
 * @license   https://github.com/laughface809/php-api-server/blob/master/LICENSE.md New BSD License
 */

namespace Domain\Service;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Domain\Service\Logic\JsonDbManagerLogic;

class DataServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $options = $options ?: null;
        $jsonDbManager = $container->get(JsonDbManagerLogic::class);
        return new $requestedName(
            $jsonDbManager
        );
    }
}
