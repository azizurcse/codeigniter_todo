<?php 


class User_model extends CI_Model{


public function get_users($user_id)
{
	$this->db->where('id',$user_id);
	// $query=$this->db->query("select * from users");
	// return $query->num_fields();/// this is table field query

	$query=$this->db->get('users');
	return $query->result();

}




}










?>
