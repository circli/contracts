<?php declare(strict_types=1);

namespace Circli\Contracts;

use Psr\Container\ContainerInterface;
use Psr\EventDispatcher\ListenerProviderInterface;

interface EventProviderInterface
{
    public function getEventProvider(ContainerInterface $container): ListenerProviderInterface;
}
