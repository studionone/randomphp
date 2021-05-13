<?php

declare(strict_types=1);

namespace Studionone\RandomPHP\Interfaces;

/**
 * Interface PseudoRandomNumberGeneratorInterface
 *
 * @package Studionone\RandomPHP\Interfaces
 */
interface PseudoRandomNumberGeneratorInterface
{
    /**
     * Seed (or re-seed) the pseudo-random number generator using the
     * given string.
     *
     * This should reset the internal state of the pseudo-random number
     * generator. Its behaviour from this point should be the same as
     * a newly-constructed instance initialised with the same seed.
     *
     * @param string $seed
     * @return mixed
     */
    public function seedWithString(string $seed);

    /**
     * Seed (or re-seed) the pseudo-random number generator using the
     * given integer.
     *
     * This should reset the internal state of the pseudo-random number
     * generator. Its behaviour from this point should be the same as
     * a newly-constructed instance initialised with the same seed.
     *
     * @param int $seed
     * @return mixed
     */
    public function seedWithInt(int $seed);

    /**
     * Get a pseudo-random integer within the given minimum and
     * maximum (inclusive).
     *
     * @param int $minimum
     * @param int $maximum
     * @return int
     */
    public function getIntInRange(
        int $minimum,
        int $maximum
    ): int;

    /**
     * Give one randomly-chosen item out of an array of choices.
     *
     * TODO Adjust this to support any array-like collection.
     *
     * @param array $choices
     * @return mixed
     */
    public function chooseOutOf(array $choices);
}
