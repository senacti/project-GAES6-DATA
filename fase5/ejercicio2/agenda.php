<?php 
include_once "Contacto.php";

class Agenda {
    private $contactos = [];

    public function registrarContacto($contacto) {
        array_push($this->contactos, $contacto);
    }

    public function listarContactos() {
        foreach ($this->contactos as $contacto) {
            echo $contacto->getNombre() . " - " . $contacto->getNumero() . "\n";
        }
    }

    public function buscarContacto($nombre) {
        foreach ($this->contactos as $contacto) {
            if ($contacto->getNombre() === $nombre) {
                echo $contacto->getNumero() . "\n";
                return;
            }
        }
        echo "No se encontró el contacto\n";
    }
}


?>