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
    function get_usuario_by_id($idusuario){
        $this->db->select("*");
        $query = $this->db->get_where("usuarios", array("idusuario" => $idusuario));
        $u = $query->row_array();
        return (count($u) > 0) ? $u : false;
    }
    
    function login($usuario, $contrasena){
        $this->db->select('idusuario');
        $query = $this->db->get_where('usuarios', array('usuario' => $usuario, 'contrasena' => $contrasena));
        $u = $query->row_array();
        return (count($u) > 0) ? $u['idusuario'] : false;
    }
}

?>
