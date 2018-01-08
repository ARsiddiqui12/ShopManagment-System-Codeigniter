<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class EmployController extends CI_Controller
{
	
	function __construct()
	{
		Parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('DashboardModel','obj',true);
		
	}
	
	

	public function index()
	{
		$data['title']="Admin-Dashboard | ShopManagementSystem";
		$data['pagename']="v_employhome";
		$this->load->view('template/layout',$data);
	}


}

?>