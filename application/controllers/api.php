<?php
require(APPPATH.'libraries/REST_Controller.php');
require(APPPATH.'libraries/Format.php');
use Restserver\Libraries\REST_Controller;
class Api extends REST_Controller
{

    public function __construct() {
		parent::__construct();
		$this->load->model('GestionModel');
	}

    function user_get()
    {
        //Codigo de ejemplo, NO USAR, solo referencia
        if(!$this->get('id'))
        {
            $this->response(null, 400);
        }
 
        $user = $this->user_model->get( $this->get('id') );
         
        if($user)
        {
            $this->response($user, 200); // 200 being the HTTP response code
        }
 
        else
        {
            $this->response(NULL, 404);
        }
        //Codigo de ejemplo, NO USAR, solo referencia
    }

    function cursos_get(){
        $curso = $this->GestionModel->ConsultarCursos();
        if($curso){
            $this->response($curso,200);
        }
        else{
            $this->response(NULL,404);
        }
    }

    function cursoAlu_get(){
        if(!$this->get('id'))
        {
            $this->response(NULL, 400);
        }
 
        $alumnos = $this->GestionModel->ObtenerAlumnoCurso($this->get('id'));
         
        if($alumnos)
        {
            $this->response($alumnos, 200); // 200 being the HTTP response code
        }
 
        else
        {
            $this->response(NULL, 404);
        }
    }
    function categorias_get(){
        $categoria = $this->GestionModel->ConsultarCategorias();
        if($categoria){
            $this->response($categoria,200);
        }
        else{
            $this->response(NULL,404);
        }
    }
    function obtenerPicCat_get(){
        if(!$this->get('idCategoria'))
        {
            $this->response(NULL, 400);
        }
        $pictograma = $this->GestionModel->ConsultarPictogramaporCat($this->get('idCategoria'));
        if($pictograma){
            $this->response($pictograma,200);
        }
        else{
            $this->response(NULL,404);
        }
    }
    function pictogramas_get(){
        $pictograma = $this->GestionModel->ConsultarPictogramas();
        if($pictograma){
            $this->response($pictograma,200);
        }
        else{
            $this->response(NULL,404);
        }
    }
     
}
?>