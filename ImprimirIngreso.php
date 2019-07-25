<?php
    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

    }else{
        echo "<h1>Por Favor Inicia Sesión<h1>";
        echo "<script> setTimeout(function () { window.location.href='Login.php'; },3000); </script>";
        exit;
    }
?>
<?php
$id = $_GET['id'];

require_once "conexion.php";
$sql = "SELECT ingresos.id, ingresos.nombre, ingresos.apellido_paterno, ingresos.apellido_materno, ingresos.fecha_ingreso, ingresos.grado, ingresos.grupo, ingresos.semestre, ingresos.carrera, ingresos_conceptos.concepto, ingresos_conceptos.costo
    FROM ingresos JOIN ingresos_conceptos ON ingresos.concepto = ingresos_conceptos.id WHERE ingresos.id = $id";
$result = $conexion->query($sql);
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
    $this->Cell(30,35,'INGRESO',0,1,'C');
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

$pdf->Cell(40,10,'Nombre Completo:');
$pdf->Cell(0,10,$alumno[2]." ".$alumno[3]." ".$alumno[1],0,1,"C");
$pdf->Cell(40,10,'Grado y Grupo:');
$pdf->Cell(0,10,$alumno[5]." ".$alumno[6],0,1,"C");
$pdf->Cell(40,10,'Semestre:');
$pdf->Cell(0,10,$alumno[7],0,1,"C");
$pdf->Cell(40,10,'Carrera:');
$pdf->Cell(0,10,$alumno[8],0,1,"C");
$pdf->Cell(40,10,'Concepto:');
$pdf->Cell(0,10,$alumno[9],0,1,"C");
$pdf->Cell(40,10,'Costo:');
$pdf->Cell(0,10," $".$alumno[10],0,1,"C");
$pdf->Cell(40,10,'Fecha de Pago:');
$pdf->Cell(0,10,$alumno[4],0,1,"C");
$pdf->Cell(0,0,"",50,1);

$pdf->Output();


?>
