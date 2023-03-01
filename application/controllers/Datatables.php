<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('datatables_model');
    }
    
    public function index() {
        $this->load->view('datatables_view');
    }
    
    public function datatables() {
        $data = $this->datatables_model->datatables();
        echo json_encode($data);
    }
}

