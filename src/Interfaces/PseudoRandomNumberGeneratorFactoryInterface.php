<?php

declare(strict_types=1);

namespace Studionone\RandomPHP\Interfaces;

/**
 * Interface PseudoRandomNumberGeneratorFactoryInterface
 *
 * @package Studionone\RandomPHP\Interfaces
 */
interface PseudoRandomNumberGeneratorFactoryInterface
{
    /**
     * @param SeedGeneratorInterface $seedGenerator
     * @return PseudoRandomNumberGeneratorInterface
     */
    public function makePseudoRandomNumberGenerator(
        SeedGeneratorInterface $seedGenerator
    ): PseudoRandomNumberGeneratorInterface;
}
