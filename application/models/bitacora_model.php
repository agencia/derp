<?php

class Bitacora_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
    function set_usuario($data)
    {
        $this->db->set("fec_registro", "NOW()", FALSE);
        $this->db->insert('usuarios', $data);
        return true;
    }
    
    function get_bitaoras_by_id_tipo($id, $tipo)
    {
        $this->db->select("*");
        $this->db->select("date_format(fecha, '%H:%i %d-%m-%Y') fecha", false);
        $query = $this->db->get_where("bitacoras", array('idtipo' => $id, "tipo" => $tipo));
        $u = $query->result_array();
        return (count($u)>0) ? $u : 0;
    }
    
    function set($tipo, $id, $data){
        $this->db->set(array("tipo"=>$tipo,"idtipo"=>$id,"contenido"=>$data));
        $this->db->set("fecha", "NOW()", false);
        $this->db->insert("bitacoras");
    }
}