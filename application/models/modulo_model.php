<?php
class Modulo_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
       
    function set($data)
    {
        $this->db->insert('modulos', $data);
        return true;
    }
    
    function get_modulos(){
        $this->db->select("*");
        $query = $this->db->get("modulos");
        $u = $query->result_array();
        return (count($u) > 0) ? $u : false;
    }
    function get_modulo_by_id($Idmodulo){
        $this->db->select("*");
        $query = $this->db->get_where("modulos", array("Idmodulo" => $Idmodulo));
        $u = $query->row_array();
        return (count($u) > 0) ? $u : false;
    }
}

?>
