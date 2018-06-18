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
        $data['Rut'] = $this->session->userdata('Rut');
        $data['Curso'] = $this->session->userdata("NombreCurso");
        $this->load->view('VistaDocenteReportes',$data);
    }

    public function CargarVistaAlumnos(){
        $data['Rut'] = $this->session->userdata('Rut');
        $data['Curso'] = $this->session->userdata("NombreCurso");
        $this->load->view('VistaDocenteAlumnos',$data);
    }

    public function CargarVistaContenidos(){
        $data['Rut'] = $this->session->userdata('Rut');
        $data['Curso'] = $this->session->userdata("NombreCurso");
        $this->load->view('VistaDocenteContenidos',$data);
    }

    /*
    Metodo que busca a el usuario en la base de datos, si existe muestra la vista docente, en caso contrario,
    Manda un mensaje de error
    */
    function MostrarCurso(){
        $Docente = $this->session->userdata("Rut");
        $Curso = $this->GestionModel->ConsultaCurso($docente);
        $this->load->view('VistaDocenteAlumnos', $Curso);
    }
    function CargarAlumnos(){
        $Docente = $this->session->userdata("Rut");
        $Curso = $this->GestionModel->ConsultaCurso($docente);
        $Alumnos = $this->GestionModel->ColsutarAlumno($Curso);

    }
    function IngresarAlumnos(){
        $rut = $this->input->post("IngrRut");
        $nombre = $this->input->post("IngrNombre");
        $edad = $this->input->post("IngrEdad");
        $descripcion = $this->input->post("IngrDescripcion");
        $curso = $this->input->post("IngrCurso");


    }
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
}
