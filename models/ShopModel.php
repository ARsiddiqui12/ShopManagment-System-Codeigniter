<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class ShopModel extends CI_Model
{
	
public function insert_data($user_image,$user_id)
{

$data=array(
'shop_name'=>$this->input->post('txt_companyname'),
'description'=>$this->input->post('txt_companydetails'),
'shop_phone'=>$this->input->post('txt_phone'),
'shop_mobile'=>$this->input->post('txt_mobile'),
'shop_email'=>$this->input->post('txt_email'),
'shop_address'=>$this->input->post('txt_address'),
'logo'=>$user_image,
'added_by'=>$user_id,
'shopadding_date'=>date('y-m-d h:i:s')
    );

$this->db->insert('shop',$data);

}

public function retrieve_data()
{

	$query = $this->db->query("SELECT shop.*,user_profile.* FROM shop INNER JOIN user_profile ON shop.added_by = user_profile.id ORDER BY shop_id DESC");
	return $query->result();

}


public function view_data($set_id)
{

$query = $this->db->query("SELECT shop.*,user_profile.* FROM shop INNER JOIN user_profile ON shop.added_by=user_profile.id AND shop.shop_id='$set_id'");
if($query->num_rows()>0)
{
	return $query->result();

}else{
	redirect(site_url('shopr'));
}


}


public function update_data($set_id,$set_data)
{

$wherecause=array(
	'shop_id'=>$set_id
	);
$query = $this->db->update('shop',$set_data,$wherecause);


}


public function delete_data($set_id)
{

$query = $this->db->query("SELECT * FROM shop WHERE shop_id='$set_id' LIMIT 1");
$result = $query->result();
foreach ($result as $key => $value) {
	$oldimg=$value->logo;
	if(file_exists('shopuploads/'.$oldimg))
		{
		unlink("shopuploads/$oldimg");
		}
}


$wherecause=array(
'shop_id'=>$set_id
	);
$this->db->delete('shop',$wherecause);


}























}


?>