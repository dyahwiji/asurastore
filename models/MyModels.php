<?php  

class MyModels extends  CI_Model {

	function getData() {
		$query = $this->db->get('steam');
		return $query->result_array();
	}
	
    function getAdmin($where="") {
		$query = $this->db->query('select * from admin '.$where );
		return $query->result_array();
    }
    
    function getBarang($where=""){
		$res = $this->db->query("SELECT * FROM steam ".$where);
		//$this->db->select('*');
		//$this->db->where('kode_steam' .'='.$where);
		//$res=$this->db->get();
		return $res->result_array();
	}
    function gettop($where="") {
		$query = $this->db->query('select * from steam '.$where);
		return $query->result_array();
	}
    function getidr($where="") {
		$query = $this->db->query('select * from steam '.$where);
		return $query->result_array();
	}
    function getsea($where="") {
		$query = $this->db->query('select * from steam '.$where);
		return $query->result_array();
	}
    function getgoogle($where="") {
		$query = $this->db->query('select * from steam '.$where);
		return $query->result_array();
	}
     function getitunes($where="") {
		$query = $this->db->query('select * from steam '.$where);
		return $query->result_array();
	}
	

	function addData($data) {
		$this->db->insert('steam', $data);
	}

    function addRegister($data) {
		$this->db->insert('register', $data);
	}

    
    function login_authen($tabelName, $where) {
        //kalo di modul pake query builder, ini query biasa
        return $this->db->get_where($tabelName,$where);
    }


    function wrong_password($adminname, $value){
        $this->db->set('authentication', $value);
        $this->db->where("admin_name", $adminname);
        $this->db->update('admin');

	    }

    function hapus_data($tabelName,$where) {
        $res  = $this->db->delete($tabelName,$where);
        return $res;
    }
     function hapus_admin($tabelName,$where) {
        $res  = $this->db->delete($tabelName,$where);
        return $res;
    }
    
    public function UpdateX($data,$where){
        $res = $this->db->update('steam',$data,$where);
        return $res;
    }
     public function UpdateA($data,$where){
        $res = $this->db->update('admin',$data,$where);
        return $res;
    }
    
    function addUser($data) {
		$this->db->insert('user', $data);
	}
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
    function authen_user($Username, $Password) {
        $this->db->where('Username', $Username);
        $this->db->where('Password', $Password);
        return $this->db->get('register');
}
       function find($kode_steam) {
        $kode_baru = str_replace('dollar_sign','$',$kode_steam);
        $query = $this->db->get_where('steam', array('kode_steam'=>$kode_baru)); 
        return $query->row();
    }
}

?>