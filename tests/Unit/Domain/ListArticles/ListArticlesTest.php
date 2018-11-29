<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\ListArticles;

use LaravelDay\Article\UseCase\ListArticles\ListArticles;
use Tests\TestCase;

class ListArticlesTest extends TestCase
{
    public function shouldListArticle()
    {
        $handler = new ListArticles();

        $expectedData = [
            [
                'title' => 'Articolo 1',
                'body' => 'Questo è un articolo',
                'creationDate' => '2018-11-29 00:00:00',
            ],
        ];
    }
}
