<?php declare(strict_types=1);

namespace Circli\Contracts;

use Polus\Router\RouterCollection;
use Psr\Container\ContainerInterface;

interface InitHttpApplication
{
    public function initHttp(RouterCollection $router, ContainerInterface $container = null);
}
