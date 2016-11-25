<?php
require('fpdf/fpdf.php');
require('conexion.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(145, 10,'Gestion de Fincas e inmuebles', 0);
$pdf->Cell(30, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'Ventas Totales', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 8, 'N', 0);
$pdf->Cell(30, 8, 'Imagen', 0);
$pdf->Cell(30, 8, 'Nombre', 0);
$pdf->Cell(40, 8, 'Precio', 0);
$pdf->Cell(25, 8, 'Cantidad', 0);
$pdf->Cell(40, 8, 'Subtotal', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);

$compras = mysql_query("SELECT * FROM compras");
$item = 0;
while($fila = mysql_fetch_array($compras)){
	$item = $item+1;
	$pdf->Cell(10, 8,$item, 0);
	$pdf->Cell(30, 8, $fila['imagen'], 0);
	$pdf->Cell(30, 8, $fila['nombre'], 0);
	$pdf->Cell(40, 8, $fila['precio'], 0);
	$pdf->Cell(25, 8, $fila['cantidad'], 0);
    $pdf->Cell(40, 8, $fila['subtotal'], 0);
    	
	$pdf->Ln(8);
}






$pdf->Output();

?>



