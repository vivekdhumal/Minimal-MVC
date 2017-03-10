<?php
use Illuminate\Database\Capsule\Manager as Capsule;

class Home extends Controller
{
	public function index($name = '')
	{		
		$this->view('home/index');
	}
}