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
    function ColsutarAlumno($Curso){
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

}