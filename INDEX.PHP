<?php
require_once ("classParqueadero.php");

$parqueadero = new Parqueadero();

 


// Agregar vehículos
$vehiculo1 = new Vehiculo('ABC123', 'Toyota', 'Rojo', 'Juan Perez', '123456', '2024-08-30 06:00:00');
$vehiculo2 = new Vehiculo('FEF456', 'Honda', 'Azul', 'Maria Perez', '789012', '2024-08-30 09:00:00');
$vehiculo3 = new Vehiculo('UII789', 'Ford', 'Verde', 'Juan Lopez', '345678', '2024-08-30 07:30:00');
$vehiculo4 = new Vehiculo('JKL012', 'Chevrolet', 'Blanco', 'Luz Ruiz', '901234', '2024-08-30 08:00:00');
$vehiculo5 = new Vehiculo('MNO345', 'Mazda', 'Morado', 'Pedro Cordoba', '567890', '2024-08-30 10:00:00');
$vehiculo6 = new Vehiculo('PQR678', 'Hyundai', 'Verde', 'Laura Martinez', '234567', '2024-08-30 11:00:00');
$vehiculo7 = new Vehiculo('STU901', 'Kia', 'Rojo', 'Jose Hernandez', '890123', '2024-08-30 12:00:00');
$vehiculo8 = new Vehiculo('VWX234', 'Nissan', 'Amarrillo', 'Karen Mejia', '456789', '2024-08-30 13:00:00');
$vehiculo9 = new Vehiculo('YZA567', 'Renault', 'Rojo', 'Sergio Angel', '678901', '2024-08-30 14:00:00');
$vehiculo10 = new Vehiculo('BCD890', 'Peugeot', 'Azul', 'Pedro Castillo', '345678', '2024-08-30 15:30:00');
$vehiculo11 = new Vehiculo('YUG123', 'Subaru', 'Gris', 'Daniela Mejia', '901234', '2024-08-30 16:00:00');
$vehiculo12 = new Vehiculo('PIJ456', 'Volkswagen', 'verde', 'Juliana Ruiz', '567890', '2024-08-30 17:00:00');
$vehiculo13 = new Vehiculo('ZLM789', 'BMW', 'rojo', 'Estefani Suarez', '234567', '2024-08-30 18:00:00');

// Agregar los vehículos al parqueadero
$parqueadero->agregarPiso($vehiculo1);
$parqueadero->agregarPiso($vehiculo2);
$parqueadero->agregarPiso($vehiculo3);
$parqueadero->agregarPiso($vehiculo4);
$parqueadero->agregarPiso($vehiculo5);
$parqueadero->agregarPiso($vehiculo6);
$parqueadero->agregarPiso($vehiculo7);
$parqueadero->agregarPiso($vehiculo8);
$parqueadero->agregarPiso($vehiculo9);
$parqueadero->agregarPiso($vehiculo10);
$parqueadero->agregarPiso($vehiculo11);
$parqueadero->agregarPiso($vehiculo12);
$parqueadero->agregarPiso($vehiculo13);


// Registrar la salida de los vehículos
$vehiculo1->registrarSalida('2024-08-30 10:00:00');
$vehiculo2->registrarSalida('2024-08-30 15:00:00');
$vehiculo3->registrarSalida('2024-08-30 10:30:00');
$vehiculo4->registrarSalida('2024-08-30 13:00:00');
$vehiculo5->registrarSalida('2024-08-30 14:00:00');
$vehiculo6->registrarSalida('2024-08-30 18:00:00');
$vehiculo7->registrarSalida('2024-08-30 15:00:00');
$vehiculo8->registrarSalida('2024-08-30 16:00:00');
$vehiculo9->registrarSalida('2024-08-30 17:00:00');
$vehiculo10->registrarSalida('2024-08-30 18:30:00');
$vehiculo11->registrarSalida('2024-08-30 19:00:00');
$vehiculo12->registrarSalida('2024-08-30 20:00:00');
$vehiculo13->registrarSalida('2024-08-30 21:00:00');

// Buscar y calcular el costo para cada vehículo
$vehiculosBuscar = [
    'ABC123',
    'UIF456',
    'GHI789',
    'JKL012',
    'MNO345',
    'PQR678',
    'STU901',
    'VWX234',
    'YZA567',
    'BCD890',
    'YUG123',
    'PIJ456',
    'ZLM789'
    
];

$parqueadero->mostrarUbicacionCosto($vehiculosBuscar)

?>