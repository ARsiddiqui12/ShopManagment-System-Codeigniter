<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class DealerModel extends CI_Model
{
	

	public function getproducts()
	{
	$query = $this->db->query("SELECT * FROM product");
	return $query->result();
	}

	

	public function insert_data($set_image,$set_id)
	{

		$data =array(
'dealer_name'=>$this->input->post('txt_dealername'),
'company'=>$this->input->post('txt_company'),
'shop'=>$this->input->post('txt_shop'),
'product'=>$this->input->post('txt_product'),
'profession'=>$this->input->post('txt_exp_imp'),
'nic_number'=>$this->input->post('txt_nic'),
'mobile'=>$this->input->post('txt_mobile'),
'phone'=>$this->input->post('txt_phone'),
'email'=>$this->input->post('txt_email'),
'address'=>$this->input->post('txt_address'),
'd_details'=>$this->input->post('txt_details'),
'dealer_image'=>$set_image,
'added_by'=>$set_id,
'dealer_addingdate'=>date('y-m-d h:i:s')




    );
		$this->db->insert('dealer',$data);

	}


public function dealer_records()
{

$query = $this->db->query("SELECT * FROM dealer JOIN company ON dealer.company=company.company_id JOIN shop ON dealer.shop=shop.shop_id JOIN product ON dealer.product=product.product_id");
return $query->result();

}


public function dealer_viewdata($set_id)
{

$query = $this->db->query("SELECT * FROM dealer JOIN company ON dealer.company=company.company_id JOIN shop ON dealer.shop=shop.shop_id JOIN product ON dealer.product=product.product_id WHERE dealer.dealer_id='$set_id'");
return $query->result();

}


public function dealerupdatedata($set_id,$set_data)
{

$wherecase = array(
	'dealer_id'=>$set_id
	);

$this->db->update('dealer',$set_data,$wherecase);

}

public function delete_dealerdata($set_id)
{

$query = $this->db->query("SELECT * FROM dealer WHERE dealer_id='$set_id' LIMIT 1");
$result = $query->result();
foreach ($result as $key => $value) {
	$oldimg=$value->dealer_image;
	if(file_exists('dealerupload/'.$oldimg))
		{
		unlink("dealerupload/$oldimg");
		}
}


$wherecause=array(
'dealer_id'=>$set_id
	);
$this->db->delete('dealer',$wherecause);

}


}


?>