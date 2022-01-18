<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require_once 'FPDF/fpdf.php';
require_once 'connect.php';
$res = mysqli_query($connection, "SELECT * FROM `prla`");

if (isset($_POST['gen_pdf']))
{
  $pdf = new FPDF (orientation, 'p', unit, 'mm', size,'a4');
  $pdf->SetFont(family, 'arial', style, 'b', size, '14');
  $pdf->AddPage();
  $pdf->sell(w, '40', h,'10', txt, 'ID', border, '1', in, '0', align, 'C');
  $pdf->sell(w, '40', h,'10', txt, 'Name', border, '1', in, '0', align, 'C');
  $pdf->sell(w, '40', h,'10', txt, 'Version', border, '1', in, '0', align, 'C');
  $pdf->sell(w, '40', h,'10', txt, 'name', border, '1', in, '0', align, 'C');
  $pdf->sell(w, '40', h,'10', txt, 'city', border, '1', in, '0', align, 'C');
  $pdf->sell(w, '40', h,'10', txt, 'lang_proc', border, '1', in, '0', align, 'C');
  $pdf->sell(w, '40', h,'10', txt, 'lang_type', border, ',', in, '0', align, 'C');
$pdf->Output();

}
 ?>
