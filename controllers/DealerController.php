<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class DealerController extends CI_Controller
{
	
	function __construct()
	{
		Parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('DealerModel','obj',true);
		$this->load->model('ProductModel','obj2',true);
		
	}

	public function index()
	{	
		$data['info']=$this->obj->dealer_records();
		$data['title']="Dealer Records | ShopManagementSystem";
		$data['pagename']="v_dealerrecords";
		$this->load->view('template/layout',$data);


	}


	public function loaddealer($data)
	{

		$data['company']=$this->obj2->get_company();
		$data['shop']=$this->obj2->get_shop();
		$data['category']=$this->obj->getproducts();
		$data['title']="Create Dealer | ShopManagementSystem";
		$data['pagename']="v_dealercreate";
		$this->load->view('template/layout',$data);

	}

	public function create_dealer()
	{

$this->form_validation->set_rules('txt_dealername','Dealer Name','required');
$this->form_validation->set_rules('txt_company','Company Name','required');
$this->form_validation->set_rules('txt_shop','Shop Name','required');
$this->form_validation->set_rules('txt_product','Product Name','required');
$this->form_validation->set_rules('txt_exp_imp','Profession','required');
$this->form_validation->set_rules('txt_nic','NIC Number','required');
$this->form_validation->set_rules('txt_mobile','Mobile','required');
$this->form_validation->set_rules('txt_phone','Phone','required');
$this->form_validation->set_rules('txt_address','Address','required');
$this->form_validation->set_rules('txt_details','Details','required');

if($this->form_validation->run()==FALSE)
{

		$this->loaddealer("");

}
else
{

		$userinfo= $this->session->userdata('user_id');
		$config['upload_path'] = './dealerupload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = md5(rand(1,10000000))."_DEALER_".sha1(rand(1,10000000));
		$config['overwrite'] = false;
		$this->load->library('upload', $config);
		$this->upload->do_upload();	
		$img=$this->upload->data();
		$imagename = $img['orig_name'];
		$id=$userinfo['id'];
		$this->obj->insert_data($imagename,$id);
		$data['success']="You Have Successfully Added a Dealer ...!";
		$this->loaddealer($data);
		

}

		



	}




public function dealer_view()
{
		$getid = $this->uri->segment(2);
		$data['info']=$this->obj->dealer_viewdata($getid);
		$data['title']="Create Dealer | ShopManagementSystem";
		$data['pagename']="v_dealerview";
		$this->load->view('template/layout',$data);


}


public function update_dealer()
{


$this->form_validation->set_rules('txt_dealername','Dealer Name','required');
$this->form_validation->set_rules('txt_company','Company Name','required');
$this->form_validation->set_rules('txt_shop','Shop Name','required');
$this->form_validation->set_rules('txt_product','Product Name','required');
$this->form_validation->set_rules('txt_exp_imp','Profession','required');
$this->form_validation->set_rules('txt_nic','NIC Number','required');
$this->form_validation->set_rules('txt_mobile','Mobile','required');
$this->form_validation->set_rules('txt_phone','Phone','required');
$this->form_validation->set_rules('txt_address','Address','required');
$this->form_validation->set_rules('txt_details','Details','required');

if($this->form_validation->run()==FALSE)
{

		$getid = $this->uri->segment(2);
		$data['company']=$this->obj2->get_company();
		$data['shop']=$this->obj2->get_shop();
		$data['category']=$this->obj->getproducts();
		$data['info']=$this->obj->dealer_viewdata($getid);
		$data['title']="Update Dealer | ShopManagementSystem";
		$data['pagename']="v_dealerupdate";
		$this->load->view('template/layout',$data);

}
else
{

		if(empty($_FILES))
			{
				
				$imagename = $this->input->post('txt_oldimg');
				

			}else{

		$config['upload_path'] = './dealerupload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = md5(rand(1,10000000))."_DEALER_".sha1(rand(1,10000000));
		$config['overwrite'] = false;
		$this->load->library('upload', $config);
		$this->upload->do_upload();	
		$img=$this->upload->data();
		$imagename = $img['orig_name'];
		$oldimg = $this->input->post('txt_oldimg');
		if(file_exists('dealerupload/'.$oldimg))
		{
		unlink("dealerupload/$oldimg");
		}

		
		
			}

			$insertdata =array(
'dealer_name'=>$this->input->post('txt_dealername'),
'company'=>$this->input->post('txt_company'),
'shop'=>$this->input->post('txt_shop'),
'product'=>$this->input->post('txt_product'),
'profession'=>$this->input->post('txt_exp_imp'),
'nic_number'=>$this->input->post('txt_nic'),
'mobile'=>$this->input->post('txt_mobile'),
'phone'=>$this->input->post('txt_phone'),
'email'=>$this->input->post('txt_email'),
'address'=>$this->input->post('txt_address'),
'd_details'=>$this->input->post('txt_details'),
'dealer_image'=>$imagename
);





		$getid = $this->uri->segment(2);
		$this->obj->dealerupdatedata($getid,$insertdata);
		$data['success']="The Record Successfully Updated...!";
		$data['company']=$this->obj2->get_company();
		$data['shop']=$this->obj2->get_shop();
		$data['category']=$this->obj->getproducts();
		$data['info']=$this->obj->dealer_viewdata($getid);
		$data['title']="Update Dealer | ShopManagementSystem";
		$data['pagename']="v_dealerupdate";
		$this->load->view('template/layout',$data);







		

}

		





}






public function delete_dealer()
{

$getid = $this->uri->segment(2);
$this->obj->delete_dealerdata($getid);
redirect(site_url('dealer'));
	
}









}


?>