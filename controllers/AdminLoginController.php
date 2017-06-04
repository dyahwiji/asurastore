<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLoginController extends CI_Controller {    
      public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('MyModels');
      }
	function index() {
		$this->load->view('loginadmin'); 
    
	}

	function adminlogin(){
	$admin_name = $this->input->post('admin_name');
	$pass_admin = $this->input->post('pass_admin');
	$where = array(
			'admin_name' => $admin_name,
			'pass_admin' =>$pass_admin
		);
	$isLogin = $this->MyModels->login_authen('admin', $where)->num_rows();
	var_dump($isLogin);
	if($isLogin > 0) {
			$data_session = array(
				'admin_name' =>$admin_name,
				'status' =>"login"
				);
		$this->session->set_userdata($data_session);
		redirect(base_url('AdminController'));
		} else {
			$this->index();
    }
    }
}