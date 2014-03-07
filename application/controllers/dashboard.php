<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('userinfo')) {
			$data['subview'] = 'backend/dashboard';
			$this->load->view('backend/layouts/layouts',$data);
		}
		else{
			?><script>window.location.href="<?php echo base_url(); ?>admin/login"</script> <?php
		}
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */