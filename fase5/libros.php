<?php
class Libro
{
    private $autor;
    private $titulo;
    private $paginas;
    public function __construct($tit, $aut, $pag){
        $this->titulo = $tit;
        $this->paginas = $pag;
        $this->autor = $aut;
    }
    function setAutor($aut)
    {
        $this -> autor = $aut;
    }
    function setTitulo($tit)
    {
        $this -> titulo = $tit;
    }
    function setPaginas($pag)
    {
        $this -> paginas = $pag;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getPaginas(){
        return $this->paginas;
    }
    public function mostratLibro(){
    echo "\n El libro ".$this->titulo;    
    echo "Del autor ".$this->autor;    
    echo "Tiene ".$this->paginas. " paginas.";    
    }
    public function comparar($libro1,$libro2){
        if ($libro1->getPaginas() > $libro2->getPaginas()) {
            echo $libro1->getTitulo()." tiene mas paginas";
        } elseif ($libro2->getPaginas() > $libro1->getPaginas()) {
            echo $libro2->getTitulo()." tiene mas paginas";
        } else {
            echo "ambos libros tienen las mismas paginas";
        }
    }
}


?>