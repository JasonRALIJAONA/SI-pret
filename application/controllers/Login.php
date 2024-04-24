<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('utilisateur_model');
            $this->load->helper('form');
        }

        function make_header ($data){
            $data['title'] = 'E-ndrana';
            $data['description'] = 'Simulation de pret';
            $data['keywords'] = 'Pret, Simulation';

            return $data;
        }

        public function index()
        {
            $data=array();
            $data=$this->make_header($data);
           
            $this->load->view('login', $data);
        }
        
        public function log (){
            $ligne=$this->utilisateur_model->connect($this->input->post('email') , $this->input->post('mdp'));

            $data=array();

            $data=$this->make_header($data);

            if ($ligne == null) {
                $this->load->view('login', $data);
                return;
            }

            $data['utilisateur']=$ligne;

            $this->load->view('templates/template', $data);
            return;
        }

        public function sign (){
            $id=$this->utilisateur_model->sign_in($this->input->post('nom'), $this->input->post('email') , $this->input->post('mdp'));
            $utilisateur=$this->utilisateur_model->get_by_id($id);

            $data=array();
            $data=$this->make_header($data);

            $data['utilisateur']=$utilisateur;

            $this->load->view('templates/template', $data);
            return;
        }

        public function inscription()
        {
            $data=array();
            $data=$this->make_header($data);

            $this->load->view('inscription', $data);
        }		

        
    }

?>