<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home Pages',
        ];
        return view('Pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Pages',
        ];
        return view('Pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Pages',
        ];
        return view('Pages/contact', $data);
    }
}
