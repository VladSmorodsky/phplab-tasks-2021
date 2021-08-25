<?php

namespace src\oop\app\src\Transporters;

use src\oop\app\src\Validators\CurlValidator;

class CurlStrategy implements TransportInterface
{
    /**
     * @param string $url
     * @return string
     */
    public function getContent(string $url): string
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        $curlValidator = new CurlValidator();
        try {
            $curlValidator->validate($curl);
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit();
        } finally {
            curl_close($curl);
        }

        return $result;
    }
}
