<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    public function __construct()
    {
parent::__construct();
    }
    public function index(){
        $this->load->view('index');
    }

    public function create(){
        $name = $this->input->post('name');
        $massage = $this->input->post('message');
        $age = $this->input->post('age');

        $data = array(
            'name' => $name,
            'message' => $massage,
            'age' => $age,
        );
        $this->load->model('ajax_model');
        $insert = $this->ajax_model->createData($data);
        echo json_encode($insert);
}
}