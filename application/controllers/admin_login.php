<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_login extends CI_Controller {

	public function index()
	{
		$this->load->view('backend/admin_login');
		$this->load->model('admin_model');
		$data['admins'] = $this->admin_model->allAdmins();
		if($_POST){
			@ $useroremail = $_POST['useroremail'];
			$password = $_POST['password'];
			$hashpsw = hash("sha512", $password);
			$check = $this->admin_model->checkAdmin($useroremail,$hashpsw);
			if(!$check){
				$this->session->set_flashdata('inv', 'Invalid username or password');
				?><script>window.location.href="<?php echo base_url(); ?>admin/login"</script> <?php
			}
			else {
				$userdata = array(
					'userinfo' => $check
				);
				$this->session->set_userdata( $userdata );
				?><script>window.location.href="<?php echo base_url(); ?>admin/dashboard"</script> <?php
			}
		}
	}
	public function logout(){
		$this->session->unset_userdata('userinfo');
		$this->session->set_flashdata('logoutmsg', 'You have successfully terminated your session....');
		?><script>window.location.href="<?php echo base_url(); ?>admin/login"</script> <?php
	}

}

/* End of file admin_login.php */
/* Location: ./application/controllers/admin_login.php */