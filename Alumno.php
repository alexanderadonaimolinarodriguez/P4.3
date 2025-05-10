<?php
// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO
require_once 'UsuarioCorreo.php';

class Alumno extends UsuarioCorreo {
    private $promedio;
    private $semestre;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento, $promedio, $semestre) {
        parent::__construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento);
        $this->promedio = $promedio;
        $this->semestre = $semestre;
    }

    public function set_Promedio($nuevoPromedio) {
        $this->promedio = $nuevoPromedio;
    }

    public function set_Semestre($nuevoSemestre) {
        $this->semestre = $nuevoSemestre;
    }

    public function obtenerNombreCompleto() {
        return "Alumno" . $this->get_Nombre() . " " . $this->get_ApellidoPaterno() . " " . $this->get_ApellidoMaterno();
    }
}
?>