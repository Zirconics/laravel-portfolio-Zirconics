<?php

namespace App\Http\Controllers;

class BlogController
{
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
