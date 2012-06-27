<?php

class Oservicio_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
       
    function set($data)
    {
        $this->db->set("fecha_crea", "UTC_TIMESTAMP()", FALSE);
        $this->db->set("fecha_mod", "UTC_TIMESTAMP()", FALSE);
        $this->db->insert('oservicios', $data);
        return true;
    }
    
    function get_oservicios(){
        $this->db->select("*");
        $this->db->select("FORMAT(tiempo_real, 2) tiempo_real", false);
        $query = $this->db->get("oservicios");
        $u = $query->result_array();
        return (count($u) > 0) ? $u : false;
    }
    function get_oservicio_by_id($idos){
        $this->db->select("*");
        $this->db->select("LPAD(idos, 4, '0') os", false);
        $this->db->select("date_format(fecha_crea, '%H:%i %d-%m-%Y') fecha_crea", false);
        $this->db->select("date_format(fecha_mod, '%H:%i %d-%m-%Y') fecha_mod", false);
        $this->db->select("FORMAT(tiempo_real, 2) tiempo_real", false);
        $query = $this->db->get_where("oservicios", array("idos" => $idos));
        $u = $query->row_array();
        return (count($u) > 0) ? $u : false;
    }
    function get_status_by_id($idos){
        $this->db->select("status");
        $query = $this->db->get_where("oservicios", array("idos" => $idos));
        $u = $query->row_array();
        return (count($u) > 0) ? $u["status"] : false;
    }
    
    function get_status_to_text($status){
        $s = array(
            "Propuesta",
            "Aceptado",
            "En desarrollo",
            "En pruebas",
            "Entregado"
        );
        return $s[$status];
    }
    function get_estados(){
        $s = array(
            "Propuesta",
            "Aceptado",
            "En desarrollo",
            "En pruebas",
            "Entregado"
        );
        return $s;
    }
    
    function set_edo_by_idos($idos, $data){
        $this->db->set("fecha_mod", "UTC_TIMESTAMP()", FALSE);
        $this->db->where(array("idos" => $idos));
        $this->db->update("oservicios", $data);
    }
    function set_by_idos($idos, $data){
        $this->db->set("fecha_mod", "UTC_TIMESTAMP()", FALSE);
        $this->db->where(array("idos" => $idos));
        $this->db->update("oservicios", $data);
    }
    
    function is_activo($idos){
        $this->db->where(array("idos" => $idos));
        $this->db->where("tiempo_activo IS NOT NULL");
        $query = $this->db->get("oservicios");
        $u = $query->result_array();
        return (count($u) > 0) ? true : false;
    }
    
    function set_inicio_actividad($idos){
        $this->db->where(array("idos" => $idos));
        $this->db->set("tiempo_activo", "NOW()", FALSE);
        $this->db->update("oservicios");
    }
    
    function set_fin_actividad($idos){
        $this->db->where(array("idos" => $idos));
        $this->db->set("tiempo_real", "tiempo_real + (TIMESTAMPDIFF(MINUTE , tiempo_activo, NOW())/60)", FALSE);
        $this->db->update("oservicios");
        
        $this->db->where(array("idos" => $idos));
        $this->db->set("tiempo_activo", "NULL", FALSE);
        $this->db->update("oservicios");
    }
    
    function get_filtros(){
        $r = array(
            "Proyecto",
            "Estado"
        );
    }
}