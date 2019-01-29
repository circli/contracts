<?php declare(strict_types=1);

namespace Circli\Contracts;

use Circli\EventDispatcher\EventDispatcherInterface;

interface EventProviderInterface
{
	public function registerEvents(EventDispatcherInterface $dispatcher): void;
}
