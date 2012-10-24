<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
require_once(APPPATH.'libraries/Smarty-3.1.12/libs/Smarty.class.php');
 
class CI_Smarty extends Smarty {
 
    function __construct()
    {
        //date_default_timezone_set('America/Phoenix');
        date_default_timezone_set('Asia/Manila');
 
        parent::__construct();
        $this->setTemplateDir(APPPATH.'views/templates');
        $this->setCompileDir(APPPATH.'views/compiled');
        $this->setConfigDir(APPPATH.'libraries/Smarty-3.1.12/configs');
        $this->setCacheDir(APPPATH.'libraries/Smarty-3.1.12/cache');
 
        $this->assign( 'APPPATH', APPPATH );
        $this->assign( 'BASEPATH', BASEPATH );
        // $this->caching = Smarty::CACHING_LIFETIME_CURRENT; // Does something <img src="http://searchdaily.net/wp-includes/images/smilies/icon_smile.gif" alt="icon smile CodeIgniter 2 Smarty 3 integration" class="wp-smiley" title="CodeIgniter 2 Smarty 3 integration">
        if ( method_exists( $this, 'assignByRef') )
        {
            $ci =& get_instance();
            $this->assignByRef("ci", $ci);
        }
        $this->force_compile = 1;
        $this->caching = true;
        $this->cache_lifetime = 120;
 
        //log_message('debug', "Smarty Class Initialized");
    }
 
    function view($template_name) {
        if (strpos($template_name, '.') === FALSE && strpos($template_name, ':') === FALSE) {
            $template_name .= '.tpl';
        }
        parent::display($template_name);
    }
 
}
 
?>