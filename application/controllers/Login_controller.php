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
        $this->load->model('admin_model','Admin_model');
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
		$msg['message']= "";
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

			$msg['message']=$this->Admin_model->add_admin_user($data);
		}
		$this->template->load("template","add_admin_user",$msg);
	}

	public function update_password(){
		$msg['message'] = "";
		if ($this->input->post()){
			$data =$this->input->post();
			if ($data['password']===$data['confirm_password']){
				$username = $_SESSION['username'];
				$id = $this->Admin_model->get_user_id_by_name($username);
				$msg['message'] = $this->Admin_model->update_password($id->id,md5($data['password']));
				if ($msg['message']===true){
					$msg['message'] = '';
				}
			}else{
				$msg['message']="Password does not match";
			}
		}else{
			//$msg['message'] = "No request";
		}
		$this->template->load("template","update_password",$msg);
	}

	 public function logout(){
	 	$this->session->sess_destroy();
	 	redirect("Login_controller",'refresh');
	 }

}