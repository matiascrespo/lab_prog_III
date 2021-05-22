<?php

session_start();


include_once 'empleado.php';
include_once 'fabrica.php';

$btnEnviar = isset($_POST['btnEnviar']) ? $_POST['btnEnviar'] : "Error";
$dni = isset($_POST['txtDni']) ? $_POST['txtDni'] : "Error";
$apellido = isset($_POST['txtApellido']) ? $_POST['txtApellido'] : "Error";


switch ($btnEnviar) {
    case "Enviar":
        $flag = false;

        $fabrica = new Fabrica("La fabrica");
        $listaEmpleados = $fabrica->TraerTodosEmpleadosDB();
        $fabrica->SetEmpleados($listaEmpleados);

        //buscar al empleado en la DB.
        $empleadoExistente = new Empleado();
        $empleadoExistente = $fabrica->BuscarEmpleado(null,$dni);

        if(isset($empleadoExistente))
        {
            if($empleadoExistente->GetDni() == $dni && $empleadoExistente->GetApellido() == $apellido)
            {
                $_SESSION['DNIEmpleado'] = $dni;
                $flag = true;
            }
        }

        if ($flag)
            header('location: ../Front/index_ajaxPdo.php');
        else
            header('location: ../Front/login.html');
        break;
}
