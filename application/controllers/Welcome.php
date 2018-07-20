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
    public function CargarVistaReportesAdministrador(){
        if($this->session->userdata("logged_in")){
            $data['Rut'] = $this->session->userdata('Rut');
            $data['Curso'] = $this->session->userdata("NombreCurso");
            $this->load->view('VistaDocenteReportesAdministrador',$data);
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
    public function CargarVistaAlumnosAdministrador(){
        if($this->session->userdata("logged_in")){
            $data['Rut'] = $this->session->userdata('Rut');
            $data['Curso'] = $this->session->userdata("NombreCurso");
            $this->load->view('VistaDocenteAlumnosAdministrador',$data);
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
    public function CargarVistaContenidosAdministrador(){
        if($this->session->userdata("logged_in")){
            $data['Rut'] = $this->session->userdata('Rut');
            $data['Curso'] = $this->session->userdata("NombreCurso");
            $this->load->view('VistaDocenteContenidosAdministrador',$data);
        }else{
            $this->load->view('VistaLogin');
        }
    }
    function CargarAlumnos(){
        echo json_encode($this->GestionModel->ConsultarAlumno($this->session->userdata("idCurso")));
    }
    function CargarAlumnosAdministrador(){
        echo json_encode($this->GestionModel->ConsultarAlumnoAdministrador());
    }
    function CargarDocenteAdministrador(){
        echo json_encode($this->GestionModel->ConsultaDocenteAdministrador());
    }
    function CargarDocenteAdministradorSe(){
        echo json_encode($this->GestionModel->ConsultaDocenteAdministradorSe());
    }
    function CargarColegioAdministradorSe(){
        echo json_encode($this->GestionModel->ConsultaColegioAdministradorSe());
    }

    function CargarCursoAdministrador(){
        echo json_encode($this->GestionModel->ConsultaCursoAdministrador());
    }
    function CargarColegioAdministrador(){
        echo json_encode($this->GestionModel->ConsultaColegioAdministrador());
    }
    function EliminarAlumno(){
        $rut = $this->input->post("rut");
        echo json_encode($this->GestionModel->EliminarAlumno($rut));
    }

    function EliminarProfesor(){
        $rut = $this->input->post("rut");
        echo json_encode($this->GestionModel->EliminarProfesor($rut));
    }
    function EliminarCurso(){
        $id = $this->input->post("idCurso");
        echo json_encode($this->GestionModel->EliminarCurso($id));
    }

    function ActualizarAlumno(){
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $edad = $this->input->post("edad");
        $descripcion = $this->input->post("descripcion");
        $estado = $this->input->post("estado");
        $curso = $this->session->userdata('idCurso');

        echo json_encode($this->GestionModel->ActualizarAlumno($rut, $nombre, $edad, $descripcion, $estado, $curso));
    }

    function ActualizarProfesor(){
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $descripcion = $this->input->post("descripcion");
        $estado = $this->input->post("estado");
        echo json_encode($this->GestionModel->ActualizarProfesor($rut, $nombre, $descripcion, $estado));
    }
    function ActualizarCurso(){
        $id = $this->input->post("idCurso");
        $nombre = $this->input->post("nombre");
        $descripcion = $this->input->post("descripcion");
        $estado = $this->input->post("estado");
        $profesor = $this->input->post("RutDocente");
        $colegio = $this->input->post("idColegio");
        echo json_encode($this->GestionModel->ActualizarCurso($id, $nombre, $descripcion, $estado,$profesor,$colegio));
    }
    function IngresarAlumnos(){
        $rut = $this->input->post("rut");
        $nombre = $this->input->post("nombre");
        $edad = $this->input->post("edad");
        $descripcion = $this->input->post("descripcion");
        $estado = $this->input->post("estado");
        $curso = $this->session->userdata('idCurso');
        echo json_encode($this->GestionModel->IngresarAlumno($rut,$nombre,$edad,$descripcion,$estado,$curso));
        $data['Rut'] = $this->session->userdata('Rut');
        $data['Curso'] = $this->session->userdata("NombreCurso");
    }
  
    function IngresarCurso(){
        $nombre = $this->input->post("nombre");
        $descripcion = $this->input->post("descripcion");
        $estado = $this->input->post("estado");
        $profesor = $this->input->post("profesor");
        $colegio = $this->input->post("colegio");

        echo json_encode($this->GestionModel->IngresarCurso($nombre,$descripcion,$estado,$profesor,$colegio));
            $data['Rut'] = $this->session->userdata('Rut');
            $data['Curso'] = $this->session->userdata("NombreCurso");
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
                $Estado = $row->Estado;
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
                'idColegio' => $idColegio,
                'Estado' => $Estado
            );
            
            //Lineas pendientes de revision
        $this->session->set_userdata($data);
            $data['Rut'] = $this->session->userdata('Rut');
            $data['Curso'] = $this->session->userdata("NombreCurso");
            //Carga la vista del Administrador descomentar
            if ($Estado == 100) {
            $this->load->view("VistaDocenteAlumnosAdministrador", $data);
            }else{
                //Cargar vista docente
            $this->load->view("VistaDocenteAlumnos",$data);
            
        }
        }else{
            //Manda un mensaje y vuelve a cargar la vista de login
            $data['error'] = "Datos incorrectos o no existen";
            $this->load->view('VistaLogin',$data);
		}
    }
    
    public function GetCategorias(){
        echo json_encode($this->GestionModel->ConsultarCategorias());
    }
    public function GetCurso(){
        echo json_encode($this->GestionModel->ConsultarCursos());
    }
    public function GetAlumnos(){
        echo json_encode($this->GestionModel->ConsultaAlumnoContenido());
    }
    public function GetContenido(){
        $rut = $this->input->post("Rut");
        echo json_encode($this->GestionModel->ConsultaContenido($rut));
    }

    public function GetPictogramasCategoria(){
        $idCategoria = $this->input->post("id");
        echo json_encode($this->GestionModel->ObtenerPictogramasCategoria($idCategoria));
    }
    public function GetAlumnoCurso(){
        $idCurso = $this->input->post("id");
        echo json_encode($this->GestionModel->ObtenerAlumnoCurso($idCurso));
    }

    public function AgregarPictograma(){
        $Nombre = $this->input->post("Nombre");
        $Descripcion = $this->input->post("Descripcion");
        $Ejemplo = $this->input->post("Ejemplo");
        $Tags = $this->input->post("Tags");
        $idCategoria = $this->input->post("Categoria");
        $config['upload_path'] = './Pictograma/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;
        $config['file_name'] = $Nombre;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('Imagen')) { #Aquí me refiero a "foto", el nombre que pusimos en FormData
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        } else {
            $UpImgName = $this->upload->data('file_name');
            $ImgRuta = "Pictograma/".$UpImgName;
            $resultado = $this->GestionModel->AgregarPictograma($Nombre,$Descripcion,$Ejemplo,$Tags,$ImgRuta,$idCategoria);
            echo json_encode($resultado);
        }
        /*
        
        */
    }

    function getActividades(){
        echo json_encode($this->GestionModel->ObtenerActividades()->Result());
    }

    function getVistaActividad(){
        $idActividad = $this->input->post("Id");
        $vistasjson = $this->GestionModel->ObtenerVistaActividad($idActividad)->Result();
        $arrjson = json_decode($vistasjson[0]->PicsVista, true);
        $vistarutas = array();
        for ($i=0; $i < count($arrjson); $i++) { 
            $n = $i + 1;
            $ruta = $this->GestionModel->ObtenerRutaPictograma($arrjson['pic'.$n]);
            $vistarutas[] = $ruta;
        }
        echo json_encode($vistarutas);
    }

    public function cerrarSesion() {
        $this->GestionModel->cerrarSesion();
    }

    function getRespuestasActividad(){
        $idActividad = $this->input->post("Id");
        $res = $this->GestionModel->ObtenerRespuestasActividad($idActividad)->Result();
        echo json_encode($res);
    }

    function getInfoPictogramas(){
        $res = $this->GestionModel->ObtenerInfoPictoramas()->Result();
        echo json_encode($res);
    }

    function AgregarActividad(){
        $Oracion = $this->input->post("oracion");
        $vistaarr = $this->input->post("vistarr");
        $Pic1 = $this->input->post("pic1");
        $Pic2 = $this->input->post("pic2");
        $Pic3 = $this->input->post("pic3");
        $Pic4 = $this->input->post("pic4");
        $PosRes = $this->input->post("PosRes");
        $vistadecode = json_decode($vistaarr);
        $res = $this->GestionModel->AgregarActividad($Oracion,$vistadecode,$Pic1,$Pic2,$Pic3,$Pic4,$PosRes);
        echo json_encode($res);
    }

    function DeshabilitarActividadE(){
        $id = $this->input->post("id");
        $res = $this->GestionModel->DeshabilitarActividad($id);
        echo json_encode($res);
    }

}
