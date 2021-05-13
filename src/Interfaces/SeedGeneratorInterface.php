<?php

declare(strict_types=1);

namespace Studionone\RandomPHP\Interfaces;

/**
 * Interface SeedGeneratorInterface
 *
 * @package Studionone\RandomPHP\Interfaces
 */
interface SeedGeneratorInterface
{
    /**
     * @return string
     */
    public function getSeed(): string;
}
