<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class LoginController extends CI_Controller
{
	
	function __construct()
	{
		Parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('LoginModel','obj',true);
	}


	public function index()
	{

		$this->load->view('v_login');
	}

	

	public function verifyemail($set_email)
	{


		$result = $this->obj->check_email($set_email);
		if($result)
		{
			$this->form_validation->set_message('verifyemail','This Email Address Already Exist...!');
			return false;
		}else{
			return true;
		}

	}

	public function verifyusername($set_username)
	{


		$result = $this->obj->check_username($set_username);
		if($result)
		{
			$this->form_validation->set_message('verifyusername','This Username is Not Available...!');
			return false;
		}else{
			return true;
		}

	}

	public function verifynic($set_nic)
	{


		$result = $this->obj->check_nic($set_nic);
		if($result)
		{
			$this->form_validation->set_message('verifynic','The Entered NIC Number is Already Exist...!');
			return false;
		}else{
			return true;
		}

	}

	public function checklogin()
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
			$data['error']="Invalid Registration Details...!";
			$this->load->view('v_login',$data);

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
		redirect("verify/6");
		
			
		}
		
	}


	public function userverification()
	{

		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$remember = $_POST['remember'];
		$result = $this->obj->user_verification($username,$password);
		if($result){
		foreach ($result as  $row) {
			$db_id = $row->id;
			$db_username = $row->username;
			$db_password = $row->password;
			$db_options  = $row->options;
			$db_role     = $row->role;
			$db_authentication = $row->authentication;
		}
		if($db_options==0)
		{
			echo "Error: &nbsp;Please First Activate Your Account...!";
		}elseif($db_authentication==0)
		{
			echo "Error: &nbsp;your registration request is in pending please contact to Admin...!";
		}elseif($db_authentication==2)
		{
			echo "Error: &nbsp;Your Account Has been Bloacked By Admin...!";
		}elseif($db_username!=$username && $db_password!=$password)
		{
			echo "Error: &nbsp;Incurrect Password...!";
		}else{
			$image = $this->obj->get_image($db_id);
			foreach ($image as $key => $value) {
			$imagename = $value->image_name;
			}
			$data = array(
				'id'=>$db_id,
				'username'=>$username,
				'role'=>$db_role,
				'image'=>$imagename,
				'is_logged_in'=>true
				);
			$this->session->set_userdata('user_id',$data);
			if($remember>0)
			{
			$this->session->sess_expiration = 60*60;
            $this->session->sess_expire_on_close = FALSE;
			}else{
				 $this->session->sess_expire_on_close = TRUE;
			}

			echo"<script type='text/javascript'>
	var url ='".site_url('dashboard')."';
	 $('#errormsg').hide();
	$(location).attr('href',url);
</script>";

		}
}

	}



public function welcomehome()
{
	$userdata = $this->session->userdata('user_id');
if(isset($userdata))
{
	echo "id=".$userdata['id']."<br>";
	echo "username=".$userdata['username']."<br>";
	echo "role=".$userdata['role']."<br>";
}
}






public function forgetpassword()
{



$this->obj->verifyforgetemail($_POST['email']);


}






public function logoutuser()
{

$data = array(
'id'=>'',
'username'=>'',
'role'=>'',
'is_logged_in'=>false
	);
$sessinfo = $this->session->userdata('user_id');
$this->session->unset_userdata($sessinfo);
$this->session->sess_destroy();
unset($sessinfo);
session_destroy();
redirect(site_url());


}









}













?>
