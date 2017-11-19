<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function checkup_login($uname,$upass)
	{
			if($upass){  
			$server = "dcup-01.up.local"; //dc1-nu
			$user = $uname."@up.local";
			
			// connect to active directory
				$ad = ldap_connect($server);
				
				if(!$ad){
					die("Connect not connect to ".$server);					
					$return['msg'] = "ไม่สามารถติดต่อ server มหาลัยเพื่อตรวจสอบรหัสผ่านได้";
						
				} else { 
					$b = @ldap_bind($ad,$user,$upass);
					if(!$b){					
						//$return['msg'] = "ไม่สามารถเข้าสู่ระบบได้ กรุณาตรวจสอบอีกครั้ง !!" ;		
						$return = FALSE;
						//$return['records'] = "";				
					} else { 
						//$return['msg'] = "";
						$return = TRUE;
						//$return['records'] = $query->row_array();
					} 
				}
			} else { 
						//$return['msg'] = "ไม่สามารถเข้าสู่ระบบได้ กรุณารหัสผ่านอีกครั้ง !!" ;		
						$return= FALSE;
						//$return['records'] = "";	
			} 	
		return $return;
        }
function logged_in()
{
$CI =& get_instance();
$logged_in = $CI->session->userdata('logged_in');
   if($logged_in != true)
   {
    echo 'You don\'t have permission to access this page. <a href="../Welcome">Login</a>';    
    die();      
   }      
}
function logged_admin()
{
$CI =& get_instance();
$logged_in = $CI->session->userdata('logged_admin');
   if($logged_in != true)
   {
    echo 'You don\'t have permission to access this page. <a href="../Welcome">Login</a>';    
    die();      
   }      
}
