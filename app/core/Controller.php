<?php

class Controller
{
	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';
		
		return new $model();
	}

	public function view($view, $data = [], $renderOnly = false)
	{
		$filepath = '../app/views/' . $view . '.php';

		if($renderOnly) {
			return $this->get_include_contents($filepath, $data);
		} else {
			if(count($data))
				extract($data);

			require_once $filepath;
		}
	}

	public function render_template($template, $view, $data = [])
	{
		$content = $this->view($view, $data, true);

		$this->view($template, ['content' => $content]);
	}


	function get_include_contents($filename, $data = [])
	{
		if (is_file($filename)) {
			ob_start();

			if(count($data))
				extract($data);

			include $filename;
			
			return ob_get_clean();
		}
	    return false;
	}
}