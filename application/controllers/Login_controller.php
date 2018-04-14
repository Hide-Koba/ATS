<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    } 
    
	public function index()
	{
		if($this->input->post())
		{
			$data=$this->Admin_model->user_list($this->input->post('username'),$this->input->post('password'));
			$newdata=array(
					'username'=>$this->input->post('username'),
					'logged_in'=>$data
			);

			$this->session->set_userdata($newdata);
			if($data==="success")
				redirect("candidate_controller");
			else
				$this->load->view('Admin_view',$newdata);

		}
		else
		{
			$this->load->view('Admin_view');

		}
		
	}

	// public function register()
	// {
	// 	if($this->input->post())
	// 	{
	// 		$data=$this->admin_model->register($this->input->post());
	// 	}
	// 	else
	// 	{
	// 		$this->load->view('register');
	// 	}
	// }

}