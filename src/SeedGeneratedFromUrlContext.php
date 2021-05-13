<?php

declare(strict_types=1);

namespace Studionone\RandomPHP;

use Studionone\RandomPHP\Interfaces\SeedGeneratorInterface;

/**
 * Class SeedGeneratedFromUrlContext
 * Generates a random-number-generator seed
 *
 * @package Studionone\RandomPHP
 */
class SeedGeneratedFromUrlContext implements SeedGeneratorInterface
{
    /** @var string */
    protected $route;

    /**
     * SeedGeneratedFromUrlContext constructor.
     *
     * @param string $route
     */
    public function __construct(string $route)
    {
        $this->route = $route;
    }

    /**
     * @inheritDoc
     */
    public function getSeed(): string
    {
        return $this->route;
    }
}
