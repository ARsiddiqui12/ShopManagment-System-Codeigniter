<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class CustomerController extends CI_Controller
{
	
	function __construct()
	{
		Parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('CustomerModel','obj',true);
		$this->load->model('ProductModel','obj2',true);
		$this->load->model('DealerModel','obj3',true);
		
	}


public function index()
{

		$data['info']=$this->obj->customer_recorddata();
		$data['title']="Customer Records | ShopManagementSystem";
		$data['pagename']="v_customerrecords";
		$this->load->view('template/layout',$data);

}

public function loadcreate($data)
{

		$data['company']=$this->obj2->get_company();
		$data['shop']=$this->obj2->get_shop();
		$data['category']=$this->obj3->getproducts();
		$data['title']="Create Customer | ShopManagementSystem";
		$data['pagename']="v_customercreate";
		$this->load->view('template/layout',$data);

}

public function customer_create()
{

$this->form_validation->set_rules('txt_dealername','Dealer Name','required');

$this->form_validation->set_rules('txt_shop','Shop Name','required');
$this->form_validation->set_rules('txt_email','Email','required');

$this->form_validation->set_rules('txt_nic','NIC Number','required');
$this->form_validation->set_rules('txt_mobile','Mobile','required');
$this->form_validation->set_rules('txt_phone','Phone','required');
$this->form_validation->set_rules('txt_address','Address','required');


if($this->form_validation->run()==FALSE)
{

		$this->loadcreate("");

}
else
{

		$userinfo= $this->session->userdata('user_id');
		$config['upload_path'] = './customeruploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = md5(rand(1,10000000))."_CUSTOMER_".sha1(rand(1,10000000));
		$config['overwrite'] = false;
		$this->load->library('upload', $config);
		$this->upload->do_upload();	
		$img=$this->upload->data();
		$imagename = $img['orig_name'];
		$id=$userinfo['id'];
		$this->obj->customer_insertdata($imagename,$id);
		$data['success']="You Have Successfully Added a Dealer ...!";
		$this->loadcreate($data);
		

}

		



}








public function customerview()
{		$getid = $this->uri->segment(2);
		$data['info']=$this->obj->customer_viewdata($getid);

		$data['title']="View Customer | ShopManagementSystem";
		$data['pagename']="v_customerview";
		$this->load->view('template/layout',$data);

}

public function loadupdate($data)
{
		$getid = $this->uri->segment(2);
		$data['shop']=$this->obj2->get_shop();
		$data['info']=$this->obj->customer_viewdata($getid);
		$data['title']="Update Customer | ShopManagementSystem";
		$data['pagename']="v_customerupdate";
		$this->load->view('template/layout',$data);

}

public function customer_update()
{

$this->form_validation->set_rules('txt_dealername','Dealer Name','required');

$this->form_validation->set_rules('txt_shop','Shop Name','required');
$this->form_validation->set_rules('txt_email','Email','required');

$this->form_validation->set_rules('txt_nic','NIC Number','required');
$this->form_validation->set_rules('txt_mobile','Mobile','required');
$this->form_validation->set_rules('txt_phone','Phone','required');
$this->form_validation->set_rules('txt_address','Address','required');


if($this->form_validation->run()==FALSE)
{

		$this->loadupdate("");

}
else
{

		if(empty($_FILES))
			{
				
				$imagename = $this->input->post('txt_oldimg');
				

			}else{

		$config['upload_path'] = './customeruploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = md5(rand(1,10000000))."_CUSTOMER_".sha1(rand(1,10000000));
		$config['overwrite'] = false;
		$this->load->library('upload', $config);
		$this->upload->do_upload();	
		$img=$this->upload->data();
		$imagename = $img['orig_name'];
		$oldimg = $this->input->post('txt_oldimg');
		if(file_exists('customeruploads/'.$oldimg))
		{
		unlink("customeruploads/$oldimg");
		}

		
		
			}
			$datainsert =array(
'customer_name'=>$this->input->post('txt_dealername'),
'shop'=>$this->input->post('txt_shop'),
'nic_number'=>$this->input->post('txt_nic'),
'mobile'=>$this->input->post('txt_mobile'),
'phone'=>$this->input->post('txt_phone'),
'email'=>$this->input->post('txt_email'),
'address'=>$this->input->post('txt_address'),
'customer_image'=>$imagename
    );
		$getid = $this->uri->segment(2);
		$this->obj->customer_updatedata($getid,$datainsert);
		$data['success']="The Record Successfully Updated...!";


$this->loadupdate($data);






		

}



}




public function customer_delete()
{
$getid = $this->uri->segment(2);
$this->obj->customer_datadelete($getid);
redirect(site_url('customer'));

}










}


?>