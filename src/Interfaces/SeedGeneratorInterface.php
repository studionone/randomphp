<?php declare(strict_types=1);

namespace Studionone\RandomPHP\Interfaces;

interface SeedGeneratorInterface
{
    public function getSeed(): string;
}
