<?php declare(strict_types=1);

namespace Circli\Contracts;

use Polus\Router\RouterCollectionInterface;
use Psr\Container\ContainerInterface;

interface InitHttpApplication
{
    public function initHttp(RouterCollectionInterface $router, ContainerInterface $container = null);
}
