<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class gestionModel extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    function ConsultaDocente($Rut,$Clave){
        $this->db->select("*");
        $this->db->from("Docente");
        $this->db->where("Rut",$Rut);
        $this->db->where("Clave",$Clave);
        return $this->db->get();
    }
    function ConsultaDocenteAdministrador(){
        $this->db->select("*");
        $this->db->from("Docente");
        $this->db->where("Nombre !=","administrador");
        return $this->db->get()->result();
    }
    function ConsultaDocenteAdministradorSe(){
        $this->db->select("Rut, Nombre");
        $this->db->from("Docente");
        $this->db->where("Nombre !=", "administrador");
        return $this->db->get()->result();
    }
    function ConsultaColegioAdministradorSe(){
        $this->db->select("*");
        $this->db->from("colegio");
        $this->db->where("Nombre !=", "administrador");
        return $this->db->get()->result();
    }

    function ConsultaCurso($Rut){
        $this->db->select("*");
        $this->db->from("Curso");
        $this->db->where("RutDocente",$Rut);
        return $this->db->get();
    }
    function ConsultaAlumnoContenido(){
        $this->db->select("Rut, Nombre");
        $this->db->from("alumno");
        return $this->db->get()->result();
    }
    function BuscarAlumno($letra){
         $sql = "SELECT * FROM alumno where Nombre like '%".$letra."%'";
        return $this->db->get()->result();
    }
    function ConsultaContenido($rut){
        $this->db->select("Tiempo, Estado, idActividad");
        $this->db->from("actividad_alumno");
        $this->db->where("RutAlumno", $rut);
        return $this->db->get()->result();
    }
    function ConsultarAlumno($Curso){
        $this->db->select("Rut, Nombre, Edad, Descripcion, Estado");
        $this->db->from("alumno");
        $this->db->where("idCurso",$Curso);
        $this->db->where("Estado !=","Inactivo");
        return $this->db->get()->result();
    }

    function ConsultarAlumnoAdministrador(){
        $this->db->select("Rut, Nombre, Edad, Descripcion, Estado");
        $this->db->from("alumno");
        return $this->db->get()->result();
    }

    function ConsultarCategorias(){
        $this->db->select("*");
        $this->db->from("Categoria");
        return $this->db->get()->result();
    }
    function ConsultarCursos(){
        $this->db->select("idCurso, Nombre");
        $this->db->from("curso");
        $this->db->where("Nombre !=", "Administrador");
        return $this->db->get()->result();
    }
function ConsultaCursoAdministrador(){
        $this->db->select("*");
        $this->db->from("curso");
        $this->db->where("Nombre !=", "Administrador");
        return $this->db->get()->result();
        
    }
    function ConsultaColegioAdministrador(){
        $this->db->select("*");
        $this->db->from("colegio");
        $this->db->where("Nombre !=", "Administrador");
        return $this->db->get()->result();
    }
    function ObtenerPictogramasCategoria($id){
        $this->db->select("*");
        $this->db->from("Pictograma");
        $this->db->where("idCategoria",$id);
        return $this->db->get()->result();
    }
    function ObtenerAlumnoCurso($id){
        $this->db->select("*");
        $this->db->from("Alumno");
        $this->db->where("idCurso",$id);
        return $this->db->get()->result();
    }

    function AgregarPictograma($Nombre,$Descripcion,$Ejemplo,$Tags,$imgRuta,$idCategoria){
        $datos = array(
            "Nombre"=>$Nombre,
            "Descripcion"=>$Descripcion,
            "Ejemplo"=>$Ejemplo,
            "Tags"=>$Tags,
            "img"=>$imgRuta,
            "idCategoria"=>$idCategoria
        );
        $Respuesta = "Error desconocido";
        if($this->db->insert("Pictograma",$datos)){
            $Respuesta = "SI";
        }else{
            $Respuesta = "NO";
        }
        return $Respuesta;
    }

    function cerrarSesion(){
        $this->session->sess_destroy();
        header("Location:".site_url());
    }

    function IngresarAlumno($rut,$nombre,$edad,$descripcion,$estado,$curso){
        $data = array(
            "Rut"=>$rut,
            "Nombre"=>$nombre,
             "Edad"=>$edad,
             "Descripcion"=>$descripcion,
             "Estado" => $estado,
             "idCurso"=>$curso
        );
        if($this->db->insert("alumno",$data)){
            $resultado = "Alumno Igresado";
        }else{
            $resultado= "Alumno no Ingresado";
        }
            return $resultado;
    }
    function IngresarCurso($nombre,$descripcion,$estado,$profesor,$colegio){
        $data = array(
            "Nombre"=>$nombre,
             "Descripcion"=>$descripcion,
             "Estado" => $estado,
             "RutDocente"=>$profesor,
             "idColegio" => $colegio
        );
        if($this->db->insert("curso",$data)){
            $resultado = "Curso Igresado";
        }else{
            $resultado= "Curso no Ingresado";
        }
            return $resultado;
    }
    function EliminarAlumno($rut){
        $this->db->where("Rut",$rut);
        $this->db->set("Estado","Inactivo");
        $respuesta = "Error inesperado";
        if($this->db->update("alumno")){
            $respuesta = "Usuario eliminado";
        }else{
            $respuesta = "Error al eliminar usuario";
        }
        return $respuesta;
    }
    function EliminarProfesor($rut){
        $this->db->where("Rut",$rut);
        $this->db->set("Estado","Inactivo");
        $respuesta = "Error inesperado";
        if($this->db->update("docente")){
            $respuesta = "Usuario Inactivo";
        }else{
            $respuesta = "Error al eliminar usuario";
        }
        return $respuesta;
    }
    function EliminarCurso($id){
        $this->db->where("idCurso",$id);
        $this->db->set("Estado","Inactivo");
        $respuesta = "Error inesperado";
        if($this->db->update("curso")){
            $respuesta = "Curso Inactivo";
        }else{
            $respuesta = "Error al eliminar usuario";
        }
        return $respuesta;
    }
    function ActualizarAlumno($rut,$nombre,$edad,$descripcion,$estado,$curso){
        $this->db->where("Rut",$rut);
        $datos = array(
            "Nombre"=>$nombre,
            "Edad"=>$edad,
            "Descripcion"=>$descripcion,
            "Estado"=>$estado,
            "idCurso"=>$curso
        );
        $respuesta = "error inesperado";
        if($this->db->update("alumno",$datos)){
            $respuesta = "Alumno modificado";
        }else{
            $respuesta = "Error al modificar el alumno";
        }
        return $respuesta;
    }

    function ActualizarProfesor($rut,$nombre,$descripcion,$estado){
        $this->db->where("Rut",$rut);
        $datos = array(
            "Nombre"=>$nombre,
            "Descripcion"=>$descripcion,
            "Estado"=>$estado
        );
        $respuesta = "error inesperado";
        if($this->db->update("docente",$datos)){
            $respuesta = "Docente Modificado";
        }else{
            $respuesta = "Error al modificar el alumno";
        }
        return $respuesta;
    }
    function ActualizarCurso($id,$nombre,$descripcion,$estado,$profesor,$colegio){
        $this->db->where("idCurso",$id);
        $datos = array(
            "Nombre"=>$nombre,
            "Descripcion"=>$descripcion,
            "Estado"=>$estado,
            "RutDocente"=>$profesor,
            "idColegio"=>$colegio
        );
        $respuesta = "error inesperado";
        if($this->db->update("curso",$datos)){
            $respuesta = "curso Modificado";
        }else{
            $respuesta = "Error al modificar el curso";
        }
        return $respuesta;
    }
}