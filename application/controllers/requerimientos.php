<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requerimientos extends CI_Controller {
    
    function nuevo($idproyecto){
        $this->load->model("oservicio_model");
        $data = array("idproyecto" => $idproyecto);
        array_merge($data, $this->oserivicio_model->get_proyecto_by_id($idproyecto));
        $this->load->view("requerimientos/nuevo", $data);
    }
}