<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oservicio extends CI_Controller {

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
            $this->load->model("oservicio_model");
            $data["oservicios"] = $this->oservicio_model->get_oservicios();
            $this->load->view('oservicios/lista', $data);
	}
        
        function nuevo(){
            $this->load->model("proyecto_model");
            $data["proyectos"] = $this->proyecto_model->get_proyectos();
            $this->load->view('oservicios/nuevo', $data);
        }
        
        function setnuevo(){
            $this->load->model("oservicio_model");
//            var_dump($_POST);
            $this->oservicio_model->set($this->input->post());
            $this->index();
        }
        
        function ver($idos){
            $this->load->model("oservicio_model");
            $this->load->model("bitacora_model");
            $data = $this->oservicio_model->get_oservicio_by_id($idos);
            $data["estado"] = $this->oservicio_model->get_status_to_text($data["status"]);
            $data["bitacoras"] = $this->bitacora_model->get_bitaoras_by_id_tipo($idos,"os");
            $this->load->view('oservicios/ver', $data);
        }
        
        function mod($idos){
            $this->load->model("proyecto_model");
            $this->load->model("oservicio_model");
            $data = $this->oservicio_model->get_oservicio_by_id($idos);
            $data["proyectos"] = $this->proyecto_model->get_proyectos();
            $data["estado"] = $this->oservicio_model->get_status_to_text($data["status"]);
            $this->load->view('oservicios/mod', $data);
        }
        
        function mod_edo($idos){
            $this->load->model("oservicio_model");
            $data["idos"] = $idos;
            $data["status"] = $this->oservicio_model->get_status_by_id($idos);
            $data["estados"] = $this->oservicio_model->get_estados();
            $this->load->view("oservicios/mod_edo", $data);
        }
        
        function set_mod($idos){
            $this->load->model("oservicio_model");
//            var_dump($_POST);
            $this->oservicio_model->set_by_idos($idos, $this->input->post());
            $this->ver($idos);
        }
        
        function set_mod_edo($idos){
            $this->load->model("oservicio_model");
            $this->oservicio_model->set_edo_by_idos($idos, $this->input->post());
            $this->ver($idos);
        }
        
        function opt($idos){
            $this->load->view("oservicios/opt", array("idos" => $idos));
        }
        
        function lista_opt(){
            $this->load->view("oservicios/lista_opt");
        }
        
        function registrar_actividad($idos){
            $this->load->model("oservicio_model");
            $is_activo = $this->oservicio_model->is_activo($idos);
            if($is_activo)
                $this->oservicio_model->set_fin_actividad($idos);
            else
                $this->oservicio_model->set_inicio_actividad($idos);
            $this->ver($idos);
        }
}