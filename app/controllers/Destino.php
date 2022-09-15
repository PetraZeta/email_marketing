<?php

class Destino extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        $destinos_m = $this->load_model("Destinos_m");
        $datos['destinos'] = $destinos_m->pintarTodos();
        $this->load_view("header");
        $this->load_view("menu");
        $this->load_view("destinos", $datos);
        $this->load_view("footer");
    }
    public function nuevo()
    {
        $this->load_view("header");
        $this->load_view("menu");
        $this->load_view("nuevoDest");
        $this->load_view("footer");
    }
    public function insertarDestino()
    {
        // Instanciar modelo
        print_r($_POST);
        $destinos_m = $this->load_model("Destinos_m");
        // Enviar al modelo los datos para insertarlos
        $f=$destinos_m->insertar('$tipo','$nombre', '$sector', '$email', '$localidad', '$cp', '$provincia');
       
        //Volver 
        header("location:" . $_SERVER['HTTP_REFERER']);
    }
}
