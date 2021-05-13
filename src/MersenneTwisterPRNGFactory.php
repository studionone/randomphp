<?php

declare(strict_types=1);

namespace Studionone\RandomPHP;

use Studionone\RandomPHP\Interfaces\{
    PseudoRandomNumberGeneratorFactoryInterface,
    PseudoRandomNumberGeneratorInterface,
    SeedGeneratorInterface
};

/**
 * Class MersenneTwisterPRNGFactory
 *
 * @package Studionone\RandomPHP
 */
class MersenneTwisterPRNGFactory implements PseudoRandomNumberGeneratorFactoryInterface
{
    /**
     * @param SeedGeneratorInterface $seedGenerator
     * @return PseudoRandomNumberGeneratorInterface
     */
    public function makePseudoRandomNumberGenerator(
        SeedGeneratorInterface $seedGenerator
    ): PseudoRandomNumberGeneratorInterface {
        $mersenneTwister = new MersenneTwisterPRNG();
        $mersenneTwister->seedWithString($seedGenerator->getSeed());

        return $mersenneTwister;
    }
}
