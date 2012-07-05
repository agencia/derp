<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requerimientos extends CI_Controller {

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
            $this->load->model("requerimiento_model");
            $data["requerimientos"] = $this->requerimiento_model->get_requerimientos();
            $this->load->view('requerimientos/lista', $data);
	}
        
        function nuevo($Idmodulo){
            $this->load->view('requerimientos/nuevo', array("Idmodulo" =>$Idmodulo));
        }
        
        function setnuevo(){
            $this->load->model("requerimiento_model");
//            var_dump($_POST);
            $this->requerimiento_model->set($this->input->post());
            $this->index();
        }
        
        function ver($idrequerimiento){
            $this->load->model("requerimiento_model");
            $data = $this->requerimiento_model->get_requerimiento_by_id($idrequerimiento);
            $this->load->view('requerimientos/ver', $data);
        }
}
