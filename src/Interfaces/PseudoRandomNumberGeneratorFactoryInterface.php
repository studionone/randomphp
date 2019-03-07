<?php declare(strict_types=1);

namespace Studionone\RandomPHP\Interfaces;

interface PseudoRandomNumberGeneratorFactoryInterface
{
    public function makePseudoRandomNumberGenerator(
        SeedGeneratorInterface $seedGenerator
    ): PseudoRandomNumberGeneratorInterface;
}
