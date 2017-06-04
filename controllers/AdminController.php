<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
    public function __construct() 
	{
	    parent::__construct();
	    $this->load->helper('url');
        $this->load->model('MyModels');
    	if($this->session->userdata('status') != "login"){
    		redirect(base_url("UserLoginController"));
    	}
    	
	}
    
    function index() {
		$this->load->view('dashboard');     
	}
    
	function add() {
		$img = $this->upload->data();
		$gambar_steam = $img['file_name'];
		//$this->createpage();
		$data = array(
				'kode_steam' => $this->input->post('kode_steam'),
				'nama_steam' => $this->input->post('nama_steam'),
				'nominal_steam' => $this->input->post('nominal_steam'),
				'harga_steam' => $this->input->post('harga_steam'),
				'kategori_steam' => $this->input->post('kategori_steam'),
				'stok_steam' => $this->input->post('stok_steam'),
				'gambar_steam' => $gambar_steam
			);

		$this->MyModels->addData($data);
		$this->readData();
	}


	function steampage() {
		$data = $this->MyModels->getData();
		$this->load->view('home', array('data' => $data));
	}
    function checkdata(){
        $data = $this->MyModels->getData();
		$this->load->view('CheckData', array('data' => $data));
    }
    function dataadmin(){
        $data = $this->MyModels->getAdmin();
		$this->load->view('UpdateAdmin', array('data' => $data));
    }
	function readData() {
		$data = $this->MyModels->getData();
		$this->load->view('home', array('data' => $data));
	}
    

	function addpage() {
		$this->load->view('add');
	}

	function delete_data($kode_steam) {
        $where = array('kode_steam' => $kode_steam);
		$this->MyModels->hapus_data('steam',$where);
		$this->checkdata();
	}
    function delete_admin($admin_name) {
        $where = array('admin_name' => $admin_name);
		$this->MyModels->hapus_admin('admin',$where);
		$this->dataadmin();
	}

	function updateData($kode_steam) {
		$steam = $this->MyModels->getBarang("where kode_steam = '$kode_steam'");
//		$this->do_upload('gambar_steam');
		$data = array(
			"kode_steam" => $steam[0]['kode_steam'],
			"nama_steam" => $steam[0]['nama_steam'],
			"nominal_steam" => $steam[0]['nominal_steam'],
			"harga_steam" => $steam[0]['harga_steam'],
			"kategori_steam" => $steam[0]['kategori_steam'],
			"stok_steam" => $steam[0]['stok_steam']

		);
		$this->load->view('formupdate', $data);
	}

	function doUpdate() {
        $kode_steam = $_POST['kode_steam'];
        $nama_steam = $_POST['nama_steam'];
        $nominal_steam = $_POST['nominal_steam'];
        $harga_steam = $_POST['harga_steam'];
        $kategori_steam = $_POST['kategori_steam'];
        $stok_steam = $_POST['stok_steam'];

        $data_insert = array (
            'kode_steam' => $kode_steam,
            'nama_steam' => $nama_steam,
            'nominal_steam' => $nominal_steam ,
            'harga_steam' => $harga_steam,
            'kategori_steam' => $kategori_steam,
            'stok_steam' => $stok_steam
        );
        $where = array('kode_steam' => $kode_steam);
        $res = $this->MyModels->UpdateX($data_insert,$where);
        if($res>=1){
            redirect('AdminController/checkdata');
        }else{
            echo "<h2>Insert data gagal</h2>";
        }
	}
    
    function updateAdmin($admin_name) {
		$admin = $this->MyModels->getAdmin ("where admin_name = '$admin_name'");
		$data = array(
			"admin_name" => $admin[0]['admin_name'],
			"pass_admin" => $admin[0]['pass_admin']
		);
		$this->load->view('FormAdmin', $data);
	}

	function doUpdateAdmin() {
//        $admin_name = $_POST['admin_name'];
        $pass_admin = $_POST['pass_admin'];
        $data_insert = array (
//            'admin_name' => $admin_name,
            'pass_admin' => $pass_admin
        );
        $where = array('admin_name' => $admin_name);
        $res = $this->MyModels->UpdateA($data_insert,$where);
        if($res>=1){
            redirect('AdminController/dataadmin');
        }else{
            echo "<h2>Insert data gagal</h2>";
        }
	}

	function do_upload() {
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 10000;
		$config['max_width'] = 10000;
		$config['max_height'] = 10000;

		$this->load->library('upload', $config);
        $this->upload->initialize($config);

		if ( ! $this->upload->do_upload('gambar_steam')) {
			echo $this->upload->display_errors();
			echo "Gagal mengupload gambar";
		} else {
			$this->add();

		}

    }
	function adminlogout() {
		$this->session->sess_destroy();
		redirect(base_url('AdminLoginController/index'));
	}
}

?>