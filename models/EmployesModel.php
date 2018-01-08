<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class EmployesModel extends CI_Model
{


public function employes_profiles()
{

$query = $this->db->query("SELECT * FROM user_profile JOIN user_login ON user_profile.id =user_login.id WHERE user_login.role='2' ORDER BY user_profile.id DESC");
return $query->result();


}


public function employes_proview($set_id)
{

$query = $this->db->query("SELECT user_profile.*,user_login.* FROM user_profile INNER JOIN user_login ON user_profile.id =user_login.id WHERE user_profile.id='$set_id' AND user_login.id='$set_id'");
return $query->result();


}

public function activate_employ($set_id)
{

$wherecase = array(
	'id'=>$set_id
	);

$data = array('authentication' =>'1');

$this -> db -> update('user_login',$data,$wherecase);
}




public function blocked_employ($set_id)
{

$wherecase = array(
	'id'=>$set_id
	);

$data = array('authentication' =>'2');

$this -> db -> update('user_login',$data,$wherecase);
}


public function delete_employ($set_id)
{

$query = $this->db->query("SELECT * FROM user_profile WHERE id='$set_id' LIMIT 1");
$result = $query->result();
foreach ($result as $key => $value) {
	$oldimg=$value->image_name;
	if(file_exists('uploads/'.$oldimg))
		{
		unlink("uploads/$oldimg");
		}
}


$wherecause=array(
'id'=>$set_id
	);
$this->db->delete('user_profile',$wherecause);
$this->db->delete('user_login',$wherecause);



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
    'role'=>$this->input->post('txt_role'),
    'adding_date'=>date('y-m-d h:i:s')
    );

	
	$this->db->insert('user_profile',$data);

	$logindata=array(
    'email'=>$this->input->post('txt_email'),
    'username'=>$this->input->post('txt_username'),
    'password'=>md5($this->input->post('txt_password')),
    'role'=>$this->input->post('txt_role'),

    );


	$this->db->insert('user_login',$logindata);



}






public function employupdateinfo($set_id,$set_data,$set_email)
{

$wherecause = array(
	'id'=>$set_id
	);
$this->db->update('user_profile',$set_data,$wherecause);
$this->db->update('user_login',$set_email,$wherecause);

}

public function getemploys()
{

$query = $this->db->query("SELECT * FROM user_profile JOIN user_login ON user_profile.id=user_login.id WHERE user_profile.role='2'");
return $query->result();
}

public function employeementinfo()
{

$data=array(
	'employ_id'=>$this->input->post('txt_employ'),
	'shop'=>$this->input->post('txt_shop'),
	'salary'=>$this->input->post('txt_salary'),
	'joining_date'=>$this->input->post('txt_joiningdate'),
	'empadding_date'=>date('y-m-d h:i:s')
	);

$this->db->insert('employeement',$data);

}







}


?>