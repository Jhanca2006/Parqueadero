<?php

require_once ('classPisos.php');

class Parqueadero {
    protected $pisos = [];

    public function __construct() {
       
        for ($i = 1; $i <= 4; $i++) {
            $this->pisos[$i] = new Piso($i);
        }
    }

    
    public function agregarPiso($vehiculo) {
        foreach ($this->pisos as $piso) {
            if ($piso->agregarPuesto($vehiculo)) {
                return true;
            }
        }
        return false; 
    }

    
    public function buscarPiso($placa) {
        foreach ($this->pisos as $piso) {
            $resultado = $piso->buscarPuesto($placa);
            if ($resultado !== null) {
                return $resultado;
            }
        }
        return null; 
    }
    public function mostrarUbicacionCosto($vehiculosBuscar){
        foreach ($vehiculosBuscar as $placa) {
            $busqueda = $this->buscarPiso($placa);
            
            if ($busqueda !== null) {

                echo "<b>Ubicacion:</b> <br>Piso: " . $busqueda['piso'] . "<br>
                 Puesto: " . $busqueda['puesto'] . "<br>";
        
                echo "<b>Costo del parqueo:</b> $" . $busqueda['vehiculo']->calcularCosto() . " USD<br><br><hr>";
        
              
            } else {
                echo "Vehículo no encontrado.<br><br><hr>";
            }
    }

}
}
   
?>