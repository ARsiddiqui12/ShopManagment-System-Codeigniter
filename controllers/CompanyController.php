<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class CompanyController extends CI_Controller
{
	
	function __construct()
	{
		Parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('CompanyModel','obj',true);
		
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
	
	public function company($data)
	{
		$this->restrict_user();
		$data['result']=$this->obj->retrieve_data();
		$data['title']="Add Company | ShopManagementSystem";
		$data['pagename']="v_createcompany";
		$this->load->view('template/layout',$data);
	}

	

	public function index()
	{


		$this->company("");


	}

	public function create_company()
	{
		$this->restrict_user();
		$this->form_validation->set_rules('txt_companyname','Company Name','required');
		$this->form_validation->set_rules('txt_companydetails','Company Details','required');
		if($this->form_validation->run()==false)
		{

			$this->company("");

		}else{
		$userinfo= $this->session->userdata('user_id');
		$config['upload_path'] = './companyuploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = md5(rand(1,10000000))."_COMPANY_".sha1(rand(1,10000000));
		$config['overwrite'] = false;
		$this->load->library('upload', $config);
		$this->upload->do_upload();	
		$img=$this->upload->data();
		$imagename = $img['orig_name'];
		$id=$userinfo['id'];
		$this->obj->insert_data($imagename,$id);
		$data['success']="You Have Successfully Added a Company ...!";
		$this->company($data);



		}

	}



	public function view_company()
	{
		$this->restrict_user();
		$getid = $this->uri->segment(2);
		$data['companyinfo']=$this->obj->viewcompanyinfo($getid);
		$data['title']="View-Company | ShopManagementSystem";
		$data['pagename']="v_companyview";
		$this->load->view('template/layout',$data);
		
		
	}

	public function update_company()
	{	$this->restrict_user();
		$getid = $this->uri->segment(2);
		$this->form_validation->set_rules('txt_companyname','Company Name','required');
		$this->form_validation->set_rules('txt_companydetails','Company Details','required');
		if($this->form_validation->run()==false)
		{

		
		$data['companyinfo']=$this->obj->viewcompanyinfo($getid);
		$data['title']="Update-Company | ShopManagementSystem";
		$data['pagename']="v_companyupdate";
		$this->load->view('template/layout',$data);

		}else{

			if(empty($_FILES))
			{
				
				$imagename = $this->input->post('txt_oldimg');
				

			}else{

		$config['upload_path'] = './companyuploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = md5(rand(1,10000000))."_COMPANY_".sha1(rand(1,10000000));
		$config['overwrite'] = false;
		$this->load->library('upload', $config);
		$this->upload->do_upload();	
		$img=$this->upload->data();
		$imagename = $img['orig_name'];
		$oldimg = $this->input->post('txt_oldimg');
		if(file_exists('companyuploads/'.$oldimg))
		{
		unlink("companyuploads/$oldimg");
		}

		
		
			}

			$updatedata = array(
				'company_name'=>$this->input->post('txt_companyname'),
				'description'=>$this->input->post('txt_companydetails'),
				'logo'=>$imagename
				);

			$this->obj->updatecompanydata($getid,$updatedata);

			$data['success']="The Record Successfully updated...!";
		$data['companyinfo']=$this->obj->viewcompanyinfo($getid);
		$data['title']="Update-Company | ShopManagementSystem";
		$data['pagename']="v_companyupdate";
		$this->load->view('template/layout',$data);






		}

	}

	public function delete_company()
	{
		$this->restrict_user();
		$getid = $this->uri->segment(2);
		$this->obj->deletecompanydata($getid);
		$this->companiesrecords();


	}

	public function companiesrecords()
	{
		$this->restrict_user();
		$data['result']=$this->obj->retrieve_data();
		$data['title']="Company Records | ShopManagementSystem";
		$data['pagename']="v_companyrecords";
		$this->load->view('template/layout',$data);
	}


}




















?>