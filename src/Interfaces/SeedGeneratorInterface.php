<?php declare(strict_types=1);

namespace joshredwards\RandomPHP\Interfaces;

interface SeedGeneratorInterface
{
    public function getSeed(): string;
}
