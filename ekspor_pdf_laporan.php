<?php 
    require ("./vendor/autoload.php");    // load file autoload.php dari composer
    require ("./config.php");            // load konfigurasi untuk koneksi ke DB

    use Dompdf\Dompdf;                  // panggil referensi namespace dari library Dompdf
    use Dompdf\Options;

    $html = '<html><center><h3>Daftar Transaksi Peminjaman Barang SMK Negeri 1 Turen</h3></center><hr/><br/>';
    $html .= '<table width="100%" border="1" cellspacing="0" cellpadding="2">
                <thead>
                    <tr>
                        <th >No</td>
                        <th>ID Transaksi</th>
                        <th>ID Barang</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>';
    $nomor = 1; 
    $query = "select * from transaksi"; 
    $q_tampil_laporan = mysqli_query($conn, $query); 

    if(mysqli_num_rows($q_tampil_laporan) > 0) { 
        // looping semua data pada tabel tbbuku 
        while($r_tampil_laporan=mysqli_fetch_array($q_tampil_laporan)) { 
            
            $html .= '<tr>
                        <td>'.$nomor.'</td>
                        <td>'.$r_tampil_laporan['IdTransaksi'].'</td>
                        <td>'.$r_tampil_laporan['IdBarang'].'</td>
                        <td>'.$r_tampil_laporan['Nama'].'</td>
                        <td>'.$r_tampil_laporan['SwKelas'].'</td>
                        <td>'.$r_tampil_laporan['BrgNama'].'</td>
                        <td>'.$r_tampil_laporan['TglPinjam'].'</td>
                        <td>'.$r_tampil_laporan['TglKembali'].'</td>
                        <td>'.$r_tampil_laporan['status'].'</td>
                    </tr>';  
                    $nomor++; 
        } // end looping 
    } else {
            $html .= '<tr><td colspan="4" align="center">Tidak Ada Data</td></tr>';
    }         
            
    $html .= '</tbody></html>'; 
    // echo $html;

    $dompdf = new Dompdf();                         // instansiasi class Dompdf
    $dompdf->set_option('isRemoteEnabled', TRUE);
    $dompdf->loadHtml($html);                       // isi konten (format HTML) untuk dokumen pdf
    $dompdf->setPaper('a4','landscape');            // set ukuran dan orientasi dokumen pdf
    $dompdf->render();                              // vender kode HTML menjadi pdf
    $dompdf->stream('data_Laporan_Transaksi_Peminjaman_Barang.pdf'); // stream pdf ke browser
?>       
    
