<?php

namespace Tests\Unit\Domain\ListArticles;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use LaravelDay\Article\UseCase\ListArticles\ListArticles;

class ListArticlesTest extends TestCase
{
    public function shouldListArticle()
    {
        $handler = new ListArticles();

        $expectedData = [
            [
                'title' => 'Articolo 1',
                'body'  => 'Questo è un articolo',
                'creationDate' => '2018-11-29 00:00:00'
            ]
        ];
    }
}
