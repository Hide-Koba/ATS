<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume_parse_model extends CI_Model {
    private $api_key;
    private $user_id;
    function __construct(){
        parent::__construct();
        $this->user_id = "13908219";
        $this->api_key = "RPTBMXmLRe/PpNKX2MTdvBwXmokGSOhhmGdQGEwQ";
        $this->load->database();
    }
    
    public function drive_parser($candidate_id,$file_name){
        $parse_result = $this->parse_resume($file_name);
        $xmlStructure = $parse_result['Value']['ParsedDocument'];
        $rawData = json_decode($xmlStructure,true);

        $emp_history = $this->parse_emp_history($rawData);
        $edu_history = $this->parse_edu_history($rawData);

        $this->save_emp_history($candidate_id,$emp_history);
        $this->save_edu_history($candidate_id,$edu_history);
    }

    public function save_edu_history($id,$edu_history){
        $edu_history = $this->merge_id($id,$edu_history);
        foreach ($edu_history as $each){
            $this->db->insert('Edu_history',$each);
        }
        
		return true;
    }
    public function save_emp_history($id,$emp_history){
        $emp_history = $this->merge_id($id,$emp_history);
        foreach($emp_history as $each){
            $this->db->insert('Emp_history',$each);
        }
        return true;
    }

    public function merge_id($id,$data){
        for ($i=0;$i<count($data);$i++){
            $data[$i]['user_id'] = $id;
        }
        return $data;
    }

    public function parse_edu_history($rawData){
        $eduhistory = $rawData['Resume']['StructuredXMLResume']['EducationHistory'];
        $edu_datas = array();
        $tmp = array();
        foreach($eduhistory['SchoolOrInstitution'] as $each){
            //echo '<pre>';
            //var_dump($each);
            //echo '</pre>';
            $tmp = array();
            $tmp['school_type'] = $each['@schoolType'];
            $tmp['name'] = $each['School'][0]['SchoolName'];
            $tmp['country'] = $each['PostalAddress']['CountryCode'];
            $tmp['city'] = $each['PostalAddress']['Municipality'];
            $tmp['degree'] = $each['Degree'][0]['@degreeType'];
            $tmp['title'] = $each['Degree'][0]['DegreeName'];
            if (isset($each['Degree'][0]['DegreeDate']['YearMonth'])){
                $tmp['DegreeDate'] = $each['Degree'][0]['DegreeDate']['YearMonth'];
            }elseif (isset($each['Degree'][0]['EndDate']['StringDate'])){
                $tmp['DegreeDate'] = $each['Degree'][0]['EndDate']['StringDate'];
            }else{
                $tmp['DegreeDate'] = "";
            }

            foreach($tmp as $key=>$var){
                if ($var===null){
                    $tmp[$key] = "";
                }
            }
            
            array_push($edu_datas,$tmp);
        }

        return $edu_datas;
    }

    public function parse_emp_history($rawData){
        $EmploymentHistory = $rawData['Resume']['StructuredXMLResume']['EmploymentHistory'];
        $emp_datas = array();
        $tmp = array();
        foreach($EmploymentHistory['EmployerOrg'] as $each){
            $tmp = array();
            $tmp['org_name'] = $each['EmployerOrgName'];
            if (isset($each['PositionHistory'][0]['StartDate']['YearMonth'])){
                $tmp['start_date'] = $each['PositionHistory'][0]['StartDate']['YearMonth'];
            }else{
                $tmp['start_date'] = $each['PositionHistory'][0]['StartDate']['StringDate'];
            }
            if (isset($each['PositionHistory'][0]['EndDate']['YearMonth'])){
                $tmp['end_date'] = $each['PositionHistory'][0]['EndDate']['YearMonth'];
            }else{
                $tmp['end_date'] = $each['PositionHistory'][0]['EndDate']['StringDate'];
            }
            $tmp['title'] = $each['PositionHistory'][0]['UserArea']['sov:PositionHistoryUserArea']['sov:NormalizedTitle'];


            foreach($tmp as $key=>$var){
                if ($var===null){
                    $tmp[$key] = "";
                }
            }

            array_push($emp_datas,$tmp);
        }

        return $emp_datas;
    }

    public function parse_resume($file){
        $base_path = FCPATH."uploads/";
        $path = $base_path.$file;
        $handle = fopen($path, "r");
        $contents = fread($handle, filesize($path));

        //encode to base64
        $base64str = base64_encode($contents);
        //$data = ["DocumentAsBase64String" => $base64str];
        $data = array('DocumentAsBase64String'=>$base64str);
        $url = "https://rest.resumeparsing.com/v9/parser/resume";
        //setup curl to make the REST call, you can use an external library
        //such as Guzzle if you prefer: http://guzzle.readthedocs.io
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
                
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                
        $headers = array(
            "accept: application/json",
            "content-type: application/json",
            "sovren-accountid: ".$this->user_id,
            "sovren-servicekey: ".$this->api_key
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                
        $result = json_decode(curl_exec($curl),true);
        curl_close($curl);

        //echo $result;//this is a string, you can now use json_decode if you like

        return $result;
    }
}