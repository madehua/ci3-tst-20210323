<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

	/**
	 * 网站首页
	 */
	public function index()
	{
		$this->template->view('pages/index');
	}
}
