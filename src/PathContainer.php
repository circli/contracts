<?php declare(strict_types=1);

namespace Circli\Contracts;

interface PathContainer
{
    public function getConfigPath(): string;

    public function getTemplatePath(): string;

    public function getExtensionPath(): string;

    public function getConfigFile(string $file): string;

    public function loadConfigFile(string $file): array;

    public function getBasePath(): string;
}
