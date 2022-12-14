<?php

/**
 * @see       https://github.com/laughface809/php-api-server for the canonical source repository
 * @copyright https://github.com/laughface809/php-api-server/blob/master/COPYRIGHT.md
 * @license   https://github.com/laughface809/php-api-server/blob/master/LICENSE.md New BSD License
 */

namespace Domain\Repository\Db;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class JsonDbFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $options = $options ?: null;
        $config = $container->get('config');
        return new $requestedName(
            $config['json_db']
        );
    }
}
