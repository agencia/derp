<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
         function login(){
             $this->load->library('session');
             $this->load->model('usuario_model');
             if($this->usuario_model->login($this->input->POST('usuario',$this->input->POST('contrasena'))))
             {
                 echo"Bienvenido";
             }
             else
             {
                 echo"Te has equivocado";
             }
        }
    
}
