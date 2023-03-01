<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->library('ssp');
    }
        
    public function datatables() {
        $table = 'staff';
        $columns = array(
            array('db' => 'staff_nik', 'dt' => 0),
            array('db' => 'staff_nama', 'dt' => 1)
        );
        $data = $this->ssp->simple($this->db, $_GET, $table, $primaryKey, $columns);
        return json_encode($data);
    }
}
