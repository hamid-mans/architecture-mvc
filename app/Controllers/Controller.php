<?php


/**
 * Controller
 */
class Controller
{

	protected $viewPathName = 'views';
	protected $public = 'public';

	/*
	* Generate view
	* @view
	*/
	public function render($file, $args = [])
	{
		extract($args);
		require_once('./' . $this->viewPathName . '/' . $file . '.php');
	}

	/*
	* getter for $viewPathName
	* @string
	*/
	public function getViewPath() {
		return $this->$viewPathName;
	}

	/*
	* Generate a css file
	* @string
	*/
	public function css($rel, $file) {
		if ($rel == 0) {
			echo '<link rel="stylesheet" type="text/css" href="' . $this->public . '/style/' . $file . '.css">';
		} else if($rel == 1) {
			echo '<link rel="stylesheet" type="text/css" href="../' . $this->public .'/style/' . $file . '.css">';
		}
	}

	/*
	* Generate a js file
	* @string
	*/
	public function js($rel, $file) {
		if ($rel == 0) {
			echo '<script src="' . $this->public . '/js/' . $file . '.js"></script>';
		} else if($rel == 1) {
			echo '<script src="../' . $this->public . '/js/' . $file . '.js"></script>';
		}
	}


	/*
	* Generate *js* or *css* library
	* @string
	*/
	public function lib($type, $cdn) {
		if($type == 'css') {
			echo '<link rel="stylesheet" type="text/css" href="' . $cdn . '">';
		} else if($type == 'js') {
			echo '<scrirpt src="' . $cdn . '"></script>';
		}
	}

	/*
	* Redirect a user
	* @action
	*/
	public function redirect($file) {
		header('location: '.$file);
	}

	/*
	* Include from /public/include/ folder
	* @action
	*/
	public function include($file) {
		include $this->public . "/include/" . $file . '.php';
	}
}