<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		check_not_login(); // ambilnya ini dari fungsi_helper.php
		$this->template->load('template','dashboard');
	}
}
