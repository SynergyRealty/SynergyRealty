<?php

    include 'dbconnect.php';
    include "fpdf186/fpdf186/fpdf.php";

    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage();

    $pdf->SetFont('Times', 'B', 13);
    $pdf->Cell(200, 10, 'PAYMENT VOUCHER', 0, 0, 'C');

    $pdf->Cell(10, 15, '', 0, 1);
    $pdf->SetFont('Times', 'B', '9');

    $pdf->Cell(10, 7, 'No.', 1, 0, 'C');
    $pdf->Cell(100, 7, 'Buyer', 1, 0, 'C');
    $pdf->Cell(50, 7, 'Project', 1, 0, 'C');
    $pdf->Cell(20, 7, 'Amount', 1, 0, 'C');

    $pdf->Cell(10, 7, '', 0, 1);
    $pdf->SetFont('Arial', '', 10);

    $no = 1;
    $sql = "SELECT * FROM payment_vouchers";
    $data = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($data)){
        $pdf->Cell(10, 6, $no++, 1, 0, 'C');
        $pdf->Cell(100, 6, $row["pv_buyer"], 1, 0, 'C');
        $pdf->Cell(50, 6, $row["pv_project"], 1, 0, 'C');
        $pdf->Cell(20, 6, $row["pv_amount"], 1, 0, 'C');
    }

    $pdf->Output();
?>