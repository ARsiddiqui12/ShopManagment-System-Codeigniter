<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class BankDetailsModel extends CI_Model
{

public function insert_bankdata($setdata)
{

$this->db->insert('bank',$setdata);

}

public function retrieve_bankdata()
{

	$query = $this -> db -> get("bank");
	return $query->result();
}

public function view_bankdata($setid)
{

$query = $this->db->query("SELECT * FROM bank WHERE id='$setid'");
return $query->result();

}

public function update_bankdata($setid,$setdata)
{

	$wherecase = array('id'=>$setid);

	$this->db->update('bank',$setdata,$wherecase);
}

public function delete_bankdata($setid)
{	$wherecase = array('id'=>$setid);
	$this->db->delete('bank',$wherecase);
}

}


?>