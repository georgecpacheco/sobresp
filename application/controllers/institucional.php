<?php

class Institucional extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $data['title'] = 'Institucional'; // Capitalize the first letter

        $this->breadcrumb->append_crumb('Home', '/');
        $this->breadcrumb->append_crumb('Institucional', '/institucional');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sliders', $data);
        $this->load->view('pages/institucional', $data);
        $this->load->view('templates/footer', $data);
    }
}

?>
