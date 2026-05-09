<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Empleado.php';

// Controlador para el módulo de empleados.
class EmpleadosController extends Controller{
    //Método por defecto
    public function index(): void{
        //Mientras que no inicio sesion - que lo envie al login
        if (!isset($_SESSION['usuario'])) {
            header("Location: " . BASE_URL . "/login");
            exit(); //ahi muere todo(precaucion)
        }


        //Instanciamos el objeto de la clase EMPLEADO;
        $modelo = new Empleado();
        $variable_empleados = $modelo->obtenerTodo();
        $this->view('empleados/reportes',[
            'usuario' => $_SESSION['usuario'],
            'empleados'=>$variable_empleados
        ]);
    }

}