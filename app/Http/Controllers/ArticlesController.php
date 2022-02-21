<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController
{
    /**
     * Method that returns the index article page containing all the articles.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('articles.index', [
            'title' => 'Articles',
            'articles' => Article::latest()->get()]);
    }

    /**
     * Function that returns the article page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Article $article)
    {
        return view('/articles.show', [
            'title' => 'Article - ' . $article->title,
            'article' => $article
        ]);
    }

    /**
     * Function that calls a view with a create form
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('/articles.create', [
            'title' => 'Create Article'
        ]);
    }

    /**
     * Function that stores data in the database
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles');
    }

    /**
     * Function that retrieves article data out of the database
     *
     * @param $article_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Article $article)
    {
        return view('articles.edit', [
            'title' => 'Edit Article',
            'article' => $article
        ]);
    }

    /**
     * Function that stores updated data in the database
     *
     * @param $article_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Article $article)
    {
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/' . $article->id);
    }

    /**
     * Function that deletes articles from the database
     *
     * @param $article_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Article $article)
    {
        $article->delete();

        return redirect('/articles');
    }
}
