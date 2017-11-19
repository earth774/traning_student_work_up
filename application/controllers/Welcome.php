<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
   function __construct()
	{
           parent::__construct();
             $this->load->helper('authen');
             $this->load->model('authen_model');
             $this->load->model('sql_model');
             
	}
        public function datatable(){
            
            //$this->load->view('datatable');
            $this->template->set('title', 'ทดสอบ');
            $this->template->load('template_admin', 'datatable'); 
        }
   
	public function index($msg=null)
	{
          
            $data['msg'] = $msg;
            $this->load->view('authen_view',$data);
            
            
            
            
           // $this->template->set('title', 'About me');
            //$this->template->load('template_default', 'main');  
	}
     public function loginup()
    {
                $this->form_validation->set_rules('loginUsername', 'loginUsername','required');
                $this->form_validation->set_rules('loginPassword','loginPassword','required');
                
                if ($this->form_validation->run() == true){
                

                 $username = $this->input->post('loginUsername');
                  $password = $this->input->post('loginPassword');
//                   if(checkup_login($username,$password)){
                       $result = $this->authen_model->validate($username);
                        if(!$result){
                                // If user did not validate, then show them login page again
                                $msg = '<div class="alert alert-danger" role="alert">Invalid username and/or password.</div><br />';
                                $this->index($msg);
                        }else{
                                redirect(base_url().'index.php/admin/personel');
                        }
//                   }else{
//                       
//                        $msg = '<div class="alert alert-danger" role="alert">Invalid Account UP.</div><br />';
//                        $this->index($msg);
//                   }
             }
    }
        
    public function logout(){
        $this->session->set_userdata('logged_in', FALSE);
        $this->load->driver('cache'); # add
        $this->session->sess_destroy(); # Change
        $this->cache->clean();  # add
        redirect('Welcome');
    }
}
