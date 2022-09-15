<?php
class Campan_m extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function pintarTodos()
    {
        $cadSQL = "SELECT * FROM campaigns ";
        $this->consultar($cadSQL);
        return $this->resultado();
    }
    public function pintarUno($id_cam)
    {
        $cadSQL = "SELECT * FROM campaigns WHERE id_camp=:id ";
        $this->consultar($cadSQL);
        $this->enlazar(":id",$id_cam);
        return $this->resultado();
    }
    public function sinEjecutar(){
        $cadSQL = "SELECT * FROM campaigns WHERE ejecutada='n' ";
        $this->consultar($cadSQL);
        return $this->resultado(); 
    }
    public function insertar($datos)
    {
        // Recibimos los datos del formulario 
        $nombre = $_POST['nombreCamp'];
        $desc = $_POST['descripcion'];
        $fecha = $_POST['fecha'];
        $titulo = $_POST['titulo'];
        $cuerpo = $_POST['cuerpo'];
       // $adj = $_POST['adjunto'];//fichero
        //$ej = 'n';
        ///falta pasar los archivos adjuntos

        $cadSQL = "INSERT INTO campaigns ( nombre,descripcion, fecha, titulo, cuerpo) VALUES (:nombre,:descripcion,:fecha, :titulo, :cuerpo)";
        $this->consultar($cadSQL);   // Preparar sentencia
       
        $this->enlazar(":nombre", $nombre);
        $this->enlazar(":descripcion", $desc);
        $this->enlazar(":fecha", $fecha);
        $this->enlazar(":titulo", $titulo);
        $this->enlazar(":cuerpo", $cuerpo);
     //   $this->enlazar(":adjunto", $adj);
      
        return $this->ejecutar();
    }
    public function insertarEnviado($datos)
    {
        // Recibimos los datos del formulario 
        $id_cam = $_POST['campan'];
        $id_des = $_POST['destino'];
        //$fecha = date('Y - m - d');
      
        // $adj = $_POST['adjunto'];//fichero
        //$ej = 'n';
        ///falta pasar los archivos adjuntos

        $cadSQL = "INSERT INTO enviados ( id_destino,id_camp) VALUES (:id_destino,:id_camp)";
        $this->consultar($cadSQL);   // Preparar sentencia

        $this->enlazar(":id_destino", $id_des);
        $this->enlazar(":id_camp", $id_cam);
        //$this->enlazar(":fecha", $fecha);
       
        //   $this->enlazar(":adjunto", $adj);

        return $this->ejecutar();
    }

}
