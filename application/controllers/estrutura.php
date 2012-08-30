<?php

class Estrutura extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $data['title'] = 'Estruturas'; // Capitalize the first letter

        $this->breadcrumb->append_crumb('Home', '/');
        $this->breadcrumb->append_crumb('Estrutura', '/estrutura');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sliders', $data);
        $this->load->view('pages/estrutura', $data);
        $this->load->view('templates/footer', $data);
    }
}

?>
