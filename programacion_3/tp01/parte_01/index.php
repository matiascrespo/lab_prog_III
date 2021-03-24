<?php
include_once '../parte_01/entidades/empleado.php';
include_once '../parte_01/entidades/fabrica.php';


// echo $emp1->GetNombre()."<br>";
// echo $emp1->GetSueldo()."<br>";
// echo $emp1->Hablar($idiomaVacio);
// echo $emp1->ToString();
// echo "<br>Sueldos: $".$fabrica->CalcularSueldos();


$fabrica = new Fabrica("La fabriquita");

$idiomas = array("Inglés","Italiano","Chino");
$idiomaVacio=array();

$emp1 = new Empleado("Pablo","Pérez",1111,'M',1111,15000,"Mañana");
$emp2 = new Empleado("Pedro","Iarley",2222,'M',2222,10000,"Tarde");
$emp3 = new Empleado("Bombón","Bahiano",3333,'M',3333,12000,"Tarde");

//Agrega al empleado emp1 y lo elimina inmediatamente.
$retorno=$fabrica->AgregarEmpleado($emp1);
$retorno=$fabrica->EliminarEmpleado($emp1);

//No puede eliminarlo porque no existe
$retorno=$fabrica->EliminarEmpleado($emp1);
$retorno=$fabrica->EliminarEmpleado($emp1);

//Agrega al empleado emp2.
$retorno=$fabrica->AgregarEmpleado($emp2);

//Agrega dos veces el empleado emp3 pero una lo eliminará
//ya que se encuentra repetido en la lista.
$retorno=$fabrica->AgregarEmpleado($emp3);
$retorno=$fabrica->AgregarEmpleado($emp3);


//Debería mostrar un total de 2 empleados:
//emp2 y emp3
echo $fabrica->ToString();

?>