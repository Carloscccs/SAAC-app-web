<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('GestionModel');
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function CargarVistaLogin()
	{
		$this->load->view('VistaLogin');
	}

	function validaUsuario(){
        $usuario = $this->input->post("rut");
        $clave =  $this->input->post('clave');
        $valor = $this->GestionModel->ConsultaDocente($usuario,$clave)->num_rows();
        if($valor == 1){
            //Buscar nombre del usuario que se ha conectado....
            $res = $this->GestionModel->ConsultaDocente($usuario,$clave)->result();
            foreach ($res as $row) {
                $Rut = $row->Rut;
				$Nombre = $row->Nombre;
				$Descripcion = $row->Descripcion;
            }
            $data   =   array(
                'Rut'  => $Rut,
                'nombre'    => $Nombre,
                'logged_in' => TRUE,
                'Descripcion' => $Descripcion
            );
        $this->session->set_userdata($data);
            $data['Nombre'] = $this->session->userdata('nombre');
            $data['Descripcion'] = $this->session->userdata("Descripcion");
            $this->load->view("VistaDocente");
        }else{
            $data['error'] = "Datos incorrectos o no existen";
            $this->load->view('VistaLogin',$data);
		}
	}
}
