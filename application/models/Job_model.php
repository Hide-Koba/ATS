<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_model extends CI_Model {

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

	public function get_list(){
		$this->db->select('*');
		$this->db->from('job_post');
		$query=$this->db->get();
		$data = array();
		$tmp = array();
		var_dump($query->row());
		
			$tmp['id'] = $query->row()->id;
			$tmp['Post_Title'] = $query->row()->Post_Title;
			$tmp['Post_Description'] = $query->row()->Post_Description;
			array_push($data,$tmp);
		
        return $data;
	}

	public function user_list($username,$password)
	{
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
                $this->db->select('id,first_name,last_name');
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

}