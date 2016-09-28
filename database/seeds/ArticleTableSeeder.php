<?php

use Illuminate\Database\Seeder;
use App\Article;


class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,10) as $index) {
            $article = new Article();
            $article->title = 'title'.$index;
            $article->content = 'content'.$index;

            $article->save();
        }
    }
}
