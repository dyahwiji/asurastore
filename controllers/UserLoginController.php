<?php  

class UserLoginController extends CI_Controller {
	 public function __construct() 
	{
	  parent::__construct();
			if ($this->session->userdata('Username') != null || $this->session->userdata('Username') != ""){
				
			} else {
				redirect('UserController');
			}
	    $this->load->helper('url');
        $this->load->model('MyModels');
    	$this->load->library('cart');
	}

	function captcha(){
			$this->form_validation->set_rules('name', "Name", 'required');
    		$this->form_validation->set_rules('captcha', "Captcha", 'required'); 
     		/* Get the user's entered captcha value from the form */
    		$userCaptcha = set_value('captcha');
    		/* Get the actual captcha value that we stored in the session (see below) */
    		$word = $this->session->userdata('captchaWord');
    		/* Check if form (and captcha) passed validation*/
    		if ($this->form_validation->run() == TRUE &&
       		strcmp(strtoupper($userCaptcha),strtoupper($word)) == 0)
    		{
      /** Validation was successful; show the Success view **/
      /* Clear the session variable */
      $this->session->unset_userdata('captchaWord');
      /* Get the user's name from the form */
      $name = set_value('name');
      /* Pass in the user input to the success view for display */
      $data = array('name' => $name);
      $this->load->view('Home2', $data);
    }
    else 
    {
      /** Validation was not successful - Generate a captcha **/ 
      /* Setup vals to pass into the create_captcha function */
      $vals = array(
        'img_path' => 'static/',
        'img_url' => base_url().'static/',
        );
      /* Generate the captcha */
      $captcha = create_captcha($vals);
      /* Store the captcha value (or 'word') in a session to retrieve later */
      $this->session->set_userdata('captchaWord', $captcha['word']);
      /* Load the captcha view containing the form (located under the 'views' folder) */
      $this->load->view('captcha-view', $captcha);
    }
	}

    function index() {
        $data = $this->MyModels->getData();
		$this->load->view('Home2',array('data'=>$data));
    }

	function topseller() {
		$data = $this->MyModels->gettop("where stok_steam = '0'");
		$this->load->view('Home2', array('data' => $data));
	}
    function steamIDR() {
		$data = $this->MyModels->getidr("where kategori_steam = 'IDR'");
		$this->load->view('steamIDR2', array('data' => $data));
	}
    function steamsea() {
		$data = $this->MyModels->getsea("where kategori_steam = 'SEA'");
		$this->load->view('steamSea2', array('data' => $data));
	}
     function googleplay() {
		$data = $this->MyModels->getgoogle("where kategori_steam = 'GOOGLE'");
		$this->load->view('googleplay2', array('data' => $data));
	}
     function itunes() {
		$data = $this->MyModels->getitunes("where kategori_steam = 'ITUNES'");
		$this->load->view('itunes2', array('data' => $data));
	}
    function userlogout() {
		$this->session->sess_destroy();
		redirect(base_url('UserController'));
	}
    public function success(){
			$this->load->view('success');

		}
    public function cart(){
			$this->load->view('order');

    }
    function inputOrder() {
        $this->load->view('success');
//        $Username = $this->session->userdata('Username');
//        $Email = $this->input->post('Email');
//        $tanggalorder = $this->input->post('tanggalkirim');
//        $jamorder = $this->input->post('jamorder');
//       
//        $isProcessed = $this->MyModels->process($Username, $Email, $tanggalorder, $jamkorder);
//        if($isProcessed) {
//            $this->cart->destroy();
//            redirect('UserLoginController/success');
//        } else {
//            $this->session->set_flashdata('error', 'Maaf, order Anda tidak dapat diproses');
//        }
  }
    public function order($kode_steam){
      $product = $this->MyModels->find($kode_steam);
			$data = array(
						   'id'      => $kode_steam,
						   'qty'     => 1,
						   'price'   => $product->harga_steam,
						   'name'    => $product->nama_steam
						);
			//$cart = ;
      $this->cart->insert($data);
			//print_r($data);
			redirect('UserLoginController/cart');
		}

    function cancel_order(){
      $this->cart->destroy();
      redirect('UserLoginController/cart');
    }
 
}

?>