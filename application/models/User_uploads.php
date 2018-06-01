<?php
class User_uploads extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function last_saved_id(){
        //
        return $id;
    }
    public function save($data){
        $sql = "
            INSERT INTO `Resume_Candidate`
            (`first_name`, `last_name`, `Address`, `Email`, `Phone_Number`, `Status`, `Job_Pos`,`cv_file_name`) 
            VALUES (
                ".$this->db->escape($data['first_name']).",
                ".$this->db->escape($data['last_name']).",
                ".$this->db->escape($data['Address']).",
                ".$this->db->escape($data['Email']).",
                ".$this->db->escape($data['Phone_Number']).",
                ".$this->db->escape(1).",
                ".$this->db->escape((int)$data['Job_Pos']).",
                ".$this->db->escape($data['cv_file_name']).")";
        $result = $this->db->query($sql);
        $candidate_id = $this->db->insert_id();

        return $candidate_id;
    }

    public function get_jobpositions(){
        $sql = "SELECT * FROM `Job_Position` where `status`=".$this->db->escape(1);
        $result = $this->db->query($sql);
        $tmp = array();
        $data = array();
        foreach ($result->result() as $each){
            $tmp['id'] = $each->id;
            $tmp['job_title'] = $each->position;
            array_push($data,$tmp);
        }

        return $data;
    }
}