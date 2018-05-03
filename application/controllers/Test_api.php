<?php
//Copyright (c) 2018 Hideaki. All rights reserved.
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_api extends CI_Controller {//MY_Controller
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $date = date('Y/m/d H:i:s');
        header("Content-type:application/json");
        $data = array();
        $data['0'] = 'success';
        $data['date'] = $date;
        $data = json_encode($data);
        echo $data;
    }

    public function load_photo(){
        
    }
}