<?php

namespace Circli\Contracts;

interface InitCliApplication
{
    public function initCli(\Symfony\Component\Console\Application $adr);
}
