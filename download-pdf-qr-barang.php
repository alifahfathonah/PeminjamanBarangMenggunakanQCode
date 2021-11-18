<?php
//library phpqrcode
include "phpqrcode/qrlib.php";
include 'config.php';
 
//library mpdf
//Jika download plugin mpdf tanpa composer (versi lama)
// define('_MPDF_PATH','mpdf/');
// include(_MPDF_PATH . "mpdf.php");
// $mpdf=new mPDF('utf-8', 'A4', 11, 'Georgia');
 
//Jika download plugin mpdf dengan composer (versi baru)
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
 
//setting dan nama file pdf
$nama_dokumen='qr-code-barang';
 
ob_start();
?>
<html>
<head>
</head>
<body>
    <?php
        $no = 1;
        $query = "SELECT * FROM barang";
        $arsip1 = $conn->prepare($query);
        $arsip1->execute();
        $res1 = $arsip1->get_result();
        while ($row = $res1->fetch_assoc()) {
            $IdBarang = $row['IdBarang'];
            $namafile = $IdBarang.".png";
    ?>
        <img src="temp/<?php echo $namafile; ?>" width="100px">
        <p><?php echo $IdBarang; ?></p>
    <?php } ?>
</body>
</html>
<?php
mysqli_close($conn);
$html = ob_get_contents();
ob_end_clean();
 
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("".$nama_dokumen.".pdf" ,'D');
?>