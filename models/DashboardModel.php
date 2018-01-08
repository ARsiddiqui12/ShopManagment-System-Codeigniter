<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class DashboardModel extends CI_Model
{

function get_session_info($set_id,$set_username,$set_role)
{


$query = $this->db->query("SELECT * FROM user_profile JOIN user_login ON user_profile.id=user_login.id WHERE user_login.id='$set_id' AND user_login.username='$set_username' LIMIT 1");
if($query->num_rows()==1)
{
	return $query->result();
}

}


public function get_employes()
{
$query = $this->db->get("user_profile");
return $query->num_rows();
}
public function get_companies()
{
$query = $this->db->get("company");
return $query->num_rows();
}
public function get_shops()
{
$query = $this->db->get("shop");
return $query->num_rows();
}
public function get_product()
{
$query = $this->db->get("product");
return $query->num_rows();
}
public function get_dealer()
{
$query = $this->db->get("dealer");
return $query->num_rows();
}
public function get_customer()
{
$query = $this->db->get("customer");
return $query->num_rows();
}
public function retrieve_products_limit()
{
$query = $this->db->query("SELECT * FROM product JOIN company ON product.company=company.company_id JOIN shop ON product.shop=shop.shop_id JOIN category ON product.category=category.category_id JOIN user_profile ON product.added_by=user_profile.id ORDER BY product.product_id DESC LIMIT 10");
return $query->result();
}



public function get_dealer_data()
{
$query = $this->db->query("SELECT * FROM dealer ORDER BY dealer_id DESC");
return $query->result();
}

public function get_customer_data()
{
$query = $this->db->query("SELECT * FROM customer ORDER BY customer_id DESC");
return $query->result();

}














}

