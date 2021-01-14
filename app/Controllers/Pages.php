<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home Pages',
        ];
        echo view('Layout/header', $data);
        echo view('Pages/home');
        echo view('Layout/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About Pages',
        ];
        echo view('Layout/header', $data);
        echo view('Pages/about');
        echo view('Layout/footer');
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Pages',
        ];
        echo view('Layout/header', $data);
        echo view('Pages/contact');
        echo view('Layout/footer');
    }
}
