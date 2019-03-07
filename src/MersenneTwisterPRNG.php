<?php declare(strict_types=1);

namespace Studionone\RandomPHP;

use Studionone\RandomPHP\Exceptions\RandomChoiceException;
use Studionone\RandomPHP\Interfaces\PseudoRandomNumberGeneratorInterface;
use mersenne_twister\twister as Twister;

class MersenneTwisterPRNG implements PseudoRandomNumberGeneratorInterface
{
    protected $twister;

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
     * Seed (or re-seed) the pseudo-random number generator using the
     * given string.
     */
    public function seedWithString(string $seed)
    {
        $this->twister->init_with_string($seed);
    }

    /**
     * Seed (or re-seed) the pseudo-random number generator using the
     * given integer.
     */
    public function seedWithInt(int $seed)
    {
        $this->twister->init_with_integer($seed);
    }

    /**
     * Give one randomly-chosen item out of an array of choices.
     *
     * TODO Adjust this to support any array-like collection.
     */
    public function chooseOutOf(array $choices)
    {
        $length = count($choices);
        if ($length == 0) {
            throw new RandomChoiceException(
                'Can\'t randomly choose items from an empty array');
        }

        return $choices[$this->getIntInRange(0, $length - 1)];
    }

    /**
     * Get a pseudo-random integer within the given minimum and
     * maximum (inclusive).
     */
    public function getIntInRange(
        int $minimum,
        int $maximum
    ): int
    {
        return $this->twister->rangeint($minimum, $maximum);
    }
}
