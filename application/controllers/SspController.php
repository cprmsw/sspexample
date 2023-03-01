<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SspController extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Sspclass');
    }

    public function index() {
        $this->load->view('ssp');
    }

    public function data() {
        $table = 'datatables_demo';
        $primaryKey = 'id';
        $columns = array(
            array( 'db' => 'id', 'dt' => 'id' ),
            array( 'db' => 'first_name', 'dt' => 'first_name' ),
            array( 'db' => 'last_name', 'dt' => 'last_name' ),
            array( 'db' => 'position', 'dt' => 'position' ),
            array(
                'db' => 'office',
                'dt' => 'office',
                'formatter' => function( $d, $row ) {
                    return $d.' ('.$row['extn'].')';
                }
            ),
            array(
                'db' => 'start_date',
                'dt' => 'start_date',
                'formatter' => function( $d, $row ) {
                    return date( 'jS M y', strtotime($d));
                }
            ),
            array(
                'db' => 'salary',
                'dt' => 'salary',
                'formatter' => function( $d, $row ) {
                    return '$'.number_format($d);
                }
            )
        );

        echo json_encode(
            SSP::simple( $_GET, $table, $primaryKey, $columns )
        );
    }
}
