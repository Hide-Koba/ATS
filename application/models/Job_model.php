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
		$this->db->from('Job_post');
		$query=$this->db->get();
		$data = array();
		$tmp = array();
		foreach ($query->result() as $each){
			$tmp['id'] = $each->id;
			$tmp['Post_Title'] = $each->Post_Title;
			$tmp['short_description']=$each->short_description;
			$tmp['place_of_work'] = $each->place_of_work;
			$tmp['wage_per_month'] = $each->wage_per_month;
			array_push($data,$tmp);
		}
		
        return $data;
	}

	public function get_detail($id=null){
		if ($id===null){
			return array();
		}

		$retvar = array();
		$this->db->select('*');
		$this->db->from('Job_post');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$retvar['id'] = $query->row()->id;
		$retvar['Post_Title'] = $query->row()->Post_Title;
		$retvar['Post_Description'] = $query->row()->Post_Description;
		$retvar['status'] = $query->row()->status;
		$retvar['Job_Pos'] = $query->row()->Job_Pos;
		$retvar['wage_per_month'] = $query->row()->wage_per_month;
		$retvar['place_of_work'] = $query->row()->place_of_work;
		$retvar['company_name'] = $query->row()->company_name;
		$retvar['dead_line'] = $query->row()->dead_line;
		$retvar['counter_person'] = $query->row()->counter_person_name;
		$retvar['email'] = $query->row()->email;
		$retvar['phone'] = $query->row()->phone;

		return $retvar;
	}

	public function add($data){
		$result = $this->db->insert('Job_post', $data);
		return $result;
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