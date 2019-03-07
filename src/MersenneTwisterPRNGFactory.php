<?php declare(strict_types=1);

namespace Studionone\RandomPHP;

use Studionone\RandomPHP\Interfaces\PseudoRandomNumberGeneratorFactoryInterface;
use Studionone\RandomPHP\Interfaces\PseudoRandomNumberGeneratorInterface;
use Studionone\RandomPHP\Interfaces\SeedGeneratorInterface;

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
