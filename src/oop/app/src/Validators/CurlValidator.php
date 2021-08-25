<?php

namespace src\oop\app\src\Validators;

class CurlValidator implements ValidatorInterface
{
    /**
     * @param $curlConnection
     * @throws \Exception
     */
    public function validate($curlConnection): void
    {
        $this->isTooManyRequests($curlConnection);
    }

    /**
     * @param $curlConnection
     * @throws \Exception
     */
    private function isTooManyRequests($curlConnection): void
    {
        if (curl_getinfo($curlConnection, CURLINFO_HTTP_CODE) === 429) {
            throw new \Exception('Too many requests. Please try to parse later');
        }
    }
}
