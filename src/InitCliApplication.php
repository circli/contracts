<?php declare(strict_types=1);

namespace Circli\Contracts;

use Psr\Container\ContainerInterface;

interface InitCliApplication
{
    public function initCli(\Symfony\Component\Console\Application $adr, ContainerInterface $container);
}
