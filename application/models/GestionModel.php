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

    function ConsultaCurso($Rut){
        $this->db->select("*");
        $this->db->from("Curso");
        $this->db->where("RutDocente",$Rut);
        return $this->db->get();
    }
    function ConsultarAlumno($Curso){
        $this->db->select("Rut, Nombre, Edad, Descripcion, Estado");
        $this->db->from("alumno");
        $this->db->where("idCurso",$Curso);
        return $this->db->get()->result();
    }

    function ConsultarCategorias(){
        $this->db->select("*");
        $this->db->from("Categoria");
        return $this->db->get()->result();
    }

    function ObtenerPictogramasCategoria($id){
        $this->db->select("*");
        $this->db->from("Pictograma");
        $this->db->where("idCategoria",$id);
        return $this->db->get()->result();
    }

    function AgregarPictograma($Nombre,$Descripcion,$Ejemplo,$Tags,$imgB64,$idCategoria){
        $datos = array(
            "Nombre"=>$Nombre,
            "Descripcion"=>$Descripcion,
            "Ejemplo"=>$Ejemplo,
            "Tags"=>$Tags,
            "img"=>$imgB64,
            "idCategoria"=>$idCategoria
        );
        $Respuesta = "Error desconocido";
        if($this->db->insert("Pictograma",$datos)){
            $Respuesta = "Agregado correctamente";
        }else{
            $Respuesta = "Error al agregar";
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
            $resultado = "1";
        }else{
            $resultado= "-1";
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

}