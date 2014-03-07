<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class frontend extends CI_Controller {

	public function index()
	{
		$data['subview1'] = 'frontend/layouts/home_slider';
		$data['subview2'] = 'frontend/layouts/home_featured_products';
		$data['subview3'] = 'frontend/layouts/home_latest_products';
		$this->load->view('frontend/layouts/layouts',$data);
	}
}

/* End of file frontend.php */
/* Location: ./application/controllers/frontend.php */