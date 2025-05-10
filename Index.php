<?php
// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO
require_once 'Docente.php';
require_once 'Alumno.php';

$docente1 = new Docente("Roberto", "Solis", "Robles", 45, "Sistemas", "M.C.", 15);
$docente2 = new Docente("Ana", "Lopez", "Martinez", 38, "Matemáticas", "Dr.", 10);
$docente3 = new Docente("Miguel", "Martínez", "Mora", 38, "Física", "M.C.", 10);
$docente4 = new Docente("Juan", "Cruz", "Toledo", 38, "Ingles", "Dr.", 10);

$alumno1 = new Alumno("Alonso", "Lira", "Espinoza", 20, "Sistemas", 9.3, 5);
$alumno2 = new Alumno("Maria", "Gomez", "Perez", 19, "Matemáticas", 8.7, 3);
$alumno3 = new Alumno("Claudia", "Lozada", "Silva", 19, "Física", 8.7, 3);
$alumno4 = new Alumno("Luis", "Silva", "Contreras", 19, "Ingles", 8.7, 3);

echo $docente1->obtenerNombreCompleto() . "<br>";
echo $docente2->obtenerNombreCompleto() . "<br>";
echo $docente3->obtenerNombreCompleto() . "<br>";
echo $docente4->obtenerNombreCompleto() . "<br>";
echo $alumno1->obtenerNombreCompleto() . "<br>";
echo $alumno2->obtenerNombreCompleto() . "<br>";
echo $alumno3->obtenerNombreCompleto() . "<br>";
echo $alumno4->obtenerNombreCompleto() . "<br>";

?>