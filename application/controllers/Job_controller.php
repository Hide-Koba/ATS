<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_controller extends CI_Controller {

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

		//Load model
		$this->load->Model('Job_model');
		//Retrieve Data
		$job_list = $this->Job_model->get_list();
		var_dump($job_list);
		$body["job_data"] = $job_list;
		$this->load->view('Job_listing',$body);
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