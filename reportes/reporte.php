<?php

require "conexion.php";
require "plantilla.php";

if (!empty($_GET)) {

    $id = mysqli_escape_string($mysqli, $_GET['id']);

    $sql = "SELECT * FROM calificaciones  WHERE (id_evaluacion LIKE '%$id%')";
    $resultado = $mysqli->query($sql);

    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 9);

    $pdf->Cell(10, 5, "Id", 1, 0, "C");
    $pdf->Cell(40, 5, "Nombres", 1, 0, "C");
    $pdf->Cell(40, 5, "Apellidos", 1, 0, "C");
    $pdf->Cell(40, 5, "Grado", 1, 0, "C");
    $pdf->Cell(30, 5, "Seccion", 1, 0, "C");
    $pdf->Cell(30, 5, "calificacion", 1, 1, "C");

    $pdf->SetFont("Arial", "", 9);

    while ($fila = $resultado->fetch_assoc()) {
        $pdf->Cell(10, 5, $fila['id'], 1, 0, "C");
        $pdf->Cell(40, 5, utf8_decode($fila['nombres']), 1, 0, "C");
        $pdf->Cell(40, 5, $fila['apellidos'], 1, 0, "C");
        $pdf->Cell(40, 5, $fila['grado'], 1, 0, "C");
        $pdf->Cell(30, 5, $fila['seccion'], 1, 0, "C");
        $pdf->Cell(30, 5, $fila['calificacion'], 1, 1, "C");
    }

    $pdf->Output();
}
