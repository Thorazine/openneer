<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        return view('home', [
            'seo' => [
                'title' => 'Matthijs - Openneer',
                'description' => 'Personal website of Matthijs, Developer.',
            ]
        ]);
    }

    public function dutch()
    {
        app()->setLocale('nl');
        return view('content', [
            'language' => 'nl',
            'seo' => [
                'title' => 'Matthijs - Openneer (NL)',
                'description' => 'Persoonlijke website van Matthijs, Ontwikkelaar.',
            ]
        ]);
    }

    public function english()
    {
        app()->setLocale('en');
        return view('content', [
            'language' => 'en',
            'seo' => [
                'title' => 'Matthijs - Openneer (EN)',
                'description' => 'Personal website of Matthijs, Developer.',
            ]
        ]);
    }

}
