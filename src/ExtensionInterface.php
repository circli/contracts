<?php declare(strict_types=1);

namespace Circli\Contracts;

interface ExtensionInterface
{
    public function configure(PathContainer $pathContainer = null): array;
}
