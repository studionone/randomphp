<?php declare(strict_types=1);

namespace Studionone\Randomphp;

use Studionone\Randomphp\Interfaces\SeedGeneratorInterface;

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
