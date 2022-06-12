<?php

require "conexion.php";
require "plantilla.php";


    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 15);

    $pdf->Cell(10, 10, 'ID', 1, 0, 'C' );
    $pdf->Cell(30, 10, 'Nombre', 1, 0, 'C' );
    $pdf->Cell(30, 10, 'Apellido', 1, 0, 'C' );
    $pdf->Cell(20, 10, 'Grado', 1, 0, 'C' );
    $pdf->Cell(30, 10, 'Seccion', 1, 0, 'C' );
    $pdf->Cell(20, 10, 'Nota', 1, 0, 'C' );
    $pdf->Cell(50, 10, 'Observaciones', 1, 0, 'C' );


    $pdf->Output();

?>
