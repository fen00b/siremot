<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Siremot',
            'nav' => 0,
        ];
        return view('Pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'Tentang | Siremot',
            'nav' => 2,

        ];

        return view('Pages/about', $data);
    }
}
