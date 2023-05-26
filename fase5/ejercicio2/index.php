<?php
include_once "agenda.php";

$agenda = new Agenda();

$contacto1 = new Contacto("Juan Perez", "1234567890");
$agenda->registrarContacto($contacto1);

$contacto2 = new Contacto("Maria Garcia", "0987654321");
$agenda->registrarContacto($contacto2);

echo "Lista de contactos:\n";
$agenda->listarContactos();

echo "\nBuscar contacto 'Juan Perez':\n";
$agenda->buscarContacto("Juan Perez");

echo "\nBuscar contacto 'Pedro Martinez':\n";
$agenda->buscarContacto("Pedro Martinez");

?>