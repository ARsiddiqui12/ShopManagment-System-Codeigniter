<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class CompanyModel extends CI_Model
{
	
public function insert_data($user_image,$user_id)
{

$data=array(
'company_name'=>$this->input->post('txt_companyname'),
'description'=>$this->input->post('txt_companydetails'),
'logo'=>$user_image,
'added_by'=>$user_id,
'datentime'=>date('y-m-d h:i:s')
    );

$this->db->insert('company',$data);

}



public function retrieve_data()
{


	$query = $this->db->query("SELECT company.*,user_profile.* FROM company INNER JOIN user_profile ON company.added_by = user_profile.id ORDER BY company_id DESC");
	return $query->result();

}



public function viewcompanyinfo($set_id)
{


$query = $this->db->query("SELECT company.*,user_profile.* FROM company INNER JOIN user_profile ON company.added_by=user_profile.id AND company.company_id='$set_id'");
if($query->num_rows()>0)
{
	return $query->result();

}else{
	redirect(site_url('company'));
}

}


public function updatecompanydata($set_id,$set_data)
{
$wherecause=array(
	'company_id'=>$set_id
	);
$query = $this->db->update('company',$set_data,$wherecause);

}


public function deletecompanydata($set_id)
{

$query = $this->db->query("SELECT * FROM company WHERE company_id='$set_id' LIMIT 1");
$result = $query->result();
foreach ($result as $key => $value) {
	$oldimg=$value->logo;
	if(file_exists('companyuploads/'.$oldimg))
		{
		unlink("companyuploads/$oldimg");
		}
}


$wherecause=array(
'company_id'=>$set_id
	);
$this->db->delete('company',$wherecause);

}



















	
}






























?>