<?php declare(strict_types=1);

namespace joshredwards\RandomPHP;

use joshredwards\RandomPHP\Interfaces\PseudoRandomNumberGeneratorFactoryInterface;
use joshredwards\RandomPHP\Interfaces\PseudoRandomNumberGeneratorInterface;
use joshredwards\RandomPHP\Interfaces\SeedGeneratorInterface;

class MersenneTwisterPRNGFactory implements PseudoRandomNumberGeneratorFactoryInterface
{
    public function makePseudoRandomNumberGenerator(
        SeedGeneratorInterface $seedGenerator
    ): PseudoRandomNumberGeneratorInterface {

        $mersenneTwister = new MersenneTwisterPRNG();
        $mersenneTwister->seedWithString($seedGenerator->getSeed());

        return $mersenneTwister;
    }
}
