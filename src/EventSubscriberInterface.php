<?php

namespace Circli\Contracts;

interface EventSubscriberInterface
{
	public static function getSubscribedEvents(): array;
}
