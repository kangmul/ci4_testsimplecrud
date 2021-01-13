<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
		// echo "Hello World test ini function Home controller";
	}

	public function coba()
	{
		echo "ini adalah Method Coba dan menampilkan dari var BaseController " . $this->nama;
	}

	//--------------------------------------------------------------------

}
