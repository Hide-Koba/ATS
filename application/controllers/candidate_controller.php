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
	function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }
    
	public function index()
	{
		$this->load->model('Admin_model');
		$data['list']=$this->Admin_model->list_candidate();
		//$this->load->view("candidate_view",$data);
		$this->template->load("template","admin_view",$data);

	}

	public function single_user_detail($id){
		$this->load->model('Admin_model');
		$data['list']=$this->Admin_model->list_single_user_detail((int)$id);
		$this->load->model('Job_model');
		$job_data = array();
		//var_dump($data['list']);
		$job_id = (int)$data['list']->applied_job_id;
		if ($job_id!==0){
			$job_data = $this->Job_model->get_detail((int)$data['list']->applied_job_id);
		}
		$data['job_data'] = $job_data;
		$resumedata = $this->Admin_model->candidate_resume_pickup($id);
		$data['employment_history'] = $resumedata['employment'];
		$data['education_history'] = $resumedata['education'];
		$this->template->load("template","single2",$data);
	}

	public function status(){
		//print_r($this->input->post());
		$this->load->model('Admin_model');
		$data=$this->Admin_model->status_update($this->input->post('value'),$this->input->post('id'));
		echo $data;
	}
}
