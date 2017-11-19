<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sql_model extends CI_Model {
	

	// add
	function insert($tbl_name,$dataset)
	{
            $this->db->trans_start();
                $this->db->insert($tbl_name, $dataset);
            $this->db->trans_complete();
            if($this->db->affected_rows() >=0){
              //return $this->db->insert_id();
                 return true;
            }else{
                return false; // your code. 
            }
		
	}
	// update
	function update($tbl_name,$field,$id,$dataset)
	{
            $this->db->trans_start();
		$this->db->where($field,$id);
		$this->db->update($tbl_name,$dataset);
            $this->db->trans_complete();
            if($this->db->affected_rows() >=0){
              return true; // your code
            }else{
              return false; // your code. 
            }
                
	}

	// delete
	function delete($tbl_name,$field,$id)
	{
		$this->db->where($field,$id);
		$this->db->delete($tbl_name);
                if($this->db->affected_rows() >=0){
              return true; // your code
            }else{
              return false; // your code. 
            }
	}
       function select($sql)
	{
		$query = $this->db->query($sql);
		if($query->num_rows()>0){
			//return $query->row_array();
                       return $query->result();
		}else{
			return NULL;
		}
	}
        function totalrows($sql)
	{
		$query = $this->db->query($sql);
                return $query->num_rows();
	
	}
        function selecwhere($sql)
        {
            //$query = $this->db->get_where('news', array('id' => $id));
            //return $query->row_array();
            //$rows = array(); //will hold all results
            //$query = $this->db->get($table);
            $query = $this->db->query($sql);
            return $query->row_array();
//            foreach($query->result_array() as $row)
//            {    
//                $rows[] = $row; //add the fetched result to the result array;
//            }
//
//           return $rows; // returning rows, not row
        }
        
}