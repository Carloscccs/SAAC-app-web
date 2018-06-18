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
        $this->load->view('VistaDocenteReportes');
    }

    public function CargarVistaAlumnos(){
        $this->load->view('VistaDocenteAlumnos');
        $this->MostrarCurso();
    }

    public function CargarVistaContenidos(){
        $this->load->view('VistaDocenteContenidos');
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

        $respuesta = $this->modelo->IngresarAlumno($rut,$nombre,$edad,$descripcion,$curso);
        

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
            //Se extraen los datos del arreglo y se asignan a variables
            foreach ($res as $row) {
                $Rut = $row->Rut;
				$Nombre = $row->Nombre;
				$Descripcion = $row->Descripcion;
            }
            //Se preparan los datos para guardarlos en la session (Pendiente de revision en logged_in)
            $data   =   array(
                'Rut'  => $Rut,
                'nombre'    => $Nombre,
                'logged_in' => TRUE,
                'Descripcion' => $Descripcion
            );
            
            //Lineas pendientes de revision
            //$data['Nombre'] = $this->session->userdata('nombre');
            //$data['Descripcion'] = $this->session->userdata("Descripcion");
            $this->session->set_userdata($data);
           //Se carga el curso con el rut guardado en sesion
            $Docente = $this->session->userdata("Rut");
            $Curso = $this->GestionModel->ConsultaCurso($Docente); 

            //Carga la vista del docente
            $this->load->view("VistaDocenteAlumnos", 'Curso', $Curso);
        }else{
            //Manda un mensaje y vuelve a cargar la vista de login
            $data['error'] = "Datos incorrectos o no existen";
            $this->load->view('VistaLogin',$data);
		}
	}
}
