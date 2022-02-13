<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
USE App\Models\Faq;

class FaqController
{
    /**
     * Method that returns the FaQ view
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('faq', [
            'faqs' => Faq::all()
        ]);
    }
}
