<?php

namespace Tests\Unit\Domain\Article;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use LaravelDay\Article\Article;

class ArticleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     *
     * @return void
     */

    public function shouldCreateArticle()
    {
        $id = 1;
        $title = 'Questo è un titolo';
        $body = 'Questo è un testo';
        $creationDate = new \DateTimeImmutable();

        $article = new Article($id, $title, $body, $creationDate);

        $this->assertSame($id, $article->getId());
        $this->assertSame($title, $article->getTitle());
        $this->assertSame($body, $article->getBody());
        $this->assertSame($creationDate, $article->getCreationDate);
    }
}
