<?php

namespace App\Controllers;

class ParamUrl extends BaseController
{
    public function index()
    {
        echo "menampilkan function/method index";
    }

    public function manualparam($param1 = '', $param2 = '0')
    {
        echo "print param ke 1 = " . $param1, " dengan nilai " . $param2;
    }
}
