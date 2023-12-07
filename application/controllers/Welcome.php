<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('SmartyLibrary', 'smarty');
	}
	
	public function index(){
       
        $this->smarty->assign('message', "This is Smarty test!");
        $this->smarty->display('welcome.tpl');
    }
}
