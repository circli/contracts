<?php declare(strict_types=1);

namespace Circli\Contracts;

interface InitAdrApplication
{
    public function initAdr(\Polus\Adr\Adr $adr);
}