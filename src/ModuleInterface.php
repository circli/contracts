<?php

namespace Circli\Contracts;

interface ModuleInterface
{
    public function __construct(PathContainer $paths);
    public function configure(): array;
    public function getRoutes(): array;
}
