<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController
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
        $articles = Article::latest()->get();

        return view('blogs.index', ['articles' => $articles]);
    }

    /**
     * Method that returns the article page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('/blogs.show', ['article' => $article]);
    }

    public function create()
    {
        return view('/blogs.create');
    }

    public function store()
    {
        $blog = new Article();
        $blog->title = request('title');
        $blog->excerpt = request('excerpt');
        $blog->body = request('body');
        $blog->save();

        return redirect('/blogs');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}
