<?php
/**
 * Create Class - Scrapper with method getMovie().
 * getMovie() - should return Movie Class object.
 *
 * Note: Use next namespace for Scrapper Class - "namespace src\oop\app\src;"
 * Note: Dont forget to create variables for TransportInterface and ParserInterface objects.
 * Note: Also you can add your methods if needed.
 */

namespace src\oop\app\src;

use src\oop\app\src\Models\Movie;
use src\oop\app\src\Transporters\TransportInterface;
use src\oop\app\src\Parsers\ParserInterface;

class Scrapper
{
    private TransportInterface $transportInterface;
    private ParserInterface $parserInterface;

    public function __construct(TransportInterface $transportInterface, ParserInterface $parserInterface)
    {
        $this->transportInterface = $transportInterface;
        $this->parserInterface = $parserInterface;
    }

    /**
     * @param string $url
     * @return mixed
     */
    public function getMovie(string $url): Movie
    {
        return $this->parserInterface->parseContent($this->transportInterface->getContent($url));
    }
}
