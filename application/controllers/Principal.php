<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
		public function __construct() {
            parent::__construct();
            $this->load->model('modelo');
            $this->load->library('cezpdf');
            $this->load->helper('pdf_helper');
        }
       public function index()
	{   
        //Debo revisar si la persona está logeada o no...
        //Si está logeada paso a la agenda, sino al login!
        if($this->session->userdata('logged_in')){
            $data['nombre'] = $this->session->userdata('nombre');
            $data['perfil'] = $this->session->userdata("perfil");
            $this->load->view("header",$data);
            $this->load->view('Agenda',$data);
            $this->load->view("footer");
        }
        else{
            $data['error'] = "";
            $this->load->view('inicio',$data);
        }
        //$this->load->view('Agenda');
	}
    function validaUsuario(){
        $usuario = $this->input->post("rut");
        $clave = md5($this->input->post('clave'));
        $valor = $this->modelo->consultaUsuario($usuario,$clave)->num_rows();

        if($valor == 1){
            //Buscar nombre del usuario que se ha conectado....
            $res = $this->modelo->consultaUsuario($usuario,$clave)->result();
            foreach ($res as $row) {
                $nombre = $row->nombre;
                $perfil = $row->perfil;
            }
            $data   =   array(
                'usuario'  => $usuario,
                'nombre'    => $nombre,
                'logged_in' => TRUE,
                'perfil' => $perfil
            );
        $this->session->set_userdata($data);
            $data['nombre'] = $this->session->userdata('nombre');
            $data['perfil'] = $this->session->userdata("perfil");
            $this->load->view("header",$data);
            $this->load->view('Agenda',$data);
            $this->load->view("footer");
        }else{
            $data['error'] = "Usuario no registrado";
            $this->load->view('inicio',$data);
        }

    }
    
    /*function ingresarUsuario(){
        $res = $this->modelo->ingresarPersonal($nombre,$rut,$apellidos,$fecha_nacimiento,$direccion,$telefono,$email,$patente,$fonasa,$afp,$categoria,$hijos,$tipo_contrato,$fecha_inicio,$fecha_termino,$estado,$causal);
        if($res == 0){
            echo json_encode(array("info"=>"ingreso"));
        }else
        {
            echo json_encode(array("info"=>"no ingreso"));
        }
    }*/
    function logout()
    {
        //$this->Respaldar();
        $this->session->sess_destroy();
        redirect(base_url());
    } 
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
