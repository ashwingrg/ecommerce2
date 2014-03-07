<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['allAdmins'] = $this->admin_model->allAdmins();
		$data['subview'] = 'backend/admin/admin_index_view';
		$this->load->view('backend/layouts/layouts',$data);
	}
	public function newAdmin(){
		$data['subview'] = "backend/admin/admin_new";
		$this->load->view('backend/layouts/layouts',$data);
		$this->load->model('admin_model');
		if($_POST){
			$fname = $this->input->post("fname");
			$lname = $this->input->post("lname");
			$username = $this->input->post("username");
			$email = $this->input->post("email");
			$password = $this->input->post("password1");
			$hashpsw = hash("sha512",$password);
			$description = $this->input->post("description");
			$added = $this->admin_model->addAdmin($fname,$lname,$username,$email,$hashpsw,$description);
			if($added){
				$this->session->set_flashdata('adminadded', 'New admin added successfully!');
				?><script>window.location.href="<?php echo base_url(); ?>admin/adminAll";</script> <?php
			}
		}
	}
	public function editAdmin($admin_id){
		$data['subview'] = "backend/admin/admin_new";
		$this->load->model('admin_model');
		$data['adminById'] = $this->admin_model->getById($admin_id);
		$this->load->view('backend/layouts/layouts',$data);
		if($_POST){
			$fname = $this->input->post("fname");
			$lname = $this->input->post("lname");
			$username = $this->input->post("username");
			$email = $this->input->post("email");
			$password = $this->input->post("password1");
			$hashpsw = hash("sha512",$password);
			$description = $this->input->post("description");
			$updated = $this->admin_model->updateAdmin($admin_id,$fname,$lname,$username,$email,$hashpsw,$description);
			
		}
	}
	public function deleteAdmin($admin_id){
		$this->load->model('admin_model');
		$deleted = $this->admin_model->delAdmin($admin_id);
		if($deleted){
			$this->session->set_flashdata('admindeleted', 'Selected Admin has been deleted successfully.');
			?><script>window.location.href="<?php echo base_url(); ?>admin/adminAll";</script> <?php
		}
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin/admin.php */