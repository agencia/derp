<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends CI_Controller {

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
            $this->load->model("cliente_model");
            $data["clientes"] = $this->cliente_model->get_clientes();
            $this->load->view('clientes/botones', $data);
	}
        
        function login(){
		$this->load->view($this->session->userdata('cliente').'/login');
        }
        
        function ver($idcliente){
            $this->load->model("cliente_model");
            $data = $this->cliente_model->get_cliente_by_id($idcliente);
            $this->load->view('clientes/ver', $data);
        }
        
        function nuevo(){
            $this->load->view('clientes/nuevo');
        }
        
        function setnuevo(){
            $this->load->model("cliente_model");
            $this->cliente_model->set($this->input->post());
            $this->index();
        }
}
