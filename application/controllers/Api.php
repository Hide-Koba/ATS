<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    function __construct(){
        parent::__construct();
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
}