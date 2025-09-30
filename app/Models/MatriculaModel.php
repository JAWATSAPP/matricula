<?php

namespace App\Models;
use CodeIgniter\Model;



class MatriculaModel extends Model
{
    public function listar_clientes()
    {
        //CREAMOS LA CONSULTA SQL
    //    $sqlJoseconsultadoDB = "SELECT * FROM matricula";
    //TAMBIEN SE PUEDE HACER ASI  Y  CAMBIAR NOMBRE  A NOMBRE_ALUMNO Y  EN  DBVEAVER
    $sqlJoseconsultadoDB = "select id_matricula, nombre as Nombre_alumno, ape_paterno, ape_materno, estado  from matricula";

       //EJECUTAMOS LA CONSULTA
       $query = $this->db->query($sqlJoseconsultadoDB);

 //DEVOLVEMOS EL RESULTADO- RETORNAMOS UN ARRAY DE OBJETOS
       return $query->getresult();
    }
    
}
