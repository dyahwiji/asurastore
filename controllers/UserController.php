<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->load->model('MyModels');
		$this->load->library('upload');
	}

	function index() {
        $data = $this->MyModels->getData();
		$this->load->view('Home',array('data'=>$data));
    }

    function gambar() {
        $this->load->view('gambar');
    }

	function topseller() {
		$data = $this->MyModels->gettop("where stok_steam = '0'");
		$this->load->view('Home', array('data' => $data));
	}
    function steamIDR() {
		$data = $this->MyModels->getidr("where kategori_steam = 'IDR'");
		$this->load->view('steamIDR', array('data' => $data));
	}
    function steamsea() {
		$data = $this->MyModels->getsea("where kategori_steam = 'SEA'");
		$this->load->view('steamSea', array('data' => $data));
	}
     function googleplay() {
		$data = $this->MyModels->getgoogle("where kategori_steam = 'GOOGLE'");
		$this->load->view('googleplay', array('data' => $data));
	}
     function itunes() {
		$data = $this->MyModels->getitunes("where kategori_steam = 'ITUNES'");
		$this->load->view('itunes', array('data' => $data));
	}
    function userloginpage() {
		$this->load->view('userlogin');
	}

//    function Home() {
//        $data = $this->MyModels->getData();
//		$this->load->view('Home',array('data'=>$data));
//    }
    function registeruser() {
		$data = array(
				'SteamLink' => $this->input->post('SteamLink'),
				'SteamTrade' => $this->input->post('SteamTrade'),
				'FirstName' => $this->input->post('FirstName'),
				'LastName' => $this->input->post('LastName'),
				'Username' => $this->input->post('Username'),
				'Email' => $this->input->post('Email'),
                'Telephone' => $this->input->post('Telephone'),
                'Address' => $this->input->post('Address'),
                'City' => $this->input->post('City'),
                'Password' => $this->input->post('Password'),
			);
		$this->MyModels->addRegister($data);
		$this->maulogin();
	}
    function mauregis() {
		$this->load->view('register');
	}
   
     function maulogin() {
        $this->load->library('image_lib');
        $this->load->helper(array('captcha'));
        $vals = array(
                'img_path'      => './captcha/',
                'img_url'       => base_url().'captcha',
                'img_width'     => '150',
                'img_height'    => '30'
        );
        $cap = create_captcha($vals);
        $isi = array(
                'captcha_time'  => $cap['time'],
                'ip_address'    => $this->input->ip_address(),
                'word'          => $cap['word']
        );

        $query = $this->db->insert_string('captcha', $isi);
        $this->db->query($query);
		$this->load->view('login',$cap);
	}

    function bikinCaptcha(){
        //aktifkan session
        session_start();
         
        header("Content-type: image/png");
         
        // beri nama session dengan nama Captcha
        $_SESSION["Captcha"]="";
         
        //tentukan ukuran gambar
        $gbr = imagecreate(200, 50);
         
        //warna background gambar
        imagecolorallocate($gbr, 167, 218, 239);
         
        $grey = imagecolorallocate($gbr, 128, 128, 128);
         
        $black = imagecolorallocate($gbr, 0, 0,0);
         
        // tentukan font
        $font = "C:/xampp/htdocs/Asura/assets/fonts/arial.ttf"; 
         
        // membuat nomor acak dan ditampilkan pada gambar
        for($i=0;$i<=5;$i++) {
            // jumlah karakter
            $nomor=rand(0, 9);
         
            $_SESSION["Captcha"].=$nomor;
         
            $sudut= rand(-25, 25);
         
            imagettftext($gbr, 20, $sudut, 8+15*$i, 25, $black, $font, $nomor);
         
            // efek shadow
            imagettftext ($gbr, 20, $sudut, 9+15*$i, 26, $grey, $font, $nomor);
        }
        //untuk membuat gambar 
        imagepng($gbr); 
        imagedestroy($gbr);
    }
        
    	function oke(){
		$Username = $this->input->post('Username');
		$Password = $this->input->post('Password');
		$where = array(
			'Username' => $Username,
			'Password' => $Password
			);
		$cek = $this->MyModels->cek_login('register', $where)->num_rows();
		if($cek > 0){
            // First, delete old captchas
            $expiration = time() - 7200; // Two hour limit
            $this->db->where('captcha_time < ', $expiration)
                    ->delete('captcha');

            // Then see if a captcha exists:
            $sql = 'SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?';
            $binds = array($this->input->post('nilaiCaptcha'), $this->input->ip_address(), $expiration);
            $query = $this->db->query($sql, $binds);
            $row = $query->row();

            if ($row->count == 0)
            {
                    redirect(base_url("UserController/maulogin"));
            }


			$data_session = array(
				'Username' => $Username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("UserLoginController"));

		}else{
			redirect(base_url("UserController/maulogin"));
		}
	}
          private function _get_chaptca($param) // method pembuat chapta
       {
        $alphabet   = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $num        = range(0, 35);
        $result     = '';
         shuffle($num);
         for ($x = 0; $x < $param; $x++)
          {
            $result .= substr($alphabet, $num[$x], 1);
          }
          return $result;
      }
 
     public function getlogin(){
         $data['chaptca'] = $this->get_chaptca(4).' '.$this->get_chaptca(3).' '.$this->get_chaptca(2);
         $this->display('form_login',$data);  
     }
    
    public function cek_login(){
      if (strtolower($this->input->post('txt_chaptca_real')) == strtolower($this->input->post('txt_chaptca')))
        {
            $Username       = $this->input->post('Username', TRUE);
            $Password          = $this->input->post('Password', TRUE);
            $query = $this->db->select('*')
                     ->from($this->table_account)
                     ->where('Username',$Username)
                     ->where('Password',$Password)->get();
            foreach ($query->result() as $row)
             {
                $Username  = $row->Username;
                $Password     = $row->Passwordl;  
             }
                if($query->num_rows() > 0)
                {
                    $Username= array('Username' => $Username,'Username'=> $Username);
                    $this->session->set_userdata($Username);
                   // $this->session->set_flashdata('info', 'Login Sukses ');
                    redirect(site_url('Home'));
                }else{
                   $message = "email dan username belum terdaftar atau anda belum memverifikasi email kami";
                   $this->session->set_flashdata('info',$message);
                   redirect('login');
                }
        }
        else{
            $this->session->set_flashdata('info','Kami Menduga Kamu bukan Manusia !!!');
            redirect(site_url('login'));
        }
   }
}
