<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Must extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Default page for Must controller
	 * target link is /echo/must/wehave
	 */
	public function wehave()
	{
		$this->show(5);
	}

}