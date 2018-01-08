<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class EmployesController extends CI_Controller
{
	
	function __construct()
	{
		Parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('EmployesModel','obj',true);
		$this->load->model('ProductModel','obj2',true);
	}


	public function employes_records()
	{

		$data['info']=$this->obj->employes_profiles();
		$data['title']="Employes Records | ShopManagementSystem";
		$data['pagename']="v_employesrecords";
		$this->load->view('template/layout',$data);

	}
	public function index()
	{

		$this->employes_records();

	}

	public function create_employ()
	{

		

		$this->form_validation->set_rules('txt_fname','First Name','required');
		$this->form_validation->set_rules('txt_lname','Last Name','required');
		$this->form_validation->set_rules('txt_email','Email Address','required|callback_verifyemail');
		$this->form_validation->set_rules('txt_mobile','Mobile Number','required');
		$this->form_validation->set_rules('txt_nic','NIC Number','required|callback_verifynic');
		$this->form_validation->set_rules('txt_username','Username','required');
		$this->form_validation->set_rules('txt_password','Password','required');
		$this->form_validation->set_rules('txt_address','Address','required');

		if($this->form_validation->run()==FALSE)
		{
		
		$data['title']="Create Employ | ShopManagementSystem";
		$data['pagename']="v_employescreate";
		$this->load->view('template/layout',$data);	

		}else{


		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = rand(1,10000000)."_USER_".sha1(rand(1,10000000));
		$config['overwrite'] = false;
		$this->load->library('upload', $config);
		$this->upload->do_upload();	
		$img=$this->upload->data();
		$this->obj->registeruser($img['orig_name']);
		$data['success']="Congrats You Have Successfully Registered...!";
		$data['title']="Create Employ | ShopManagementSystem";
		$data['pagename']="v_employescreate";
		$this->load->view('template/layout',$data);	
		
			
		}



	}

	public function employee_view()
	{
		$getid = $this->uri->segment(2);
		$data['info']=$this->obj->employes_proview($getid);
		$data['title']="View-Employ Info | ShopManagementSystem";
		$data['pagename']="v_employesview";
		$this->load->view('template/layout',$data);		

	}

	public function employ_activate()
	{


		$getid = $this->uri->segment(2);
		$this->obj->activate_employ($getid);
		$data['info']=$this->obj->employes_proview($getid);

		$data['title']="View | ShopManagementSystem";
		$data['pagename']="v_employesview";
		$this->load->view('template/layout',$data);	

	}


	public function employ_blocked()
	{

		$getid = $this->uri->segment(2);
		$this->obj->blocked_employ($getid);
		$data['info']=$this->obj->employes_proview($getid);
		$data['title']="View | ShopManagementSystem";
		$data['pagename']="v_employesview";
		$this->load->view('template/layout',$data);	
	}


	public function employ_delete()
	{
		$getid = $this->uri->segment(2);
		$this->obj->delete_employ($getid);
		redirect(site_url('employes'));
	}


	public function employprofile_update()
	{

		
		$this->form_validation->set_rules('txt_fname','First Name','required');
		$this->form_validation->set_rules('txt_lname','Last Name','required');
		$this->form_validation->set_rules('txt_email','Email Address','required|callback_verifyemail');
		$this->form_validation->set_rules('txt_mobile','Mobile Number','required');
		$this->form_validation->set_rules('txt_nic','NIC Number','required|callback_verifynic');
		$this->form_validation->set_rules('txt_address','Address','required');

		if($this->form_validation->run()==FALSE)
		{
		$getid = $this->uri->segment(2);
		$data['info']=$this->obj->employes_proview($getid);
		$data['title']="Update | ShopManagementSystem";
		$data['pagename']="v_updateemploy";
		$this->load->view('template/layout',$data);	

		}else{


			if(empty($_FILES))
			{
				
				$imagename = $this->input->post('txt_oldimg');
				

			}else{

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = md5(rand(1,10000000))."_SHOP_".sha1(rand(1,10000000));
		$config['overwrite'] = false;
		$this->load->library('upload', $config);
		$this->upload->do_upload();	
		$img=$this->upload->data();
		$imagename = $img['orig_name'];
		$oldimg = $this->input->post('txt_oldimg');
		if(file_exists('uploads/'.$oldimg))
		{
		unlink("uploads/$oldimg");
		}

		
		
			}
	

	$datainsert = array(
    'first_name'=>$this->input->post('txt_fname'),
    'last_name'=>$this->input->post('txt_lname'),
    'email'=>$this->input->post('txt_email'),
    'mobile'=>$this->input->post('txt_mobile'),
    'nic_number'=>$this->input->post('txt_nic'),
    'address'=>$this->input->post('txt_address'),
    'image_name'=>$imagename
    );
    $datalogin = array(
    	'email'=>$this->input->post('txt_email')

    	);
	$getid = $this->uri->segment(2);
    $this->obj->employupdateinfo($getid,$datainsert,$datalogin);
    $data['success']="The Record Successfully updated...!";

    $data['info']=$this->obj->employes_proview($getid);
		$data['title']="Update | ShopManagementSystem";
		$data['pagename']="v_updateemploy";
		$this->load->view('template/layout',$data);	








			
		}





	}


public function joiningshop()
{

	$this->form_validation->set_rules('txt_employ','Employ Name','required');
	$this->form_validation->set_rules('txt_shop','Shop Name','required');
	$this->form_validation->set_rules('txt_salary','Salary','required');
	$this->form_validation->set_rules('txt_joiningdate','Joining Date','required');
if($this->form_validation->run()==false)
{

		$data['info2']=$this->obj2->get_shop();
		$data['info']=$this->obj->getemploys();
		$data['title']="Employeement Info | ShopManagementSystem";
		$data['pagename']="v_employonshop";
		$this->load->view('template/layout',$data);	

}else{

   $this->obj->employeementinfo();
   $data['success']="You Have Successfully Inserted Employeement Inforamtion..!";
   $data['info2']=$this->obj2->get_shop();
		$data['info']=$this->obj->getemploys();
		$data['title']="Employeement Info | ShopManagementSystem";
		$data['pagename']="v_employonshop";
		$this->load->view('template/layout',$data);	

 }

}


public function employinfo()
{

	if(isset($_POST['id']))
	{
	$data['info']	=$this->obj->employes_proview($_POST['id']);
	
	$this->load->view('test',$data);	

	}

}























}



	?>