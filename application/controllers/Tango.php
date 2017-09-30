<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tango extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Default page for Tango controller
	 * target link is routed from /foxtrot
	 */
	public function index()
	{
		$this->show(5);
	}

}
