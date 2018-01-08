<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class BuynsaleController extends CI_Controller
{
	
	function __construct()
	{
		Parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('ProductModel','obj2',true);
		$this->load->model('BuynsaleModel','obj',true);
		
	}

	public function loadcreate($data)
	{

		$data['shop']=$this->obj2->get_shop();
		$data['title']="Buy & Sale | ShopManagementSystem";
		$data['pagename']="v_buynsale";
		$this->load->view('template/layout',$data);

	}

	public function create_buynsale()
	{
		$this->form_validation->set_rules('txt_productname','Product Name','required');
       $this->form_validation->set_rules('txt_bnp','Sale Or Purchase','required');
       $this->form_validation->set_rules('txt_shop','Shop Name','required');
       $this->form_validation->set_rules('txt_amount','Total Amount','required');
       $this->form_validation->set_rules('txt_details','Product Details','required');
if($this->form_validation->run()==false)
{

		$this->loadcreate("");

}else{
	$userinfo= $this->session->userdata('user_id');
$datainsert=array(
        'product_name'=>$this->input->post('txt_productname'),
        'buynsale'=>$this->input->post('txt_bnp'),
        'shop_name'=>$this->input->post('txt_shop'),
        'total_amount'=>$this->input->post('txt_amount'),
        'payment_desc'=>$this->input->post('txt_details'),
        'added_by'=>$userinfo['username'],
        'orderadding_date'=>date('y-m-d h:i:s')
        );
$this->obj->insert_order($datainsert);
$data['success']="Record successfully added...";
$this->loadcreate($data);

}



	}

	public function index()
	{
		$data['info']=$this->obj->order_records();
		$data['title']="Buy & Sale Records | ShopManagementSystem";
		$data['pagename']="v_buynsalerecords";
		$this->load->view('template/layout',$data);

	}

	public function order_view()
	{

		//v_buynsaleview.php
		//order_viewdata($set_id)
		$getid = $this->uri->segment(2);
		$data['info']=$this->obj->order_viewdata($getid);
		$data['title']="Buy & Sale View | ShopManagementSystem";
		$data['pagename']="v_buynsaleview";
		$this->load->view('template/layout',$data);

	}

	public function order_delete()
	{
		$getid = $this->uri->segment(2);
		$this->obj->order_deletedata($getid);
		redirect(site_url('buynsale'));
	}

}
?>