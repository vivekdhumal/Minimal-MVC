<?php

class Home extends Controller
{
	public function index($name = '')
	{
		$this->render_template('template', 'home/index');
	}
	
	public function about()
	{
		$this->render_template('template', 'home/about');
	}
}