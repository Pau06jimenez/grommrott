<?php
require('fpdf/fpdf.php');

$conexion = mysqli_connect("localhost", "root", "", "c_v_g");

if (!$conexion) {
    die('No se ha podido conectar a la base de datos');
}

class PDF extends FPDF {
    function Header() {
        // Título
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(0, 10, 'Reporte de Citas', 0, 1, 'C');

        // Encabezados de la tabla
        $this->SetFont('Arial', 'B', 9);
        $this->SetFillColor(51, 122, 183);
        $this->SetTextColor(255);
        $this->Cell(25, 10, 'Nombre', 1, 0, 'C', 1);
        $this->Cell(25, 10, 'Apellido', 1, 0, 'C', 1);
        $this->Cell(25, 10, 'Teléfono', 1, 0, 'C', 1);
        $this->Cell(35, 10, 'Correo', 1, 0, 'C', 1);
        $this->Cell(35, 10, 'Servicios', 1, 0, 'C', 1);
        $this->Cell(20, 10, 'Fecha', 1, 0, 'C', 1);
        $this->Cell(20, 10, 'Hora', 1, 1, 'C', 1);
    }
}

$pdf = new PDF();
$pdf->AddPage();

$query = "SELECT nombre, apellido, telefono, correo, servicios, fecha, hora FROM citas";
$result = mysqli_query($conexion, $query);

$pdf->SetFont('Arial', '', 7); // Tamaño de fuente ajustado

while ($row = mysqli_fetch_assoc($result)) {
    $pdf->SetFillColor(176, 224, 230);
    $pdf->SetTextColor(0);
    $pdf->Cell(25, 10, $row['nombre'], 1, 0, 'C');
    $pdf->Cell(25, 10, $row['apellido'], 1, 0, 'C');
    $pdf->Cell(25, 10, $row['telefono'], 1, 0, 'C');
    $pdf->Cell(35, 10, $row['correo'], 1, 0, 'C');
    $pdf->Cell(35, 10, $row['servicios'], 1, 0, 'C');
    $pdf->Cell(20, 10, $row['fecha'], 1, 0, 'C');
    $pdf->Cell(20, 10, $row['hora'], 1, 1, 'C');
}

$pdf->Output();
mysqli_close($conexion);
?>

