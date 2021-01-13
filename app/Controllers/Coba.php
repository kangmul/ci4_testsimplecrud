<?php

namespace App\Controllers;

class Coba extends BaseController
{
	public $namadev = "Muluk Dharmayana";
	public function index()
	{
		echo "Ini adalah Controller Coba dengan method Index";
		echo "<br>";
		echo "hallo nama saya " . $this->nama;
	}

	public function coba()
	{
		echo "ini adalah Method Coba dari CobaController dan menampilkan var dari BaseController " . $this->nama;
	}

	//--------------------------------------------------------------------

}
