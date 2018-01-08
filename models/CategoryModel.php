<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class CategoryModel extends CI_Model
{
	
public function insert_data($user_image,$user_id)
{

$data=array(
'name'=>$this->input->post('txt_companyname'),
'description'=>$this->input->post('txt_companydetails'),
'logo'=>$user_image,
'added_by'=>$user_id,
'categoryadding_date'=>date('y-m-d h:i:s')
    );

$this->db->insert('category',$data);

}

public function retrieve_data()
{

	$query = $this->db->query("SELECT category.*,user_profile.* FROM category INNER JOIN user_profile ON category.added_by = user_profile.id ORDER BY category_id DESC");
	return $query->result();

}

public function view_data($set_id)
{

$query = $this->db->query("SELECT category.*,user_profile.* FROM category INNER JOIN user_profile ON category.added_by=user_profile.id AND category.category_id='$set_id'");
if($query->num_rows()>0)
{
	return $query->result();

}else{
	redirect(site_url('categoryr'));
}


}




public function update_data($set_id,$set_data)
{

$wherecause=array(
	'category_id'=>$set_id
	);
$query = $this->db->update('category',$set_data,$wherecause);


}

public function delete_data($set_id)
{

$query = $this->db->query("SELECT * FROM category WHERE category_id='$set_id' LIMIT 1");
$result = $query->result();
foreach ($result as $key => $value) {
	$oldimg=$value->logo;
	if(file_exists('categoryuploads/'.$oldimg))
		{
		unlink("categoryuploads/$oldimg");
		}
}


$wherecause=array(
'category_id'=>$set_id
	);
$this->db->delete('category',$wherecause);


}




}

?>