<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class personel extends CI_Controller {
   function __construct()
	{
           parent::__construct();
             $this->load->helper('authen');
            $this->load->model('sql_model');
              //logged_in();  
	}
        public function test(){
            
            $this->template->set('title', 'ทดสอบ');
            $this->template->load('template_admin', 'admin/xx'); 
        }

                public function index()
	{
            $this->template->set('title', 'personel');
            $this->template->load('template_admin', 'admin/personel_view');  
	}
        public function frm_add(){
            $this->template->set('title', 'personel');
            $this->template->load('template_admin', 'admin/personel_add_view'); 
        }
         public function frm_edit($id){
              if (!empty($id)){
                    $this->template->set('title', 'personel');
                    $data['id']=$id;
                    $this->template->load('template_admin', 'admin/personel_edit_view',$data); 
              }
            
        }
        public function save()
	{     
             if($this->input->post()){
                $data = array(
                    'personel_fname_th' => $this->input->post('personel_fname_th'),
                    'personel_lname_th' => $this->input->post('personel_lname_th'),
                );

              echo $this->input->post('mejor_id');;
                /*$insert = $this->sql_model->insert("personel_info",$data); 
                    if($insert){
                     $data['url']="index.php/admin/personel/frm_add";
                     $data['txt']="บันทึกข้อมูลเรียบร้อยแล้ว";
                     $data['topic']="กลับสู่หน้าระบบ";
                     $this->template->load('template_admin', 'savefrm',$data);
                }else{
                    show_404();
                }*/
             }
        }
          public function update()
	{     
             if($this->input->post('id')){
                $data = array(
                    'personel_fname_th' => $this->input->post('personel_fname_th'),
                    'personel_lname_th' => $this->input->post('personel_lname_th'),
                    'personel_fname_en' => $this->input->post('personel_fname_en'),

                );
//                $where = array(
//                    'book_id' =>$id
//                );

                echo $this->input->post('mejor_id');
              /* $personel = $this->sql_model->update("personel_info",'personel_id',$this->input->post('id'),$data); 
                    if($personel){
                    $data['url']="index.php/admin/personel";
                     $data['txt']="แก้ไขข้อมูลเรียบร้อยแล้ว";
                     $data['topic']="กลับสู่หน้าระบบ";
                     $this->template->load('template_admin', 'savefrm',$data);
                }else{
                    show_404();
                }*/
          
             }
        }
    public function delete($id)
    {
         if (empty($id))
            {
                show_404();
            }else{
                $delbooks = $this->sql_model->delete("personel_info",'personel_id',$id); 
                redirect(base_url() . 'index.php/admin/personel');
            }
    }
    public function part()  
   {  
      //set selected country id from POST  
      echo $part_id = $this->input->post('id',TRUE);  
      //run the query for the cities we specified earlier  
      $Data['part']=$this->sql_model->select("SELECT * FROM mejor where part_id=".$part_id);  
      $output = null;  
      foreach ($Data['part'] as $row)  
      {  
         //here we build a dropdown item line for each  
         //query result  
         $output .= "<option value='".$row->mejor_id."'>".$row->major_name."</option>";  
      }  
      echo $output;  
   }   
}