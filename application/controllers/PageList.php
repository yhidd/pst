<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageList extends MY_Controller {

	public function index()
	{
        $data['title'] = 'List';
        $this->template->load('template_view', 'list_view', $data);
	}
}
