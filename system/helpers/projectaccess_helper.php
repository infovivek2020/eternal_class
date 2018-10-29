<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!function_exists('isAdminLogin'))    
{
    function isMasterLogin()
    {
        $CI =& get_instance();
        $is_logged_in = $CI->session->userdata('adminid');
       if(!isset($is_logged_in) || $is_logged_in != true)
       {
           redirect(ADMIN_PATH."Admin/admin_login");
       }      
       else{
           return TRUE;
       }
    }

}
        function isstudentLogin()
    {
        $CI =& get_instance();
        $is_logged_in = $CI->session->userdata('student_id');
       if(!isset($is_logged_in) || $is_logged_in != true)
       {
           redirect(USER_PATH."User_controller/login");
       }      
       else{
           return TRUE;
       }
    }