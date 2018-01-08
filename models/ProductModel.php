<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class ProductModel extends CI_Model
{
	
public function get_company()
{

	$query = $this->db->get('company');
	return $query->result();

}

public function get_shop()
{

	$query = $this->db->get('shop');
	return $query->result();

}

public function get_category()
{

	$query = $this->db->get('category');
	return $query->result();

}

public function product_insert($set_data)
{

	$this->db->insert('product',$set_data);
}


public function product_retrieve()
{

$query = $this->db->query("SELECT * FROM product JOIN company ON product.company=company.company_id JOIN shop ON product.shop=shop.shop_id JOIN category ON product.category=category.category_id JOIN user_profile ON product.added_by=user_profile.id ORDER BY product.product_id DESC");
return $query->result();

}

public function product_viewdetails($set_id)
{

$query = $this->db->query("SELECT * FROM product JOIN company ON product.company=company.company_id JOIN shop ON product.shop=shop.shop_id JOIN category ON product.category=category.category_id JOIN user_profile ON product.added_by=user_profile.id WHERE product.product_id='$set_id' ");
return $query->result();

}


public function product_update($set_id,$set_data)
{

$wherecause = array(
'product_id'=>$set_id
	);

$this->db->update('product',$set_data,$wherecause);


}


public function product_datadelete($set_id)
{

$query = $this->db->query("SELECT * FROM product WHERE product_id='$set_id' LIMIT 1");
$result = $query->result();
foreach ($result as $key => $value) {
	$oldimg=$value->image;
	if(file_exists('productuploads/'.$oldimg))
		{
		unlink("productuploads/$oldimg");
		}
}


$wherecause=array(
'product_id'=>$set_id
	);
$this->db->delete('product',$wherecause);




}




}