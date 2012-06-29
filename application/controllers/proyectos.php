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
    
}