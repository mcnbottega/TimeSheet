<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class MY_Controller extends MX_Controller {
        
    public function __construct() {
        parent::__construct();
               
        $ci =& get_instance();

        if (!isset($ci->session->userdata['sessaoTimeSheet'])) {
            redirect(base_url());
        }
    }
    
}