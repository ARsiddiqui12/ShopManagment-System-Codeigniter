<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model
{
	

public function check_email($get_email)
{

$query=$this->db->query("SELECT email FROM user_profile WHERE email='$get_email'");

if($query->num_rows()>0)
{
	return true;

}else{

	return false;
}

}	


public function check_username($get_username)
{

$query=$this->db->query("SELECT username FROM user_profile WHERE username='$get_username'");

if($query->num_rows()>0)
{
	return true;

}else{

	return false;
}

}	


public function check_nic($get_nic)
{

$query=$this->db->query("SELECT nic_number FROM user_profile WHERE nic_number='$get_nic'");

if($query->num_rows()>0)
{
	return true;

}else{

	return false;
}

}	







public function registeruser($imagename)
{

	$data = array(
    'first_name'=>$this->input->post('txt_fname'),
    'last_name'=>$this->input->post('txt_lname'),
    'email'=>$this->input->post('txt_email'),
    'mobile'=>$this->input->post('txt_mobile'),
    'nic_number'=>$this->input->post('txt_nic'),
    'address'=>$this->input->post('txt_address'),
    'image_name'=>$imagename,
    'role'=>'2',
    'adding_date'=>date('y-m-d h:i:s')
    );

	
	$this->db->insert('user_profile',$data);

	$logindata=array(
    'email'=>$this->input->post('txt_email'),
    'username'=>$this->input->post('txt_username'),
    'password'=>md5($this->input->post('txt_password')),
    'role'=>'2',

    );


	$this->db->insert('user_login',$logindata);



}




public function user_verification($set_username,$set_password)
{


$query = $this->db->query("SELECT * FROM user_login WHERE username='$set_username' AND password='$set_password' LIMIT 1");
if($query->num_rows()>0)
{
    return $query->result();

}else{

    echo "Error:&nbsp;That User Does Not Exist..!";
}

}




public function verifyforgetemail($set_email)
{

$query = $this->db->query("SELECT email FROM user_login WHERE email='$set_email' LIMIT 1");
if($query->num_rows()>0)
{
echo "<div class='alert alert-success'>Your Password has been sent on your email id</div>";
}else{
echo "<div class='alert alert-danger'>Error: &nbsp;This Email Address Does Not Exist...!</div>";

}

}




public function get_image($set_id)
{

    $query = $this->db->query("SELECT id,image_name FROM user_profile WHERE id='$set_id'");
    return $query->result();
}






}
















?>