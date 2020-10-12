<?php declare(strict_types=1);

namespace Circli\Contracts;

interface ModuleInterface extends ExtensionInterface
{
    public function configure(PathContainer $pathContainer = null): array;
}
