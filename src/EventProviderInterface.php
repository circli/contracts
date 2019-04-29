<?php declare(strict_types=1);

namespace Circli\Contracts;

interface EventProviderInterface
{
	public function registerEvents(\Psr\EventDispatcher\EventDispatcherInterface $dispatcher): void;
}
