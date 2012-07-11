<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modulos extends CI_Controller {

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
            $this->load->model("modulo_model");
            $data["modulos"] = $this->modulo_model->get_modulos();
            $this->load->view('modulos/lista', $data);
	}
        
        function lista($idproyecto){
            $this->load->model("modulo_model");
            $data["modulos"] = $this->modulo_model->get_modulo_by_idproyecto($idproyecto);
            $this->load->view("modulos/lista", $data);
        }
        
        function nuevo(){
            $this->load->view('modulos/nuevo');
        }
        
        function setnuevo(){
            $this->load->model("modulo_model");
//            var_dump($_POST);
            $this->modulo_model->set($this->input->post());
            $this->index();
        }
        
        function ver($idproyecto){
            $this->load->model("modulo_model");
            $data = $this->modulo_model->get_modulo_by_idproyecto($idproyecto);
            $this->load->view('modulos/ver', $data);
        }
}
