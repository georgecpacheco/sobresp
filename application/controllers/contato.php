<?php

class Contato extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $data['title'] = 'Contato'; // Capitalize the first letter
   
        $this->breadcrumb->append_crumb('Home', '/');
        $this->breadcrumb->append_crumb('Contato', '/contato');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sliders', $data);
        $this->load->view('contato/contato', $data);
        $this->load->view('templates/footer', $data);
    }
}

?>
