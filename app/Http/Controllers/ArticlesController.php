<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController
{
    /**
     * Method that returns which blog view should be loaded.
     *
     * @param $blog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function blogs($blog)
    {
        $blogs = [
            'overview' => 'blog',
            'Swot-Analyse' => 'swotAnalyse',
            'Study-Choice' => 'studyChoice',
            'Programming-Experience' => 'programmingExperience',
            'ICT-Career' => 'ictCareer',
            'First-Feedback' => 'firstFeedback'
        ];

        if (!array_key_exists($blog, $blogs)) {
            abort(404, 'Sorry, that post was not found.');
        }

        return view($blogs[$blog]);
    }

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
    public function show($article_id)
    {
        return view('/articles.show', [
            'title' => 'Article ' . $article_id,
            'article' => Article::find($article_id)
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
    public function edit($article_id)
    {
        return view('articles.edit', [
            'title' => 'Edit Article',
            'article' => Article::find($article_id)
        ]);
    }

    /**
     * Function that stores updated data in the database
     *
     * @param $article_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($article_id)
    {
        $article = Article::find($article_id);
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/' . $article->id);
    }

    public function delete($article_id)
    {
        $article = Article::find($article_id);
        $article->delete();

        return redirect('/articles');
    }

}
