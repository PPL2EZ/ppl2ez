<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

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
	}

 				     

	public function get(){
		$get = $_GET['id'];
		$result = $this->kelola->edit_barang($get);
		$array = array(
          'nama' => $result[0]->nama_barang,
         
        );

		 //$array[0];
  //echo $array;

       // 
        //echo $data[nama];

        echo json_encode($array);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */