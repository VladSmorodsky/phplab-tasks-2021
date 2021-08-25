<?php

namespace src\oop\app\src\Parsers;

use src\oop\app\src\Models\Movie;

class FilmixParserStrategy implements ParserInterface
{
    private const POSTER_TEMPLATE = '#<img.*?src=[\'"](https.*)[\'"].*?class="poster.*>#';
    private const TITLE_TEMPLATE = '#<h1.*class="name".*?>(.*)<\/h1>#';
    private const DESCRIPTION_TEMPLATE = '#<div.*class="about".*?><div.*?>(.*?)<\/div>#';

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
        $siteContent = mb_convert_encoding($siteContent, "utf-8", "Windows-1251");

        preg_match(self::POSTER_TEMPLATE, $siteContent, $matches);
        $imgUrl = $matches[1];

        preg_match(self::TITLE_TEMPLATE, $siteContent, $matches);
        $title = $matches[1];

        preg_match(self::DESCRIPTION_TEMPLATE, $siteContent, $matches);
        $description = preg_replace('/\<br \/\>/', '', $matches[1]);

        return $this->movie->setTitle($title)
            ->setPoster($imgUrl)
            ->setDescription($description);
    }
}
