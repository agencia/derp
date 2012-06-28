<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bitacoras extends CI_Controller {
    
    function nuevo($tipo, $id){
        $data = array("tipo" => $tipo, "id" => $id);
        $this->load->view("bitacoras/nueva", $data);
    }
    
    function set($tipo,$id){
        $this->load->model("bitacora_model");
        $this->bitacora_model->set($tipo,$id,$this->input->post("contenido"));
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}