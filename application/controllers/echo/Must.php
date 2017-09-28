<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Must extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Default page for Force controller
	 * target link is /detla/force
	 */
	public function index()
	{
		$this->show(5);
	}

}