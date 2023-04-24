<?php

class ModeloContratos
{

    private $conexion;

    
    public function __construct($conexion)
    {

        $this->conexion = $conexion;
    }


    public function obtenerSumaMontosPorCliente($fechaInicio, $fechaFin)
    {

        $sql = "SELECT c.nombre, SUM(co.monto) as total_montos

 FROM Cliente c

 INNER JOIN Contrato co ON c.idCliente = co.idCliente

 WHERE co.fecha BETWEEN :fechaInicio AND :fechaFin

 GROUP BY c.idCliente";


        $consulta = $this->conexion->prepare($sql);

        $consulta->bindParam(':fechaInicio', $fechaInicio);

        $consulta->bindParam(':fechaFin', $fechaFin);

        $consulta->execute();


        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
