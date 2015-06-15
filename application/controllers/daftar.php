<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class daftar extends CI_Controller {


		public function __construct()
 	{
   		parent::__construct();


		if($this->session->userdata('client'))
		{
			redirect('client');
		}
		

      // Load form helper library
    	$this->load->helper('form');

    // Load form validation library
   		 $this->load->library('form_validation');

    // Load session library
    //$this->load->library('session');

    // Load database
    $this->load->model('login_auth','kelola');
 	
 	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$data=array('title'=>'Daftar Akun',
 					'isi' =>'konten/client_daftar.php'
 					);
		$data['login']=true;
        $data['testi1']=$this->kelola->get_testimoni_sidebar();
        $data['barang']=$this->kelola->get_barang();
        $data['kategori']=$this->kelola->get_kategori();

		$data['testi1']=$this->kelola->get_testimoni_sidebar();
		$data['kategori']=$this->kelola->get_kategori();
 		$this->load->view('layout/client_wrapper', $data); 
 				
	}

	public function daftar(){
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */