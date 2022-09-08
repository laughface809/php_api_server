<?php

/**
 * @see       https://github.com/laughface809/php-api-server for the canonical source repository
 * @copyright https://github.com/laughface809/php-api-server/blob/master/COPYRIGHT.md
 * @license   https://github.com/laughface809/php-api-server/blob/master/LICENSE.md New BSD License
 */

namespace Domain;

class Module
{
    public function getConfig(): array
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
