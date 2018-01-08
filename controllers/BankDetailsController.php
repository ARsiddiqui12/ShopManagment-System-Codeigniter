<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class BankDetailsController extends CI_Controller
{
	
	function __construct()
	{
		Parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('BankDetailsModel','obj',true);
		
		
	}


	public function index()
	{
		$data['result']=$this->obj->retrieve_bankdata();
		$data['title']="Add Bank Details | ShopManagementSystem";
		$data['pagename']="v_bankrecords";
		$this->load->view('template/layout',$data);


	}

	public function loadcreate($data)
	{

		$data['title']="Add Bank Details | ShopManagementSystem";
		$data['pagename']="v_createbankdetails";
		$this->load->view('template/layout',$data);
	}

	public function add_bankdetails()
	{
		$this->form_validation->set_rules('txt_name','Name','required');
       $this->form_validation->set_rules('txt_nic','NIC Number','required');
       $this->form_validation->set_rules('txt_mobile','Mobile Number','required');
       $this->form_validation->set_rules('txt_accounttitle','Account Title','required');
       $this->form_validation->set_rules('txt_accountnumber','Account Number','required');
       $this->form_validation->set_rules('txt_bankname','Bank Name','required');
       $this->form_validation->set_rules('txt_branchcode','Branch Code','required');
       $this->form_validation->set_rules('txt_swiftcode','SWIFT Code','required');
       $this->form_validation->set_rules('txt_details','Bank Details','required');

       if($this->form_validation->run()==FALSE)
       {
       	$this->loadcreate("");
       }else{
       	$userinfo= $this->session->userdata('user_id');
       	$insertdata = array(
       		'name'=>$this->input->post('txt_name'),
       		'nic_number'=>$this->input->post('txt_nic'),
       		'mobile'=>$this->input->post('txt_mobile'),
       		'creditcard'=>$this->input->post('txt_creditcard'),
       		'account_title'=>$this->input->post('txt_accounttitle'),
       		'account_number'=>$this->input->post('txt_accountnumber'),
       		'bank_name'=>$this->input->post('txt_bankname'),
       		'branch_code'=>$this->input->post('txt_branchcode'),
       		'swift_code'=>$this->input->post('txt_swiftcode'),
       		'bank_details'=>$this->input->post('txt_details'),
       		'added_by'=> $userinfo['username'],
       		'adding_date'=>date('y-m-d h:i:s')
       		);

       	$this->obj->insert_bankdata($insertdata);

       	$data['success']="Bank Details Successfully Added...!";

       	$this->loadcreate($data);

       }
		

	}


public function viewbankdetails()
{
$getid = $this->uri->segment(2);
$data['info']=$this->obj->view_bankdata($getid);
$data['title']="View Bank Details | ShopManagementSystem";
$data['pagename']="v_bankview";
$this->load->view('template/layout',$data);

}
	

public function update_bankdetails()
{

	
$this->form_validation->set_rules('txt_name','Name','required');
       $this->form_validation->set_rules('txt_nic','NIC Number','required');
       $this->form_validation->set_rules('txt_mobile','Mobile Number','required');
       $this->form_validation->set_rules('txt_accounttitle','Account Title','required');
       $this->form_validation->set_rules('txt_accountnumber','Account Number','required');
       $this->form_validation->set_rules('txt_bankname','Bank Name','required');
       $this->form_validation->set_rules('txt_branchcode','Branch Code','required');
       $this->form_validation->set_rules('txt_swiftcode','SWIFT Code','required');
       $this->form_validation->set_rules('txt_details','Bank Details','required');

       if($this->form_validation->run()==FALSE)
       {
       	$data['result']=$this->obj->retrieve_bankdata();
	$data['title']="Update Bank Details | ShopManagementSystem";
$data['pagename']="v_bankupdate";
$this->load->view('template/layout',$data);

       }else{
       	$userinfo= $this->session->userdata('user_id');
       	$insertdata = array(
       		'name'=>$this->input->post('txt_name'),
       		'nic_number'=>$this->input->post('txt_nic'),
       		'mobile'=>$this->input->post('txt_mobile'),
       		'creditcard'=>$this->input->post('txt_creditcard'),
       		'account_title'=>$this->input->post('txt_accounttitle'),
       		'account_number'=>$this->input->post('txt_accountnumber'),
       		'bank_name'=>$this->input->post('txt_bankname'),
       		'branch_code'=>$this->input->post('txt_branchcode'),
       		'swift_code'=>$this->input->post('txt_swiftcode'),
       		'bank_details'=>$this->input->post('txt_details')
       		);
       	$getid = $this->uri->segment(2);

       	$this->obj->update_bankdata($getid,$insertdata);


       	$data['success']="The Record Successfully updated...!";

       	 	$data['result']=$this->obj->retrieve_bankdata();
	$data['title']="Update Bank Details | ShopManagementSystem";
$data['pagename']="v_bankupdate";
$this->load->view('template/layout',$data);



}


















	
}	



public function delete_bank()
{
$getid = $this->uri->segment(2);
$this->obj->delete_bankdata($getid);
redirect(site_url('bankdetail'));

}









}

?>