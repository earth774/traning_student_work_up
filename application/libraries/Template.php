<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
    var $template_data = array();

    function set($name, $value)
    {
            $this->template_data[$name] = $value;
    }

    function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
    {               
            $this->CI =& get_instance();
            $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));	

           // $this->set('nav_list', array('Home', 'Photos', 'About', 'Contact'));//Add non

            return $this->CI->load->view($template, $this->template_data, $return);
    }

    //Template 2

    function load_main($view = '', $view_data = array(), $return = FALSE)
    {
            $this->set('nav_list', array('Home', 'Photos', 'About', 'Contact'));
            $this->load('template_admin', $view, $view_data, $return);
    }
}
