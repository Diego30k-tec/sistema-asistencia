<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Asistencia.php';

// Controlador para el módulo de empleados.
class AsistenciasController extends Controller{
    //Método por defecto
    public function index(): void{
        //Mientras que no inicio sesion - que lo envie al login
        if (!isset($_SESSION['usuario'])) {
            header("Location: " . BASE_URL . "/login");
            exit(); //ahi muere todo(precaucion)
        }


        //Instanciamos el objeto de la clase ASISTENCIA;
        $modelo = new Asistencia();
        $variable_asistencias = $modelo->obtenerTodo();
        $this->view('asistencias/reportes',[
            'usuario' => $_SESSION['usuario'],
            'asistencias'=>$variable_asistencias
        ]);
    }

}