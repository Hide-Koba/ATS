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
		$this->load->helper(array('form', 'url'));

    } 
    
	public function index()
	{
		$query = $this->input->get();
		//var_dump($query);
		//Load model
		$this->load->Model('Job_model');
		//Retrieve Data
		//$job_list = $this->Job_model->get_list();
		$job_list = $this->Job_model->get_list_by_q($query);
		$body["job_data"] = $job_list;
		//$this->load->view('Job_listing',$body);
		$this->template->load('front_template','Job_listing',$body);
	}

	public function detail($id=null){
		if ($id===null){
			redirect("/Job_controller/index");
			exit();
		}
		$this->load->Model('Job_model');
		$data['job_detail'] = $this->Job_model->get_detail($id);
		if ($data['job_detail']['id']===''){
			redirect("/Job_controller/index");
			exit();
		}

		$this->template->load('front_template','Job_detail',$data);
		//$this->load->view('Job_detail',$data);
	}

	public function add(){
		if ($this->input->post()){
			
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->Model('Job_model');
			$result = $this->Job_model->add($data);
		}else{
			
		}
		$this->load->Model('User_uploads');
		$job_pos = $this->User_uploads->get_jobpositions();
		$body = array();
		$body['job_pos'] = $job_pos;
		$this->template->load('front_template','Job_Adding');
	}

	public function admin_index(){
		$this->load->model('Job_model');

		$data['list']=$this->Job_model->get_list_admin();
		//$this->load->view("candidate_view",$data);
		$this->template->load("template","Job_admin_view",$data);
	}
	public function admin_detail($id){
		if ($id===null){
			redirect("/Job_controller/index");
			exit();
		}
		$this->load->Model('Job_model');
		$data['job_detail'] = $this->Job_model->get_detail($id);
		if ($data['job_detail']['id']===''){
			redirect("/Job_controller/admin_index");
			exit();
		}
		$this->load->Model('Admin_model');
		$candidate_list = $this->Admin_model->find_id_list_candidate($id);
		$data['candidate_list'] = $candidate_list;

		$this->template->load('template','Job_admin_detail',$data);
		//$this->load->view('Job_detail',$data);
	}
	public function admin_edit($id){
		$this->load->Model('Job_model');
		if ($this->input->post()){
			$data = $this->input->post();
			unset($data['Update']);
			//var_dump($data);
			$result = $this->Job_model->edit($data);
			//var_dump($result);
			//exit();
		}

		
		$data['job_detail'] = $this->Job_model->get_detail($id);	
		
		$this->load->Model('User_uploads');
		$job_pos = $this->User_uploads->get_jobpositions();
		$data['job_pos'] = $job_pos;
		$this->template->load('template','Job_editing',$data);
	}

	public function file_upload(){
		$this->load->Model('Job_model');
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'csv';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('userfile')){
			var_dump($this->upload->display_errors());
			//redirect("/Job_controller/admin_index");
			echo "Error Occured. Please back the browser and fix the problem.";
		}else{
			$name = $this->upload->data('file_name');
			$path = $this->upload->data('file_path');
			$csv = array_map('str_getcsv', file($path.$name));
			
			//retrieve the first line
			$header = array();
			$cnt = 0;
			foreach ($csv as $each){
				foreach ($each as $individual){
					array_push($header,$individual);
				}
				break;
			}
			$ccnt=0;
			foreach ($csv as $line){
				$tmp = array();
				if ($cnt===0){
					$cnt++;
					continue;
				}
				foreach($line as $individual){
					$tmp[$header[$ccnt]] = $individual;
					$ccnt++;
				}
				$tmp['Job_Pos'] = 1;
				
				$result = $this->Job_model->add($tmp);
				$ccnt=0;
				$cnt++;
			}
		}

		redirect("/Job_controller/admin_index");
	}

	public function flip_status($id=null){
		$this->load->Model('Job_model');
		if ($id===null){
			redirect("/Job_controller/admin_index");
		}

		$status = $this->Job_model->get_status($id);
		if ($status==='0'){
			$updater = 1;
		}else{
			$updater = 0;
		}
		$status = $this->Job_model->update_status($id,$updater);

		redirect("/Job_controller/admin_detail/".$id);

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