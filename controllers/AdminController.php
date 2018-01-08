<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class AdminController extends CI_Controller
{
	
	function __construct()
	{
		Parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('DashboardModel','obj',true);
		$this->load->model('ProductModel','obj2',true);
		
	}

	//checking session method start
	public function restrict_user()
	{

		if(!$this->session->userdata('user_id'))
		{
			
			redirect(site_url('login'));

		}else{
			
			$userinfo = $this->session->userdata('user_id');
			
			$id = $userinfo['id'];

			$user = $userinfo['username'];

			$role = $userinfo['role'];

			$loggedin = $userinfo['is_logged_in'];

		if(empty($id) || empty($user) || empty($role) || $loggedin==FALSE)
		{
			redirect(site_url('login'));

		}else{

			if($role==1)
			{
				$data['sessioninfo'] = $userinfo ;
				

			}else{
				redirect(site_url('employ'));
}
}
}

}//checking session method end
	

	public function index()
	{
		$userinfo = $this->session->userdata('user_id');
            
        $id = $userinfo['id'];

        $username = $userinfo['username'];

        $role = $userinfo['role'];
		
        $data['sessinfo'] = $this->obj->get_session_info($id,$username,$role);

		$this-> restrict_user();
		$data['numone']=$this->obj->get_employes();
		$data['numtwo']=$this->obj->get_companies();
		$data['numthree']=$this->obj->get_shops();
		$data['numfour']=$this->obj->get_product();
		$data['numfive']=$this->obj->get_dealer();
		$data['numsix']=$this->obj->get_customer();
		$data['productretrieve']=$this->obj->retrieve_products_limit();
		$data['dealerdata']=$this->obj->get_dealer_data();
		$data['customerdata']=$this->obj->get_customer_data();




		$data['title']="Admin-Dashboard | ShopManagementSystem";
		$data['pagename']="v_adminhome";
		$this->load->view('template/layout',$data);

	}



}

?>