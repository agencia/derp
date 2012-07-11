<?php
class Usuario_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
       
    function set($data)
    {
        $this->db->insert('usuarios', $data);
        return true;
    }
    
    function get_usuarios(){
        $this->db->select("*");
        $query = $this->db->get("usuarios");
        $u = $query->result_array();
        return (count($u) > 0) ? $u : false;
    }
    function get_usuario_by_id($Id_usuario){
        $this->db->select("*");
        $query = $this->db->get_where("Usuarios", array("Id_usuario" => $Id_usuario));
        $u = $query->row_array();
        return (count($u) > 0) ? $u : false;
    }
    
    function login($Usuario, $Contrasena){
        $this->db->select('Id_usuario');
        $query = $this->db->get_where('usuarios', array('Usuario' => $Usuario, 'Contrasena' => $Contrasena));
        $u = $query->row_array();
        return (count($u) > 0) ? $u['Id_usuario'] : false;
    }
}

?>
