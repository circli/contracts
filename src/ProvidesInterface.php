<?php declare(strict_types=1);

namespace Circli\Contracts;

interface ProvidesInterface
{
    /**
     * Return a key value list with extension/components this module exposes
     *
     * Example:
     *      'templates' => true,
     *      'assets/js' => false,
     *      'assets/styles' => true,
     *
     * @return array<string, bool>
     */
    public function provides(): array;
}