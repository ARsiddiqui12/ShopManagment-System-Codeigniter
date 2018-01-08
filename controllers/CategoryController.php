<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class CategoryController extends CI_Controller
{
	
	function __construct()
	{
		Parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('CategoryModel','obj',true);
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

	public function category($data)
	{
		$this->restrict_user();
		$data['title']="Create Category | ShopManagementSystem";
		$data['pagename']="v_createcategory";
		$this->load->view('template/layout',$data);

	}

	public function index()
	{

		$this->category("");
		
	}

	public function create_category()
	{


		$this->form_validation->set_rules('txt_companyname','Company Name','required');
		$this->form_validation->set_rules('txt_companydetails','Company Details','required');
		if($this->form_validation->run()==false)
		{

			$this->category("");

		}else{
		$userinfo= $this->session->userdata('user_id');
		$config['upload_path'] = './categoryuploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = md5(rand(1,10000000))."_CATEGORY_".sha1(rand(1,10000000));
		$config['overwrite'] = false;
		$this->load->library('upload', $config);
		$this->upload->do_upload();	
		$img=$this->upload->data();
		$imagename = $img['orig_name'];
		$id=$userinfo['id'];
		$this->obj->insert_data($imagename,$id);
		$data['success']="You Have Successfully Added a Category ...!";
		$this->category($data);



		}






	}


	public function category_records()
	{
		$this->restrict_user();
		$data['result']=$this->obj->retrieve_data();
		$data['title']="Category Records | ShopManagementSystem";
		$data['pagename']="v_categoryrecords";
		$this->load->view('template/layout',$data);


	}



	public function category_update()
	{

		$getid = $this->uri->segment(2);
		$this->form_validation->set_rules('txt_companyname','Company Name','required');
		$this->form_validation->set_rules('txt_companydetails','Company Details','required');
		if($this->form_validation->run()==false)
		{
	$getid = $this->uri->segment(2);
	$data['shopinfo']=$this->obj->view_data($getid);	
	$data['title']="Update-Category | ShopManagementSystem";
	$data['pagename']="v_categoryupdate";
	$this->load->view('template/layout',$data);

		}else{
		
			if(empty($_FILES))
			{
				
				$imagename = $this->input->post('txt_oldimg');
				

			}else{

		$config['upload_path'] = './categoryuploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = md5(rand(1,10000000))."_CATEGORY_".sha1(rand(1,10000000));
		$config['overwrite'] = false;
		$this->load->library('upload', $config);
		$this->upload->do_upload();	
		$img=$this->upload->data();
		$imagename = $img['orig_name'];
		$oldimg = $this->input->post('txt_oldimg');
		if(file_exists('categoryuploads/'.$oldimg))
		{
		unlink("categoryuploads/$oldimg");
		}

		
		
			}

			$updatedata = array(
				'name'=>$this->input->post('txt_companyname'),
				'description'=>$this->input->post('txt_companydetails'),
				'logo'=>$imagename
				);

			$this->obj->update_data($getid,$updatedata);

			$data['success']="The Record Successfully updated...!";
			$getid = $this->uri->segment(2);
			$data['shopinfo']=$this->obj->view_data($getid);	
			$data['title']="Update-Category| ShopManagementSystem";
			$data['pagename']="v_categoryupdate";
			$this->load->view('template/layout',$data);



	}

}




public function category_view()
{


	$getid = $this->uri->segment(2);
	$data['companyinfo']=$this->obj->view_data($getid);	
	$data['title']="View-Shop | ShopManagementSystem";
	$data['pagename']="v_categoryview";
	$this->load->view('template/layout',$data);
			

}

public function category_delete()
{

		$this->restrict_user();
		$getid = $this->uri->segment(2);
		$this->obj->delete_data($getid);
		$this->category_records();

}














}











	?>