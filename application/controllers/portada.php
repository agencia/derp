<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portada extends CI_Controller {

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
//            $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
//            if(stripos($ua,'android') !== false) { // && stripos($ua,'mobile') !== false) {
//              $this->session->set_userdata('cliente', 'mobil');
//            }
                $this->load->library('session');
                if($this->session->userdata('idusuario'))
                {
                    $this->load->view('portada');
                }
                else
                {
                    echo"Logueate primero usuario";
                    $this->load->view('login');
                }
	}
        
        function login(){
		$this->load->view($this->session->userdata('cliente').'/login');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
