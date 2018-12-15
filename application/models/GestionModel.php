<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class gestionModel extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    function ConsultaDocente($Rut,$Clave){
        $this->db->select("*");
        $this->db->from("docente");
        $this->db->where("Rut",$Rut);
        $this->db->where("Clave",$Clave);
        return $this->db->get();
    }
    function ConsultaDocenteAdministrador(){
        $this->db->select("*");
        $this->db->from("docente");
        $this->db->where("Nombre !=","administrador");
        return $this->db->get()->result();
    }
    function ConsultaDocenteAdministradorSe(){
        $this->db->select("Rut, Nombre");
        $this->db->from("docente");
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
        $this->db->from("curso");
        $this->db->where("RutDocente",$Rut);
        return $this->db->get();
    }
        function ConsultaAlumnoContenido(){
        $this->db->select("Rut, Nombre");
        $this->db->from("alumno");
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
        $this->db->from("categoria");
        return $this->db->get()->result();
    }
    function ConsultarPictogramas(){
        $this->db->select("*");
        $this->db->from("pictograma");
        return $this->db->get()->result();
    }
    function ConsultarPictogramaporCat($idCategoria){
        $this->db->select("Nombre,Descripcion,img");
        $this->db->from("pictograma");
        $this->db->where("idCategoria",$idCategoria);
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
        $this->db->from("pictograma");
        $this->db->where("idCategoria",$id);
        return $this->db->get()->result();
    }
    function ObtenerAlumnoCurso($id){
        $this->db->select("Rut,Nombre,Edad,Descripcion,Estado,idCurso");
        $this->db->from("alumno");
        $this->db->where("idCurso",$id);
        $this->db->where("Estado !=","Inactivo");
        return $this->db->get()->result();
    }

    function AgregarPictograma($Nombre,$Descripcion,$Ejemplo,$Tags,$imgRuta,$idCategoria,$RutDocente){
        $Estado = "Activo";
        $datos = array(
            "Nombre"=>$Nombre,
            "Descripcion"=>$Descripcion,
            "Ejemplo"=>$Ejemplo,
            "Tags"=>$Tags,
            "img"=>$imgRuta,
            "Estado"=>$Estado,
            "idCategoria"=>$idCategoria,
            "RutDocente"=>$RutDocente
        );
        $Respuesta = "Error desconocido";
        if($this->db->insert("pictograma",$datos)){
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
            $resultado = "Alumno Ingresado";
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
  
    function ObtenerRutaPictograma($idPictograma){
        $this->db->select("img");
        $this->db->from("pictograma");
        $this->db->where("idPictograma",$idPictograma);
        return $this->db->get()->result();
    }

    function ObtenerActividades(){
        $this->db->select("idActividad,Oracion");
        $this->db->from("actividad");
        $this->db->where("Estado !=","Inactivo");
        return $this->db->get();
    }
    function getActividad($idCurso){
        $this->db->select("idActividad,Oracion,COLUMN_JSON(PicsVista) as 'PicsVista',idPic1,idPic2,idPic3,idPic4,PosRespuesta,Estado,idCurso");
        $this->db->from("actividad");
        $this->db->where("Estado !=","Inactivo");
        $this->db->where("idCurso",$idCurso);
        return $this->db->get()->result();
    }
    function ObtenerVistaActividad($idActividad){
        $this->db->select("COLUMN_JSON(PicsVista) as 'PicsVista'");
        $this->db->from("actividad");
        $this->db->where("idActividad",$idActividad);
        return $this->db->get();
    }

    function ObtenerRespuestasActividad($idActividad){
        $this->db->select("p1.nombre as 'pic1nombre',
        p1.img as 'pic1',
        p2.nombre as 'pic2nombre',
        p2.img as 'pic2',
        p3.nombre as 'pic3nombre',
        p3.img as 'pic3',
        p4.nombre as 'pic4nombre',
        p4.img as 'pic4',
        a.PosRespuesta");
        $this->db->from("actividad a");
        $this->db->join("pictograma p1","p1.idPictograma = a.idPic1");
        $this->db->join("pictograma p2","p2.idPictograma = a.idPic2");
        $this->db->join("pictograma p3","p3.idPictograma = a.idPic3");
        $this->db->join("pictograma p4","p4.idPictograma = a.idPic4");
        $this->db->where("a.idActividad",$idActividad);
        return $this->db->get();
    }

    function ObtenerInfoPictoramas(){
        $this->db->select("idPictograma,Nombre");
        $this->db->from("pictograma");
        return $this->db->get();
    }

    function AgregarActividad($oracion,$arrvista,$pic1,$pic2,$pic3,$pic4,$posres){
        $PicsVista = "COLUMN_CREATE(";
        for ($i=0; $i < count($arrvista); $i++) { 
            $a = $i + 1; 
            if($i == count($arrvista)-1){
                $PicsVista = $PicsVista."'pic".$a."',".$arrvista[$i].")";
            }else{
                $PicsVista = $PicsVista."'pic".$a."',".$arrvista[$i].",";
            }
        }
        $Estado = "Activa";
        $idCurso = $this->session->userdata("idCurso");
        $data = array(
            "Oracion"=>$oracion,
            "PicsVista"=>$PicsVista,
            "idPic1"=>$pic1,
            "idPic2"=>$pic2,
            "idPic3" =>$pic3,
            "idPic4"=>$pic4,
            "PosRespuesta"=>$posres,
            "Estado"=>$Estado,
            "idCurso"=>$idCurso
        );
        /*
        $resultado = "Error: ";
        if($this->db->insert("actividad",$data)){
            $resultado = "Si";
        }else{
            $resultado= "No";
        }
        return $resultado;
        */
        $sql = "INSERT into actividad(Oracion,PicsVista,idPic1,idPic2,idPic3,idPic4,PosRespuesta,Estado,idCurso) values ('".$oracion."',".$PicsVista.",'".$pic1."','".$pic2."','".$pic3."','".$pic4."','".$posres."','Activo',".$idCurso.")";
        // return $sql = $this->db->set($data)->get_compiled_insert('actividad');
        if($this->db->simple_query($sql)){
            return "SI";
        }else{
            return $this->db->error();
            //return $sql;
        }

    }

    function DeshabilitarActividad($id){
        $this->db->where("idActividad",$id);
        $datos = array("Estado"=>"Inactivo");
        if($this->db->update("actividad",$datos)){
            return "SI";
        }else{
            return $this->db->error();
        }
    }

    function ConsultaRepAlumnos($idCurso){
        $this->db->select("b.RutAlumno as 'RutAlumno',b.idActividad as 'idActividad',b.Tiempo as 'Tiempo',b.Estado as 'Estado'");
        $this->db->from("actividad_alumno b");
        $this->db->join("actividad a","a.idActividad = b.idActividad");
        $this->db->where("a.idCurso",$idCurso);
        return $this->db->get()->result();
    }

    function AgregarReporte($Motivo,$idPictograma){
        $Estado = "Pendiente";
        $RutDocente = $this->session->userdata("Rut");
        $data = array(
            "Motivo"=>$Motivo,
            "Estado"=>$Estado,
            "idPictograma"=>$idPictograma,
            "RutDocente"=>$RutDocente
        );
        if($this->db->insert("reporte",$data)){
            $resultado = "Reporte agregado";
        }else{
            $resultado= "Reporte no Ingresado";
        }
            return $resultado;
    }

    function ConsultarReportes(){
        $this->db->select("*");
        $this->db->from("reporte");
        return $this->db->get()->result();
    }

    function ActualizarReporte($idReporte,$Estado){
        $this->db->where("idReporte",$idReporte);
        $datos = array(
            "Estado"=>$Estado
        );
        $respuesta = "error inesperado";
        if($this->db->update("reporte",$datos)){
            $respuesta = "Reporte actualizado";
        }else{
            $respuesta = "Error al actualizar el reporte";
        }
        return $respuesta;
    }
}