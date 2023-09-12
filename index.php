<?php
include("Conexion.php");
require('../Jonathan/fpdf/fpdf.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$sql = mysqli_query($con, "SELECT * FROM carrito");

$correo = $_POST['Correo'];
$nombre = $_POST['Nombre_C'];
$precio = $_POST['Precio_C'];



$mail = new PHPMailer(true);
$pdf = new FPDF();
$pdf->AddPage('P', 'Letter');
$pdf->SetMargins(15, 15, 15);
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Factura de Pedido', 0, 1, 'C');

while ($row = $sql->fetch_assoc()) {
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetLineWidth(0.5);
    $pdf->Cell(160, 10, 'Producto', 1, 0, 'C', true);
    $pdf->Cell(40, 10, 'Precio', 1, 1, 'C', true);

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(160, 10, $row['Nombre_C'], 1, 0, 'L');
    $pdf->Cell(40, 10, $row['Precio_C'], 1, 1, 'R');
}

$pdfdoc = $pdf->Output("Doc", "S");
$pdflisto = chunk_split(base64_encode($pdfdoc));

try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'a21310357@ceti.mx';
    $mail->Password = 'Leyendtx123';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->setFrom('a21310357@ceti.mx', 'Jonathan Rodriguez');
    $mail->addAddress($correo, 'Cliente');
    $mail->addCC('a21310357@ceti.mx');

    $mail->addStringAttachment($pdfdoc, 'Factura.pdf');

    $mail->isHTML(true);
    $mail->Subject = 'PEDIDO DE UNIVERSAL EN COMUNICACION';
    $mail->Body = 'Le enviamos su factura de su pedido.';
    $mail->send();

    echo 'Correo enviado';
} catch (Exception $e) {
    echo 'Mensaje ' . $mail->ErrorInfo;
}

$sql = mysqli_query($con, "INSERT INTO detalles select id_C, Nombre_C, CURDATE(), Precio_C from carrito");
$vaciar = mysqli_query($con, "TRUNCATE TABLE carrito");
header("location:http://localhost/Jonathan/Productos.php");
