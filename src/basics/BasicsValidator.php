<?php

declare(strict_types=1);

namespace basics;

use basics\BasicsValidatorInterface;

class BasicsValidator implements BasicsValidatorInterface
{
    /**
     * @param int $minute
     * @throws \InvalidArgumentException
     */
    public function isMinutesException(int $minute): void
    {
        if (
            $minute < 0 
            || $minute > 60
        ) {
            throw new \InvalidArgumentException(
                'Minutes should be between 0 to 60'
            );
        }
    }

    /**
     * @param int $year
     * @throws \InvalidArgumentException
     */
    public function isYearException(int $year): void
    {
        if ($year < 1900) {
            throw new \InvalidArgumentException(
                'Year should be greater than 1900'
            );
        }
    }

    /**
     * @param string $input
     * @throws \InvalidArgumentException
     */
    public function isValidStringException(string $input): void
    {
        if (strlen($input) < 6) {
            throw new \InvalidArgumentException(
                'Input cannot exists less than 6 digits'
            );
        }
    }
}
