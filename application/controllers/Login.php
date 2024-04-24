<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper('form');
        }

        public function index()
        {
            $data=array();

            $data['contents'] = 'list-customer';
            $data['title'] = 'E-ndrana';
            $data['description'] = 'Simulation de pret';
            $data['keywords'] = 'Pret, Simulation';
            $this->load->view('login', $data);
        }		

        public function inscription()
        {
            $this->load->view('inscription');

            $data=array();

            $data['contents'] = 'list-customer';
            $data['title'] = 'E-ndrana';
            $data['description'] = 'Simulation de pret';
            $data['keywords'] = 'Pret, Simulation';
            $this->load->view('inscription', $data);
        }		

        
    }

?>