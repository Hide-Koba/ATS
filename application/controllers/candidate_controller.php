<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate_Controller extends CI_Controller {

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
	public function index()
	{
		$this->load->model('Admin_model');
		$data['list']=$this->Admin_model->list_candidate();

		$this->load->view("candidate_view",$data);

	}

	public function single_user_detail($id){
		$this->load->model('Admin_model');
		$data['list']=$this->Admin_model->list_single_user_detail($id);
		$this->load->view("single_user_detail",$data);
	}

	public function status(){
		//print_r($this->input->post());
		$this->load->model('Admin_model');
		$data=$this->Admin_model->status_update($this->input->post('value'),$this->input->post('id'));
		echo $data;
	}
}
