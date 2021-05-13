<?php

declare(strict_types=1);

namespace Studionone\RandomPHP;

use Studionone\RandomPHP\Exceptions\RandomChoiceException;
use Studionone\RandomPHP\Interfaces\PseudoRandomNumberGeneratorInterface;
use mersenne_twister\twister as Twister;

/**
 * Class MersenneTwisterPRNG
 *
 * @package Studionone\RandomPHP
 */
class MersenneTwisterPRNG implements PseudoRandomNumberGeneratorInterface
{
    /** @var Twister */
    protected $twister;

    /**
     * MersenneTwisterPRNG constructor.
     */
    public function __construct()
    {
        $this->twister = new Twister();

        // We don't seed the new instance. Instead, PRNG implementations
        // must be explicitly seeded.
        //
        // This prevents code relying on behaviour not defined by the
        // PRNG interface: the constructor interface is not defined.
    }

    /**
     * @inheritDoc
     */
    public function seedWithString(string $seed)
    {
        $this->twister->init_with_string($seed);
    }

    /**
     * @inheritDoc
     */
    public function seedWithInt(int $seed)
    {
        $this->twister->init_with_integer($seed);
    }

    /**
     * @inheritDoc
     */
    public function chooseOutOf(array $choices)
    {
        $length = count($choices);
        if ($length === 0) {
            throw new RandomChoiceException(
                'Can\'t randomly choose items from an empty array'
            );
        }

        return $choices[$this->getIntInRange(0, $length - 1)];
    }

    /**
     * @inheritDoc
     */
    public function getIntInRange(
        int $minimum,
        int $maximum
    ): int {
        return $this->twister->rangeint($minimum, $maximum);
    }
}
