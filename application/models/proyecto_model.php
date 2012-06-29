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
        $this->db->insert('proyectos', $data);
        return true;
    }
    
}