<?php

namespace src\oop\app\src\Parsers;

use src\oop\app\src\Models\Movie;
use Symfony\Component\DomCrawler\Crawler;

class KinoukrDomCrawlerParserAdapter implements ParserInterface
{
    private Movie $movie;

    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    /**
     * @param string $siteContent
     * @return mixed
     */
    public function parseContent(string $siteContent): Movie
    {
        $domCrawler = new Crawler($siteContent);

        $title = $domCrawler->filter('div.ftitle h1')->text();
        $imgUrl = $domCrawler->filter('div.fposter a')->attr('href');
        $description = $domCrawler->filter('div.fdesc')->text();

        return $this->movie->setTitle($title)
            ->setPoster($imgUrl)
            ->setDescription($description);
    }
}
