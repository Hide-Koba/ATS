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
			$data=$this->Admin_model->user_list($this->input->post('username'),md5($this->input->post('password')));
			$newdata=array(
					'username'=>$this->input->post('username'),
					'logged_in'=>$data
			);

			$this->session->set_userdata($newdata);
			if($data==="success")
				redirect("Candidate_controller",'refresh');
				// $this->template->load('template','admin_view');
			else
				$this->load->view('login_view',$newdata);

		}
		else
		{
			$this->load->view('login_view');

		}
		
	}

	public function add_admin_user(){
		if($this->input->post()){
			$data=array(
				'first_name'=>$this->input->post('first_name'),
				'last_name'=>$this->input->post('last_name'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'Address'=>$this->input->post('address'),
				'Email'=>$this->input->post('email'),
				'phone_number'=>$this->input->post('phone_number')
			);

			$msg=$this->Admin_model->add_admin_user($data);

			echo $msg;

		}else{
			$this->template->load("template","add_admin_user");
			// $this->load->view("add_admin_user");
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
	 public function logout(){
	 	$this->session->sess_destroy();
	 	redirect("Login_controller",'refresh');
	 }

}