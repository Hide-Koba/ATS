<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_upload extends CI_Controller {

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
        function __construct(){
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('uuid');
        }
	public function index()
	{
                $this->load->Model('User_uploads');
                $data = $this->input->post();
                //var_dump($data);
                //echo 'this is new page';
                if ($this->input->post()){
                    var_dump($this->input->post());
                    //post script
                    $config['upload_path']          = './uploads/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg|doc|docx|pdf|JPG|JPEG';
                    $config['file_name'] = $this->uuid->v4();

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('resume'))
                    {
                            $error = array('error' => $this->upload->display_errors());
                            var_dump($error);
                            //$this->load->view('user_upload_page', $error);
                    }
                    else
                    {
                        $data = array('upload_data' => $this->upload->data());

                        //Save data
                        $user_input = $this->input->post();
                        $user_input['job_id'] = (int)$user_input['job_id'];
                        $user_input['cv_file_name'] = $data['upload_data']['file_name'];
                        $result = $this->User_uploads->save($user_input);
                        
                        redirect('User_upload/upload_success');
                    }
                }
                //prepare job position
                $job_pos = $this->User_uploads->get_jobpositions();
                $body = array();
                $body['job_pos'] = $job_pos;
                if (isset($_GET['job_id'])){
                    $body['job_id'] = $_GET['job_id'];
                }
        //$this->load->view('user_upload_page',$body);
        $this->template->load('front_template','user_upload_page',$body);
	}
        public function upload_success(){
            //$this->load->view('upload_success.php');
            $this->template->load('front_template','upload_success',$body);
        }
}
