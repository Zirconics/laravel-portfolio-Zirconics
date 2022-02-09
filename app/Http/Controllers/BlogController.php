<?php

namespace App\Http\Controllers;

class BlogController
{
    /**
     * Method that returns which blog view should be loaded.
     *
     * @param $blog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($blog)
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
}
