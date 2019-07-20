<?php
$id = $_GET['id'];

require_once "conexion.php";


$consulta = "SELECT * from egresos where id='$id'";
$result = mysqli_query($conexion,$consulta);

$alumno = mysqli_fetch_row($result);

include("FPDF/fpdf.php");

class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    
    // Logo
     $this->Image('imagenes/Rio Grande2.jpg',10,8,33);
    $this->Image('imagenes/imagen2_opt.jpg',170,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,40,'COLEGIO DE ESTUDIOS CIENTIFICOS Y TECNOLOGICOS DEL ESTADO DE ZACATECAS',0,1,'C');
    // Movernos a la derecha
    $this->Cell(90); 
     // Título
    $this->Cell(10,-15,'PLANTEL:RIO GRANDE 32ETC0003W',0,1,'C');
    
    // Título
    $this->Cell(30,35,'Egreso',0,1,'C');
    // Salto de línea
    $this->Ln(1);
    // Movernos a la derecha
  

}


// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','B',14);

$pdf->Cell(40,10,'Nombre del Egreso:');
$pdf->Cell(0,10,$alumno[1],0,1,"C");
$pdf->Cell(40,10,'Detalle del Egreso:');
$pdf->Cell(0,10,$alumno[2],0,1,"C");
$pdf->Cell(40,10,'Costo:');
$pdf->Cell(0,10,$alumno[3],0,1,"C");
$pdf->Cell(40,10,'Fecha del Egreso:');
$pdf->Cell(0,10,$alumno[4],0,1,"C");


$pdf->Output();


?>
