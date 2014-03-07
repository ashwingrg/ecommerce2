<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model {
	private $usernameoremail;
	private $psw;
	function allAdmins(){
		$query = $this->db->get('admin');
		// $query = $this->db->query("SELECT * FROM admin WHERE user_type='admin' AND user_type='madmin'");
		$data = $query->result();
		return $data;
	}
	function getById($admin_id){
		$this->db->where('admin_id',$admin_id);
		$query = $this->db->get('admin');
		$data = $query->row();
		return $data;
	}
	function addAdmin($fname,$lname,$username,$email,$hashpsw,$description){
		$data = array(
			'admin_firstname' => $fname,
			'admin_lastname' => $lname,
			'admin_username' => $username,
			'admin_email' => $email,
			'admin_password' => $hashpsw,
			'admin_description' => $description,
			'admin_type' => 'admin'
		);
		if($this->db->insert('admin',$data)){
			return true;
		}
	}
	function updateAdmin($admin_id,$fname,$lname,$username,$email,$hashpsw,$description){
		$data = array(
			'admin_id' => $admin_id, 
			'admin_firstname' => $fname,
			'admin_lastname' => $lname,
			'admin_username' => $username,
			'admin_email' => $email,
			'admin_password' => $hashpsw,
			'admin_description' => $description,
			'admin_type' => $alkdja
		);
	}
	function delAdmin($admin_id){
		$this->db->where('admin_id',$admin_id);
		$this->db->delete('admin');
		if($this->db->last_query()){
			return true;
		}
	}
	function checkAdmin($useroremail,$hashpsw){
		// $this->db->where('admin_username',$useroremail);
		// $this->db->or_where('admin_email',$useroremail);
		// $this->db->where('admin_password',$hashpsw);
		// $query = $this->db->get('admin');
		$query = $this->db->query("SELECT * FROM admin WHERE (admin_username='$useroremail' OR admin_email='$useroremail') AND admin_password='$hashpsw'");
		if($query->num_rows()>0){
			return $query->row();
		}
		else {
			return false;
		}
	}
}

/* End of file admin_user_model.php */
/* Location: ./application/models/admin_user_modal.php */
