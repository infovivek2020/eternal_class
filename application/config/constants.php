<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

$url_details=$_SERVER['HTTP_HOST'];
$url_details.=str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);/*For Getting the project(Hosting Name)*/
$final_url='http://'.$url_details;
 

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/*
|=========================
|	Global code for universal case
|=========================
*/
define('DATE',date('Y-m-d H:i:s'));
define('QUERY_DEBUG',1);
define('QUERY_MESSAGE','query_show');
define('QUERY_DEBUG_MESSAGE','query_debug');
define('CODE','code');
define('MESSAGE','message');
define('DESCRIPTION','description');
define('EMAIL_EXISTS','emailexists');
define('MOBILE_EXISTS','mobileexists');
define('INSERTED_ID','inserted_id');
define('DB_ERROR','dberror');
define('SUCCESS_CODE',200);
define('FAIL_CODE',204);
define('VALIDATION_CODE',301);
define('EXISTS_CODE',422);
define('INTERNAL_SERVER_ERROR_CODE',500);
define('DB_ERROR_CODE',575);
define('PATHBASE',$final_url);

/*
|=========================
|	Global code Email case
|=========================
*/

define('SITE_DOMAIN','androidsbattery.com');
define('SITE_MODE',0);/*1 : LIVE & 0 : LOCALHOST*/
define('SMTP_FROM_EMAIL',(SITE_MODE==1)?'info@androidsbattery.com':'misra.vivk@gmail.com');
define('SMTP_FROM_NAME',SITE_DOMAIN);
define('BCC_EMAIL','infobivek@gmail.com');
define('SMTP_PORT',(SITE_MODE==1)?25:465);
define('SMTP_USER',(SITE_MODE==1)?'infobivek@gmail.com':'infovivek2020@gmail.com');
define('SMTP_PASSWORD',(SITE_MODE==1)?'15august1947':'15august1947');
define('SMTP_HOST',(SITE_MODE==1)?'mail.androidsbattery.com':'ssl://smtp.gmail.com');
define('SMTP_PROTOCAL',(SITE_MODE==1)?'mail':'smtp');
define('logo_theme','blue');
define('SITE_NAME','ksgrandproject');
define('EMAIL_TEMPLATE_FOLDER','frontend/emailtemplates/');
define('PERPAGE',20);
/*
|=========================
|	Global code vendor as admin case
|=========================
*/

define('ADMIN_ASSETS',$final_url.'assets/backend/');
define('ADMIN_CSS_PATH',ADMIN_ASSETS.'css/');
define('ADMIN_JS_PATH',ADMIN_ASSETS.'js/');
define('ADMIN_IMAGES_PATH',ADMIN_ASSETS.'images/');
define('ADMIN_PATH',$final_url.'ADMIN/');

define('ADMIN_HEADER_PATH','includes/admin_header');
define('ADMIN_FOOTER_PATH','includes/admin_footer');
define('ADMIN_SIDEBAR_PATH','includes/admin_sidebar');
define('ADMIN_CSS_INCLUDE_PATH','includes/admin_css');
define('ADMIN_JS_INCLUDE_PATH','includes/admin_js');
define('ADMIN_LOGO',ADMIN_IMAGES_PATH.'logo.png');
define('COMMON_JS_FILE',ADMIN_JS_PATH.'common.js');

/* for frontend */
define('FRONT_ASSETS',$final_url.'assets/frontend/');
define('FRONT_CSS_PATH',FRONT_ASSETS.'css/');
define('FRONT_JS_PATH',FRONT_ASSETS.'js/');
define('FRONT_IMAGES_PATH',FRONT_ASSETS.'images/');
define('FRONT_PATH',$final_url.'FRONT/');
define('UPLOADS',$final_url.'uploads/');

define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

