<?php

class Proyecto_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    function get_proyectos(){
        $query = $this->db->query("SELECT * FROM proyectos p, clientes c WHERE p.idcliente = c.idcliente");
        $u = $query->result_array();
        return (count($u) > 0) ? $u : false;
    }
    
    function set($data)
    {
        $this->db->set("fecha_crea", "UTC_TIMESTAMP()", FALSE);
        $this->db->insert('proyectos', $data);
        return true;
    }
    
    function get_proyecto_by_id($idproyecto){
        $this->db->select("proyectos.*");
        $this->db->select("date_format(proyectos.fecha_crea, '%d-%m-%Y') fecha_crea", false);
        $this->db->select("clientes.razon");
        $this->db->join('clientes', 'clientes.idcliente = proyectos.idcliente');
        $query = $this->db->get_where("proyectos", array("idproyecto" => $idproyecto));
        $u = $query->row_array();
        return (count($u) > 0) ? $u : false;
    }
    
    function get_status(){
        return array(
            0 => "Sin aprobar",
            1 => "Aprobado"
        );
    }
    
    function get_status_to_text($index){
        $r = $this->get_status();
        return $r[$index];
    }
    
}