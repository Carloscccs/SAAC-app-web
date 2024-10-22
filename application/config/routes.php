<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['CVL']= 'welcome/CargarVistaLogin';
$route['login']= 'welcome/validaUsuario';
$route['CVR']= 'welcome/CargarVistaReportes';
$route['CVRA'] ='welcome/CargarVistaReportesAdministrador';
$route['CVA']= 'welcome/CargarVistaAlumnos';
$route['CVAA']= 'welcome/CargarVistaAlumnosAdministrador';
$route['CVC']= 'welcome/CargarVistaContenidos';
$route['CVCA']= 'welcome/CargarVistaContenidosAdministrador';
$route['GC']= 'welcome/GetCategorias';
$route['GCA']= 'welcome/GetCurso';
$route['GAC']= 'welcome/GetAlumnos';
$route['GContenido']= 'welcome/GetContenido';
$route['GPC']= "welcome/GetPictogramasCategoria";
$route['GACA']= "welcome/GetAlumnoCurso";
$route['AP'] = "welcome/AgregarPictograma";
$route['CS'] = "welcome/cerrarSesion";
$route['ingrAlumno']= 'welcome/IngresarAlumnos';
$route['ingrCurso']= 'welcome/IngresarCurso';
$route['MostrarAlumnos']= 'welcome/CargarAlumnos';
$route['MostrarAlumnosAdministrador']= 'welcome/CargarAlumnosAdministrador';
$route['MostrarDocenteAdministrador']= 'welcome/CargarDocenteAdministrador';
$route['GDA']= 'welcome/CargarDocenteAdministradorSe';
$route['GCAdmin']= 'welcome/CargarColegioAdministradorSe';
$route['CCurso']= 'welcome/CargarCursoAdministrador';
$route['CColegio']= 'welcome/CargarColegioAdministrador';
$route['EliminarAlumno']= 'welcome/EliminarAlumno';
$route['EliminarProfesor']= 'welcome/EliminarProfesor';
$route['EliminarCurso']= 'welcome/EliminarCurso';
$route['ActualizarAlumno']= 'welcome/ActualizarAlumno';
$route['ActualizarProfesor']= 'welcome/ActualizarProfesor';
$route['ActualizarCurso']= 'welcome/ActualizarCurso';
$route['GA'] = 'welcome/getActividades';
$route['GVA'] = 'welcome/getVistaActividad';
$route['GRA'] = 'welcome/getRespuestasActividad';
$route['GIP'] = 'welcome/getInfoPictogramas';
$route['AA'] = 'welcome/AgregarActividad';
$route['DA'] = 'welcome/DeshabilitarActividadE';
$route['CVDP'] = 'welcome/CargarVistaDPrincipal';
$route['CVDA'] = 'welcome/CargarVistaDA';
$route['CVDR'] = 'welcome/CargarVistaDR';
$route['CVDC'] = 'welcome/CargarVistaDC';
$route['GR'] = 'welcome/GetReporteAlumnos';
$route['ER'] = 'welcome/EnviarReporte';
$route["CVAP"] = 'welcome/CargarVistaAP';
$route["CVAA"] = 'welcome/CargarVistaAA';
$route["CVAC"] = 'welcome/CargarVistaAC';
$route["GRP"] = 'welcome/GetReportesPictogramas';
$route["CVAR"] = 'welcome/CargarVistaAR';
$route["ARP"] = 'welcome/ActualizarReporte';