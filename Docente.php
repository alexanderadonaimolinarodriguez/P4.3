<?php
// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO
require_once 'UsuarioCorreo.php';

class Docente extends UsuarioCorreo {
    private $gradoAcademico;
    private $antiguedad;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento, $gradoAcademico, $antiguedad) {
        parent::__construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento);
        $this->gradoAcademico = $gradoAcademico;
        $this->antiguedad = $antiguedad;
    }

    public function set_GradoAcademico($nuevoGrado) {
        $this->gradoAcademico = $nuevoGrado;
    }

    public function set_Antiguedad($nuevaAntiguedad) {
        $this->antiguedad = $nuevaAntiguedad;
    }

    public function obtenerNombreCompleto() {
        return "{$this->gradoAcademico} " . $this->get_Nombre() . " " . $this->get_ApellidoPaterno() . " " . $this->get_ApellidoMaterno();
    }
}

?>