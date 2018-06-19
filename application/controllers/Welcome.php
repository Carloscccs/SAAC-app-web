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
    
    public function CargarVistaReportes(){
        if($this->session->userdata("logged_in")){
            $data['Rut'] = $this->session->userdata('Rut');
            $data['Curso'] = $this->session->userdata("NombreCurso");
            $this->load->view('VistaDocenteReportes',$data);
        }else{
            $this->load->view('VistaLogin');
        }
        
    }

    public function CargarVistaAlumnos(){
        if($this->session->userdata("logged_in")){
            $data['Rut'] = $this->session->userdata('Rut');
            $data['Curso'] = $this->session->userdata("NombreCurso");
            $this->load->view('VistaDocenteAlumnos',$data);
        }else{
            $this->load->view('VistaLogin');
        }
    }

    public function CargarVistaContenidos(){
        if($this->session->userdata("logged_in")){
            $data['Rut'] = $this->session->userdata('Rut');
            $data['Curso'] = $this->session->userdata("NombreCurso");
            $this->load->view('VistaDocenteContenidos',$data);
        }else{
            $this->load->view('VistaLogin');
        }
    }

    /*
    Metodo que busca a el usuario en la base de datos, si existe muestra la vista docente, en caso contrario,
    Manda un mensaje de error
    */
	function validaUsuario(){
        //Recibe los datos del formulario
        $usuario = $this->input->post("rut");
        $clave =  $this->input->post('clave');
        //Busca el usuario
        $valor = $this->GestionModel->ConsultaDocente($usuario,$clave)->num_rows();
        //Si el la consulta devuelve mas de un resultado = TRUE
        if($valor == 1){
            //Extraer los datos de la consulta a un arreglo
            $res = $this->GestionModel->ConsultaDocente($usuario,$clave)->result();
            $curso = $this->GestionModel->ConsultaCurso($usuario)->result();
            //Se extraen los datos del arreglo y se asignan a variables
            foreach ($res as $row) {
                $Rut = $row->Rut;
				$Nombre = $row->Nombre;
				$Descripcion = $row->Descripcion;
            }
            foreach($curso as $row){
                $idCurso = $row->idCurso;
                $NombreCurso = $row->Nombre;
                $idColegio = $row->idColegio;
            }
            //Se preparan los datos para guardarlos en la session (Pendiente de revision en logged_in)
            $data   =   array(
                'Rut'  => $Rut,
                'nombre'    => $Nombre,
                'logged_in' => TRUE,
                'Descripcion' => $Descripcion,
                'idCurso' => $idCurso,
                'NombreCurso' => $NombreCurso,
                'idColegio' => $idColegio
            );
            //Lineas pendientes de revision
        $this->session->set_userdata($data);
            $data['Rut'] = $this->session->userdata('Rut');
            $data['Curso'] = $this->session->userdata("NombreCurso");
            //Carga la vista del docente
            $this->load->view("VistaDocenteAlumnos",$data);
        }else{
            //Manda un mensaje y vuelve a cargar la vista de login
            $data['error'] = "Datos incorrectos o no existen";
            $this->load->view('VistaLogin',$data);
		}
    }
    
    public function GetCategorias(){
        echo json_encode($this->GestionModel->ConsultarCategorias());
    }

    public function GetPictogramasCategoria(){
        $idCategoria = $this->input->post("id");
        echo json_encode($this->GestionModel->ObtenerPictogramasCategoria($idCategoria));
    }

    public function AgregarPictograma(){
        $Nombre = $this->input->post("Nombre");
        $Descripcion = $this->input->post("Descripcion");
        $Ejemplo = $this->input->post("Ejemplo");
        $Tags = $this->input->post("Tags");
        $imgB64 = $this->input->post("imgB64");
        $idCategoria = $this->input->post("idCategoria");
        echo json_encode($this->GestionModel->AgregarPictograma($Nombre,$Descripcion,$Ejemplo,$Tags,$imgB64,$idCategoria));
    }

    public function cerrarSesion() {
        $this->GestionModel->cerrarSesion();
    }
}
