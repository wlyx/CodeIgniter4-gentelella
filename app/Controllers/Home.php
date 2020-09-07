<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return redirect()->to('/gentelella/index.html');
	}
	public function display($filename='index.html')
	{
		return view($filename);
	}
}
