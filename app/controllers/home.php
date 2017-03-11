<?php
use Illuminate\Database\Capsule\Manager as Capsule;

class Home extends Controller
{
	public function index($name = '')
	{
		$this->render_template('template', 'home/index');
	}
}