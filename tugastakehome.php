<?php 
date_default_timezone_set('Asia/Jakarta');

// Variabel Nama Bulan Indonesia
$bulanIndo  = array (
    1 => 'Januari',
    2 => 'Februari',
    3 => 'Maret',
    4 => 'April',
    5 => 'Mei',
    6 => 'Juni',
    7 => 'Juli',
    8 => 'Agustus',
    9 => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Desember'
);
 
// Variabel Tanggal dan Jam 
$tanggal = date ('d');
$bulan = date ('m');
$tahun = date ('Y');
$jam = date ('H - i - s');

// Variabel Tambahan
$Namakota = "Padang";
$katasatu = " Tugas ini dibuat Bulan ";
$katadua = " Tanggal ";
$katatiga = " di Kota ";
$kataempat = " pada Jam ";
 
// Menggabungkan Variabel
echo $katasatu . $bulanIndo[$bulan] . $katadua . $tahun . $katatiga . $Namakota . $kataempat . $jam;
?>

