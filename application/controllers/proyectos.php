<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyectos extends CI_Controller {
    
    public function index(){
        $this->load->model("proyecto_model");
        $data["proyectos"] = $this->proyecto_model->get_proyectos();
        $this->load->view("proyectos/lista", $data);
    }
    
        function lista_opt(){
            $this->load->view("proyectos/lista_opt");
        }
        
        function nuevo(){
        $this->load->model("cliente_model");
        $data["clientes"] = $this->cliente_model->get_clientes();
            $this->load->view("proyectos/nuevo", $data);
        }
        
        function setnuevo(){
            $this->load->model("proyecto_model");
//            var_dump($_POST);
            $this->proyecto_model->set($this->input->post());
            $this->index();
        }
        
        function ver($idproyecto){
            $this->load->model("proyecto_model");
//            $this->load->model("oservicio_model");
            $data = $this->proyecto_model->get_proyecto_by_id($idproyecto);
//            $data["oservicios"] = $this->oservicio_model->get_oservicios_by_idproyecto($idproyectos);
            $data["status"] = $this->proyecto_model->get_status_to_text($data["status"]);
            $this->load->view('proyectos/ver', $data);
        }
    
}