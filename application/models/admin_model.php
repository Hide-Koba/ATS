<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

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

	public function user_list($username,$password)
	{
		//print_r($password);die;
		$this->db->select('id');
		$this->db->from('mac_users');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query=$this->db->get()->row();
		if($query!=null)
			return "success";
		else
			return "failed";
	}

	public function register($data)
	{
		if($this->db->insert('mac_users',$data))
			return true;
		return false;
	}

	public function list_candidate()
        {
                $this->db->select('id,first_name,last_name,Status');
                $this->db->from("Resume_Candidate");
                $query=$this->db->get();
                return $query->result();
        }

        public function list_single_user_detail($id)
        {
            $this->db->select('*');
            $this->db->from('Resume_Candidate');
            $this->db->where('id',$id);
            $query=$this->db->get();
            return $query->row();
        }

        public function status_update($value,$id)
        {
        	$this->db->where('id',$id);
        	$this->db->update('Resume_Candidate',array('status'=>$value));
        	return "success";
        }

        public function add_post($data){
        	if($this->db->insert('Job_post',$data))
        		return "true";
        	return "false";
        }

        public function add_user($data){
        	if($this->db->insert('mac_users',$data))
        		return "Register Success";
        	return "Register Fail";
		}
		
		public function add_admin_user($data){
			return $this->add_user($data);
		}

		public function get_user_id_by_name($username=null){
			if ($username===null){
				return false;
			}
			$this->db->select('id');
            $this->db->from('mac_users');
            $this->db->where('username',$username);
            $query=$this->db->get();
            return $query->row();
		}

		public function update_password($id,$pw){
			var_dump($id);
			$this->db->where('id',$id);
			return $this->db->update('mac_users',array('password'=>$pw));
			
		}

}