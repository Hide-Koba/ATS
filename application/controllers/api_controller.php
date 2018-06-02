<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_controller extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function login(){
        $retvar = array();
        if ($this->input->post()){
            $data = $this->input->post();
            $username = $data['username'];
            $password = $data['password'];
            $login_data=$this->Admin_model->user_list($this->input->post('username'),md5($this->input->post('password')));
			$newdata=array(
					'username'=>$this->input->post('username'),
					'logged_in'=>$login_data
			);

			$this->session->set_userdata($newdata);
			if($login_data==="success"){
                $retvar["success"] = true; 
                $retvar["username"] = $username;
                $retvar["password"] = md5($password);
            }
				
			else{
                $retvar['success'] = false;
            }
				
        }else{
            $retvar['success'] = false;
        }
        $retvar = json_encode($retvar,true);
        header("Content-type:application/json");
        echo $retvar;
        
    }

    public function job_list(){
        $this->load->model('Job_model','jm');
        $list = $this->jm->get_list();
        $json_list = json_encode($list);
        header("Content-type:application/json");
        echo $json_list;
    }

    public function job_detail(){
        $detail = array();
        if (isset($_GET['id'])){
            $id = $_GET['id'];
        }else{
            $id=null;
        }
        
        if ($id===null){
            $json_detail = json_encode($detail);
        }else{
            $this->load->model('Job_model','jm');
            $detail = $this->jm->get_detail($id);
            $json_detail = json_encode($detail);
        }
        header("Content-type:application/json");
        echo $json_detail;
    }

    public function candidate_list(){
        $this->load->model('Admin_model');
        $data['success']=true;
        $data['data']=$this->Admin_model->list_candidate();
        $json_detail = json_encode($data);
        echo $json_detail;

    }

    public function add_post(){
        $data=array('Post_Title'=>$_POST["post_title"],
                    'short_description'=>$_POST["short_description"],
                    'Post_Description'=>$_POST["long_description"],
                    'wage_per_month'=>$_POST["wage"],
                    'place_of_work'=>$_POST["location"],
                    'company_name'=>$_POST['company_name'],
                    'counter_person_name'=>$_POST['counter_person'],
                    'dead_line'=>$_POST['deadline'],
                    'Job_Pos'=>$_POST['position'],
                    'email'=>$_POST['email'],
                    'phone'=>$_POST['phone_number']);

        // $data=array('Post_Title'=>"test1",
        //             'short_description'=>"test short description",
        //             'Post_Description'=>"test long description",
        //             'wage_per_month'=>"213433343",
        //             'place_of_work'=>"test",
        //             'company_name'=>"test 1",
        //             'counter_person_name'=>"rest",
        //             'dead_line'=>"test",
        //             'Job_Pos'=>"1",
        //            'email'=>"koirala.salu@gmail.com",
        //             'phone'=>"232323");
        $this->load->model('admin_model','Admin_model');
        //print_r($data);die;
        $data['success']=$this->Admin_model->add_post($data);
        echo json_encode($data);
    }

    public function add_user(){
        $data=array('username'=>$_POST["username"],
                    'first_name'=>$_POST["first_name"],
                    'last_name'=>$_POST["last_name"],
                    'address'=>$_POST["address"],
                    'phone_number'=>$_POST["phone_number"],
                    'email'=>$_POST['email'],
                    "password"=>md5($_POST['password']));
        $this->load->model('admin_model','Admin_model');
        $data['success']=$this->Admin_model->add_user($data);
        echo json_encode($data);

    }

    public function change_password(){
        print_r($this->session->userdata('admin'));
        // if($POST['new_password']==$_POST['confirm_password']){
        //     $data=array('password'=>md5($_POST["new_password"]));

        // }
        // else{
        //     $data['success']=false;
        // }
        // echo json_encode($data);
    }

}