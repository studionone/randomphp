<?php declare(strict_types=1);

namespace joshredwards\RandomPHP;

use joshredwards\RandomPHP\Interfaces\SeedGeneratorInterface;

/**
 * Generates a random-number-generator seed
 */
class SeedGeneratedFromUrlContext implements SeedGeneratorInterface
{
    protected $route;

    public function __construct(
        $route
    )
    {
        $this->route = $route;
    }

    public function getSeed(): string
    {
        return $this->route;
    }
}
