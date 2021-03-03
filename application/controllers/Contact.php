<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function index()
	{
        $data['title'] = 'Contact Us';
        $this->template->load('template_view', 'contact_view', $data);
	}
}
