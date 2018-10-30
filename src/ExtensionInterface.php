<?php

namespace Circli\Contracts;

interface ExtensionInterface
{
    public function __construct(PathContainer $paths);
    public function configure(): array;
}