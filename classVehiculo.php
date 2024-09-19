<?php

class Vehiculo {

    protected $Placa;
    protected $Marca;
    protected $Color;
    protected $NombreCliente;
    protected $DocumentoCliente;
    protected $HoraIngreso;
    protected $HoraSalida;


    public function __construct(string $Placa, $Marca, $Color, $NombreCliente, $DocumentoCliente, $HoraIngreso){
        $this->placa = $Placa;
        $this->marca = $Marca;
        $this->color = $Color;
        $this->nombreCliente = $NombreCliente;
        $this->documentoCliente = $DocumentoCliente;
        $this->HoraIngreso = $HoraIngreso;
        $this->HoraSalida = null;      
    }


    public function registrarSalida($HoraSalida) {
        $this->HoraSalida = $HoraSalida;
    }

    public function calcularCosto() {
       
        if ($this->HoraSalida === null) {
            return 0; 
        }

        $horas = (strtotime($this->HoraSalida) - strtotime($this->HoraIngreso)) / 3600;
        return round($horas) * 2; 
    }

    public function getInfoVehiculo(){
        $arrVehiculo = [
            "Placa" => $this->placa,
            "Marca" => $this->marca,
            "Color" => $this->color,
            "Nombre de Cliente" => $this->nombreCliente,
            "Documento del Cliente" => $this->documentoCliente,
            "Hora de Ingreso" => $this->HoraIngreso,
            "Hora de Salida" => $this->HoraSalida
        ];
        
        return $arrVehiculo;
      
    }
    public function getImprimirInfoVehiculo() {
        $arrVehiculo = $this->getInfoVehiculo();
    
        foreach ($arrVehiculo as $atributo => $valor) {
            echo "<b><p>$atributo:</p></b>";
            echo "<p>$valor</p>";
           
        }
    }

    public function getPlaca() {
        return $this->placa; 
        }

}



?>