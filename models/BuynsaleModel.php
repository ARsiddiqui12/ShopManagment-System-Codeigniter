<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class BuynsaleModel extends CI_Model
{

public function insert_order($setdata)
{
	$this->db->insert('buynsale',$setdata);
}

public function order_records()
{

$query = $this->db->get("buynsale");
return $query->result();

}

public function order_viewdata($set_id)
{

$query = $this->db->query("SELECT * FROM buynsale WHERE order_id='$set_id'");
return $query->result();


}


public function order_deletedata($set_id)
{

$wherecase= array('order_id' =>$set_id );

$this->db->delete('buynsale',$wherecase);

}












}


?>