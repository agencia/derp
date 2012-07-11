<?php
class Requerimiento_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
       
    function set($data)
    {
        $this->db->insert('requerimientos', $data);
        return true;
    }
    
    function lista_opt(){
            $this->load->view("requerimientos/lista_opt");
        }
    
    function get_requerimientos(){
        $this->db->select("*");
        $query = $this->db->get("requerimientos");
        $u = $query->result_array();
        return (count($u) > 0) ? $u : false;
    }
    function get_modulo_by_id($idrequerimiento){
        $this->db->select("*");
        $query = $this->db->get_where("requerimientos", array("idrequerimiento" => $idrequerimiento));
        $u = $query->row_array();
        return (count($u) > 0) ? $u : false;
    }
}

?>