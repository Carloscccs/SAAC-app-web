<?php
class Modelo extends CI_Model{
    function consultaUsuario($usuario,$clave){
        $this->db->where('rut',$usuario);
        $this->db->where('clave',$clave);
        return $this->db->get('acceso');
        echo "$usuario.$clave";
    }
    function ingresarPersonal($nombre,$rut,$apellidos,$fecha_nacimiento,$direccion,$telefono,$email,$patente,$fonasa,$afp,$categoria,$hijos,$tipo_contrato,$fecha_inicio,$fecha_termino,$estado,$causal){
     $data = array(
     				"nombre"=>$nombre,
     				"rut"=>$rut,
     				"apellidos"=>$apellidos,
     				"fecha_nacimiento"=>$fecha_nacimiento,
     				"direccion"=>$direccion,
     				"telefono"=>$telefono,
     				"email"=>$email,
     				"patente"=>$patente,
     				"fonasa"=>$fonasa,
     				"afp"=>$afp,
     				"categoria"=>$categoria,
     				"hijos"=>$hijos,
     				"tipo_contrato"=>$tipo_contrato,
     				"fecha_inicio"=>$fecha_inicio,
     				"fecha_termino"=>$fecha_termino,
     				"estado"=>$estado,
     				"causal"=>$causal
    );
        $this->db->select("*");
		$this->db->where("rut",$rut);
		$datos = $this->db->get("personal");
		if($datos->num_rows()>0){
			
				return $datos->num_rows();
			
		}else{
			$this->db->insert("personal",$data);
			return $datos->num_rows();
		}

    }
}
?>
