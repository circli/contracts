<?php

namespace Circli\Contracts;

interface EventSubscriberInterface
{
    /**
     * @return array<class-string|string, callable|class-string|array<class-string, string>>
     */
    public static function getSubscribedEvents(): array;
}
