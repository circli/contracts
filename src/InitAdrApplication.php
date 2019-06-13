<?php declare(strict_types=1);

namespace Circli\Contracts;

use Psr\Container\ContainerInterface;

interface InitAdrApplication
{
    public function initAdr(\Polus\Adr\Adr $adr, ContainerInterface $container = null);
}