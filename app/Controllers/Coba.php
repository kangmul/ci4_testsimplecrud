<?php 

namespace App\Controllers;

class Coba extends BaseController
{
	private $nama = "Muluk Dharmayana"; 
	public function index($nama)
	{
		echo "Ini adalah Controller Coba dengan method Index";
		echo "<br>";
		echo "hallo nama saya " . $this->nama;
	}

	public function coba()
	{
		echo "ini adalah Method Coba";
	}

	//--------------------------------------------------------------------

}
