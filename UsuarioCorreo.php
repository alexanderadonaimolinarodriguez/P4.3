<?php
// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO
abstract class UsuarioCorreo {
    private static $ContadorID = 1;
    private $id;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $edad;
    private $departamento;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento) {
        $this->id = self::$ContadorID++;
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->edad = $edad;
        $this->departamento = $departamento;
    }

    public function set_Nombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    public function set_Edad($nuevaEdad) {
        $this->edad = $nuevaEdad;
    }

    public function set_Departamento($nuevoDepartamento) {
        $this->departamento = $nuevoDepartamento;
    }

    public function get_ID() {
        return $this->id;
    }

    public function get_Edad() {
        return $this->edad;
    }

    public function get_Departamento() {
        return $this->departamento;
    }

    public function get_Nombre() {
        return $this->nombre;
    }

    public function get_ApellidoPaterno() {
        return $this->apellidoPaterno;
    }

    public function get_ApellidoMaterno() {
        return $this->apellidoMaterno;
    }

    // Método abstracto para forzar que las clases hijas lo implementen
    abstract public function obtenerNombreCompleto();
}
?>