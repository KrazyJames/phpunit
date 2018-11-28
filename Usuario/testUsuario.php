<?php
require "usuario.php";
use PHPUnit\Framework\TestCase;
class nombreDeUsuarioTest extends TestCase{
    public function testComprobarNombreUsuario(){
        $usuario = new usuario;
        $usuario->nombre= "Jaime";
        $usuario->apellido= "Escobar";
        $nombre = "Jaime Escobar";
        $this->assertEquals($nombre, $usuario->obtenerNombreCompleto());
    }
    public function testNombreUsuarioVacio(){
        $usuario = new usuario;
        $usuario->nombre= "Jaime";
        $usuario->apellido= "Escobar";
        $this->assertNotEquals("",trim($usuario->obtenerNombreCompleto()));
    }
    public function testNombreUsuarioQueEmpieceConLasPrimerasTresLetrasDeTuNombre(){
        $usuario = new usuario;
        $usuario->nombre= "Jaime";
        $usuario->apellido= "Escobar";
        $nombre = "Jaime Escobar";
        $this->assertStringStartsWith(substr($nombre,0,3),$usuario->obtenerNombreCompleto());
    }
    public function testNombreUsuarioQueTermineConLasUltimasTresLetrasDeTuNombre(){
        $usuario = new usuario;
        $usuario->nombre= "Jaime";
        $usuario->apellido= "Escobar";
        $nombre = "Jaime Escobar";
        $this->assertStringEndsWith(substr($nombre,-3),$usuario->obtenerNombreCompleto());
    }
}