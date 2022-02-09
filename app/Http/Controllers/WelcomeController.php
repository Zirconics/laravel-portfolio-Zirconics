<?php

namespace App\Http\Controllers;

class WelcomeController
{
    /**
     * Method that returns the welcome page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('welcome');
    }
}
