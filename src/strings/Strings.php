<?php

namespace strings;

use strings\StringsInterface;

class Strings implements StringsInterface
{
    /**
     * @param string $input
     * @return string
     */
    public function snakeCaseToCamelCase(string $input): string
    {
        $splittedInput = explode('_', $input);
        $input = $splittedInput[0];
        for ($i = 1; $i < count($splittedInput); $i++) {
            $input .= ucfirst($splittedInput[$i]);
        }

        return $input;
    }

    /**
     * @param string $input
     * @return string
     */
    public function mirrorMultibyteString(string $input): string
    {
        $splittedInput = preg_split('#\s#', $input);
        for ($i = 0; $i < count($splittedInput); $i++) {
            $revertedWord = '';
            for ($revertIndex = 1; $revertIndex <= mb_strlen($splittedInput[$i]); $revertIndex++ ) {
                $revertedWord .= mb_substr($splittedInput[$i], -$revertIndex, 1);
            }
            $splittedInput[$i] = $revertedWord;
        }
        $input = implode(' ', $splittedInput);

        return $input;
    }

    /**
     * @param string $noun
     * @return string
     */
    public function getBrandName(string $noun): string
    {
        if (strcasecmp($noun[0], $noun[strlen($noun)-1]) !== 0) {
            return sprintf('The %s', ucfirst($noun));
        }

        return ucfirst($noun) . substr($noun, 1);
    }
}
