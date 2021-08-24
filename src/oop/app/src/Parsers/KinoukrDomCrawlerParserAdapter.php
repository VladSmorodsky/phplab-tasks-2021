<?php

namespace src\oop\app\src\Parsers;

use src\oop\app\src\Models\Movie;
use Symfony\Component\DomCrawler\Crawler;

class KinoukrDomCrawlerParserAdapter implements ParserInterface
{
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

        return new Movie($title, $imgUrl, $description);
    }
}
