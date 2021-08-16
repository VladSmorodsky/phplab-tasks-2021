<?php

declare(strict_types=1);

namespace basics;

use basics\BasicsInterface;
use basics\BasicsValidator;

class Basics implements BasicsInterface
{
    private const FIRST_QUARTER = 'first';
    private const SECOND_QUARTER = 'second';
    private const THIRD_QUARTER = 'third';
    private const FOURTH_QUARTER = 'fourth';

    private BasicsValidator $basicsValidator;

    public function __construct(BasicsValidator $basicsValidator)
    {
        $this->basicsValidator = $basicsValidator; 
    }

    /**
     * @param int $minute
     * @return string
     * @throws \InvalidArgumentException
     */
    public function getMinuteQuarter(int $minute): string
    {
        $this->basicsValidator->isMinutesException($minute);

        if ($minute === 0) {
            return self::FOURTH_QUARTER;
        }

        switch (ceil($minute / 15)) {
            case 1:
                return self::FIRST_QUARTER;
            case 2:
                return self::SECOND_QUARTER;
            case 3:
                return self::THIRD_QUARTER;
            default:
                return self::FOURTH_QUARTER;                           
        }
    }

    /**
     * @param int $year
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function isLeapYear(int $year): bool 
    {
        $this->basicsValidator->isYearException($year);

        return ($year % 4 === 0 
            && $year % 100 !== 0)
            || ($year % 400 === 0);
    }

    /**
     * @param string $input
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function isSumEqual(string $input): bool
    {
        $firstPart = 0;
        $secondPart = 0;

        $this->basicsValidator->isValidStringException($input);

        for ($index = 0; $index < floor(strlen($input) / 2); $index++) {
            $firstPart += (int) $input[$index];
            $secondPart += (int) $input[(strlen($input) - 1) - $index];
        }

        return $firstPart === $secondPart;
    }
}
