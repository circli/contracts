<?php declare(strict_types=1);

namespace Circli\Contracts;

use Circli\Console\Application;
use Psr\Container\ContainerInterface;

interface InitCliApplication
{
    public function initCli(Application $application, ContainerInterface $container);
}
