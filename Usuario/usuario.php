<?php
class usuario
{
    public $nombre;
    public $apellido;

    public function obtenerNombreCompleto(){
        return "$this->nombre $this->apellido";
    }
}