<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		// $this->load->view('welcome_message');
		// print_r(THEMES_SITE);die;
        $data['title'] = 'Home';
        $this->template->load('template_view', 'home_view', $data);
	}
}
