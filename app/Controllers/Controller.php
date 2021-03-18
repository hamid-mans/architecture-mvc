<?php


/**
 * Controller
 */
class Controller
{

	protected $viewPathName = 'views';
	protected $public = 'public';

	public function render($file, $args = [])
	{
		extract($args);
		require_once('./' . $this->viewPathName . '/' . $file . '.php');
	}

	public function getViewPath() {
		return $this->$viewPathName;
	}

	public function css($rel, $file) {
		if ($rel == 0) {
			echo '<link rel="stylesheet" type="text/css" href="' . $this->public . '/style/' . $file . '.css">';
		} else if($rel == 1) {
			echo '<link rel="stylesheet" type="text/css" href="../' . $this->public .'/style/' . $file . '.css">';
		}
	}

	public function js($rel, $file) {
		if ($rel == 0) {
			echo '<script src="' . $this->public . '/js/' . $file . '.js"></script>';
		} else if($rel == 1) {
			echo '<script src="../' . $this->public . '/js/' . $file . '.js"></script>';
		}
	}

	public function lib($cdn) {
		echo '<link rel="stylesheet" type="text/css" href="' . $cdn . '">';
	}

	public function redirect($file) {
		header('location: '.$file);
	}
}