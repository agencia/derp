<?php

class Cliente_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
        
    function in($email,$pass)
    {
        $this->db->select($this->select);
        $query = $this->db->get_where("usuarios", array('email' => $email, "pass" => md5($pass)));
        $u = $query->row_array();
        if(count($u)>0) {
            $this->load->model("session_model");
            $this->session_model->set_session($u["idusuario"],$u["email"],$u["nombre"],$u["apellidos"],$u["nivel"],$u["status"]);
            return true;
        }
        return  false;
    }
    
    function set($data)
    {
        $this->db->insert('clientes', $data);
        return true;
    }
    
    function get_id_by_email($email)
    {
        $this->db->select("idusuario");
        $query = $this->db->get_where("usuarios", array('email' => $email));
        $u = $query->row_array();
        return (count($u)>0) ? $u["idusuario"] : 0;
    }
    
    function get_usuario_by_id($idusuario)
    {
        $this->db->select($this->select);
        $query = $this->db->get_where("usuarios", array('idusuario' => $idusuario));
        $u = $query->row_array();
        return $u;
    }
    
    function get_usuario_by_email($email){
        $this->db->select($this->select);
        $query = $this->db->get_where("usuarios", array('email' => $email));
        $u = $query->row_array();
        return (count($u) > 0) ? $u : false;
    }
    function get_clientes(){
        $query = $this->db->get("clientes");
        $u = $query->result_array();
        return (count($u) > 0) ? $u : false;
    }
    function get_cliente_by_id($idcliente){
        $this->db->select("*");
        $query = $this->db->get_where("clientes", array("idcliente" => $idcliente));
        $u = $query->row_array();
        return (count($u) > 0) ? $u : false;
    }
    function update_usuario($idusuario, $campo, $valor){
        $this->db->where("idusuario", $idusuario);
        $this->db->update("usuarios", array($campo => $valor));
    }
}