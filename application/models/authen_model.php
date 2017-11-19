<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class authen_model extends CI_Model {
        public function validate($username){
		$this->db->where('personel_username', $username);
		$query = $this->db->get('personel_info');
		// Let's check if there are any results
		if($query->num_rows() == 1)
		{
			$row = $query->row();
			$data = array(
					'personelid' => $row->personel_id,
					'fname' => $row->personel_fname_th,
					'lname' => $row->personel_lname_th,
					'username' => $row->personel_username,
                    'gender' => $row->personel_gender,
                                        //'logged_in' => TRUE
					);
                       $this->session->set_userdata('logged_in',$data);
		return true;

		}
		return false;
	}
        
        public function validateadmin($username){
		$this->db->where('personel_username', $username);
		$query = $this->db->get('personel_info');
		// Let's check if there are any results
		if($query->num_rows() == 1)
		{
			$row = $query->row();
			$data = array(
					'personelid' => $row->personel_id,
					'fname' => $row->personel_fname_th,
					'lname' => $row->personel_lname_th,
					'username' => $row->personel_username,
                    'gender' => $row->personel_gender,
                                        //'logged_in' => TRUE
					);
                       $this->session->set_userdata('logged_admin',$data);
		return true;

		}
		return false;
	}
}
?>