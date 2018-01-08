<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class ProductController extends CI_Controller
{
	
	function __construct()
	{
		Parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('ProductModel','obj',true);
		
	}


	
	public function index($data="")
	{
		$data['company']=$this->obj->get_company();
		$data['shop']=$this->obj->get_shop();
		$data['category']=$this->obj->get_category();
		$data['title']="Shop | ShopManagementSystem";
		$data['pagename']="v_createproduct";
		$this->load->view('template/layout',$data);

	}

	
	public function create_product()
	{

		$this->form_validation->set_rules('txt_productname','Product Name','required');
		$this->form_validation->set_rules('txt_company','Company Name','required');
		$this->form_validation->set_rules('txt_shop','Shop Name','required');
		$this->form_validation->set_rules('txt_category','Category Name','required');
		$this->form_validation->set_rules('txt_details','Product Details','required');
		$this->form_validation->set_rules('txt_buying','Buying Price','required');
		$this->form_validation->set_rules('txt_selling','Selling Price','required');
		$this->form_validation->set_rules('txt_quantity','Quantity','required');

		if($this->form_validation->run()==FALSE)
		{

			$this->index("");

		}else{
		$userinfo= $this->session->userdata('user_id');
		$config['upload_path'] = './productuploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = md5(rand(1,10000000))."_PRODUCT_".sha1(rand(1,10000000));
		$config['overwrite'] = false;
		$this->load->library('upload', $config);
		$this->upload->do_upload();	
		$img=$this->upload->data();
		$imagename = $img['orig_name'];
		$id=$userinfo['id'];
		
		
			$datainsert = array(
				'product_name'=>$this->input->post('txt_productname'),
				'company'=>$this->input->post('txt_company'),
				'shop'=>$this->input->post('txt_shop'),
				'category'=>$this->input->post('txt_category'),
				'buying_price'=>$this->input->post('txt_buying'),
				'selling_price'=>$this->input->post('txt_selling'),
				'product_quantity'=>$this->input->post('txt_quantity'),
				'details'=>$this->input->post('txt_details'),
				'image'=>$imagename,
				'added_by'=>$id,
				'barcode'=>str_shuffle(rand(46,10000000000)),
				'productadding_date'=>date('y-m-d h:i:s')

				);
			$this->obj->product_insert($datainsert);
			$data['success']="You Have Successfully Added a Product ...!";

			$this->index($data);

		}



	}



	


	public function product_records()
	{
		
		
    
		$data['info']=$this->obj->product_retrieve();

		$data['title']="Shop | ShopManagementSystem";
		$data['pagename']="v_productrecords";
		$this->load->view('template/layout',$data);


		
	}



	public function product_view()
	{
		
		$getid = $this->uri->segment(2);
		$data['info']=$this->obj->product_viewdetails($getid);
		$data['title']="Shop | ShopManagementSystem";
		$data['pagename']="v_productview";
		$this->load->view('template/layout',$data);






	}

	public function loadupdate($data)
	{
		$getid = $this->uri->segment(2);
		$data['company']=$this->obj->get_company();
		$data['shop']=$this->obj->get_shop();
		$data['category']=$this->obj->get_category();
		$data['info']=$this->obj->product_viewdetails($getid);
		$data['title']="Shop | ShopManagementSystem";
		$data['pagename']="v_productupdate";
		$this->load->view('template/layout',$data);
	}
	public function product_update()
	{
		
		$this->form_validation->set_rules('txt_productname','Product Name','required');
		$this->form_validation->set_rules('txt_company','Company Name','required');
		$this->form_validation->set_rules('txt_shop','Shop Name','required');
		$this->form_validation->set_rules('txt_category','Category Name','required');
		$this->form_validation->set_rules('txt_details','Product Details','required');
		$this->form_validation->set_rules('txt_buying','Buying Price','required');
		$this->form_validation->set_rules('txt_selling','Selling Price','required');
		$this->form_validation->set_rules('txt_quantity','Quantity','required');

		if($this->form_validation->run()==FALSE)
		{

		$this->loadupdate("");

		}else{



			if(empty($_FILES))
			{
				
				$imagename = $this->input->post('txt_oldimg');
				

			}else{

		$config['upload_path'] = './productuploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = md5(rand(1,10000000))."_COMPANY_".sha1(rand(1,10000000));
		$config['overwrite'] = false;
		$this->load->library('upload', $config);
		$this->upload->do_upload();	
		$img=$this->upload->data();
		$imagename = $img['orig_name'];
		$oldimg = $this->input->post('txt_oldimg');
		if(file_exists('productuploads/'.$oldimg))
		{
		unlink("productuploads/$oldimg");
		}

		
		
			}

			$datainsert = array(
				'product_name'=>$this->input->post('txt_productname'),
				'company'=>$this->input->post('txt_company'),
				'shop'=>$this->input->post('txt_shop'),
				'category'=>$this->input->post('txt_category'),
				'buying_price'=>$this->input->post('txt_buying'),
				'selling_price'=>$this->input->post('txt_selling'),
				'product_quantity'=>$this->input->post('txt_quantity'),
				'details'=>$this->input->post('txt_details'),
				'image'=>$imagename
				

				);
			$getid = $this->uri->segment(2);

			$this->obj->product_update($getid,$datainsert);

			$data['success']="The Record Successfully updated...!";

			$this->loadupdate($data);


















		
		}









		



	}



	
	
	



public function product_delete()
{

$getid = $this->uri->segment(2);
$this->obj->product_datadelete($getid);
$this->product_records();

}












}

?>

