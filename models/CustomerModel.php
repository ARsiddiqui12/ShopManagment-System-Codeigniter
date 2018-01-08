<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class CustomerModel extends CI_Model
{
	
public function customer_insertdata($set_image,$set_id)
{

$data =array(
'customer_name'=>$this->input->post('txt_dealername'),
'shop'=>$this->input->post('txt_shop'),
'nic_number'=>$this->input->post('txt_nic'),
'mobile'=>$this->input->post('txt_mobile'),
'phone'=>$this->input->post('txt_phone'),
'email'=>$this->input->post('txt_email'),
'address'=>$this->input->post('txt_address'),
'customer_image'=>$set_image,
'added_by'=>$set_id,
'customer_addingdate'=>date('y-m-d h:i:s')




    );
		$this->db->insert('customer',$data);	

}

public function customer_recorddata()
{
	
	$query = $this->db->query("SELECT * FROM customer JOIN shop ON customer.shop=shop.shop_id");
	return $query->result();

}

public function customer_viewdata($set_id)
{

$query = $this->db->query("SELECT * FROM customer JOIN shop ON customer.shop=shop.shop_id WHERE customer.customer_id='$set_id'");
	return $query->result();

}

public function customer_updatedata($set_id,$set_data)
{
	$wherecase = array(
	'customer_id'=>$set_id
	);

$this->db->update('customer',$set_data,$wherecase);


}

public function customer_datadelete($set_id)
{
	
	$query = $this->db->query("SELECT * FROM customer WHERE customer_id='$set_id' LIMIT 1");
$result = $query->result();
foreach ($result as $key => $value) {
	$oldimg=$value->customer_image;
	if(file_exists('customeruploads/'.$oldimg))
		{
		unlink("customeruploads/$oldimg");
		}
}


$wherecause=array(
'customer_id'=>$set_id
	);
$this->db->delete('customer',$wherecause);

}


}






?>