<?php
// Include the FPDF library
require('fpdf/fpdf.php');

// Include the database connection file
require('conexao.php');

// Create a new FPDF object
$pdf = new FPDF();
$pdf->AddPage();

// Set font for the title
$pdf->SetFont('Arial', 'B', 16);

// Title of the report
$pdf->Cell(0, 10, 'Movement Reports', 0, 1, 'C');
$pdf->Ln(10); // Line break

// SQL query with prepared statement to fetch data
$sql = "SELECT ddescription, assetNumber, numberLocation, responsible, dateCreation 
        FROM assets 
        WHERE sstatus = 2";

$stmt = $conexao->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

// Check if there are results
if ($result->num_rows > 0) {
    // Table header
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(45, 10, 'Description', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Asset Number', 1, 0, 'C');
    $pdf->Cell(40, 10, 'Number Location', 1, 0, 'C');
    $pdf->Cell(45, 10, 'Responsible', 1, 0, 'C');
    $pdf->Cell(40, 10, 'Date Creation', 1, 1, 'C');

    // Data rows
    $pdf->SetFont('Arial', '', 12);
    while ($row = $result->fetch_assoc()) {
        // Adjust cells for better data display
        $pdf->Cell(45, 10, $row['ddescription'], 1, 0, 'L');
        $pdf->Cell(30, 10, $row['assetNumber'], 1, 0, 'L');
        $pdf->Cell(40, 10, $row['numberLocation'], 1, 0, 'L');
        $pdf->Cell(45, 10, $row['responsible'], 1, 0, 'L');
        $pdf->Cell(40, 10, date('d/m/Y', strtotime($row['dateCreation'])), 1, 1, 'L');
    }
} else {
    // No results message
    $pdf->Cell(0, 10, 'No movements found.', 1, 1, 'C');
}

// Close the statement and database connection
$stmt->close();
$conexao->close();

// Add a header with additional information (e.g., current date)
$pdf->SetFont('Arial', 'I', 10);
$pdf->SetY(20); // Adjust Y position as needed
$pdf->Cell(0, 10, 'Generated on ' . date('d/m/Y'), 0, 1, 'R');

// Add the logo (adjust position (10, 10) and size (30) as needed)
$pdf->Image('../img/Dmega-logo.png', 10, 10, 30);

// Output the PDF (force download as 'Movement_Reports.pdf')
$pdf->Output('Movement_Reports.pdf', 'D');
?>
