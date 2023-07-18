<?php namespace App\Controllers;

class Penjelasan extends BaseController
{
	public function intibook()
	{
		echo view("intibook");
	}
    
    public function stb()
	{
		echo view("stb");
	}
    
    public function identik()
	{
		echo view("identik");
    }
}