<?php

namespace Circli\Contracts;

interface ModuleInterface extends ExtensionInterface
{
    public function __construct(PathContainer $paths);
    public function configure(): array;
}
