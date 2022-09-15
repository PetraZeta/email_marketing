<?php

class Inicio extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $campa_m = $this->load_model("Campan_m");
        $datos['campa'] = $campa_m->pintarTodos();
        $datos['campaSin'] = $campa_m->sinEjecutar();

        $this->load_view("header");
        $this->load_view("menu");
        $this->load_view("inicio",$datos);
        $this->load_view("sinEjecutar", $datos);

        $this->load_view("footer");
    }

}
