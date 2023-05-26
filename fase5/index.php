    <?php
    echo ("Libro 1");
    $tit = readline("Titulo: ");
    $aut = readline("Autor: ");
    $pag = readline("Paginas: ");
    echo ("\n libro dos");
    $tit1 = readline("Titulo: ");
    $aut1 = readline("Autor: ");
    $pag1 = readline("Paginas: ");
    require_once('libros.php');
    $libro1 = new Libro($tit,$aut,$pag);
    $libro2 = new Libro($tit1,$aut1,$pag1);
    $libro1->mostratLibro();
    $libro2->mostratLibro();
    $libro1->comparar($libro1,$libro2);
    $libro2->comparar($libro1,$libro2);
    ?>