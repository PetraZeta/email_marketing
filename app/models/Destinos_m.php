<?php
class Destinos_m extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function pintarTodos()
    {
        $cadSQL = "SELECT * FROM destinatarios ";
        $this->consultar($cadSQL);
        return $this->resultado();
    }
    public function pintarUno($id_des)
    {
        $cadSQL = "SELECT * FROM destinatarios WHERE id=:id ";
        $this->consultar($cadSQL);
        $this->enlazar(":id", $id_des);
        return $this->resultado();
    }
    public function insertar($datos)
    {
        // Recibimos los datos del formulario 
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $sector = $_POST['sector'];
        $email = $_POST['email'];
        $localidad = $_POST['localidad'];
        $cp = $_POST['cp'];
        $provincia = $_POST['provincia'];

        $cadSQL = "INSERT INTO destinatarios (tipo, nombre, sector, email, localidad,cp, provincia) VALUES (:tipo,:nombre,:sector, :email, :localidad,:cp, :provincia )";
        $this->consultar($cadSQL);   // Preparar sentencia
        $this->enlazar(":tipo", $tipo);
        $this->enlazar(":nombre", $nombre);
        $this->enlazar(":sector", $sector);
        $this->enlazar(":email", $email);
        $this->enlazar(":localidad", $localidad);
        $this->enlazar(":cp", $cp);
        $this->enlazar(":provincia", $provincia);
        return $this->ejecutar();
    }
}



