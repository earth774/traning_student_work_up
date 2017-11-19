<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class training extends CI_Controller {
   function __construct()
	{
           parent::__construct();
             $this->load->helper('authen');
            $this->load->model('sql_model');
              //logged_in();  
	}
        public function index3(){
            
             $this->template->set('title', 'ทดสอบ');
            $this->template->load('template_admin', 'admin/training_view');
        }
}