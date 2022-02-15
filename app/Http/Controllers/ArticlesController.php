<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController
{
    /**
     * Method that returns the article page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }
}
