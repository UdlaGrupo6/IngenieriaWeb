<?php

class ControladorContratos
{

    private $modelo;




    public function __construct($modelo)
    {

        $this->modelo = $modelo;
    }




    public function mostrarTablaMontosPorCliente()
    {

        if (isset($_POST['fechaInicio']) && isset($_POST['fechaFin'])) {

            $fechaInicio = $_POST['fechaInicio'];

            $fechaFin = $_POST['fechaFin'];




            $datos = $this->modelo->obtenerSumaMontosPorCliente($fechaInicio, $fechaFin);




            include 'vista_tabla_montos.php';
        } else {

            include 'vista_formulario_fechas.php';
        }
    }
}
